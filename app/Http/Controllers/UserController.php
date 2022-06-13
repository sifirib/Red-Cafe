<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

//

    public function products()
    {
        $product = Product::where('user_id', '=' , Auth::id())->get();
        return view('home.user.product', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function productdestroy($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect(route('userpanel.products'));
    }

    public function productupdate(Request $request, Product $product, $id)
    {
        //
        $data = Product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videolink = $request->videolink;
        $data->date = $request->date;
        $data->rating = $request->rating;
        $data->hours = $request->hours;
        $data->summary = $request->summary;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();

        return redirect(route('userpanel.products'));

    }
    public function productedit(Product $product,$id)
    {
        //
        $data = Product::find($id);
        $datalist = Category::all();
        return view('home.user.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);

    }

}
