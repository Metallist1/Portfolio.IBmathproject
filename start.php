<?php
session_start();
$_SESSION["class"] = $_POST["class"];
$_SESSION["level"] = $_POST["level"];
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../mokyklai/css/project.mini.css" media="all">
    <link rel="stylesheet" href="../mokyklai/css/metro-bootstrap.css" media="all">
<head>
<meta charset="utf-8">
    <title>Maths Pro</title>
</head>
<body>
    <div class="boxas">
        <!-- javascript -->
        <script src="../mokyklai/js/jquerymin.js"></script>
        <script src="../mokyklai/js/projektas.js"></script>
        <script src="../mokyklai/js/levelselect.js"></script>
        <script src="../mokyklai/js/bootstrap.js"></script>
        <!-- header -->
        <header>
            <nav class="midNav">
                <div class="head">
                    <ul id="alllright">
                    <ul id="logoleft">
                    </ul>
                    <ul id="right">
                        <li>
                            <div class="Login">
 				<?php if(isset($_SESSION["who"])): ?>
                                <div class="dropdown" cost="eff">
                                    <a class="icona"><?php echo $_SESSION['who'] ; ?></a>
                                    <div id="meniu" class="dropdown-content rightpos">
                                        <ul id="userdrop">
                                            <li>
                                                <a class="tradelink">Your statistics</a>
<div id="historylist" class="modal" >
    <div class="modal-content">
        <div class="modal-inner">
            <div class="TopHistory">
                User statistics
            </div>
<?php
				$db = new PDO('mysql:host=localhost;dbname=mathprogram', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$who = $_SESSION["who"];
				$password = $_SESSION["451kent"];
if(!$who ||!$password ){ 
	          echo "<div class='Username'>";
           echo "<div class='left'>Your username:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='TotalPoints'>";
           echo "<div class='left'>Total points earned:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='TotalTime'>";
           echo "<div class='left'>Total time played:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='Questions1'>";
           echo "<div class='left'>Grade 1 questions answered:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='Questions2'>";
           echo "<div class='left'>Grade 2 questions answered:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='Questions3'>";
           echo "<div class='left'>Grade 3 questions answered:";      
           echo "<div class='right'>You need to log in</div></div></div>";
          echo "<div class='Questions4'>";
           echo "<div class='left'>Grade 4 questions answered:";      
           echo "<div class='right'>You need to log in</div></div></div>";
					}else {
				$sql = $db->query("SELECT * FROM `users` WHERE `username`= '" . $who . "' AND `password`= '" . $password . "' ");
				$row = $sql->fetchAll(PDO::FETCH_ASSOC);
						foreach($row as $key => $array){
$totalpoints = $array['Points_gained'];
$totaltime = $array['Timeplayed'];
$questions1 = $array['Questions_Answered_1'];
$questions2 = $array['Questions_Answered_2'];
$questions3 = $array['Questions_Answered_3'];
$questions4 = $array['Questions_Answered_4'];

	          echo "<div class='Username'>";
           echo "<div class='left'>Your username:";      
           echo "<div class='right'>$who</div></div></div>";
          echo "<div class='TotalPoints'>";
           echo "<div class='left'>Total points earned:";      
           echo "<div class='right'>$totalpoints </div></div></div>";
          echo "<div class='TotalTime'>";
           echo "<div class='left'>Total time played:";      
           echo "<div class='right'>$totaltime</div></div></div>";
          echo "<div class='Questions1'>";
           echo "<div class='left'>Grade 1 questions answered:";      
           echo "<div class='right'>$questions1</div></div></div>";
          echo "<div class='Questions2'>";
           echo "<div class='left'>Grade 2 questions answered:";      
           echo "<div class='right'>$questions2</div></div></div>";
          echo "<div class='Questions3'>";
           echo "<div class='left'>Grade 3 questions answered:";      
           echo "<div class='right'>$questions3</div></div></div>";
          echo "<div class='Questions4'>";
           echo "<div class='left'>Grade 4 questions answered:";      
           echo "<div class='right'>$questions4</div></div></div>";
}
}
?>
                    </div>
    </div>
</div>

                                            </li>
                                            <li>
                                                <a href="../mokyklai/logout.php">Log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               <?php else: ?>
					<a class=" icona" href="../mokyklai/login.php">Login</a>                               
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                    </ul>
                    <ul class="navigation">
                        <li class="right">
                            <a class="affiliates"> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Main body-->
        <div class="main"> 
                    <div class="rolloutside">
                        <div class="Roll">
                            <div class="Timer">
                                <?php
					$level = $_POST["level"];
					$time=0.00;
					switch ($level) {
						case 2:
							$time=25.00;
							break;
						case 3:
							$time=20.00;
							break;
						case 4:
							$time=15.00;
							break;
						default:
							$time=30.00;
					}
					echo "<div id='timer'>$time</div>";
				?>
                            </div>
                            <div id="progressbar"></div>
                        </div>
                    </div>
                <div class="Affiliantes">
			<form action="results.php" id="questionsall" method="post">
                                <?php
					$class = $_POST["class"];		
					$db = new PDO('mysql:host=localhost;dbname=mathprogram', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					$number = 1;
					$sql = $db->query("SELECT * FROM `questions` WHERE `level`= '" . $class  . "' order by rand() limit 4");
					$row = $sql->fetchAll(PDO::FETCH_ASSOC);
						foreach($row as $key => $array){
							$newquestion = $array["questions"];
							$newid = $array["id"];
							echo "<div id=$number class='question'>$newquestion </div>";
							echo "<input type='text' class='NumberOne' size='10' placeholder='Answer' name='$number'><br>";
							if ($number == 1) $newname = "first";
							else if ($number == 2) $newname = "second";
							else if ($number == 3) $newname = "third";
							else $newname = "forth";

							echo "<input type='hidden' class='NumberOne' name='$newname' Value='$newid'><br>";
							$number++;

						}
					echo "<input type='hidden' id='timebonus' Name='timebonus' Value='1' >"  ;
				?>
				<input type="submit" name="submit" class='AFsubmit' value="Submit answers">
			</form>
                </div>
        </div>
        <footer>
            <div class="footertext">Copyright 2017-2018, MathsPro - All rights reserved.Created by Nedas Surkus</div>
        </footer>
    </div>
</body>


</html>