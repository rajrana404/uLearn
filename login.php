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
  <h2>Login</h2>
  <div class="form">
     <form action="registration.php" method="POST" class="login-form">
      <input type="email" name="email" placeholder="your email" required="">
      <input type="password" id="password" name="password" placeholder="password" required="">
      <input type="radio" id="student" name="status" value="S" checked="">
      <label for="student">Student</label>
      <input type="radio" id="professor" name="status" value="P">
      <label for="professor">Professor</label><br>
      <button type="submit" id="login" name="login">LOGIN</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>


</body></html>