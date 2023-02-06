<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CS 355 Home Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
     h1{
        padding-top: 20%; 
        color: #f9f9f9;
        text-align: center;
     }
     p{
        color: #f9f9f9;
     }
  </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
    </script>

    <script>
        function checkPasswordMatch() 
        {
        var password = $("#password").val();
        var confirmPassword = $("#confirmpassword").val();

        if (password != confirmPassword)
            $("#divCheckPasswordMatch").html("Passwords do not match!");
        else
         $("#divCheckPasswordMatch").html("Passwords match.");
        }

        jQuery(document).ready(function () 
        {
            $("#password, #confirmpassword").keyup(checkPasswordMatch);
        });
    </script>

</head>
<body>
   <!-- NAVBAR BEGINS HERE-->
   <nav id="navbar">
     <ul>
       <li class="dropdown">
         <a href="index.html" class="dropbtn">Home</a>
         <div class="dropdown-content">
         </div>
       </li>
       <li class="dropdown">
         <a href="#" class="dropbtn">Account</a>
         <div class="dropdown-content">
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
         </div>
       </li>
       <li class="dropdown">
         <a href="#" class="dropbtn">Course</a>
         <div class="dropdown-content">
           <a href="https://www.zybooks.com/" target="_blank">ZyBooks</a>
           <a href="https://tophat.com/" target="_blank">TopHat</a>
           <a href="https://drive.google.com/drive/folders/1co7vzY9_75cCiuNTHXCGf3pKbpf_TTwC" target="_blank">Course Google Drive</a>
           <a href="https://ssologin.cuny.edu/cuny.html?resource_url=https%3A%2F%2Fbbhosted.cuny.edu%252F" target="_blank">Blackboard</a>
           <a href="https://www.w3schools.com/" target="_blank">W3Schools</a>
         </div>
       </li>
       <li class="dropdown">
         <a href="#" class="dropbtn">Support</a>
         <div class="dropdown-content">
           <a href="developer.html">About The Developer</a>
           <a href="mailto:rajrana404@gmail.com" target="_top">Contact</a>
           <a href="help.html">Help</a>
         </div>
       </li>
       <li id="brand">uLearn</li>
      </ul>
   </nav>
   <!--NAVBAR ENDS HERE-->
   
   <div class="login-page">
  <h2>Register</h2>
  <div class="form">
     <form action="registration.php" method="POST" class="login-form">
      <input type="text" id="fname" name="fname" placeholder="firstname" required="">
      <input type="text" id="lname" name="lname" placeholder="lastname" required="">
      <input type="email" id="email" name="email" placeholder="email" required="">
      <input class="form-control" type="password" name="password" id="password" placeholder="Password" required="">
      <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" onchange="checkPasswordMatch();" required="">
      <div id="divCheckPasswordMatch" style="color: white;"></div>
      <input type="radio" id="student" name="status" value="S" checked="">
      <label for="student">Student</label>
      <input type="radio" id="professor" name="status" value="P">
      <label for="professor">Professor</label><br>
      <button id="submit" type="submit" name="signup">REGISTER</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
    
  </div>
</div>



</body></html>