@extends('index')
@section('content')
<header id="header" style="background: rgba(52, 59, 64, 0.9); height:72px ">
  <div class="container">
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ route('home') }}">Registration</a></li>
    <li><a href="loginpage.php">Log In</a></li>
      <li><a href="{{route('allstudent')}}">All Student</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->
<!--==========================
      Registration Section
    ============================-->
    <section id="registration">
      <div class="container wow fadeInUp">
        <div class="section-header"><br><br><br>
          <h3 class="section-title">Registration</h3>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-8">
            <div class="form">
              
              <div id="errormessage"></div>
              @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            <form action="{{route('storestudent')}}" method="post" role="form" class="contactForm">
                  @csrf
				<div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
                  <div class="validation"></div>
                </div>
				<div class="form-group">
                  <input id="phone" name="phone" placeholder="Enter your mobile number" class="form-control input-md" type="number">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
				
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #registration -->
@endsection