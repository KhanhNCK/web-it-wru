<?php
require 'connect.php';

if ($_POST['username']) {
   
    $usernamesua=$_POST['usernamesua'];
    $passwordsua=$_POST['passwordsua'];
    $levelsua=$_POST['levelsua'];
    $idusersua=$_POST['idusersua'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    echo $idusersua;

    $sql= "UPDATE `user` SET  `username` = '$usernamesua', `password` = '$passwordsua', `level` = '$levelsua' WHERE `user`.`iduser` = '$idusersua'";
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
