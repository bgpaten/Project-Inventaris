<?php
require_once "core/init.php";

$kondisi = mysqli_query($connect, "SELECT * FROM kondisi");
$supplier = mysqli_query($connect, "SELECT * FROM tbl_supplier");
$lokasi = mysqli_query($connect, "SELECT * FROM lokasi");
$kategori = mysqli_query($connect, "SELECT * FROM kategori");
$barang = mysqli_query($connect, "SELECT * FROM tbl_masukbarang");


if (isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $spesi = $_POST['spek'];
    $kondisi = $_POST['kondisi'];
    $supplyid = $_POST['sudan'];
    $lokasi = $_POST['lokasi'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];
    $image = $_FILES['gambar'];

    $barng = mysqli_query($connect, "SELECT * FROM tbl_masukbarang WHERE kode_barang='$kode'");
    $brg = mysqli_fetch_assoc($barng);
    $br = $brg['jumlah_masuk'];
    // echo $kode;
    // echo "<br>";
    // echo $nama;
    // echo "<br>";
    // echo $jumlah;
    // echo "<br>";
    // echo $spesi;
    // echo "<br>";
    // echo $kondisi;
    // echo "<br>";
    // echo $supplyid;
    // echo "<br>";
    // echo $lokasi;
    // echo "<br>";
    // echo $kategori;
    // echo "<br>";
    // echo $keterangan;
    // echo "<br>";
    // print_r($image);
    // echo "<br>";

    $imagefilename = $image['name'];
    // print_r($imagefilename);
    // echo "<br>";
    $imagefileerror = $image['error'];
    // print_r($imagefileerror);
    // echo "<br>";
    $imagefiletemp = $image['tmp_name'];
    // print_r($imagefiletemp);
    // echo "<br>";

    $filename_separate = explode('.', $imagefilename);
    // print_r($filename_separate);
    // echo "<br>";
    $file_extension = strtolower(end($filename_separate));
    // print_r($file_extension);

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = '../images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        if ($jumlah > $br) {
            echo "<script>alert('Jumlah barang yang ingin ditambahkan melebihi stok barang yang tersedia!'); window.location.href='form_barang.php';</script>";
        } else {
            $sql = "INSERT INTO tbl_barang (kode_barang,nama_barang,spesifikasi,lokasi_id,jumlah_brg,kondisi_id,kategori_id,supplier_id,image) VALUES 
      ('$kode','$nama','$spesi','$lokasi','$jumlah','$kondisi','$kategori','$supplyid','$upload_image')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                header("location:dt_barang.php");
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
                                    <h2>Input Barang Baru</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid card px-4 py-4">
                            <form action="" class="row g-3" method="POST" enctype="multipart/form-data">
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
                                    <label for="inputPassword4" class="form-label"><b>Jumlah Barang</b></label>
                                    <input name="jumlah" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b>Spesifikasi</b></label>
                                    <input name="spek" type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label"><b>Kondisi</b></label>
                                    <select name="kondisi" id="inputState" class="form-control">
                                        <option hidden>Pilih Kondisi</option>
                                        <?php
                                        foreach ($kondisi as $kon) {
                                        ?>
                                            <option value="<?= $kon['id'] ?>"><?= $kon['kondisi'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label"><b>Sumber Dana</b></label>
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
                                    <label for="inputState" class="form-label"><b>Lokasi</b></label>
                                    <select name="lokasi" id="inputState" class="form-control">
                                        <option hidden>Pilih Lokasi</option>
                                        <?php
                                        foreach ($lokasi as $lok) {
                                        ?>
                                            <option value="<?= $lok['id'] ?>"><?= $lok['lokasi'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label"><b>Kategori</b></label>
                                    <select name="kategori" id="inputState" class="form-control">
                                        <option hidden>Pilih Kategori</option>
                                        <?php
                                        foreach ($kategori as $kat) {
                                        ?>
                                            <option value="<?= $kat['id'] ?>"><?= $kat['kategori'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b>Gambar</b></label>
                                    <input name="gambar" type="file" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label"><b>Keterangan</b></label>
                                    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
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