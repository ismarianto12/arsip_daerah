<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmdisposisi;
use Illuminate\Support\Carbon;
use DataTables;


class TmdisposisiController extends Controller
{
    /**
     * Display a listing of the resource.ms
     *
     * @return \Illuminate\Http\Response
     */
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


    public function api()
    {
        $data  = Tmdisposisi::with('user:username', function ($table) {
            // $f = $table->first();
            // dd($f);
            // if ($f->keterangan == 1) {
            //     $table->join('tmsuratmasuk', 'id', '=', 'tmsuratmasuk_id');
            // } else {
            //     $table->join('tmsuratkeluar', 'id', '=', 'tmsuratmasuk_id');
            // }
        })
            ->get();
        return DataTable::of($data)
            ->editColumn('edit', function () {
                return '<a href="" class="btn btn-primary">Edit</a>';
            })
            ->editColumn('hapus', function () {
                return '<a href="" class="btn btn-primary">Hapus</a>';
            })
            ->rawColum(['edit', 'hapus'])
            ->toJson();
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
            'tujuan' => 'required',
            'isi_disposisi' => 'required',
            'sifat' => 'required',
            'batas_waktu' => 'required',
            'catatan' => 'required',
            'tmsurat_id' => 'required',
            'keterangan' => 'required',
            'surat_masuk' => 'required',
            'surat_keluar' => 'required',
            'user_id' => 'required'
        ]);
        try {

            $f = new Tmdisposisi;
            $f->tujuan = $this->request->tujuan;
            $f->isi_disposisi = $this->request->isi_disposisi;
            $f->sifat = $this->request->sifat;
            $f->batas_waktu = $this->request->batas_waktu;
            $f->catatan = $this->request->catatan;
            $f->tmsurat_id = $this->request->tmsurat_id;
            $f->keterangan = $this->request->keterangan;
            $f->surat_masuk = $this->request->surat_masuk;
            $f->surat_keluar = $this->request->surat_keluar;
            $f->user_id = $this->request->user_id;
            $f->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        } catch (\Throwable $th) {

            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
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
    public function update(Request $request, $id)
    {
        //
        $this->request->validate([
            'tujuan' => 'required',
            'isi_disposisi' => 'required',
            'sifat' => 'required',
            'batas_waktu' => 'required',
            'catatan' => 'required',
            'tmsurat_id' => 'required',
            'keterangan' => 'required',
            'surat_masuk' => 'required',
            'surat_keluar' => 'required',
            'user_id' => 'required'
        ]);
        try {

            $f = new Tmdisposisi;
            $f->tujuan = $this->request->tujuan;
            $f->isi_disposisi = $this->request->isi_disposisi;
            $f->sifat = $this->request->sifat;
            $f->batas_waktu = $this->request->batas_waktu;
            $f->catatan = $this->request->catatan;
            $f->tmsurat_id = $this->request->tmsurat_id;
            $f->keterangan = $this->request->keterangan;
            $f->surat_masuk = $this->request->surat_masuk;
            $f->surat_keluar = $this->request->surat_keluar;
            $f->user_id = $this->request->user_id;
            $f->find($id)->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di update'
            ]);
        } catch (\Throwable $th) {

            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di update'
            ]);
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
        try {

            Tmdisposisi::find($id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        } catch (\Tmdisposisi $tmdisposisi) {
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        }
    }
}
