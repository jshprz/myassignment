@extends('my-assignment.master.index')
@section('content')

<br>
<br>
<br>
<br>
<br>
<h1 class="text-center"><b>Register Player</b></h1>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <div class="card text-center w-50">
      <div class="card-header">
        <b>Login</b>
      </div>
      <div class="card-body">
        <div class="card-title">
          <div class="card-text">
            @if(Session::has('loginMessage'))
              <center> <h5 class="text-danger">{{ Session::get('loginMessage') }}</h5> </center>
            @endif
              <player-register-form></player-register-form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection