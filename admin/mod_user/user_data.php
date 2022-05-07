<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(id_user) as id FROM user");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "US";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>

<h3>Input Data User</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=user_proses" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">ID User</label>
                <input type="text" name="id" value="<?= $id_hitung ?>" readonly class="form-control" id="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Level</label>
                <select class="form-select" aria-label="Default select example" name="level" required>
                    <option disabled selected>Level</option>
                    <option value="admin">Admin</option>
                    <option value="pimpinan">Pimpinan</option>
                </select>
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
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id user</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">level</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM user");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['id_user'] ?>
                </td>
                <td>
                    <?= $data['username'] ?>
                </td>
                <td>
                    <?= $data['level'] ?>
                </td>
                <td>
                    <a href="?p=user_edit&id=<?= $data['id_user'] ?>" class="btn btn-warning">Ubah</a>
                    <a href="?p=user_proses&id=<?= $data['id_user'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>