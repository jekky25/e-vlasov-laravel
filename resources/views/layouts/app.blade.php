<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Программист 1С Битрикс - Евгений Власов</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="yandex-verification" content="ddd70da113dd26d6" />
	<meta name="description" content="Услуги Битрикс программиста. Оставьте заявку на разработку сайта на Битрикс.">
	<meta property="og:description" content="Услуги Битрикс программиста. Оставьте заявку на разработку сайта на Битрикс." />
	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" >
	<link rel="stylesheet" href="{{ asset("css/bootstrap-select.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/style.css") }}" >
	<link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/jquery-ui.min.css") }}">
	<link rel="stylesheet" href="{{ asset("js/highslide/highslide.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("js/lightGallery.css") }}"/>
	<link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
	<link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/bootstrap-select.min.js") }}"></script>
	<script src="{{ asset("js/common.js") }}"></script>
	<script src="{{ asset("js/owl.carousel2.js") }}"></script>
	<script src="{{ asset("js/owl.navigation.js") }}"></script>
	<script src="{{ asset("js/jquery-ui.min.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/highslide/highslide.js") }}"></script>
	<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
	<script src="{{ asset("js/lightGallery.min.js") }}"></script>
<script>
	$(document).ready(function() {
			$("#lightGallery").lightGallery();
	});
</script>
</head>
<body>
		<header class="v-mod">
			<section class="head-menu">
				<ul class="head-menu-list">
					<li v-for="name in names" :class="name.class"><a :href="name.href">@{{name.n}}</a></li>
				</ul>
				<div class="logo">Программист 1С - Битрикс</div>
				<div class="but-order-over"><div class="but-order">Оставить заявку</div></div>
				<div class="icon-menu"></div>
				<div class="mobile-menu-main-item">
					<div class="close-menu"></div>
					<ul class="head-menu-list-mob">
						<li v-for="name in names" :class="name.class"><a :href="name.href">@{{name.n}}</a></li>
					</ul>
				</div>

			</section>
		</header>
		@yield('main_body')
		<footer>
		<section class="foot-menu v-mod-foot">
			<ul class="foot-menu-list">
				<li v-for="name in names" :class="name.class"><a :href="name.href">@{{name.n}}</a></li>
			</ul>
			<div class="logo-foot">Евгений Власов. Битрикс Разработка (с) 2018</div>
		</section>
	</footer>
	<script>
		var menu = [
					{n:'Обо мне', href:'#about'}, 
					{n:'Услуги', href:'#service'}, 
					{n:'Стоимость', href:'#price'}, 
					{n:'Контакты', href:'#contact'}, 
					{n:'jekky25@list.ru', href:'mailto:jekky25@list.ru', class:'mail'}, 
					{n:'jekky25', href:'skype:jekky25?call', class:'skype'}
		];
		app = new Vue({
			el: '.v-mod',
			data:	{
				names : menu
			}
		});
		app = new Vue({
			el: '.v-mod-foot',
			data:	{
				names : menu
			}
		});
	</script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter50183023 = new Ya.Metrika2({ id:50183023, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/50183023" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>