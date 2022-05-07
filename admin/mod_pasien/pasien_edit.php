<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pasien where kode_pasien='$id'");
$data = mysqli_fetch_assoc($query);
?><tr>
    <h3>Edit Data Pasien</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="?p=pasien_proses" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID Pasien</label>
                    <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasien</label>
                    <input type="text" value="<?= $data['nama_pasien'] ?>" name="nama_pasien" class="form-control" id="nama" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur Pasien</label>
                    <input type="number" value="<?= $data['umur'] ?>" name="umur" class="form-control" id="umur" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat_pasien" id="exampleFormControlTextarea1" rows="3" require><?= $data['alamat_pasien'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" value="<?= $data['pekerjaan'] ?>" name="pekerjaan" class="form-control" id="pekerjaan" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea class="form-control" name="keluhan" id="exampleFormControlTextarea1" rows="3" require><?= $data['keluhan'] ?></textarea>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
            </form>
        </div>
    </div>