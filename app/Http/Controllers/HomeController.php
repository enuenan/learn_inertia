<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        if (auth()->user()->userrole == 1) {
            return Inertia::render("Admin/Index");
        } elseif (auth()->user()->userrole == 2) {
            return Inertia::render("Manager/Index");
        }
    }
}
