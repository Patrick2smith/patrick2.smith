
 
<?php
        session_start(); // Starting Session
        $error=''; // Variable To Store Error Message
        if (isset($_POST['submit'])) {
            if (empty($_POST['user_name']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            }
                 
        else {
 
        // Define $username and $password
        $username=$_POST['user_name'];
        $password=$_POST['password'];
 
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "");
        // Selecting Database
        $db = mysqli_select_db($connection, "hotspot");
 
        // SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select user_name, password, user_type from users where password ='$password' AND user_name ='$username'");
        $rows = mysqli_num_rows($query);
         if ($rows == true) {
            $_SESSION['login_user']=$username;  // Initializing Session
          //  mysqli_free_result($query);  // Free the data stored in the result set   
         
   // $sql = mysqli_query($connection, "select user_type from user_email where ='$username' "); //Check the Type of USER      
        $result= mysqli_fetch_assoc($query); // Store query result 
           
              
          if ($result['user_type'] == "socialyte") {  
            //header("location: socialytehome.html");   			// Redirecting To socialyte profile
           echo"<script>window.open('socialytehome.php','_self')</script>" ;          
		  
		  } 
             
          else if ($result['user_type'] == "admin") {
            header("location: HotspotAdminHome.php");          // Redirecting To admin profile
            }
			else if ($result['user_type'] == "eventorganizer") {
            header("location: eventorganizer.php");          // Redirecting To admin profile
            }
          
         }//if Login Successful
             
       else {
                $error = "Username or Password is invalid.";
                echo '<div style="position: fixed; padding-top: 30px; width: 100%; border-radius: 0px;">
            <div class="alert alert-danger alert-dismissable" id="flash-msg1">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
            <strong><i class="fa fa-times"></i>&nbsp;Uh Oh! Login Failed</strong> Please check login credentials and try again.
            </div>
            </div>';
            }
 
            mysqli_close($connection); // Closing Connection
            }
        }
?>
 
