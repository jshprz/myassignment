@extends('my-assignment.master.index')
@section('content')
<br>
<a href="{{ route('playerDoLogout') }}"><button class="btn btn-primary">Logout</button></a>
<br>
<br>
<br>
<br>
<div class="d-flex flex-row">
  <div class="p-2 bd-highlight col-md-4"><b>Player name: </b>{{ auth()->user()->name }}</div>
  <div class="p-2 bd-highlight col-md-4"><b>Jersey Number: </b>{{ auth()->user()->number }}</div>
  <div class="p-2 bd-highlight col-md-4"><b>Position: </b>{{ auth()->user()->position }}</div>
</div>
<br>
<br>
@if(auth()->user()->team_id == null || auth()->user()->team_id == '')
  <h1 class="text-center"><b>NO ASSIGNED TEAM YET</b></h1>
  @else
  <h1 class="text-center"><b>TEAM {{ auth()->user()->team->team_name }}</b></h1>
@endif

<br>
<br>
<br>
<br>
<br>
@if(auth()->user()->team_id == null || auth()->user()->team_id == '')
  <h1 class="text-center"> </h1>
  @else
  <div class="row">
  <div class="col-md-12 d-flex justify-content-center">
    <player-table team_name="{{ auth()->user()->team->team_name }}" player_name="{{ auth()->user()->name }}" player_number="{{ auth()->user()->number }}" player_position="{{ auth()->user()->position }}"></player-table>
  </div>
</div>
@endif

@endsection