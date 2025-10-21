<!DOCTYPE html>
<html>
<head>
    <title>Hitung Total Belanja dengan Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background: #e9ffe9;
            padding: 15px;
            border-radius: 5px;
        }

        .item {
            border-bottom: 1px dashed #ccc;
            padding: 5px 0;
        }

        .item:last-child {
            border-bottom: none;
        }

        .total {
            margin-top: 15px;
            font-weight: bold;
            font-size: 18px;
        }

        .note {
            font-size: 13px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hitung Total Belanja</h2>
    <form method="post">
        <label>Masukkan daftar harga barang (pisahkan dengan koma):</label>
        <textarea name="harga_input" placeholder=></textarea>
        <input type="submit" name="submit" value="Hitung Total">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['harga_input'];
        $harga_barang = explode(",", $input);
        $total_akhir = 0;

        echo "<div class='result'>";
        echo "<h3>Detail Harga Barang:</h3>";

        foreach ($harga_barang as $index => $harga) {
            $harga = (int)trim($harga);

            if ($harga > 30000) {
                $diskon = $harga * 0.10;
                $harga_setelah_diskon = $harga - $diskon;
                echo "<div class='item'>Barang " . ($index + 1) . ": Rp" . number_format($harga, 0, ',', '.') . 
                     " → Diskon 10% → Rp" . number_format($harga_setelah_diskon, 0, ',', '.') . "</div>";
            } else {
                $harga_setelah_diskon = $harga;
                echo "<div class='item'>Barang " . ($index + 1) . ": Rp" . number_format($harga, 0, ',', '.') . "</div>";
            }

            $total_akhir += $harga_setelah_diskon;
        }

        echo "<div class='total'>Total Harga Setelah Diskon: Rp" . number_format($total_akhir, 0, ',', '.') . "</div>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>