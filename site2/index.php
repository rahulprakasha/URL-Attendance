<?php 
include_once('connection.php'); 
$query="select * from student"; 
$result=mysql_query($query); 
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-signin-client_id" content="1063134777589-ar97jbfphdlto666v3r4mfp00r5q76me.apps.googleusercontent.com">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script><script defer src="1.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
    <form name="myForm" action="./homepage-student.html" onsubmit="return validateForm()" method="post">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="./homepage-student.html" class="sign-in-form">
          <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="E-Mail" name="fname" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
           <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
           <img src="undraw_Collaboration_re_vyau.svg" class="image" alt=""/>
           
            <h2 style="text-align:center;">INSTA ATTENDANCE</h2>
            <p style="text-align:center;">
              New Student?
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="./signup-students.html">Sign up</a>
            </button>
            <p style="text-align:center;">
              New Teacher?
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="./signup-teacher.html">Sign up</a>
            </button>
          </div>
         
        </div>
 

     </form>
  </body>
</html>