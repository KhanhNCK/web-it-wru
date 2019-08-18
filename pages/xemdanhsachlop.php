<?php
require 'connect.php';
if ($_GET['username']) {
    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $level;

    $iduser = $_GET['iduser'];
    $idmonhoc = $_GET['idmonhoc'];
    $tenmonhoc = $_GET['tenmonhoc'];
    
    // echo $idmonhoc;
    
} else {
    echo " CHưa post được giá trị";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap4.3.1.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Cổng thông tin trường Đại học Thủy Lợi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin boostrap/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin boostrap/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="admin boostrap/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="admin boostrap/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin boostrap/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin boostrap/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin boostrap/css/style1.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin boostrap/css/style2.css">
    <link rel="stylesheet" href="admin.css">

  
  </head>
  <body>

    <?php
      require 'headerphp.php';
    ?>

      <div class="container-fluid">
      <div class="container bangtin">
                    <h1>Xem danh sách lớp của môn học :  <?php echo $tenmonhoc;?></h1>
                    
                    <table class="table table-light " style="border:1px solid black">
                        <tbody>
                        <tr>
                                <th style="border:1px solid black">Tùy chọn</th>
                                <th style="border:1px solid black">ID môn học</th>             
                                <th style="border:1px solid black">ID học sinh </th></th>
                                <th style="border:1px solid black">Email học sinh</th>
                            
                            </tr>
                            <?php
                              $sql = "SELECT * FROM `lop` WHERE idmonhoc = '$idmonhoc'";
                              $data=mysqli_query($con,$sql);
                              while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
                              {
                                  echo '<tr>';

                                  echo ' <td style="border:1px solid black"><a style="color:black;" href="suahocsinh.php?tenmonhoc='.$tenmonhoc.'&iduser='.$iduser.'&emailhocsinh='.$row['emailhocsinh'].'&idhocsinh='.$row['idhocsinh'].'&idmonhoc='.$idmonhoc.'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer"> Sửa học sinh</a>
                                                <br>   <br> <a href ="xoahocsinh.php?tenmonhoc='.$tenmonhoc.'&iduser='.$iduser.'&emailhocsinh='.$row['emailhocsinh'].'&idhocsinh='.$row['idhocsinh'].'&idmonhoc='.$idmonhoc.'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"> Xóa học sinh  </a></td>';                
                                  echo ' <td style="border:1px solid black">'.$idmonhoc.'</td>';  
                                  echo ' <td style="border:1px solid black">'.$row['idhocsinh'].'</td>';
                                  echo ' <td style="border:1px solid black">'.$row['emailhocsinh'].'</td>';
                                
                                  echo '</tr>';     
                              }
                              echo '<tr tyle="border:1px solid black"> <a style="color:black;" href="themhocsinh.php?iduser='.$iduser.'&tenmonhoc='.$tenmonhoc.'&idmonhoc='.$idmonhoc.'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer">ADD học sinh</a></tr>';
                            ?>

                            
                        
                            
                        </tbody>
                    </table>
       </div> 

        </div>
          
          </div>
        </div>
      </div> 
      
    
   

      <script src="admin boostrap/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin boostrap/vendors/js/vendor.bundle.addons.js"></script> -->
  
    <script src="admin boostrap/js/shared/off-canvas.js"></script>
    <script src="admin boostrap/js/shared/misc.js"></script>
  
    <script src="admin boostrap/js/demo_1/dashboard.js"></script>

</body>

</html>