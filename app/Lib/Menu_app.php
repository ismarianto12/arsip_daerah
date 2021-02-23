<?php

namespace App\Lib;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Tmmenu_app;
use Illuminate\Support\Facades\URL;

// use Illuminate\Support\Facades\Url;

class Menu_app
{

    private $level;
    private $Url;
    private $icon;

    public function parsers()
    {
        $arr = array(
            'level' => 1,
            [],
            'level' => 2,
            []
        );
    }

    public function __construct()
    {
    }
    public static function render()
    {
        $level = 1; // Auth::user()->level_id;
        $query = Tmmenu_app::select("id", "nama_menu", "link", "id_parent", "icon")
            ->where('aktif', 1)
            // ->where(\DB::raw('locate(' . $level . ',tmlevelakses_id)', '>', 0))
            ->orderBy('urutan')
            ->get();

        $menu = ['items' => [], 'parents' => []];
        foreach ($query as $menus) {
            $menu['items'][$menus->id] = $menus;
            $menu['parents'][$menus->id_parent][] = $menus->id;
        }
        if ($menu) {
            $result = self::buitlmenu(0, $menu);
            return $result;
        } else {
            return FALSE;
        }
    }

    private static function buitlmenu($parent, $menu)
    {
        $html = '';
        if (isset($menu['parents'][$parent])) {
            if ($parent == '0') {
                $html .= '<li class="sidenav-item">
                <a href="' . Url('/') . '"> 
                <span class="icon icon-dashboard"></span>
                  <span class="sidenav-label">Dashboard</span>
                </a>
              </li>';
            } else {
                $html .= '<ul class="sidenav level-2 collapse">';
            }
            foreach ($menu['parents'][$parent] as $itemId) {
                $icon = ($menu['items'][$itemId]->icon) ? '<span class="sidenav-icon ' . $menu['items'][$itemId]->icon . '"></span>' : '<span class="icon icon-list-alt"></span>';

                if (!isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li><a href='" . Url(strtolower($menu['items'][$itemId]->link)) . "'><span class='icon icon-list-alt'></span>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
                    } else {
                        if ($menu['items'][$itemId]->id_parent == 0) :
                            $html .= "<li class='sidenav-item has-subnav'><a href='" . Url(strtolower($menu['items'][$itemId]->link)) . "'>" . $icon . "<span class='sidenav-label'>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        else :
                            $html .= "<li><a href='" . Url(strtolower($menu['items'][$itemId]->link)) . "'><span class='icon icon-list-alt'></span><span class='sidenav-label'>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        endif;
                    }
                }
                if (isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li class='sidenav-item has-subnav'><a href='" . Url(strtolower($menu['items'][$itemId]->link)) . "'>" . $icon . "<span class='sidenav-label'>" . $menu['items'][$itemId]->nama_menu . "</span><span class='fa fa-angle-left pull-right'></span></a>";
                    } else {
                        $html .= "<li class='sidenav-item has-subnav'><a href='" . Url(strtolower($menu['items'][$itemId]->link)) . "'>" . $icon . "<span class='sidenav-label'>" . $menu['items'][$itemId]->nama_menu . "</span><span class='fa fa-angle-left pull-right'></span></a>";
                    }
                    $html .= self::buitlmenu($itemId, $menu);
                    $html .= "</li>";
                }
            }
            $html .= "</ul>";
        }
        return $html;
    }
}
