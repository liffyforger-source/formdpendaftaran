<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru | SMK CODING</title>
    </head>
    <body>
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK CODING</h1>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
               <?php
               if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
               } else {
                    echo "Pendaftaran gagal!";
               }
               ?>
            </p>
        <?php endif; ?>
    </body>
</html>