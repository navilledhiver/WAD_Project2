<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2 PHP</title>
</head>
<body>
    <h1>Hitung Angka</h1>
    <form method="post" action="proses.php">
        <label for="angka">Input Angka 1:</label>
        <input type="text" name="angka" id="angka" required><br><br>
    
    <form method="post" action="proses.php">
        <label for="angka">Input Angka 2:</label>
        <input type="text" name="angka" id="angka" required><br><br>

        <label for="pilihan">Pilih sesuatu:</label>
        <select name="pilihan" id="pilihan">
            <option value="opsi1">Tambah</option>
            <option value="opsi2">Kali</option>
            <option value="opsi3">Bagi</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>


