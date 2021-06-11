<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __invoke()
    {
        $name = Auth::check() ? Auth::user()->name : "guest";
        return "Hi, " . $name . "<br><a href=' ".route('catalog')."'>Go to catalog</a>";
    }
}
