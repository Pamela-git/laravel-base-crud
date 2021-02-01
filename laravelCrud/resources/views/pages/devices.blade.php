@extends('layouts.main-layout')

@section('content')
  <h1>Devices</h1>

  <div class="container">
    @foreach ($devices as $device)
        <div>
          <a href="{{route('device-show', $device -> id)}}">
            Name: {{$device -> name}}
          </a>
          <span> Model: {{$device -> model}}</span>
        </div>
    @endforeach
  </div>

  <a href="{{route('device-create')}}"> <strong>Add new Device</strong></a>

@endsection
