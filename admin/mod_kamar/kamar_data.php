<h3 class="text-center">Input Data kamar</h3>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="?p=kamar_import" enctype="multipart/form-data" method="POST">
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
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode kamar</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama kamar</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis kamar</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM kamar");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['kode_kamar'] ?>
                </td>
                <td>
                    <?= $data['nama_kamar'] ?>
                </td>
                <td>
                    <?= $data['jenis_kamar'] ?>
                </td>
                <td>
                    <a href="?p=kamar_edit&id=<?= $data['kode_kamar'] ?>" class="btn btn-warning">Ubah</a>
                    <a href="?p=kamar_proses&id=<?= $data['kode_kamar'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>

<div class="d-flex bd-highlight mb-3">
    <div class="ms-auto p-2 bd-highlight">
        <a href="?p=kamar_tambah" class="btn btn-primary">Add</a>
        <a href="?p=kamar_data&clear" onclick="return confirm('anda yakin ingin menghapus semua data?')" name="clear" class="btn btn-danger">Delete</a>
        <button onclick="history.back()" class="btn btn-secondary">Back</button>
    </div>
</div>

<?php
if (isset($_GET['clear'])) {
    $sql = mysqli_query($conn, "TRUNCATE kamar");
    if ($sql) {
        echo "
        <script language=javascript>
          alert('Data Berhasil dikosongkan');
          document.location.href='?p=kamar_data';
        </script>";
    } else {
        echo "
          <script language=javascript>
            alert('Data Gagal dikosongkan');
            document.location.href='?p=kamar_data';
          </script>";
    }
}
?>