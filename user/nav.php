<?php
// require "config.php";
// require "core/init.php";
// require "function.php";
?>

<!-- navbar -->
<div class="container">
    <a class="navbar-brand" href="index.php">
        <!-- <i class="bi-back"></i> -->
        <span style="color:#34407d; font-size:1.8rem;">
            <img src="images/logo/petik_jpg_-removebg-preview.png" alt="" style="width:7rem;">
            APIP
        </span>
    </a>

    <div class="d-lg-none ms-auto me-4">
        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-5 me-lg-auto">
            <li class="nav-item">
                <a class="nav-link click-scroll" href="index.php#section_1">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link click-scroll" href="index.php#section_2">Inventaris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link click-scroll" href="index.php#section_3">Peminjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link click-scroll" href="index.php#section_4">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link click-scroll" href="index.php#section_5">Contact</a>
            </li>

        </ul>

        <div class="d-none d-lg-block nav-item dropdown">
            <div class="navbar-icon bi-person smoothscroll  ">
            </div>
            <p class="text-white"><?= $_SESSION['username']; ?></p>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                <li><a class="dropdown-item active" href="../logout.php">Log out <i
                            class="bi bi-box-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>