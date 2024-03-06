<?php
require "config.php";
require "core/init.php";
require "function.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>error</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300&display=swap"
    rel="stylesheet">
</head>

<body>

  <div class="container">
    <div class="row mt-5">
      <div class="col-2">
        <img src="images/logo/eror-removebg-preview.png" alt="">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-6">
        <h3 class="mb-4">Your connection is not private</h3>
        <p class="text-secondary fw-medium">Attackers might be trying to steal your information from <span
            class="fw-bold">www.apip.id
          </span>(for example,passwords,mesages,orcredit card). <a href="#" class="text-secondary">Learn more</a></p>
        <small class="text-secondary">NET::ERR_CERT_AUTHORITY_INVALID</small>
        <div class="d-flex justify-content-center border rounded-4 mt-5" style="background-color:#eee;">
          <p class="text-secondary mt-3 "><i class="fa-regular fa-lightbulb"></i> To get Chrome's highest level of
            securty, <a href="#" class="text-secondary ">turn on enhanced protection</a></p>
        </div>
        <div class="d-flex mt-4 ">
          <a href="#" class="me-5"><button class="btn btn-outline-secondary">Advanced</button></a>
          <a href="login.php" class="ms-5"><button class="btn btn-primary ">Back to safety</button></a>
        </div>
      </div>
    </div>

  </div>
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
  <script src="https://kit.fontawesome.com/c2dd979a9d.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
<?php
if (isset($_SESSION['error'])) {
  ?>
  <script>
    swal({
      title: "Error",
      text: "The data you entered is incorrect",
      icon: "warning"
    });
  </script>
  <?php
} elseif (isset($_SESSION['no'])) {
  ?>
  <script>
    swal({
      title: "Empty data",
      text: "Data tidak boleh kosong",
      icon: "warning"
    });
  </script>
  <?php
} elseif (isset($_SESSION['dont'])) {
  ?>
  <script>
    swal({
      title: "Error",
      text: "Data anda tidak terdaftar di aplikasi kami",
      icon: "error",
      buttons: true,
      dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          swal("Back To Register", {
            icon: "warning",
          });
        } else {
          swal("try again");
        }
      });
  </script>
  <?php
} elseif (isset($_SESSION['gagal'])) {
  ?>
  <script>
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning"
    });
  </script>
  <?php
} elseif (isset($_SESSION['kosong'])) {
  ?>
  <script>
    swal({
      title: "empty data",
      text: "Data tidak boleh kosong",
      icon: "error",
      buttons: true,
      dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          swal("Try again", {
            icon: "warning",
          });
        } else {
          swal("Come back to re-register");
        }
      });
  </script>
  <?php
} elseif (isset($_SESSION['sudah ada'])) {
  ?>
  <script>
    swal({
      title: "Error",
      text: "Data anda sudah terdaftar di aplikasi kami, data tidak boleh sama",
      icon: "error",
      buttons: true,
      dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          swal("Back To Register", {
            icon: "warning",
          });
        } else {
          swal("Try again");
        }
      });
  </script>
  <?php
}
// session dihapus
session_destroy();
?>