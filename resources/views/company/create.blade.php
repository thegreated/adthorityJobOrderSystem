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
                  <div class="card card-small mb-4 p-4" >
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Add Client </h6> 
                  </div>
                  @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                    </ul>
                    </div>

                  @endif

                  @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success')}}</p>
                    </div>
                  @endif
                    <form method="POST" action="{{ url('client') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Contact:</label>
                            <input type="text" class="form-control" name="contact"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                      
                         <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                </div>
                @include('templates.footer')
              </main>

            </div>
          </div>
        </div>
        @include('templates.js')
    </body>
</html>
