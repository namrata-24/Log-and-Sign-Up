<?php
require "conn.php";
$email=$POST["email"];
$pass=$POST["password"];
$mysql_qry="select * from users where email like '$email' && password like '$pass' ; ";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result)>0){
	echo "login sucess" ;
} else
	echo "not sucess";
?>