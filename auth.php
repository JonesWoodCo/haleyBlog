 <?php
 
 require_once("passwords.php");
 
 
  if(($_POST['name'] == $user_name) && ($_POST['password']== $user_password)){
   
   
 
setcookie($cookie_name, $cookie_value, time() + 3601, "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
   
    header("Location: form.php");
     
} else {
    
     header("Location: index.php");
     
    }
 }
?> 