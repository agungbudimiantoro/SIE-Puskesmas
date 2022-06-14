<?php
function format_date($date)
{
  $date_ex = explode("/", $date);
  return $date_ex[2] . "-" . $date_ex[1] . "-" . $date_ex[0];
}

include_once "../assets/import/excel_reader2.php";
if (isset($_POST['import'])) {
  // if(!$input_error){
  $data = new Spreadsheet_Excel_Reader($_FILES['import_data']['tmp_name']);

  $baris = $data->rowcount($sheet_index = 0);
  $column = $data->colcount($sheet_index = 0);
  //import data excel dari baris kedua, karena baris pertama adalah nama kolom
  // $temp_date = $temp_produk = "";
  for ($i = 2; $i <= $baris; $i++) {
    for ($c = 1; $c <= $column; $c++) {
      $value[$c] = $data->val($i, $c);
    }


    $kode = $value[2];
    $nama_pasien = $value[3];

    $query_d = mysqli_query($conn, "SELECT * FROM pasien where nama_pasien='$nama_pasien'");
    $data_d = mysqli_fetch_assoc($query_d);
    $pasien = $data_d['kode_pasien'];

    $kunjungan = $value[4];
    $nama_dokter = $value[5];

    $query_d = mysqli_query($conn, "SELECT * FROM dokter where nama_dokter='$nama_dokter'");
    $data_d = mysqli_fetch_assoc($query_d);

    $dokter = $data_d['kode_dokter'];

    $nama_obat = $value[6];

    $query_d = mysqli_query($conn, "SELECT * FROM obat where nama_obat='$nama_obat'");
    $data_d = mysqli_fetch_assoc($query_d);

    $obat = $data_d['kode_obat'];

    $tanggal = format_date($value[7]);



    $sql = "INSERT INTO rawat_jalan VALUES ";
    $sql .= " ('$kode', '$pasien','$kunjungan','$dokter','$obat','$tanggal')";
    $mysqli = mysqli_query($conn, $sql);
    if ($mysqli) {
      echo "
            <script language=javascript>
              alert('Data Berhasil Diimport');
              document.location.href='?p=rawat_jalan_data';
            </script>";
    } else {
      echo "
              <script language=javascript>
                alert('Data Gagal Diimport');
                document.location.href='?p=rawat_jalan_data';
              </script>";
    }
  }
}
