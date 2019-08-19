<?php
include('header.php');
?>
<?php
require 'connect.php';

    if($_GET['idtin'])
    {
        $idtin=$_GET['idtin'];     
        $iddanhmuc=$_GET['iddanhmuc'];
     
        
        // echo $idtin;
        

        $sql="SELECT * FROM `tin` WHERE idtin='$idtin'";
        $data=mysqli_query($con,$sql);

        
        // $sql1="SELECT * FROM `danhmuc` WHERE iddanhmuc='$iddanhmuc'";
        // $data1=mysqli_query($con,$sql1);
        // $row1=mysqli_fetch_assoc($data1);
       

    }
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9 chitiet">
                <?php
                    while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
                    {
                        echo '
                        <h3>'.$row['tieudetin'].'</h3> <br>
                        <img src="'.$row['hinhanhtin'].'" alt=""><br><br>
                        <p>'.$row['noidungtin'].'</p><br><br> <br>';
                    }
                ?>
                

                <div class="share">
                    <div>
                        <a href=""><i class="fab fa-facebook-f"></i>Facebook</a>
                    </div>
                    <div>
                        <a href=""><i class="fab fa-twitter"></i>Twitter</a>
                    </div>
                    <div>
                        <a href=""><i class="fas fa-envelope"></i>Email</a>
                    </div>
                    <div>
                        <a href=""><i class="fab fa-pinterest-p"></i>Printerest</a>
                    </div>

                </div><br><br>

                <div class="baiviekhac">
                    <h3>Bài biết liên quan</h3>
                    <div class="lienquan row">
                        <?php
                           
                        $sql1="SELECT DISTINCT * FROM `tin` WHERE iddanhmuc ='$iddanhmuc' ORDER BY RAND() LIMIT 3" ;
                        $data1=mysqli_query($con,$sql1);

                        while($row1=mysqli_fetch_array($data1,MYSQLI_ASSOC))
                                {
                                    echo '<div class="col-md-4 new">
                                            <a href="#"><img style="height:150px;" class="img-thumbnail"  src="'.$row1['hinhanhtin'].'" alt=""></a>
                                            <div class="tt"><a href="trangchitiet?idtin='.$row1['idtin'].'&iddanhmuc='.$iddanhmuc.'"><p>'.$row1['tieudetin'].'</p></a></div>
                                        </div>';
                                }
                        ?>
                             
                     
                    </div>
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