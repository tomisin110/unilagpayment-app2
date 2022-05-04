
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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
              <h3 class="page-title"> Update User </h3>
              
            </div>
           
              
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{url('edituser',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="{{$user->name}}" name="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="{{$user->email}}" name="email">
                      </div>
                      
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="{{$user->phone}}" name="phone">
                      </div>
                      
                      <div class="form-group">
                        <label for="role">Join as </label>
                        <select class="form-control" id="exampleSelectGender" name="role">
                          <option value="cab-owner"> Cab owner</option>
                          <option value="shop-owner">Shop Owner</option>
                        </select>
                      </div>
                      
                      
                     
                     <input type="submit" id="submit"class="btn btn-primary mr-2">
                      <a href="{{url('users')}}" class="btn btn-dark">Cancel</a>
                      
                    </form>
                  </div>
                </div>
              </div>
              
             
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      





       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('script')
    <!-- End custom js for this page -->
  </body>
</html>