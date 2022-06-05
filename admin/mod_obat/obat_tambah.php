<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_obat) as id FROM obat");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "OB";
$id = $hrf . sprintf("%03s", $urt);
?>
<h3>Input Data Obat</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=obat_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode obat</label>
                <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama obat</label>
                <input type="text" name="nama_obat" class="form-control" id="nama" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">jenis obat</label>
                <input type="text" name="jenis_obat" class="form-control" id="jenis" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal masuk</label>
                <input type="date" name="tgl_masuk_obat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal keluar</label>
                <input type="date" name="tgl_keluar_obat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">kode dokter</label>
                <select class="form-select" aria-label="Default select example" name="kd_dokter" required>
                    <option disabled selected value="">Nama dokter</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM dokter");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                    ?>
                        <option value="<?= $data_sel['kode_dokter'] ?>"><?= $data_sel['nama_dokter'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Tambah</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>