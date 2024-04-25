<?php 

$mhs = [
    [
        "nim" => "22416255201204",
        "nama" => "Akbar",
        "alamat" => "Cikampek",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201138",
        "nama" => "Fajar",
        "alamat" => "Telagasari",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201165",
        "nama" => "Bisma",
        "alamat" => "Iseka",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201152",
        "nama" => "Putra",
        "alamat" => "Purwasari",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201249",
        "nama" => "Fahri",
        "alamat" => "Telagasai",
        "prodi" => "Informatika",
    ],  
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <h1 align = "center">Data Mahasiswa </h1>
    
        <table align = "center" border="1"  cellpadding="2" > 
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>PRODI</th>
        </tr>
        <?php foreach ($mhs as $a) : ?>
            <tr>
                <td> <?php echo $a["nim"]  ?></td>
                <td> <?php echo $a["nama"]  ?></td>
                <td> <?php echo $a["alamat"]  ?></td>
                <td> <?php echo $a["prodi"]  ?></td>
            </tr>
            <?php endforeach; ?>    
        </table>

    
     
        
    
</body>
</html>