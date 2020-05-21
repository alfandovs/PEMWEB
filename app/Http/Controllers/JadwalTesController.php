<?php

namespace App\Http\Controllers;

use App\Mjadwal;
use Illuminate\Http\Request;

class JadwalTesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$jadwal = Mjadwal::get();
    	$data = array(
			'jadwal' => $jadwal
        );

    	return view('admin/jadwal', $data);
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
        // insert data ke table users
        $jadwal = [
            ['id' => $request->id],
            ['hari' => $request->hari],
            ['jam' => $request->jam],
        ];
        $json = json_encode($jadwal);

        Mjadwal::create(['id' => $request->id, 'jadwal' => $json]);
		// alihkan halaman ke halaman users
		return redirect('/disc/jadwal')->with('status', 'Data berhasil ditambahkan');
 
	}

    /**
     * Display the specified resource.
     *
     * @param  Mjadwal  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mjadwal $mjadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Mjadwal  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Mjadwal  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Mjadwal  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        Mjadwal::where(['id' => $key])->delete();
        return redirect('/disc/jadwal')->with('status', 'Data berhasil dihapus');
    }
}
