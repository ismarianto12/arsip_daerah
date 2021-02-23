<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmlokasi;
use DataTables;
use Carbon;
use Illuminate\Support\Facades\Auth;

class TmlokasiController extends Controller
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
        $this->route = '.master.lokasi';
        $this->view  = '.tmlokasi';
        $this->request = $request;
    }

    public function index()
    {
        //
        $title = '';
        return view($this->view . '.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $data = Tmlokasi::with(['user:username'])->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('usercreate', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('datecreate', function ($p) {
                return ($p->name) ? $p->name : 'kosong';
            }, true)
            ->editColumn('action', function ($p) {
                return  '<a href="" class="btn btn-primary btn-xs" id="edit" data-id="' . $p->id . '">Edit </a> <a href=""  class="btn btn-danger btn-xs" id="delete"  data-id="' . $p->id . '">Delete </a>';
            }, true)
            ->rawColumns(['action', 'usercreate', 'id'])
            ->toJson();
    }


    public function create()
    {
        //
        $title = 'tambah data lokasi arsip';
        return view($this->view . '.form_add', compact('title'));
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
            'nama_lokasi' => 'required',
        ]);

        try {
            $r  = new Tmlokasi;
            $r->nama_lokasi = $this->request->nama_lokasi;
            $r->user_id = Auth::user()->id;
            $r->save();

            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        } catch (\Tmlokasiarsip $tmlokasi) {
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
    public function update($id)
    {
        $this->request->validate([
            'nama_lokasi' => 'required',
            'user_id' => 'required'
        ]);

        try {
            $r  = new Tmlokasi;
            $r->nama_lokasi = $this->request->nama_lokasi;
            $r->user_id = $this->request->user_id;
            $r->find($id)->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di update'
            ]);
        } catch (\Tmlokasiarsip $tmlokasi) {
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
            $r  = new Tmlokasi;
            $r->findOrfail($id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di hapus'
            ]);
        } catch (\Tmlokasiarsip $tmlokasi) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di hapus'
            ]);
        }
    }
}
