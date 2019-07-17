<?php
//include the db categID file

require_once 'db_pdf_config_admin.php';
$con=OpenCon();

session_start();

$n=$_SESSION["name"];
$id= $_SESSION['id'];

$editorContent = $statusmsg = '';
echo "$n";

/*$sql = "SELECT userID FROM user where email= '$n' ";

if(mysqli_query($con, $sql)){
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {?>
        <h><?echo $row['userID']."<br>"; ?></h>

    <?php }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}*/

//if the form is submitted

if (isset($_POST['submit'])) {
    //Get editoor content
    
    $editorContent = $_POST['editor'];
  //  echo 'Variable editor set';
  //  echo $editorContent;
    //GetDateContent
    $debut_val= $_POST['debut_val'];
    //echo 'Variable debut_val set';
    $fin_val=$_POST['fin_val'];
    //echo 'Variable fin_val set';
    //GetCategContent
    $categ_name=$_POST['categ'];

    
    if (!empty($editorContent) && $categ_name==1) {
        $sql = "INSERT INTO produit (userID, categID,texte, debut_val, fin_val) VALUES ('$id','$categ_name','$editorContent','$debut_val','$fin_val')";

        if (mysqli_query($con, $sql)) {
            echo "Records added successfully.";
            $statusmsg="Votre PDF a bien été enregistré ";
            echo $statusmsg;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            $statusmsg="Un problème est survernu. Réessayez plus tard. ";
            echo $statusmsg;
        }
    }

    //echo 'Variable categ set';

    // INSERT INTO produit (texte,creation_date,debut_val,
    // fin_val,categID,userID) VALUES ('$editorContent',CURRENT_TIME(),'$debut_val','$fin_val','1','$id')";

    if (!empty($editorContent) && $categ_name==2) {
        $sql = "INSERT INTO produit (userID, categID,texte, debut_val, fin_val) VALUES ('$id','$categ_name','$editorContent','$debut_val','$fin_val')";
        
        if (mysqli_query($con, $sql)) {
            echo "Records added successfully.";
           $statusmsg="Votre PDF a bien été enregistré ";
           echo $statusmsg;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            $statusmsg="Un problème est survernu. Réessayez plus tard. ";
            echo $statusmsg;
        }
    }

    /*{
        //insert editor content into db
        $query="INSERT INTO produit (produitID, userID, categID, texte, creation_date, update_date, debut_val, fin_val)
        VALUES ( '', '$id', '$categ_name','$editorContent', CURRENT_TIME(), CURRENT_TIME(), '$debut_val', '$fin_val');";
        //if database insertion is successful
        mysqli_query($con,$query);
        mysqli_close($con);
        if ($query) {
            $statusmsg="Votre PDF a bien été enregistré 2";
            echo $statusmsg;
        } else {
            $statusmsg="Un problème est survernu. Réessayez plus tard. 2";
            echo $statusmsg;
        }
    }
    elseif (!empty($editorContent && $categ_name==2)) {
        $query="INSERT INTO produit (produitID, userID, categID, texte, creation_date, update_date, debut_val, fin_val)
        VALUES (  '', '$id', '$categ_name','$editorContent', CURRENT_TIME(), CURRENT_TIME(), '$debut_val', '$fin_val');";

        mysqli_query($con,$query);
        mysqli_close($con);
        if ($query) {
            $statusmsg="Votre PDF a bien été enregistré 2";
            echo $statusmsg;
        } else {
            $statusmsg="Un problème est survernu. Réessayez plus tard. 2";
            echo $statusmsg;
        }
    }*/
    else {
        $statusmsg = "Please add content in your editor";
    }
} 
    Closecon($con);

?>
    