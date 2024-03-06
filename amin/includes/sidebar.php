<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo kecik.png" alt="#" /></a>
         </div>
      </div>
      <div class="sidebar_user_info">
         <div class="icon_setting"></div>
         <div class="user_profle_side">
            <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
            <div class="user_info">
               <h6><?= $_SESSION['username']; ?></h6>
               <p><span class="online_animation"></span> Online</p>
            </div>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>General</h4>
      <ul class="list-unstyled components">
         <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
         <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-database orange_color"></i> <span>Barang</span></a>
            <ul class="collapse list-unstyled" id="element">
               <li><a href="dt_barang.php"> <span>Data Barang</span></a></li>
               <li><a href="form_barang.php"> <span>Tambah Barang</span></a></li>
            </ul>
         </li>
         <li>
            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-sign-in blue2_color"></i> <span>Barang Masuk</span></a>
            <ul class="collapse list-unstyled" id="apps">
               <li><a href="dt_barang_masuk.php"> <span>Data Barang Masuk</span></a></li>
               <li><a href="form_tambah_barang.php"> <span>Tambah Barang Masuk</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="dt_barang_keluar.php"><i class="fa fa-sign-out red_color"></i> <span>Barang Keluar</span></a>
         </li>
         <li>
            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-tasks blue2_color"></i> <span>Peminjaman</span></a>
            <ul class="collapse list-unstyled" id="dashboard">
               <li><a href="dt_peminjaman.php"> <span>Data Peminjaman</span></a></li>
               <li><a href="form_peminjaman.php"> <span>From Peminjaman</span></a></li>
            </ul>
         </li>
         <li><a href="dt_stok.php"><i class="fa fa-archive orange_color"></i> <span>Stok</span></a></li>
         <li class="active">
            <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users yellow_color"></i> <span>Supplier</span></a>
            <ul class="collapse list-unstyled" id="additional_page">
               <li>
                  <a href="dt_supply.php"> <span>Data Supplier</span></a>
               </li>
               <li>
                  <a href="form_supplier.php"> <span>Tambah Supplier</span></a>
               </li>
            </ul>
         </li>
         <li>
            <a href="contact.php">
               <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
         </li>
      </ul>
   </div>
</nav>