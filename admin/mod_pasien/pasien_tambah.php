<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_pasien) as id FROM pasien");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "PA";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>
<tr>
    <h3>Input Data Pasien</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="?p=pasien_proses" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID Pasien</label>
                    <input type="text" name="id" value="<?= $id_hitung ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasien</label>
                    <input type="text" name="nama_pasien" class="form-control" id="nama" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur Pasien</label>
                    <input type="number" name="umur" class="form-control" id="umur" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat_pasien" id="exampleFormControlTextarea1" rows="3" require></textarea>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" me="pekerjaan" class="form-control" id="pekerjaan" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea class="form-control" name="keluhan" id="exampleFormControlTextarea1" rows="3" require></textarea>
                </div>
                <button type="submit" name="add" class="btn btn-primary">Tambah</button>
                <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
            </form>
        </div>
    </div>