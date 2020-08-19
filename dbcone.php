<?php

$server= 'localhost';
$user ='root';
$password ='';
$db ='coronadb';


$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		alert("conection sucessfull");
	</script>
	<?php
}else{
	?>
	<script>
		alert(" NO conection sucessfull");
	</script>
	<?php
}


?>