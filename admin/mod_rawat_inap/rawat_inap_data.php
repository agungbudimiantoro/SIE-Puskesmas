<h3 class="text-center">Input Data Rawat Inap</h3>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="?p=rawat_inap_import" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <label for="formFile" class="form-label">File Excel</label>
                <input class="form-control" type="file" id="formFile" name="import_data" required>
            </div>
            <button type="submit" name="import" class="btn btn-primary">Import</button>
            <button type="reset" name="reset" class="btn btn-success">Cancel</button>
        </form>
    </div>
</div>
<br>
<br>
<table class="table align-items-center mb-0 display" id="table_id">
    <thead>
        <tr>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode rawat inap</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode pasien</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode dokter</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode kamar</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode obat</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal masuk rawat inap</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal keluar rawat inap</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">biaya</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM rawat_inap");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['kode_rawat_inap'] ?>
                </td>
                <td>
                    <?= $data['kode_pasien'] ?>
                </td>
                <td>
                    <?= $data['kode_dokter'] ?>
                </td>
                <td>
                    <?= $data['kode_kamar'] ?>
                </td>
                <td>
                    <?= $data['kode_obat'] ?>
                </td>
                <td>
                    <?= $data['tgl_masuk_rawat'] ?>
                </td>
                <td>
                    <?= $data['tgl_keluar_rawat'] ?>
                </td>
                <td>
                    <?= $data['biaya_rawat'] ?>
                </td>
                <td>
                    <a href="?p=rawat_inap_edit&id=<?= $data['kode_rawat_inap'] ?>" class="btn btn-warning">Ubah</a>
                    <a href="?p=rawat_inap_proses&id=<?= $data['kode_rawat_inap'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>

<div class="d-flex bd-highlight mb-3">
    <div class="ms-auto p-2 bd-highlight">
        <a href="?p=rawat_inap_tambah" class="btn btn-primary">Add</a>
        <a href="?p=rawat_inap_data&clear" onclick="return confirm('anda yakin ingin menghapus semua data?')" name="clear" class="btn btn-danger">Delete</a>
        <button onclick="history.back()" class="btn btn-secondary">Back</button>
    </div>
</div>

<?php
if (isset($_GET['clear'])) {
    $sql = mysqli_query($conn, "TRUNCATE rawat_inap");
    if ($sql) {
        echo "
        <script language=javascript>
          alert('Data Berhasil dikosongkan');
          document.location.href='?p=rawat_inap_data';
        </script>";
    } else {
        echo "
          <script language=javascript>
            alert('Data Gagal dikosongkan');
            document.location.href='?p=rawat_inap_data';
          </script>";
    }
}
?>