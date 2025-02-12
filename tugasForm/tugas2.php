<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PPDB SMKN 1 BANYUWANGI</h1>
<form action="data.php" method="POST">
    <p>Silahkan isi biodata ini</p>
    NISN : <input type="number" name="nisn"> <br>
    Nama Lengkap : <input type="text" name="masukan nama anda"> <br>
    Tempat Lahir : <input type="text" name="tempat lahir"> <br>
    
<p>
    <label>Tanggal Lahir :</label>
    <input type="date" name="tanggal">

</p>

<p> 
    <p>Alamat :</p>
    <textarea name="alamat" cols= "40" rows="10"></textarea>

</p>

Asal Sekolah : <input type="text" name="asal sekolah"> <br>

<p>
    <label>gender :</label>
    <input type="radio" name="jenkel" value="laki laki">laki laki
    <input type="radio"name="jenkel" value="perempuan">perempuan
</p>

<p>
    <label>agama :</label>
    <select name="agama" id="">
      <option value="budha">Budha</option>
      <option value="hindu">Hindu</option>
      <option value="islam">Islam</option>
      <option value="katholik">Katholik</option>
      <option value="kristen">kristen</option>
      <option value="konghucu">konghucu</option>
</select>
</p>
<p>


 <p>
    
</p>
<p>
 <label>pilihan jurusan pertama:</label>
    <select name="jurusan"> id="">
      <option value=".">Silahkan Pilih Jurusan</option>
      <option value="AKL">akutansi keuangan lembaga</option>
      <option value="MPLB">menejemen perkantoran layanan bisnis</option>
      <option value="PM">pemasaran</option>
      <option value="PPLG">pengembangan perangkat lunak dan gim</option>
      <option value="TJKT">teknik jaringan dan telekomunikasi</option>
      <option value="PH">perhotelan</option>
      <option value="DKV">desain komunikasi visual</option>
      <option value="BDP">broadcasting dan perfilman</option>
      <option value="KL">kuliner</option>
      <option value="SP">seni pertunjukan</option>
</select>
      
</p>
<p>
<label>Pilihan jurusan kedua:</label>
    <select name="jurusan"> 
      <option value="AKL">akutansi keuangan lembaga</option>
      <option value="MPLB">menejemen perkantoran layanan bisnis</option>
      <option value="PM">pemasaran</option>
      <option value="PPLG">pengembangan perangkat lunak dan gim</option>
      <option value="TJKT">teknik jaringan dan telekomunikasi</option>
      <option value="PH">perhotelan</option>
      <option value="DKV">desain komunikasi visual</option>
      <option value="BDP">broadcasting dan perfilman</option>
      <option value="KL">kuliner</option>
      <option value="SP">seni pertunjukan</option>
</select>


</p>
<p>
<label>pilihan jurusan ketiga:</label>
    <select name="jurusan"> 
      <option value="AKL">akutansi keuangan lembaga</option>
      <option value="MPLB">menejemen perkantoran layanan bisnis</option>
      <opton value="PM">pemasaran</option>
      <option value="PPLG">pengembangan perangkat lunak Dan gim</option>
      <option value="TJKT">teknik jaringan telekomunikasi</option>
      <option value="PH">perhotelan</option>
      <option value="DKV">desain komunikasi visual</option>
      <option value="BDP">broadcating dan perfilman</option>
      <option value="KL">kuliner</option>
      <option value="SP">seni pertunjukan</option>
</select>
</p>
<p>
    <label>estrakulikuler:</label>
    <input type="checkbox" name="basket">Basket
    <input type="checkbox" name="voli">Voli
    <input type="checkbox" name="teater">Teater
    <input type="checkbox" name="encasa">Encasa
    <input type="checkbox" name="hadrah">Hadrah
    <input type="checkbox" name="tari">Tari
    <input type="checkbox" name="paskib">Paskib
    <input type="checkbox" name="Remaja Masjid">Remaja Masjid
    <input type="checkbox" name="Osis">Osis
    <input type="checkbox" name="Gerakan Disiplin Siswa">Gerakan Disiplin Siswa
    <input type="checkbox" name="Palang Merah Remaja">Palang Merah Remaja

</p>

    <p>
        <input type="submit" name="submit" value="Daftar">  
      
    




</body>
</html>

</body>