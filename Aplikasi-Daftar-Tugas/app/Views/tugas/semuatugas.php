<?= $this->extend('layout/page_layout');
echo $this->section('content') ?>


<div class="container">
    <div>
        <h1 align="center">Daftar Tugas</h1>
    </div>
</div>
<hr>

<div class="row">
    <?php foreach ($semuatugas as $tugas) : ?>
        <div class="col-md-2">
            <div class="card">
                <file src="/assets/jenis_dokumen/<?= $tugas["jenis_dokumen"] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tugas["nama_tugas"] ?></h5>
                        <p class="card-text"><?= $tugas["nama_jenistugas"] ?> || <?= $tugas["deskripsi"] ?> </p>
                    </div>
            </div>
        </div>



    <?php endforeach; ?>

</div>
<script>
    src = "/assets/js/bootstrap.min.js"
</script>
</body>  

</html>

<?= $this->endSection() ?>