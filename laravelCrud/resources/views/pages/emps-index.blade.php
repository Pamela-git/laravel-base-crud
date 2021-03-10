@extends('layouts.main-layout')

@section('content')

  <h1>Employees: </h1>

  <ul>
    @foreach ($emps as $key => $value)

    @endforeach
    <li></li>
  </ul>
@endsection
