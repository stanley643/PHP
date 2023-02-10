<?php
            
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Stanley';
        $user = array(
            "name" => "Stanley Njoroge",
            "email"=> "stannjoroge643@gmail.com",
            "phone"=> "07958211"
        );
        return view('user', compact('name', 'user'));
    }
}
