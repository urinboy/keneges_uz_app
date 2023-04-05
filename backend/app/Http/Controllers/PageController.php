<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    # Asosiy sahifa
    public function index(){
        return view('welcome');
    }

    # Boshqaruv paneli
    public function dashboard(){
        return view('dashboard');
    }
    # Block uchun
    public function blocks(){
        return view('blocks');
    }
}
