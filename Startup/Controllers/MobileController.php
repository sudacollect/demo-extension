<?php

namespace App\Extensions\Startup\Controllers;

use Gtd\Suda\Http\Controllers\MobileController as MobCtl;

class MobileController extends MobCtl
{
    
    public $extension_view = 'startup';    //define view folder.
    
    public function index(){
        
        exit('Mobile Page');
    }
    
    public function responseJson($data,$code=200){
        
        return Response::json($data, $code);
        
    }
}
