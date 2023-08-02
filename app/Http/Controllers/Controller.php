<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\View;
use App\Models\Post;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $json = public_path('company-profile.json');
        $data = file_get_contents($json);
        $dat_decode = json_decode($data);
        $section = $dat_decode->pages->index->section;
        $mainbanner= $this->getKey($section, 'main_banner');
        $why_us= $this->getKey($section,'why_us');
        $services= $this->getKey($section,'services');
        $subscription= $this->getKey($section,'subscription');
        $post = Post::findOrFail(1);
        // dd($mainbanner);
        return view('home', ['mb'=>$mainbanner,'wu'=>$why_us,'serv'=>$services,'subs'=>$subscription,'posts'=>$post]);
    }

    function getKey($data, $key){
        foreach($data as $value){
            if($value->key==$key){
                return $value->components;
            }
        }
    }

}
