
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('navbar')
        <!-- partial -->
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Users </h3>
              
            </div>
            
            
           
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>  Name </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                            <th></th>
                            <th></th>
                             <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                          <tr>
                            <td> {{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->role}}</td>
                            <td><a href="{{url('updateuser',$user->id)}}"class="btn btn-success btn-fw">Update</a></td>
                            <td><a href="{{url('deleteuser',$user->id)}}" class="btn btn-danger btn-fw">Delete</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

          <!-- content-wrapper ends -->
          
        </div>
        <!-- main-panel ends -->
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('script')
    <!-- End custom js for this page -->
  </body>
</html>