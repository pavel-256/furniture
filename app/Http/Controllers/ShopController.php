<?php

namespace App\Http\Controllers;

use App\Categorie; // from categorie.php
use App\Order; // from order.php
use App\Product; // from product.php
use Cart;
use Illuminate\Http\Request;
use Session;

// to addtocart method http request($_GET,POST)
// add to car method us - press button

// from product.php

class ShopController extends MainController
{
    public function categories()
    {
        self::$viewData['categories'] = Categorie::all()->toArray(); // all categories from data base to arr
        self::$viewData['page_title'] .= 'Shop Categories'; // property from MainController
        return view('categories', self::$viewData); // return to view page categories

    }

    public function products(Request $request, $curl)
    {
        self::$viewData['orderBy'] = $request['orderBy'];
        Product::getProducts($curl, self::$viewData);
        return view('products', self::$viewData);
    }

    public function item($curl, $purl)
    {

        if ($product = Product::where('purl', '=', $purl)->first()) {
            // acording to the data base purl colum
            $product = $product->toArray(); // when we have this item
        } else { // this item not available now

            abort(404);
        }
        self::$viewData['page_title'] .= $product['ptitle']; // page title+ product title
        self::$viewData['item'] = $product; // show the item-use in foreach item.blade.php
        return view('item', self::$viewData);

    }

    public function addToCart(Request $request) // request class

    {
        Product::addToCart($request['pid']); // pid= the id of the product from the button item.blade.php (data-pid)
    }

    public function cart() // the cart list

    {
        self::$viewData['page_title'] .= 'Shop Cart Page';
        $cart = Cart::getContent()->toJson(); // from json to arry becuse the bug
        $cart = json_decode($cart, true);
        sort($cart); // sort the cart list
        self::$viewData['cart'] = $cart;
        //dd($cart);  use in cart.blade.php
        return view('cart', self::$viewData);

    }
    public function clearCart() // clear the cart list

    {

        Cart::clear();
        return redirect('shop/cart'); // return to carlt list page
    }

    public function removeCart($pid)
    {

        Cart::remove($pid);
        return redirect('shop/cart'); // product 1 remove from list
    }

    public function updateCart(Request $request)
    {
        // from cart.blade.php minus/plus button
        Product::updateCart($request['pid'], $request['op']);
    }

    public function orderNow()
    {

        if (Cart::isEmpty()) { // if the cart empty return the user to shop

            return redirect('shop/cart');
        }

        if (!Session::has('user_id')) {

            return redirect('user/signup?rn=shop/cart'); // if the user isnot conected
        } // query string tho werify the user comes only from the cart will be ?rn=shop/cart

        Order::save_new();
        return redirect('shop'); // after prees order
    }

    public function search($purl)
    {
        if ($products = Product::where('ptitle', '=', $purl)->first()) {
            return $this->item(null, $products->purl, $products->categorie_id);
        } else {
            dd("search not found");
        }
    }
}
