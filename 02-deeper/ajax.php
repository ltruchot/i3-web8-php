<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Your page</title>
</head>
<body>
<input id="ipt" /><button id="btn">Envoyer</button>
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
<script>
$("#btn").click(event => {
	$.post({ 
		url: "request.php",
		data: { name: $("#ipt").val() },
		success: data => alert(data)
	});
});	
</script>
</body>
</html>