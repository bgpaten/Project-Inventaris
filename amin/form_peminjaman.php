<?php
require_once "core/init.php";

$barang = mysqli_query($connect, "SELECT * FROM tbl_barang");
$user = mysqli_query($connect, "SELECT * FROM tbl_user");

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $tgl_pinjam = $_POST['pinjam'];
    $tgl_kembali = $_POST['kembali'];
    $jumlah = $_POST['jumlah'];

    $barng = mysqli_query($connect, "SELECT * FROM tbl_barang WHERE kode_barang='$kode'");
    $brg = mysqli_fetch_assoc($barng);
    $br = $brg['jumlah_brg'];
    $sisa = $br - $jumlah;

    /// Cek apakah tanggal pinjam lebih besar dari tanggal kembali
    if ($tgl_pinjam > $tgl_kembali) {
        echo "<script>alert('Tanggal pinjam harus lebih kecil dari tanggal kembali!'); window.location.href='form_peminjaman.php';</script>";
    } else {

        // Cek apakah jumlah yang ingin dipinjam melebihi jumlah barang yang tersedia
        if ($jumlah > $br) {
            echo "<script>alert('Jumlah yang ingin dipinjam melebihi jumlah barang yang tersedia!'); window.location.href='form_peminjaman.php';</script>";
        } else {

            // Simpan data peminjaman
            $sql = "INSERT INTO tbl_pinjam (user_id,tgl_pinjam,kode_barang,nama_barang,jumlah_pinjam,tgl_kembali) VALUES ('$user','$tgl_pinjam','$kode','$nama','$jumlah','$tgl_kembali')";
            $result = mysqli_query($connect, $sql);
            if ($result) {

                // Update jumlah barang
                $query = "UPDATE tbl_barang set jumlah_brg='$sisa' WHERE kode_barang='$kode'";
                $result = mysqli_query($connect, $query);
                if ($result) {
                    header("location:dt_peminjaman.php");
                } else {
                    die(mysqli_error($connect));
                }
            } else {
                die(mysqli_error($connect));
            }
        }
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
                                    <h2>Form Peminjaman</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid card px-4 py-4">
                            <form class="row g-3" method="POST">
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Nama Peminjam</b></label>
                                    <select name="user" type="text" class="form-control" id="inputCity">
                                        <option value="" hidden>Pilih Peminjam</option>
                                        <?php
                                        foreach ($user as $us) {
                                        ?>
                                            <option value="<?= $us['id_user'] ?>"><?= $us['username'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Nama Barang</b></label>
                                    <select name="nama" type="text" class="form-control" id="nama">
                                        <option value="" hidden>Pilih Barang</option>
                                        <?php foreach ($barang as $brg) { ?>
                                            <option value="<?= $brg['nama_barang'] ?>"><?= $brg['nama_barang'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Kode Barang</b></label>
                                    <select name="kode" type="text" class="form-control" id="kode">
                                        <option value="" hidden>Pilih Kode Barang</option>
                                        <?php foreach ($barang as $brg) { ?>
                                            <option value="<?= $brg['kode_barang'] ?>" data-nama="<?= $brg['nama_barang'] ?>"><?= $brg['kode_barang'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $("#nama").change(function() {
                                            var nama = $(this).val();
                                            $("#kode option[data-nama='" + nama + "']").prop('selected', true);
                                        });
                                        $("#kode").change(function() {
                                            var kode = $(this).val();
                                            $("#nama option[value='" + kode + "']").prop('selected', true);
                                        });
                                    });
                                </script>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b>Tanggal Peminjaman</b></label>
                                    <input name="pinjam" type="date" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Tanggal Pengembalian</b></label>
                                    <input name="kembali" type="date" class="form-control" id="exampleFormControlTextarea1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Jumlah Pinjam</b></label>
                                    <input name="jumlah" class="form-control" id="exampleFormControlTextarea1">
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