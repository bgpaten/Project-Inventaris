<?php
require_once "core/init.php"; 

$id = $_GET["id"];
// $query = "SELECT * FROM kategori ";
// $edit = mysqli_query($connect, $query);

$kategori = mysqli_query($connect, "SELECT * FROM kategori Where id=$id");
$barang = mysqli_query($connect, "SELECT * FROM tbl_barang WHERE kategori_id='$id'");
$rowkulia = mysqli_num_rows($barang);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>APIP - aplikasi inventaris PeTIK</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body class="topics-listing-page" id="top">

    <main>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <?php include 'nav.php'; ?>
        </nav>
        <!--  -->
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                    foreach ($kategori as $ktg) {
                        ?>
                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?= $ktg["kategori"] ?>
                                    </li>
                                </ol>
                            </nav>

                            <h2 class="text-white">
                                <?= $ktg["kategori"] ?>
                            </h2>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </header>
        <!--  -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <h3 class="mb-4">Popular Topics</h3>
                    </div>
                    <div class="row">
                        <?php foreach ($barang as $barangData): ?>
                            <?php if ($barangData["kategori_id"] === $ktg["id"]): ?>
                                <div class="col-4">
                                    <div class="custom-block bg-white shadow-lg mb-5">

                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">
                                                    <?= $barangData["nama_barang"] ?>
                                                </h5>
                                                <p class="mb-0">
                                                    <?= $barangData["spesifikasi"] ?>
                                                </p>
                                            </div>
                                            <span class="badge bg-design rounded-pill ms-auto">
                                                <?= $barangData["jumlah_brg"] ?>
                                            </span>
                                        </div>
                                        <img src="<?= $barangData["image"] ?>" class="custom-block-image img-fluid" alt="">
                                        <div class="d-grid gap-2">
                                            <a href="pinjam.php?id=<?= $barangData["id_barang"] ?>"> <button
                                                    class="btn btn-info  text-white fw-bold mt-3" style="width:100%;"
                                                    type="button">Pinjam</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4">Trending Topics</h3>
                    </div>
                    <div class="col-12 mt-3 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="#">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Ingatlah Anak Muda</h5>

                                        <p class="mb-0">Pinjam-meminjam dalam istilah fiqh disebut 'ariyah (العريّة)
                                            yang secara terminologi berarti kebolehan memanfaatkan barang yang masih
                                            utuh yang masih di gunakan, untuk kemudian dikembalikan pada pemiliknya.
                                            Peminjaman barang sah dengan ungkapan atau perbuatan apapun yang menunjukkan
                                            kepadanya peminjaman dilakukan berdasarkan alquran, sunnah, dan ijma ulama.
                                        </p>
                                        <p class="mt-3">Allah SWT berfirman:</p>
                                        <p class="">اِنَّ اللّٰهَ يَأْمُرُكُمْ اَنْ تُؤَدُّوا الْاَمٰنٰتِ اِلٰٓى
                                            اَهْلِهَا وَاِذَا حَكَمْتُمْ بَيْنَ النَّاسِ اَنْ تَحْكُمُوْا بِالْعَدْلِ ؕ
                                            اِنَّ اللّٰهَ نِعِمَّا يَعِظُكُمْ بِه ؕ اِنَّ اللّٰهَ كَانَ سَمِيْعًا
                                            بَصِيْرًا</p>
                                        <p>"Sungguh, Allah menyuruhmu menyampaikan amanat kepada yang berhak
                                            menerimanya, dan apabila kamu menetapkan hukum di antara manusia hendaknya
                                            kamu menetapkannya dengan adil. Sungguh, Allah sebaik-baik yang memberi
                                            pengajaran kepadamu. Sungguh, Allah Maha Mendengar, Maha Melihat."<br></p>
                                        <p>(QS. An-Nisa': Ayat 58)</p>
                                    </div>

                                    <span class="badge bg-design ms-auto" style="height: 20%;">Sword Of God</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <?php include "footer.php"; ?>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>