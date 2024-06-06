<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
</head>
<body>
   <?php
   session_start();
   if($_SESSION['is_logged_in'] != TRUE)
   {
       header("Location : ../login_form.php");
       exit();
   }

   echo $_SESSION['nama'];
   ?>
   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus veritatis facere est veniam at sint et ipsum vero harum totam error quod in, expedita amet eum quam voluptates a! Exercitationem?</p> 

   
   </body>
</html>