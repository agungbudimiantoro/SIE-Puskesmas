<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_kunjungan) as id FROM kunjungan");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "KU";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>

<h3>Input Data Kunjungan</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=kunjungan_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode Kunjungan</label>
                <input type="text" name="id" value="<?= $id_hitung ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
                <select class="form-select" aria-label="Default select example" name="kode_pasien" required>
                    <option disabled selected>Nama Pasien</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM pasien");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                    ?>
                        <option value="<?= $data_sel['kode_pasien'] ?>"><?= $data_sel['nama_pasien'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">tanggal kunjungan</label>
                <input type="date" name="tgl_kunjungan" class="form-control" id="tanggal" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Simpan</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>