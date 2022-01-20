<html>
<head>
<style>
</style>
<style>
#judul,#ket_judul{text-align:center}
		
.topnav {
  overflow: hidden;
  background-color:navy;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

body {
	background-image: url("back1.jpg");
	//background-color:black;
}

div.konten {
	position: absolute;
	left: 120px;
}

div.konten2 {
	position: absolute;
	left: 120px;
	margin-top: 400px;
}

div.konten3 {
	position: absolute;
	left: 120px;
	margin-top: 800px;
}

div.gallery {
  margin: 10px;
  border: 1px solid black;
  float: left;
  width: 200px;
  height: 490px;
  border-radius: 10px;
}

div.gallery:hover {
  border: 1px solid red;
  background-color: navy;
  color: white;
}

div.gallery img {
  width: 197px;
  height: 150px;
  position: relative;
  left: 2px;
  right: 2px;
}

div.desc {
  padding: 10px;
  text-align: center;
  color: red;
}

div.merk {
  padding: 15px;
  text-align: center;
  background-color: navy;
  color: white;
  border-radius: 10px 10px 0px 0px;
}

div.desc_1 {
  padding: 15px;
  text-align: justify;
  font-size: 12px;
  height: 170px;
}

h3 {
	text-align: center;
}

.tombol {
	background-color: navy;
	font-size: 12px;
	padding: 5px 18px;
	border-radius: 8px;
	color: white;
	text-decoration: none;
}

.merkLink {
	color: white;
	text-decoration: none;
}

.gambar1 {
	position: fixed;
	width: auto;
	height: auto;
	opacity: 0.8;
	z-index: -1;
}

.textTombol {
	color: white;
	text-decoration: none;
}

input[type=text], select {
  width: 100%;
  padding: 5px 5px;
  margin: 1px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: navy;
  color: white;
  padding: 5px 5px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

textarea {
  width: 100%;
  height: 100px;
  padding: 5px 5px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 3px;
  resize: none;
}

.table {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	width: 600px;
}

.picBarang {
	width: 120px;
	height: 120px;
}

.merk {
  text-align: left;
  color: black;
  font-size: 18px;
  valign: top;
}

.spesifikasi {
  text-align: left;
  color: black;
  font-size: 12px;
  text-align: justify;
}

.harga {
  text-align: left;
  color: red;
  font-size: 14px;
}

</style>

</head>

<h1 id="judul">Ihsan Sport</h1>
<p id="ket_judul">Toko Peralatan Olahraga Badminton</p>
<br/>
<div class="topnav">
  <a href="Home.php">Galeri Produk</a>
  <!--<a href="Form_pemesanan.php">Form Pemesanan</a>-->
  <a href="Buku_Tamu.php">Buku Tamu</a>
</div>

	
<h3>Form Pengisian Buku Tamu</h3>	
<body>
	
	<form method="POST" action="Buku_Tamu.php" >
		<table border="0" class="table" align="center">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" id="Nama" name="Nama" placeholder="Masukan Nama Anda ..." />
				</td>
			</tr>
			<tr>
				<td valign="top">Alamat</td>
				<td>
					<textarea id="Alamat" name="Alamat" placeholder="Masukan Alamat Anda..."></textarea>
				</td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>
					<input type="text" id="NoHP" name="NoHP" placeholder="Masukan Nomor HP Anda ..." />
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" id="Email" name="Email" placeholder="Masukan Email Anda ..." />
				</td>
			</tr>
			<tr>
				<td valign="top">Mengetahui Dari</td>
				<td>
					<input type="checkbox" id="Teman_Saudara" name="Teman_Saudara" value="Teman/Saudara"> Teman/Saudara
					</br>
					<input type="checkbox" id="Sosial_Media" name="Sosial_Media" value="Sosial Media"> Sosial Media
					</br>
					<input type="checkbox" id="Iklan" name="Iklan" value="Iklan"> Iklan
				</td>
			</tr>
			<tr>
				<td>Saran</td>
				<td>
					<textarea id="Saran" name="Saran" placeholder="Masukan Saran Anda..."></textarea>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Submit" id="save" name="save">
				</td>
			</tr>
		</table>
	</form>

<table border="1"  class="table" align="center">
		<tr>
			<td width="300px">Nama</td>
			<td width="500px">Saran</td>
		</tr>
	

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_olshop";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM buku_tamu";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '
				<tr>
					<td width="300px">'.$row["Nama_Customer"].'</td>
					<td width="500px">'.$row["Saran_Customer"].'</td>
				</tr>
			';
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_POST["save"])) {
		if (empty($_POST["Nama"])){
			$Nama = "";
		}else {
			$Nama = test_input($_POST["Nama"]);
		}
		
		if (empty($_POST["Alamat"])){
			$Alamat = "";
		}else {
			$Alamat = test_input($_POST["Alamat"]);
		}
		
		if (empty($_POST["NoHP"])){
			$NoHP = "";
		}else {
			$NoHP = test_input($_POST["NoHP"]);
		}
		
		if (empty($_POST["Email"])){
			$Email = "";
		}else {
			$Email = test_input($_POST["Email"]);
		}
		
		if (empty($_POST["Teman_Saudara"])){
			$Sumber_Customer = "";
		}else {
			$Sumber_Customer = test_input($_POST["Teman_Saudara"]);
		}
		
		if (empty($_POST["Sosial_Media"])){
			$Sumber_Customer_2 = "";
		}else {
			$Sumber_Customer_2 = test_input($_POST["Sosial_Media"]);
		}
		
		if (empty($_POST["Iklan"])){
			$Sumber_Customer_3 = "";
		}else {
			$Sumber_Customer_3 = test_input($_POST["Iklan"]);
		}
		
		if (empty($_POST["Saran"])){
			$Saran = "";
		}else {
			$Saran = test_input($_POST["Saran"]);
		}
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_olshop";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO buku_tamu (Nama_Customer, Alamat_Customer, NoHP_Customer, Email_Customer, Sumber_Customer, Sumber_Customer_2, Sumber_Customer_3, Saran_Customer) 
		VALUES ('$Nama', '$Alamat', '$NoHP', '$Email', '$Sumber_Customer', '$Sumber_Customer_2', '$Sumber_Customer_3', '$Saran')";

		if ($conn->query($sql) === TRUE) {
			//echo "Data Berhasil Di Simpan";
			echo "<meta http-equiv='refresh' content='0'>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//header("Location: UAS/Form_pemesanan.php?ID_Barang=".$IDBarang."&PesanError=signupsuccess");
		$conn->close();
		
	}
?>

</table>

</body>
</html>