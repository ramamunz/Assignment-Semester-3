<?php 
    require_once 'No 3.php';
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="No 3.css">
    <title>Praktikum 4</title>
</head>
<body>
<h2>Soal No 3</h2>
<table align= "center">
        <tr align= "center" bgcolor="pink" >
            <td>No</td>
            <td>Object</td>
            <td>Umur</td>
            <td>Nama</td>
            <td>Panjang Ekor</td>
            <td>Cara Bergerak</td>
        </tr>

        <tr>
        <td>1</td>
        <td>O1</td>
        <td><?= $katak->getUmur(); ?></td>
        <td><?= $katak->getNama(); ?></td>
        <td> - </td>
        <td><?= $katak->caraBergerak(); ?></td>
        </tr>

        <tr>
        <td>2</td>
        <td>O2</td>
        <td><?= $kecebong->getUmur(); ?></td>
        <td><?= $kecebong->getNama(); ?></td>
        <td><?= $kecebong->getPanjangEkor(); ?></td>
        <td><?= $kecebong->caraBergerak(); ?></td>
        </tr>
</body>
</html>