<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM rawat_inap where kode_rawat_inap='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3>Edit Data rawat inap</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=rawat_inap_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode rawat inap</label>
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
                <label for="exampleInputPassword1" class="form-label">kode kamar</label>
                <select class="form-select" aria-label="Default select example" name="kode_kamar" required>
                    <option disabled selected>kode kamar</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM kamar");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                        if ($data['kode_kamar'] == $data_sel['kode_kamar']) {
                    ?>
                            <option selected value="<?= $data_sel['kode_kamar'] ?>"><?= $data_sel['kode_kamar'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $data_sel['kode_kamar'] ?>"><?= $data_sel['kode_kamar'] ?></option>
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
                <label for="umur" class="form-label">tanggal masuk</label>
                <input type="date" value="<?= $data['tgl_masuk_rawat'] ?>" name="tgl_masuk_rawat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal keluar</label>
                <input type="date" value="<?= $data['tgl_keluar_rawat'] ?>" name="tgl_keluar_rawat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">biaya raway</label>
                <input type="text" value="<?= $data['biaya_rawat'] ?>" name="biaya_rawat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>