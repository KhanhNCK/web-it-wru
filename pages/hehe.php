<!-- Phân trang:  http://www.hoclaptrinhweb.com/javascript-jquery-ajax/ky-thuat-phan-trang-su-dung-jquery-va-ajax-hltw5649.aspx -->
<?php
require 'connect.php';
?>
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo "div".$id."</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap4.3.1.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="trangchu.css">
    <script src="laytin.js"></script>
    <title>Cổng thông tin trường Đại Học Thủy Lợi</title>
</head>

<body>

    <!-- PHân khánh lam menu các logo -->
    <div class="container">
        <div >
            <ul>
                
                <li><a class="id1" href="hehe.php?id=1"> Các danh mục(ĐÀO tạo có id danh mục =1)</a></li>
                <li><a class="id1" href="hehe.php?id=2"> Các danh mục(ĐÀO tạo có id danh mục =2)</a></li>
                <li><a class="id1" href="hehe.php?id=3"> Các danh mục(ĐÀO tạo có id danh mục =3)</a></li>
            </ul>
        </div>
        
        <div class="login">
            <h2>Login </h2>
            <form action="admin.php" method="post">
               <input type="text" name="username" placeholder="Nhập username"> <br><br>
               <input type="password" name="password" placeholder="Nhập passwword"> <br>
              <input type="submit" value="login">
            </form>
        </div>
    </div>


    <!-- Phân hiển thị các trang theo danh mục -->
    <div class="container khung2">

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <?php
                   if(isset($id)){
                    $sql = "SELECT * FROM `danhmuc` where danhmuc.iddanhmuc = '$id';  "; 
                    $data = mysqli_query($con, $sql);
                    if ($data == TRUE) {
                        $row = mysqli_fetch_array($data, MYSQLI_ASSOC);
                        echo '<p>'.$row['tendanhmuc'].'</p>';
                    }
                   } 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-9 col-md-9 col-sm-9 " id="ketqua">
                <div class="row">
                    <?php
                if (isset($id)) {
                        $sql = "SELECT * FROM `tin` where tin.iddanhmuc = '$id';  ";
                        $data = mysqli_query($con, $sql);
                        if ($data == TRUE) {
                           
                            while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                                 echo ' <div class="col-lg-3 col-md-3 col-12 ">
                                    <a href="#"><img class="img123" src="'.$row['hinhanhtin'].'" alt=""></a></div>';
                                echo '<div class="col-lg-9 col-md-9 col-12 ">';
                                
                                echo '<a class="tieude" href="chitiettin.php?idtin='.$row['idtin'].'&iddanhmuc='.$row['iddanhmuc'].'"><h2>'.$row['tieudetin'].' </h2></a>' ;
                                echo '<div class="">'.$row['tomtattin'].'</div>';
                                echo '<div class="xemchitiet"> <a href="chitiettin.php?idtin='.$row['idtin'].'&iddanhmuc='.$row['iddanhmuc'].'"> Xem chi tiết</a> </div>';
                                                           
                                echo '</div>';
                                echo '<hr>';
                            }
                         
                        }
                        mysqli_close($con);
                                }
                ?>
                 

                    

                </div>
            </div>


            <div class="col-12 col-lg-3 col-md-3 col-sm-3 ">
                BLA BLA BLA
            </div>
        </div>

    </div>

 
    <!-- phần footer -->


</body>

</html>