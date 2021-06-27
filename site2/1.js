function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["pass"].value;
  var regx_mail = /[a-zA-Z0-9.-]+@(bmsce\.ac\.in)/
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if(y.length<8){
    alert("Password too short");
    return false;
  }
  if(regx_mail.test(x)){
    return true;
  }
  else{
    alert("Email not valid");
    return false;
  }
}