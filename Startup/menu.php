<?php
/*
|--------------------------------------------------------------------------
| 菜单扩展
|--------------------------------------------------------------------------
|
| 目前支持扩展菜单项
| 1. 支持对当前已存在菜单的扩展
| 2. 支持扩展新的菜单项
|
*/

return [
    
    'startup_menu'=>[
        'single'    => true,
        'title'     => '快启动',
        'slug'      => 'startup_menu',
        'url'       => 'index',
        'icon_class'=> 'ion-apps',
        'icon_bg_color'=> '#000000',
        'font_color'=> '#ff0000',
        'group'     => 'startup_menu',
        'target'     => '_self',
        'order'     => 0,
        
        'children' => [
            [
                'title'     => '入口',
                'slug'      => 'index',
                'url'       => 'index',
                'icon_class'=> 'zly-home',
                'target'     => '_self',
                'order'     => 0,
                
            ],
            [
                'title'     => '帮助',
                'slug'      => 'help',
                'url'       => 'help',
                'icon_class'=> 'zly-home',
                'target'     => '_self',
                'order'     => 0,
                
            ],
        ],
        
    ],
    
    

    'func_menu'=>[
        'single'    => true,
        'title'     => '功能',
        'slug'      => 'func_menu',
        'url'       => 'jobcate',
        'icon_class'=> 'ion-boat',
        // 'group'     => 'startup_menu',
        'target'     => '_self',
        'order'     => 100,

        'children' => [
            
            [
                'title'     => '职位分类',
                'slug'      => 'job_cate',
                'url'       => 'jobcate',
                'icon_class'=> 'icon ion-md-chatbubbles',
                'target'     => '_self',
                'order'     => 0,
                'methods'   => [
                    'create'=>'增加',
                    'update'=>'编辑',
                    'delete'=>'删除',
                    'view'=>'查看',
                ],
            ],
        ],
    ],

    
];