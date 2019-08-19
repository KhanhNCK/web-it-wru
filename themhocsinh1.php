<?php
require 'connect.php';

if ($_POST['username']) {
   
    $idmonhocthem=$_POST['idmonhocthem'];
    $iduser=$_POST['iduser'];

    $idhocsinh=$_POST['idhocsinh'];
    $emailhocsinh=$_POST['emailhocsinh'];
  

    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    echo $idusersua;

    $sql= "INSERT INTO `lop` (`idmonhoc`, `idhocsinh`, `emailhocsinh` )VALUES ( '$idmonhocthem','$idhocsinh', '$emailhocsinh');";
        $data=mysqli_query($con,$sql);
        if($data)
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
