<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $tgl_kunjungan       = htmlspecialchars($_POST['tgl_kunjungan']);


  $query = ("INSERT into kunjungan values('" . $id . "','" . $kode_pasien . "','" . $tgl_kunjungan . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=kunjungan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=kunjungan_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $tgl_kunjungan       = htmlspecialchars($_POST['tgl_kunjungan']);

  $query = ("UPDATE kunjungan SET kode_pasien='" . $kode_pasien . "'
  , tgl_kunjungan='" . $tgl_kunjungan . "'
 WHERE kode_kunjungan='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=kunjungan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=kunjungan_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from kunjungan where kode_kunjungan='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=kunjungan_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=kunjungan_data';
        </script>";
  //}
} ?>
