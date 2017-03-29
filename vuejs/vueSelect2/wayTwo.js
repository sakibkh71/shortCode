Vue.component('v-select', VueSelect.VueSelect);

new Vue({
	el: "#app",
	data:{
		msg: "test msg msg msg msg",
		selected: '',
		countries:[
			{value: "CA", label: "Canada"},
			{value: "BD", label: "Bangladesh"},
			{value: "IND", label: "India"},
			{value: "PAK", label: "Pakistan"}
		],
		selected_countries: '',
		manyCountries: [],
	}
});
