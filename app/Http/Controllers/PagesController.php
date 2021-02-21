<?php

namespace App\Http\Controllers;

use App\Content;
use DB;

class PagesController extends MainController
{

    public function home()
    { // For each product in home page separately because the size and location  of the each picture
        self::$viewData['homeproducts'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Laptop Table')
            ->get()
            ->toArray();
        self::$viewData['homeproducts1'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Gray Double Bed')
            ->get()
            ->toArray();
        self::$viewData['homeproducts2'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Yellow Wide Chair')
            ->get()
            ->toArray();
        self::$viewData['homeproducts3'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'White  Chair')
            ->get()
            ->toArray();
        self::$viewData['homeproducts4'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Brown Leather Sofa')
            ->get()
            ->toArray();
        self::$viewData['homeproducts5'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Green Sofa')
            ->get()
            ->toArray();
        self::$viewData['homeproducts6'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Metalic Chair')
            ->get()
            ->toArray();
        self::$viewData['homeproducts7'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'Braided Chair')
            ->get()
            ->toArray();
        self::$viewData['homeproducts8'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.ptitle', '=', 'White Wood Bed Side Table')
            ->get()
            ->toArray();

        self::$viewData['page_title'] .= 'Home Page';
        return view('home', self::$viewData);
    }

    public function content($url)
    {
        // from the table contents
        self::$viewData['contents'] = Content::getContent($url);
        self::$viewData['page_title'] .= !empty(self::$viewData['contents'][0]->title) ? self::$viewData['contents']
        [0]->title : 'Site Content'; /// if will no content put in title '' or have content put  default title
        return view('content', self::$viewData);
    }

    public function gallery()
    {

        self::$viewData['page_title'] .= 'Gallery Page';
        return view('gallery', self::$viewData);
    }

}
