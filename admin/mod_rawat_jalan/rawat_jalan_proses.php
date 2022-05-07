<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {

  $id       = htmlspecialchars($_POST['id']);
  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $kode_dokter       = htmlspecialchars($_POST['kode_dokter']);
  $kode_kunjungan       = htmlspecialchars($_POST['kode_kunjungan']);
  $kode_obat       = htmlspecialchars($_POST['kode_obat']);
  $tgl_berobat       = htmlspecialchars($_POST['tgl_berobat']);


  $query = ("INSERT into rawat_jalan values('" . $id . "','" . $kode_pasien . "','" . $kode_kunjungan . "','" . $kode_dokter . "'
  ,'" . $kode_obat . "','" . $tgl_berobat . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=rawat_jalan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=rawat_jalan_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $id       = htmlspecialchars($_POST['id']);
  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $kode_dokter       = htmlspecialchars($_POST['kode_dokter']);
  $kode_kunjungan       = htmlspecialchars($_POST['kode_kunjungan']);
  $kode_obat       = htmlspecialchars($_POST['kode_obat']);
  $tgl_berobat       = htmlspecialchars($_POST['tgl_berobat']);



  $query = ("UPDATE rawat_jalan SET kode_pasien='" . $kode_pasien . "'
  , kode_dokter='" . $kode_dokter . "'
  , kode_kunjungan='" . $kode_kunjungan . "'
  , kode_obat='" . $kode_obat . "'
  , tgl_berobat='" . $tgl_berobat . "' WHERE kode_rawat_jalan='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=rawat_jalan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=rawat_jalan_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from rawat_jalan where kode_rawat_jalan='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=rawat_jalan_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=rawat_jalan_data';
        </script>";
  //}
} ?>
