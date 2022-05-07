<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user where id_user='$id'");
$data = mysqli_fetch_assoc($query);
?><tr>
    <h3>Edit Data User</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="?p=user_proses" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">ID User</label>
                    <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="<?= $data['username'] ?>" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" value="<?= $data['password'] ?>" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select example" name="level" required>

                        <option value="admin" <?php if ($data['level'] == 'admin') {
                                                    echo "selected";
                                                }; ?>>Admin</option>
                        <option value="pimpinan" <?php if ($data['level'] == 'pimpinan') {
                                                        echo "selected";
                                                    }; ?>>Pimpinan</option>
                    </select>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                <a href="?p=user_data" class="btn btn-success">kembali</a>
            </form>
        </div>
    </div>