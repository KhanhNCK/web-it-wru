<?php
require 'connect.php';
if ($_POST['username']) {
    $idtinxoa=$_POST['idtinxoa'];


    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    // echo $idusersua;

    $sql= "DELETE FROM `tin` WHERE idtin = '$idtinxoa'";
        $data=mysqli_query($con,$sql);
        if($data)
        {
            header('location: themtin.php?level=' . $level . '&hinhanhuser=' . $hinhanhuser . '&username=' .$username. '');
        }else
        {
            echo "Chưa get được thong tin";
        }

} else 
{
    echo " CHưa post được giá trị";
}

?>
