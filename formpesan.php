<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link icon feather -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="m-5">
        <h1>Kontak Kami</h1>
        <p>Silahkan kirim pesan dengan mengisi form berikut..</p>
    </div>
    
    <div class="d-flex-column m-5">
        <form action="savepesan.php" method="POST">
            <div class="input-group mb-3" style="width: 400px;">
                <i data-feather="user" class="m-3"></i>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="input-group mb-3" style="width: 400px;">
                <i data-feather="mail" class="m-3"></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="input-group mb-3" style="width: 400px;">
                <i data-feather="phone" class="m-3"></i>
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan nomor hp" required>
            </div>
            <div class="input-group mb-3" style="width: 400px;">
                <i data-feather="message-square" class="m-3"></i>
                <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Masukkan pesan" required>
            </div>
            <button type="submit" class="btn btn-primary px-3">Kirim</button>
        </form>
        
        <br>
        <h2><center><b>Daftar Kontak</b></center></h2>

        <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mydata";
        $conn = mysqli_connect($host, $user, $pass, $db);

        if ($conn -> connect_error) {
            trigger_error('Database connection failed: ' . $conn -> connect_error, E_USER_ERROR);
        }

        $query = "SELECT * FROM tbpesan";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
        ?>
        
        <table class="table mt-5">
            <thead>
                <tr class="table-primary" align="center">
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr align="center">
                    <th><?php echo $row['nama'] ?></th>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['nohp'] ?></td>
                    <td><?php echo $row['pesan'] ?></td>
                </tr>
            </tbody>

            <?php } ?>
        </table>

        <?php } else {
            echo "Maaf, belum ada pesanan!";
        } ?>
    </div>
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- script feather -->
    <script>
      feather.replace();
    </script>
</body>
</html>