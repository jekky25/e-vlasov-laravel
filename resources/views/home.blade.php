@extends('layouts.app')
@section('main_body')
<section class="block-over1">
	<div class="block-over1-over">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8">
					<h1>Евгений Власов</h1>
					<div class="text1">Поддержка и разработка сайтов на 1с-битрикс. Сертифицированный 1c- Битрикс разработчик.</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="face"><img src="images/face.jpg" alt="Евгений Власов" title="Евгений Власов" /></div>
					<div class="text1-mob">Поддержка и разработка сайтов на 1с-битрикс. Сертифицированный 1c- Битрикс разработчик.</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block-over2">
	<div class="block-over2-over">
		<h2>Обо мне</h2>
		<div class="text2">
			<p>Меня зовут Евгений Власов.  Имею сертификаты от Битрикс.  Специализируюсь на CMS 1с-Битрикс. Занимаюсь Битрикс с 2010 года. Буду рад сотрудничеству с Вами в этом направлении в качестве разработчика.</p>
			<p></p>
			<p>Основная деятельность.  Разработка и поддержка сайтов на 1с-Битрикс, разработка и программирование модулей и компонентов на 1с-Битрикс.
Наиболее частые вопросы, которые приходится решать:</p>
			<p></p>
			<ul>
				<li>Доработка шаблонов на Битрикс</li>
				<li>Ускорение загрузки сайта</li>
				<li>Исправление ошибок, допущенных предыдущими программистами</li>
				<li>Добавление на сайт форм обратной связи (заказать звонок, задать вопрос) и прочих всплывающих окон</li>
				<li>Добавление на сайт различных слайдеров</li>
				<li>Интеграция сортировок товара</li>
				<li>Доработки интернет-магазинов</li>
				<li>Работы по импорту и экспорту товаров</li>
				<li>Интеграция виджетов и компонентов под Битрикс</li>
			</ul>
			<p></p>
		</div>
		<sertificates></sertificates>
		<div class="but-order-sert"><div class="but-order">Оставить заявку</div></div>
	</div>
</section>
<section class="block-over3">
	<div class="block-over3-over">
		<h2>Услуги</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<ul>
						<li>Разработка и доработка шаблонов на Битрикс</li>
						<li>Адаптивная верстка шаблонов по макетам</li>
						<li>Интеграция верстки в Битрикс</li>
						<li>Доработка шаблонов на Битрикс</li>
						<li>Добавление на сайт форм обратной связи</li>
						<li>Интеграция виджетов в Битрикс</li>
						<li>Разработка и доработка компонентов</li>
						<li>Разработка модулей</li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<ul>
						<li>Интеграция с 1с</li>
						<li>Интеграция с сервисами доставки</li>
						<li>Интеграция с сервисами оплаты</li>
						<li>Исправление ошибок, допущенных другими разработчиками</li>
						<li>SEO работы (правки МЕТА заголовков, внедрение микроразметки по тз SEO оптимизаторов)</li>
						<li>Уменьшение скорости загрузки сайта</li>
						<li>Прочие задачи по ТЗ заказчиков</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block-over4">
	<div class="block-over4-over">
		<form-feed-back csrf_field="{{csrf_token()}}" route="{{route('send_mess')}}"></form-feed-back>
	</div>
</section>
<section class="block-over5">
	<div class="block-over5-over">
		<h2>Стоимость работ</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<ul>
						<li>У Вас должно быть тз или как минимум точное понимание того, что вы в итоге хотите получить</li>
						<li>Подготовлены доступы к сайту</li>
						<li>Имеется вся информация по проекту</li>
						<li>На работы имеется приблизительный бюджет и вы готовы его озвучить</li>
					</ul>
					<div class="price-table price-table-mob">
						<table>
							<thead>
							<tr>
								<td>Кол-во часов</td>
								<td>Ставка</td>
							</tr>
							</thead>
							<tr>
								<td>до 5 часов</td>
								<td>1300 руб./час</td>
							</tr>
							<tr>
								<td>от 5 до 10 часов</td>
								<td>1200 руб./час</td>
							</tr>
							<tr>
								<td>от 10 до 40 часов</td>
								<td>1100 руб./час</td>
							</tr>
							<tr>
								<td>> 40 часов</td>
								<td>1000 руб./час</td>
							</tr>
						</table>
					</div>
					<div class="but-price-block"><div class="but-order">Оставить заявку</div></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="price-table">
						<table>
							<thead>
							<tr>
								<td>Кол-во часов</td>
								<td>Ставка</td>
							</tr>
							</thead>
							<tr>
								<td>до 5 часов</td>
								<td>1300 руб./час</td>
							</tr>
							<tr>
								<td>от 5 до 10 часов</td>
								<td>1200 руб./час</td>
							</tr>
							<tr>
								<td>от 10 до 40 часов</td>
								<td>1100 руб./час</td>
							</tr>
							<tr>
								<td>> 40 часов</td>
								<td>1000 руб./час</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>
<section class="block-over6">
	<div class="block-over6-over">
		<h2>Контакты</h2>
		<div class="contacts-table">
			<table>
				<tr>
					<td class="cont-e-mail">Е-майл:</td>
					<td><a href="mailto:jekky25@list.ru">jekky25@list.ru</a></td>
				</tr>
				<tr>
					<td class="cont-skype">Skype:</td>
					<td><a href="skype:jekky25?call">jekky25</a></td>
				</tr>
				<tr>
					<td class="cont-telegram">Telegram:</td>
					<td>по запросу</td>
				</tr>
				<tr>
					<td class="cont-phone">Телефон:</td>
					<td>по запросу</td>
				</tr>
				<tr>
					<td class="cont-city">Город:</td>
					<td>Орел</td>
				</tr>				
			</table>
		</div>
	</div>
</section>
@overwrite