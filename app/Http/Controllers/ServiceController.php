<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Services = Service::all();
        return response()->json($Services);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Create Client
        $Services = new Service();
        $Services->name = $request->name;
        $Services->description = $request->description;
        $Services->price = $request->price;
        $Services->save();

        $data = [
            'message' => 'Service created successfully',
            'Service' => $Services
        ];
        
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
        return response()->json($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //

        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        $data = [
            'message' => 'Service updated successfully',
            'Service' => $service
        ];
        
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        $data = [
            'message' => 'Service deleted successfully',
            'service' => $service
        ];
        return response()->json($data);

    }
}
