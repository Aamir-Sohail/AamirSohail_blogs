<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>postmethode</title>
</head>
<body>

<form id="submit_form">
<input type="text" name="email" id="email"><br>
<input type="password" name="password" id="password"><br>
<input type="submit" name="submit" id="submit">
</form>
<div id="data_here"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
	
	$(document).ready(function(){

$('#submit_form').submit(function(e){
	e.preventDefault();
	var formdata = $('#submit_form').serialize()+ '&action=insert';
$.ajax({
		url : 'connection.php',
		type : 'POST',
		data : formdata,
		success: function(response){
			console.log(response);
			$("#data_here").html(response);
		}
	})
});

})




</script>



</body>
</html>