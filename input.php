<?php
require_once 'connect.php';
require_once 'fungsi.php';

$connObj = new Connection();
$conn = $connObj->getConnection();

$functions = new Functions($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $pel1 = $_POST['pel1'];
    $pel2 = $_POST['pel2'];
    $pel3 = $_POST['pel3'];
    $pel4 = $_POST['pel4'];
    $pel5 = $_POST['pel5'];
    $pel6 = $_POST['pel6'];

    $functions->insertData($nama, $nis, $pel1, $pel2, $pel3, $pel4, $pel5, $pel6);

    $total = $functions->Total($pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
    $rata = $functions->Rata($total);
    $max = $functions->cariMax($pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
    $min = $functions->cariMin($pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
    $grade = $functions->cariGrade($rata);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas</title>
</head>

<body>
    <form action="" method="POST">
        <u class="u"><center><h1>Daftar Pengisian Nilai</h1></center></u>
            <div class="container"><br>
                <b><p class="iden">Input Identitas</p></b>
                <label>Nama</label><br>
                <input type="text" name="nama" required><br>
                <label>NIS</label><br>
                <input type="text" name="nis" required><br><br>
                <b><p class="nilai">Input Nilai</p></b>
                <label for="pel1">PIPAS</label><br>
                <input type="number" name="pel1" min="0" max="100" placeholder="silahkan input nilai pipas" required><br>
                <label for="pel2">PJOK</label><br>
                <input type="number" name="pel2"min="0" max="100"  placeholder="silahkan input nilai pjok"  required><br>
                <label for="pel3">B.Inggris</label><br>
                <input type="number" name="pel3" min="0" max="100"  placeholder="silahkan input nilai b.inggris" required><br>
                <label for="pel4">B.Indo</label><br>
                <input type="number" name="pel4" min="0" max="100"  placeholder="silahkan input nilai b.indo" required><br>
                <label for="pel5">MTK</label><br>
                <input type="number" name="pel5" min="0" max="100"  placeholder="silahkan input nilai mtk" required><br>
                <label for="pel6">PAIBP</label><br>
                <input type="number" name="pel6" min="0" max="100"  placeholder="silahkan input nilai paibp" required><br>
                <br><br>
                <div class="button">
                    <button type="submit" name="submit">Submit</button>
                </div>
        </div>
    </form>

    <br><br><br>

    <div class="hal">
            <?php if (isset($total)) : ?>
            <h2>Hasil Perhitungan</h2>
            <hr><br>
            <p>Nilai Total: <?php echo $total; ?></p>
            <p>Nilai Rata-Rata: <?php echo $rata; ?></p>
            <p>Nilai Maksimum: <?php echo $max; ?></p>
            <p>Nilai Minimum: <?php echo $min; ?></p>
            <p>Nilai Grade: <?php echo $grade; ?></p>
            <?php endif; ?>
    </div>
</body>
</html>