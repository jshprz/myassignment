@extends('my-assignment.master.index')
@section('content')
<br>
<a href="{{ route('coachDoLogout') }}"><button class="btn btn-primary">Logout</button></a>
<br>
<br>
<br>
<br>
<h1 class="text-center"><b>TEAM asd</b></h1>
<br>
<br>
<br>
<button class="btn btn-primary" data-toggle="modal" data-target="#add-player">Add Player</button>
<br>
<br>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <coach-table coach_id="{{ auth()->user()->id }}"></coach-table>
  </div>
</div>
@endsection