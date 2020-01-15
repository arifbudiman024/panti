<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class asnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('asn')
                ->get();

        return view('admin.asn.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('asn')
            ->insert([
                'nip' => $request->nip,
                'nrk' => $request->nrk,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'golongan' => $request->golongan
            ]);
        
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('asn.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('asn')
                ->where('id_asn',$id)
                ->get();

        return view('admin.asn.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('asn')
                    ->where('id_asn',$id)
                    ->get();

        return view('admin.asn.edit',compact('data'));
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
        $data = DB::table('asn')
            ->where('id_asn',$id)
            ->select('id_asn','nip','nrk','nama','jabatan','golongan','photo')
            ->update([
                'id_asn' => $request->id_asn,
                'nip' => $request->nip,
                'nrk' => $request->nrk,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'golongan' => $request->golongan,
                'photo' =>$request->hidden_photo
            ]);
        
        Session::flash('message', 'Berhasil diupdate!');
        Session::flash('message_type', 'warning');
        return redirect()->route('asn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('asn')
            ->where('id_asn',$id)
            ->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'danger');
        return redirect()->route('asn.index');
    }
}
