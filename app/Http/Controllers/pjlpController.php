<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class pjlpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pjlp')
                    ->get();

        return view('admin.pjlp.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pjlp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pjlp')
            ->insert([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_hp' => $request->no_hp
                // 'photo' => $request->photo
            ]);
        
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('pjlp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('pjlp')
                    ->where('id_pjlp',$id)
                    ->get();

        return view('admin.pjlp.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('pjlp')
                    ->where('id_pjlp',$id)
                    ->get();

        return view('admin.pjlp.edit',compact('data'));
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
        $data = DB::table('pjlp')
        ->where('id_pjlp',$id)
        ->select('id_pjlp','nik','nama','jabatan','no_hp','photo')
        ->update([
            'id_pjlp' => $request->id_pjlp,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'photo' =>$request->hidden_photo
        ]);
    
        Session::flash('message', 'Berhasil diupdate!');
        Session::flash('message_type', 'warning');
        return redirect()->route('pjlp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pjlp')
            ->where('id_pjlp',$id)
            ->delete();
        
        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'danger');
        return redirect()->route('pjlp.index');
    }
}
