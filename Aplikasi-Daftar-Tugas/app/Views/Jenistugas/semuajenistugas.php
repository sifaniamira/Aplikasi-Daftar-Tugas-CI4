<?= $this->extend('layout/page_layout');
echo $this->section('content') ?>



<body>
    <h1 align="center">Data Jenis Tugas </h1>
    <hr>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No</th>
            <th>Nama Jenis Tugas</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($data_jenistugas as $semuajenistugas) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $semuajenistugas['nama_jenistugas'] ?></td>
            </tr>

        <?php endforeach ?>

    </table>
</body>

</html>

<?= $this->endSection() ?>