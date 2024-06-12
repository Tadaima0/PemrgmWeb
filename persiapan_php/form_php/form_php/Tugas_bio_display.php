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
        <link rel="stylesheet" type="text/css" href="biostyle.css">
        <head>   
        <style>
            h3{
                color: white;
                margin-top: 15px;
                text-align: justify;
                align-self: 15px;
            }
        </style>  
    </head>
<body>
    <div class="wrapper">
            <img src="img/Noto_Emoji_Pie_1f5ff.svg.png" alt="">        
            <div class="text-box">

                
                <h2>Biodata <?php echo $_SESSION ['nama'] ?></h2>
            
            <p>
                Nama : Luthfil Hakim <br>
                NIM   : A12.2022.06800 <br>
                Alamat: Permata Puri , Bringin, Ngaliyan <br>
                Email : 112202206800@mhs.dinus.ac.id
            </p>
        </div>
    </div>
</body>
</html>