<?php
require_once "core/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>

<body class="inner_page tables_page">
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
                           <h2>Data</h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <!-- table section -->
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Peminjaman</h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                                 <?php
                                 $pinjam = mysqli_query($connect, "SELECT tbl_user.username, tbl_pinjam.* FROM tbl_pinjam INNER JOIN tbl_user ON tbl_pinjam.user_id = tbl_user.id_user");
                                 ?>
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Peminjam</th>
                                          <th>Tanggal Peminjaman</th>
                                          <th>Kode Barang</th>
                                          <th>Nama Barang</th>
                                          <th>Jumlah Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Keterangan</th>
                                          <th></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $no = 1;
                                       foreach ($pinjam as $pnj) {
                                       ?>
                                          <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $pnj['username'] ?></td>
                                             <td><?= $pnj['tgl_pinjam'] ?></td>
                                             <td><?= $pnj['kode_barang'] ?></td>
                                             <td><?= $pnj['nama_barang'] ?></td>
                                             <td><?= $pnj['jumlah_pinjam'] ?></td>
                                             <td><?= $pnj['tgl_kembali'] ?></td>
                                             <td><?= $pnj['keterangan'] ?></td>
                                             <td>
                                                <a class="btn btn-primary" href="#" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger" href="#" onclick="return confirm('Apakah anda yakin data ini akan dihapus ?')" data-toggle="tooltip" data-placement="right" title="Hapus">
                                                   <i class="fa fa-trash"></i>
                                                </a>
                                             </td>
                                          </tr>
                                       <?php
                                       }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2024 Pesantren PeTIK. All rights reserved.</p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
      <!-- model popup -->
      <!-- The Modal -->
      <?php include("includes/modal.php") ?>
      <!-- end model popup -->
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