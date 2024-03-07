<?php
require_once 'action.php';

$objct = new Graph();

$data = $objct->reportPeminjam();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
    <h2 align="center">LAPORAN PEMINJAMAN BUKU</h2>

<table align="center" border="1" cellpadding="5" cellspacing="0">
    <thead>
        <th>No</th>
        <th>Peminjam</th>
        <th>Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Status Peminjaman</th>
    </thead>
    <tbody>
        
        <?php 
        $no = 1;
        foreach($data as $row) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row["Username"] ?></td>
            <td><?= $row["Judul"] ?></td>
            <td><?= date('d-m-Y',strtotime($row["TanggalPeminjaman"])) ?></td>
            <td><?= date('d-m-Y',strtotime($row["TanggalPengembalian"])) ?></td>
            <td><?= $row["StatusPeminjaman"] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html>