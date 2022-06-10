<?php

namespace App\Extensions\Startup\Controllers\Site;


use Illuminate\Http\Request;
use App\Extensions\Startup\Controllers\SiteController;


use Log;
use Validator;
use Response;

class CardHomeController extends SiteController
{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function index(Request $request)
    {
        $this->title($this->data['sdcore']['settings']['site_name']);

        return $this->display('index');
        
    }
    
    
    
}
