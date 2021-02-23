<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmsuratkeluar;
use League\Flysystem\File;
use Illuminate\Support\Carbon;

class TmsuratkeluarController extends Controller
{
    protected $request;
    protected $view;
    protected $route;

    function __construct(Request $request)
    {
        // $this->middleware('auth');
        $this->route = '.master.arsip';
        $this->view  = '.jabatan';
        $this->request = $request;
    }


    public function index()
    {
        //
        $judul = 'Surat keluar';
        return view($this->view . '.index', compact('judul'));
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
    public function store()
    {
        $this->request->validate([
            'trsifatsurat_id' => 'required',
            'no_agenda' => 'required',
            'tujuan' => 'required',
            'no_surat' => 'required',
            'isi' => 'required',
            'kode' => 'required',
            'status_baca' => 'required',
            'tgl_surat' => 'required',
            'tgl_catat' => 'required',
            'file' => 'required',
            'keterangan' => 'required',
            'user_id' => 'required'
        ]);
        try {
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

            $format = Carbon::now()->format('y-m-d');
            $file->move(public_path('doc/suratmasuk'), 'Surat_keluar_' . $format . '.' . $file->getClientOriginalExtension());

            $f = new Tmsuratkeluar();
            $f->trsifatsurat_id = $this->request->trsifatsurat_id;
            $f->no_agenda = $this->request->no_agenda;
            $f->tujuan = $this->request->tujuan;
            $f->no_surat = $this->request->no_surat;
            $f->isi = $this->request->isi;
            $f->kode = $this->request->kode;
            $f->status_baca = $this->request->status_baca;
            $f->tgl_surat = $this->request->tgl_surat;
            $f->tgl_catat = $this->request->tgl_catat;
            $f->file = $file->getClientOriginalName();
            $f->keterangan = $this->request->keterangan;
            $f->user_id = $this->request->user_id;
            $f->save();
            return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
        } catch (\Tmsuratkeluar $tmsuratkeluar) {
            //throw $th;
            return response()->json(['status' => 1, 'msg' => 'data gagal di tambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->request->validate([
            'trsifatsurat_id' => 'required',
            'no_agenda' => 'required',
            'tujuan' => 'required',
            'no_surat' => 'required',
            'isi' => 'required',
            'kode' => 'required',
            'status_baca' => 'required',
            'tgl_surat' => 'required',
            'tgl_catat' => 'required',
            'file' => 'required',
            'keterangan' => 'required',
            'user_id' => 'required'
        ]);
        try {
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

            $format = Carbon::now()->format('y-m-d');
            $file->move(public_path('doc/suratmasuk'), 'Surat_keluar_' . $format . '.' . $file->getClientOriginalExtension());

            $f = new Tmsuratkeluar();
            $f->trsifatsurat_id = $this->request->trsifatsurat_id;
            $f->no_agenda = $this->request->no_agenda;
            $f->tujuan = $this->request->tujuan;
            $f->no_surat = $this->request->no_surat;
            $f->isi = $this->request->isi;
            $f->kode = $this->request->kode;
            $f->status_baca = $this->request->status_baca;
            $f->tgl_surat = $this->request->tgl_surat;
            $f->tgl_catat = $this->request->tgl_catat;
            $f->file = $file->getClientOriginalName();
            $f->keterangan = $this->request->keterangan;
            $f->user_id = $this->request->user_id;
            $f->fin($id)->save();
            return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
        } catch (\Tmsuratkeluar $tmsuratkeluar) {
            //throw $th;
            return response()->json(['status' => 1, 'msg' => 'data gagal di tambahkan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $f = Tmsuratkeluar::findOrFail($id);
        $file = public_path('doc/suratmasuk') . '/' . $f->file;
        if (file_exists($file)) {
            @unlink($file);
        }
        try {
            $f->delete();
            return response()->json(['status' => 1, 'msg' => 'data berhasil di hapus']);
        } catch (\Tmsuratkeluar $tmsuratkeluar) {
            //throw $th;
            return response()->json(['status' => 1, 'msg' => 'data gagal di hapus']);
        }
    }
}
