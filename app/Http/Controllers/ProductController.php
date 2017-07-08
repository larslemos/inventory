<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;


class ProductController extends Controller {

    public function list() {

       $products = DB::select('SELECT * FROM products');
       return view('listProducts')->with('products', $products);
    }

    public function show() {
      // $id = Request::input('id');
      $id = Request::route('id');
      $product = DB::select('SELECT * FROM products WHERE id=?', [$id]);
      return view('details')->with('product', $product[0]);
    }

    public function new() {
       return view('newProduct');
    }

    public function create() {
      //fetch form data
        $name = Request::input('name');
        $quantity = Request::input('quantity');
        $price = Request::input('price');
        $description = Request::input('description');

      //save on db
      DB::insert('INSERT INTO products (name, price, description, quantity ) VALUES(?, ?, ?, ?)',
      array($name, $price, $description, $quantity));

      //return notification
      // return view('create')->with('name', $name);
      return redirect('/products')->withInput();
    }

}
