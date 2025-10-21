<?php
// Daftar nilai karyawan
$nilai = [60, 85, 70, 90, 50];

echo "<h3>Daftar Nilai Karyawan</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nilai Angka</th><th>Nilai Huruf</th><th>Keterangan</th></tr>";

// Perulangan untuk menampilkan setiap nilai
for ($i = 0; $i < count($nilai); $i++) {
    $no = $i + 1;
    $angka = $nilai[$i];

    // Menentukan nilai huruf dengan if-else bersarang
    if ($angka >= 85) {
        $huruf = "A";
        $keterangan = "Sangat Baik";
    } elseif ($angka >= 70) {
        $huruf = "B";
        $keterangan = "Baik";
    } elseif ($angka >= 60) {
        $huruf = "C";
        $keterangan = "Cukup";
    } else {
        $huruf = "D";
        $keterangan = "Kurang";
    }

    echo "<tr>
            <td>$no</td>
            <td>$angka</td>
            <td>$huruf</td>
            <td>$keterangan</td>
          </tr>";
}

echo "</table>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f8e9;
            color: #2e7d32;
            text-align: center;
            margin-top: 50px;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 60%;
        }
        th {
            background-color: #81c784;
        }
        th, td {
            border: 1px solid #388e3c;
            padding: 8px;
        }
    </style>
</head>
<body>
</body>
</html>