<?php
// require 'connect.php';
// $sql = "SELECT * FROM `tin` WHERE tin.iddanhmuc = 1; ";
//     $data = mysqli_query($con,$sql);
  
    //  class tin{
    //     function tin($idtin,$tieudetin,$tomtattin,$noidungtin,$iddanhmuc,$hinhanhtin)
    //         {
        
    //             $this-> idtin = $idtin;
    //             $this-> tieudetin = $tieudetin;
    //             $this-> tomtattin = $tomtattin;
    //             $this-> noidungtin = $noidungtin;
    //             $this-> iddanhmuc = $iddanhmuc;
    //             $this-> hinhanhtin = $hinhanhtin;
        
    //         }	
        
    //     };
        
    //         $mang= array();
    //         while ($row = mysqli_fetch_assoc($data)) {
        
    //             array_push($mang, new tin(	$row['tieudetin'],
    //                                                 $row['tomtattin'],											
    //                                                 $row['noidungtin']										
    //                                                 ));
    //             };
    //             echo json_encode($mang);
                
    // $row = mysqli_fetch_array($data,MYSQLI_ASSOC);
    // echo json_encode($row['tomtattin']);
?>
<?php

    require "connect.php";
    
 
    $sql="SELECT * FROM `tin` WHERE tin.iddanhmuc = 1;";
    $result=mysqli_query($con,$sql);
    
    // Numeric array
//     $row=mysqli_fetch_array($result,MYSQLI_NUM);
//    echo $row[0].$row[1];
    
    // Associative array
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   echo $row["noidungtin"].'<br>'.$row["tieudetin"];
    // echo json_encode($row["noidungtin"]);
 
    
    mysqli_close($con);

   
?>