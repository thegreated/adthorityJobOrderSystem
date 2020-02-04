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
                  <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Clients  &nbsp; <a  href="{{ url('client/create') }}" class="btn btn-info">Add </a></h6> 
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Location</th>
                          <th scope="col" class="border-0">Description</th>
                          <th scope="col" class="border-0">Contact #</th>
                          <th scope="col" class="border-0">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($clients as $rows )
                        <tr>
                         <td> {{ $rows['id'] }} </td>
                          <td> {{ $rows['name'] }} </td>
                          <td>0756586532</td>
                          <td> {{ $rows['contact'] }}</td>
                          <td>  {{ $rows['description'] }} </td>
                        
                          <td>
                          <button type="submit" class="btn btn-info">Edit</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>   
                        @endforeach         
                      </tbody>
                    </table>
                  </div>
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
