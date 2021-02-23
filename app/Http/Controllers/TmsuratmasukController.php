<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmsuratmasuk;
use Illuminate\Support\Carbon;

class TmsuratmasukController extends Controller
{

    protected $request;
    protected $view;
    protected $route;

    function __construct(Request $request)
    {
        // $this->middleware('auth');
        $this->route = '.master.suratmasuk';
        $this->view  = '.suratmasuk';
        $this->request = $request;
    }


    public function index()
    {
        //
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

        $this->request->validate([
            'no_agenda' => 'required',
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'isi' => 'required',
            'kode' => 'required',
            'indeks' => 'required',
            'tgl_surat' => 'required',
            'tgl_diterima' => 'required',
            'file' => 'required',
            'keterangan' => 'required',
            'tmsifatsurat_id' => 'required',
            'user_id' => 'required',
            'disposisi' => 'required'
        ]);

        try {
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

            $format = Carbon::now()->format('y-m-d');
            $file->move(public_path('doc/suratmasuk'), 'Surat_masuk_' . $format . '.' . $file->getClientOriginalExtension());


            $f = new Tmsuratmasuk;
            $f->no_agenda = $this->request->no_agenda;
            $f->no_surat = $this->request->no_surat;
            $f->asal_surat = $this->request->asal_surat;
            $f->isi = $this->request->isi;
            $f->kode = $this->request->kode;
            $f->indeks = $this->request->indeks;
            $f->tgl_surat = $this->request->tgl_surat;
            $f->tgl_diterima = $this->request->tgl_diterima;
            $f->file = $this->request->file;
            $f->keterangan = $this->request->keterangan;
            $f->tmsifatsurat_id = $this->request->tmsifatsurat_id;
            $f->user_id = $this->request->user_id;
            $f->disposisi = $this->request->disposisi;
            $f->save();
            return response()->json(['status' => 1, 'msg' => 'data berhasil datambahkan']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 1, 'msg' => 'data berhasil datambahkan']);
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
            'no_agenda' => 'required',
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'isi' => 'required',
            'kode' => 'required',
            'indeks' => 'required',
            'tgl_surat' => 'required',
            'tgl_diterima' => 'required',
            'file' => 'required',
            'keterangan' => 'required',
            'tmsifatsurat_id' => 'required',
            'user_id' => 'required',
            'disposisi' => 'required'
        ]);

        try {
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

            $format = Carbon::now()->format('y-m-d');
            $file->move(public_path('doc/suratmasuk'), 'Surat_masuk_' . $format . '.' . $file->getClientOriginalExtension());


            $f = new Tmsuratmasuk;
            $f->no_agenda = $this->request->no_agenda;
            $f->no_surat = $this->request->no_surat;
            $f->asal_surat = $this->request->asal_surat;
            $f->isi = $this->request->isi;
            $f->kode = $this->request->kode;
            $f->indeks = $this->request->indeks;
            $f->tgl_surat = $this->request->tgl_surat;
            $f->tgl_diterima = $this->request->tgl_diterima;
            $f->file = $this->request->file;
            $f->keterangan = $this->request->keterangan;
            $f->tmsifatsurat_id = $this->request->tmsifatsurat_id;
            $f->user_id = $this->request->user_id;
            $f->disposisi = $this->request->disposisi;
            $f->find($id)->save();
            return response()->json(['status' => 1, 'msg' => 'data berhasil datambahkan']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 1, 'msg' => 'data berhasil datambahkan']);
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
        $f = Tmsuratmasuk::findOrFail($id);
        $file = public_path('doc/suratmasuk') . '/' . $f->file;
        if (file_exists($file)) {
            unlink($file);
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
