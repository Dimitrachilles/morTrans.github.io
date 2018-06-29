<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css">
   
    <link rel="icon"  href="img/main/favicon.png">

	<link rel="stylesheet" href="css/style.css">
	<title>МорТранс</title>
</head>
<body>

	<header class="header"> 
		<div class="header-horizontal"></div>
		<div class="ornament">
			<img class="ornament-hidden" src="img/header/ornament-img.png" alt="ornament">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-4 col-sm-3  col-md-4  col-xl-4">

					<div class="logo-img">
						<a href="index.php"><img class="img-hidden" src="img/header/logo-img.png" alt="logo"></a>
					</div>															
				</div>	
				<div class="col-8  col-sm-9 col-md-8 col-xl-8">
					<div class="header-block">
						<div class="name-company">
							<h3 class="sign-company-1">Муниципальное предприятие</h3>
							<h1 class="sign-company-2"><span class="hidden-text">северная</span> транспортная компания</h1>
							<h3 class="sign-company-3"> МорТранс</h3>
						</div>
						<div class="button-block">
							<button hre class="button button-block-eye"><img src="img/header/eye-img.png" alt="eye"></button>
					        
					        
					        <select class="button button-block-expand" name="" id="">
					            <option class="button button-block-expand" value="" selected>рус</option>
					            <option class="button button-block-expand" value="">eng</option>
					            <option class="button button-block-expand" value="">ukr</option>
					        </select>  
							<!--<button >рус <img class="expand-img" src="img/header/expand-img.png" alt="expand-button"></button>-->
							
							
							<button class="button button-block-user header-registraion__button"> <img class="user-img" src="img/header/user-img.png" alt="user">Войти</button>
						</div>
					</div>	
				</div>

				
			</div>	
		</div>

	</header>
	
<nav class="navbar-menu menu" role="navigation">
<div class="container">

	<ul class="nav-list">
		<div class="icon">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<li class="topmenu"><a href="">О предприятии <img src="img/header/button-nav-img.png" alt="" class="button-nav"></a>
		<ul class="submenu">
		            <li><a href=#>История предприятия</a></li>
		            <li><a href=#>Руководство</a></li>
		            <li><a href=#>Нормативно-правовая база</a></li>
		            <li><a href=#>Наш флот</a></li>		           
		</ul> 
		 	</li>
		<li class="topmenu"><a href="">Расписание</a></li>
		<li class="topmenu"><a href="">Стоимость билетов</a></li>
		<li class="topmenu"><a href="booking.php">Забронировать билеты </a></li>
		<li class="topmenu"><a href="">Дополнительные услуги <img src="img/header/button-nav-img.png" alt="" class="button-nav"></a>

		<ul class="submenu">
		            <li><a href=#>История предприятия</a></li>
		            <li><a href=#>Руководство</a></li>
		            <li><a href=#>Нормативно-правовая база</a></li>
		            <li><a href=#>Наш флот</a></li>	
		</ul> 

		</li>
		<li class="topmenu"><a href="">Информация для пассажиров <img src="img/header/button-nav-img.png" alt="" class="button-nav"></a>
		<ul class="submenu submenu-mini">
		            <li><a href=#>История предприятия</a></li>
		            <li><a href=#>Руководство</a></li>
		            <li><a href=#>Нормативно-правовая база</a></li>
		            <li><a href=#>Наш флот</a></li>	
		</ul>
       </li>
		<li class="topmenu"><a href="">Контакты</a></li>
	</ul>
	 <div class="hamburger" onclick="toggleMenu();"></div>
	 
	 
	 
