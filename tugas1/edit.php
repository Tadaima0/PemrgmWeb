<?php
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k->query("SELECT * FROM users WHERE id='".$id."'");
    if($data->num_rows == 1)
    {
        $data->fetch_assoc();
        ?>

            <form action= "editation.php" method = "post">
                <input type = "text" name="username" required placeholder="Username" values="<?php echo $datauser
                ['username']?>">
                <input type = "text" name="nama" required placeholder="Nama lengkap" values="<?php echo $datauser
                ['nama']?>">
                <input type = "email" name="email" required placeholder="Email" values="<?php echo $datauser
                ['email']?>">
                <input type = "password" name="paswd" required placeholder="Kosongi jika tidak ingin diganti
                Password">
                <input type="submit" value="Simpan">
            </form>
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }