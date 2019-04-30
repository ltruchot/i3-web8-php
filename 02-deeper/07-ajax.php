<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Your page</title>
</head>
<body>



<input id="ipt" />
<button id="btn">Envoyer</button>



<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
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
