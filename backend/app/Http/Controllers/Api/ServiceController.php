<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::all();
        return response()->json(['services'=> $services]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      //
      $service = new Service();
      return view('create', compact('service'));
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->save();

        return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
    }

    public function show(Service $service)
    {
      return response()->json([
        'service'=>$service
    ]);
    }


    public function edit($id)
    {
      return Service::find($id);
    }


    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->save();

        return $service;
    }

    public function destroy(Service $service)
    {
        $service->delete();
    
        return response()->noContent();
    }
}
