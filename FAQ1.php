<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>EcoDots</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
                <script src="http://maps.api.2gis.ru/2.0/loader.js"></script>
	</head>
	<body>
		<div class="container">
                    <br><br><br>
                    <div id="map" style="width: 100%; height: 600px;">
     
<ul	   id="formaotpr" class="one">

	   
<form>
     <a> Спасибо за ваш отзыв! </a>	
    
</form>
</ul>
	   
	   
                    </div>
                    
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								
									<a class="gn-icon gn-icon-download">Переработка</a>
									<ul class="gn-submenu">
                                                                            <li><a class="gn-icon gn-icon-download" href="rec_plastic.php">Пластик</a></li>
                                                                            <li><a class="gn-icon gn-icon-download" href="rec_battery.php">Аккумуляторы</a></li>
                                                                            <li><a class="gn-icon gn-icon-download" href="rec_mercury.php">Энергосберегающие лампы</a></li>
									    <li><a class="gn-icon gn-icon-download" href="rec_paper.php">Бумага, картон</a></li>
                                                                            <li><a class="gn-icon gn-icon-download" href="rec_other.php">Другие отходы</a></li>
                                                                        <a class="gn-icon gn-icon-help" href="help.php">О нас</a>        
									</ul>
								</li>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
                                <a  href="index.php"><font face="Ubuntu" size=11 color="Green">
         EcoDots
         </font>   <font size=5>карта пунктов переработки и утилизации отходов</font></a>
                                
                                <li></li>
                              
			</ul>
			
                    </div><!-- /container -->
                    
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>

<?php 

$name = $_POST['name'];


$email = $_POST['emailaddress'];
$message = $_POST['subject']; 
mail("emil110@yandex.ru", "FAQ", "$name       $email     $message"); 
?>

