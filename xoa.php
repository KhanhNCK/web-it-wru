
    <?php
require 'connect.php';
if ($_GET['username']) {
    $idtinxoa=$_GET['idtinxoa'];

    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $level;
    $sql= "SELECT * FROM `tin` WHERE tin.idtin='$idtinxoa'";
    $data=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($data,MYSQLI_ASSOC);
    
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
                  <h2>Bạn có chắc chắn muốn xóa tin có thông tin như sau : </h2> <br>
                            <table>
                                <tr>
                                    <th style="border:1px solid black">ID tin</th>
                                    <th style="border:1px solid black">ID danh mục</th>
                                    <th style="border:1px solid black">Tiêu đề tin</th>
                                    <th style="border:1px solid black">Nội dung tin</th>
                                    <th style="border:1px solid black">Hình ảnh tin</th>
                                    <th style="border:1px solid black">Tóm tắt tin</th>
                                </tr>
                                <tr>
                                    <form action="xoatin.php" method="post">
                                    <input type="hidden" name="username" value="<?php echo $username;?>">
                                    <input type="hidden" name="hinhanhuser" value="<?php echo $hinhanhuser;?>">
                                    <input type="hidden" name="level" value="<?php echo $level;?>">

                                    <input type="hidden" name="idtinxoa" value="<?php echo $row['idtin']?>">
                                            <td><?php echo $row['idtin'] ?></td>
                                            <td><?php echo $row['iddanhmuc'] ?></td>
                                            <td><?php echo $row['tieudetin'] ?></td>
                                            <td><?php echo $row['noidungtin'] ?></td>
                                            <td><?php echo $row['hinhanhtin'] ?></td>
                                            <td><?php echo $row['tomtattin'] ?></td>
                                            
                            
                                            <td><input  type="submit" value="Xóa tin"></td>
                                    </form>
                                
                                </tr>
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