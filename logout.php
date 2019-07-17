<?php   
 //logout.php  
 //session_start();  
 
 echo "Session started";
 session_destroy(); 
 echo "Session destroyed";
 header("location:index.html");  

 ?>     