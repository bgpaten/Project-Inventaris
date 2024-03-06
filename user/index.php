<?php
require_once "core/init.php"; 

$_SESSION['username'];

if (!isset($_SESSION['user'])) {
    header('location: ../login.php');
}


$kategori = mysqli_query($connect, "SELECT * FROM kategori");
$barang = mysqli_query($connect, "SELECT * FROM tbl_barang");



// // pencarian (search)
// if (isset($_GET['searc'])) {
//     $search = $_GET['cari'];
//     $cari = "SELECT kategori.kategori, tbl_barang.* FROM tbl_barang INNER JOIN kategori on tbl_barang.kategori_id = kategori.id WHERE nama_barang 
//     LIKE '%$search%'
//     OR kategori LIKE '%$search%'";

//     $barang = mysqli_query($connect, $cari);

//     // cek kalau data pencarian user tidak ditemukan
//     if (mysqli_num_rows($barang) == 0) {
//         $error = true;
//     }
// }

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

<body id="top">

    <main>
        <nav class="navbar navbar-expand-lg">
            <?php include 'nav.php'; ?>
        </nav>
        <!-- search -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Inventaris Pesantren</h1>

                        <h6 class="text-center">platform pendataan barang dan peminjaman barang inventaris pesantren
                        </h6>
                        <form method="GET" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">
                                </span>
                                <input name="cari" type="search" class="form-control"
                                    placeholder="Elektronik, Furniture, Sarana...." aria-label="Search">
                                <button type="submit" name="searc" class="form-control">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- pengantar -->
        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="detail.php">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Pengantar</h5>

                                        <p class="mb-0">Aplikasi inventaris barang ini merupakan sofware sebagai alat
                                            bantu untuk sistematis yang bisa mengawasi, melacak kondisi sebuah barang
                                            yang terdapat didalam lingkungan sebuah kantor baik pemerintah ataupun
                                            swasta</p>
                                    </div>
                                </div>
                                <img src="images/topics/businesswoman-using-tablet-analysis.jpg"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="images/businesswoman-using-tablet-analysis.jpg"
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Fitur-fitur website inventaris</h5>

                                        <p class="text-white">1. Penyimpanan inventaris: Website ini dapat digunakan
                                            untuk mengelola lokasi penyimpanan inventaris</p>
                                        <p class="text-white">2. Pemeliharaan inventaris: Website ini dapat digunakan
                                            untuk mengelola jadwal pemeliharaan inventaris</p>
                                        <p class="text-white">3. Peminjaman inventaris: Website ini dapat digunakan
                                            untuk meminjam barang inventaris</p>
                                        <p class="text-white">4. Dll</p>
                                        <a href="topics-listing.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                    </div>

                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Share:</p>
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="https://twitter.com/Pesantren_Petik"
                                                class="social-icon-link bi-twitter"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="https://www.instagram.com/pesantrenpetik/"
                                                class="social-icon-link bi-instagram"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="https://www.facebook.com/pesantrenpetik/?locale=id_ID"
                                                class="social-icon-link bi-facebook"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="0812995429514" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="https://www.linkedin.com/in/pesantren-petik-165455209/?originalSubdomain=id"
                                                class="social-icon-link bi-linkedin"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-pinterest"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="section-overlay">
                                    <div class="container fluid px-5 mt-5">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--data invantaris  -->
        <section class="explore-section section-padding" id="section_2">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Data Inventaris Barang</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php foreach ($kategori as $data): ?>
                                    <button class="nav-link" id="<?= "design-tab-" . $data["id"] ?>" data-bs-toggle="tab"
                                        data-bs-target="<?= "#id" . $data["id"] ?>" type="button" role="tab"
                                        aria-controls="<?= "id" . $data["id"] ?>" aria-selected="true">
                                        <?= $data["kategori"] ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <?php foreach ($kategori as $data): ?>
                                <div class="tab-pane fade" id="<?= "id" . $data["id"] ?>" role="tabpanel"
                                    aria-labelledby="<?= "design-tab-" . $data["id"] ?>">
                                    <div class="row">
                                        <?php foreach ($barang as $barangData): ?>
                                            <?php if ($barangData["kategori_id"] === $data["id"]): ?>
                                                <div class="col-3">
                                                    <div class=" custom-block bg-white shadow-lg">
                                                        <img src="<?= $barangData["image"] ?>" class="custom-block-image img-fluid"
                                                            alt="">
                                                        <div class="d-flex justify-content-end ">
                                                            <span class="badge bg-design rounded ms-auto">
                                                                <?= $barangData["jumlah_brg"] ?>
                                                            </span>
                                                        </div>
                                                        <h5>
                                                            <?= $barangData["nama_barang"] ?>
                                                        </h5>
                                                        <p class="mb-0">
                                                            <?= $barangData["spesifikasi"] ?>
                                                        </p>
                                                        <div class="d-grid gap-2">
                                                            <a href="pinjam.php?id=<?= $barangData["id_barang"] ?>"><button
                                                                    class="btn btn-info text-white fw-bold"
                                                                    style="width:100%;">pinjam</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <div class="col d-flex justify-content-end ">
                                            <a href="show.php?id=<?= $data["id"] ?>">
                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Lihat semua....."
                                                    class="btn btn-info text-white fw-bold "><i
                                                        class="bi bi-list-task me-2"></i>view all</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ketentuan peminjaman -->
        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center mb-5">
                        <h2 class="text-white mb-4">ketentuan peminjaman barang inventaris</h2>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Pengajuan permohonan</h4>
                                    <p class="text-white">1. User harus membuat akun untuk peminjaman barang inventaris
                                    </p>
                                    <p class="text-white">2. Isi surat permohonan peminjaman barang inventaris dengan
                                        lengkap dan benar. </p>
                                    <p class="text-white">3. Pengelola barang inventaris akan menyerahkan barang
                                        inventaris yang akan dipinjam kepada peminjam.</p>
                                    <div class="icon-holder">
                                        <i class="bi bi-1-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Pemanfaatan barang inventaris</h4>
                                    <p class="text-white">1. Peminjam dapat memanfaatkan barang inventaris sesuai dengan
                                        tujuan peminjaman.</p>
                                    <p class="text-white">2. Peminjam wajib merawat dan menjaga barang inventaris dengan
                                        baik.</p>
                                    <div class="icon-holder">
                                        <i class="bi bi-2-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Pengembalian barang inventaris</h4>
                                    <p class="text-white">1. Peminjam wajib mengembalikan barang inventaris dalam
                                        kondisi baik dan lengkap.</p>
                                    <p class="text-white">2. Peminjam akan menandatangani surat pernyataan tanggung
                                        jawab sebagai bukti pengembalian barang inventaris.</p>
                                    <div class="icon-holder">
                                        <i class="bi bi-3-circle"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            Apakah Anda Tertarik ?
                            <a href="index.php#section_2" class="btn custom-btn custom-border-btn ms-3">Pinjam
                                Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="img-fluid" alt="FAQs"
                            style="height: 400px;">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Topic Listing?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to
                                            redistribute this template</strong> on any other template collection website
                                        without our permission. Please contact TemplateMo for more detail. Thank you.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can search on Google with <strong>keywords</strong> such as templatemo
                                        portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Does it need to paid?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can modify any of this with custom CSS or overriding our default variables.
                                        It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
        <section class="contact-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Contact Person</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0552689660644!2d106.77489547499177!3d-6.386869293603587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1704070558680!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                        <h4 class="mb-3">Depok office</h4>

                        <small>Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat
                            16434
                        </small>
                        <hr>
                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>
                            <a href="#" class="site-footer-link">
                                (021)-77886691
                            </a>
                        </p>
                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>
                            <a href="#" class="site-footer-link">
                                lkppetik@gmail.com
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mx-auto">
                        <h4 class="mb-3">Jombang office</h4>
                        <small class="text-">Jl. KH. Bisri Syansuri RT 01/RW 05, Desa Plosogeneng Kecamatan Jombang,
                            Kabupaten Jombang Jawa Timur, Indonesia
                        </small>
                        <hr>
                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>
                            <a href="#" class="site-footer-link">
                                0812-9554-2914
                            </a>
                        </p>
                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>
                            <a href="#" class="site-footer-link">
                                petikjombang@gmail.com </a>
                        </p>
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
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
<?php
session_start();
if (isset($_SESSION['insert'])) {
    ?>
    <script>
        swal("Good Job", "Welcome To APIP (Aplikasi Inventaris Pesantren)", "success");
    </script>
    <?php
} elseif (isset($_SESSION['pinjam'])) {
    ?>
    <script>
        swal("Success", "Terimakasih permintaan anda sedang kami proses", "success");
    </script>
    <?php
}


// session dihapus
unset($_SESSION["insert"]);

?>