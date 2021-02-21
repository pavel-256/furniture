<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{ // save the order to table orders  must be $order for table
    public static function getOrders()
    {

        return DB::table('orders as o')
            ->join('users as u', 'u.id', '=', 'o.user_id')
            ->select('o.*', 'u.name')
            ->get()
            ->toArray();
    }

    public static function getSum()
    {

        return DB::table('orders')->get()->sum('total');
    }

    public static function save_new()
    {$cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true);
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cart);
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm', 'Your order saved');
        Cart::clear();

    }
}
