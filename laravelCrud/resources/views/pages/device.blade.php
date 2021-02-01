@extends('layouts.main-layout')

@section('content')
  <h1> Device Name: {{ $device -> name }}  </h1>
  <h2>Model: {{$device -> model}}</h2>
  <h3> Price : {{ $device -> price}} €</h3>
  <h3> Consumption : {{ $device -> consumption}}W</h3>
@endsection
