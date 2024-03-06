<?php
require_once "core/init.php";

$user = mysqli_query($connect, "SELECT * FROM tbl_user");
$supplier = mysqli_query($connect, "SELECT * FROM tbl_supplier");
?>
<!DOCTYPE html>
<html lang="en">
  <?php include("includes/head.php") ?>
   <body class="inner_page contact_page">
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
                              <h2>Contacts</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Contacts Users</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column contact --> 
                                    <?php
                                    foreach ($user as $us) {
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">APIP Member</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3><?= $us['username'] ?></h3>
                                                <?php
                                                if ($us['role'] == 1) {
                                                   $use = "Admin";
                                                } else {
                                                   $use = "User";
                                                }
                                                ?>
                                                <p><strong>About: </strong><?= $use ?></p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : <?= $us['email'] ?></li>
                                                   <li><i class="fa fa-phone"></i> : 000 000 0000</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <!-- end column contact blog -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Contacts Suppliers</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column contact --> 
                                    <?php
                                    foreach ($supplier as $sup) {
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">APIP Supplier</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3><?= $sup['nama_supplier'] ?></h3>
                                                <p><strong>About: </strong>Supplier</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-map-pin"></i> : <?= $sup['kota_supplier'] ?></li>
                                                   <li><i class="fa fa-phone"></i> : <?= $sup['telp_supplier'] ?></li>
                                                   <li><i class="fa fa-home"></i> : <?= $sup['alamat_supplier'] ?></li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <!-- end column contact blog -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
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
      <!-- calendar file css -->     
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>