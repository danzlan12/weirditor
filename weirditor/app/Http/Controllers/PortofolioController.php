<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
      $portofolio = Portofolio::all();
      //dd($portofolio);
      return view('Portofolio');
    }
}
