<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <!-- <link href="{{asset('admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
  <!--external css-->
  <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <ul  class="btn btn-primary">Logout</ul></a>
                    
                </form>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="/redirects">
              <i class="fa fa-android"></i>
              <span>Member</span>
              </a>
           
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Data Member</h3>
        <!-- @if(session('sukses'))
        <div class="alert alert-success" role="alert">
  Success
</div>
@endif -->
          <div class="col-lg-12"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Member
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
      @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="name"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder ='Enter your name Bro'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input name="position"type="text" class="form-control" id="exampleInput" placeholder ='Enter your position Bro'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quote</label>
    <input name="quote" type="text" class="form-control" id="exampleInputPassword1" placeholder ='Enter your quote'>
  </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Picture</label>
  <input name="picture" class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
</div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Nama</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>Position</th>
                    <th><i class="fa fa-bookmark"></i>Quote</th>
                    <th><i class="fa fa-android"></i>Picture</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach($members as $member)
                    <td><a href="#">{{$member->name}}</a></td>
                    <td class="hidden-phone">{{$member->position}}</td>
                    <td class="hidden-phone">{{$member->quote}}</td>
                    <td><img src="{{ URL::to($member->picture) }}" alt="" width="100" 
                            height="80"></td>
                    <td><div class="col-lg-12"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{$member->id}}">
  Edit
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$member->id}}">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="edit{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
      @method('PUT')
      @csrf
      <input type="hidden" name="id" value="{{$member->id}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input value="{{$member->name}}" name="name"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder ='Enter your name Bro'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input value="{{$member->position}}"name="position"type="text" class="form-control" id="exampleInput" placeholder ='Enter your position Bro'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quote</label>
    <input value="{{$member->quote}}"name="quote" type="text" class="form-control" id="exampleInputPassword1" placeholder ='Enter your quote'>
  </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Picture</label>
  <input value="{{$member->picture}}"name="picture" class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
</div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<td><div class="col-lg-12"><!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="delete{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
      @method('DELETE')
      @csrf
      <input type="hidden" name="id" value="{{$member->id}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Are you sure to delete?</label>
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
        </tr>
        @endforeach
        
</tbody>
            
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
   
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.ui.touch-punch.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
