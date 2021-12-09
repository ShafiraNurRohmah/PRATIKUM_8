<?php
// Fetch all users data from database
include "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ");
?>

<html>
<head>
<title>Halaman Utama</title>
</head>

<body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>

<table width='80%' border=1>

<tr>
<th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
<th>tgl lahir</th> <th>Prodi</th> <th>Update</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>".$user_data['nim']."</td>"; echo "<td>".$user_data['nama']."</td>"; echo "<td>".$user_data['jkel']."</td>"; 
echo "<td>".$user_data['alamat']."</td>"; echo "<td>".$user_data['tgllhr']."</td>";echo "<td>"."</td>";
echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='hapus.php?nim=$user_data[nim]'>Delete</a></td></tr>";
}
?>

<a href="lap_mhs.php">cetak data </a><br/><br/>
</table>
</body>
</html>