<h3 class="text-center">Input Data Rawat jalan</h3>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="?p=rawat_jalan_import" enctype="multipart/form-data" method="POST">
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
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kode rawat jalan</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama pasien</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal kunjungan</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama dokter</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama obat</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal berobat</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM rawat_jalan");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['kode_rawat_jalan'] ?>
                </td>
                <td>
                    <?php
                    $kode_1 = $data['kode_pasien'];
                    $query_1 = mysqli_query($conn, "SELECT * FROM pasien WHERE kode_pasien='$kode_1'");
                    $data_1 = mysqli_fetch_assoc($query_1);
                    ?>

                    <?php if ($data_1 != '') {
                        echo $data_1['nama_pasien'];
                    } else {
                        echo '---';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $kode_1 = $data['kode_kunjungan'];
                    $query_1 = mysqli_query($conn, "SELECT * FROM kunjungan WHERE kode_kunjungan='$kode_1'");
                    $data_1 = mysqli_fetch_assoc($query_1);
                    ?>

                    <?php if ($data_1 != '') {
                        echo $data_1['tgl_kunjungan'];
                    } else {
                        echo '---';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $kode_1 = $data['kode_dokter'];
                    $query_1 = mysqli_query($conn, "SELECT * FROM dokter WHERE kode_dokter='$kode_1'");
                    $data_1 = mysqli_fetch_assoc($query_1);
                    ?>

                    <?php if ($data_1 != '') {
                        echo $data_1['nama_dokter'];
                    } else {
                        echo '---';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $kode_1 = $data['kode_obat'];
                    $query_1 = mysqli_query($conn, "SELECT * FROM obat WHERE kode_obat='$kode_1'");
                    $data_1 = mysqli_fetch_assoc($query_1);
                    ?>

                    <?php if ($data_1 != '') {
                        echo $data_1['nama_obat'];
                    } else {
                        echo '---';
                    }
                    ?>
                </td>
                <td>
                    <?= $data['tgl_berobat'] ?>
                </td>

                <td>
                    <a href="?p=rawat_jalan_edit&id=<?= $data['kode_rawat_jalan'] ?>" class="btn btn-warning">Ubah</a>
                    <a href="?p=rawat_jalan_proses&id=<?= $data['kode_rawat_jalan'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>

<div class="d-flex bd-highlight mb-3">
    <div class="ms-auto p-2 bd-highlight">
        <a href="?p=rawat_jalan_tambah" class="btn btn-primary">Add</a>
        <a href="?p=rawat_jalan_data&clear" onclick="return confirm('anda yakin ingin menghapus semua data?')" name="clear" class="btn btn-danger">Delete</a>
        <button onclick="history.back()" class="btn btn-secondary">Back</button>
    </div>
</div>

<?php
if (isset($_GET['clear'])) {
    $sql = mysqli_query($conn, "TRUNCATE rawat_jalan");
    if ($sql) {
        echo "
        <script language=javascript>
          alert('Data Berhasil dikosongkan');
          document.location.href='?p=rawat_jalan_data';
        </script>";
    } else {
        echo "
          <script language=javascript>
            alert('Data Gagal dikosongkan');
            document.location.href='?p=rawat_jalan_data';
          </script>";
    }
}
?>