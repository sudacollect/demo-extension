<?php

 
namespace App\Extensions\Startup\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Extensions\Startup\Controllers\AdminController;
use Gtd\Suda\Models\Setting;

class HomeController extends AdminController
{    
    public function index(Request $request,$param=''){
        
        
        $this->title('快站应用');
        
        //权限
        $this->gate('startup_menu');
        //菜单
        $this->setMenu('startup_menu','index');

        return $this->display('index');
    }
    
    public function help(){
        
        $this->title('帮助');
        
        $this->setData('data_list',[]);
        
        $this->setMenu('startup_menu.help');

        return $this->display('help');
    }
    
    
}

