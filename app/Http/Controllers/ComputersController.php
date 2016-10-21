<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Computer;
use App\Client;

class ComputersController extends Controller
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
      $computers = Computer::all();
      return response()->json($computers,200);
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
      Computer::create($request->all());
      return response()->json('Guardado', 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $computer = Computer::find($id);
      if (!$computer)
        return response()->json('Computer not found',404);
      return response()->json($computer, 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function showassign($id)
    {
      $client = Client::find($id);
      if (!$client)
        return response()->json('Client not found',404);

      $computers = $client->computer()->get();
     if ($computers->isEmpty())
        return response()->json('Client without Computer',404);

      return response()->json($computers, 200);

    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assign(Request $request, $id, $id2)
    {
      $computer = Computer::find($id2);
      if (!$computer)
      return response()->json('Computer Not found ',404);

      $client = Client::find($id);
      if(!$client && $id<>0)
        return response()->json('Client Not Found',404);

      $computer->client_id= ($id<>0)?$id:null;
      $computer->save();
      return response()->json('Asignado', 200);
    }

    public function update(Request $request, $id)
    {
       $computer = Computer::find($id);
       if (!$computer)
       return response()->json('Computer Not found ',404);
       $computer->update($request->all());
       return response()->json('Updated', 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $computer = Computer::find($id);
      if (!$computer)
      return response()->json('Computer Not found ',404);

      $computer->delete();
      return response()->json('Destroyed', 200);
    }
}
