<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit users</h3>
 
	<a href="/users"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($users as $u)
	<form action="/users/update" method="post">
		{{ csrf_field() }}
        
		<input type="hidden" name="id" value="{{ $u->id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $u->nama }}"> <br/>
        Email <input type="text" required="required" name="email" value="{{ $u->email }}"> <br/>
        Email Verifikasi <input type="text" required="required" name="email_verified" value="{{ $u->email_verified_at }}"> <br/>
        Password <input type="password" required="required" name="password" value="{{ $u->password }}"> <br/>
        Remember Token <input type="token" required="required" name="token" value="{{ $u->remember_token }}"> <br/>
        Create at <input type="time" required="required" name="time" value="{{ $u->created_at }}"> <br/>
        Update at <input type="time" required="required" name="time" value="{{ $u->updated_at }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>