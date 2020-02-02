<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CgiController extends Controller
{
    public function index(Request $request)
    {
        return "Controller is here";
    }
    public function ocr(Request $request)
    {
        $post= Post::find($request->id);
        $HTTP_method = 'http';
        $hostname='laraveltest.com';
        $cgi='/cgi-bin/test.sh';
        $my_data = $post->cover_image;
        $data_string = '';
        $data_string = $my_data;
        $curl_handle = curl_init ();
        curl_setopt ($curl_handle, CURLOPT_URL, $HTTP_method . '://' . $hostname . $cgi);
        curl_setopt ($curl_handle, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($curl_handle, CURLOPT_POST, 1);
        curl_setopt ($curl_handle, CURLOPT_POSTFIELDS, $data_string);
        $result = curl_exec ($curl_handle) or die ('There has been an error');
        curl_close ($curl_handle);
<<<<<<< HEAD
        $post->body = $result;
=======
//        $post->body = $result;
//        $post->save();
        dd(auth());
>>>>>>> 8f5e8d708de66de5968c804296eeea084ff872a8
        if (auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }

        return view('posts.edit')->with('post',$post);


    }
}
