@extends('view_path::layouts.default')



@section('content')

<div class="container">
    <h1 class="page-title"><i class="ion-home"></i>&nbsp;&nbsp;Startup</h1>
    <div class="row sd-row">
        

        
        
        
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-header">
                    
                    System
                    
                </div>
                <div class="card-body">
                
                    <p>
                        Website name, keywords, description, etc.
                    </p>
                    
                    <a href="{{ admin_url('setting/site') }}" class="btn btn-light">Setting</a>
                
                </div>
                
            </div>
        </div>
        
        
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-header">
                    
                    Menu
                    
                </div>
                <div class="card-body">
                
                    <p>
                        Manage menu and items.
                    </p>
                    
                    <a href="{{ admin_url('menu') }}" class="btn btn-light">Menu</a>
                
                </div>
                
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    
                    Pages and Articles
                    
                </div>
                <div class="card-body">
                
                    <p>
                    Add pages for company about, add articles for news.
                    </p>
                    
                    <a href="{{ admin_url('page') }}" class="btn btn-light">Pages</a>
                    <a href="{{ admin_url('article') }}" class="btn btn-light">Articles</a>
                
                </div>
                
            </div>
        </div>
        
        
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    
                    Themes
                    
                </div>
                <div class="card-body">
                
                    <p>
                    Dashboard theme, site themes.
                    </p>
                    
                    <a href="{{ admin_url('theme') }}" class="btn btn-light">Site themes</a>
                    <a href="{{ admin_url('style/dashboard') }}" class="btn btn-light">Dashboard Style</a>
                
                </div>
                
            </div>
        </div>
        
        
    </div>
</div>
@endsection