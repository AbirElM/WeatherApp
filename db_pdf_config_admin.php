<?php 
//     session_start();

//     $DATABASE_HOST = 'localhost';
//     $DATABASE_USER = 'root';
//     $DATABASE_PASS = '';
//  //   $DATABASE_NAME = 'production';

//     $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//    try {
//        if (mysqli_connect_errno()) {
//            die('Failed to connect to MySQL: ' . mysqli_connect_error());
//        }
//    }catch(Exception $e){ echo "Connexion failed";}
?>

<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "production";

 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

 return $con;
 }
 
function CloseCon($con)
 {
 $con -> close();
 }
   
?>
