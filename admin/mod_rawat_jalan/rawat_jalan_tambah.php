<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_rawat_jalan) as id FROM rawat_jalan");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "RJ";
$id = $hrf . sprintf("%03s", $urt);
?>
<h3>input Data rawat jalan</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=rawat_jalan_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode rawat jalan</label>
                <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">kode Pasien</label>
                <select class="form-select" aria-label="Default select example" name="kode_pasien" required>
                    <option disabled selected>kode Pasien</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM pasien");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                        if ($data['kode_pasien'] == $data_sel['kode_pasien']) {
                    ?>
                            <option selected value="<?= $data_sel['kode_pasien'] ?>"><?= $data_sel['kode_pasien'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $data_sel['kode_pasien'] ?>"><?= $data_sel['kode_pasien'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">kode kunjungan</label>
                <select class="form-select" aria-label="Default select example" name="kode_kunjungan" required>
                    <option disabled selected>kode kunjungan</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM kunjungan");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                        if ($data['kode_kunjungan'] == $data_sel['kode_kunjungan']) {
                    ?>
                            <option selected value="<?= $data_sel['kode_kunjungan'] ?>"><?= $data_sel['kode_kunjungan'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $data_sel['kode_kunjungan'] ?>"><?= $data_sel['kode_kunjungan'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">kode dokter</label>
                <select class="form-select" aria-label="Default select example" name="kode_dokter" required>
                    <option disabled selected>kode dokter</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM dokter");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                        if ($data['kode_dokter'] == $data_sel['kode_dokter']) {
                    ?>
                            <option selected value="<?= $data_sel['kode_dokter'] ?>"><?= $data_sel['kode_dokter'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $data_sel['kode_dokter'] ?>"><?= $data_sel['kode_dokter'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">kode obat</label>
                <select class="form-select" aria-label="Default select example" name="kode_obat" required>
                    <option disabled selected>kode obat</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM obat");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                        if ($data['kode_obat'] == $data_sel['kode_obat']) {
                    ?>
                            <option selected value="<?= $data_sel['kode_obat'] ?>"><?= $data_sel['kode_obat'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $data_sel['kode_obat'] ?>"><?= $data_sel['kode_obat'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal berobat</label>
                <input type="date" name="tgl_berobat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="add" class="btn btn-primary">Tambah</button>
                <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>