
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
              <h3 class="page-title"> News </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item btn btn-success btn-fw"><a href="{{url('create_news')}}">Create News</a></li>
                  
                </ol>
              </nav>
            </div>
           
           
            <div class="row">
               @foreach($news as $news)  
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                 
               <div class="card-body">
               <h5 class="card-title">{{$news->title}}</h5>
    
                 <a href="{{url('fullnews',$news->id)}}" class="btn btn-primary">Read More</a>
                  <a href="{{url('updatenews',$news->id)}}" class="btn btn-warning btn-fw">Edit</a>
                  <a href="{{url('deletenews',$news->id)}}" class="btn btn-danger btn-fw">Delete</a>
                   </div>
                </div>
              </div>
              
             @endforeach
            
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