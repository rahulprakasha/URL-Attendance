function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["pass"].value;
  var z = document.forms["myForm"]["branch"].value;
  var e = document.forms["myForm"]["reenter"].value;
  var f = document.forms["myForm"]["email"].value;
  var regx_mail = /[a-zA-Z0-9.-]+@(bmsce\.ac\.in)/
  // if (x == ""||y == ""||z == ""||e == "") {
  //   alert("all fields must be filled out");
  //   return false;
  // }
  if(regx_mail.test(f)){
    console.log("Email verify")
    return true;
  }
  else{
    console.log(f)
    alert("Email not valid");
    return false;
  }
}