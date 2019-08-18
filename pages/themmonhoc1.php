<?php
require 'connect.php';

if ($_POST['username']) {
   
   
    $iduser=$_POST['iduser'];
    $tenmonhocthem=$_POST['tenmonhocthem'];
    $ngaybatdauthem=$_POST['ngaybatdauthem'];
    $ngayketthucthem=$_POST['ngayketthucthem'];
    $trangthaithem=$_POST['trangthaithem'];


    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $passwordsua;
    // echo $idusersua;

    $sql= "INSERT INTO `monhoc` ( `tenmonhoc`, `iduser`, `ngaybatdau`, `ngayketthuc`, `trangthai`) VALUES ('$tenmonhocthem', '$iduser', '$ngaybatdauthem', '$ngayketthucthem', '$trangthaithem') ";
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
