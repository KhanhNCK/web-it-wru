<?php
require 'connect.php';
if ($_POST['username']) {
    $tieudetinthem=$_POST['tieudetinthem'];
    $noidungtinthem=$_POST['noidungtinthem'];
    $iddanhmucthem=$_POST['iddanhmucthem'];
    $hinhanhtin=$_POST['hinhanhtin'];
    $tomtattin=$_POST['tomtattin'];


    $username = $_POST['username'];
    $level = $_POST['level'];
    $hinhanhuser = $_POST['hinhanhuser'];
    // echo $usernamethem;
    // echo $passwordthem;

    $sql= "INSERT INTO `tin` (`idtin`, `tieudetin`, `noidungtin`, `iddanhmuc`, `hinhanhtin`, `tomtattin`) VALUES (NULL, '$tieudetinthem', '$noidungtinthem', '$iddanhmucthem', '$hinhanhtin', '$tomtattin') ";

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
