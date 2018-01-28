<?php
require "conn.php";
$first = $POST[a];
$last=$POST[b];
$blood=$POST[e];
$add=$POST[c];
$con=$POST[d];
$email=$POST[f];
$pass=$POST[g];
$mysql_qry="INSERT INTO `users`(`first`, `last`, `blood`, `address`, `contact`, `email`, `password`) VALUES ('$first','$last','$blood','$add',$con,'$email','$pass' ); " ;
if($conn->query($mysql_qry)==true){
echo "insertion succesful";
} else
echo "insertion not succesful ";
?>