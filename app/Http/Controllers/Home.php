<?php

namespace App\Http\Controllers;

use App\Mhome;
use App\Msoal;
use App\Mnomor;
use App\Musertest;
use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'nama' => null
        );
        return view('page/registrasi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Isi sesuai petunjuk',
            'numeric' => 'attribute wajib dengan nomor atau angka',
            'email' => 'attribute wajib menggunakan format email'
        ];

        $request->validate([
            'nama'=>'required',
            'usia'=>'required|numeric',
            'email'=>'required|email',
            'j_kel'=>'required'
        ], $messages);

        $soal = Msoal::all();
        
        $data = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'soal' => $soal
        );

        return view('page/test', $data); 
    }

    // postest

    public function postest(Request $request){

        // Konversi Most (D)
        if($request->Dm == 20){
            $kmd = 100;
        }else if($request->Dm == 16){
            $kmd = 97;
        }
        else if($request->Dm == 15){
            $kmd = 93;
        }
        else if($request->Dm == 14){
            $kmd = 95;
        }
        else if($request->Dm == 13){
            $kmd = 83;
        }
        else if($request->Dm == 12){
            $kmd = 79;
        }
        else if($request->Dm == 11){
            $kmd = 76;
        }
        else if($request->Dm == 10){
            $kmd = 73;
        }
        else if($request->Dm == 9){
            $kmd = 59;
        }
        else if($request->Dm == 8){
            $kmd = 53;
        }
        else if($request->Dm == 7){
            $kmd = 48;
        }
        else if($request->Dm == 6){
            $kmd = 43;
        }
        else if($request->Dm == 5){
            $kmd = 38;
        }
        else if($request->Dm == 4){
            $kmd = 33;
        }
        else if($request->Dm == 3){
            $kmd = 95;
        }
        else if($request->Dm == 2){
            $kmd = 24;
        }
        else if($request->Dm == 1){
            $kmd = 15;
        }
        else if($request->Dm == 0){
            $kmd = 3;
        }

        // Konversi Most (I)
        if($request->Im == 0){
            $kmi = 8;
        }
        else if($request->Im == 1){
            $kmi = 20;
        }
        else if($request->Im == 2){
            $kmi = 35;
        }
        else if($request->Im == 3){
            $kmi = 43;
        }
        else if($request->Im == 4){
            $kmi = 56;
        }
        else if($request->Im == 5){
            $kmi = 68;
        }
        else if($request->Im == 6){
            $kmi = 73;
        }
        else if($request->Im == 7){
            $kmi = 83;
        }
        else if($request->Im == 8){
            $kmi = 88;
        }
        else if($request->Im == 9){
            $kmi = 92;
        }
        else if($request->Im == 10){
            $kmi = 97;
        }
        else if($request->Im == 11){
            $kmi = 100;
        }
        else if($request->Im == 12){
            $kmi = 100;
        }
        else if($request->Im == 13){
            $kmi = 100;
        }
        else if($request->Im == 14){
            $kmi = 100;
        }
        else if($request->Im == 15){
            $kmi = 100;
        }
        else if($request->Im == 16){
            $kmi = 100;
        }
        else if($request->Im == 17){
            $kmi = 100;
        }

        // Konversi Most (S)

        if($request->Sm == 0){
            $kms = 11;
        }
        else if($request->Sm == 1){
            $kms = 22;
        }
        else if($request->Sm == 2){
            $kms = 30;
        }
        else if($request->Sm == 3){
            $kms = 38;
        }
        else if($request->Sm == 4){
            $kms = 45;
        }
        else if($request->Sm == 5){
            $kms = 55;
        }
        else if($request->Sm == 6){
            $kms = 61;
        }
        else if($request->Sm == 7){
            $kms = 67;
        }
        else if($request->Sm == 8){
            $kms = 74;
        }
        else if($request->Sm == 9){
            $kms = 78;
        }
        else if($request->Sm == 10){
            $kms = 85;
        }
        else if($request->Sm == 11){
            $kms = 89;
        }
        else if($request->Sm == 12){
            $kms = 97;
        }
        else if($request->Sm == 13){
            $kms = 100;
        }
        else if($request->Sm == 14){
            $kms = 100;
        }
        else if($request->Sm == 15){
            $kms = 100;
        }
        else if($request->Sm == 16){
            $kms = 100;
        }
        else if($request->Sm == 19){
            $kms = 100;
        }

        // Konversi Most (c)

        if($request->Cm == 0){
            $kmc = 0;
        }
        else if($request->Cm == 1){
            $kmc = 16;
        }
        else if($request->Cm == 2){
            $kmc = 29;
        }
        else if($request->Cm == 3){
            $kmc = 40;
        }
        else if($request->Cm == 4){
            $kmc = 54;
        }
        else if($request->Cm == 5){
            $kmc = 66;
        }
        else if($request->Cm == 6){
            $kmc = 73;
        }
        else if($request->Cm == 7){
            $kmc = 84;
        }
        else if($request->Cm == 8){
            $kmc = 89;
        }
        else if($request->Cm == 9){
            $kmc = 96;
        }
        else if($request->Cm == 10){
            $kmc = 100;
        }
        else if($request->Cm == 11){
            $kmc = 100;
        }
        else if($request->Cm == 12){
            $kmc = 100;
        }
        else if($request->Cm == 13){
            $kmc = 100;
        }
        else if($request->Cm == 14){
            $kmc = 100;
        }
        else if($request->Cm == 15){
            $kmc = 100;
        }

        // Konversi Least (D)

        if($request->Dl == 0){
            $kld = 100;
        }
        else if($request->Dl == 1){
            $kld = 87;
        }
        else if($request->Dl == 2){
            $kld = 75;
        }
        else if($request->Dl == 3){
            $kld = 67;
        }
        else if($request->Dl == 4){
            $kld = 59;
        }
        else if($request->Dl == 5){
            $kld = 53;
        }
        else if($request->Dl == 6){
            $kld = 48;
        }
        else if($request->Dl == 7){
            $kld = 42;
        }
        else if($request->Dl == 8){
            $kld = 38;
        }
        else if($request->Dl == 9){
            $kld = 31;
        }
        else if($request->Dl == 10){
            $kld = 28;
        }
        else if($request->Dl == 11){
            $kld = 25;
        }
        else if($request->Dl == 12){
            $kld = 21;
        }
        else if($request->Dl == 13){
            $kld = 15;
        }
        else if($request->Dl == 14){
            $kld = 11;
        }
        else if($request->Dl == 15){
            $kld = 8;
        }
        else if($request->Dl == 16){
            $kld = 5;
        }
        else if($request->Dl == 21){
            $kld = 1;
        }

        // Konversi Least (I);

        if($request->Il == 0){
            $kli = 100;
        }
        else if($request->Il == 1){
            $kli = 86;
        }
        else if($request->Il == 2){
            $kli = 75;
        }
        else if($request->Il == 3){
            $kli = 67;
        }
        else if($request->Il == 4){
            $kli = 55;
        }
        else if($request->Il == 5){
            $kli = 46;
        }
        else if($request->Il == 6){
            $kli = 37;
        }
        else if($request->Il == 7){
            $kli = 28;
        }
        else if($request->Il == 8){
            $kli = 22;
        }
        else if($request->Il == 9){
            $kli = 15;
        }
        else if($request->Il == 10){
            $kli = 10;
        }
        else if($request->Il == 11){
            $kli = 7;
        }
        else if($request->Il == 19){
            $kli = 0;
        }

        // Konversi Least (S)

        if($request->Sl == 0){
            $kls = 100;
        }
        else if($request->Sl == 1){
            $kls = 96;
        }
        else if($request->Sl == 2){
            $kls = 85;
        }
        else if($request->Sl == 3){
            $kls = 75;
        }
        else if($request->Sl == 4){
            $kls = 67;
        }
        else if($request->Sl == 5){
            $kls = 59;
        }
        else if($request->Sl == 6){
            $kls = 53;
        }
        else if($request->Sl == 7){
            $kls = 42;
        }
        else if($request->Sl == 8){
            $kls = 37;
        }
        else if($request->Sl == 9){
            $kls = 29;
        }
        else if($request->Sl == 10){
            $kls = 23;
        }
        else if($request->Sl == 11){
            $kls = 15;
        }
        else if($request->Sl == 12){
            $kls = 8;
        }
        else if($request->Sl == 13){
            $kls = 4;
        }
        else if($request->Sl == 19){
            $kls = 1;
        }

        // Konversi Least (C)

        if($request->Cl == 0){
            $klc = 100;
        }
        else if($request->Cl == 1){
            $klc = 95;
        }
        else if($request->Cl == 2){
            $klc = 82;
        }
        else if($request->Cl == 3){
            $klc = 74;
        }
        else if($request->Cl == 4){
            $klc = 65;
        }
        else if($request->Cl == 5){
            $klc = 58;
        }
        else if($request->Cl == 6){
            $klc = 52;
        }
        else if($request->Cl == 7){
            $klc = 47;
        }
        else if($request->Cl == 8){
            $klc = 39;
        }
        else if($request->Cl == 9){
            $klc = 33;
        }
        else if($request->Cl == 10){
            $klc = 23;
        }
        else if($request->Cl == 11){
            $klc = 14;
        }
        else if($request->Cl == 12){
            $klc = 7;
        }
        else if($request->Cl == 13){
            $klc = 3;
        }
        else if($request->Cl == 16){
            $klc = 0;
        }

        $data = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl,
            'kmd' => $kmd,
            'kmi' => $kmi,
            'kms' => $kms,
            'kmc' => $kmc,
            'kld' => $kld,
            'kli' => $kli,
            'kls' => $kls,
            'klc' => $klc
        );

        $param = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl
        );

        Musertest::create($param);

        return view('page/postest', $data);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
}

