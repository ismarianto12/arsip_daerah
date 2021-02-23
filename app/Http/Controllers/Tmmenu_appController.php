<?php

namespace App\Http\Controllers;

use App\Models\Tmmenu_app;
use Illuminate\Http\Request;
use App\Models\Trjenisarsip;
use App\Models\Tmlevelakses;

class Tmmenu_appController extends Controller
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
        $this->view    = '.tmmenuapp';
    }

    public function index()
    {
        //
        $level = Tmlevelakses::get();
        $title = 'Setting Menu dan Akses';
        return view($this->view . '.index', compact('title', 'level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $result = self::buitlmenu();
        return  $result; //response()->json($result, 200, [], JSON_PRETTY_PRINT);
    }

    private static function get_menu($items, $class = 'dd-list')
    {
        // dd($items);
        $html = "<ol class=\"" . $class . "\" id=\"menu-id\">";
        foreach ($items as $key => $value) {
            $akses_level = str_replace('.', ',', $value['level']);
            if ($value['position'] == 'Top') {
                $icon = 'down text-danger';
                $ket = 'Pindah ke Bottom Menu';
            } else {
                $icon = 'up text-success';
                $ket = 'Pindah ke Top Menu';
            }
            $html .= '<li class="dd-item dd3-item" data-id="' . $value['id'] . '" >
     <div style="cursor:move" class="dd-handle dd3-handle ' . $value['position'] . '"></div>
     <div class="dd3-content"><span id="label_show' . $value['id'] . '">' . $value['nama_menu'] . '</span> 
     <span class="span-right">/<span id="link_show' . $value['id'] . '">' . $value['link'] . '</span> &nbsp;&nbsp; 
     &nbsp; 
     <a class="edit-button" id="' . $value['id'] . '" label="' . $value['nama_menu'] . '" link="' . $value['link'] . '" level="' . $akses_level . '" icon="' . $value['icon'] . '" ><i class="fa fa-pencil"></i></a>  &nbsp; 
     ' . $value['level'] . '
     <i class="fa fa-user"></i>  &nbsp;  
     <a class="del-button" id="' . $value['id'] . '"><i class="fa fa-trash"></i></a></span> 
     </div>';
            if (array_key_exists('child', $value)) {
                $html .= self::get_menu($value['child'], 'child');
            }
            $html .= "</li>";
        }
        $html .= "</ol>";
        return $html;
    }

    private static function buitlmenu()
    {
        $record = Tmmenu_app::orderBy('urutan')->get();
        $ref   = [];
        $items = [];

        // dd($record);
        foreach ($record as $rf => $data) {
            $thisRef[] = $data->id;
            $thisRef['id_parent'] = $data->id_parent;
            $thisRef['icon'] = $data->icon;
            $thisRef['level'] = $data->tmlevelakses_id;
            $thisRef['nama_menu'] = $data->nama_menu;
            $thisRef['link'] = $data->link;
            $thisRef['id'] = $data->id;
            $thisRef['position'] = $data->position;

            if ($data->id_parent == 0) {
                $items[$data->id] = $thisRef;
            } else {
                $ref[$data->id_parent]['child'][$data->id] = $thisRef;
            }
        }


        return self::get_menu($items);
    }

    public function listIcon(Tmmenu_app $tmmenu_app)
    {
        $data = '';
        return view($this->view . '.icon_list', compact('data'));
    }

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
        //
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
    }
}
