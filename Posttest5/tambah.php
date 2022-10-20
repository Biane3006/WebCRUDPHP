<?php
    require "koneksi.php";

    if(isset($_POST['tambah'])){
        $nama = htmlspecialchars($_POST["name"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $telpon = htmlspecialchars($_POST["telpon"]);
        $project = htmlspecialchars($_POST["project"]);
        $web = htmlspecialchars($_POST["link"]);
        $pesan = htmlspecialchars($_POST["message"]);

        $sql = "INSERT INTO contactme VALUES('','$nama', '$mail', '$telpon', '$project', '$web', '$pesan')";

        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "
                <script>
                    alert('Data Telah Ditambah');
                    document.location.href = 'output.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal Ditambah');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Postest 5</title>
</head>
<body>
    <section>
        <header>
            <h1 class="logo">My Portofolio</h1>
            <input type="checkbox" id="check">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="tambah.php">Contact</a></li>
            </ul>
            <label for="check" class="bar"></label>
            <img src="light.png" id="icon">
        </header>
        <main>
            <section class="contact" id="contact">

                <h1 class="heading"> <span>contact</span> me </h1>

                <div class="row">

                    <div class="content">

                        <h3 class="title">contact info</h3>

                        <div class="info">
                            <h3>sarulaja300603@gmail.com </h3>
                            <h3>+62-813-4863-6983 </h3>
                            <h3>Samarinda, Kalimantan Timur </h3>
                        </div>

                    </div>

                    <form action="" method="post">
                        <input type="text" name="name" placeholder="Nama" class="box">
                        <input type="email" name="mail" placeholder="E-Mail" class="box">
                        <input type="tel" name="telpon" placeholder="Telp : 0000-0000-0000" class="box" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                        <input type="text" name="project" placeholder="Nama Project" class="box">
                        <input type="url" name="link" placeholder="Contoh Website (Link)" class=box>
                        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="Pesan"></textarea><br>
                        <button type="submit" class="btn" name="tambah"> Tambah Data </button>
                    </form>

                </div>
            </section>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>