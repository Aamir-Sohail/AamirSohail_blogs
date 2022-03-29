<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagination</title>
</head>
<body>
	<table>
	<tr>	
	<th>Page Name</th>
</tr>
<th id="data_here"></th>

	</table>
	<!-- <a href="1">1</a>
	<a href="2">2</a>
	<a href="3">3</a>
	<a href="4">4</a>
	<a href="5">5</a>
	<a href="6">6</a> -->
	<?php 
	$con =mysqli_connect('localhost','root','','ali');
	$count = "SELECT COUNT(*) as count FROM page";
    $count_result = mysqli_query($con, $count);
    $total = mysqli_num_rows($count_result);
	$offset = ceil($total/5);
	
	for($i = 1; $i < $offset+1; $i++){
		echo '<button onclick="load('.$i.')">'.$i.'</button>';
	}
	?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function load(a){
	$.ajax({
		url : 'load.php',
		type : 'GET',
		data : {load : a},
		success: function(response){
			// console.log(response);
			$("#data_here").html(response);
		}
	})
}
load(1);
</script>
</html>