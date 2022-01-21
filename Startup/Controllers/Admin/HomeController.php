<?php

 
namespace App\Extensions\Startup\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Extensions\Startup\Controllers\AdminController;
use Gtd\Suda\Models\Setting;

class HomeController extends AdminController{
    
    public $self_url = 'extension/startup/setting';
    
    public function index(Request $request,$param=''){

        $this->title('Starup');
        
        //permission
        $this->gate('startup_menu');
        
        //cur menu
        $this->setMenu('startup_menu','index');

        return $this->display('index');
    }
    
    public function help(){
        
        $this->title('Help');
        
        $this->setData('data_list',[]);
        
        $this->setMenu('startup_menu.help');

        return $this->display('help');
    }
    
    
}

