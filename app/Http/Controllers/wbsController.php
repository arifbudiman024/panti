<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class wbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('wbs')
                    ->get();

        return view('admin.wbs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('wbs')
            ->insert([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat
                // 'photo' => $request->photo
            ]);
        
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('wbs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('wbs')
                    ->where('id_wbs',$id)
                    ->get();

        return view('admin.wbs.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('wbs')
                    ->where('id_wbs',$id)
                    ->get();

        return view('admin.wbs.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DB::table('wbs')
                    ->where('id_wbs',$id)
                    ->select('id_wbs','nama','tempat_lahir','tanggal_lahir','agama','alamat','photo')
                    ->update([
                        'id_wbs' => $request->id_wbs,
                        'nama' => $request->nama,
                        'tempat_lahir' => $request->tempat_lahir,
                        'tanggal_lahir' => $request->tanggal_lahir,
                        'agama' => $request->agama,
                        'alamat' => $request->alamat,
                        'photo' =>$request->hidden_photo
                    ]);
    
        Session::flash('message', 'Berhasil diupdate!');
        Session::flash('message_type', 'warning');
        return redirect()->route('wbs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('wbs')
            ->where('id_wbs',$id)
            ->delete();
        
        session::flash('message', 'Berhasil dihapus!');
        session::flash('message_type', 'danger');
        return redirect()->route('wbs.index');
    }
}
