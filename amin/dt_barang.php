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
                                 <h2>Data Barang</h2>
                              </div>
                           </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                                 <?php

                                 $barang = mysqli_query($connect, "SELECT 
                                    lokasi.lokasi, 
                                    kondisi.kondisi, 
                                    kategori.kategori, 
                                    tbl_supplier.nama_supplier, 
                                    tbl_barang.* FROM tbl_barang 
                                    INNER JOIN lokasi ON tbl_barang.lokasi_id = lokasi.id
                                    INNER JOIN kondisi ON tbl_barang.kondisi_id = kondisi.id
                                    INNER JOIN kategori ON tbl_barang.kategori_id = kategori.id
                                    INNER JOIN tbl_supplier ON tbl_barang.supplier_id = tbl_supplier.id_supplier
                                    ");
                                 ?>
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Kode Barang</th>
                                          <th>Nama Barang</th>
                                          <th>Spesifikasi</th>
                                          <th>Gambar</th>
                                          <th>Lokasi Barang</th>
                                          <th>Jumlah Barang</th>
                                          <th>Kondisi Barang</th>
                                          <th>Kategori Barang</th>
                                          <th>Sumber Dana</th>
                                          <th></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $no = 1;
                                       foreach ($barang as $brg) {
                                       ?>
                                          <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $brg['kode_barang'] ?></td>
                                             <td><?= $brg['nama_barang'] ?></td>
                                             <td><?= $brg['spesifikasi'] ?></td>
                                             <td><img src="<?= $brg['image'] ?>" width="60"></td>
                                             <td><?= $brg['lokasi'] ?></td>
                                             <td><?= $brg['jumlah_brg'] ?></td>
                                             <td><?= $brg['kondisi'] ?></td>
                                             <td><?= $brg['kategori'] ?></td>
                                             <td><?= $brg['nama_supplier'] ?></td>
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