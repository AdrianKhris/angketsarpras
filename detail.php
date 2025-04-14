<?php
	include "kunci.php";

	$nama = $_GET["nama"];
	$kls = $_GET["kls"];

	$kueri = $kunci->query("SELECT * FROM data WHERE nama='$nama' AND kls='$kls'");

	$data = $kueri->fetch();
?>

<html>
	<head>
		<title> <?php echo $data["nama"]; ?> </title>
		<link rel="stylesheet" href="style.css">
		<script src="chart.js"></script>
	</head>

	<body>
		<div>
			<br>

			<a href="data.php"> Kembali ke halaman data </a>

			<br>

			<center>
				<h2> Detail Isian Kuesioner </h2>
				<h3> <?php echo substr($data["nama"], 0, 6) . str_repeat("*", max(0, strlen($data["nama"]) -6)); ?> (Responden ke: <?php echo $data["responden"]; ?>) </h3>
			</center>
		</div>

		<br> <br>

		<main>
			<ul>
				Keterangan nilai kuesioner:
				<li> 1 = Sangat tidak setuju </li>
				<li> 2 = Tidak setuju </li>
				<li> 3 = Cukup setuju </li>
				<li> 4 = Setuju </li>
				<li> 5 = Sangat setuju </li>
			</ul>

			<br> <br>
			<center>
				<section>
					<table>
						<tr>
							<th> No </th>
							<th> Pertanyaan </th>
							<th> Nilai </th>
						</tr>

						<tr>
							<td align="center"> 1 </td>
							<td> Saya merasa puas dengan kondisi ruang kelas yang nyaman dan bersih. </td>
							<td align="center"> <?php echo $data["p1"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 2 </td>
							<td> Sarana pembelajaran seperti proyektor dan papan tulis tersedia dengan baik di setiap ruang kelas. </td>
							<td align="center"> <?php echo $data["p2"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 3 </td>
							<td> Fasilitas laboratorium (komputer, IPA, dsb.) cukup lengkap dan dapat digunakan dengan optimal. </td>
							<td align="center"> <?php echo $data["p3"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 4 </td>
							<td> Perpustakaan sekolah menyediakan buku-buku yang saya butuhkan untuk belajar. </td>
							<td align="center"> <?php echo $data["p4"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 5 </td>
							<td> Ruang serbaguna (aula) di sekolah dalam kondisi bersih dan nyaman digunakan. </td>
							<td align="center"> <?php echo $data["p5"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 6 </td>
							<td> Anda merasa puas dengan fasilitas olahraga yang ada. </td>
							<td align="center"> <?php echo $data["p6"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 7 </td>
							<td> Ruangan, alat dan bahan praktik tersedia dengan cukup baik. </td>
							<td align="center"> <?php echo $data["p7"]; ?>
							 </td>
						</tr>

						<tr>
							<td align="center"> 8 </td>
							<td> Tersedia akses WiFi atau internet yang memadai untuk mendukung kegiatan belajar. </td>
							<td align="center"> <?php echo $data["p8"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 9 </td>
							<td> Tempat parkir siswa aman dan cukup untuk menampung kendaraan yang ada. </td>
							<td align="center"> <?php echo $data["p9"]; ?> </td>
						</tr>

						<tr>
							<td align="center"> 10 </td>
							<td> Saya merasa puas dengan sarana keamanan seperti CCTV atau petugas keamanan di sekolah. </td>
							<td align="center"> <?php echo $data["p10"]; ?> </td>
						</tr>
					</table>
				</section>

				<br><hr><hr><br>

				<section>
					<h3> Grafik Isian Kuesioner </h3>
					<div id="chart">
						<canvas id="myChart"></canvas>
					</div>
				</section>
			</center>
		</main>
	</body>
</html>

<style>
	a{
		padding: 10;
	}

	section{
		width: 85vw;
	}

	ul, li{
		margin-left: 50;
	}

	table{
		width: 45vw;
	}

	table td{
		padding: 3;
	}

	#chart{
		width: 55vw;
		margin: 10 0;
	}
</style>

<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Sangat tidak setuju", "Tidak setuju", "Cukup setuju", "Setuju", "Sangat Setuju"],
			datasets: [{
				label: '',
				data: [
					<?php
						$nama = $_GET["nama"];
						$sts = $kunci->query("SELECT (CASE WHEN p1=1 THEN 1 ELSE 0 END + CASE WHEN p2=1 THEN 1 ELSE 0 END + CASE WHEN p3=1 THEN 1 ELSE 0 END + CASE WHEN p4=1 THEN 1 ELSE 0 END + CASE WHEN p5=1 THEN 1 ELSE 0 END + CASE WHEN p6=1 THEN 1 ELSE 0 END + CASE WHEN p7=1 THEN 1 ELSE 0 END + CASE WHEN p8=1 THEN 1 ELSE 0 END + CASE WHEN p9=1 THEN 1 ELSE 0 END + CASE WHEN p10=1 THEN 1 ELSE 0 END) AS jml FROM data WHERE nama='$nama'")->fetch(PDO::FETCH_ASSOC);
						echo $sts["jml"];
					?>,

					<?php
						$nama = $_GET["nama"];
						$ts = $kunci->query("SELECT (CASE WHEN p1=2 THEN 1 ELSE 0 END + CASE WHEN p2=2 THEN 1 ELSE 0 END + CASE WHEN p3=2 THEN 1 ELSE 0 END + CASE WHEN p4=2 THEN 1 ELSE 0 END + CASE WHEN p5=2 THEN 1 ELSE 0 END + CASE WHEN p6=2 THEN 1 ELSE 0 END + CASE WHEN p7=2 THEN 1 ELSE 0 END + CASE WHEN p8=2 THEN 1 ELSE 0 END + CASE WHEN p9=2 THEN 1 ELSE 0 END + CASE WHEN p10=2 THEN 1 ELSE 0 END) AS jml FROM data WHERE nama='$nama'")->fetch(PDO::FETCH_ASSOC);
						echo $ts["jml"];
					?>,

					<?php
						$nama = $_GET["nama"];
						$cs = $kunci->query("SELECT (CASE WHEN p1=3 THEN 1 ELSE 0 END + CASE WHEN p2=3 THEN 1 ELSE 0 END + CASE WHEN p3=3 THEN 1 ELSE 0 END + CASE WHEN p4=3 THEN 1 ELSE 0 END + CASE WHEN p5=3 THEN 1 ELSE 0 END + CASE WHEN p6=3 THEN 1 ELSE 0 END + CASE WHEN p7=3 THEN 1 ELSE 0 END + CASE WHEN p8=3 THEN 1 ELSE 0 END + CASE WHEN p9=3 THEN 1 ELSE 0 END + CASE WHEN p10=3 THEN 1 ELSE 0 END) AS jml FROM data WHERE nama='$nama'")->fetch(PDO::FETCH_ASSOC);
						echo $cs["jml"];
					?>,

					<?php
						$nama = $_GET["nama"];
						$s = $kunci->query("SELECT (CASE WHEN p1=4 THEN 1 ELSE 0 END + CASE WHEN p2=4 THEN 1 ELSE 0 END + CASE WHEN p3=4 THEN 1 ELSE 0 END + CASE WHEN p4=4 THEN 1 ELSE 0 END + CASE WHEN p5=4 THEN 1 ELSE 0 END + CASE WHEN p6=4 THEN 1 ELSE 0 END + CASE WHEN p7=4 THEN 1 ELSE 0 END + CASE WHEN p8=4 THEN 1 ELSE 0 END + CASE WHEN p9=4 THEN 1 ELSE 0 END + CASE WHEN p10=4 THEN 1 ELSE 0 END) AS jml FROM data WHERE nama='$nama'")->fetch(PDO::FETCH_ASSOC);
						echo $s["jml"];
					?>,

					<?php
						$nama = $_GET["nama"];
						$ss = $kunci->query("SELECT (CASE WHEN p1=5 THEN 1 ELSE 0 END + CASE WHEN p2=5 THEN 1 ELSE 0 END + CASE WHEN p3=5 THEN 1 ELSE 0 END + CASE WHEN p4=5 THEN 1 ELSE 0 END + CASE WHEN p5=5 THEN 1 ELSE 0 END + CASE WHEN p6=5 THEN 1 ELSE 0 END + CASE WHEN p7=5 THEN 1 ELSE 0 END + CASE WHEN p8=5 THEN 1 ELSE 0 END + CASE WHEN p9=5 THEN 1 ELSE 0 END + CASE WHEN p10=5 THEN 1 ELSE 0 END) AS jml FROM data WHERE nama='$nama'")->fetch(PDO::FETCH_ASSOC);
						echo $ss["jml"];
					?>
				],
				backgroundColor:[
					'rgb(255, 2, 122, 0.5)',
					'rgb(250, 114, 2, 0.5)',
					'rgb(111, 250, 0, 0.5)',
					'rgb(1, 250, 197, 0.5)',
					'rgb(1, 81, 245, 0.5)',
				],
				borderColor:[
					'rgb(255, 2, 122)',
					'rgb(250, 114, 2)',
					'rgb(111, 250, 0)',
					'rgb(1, 250, 197)',
					'rgb(1, 81, 245)',
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>