</div>	
</nav> 
	 <nav class="menu-nav">
     <div class="container">
	     <form class="main-form-3 container-fluid" method="get">
								<div class="img-wrap">
									<!-- <img src="img/main/burger.png" alt=""></div> -->
									<div class="menu">
									<div class="icon">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
										<div class="links">
											<a href="">О предприятии</a>
											<a href="">Расписание</a>
											<a href="">Стоимость билетов</a>
											<a href="booking.php">Забронировать билеты</a>
											<a href="">Дополнительные услуги</a>
											<a href="">Информация для пассажиров</a>
											<a href="">Контакты</a>

										</div>
									</div>
									</div>
								<input type="search" class="form-search" id="search-input" placeholder="Меню">
						 		<button type="submit"><img src="img/main/search-navigation-img.png" alt="search"></button>
							</form>
							</div>
	 </nav>
	 
	 <section class="main">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-12 col-md-1 col-lg-3">
	 					<aside class="main-navigation hidden-block aside-position">
	 						<form class="main-form" method="get">
	 							<input type="search" class="form-search" id="search-input" placeholder="Поиск по сайту">
	 							 <button type="submit"><img src="img/main/search-navigation-img.png" alt="search"></button>
	 						</form>
	 						<div class="main-navigation-block">
	 							<div class="navigation-title-1">
	 								Навигация
	 							</div>
	 							<div class="navigation-underline">
	 								<img src="img/main/underline-img.png" alt="">
	 							</div>
	 							<div class="navigation-link-1">О предприятии</div>    
	 							<ul class="list-company">
	 								<li><img src="img/main/nav-button-right-img.png" alt="">История предприятия</li>
	 								<li><img src="img/main/nav-button-right-img.png" alt="">Руководство</li>
	 								<li><img src="img/main/nav-button-right-img.png" alt="">Нортивно-правая база</li>
	 								<li><img src="img/main/nav-button-right-img.png" alt="">Наш флот</li>
	 							</ul>
	 							<div class="navigation-link-1">Расписание</div>        
								<div class="navigation-link-1">Стоимость билетов</div>      
								<div class="navigation-link-1">Забронировать билеты</div>       
	 						
	 						<div class="navigation-title-2">
	 							Категории
	 						</div>
	 						<div class="navigation-underline">
	 							<img src="img/main/underline-img.png" alt="">
	 						</div>
	 						<div class="navigation-title-3">
	 							Погода
	 						</div>
							<div class="navigation-underline">
								<img src="img/main/underline-img.png" alt="">
							</div>
	 						<div class="navigation-weather">
	 		
                                  
  <ul class="nav nav-tabs nav-position" role="tablist">
  <li role="presentation" class="active active-tab"><a href="#tab1" role="tab" data-toggle="tab">Сегодня</a></li>
  <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">Пт</a></li>
  <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">Сб</a></li>
  <li role="presentation"><a href="#tab4" role="tab" data-toggle="tab">Вс</a></li>
  <li role="presentation"><a href="#tab5" role="tab" data-toggle="tab">Пн</a></li>
</ul>

	 						
	 						<div class="navigation-block-result tab-content">
	 							<img src="img/main/navigation-weather.png" alt="weather">
	 							
	 							<div role="tabpanel" class="tab-pane active " id="tab1">
                                <div class="navigation-block-result-temp"> <span class="temp-max">−27°...</span><span class="temp-mini">−20°</span> 
	 							Небольшой снег
	 							</div>
	 							</div>
	 							<div role="tabpanel" class="tab-pane" id="tab2">
 
                                 <div class="navigation-block-result-temp"> <span class="temp-max">−21°...</span><span class="temp-mini">−10°</span> 
	 							Прохладно
	 							</div>
	 							 </div>
	 							 
	 							<div role="tabpanel" class="tab-pane" id="tab3">
 
                                 <div class="navigation-block-result-temp"> <span class="temp-max">−32°...</span><span class="temp-mini">−15°</span> 
	 							Немного весело
	 							</div>
	 							 </div>
	 							  
	 							<div role="tabpanel" class="tab-pane" id="tab4">
 
                                 <div class="navigation-block-result-temp"> <span class="temp-max">−25°...</span><span class="temp-mini">−11°</span> 
	 							Снкгопад
	 							</div>
	 							 </div>
	 							  
	 							<div role="tabpanel" class="tab-pane" id="tab5">
                                 <div class="navigation-block-result-temp"> <span class="temp-max">−5°...</span><span class="temp-mini">−2°</span> 
	 							Тепло
	 							</div>
	 							 </div>
	 							
	 							</div>
	 							
	 		
	 						</div>	 						
	 						<div class="navigation-title-4">Календарь</div>
	 						<div class="navigation-underline">
	 							<img src="img/main/underline-img.png" alt="">
	 						</div>

	 						<div class="navigation-calendar">
	 							<table>
	 								<div><img src="img/main/calendar-left-img.png" alt="left"><span class="navigation-calendar-month">Июль 2017</span><img src="img/main/calendar-right-img.png" alt="right"></div>
	 								<tr>
	 									<td class="days"> 
	 									<div class="monday day">Пн</div> <div class="tuesday day">Вт</div> <div class="wednesday day">Ср</div> <div class="thursday day">Чт</div> <div class="friday day">Пт</div>  <div class="saturday day">Сб</div> <div class="sunday day">Вс</div> 
	 								</td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number shadow">1</div>  <div class="data-number shadow">2</div>  <div class="data-number shadow">3</div>  <div class="data-number shadow">4</div>  <div class="data-number shadow">5</div>  <div class="data-number shadow">6</div>  <div class="data-number shadow">7</div> </td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number">1</div>  <div class="data-number">2</div>  <div class="data-number">3</div>  <div class="data-number">4</div>  <div class="data-number">5</div>  <div class="data-number">6</div>  <div class="data-number">7</div> </td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number">8</div>  <div class="data-number">9</div>  <div class="data-number">10</div>  <div class="data-number">11</div>  <div class="data-number">12</div>  <div class="data-number">13</div>  <div class="data-number">14</div> </td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number">15</div>  <div class="data-number">16</div>  <div class="data-number">17</div>  <div class="data-number">18</div>  <div class="data-number">19</div>  <div class="data-number">20</div>  <div class="data-number">21</div> </td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number">22</div>  <div class="data-number">23</div>  <div class="data-number">24</div>   <div class="data-number">25</div>  <div class="data-number">26</div>  <div class="data-number">27</div>  <div class="data-number">28</div> </td>
	 								</tr>
	 								<tr>
	 									<td class="date"><div class="data-number">29</div>  <div class="data-number ">30</div>  <div class="data-number shadow">3</div>  <div class="data-number shadow">4</div>  <div class="data-number shadow">5</div>  <div class="data-number shadow">6</div>  <div class="data-number shadow">7</div> </td>
	 								</tr>
	 							</table>	 									
	 						</div>	
	 						</div>
	 					</aside>
	 				</div>
	 				<div class="col-12 col-md-12 col-lg-9">
	 					<div class="main-block">
					
