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
        $nama = $value[3];
        $umur = $value[4];
        $alamat = $value[5];
        $pekerjaan = $value[6];
        $keluhan = $value[7];
        $sql = "INSERT INTO pasien (kode_pasien, nama_pasien, umur, alamat_pasien, pekerjaan, keluhan) VALUES ";

        $sql .= " ('$kode', '$nama','$umur','$alamat','$pekerjaan','$keluhan')";
        $mysqli = mysqli_query($conn, $sql);
        if ($mysqli) {
            echo "
            <script language=javascript>
              alert('Data Berhasil Diimport');
              document.location.href='?p=pasien_data';
            </script>";
        } else {
            echo "
              <script language=javascript>
                alert('Data Gagal Diimport');
                document.location.href='?p=pasien_data';
              </script>";
        }
    }
}
