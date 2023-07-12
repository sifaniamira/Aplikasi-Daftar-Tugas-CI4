<?php $this->extend("layout/page_layout");
$this->section("content");?>

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Edit Tugas</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/tugas" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/tugas/edit" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!--Tambahkan file input ID -->
                        <input type="hidden" value="<?= $datatugas["id_tugas"]; ?>" name="id_tugas">
                        <div class="col-md-6">
                            <label for="nama_tugas" class="form-label">Nama Tugas</label>
                            <!--Tambahkan kondisi pada value -->
                            <input type="text" class="form-control" <?= isset($errors['nama_tugas']) ? 'is-valid ' : ''; ?> id_tugas="nama_tugas" name="nama_tugas" value="<?= isset($errors['nama_tugas']) ? old('nama_tugas') : $datatugas["nama_tugas"]; ?>" >
                            <?php if (isset($errors['nama_tugas'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_tugas'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="jenistugas" class="form-label">Jenis Tugas</label>
                            <select name="id_jenistugas" id_tugas="jenistugas" class="form-control <?= isset($errors['id_tugas']) ? 'is-invalid ' : ''; ?>" name="id_jenistugas">
                                <option value="">PILIH..</option>
                                <?php foreach ($jenistugas as $j) : ?>
                                    <!-- tambahkan kondisi ini -->
                                    <?php if ($datatugas['id_jenistugas'] == $j["id_jenistugas"]) : ?>
                                        <option value="<?= $j["id_jenistugas"] ?>"selected><?= $j["nama_jenistugas"] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j["id_jenistugas"] ?>"><?= $j["nama_jenistugas"] ?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <?php if (isset($errors['id_tugas'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['id_tugas'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                              <!--Tambahkan kondisi pada value -->
                            <input type="text" class="form-control <?= isset($errors['deskripsi']) ? 'is-invalid ' : ''; ?>" id_tugas="deskripsi" name="deskripsi" value=" <?= isset($errors['nama_tugas']) ? old('deskripsi'): $datatugas["deskripsi"]; ?>">
                            <?php if (isset($errors['deskripsi'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['deskripsi'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <?php if ($datatugas["jenis_dokumen"]) : ?>
                                    <file src="/assets/jenis_dokumen/<?= $datatugas["jenis_dokumen"]; ?>" width="100">
                                <?php else : ?>
                                    <span>Tidak ada Dokumen</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date" class="form-control" value="<?= $datatugas["deadline"]?>" name="deadline" value="">
                        </div>
                                

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <?php $this->endSection(); ?>