<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

	<style type="text/css" media="screen">
		/*html, body {
		  font: 13px/18px sans-serif;
		}
		select {
		  min-width: 300px;
		}*/
	</style>
</head>
<body>


<div id="el">
	<div>
	    <p>Selected: {{ selected }}</p>
	    <select2 :options="options" v-model="selected">
	      <option disabled value="0">Select one</option>
	    </select2>
	</div>
</div>

<!-- using string template here to work around HTML <option> placement restriction -->



	<script src="https://code.jquery.com/jquery-3.2.0.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://unpkg.com/vue@2.2.4"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



	<script type="text/x-template" id="demo-template">
	  <div>
	    <p>Selected: {{ selected }}</p>
	    <select2 :options="options" v-model="selected">
	      <option disabled value="0">Select one</option>
	    </select2>
	  </div>
	</script>

	<!-- <script type="text/x-template" id="select2-template">
	  <select>
	    <slot></slot>
	  </select>
	</script> -->


	<script type="text/javascript">

		Vue.component('select2', {
			props: ['options', 'value'],
			template: '<select><slot></slot></select>',
			mounted: function () {
				var vm = this
				$(this.$el)
				  .val(this.value)
				  // init select2
				  .select2({ data: this.options })
				  // emit event on change.
				  .on('change', function () {
				    vm.$emit('input', this.value)
				  })
			},
			watch: {
				value: function (value) {
				  // update value
				  $(this.$el).val(value)
				},
				options: function (options) {
				  // update options
				  $(this.$el).select2({ data: options })
				}
			},
			destroyed: function () {
				$(this.$el).off().select2('destroy')
			}
		})

		var vm = new Vue({
		  el: '#el',
		  //template: '#demo-template',
		  data: {
		    selected: 0,
		    options: [
		      { id: 1, text: 'Hello' },
		      { id: 2, text: 'World' },
		      { id: 3, text: 'aaa' },
		      { id: 4, text: 'abbb' },
		      { id: 5, text: 'abccc' },
		    ]
		  }
		})
	</script>
</body>
</html>