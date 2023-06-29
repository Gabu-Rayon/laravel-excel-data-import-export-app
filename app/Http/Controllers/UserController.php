<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
    * Display a listing of users.
    *
    * @return \Illuminate\Support\Collection
    */
    public function index():View
    {
        $users = User::get();

       return view('users', compact('users'));
    }
    

    /**
    * Export users to Excel.
    *
    * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
    */
    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

    /**
    * Import users from Excel file.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\RedirectResponse
    */
    public function import(Request $request)
    {
        Excel::import(new UsersImport(), $request->file('file'));

        return back();
    }
}