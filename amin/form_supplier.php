<?php
require_once "core/init.php";

if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $tlp = $_POST['tlp'];
    $kota = $_POST['kota'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbl_supplier (nama_supplier,alamat_supplier,telp_supplier,kota_supplier) VALUES ('$nama','$alamat','$tlp','$kota')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("location:dt_supply.php");
    } else {
        die(mysqli_error($connect));
    }
}
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
                                    <h2>Tambah Supplier Baru</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid card px-4 py-4">
                            <form class="row g-3" method="POST">
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b>Nama Supplier</b></label>
                                    <input name="nama" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label"><b>Telp Supplier</b></label>
                                    <input name="tlp" type="text" class="form-control" id="inputEmail4" value="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Kota Supplier</b></label>
                                    <input name="kota" type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Alamat Supplier</b></label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <button name="simpan" type="submit" class="btn btn-dark mt-4">Submit</button>
                                    <button type="submit" class="btn btn-outline-dark mt-4">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <div class="container-fluid">
                    <div class="footer">
                        <p>All rights reserved | © App Inventaris PeTIK - 2023
                        </p>
                    </div>
                </div>
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <?php include("includes/footer.php") ?>
</body>

</html>