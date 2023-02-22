<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Service::get();
    return view('home', compact('services'));
  }

  public function show($id)
  {
    $service = Service::find($id);
    return view('showService', compact('service'));
  }
}
