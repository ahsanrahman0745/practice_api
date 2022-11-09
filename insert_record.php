<?php
	require 'connect.php';


	if(@$_POST["name"] && @$_POST["password"]){
		$name=$_POST["name"];
		$password=$_POST["password"];
	$query ="INSERT INTO `user_table` 
	(`uid`, `uname`, `upass`) VALUES 
	(null, '$name', '$password') ";

if(mysqli_query($con,$query)){
	echo 'data save';
}else{
	echo "data not save";
}
	}

?>