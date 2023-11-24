<?php

require'function.php';
// Mengambil data dari URL
$id=$_GET["id"];

// Query data berdasarkan ID
$data=query("SELECT*FROM responsikopi WHERE id=$id")[0];


if(isset($_POST["submit"])){

// Status perubahan data (berhasil/ tidak)
if(edit($_POST)>0){
echo "
<script>
alert('Data Berhasil Diedit');
document.location.href='index.php';
</script>
";
} else {
echo"
<script>
alert('Data Gagal Diedit');
document.location.href='index.php';
</script>
";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Survei</title>
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
<h1>Edit Lokasi</h1>

<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$data["id"];?>">
<input type="hidden" name="fotoLama" value="<?=$data["foto"];?>">
<ul>
<li>
<label for="lokasi">Nama Lokasi:</label>
<!-- "required" digunakan untuk memastikan kolom terisi (tidak boleh kosong) -->
<input type="text" name="lokasi" id="lokasi" required
value="<?= $data["lokasi"];?>">
</li>
 
<label for="latitude">Latitude:</label>
<!-- "required" digunakan untuk memastikan kolom terisi (tidak boleh kosong) -->
<input type="float" name="latitude" id="latitude" required
value="<?= $data["latitude"];?>">
</li>

<label for="longitude">Longitude:</label>
<!-- "required" digunakan untuk memastikan kolom terisi (tidak boleh kosong) -->
<input type="float" name="longitude" id="longitude" required
value="<?= $data["longitude"];?>">
</li>

<li>
<label for="foto">Foto:</label>
<input type="file" name="foto" id="foto"
value="<?= $data["foto"];?>">
</li>

<li>
<button type="submit" name="submit">Edit Data!</button>
</li>
</ul>

</form>

</body>
</html>