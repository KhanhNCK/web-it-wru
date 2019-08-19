<?php
  require 'connect.php';
//   if($con)
// {
//   echo 'Thành công';
// }
// else
// {
//   echo 'sai r';
// }
?>

<?php
  include('header.php');
?>

<!-- start main  -->
<main>
  <div class="container">
    <div class="row">

      <div class="col-md-9">
      <?php
            
            $sqlslide="SELECT DISTINCT * FROM `tin` ORDER BY RAND(" . date('Ymd') . ") LIMIT 4";
            $dataslide = mysqli_query($con,$sqlslide);
         
         ?>
        <!-- start slider -->
        <!-- Làm php slide  -->
     
        <section id="slider">
          <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselId" data-slide-to="0" class="active"></li>
              <li data-target="#carouselId" data-slide-to="1"></li>
              <li data-target="#carouselId" data-slide-to="2"></li>
              <li data-target="#carouselId" data-slide-to="3"></li>
              <li data-target="#carouselId" data-slide-to="4"></li>
    
            </ol>
            <div class="carousel-inner" role="listbox">
            <div class="carousel-item active ">
                  <img src="images/banner.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>Trường Đại học Thủy Lợi khoa CNTT</h4>
                  </div>
            </div>
            <?php
              while($row=mysqli_fetch_array($dataslide,MYSQLI_ASSOC))
              {
                echo '<div class="carousel-item  ">
                   <img src="'.$row['hinhanhtin'].'" alt="First slide">
                   <div class="carousel-caption d-none d-md-block">
                   <h4>'.$row['tieudetin'].'</h4>
                    </div>
                         </div> ';
              }
            ?>      
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
        <!-- end slider -->

        <!-- start monhoc -->
        <section id="monhoc">
          <div class="header-sj">
            <h3>Bộ môn trung tâm</h3>
          </div>
          <div class="row main-sj" style="margin: 20px 0px">
            <div class="col-md-4 subject">
              <a href="Bomon_CNPM.php"><i class="fas fa-mobile-alt fa-2x"></i><span>Công nghệ phần mềm</span></a>
            </div>

            <div class="col-md-4 subject">
              <a href="Bomon_HTTT.php"><i class="fas fa-network-wired fa-2x"></i><span>Hệ thống thông tin</span></a>

            </div>

            <div class="col-md-4 subject">
              <a href="Bomon_KHMT.php"><i class="fas fa-robot fa-2x"></i><span>Khoa học máy tính</span></a>

            </div>

            <div class="col-md-4 subject">
              <a href="Bomon_MMT.php"><i class="fas fa-satellite fa-2x"></i><span>Kỹ thuật máy tính và mạng</span></a>
            </div>

            <div class="col-md-4 subject">
              <a href="Bomon_Toanhoc.php"><i class="fas fa-square-root-alt fa-2x"></i><span>Toán học</span></a>

            </div>

            <div class="col-md-4 subject">
              <a href="Bomon_tinhoc.php"><i class="fas fa-laptop-code fa-2x"></i><span>Tin học và kỹ thuật tính toán </span></a>
            </div>
          </div>
        </section>
        <!-- end monhoc -->

        <!-- start tab -->
        <section id="tabs">
          <div class="header-tab">
            <h3>Tin tức , sự kiện và tài liệu tổng hợp</h3>
          </div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tintuc">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#sukien">Sự kiện</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tailieu">Tài liệu học tập</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <?php
            $sqltintuc1="SELECT DISTINCT * FROM `tin` ORDER BY RAND() LIMIT 1";
            $datatintuc1 = mysqli_query($con,$sqltintuc1);

            $sqltintuc2="SELECT DISTINCT * FROM `tin` ORDER BY RAND() LIMIT 3";
            $datatintuc2 = mysqli_query($con,$sqltintuc2);
          ?>
          <div class="tab-content">
            <div class="tab-pane container active" id="tintuc">
              <div class="row">
                <div class="col-md-6 title-tt">
                  <?php
                    $rowtintuc1 = mysqli_fetch_assoc($datatintuc1);
                    echo '<a href="trangchitiet.php?iddanhmuc='.$rowtintuc1['iddanhmuc'].'&idtin='.$rowtintuc1['idtin'].'"><img src="'.$rowtintuc1['hinhanhtin'].'" alt=""></a>
                    <a href="trangchitiet.php?iddanhmuc='.$rowtintuc1['iddanhmuc'].'&idtin='.$rowtintuc1['idtin'].'">
                    <h4>'.$rowtintuc1['tieudetin'].'</h4>
                                </a>
                                <span><i class="fas fa-calendar-minus"></i> 27/07/2019</span>';
                              // echo $rowtintuc1['tieudetin'];
                  ?>
                  
                  
                  
                </div>

                <div class="col-md-6">
                  
                <?php
                    
                    while($rowtintuc2= mysqli_fetch_array($datatintuc2,MYSQLI_ASSOC))
                    {
                      echo ' <div class="title-con row">
                          <div class="col-md-4"><a href="trangchitiet.php?iddanhmuc='.$rowtintuc2['iddanhmuc'].'&idtin='.$rowtintuc2['idtin'].'?idtin='.$rowtintuc2['idtin'].'"><img  style="height:80px;" src="'.$rowtintuc2['hinhanhtin'].'" alt=""></a></div>
                           <div class="col-md-6"><a href="trangchitiet.php?iddanhmuc='.$rowtintuc2['iddanhmuc'].'&idtin='.$rowtintuc2['idtin'].'">
                               <p>'.$rowtintuc2['tomtattin'].'</p>
                               </a>
                             <span><i class="fas fa-calendar-minus"></i> 27/07/2019</span>
                                </div>
                           </div>';
                    }
                  
                  ?>
                 

                 


                </div>

              </div>
            </div>

            <?php
            $sqlsukien1="SELECT DISTINCT * FROM `tin` ORDER BY RAND() LIMIT 1";
            $datasukien1 = mysqli_query($con,$sqlsukien1);

            $sqlsukien2="SELECT DISTINCT * FROM `tin` ORDER BY RAND() LIMIT 3";
            $datasukien2 = mysqli_query($con,$sqlsukien2);
          ?>
            <div class="tab-pane container " id="sukien">
              <div class="row">
                <div class="col-md-6 title-tt">

                <?php
                $rowsukien1=mysqli_fetch_assoc($datasukien1);
                  echo '    <a href="trangchitiet.php?iddanhmuc='.$rowsukien1['iddanhmuc'].'&idtin='.$rowsukien1['idtin'].'"><img src="'.$rowsukien1['hinhanhtin'].'" alt=""></a>
                            <a href="trangchitiet.php?iddanhmuc='.$rowsukien1['iddanhmuc'].'&idtin='.$rowsukien1['idtin'].'">
                            <h4>'.$rowsukien1['tieudetin'].'</h4>
                  </a>
                  <span><i class="fas fa-calendar-minus"></i> 27/07/2019</span>';
                ?>
              
                </div>

                <div class="col-md-6">

                <?php
                  while($rowsukien2= mysqli_fetch_array($datasukien2,MYSQLI_ASSOC))
                  {
                    echo '    <div class="title-con row">
                               <div class="col-md-4"><a href="trangchitiet.php?iddanhmuc='.$rowsukien2['iddanhmuc'].'&idtin='.$rowsukien2['idtin'].'"><img style="height:80px;" src="'.$rowsukien2['hinhanhtin'].'" alt=""></a></div>
                                <div class="col-md-6"><a href="trangchitiet.php?iddanhmuc='.$rowsukien2['iddanhmuc'].'&idtin='.$rowsukien2['idtin'].'">
                                    <p>'.$rowsukien2['noidungtin'].'</p>
                                  </a>
                                  <span><i class="fas fa-calendar-minus"></i> 27/07/2019</span>
                                </div>
                                 </div>';
                  }
                ?>
              



                 
                </div>

              </div>
            </div>

            <?php
            $sqltailieumonhoc="SELECT *,user.username FROM `monhoc` INNER JOIN user  WHERE monhoc.iduser=user.iduser ORDER BY RAND() LIMIT 10";
            $datatailieumonhoc = mysqli_query($con,$sqltailieumonhoc);

            ?>
            <div class="tab-pane container fade" id="tailieu">

            <?php
              while($rowtailieumonhoc=mysqli_fetch_array($datatailieumonhoc))
              {
                echo '    <a href="uploads/chuyên-đề.docx" download="">
                        <p>Tài liệu môn '.$rowtailieumonhoc['tenmonhoc'].'  <br><br> &nbsp &nbsp  Giảng viên giảng dạy :  '.$rowtailieumonhoc['username'].'</p>
                
                       </a>
                       <hr>';
              }
            ?>
          
              


            </div>
          </div>

        </section>
        <!-- end tab -->


        <!-- start thuvien anh -->
        
       
        <section id="thuvienanh">
          <div class="header-ha">
            <h3>Thư viện hình ảnh</h3>
          </div>
          <div class="container">
            <div class="row slider">
              <div class="owl-carousel  col-md-12">
              <?php
            $sqlthuvienhinhanh="SELECT * FROM `tin` ORDER BY RAND() LIMIT 5;";
            $datathuvienhinhanh = mysqli_query($con,$sqlthuvienhinhanh);
             
            while($rowthuvienhinhanh=mysqli_fetch_array($datathuvienhinhanh))
              {
               $hinhanh=$rowthuvienhinhanh['hinhanhtin'];
                    
                    echo '
                    <div class="item"><a href="#?idtin='.$rowthuvienhinhanh['idtin'].'"><img style="height:150px;" class="img-thumbnail" src="'.$hinhanh.'" alt="">
                      </a></div>';           
               }
              
            ?>
          

              </div>
            </div>
          </div>
        </section>
        <!-- end thuvien anh -->


      </div>
      <div class="col-md-3">

        <?php
          include('banner-right.php');
        ?>

      </div>
    </div>
  </div>

</main>
<!-- end main -->

<?php
  include('footer.php');
?>