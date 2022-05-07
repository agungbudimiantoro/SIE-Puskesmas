<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $nama_kamar       = htmlspecialchars($_POST['nama_kamar']);
  $id       = htmlspecialchars($_POST['id']);
  $jenis_kamar       = htmlspecialchars($_POST['jenis_kamar']);


  $query = ("INSERT into kamar values('" . $id . "','" . $nama_kamar . "','" . $jenis_kamar . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=kamar_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=kamar_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $nama_kamar       = htmlspecialchars($_POST['nama_kamar']);
  $id       = htmlspecialchars($_POST['id']);
  $jenis_kamar       = htmlspecialchars($_POST['jenis_kamar']);

  $query = ("UPDATE kamar SET nama_kamar='" . $nama_kamar . "'
  , jenis_kamar='" . $jenis_kamar . "'
 WHERE kode_kamar='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=kamar_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=kamar_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from kamar where kode_kamar='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=kamar_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=kamar_data';
        </script>";
  //}
} ?>
