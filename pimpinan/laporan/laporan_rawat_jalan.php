<h1 class="text-center">LAPORAN DATA RAWAT JALAN</h1>
<a href="print/laporan_rawat_jalan_all.php" target="_blank" class="btn btn-lg btn-success">Cetak Laporan Rawat Jalan Keseluruhan</a>
<br>
<div class="mb-3"></div>
<div class="row">
    <div class="col-md-6 border p-3">
        <div class="row">
            <div class="col-md-6 mt-2">
                <form action="print/laporan_rawat_jalan_month.php" method="GET">
                    <button type="submit" class="btn btn-lg btn-primary">Cetak Laporan Perbulan</button>
            </div>
            <div class="col-md-6">

                <label for="exampleInputPassword1" class="form-label">tahun</label>
                <select class="form-select" aria-label="Default select example" name="tahun" required>
                    <option value="" selected disabled></option>
                    <?php
                    for ($i = 2015; $i <= date('Y'); $i++) {
                    ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                </select>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <canvas id="barChartObat" style="min-height: 300px; min-width: 200px; max-width: 100%;"></canvas>
</div>
<div class="row border p-3">
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


                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>