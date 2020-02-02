<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Work Order Management System</title>
      @include('templates.head')
    
    </head>
    <body class="h-100">
        <div class="container-fluid">
            <div class="row">
              <!-- Main Sidebar -->
           @include('templates.leftmenu')
              <!-- End Main Sidebar -->
              <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
               
                  @include('templates.topnav')
                
                <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4">
                  <!-- Page Header -->
                  @include('templates.pageheader')
                  <!-- End Page Header -->
                  <!-- Small Stats Blocks -->
                  @include('home.statistics')
                  <!-- End Small Stats Blocks -->
                  @include('home.charts')
                </div>
                @include('templates.footer')
              </main>

            </div>
          </div>
        </div>
        @include('templates.js')
    </body>
</html>
