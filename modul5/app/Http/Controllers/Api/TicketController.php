<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = DB::table('tickets')->get();
        return response()->json(['messages' => 'Success!', 'data' => $tickets], 200); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tickets = DB::table('tickets')->insert([
            'employee_id' => $request->employee_id,
            'category' => $request->category,
            'price' => $request->price,
        ]);
        return response()->json(['messages' => 'Success!', 'data' => $tickets], 200); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, $id)
    {
        $tickets = DB::table('tickets') -> where('id', $id)->update([
            'category' => $request->category,
            'price' => $request->price,
        ]);
        return response()->json(['messages' => 'Success!', 'data' => $tickets], 200); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = DB::table('tickets')->where('id', $id)->delete();
        return response()->json(['messages' => 'Success!', 'data' => $deleted], 200); 
    }
}
