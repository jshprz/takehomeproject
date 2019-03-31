<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    protected function index()
    {
        return view('employee_maintenance.authenticated.index');
    }

    protected function getEmployees()
    {
        return response()->json(Employee::all());
    }

    protected function editEmployee(Request $request)
    {   
        return response()->json(Employee::where('id',$request->id)->first());
    }

    protected function updateEmployee(Request $request)
    {
        Employee::where('id',$request->id)->update([
            'employee_first_name' => $request->firstname,
            'employee_last_name' => $request->lastname,
            'employee_middle_name' => $request->middlename,
            'employee_sex' => $request->sex,
            'employee_full_address' => $request->address,
            'employee_contact_number' => $request->contact,
            'employee_salary' => $request->salary,
            'employee_position' => $request->position,
            'employee_status' => $request->status
        ]);
        return response()->json(['success' => true,'data' => Employee::all()]);
    }

    protected function deleteEmployee(Request $request)
    {
        Employee::where('id', $request->id)->delete();
        return response()->json(['success' => true]);
    }

    protected function addEmployee(Request $request)
    {
        if(empty($request->firstname) || empty($request->lastname) || empty($request->middlename) || empty($request->sex) || empty($request->address) || empty($request->contact) || empty($request->salary) || empty($request->position) || empty($request->status))
        {
            return response()->json($request->all());
        }
        else
        {
            $employee = new Employee;
            $employee->employee_first_name = $request->firstname;
            $employee->employee_last_name = $request->lastname;
            $employee->employee_middle_name = $request->middlename;
            $employee->employee_sex = $request->sex;
            $employee->employee_full_address = $request->address;
            $employee->employee_contact_number = $request->contact;
            $employee->employee_salary = $request->salary;
            $employee->employee_position = $request->position;
            $employee->employee_status = $request->status;
            $employee->save();

            return response()->json(['success' => true]);
        }
        
    }

    protected function searchEmployee(Request $request)
    {
        return response()->json(Employee::where('id', 'like', $request->searchValue.'%')->orWhere('employee_first_name', 'like', $request->searchValue.'%')->orWhere('employee_last_name', 'like', $request->searchValue.'%')->orWhere('employee_middle_name', 'like', $request->searchValue.'%')->orWhere('employee_sex', 'like', $request->searchValue.'%')->orWhere('employee_full_address', 'like', $request->searchValue.'%')->orWhere('employee_contact_number', 'like', $request->searchValue.'%')->orWhere('employee_salary', 'like', $request->searchValue.'%')->orWhere('employee_position', 'like', $request->searchValue.'%')->orWhere('employee_status', 'like', $request->searchValue.'%')->get());
    }

    protected function doLogout()
    {
        auth()->logout();
        return redirect('/');
    }
}
