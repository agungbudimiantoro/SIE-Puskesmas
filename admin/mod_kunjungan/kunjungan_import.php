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
    $kode_pasien = $data_d['kode_pasien'];

    $tgl_kunjungan = format_date($value[4]);

    $sql = "INSERT INTO kunjungan (kode_kunjungan, kode_pasien, tgl_kunjungan) VALUES ";

    $sql .= " ('$kode', '$kode_pasien','$tgl_kunjungan')";
    $mysqli = mysqli_query($conn, $sql);
    if ($mysqli) {
      echo "
            <script language=javascript>
              alert('Data Berhasil Diimport');
              document.location.href='?p=kunjungan_data';
            </script>";
    } else {
      echo "
              <script language=javascript>
                alert('Data Gagal Diimport');
                document.location.href='?p=kunjungan_data';
              </script>";
    }
  }
}
