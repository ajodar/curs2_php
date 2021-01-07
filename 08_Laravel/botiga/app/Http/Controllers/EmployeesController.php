<?php

namespace App\Http\Controllers;

use App\Department;
use App\Country;
use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $employees = Employee::get();

        return view('employees.index')
            ->with('employees', $employees);
    }

    public function create(){
        $countries=Country::orderBy('name', 'ASC')->get();
        $departments=Department::orderBy('name', 'ASC')->get();

        return view('employees.create')
            ->with('countries', $countries)
            ->with('departments', $departments);
    }

    public function store(){
        // Agafa dades del formulari
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country_id = $_POST['country_id'];
        $department_id = $_POST['department_id'];

        // Posa-les a la BBDD
        $employee = new Employee;
        $employee->name = $name;
        $employee->lastName = $lastName;
        $employee->address = $address;
        $employee->city = $city;
        $employee->phone = $phone;
        $employee->email = $email;
        $employee->country_id = $country_id;
        $employee->department_id = $department_id;

        // Guarda les dades a employee
        $employee->save();

        return redirect()->route('employees.index');
    }

    public function edit($id){
        $employee = Employee::find($id);
        $countries = Country::orderBy('name', 'ASC')->get();
        $departments = Department::orderBy('name', 'ASC')->get();
        return view('employees.edit')
            ->with('employee', $employee)
            ->with('countries', $countries)
            ->with('departments', $departments);
    }

    public function update($id){

        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country_id = $_POST['country_id'];
        $department_id = $_POST['department_id'];

        $employee = Employee::find($id);

        $employee->name = $name;
        $employee->lastName = $lastName;
        $employee->address = $address;
        $employee->city = $city;
        $employee->phone = $phone;
        $employee->email = $email;
        $employee->country_id = $country_id;
        $employee->department_id = $department_id;

        $employee->save();

        return redirect()->route('employees.index');


    }
}
