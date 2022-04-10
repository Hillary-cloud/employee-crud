<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function showEmployees(){
        $employee = Employee::paginate(10);
        return view('/show_employee',['employees'=>$employee]);
    }

    public function createIndex(){
        return view('create');
    }

    public function createEmployee(Request $request){
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'address'=>'required',
        // ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        $request->session()->flash('status','Employee created successfully');
        return redirect('/show_employee');
    }

    public function editIndex($id){
       $employee = Employee::find($id);
       return view('/edit',['employees'=>$employee]);
    }

    public function update(Request $request){
        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        $request->session()->flash('status','Employee updated successfully');
        return redirect('/show_employee');
    }
    public function delete(Request $request, $id){
        $employee = Employee::find($id);
        $employee->delete();
        $request->session()->flash('status','Employee deleted successfully');
        return redirect('/show_employee');
    }
}
