@extends('my-assignment.master.index')
@section('content')
<br>
<br>
<br>
<br>
<br>
<h1 class="text-center"><b>Basketball League System</b></h1>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <div class="card text-center w-50">
      <div class="card-header">
        <b>Player Login</b>
      </div>
      <div class="card-body">
        <div class="card-title">
          <div class="card-text">
            @if(Session::has('loginMessage'))
              <center> <h5 class="text-danger">{{ Session::get('loginMessage') }}</h5> </center>
            @endif
              <form action="{{ route('playerDoLogin') }}" method="POST">
                {{ csrf_field() }}
                <label>Username</label>
                <input type="text" class="form-control" name="username" />
                <br>
                <label>Password<b></label>
                <input type="password" class="form-control" name="password" />
                <br>
                <button type="submit" class="btn btn-primary" style="width:150px">Login In</button>
                <br>
                or
                <br>
                <div class="d-flex justify-content-center">
                  <a href="{{ route('coachLogin') }}"><button class="btn btn-primary" style="width:150px">Login As Coach</button></a>
                  &nbsp&nbsp
                <a href="{{ route('adminLogin') }}"><button class="btn btn-primary" style="width:150px">Login As Admin</button></a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection