<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmarsip;
use App\Models\TmpegawaiModel;
use Illuminate\Support\Carbon;
use App\Models\Trjenisarsip;
use App\Models\Tmsatuan;

class TmarsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $request;
    protected $view;
    protected $route;

    public function __construct(Request $request)
    {
        // $this->middleware('auth');
        $this->route = '.master.arsip';
        $this->view  = '.tmarsip';
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $title  = 'Data Arsip';
        return view($this->view . '.index', compact('title'));
    }

    public function api()
    {
        $data = Tmarsip::with([
            'trjenisarsip',
            'tmpegawai',
            'tmasatuan',
            'tmlokasiarsip',
            'user'
        ])->get();
        return \DataTables::of($data)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tmpegawai = TmpegawaiModel::get();
        $jenis     = Trjenisarsip::get();
        $satuan    =  Tmsatuan::get();
        $title     = 'tambah data arsip';
        return view($this->view . '.form_add', compact('title', 'tmpegawai', 'jenis','satuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tmarsip $tmarsip)
    {
        $rest  =  $this->request->validate([
            'trjenisarip_id' => 'required',
            'tmpegawai_id' => 'required',
            'nama_arsip' => 'required',
            'file_arsip' => 'required',
            'jumlah' => 'required',
            'tmsatuan_id' => 'required',
            'tmlokasiarsip_id' => 'required',
            'ket_isi' => 'required',
            'permision' => 'required',
            'user_id' => 'required'
        ]);
        try {
            $file = $this->request->file;
            $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();

            $format  =  Carbon::now()->format('y-m-d');
            $file_upload =  'arsip_data' . $format . '.' . $ext;

            $file->move(public_path('doc/arsip') . $file_upload);

            $f = new Tmarsip;
            $f->trjenisarip_id = $this->request->trjenisarip_id;
            $f->tmpegawai_id = $this->request->tmpegawai_id;
            $f->nama_arsip = $this->request->nama_arsip;
            $f->file_arsip = $file_upload;
            $f->jumlah = $this->request->jumlah;
            $f->tmsatuan_id = $this->request->tmsatuan_id;
            $f->tmlokasiarsip_id = $this->request->tmlokasiarsip_id;
            $f->ket_isi = $this->request->ket_isi;
            $f->permision = $this->request->permision;
            $f->user_id = $this->request->user_id;
            $f->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        } catch (\Tmarsip $tmarsip) {
            //throw $th;
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di tambahkan'
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
    public function update(Tmarsip $tmarsip, $id)
    {
        //
        $par = $this->request->validate([

            'trjenisarip_id' => 'required',
            'tmpegawai_id' => 'required',
            'nama_arsip' => 'required',
            'jumlah' => 'required',
            'tmsatuan_id' => 'required',
            'tmlokasiarsip_id' => 'required',
            'ket_isi' => 'required',
            'permision' => 'required',
            'user_id' => 'required'
        ]);
        try {
            // get init class 
            $f = new Tmarsip;
            if ($this->request->file == '') {
                $file_upload = '';
                $file = public_path('doc/suratmasuk') . '/' . $f->first()->file;
                if (file_exists($file)) {
                    @unlink($file);
                }
            } else {
                $file = $this->request->file;
                $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();

                $format  =  Carbon::now()->format('y-m-d');
                $file_upload =  'arsip_data' . $format . '.' . $ext;

                $file->move(public_path('doc/arsip') . $file_upload);
            }
            $f->trjenisarip_id = $this->request->trjenisarip_id;
            $f->tmpegawai_id = $this->request->tmpegawai_id;
            $f->nama_arsip = $this->request->nama_arsip;
            $f->file_arsip = $file_upload;
            $f->jumlah = $this->request->jumlah;
            $f->tmsatuan_id = $this->request->tmsatuan_id;
            $f->tmlokasiarsip_id = $this->request->tmlokasiarsip_id;
            $f->ket_isi = $this->request->ket_isi;
            $f->permision = $this->request->permision;
            $f->user_id = $this->request->user_id;
            $f->find($id)->save();

            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di update'
            ]);
        } catch (\Tmarsip $tmarsip) {
            //throw $th;
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
    public function destroy(Tmarsip $tmarsip, $id)
    {
        try {
            $tmarsip::find($id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di hapus'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di hapus tidak ditemukan paramter yang benar'
            ]);
        }
    }
}
