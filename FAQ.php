<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>EcoDots</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
               

			   
			   
	</head>
	<body>
	
	
	
	

		<div class="container">
                    <br><br><br>
                    <div id="map" style="width: 100%; height: 600px;">
     
<ul	   id="formaotpr" class="one">

	   
<form action="FAQ1.php" method="post">
     <a> Оставьте свой отзыв, ваше мнение важно для нас! </a>	
    <input name="name" placeholder="Укажите ваше имя!" class="name" required />
    <input name="emailaddress" placeholder="Укажите ваш Email!" class="email" type="email" required />
    <textarea rows="4" cols="50" name="subject" placeholder="Введите ваше сообщение:" class="message" required></textarea>
    <input name="submit" class="btn" type="submit" value="Отправить" />
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
                                                                        <a class="gn-icon gn-icon-help" href="http://telegram.me/eco16_bot"><font face="Ubuntu" size=4,5 >
        Наш Telegram-бот
         </font></a>
                                                                            <a class="gn-icon gn-icon-article" href="FAQ.php">Обратная связь</a> 
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



