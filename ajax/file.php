<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>file</title>
	<style>
	.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}
	</style>
</head>
<body>
<form id="form-insert">
<input type="email" name="email" id="email" placeholder="EMAIL" >
<input type="password" name="password" id="password" placeholder="password" >
<input type="submit" name="submit" value="submit" id="submitdata">

</form>


<table id="" cellpadding="" cellspacing="">

<tr>
	<td id="load-id">
<button type="button" id="load-button" onclick="loadData();">load data</button>		
	</td>

	<td id="load-id">
	</td>
</tr>	

<td id="table-data">
	<table border="1" width="100%" cellspacing="0px" cellpadding="10px">
		<tr>
			<th>id</th>
			<th>email</th>
			<th>password</th>
			<th>action</th>
		</tr>
		

	</table>	






</td>

</table>

<div id="pagination"></div>

<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="1">1</a>
  <a  href="2">2</a>
  <a href="3">3</a>
  <a href="4">4</a>
  <a href="5">5</a>
  <a href="6">6</a>
  <a href="next page">&raquo;</a>
</div>
</div>



<script type="text/javascript" src="jquery.min.js"></script>



	

	


</script>
<script type="text/javascript">


	function loadData(){
		$.ajax({
			url:"fetch.php",
			success:function(data){
				$("#table-data").html(data);
			}
		});
	}
function loadData(){
		$.ajax({
			url:"fetch.php",
			success:function(data){
				$("#table-data").html(data);
				// alert(data);
			}
		});
	}

function deletedata(){
		$.ajax({
			url:"delete.php",
			type: 'GET',
			success:function(data){
				$("#table-data").html(data);
			}
		});
	}

	function insertdata(){
		$( document ).ready(function() {
			$('#form-insert').on('submit',function(){
        e.preventDefault();
				var formdata = $('#form-insert').serialize()+'&action=insert';
		// alert(formdata);
		$.ajax({
			method:"POST",
			url:"insert.php",
			data: formdata,
			success:function(data){
				$("#table-data").html(data);
			}
		});
			});

});

	// }

	function pageination(url) {
		$( document ).ready(function(){
			function loadtable(page){
	$.ajax({
		url:ajax_pagination,
		type: "POST",
		data:{page_no,page},
		beforeSend: function(){$("#overlay").show();},
		success: function(data){
		$("#table-data").html(data);
}		
	       
   });

}
}
}
loadtable();
$(document).on("click,#pageination a",function(e){

e.preventDefault();
var.page_id =$(this).attr("id");
loadtable(page_id);
})

</script>




</body>
</html>