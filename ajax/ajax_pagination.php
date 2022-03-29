<?php

$con =mysqli_connect('localhost','root','','ali');

$sql ="SELECT * FROM ali";

$result =mysqli_query($con,$sql);
$output "";

if=(mysqli_num_row($result) > 0){
	$output.'<table border="1px" cellspacing="0" width="100%" cellpadding="10px">

<tr>
<th width="100px"> Email </th>
<th width="100px"> Password </th>
</tr>';
while (mysql_fetch_assoc($result)) {

}
}







?>