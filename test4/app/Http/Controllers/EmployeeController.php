<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Employee as Employee;

class EmployeeController extends Controller
{
    // indexアクションを定義
    public function index() {
        //return "こんにちは！";
        $employee = Employee::create(['name' => '山田太郎','email' => 'yamada@test.com', 'password' => 'hogehoge', 'remember_token' => 'hogehoge']);
        //$employee = Employee::insert(['name'=>'山田太郎','email'=>'yamada@test.com', password'=>'hogehoge', 'remember_token'=>'hogehoge']);
        //$employee = Employee::find(1);
        return view('index')->with('employee', $employee);
        #return view('index');
    }
}
