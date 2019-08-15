<?php
require 'connect.php';
if ($_POST['username']) {
    $hinhanhuser=$_POST['hinhanhuser'];
    $usernamethem=$_POST['usernamethem'];
    $passwordthem=$_POST['passwordthem'];
    $levelthem=$_POST['levelthem'];


    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $usernamethem;
    // echo $passwordthem;

    $sql= "INSERT INTO `user` (`iduser`, `username`, `password`, `level`, `hinhanhuser`) 
    VALUES (NUll, '$usernamethem', '$passwordthem', '$levelthem', '$hinhanhuser');";
        $data=mysqli_query($con,$sql);
        if($data)
        {
            header('location: xemdanhsachuser.php?level=' . $level . '&hinhanhuser=' . $hinhanhuser . '&username=' .$username. '');
        }else
        {
            echo "Chưa get được thong tin";
        }

} else 
{
    echo " CHưa post được giá trị";
}

?>
