<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
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
        $setting =  Setting::first();

        return view('home.product', [
            'data' => $data,
            'images' => $images,
            'setting' => $setting,
        ]);
    }

    public function categoryproducts($id) {


        $category = Category::find($id);
        $products = DB::table('products')->where('category_id', $id)->get();
        $setting = Setting::first();

        return view('home.categoryproducts', [
            'category' => $category,
            'products' => $products,
            'setting' => $setting
        ]);
    }


    public function menu() {

        $productlist1 = Product::limit(9)->get();
        $setting = Setting::first();

        return view('home.menu', [
            'setting' => $setting,
            'productlist1' => $productlist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function storemessage(Request $request) {

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
    }

    public function storecomment(Request $request) {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('product' ,['id'=>$request->input('product_id')])->with('info', 'Your comment has been sent, Thank You.');
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
