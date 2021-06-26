<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        // Rilascio dati solo dell'utente loggato
        $current_user = Auth::user();
        
        $data = [
            'current_user' => $current_user
        ];

        return view('admin.home', $data);
    }
}
