<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmsatuan;
use DataTables;

class TmsatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;
    protected $view;
    protected $route;

    public function __construct(Request $request)
    {
        // $this->middleware('auth');
        $this->route = '.master.satuan';
        $this->view  = '.tmsatuan';
        $this->request = $request;
    }
    public function index()
    {
        $title = 'data list satuan';
        return view($this->view . '.index', compact('title'));
    }
    function api()
    {
        $data = Tmsatuan::with(['user:username'])->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('usercreate', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('datecreated', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('action', function ($p) {
                return  '<a href="" class="btn btn-primary btn-xs" id="edit" data-id="' . $p->id . '">Edit </a> <a href=""  class="btn btn-danger btn-xs" id="delete"  data-id="' . $p->id . '">Delete </a>';
            }, true)
            ->rawColumns(['action', 'usercreate', 'id'])
            ->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view . '.form_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->request->validate([
            'nama_satuan' => 'required',
            'keterangan' => 'required',
        ]);
        try {

            $f  = new Tmsatuan;
            $f->nama_satuan = $this->request->nama_satuan;
            $f->keterangan = $this->request->keterangan;
            $f->user_id = 1;
            $f->save();
            
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di simpan'
            ]);
        } catch (\Tmsatuan $tmsatuan) {
            //throw $th; 
            return response()->json([
                'status' => 2,
                'msg' => 'data berhasil di simpan'
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
        $data = Tmsatuan::findOrFail($id);
        return view($this->view . 'detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tmsatuan::findOrFail($id);
        return view($this->view . 'form_add', compact('data'));
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
        $this->request->validate([
            'nama_satuan' => 'required',
            'keterangan' => 'required',
            'user_id' => 'required'
        ]);
        try {
            Tmsatuan::find($id)->save($this->request->all());
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di simpan'
            ]);
        } catch (\Tmsatuan $tmsatuan) {
            //throw $th; 
            return response()->json([
                'status' => 2,
                'msg' => 'data berhasil di simpan'
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
            Tmsatuan::find($id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di hapus'
            ]);
        } catch (\Tmsatuan $tmsatuan) {
            //throw $th; 
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di hapus'
            ]);
        }
    }
}
