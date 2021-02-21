<?php

namespace App;

use DB;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Session;

//use Hash;  or

class User extends Model
{
    public static function validate($email, $password)
    {
        $valid = false;

        $user = DB::table('users as u')
            ->join('user_permissions as up', 'u.id', '=', 'up.uid')
            ->join('permissions as p', 'p.id', '=', 'up.pid')
            ->select('u.*', 'p.kind', 'up.pid')
            ->where('u.email', '=', $email)
            ->first();
        // dd($user);

        if ($user) { // security/hashing

            // The passwords match...
            if (Hash::check($password, $user->password)) {
                $valid = true;
                Session::put('user_name', $user->name); // invent user_name
                Session::put('user_id', $user->id); // invent user_id
                Session::flash('sm', 'You are logged in');

                if ($user->kind == 'Admin') { // if the user admin
                    Session::put('is_admin', true);
                }
            }
        }

        return $valid;

    }

    public static function save_new($request)
    { // $request= data from inputs

        $user = new self(); // INSERT INTO
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save(); // user like users tabe name

        DB::table('user_permissions')->insert(
            ['uid' => $user->id, 'pid' => 2]// finds  in the table
        );

        Session::put('user_name', $request['name']); // invent user_name
        Session::put('user_id', $user->id); // invent user_id new  user id
        Session::flash('sm', 'You are now signup'); // the massege

    }

    public static function update_profile()
    {

    }
}
