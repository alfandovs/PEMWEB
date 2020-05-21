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
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Email Verifikasi</th>
			<th>Password</th>
			<th>Remember Token</th>
            <th>Create at</th>
			<th>Update at</th>
		</tr>
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


</body>
</html>