<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $actus = Actu::all();

        return view('home', [
            'actus'=> $actus,
        ]);
    }

    public function menu()
    {
        $categories = Categories::all();
        
        return view('menu', [
            'categories' => $categories,
        ]);  
    }
    public function reservation()
    {
        return view('reservation');
    }
}

