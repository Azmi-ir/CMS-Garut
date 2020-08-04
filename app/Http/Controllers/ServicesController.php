<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = \App\service::all();
        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
        $service = new service;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->detail = $request->detail;

        $service->save();
        return redirect('/service');
        */

        /*
        service::create([
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
        ]);
        */
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required'
        ]);
        service::create($request->all());
        return redirect('/service')->with('status', 'Service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required'
        ]);

        service::where('id', $service->id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'detail' => $request->detail
            ]);
        return redirect('/service')->with('status', 'Service Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
        service::destroy($service->id);
        return redirect('/service')->with('status', 'Service Deleted Successfully');
    }
}
