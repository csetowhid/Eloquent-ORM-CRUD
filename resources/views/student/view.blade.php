@extends('index')
@section('content')
<header id="header" style="background: rgba(52, 59, 64, 0.9); height:72px ">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('home') }}">Registration</a></li>
		  
        <li><a href="{{route('allstudent')}}">All Student</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<section id="registration">
    <div class="container wow fadeInUp">
      <div class="section-header"><br><br><br>
        <h3 class="section-title">View All Student</h3>
      </div>
    </div>
    <div class="col-md-10 mx-auto">
    <table class="table table-responsive justify-content-center">
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($student as $row)
            <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->email}}</td>
            <td>
            <a href="{{URL::to('viewstudent/'.$row->id)}}" class="btn btn-secondary">View</a>
                <a href="{{URL::to('editestudent/'.$row->id)}}" class="btn btn-info">Edit</a>
                <a href="{{URL::to('deletestudent/'.$row->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
        @endforeach
    </table>
</div>
  </section><!-- #registration -->
@endsection