<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total {
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perhitungan Gaji Mingguan Karyawan</h2>

    <?php
    // Data jam kerja 4 karyawan
    $jam_kerja = [40, 35, 50, 45];

    // Tarif
    $tarif_normal = 20000;
    $tarif_lembur = 25000;

    echo "<table>";
    echo "<tr>
            <th>No</th>
            <th>Jam Kerja</th>
            <th>Jam Normal</th>
            <th>Jam Lembur</th>
            <th>Gaji Normal</th>
            <th>Gaji Lembur</th>
            <th>Total Gaji</th>
          </tr>";

    for ($i = 0; $i < count($jam_kerja); $i++) {
        $jam = $jam_kerja[$i];

        if ($jam > 40) {
            $jam_normal = 40;
            $jam_lembur = $jam - 40;
        } else {
            $jam_normal = $jam;
            $jam_lembur = 0;
        }

        $gaji_normal = $jam_normal * $tarif_normal;
        $gaji_lembur = $jam_lembur * $tarif_lembur;
        $total_gaji = $gaji_normal + $gaji_lembur;

        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>$jam</td>";
        echo "<td>$jam_normal</td>";
        echo "<td>$jam_lembur</td>";
        echo "<td>Rp" . number_format($gaji_normal, 0, ',', '.') . "</td>";
        echo "<td>Rp" . number_format($gaji_lembur, 0, ',', '.') . "</td>";
        echo "<td class='total'>Rp" . number_format($total_gaji, 0, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>

</body>
</html>