class Adminsoal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = Mnomor::all();
        $soal = Msoal::all();

        $data = array(
            'no' => $nomor,
            'pilihan' => $soal
        );
        return view('admin/soal', $data);
    }

    public function coba(){
        $data = [
            ['soal'=>'Coder 1', 'key'=> 'D'],
            ['soal'=>'Coder 2', 'key'=> 'I'],
            ['soal'=>'Coder 2', 'key'=> 'S'],
            ['soal'=>'Coder 2', 'key'=> 'C'],
            ['soal'=>'Coder 2', 'key'=> '*'],
        ];

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soal = [
            ['pilihan' => $request->pilihan1, 'keym' => $request->keym1, 'keyl' => $request->keyl1],
            ['pilihan' => $request->pilihan2, 'keym' => $request->keym2, 'keyl' => $request->keyl2],
            ['pilihan' => $request->pilihan3, 'keym' => $request->keym3, 'keyl' => $request->keyl3],
            ['pilihan' => $request->pilihan4, 'keym' => $request->keym4, 'keyl' => $request->keyl4],
        ];

        $json = json_encode($soal);

        Msoal::create(['nomor' => $request->nomor, 'soal' => $json]);

        return redirect('/disc/soal')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function show(Msoal $msoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Msoal $msoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msoal $msoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        Msoal::where(['nomor' => $key])->delete();
        return redirect('/disc/soal')->with('status', 'Data berhasil dihapus');
    }
}

