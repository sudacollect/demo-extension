<?php

namespace App\Extensions\Startup\Controllers\Site;

use Illuminate\Http\Request;
use Log;
use Validator;
use Response;
use App\Extensions\Startup\Controllers\SiteController;

class CardHomeController extends SiteController
{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function index(Request $request)
    {
        
        $this->title('Example');

        return $this->display('index');
        
    }
    
    
    
}
