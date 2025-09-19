<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
class CareersController extends Controller
{

   public function index(){
      // $jobs = \App\Models\Career::paginate(10);
      $jobs = Career::latest()->get(); 
         return view('career.index',['jobs'=>$jobs]);
   }
     public function show(Career $career)
   {
      return view('career.show', ['job' => $career]);
   }

    //
}
