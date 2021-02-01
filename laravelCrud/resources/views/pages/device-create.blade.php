@extends('layouts.main-layout')

@section('content')

  <h1>Aggiungi nuovo Device</h1>

  <form action="{{route('device-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Nome</label>
    <input type="text" name="name" value="">

    <br>
    <br>

    <label for="name">Modello</label>
    <input type="text" name="model" value="">

    <br>
    <br>


    <label for="name">Prezzo</label>
    <input type="text" name="price" value="">

    <br>
    <br>


    <label for="name">Consumo in kw</label>
    <input type="text" name="consumption" value="">

    <input type="submit" name="" value="Aggiungi">

  </form>

@endsection
