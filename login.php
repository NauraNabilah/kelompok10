<?php
    if(isset($_POST["submit"])) {
        if($_POST["username"] == "kelompok" && $_POST["password"] == "10" ){
            header("Location: nilai.php");
        }else{
            $eror = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="hal">
            <u><div class="head"><h1>Login</h1></div></u>

            <?php if(isset($eror)) { ?>
            <p class="warning">harap isi sesuai yang diperintahkan!</p>
            <?php } ?>

            <form action="" method="post">
            Username <br> <input type="text"  name="username" placeholder="masukan username cuyy"> <br/r></input><br>
            Password <br> <input type="password" name="password" placeholder="masukan password cuyy"><br/r></input>
            <br><br><div class="inp">
                    <input type = "submit" name = "submit" value="Masukan">
                </div>

            <div class="bawah"><p><b>note*</b><br> username = kelompok <br> password = 10</p></div>
        
        </form>
    </div>
</body>
</html>