class Adminusers extends Controller
{
    public function index(){
    	$users = Musers::get();
    	$data = array(
			'id' => $id,
            'name' => $name,
			'email' => $email,
            'email_verified_at' => $email_verified_at,
            'password' => $password,
			'remember_token' => $remember_token,
			'created_at' => $created_at,
			'updated_at' => $update_at,

        );

    	return view('admin/users', $data);
    }
    
/**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
	// method untuk menampilkan view form tambah users
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
    }
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	// method untuk insert data ke table users
	public function store(Request $request)
	{
		// insert data ke table users
		DB::table('users')->insert([
			'name' => $request->name,
			'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
			'remember_token' => $request->remember_token,
			'created_at' => $request->created_at,
			'updated_at' => $request->update_at,
        ]);
        
        $json = json_encode($users);

        Musers::create(['id' => $request->id, 'users' => $json]);
		// alihkan halaman ke halaman users
		return redirect('/disc/users')->with('status', 'Data berhasil ditambahkan');
 
	}
 /**
     * Display the specified resource.
     *
     * @param  \App\Musers  $msoal
     * @return \Illuminate\Http\Response
     */
    public function show(Musers $musers)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Musers  $msoal
     * @return \Illuminate\Http\Response
     */

	// method untuk edit data users
	public function edit($id)
	{
		// mengambil data users berdasarkan id yang dipilih
		$users = DB::table('users')->where('id',$id)->get();
		// passing data users yang didapat ke view edit.blade.php
		return view('edit',['users' => $users]);
 
	}
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Musers  $msoal
     * @return \Illuminate\Http\Response
     */
	// update data users
	public function update(Request $request, Musers $musers)
	{
		// update data users
		DB::table('users')->where('id',$request->id)->update([
			'name' => $request->name,
			'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
			'remember_token' => $request->remember_token,
			'created_at' => $request->created_at,
			'updated_at' => $request->update_at,
		]);
		// alihkan halaman ke halaman users
		return redirect('/disc/users')->with('status', 'Data berhasil diupdate');
	}
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Musers  $msoal
     * @return \Illuminate\Http\Response
     */
	// method untuk hapus data users
	public function hapus($id)
	{
		// menghapus data users berdasarkan id yang dipilih
		DB::table('users')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman users
		return redirect('/disc/users')->with('status', 'Data berhasil dihapus');
	}
}

/*/
     * Remove the specified resource from storage.
     *
     * @param  \App\Musers  $msoal
     * @return \Illuminate\Http\Response
     */
	/*
    public function destroy($id)
    {
        Msoal::where(['id' => $id])->delete();
        return redirect('/disc/users')->with('status', 'Data berhasil dihapus');
    }
}
*/




// https://vituspolikarpus.wordpress.com/2012/05/13/disc-dominance-influence-steadiness-complience/
