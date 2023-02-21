<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\FactoryInfo;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $factory = FactoryInfo::find(1);
        $contacts = Contact::all();
        return view('admin.dashboard-component',compact('factory','contacts'));
    }
}
