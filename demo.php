<?php
    if(isset($_GET['p']))
    {
        $p=$_GET['p'];
    }else
    {
        $p=1;
    }

    require 'connect.php';
    $sotin=4;
    $from=($p - 1) * $sotin;
 
    $sql1 ="SELECT * FROM `tin` LIMIT $from,$sotin";
    $data1=mysqli_query($con,$sql1);
    while($row = mysqli_fetch_array($data1,MYSQLI_ASSOC))
    {
        echo $row['tieudetin'];
        echo '<br>';
    }


   
    $sql ="SELECT * FROM `tin` ";
    $data=mysqli_query($con,$sql);
    $sumtin=mysqli_num_rows($data);
    // echo $sumtin;
    $sotrang=ceil($sumtin/$sotin);echo '<br>';
    for( $t=1;$t<=$sotrang;$t++)
    {
        
        echo '<a href="demo.php?p='.$t.'">'.'trang:'.$t.'</a>';
    }
?>
