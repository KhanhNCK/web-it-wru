<!doctype html>
<html lang="en">

<head>
  <title>Khoa Công nghệ thông tin - Trường Đại học Thủy Lợi</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">

  <!-- font chu open sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">


  <!-- owl carouse -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">

  <!-- tab content -->
  <link rel="stylesheet" type="text/css" href="css/tabcontent.css" />

  <!-- style custom -->
  <link rel="shortcut icon" type="image/png" href="images/CSE logo (1).png" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="scss/trangchu.css">
</head>

<body>
  <!-- start header -->
  <header class="header">
    <div class="container-fluid title">
      <div class="container ">
        <div class=" title-text">
          <h3><a href="#">Trường Đại học Thủy Lợi </a></h3>
          <span onclick="openNav()"> <a href="#"> |&emsp; Sign in & Sign up </a>&emsp;| </span>
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <div class="login-wrap">
                <div class="login-html">
                  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng nhập</label>
                  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label></label>
                  <div class="login-form">
                      <form action="admin.php" method="post">
                                <div class="sign-in-htm">
                                <div class="group">
                                  <label for="user" class="label">Tài khoản</label>
                                  <input name="username" id="user" type="text" class="input">
                                </div>
                                <div class="group">
                                  <label for="pass" class="label">Mật khẩu</label>
                                  <input  name="password" id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                  <input id="check" type="checkbox" class="check" checked>
                                  <label for="check"><span class="icon"></span> Tự động đăng nhập</label>
                                </div>
                                <div class="group">
                                  <input type="submit" class="button" value="Đăng nhập">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                  <a href="#forgot">Quên mật khẩu ?</a>
                                </div>
                              </div>
                      </form>
                  
                    <!-- <div class="sign-up-htm">
                      <div class="group">
                        <label for="user" class="label">Tài khoản</label>
                        <input id="user" type="text" class="input">
                      </div>
                      <div class="group">
                        <label for="pass" class="label">Mật khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password">
                      </div>
                      <div class="group">
                        <label for="pass" class="label">Nhập lại mật khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password">
                      </div>
                      <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input id="pass" type="text" class="input">
                      </div>
                      <div class="group">
                        <input type="submit" class="button" value="Đăng ký">
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <span>&emsp;Ngôn ngữ :
            <select name="lang" id="lang">
              <option value="vn">VN</option>
              <option value="en">EN</option>
            </select>
          </span>
          <div id="info-top">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-facebook-messenger"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"> <i class="fab fa-youtube-square"></i></a>
            <a href="#"> <i class="fab fa-pinterest-square"></i></a>
          </div>
        </div>
        <!-- .et-top-search -->
        <div class="search">
          <form>
            <input id="searchbox" type="text" name="search" placeholder="Search..">
          
          </form>
        </div>
        
        <!-- <?php
        if (isset( $_GET["search"]) != '') {
            $search = $_GET['search'];
          $query = "SELECT * FROM tin WHERE (tieudetin like '%$search%')";
     
            $sql = mysqli_query($con, $query);
 			//echo $sql;
            $num = mysqli_num_rows($sql);
            if ($num > 0) {
                echo $num." ket qua tra ve voi tu khoa <b>".$search."</b>";
                echo '<table border="1" cellspacing="0" cellpadding="10">';
                foreach( $sql as $row ) {
                  echo '<tr>';
                        echo "<td>{$row['tieudetin']}</td>";
                    echo '</tr>';
          
                }
            } 
            else {
                echo "Khong tim thay ket qua!";
            }
        }
        ?> -->

        <!-- cart -->
      </div>
    </div>
    <div class=" logo">
      <a href="#"><img src="images/logo-header.jpg" alt="logo_khoacntt"></a>
    </div>
    <div class="container-fluid " id="navv">
      <div class=" container menu-main ">
        <nav>
          <label for="drop" class="toggle"><i class="fas fa-bars"><span>Menu</span></i></label>
          <input type="checkbox" id="drop" />
          <ul class="menu">

            <!-- 1 Drop Down -->
            <li><a href="trangchu.php">Trang chủ</a></li>

            <li>
              <label for="drop-1" class="toggle"><a href="#">Giới thiệu </a></label>
              <a href="gioithieu.php">Giới thiệu</a>
              <input type="checkbox" id="drop-1" />
              <ul>
                <li><a href="tintrongloai.php?iddanhmuc=11">Logo Khoa CNTT </a></li>
                <li><a href="loichaomung.php">Lời chào mừng</a></li>
                <li><a href="tochuc.php">Tổ chức</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=14">Hợp tác liên kết</a></li>
              </ul>
            </li>

            <!--  2 Drop Down -->
            <li>
              <label for="drop-2" class="toggle"><a href="#123">Nghiên cứu khoa học </a></label>
              <a href="nghiencuukhoahoc.php">Nghiên cứu khoa học</a>
              <input type="checkbox" id="drop-2" />
              <ul>
                <li><a href="detai_nghiencuu.php">Các đề tài,dự án </a></li>
                <li><a href="thongtinseminar.php">Thông tin seminar </a></li>
                <li><a href="congtrinh_congbo.php">Công trình công bố </a></li>
                <li><a href="cacphongthinghiem.php">Các phòng thí nghiệm </a></li>
              </ul>
            </li>

            <!-- 3 Drop Down -->
            <li>
              <label for="drop-3" class="toggle"><a href="#123">Đào tạo</a></label>
              <a href="tintrongloai.php?iddanhmuc=3">Đào tạo</a>
              <input type="checkbox" id="drop-3" />
              <ul>
                <li><a href="tintrongloai.php?iddanhmuc=31">Đào tạo đại học</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=32">Đào tạo sau đại học </a></li>
                <li><a href="tintrongloai.php?iddanhmuc=33">Chuẩn đầu ra</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=34">Định hướng nghề nghiệp</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=35">Mô hình đào tạo</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=36">Đề cương môn học</a></li>
              </ul>
            </li>
            <!-- 4 Drop Down -->
            <li>
              <label for="drop-4" class="toggle"><a href="#123">Bộ môn-trung tâm</a></label>
              <a href="tintrongloai.php?iddanhmuc=4">Bộ môn-trung tâm</a>
              <input type="checkbox" id="drop-4" />
              <ul>
                <li><a href="Bomon_CNPM.php">CN phần mềm</a></li>
                <li><a href="Bomon_HTTT.php">Hệ thống thông tin</a></li>
                <li><a href="Bomon_KHMT.php">Khoa học máy tính</a></li>
                <li><a href="Bomon_MMT.php">Kỹ thuật máy tính và mạng</a></li>
                <li><a href="Bomon_Toanhoc.php">Toán học</a></li>
                <li><a href="Bomon_tinhoc.php">Tin học và kỹ thuật tính toán</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=47">Trung tâm tin học</a></li>
              </ul>
            </li>
            <!-- 5 Drop Down -->

            <li>
              <label for="drop-5" class="toggle"><a href="#123">Sinh viên</a></label>
              <a href="tintrongloai.php?iddanhmuc=5">Sinh viên</a>
              <input type="checkbox" id="drop-5" />
              <ul>
                <li><a href="tintrongloai.php?iddanhmuc=51">Tài liệu sinh viên</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=52">Tổ tư vấn học tập</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=53">Biểu mẫu DATN</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=54">Luận văn tốt nghiệp</a></li>

              </ul>
            </li>
            <!-- 5 Drop Down -->

            <li>
              <label for="drop-6" class="toggle"><a href="#123">Tin tức</a></label>
              <a href="tintrongloai.php?iddanhmuc=6">Tin tức</a>
              <input type="checkbox" id="drop-6" />
              <ul>
                <li><a href="tintrongloai.php?iddanhmuc=61">Sự kiện</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=62">CSE trên báo</a></li>
              </ul>
            </li>

            <!-- 6 Drop Down -->

            <li>
              <label for="drop-7" class="toggle"><a href="#123">Thông báo</a></label>
              <a href="tintrongloai.php?iddanhmuc=7">Thông báo</a>
              <input type="checkbox" id="drop-7" />
              <ul>
                <li><a href="tintrongloai.php?iddanhmuc=71">Thông báo </a></li>
                <li><a href="tintrongloai.php?iddanhmuc=72">TB đào tạo</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=73">Nghiên cứu khoa học</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=74">Tuyển dụng </a></li>
                <li><a href="tintrongloai.php?iddanhmuc=75">Học bổng</a></li>
                <li><a href="tintrongloai.php?iddanhmuc=76">Thông báo khác</a></li>
              </ul>
            </li>

            <!-- 6 Drop Down -->

            <li><a href="lienhe.php">Liên hệ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header -->