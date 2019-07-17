
 <?php  

 //login_success.php  
 session_start();  

 if(isset($_SESSION['loggedin']) == TRUE)  
 {   
      $n=$_SESSION["name"];
      //$id= $_SESSION['id'];
      echo '<h3 name="abir">Login Success, Welcome - '.$n.'</h3>'; 
      echo '<h3 name="abir">Your current session ID : '.$_SESSION['id'].'</h3>'; 
      ?>
      <style> 
      
      </style>
      <!DOCTYPE html>
<html>
    
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" type="text/css" href="./DMNstyle.css">
</head>
<div>
    <img src="./logo.jpg" alt="Logo" height="80">
</div>
<h1> Production de Bulletins Météo </h1>
<ul>
    <li><a href="DMN.php">Accueil </a></li>
    <li><a href="generatePDF.php">Créer un PDF</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">About</a></li>
    <li><a href="logout.php">Déconnexion</a></li>
</ul>

<body>
    <div id="try"> Cette application vous permet de générer vos bulletins
        météo suivant un format 
        prédéterminé dans un fichier de type PDF.

        Cliquez sur Créer un PDF pour commencer.
    </div>
   
</body>

</html> <?php
 }  
 else  
 {  
      echo"Not set"; 
 }  
 ?>
  



