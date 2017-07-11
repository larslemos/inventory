<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Product;
use Validator;
use App\Http\Requests\ProductRequest;
use Auth;

class ProductController extends Controller {

    public function __construct()
    {
        $this->middleware('authorization');
    }

    public function index() {
      return ProductController::list();
    }

    public function list() {
        if(Auth::guest()) {
            return redirect('/login');
        }

        $products = Product::all();
        return view('listProducts')->with('products', $products);
    }

    public function show($id) {
      $product = Product::find($id);

      return view('details')->with('product', $product);
    }

    public function new() {
       return view('newProduct');
    }

    public function create(ProductRequest $request) {
        //fetch form data
        //save on db
         Product::create($request->all());

        //return notification
        return redirect('/products')->withInput();
    }

    public function delete($id) {
      //  $id = Request::route('id');
       $product = Product::find($id);
       $product->delete();

      //  return redirect('/products');
        return redirect()->action('ProductController@list');
    }

}
