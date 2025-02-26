!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji php</title>
</head>

<style>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
    td {
        padding: 1em;
    }
</style>

<body>
    <h1>Aplikasi Penghitung Gaji</h1>
    <h2>PT CV. TeknoNusa</h2>
    <form action="Hitunggaji.php" method="post">
    <table border=1 style="border-colaapse : collapse : width : 50%">
        <tr>
            <td>Silahkan isi data diri anda!</td>
        </tr>
        
        <tr>
            <td>Nama Karyawan</td>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>

        <tr>
            <td>Divisi</td>
            <td>:</td>
            <td>
                <input type="text" name="divisi"> 
            </td>
        </tr>

        <tr>
            <td>Total Gaji Tiap Bulan</td>
            <td>:</td>
            <td>
                <input type="number" name="totalgaji"> 
            </td>
        </tr>

        <tr>
            <td>Apakah Anda Mempunyai NPWP?</td>
            <td>:</td>
            <td>
                <input type="radio" name="npwp" value="Y">YA
                <input type="radio" name="npwp" value="T">TIDAK  
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="submit" value="Input">
            </td>
        </tr>

    </table>
    </form>
    <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>