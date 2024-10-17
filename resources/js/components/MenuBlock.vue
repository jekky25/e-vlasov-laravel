<template>
	<div>
	<ul><li v-for="name in names" :class="name.class"><a :href="name.href">{{name.n}}</a></li></ul>
	</div>
</template>

<script>
	export default {
		name: "MenuBlock",
		data() {
				return {
					names: 
					[
						{n:'Обо мне', href:'#about'}, 
						{n:'Услуги', href:'#service'}, 
						{n:'Стоимость', href:'#price'}, 
						{n:'Контакты', href:'#contact'}, 
						{n:'jekky25@list.ru', href:'mailto:jekky25@list.ru', class:'mail'}, 
						{n:'jekky25', href:'skype:jekky25?call', class:'skype'}
					]
				};
  			},
		mounted() {}
	}
</script>