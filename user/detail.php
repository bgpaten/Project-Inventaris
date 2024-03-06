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

    <link rel="icon" href="images/ikon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body id="top">

    <main>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <?php include "nav.php"; ?>
        </nav>
        <!--  -->
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Pengantar</li>
                            </ol>
                        </nav>
                        <h2 class="text-white"> PENGANTAR</h2>
                        <h4 class="mt-4 text-white">Riki Bagus Santoso, S.P</h4>
                        <h6>Direktur Pesantren PeTIK</h6>
                        <div class="d-flex align-items-center mt-5">
                            <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read
                                More</a>
                            <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="topics-detail-block bg-white shadow-lg">
                            <img src="images/topics/direktur.jpg" style="width:30rem;"
                                class="topics-detail-block-image img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--  -->
        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 m-auto">
                        <h3 class="mb-4">Apa itu APIP ?</h3>
                        <p>
                            Aplikasi Inventaris Pesantren PeTIK ini merupakan sofware sebagai alat bantu untuk
                            sistematis yang bisa mengawasi, melacak kondisi sebuah barang yang terdapat
                            didalam lingkungan sebuah kantor baik pemerintah ataupun swasta.
                        </p>

                        <p><b>Apa itu Manajemen data inventaris?</b> Manajemen data inventaris adalah
                            proses mengumpulkan, menyimpan, dan menganalisis data tentang inventaris
                            Anda. Ini penting untuk memastikan bahwa Anda memiliki inventaris yang
                            cukup untuk memenuhi kebutuhan Anda, dan bahwa Anda tidak terlalu banyak
                            menghabiskan uang untuk barang-barang yang tidak Anda gunakan
                        </p>

                        <center>
                            <blockquote class="">
                                PENGEMBANGAN APIP
                            </blockquote>
                        </center>


                        <div class="row my-4">
                            <div class="col-lg-6 col-md-6 col-12">
                                <img src="images/topics/detail_2.jpg" class="topics-detail-block-image img-fluid">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                <img src="images/topics/detail_3.jpg" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                        <p>
                            <b>Meningkatkan efisiensi:</b> Sistem manajemen data inventaris yang baik
                            dapat membantu Anda melacak inventaris Anda dengan lebih mudah dan
                            efisien. Ini dapat menghemat waktu dan tenaga Anda, dan membantu
                            Anda membuat keputusan yang lebih baik tentang inventaris Anda.
                        </p>
                        <p>
                            <b>Mengurangi biaya: </b>Sistem manajemen data inventaris yang baik dapat
                            membantu Anda mengurangi biaya inventaris Anda. Ini dapat membantu
                            Anda menghindari kelebihan stok dan kekurangan stok, yang dapat
                            menyebabkan biaya tambahan.
                        </p>
                        <p>
                            <b>Meningkatkan kontrol:</b> Sistem manajemen data inventaris yang baik dapat
                            membantu Anda meningkatkan kontrol atas inventaris Anda. Ini dapat
                            membantu Anda memastikan bahwa inventaris Anda digunakan secara
                            bertanggung jawab dan aman.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
        <section class="section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-5 col-12">
                        <img src="images/logo/detail_1-removebg-preview.png" class="newsletter-image img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                        <form class=" subscribe-form" action="#" method="post" role="form">
                            <h4 class="mb-4 pb-2">We'd love to hear from you</h4>

                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <input type="text" placeholder="Name" class="form-control" required="">
                                    <label for="floatingInput">email</label>
                                </div>
                            </div>
                            <div class="form-floating  mb-4">
                                <textarea class="form-control" id="message" name="ket"
                                    placeholder="Tell me about the project" style="height:8rem;"></textarea>
                                <label for="floatingTextarea">Keterangan</label>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success" name="pinjam"
                                    style="width:100%;">subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!--  -->
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