<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div id="app">
		{{nama}} - {{umur}}
	</div>

	<script script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js">
	</script>
	<script>
		var datatest = {
			nama: "Ardiyanto Putra",
			umur: 27
		}
		new Vue({
			el: '#app',
			data: datatest
		});
	</script>
</body>

</html>