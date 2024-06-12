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
    <title>Beranda</title>
    <link rel="stylesheet" href="asset/css/bootstrap-grid.css">
    <style>
        img{
            float: left;
            margin: 150px auto;
            margin-right: 10px;
        }
        li{
            list-style-type: none ;
            padding: 5px;
            margin: 5px;
            color: wheat;
           
        }
        li:hover{
            background-color: rgb(57, 3, 251);
            transition:.5s ease-in-out ;
        }
        li a{
            text-decoration: none;
            color: white;
        }
    a{
        margin-bottom: 15%;
        text-align: end;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
    <div class="row">
        <!-- HEADER -->
        <div class="col-md-12" style="background-color:green ; height: 80px;">
            <h1 style="color: azure; font-family:'Times New Roman', Times, serif ; align-content: center;">Welcome
            </h1>
        </div>
        <div class="col-md-2" style="background-color: burlywood;">
            
            <li><a href="#">Beranda</a></li>
            <li><a href="Tugas_bio_display.php">Biodata</a></li>
            <li><a href="jadwalkuliah.php">Jadwal Kuliah</a></li>
            <a href="main/logout.php">Logout</a>

        
        </div>
        <div class="col-md-10" style="background-color: wheat; bottom:1% ; height: 120vh;">
            
           <h2><?php echo $_SESSION ['nama'] ?></h2>
           
        <p>
            Hi !!! <br>
            Suatu kesempatan untuk memperkenalkan diriku dari halaman web ini , aku akan mengenalkan diriku secara umum
            <br>
            aku adalah seseorang yang tertarik dengan alam  , ketika berada diluar ruangan
            dan merasakan udara sejuk itu membutaku nyaman dan tenang , apalagi dengan udara yang masih asri yang belum terkena polusi
            seperti di pedesaan . Ya pedesaan suasananya yang tentram dan belum begitu gaduh membuat seseorang sepertiku merasa nyaman dan tenang.
            mungkin ada beberapa tempat di pedesaan yang sudah mulai berubah kondisi iklimnya , oleh karena itu mari kita bersama-sama menjaga alam kita <br>
            Bukan hanya didesa kita juga bisa menerapkan kepedulian kita terhadap lingkungan di kota, karena tindakan tersebut juga sangat penting dan bermanfaat
            yang mana jika kondisi alam baik dan sehat , kita juga yang akan merasa nyaman dan terlindung dari penyakit yang tidak diiginkan. <br>
            jadi gimana ? , mulai sekarang yuk jaga lingkungan kita , gak perlu mulai dari yang lingkupnya besar.Cukup mulai dari sekitaran rumahmu dulu
            Baru jika hal tersebut mulai menjadi kebiasaan dan kamu ada keinginan untuk menyebarkan ajakan ini , silahkan ajak orang-orang sekitarmu memperluas 
            kepeduilian terhadap lingkungan . Guna menjaga dan melestarikan bumi 
        </p>
        <div class="row">
            <div class="col" style="color: darkgoldenrod; height: 30vh; box-shadow:0 4px 6px  rgb(85, 85, 85)">
              <img src="img/1000066916.jpg" style="height: 180px; width: 100px; float: left; margin: 15px;">
              
              <h4 style="color: rgb(6, 6, 6);"> Momen matahari terbit</h4>
            </div>
            <div class="col" style="color: rgb(227, 189, 117) ; height: 40vh; box-shadow:0 4px 8px rgb(85, 85, 85);">
                <img src="img/IMG_20230811_051729.jpg" style="height: 200px; width: 250px; float: left; margin: 20px;">
                <h4 style="color: rgb(6, 6, 6);"> Momen matahari terbenam</h4>
            </div>
            <div class="col" style="color: burlywood; height: 30vh; box-shadow: 0 4px 6px rgb(85, 85, 85);">
                <img src="img/snapedit_1691378219521.jpg" style="height: 180px; width: 100px; float: left; margin: 15px;">
                <h4 style="color: rgb(6, 6, 6);"> Pemandangan air terjun</h4>
            </div>
          </div>
          <p>
            Hi !!! <br>
            Suatu kesempatan untuk memperkenalkan diriku dari halaman web ini , aku akan mengenalkan diriku secara umum
            <br>
            aku adalah seseorang yang tertarik dengan alam  , ketika berada diluar ruangan
            dan merasakan udara sejuk itu membutaku nyaman dan tenang , apalagi dengan udara yang masih asri yang belum terkena polusi
            seperti di pedesaan . Ya pedesaan suasananya yang tentram dan belum begitu gaduh membuat seseorang sepertiku merasa nyaman dan tenang.
            mungkin ada beberapa tempat di pedesaan yang sudah mulai berubah kondisi iklimnya , oleh karena itu mari kita bersama-sama menjaga alam kita <br>
            Bukan hanya didesa kita juga bisa menerapkan kepedulian kita terhadap lingkungan di kota, karena tindakan tersebut juga sangat penting dan bermanfaat
            yang mana jika kondisi alam baik dan sehat , kita juga yang akan merasa nyaman dan terlindung dari penyakit yang tidak diiginkan. <br>
            jadi gimana ? , mulai sekarang yuk jaga lingkungan kita , gak perlu mulai dari yang lingkupnya besar.Cukup mulai dari sekitaran rumahmu dulu
            Baru jika hal tersebut mulai menjadi kebiasaan dan kamu ada keinginan untuk menyebarkan ajakan ini , silahkan ajak orang-orang sekitarmu memperluas 
            kepeduilian terhadap lingkungan . Guna menjaga dan melestarikan bumi 
        </p>
        </div>
    </div>
</div>
    
</body>
</html>


