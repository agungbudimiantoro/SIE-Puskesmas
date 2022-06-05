<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM obat where kode_obat='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3>Edit Data obat</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=obat_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode obat</label>
                <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama obat</label>
                <input type="text" value="<?= $data['nama_obat'] ?>" name="nama_obat" class="form-control" id="nama" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">jenis obat</label>
                <input type="text" value="<?= $data['jenis_obat'] ?>" name="jenis_obat" class="form-control" id="jenis" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">jumlah</label>
                <input type="number" value="<?= $data['jumlah'] ?>" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal masuk</label>
                <input type="date" value="<?= $data['tgl_masuk_obat'] ?>" name="tgl_masuk_obat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">tanggal keluar</label>
                <input type="date" value="<?= $data['tgl_keluar_obat'] ?>" name="tgl_keluar_obat" class="form-control" id="jumlah" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">kode dokter</label>
                <select class="form-select" aria-label="Default select example" name="kd_dokter" required>
                    <option disabled selected value="">Nama dokter</option>
                    <?php
                    $select_query = mysqli_query($conn, "SELECT * FROM dokter");
                    while ($data_sel = mysqli_fetch_assoc($select_query)) {
                    ?>
                        <option value="<?= $data_sel['kode_dokter'] ?>" <?php if ($data['kd_dokter'] == $data_sel['kode_dokter']) {
                                                                            echo "selected";
                                                                        }; ?>><?= $data_sel['nama_dokter'] ?></option>
                    <?php } ?>
                </select>

            </div>
            <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>