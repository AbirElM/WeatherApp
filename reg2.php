<?php
require_once 'db_pdf_config_admin.php';
session_start();
$con = OpenCon(); 

$Nom=$_POST["Nom"];
$Prenom=$_POST["Prenom"];
$email = $_POST["Email"];
$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

echo " $Nom is Connected to database !";

echo "Vous êtes bien $Prenom !";
        
        $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
        $Nom= $_POST["Nom"];
        $Prenom=$_POST["Prenom"];
        $email=$_POST["Email"];
        $Type = "user";

if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL db ' . mysqli_connect_error());
}

if ($_POST['pwd']!=$_POST['pwd2']) {
    echo 'Les mots de passe saisis ne sont pas identiques! Veuillez réessayer dans 3 secondes!';
    header('Refresh:2;url=http://localhost/production/dist/');
}


// else if ($stmt = $con->prepare("INSERT INTO user (Prenom,Nom,Email,Type,password) VALUES (?,?,?,?,?)")) {
//     $Prenom=$_POST["Prenom"];
//     $Nom= $_POST["Nom"];
//     $email=$_POST["Email"];
//     $Type = "U";
//     $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
//     /*$id="";*/    
//     mysqli_stmt_bind_param($stmt,'sssss',$Prenom,$Nom,$email,$Type,$pwd);
//     echo "Vous pouvez maintenant vous connecter. Cliquez ici. ";
  
    // $stmt->execute();
//}
else {
    $sql = "INSERT INTO user (Prenom,Nom,Email,Type,password) VALUES ('$Prenom', '$Nom', '$email','$Type','$pwd')";
   
    if(mysqli_query($con, $sql))
    {
    echo "Records inserted successfully.";
    } 
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }   
}

//  else {
//     echo "Il semblerait qu'une erreur soit survenue... Veuillez réessayer plus tard si le problème persiste" ; 
//         echo '.';
// }

CloseCon($con);

 ?>