<!--
							<form class="main-form-2 container-fluid" method="get">
								<div class="img-wrap">
									 <img src="img/main/burger.png" alt=""></div> 
									<div class="menu">
									<div class="icon">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
										<div class="links">
											<a href="">О предприятии</a>
											<a href="">Расписание</a>
											<a href="">Стоимость билетов</a>
											<a href="">Забронировать билеты</a>
											<a href="">Дополнительные услуги</a>
											<a href="">Информация для пассажиров</a>
											<a href="">Контакты</a>

										</div>
									</div>
									</div>
								<input type="search" class="form-search" id="search-input" placeholder="Меню">
						 		<button type="submit"><img src="img/main/search-navigation-img.png" alt="search"></button>
							</form>
-->
						
	 						<div class="main-block-title">Tранспортная компания <span class="hidden-hyphen">-</span> МорТранс</div>
	 						<div class="main-block-text">
	 							<p>Задача организации, в особенности же реализация намеченных плановых заданий в значительной степени обуславливает создание дальнейших направлений развития. С другой стороны рамки и место обучения кадров позволяет оценить значение дальнейших направлений развития.
	 							</p>
	 							<p>Повседневная практика показывает, что укрепление и развитие структуры представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий требуют от нас анализа соответствующий условий активизации. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий требуют от нас анализа форм развития. Товарищи! начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.
								</p>
	 							<p>Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.</p>
	 						</div>
	 						<div class="main-block-info">
	 							<a href="content.php">Подробнее <img src="img/main/info-btn.png" alt=""></a>
	 						</div>
	 					</div>
	 					<div class="main-news">
	 						<div class="main-news-title">Новости</div>
	 						<div class="main-news-block">
	 							<div class="row">
	 							<div class="col-12 col-sm-12 col-md-4 news-block-1">
	 								<div class="block-img-1">
	 									<img src="img/main/img-1.jpg" alt="boat-1">
	 								</div>	 								
	 								<div class="block-text-1">
	 									<div class="subtitle">22 Февраля 2018</div>
	 									<div class="block-title">Часть избирательных участков </div>
	 									<div class="descr-1">
	 									Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым.
	 									</div>
	 									<a href="content.php" class="block-info-1">Читать статью <img src="img/main/info-btn.png" alt=""></a>
	 								</div>
	 							</div>
	 							<div class="col-12 col-sm-12 col-md-4 news-block-2">
	 								<div class="block-img-1">
	 									<img src="img/main/img-2.jpg" alt="boat-2">
	 								</div>
	 								<div class="block-text-2">
	 									<div class="subtitle">22 Февраля 2018</div>
	 									<div class="block-title">В Избиркоме Югры прошли </div>
	 									<div class="descr-2">
	 										Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым.
	 									</div>
	 									<a href="" class="block-info-1">Читать статью <img src="img/main/info-btn.png" alt=""></a>
	 								</div>
	 							</div>
	 							<div class="col-12 col-sm-12 col-md-4 news-block-3">
	 								<div class="block-img-1">
	 									<img src="img/main/img-3.jpg" alt="boat-3">
	 								</div>
	 								<div class="block-text-1">
	 									<div class="subtitle">22 Февраля 2018</div>
	 									<div class="block-title">В Югре напаны и педаны</div>
	 									<div class="descr-3">Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым.</div>
	 									<a href="" class="block-info-1">Читать статью <img src="img/main/info-btn.png" alt=""></a>
	 								</div>
	 								</div>
	 							</div>
	 						</div>
	 							
	 					</div>
	 					
	 				</div>
	 			</div>       
	 		</div>
	 	</section>
 <?php include 'footer.php';?>

