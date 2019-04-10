@extends('my-assignment.master.index')
@section('content')
<br>
<br>
<br>
<br>
<br>
<h1 class="text-center"><b>TEAM ADMIN</b></h1>
<br>
<br>
<br>
<button class="btn btn-primary" data-toggle="modal" data-target="#add-team">Add team</button>
<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">View tournament</button>
<br>
<br>
<div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <team-table></team-table>
  </div>
</div>
@endsection