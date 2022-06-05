<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {

<<<<<<< HEAD:admin/mod_dokter/dokter_proses.php
  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $hasil_diaknosa       = htmlspecialchars($_POST['hasil_diaknosa']);
  $nama_dokter       = htmlspecialchars($_POST['nama_dokter']);
  $query = ("INSERT into dokter values('" . $id . "','" . $nama_dokter . "','" . $kode_pasien . "','" . $hasil_diaknosa . "')");
=======


  $id       = htmlspecialchars($_POST['id']);
  $nm_prodi       = htmlspecialchars($_POST['nm_prodi']);


  $query = ("INSERT into prodi values('" . $id . "','" . $nm_prodi . "')");
>>>>>>> ea31f255ccada6bd3a497e89fcf31859086678ad:admin/mod_prodi/prodi_proses.php
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=prodi_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=prodi_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $id       = htmlspecialchars($_POST['id']);
<<<<<<< HEAD:admin/mod_dokter/dokter_proses.php
  $hasil_diaknosa       = htmlspecialchars($_POST['hasil_diaknosa']);
  $nama_dokter       = htmlspecialchars($_POST['nama_dokter']);

  $query = ("UPDATE dokter SET kode_pasien='" . $kode_pasien . "',nama_dokter='" . $nama_dokter . "', hasil_diaknosa='" . $hasil_diaknosa . "' WHERE kode_dokter='" . $id . "'");
=======
  $nm_prodi       = htmlspecialchars($_POST['nm_prodi']);


  $query = ("UPDATE prodi SET 
  nm_prodi='" . $nm_prodi . "'
  WHERE kd_prodi='" . $id . "'");
>>>>>>> ea31f255ccada6bd3a497e89fcf31859086678ad:admin/mod_prodi/prodi_proses.php

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=prodi_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=prodi_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from prodi where kd_prodi='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=prodi_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=tahun_ajaran_data';
        </script>";
  //}
} ?>
