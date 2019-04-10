@extends('my-assignment.master.index')
@section('content')
<br>
<a href="{{ route('adminDoLogout') }}"><button class="btn btn-primary">Logout</button></a>
<br>
<br>
<br>
<admin-page></admin-page>
@endsection