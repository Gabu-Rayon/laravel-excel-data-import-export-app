<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithFileTypeXlsx;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('index', compact('users'));
    }
    public function import(Request $request)
    {
        $request->validate([
        'file' => 'required|mimes:xls,xlsx,csv'
    ]);
        Excel::import(new UsersImport,request()->file('file'));
        //Excel::import(new UsersImport(), $request->file('file'), null, 'xlsx');

        return redirect()->back();
    }
}