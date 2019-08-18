<?php
    require 'connect.php';
  
    // get dữ liệu
    if($_POST['idtinsua1'])
    {

        $username = $_POST['username'];
        $level = $_POST['level'];
        $hinhanhuser = $_POST['hinhanhuser'];

        $idtinsua1=$_POST['idtinsua1'];
        $tieudetinsua=$_POST['tieudetinsua'];
        $noidungtinsua=$_POST['noidungtinsua'];
        $iddanhmucsua=$_POST['iddanhmucsua'];
        $hinhanhtinsua=$_POST['hinhanhtinsua'];
        $tomtattinsua=$_POST['tomtattinsua'];
     
        // sql
        $sql= "UPDATE `tin` SET `tieudetin` = '$tieudetinsua', `noidungtin` = '$noidungtinsua', `iddanhmuc` = '$iddanhmucsua', `hinhanhtin` = '$hinhanhtinsua', `tomtattin` = '$tomtattinsua' WHERE `tin`.`idtin` ='$idtinsua1'";
        $data=mysqli_query($con,$sql);
        if($data)
        {
            header('location: themtin.php?level=' . $level . '&hinhanhuser=' . $hinhanhuser . '&username=' .$username. '');
        }else
        {
            echo "Chưa update được tin sửa";
        }
    }else
    {
        echo "null";
    }

   
    
    
  
?>