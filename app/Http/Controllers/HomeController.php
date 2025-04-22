<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;

use App\Models\Product;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {
        return view('admin.index');
    }

    public function home()
    {
        $product = Product::all();

        return view('home.index',compact('product'));
    }

    public function login_home()
    {
        $product = Product::all();
        
        return view('home.index',compact('product'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);

        return view('home.product_details',compact('data'));
    }

    public function add_cart($id)
    {
        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id =$user_id;

        $data->product_id = $product_id;

        $data->save();

        Flasher::timeout(10000)->addSuccess('Product Added to the Cart Successfully');

        return redirect()->back();
    }
}
