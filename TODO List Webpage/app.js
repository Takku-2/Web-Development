//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");
// const date = require(__dirname + "/date.js");
const mongoose = require("mongoose");
const app = express();
const _ = require("lodash");
app.set("view engine", "ejs");

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static("public"));
mongoose.connect("mongodb://localhost:27017/todolistDB", {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});
mongoose.set("useFindAndModify", false);
const itemsSchema = {
  name: String,
};

const Item = mongoose.model("Item", itemsSchema);
const item1 = new Item({
  name: "Welcome to the todolist!",
});
const item2 = new Item({
  name: "Hit the + button to add a new item",
});
const item3 = new Item({
  name: "<-- Hit this to delete the item",
});
const defaultItems = [item1, item2, item3];
const listSchema = {
  name: String,
  items: [itemsSchema],
};
const List = mongoose.model("List", listSchema);
function insertd() {
  Item.insertMany(defaultItems, function (err) {
    if (err) {
      console.log(err);
    } else {
      console.log("Successfully added the default items");
    }
  });
}
app.get("/", function (req, res) {
  // const day = date.getDate();
  Item.find({}, function (err, foundItems) {
    if (err) {
      console.log(err);
    } else {
      if (foundItems.length === 0) {
        insertd();
        res.redirect("/");
      } else {
        res.render("list", { listTitle: "Today", newListItems: foundItems });
      }
    }
  });
});

app.post("/", function (req, res) {
  const itemName = req.body.newItem;
  const listName = req.body.list;
  const item = new Item({ name: itemName });
  if (listName === "Today") {
    item.save();
    res.redirect("/");
  } else {
    List.findOne({ name: listName }, function (err, foundList) {
      if (err) {
        console.log(err);
      } else {
        foundList.items.push(item);
        foundList.save();
        res.redirect("/" + listName);
      }
    });
  }

  // if (req.body.list === "Work List") {
  //   workItems.push(item);
  //   res.redirect("/work");
  // } else {
  //   items.push(item);
  //   res.redirect("/");
  // }
});
app.post("/delete", function (req, res) {
  const checkedItemId = req.body.checkbox;
  const listName = req.body.listName;
  if (listName === "Today") {
    Item.findByIdAndRemove(checkedItemId, function (err) {
      if (err) {
        console.log(err);
      } else {
        console.log("Item successfully deleted");
        res.redirect("/");
      }
    });
  } else {
    List.findOneAndUpdate(
      { name: listName },
      { $pull: { items: { _id: checkedItemId } } },
      function (err, foundList) {
        if (!err) {
          res.redirect("/" + listName);
        }
      }
    );
  }
});
app.get("/:customname", function (req, res) {
  const customName = _.capitalize(req.params.customname);
  List.findOne({ name: customName }, function (err, foundList) {
    if (!err) {
      if (!foundList) {
        const list = new List({ name: customName, items: defaultItems });
        list.save(() => res.redirect("/" + customName));
      } else {
        res.render("list", {
          listTitle: foundList.name,
          newListItems: foundList.items,
        });
      }
    }
  });
});
// app.get("/work", function (req, res) {
//   res.render("list", { listTitle: "Work List", newListItems: workItems });
// });

app.get("/about", function (req, res) {
  res.render("about");
});
let port = process.env.PORT;
if (port == null || port == "") {
  port = 3000;
}
app.listen(port, function () {
  console.log("Server has started successfully");
});
