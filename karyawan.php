<?php
$karyawan = ["Itadori", "Luffy", "Subaru", "Okarun", "Thorfinn"];

echo "<h3>Daftar Kehadiran Karyawan</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama Karyawan</th><th>Status</th></tr>";

// Perulangan untuk menampilkan data
for ($i = 0; $i < count($karyawan); $i++) {
    $no = $i + 1; // Nomor urut dimulai dari 1

    // Menentukan status kehadiran
    if ($no % 2 == 0) {
        $status = "Hadir";
    } else {
        $status = "Izin";
    }

    echo "<tr>
            <td>$no</td>
            <td>{$karyawan[$i]}</td>
            <td>$status</td>
          </tr>";
}

echo "</table>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kehadiran Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9; /* hijau muda */
            color: #1b5e20; /* hijau tua */
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
            border: 1px solid #2e7d32;
            padding: 8px;
        }
    </style>
</head>
<body>
</body>
</html>