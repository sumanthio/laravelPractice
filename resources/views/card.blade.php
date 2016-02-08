@extends('layout.default')
@section('content')
  <ul>
    @foreach($users as $user)
    <li>{{ $user->name}}</li>
    @endforeach

  </ul>
@stop
