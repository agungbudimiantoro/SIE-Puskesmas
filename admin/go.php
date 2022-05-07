<?php
$p             = empty($_GET['p']) ? "" : $_GET['p'];
if ($p == "") {
    $nav     = "Dashboard";
    $judul     = "Dashboard";
    $ambil     = "dashboard.php";
} elseif ($p == "user_data") {
    //user 
    $nav     = "User";
    $judul     = "User data";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_tambah") {
    $nav     = "User";
    $judul     = "User tambah";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit") {
    $nav     = "User";
    $judul     = "User edit";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_proses") {
    $nav     = "User";
    $judul     = "User proses";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "dokter_data") {
    //dokter 
    $nav     = "dokter";
    $judul     = "dokter data";
    $ambil     = "mod_dokter/$p.php";
} elseif ($p == "dokter_tambah") {
    $nav     = "dokter";
    $judul     = "dokter tambah";
    $ambil     = "mod_dokter/$p.php";
} elseif ($p == "dokter_edit") {
    $nav     = "dokter";
    $judul     = "dokter edit";
    $ambil     = "mod_dokter/$p.php";
} elseif ($p == "dokter_proses") {
    $nav     = "dokter";
    $judul     = "dokter proses";
    $ambil     = "mod_dokter/$p.php";
} elseif ($p == "pasien_data") {
    //pasien 
    $nav     = "pasien";
    $judul     = "pasien data";
    $ambil     = "mod_pasien/$p.php";
} elseif ($p == "pasien_tambah") {
    $nav     = "pasien";
    $judul     = "pasien tambah";
    $ambil     = "mod_pasien/$p.php";
} elseif ($p == "pasien_import") {
    $nav     = "pasien";
    $judul     = "pasien import";
    $ambil     = "mod_pasien/$p.php";
} elseif ($p == "pasien_edit") {
    $nav     = "pasien";
    $judul     = "pasien edit";
    $ambil     = "mod_pasien/$p.php";
} elseif ($p == "pasien_proses") {
    $nav     = "pasien";
    $judul     = "pasien proses";
    $ambil     = "mod_pasien/$p.php";
} elseif ($p == "kunjungan_data") {
    //kunjungan 
    $nav     = "kunjungan";
    $judul     = "kunjungan data";
    $ambil     = "mod_kunjungan/$p.php";
} elseif ($p == "kunjungan_tambah") {
    $nav     = "kunjungan";
    $judul     = "kunjungan tambah";
    $ambil     = "mod_kunjungan/$p.php";
} elseif ($p == "kunjungan_import") {
    $nav     = "kunjungan";
    $judul     = "kunjungan import";
    $ambil     = "mod_kunjungan/$p.php";
} elseif ($p == "kunjungan_edit") {
    $nav     = "kunjungan";
    $judul     = "kunjungan edit";
    $ambil     = "mod_kunjungan/$p.php";
} elseif ($p == "kunjungan_proses") {
    $nav     = "kunjungan";
    $judul     = "kunjungan proses";
    $ambil     = "mod_kunjungan/$p.php";
} elseif ($p == "kamar_data") {
    //kamar 
    $nav     = "kamar";
    $judul     = "kamar data";
    $ambil     = "mod_kamar/$p.php";
} elseif ($p == "kamar_tambah") {
    $nav     = "kamar";
    $judul     = "kamar tambah";
    $ambil     = "mod_kamar/$p.php";
} elseif ($p == "kamar_import") {
    $nav     = "kamar";
    $judul     = "kamar import";
    $ambil     = "mod_kamar/$p.php";
} elseif ($p == "kamar_edit") {
    $nav     = "kamar";
    $judul     = "kamar edit";
    $ambil     = "mod_kamar/$p.php";
} elseif ($p == "kamar_proses") {
    $nav     = "kamar";
    $judul     = "kamar proses";
    $ambil     = "mod_kamar/$p.php";
} elseif ($p == "obat_data") {
    //obat 
    $nav     = "obat";
    $judul     = "obat data";
    $ambil     = "mod_obat/$p.php";
} elseif ($p == "obat_tambah") {
    $nav     = "obat";
    $judul     = "obat tambah";
    $ambil     = "mod_obat/$p.php";
} elseif ($p == "obat_import") {
    $nav     = "obat";
    $judul     = "obat import";
    $ambil     = "mod_obat/$p.php";
} elseif ($p == "obat_edit") {
    $nav     = "obat";
    $judul     = "obat edit";
    $ambil     = "mod_obat/$p.php";
} elseif ($p == "obat_proses") {
    $nav     = "obat";
    $judul     = "obat proses";
    $ambil     = "mod_obat/$p.php";
} elseif ($p == "rawat_inap_data") {
    //rawat_inap 
    $nav     = "rawat_inap";
    $judul     = "rawat_inap data";
    $ambil     = "mod_rawat_inap/$p.php";
} elseif ($p == "rawat_inap_tambah") {
    $nav     = "rawat_inap";
    $judul     = "rawat_inap tambah";
    $ambil     = "mod_rawat_inap/$p.php";
} elseif ($p == "rawat_inap_import") {
    $nav     = "rawat_inap";
    $judul     = "rawat_inap import";
    $ambil     = "mod_rawat_inap/$p.php";
} elseif ($p == "rawat_inap_edit") {
    $nav     = "rawat_inap";
    $judul     = "rawat_inap edit";
    $ambil     = "mod_rawat_inap/$p.php";
} elseif ($p == "rawat_inap_proses") {
    $nav     = "rawat_inap";
    $judul     = "rawat_inap proses";
    $ambil     = "mod_rawat_inap/$p.php";
} elseif ($p == "rawat_jalan_data") {
    //rawat_jalan 
    $nav     = "rawat_jalan";
    $judul     = "rawat_jalan data";
    $ambil     = "mod_rawat_jalan/$p.php";
} elseif ($p == "rawat_jalan_tambah") {
    $nav     = "rawat_jalan";
    $judul     = "rawat_jalan tambah";
    $ambil     = "mod_rawat_jalan/$p.php";
} elseif ($p == "rawat_jalan_import") {
    $nav     = "rawat_jalan";
    $judul     = "rawat_jalan import";
    $ambil     = "mod_rawat_jalan/$p.php";
} elseif ($p == "rawat_jalan_edit") {
    $nav     = "rawat_jalan";
    $judul     = "rawat_jalan edit";
    $ambil     = "mod_rawat_jalan/$p.php";
} elseif ($p == "rawat_jalan_proses") {
    $nav     = "rawat_jalan";
    $judul     = "rawat_jalan proses";
    $ambil     = "mod_rawat_jalan/$p.php";
} else {
    $nav     = "Dashboard";
    $judul     = "dashboard";
    $ambil     = "dashboard.php";
}
