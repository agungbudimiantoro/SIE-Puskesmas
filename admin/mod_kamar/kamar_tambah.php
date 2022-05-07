<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(kode_kamar) as id FROM kamar");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "KA";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>

<h3>Input Data Kamar</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=kamar_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode kamar</label>
                <input type="text" name="id" value="<?= $id_hitung ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama kamar</label>
                <input type="text" name="nama_kamar" class="form-control" id="nama" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">jenis kamar</label>
                <input type="text" name="jenis_kamar" class="form-control" id="jenis" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Simpan</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>