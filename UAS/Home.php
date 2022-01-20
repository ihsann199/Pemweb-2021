<!DOCTYPE html>
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

	
<h3>Galeri Produk</h3>	
<p>
<div class="konten">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_olshop";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM masterbarang";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo '
					<div class="gallery">
						<div class="merk"><b><a class="merkLink" href="Form_pemesanan.php?ID_Barang='.$row["ID_Barang"].'">'.$row["Nama_Barang"].'</a></b></div>
						<a target="_blank" href="'.$row["Pic_Barang"].'">
							<img src="'.$row["Pic_Barang"].'" alt="'.$row["Nama_Barang"].'" width="100" height="100">
						</a>
						<div class="desc_1">
							Deskripsi:</br>
							'.$row["Desc_Barang"].'
						</div>
						<div class="desc">
							Rp. '.$row["Harga_Barang"].'
						</div>
						<div class="desc">
							<button class="tombol" id="pesan" name="pesan" type="button" >
								<a class="textTombol" href="Form_pemesanan.php?ID_Barang='.$row["ID_Barang"].'">Pesan</a>
							</button>
						</div>
					</div>
					
				';
			}
		} else {
			echo "0 results";
		}
		
		$conn->close();
		
	?>

</div>
</p>

</body>
</html>