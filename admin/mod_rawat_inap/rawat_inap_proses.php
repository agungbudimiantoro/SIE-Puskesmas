<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {

  $id       = htmlspecialchars($_POST['id']);
  $kode_pasien       = htmlspecialchars($_POST['kode_pasien']);
  $kode_dokter       = htmlspecialchars($_POST['kode_dokter']);
  $kode_kamar       = htmlspecialchars($_POST['kode_kamar']);
  $kode_obat       = htmlspecialchars($_POST['kode_obat']);
  $tgl_masuk_rawat       = htmlspecialchars($_POST['tgl_masuk_rawat']);
  $tgl_keluar_rawat       = htmlspecialchars($_POST['tgl_keluar_rawat']);
  $biaya_rawat       = htmlspecialchars($_POST['biaya_rawat']);

  $query = ("INSERT into rawat_inap values('" . $id . "','" . $kode_pasien . "','" . $kode_dokter . "','" . $kode_kamar . "'
  ,'" . $kode_obat . "','" . $tgl_masuk_rawat . "','" . $tgl_keluar_rawat . "','" . $biaya_rawat . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=rawat_inap_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=rawat_inap_data';
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
  $kode_kamar       = htmlspecialchars($_POST['kode_kamar']);
  $kode_obat       = htmlspecialchars($_POST['kode_obat']);
  $tgl_masuk_rawat       = htmlspecialchars($_POST['tgl_masuk_rawat']);
  $tgl_keluar_rawat       = htmlspecialchars($_POST['tgl_keluar_rawat']);
  $biaya_rawat       = htmlspecialchars($_POST['biaya_rawat']);


  $query = ("UPDATE rawat_inap SET kode_pasien='" . $kode_pasien . "'
  , kode_dokter='" . $kode_dokter . "'
  , kode_kamar='" . $kode_kamar . "'
  , kode_obat='" . $kode_obat . "'
  , tgl_masuk_rawat='" . $tgl_masuk_rawat . "'
  , tgl_keluar_rawat='" . $tgl_keluar_rawat . "'
  , biaya_rawat='" . $biaya_rawat . "' WHERE kode_rawat_inap='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=rawat_inap_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=rawat_inap_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from rawat_inap where kode_rawat_inap='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=rawat_inap_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=rawat_inap_data';
        </script>";
  //}
} ?>
