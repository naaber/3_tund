<?php

	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
	
	$email_error = " ";
	$password_error = " ";
	
	//Kontrolli ainult siis, kui kasutaja vajutab "Logi sisse" nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//Kontrollime kasutaja e-posti, et see ei ole tühi
		if(empty($_POST["email"])) {
		$email_error = "Ei saa olla tühi";
		}
		if(empty($_POST["password"])) {
		$password_error = "Ei saa olla tühi";
		} else {
			if(strlen($_POST["password"]) < 8) {
				$password_error = "Peab olema vähemalt 8 sümbolit pikk";
			}
			
		}
	}

	//lehe nimi
	$page_title = "Login";
	
	//faili nimi
	$page_file = "login.php";
	
?>
<?php require_once("../header.php"); ?>
		<h2>Login</h2>
		<form action="user_form.php" method="post">
			<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool">* <?php echo $password_error; ?> <br><br>
		
			<input type="submit" value="Logi sisse">
		</form>
<?php require_once("../footer.php"); ?>