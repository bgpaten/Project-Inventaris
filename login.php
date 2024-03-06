<?php
require_once "core/init.php";

// redirect klw user dah login
if (isset($_SESSION['user']) && isset($_SESSION['username'])) {
  header('location: user/index.php');
}

// validasi register
if (isset($_POST['submit1'])) {
  $nama = $_POST['username1'];
  $email = $_POST['email'];
  $pass = $_POST['password1'];

  if (cek_nama($nama) == 0) {
    if (!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass))) {
      //memasukkan ke database 
      if (register_user($nama, $email, $pass)) {
        $_SESSION['username'] = $nama;
        redirect_login($nama);
      } else {
        echo "gagal daftar";
      }
    } else {
      echo "Tidakk BOleh Kosong";
    }
  } else {
    echo 'nama sudah ada tidak bisa daftar';
    
  }
}

// validasi login
if (isset($_POST['submit'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];

    if (!empty(trim($nama)) && !empty(trim($pass))) {

      if (cek_nama($nama) != 0) {
        if (cek_data($nama, $pass)) {
          $_SESSION['username'] = $nama;
          redirect_login($nama);
        } else {
          echo 'data ada yang salah';
        }
      } else {
        echo 'namanya belum terdaftar';
      }
        
    } else {
      echo "Tidakk Boleh Kosong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login And Regist</title>
  <link rel="stylesheet" href="style_login.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <span class="bg-animate"></span>
    <span class="bg-animate2"></span>

    <div class="form-box login">
      <h2 class="animation" style="--i: 0 --j:21;">Login</h2>
      <form action="#" method="post">
        <div class="input-box animation" style="--i: 1 --j:22;">
          <input name="username" type="text" required />
          <label>Username</label>
          <i class="bx bxs-user"></i>
        </div>

        <div class="input-box animation" style="--i: 2 --j:23;">
          <input name="password" type="password" required />
          <label>Password</label>
          <i class="bx bxs-lock-alt"></i>
        </div>
        <button name="submit" type="submit" class="btn animation" style="--i: 3 --j:24;">
          Login
        </button>
        <div class="logreg-link animation" style="--i: 4 --j:25;">
          <p>
            Don`t have an account?
            <a href="#" class="register-link">Sign Up</a>
          </p>
        </div>
      </form>
    </div>
    <div class="info-text login">
      <h2 class="animation" style="--1: 0 --j:20;">Welcome Back</h2>
      <p class="animation" style="--1: 1 --j:21;">ygvgcbfvbfv</p>
    </div>

    <div class="form-box register">
      <h2 class="animation" style="--i: 17 --j:0;">Sign Up</h2>
      <form action="#" method="post">
        <div class="input-box animation" style="--i: 18 --j:1;">
          <input name="username1" type="text" required />
          <label>Username</label>
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box animation" style="--i: 19 --j:2;">
          <input name="email" type="text" required />
          <label>Email</label>
          <i class="bx bxs-envelope"></i>
        </div>

        <div class="input-box animation" style="--i: 20 --j:3;">
          <input name="password1" type="password" required />
          <label>Password</label>
          <i class="bx bxs-lock-alt"></i>
        </div>
        <button name="submit1" type="submit" class="btn animation" style="--i: 21 --j:4;">
          Sign Up
        </button>
        <div class="logreg-link animation" style="--i: 22 --j:5;">
          <p>
            Already have an account?
            <a href="#" class="login-link">Login</a>
          </p>
        </div>
      </form>
    </div>
    <div class="info-text register">
      <h2 class="animation" style="--i: 17 --j:0;">Welcome Back</h2>
      <p class="animation" style="--i: 18 --j:1;">ygvgcbfvbfv</p>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>