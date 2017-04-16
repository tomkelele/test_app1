<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('id', 'DESC')->paginate(4);
    	return view('admin.product.index', compact('products'));
    }

    public function postInsert(ProductFormRequest $request)
    {
        $product = new Product;
        if ($request->photo) {
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('upload/product'), $imageName);
        } else {
            $imageName = 'image-not-found-medium.gif';
        }
		$product->name        = $request->name;
		$product->description = $request->description;
		$product->price       = $request->price;
		$product->photo       = $imageName;
		$product->save();
		return redirect(url('admin/product/'))->with('message-added', 'New product was added');
    }

    public function getInsert()
    {
    	return view('admin.product.add');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect(url('admin/product'))->with('message-deleted', 'Product was deleted');
    }

    public function getEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function postEdit(ProductFormRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        if ($request->photo) {
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('upload/product'), $imageName);
            $product->photo     = $imageName;
        }
        $product->save();
        return redirect()->action('ProductsController@index')->with('message-edited', 'Edit product success');
    }

    public function getDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.detail', compact('product'));
    }
}
