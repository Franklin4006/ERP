<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('pages.company.index');
    }
    public function create()
    {
        return view('pages.company.add_edit');
    }
}
