function signin() {
  var x = document.getElementById("Sign_In");
  x.style.left = "-400px";
}
function log() {
  var username = document.forms["name"]["pass"].value;
  if (username == null || username == "") {
    alert("Please enter> the username. Can’t be blank or empty !!!");
    return false;
 }

}
function IsEmpty() {

  if (document.form.name.value == "") {
    alert("empty");
  }
  return;
}