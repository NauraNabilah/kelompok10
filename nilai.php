<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <form action="" method="POST">
            
        <center>

            <h2>Silahkan Isi Daftar Berikut</h2>
            <hr><br>
            <label>Nama</label><br>
            <input type="text" name="nama"><br>
            <label>Nis</label><br>
            <input type="number" name="nis"><br>
            <label for="nilai1">PIPAS</label><br>
            <input type="number" name="nilai1"><br>
            <label for="nilai2">PJOK</label><br>
            <input type="number" name="nilai2"><br>
            <label for="nilai3">B.inggris</label><br>
            <input type="number" name="nilai3"><br>
            <label for="nilai4">B.indo</label><br>
            <input type="number" name="nilai4"><br>
            <label for="nilai5">MTK</label><br>
            <input type="number" name="nilai5"><br>
            <label for="nilai6">PAIBP</label><br>
            <input type="text" name="nilai6"><br>
            
            <br><button input type="submit" name="submit">klik</button>
        
        </center>
    </form>
</body>
</html> 
<body>
    
    <br><br><br>

<center>
     
    <?php

    $conn =  mysqli_connect("localhost", "root", "", "database_assesment");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];
        $nilai4 = $_POST['nilai4'];
        $nilai5 = $_POST['nilai5'];
        $nilai6 = $_POST['nilai6'];
        
        $sql = mysqli_query($conn, "INSERT INTO profile (nama, nis, pipas, pjok, inggris, indo, mtk, paibp)
            VALUES ('$nama', '$nis', '$nilai1', '$nilai2', '$nilai3', '$nilai4', '$nilai5', '$nilai6')");

        $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6;
        echo "Nilai Total : $total";
        echo "<br>";

        $rata = $total / 6;
        echo "Nilai Rata- Rata : $rata";
        echo "<br>";

        $max = max($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6);
        echo "Nilai Max : $max";
        echo "<br>";

        $min = min($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6);
        echo "Nilai Min : $min";
        echo "<br>";

        if($rata > 90){
            echo "Nilai -> A";
            
        }elseif($rata > 80){
            echo "Nilai -> B";
            
        }elseif($rata > 70){
            echo "Nilai -> C";
            
        }elseif($rata > 60){
            echo "Nilai -> D";
            
        }else{
            echo "Nilai E "; 
        }
    }

 
    ?>

    </center>

</body>