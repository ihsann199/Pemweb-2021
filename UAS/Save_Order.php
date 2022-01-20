<?php
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
		
		echo $Qty;
		echo "<br>";
		echo $Nama;
		echo "<br>";
		echo $Alamat;
		echo "<br>";
		echo $KodePos;
		echo "<br>";
		echo $NoHP;
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_olshop";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$IDBarang = test_input($_POST["ID_Barang"]);

		$sql = "INSERT INTO transaksi_pemesanan (ID_Barang, Qty_Barang, Nama_Pesan, Alamat_Pesan, KodePos_Pesan, NoHP_Pesan) 
		VALUES ('$IDBarang', '$Qty', '$Nama', '$Alamat', '$KodePos', '$NoHP')";

		if ($conn->query($sql) === TRUE) {
			echo "Data Berhasil Di Simpan";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//header("Location: UAS/Form_pemesanan.php?ID_Barang=".$IDBarang."&PesanError=signupsuccess");
		$conn->close();
		
	}
	
?>