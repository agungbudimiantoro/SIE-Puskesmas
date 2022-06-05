<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {

  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $hasil_diaknosa       = htmlspecialchars($_POST['hasil_diaknosa']);
  $nama_dokter       = htmlspecialchars($_POST['nama_dokter']);
  $query = ("INSERT into dokter values('" . $id . "','" . $nama_dokter . "','" . $kode_pasien . "','" . $hasil_diaknosa . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=dokter_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=dokter_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $id       = htmlspecialchars($_POST['id']);
  $hasil_diaknosa       = htmlspecialchars($_POST['hasil_diaknosa']);
  $nama_dokter       = htmlspecialchars($_POST['nama_dokter']);

  $query = ("UPDATE dokter SET kode_pasien='" . $kode_pasien . "',nama_dokter='" . $nama_dokter . "', hasil_diaknosa='" . $hasil_diaknosa . "' WHERE kode_dokter='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=dokter_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=dokter_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from dokter where kode_dokter='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=dokter_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=dokter_data';
        </script>";
  //}
} ?>
