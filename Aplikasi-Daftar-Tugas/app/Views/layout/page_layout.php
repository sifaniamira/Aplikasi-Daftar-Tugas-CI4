<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tugas</title>

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand bg-#E966A0" style="background-color: #E966A0;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Tugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tugas/all">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tugas">Semua Tugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Jenistugas/all">Jenis Tugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="/TentangTugas"> Tentang Tugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="/login/logout"> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?= $this->renderSection('content') ?>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Kelompok 6</div>
	</footer>

<script src="assets/js/bootstrap.min.js"></script>
<?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>
</body>

</html>