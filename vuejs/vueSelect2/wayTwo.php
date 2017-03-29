<!DOCTYPE html>
<html>
<head>
	<title>TEST vueJS Select2</title>
</head>
<body>
<a href="https://sagalbot.github.io/vue-select/" title="" target="_blank">sagalbot.github.io/vue-select/</a>

<div id="app">
	<br><br>###### 01 ########
		<v-select v-model="selected" :options="['foo','bar']"></v-select>
		Selected: {{selected}}

	<br><br>###### 02 ########
		<br>for multi select use multiple:
		<v-select multiple v-model="manyCountries" :options="countries"></v-select>
		Selected: 
		<ul>
			<li v-for="val in manyCountries">{{val.value +' -> '+ val.label}}</li>
		</ul>

	<br><br>###### 03 ########<br>
		<v-select v-model="selected_countries" :options="countries"></v-select>
		Selected Countries: {{ selected_countries.value }}
</div>

<script src="https://unpkg.com/vue@2.2.6"></script>
<script src="https://unpkg.com/vue-select@2.2.0"></script>
<script src="wayTwo.js"></script>
</body>
</html>



