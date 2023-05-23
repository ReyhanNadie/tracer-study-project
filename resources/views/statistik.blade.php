<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistik</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	@extends('layouts.main')

    @section('container')
	<div class="container text-center">
		<div class="row row-cols-2">
			<div class="chart-container bg-light">
				<h2>Data Alumni</h2>
				<canvas id="myChart"></canvas>
			</div>
			<div class="chart-container bg-light">
				<h2>Data Pekerjaan Alumni</h2>
				<canvas id="myChart4"></canvas>
			</div>
			<div class="chart-container bg-light">
				<h2>Persebaran Alumni</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32659974.64064838!2d95.93388606695005!3d-2.2238796070165416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1684811261411!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="chart-container bg-light">
				<h2>Lama Alumni Mendapatkan pekerjaan</h2>
				<canvas id="myChart2"></canvas>
			</div>
		</div>
	  </div>

	<script>
		// Mengambil konteks canvas
		var ctx = document.getElementById('myChart').getContext('2d');
		// Membuat data untuk grafik
		var data = {
			labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
			datasets: [{
				label: 'Jumlah Alumni',
				data: [100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650],
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255, 99, 132, 1)',
				borderWidth: 1
			}]
		};
		// Membuat grafik
		var myChart = new Chart(ctx, {
			type: 'line',
			data: data,
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
    <script>
		// Data untuk grafik
		const data2 = {
			labels: ['Kurang dari 3 bulan', 'Kurang dari 6 bulan', 'Kurang dari 1 tahun', 'Lebih dari 1 tahun'],
			datasets: [{
				label: 'Lama Alumni Mendapatkan Pekerjaan',
				data: [10, 20, 30, 40],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
				],
				borderWidth: 1
			}]
		};

		// Opsi untuk grafik
		const options2 = {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		};

		// Buat grafik
		const ctx2 = document.getElementById('myChart2').getContext('2d');
		const myChart2 = new Chart(ctx2, {
			type: 'bar',
			data: data2,
			options: options2
		});
	</script>

	<script>
		// Data untuk grafik
		const data4 = {
			labels: ['PTKIN', 'PTS (Umum)', 'PTIS (Agama)', 'Bekerja', 'Ponpes', 'Lainnya'],
			datasets: [{
				label: 'Data Pekerjaan Alumni',
				data: [186, 20, 1, 25, 10, 103],
				backgroundColor: [
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		};

		// Opsi untuk grafik
		const options4 = {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		};

		// Buat grafik
		const ctx4 = document.getElementById('myChart4').getContext('2d');
		const myChart4 = new Chart(ctx4, {
			type: 'bar',
			data: data4,
			options: options4
		});
	</script>
    @endsection
</html>