<!DOCTYPE html>
<html lang="zh-CN">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ZEST, hello@gtd.xyz">
    
    <title>{{ metas($zcore) }}</title>
    <meta name="keywords" itemprop="keywords" content="{{ $zcore->keywords }}">
    <meta name="description" property="og:description" itemprop="description" content="{{ $zcore->description }}">
    
    <link rel="shortcut icon" href="{{ suda_asset('images/logo_fav.png') }}" type="image/x-icon">
    <meta property="og:site_name" content="{{ $zcore->settings->site_name }}">
    <meta property="og:title" itemprop="name" content="{{ metas($zcore->title) }}">
    <meta property="og:image" itemprop="image" content="{{ $zcore->settings->og_image }}">
    
    <script src="{{ extension_asset('startup','js/scrollreveal.min.js') }}"></script>
    <link rel="stylesheet" href="{{ suda_asset('css/app_site.css') }}">
    <link rel="stylesheet" href="{{ extension_asset('startup','css/style.css') }}">
    
    @sitehead
    
    @stack('styles')
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.suda = window.suda || {};
        suda.meta = { csrfToken: "{{csrf_token()}}",url:"{{url('/')}}" }
    </script>
    
    @stack('scripts-head')
    
</head>
<body class="is-boxed has-animations">
   
    <div id="app" class="app-sd-startup">
        
        
        
        <div class="body-wrap boxed-container">
            <header class="site-header" style="background:#1d2c4c">
    			
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <h1 class="m-0">
                                <a href="{{ url('/') }}">

                                    <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                                        <title>logo</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs>
                                            <linearGradient x1="52.4183246%" y1="47.6650708%" x2="47.8395461%" y2="46.2735102%" id="linearGradient-1">
                                                <stop stop-color="#FFFFFF" offset="0%"></stop>
                                                <stop stop-color="#EBF4FF" offset="100%"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path d="M49,37 L44.9038526,55 L26,55 L30.0961474,37 L49,37 Z M29,29 L25.6798614,44 L8,44 L11.3201386,29 L29,29 Z M53,17 L49.7662886,32 L32,32 L35.2337114,17 L53,17 Z M35,5 L30.9038526,23 L12,23 L16.0961474,5 L35,5 Z" id="Combined-Shape" fill="url(#linearGradient-1)"></path>
                                        </g>
                                    </svg>

                                </a>
                            </h1>
                        </div>

                    </div>
                </div>
            </header>
            
            @yield('content')
        
            
        
        </div>
        
        {{-- @sudapower --}}
    </div>
    
    
    <!-- Scripts -->
    
    @stack('scripts')
    
    
    
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?d2fcce4dc657e9239ba3cf7f75b8560e";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
        

</body>
</html>
