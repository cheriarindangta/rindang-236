<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function show(){
        $employees = DB::table('employees')->get();
        return view('admin.employee', compact('employees')); 
    }

    public function add(){
        return view('admin.employeeAdd');
    }

    public function addProcess(Request $request){
        DB::table('employees')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);

        return redirect('employee')->with('status', 'Complete!');
    }

    public function delete($id){
        $deleted = DB::table('employees')->where('id', $id)->delete();
        return redirect('employee')->with('status', 'Delete Complete!');
    }
}
