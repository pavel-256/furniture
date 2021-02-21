<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Illuminate\Http\Request;

// model

class UserController extends MainController
{
    public function getSignin()
    {
        // when user prees the signin
        self::$viewData['page_title'] .= 'SignIN page';
        return view('signin', self::$viewData);
    }
    // when user press the submit
    public function postSignin(SigninRequest $request)
    { // User model
        if (User::validate($request['email'], $request['password'])) {
            $rn = !empty($request['rn']) ? $request['rn'] : '';
            return redirect($rn); // when press submit sign in from cart come back cart after
        } else { // if the user fail validation
            self::$viewData['page_title'] .= 'SignIN page';
            return view('signin', self::$viewData)->withErrors('Wrong email or password');
        }
    }

    public function logout(Request $request) // dipendence injection
    // to ask for the object $request

    { // end the ssesion
        $request->session()->forget(['user_id', 'user_name', 'is_admin']); // from user.php
        return redirect('user/signin');
    }

    public function getSignup(Request $request)
    {
        self::$viewData['page_title'] .= 'SignUP page';
        self::$viewData['rn'] = !empty($request['rn']) ? '?rn=' . $request['rn'] : '';
        // if the user come from cart and singined in(already signed) return him back to cart
        // if will be rn in query string redirect to home page or no rn bcak to cart
        // dd(self::$viewData);
        return view('signup', self::$viewData);

    }
    // when the user press submit button
    public function postSignup(SignupRequest $request)
    {
        User::save_new($request); // colects data from imputs->to user.php
        $rn = !empty($request['rn']) ? $request['rn'] : '';
        // only if the user signed up wiil be the ridirect shop/cart from shop controller
        // or if the user is not signed up we be redirect to signup page
        return redirect($rn);
    }

    public function profile()
    {
        self::$viewData['page_title'] .= 'Profile page';
        return view('profile', self::$viewData);
    }
}
