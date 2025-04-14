<html>
	<head>
		<title> Bussiness Analyst Education </title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<header>
			<h2> Bussiness Analyst Education - Ester Veronika Sinaga </h2>
		</header>

		<nav>
			<a href="/BAEdu"> Beranda </a>
			<a href="data.php"> Data </a>
			<hr><hr> <br>
		</nav>

		<main>
			<section>
				<center>
					<h3> Input Kuesioner </h3>

					<form method="POST">
						<table cellspacing="5">
							<tr>
								<th colspan="3"> Data diri responden </th>
							</tr>

							<tr>
								<td> Nama Responden </td>
								<td> <input type="text" name="nama" required> </td>
							</tr>

							<tr>
								<td> Kelas </td>
								<td>
									<select name="kls" required>
										<option value=""> --- </option>
										<option value="X"> X Kuliner </option>
										<option value="X"> X Fashion Desain </option>
										<option value="X"> X DKV </option>
										<option value="XI"> XI Kuliner </option>
										<option value="XI"> XI Fashion Desain </option>
										<option value="XI"> XI DKV </option>
									</select>
								</td>
							</tr>

							<tr>
								<td> Responden ke </td>
								<td>
									<select name="responden" required>
										<option value=""> --- </option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 9 </option>
										<option value="10"> 10 </option>
										<option value="11"> 11 </option>
										<option value="12"> 12 </option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16 </option>
										<option value="17"> 17 </option>
										<option value="18"> 18 </option>
										<option value="19"> 19 </option>
										<option value="20"> 20 </option>
										<option value="21"> 21 </option>
										<option value="22"> 22 </option>
										<option value="23"> 23 </option>
										<option value="24"> 24 </option>
										<option value="25"> 25 </option>
										<option value="26"> 26 </option>
										<option value="27"> 27 </option>
										<option value="28"> 28 </option>
										<option value="29"> 29 </option>
										<option value="30"> 30 </option>
									</select>
								</td>
							</tr>

							<tr>
								<th colspan="3"> Kuesioner untuk responden </th>
							</tr>

							<tr>
								<td align="center" width="15%"> <b> No </b> </td>
								<td align="center"> <b> Pertanyaan </b> </td>
								<td align="center"> <b> Jawaban </b> </td>
							</tr>

							<tr>
								<td align="center" width="10%"> 1 </td>
								<td> Saya merasa puas dengan kondisi ruang kelas yang nyaman dan bersih. </td>
								<td align="center">
									<select name="p1" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 2 </td>
								<td> Sarana pembelajaran seperti proyektor dan papan tulis tersedia dengan baik di setiap ruang kelas. </td>
								<td align="center">
									<select name="p2" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 3 </td>
								<td> Fasilitas laboratorium (komputer, IPA, dsb.) cukup lengkap dan dapat digunakan dengan optimal. </td>
								<td align="center">
									<select name="p3" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 4 </td>
								<td> Perpustakaan sekolah menyediakan buku-buku yang saya butuhkan untuk belajar. </td>
								<td align="center">
									<select name="p4" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 5 </td>
								<td> Ruang serbaguna (aula) di sekolah dalam kondisi bersih dan nyaman digunakan. </td>
								<td align="center">
									<select name="p5" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 6 </td>
								<td> Anda merasa puas dengan fasilitas olahraga yang ada. </td>
								<td align="center">
									<select name="p6" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 7 </td>
								<td> Ruangan, alat dan bahan praktik tersedia dengan cukup baik. </td>
								<td align="center">
									<select name="p7" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 8 </td>
								<td> Tersedia akses WiFi atau internet yang memadai untuk mendukung kegiatan belajar. </td>
								<td align="center">
									<select name="p8" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 9 </td>
								<td> Tempat parkir siswa aman dan cukup untuk menampung kendaraan yang ada. </td>
								<td align="center">
									<select name="p9" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>

							<tr>
								<td align="center" width="10%"> 10 </td>
								<td> Saya merasa puas dengan sarana keamanan seperti CCTV atau petugas keamanan di sekolah. </td>
								<td align="center">
									<select name="p10" required>
										<option value=""> --- </option>
										<option value="1"> Sangat tidak setuju </option>
										<option value="2"> Tidak setuju </option>
										<option value="3"> Cukup setuju </option>
										<option value="4"> Setuju </option>
										<option value="5"> Sangat setuju </option>
									</select>
								</td>
							</tr>
						</table> <br>

						<input type="submit" name="simpan" value="Simpan Data">

						<br><br>
					</form>
				</center>
			</section>

			<section>
				<center>
					<h3> Data Kuesioner </h3>

					<table class="tbl-data" border="1" cellspacing="0">
						<tr>
							<th> No </th>
							<th> Nama </th>
							<th> Kelas </th>
							<th> Detail </th>
						</tr>

						<tr>
							<?php
								function data(){
									include "kunci.php";

									$kueri = $kunci->query("SELECT * FROM data WHERE hapus='n'")->fetchAll(PDO::FETCH_ASSOC);
									if(!empty($kueri)){
										$no = 1;
										foreach($kueri as $isi){
											echo "<td align='center'>" .$no++. "</td>";
											echo "<td>" .$isi["nama"]. "</td>";
											echo "<td align='center'>" .$isi["kls"]. "</td>";
											echo "<td align='center'> <a href='detail.php?nama=" .$isi["nama"]. "&kls=" .$isi["kls"]. "'> Detail </a> </td> </tr>";
										}
									}else{
										echo "<td colspan='4' align='center'> Tidak ada data </td> </tr>";
									}
								}
								data();
							?>
					</table>
				</center>
			</section>
		</main>
	</body>
