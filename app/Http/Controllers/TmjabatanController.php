<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tmjabatan;
use DataTables;

class TmjabatanController extends Controller
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
        $this->route = '.master.arsip';
        $this->view  = '.tmjabatan';
        $this->request = $request;
    }

    public function index()
    { 
        $title = 'Data jabatan';
        return view($this->view . '.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'tambah data jabatan';
        $nama = '';
        return view($this->view . '.form_add', compact('title'));
    }

    public function api()
    {
        $data = Tmjabatan::with(['user'])->get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $this->request->validate([
            'nama' => 'required',
        ]);
        try {
            $f =  new Tmjabatan;
            $f->nama = $this->request->nama;
            $f->create_by = 1;
            $f->status = 1;
            $f->save();

            return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di tambah']);
        } catch (\Tmjabatan $tmjabatan) {
            return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di tambah']);
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
        $data = Tmjabatan::findOrFail($id);
        return view($this->view . '.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tmjabatan::findOrFail($id);
        $nama = $data['nama'];
        return view($this->view . '.form_edit', compact('data', 'nama'));
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
            'nama' => 'required',
        ]);
        try {
            Tmjabatan::find($id)->save($this->request->all());
            return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di update']);
        } catch (\Tmjabatan $tmjabatan) {
            return response()->json(['status' => 1, 'msg' => 'data jabatan gagal di update']);
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
            Tmjabatan::find($id)->delete();
            return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di hapus']);
        } catch (\Tmjabatan $tmjabatan) {
            //throw $th;
            Tmjabatan::create($this->reques->all());
            return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di tambah']);
        }
    }
}
