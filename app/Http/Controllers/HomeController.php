<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class HomeController extends Controller
{
    public function index() {

        $sliderdata = Product::limit(4)->get();

        return view('home.index', [
            'sliderdata' => $sliderdata
        ]);
    }

    public function test($id, $name) {
        return view('home.test', ['id'=>$id, 'name'=>$name]);
//        echo "ID: ", $id;
//        echo "<br>Name: ", $name;
    }
}
