<?php /*  session_start();

	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'production';

	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	if ( mysqli_connect_errno() ) {

		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}   */
	require_once 'db_pdf_config_admin.php';
	session_start();
	$con=OpenCon();

	

	if ( !isset($_POST['Email'], $_POST['pwd']) ) {
		die ('Veuillez remplir vos identifiants correctement.');
	}
	
	if ($stmt = $con->prepare('SELECT userID, password FROM user WHERE Email = ?')) {

		$stmt->bind_param('s', $_POST['Email']);
		$stmt->execute();
		$stmt->store_result();		
	}

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $pwd);
		$stmt->fetch();


		if (password_verify($_POST['pwd'], $pwd)) {

			//session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['Email'];
			$_SESSION['id'] = $id;
			
			if(isset($_SESSION["name"]))  
			{  
					echo '<h3>Login Success, Welcome - '.$_SESSION["name"].'</h3>';  
					echo '<br /><br /><a href="logout.php">Logout</a>';  
			}  
			else  
			{  
					echo"Not set"; 
			} 
			
			echo("Generated ID session");
			header("Refresh:1; url =http://localhost/production/dist/DMN.php");
			
			exit();
		} 
		
		else {
			echo 'Mot de passe incorrect. Veuillez réessayer.';?> <a href="index.html">Réessayer</a><?php
		}
	} else {
		echo 'Nom d\'utilisateur incorrect. Veuillez réessayer. ';?> <a href="index.html">Réessayer</a><?php
	}

	CloseCon($con);
	
	//$stmt->close();
	?>