<?php
require 'connect.php';
if ($_GET['username']) {
   
    $usernamexoa=$_GET['usernamexoa'];
    $passwordxoa=$_GET['passwordxoa'];
    $levelxoa=$_GET['levelxoa'];
    $iduserxoa=$_GET['iduserxoa'];
    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $iduserxoa;


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
                        <h1>Thông tin user xóa</h1>

                        <table class="table table-light " style="border:1px solid black">
                            <tbody>
                                <tr>
                                    <th style="border:1px solid black">ID user</th>
                                    <th style="border:1px solid black">Username</th>
                                    <th style="border:1px solid black">Password</th>
                                    <th style="border:1px solid black">Level</th>
                                    <th style="border:1px solid black">Tùy chỉnh</th>

                                </tr>
                                <tr>
                                <form action="xoauser1.php" method="post">
                                        <!-- <td></td> -->
                                        <input type="hidden" name="username" value="<?php echo $username;?>">
                                        <input type="hidden" name="hinhanhuser" value="<?php echo $hinhanhuser;?>">
                                        <input type="hidden" name="level" value="<?php echo $level;?>">
                                       
                                        <input type="hidden" name="iduserxoa" value="<?php echo $iduserxoa ?>">
                                        <td><?php echo $iduserxoa;?></td>
                                        <td><?php echo $usernamexoa;?></td>
                                        <td><?php echo $passwordxoa;?></td>
                                        <td><?php echo $levelxoa;?></td>
                                        
                                        <td><input  type="submit" value="DELETE "></td>
                                </form>
         
                                </tr>

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