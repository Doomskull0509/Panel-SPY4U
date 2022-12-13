<?php

include('conexion.php');

$queryselect 	= mysqli_query($conn,"SELECT * FROM users_data_clients WHERE usuario = '$user'");
	$nr = mysqli_num_rows($queryselect); 



?>