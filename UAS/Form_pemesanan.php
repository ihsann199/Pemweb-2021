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

.report {
	background-color : #f2f2f2;
	color: black;
	text-align: center;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 10px;
	width: 600px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
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

	
<h3>Form Pemesanan</h3>	
<body>
	

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_olshop";
	
	$IDBarang = "";
	
	if (isset($_GET['ID_Barang'])){
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$IDBarang = $_GET["ID_Barang"];

		$sql = "SELECT * FROM masterbarang WHERE ID_Barang = '$IDBarang'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
?>
	
	<form method="POST" action="Form_pemesanan.php?ID_Barang=<?php echo $IDBarang ?>" >
		<table border="0" class="table" align="center">
			<tr>
				<td valign="top">
					<img class="picBarang" src="<?php echo $row["Pic_Barang"] ?>" alt="Yonex Astrox88 D" width="100" height="100"> 
				</td>
				<td valign="top">
					<table>
						<tr>
							<td class="merk"><b> <?php echo $row["Nama_Barang"] ?> </b></td>
						</tr>
						<tr>
							<td class="spesifikasi">
								<?php echo $row["Desc_Barang"] ?>
							</td>
						</tr>
						<tr>
							<td class="harga"> Rp. <?php echo $row["Harga_Barang_Promo"] ?> </td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>ID Barang</td>
				<td>
					<input type="text" id="ID_Barang" name="ID_Barang" value="<?php echo $IDBarang ?>" readonly="True" />
				</td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td>
					<select id="Qty" name="Qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
			</tr>
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
				<td>Kode Pos</td>
				<td>
					<input type="text" id="KodePos" name="KodePos" placeholder="Masukan Kode Pos Anda ..." />
				</td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>
					<input type="text" id="NoHP" name="NoHP" placeholder="Masukan Nomor HP Anda ..." />
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
	
<?php
			}
		}
		
		$conn->close();
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_POST["save"])) {
		if (empty($_POST["Qty"])){
			$Qty = 0;
		}else {
			$Qty = test_input($_POST["Qty"]);
		}
		
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
		
		if (empty($_POST["KodePos"])){
			$KodePos = "";
		}else {
			$KodePos = test_input($_POST["KodePos"]);
		}
		
		if (empty($_POST["NoHP"])){
			$NoHP = "";
		}else {
			$NoHP = test_input($_POST["NoHP"]);
		}
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$IDBarang = test_input($_POST["ID_Barang"]);

		$sql = "INSERT INTO transaksi_pemesanan (ID_Barang, Qty_Barang, Nama_Pesan, Alamat_Pesan, KodePos_Pesan, NoHP_Pesan) 
		VALUES ('$IDBarang', '$Qty', '$Nama', '$Alamat', '$KodePos', '$NoHP')";

		if ($conn->query($sql) === TRUE) {
			echo '
				<div class="row" align="center">
					<div class="report">
						Pesanan Berhasil Tersimpan !
					</div>
				</div>
			';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//header("Location: UAS/Form_pemesanan.php?ID_Barang=".$IDBarang."&PesanError=signupsuccess");
		$conn->close();
		
	}
?>


</body>
</html>