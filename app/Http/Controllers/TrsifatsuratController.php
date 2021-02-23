<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trsifatsurat;
use DataTables;
use Illuminate\Support\Facades\Auth;

class TrsifatsuratController extends Controller
{
    protected $request;
    protected $view;
    protected $route;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->view    = '.trsifatsurat';
    }
    public function index()
    {
        $title = 'Sifat surat';
        return view($this->view . '.index', compact('title'));
    }

    public function api(Trsifatsurat $trsifatsurat)
    {
        $data = $trsifatsurat::with('user:username')->get();
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Tambah surat';
        return view($this->view . '.form_add', compact('title'));
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
            'nama' => 'required'
        ]);
        try {
            $passed = array_merge(
                [
                    'user_id' => Auth::user()->id
                ],
                $this->request->all()
            );
            Trsifatsurat::create($passed);
            return response()->json(
                [
                    'status' => 1,
                    'msg' => 'data sifat surat berhasil di tambahkan'
                ]
            );
        } catch (\Trsifatsurat $trsifatsurat) {
            //throw $th;
            return response()->json(
                [
                    'status' => 2,
                    'msg' => 'data gagal surat berhasil di tambahkan'
                ]
            );
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
        $title = 'Tambah surat';
        return view($this->view . '.form_detail', compact('title'));
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
        $data         = Trsifatsurat::findOrfail($id);
        $sifatsurat   = $data['nama'];
        $title        = 'Edit surat';
        return view($this->view . '.form_edit', compact('title', 'sifatsurat'));
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
            $passed = array_merge(
                [
                    'user_id' => Auth::user()->id
                ],
                $this->request->all()
            );
            Trsifatsurat::find($id)->update($passed);
            return response()->json(
                [
                    'status' => 1,
                    'msg' => 'data sifat surat berhasil di update'
                ]
            );
        } catch (\Trsifatsurat $trsifatsurat) {
            //throw $th;
            return response()->json(
                [
                    'status' => 2,
                    'msg' => 'data gagal surat berhasil di update'
                ]
            );
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
            Trsifatsurat::find($id)->delete();
            return response()->json(
                [
                    'status' => 1,
                    'msg' => 'data sifat surat berhasil di hapus'
                ]
            );
        } catch (\Trsifatsurat $trsifatsurat) {
            return response()->json(
                [
                    'status' => 2,
                    'msg' => 'data gagal surat berhasil di haous'
                ]
            );
        }
    }
}
