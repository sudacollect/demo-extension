<?php
/*
|--------------------------------------------------------------------------
| MENU
|--------------------------------------------------------------------------
|
*/

return [
    
    'startup_menu'=>[
        'title'     => 'Startup',
        'slug'      => 'startup_menu',
        'url'       => 'index',
        'icon_class'=> 'ion-apps',
        
        'icon_bg_color'=> '#000000',    //extension dashboard page
        'font_color'=> '#ff0000',       //extension dashboard page

        'group'     => 'startup_menu',
        'target'     => '_self',
        'order'     => 0,
        'breadcrumb' => false,
        
        'children' => [
            [
                'title'     => 'Welcome',
                'slug'      => 'index',
                'url'       => 'index',
                'icon_class'=> 'ion-home',
                'target'     => '_self',
                'breadcrumb' => false,
                'order'     => 0,
                
            ],
            [
                'title'     => 'Help',
                'slug'      => 'help',
                'url'       => 'help',
                'icon_class'=> 'ion-help-buoy',
                'target'     => '_self',
                'order'     => 0,
                
            ],
        ],
        
    ],
    
    

    // 'fea_menu'=>[
    //     'title'     => 'Features',
    //     'slug'      => 'fea_menu',
    //     'url'       => 'jobcate',
    //     'icon_class'=> 'ion-boat',
    //     // 'group'     => 'startup_menu',
    //     'target'     => '_self',
    //     'order'     => 100,

    //     'children' => [
            
    //         [
    //             'title'     => 'Job Cate',
    //             'slug'      => 'job_cate',
    //             'url'       => 'jobcate',
    //             'icon_class'=> 'icon ion-md-chatbubbles',
    //             'target'     => '_self',
    //             'order'     => 0,
    //             'methods'   => [
    //                 'create'=>'Add',
    //                 'update'=>'Update',
    //                 'delete'=>'Delete',
    //                 'view'=>'View',
    //             ],
    //         ],
            
    //     ],
    // ],

    
];