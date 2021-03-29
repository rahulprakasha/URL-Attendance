function validateForm() {
  var x = document.forms["myForm"]["fname"].value;var y=document.forms["myForm"]["pass"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if(x !="suraj"&& y!="hey"){alert("wrong Email/password");
    return false;
  }
}