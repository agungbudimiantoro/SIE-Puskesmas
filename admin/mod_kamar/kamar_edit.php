<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kamar where kode_kamar='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3>Edit Data Kamar</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=kamar_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode kamar</label>
                <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama kamar</label>
                <input type="text" name="nama_kamar" value="<?= $data['nama_kamar'] ?>" class="form-control" id="nama" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">jenis kamar</label>
                <input type="text" name="jenis_kamar" value="<?= $data['jenis_kamar'] ?>" class="form-control" id="jenis" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>