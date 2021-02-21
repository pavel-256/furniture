<?php

namespace App;

use Cart; // class from darryldecode
use DB; // inner class to take data from database
use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Product extends Model
{
    public static function getProducts($curl, &$viewData) // url=(name-name) and <title>xxx<title> by reference from shopcontroller.php

    {

        $orderBy = $viewData['orderBy'];

        if (!empty($orderBy)) {

            $products = DB::table('products as p')
                ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                ->select('p.*', 'c.ctitle', 'c.curl')
                ->where('c.curl', '=', $curl)
                ->orderBy('p.price', $orderBy)
                ->paginate(4);

        } else {

            $products = DB::table('products as p')
                ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                ->select('p.*', 'c.ctitle', 'c.curl')
                ->where('c.curl', '=', $curl)
                ->paginate(4);

        }
        /*SELECT p.*,c.ctitle FROM products p
        JOIN categories c ON c.id = p.categories_id
        WHERE c.curl = 'drills'*/

        if ($products->count() == 0) { // no exact category

            abort(404);
        } // for view product.blade.php
        $viewData['products'] = $products; // $product to use in foreach product.blade.php
        $viewData['page_title'] .= $products[0]->ctitle; // show the title of every category from index 0 to...    the $viewData by reference from shopcontroller.php

    }

    public static function addToCart($pid) // request class // the id of the product

    {
        if (is_numeric($pid)) {
            // $pid must be numeric and exist
            if ($product = self::find($pid)) {

                $product = $product->toArray();

                if (!Cart::get($pid)) {
                    Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage']]); // the Cart class (adding itemdarryldecode  Cart::add(455, 'Sample Item', 100.99, 2, array()); )
                    // you can add only one product to thre cart
                    Session::flash('sm', $product['ptitle'] . 'was added to cart'); // for one use and delet data

                }
            }
        }
    }

    public static function updateCart($pid, $op)
    {

        if (is_numeric($pid)) {

            if (Cart::get($pid)) {

                if ($op == 'minus') {
                    Cart::update($pid, ['quantity' => -1]);

                } elseif ($op == 'plus') {
                    Cart::update($pid, ['quantity' => 1]);
                }
            }
        }
    }

    public static function save_new($request)
    {

        $image_name = 'default-image.png';
        $ex = ['png', 'jpeg', 'jpg', 'gif', 'bmp'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (isset($_FILES['image']['name'])) {
                $file_info = pathinfo($_FILES['image']['name']);
                if (in_array(strtolower($file_info['extension']), $ex)) {

                    if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                        $file = $request->file('image');
                        $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
                        $request->file('image')->move(public_path() . '/furniture', $image_name);
                        $img = Image::make(public_path() . '/furniture/' . $image_name);
                        $img->resize(460, 570, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save();
                    }
                }

            }

        }

        $product = new self();
        $product->categorie_id = $request['category_id'];
        $product->purl = $request['url'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->price = $request['price'];
        $product->pimage = $image_name;
        $product->save();
        Session::flash('sm', 'Product saved successfuly! ');
    }

    public static function update_item($request, $id)
    {

        $image_name = '';
        $ex = ['png', 'jpeg', 'jpg', 'gif', 'bmp'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (isset($_FILES['image']['name'])) {
                $file_info = pathinfo($_FILES['image']['name']);
                if (in_array(strtolower($file_info['extension']), $ex)) {

                    if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                        $file = $request->file('image');
                        $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
                        $request->file('image')->move(public_path() . '/furniture', $image_name);
                        $img = Image::make(public_path() . '/furniture/' . $image_name);
                        /*$img->rotate(-360);*/
                        $img->resize(460, 570, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save();
                    }
                }

            }

        }

        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->purl = $request['url'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->price = $request['price'];
        if ($image_name) {
            $product->pimage = $image_name;
        }
        $product->save();
        Session::flash('sm', ' Product updated successfuly! ');

    }
}
