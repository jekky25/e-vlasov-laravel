<template>
		<div class="sertificats">
			<div class="container">
				<div class="row owl-serts owl-carousel gallery" id="lightGallery">
					<div v-for="(sertificate, i) in sertificates" class="col-md-3 col-sm-3 col-xs-4" :data-src="sertificate.img"><span><img :src="sertificate.img" :alt="sertificate.name" :title="sertificate.name" /></span></div>
				</div>
			</div>
		</div>
</template>

<script>
	export default {
		name: "Sertificates",
		data() {
				return {
					sertificates: 
					[
						{'img':'images/sert_sm1.jpg', 'name': 'Контент менеджер'},
						{'img':'images/sert_sm2.jpg', 'name': 'Установка и настройка'},
						{'img':'images/sert_sm3.jpg', 'name': 'Администратор.Базовый'},
						{'img':'images/sert_sm4.jpg', 'name': 'Администратор.Модули'},
						{'img':'images/sert_sm5.jpg', 'name': 'Администратор.Бизнес'},
						{'img':'images/sert_sm6.jpg', 'name': 'Разработчик Bitrix Framework'},
						{'img':'images/sert_sm7.jpg', 'name': 'Технология Композитный сайт'},
						{'img':'images/sert_sm8.jpg', 'name': 'Многосайтовость'},
						{'img':'images/sert_sm9.jpg', 'name': 'Продвижение сайта и Маркетинг'},
						{'img':'images/sert_sm10.jpg', 'name': 'Бизнес процессы'},
						{'img':'images/sert_sm11.jpg', 'name': 'Курс для хостеров'},
						{'img':'images/sert_sm12.jpg', 'name': 'Администратор сервиса Битрикс24 (коробочная версия)'},
						{'img':'images/sert_sm13.jpg', 'name': 'Vue.js и Bitrix Framework'}
					]
				};
  			},
		mounted() {
		},
		methods: {

		}
	}
</script>