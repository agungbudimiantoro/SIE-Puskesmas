<?php


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
    $nama_kamar = $value[3];
    $jenis_kamar = $value[4];

    $sql = "INSERT INTO kamar (kode_kamar, nama_kamar, jenis_kamar) VALUES ";

    $sql .= " ('$kode', '$nama_kamar','$jenis_kamar')";
    $mysqli = mysqli_query($conn, $sql);
    if ($mysqli) {
      echo "
            <script language=javascript>
              alert('Data Berhasil Diimport');
              document.location.href='?p=kamar_data';
            </script>";
    } else {
      echo "
              <script language=javascript>
                alert('Data Gagal Diimport');
                document.location.href='?p=kamar_data';
              </script>";
    }
  }
}
