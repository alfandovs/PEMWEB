@extends('layout/main')
@section('container')
@php
$cd = $dm-$dl;
$ci = $im-$il;
$cs = $sm-$sl;
$cc = $cm-$cl;
$tm = $dm+$im+$sm+$cm+$bm;
$tl = $dl+$il+$sl+$cl+$bl;
@endphp
<div class="container" style="margin-top: 30px; margin-bottom: 20px;">
	<div class="jumbotron" id="printpage" style="background-color: #FFF; width: 100%;">
		<div class="page-header">
			<div class="pull-left">
				<p style="font-weight: bold;">Hasil TES RMIB</p>
			</div>
			<div class="pull-right">
				<p style="font-weight: bold;" id="tanggal">{{date('d')}}, {{date('M')}}, {{date('Y')}}</p>
				<button class="btn btn-success" id="btn-print">Cetak <i class="fa fa-print"></i></button>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-4"><p class="lead">Nama : {{$nama}}</p></div>
			<div class="col-sm-2"><p class="lead">Usia : {{$usia}}</p></div>
			<div class="col-sm-3"><p class="lead">Jenis Kelamin : {{$j_kel}}</p></div>
			<div class="col-sm-3"><p class="lead">Email : {{$email}}</p></div>
		</div>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr bgcolor="#F3EEEE">
					<th>Line</th>
					<th>Outdoor</th>
					<th>Mechanical</th>
					<th>Aesthetic</th>
					<th>Mechanical</th>
					<th>Computationa</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">MINAT</th>
					<td>{{$dm}}</td>
					<td>{{$im}}</td>
					<td>{{$sm}}</td>
					<td>{{$cm}}</td>
					<td>{{$bm}}</td>
					<td>{{$tm}}</td>
				</tr>
				<tr>
					<th scope="row">TIDAK MINAT</th>
					<td>{{$dl}}</td>
					<td>{{$il}}</td>
					<td>{{$sl}}</td>
					<td>{{$cl}}</td>
					<td>{{$bl}}</td>
					<td>{{$tl}}</td>
				</tr>
				<tr>
					<th scope="row">PERUBAHAN</th>
					<td>{{$cd}}</td>
					<td>{{$ci}}</td>
					<td>{{$cs}}</td>
					<td>{{$cc}}</td>
					<td bgcolor="#E8DFDF"></td>
					<td bgcolor="#E8DFDF"></td>
				</tr>           
			</tbody>
		</table>s

		<div class="row" style="margin-top: 50px;">
			<div class="col-sm-4">
				<canvas id="chart1"></canvas>
				<hr>
				<h6 style="color: #9A9797;">KATEGORI PEKERJAAN</h6>
				<p style="font-weight: bold; font-size: 20px;">JOB</p>
				<ul style="list-style-type: square; color: #888787;">
					<li>Aesthetic</li>
					<li>Outdoor</li>
					<li>Mechanical</li>
					<li>Computationa</li>
					<li>Musical</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<canvas id="chart2"></canvas>
				<hr>
				<h6 style="color: #9A9797;">DAFTAR PEKERJAAN</h6>
				<p style="font-weight: bold; font-size: 20px;">JOB</p>
				<ul style="list-style-type: square; color: #888787;">
					<li>Seniman (Musical)</li>
					<li>artis komersial (Aesthetic)</li>
					<li>arsitek (Outdoor)</li>
					<li>perancangan (Mechanical)</li>
					<li>pemotretan (Mechanical)</li>
					<li>penata panggung (Outdoor)</li>
					<li>ahli biologi (Aesthetic)</li>
					<li>insinyur (Aesthetic)</li>
					<li>ilmuwan (Aesthetic)</li>
					<li>Manajer bank (Computationa)</li>
					<li>sekretaris perusahaan (Computationa)</li>
					<li>pegawai pamong praja (Outdoor)</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<canvas id="chart3"></canvas>
				<hr>
				<h6 style="color: #9A9797;">DAFTAR PEKERJAAN</h6>
				<p style="font-weight: bold; font-size: 20px;">JOB</p>
				<ul style="list-style-type: square; color: #A8A7A7;">
					<li>pegawai tata usaha (Aesthetic)</li>
					<li>pegawai auransi (Computationa)</li>
					<li>petugas pengiriman barang (Outdoor)</li>
					<li>petugas arsip (Computationa)</li>
					<li>petugas pom (Outdoor)</li>
					<li>Ojek online (Outdoor)</li>
					<li>Pemandu wisata (Outdoor)</li>
					<li>Pedagang (Outdoor)</li>
					<li>Supir transportasi publik (Outdoor)</li>
					<li>Seniman jalanan (Outdoor)</li>
					<li>Penjaga Kebun Binatang (Aesthetic)</li>
					<li>Pemipaa (Aesthetic)</li>
					<li>Pemadam kebakaran (Aesthetic)</li>
					<li>security (Aesthetic)</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<p style="font-weight: bold; font-size: 20px;">DESKRIPSI SINGKAT TEST RMIB</p>
				<p style="color: #A8A7A7; text-align: justify;">Tes RMIB (Rothwell-Miller Interest Blank) ini disusun dengan tujuan mengukur minat seseorang berdasarkan sikapnya terhadap suatu pekerjaan. Sikap tersebut didasarkan pada gagasan terhadap pekerjaan itu. Sikap tersebut didasarkan pada gagasan stereotip terhadap pekerjaan itu.
				Pemikiran yang mendasari pembentukan tes ini adalah bahwa setiap orang memiliki konsep stereotip terhadap jenis-jenis pekerjaan yang tersedia atau yang disediakan masyarakatnya. Orang akan memilih pekerjaan yang sesuai dengan ide tertentu atau tidak ada hubungannya sama sekali dengan pekerjaan yang dimaksud. Stereotip semacam ini lebih banyak mendasarkan konsepnya pada hal-hal yang menarik daripada hal-hal yang merupakan kekhususan dari pekerjaan tersebut.</p>
			</div>
			<div class="col-sm-4">
				<p style="font-weight: bold; font-size: 20px;">SEJARAH RMIB</p>
				<p style="color: #A8A7A7; text-align: justify;">Menurut sejarahnya tes ini disusun oleh oleh Rothwell pertama kali pada tahun 1947. Saat itu tes hanya memiliki 9 jenis kategori dari jenis-jenis pekerjaan yang ada. kemudian pada tahun 1958, tes diperluas dari 9 kategori menjadi 12 kategori oleh Kenneth Miller. Dan sejak saat itu tes ini disebut Test Interest Rothwell-Miller.</p>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="{{asset('/js/Chart.js')}}"></script>

<!-- Chart 1 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart1").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$kmd}}, {{$kmi}}, {{$kms}}, {{$kmc}}],
				fill: false,
				borderColor: '#A947FD',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						stepSize: 10,
						suggestedMin: 0,
						suggestedMax: 100
					}
				}]
			}
		}
	});
</script>

<!-- Chart 2 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$kld}}, {{$kli}}, {{$kls}}, {{$klc}}],
				fill: false,
				borderColor: 'green',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						stepSize: 10,
						suggestedMin: 0,
						suggestedMax: 100
					}
				}]
			}
		}
	});
</script>

<!-- Chart 3 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$cd}}, {{$ci}}, {{$cs}}, {{$cc}}],
				fill: false,
				borderColor: '#FC6A30',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						stepSize: 10,
						suggestedMin: 0,
						suggestedMax: 100
					}
				}]
			}
		}
	});

	$(document).on("click", "#btn-print", function(e){
		e.preventDefault();
		window.print();
	});
</script>
@endsection