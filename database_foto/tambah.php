<?php

require'function.php';

if(isset($_POST["submit"])){

// Status penambahan data (berhasil/ tidak)
if(tambah($_POST)>0){
echo "
<script>
alert('Data Berhasil Ditambahkan');
document.location.href='index.php';
</script>
";
} else {
echo"
<script>
alert('Data Gagal Ditambahkan');
document.location.href='index.php';
</script>
";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menambahkan Data Survey</title>
<!-- CSS body-->
<style>
body{
font-family: arial, sans-serif;
margin: 70px;
}

input {
width: 100%;
}
</style>
</head>
<body>
<h1>Menambahkan Data Survei</h1>

<!-- "enctype" digunakan untuk membuat 2 jalur : penyimpanan text ($_POST) dan file ($_FILE)-->
<form action="" method="post" enctype="multipart/form-data">
<ul>
<li>
<label for="lokasi"> Lokasi:</label>
<!-- "required" digunakan untuk memastikan kolom terisi (tidak boleh kosong) -->
<!-- "autocomplete="off" agar tidak muncul suggestion ketika input-->
<input type="text" name="lokasi" id="lokasi" required autocomplete="off">

</li>

<li>
 <label for="lokasi">Lokasi:</label>
 <input type="text" name="lokasi" id="lokasi"required autocomplete="off">
 </li>
 
<li>
 <label for="latitude">Latitude:</label>
 <input type="text" name="latitude" id="latitude"required autocomplete="off">
 </li>

 <li>
 <label for="longitude">Longitude:</label>
 <input type="text" name="longitude" id="longitude" autocomplete="off">
 </li>

 <li>
 <label for="foto">Foto:</label>
 <input type="file" name="foto" id="foto" autocomplete="off">
 </li>

<li>
<button type="submit" name="submit">Tambah Data!</button>
</li>
</ul>

</form>

</body>
</html>