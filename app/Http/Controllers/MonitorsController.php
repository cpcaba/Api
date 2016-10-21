<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Monitor;
use App\Client;

class MonitorsController extends Controller
{
  public function __construct()
   {
       // Apply the jwt.auth middleware to all methods in this controller
       // except for the authenticate method. We don't want to prevent
       // the user from retrieving their token if they don't already have it
       $this->middleware('jwt.auth', ['except' => ['authenticate']]);
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $monitors = Monitor::all();
      return response()->json($monitors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Monitor::create($request->all());
      return response()->json('Guardado', 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function showassign($id)
     {
       $client = Client::find($id);
       if (!$client)
         return response()->json('Client not found',404);

       $monitors = $client->monitor()->get();
       if ($monitors->isEmpty())
         return response()->json('Client without Monitors',404);

       return response()->json($monitors, 200);

     }

    public function show($id)
    {
      $monitor = Monitor::find($id);
      if (!$monitor)
        return response()->json('Monitor not found',404);
      return response()->json($monitor, 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function assign(Request $request, $id, $id2)
    {
      $monitor = Monitor::find($id2);
      if(!$monitor)
      {
          return response()->json('Monitor Not Found',404);
      }
      $client = Client::find($id);

      if(!$client && $id<>0)
      {
          return response()->json('Client Not Found',404);
      }

      $monitor->client_id = ($id<>0)?$id:null;

      $monitor->save();
      return response()->json('Assigned', 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $monitor = Monitor::find($id);
      if (!$monitor)
      return response()->json('Monitor Not found ',404);
      $monitor->update($request->all());
      return response()->json(Updated, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $monitor = Monitor::find($id);
      if (!$monitor)
      return response()->json('Monitor Not found ',404);
      $monitor->delete();
      return response()->json('Destroyed', 200);
    }
}
