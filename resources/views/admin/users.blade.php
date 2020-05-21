@extends('admin/layout/main')
@section('title', 'Data Master')
@section('container')

<section class="content-header">
	<h1>
		Data Master
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data Master</li>
	</ol>
</section>

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data users</h3>

	<a href="/users/tambah"> + Tambah users Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		


</body>
</html>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Email Verifikasi</th>
			<th>Password</th>
			<th>Remember Token</th>
            <th>Create at</th>
			<th>Update at</th>
		</>
		@foreach($users as $u)
		<tr>
			<td>{{ $u->nama }}</td>
			<td>{{ $u->email }}</td>
            <td>{{ $u->email_verified_at }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->remember_token }}</td>
            <td>{{ $u->created_at }}</td>
            <td>{{ $u->updated_at }}</td>
			
			<td>
				<a href="/users/edit/{{ $u->id }}">Edit</a>
				|
				<a href="/users/hapus/{{ $u->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</div>
</section>
@endsection()