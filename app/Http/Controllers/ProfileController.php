<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function index()
    {
        $pageTitle = 'My Profile'; // Contoh nilai untuk page title
        return view('profile', ['pageTitle' => $pageTitle]);
    }

}
