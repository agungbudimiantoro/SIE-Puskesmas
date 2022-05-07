<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $nama_obat       = htmlspecialchars($_POST['nama_obat']);
  $jenis_obat       = htmlspecialchars($_POST['jenis_obat']);
  $id       = htmlspecialchars($_POST['id']);
  $jumlah       = htmlspecialchars($_POST['jumlah']);
  $tgl_masuk_obat       = htmlspecialchars($_POST['tgl_masuk_obat']);
  $tgl_keluar_obat       = htmlspecialchars($_POST['tgl_keluar_obat']);
  $kd_dokter       = htmlspecialchars($_POST['kd_dokter']);

  $query = ("INSERT into obat values('" . $id . "','" . $nama_obat . "','" . $jenis_obat . "','" . $jumlah . "','" . $tgl_masuk_obat . "','" . $tgl_keluar_obat . "','" . $kd_dokter . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=obat_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=obat_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $nama_obat       = htmlspecialchars($_POST['nama_obat']);
  $jenis_obat       = htmlspecialchars($_POST['jenis_obat']);
  $id       = htmlspecialchars($_POST['id']);
  $jumlah       = htmlspecialchars($_POST['jumlah']);
  $tgl_masuk_obat       = htmlspecialchars($_POST['tgl_masuk_obat']);
  $tgl_keluar_obat       = htmlspecialchars($_POST['tgl_keluar_obat']);
  $kd_dokter       = htmlspecialchars($_POST['kd_dokter']);


  $query = ("UPDATE obat SET nama_obat='" . $nama_obat . "'
  , jenis_obat='" . $jenis_obat . "'
  , jumlah='" . $jumlah . "'
  , tgl_masuk_obat='" . $tgl_masuk_obat . "'
  , tgl_keluar_obat='" . $tgl_keluar_obat . "'
  , kd_dokter='" . $kd_dokter . "' WHERE kode_obat='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=obat_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=obat_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from obat where kode_obat='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=obat_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=obat_data';
        </script>";
  //}
} ?>
