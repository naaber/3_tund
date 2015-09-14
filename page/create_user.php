<?php	
	$email_error = " ";
	$password_error = " ";
	$first_name_error = " ";
	$last_name_error = " ";
	$b_day_error = " ";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if(isset($_POST["create_user"])){

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
			if(empty($_POST["first_name"])) {
			$first_name_error = "Ei saa olla tühi";
			}
			if(empty($_POST["last_name"])) {
			$last_name_error = "Ei saa olla tühi";
			}
			if(empty($_POST["b_day"])) {
			$b_day_error = "Ei saa olla tühi";
			}
		}
	}
$page_title = "Create User";
$page_file = "create_user.php"
?>
<?php require_once("../header.php"); ?>
		<h2>Create user</h2>
		<form action="create_user.php" method="post">
			<input name="first_name" type="text" placeholder="Eesnimi">* <?php echo $first_name_error; ?> <br><br>
			<input name="last_name" type="text" placeholder="Perekonnanimi">* <?php echo $last_name_error; ?> <br><br>
			<input name="b_day" type="date">* <?php echo $b_day_error; ?> <br><br>
			<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool">* <?php echo $password_error; ?> <br><br>
			
			<input type="submit" value="Loo kasutaja">
		</form>
<?php require_once("../footer.php"); ?>