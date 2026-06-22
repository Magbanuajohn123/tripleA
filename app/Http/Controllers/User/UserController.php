<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function home()
    { // Changed log message for clarity
        return view("user.homePage");
    }
}