<div class="overlay">
 <div class="popup">
   <div class="popup-title">
     Войти
   </div>
   <!-- /.popup-title -->
   <div class="popup-close"> &times;</div>
   <!-- /.popup-close -->
   <div class="popup-form">
     <form action="#" name="form" class="main-form">
         <label for="phone" class="phone-form__label">Введите ваш ник-нейм:
         </label>
         <input type="login" class="popup-form__input" name="login" required>
         <label for="phone" class="phone-form__label">Введите ваш пароль
         </label>
         <input type="password" class="popup-form__input" name="password" required>
       </div>
        <button class="button popup-form__btn" type="submit">Вход</button> 
     </form>
   </div>
   <!-- /.popup-form -->
 </div>
       <!-- /.popup -->
</div>
     <!-- /.overlay -->
     
<div class="overlay-polite">
 <div class="popup-polite">
   <!-- /.popup-title -->
   <div class="popup-close-polite"> &times;</div>
   <!-- /.popup-close -->
       <h3 class="title-polite">Политика конфиденциальности</h3>
        <div class="polite-text">
<p> Многие люди не читают политику конфиденциальности сайта, так как это достаточно объемный и сложный текст. Одно из исследований указывает, что для того, чтобы ознакомиться с информацией по сбору данных на всех посещаемых среднестатистическим человеком в течение года сайтах, может потребоваться порядка 30 рабочих дней.</p>
<p>
Какими бы сложными ни были подробные описания политики конфиденциальности, они связаны с важными для каждого пользователя явлениями: сохранностью данных, защитой от мошенничества и обеспечением безопасности личной информации. Потребители постоянно озабочены вопросами безопасности, так что владелец сайта просто обязан сделать политику конфиденциальности понятной и прозрачной, насколько это только возможно. В этой статье мы рассматриваем наиболее важные элементы этого соглашения и предлагаем бесплатный образец, который позволит вам избежать проблем в будущем.</p>

<p> Параграф 1: Сбор информации
В описании политики конфиденциальности должно быть обязательно указано, какая информация и каким образом собирается сайтом.
владелец сайта просто обязан сделать политику конфиденциальности понятной и прозрачной, насколько это только возможно. В этой статье мы рассматриваем наиболее важные элементы этого соглашения и предлагаем бесплатный образец, который позволит вам избежать проблем в будущем.</p>

Параграф 1: Сбор информации
В описании политики конфиденциальности должно быть обязательно указано, какая информация и каким образом собирается сайтом.
       астоящая Политика в области обработки персональных данных и конфиденциальности персональной информации (далее — Политика) действует в отношении всей информации, которую ООО «Сноб Медиа» и/или ее аффилированные лица, включая все лица, входящие в одну группу с ООО «Сноб Медиа», могут получить о пользователе во время использования им любого из сайтов, сервисов, служб, программ и продуктов ООО «Сноб Медиа» (далее — Сервисы). Согласие пользователя на предоставление персональной информации, данное им в соответствии с настоящей Политикой в рамках отношений с одним из лиц, входящих в группу лиц ООО «Сноб Медиа», распространяется на все лица, входящие в данную группу лиц.

<p> Использование Сервисов означает безоговорочное согласие пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями пользователь должен воздержаться от использования Сервисов.  </p>     
        </div>

   <!-- /.popup-form -->
 </div>
       <!-- /.popup -->
</div>
     <!-- /.overlay -->     

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
  <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js" ></script>
  <script>
   $(document).ready(function(){
    $('.header-registraion__button, .button-contactss').on("click", function(){
     $('.overlay').show() 
     });

     $('.popup-close').on("click", function(){
       $('.overlay').hide();
     });

    });
 </script>
 
  <script>
    $(document).mouseup(function (e) { 
    var popup = $('.popup-polite');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
      $('.overlay-polite').fadeOut();
      
    }
  });
  </script>
  
   <script>
   $(document).ready(function(){
    $('.polite').on("click", function(){
     $('.overlay-polite').show() 
     });

     $('.popup-close-polite').on("click", function(){
       $('.overlay-polite').hide();
     });

    });
 </script>
 
 
 

<script>
    
    

(function ($) {
	$(function(){
	$('.icon').on('click', function(){
		$(this).closest ('.menu').toggleClass('menu-open');
	});
	});
	
})(jQuery);

</script>


</body>
</html>