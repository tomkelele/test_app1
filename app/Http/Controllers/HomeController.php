<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Product::limit(8)->get();
        return view('user.index', compact('products'));
    }

    public function getList(){
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        return view('user.all-product', compact('products'));
    }

    public function detail($id){
        $product = Product::findOrFail($id);
        return view('user.detail', compact('product'));
    }

    public function profile(){
        return view('user.profile');
    }

    public function changeAvatar(Request $request){
        if($request->photo){
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('upload/avatar'), $imageName);
            $user = User::findOrFail(Auth::user()->id);
            $user->avatar = $imageName;
            $user->save();
            return redirect()->back()->with('message-success', 'Change avatar success');
        }else{
            return redirect()->back()->with('message-error', 'You need to choose image man');
        }
    }
}
