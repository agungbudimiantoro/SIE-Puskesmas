<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $nama_pasien       = htmlspecialchars($_POST['nama_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $umur       = htmlspecialchars($_POST['umur']);
  $alamat_pasien       = htmlspecialchars($_POST['alamat_pasien']);
  $pekerjaan       = htmlspecialchars($_POST['pekerjaan']);
  $keluhan       = htmlspecialchars($_POST['keluhan']);

  $query = ("INSERT into pasien values('" . $id . "','" . $nama_pasien . "','" . $umur . "','" . $alamat_pasien . "','" . $pekerjaan . "','" . $keluhan . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=pasien_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=pasien_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $nama_pasien       = htmlspecialchars($_POST['nama_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $umur       = htmlspecialchars($_POST['umur']);
  $alamat_pasien       = htmlspecialchars($_POST['alamat_pasien']);
  $pekerjaan       = htmlspecialchars($_POST['pekerjaan']);
  $keluhan       = htmlspecialchars($_POST['keluhan']);

  $query = ("UPDATE pasien SET nama_pasien='" . $nama_pasien . "'
  , umur='" . $umur . "'
  , alamat_pasien='" . $alamat_pasien . "'
  , pekerjaan='" . $pekerjaan . "'
  , keluhan='" . $keluhan . "' WHERE kode_pasien='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=pasien_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=pasien_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from pasien where kode_pasien='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=pasien_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=pasien_data';
        </script>";
  //}
} ?>
