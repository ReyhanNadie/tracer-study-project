<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        h1 {
            font-size: 36px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        canvas {
            display: block;
            margin: 0 auto;
            max-width: 600px;
            max-height: 400px;
        }
        .chart-container {
            position: relative;
            margin: auto;
            height:auto;
            width: 80vw;
        }

    </style>
</head>
<body>
	<div class="container">
        <div>
			<h1>Selamat Datang di Website Tracer Study Alumni</h1>
		</div>
        <div class="chart-container">
			<h2>Data Alumni</h2>
			<canvas id="myChart"></canvas>
		</div>
        <canvas id="myChart"></canvas>
        <div class="chart-container">
            <h2>Lama Alumni Mendapatkan pekerjaan</h2>
		    <canvas id="myChart2"></canvas>
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
</html>