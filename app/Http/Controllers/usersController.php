<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class usersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
    	// mengambil data dari table users
		$users = DB::table('users')->get();
 
    	// mengirim data users ke view index
		return view('admin/datamaster', $users);
 
	}
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	// method untuk menampilkan view form tambah users
	public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	// method untuk insert data ke table users
	public function store(Request $request, Musers $musers)
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
		return redirect('/disc/datamaster/tambah')->with('status', 'Data berhasil ditambahkan');
 
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
     * @param  \App\Musers  $musers
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
		return redirect('/disc/datamaster/edit')->with('status', 'Data berhasil diupdate');
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
		return redirect('/disc/datamaster/delete')->with('status', 'Data berhasil dihapus');
	}
}