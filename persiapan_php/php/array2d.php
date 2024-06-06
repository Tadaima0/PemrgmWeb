<?php
$mhs = [        
        'nim' => 'A12.2022.00001',
        'nama'=> 'Jacob',
        'Alamat' => 'Semarang',

];

// [
//     'nim' => 'A12.2022.00002',
//     'nama'=> 'Jason',
//     'Alamat' => 'Ungaran',

// ];

foreach ($mhs as $mahasiswa) {
    echo $mahasiswa['nama'];
    echo $mahasiswa['nim'];
    echo $mahasiswa['Alamat'];

    echo "<br>";
}


?>
<table>
    <tr>
        <td>NIM</td>
        <td>NAMA</td>
        <td>Alamat</td>
    </tr>
  <?php
    foreach($mhs as $mahasiswa);
    ?>
    <tr>
        <td><?php echo $mahasiswa['nim']?></td>
        <td><?php echo $mahasiswa['nama']?></td>
        <td><?php echo $mahasiswa['Alamat']?></td>
    </tr>
    <?php endforeach; ?>
</table>