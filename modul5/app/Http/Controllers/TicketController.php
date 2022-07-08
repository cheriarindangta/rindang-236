<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function show(){
        $tickets = DB::table('tickets')->get();
        return view('admin.ticket', compact('tickets')); 
    }

    public function showUser(){
        $tickets = DB::table('tickets')->get();
        return view('user.ticketView', compact('tickets')); 
    }

    public function add(){
        return view('admin.ticketAdd');
    }

    public function addProcess(Request $request){
        DB::table('tickets')->insert([
            'employee_id' => $request->employee_id,
            'category' => $request->category,
            'price' => $request->price,
        ]);

        return redirect('ticket')->with('status', 'Complete!');
    }

    public function delete($id){
        $deleted = DB::table('tickets')->where('id', $id)->delete();
        return redirect('ticket')->with('status', 'Delete Complete!');
    }

    public function edit($id){
        $employees = Employee::all();
        $tickets = DB::table('tickets')->where('id', $id)->first();
        return view('admin.ticketEdit', compact('tickets', 'employees'));
    }

    public function editProcess(Request $request, $id){
        $validate=$request->validate([
            'category' => 'required',
            'price' => 'required',
        ]);

        $tickets = DB::table('tickets')->where('id', $id)
        ->update($validate);
        return redirect('ticket')->with('status', 'Edit Success!');
    }
}
