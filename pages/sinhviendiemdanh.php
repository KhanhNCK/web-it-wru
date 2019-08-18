<?php
require 'connect.php';
if ($_GET['username']) {
    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $level;


    $iduser = $_GET['iduser'];
   
    // echo $tenmonhoc;
    
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

    <?php require 'headerphp.php';?>   
    
    <div class="container-fluid">
                  <div class="container bangtin">
   <h1>Các lớp học hiện đang được mở cho :  <?php echo $username;?>điểm danh :</h1>
   
   <table class="table table-light " style="border:1px solid black">
       <tbody>
       <tr>
           <?php
            $sql="SELECT *,monhoc.* FROM `lop` INNER JOIN monhoc ON monhoc.idmonhoc=lop.idmonhoc WHERE lop.idhocsinh='$username' AND monhoc.trangthai=1;";
            $data=mysqli_query($con,$sql);
           ?>
              
              <th style="border:1px solid black">ID môn học</th>
              <th style="border:1px solid black">Tên môn học</th>
              <th style="border:1px solid black">ID Giảng viên phụ trách</th>
              <th style="border:1px solid black">Ngày bắt đầu</th>
              <th style="border:1px solid black">Ngày kết thúc</th>
              <th style="border:1px solid black">Điểm danh </th></th>
            
          
           </tr>
          
                         <?php
                            while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
                            {
                                $idgiangvien=$row['iduser'];
                                $sql1="SELECT username FROM user WHERE iduser = '$idgiangvien'";
                                $data1=mysqli_query($con,$sql1);
                                $row1=mysqli_fetch_assoc($data1);

                echo'    <tr>         <td style="border:1px solid black">'.$row['idmonhoc'].'</td>
                                <td style="border:1px solid black">'.$row['tenmonhoc'].'</td>
                                <td style="border:1px solid black">'.$row1['username'].'</td>
                                <td style="border:1px solid black">'.$row['ngaybatdau'].'</td>
                                <td style="border:1px solid black">'.$row['ngayketthuc'].'</td>
                                <td style="border:1px solid black"><a href="" >Điểm danh</a></td> 
                                </tr> ';
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