<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
  public function index()
  {
    $devices = Device::all();
    return view('pages.devices', compact('devices'));
  }

  public function show($id)
  {
    $device = Device::findOrFail($id);
    return view('pages.device', compact('device'));
  }

  public function create()
  {
    return view('pages.device-create');
  }

  public function store(Request $request)
  {
    // dd($request -> all());

    // soluzione senza conversione wattaggio:

    // Device::create($request -> all());
    // return redirect() -> route('devices-index');

    // prova per avere l'input in kw convertito in watt:
    $device = new Device;

    $device -> name = $request -> get('name');
    $device -> model = $request -> get('model');
    $device -> price = $request -> get('price');
    $device -> consumption = $request -> get('consumption') * 1000;

    $device -> save();
    return redirect() -> route('devices-index');

  }
}
