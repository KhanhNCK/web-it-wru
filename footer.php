 <!-- back to top -->
 <div class="back-to-top"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>


<!-- start footer -->
<footer id="footer">
  <div class="footer">
    <div class="container">
      <div class="back-head">
        <ul id="top">
          <li><a href="#"><span>Trang chủ</span></a></li>
          <li><a href="#slider"><span>Bộ môn trung tâm</span></a></li>
          <li><a href="#tabs"><span>Tin tức & sự kiện & tài liệu</span></a></li>
          <li><a href="#thuvienanh"><span>Thư viện ảnh</span></a></li>
        </ul>
        <ul id="inf">
          <li>
            <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
          </li>
          <li> <a href="#" title="Messenger"><i class="fab fa-facebook-messenger fa-2x"></i></a>
          </li>
          <li>
            <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
          </li>
          <li>
            <a href="#" title="Youtube"> <i class="fab fa-youtube-square fa-2x"></i></a>
          </li>
          <li>
            <a href="#" title="Pinterest"> <i class="fab fa-pinterest-square fa-2x"></i></a>
          </li>
        </ul>

      </div>
      <div class="row footer-bg">
        <div class="col-md-4 logo-footer">
          <img src="images/img-logo-footer.png">
          <p>© 2017 Khoa Công nghệ thông tin - Đại học Thủy Lợi</p>
          <p> <i class="fas fa-map-marker-alt"></i> Nhà C1, Đại học Thủy Lợi, 175 Tây Sơn ,Đống Đa,Hà Nội.</p>
          <p><i class="fas fa-phone-alt"></i><span title="Điện thoại"> (04) 35632211</span></p>
          <p> <i class="fas fa-envelope"></i><span title="Email"> vpkcntt@tlu.edu.vn</span></p>
        </div>

        <?php
          $sqlfooter="SELECT * FROM `tin` ORDER BY RAND() LIMIT 3;";
          $datafooter = mysqli_query($con,$sqlfooter);
        ?>
        <div class="col-md-4 tin-footer">
          <h2>Tin tức</h2>
          <div class="row">
            <?php
            while($rowfooter=mysqli_fetch_array($datafooter,MYSQLI_ASSOC))
            {
                echo '  <div class="col-md-4"><a href="#"><img class="img-thumbnail" src="'.$rowfooter['hinhanhtin'].'" alt=""></a></div>
                         <div class="col-md-8"><a href="#">
                          <h4>'.$rowfooter['tieudetin'].'</h4>
                  </a></div>';
            }
            ?>
            
          

          </div>
        </div>
        <div class="col-md-4 thongke">
          <h2>Thống kê truy cập</h2>
          <h3>Truy cập trong ngày : <span>11,193 </span></h3>
          <h3>Truy cập trong tháng : <span>31,193 </span></h3>
          <h3>Tổng số truy cập : <span>111,193 </span></h3>
          <h3>Bài viết mới đăng: <span>10</span></h3>
        </div>
      </div>
    </div>

  </div>
</footer>
<!-- end footer -->



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/modernizr.custom.04022.js"></script>
<script src="js/trangchu.js"></script>

</body>

</html>