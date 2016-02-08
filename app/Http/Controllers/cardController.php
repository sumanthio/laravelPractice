<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class cardController extends Controller
{
  public function index() {
    $users=user::all();
    $name="Sumanth";

    return View('card',compact('users'));
  }

    //
}
