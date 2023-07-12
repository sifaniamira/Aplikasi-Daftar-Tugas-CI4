<?= $this->extend('layout/page_layout'); echo $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Tentang Tugas</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div">
                <h1 style="text-align: center;">Tentang Tugas</h1>
            </div>
                <div style="text-align: justify;">
                <p>
                   Platform ini merupakan platform untuk mencatat dan mendata daftar tugas, yang difungsikan untuk membantu 
                   memudahkan pengguna untuk melakukan pendataan secara online dan tersusun rapih sesuai dengan jadwal / deadline 
                   yang telah ditentukan.
                </p>
                        <p>
                            aplikasi ini dilengkapi dengan fitur login yang dimana untuk mengakses aplikasi ini harus memasukkan 
                            username email dan password yang telah pengguna daftarkan ke dalam sistem kami. sehingga, keamanan data
                            yang terdapat di dalam aplikasi ini terjamin.
                        </p>
                </div>

                <p>
                   terimakasi telah percaya dengan menggunakan aplikasi ini. kami menjamin keamanan data anda semua!
                </p>
            </div>
        </div>
    </div>


</body>

</html>

<?= $this->endSection() ?>