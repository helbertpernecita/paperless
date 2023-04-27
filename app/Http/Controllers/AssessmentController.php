<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Employee;

use function Pest\Laravel\json;
use Whoops\Exception\Formatter;
use function Pest\Laravel\getJson;

class AssessmentController extends Controller
{
    public function firstUrl(){
            $users = User::all();


            // $response =  User::jsonResponse(false,200,'ERROR',$users);

            // foreach($users as $value){
            //     $string = [
            //         // $key = implode("",array_reverse(str_split($key))),
            //         $value = implode("",array_reverse(str_split($value))),
            //     ];
                
            // }

            // $users = array_reverse(json_decode($users));

            return response()->json($users);
            // return $user;
            // $hello = print_r(str_split("Hello"));
            // $string = '';

            // foreach($users as $user){
            //     $string = $user->name;
            // }

            // $string = "Hello World";
            // $words = str_split($string);
            // $words = array_reverse($words);
            // $new_string = implode("", $words);
            // echo json($new_string); // dlroW olleH

            // return response()->json($hello);

            // return view('assessment.first', compact('users'));

            // 1. get the all data from data base
            // 2. convert data into json file
            // 3. 
    }
}
