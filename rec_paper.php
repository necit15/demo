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

              DG.marker([55.7433, 49.1350]).addTo(map).bindPopup('"Втормет" <br> г. Казань, ул. Кулагина, 10 <br> Тел. (843) 258-81-74');
              DG.marker([55.7954, 49.1713]).addTo(map).bindPopup('"EcoPAper" <br> ул. Николая Ершова, 31Б <br> Тел. 8(904) 673-15-34');
              DG.marker([55.8591, 49.0040]).addTo(map).bindPopup('"Вторресурсы" <br> ул. Тэцевская, 227 <br> Тел. (843)297-95-65');
              DG.marker([55.8288, 49.0807]).addTo(map).bindPopup('"Поволжская Экологическая Компания" <br> ул. Декабристов, 133 <br> Тел. (917)90-63-371');
              DG.marker([55.8253, 49.1952]).addTo(map).bindPopup('"Поволжская Экологическая Компания" <br> ул. Журналистов, 31 <br> Тел. (917)90-63-372');

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
