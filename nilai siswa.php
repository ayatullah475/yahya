<?php
// Tambahkan variabel nama siswa
$nama = "ayatullah";

// Data nilai siswa disimpan dalam array
$nilai = array(
    "Bahasa Inggris" => 80,
    "Bahasa Indonesia" => 70,
    "Matematika" => 90,
    "Kejuruan" => 60,
    "Agama" => 85
);

// Inisialisasi total
$total = 0;

// Hitung total nilai
foreach ($nilai as $mapel => $n) {
    $total += $n;
}

// Hitung rata-rata
$rata_rata = $total / count($nilai);

// Tentukan keterangan kelulusan
if ($rata_rata >= 75) {
    $keterangan = "<span style='color:green; font-weight:bold;'>Lulus 🎉</span>";
} else {
    $keterangan = "<span style='color:red; font-weight:bold;'>Tidak Lulus 😢</span>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menghitung Rata-Rata Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 40%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1.1em;
        }
        .nama {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body><!-- Tambahkan nama siswa -->
<div class="nama">Nama Siswa: <?php echo $nama; ?></div>

<table>
    <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>

    <?php
    // Tampilkan data nilai
    foreach ($nilai as $mapel => $n) {
        echo "<tr><td>$mapel</td><td>$n</td></tr>";
    }
    ?>

    <tr>
        <th>Rata-Rata</th>
        <td><b><?php echo number_format($rata_rata, 2); ?></b></td>
    </tr>
</table>

<div class="footer">
    <p><b>Keterangan:</b> <?php echo $keterangan; ?></p>
</div>

<?php
// Tambahkan variabel nama siswa
$nama = "imanuel kevin";

// Data nilai siswa disimpan dalam array
$nilai = array(
    "Bahasa Inggris" => 76,
    "Bahasa Indonesia" => 70,
    "Matematika" => 82,
    "Kejuruan" => 60,
    "Agama" => 85
);

// Inisialisasi total
$total = 0;

// Hitung total nilai
foreach ($nilai as $mapel => $n) {
    $total += $n;
}

// Hitung rata-rata
$rata_rata = $total / count($nilai);

// Tentukan keterangan kelulusan
if ($rata_rata >= 75) {
    $keterangan = "<span style='color:green; font-weight:bold;'>Lulus 🎉</span>";
} else {
    $keterangan = "<span style='color:red; font-weight:bold;'>Tidak Lulus 😢</span>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menghitung Rata-Rata Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 40%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1.1em;
        }
        .nama {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body><!-- Tambahkan nama siswa -->
<div class="nama">Nama Siswa: <?php echo $nama; ?></div>

<table>
    <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>

    <?php
    // Tampilkan data nilai
    foreach ($nilai as $mapel => $n) {
        echo "<tr><td>$mapel</td><td>$n</td></tr>";
    }
    ?>

    <tr>
        <th>Rata-Rata</th>
        <td><b><?php echo number_format($rata_rata, 2); ?></b></td>
    </tr>
</table>

<div class="footer">
    <p><b>Keterangan:</b> <?php echo $keterangan; ?></p>
</div>

</body>
</html>

<?php
// Tambahkan variabel nama siswa
$nama = "ahmad nazril";

// Data nilai siswa disimpan dalam array
$nilai = array(
    "Bahasa Inggris" => 80,
    "Bahasa Indonesia" => 75,
    "Matematika" => 85,
    "Kejuruan" => 70,
    "Agama" => 85
);

// Inisialisasi total
$total = 0;

// Hitung total nilai
foreach ($nilai as $mapel => $n) {
    $total += $n;
}

// Hitung rata-rata
$rata_rata = $total / count($nilai);

// Tentukan keterangan kelulusan
if ($rata_rata >= 75) {
    $keterangan = "<span style='color:green; font-weight:bold;'>Lulus 🎉</span>";
} else {
    $keterangan = "<span style='color:red; font-weight:bold;'>Tidak Lulus 😢</span>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menghitung Rata-Rata Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 40%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1.1em;
        }
        .nama {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body><!-- Tambahkan nama siswa -->
<div class="nama">Nama Siswa: <?php echo $nama; ?></div>

<table>
    <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>

    <?php
    // Tampilkan data nilai
    foreach ($nilai as $mapel => $n) {
        echo "<tr><td>$mapel</td><td>$n</td></tr>";
    }
    ?>

    <tr>
        <th>Rata-Rata</th>
        <td><b><?php echo number_format($rata_rata, 2); ?></b></td>
    </tr>
</table>

<div class="footer">
    <p><b>Keterangan:</b> <?php echo $keterangan; ?></p>
</div>

</body>
</html>