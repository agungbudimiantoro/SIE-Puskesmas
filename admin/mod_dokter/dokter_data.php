<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_dokter) as id FROM dokter");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "DO";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>

<h3>Input Data Dokter</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=dokter_proses" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Kode Dokter</label>
                <input type="text" name="id" value="<?= $id_hitung ?>" readonly class="form-control" id="username" aria-describedby="emailHelp" required>
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
                <label for="HAsil" class="form-label">Hasil Diaknosa</label>
                <textarea class="form-control" name="hasil_diaknosa" id="exampleFormControlTextarea1" rows="3" require></textarea>
            </div>

            <button type="submit" name="add" class="btn btn-primary">Simpan</button>
            <button type="reset" name="reset" class="btn btn-success">Batal</button>
        </form>
    </div>
</div>
<br>
<br>
<table class="table align-items-center mb-0 display" id="table_id">
    <thead>
        <tr>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Doket</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pasien</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Diaknosa</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM dokter");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['kode_dokter'] ?>
                </td>
                <?php
                $kode_pasien = $data['kode_pasien'];
                $query_pasien = mysqli_query($conn, "SELECT * FROM pasien WHERE kode_pasien='$kode_pasien'");
                $data_pasien = mysqli_fetch_assoc($query_pasien);
                ?>
                <td>
                    <?php if ($data_pasien != '') {
                        echo $data_pasien['nama_pasien'];
                    } else {
                        echo '---';
                    }
                    ?>
                </td>
                <td>
                    <?= $data['hasil_diaknosa'] ?>
                </td>
                <td>
                    <a href="?p=dokter_edit&id=<?= $data['kode_dokter'] ?>" class="btn btn-warning">Ubah</a>
                    <a href="?p=dokter_proses&id=<?= $data['kode_dokter'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>