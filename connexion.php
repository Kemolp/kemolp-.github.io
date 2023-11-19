<?php  

$sname = "fdb1027.biz.nf";
$uname = "4250531_kemolp";
$password = "Nuqawu-8";
$db_name = "4250531_kemolp";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>