<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include "koneksi.php";
if ($_POST['username'] == '') {
  header("location:index.php?pesan=gagal10");
  die;
}
// menangkap data yang dikirim dari form login
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$level = htmlspecialchars($_POST['level']);
// query
$login = mysqli_query($conn, "select * from user where username='" . $username . "' and password='" . $password . "' and level='" . $level . "'");
$data = mysqli_fetch_assoc($login);
$cek = mysqli_num_rows($login);

if ($cek > 0) {
  if ($password == $data['password']) {
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $data['level'];
    $_SESSION['id_user'] = $data['id_user'];
    if ($data['level'] == 'admin') {
      echo "
                <script language=javascript>
                  alert('Selamat Datang $username');
                  document.location.href='admin/hal.php?p=dashboard';
                </script>";
    } elseif ($data['level'] == 'pimpinan') {
      echo "
                    <script language=javascript>
                      alert('Selamat Datang $username');
                      document.location.href='pimpinan/hal.php?p=dashboard';
                    </script>";
    }
  } else {
    header("location:index.php?pesan=gagal");
  }
  echo "username";
} else {
  header("location:index.php?pesan=gagal1");
}
