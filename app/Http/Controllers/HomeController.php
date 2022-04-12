<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class HomeController extends Controller
{
    public function index() {

        return view('home.index');
    }

    public function test($id, $name) {
        return view('home.test', ['id'=>$id, 'name'=>$name]);
//        echo "ID: ", $id;
//        echo "<br>Name: ", $name;
    }
}
