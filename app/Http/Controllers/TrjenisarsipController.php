<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trjenisarsip;
use DataTables;
use Carbon;
use App\Models\User;

class TrjenisarsipController extends Controller
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
        $this->request = $request;
        $this->view    = '.trjenisarsip';
    }

    public function index()
    {
        return view($this->view . '.index');
    }

    public function api(Trjenisarsip $trjenisarsip)
    {
        $data = $trjenisarsip::with('user:username')->get();
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
            ->rawColumns(['usercreate', 'action','id'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trjenisarsip $trjenisarsip)
    {
        // dd('ss');
        return view($this->view . '.form_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Trjenisarsip $trjenisarsip)
    {
        //
        $par =  $this->request->validate([
            'jenis_arsip' => 'required',
            'user_id' => 'required',
        ]);
        try {
            $trjenisarsip::create($par);
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tambahkan'
            ]);
        } catch (Trjenisarsip $trjenisarsip) {
            return response()->json([
                'status' => 2,
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
        $data = Trjenisarsip::find($id);
        $title = 'Detail jenis arsip';

        return view($this->view . 'detail_form', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trjenisarsip $trjenisarsip, $id)
    {
        //
        $data  = $trjenisarsip::find($id);
        if ($data == '') return abort(404, 'Maaf data yang ada di table tidak tersedia');
        return view($this->view . '.form_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Trjenisarsip $trjenisarsip, $id)
    {
        if ($id == '') return response()->json(['msg' => 'parsing data gagal karena parameter id tidak legkap']);
        $this->request->validate($this->request, [
            'jenis_arsip' => 'required',
            'user_id' => 'required',
        ]);

        try {
            $trjenisarsip::find($id)->update([
                'jenis_arsip' => $this->request->jenis_arsip,
                'user_id' => $this->request->user_id
            ]);
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di update'
            ]);
        } catch (Trjenisarsip $trjenisarsip) {
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
    public function destroy(Trjenisarsip $trjenisarsip, $id)
    {
        try {
            $trjenisarsip::Where('id', $id)->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di hapus'
            ]);
        } catch (Trjenisarsip $trjenisarsip) {
            //throw $th;
            return response()->json([
                'status' => 2,
                'msg' => 'data berhasil di tambahkan'
            ]);
        }
    }
}
