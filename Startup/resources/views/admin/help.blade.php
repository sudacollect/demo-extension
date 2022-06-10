@extends('view_path::layouts.default')



@section('content')

<div class="container">
    <div class="row suda-s-row">
        <div class="page-heading">
            
            <h1 class="page-title"><i class="zly-gear-s-o"></i>&nbsp;&nbsp;快站说明</h1>
            
        </div>
        
        
        <div class="col-sm-12">
            <div class="card">
                
                <div class="card-body">
                    <p>
                        以下按钮的显示规则：<br>
                        1. 超级管理员 全部显示 <br>
                        2. 进入菜单-系统->角色设置->添加角色（运营/应用管理员）和添加对应管理员用户，并设置应用权限<br>
                        3. 可勾选对应菜单和操作权限，然后在这里查看测试<br>
                    </p>

                    <h4>权限一览测试</h4>

                    @can('extension#startup.func_menu.jobcate.create',app("Gtd\Suda\Models\Setting"))
                    <button class="btn btn-light btn-lg">增加 create</button>
                    @endcan
                    @can('extension#startup.func_menu.jobcate.update',app("Gtd\Suda\Models\Setting"))
                    <button class="btn btn-light btn-lg">更新 update</button>
                    @endcan
                    @can('extension#startup.func_menu.jobcate.delete',app("Gtd\Suda\Models\Setting"))
                    <button class="btn btn-light btn-lg">删除 delete</button>
                    @endcan
                    @can('extension#startup.func_menu.jobcate.view',app("Gtd\Suda\Models\Setting"))
                    <button class="btn btn-light btn-lg">查看 view</button>
                    @endcan

                </div>
                
            </div>
        </div>
        
        
    </div>
</div>
@endsection