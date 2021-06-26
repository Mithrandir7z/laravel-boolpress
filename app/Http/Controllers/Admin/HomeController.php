<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        // Rilascio dati dell'utente loggato
        $current_user = Auth::user();
        dd($current_user);

        return view('admin.home');
    }
}
