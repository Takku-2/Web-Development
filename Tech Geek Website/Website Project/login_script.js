const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#passid');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
function formValidation() {

    var uid2 = document.getElementById("username");
    var passid = document.getElementById("passid");
    if (userid_validation(uid2)) {
        if (passid_validation(passid)) {
            alert("Your Form has been submitted");
            return true;
        }
    }
    return false;
}
function userid_validation(uid) {
    var uid_len = uid.value.length;
    if (uid_len == 0) {
        alert("Username Should Not Be Empty");
        uid.focus();
        return false;
    }
    return true;
}
function passid_validation(passid) {
    var passid_len = passid.value.length;
    if (passid_len == 0) {
        alert("Password should not be empty");
        passid.focus();
        return false;
    }
    return true;
}
