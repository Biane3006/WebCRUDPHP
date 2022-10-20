<?php
    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM contactme");
    while ($row = mysqli_fetch_assoc($result)){
        $contactme[] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="crud.css">
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
                <li><a href="output.php">Contact</a></li>
            </ul>
            <label for="check" class="bar"></label>
            <img src="light.png" id="icon">
        </header>

        <main>
            <h1>Kontak Masuk</h1>
            <button><a href="tambah.php">Tambah Data</a></button>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email Pengirim</th>
                    <th>Nomor Telepon</th>
                    <th>Nama Proyek</th>
                    <th>Link Contoh Website</th>
                    <th>Pesan</th>
                    <th>Hapus / Edit</th>
                </tr>

                <?php $i = 1; foreach ($contactme as $cm):?>
                <tr>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $cm["nama"];?></td>
                    <td><?php echo $cm["email"];?></td>
                    <td><?php echo $cm["no_hp"];?></td>
                    <td><?php echo $cm["project"];?></td>
                    <td><?php echo $cm["link_web"];?></td>
                    <td><?php echo $cm["pesan"];?></td>
                    <td><a href="edit.php?id=<?php echo $cm["id"]; ?>" >Edit</a> 
                    | <a href="hapus.php?id=<?php echo $cm["id"]; ?>" onclick = "return confirm('Apakah Anda yakin ingin menghapus data ini ?')">Hapus</a></td>
                </tr>
                <?php $i++; endforeach;?>
            </table>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>