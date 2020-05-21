<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data users</h3>

	<a href="/users/store"> Kembali</a>
	
	<br/>
	<br/>

    
	<form action="/users/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
        Email <input type="text" name="email"> <br/>
        Email Verifikasi <input type="text" name="email verifikasi"> <br/>
        Password <input type="password" name="password"> <br/>
        Remember Token <input type="token" name="token"> <br/>
		Create at <input type="time" name="create"> <br/>
        Update at <input type="time" name="update"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>