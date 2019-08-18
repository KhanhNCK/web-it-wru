<?php
include('header.php');
?>
<?php
require 'connect.php';
    if(isset($_GET['p']))
    {
        $p=$_GET['p'];
    }else
    {
        $p=1;
    }

    $sotin=4;
    $from=($p - 1) * $sotin;
    if($_GET['iddanhmuc'])
    {
        $iddanhmuc=$_GET['iddanhmuc'];
        // echo $iddanhmuc;
        

        $sql="SELECT * FROM `tin` WHERE iddanhmuc='$iddanhmuc' LIMIT $from,$sotin";
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
                        <div class="col-md-4"><a href="#"><img style="height:150px;" src="'.$row['hinhanhtin'].'" alt=""></a></div>
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
                        <?php
                             $sql2="SELECT * FROM `tin` WHERE iddanhmuc='$iddanhmuc'";
                             $data2=mysqli_query($con,$sql2);  
                              $sumtin=mysqli_num_rows($data2);
                         
                             $sotrang=ceil($sumtin/$sotin);echo '<br>';
                            //  echo $sumtin;echo '<br>';
                            //  echo $sotrang;
                             for( $t=1;$t<=$sotrang;$t++)
                             {
                                 
                                 echo '<li class="page-item"><a class="page-link" href="tintrongloai?iddanhmuc='.$iddanhmuc.'&p='.$t.'">'.$t.'</a></li>';
                             }
                     
                        ?>
                    
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