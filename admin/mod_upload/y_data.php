<h3><?= $judul ?></h3>

<br>
<br>
<table class="table align-items-center mb-0 display" id="table_id">
    <thead>
        <tr>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Ajaran</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Prodi</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">y</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">y<sup>2</sup></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM y, prodi, tahun_ajaran 
        where y.id_thn_ajaran = tahun_ajaran.id_thn_ajaran 
        and y.kd_prodi = prodi.kd_prodi");
        while ($data = mysqli_fetch_assoc($query)) {
        ?><tr>
                <td>
                    <?= $no++ ?>
                </td>
                <td>
                    <?= $data['tahun_ajaran'] ?>
                </td>
                <td>
                    <?= $data['nm_prodi'] ?>
                </td>
                <td>
                    <?= $data['y'] ?>
                </td>
                <td>
                    <?= $data['y_2'] ?>
                </td>
            </tr>
        <?php }; ?>
    </tbody>
</table>