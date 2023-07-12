<?= $this->extend('layout/page_layout');
echo $this->section('content') ?>


<div class="row">
    <div class="col-md-12" align="center">
        <h1>Semua Tugas</h1>
    </div>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-mod-12">
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama Tugas</th>
                        <th>Deskripsi</th>
                        <th>Jenis Tugas</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($data_tugas as $tugas) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $tugas['nama_tugas'] ?></td>
                            <td><?= $tugas['deskripsi'] ?></td>
                            <td><?= $tugas['nama_jenistugas'] ?></td>
                            <td><?= $tugas['deadline'] ?></td>
                            <td>
                                <a href="/tugas/update/<?= $tugas["id_tugas"]; ?>" class="btn btn-success">Update</a>
                                <a class="btn btn-danger" onclick="confirmDelete('<?= $tugas["id_tugas"] ?>')">Delete</a>
                            </td>


                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="col-md-1 text-end">
                    <a href="/tugas/add" class="btn btn-primary">Tambah Data</a>
                </div>

            </div>
        </div>
    </div>
    <script>
        sr = "/assets/js/bootstrap.min.js" >
    </script>
    </body> 
    <script>
        function confirmDelete(id) {
            var result = confirm("Apakah Anda yakin? Setelah dihapus, data Anda akan benar-benar hilang!");

            if (result) {
                window.location.href = "/tugas/destroy/" + id;
            } else {
                alert("Data tidak jadi dihapus!");
            }
        }
    </script> 

    </html>
    <?= $this->endSection() ?>