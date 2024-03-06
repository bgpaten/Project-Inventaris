<?php

function register_user($nama, $email, $pass)
{

    global $connect;

    // mencegah sql injection
    $nama = escape($nama);
    $email = escape($email);
    $pass = escape($pass);


    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO tbl_user (username, email, password) values ('$nama', '$email', '$pass')";

    if (mysqli_query($connect, $query)) return true;
    else return false;
}

// cek naama
function cek_nama($nama)
{
    global $connect;

    $nama = escape($nama);

    $query = "SELECT * FROM tbl_user WHERE username = '$nama'";

    if ($result = mysqli_query($connect, $query)) return mysqli_num_rows($result);
}


// untuk login
function cek_data($nama, $pass)
{
    global $connect;

    // mencegah sql injection
    $nama = escape($nama);
    $pass = escape($pass);

    $query = "SELECT password FROM tbl_user WHERE username = '$nama'";
    $result = mysqli_query($connect, $query);
    $hash = mysqli_fetch_assoc($result)['password'];

    if (password_verify($pass, $hash)) return true;
    else return false;
}


// mencegah injection
function escape($data)
{
    global $connect;
    return mysqli_real_escape_string($connect, $data);
}


// redirect
function redirect_login($nama)
{
    if ($_SESSION['user'] = cek_status($nama)) {
        header('location: amin/dashboard.php');
    } else {
        header('location: user/index.php');
    }
}

// cek status user
function cek_status($nama)
{
    global $connect;

    $nama = escape($nama);

    $query = "SELECT role FROM tbl_user WHERE username='$nama'";

    $result = mysqli_query($connect, $query);
    $status = mysqli_fetch_assoc($result)['role'];

    if ($status == 1) return true;
    else return false;
}
