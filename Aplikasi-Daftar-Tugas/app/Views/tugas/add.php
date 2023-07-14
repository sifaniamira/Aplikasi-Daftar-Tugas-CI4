<?php $this->extend("layout/page_layout"); ?>
<?php $this->section("content"); ?>



<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Halaman Tambah Data Tugas</h1>
                    </div>
                </div>
                <hr>

            </div>
            <div class="card-body">
                <form action="/tugas/store" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama_tugas" class="form-label">Nama Tugas</label>
                            <input type="text" class="form-control <?= isset($errors['nama_tugas']) ? 'is-invalid ' : ''; ?>" id_tugas="nama_tugas" name="nama_tugas" value="">
                            <?php if (isset($errors['nama_tugas'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_tugas'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="jenistugas" class="form-label">Jenis Tugas</label>
                            <select name="id_jenistugas" id_tugas="jenistugas" class="form-control <?= isset($errors['id_jenistugas']) ? 'is-invalid ' : ''; ?>" name="id_jenistugas" value="<?= old('id_jenistugas'); ?>">
                                <option value="">PILIH..</option>
                                <?php foreach ($jenistugas as $j) : ?>
                                    <option value="<?= $j["id_jenistugas"] ?>"><?= $j["nama_jenistugas"] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($errors['id_jenistugas'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['id_jenistugas'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control <?= isset($errors['deskripsi']) ? 'is-invalid ' : ''; ?>" id_tugas="deskripsi" name="deskripsi" value=" <?= old('deskripsi'); ?>">
                            <?php if (isset($errors['deskripsi'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['deskripsi'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date" class="form-control" name="deadline" value="">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>

                        </div>
                        <div class="col-md-6"><a href="/tugas" class="btn btn-dark">Kembali</a> </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>






<?php $this->endSection(); ?>