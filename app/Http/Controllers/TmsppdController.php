<?php

namespace App\Http\Controllers;

use App\Models\Tmsppd;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TmsppdController extends Controller
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
        $this->route = '.master.sppd';
        $this->view  = '.tmsppd';
        $this->request = $request;
    }
    public function index()
    {
        $title = 'Data list sppd';
        return view($this->view . 'index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'tambah data sppd';
        return view($this->view . 'index', compact('title'));
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
            'letter_code' => 'required|unique:tmmsppd,letter_code',
            'letter_subject' => 'required',
            'letter_about' => 'required',
            'letter_from' => 'required',
            'letter_content' => 'required',
            'letter_date' => 'required',
            'code' => 'required',
            'date' => 'required',
            'nip_pejabat' => 'required',
            'nip_leader' => 'required',
            'rate_travel' => 'required',
            'nip' => 'required',
            'purpose' => 'required',
            'transport' => 'required',
            'place_from' => 'required',
            'place_to' => 'required',
            'length_journey' => 'required',
            'date_go' => 'required',
            'date_back' => 'required',
            'government' => 'required',
            'budget' => 'required',
            'budget_from' => 'required',
            'description' => 'required',
            'result_date' => 'required',
            'result' => 'required',
            'result_username' => 'required',
            'file' => 'required',
            'file_update' => 'required',
            'status' => 'required',
            'user_id' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
        ]);
        try {
            //code...


            // ffil configurationl
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $format = Carbon::now()->format('y-m-d');
            $file->mode(public_path('doc/sppd/') . $format . '.' . $file->getClientOriginalExtension());

            // end file configuration
            $f =  new Tmsppd;
            $f->letter_code = $this->request->letter_code;
            $f->letter_subject = $this->request->letter_subject;
            $f->letter_about = $this->request->letter_about;
            $f->letter_from = $this->request->letter_from;
            $f->letter_content = $this->request->letter_content;
            $f->letter_date = $this->request->letter_date;
            $f->code = $this->request->code;
            $f->date = $this->request->date;
            $f->nip_pejabat = $this->request->nip_pejabat;
            $f->nip_leader = $this->request->nip_leader;
            $f->rate_travel = $this->request->rate_travel;
            $f->nip = $this->request->nip;
            $f->purpose = $this->request->purpose;
            $f->transport = $this->request->transport;
            $f->place_from = $this->request->place_from;
            $f->place_to = $this->request->place_to;
            $f->length_journey = $this->request->length_journey;
            $f->date_go = $this->request->date_go;
            $f->date_back = $this->request->date_back;
            $f->government = $this->request->government;
            $f->budget = $this->request->budget;
            $f->budget_from = $this->request->budget_from;
            $f->description = $this->request->description;
            $f->result_date = $this->request->result_date;
            $f->result = $this->request->result;
            $f->result_username = $this->request->result_username;
            $f->file = $this->request->file;
            $f->file_update = $this->request->file_update;
            $f->status = $this->request->status;
            $f->user_id = $this->request->user_id;
            $f->created_at = $this->request->created_at;
            $f->updated_at = $this->request->updated_at;
            $f->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tamnbahkan'
            ]);
        } catch (Tmsppd $tmsppd) {
            //throw $th; 
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
        $data = Tmsppd::findOrFail($id);
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
        $title = 'tambah data sppd';
        $data  = Tmsppd::findOrFail($id);
        return view($this->view . 'index', compact('title', 'compact'));
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
            'letter_code' => 'required|unique:tmmsppd,letter_code',
            'letter_subject' => 'required',
            'letter_about' => 'required',
            'letter_from' => 'required',
            'letter_content' => 'required',
            'letter_date' => 'required',
            'code' => 'required',
            'date' => 'required',
            'nip_pejabat' => 'required',
            'nip_leader' => 'required',
            'rate_travel' => 'required',
            'nip' => 'required',
            'purpose' => 'required',
            'transport' => 'required',
            'place_from' => 'required',
            'place_to' => 'required',
            'length_journey' => 'required',
            'date_go' => 'required',
            'date_back' => 'required',
            'government' => 'required',
            'budget' => 'required',
            'budget_from' => 'required',
            'description' => 'required',
            'result_date' => 'required',
            'result' => 'required',
            'result_username' => 'required',
            'file' => 'required',
            'file_update' => 'required',
            'status' => 'required',
            'user_id' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
        ]);
        try {
            //code...
            // ffil configuration
            $file = $this->request->file;
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $format = Carbon::now()->format('y-m-d');
            $file->mode(public_path('doc/sppd/') . $format . '.' . $file->getClientOriginalExtension());

            // end file configuration
            $f =  new Tmsppd;
            $f->letter_code = $this->request->letter_code;
            $f->letter_subject = $this->request->letter_subject;
            $f->letter_about = $this->request->letter_about;
            $f->letter_from = $this->request->letter_from;
            $f->letter_content = $this->request->letter_content;
            $f->letter_date = $this->request->letter_date;
            $f->code = $this->request->code;
            $f->date = $this->request->date;
            $f->nip_pejabat = $this->request->nip_pejabat;
            $f->nip_leader = $this->request->nip_leader;
            $f->rate_travel = $this->request->rate_travel;
            $f->nip = $this->request->nip;
            $f->purpose = $this->request->purpose;
            $f->transport = $this->request->transport;
            $f->place_from = $this->request->place_from;
            $f->place_to = $this->request->place_to;
            $f->length_journey = $this->request->length_journey;
            $f->date_go = $this->request->date_go;
            $f->date_back = $this->request->date_back;
            $f->government = $this->request->government;
            $f->budget = $this->request->budget;
            $f->budget_from = $this->request->budget_from;
            $f->description = $this->request->description;
            $f->result_date = $this->request->result_date;
            $f->result = $this->request->result;
            $f->result_username = $this->request->result_username;
            $f->file = $this->request->file;
            $f->file_update = $this->request->file_update;
            $f->status = $this->request->status;
            $f->user_id = $this->request->user_id;
            $f->created_at = $this->request->created_at;
            $f->updated_at = $this->request->updated_at;
            $f->find($id)->save();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tamnbahkan'
            ]);
        } catch (Tmsppd $tmsppd) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di tamnbahkan'
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
        //
        $p = Tmsppd::findOrfail($id);
        if (file_exists(public_path('doc/sppd/' . $p->first()))) {
            unlink(public_path('doc/sppd/' . $p->first()->file));
        }
        try {
            $p->delete();
            return response()->json([
                'status' => 1,
                'msg' => 'data berhasil di tamnbahkan'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 2,
                'msg' => 'data gagal di tamnbahkan'
            ]);
        }
    }
}
