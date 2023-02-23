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

    }

    public function show($id)
    {
        $service = Service::find($id);

        return view('show', compact('service'));
    }

   
    public function edit($id)
    {
        return Service::find($id);
    }

   
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->service_name;
        $service->save();

        return $service;
    }

  
    public function destroy($id)
    {
        Service::find($id)->delete();
    }
}
