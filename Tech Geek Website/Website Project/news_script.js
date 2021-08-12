function myFunction() {
  if (document.body.style.backgroundColor == "grey") {
    document.body.style.backgroundColor = " #E4F9F5";
    document.body.style.color = "black";
    document.getElementById("change").style.backgroundColor = "white";
    document.getElementById("change1").style.backgroundColor = "white";
    document.getElementById("change2").style.backgroundColor = "white";
    document.getElementById("change3").style.backgroundColor = "white";
    document.getElementById("change4").style.backgroundColor = "white";
    document.getElementById("headmain").style.color = "black";
    document.getElementById("hr_change").style.borderColor = "grey";
    document.getElementById("hr_change1").style.borderColor = "grey";
    document.getElementById("hr_change2").style.borderColor = "grey";
    document.getElementById("hr_change3").style.borderColor = "grey";
    document.getElementById("hr_change4").style.borderColor = "grey";

  } else {
    document.body.style.backgroundColor = "grey";
    document.body.style.color = "white";
    document.getElementById("headmain").style.color = "black";
    document.getElementById("change").style.backgroundColor = "black";
    document.getElementById("change1").style.backgroundColor = "black";
    document.getElementById("change2").style.backgroundColor = "black";
    document.getElementById("change3").style.backgroundColor = "black";
    document.getElementById("change4").style.backgroundColor = "black";
    document.getElementById("hr_change").style.borderColor = "yellow";
    document.getElementById("hr_change1").style.borderColor = "yellow";
    document.getElementById("hr_change2").style.borderColor = "yellow";
    document.getElementById("hr_change3").style.borderColor = "yellow";
    document.getElementById("hr_change4").style.borderColor = "yellow";
  }
  }


var modal = document.getElementById('myModal');


var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       img01.className = "modal-content";
     }, 400);

 }
var modal2 = document.getElementById('myModal2');
var img2 = document.getElementById('myImg2');
var modalImg2 = document.getElementById("img02");
img2.onclick = function(){
    modal2.style.display = "block";
    modalImg2.src = this.src;
    modalImg2.alt = this.alt;
    captionText2.innerHTML = this.alt;
}
 modal2.onclick = function() {
     img02.className += " out";
     setTimeout(function() {
        modal2.style.display = "none";
        img02.className = "modal-content";
      }, 400);

  }
  var modal3 = document.getElementById('myModal3');
  var img3 = document.getElementById('myImg3');
  var modalImg3 = document.getElementById("img03");
  img3.onclick = function(){
      modal3.style.display = "block";
      modalImg3.src = this.src;
      modalImg3.alt = this.alt;
      captionText3.innerHTML = this.alt;
  }
   modal3.onclick = function() {
       img03.className += " out";
       setTimeout(function() {
          modal3.style.display = "none";
          img03.className = "modal-content";
        }, 400);

    }
    var modal4 = document.getElementById('myModal4');
    var img4 = document.getElementById('myImg4');
    var modalImg4 = document.getElementById("img04");
    img4.onclick = function(){
        modal4.style.display = "block";
        modalImg4.src = this.src;
        modalImg4.alt = this.alt;
        captionText4.innerHTML = this.alt;
    }
     modal4.onclick = function() {
         img04.className += " out";
         setTimeout(function() {
            modal4.style.display = "none";
            img04.className = "modal-content";
          }, 400);

      }
      var modal5 = document.getElementById('myModal5');
      var img5 = document.getElementById('myImg5');
      var modalImg5 = document.getElementById("img05");
      img5.onclick = function(){
          modal5.style.display = "block";
          modalImg5.src = this.src;
          modalImg5.alt = this.alt;
          captionText5.innerHTML = this.alt;
      }
       modal5.onclick = function() {
           img05.className += " out";
           setTimeout(function() {
              modal5.style.display = "none";
              img05.className = "modal-content";
            }, 400);

        }
        const backToTopButton = document.querySelector("#back-to-top-btn");

        window.addEventListener("scroll", scrollFunction);

        function scrollFunction() {
          if (window.pageYOffset > 300) { // Show backToTopButton
            if(!backToTopButton.classList.contains("btnEntrance")) {
              backToTopButton.classList.remove("btnExit");
              backToTopButton.classList.add("btnEntrance");
              backToTopButton.style.display = "block";
            }
          }
          else { // Hide backToTopButton
            if(backToTopButton.classList.contains("btnEntrance")) {
              backToTopButton.classList.remove("btnEntrance");
              backToTopButton.classList.add("btnExit");
              setTimeout(function() {
                backToTopButton.style.display = "none";
              }, 250);
            }
          }
        }

        backToTopButton.addEventListener("click", smoothScrollBackToTop);

        // function backToTop() {
        //   window.scrollTo(0, 0);
        // }

        function smoothScrollBackToTop() {
          const targetPosition = 0;
          const startPosition = window.pageYOffset;
          const distance = targetPosition - startPosition;
          const duration = 750;
          let start = null;

          window.requestAnimationFrame(step);

          function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
          }
        }

        function easeInOutCubic(t, b, c, d) {
        	t /= d/2;
        	if (t < 1) return c/2*t*t*t + b;
        	t -= 2;
        	return c/2*(t*t*t + 2) + b;
        };
