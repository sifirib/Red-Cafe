<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
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

        $page = 'home';
        $sliderdata = Product::limit(4)->get();
        $productlist1 = Product::limit(9)->get();
        $setting = Setting::first();


        return view('home.index', [
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1,
            'page'=>$page,
            'setting'=>$setting
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


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginadmincheck(Request $request) {

//        dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }






    public function test($id, $name) {
        return view('home.test', ['id'=>$id, 'name'=>$name]);
//        echo "ID: ", $id;
//        echo "<br>Name: ", $name;
    }
}
