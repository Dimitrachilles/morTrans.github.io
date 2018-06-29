<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
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
							<button class="button button-block-eye"><img src="img/header/eye-img.png" alt="eye"></button>	
							<select class="button button-block-expand" name="" id="">
					            <option class="button button-block-expand" value="" selected>рус</option>
					            <option class="button button-block-expand" value="">eng</option>
					            <option class="button button-block-expand" value="">ukr</option>
					        </select> 
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
							</div>
	 </nav>
	 
	 <section class="main">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-12 col-md-1 col-lg-3">
	 					<aside class="main-navigation hidden-block">
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
  <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">Вс</a></li>
  <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">Пн</a></li>
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
	 						<div class="main-block-title-1">Заголовок H1 внутренней страницы</div>
	 						<div class="main-block-text">
	 							<p class="paragraph-1"><span>Вступительный</span> текст на странице. Отличается от остальных абзацев более крупным размером. Его задача заинтересовать читателя. Если вступительный текст понравится — с большой вероятностью человек станет читать дальше. Он не должен быть слишком большим, иначе есть риск, что его не станут читать целиком.
							</p>
							<p class="paragraph-2">Это обычный абзац. Их таких будет тут много, чтобы разбавлять заголовки и прочие элементы, которые обычно не идут друг за другом, а сочетаются с абзацами текста. Алиса сидела со старшей сестрой на берегу и маялась: делать ей было совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда, сунула нос в книгу, которую сестра читала, но там не оказалось ни картинок, ни стишков. <a class="link-paragraph" href="">Ссылка в тексте.</a> <span class="bold-text">Жирный текст.</span> 
							</p>
							<div class="main-block-title-2">Заголовок h2 страницы</div>
							<p class="paragraph-3">Это обычный абзац. Их таких будет тут много, чтобы разбавлять заголовки и прочие элементы, которые обычно не идут друг за другом, а сочетаются с абзацами текста. Алиса сидела со старшей сестрой на берегу и маялась: делать ей было совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда, сунула нос в книгу, которую сестра читала, но там не оказалось ни картинок, ни стишков. «Кому нужны книжки без картинок, — или хоть стишков, не понимаю!» — думала Алиса.</p>
							<div class="main-block-title-3">Заголовок h3 страницы</div>
							<p class="paragraph-4">Это обычный абзац. Их таких будет тут много, чтобы разбавлять заголовки и прочие элементы, которые обычно не идут друг за другом, а сочетаются с абзацами текста. Алиса сидела со старшей сестрой на берегу и маялась: делать ей было совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда, сунула нос в книгу, которую сестра читала, но там не оказалось ни картинок, ни стишков. «Кому нужны книжки без картинок, — или хоть стишков, не понимаю!» — думала Алиса.</p>
							<div class="vertical-list">
														
							<ul class="number-list">
								<li><div class="list-block"> Это пример небольшого ненумерованного списка </div></li>
								<li><span>Из нескольких пунктов</span></li>
								<li><span>Разной длины</span></li>
								<li> <div class="list-block">	 Иногда пункты бывают очень длинными. Расстояние между соседними пунктами должно быть больше, чемnрасстояние между строчками одного длинного пункта. Это правило визуальной иерархии, применимое ко всему оформлению контента вообще.</div></li>
								<li><span>Вот и список закончился</span></li>
							</ul>
							</div>
							<div class="main-block-title-4">Заголовок 4-го уровня можно использовать для заглавия списков</div>
							<ol class="number-list">
								<li><div class="list-block"> Это пример небольшого ненумерованного списка</div></li>
								<li><span>Из нескольких пунктов</span></li>
								<li><span>Разной длины</span></li>
								<li> <div class="list-block">Иногда пункты бывают очень длинными. Расстояние между соседними пунктами должно быть больше, чем расстояние между строчками одного длинного пункта. Это правило визуальной иерархии, применимое ко всему оформлению контента вообще.</div></li>
								<li><span>Вот и список закончился</span></li>
							</ol>
							
							<div class="main-block-title-5">Картинки, врезки и прочие элементы оформления</div>

							<p class="paragraph-5">Это обычный абзац. Их таких будет тут много, чтобы разбавлять заголовки и прочие элементы, которые обычно не идут друг за другом, а сочетаются с абзацами текста. Алиса сидела со старшей сестрой на берегу и маялась: делать ей было совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда, сунула нос в книгу, которую сестра читала, но там не оказалось ни картинок, ни стишков. «Кому нужны книжки без картинок, — или хоть стишков, не понимаю!» — думала Алиса.</p>
							
							<div class="mark-text"><div> Это врезка. С помощью неё оформляются ключевые мысли и фразы. Или цитаты. Он не должен быть слишком большим.</div></div>
							<div class="img-text">
							<img src="img/main/big-boat-img.png" alt=""></div>
							<div class="block">	
							<p class="paragraph-6">Картинка по левому краю внутри абзаца. Их таких будет тут много, чтобы разбавлять заголовки и прочие элементы, которые обычно не идут друг за другом, а сочетаются с абзацами текста. Алиса сидела со старшей сестрой на берегу и маялась: делать ей было совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда, Алиса сидела со старшей сестрой на берегу и маялась: совершенно нечего, а сидеть без дела, сами знаете, дело нелегкое; раз-другой она, правда,сунула нос в книгу, которую сестра читала, но там не оказалось ни картинок, ни стишков. «Кому нужны книжки без картинок, — или хоть стишков, не понимаю!» — думала Алиса.</p></div>

							<p class="paragraph-7">С горя она начала подумывать (правда, сейчас это тоже было дело не из легких — от жары ее совсем разморило), что, конечно, неплохо бы сплести венок из маргариток, но плохо то, что тогда нужно подниматься и идти собирать эти маргаритки, как вдруг... Как вдруг совсем рядом появился белый кролик с розовыми глазками!</p>
							<p class="paragraph-8">Тут, разумеется, еще не было ничего такого необыкновенного; Алиса-то не так уж удивилась, даже когда услыхала, что Кролик сказал (а сказал он: «Ай-ай-ай! Я опаздываю!»). Кстати, потом, вспоминая обо всем этом, она решила, что все-таки немножко удивиться стоило, но сейчас ей казалось, что все идет как надо.</p>
							
							<div class="name-table">Таблицы</div>
							<div class="table-container">
								
							
							<table class="content-table">
								<tr class="row-1">
									<td>Названи</td>								
									<td>Наименование</td>		
									<td class="hide-tab">Артикул	</td>	
									<td class="hide-tab">Модель</td>										
								</tr>
								<tr class="row-2">
									<td>Ширина 	</td>								
									<td>Rolex Oyster Perpetual Date Submariner	</td>		
									<td class="hide-tab">К0471	</td>	
									<td class="hide-tab">Rolex</td>	
								</tr>
								<tr class="row-3">
									<td>Название</td>								
									<td>Rolex Oyster Perpetual-Master IIRolex <br> Submarine</td>		
									<td class="hide-tab">Артикул</td>	
									<td class="hide-tab">Модель</td>
								</tr>
								<tr class="row-2">
									<td>Ширина 	</td>								
									<td>Rolex Oyster Perpetual Date Submariner</td>		
									<td class="hide-tab">К0471</td>	
									<td class="hide-tab">Rolex</td>
								</tr>
								<tr class="row-3">
									<td>Ширина 	</td>								
									<td>Rolex Oyster Perpetual-Master II Rolex <br>Submarine</td>		
									<td class="hide-tab">Артикул</td>	
									<td class="hide-tab">Модель</td>
								</tr>
								<tr class="row-2">
									<td>Ширина </td>								
									<td>Rolex Oyster Perpetual Date Submariner	</td>		
									<td class="hide-tab">К0471</td>	
									<td class="hide-tab">Rolex</td>
								</tr>

							</table>
				</div>
								

				</div>

	 					</div>
	 					<div class="main-news">
	 						<div class="main-news-title">Новости</div>
	 						<div class="main-news-block-content">
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
	 									<a href="" class="block-info-1">Читать статью <img src="img/main/info-btn.png" alt=""></a>
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
	 									<div class="block-title">В Югре напечатаны и переданы</div>
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
let menu = document.getElementsByClassName('menu')[0];

function toggleMenu() {
  if (menu.className === "menu") {
    menu.className += " open";
  } else {
    menu.className = "menu";
  }
}
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