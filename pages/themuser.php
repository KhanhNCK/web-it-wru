<?php
require 'connect.php';
if ($_GET['username']) {
    $username = $_GET['username'];
    $level = $_GET['level'];
    $hinhanhuser = $_GET['hinhanhuser'];
    // echo $level;
    
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

      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-2 col-sm-2 col-md-2 " >
           
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                  <ul class="nav">
                    <li class="nav-item nav-profile" style="margin-left:10px">
                      <a href="#" class="nav-link">
                        <div class="profile-image">
                          <img class="img-xs rounded-circle" src="<?php echo $hinhanhuser ;?>" alt="profile image">
                          <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                          <p class="profile-name"><?php echo $username ;?></p>
                          <p class="designation"> Level : <?php echo $level ;?></p>
                        </div>
                      </a>
                    </li>
                    <li class="nav-item nav-category">Main Menu</li>
                  
                    <?php 
                      if($level ==1){
                        echo '<li class="nav-item">
                                <a class="nav-link" data-toggle="collapse"  aria-expanded="false" >
                                  <i class="menu-icon typcn typcn-document-add"></i>
                                  <span class="menu-title">Sinh viên điểm danh</span>
                                  <i class="menu-arrow"></i>
                                </a>
                              </li>';
                      }
                      if($level ==2)
                      {
                          echo '<li class="nav-item">
                                  <a class="nav-link" data-toggle="collapse" href="#monhoc" aria-expanded="false" aria-controls="monhoc">
                                    <i class="menu-icon typcn typcn-document-add"></i>
                                    <span class="menu-title">Quản lí môn học</span>
                                    <i class="menu-arrow"></i>
                                  </a>
                                  <div class="collapse" id="monhoc">
                                    <ul class="nav flex-column sub-menu">
                                      <li class="nav-item">
                                        <a class="nav-link" href="#"> Xem thông tin môn học </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#"> Thêm môn học</a>
                                      </li>
                                    </ul>
                                  </div>
                                </li>';
                      }
                      if($level ==3)
                      {
                        echo ' <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                  <i class="menu-icon typcn typcn-coffee"></i>
                                  <span class="menu-title">Quản lí user</span>
                                  <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="ui-basic">
                                  <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                      <a class="nav-link" href="xemdanhsachuser.php?level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'">Xem danh sách user</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Thêm user</a>
                                    </li>
                                
                                  </ul>
                                </div>
                              </li>';
                          echo '
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                                    <i class="menu-icon typcn typcn-document-add"></i>
                                    <span class="menu-title">Quản lí bài viết</span>
                                    <i class="menu-arrow"></i>
                                  </a>
                                  <div class="collapse" id="auth">
                                    <ul class="nav flex-column sub-menu">
                                      <li class="nav-item">
                                        <a class="nav-link" href="themtin.php?level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"> Xem danh sách bài viết </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="them.php?level='.$level.'&hinhanhuser='.$hinhanhuser.'&username='.$username.'"> Thêm bài viết </a>
                                      </li>
                                    </ul>
                                  </div>
                                </li>
                                
                                ';
                      }?>

                    
                  </ul>
                </nav>
            
          </div>
          <div class="col-12 col-lg-10 col-sm-10 col-md-10">
          
                  <nav class="navbar default-layout  p-0  d-flex flex-row">
                    <div class="navbar-menu-wrapper d-flex align-items-center">
              
                      <form class="ml-auto search-form d-none d-md-block" action="#">
                        <div class="form-group">
                          <input type="search" class="form-control" placeholder="Search Here">
                        </div>
                      </form>

                      <ul class="navbar-nav ml-auto">
              
                        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                          </a>
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                            <img src="<?php echo $hinhanhuser ;?>" alt="Profile image">
                              <p class="mb-1 mt-3 font-weight-semibold"><?php echo $username ;?></p>
                              <p class="font-weight-light text-muted mb-0"><?php echo $level ;?></p>
                            </div>
                            <a class="dropdown-item">My Profile </a>
                            <a class="dropdown-item" href="hehe.php">Sign Out</a>
                          </div>
                        </li>
                        </ul>
                    </div>
                  </nav>

                  <div class="container-fluid">
                  <div class="container bangtin">
   <h1>Danh sách các baif viet</h1>
   
   <table class="table table-light " style="border:1px solid black">
       <tbody>
           <tr>
              <th style="border:1px solid black">Hình anh user</th>
              <th style="border:1px solid black">Username</th>
              <th style="border:1px solid black">Password</th>
              <th style="border:1px solid black">Level</th>
              <th style="border:1px solid black">Tùy chỉnh</th>
          
           </tr>
           <tr>
                                <form action="themuser1.php" method="post">
                                        <!-- <td></td> -->
                                        <input type="hidden" name="username" value="<?php echo $username;?>">
                                        <input type="hidden" name="hinhanhuser" value="<?php echo $hinhanhuser;?>">
                                        <input type="hidden" name="level" value="<?php echo $level;?>">


                                        <td><input  type="text" name="hinhanhuser" value=""></td>
                                        <td><input  type="text" name="usernamethem" value=""></td>
                                        <td><input  type="text" name="passwordthem" value=""></td>
                                        <td><input  type="text" name="levelthem" value=""></td>
                                        
                                        <td><input  type="submit" value="ADD USER"></td>
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