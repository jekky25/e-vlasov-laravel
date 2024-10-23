<template>
	<div>
		<h2>Заполните форму</h2>
		<div class="block-form"><div class="mess-success" v-html="successText" v-if="successText"></div>
			<form method="post" v-if="!successText" :action="$attrs.route" name="order-form">
				<input type="hidden" name="_token" autocomplete="off" :value="$attrs.csrf_field" />
				<div class="error-text" v-html="errorText" v-if="errorText"></div>
				<div class="form-group">
					<input v-model="name" @input="clearParams()" name="name" id="name" class="form-control" type="text" placeholder="Представьтесь"  />
				</div>
				<div class="form-group">
					<input v-model="email" @input="clearParams()" name="e-mail" id="e-mail" class="form-control" type="text" placeholder="Ваш E-mail" />
				</div>
				<div class="form-group">
					<textarea v-model="message" @input="clearParams()" name="message" id="message" class="form-control" placeholder="Ваше сообщение"></textarea>
				</div>
				<div class="but-order-form"><div class="but-order" @click="send()">Оставить заявку</div></div>
			</form>
		</div>
	</div>
</template>

<script>
	export default {
		name: "FormFeedBack",
		data() {
				return {
					regexpEmail:/^(?:[a-z0-9._]+(?:[-_.]?[a-z0-9._]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i,
					error:0,
					errorText:'',
					successText:'',
					data:new Object(),
					name:'',
					email:'',
					message:'',
					csrf_field: this.$attrs.csrf_field
				};
  			},
		mounted() {
		},
		methods: {
			send()
			{
				this.clearParams();
				this.checkName();
				this.checkEMail();
				this.checkMessage();
				if (!this.isError()) this.sendAjax();
				return false;
			},
			clearParams()
			{
				this.$data.errorText = '';
				this.$data.error = 0;
			},
			checkName()
			{
				if (this.name.length < 2) {
					this.$data.errorText += '<p>Имя не введено</p>';
					this.$data.error = 1;
				}
			},
			checkEMail() 
			{
				if (!this.email.match(this.$data.regexpEmail)) {
					this.$data.errorText += '<p>Некорректно введен е-майл</p>';
					this.$data.error = 1;
				}
			},
			checkMessage()
			{
				if (this.message.length < 2) {
					this.$data.errorText += '<p>Не введено сообщение</p>';
					this.$data.error = 1;
				}
			},
			isError()
			{
				return this.$data.error == 1 ? true : false;
			},
			showError()
			{
				return false;
			},
			getData()
			{
				this.data.name      = this.name;
				this.data.email     = this.email;
				this.data.message   = this.message;
				this.data._token    = this.csrf_field;
			},
			sendAjax()
			{
				this.getData();
				axios.post(this.$attrs.route, this.data)
				.then(res => {
					let success = res.data.success;
					if (success == 1)
					{
						this.successText = '<div class="mess-success">Спасибо! Сообщение успешно отправлено!</div>';
					}
				})
				.catch(res => {
					let errors = res.response.data.errors;
					for (var error in errors) {
						this.$data.errorText += '<p>' + errors[error][0] + '</p>';
						this.$data.error = 1;
					}
					this.showError();
				});
				return false;
			}
		}
	}
</script>