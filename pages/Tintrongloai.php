<?php
include('header.php');
?>
<?php
require 'connect.php';

    if($_GET['iddanhmuc'])
    {
        $iddanhmuc=$_GET['iddanhmuc'];
        // echo $iddanhmuc;
        

        $sql="SELECT * FROM `tin` WHERE iddanhmuc='$iddanhmuc'";
        $data=mysqli_query($con,$sql);

        
        $sql1="SELECT * FROM `danhmuc` WHERE iddanhmuc='$iddanhmuc'";
        $data1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_assoc($data1);
       

    }
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9 tintuc">
                <br><br>
                <h3 style="font-weight:bold;"><?php echo $row1['tendanhmuc']?></h3><br>
                <div class=" tin">
                    
                   <?php
                   while($row=mysqli_fetch_array($data)){
                    echo '
                    <div class="row tint">
                        <div class="col-md-4"><a href="#"><img src="'.$row['hinhanhtin'].'" alt=""></a></div>
                        <div class="col-md-8"><br>
                            <a href="trangchitiet.php?iddanhmuc='.$iddanhmuc.'&idtin='.$row['idtin'].'">
                                <h4>'.$row['tieudetin'].'</h4>
                            </a>
                            <p>'.$row['tomtattin'].'</p>
                            <span><i class="fas fa-calendar-minus"></i> 27/07/2019</span>
                            <p style="text-align:right;"><a  href="trangchitiet.php?iddanhmuc='.$iddanhmuc.'&idtin='.$row['idtin'].'">Xem chi tiết tin</a></p>
                            <br><br> </div>
                    </div>';
                   }
                    
                   ?>


                   
                </div>

                <br> <br>
                <div class="phantrang" >
                    <ul class="pagination" >
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3">
                <?php
                include('banner-right.php')
                ?>
            </div>
        </div>
    </div>
</main>

<?php
include('footer.php');
?>