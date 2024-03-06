<?php
require_once "core/init.php";

$_SESSION['username'];

if (!isset($_SESSION['user'])) {
   // $_SESSION['msg'] = 'anda harus login untuk megakses halaman ini';
   header('location: ../login.php');
}

$query = "SELECT COUNT(*) AS total_supply FROM tbl_supplier";
$supplier = mysqli_query($connect, $query);
$query1 = "SELECT COUNT(*) AS total_masuk FROM tbl_masukbarang";
$barangmasuk = mysqli_query($connect, $query1);
$query2 = "SELECT COUNT(*) AS total_keluar FROM tbl_pinjam";
$barangkeluar = mysqli_query($connect, $query2);
$query3 = "SELECT COUNT(*) AS total_pinjam FROM tbl_pinjam";
$pinjam = mysqli_query($connect, $query3);

$supply = mysqli_fetch_assoc($supplier);
$masuk = mysqli_fetch_assoc($barangmasuk);
$keluar = mysqli_fetch_assoc($barangkeluar);
$peminjam = mysqli_fetch_assoc($pinjam);

?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <?php include("includes/sidebar.php") ?>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <?php include("includes/topbar.php") ?>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Dashboard</h2>
                        </div>
                     </div>
                  </div>
                  <div class="row column1">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-users yellow_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><b><?= $supply['total_supply'] ?></b></p>
                                 <p class="head_couter">Supplier</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-sign-in blue1_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><b><?= $masuk['total_masuk'] ?></b></p>
                                 <p class="head_couter">Barang Masuk</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-sign-out red_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><b><?= $keluar['total_keluar'] ?></b></p>
                                 <p class="head_couter">Barang Keluar</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-users orange_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><b><?= $peminjam['total_pinjam'] ?></b></p>
                                 <p class="head_couter">Peminjam</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- graph -->
                  <div class="row column2 graph margin_bottom_30">
                     <div class="col-md-l2 col-lg-12">
                        <div class="white_shd full">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Data Peminjaman</h2>
                              </div>
                           </div>
                           <div class="full graph_revenue">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="content">
                                       <div class="area_chart">
                                          <canvas height="120" id="canvas"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end graph -->
                  <div class="row column3">
                     <!-- testimonial -->
                     <div class="col-md-6">
                        <div class="dark_bg full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>About Us</h2>
                              </div>
                           </div>
                           <div class="full graph_revenue">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="content testimonial">
                                       <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                          <!-- Wrapper for carousel items -->
                                          <div class="carousel-inner">
                                             <div class="item carousel-item active">
                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                             </div>
                                             <div class="item carousel-item">
                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                             </div>
                                             <div class="item carousel-item">
                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                             </div>
                                          </div>
                                          <!-- Carousel controls -->
                                          <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                          </a>
                                          <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end testimonial -->
                     <!-- progress bar -->
                     <div class="col-md-6">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Progress Bar</h2>
                              </div>
                           </div>
                           <div class="full progress_bar_inner">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="progress_bar">
                                       <!-- Skill Bars -->
                                       <span class="skill" style="width:<?= $supply['total_supply'] ?>%;">Supplier <span class="info_valume"><?= $supply['total_supply'] ?>%</span></span>
                                       <div class="progress skill-bar ">
                                          <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="<?= $supply['total_supply'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $supply['total_supply'] ?>%;">
                                          </div>
                                       </div>
                                       <span class="skill" style="width:<?= $masuk['total_masuk'] ?>%;">Barang Masuk <span class="info_valume"><?= $masuk['total_masuk'] ?>%</span></span>
                                       <div class="progress skill-bar">
                                          <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="<?= $masuk['total_masuk'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $masuk['total_masuk'] ?>%;">
                                          </div>
                                       </div>
                                       <span class="skill" style="width:<?= $keluar['total_keluar'] ?>%;">Barang Keluar <span class="info_valume"><?= $keluar['total_keluar'] ?>%</span></span>
                                       <div class="progress skill-bar">
                                          <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="<?= $keluar['total_keluar'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $keluar['total_keluar'] ?>%;">
                                          </div>
                                       </div>
                                       <span class="skill" style="width:<?= $stok['total_stok'] ?>%;">Stok<span class="info_valume"><?= $stok['total_stok'] ?>%</span></span>
                                       <div class="progress skill-bar">
                                          <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="<?= $stok['total_stok'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $stok['total_stok'] ?>%;">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end progress bar -->
                  </div>
                  <div class="row column4 graph">
                     <div class="col-md-6 margin_bottom_30">
                        <div class="dash_blog">
                           <div class="dash_blog_inner">
                              <div class="dash_head">
                                 <h3><span><i class="fa fa-calendar"></i> 6 July 2018</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                              </div>
                              <div class="list_cont">
                                 <p>Today Tasks for Ronney Jack</p>
                              </div>
                              <div class="task_list_main">
                                 <ul class="task_list">
                                    <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                                    <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                    <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                                    <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                    <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                                 </ul>
                              </div>
                              <div class="read_more">
                                 <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="dash_blog">
                           <div class="dash_blog_inner">
                              <div class="dash_head">
                                 <h3><span><i class="fa fa-comments-o"></i> Updates</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                              </div>
                              <div class="list_cont">
                                 <p>User confirmation</p>
                              </div>
                              <div class="msg_list_main">
                                 <ul class="msg_list">
                                    <li>
                                       <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                       <span>
                                          <span class="name_user">Herman Beck</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                       </span>
                                    </li>
                                    <li>
                                       <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                       <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                       </span>
                                    </li>
                                    <li>
                                       <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                       <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                       </span>
                                    </li>
                                    <li>
                                       <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                       <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                       </span>
                                    </li>
                                 </ul>
                              </div>
                              <div class="read_more">
                                 <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                        Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                     </p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="js/Chart.min.js"></script>
   <script src="js/Chart.bundle.min.js"></script>
   <script src="js/utils.js"></script>
   <script src="js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <script src="js/chart_custom_style1.js"></script>
</body>

</html>