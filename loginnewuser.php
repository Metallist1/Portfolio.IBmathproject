<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../mokyklai/css/project.mini.css" media="all">
    <link rel="stylesheet" href="../mokyklai/css/metro-bootstrap.css" media="all">
<head>
<meta charset="utf-8">
    <title>MathPro</title>
</head>
<body>
    <div class="boxas">
        <!-- Main body-->
        <div class="main">
		<div class="center" id="marginmore">
		<?php
		$who = $_POST["name"];
		$password = $_POST["password"];
		$reason = $_POST["submit"]; 
		$db = new PDO('mysql:host=localhost;dbname=mathprogram', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		if (strlen($who ) >14 || strlen($who ) <4 || strlen($password ) >14  || strlen($password ) < 4 ||preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $who) || preg_match('/\s/', $who) || preg_match('/\s/', $password) ){
			echo "<form action='loginnewuser.php' method='post'>";
			echo "<input type='text' class='yourusername' size='30' id='usernamee' placeholder='Username' name='name'><br>";
			echo "<input type='text' class='yourpassword' size='30' id='passwordd' placeholder='Password' name='password'><br>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Login'>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Register'>";
			echo "</form>";
			echo "<div class='LVLError' style=' display: block'>Error. Your username of password cannot contain special characters or spaces or be longer than 14 chracters</div>";
		}else{
			$hash = hash('sha256', $password);
			if ($reason == "Register") {
				$sql = $db->query("SELECT * FROM `users` WHERE `username`= '" . $who . "'");
				$row = $sql->fetchAll(PDO::FETCH_ASSOC);
					if (count($row) == 0) {
						$db->exec("INSERT INTO `users` (`username`, `password`) VALUES ('" . $who . "', '" . $hash . "')");
						echo "<form action='loginnewuser.php' method='post'>";
						echo "<input type='text' class='yourusername' size='30' id='usernamee' placeholder='Username' name='name'><br>";
						echo "<input type='text' class='yourpassword' size='30' id='passwordd' placeholder='Password' name='password'><br>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Login'>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Register'>";
						echo "</form>";
						echo "<div class='LVLSucc' style=' display: block'>You registered succesfully , please log in</div>";
					}else if(count($row) > 0) {
						echo "<form action='loginnewuser.php' method='post'>";
						echo "<input type='text' class='yourusername' size='30' id='usernamee' placeholder='Username' name='name'><br>";
						echo "<input type='text' class='yourpassword' size='30' id='passwordd' placeholder='Password' name='password'><br>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Login'>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Register'>";
						echo "</form>";
						echo  "<div class='LVLError' style=' display: block'>Error. Such user already exists</div>";
					}
			}else if($reason == "Login"){ 
				$sql = $db->query("SELECT * FROM `users` WHERE `username`= '" . $who . "' AND `password`= '" . $hash . "' ");
				$row = $sql->fetchAll(PDO::FETCH_ASSOC);
				if(count($row) == 0) {
					echo "<form action='loginnewuser.php' method='post'>";
					echo "<input type='text' class='yourusername' size='30' id='usernamee' placeholder='Username' name='name'><br>";
					echo "<input type='text' class='yourpassword' size='30' id='passwordd' placeholder='Password' name='password'><br>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Login'>";
			echo "<input type='submit' name='submit' class='AFsubmit' value='Register'>";
					echo "</form>";
					echo "<div class='LVLError' style=' display: block'>Error. No such user exits</div>";
				}else{
					$_SESSION["who"] = $_POST["name"];
					$_SESSION["451kent"] = $hash;
					foreach($row as $key => $array){
						if($array["Admin"] == 1 ) $_SESSION["admin"] = "yes";
					}
					echo "<div class='LVLSucc' style=' display: block'>You logged on succesfully</div>";
					echo "<script> window.location.assign('index.php'); </script>";
				}
			}
		}

	?>
        </div>
</div>
    </div>
</body>

</html>