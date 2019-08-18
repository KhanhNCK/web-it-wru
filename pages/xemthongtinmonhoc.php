<?php
require 'connect.php';
if ($_GET['username']) {
    $iduser = $_GET['iduser'];
    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $level;
    // echo $iduser;
   
    
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

  <?php require 'headerphp.php'?>

                  <div class="container-fluid">
                  <div class="container bangtin">
   <h1>Danh sách các môn học của  <?php echo $username;?></h1>
   
   <table class="table table-light " style="border:1px solid black">
       <tbody>
           <tr>
              <th style="border:1px solid black">Tùy chọn</th>
              <th style="border:1px solid black">ID môn học</th>
              <th style="border:1px solid black">Tên môn học</th>
              <th style="border:1px solid black">Ngày bắt đầu</th>
              <th style="border:1px solid black">Ngày kết thúc</th>
              <th style="border:1px solid black">Trạng thái</th></th>
          
           </tr>
           
           <?php
            // echo $password;
            $sql1 = "SELECT * FROM `monhoc` WHERE monhoc.iduser ='$iduser'";
            
            $data1 = mysqli_query($con, $sql1);
            if ($data1) {
                while($row1 = mysqli_fetch_array($data1, MYSQLI_ASSOC))
                {
                    
        echo '<tr>';
        echo ' <td style="border:1px solid black"><a style="color:black;" href="suamonhoc.php?iduser='.$iduser.'&trangthaithem='.$row1['trangthai'].'&ngayketthucthem='.$row1['ngayketthuc'].'&ngaybatdauthem='.$row1['ngaybatdau'].'&idmonhocthem='.$row1['idmonhoc'].'&tenmonhocthem='.$row1['tenmonhoc'].'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer">Sửa môn</a> 
        <br> <br>   <a style="color:black;" href="xoamonhoc.php?&trangthaithem='.$row1['trangthai'].'&ngayketthucthem='.$row1['ngayketthuc'].'&ngaybatdauthem='.$row1['ngaybatdau'].'&idmonhocthem='.$row1['idmonhoc'].'&tenmonhocthem='.$row1['tenmonhoc'].'&iduser='.$iduser.'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer">Xóa môn</a>
        <br> <br> <a style="color:black;" href="xemdanhsachlop.php?tenmonhoc='.$row1['tenmonhoc'].'&iduser='.$iduser.'&idmonhoc='.$row1['idmonhoc'].'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer">Xem danh sách lớp</a>
        <br> <br> <a style="color:black;" href="themhocsinh.php?iduser='.$iduser.'&tenmonhoc='.$row1['tenmonhoc'].'&idmonhoc='.$row1['idmonhoc'].'&level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"  rel="noopener noreferrer">ADD học sinh</a></td>';             

        echo ' <td style="border:1px solid black"><a style="color:black;" href="#"  rel="noopener noreferrer">'.$row1['idmonhoc'].'</a></td>';  
        echo ' <td style="border:1px solid black"><a style="color:black;" href="#"  rel="noopener noreferrer">'.$row1['tenmonhoc'].'</a></td>';
        echo ' <td style="border:1px solid black"><a style="color:black;" href="#"  rel="noopener noreferrer">'.$row1['ngaybatdau'].'</a></td>';
        echo ' <td style="border:1px solid black"><a style="color:black;" href="#"  rel="noopener noreferrer">'.$row1['ngayketthuc'].'</a></td>';           
        echo ' <td style="border:1px solid black"><a style="color:black;" href="#"  rel="noopener noreferrer">'.$row1['trangthai'].'</a></td>';
        
        echo '</tr>';
                }
              
            } else {
                echo "null";
            }
           
               
            
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