<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TmpegawaiModel;
use PhpParser\Node\Stmt\TryCatch;
use DataTables;
use Illuminate\Support\Carbon;
use App\Models\Tmjabatan; 

class TmpegawaiController extends Controller
{
    protected $request;
    protected $view;
    protected $route;
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->view = '.tmpegawai';
    }


    public function index()
    {
        //
        $title = 'Data Pegawai';
        return view($this->view . '.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function api()
    {
        $data = TmpegawaiModel::with(['tmjabatan', 'user'])->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('usercreate', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('action', function ($p) {
                return  '<a href="" class="btn btn-primary btn-xs" id="edit" data-id="' . $p->id . '">Edit </a> <a href=""  class="btn btn-danger btn-xs" id="delete"  data-id="' . $p->id . '">Delete </a>';
            }, true)

            ->addIndexColumn()
            ->rawColumns(['usercreate', 'action', 'id'])
            ->toJson();
    }
    public function create()
    {
        $title = 'Tambah data pegawai';
        $jabatan = Tmjabatan::get();
        return view($this->view . '.form_add', compact('title', 'jabatan'));
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
            'nip' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'golongan' => 'required',
            'golongan_tanggal' => 'required',
            'tmjabatan_id' => 'required',
            'jabatan_tanggal' => 'required',
            'kerja_tahun' => 'required',
            'kerja_bulan' => 'required',
            'pendidikan' => 'required',
            'pendidikan_lulus' => 'required',
            'pendidikan_ijazah' => 'required',
            'catatn_mutasi' => 'required',
            'keterangan' => 'required',
        ]);
        try {

            $f = new TmpegawaiModel;
            $f->nip = $this->request->nip;
            $f->nama = $this->request->nama;
            $f->no_hp = $this->request->no_hp;
            $f->alamat = $this->request->alamat;
            $f->jk = $this->request->jk;
            $f->agama = $this->request->agama;
            $f->tanggal_lahir = $this->request->tanggal_lahir;
            $f->tempat_lahir = $this->request->tempat_lahir;
            $f->golongan = $this->request->golongan;
            $f->golongan_tanggal = $this->request->golongan_tanggal;
            $f->tmjabatan_id = $this->request->tmjabatan_id;
            $f->jabatan_tanggal = $this->request->jabatan_tanggal;
            $f->kerja_tahun = $this->request->kerja_tahun;
            $f->kerja_bulan = $this->request->kerja_bulan;
            $f->pendidikan = $this->request->pendidikan;
            $f->pendidikan_lulus = $this->request->pendidikan_lulus;
            $f->pendidikan_ijazah = $this->request->pendidikan_ijazah;
            $f->catatn_mutasi = $this->request->catatn_mutasi;
            $f->keterangan = $this->request->keterangan;
            $f->user_id = $this->request->user_id;
            $f->status_delete = $this->request->status_delete;
            $f->user_id = 1;
            $f->status_delete = 1;

            $f->save();

            return response()->json([
                'status' => 2,
                'msg' => 'data berhsil di tambahkan'
            ]);
        } catch (TmpegawaiModel $tmpegawaiModel) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di tamnbahkan'
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
        $data = TmpegawaiModel::find($id);
        if ($data == '') return abort(404, 'Maaf data pegawawai  yang di pilih tidak ada.');
        $id = $id;
        $nip = $data->nip;
        $nama = $data->nama;
        $no_hp = $data->no_hp;
        $alamat = $data->alamat;
        $jk = $data->jk;
        $agama = $data->agama;
        $tanggal_lahir = $data->tanggal_lahir;
        $tempat_lahir = $data->tempat_lahir;
        $golongan = $data->golongan;
        $golongan_tanggal = $data->golongan_tanggal;
        $tmjabatan_id = $data->tmjabatan_id;
        $jabatan_tanggal = $data->jabatan_tanggal;
        $kerja_tahun = $data->kerja_tahun;
        $kerja_bulan = $data->kerja_bulan;
        $pendidikan = $data->pendidikan;
        $pendidikan_lulus = $data->pendidikan_lulus;
        $pendidikan_ijazah = $data->pendidikan_ijazah;
        $catatn_mutasi = $data->catatn_mutasi;
        $keterangan = $data->keterangan;
        $user_id = $data->user_id;
        $status_delete = $data->status_delete;
        $jabatan = Tmjabatan::get();

        return view($this->view . '.form_edit', compact(
            'id',
            'nip',
            'nama',
            'jabatan',
            'no_hp',
            'alamat',
            'jk',
            'agama',
            'tanggal_lahir',
            'tempat_lahir',
            'golongan',
            'golongan_tanggal',
            'tmjabatan_id',
            'jabatan_tanggal',
            'kerja_tahun',
            'kerja_bulan',
            'pendidikan',
            'pendidikan_lulus',
            'pendidikan_ijazah',
            'catatn_mutasi',
            'keterangan',
            'user_id',
            'status_delete'
        ));
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
        //       
        $this->request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'golongan' => 'required',
            'golongan_tanggal' => 'required',
            'tmjabatan_id' => 'required',
            'jabatan_tanggal' => 'required',
            'kerja_tahun' => 'required',
            'kerja_bulan' => 'required',
            'pendidikan' => 'required',
            'pendidikan_lulus' => 'required',
            'pendidikan_ijazah' => 'required',
            'catatn_mutasi' => 'required',
            'keterangan' => 'required',
        ]);
        try {
            $f = new TmpegawaiModel;
            $f->nip = $this->request->nip;
            $f->nama = $this->request->nama;
            $f->no_hp = $this->request->no_hp;
            $f->alamat = $this->request->alamat;
            $f->jk = $this->request->jk;
            $f->agama = $this->request->agama;
            $f->tanggal_lahir = $this->request->tanggal_lahir;
            $f->tempat_lahir = $this->request->tempat_lahir;
            $f->golongan = $this->request->golongan;
            $f->golongan_tanggal = $this->request->golongan_tanggal;
            $f->tmjabatan_id = $this->request->tmjabatan_id;
            $f->jabatan_tanggal = $this->request->jabatan_tanggal;
            $f->kerja_tahun = $this->request->kerja_tahun;
            $f->kerja_bulan = $this->request->kerja_bulan;
            $f->pendidikan = $this->request->pendidikan;
            $f->pendidikan_lulus = $this->request->pendidikan_lulus;
            $f->pendidikan_ijazah = $this->request->pendidikan_ijazah;
            $f->catatn_mutasi = $this->request->catatn_mutasi;
            $f->keterangan = $this->request->keterangan;
            $f->user_id = $this->request->user_id;
            $f->status_delete = $this->request->status_delete;
            $f->user_id = 1;
            $f->status_delete = 1;
            $f->find($id)->save();

            return response()->json([
                'status' => 2,
                'msg' => 'data berhsil di update'
            ]);
        } catch (TmpegawaiModel $tmpegawaiModel) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di update'
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
            TmpegawaiModel::find($id)->delete();
            return response()->json([
                'status' => 2,
                'msg' => 'data berhasil di hapus'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di hapus'
            ]);
        }
    }
}
