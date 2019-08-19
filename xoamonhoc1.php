<?php
require 'connect.php';

if ($_POST['username']) {
   
    $idmonhoc=$_POST['idmonhocthem'];
    $iduser=$_POST['iduser'];

    // echo $idmonhoc;


    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    // echo $idusersua;

    $sql1= "DELETE FROM `monhoc` WHERE idmonhoc ='$idmonhoc'";
    $sql2= "DELETE FROM `lop` WHERE idmonhoc ='$idmonhoc'";
        $data1=mysqli_query($con,$sql1);
        $data2=mysqli_query($con,$sql2);
        if($data1)
        {
            header('location: xemthongtinmonhoc.php?iduser='. $iduser .'&level=' . $level . '&hinhanhuser=' . $hinhanhuser . '&username=' .$username. '');
        }else
        {
            echo "Chưa get được thong tin";
        }

} else 
{
    echo " CHưa post được giá trị";
}

?>
