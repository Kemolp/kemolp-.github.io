<?php  

$sname = "fdb1027.biz.nf";
$uname = "4250531_kemolp";
$password = "pSEtx3l70BQ0*P6I";
$db_name = "4250531_kemolp";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>