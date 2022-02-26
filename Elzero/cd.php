<?php
session_start();
$array =array("Ahmed","nagwa");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username= $_POST['username'];
if(in_array($username,$array)){
    $_SESSION['username'] = $username;
  
   echo 'welcome' .$_SESSION['username'];
   header('REFRESH:5;URL:config.php');
}
echo 'Not Found';

}
else{
    echo 'you have not permession to enter this page';
   
}
?>