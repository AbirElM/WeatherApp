<?php

include_once 'submit.php';

//login_success.php
//session_start();

if (isset($_SESSION['loggedin']) == true) {
    $n=$_SESSION["name"];
    $id= $_SESSION['id'];
    echo '<h3 name="abir"> Login Success, Welcome - '.$n.'</h3>';
    echo '<h3 name="abir">Your current session ID : '.$id.'</h3>'; ?>

     <style> 
     </style>
     <!DOCTYPE html>
<html>
   
<meta charset="UTF-8">

<head>
   <link rel="stylesheet" type="text/css" href="./DMNstyle.css">
   <link rel="stylesheet" type="text/css" href="./generatePDFstyle.css">
   <!--JavaScript Sources -->
   <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
   <!--Datepicker calendar Module-->
         <title>GeneratePDF/session<?php echo $id ?></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  <script>
  $( function() {
    $( "#datepicker,#datepicker2" ).datepicker();
  } );
    calendar = new Epoch(calendar,mode,container,multiselect);
  </script>
</head>


<div>
   <img src="./logo.jpg" alt="Logo" height="80">
</div>
<!-----------------------Menu----------------------->
<h1> Production de Bulletins Météo </h1>
<ul>
   <li><a href="DMN.php">Accueil </a></li>
   <li><a href="">Créer un PDF</a></li>
   <li><a href="">Contact</a></li>
   <li><a href="">About</a></li>
   <li><a href="logout.php">Déconnexion</a></li>
</ul>
<body>
<div id="pdf" > Ici il vous sera possible de générer le pdf de votre choix.</p>
    <form method="POST" action="">
        <p> Date de début de validité : <input name="debut_val" type="text" id="datepicker"> </p>
        <p> Date de fin de validité   :   <input name="fin_val" type="text" id="datepicker2"> </p>
        Veuillez choisir la catégorie : 
        <div class="custom-select" style="width:100px;">
                <select name= "categ" >
                <option selected value="1" name="BME"> Moyenne Echeance</option>
                <option value="2" name="BMS"> Bulletin Spécial</option>
        </div>
            </select>
            </div>
      <p>Ecrivez vos données sur l'éditeur de texte ci-dessous. </p>
      <textarea name="editor" id="editor" rows="10" cols="80"> </textarea>
      <script> CKEDITOR.replace( 'editor' ); </script>
    <div>
    <input name="submit" type="submit" method = "" class="button button-block"  value="Enregistrer"/>
   
    <?php if (!empty($statusmsg)) { ?>
    <p class="stmsg"><?php echo $statusmsg; ?></p>
    <?php } ?>

    <?php
      } 
      else {?>
            <p name="Msg">Veuillez remplir le champ ci-dessous </p> <?php
           }
?>
    </div>
    </div>
<!--
    Traitement de l'enregistrement  
    INSERT EDITOR CONTENT IN DB
-->

<!--Status MESSAGE -->




  
</body>

</html> 
