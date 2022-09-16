<?php
include('login.php'); // Includes Login Script
 
if(isset($_SESSION['login_user'])){
//header("location: socialytehome.php");
}
?>
 
 
<!DOCTYPE html>
<head>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
body {
     
  
    background: url("http://usercontent1.hubimg.com/8831416.jpg");
    background-size: 1300px 1024px;
    background-repeat: no-repeat;

}
a:link{ 
 
        color: white;
    text-align: center;
    font-style: oblique;}
h1 {
    color: white;
    text-align: center;
    font-style: oblique;
     
  }
 div{
    color: black;
    text-align: center;
    font-style: oblique;
     
  }
}
p {
    font-family: "Times New Roman";
    font-size: 20px;
    }
    
}
 
</style>
</head>
<body>
<div id="main">
<h1> HotSpot</h1>
<div id="login">

<form action="" method="post">
<center><label>UserName :</label>
<input id="user_name" name="user_name" placeholder="username" type="text"/>
<br><label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"/>
<br><input name="submit" type="submit" value=" Login "/>
<br></center>
<center><span><?php echo $error; ?></span></center>

</form>
<div class="container">
  
  <a href="registration_hotspot.html" class="btn btn-info" role="button">Create Account</a>
  <a href="guestpage.html" class="btn btn-success" role="button">Guest About App</a>
</div>
</div>
</div>
</body>
</html>
