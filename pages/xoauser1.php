<?php
require 'connect.php';
if ($_POST['username']) {
    $iduserxoa=$_POST['iduserxoa'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    // echo $idusersua;

    $sql= "DELETE FROM `user` WHERE iduser = '$iduserxoa'";
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
