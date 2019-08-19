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
<!-- diem danh -->
   <section id="diemdanh">
            <button>
              <a href="#">
                <span onclick="openNav()" class="text">ĐIỂM DANH SV</span>
                <span class="plus">
                  <span class="plus-sign">+</span>
                </span></a>

            </button>
    </section>

    <?php
        $sqltintucmoinhat="SELECT * FROM `tin` ORDER BY idtin DESC LIMIT 11";
        $datatintucmoinhat = mysqli_query($con,$sqltintucmoinhat);
        // $rowtintucmoinhat = mysqli_fetch_array($datatintucmoinhat,MYSQLI_ASSOC);
       
    ?>
          <!-- // start tintong -->
          <section id="tinnew">
            <div class="name">
              <h2><span>Tin tức mới nhất</span></h2>

            </div>
            <div class="scroll">
            <?php
               while($rowtintucmoinhat = mysqli_fetch_array($datatintucmoinhat,MYSQLI_ASSOC))
               {
                 $iddanhmuc=$rowtintucmoinhat['iddanhmuc'];
                 echo ' <a href="trangchitiet?iddanhmuc='.$iddanhmuc.'&idtin='.$rowtintucmoinhat['idtin'].'"> <i class="far fa-arrow-alt-circle-right"></i>
                        <p>'.$rowtintucmoinhat['tieudetin'].'</p>
                        </a>';
               }
            ?>
       
            </div>
          </section>
          <!-- end tintong -->



          <!-- start lien he -->
          <section id="lienhe" class="widget_text">
            <h4 class="widgettitle">Thông Tin Liên Hệ</h4>
            <div class="textwidget">
              <h2>KHOA CÔNG NGHỆ THÔNG TIN</h2>
              <p> <i class="fas fa-map-marker-alt"></i> 175 Tây Sơn , Quận Đống Đa,Thành phố Hà Nội.</p>
              <p><i class="fas fa-map-marker-alt"></i> Tầng 2,Nhà C1, Đại học Thủy Lợi</p>
              <p><i class="fas fa-phone-alt"></i><span title="Điện thoại"> (04) 35632211</span></p>
              <p> <i class="fas fa-fax"></i> <span title="Fax">(04) 3563 3351</span></p>
              <p> <i class="fas fa-envelope"></i><span title="Email"> vpkcntt@tlu.edu.vn</span></p>
            </div>
          </section>
          <!-- end lien he -->

          <!-- start scholarship -->
          <section id="scholarship" class="widget_text">
            <h4 class="widgettitle">Các chương trình học bổng</h4>
            <div class="textwidget">
              <a href="https://www.scholarships.com/"><img class="img-fluid" src="images/scholarship.jpg"
                  alt="scholarship"></a>
            </div>
          </section>
          <!-- end scholarship -->

          <!-- start job -->
          <section id="job" class="widget_text">
            <h4 class="widgettitle">Tuyển dụng</h4>
            <div class="textwidget">
              <a href="https://itviec.com/"><img class="img-fluid" src="images/itviec.jpg" alt="itviec"></a>
            </div>
          </section>
          <!-- end job -->