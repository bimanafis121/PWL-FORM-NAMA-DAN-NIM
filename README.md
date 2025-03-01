<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form NIM dan Nama</title>
    <script>
        function tampilkanData() {
            var nim = document.getElementById("nim").value;
            var nama = document.getElementById("nama").value;
            alert("NIM: " + nim + "\nNama: " + nama);
        }
    </script>
</head>
<body>
    <h1>Form NIM dan Nama</h1>
    <form onsubmit="event.preventDefault(); tampilkanData();">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <button type="submit">Tampilkan NIM dan Nama</button>
    </form>
</body>
</html>
