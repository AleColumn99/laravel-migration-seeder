<?php

namespace App\Http\Controllers;

use App\Vacanza;
use Illuminate\Http\Request;

class VacanzaController extends Controller
{
    public function index() {

        $vacanze = Vacanza::paginate(10);

        return view('vacanze', ['vacanze' => $vacanze]);

    }
 
}
