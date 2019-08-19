<?php

$hostname="localhost";
$username="root";
$password="";
$database="csetlu";

$con = mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($con, 'UTF8');
// if ($con) {

// 	echo "Thành công";

// 	}else
// 	{

// 		echo "khong thanh cong";

// 	};

?>