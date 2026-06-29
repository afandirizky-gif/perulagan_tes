<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Perulangan PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #333; }
        input[type="number"] {
            padding: 8px;
            width: 100px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background-color: #0056b3; }
        .hasil-box {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-left: 5px solid #28a745;
            border-radius: 4px;
        }
        .item-perulangan {
            padding: 5px 0;
            border-bottom: 1px dashed #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Looping Generator (Web Perulangan)</h2>
    <p>Masukkan jumlah perulangan yang kamu inginkan di bawah ini:</p>
    
    <form method="POST" action="">
        <label for="jumlah">Jumlah Looping: </label>
        <input type="number" id="jumlah" name="jumlah" min="1" max="100" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : 5; ?>" required>
        <button type="submit" name="hitung">Jalankan Perulangan</button>
    </form>

    <?php
    // Mengecek apakah tombol "Jalankan Perulangan" sudah diklik
    if (isset($_POST['hitung'])) {
        $jumlah_loop = intval($_POST['jumlah']); // Mengambil angka dari input form
        
        echo "<div class='hasil-box'>";
        echo "<h3>Hasil Perulangan (FOR Loop):</h3>";
        
        // Proses Perulangan PHP dimulai di sini
        for ($i = 1; $i <= $jumlah_loop; $i++) {
            echo "<div class='item-perulangan'>🔄 Ini adalah baris web ke-<b>$i</b></div>";
        }
        
        echo "</div>";
    }
    ?>
</div>

</body>
</html>