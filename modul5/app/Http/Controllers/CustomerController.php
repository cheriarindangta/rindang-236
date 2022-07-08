<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show(){
        $customers = DB::table('customers')->get();
        return view('admin.customer', compact('customers')); 
    }

    public function add(){
        return view('admin.customerAdd');
    }

    public function addProcess(Request $request){
        DB::table('customers')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);

        return redirect('customer')->with('status', 'Complete!');
    }

    public function delete($id){
        $deleted = DB::table('customers')->where('id', $id)->delete();
        return redirect('customer')->with('status', 'Delete Complete!');
    }
}
