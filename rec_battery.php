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
                <script src="http://maps.api.2gis.ru/2.0/loader.js"></script>
	</head>
	<body>
		<div class="container">
                    <br><br><br>
                    <div id="map" style="width: 100%; height: 623px;">
        <script>
             var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [55.8, 49.1],
                    zoom: 11
                });

              DG.marker([55.7700, 49.2167]).addTo(map).bindPopup('ТРЦ «Южный» <br> Проспект Победы, 91 <br> Тел. +7 (843) 210-02-20');
              DG.marker([55.8334, 49.0503]).addTo(map).bindPopup('"ЭкоПроф" <br> ул. Восстания, 100, офис 301 <br> Тел. +7 (843) 210-09-71');
              DG.marker([55.8226, 49.1359]).addTo(map).bindPopup('8-ое здание КНИТУ-КАИ <br> ул. Четаева, 18а <br> +7 (843) 231–01–09');
              DG.marker([55.7809, 49.2152]).addTo(map).bindPopup('"IKEA" <br> пр. Победы, 141 <br> Тел. +7 (843) 276-89-99');
            });
        </script> 
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
