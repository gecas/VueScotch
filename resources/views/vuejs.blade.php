<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>

<component is="about-page" inline-template>
	<h2>About page</h2>

	<button @click="doSomething">Do</button>
</component>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.17/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
<script>

	Vue.component('home-page',{
	});	

	Vue.component('about-page',{
		methods : {
			doSomething: function(){
				alert('Hello');
			}
		}
	});	

	new Vue({
		el : 'body'
	});

</script>
</body>
</html>