<?php
require_once "core/init.php";

$supplier = mysqli_query($connect, "SELECT * FROM tbl_supplier");

if (isset($_POST['simpan'])) {

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tgl_masuk = $_POST['masuk'];
    $jumlah = $_POST['jumlah'];
    $supp = $_POST['sudan'];

    $sql = "INSERT INTO tbl_masukbarang (kode_barang,nama_barang,tgl_masuk,jumlah_masuk,supplier_id) VALUES ('$kode','$nama','$tgl_masuk','$jumlah','$supp')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("location:dt_barang_masuk.php");
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
                                    <h2>Input Barang Baru</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid card px-4 py-4">
                            <form class="row g-3" method="POST">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"><b>Kode Barang Masuk</b></label>
                                    <input name="kode" type="text" class="form-control" id="inputEmail4" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b>Nama Barang Masuk</b></label>
                                    <input name="nama" type="text" class="form-control" id="inputPassword4" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Tanggal Masuk</b></label>
                                    <input name="masuk" type="date" class="form-control" id="inputCity" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Jumlah Masuk</b></label>
                                    <input name="jumlah" type="number" class="form-control" id="inputCity" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label"><b>Pilih Supplier</b></label>
                                    <select name="sudan" id="inputState" class="form-control">
                                        <option hidden>Pilih Sumber Dana</option>
                                        <?php
                                        foreach ($supplier as $sup) {
                                        ?>
                                            <option value="<?= $sup['id_supplier'] ?>"><?= $sup['nama_supplier'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
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