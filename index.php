<?php
session_start();
$_SESSION["level"] = 1;
$_SESSION["class"] = 1;
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
                            <a class="tos">Extra sources</a>
  				<div id="sourcess" class="dropdown-content">
    					<a href="https://www.youtube.com/watch?v=aNqG4ChKShI" target="_blank" rel="noopener">Addition and subtraction</a>
					<a href="https://www.youtube.com/watch?v=mvOkMYCygps" target="_blank" rel="noopener">Multiplication and division</a>
					<a href="https://www.youtube.com/watch?v=xO_1bYgoQvA" target="_blank" rel="noopener">The multiplication tables</a>
				</div>
                        </li>
                        <li class="right">
                            <a class="sup">Change class</a>
  				<div id="clasess" class="dropdown-content">
    					<a href="#" id="1" class="classchange1 activated">Class 1</a>
    					<a href="#" id="2" class="classchange2">Class 2</a>
					<a href="#" id="3" class="classchange3">Class 3</a>
					<a href="#"  id="4" class="classchange4">Class 4</a>
  				</div>
                        </li>
                        <li class="right">
                            <a class="affiliates">Change level</a>
				<div id="levelss" class="dropdown-content">
					<a href="#" id="5" class="levelchange1 activated">Superman</a>
					<a href="#"  id="6" class="levelchange2">Batman and Robin</a>
					<a href="#"  id="7" class="levelchange3">The arrow</a>
					<a href="#"  id="8" class="levelchange4">The Flash</a>
				</div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Main body-->
        	<div class="main"> 
			<form action="start.php" method="post">
				<input type="hidden" id="classe" Name="class" Value="1" >  
				<input type="hidden" id="leveel" Name="level" Value="1" >  
				<input type="submit" name="submit" id="red" value="Press to start ">
			</form>
        	</div>
        <footer>
            <div class="footertext">Copyright 2017-2018, MathsPro - All rights reserved. Created by Nedas Surkus</div>
        </footer>
    </div>
</body>


</html>