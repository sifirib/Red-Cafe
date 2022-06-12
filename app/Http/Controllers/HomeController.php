<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnArgument;

class HomeController extends Controller
{

    public static function mainCategoryList() {

        return Category::where('parent_id', '=', 0)->with('children')->get();

    }

    public function index() {

        $sliderdata = Product::limit(4)->get();
        $productlist1 = Product::limit(6)->get();

        return view('home.index', [
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function product($id) {

        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();

        return view('home.product', [
            'data' => $data,
            'images' => $images
        ]);
    }

    public function categoryproducts($id) {

        $category = Category::find($id);
        $products = DB::table('products')->where('category_id', $id)->get();

        return view('home.categoryproducts', [
            'category' => $category,
            'products' => $products
        ]);
    }

    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }










    public function test($id, $name) {
        return view('home.test', ['id'=>$id, 'name'=>$name]);
//        echo "ID: ", $id;
//        echo "<br>Name: ", $name;
    }
}
