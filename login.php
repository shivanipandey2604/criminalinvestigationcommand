<html >
    <head>
      <title>criminal investigation command</title>
      <link rel="stylesheet" href="style.css" type="text/css">
      <style>
         body {
            
         
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
          .form-signin12 {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         button {
  background-color: #4CAF50;
  
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
      </style>
       </head>
   <body bgcolor="white">
   <div id="header">
      
         
            <a id="logo" href="home.php"><img src="gallery/a.jpg" alt="LOGO" style="width:200px;height:160px;float:left;"></a>
      
         <ul id="navigation" style="float:right;">
            <li class="selected">
               <a href="home.php">Home</a>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li>&nbsp;&nbsp;
               <a href="public.php">Public Grievances</a>
            </li>
            <li>&nbsp;&nbsp;
               <a href="contact.php">Contact us</a>
            </li>
            <li>&nbsp;&nbsp;
               <a href="login.php">Login</a>
            </li>
            
         </ul>
         </div>
         </body>
	
   <body class="tp">
      
      <h1><center><br><br>ADMIN LOGIN</h1> </center>
      <div class="imgcontainer">
    <img src="gallery\t.png" alt="Avatar" class="avatar">
  </div>
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'user1' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'user1';
                  
                  echo 'You have entered valid use name and password';
                  header("location: database.php");
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <label for="uname"><b>Username</b></label>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
               <label for="psw"><b>Password</b></label>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         
         
      </div> 
      <h1><center><br><br>AUTHORIZED MEMBERS LOGIN</h1> </center>
      <div class="imgcontainer">
    <img src="gallery\t.png" alt="Avatar" class="avatar">
  </div>
      <div class = "container form-signin12">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
            
               if ($_POST['username'] == 'user2' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'user2';
                  
                  echo 'You have entered valid user name and password';
                  header("location: facerecog.php");
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin12" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <label for="uname"><b>Username</b></label>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
               <label for="psw"><b>Password</b></label>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         
         
         
      </div> 
      
   </body>
   </html>