</html>

<style>
	main{
		display: grid;
		grid-template-columns: 1fr 1fr;
	}

	section{
		height: 80vh;
		overflow: scroll;
		overflow-x: hidden;
	}

	table{
		width: 40vw;
	}

	input[name=nama]{
		width: 25vw;
	}
</style>

<?php
	function simpan(){
		if(isset($_POST["simpan"])){
			include "kunci.php";

			$nama = htmlspecialchars($_POST["nama"]);
			$kls = htmlspecialchars($_POST["kls"]);
			$responden = htmlspecialchars($_POST["responden"]);

			$p1 = htmlspecialchars($_POST["p1"]);
			$p2 = htmlspecialchars($_POST["p2"]);
			$p3 = htmlspecialchars($_POST["p3"]);
			$p4 = htmlspecialchars($_POST["p4"]);
			$p5 = htmlspecialchars($_POST["p5"]);
			$p6 = htmlspecialchars($_POST["p6"]);
			$p7 = htmlspecialchars($_POST["p7"]);
			$p8 = htmlspecialchars($_POST["p8"]);
			$p9 = htmlspecialchars($_POST["p9"]);
			$p10 = htmlspecialchars($_POST["p10"]);

			$hapus = "n";

			$kueri = $kunci->prepare("INSERT INTO data(responden, nama, kls, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, hapus) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$kueri->bindValue(1, $responden);
			$kueri->bindValue(2, $nama);
			$kueri->bindValue(3, $kls);
			$kueri->bindValue(4, $p1);
			$kueri->bindValue(5, $p2);
			$kueri->bindValue(6, $p3);
			$kueri->bindValue(7, $p4);
			$kueri->bindValue(8, $p5);
			$kueri->bindValue(9, $p6);
			$kueri->bindValue(10, $p7);
			$kueri->bindValue(11, $p8);
			$kueri->bindValue(12, $p9);
			$kueri->bindValue(13, $p10);
			$kueri->bindValue(14, $hapus);
			$kueri->execute();

			if($kueri){
				echo "<script> alert('Data berhasil disimpan') </script>";
				echo "<script> window.location = 'data.php' </script>";
			}
		}
	}
	simpan();
?>