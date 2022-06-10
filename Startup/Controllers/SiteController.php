<?php

namespace App\Extensions\Startup\Controllers;

use Illuminate\Http\Request;

use Gtd\Suda\Http\Controllers\SiteController as SiteCtl;


class SiteController extends SiteCtl
{
    public $extension_view = 'startup';    //定义view目录
    
    public function index(Request $request)
    {
        $this->title('');

        return $this->display('index');
    }
    
}
