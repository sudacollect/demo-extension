<?php

namespace App\Extensions\Startup\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use Redirect;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Log;
use Validator;


use App\Extensions\Startup\Controllers\AdminController;

use Gtd\Suda\Models\Taxonomy;

use Gtd\Suda\Traits\TaxonomyTrait;

class JobCateController extends AdminController
{
    use TaxonomyTrait;
    
    
    
    //关键参数，是否单独显示这个菜单
    public $single_extension_menu = true;

    public $redirect_url = 'extension/startup/jobcate';
    public $taxonomy_name = 'job_category';

    function __construct()
    {
        parent::__construct();
        
        
        $this->setMenu('func_menu.job_cate');
    }
    

    public function getList(Request $request,$taxonomy_name='')
    {
        if(!$this->taxonomy_name && empty($taxonomy_name)){
            return redirect('error');
        }
        if(!empty($taxonomy_name)){
            $this->taxonomy_name = $taxonomy_name;
        }
        
        $taxonomyObj = new Taxonomy;
        $categories = $taxonomyObj->lists($this->taxonomy_name);

        $this->setData('categories',$categories);
        
        $this->getActions();
        return $this->display($this->getViews('list'));
    }

    public function viewConfig(){

        return [

            'list'=>'view_suda::taxonomy.category.list',
            'create'=>'view_suda::taxonomy.category.add',
            'update'=>'view_suda::taxonomy.category.edit',
        ];

    }

    public function buttonConfig(){

        $buttons = [];
    
        $buttons['create']  = admin_url('extension/startup/jobcate/add');
        $buttons['update']  = admin_url('extension/startup/jobcate/update');
        $buttons['save']    = admin_url('extension/startup/jobcate/save');
        $buttons['delete']  = admin_url('extension/startup/jobcate/delete');
        $buttons['sort']    = admin_url('extension/startup/jobcate/editsort');

        $buttons['modal_url']  = admin_url('medias/modal');
        $buttons['upload_url'] = admin_url('medias/upload/image');
    
        return $buttons;
    }
    
    
}
