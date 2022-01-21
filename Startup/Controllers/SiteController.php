<?php

namespace App\Extensions\Startup\Controllers;

use Illuminate\Http\Request;

use Gtd\Suda\Http\Controllers\SiteController as SiteCtl;


class SiteController extends SiteCtl
{
    public $extension_view = 'startup';    //define view folder.
    
    public function index()
    {
        $this->title('Home');

        return $this->display('index');
    }
    
}
