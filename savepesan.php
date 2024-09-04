<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydata";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn -> connect_error) {
    trigger_error('Database connection failed: ' . $conn -> connect_error, E_USER_ERROR);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $pesan = $_POST['pesan'];

        $nama = filter_var($nama, FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $nohp = filter_var($nohp, FILTER_SANITIZE_NUMBER_INT);
        $pesan = filter_var($pesan, FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($nama)) {
            $sqlstr = "INSERT INTO tbpesan (nama, email, nohp, pesan) VALUES ('$nama', '$email', '$nohp', '$pesan')";
            
            if ($conn -> query($sqlstr) === false) {
                trigger_error('Wrong SQL: ' . $sqlstr . ' Error: ' . $conn -> error, E_USER_ERROR);
            }
        }
    }
}

header("Location: formpesan.php");
?>