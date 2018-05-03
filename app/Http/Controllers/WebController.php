<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(Request $request){
        $result=array();
        $result['username']=$request->get('username');
        $result['password']=$request->get('password');
        $result['method']='get';

        return json_encode($result,JSON_UNESCAPED_UNICODE);


    }

    public function postLogin(Request $request){
        header('Access-Control-Allow-Origin:*');
        $result=array();
        $result['username']=$request->get('username2');
        $result['password']=$request->get('password2');
        $result['method']='post';

        return json_encode($result,JSON_UNESCAPED_UNICODE);

    }

    public function helloRoute(Request $request){
        dump(route("hello"));

    }
}
