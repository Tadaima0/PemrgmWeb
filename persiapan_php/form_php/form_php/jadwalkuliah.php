<?php 
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location : /form.php");
    }

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <link rel="stylesheet" href="stylejdwlkuliah.css">
</head>
<body>
   <div class="jadwal">
   <?php echo $_SESSION ['nama'] ?>
    <table>
        <thead>
            <tr>
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Ruangan</th>
                <th>Jam</th>
                <th>Set</th>
            </tr>
        </thead>      
        <tbody>
            <tr>
                <td>Senin</td>
                <td>Perencanaan Strategis Sistem Informasi <br>
                    Manajemen Rantai Pasok <br>
                    Perancangan Sumberdaya Perusahaan
                </td>
                <td>H.5.8 <br>
                    H.4.8 <br>
                    H.3.1 
                </td>
                <td>07.00-09.30 <br>
                    12.30-15.00 <br>
                    18.30-21.00
                </td>
                <td>
                    <span class="action-btn">
                       <a href="#">Edit</a>
                       <a href="#">Hapus</a>
                    </span>
                </td>
            </tr>

            <tr>
                <td>Selasa</td>
                <td>Pemrograman Berorientasi Objek <br>
                    Pendidikan Agama Islam
                </td>
                <td>D.2.K <br>
                    H.5.5
                </td>
                <td>07.00-08.40 <br>
                    14.10-15.50
                </td>
                <td>
                    <span class="action-btn">
                       <a href="#">Edit</a>
                       <a href="#">Hapus</a>
                    </span>
                </td>
            </tr>

            <tr>
                <td>Rabu</td>
                <td>Pemrograman WEB <br>
                    Analisa Dan Perancangan Sistem Informasi II 
                </td>
                <td>H.4.6 <br>
                    H.5.10
                </td>
                <td>08.40-10.20 <br>
                    12.30-14.10
                </td>
                <td>
                    <span class="action-btn">
                       <a href="#">Edit</a>
                       <a href="#">Hapus</a>
                    </span>
                </td>
            </tr>

            <tr>
                <td>Kamis</td>
                <td>Pemrograman WEB <br>
                    Pemrograman Berorientasi Objek
                </td>
                <td>D.2.B <br>
                    H.4.4
                </td>
                <td>10.20-12.00 <br>
                    12.30-14.10
                </td>
                <td>
                    <span class="action-btn">
                       <a href="#">Edit</a>
                       <a href="#">Hapus</a>
                    </span>
                </td>
            </tr>

            <tr>
                <td>Jum'at</td>
                <td> Analisa Dan Perancangan Sistem Informasi II </td>
                <td>H.3.9</td>
                <td>07.00-08.40</td>
                <td>
                    <span class="action-btn">
                       <a href="#">Edit</a>
                       <a href="#">Hapus</a>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
   </div> 
</body>
</html>