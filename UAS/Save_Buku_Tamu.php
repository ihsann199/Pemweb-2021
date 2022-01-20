<?php
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
		
		echo $Nama;
		echo "<br>";
		echo $Alamat;
		echo "<br>";
		echo $NoHP;
		echo "<br>";
		echo $Email;
		echo "<br>";
		echo $Sumber_Customer;
		echo "<br>";
		echo $Sumber_Customer_2;
		echo "<br>";
		echo $Sumber_Customer_3;
		echo "<br>";
		echo $Saran;
		echo "<br>";
		
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
			echo "Data Berhasil Di Simpan";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//header("Location: UAS/Form_pemesanan.php?ID_Barang=".$IDBarang."&PesanError=signupsuccess");
		$conn->close();
		
	}
	
?>