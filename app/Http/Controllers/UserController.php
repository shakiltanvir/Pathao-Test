<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        return "dnsajc";
    }
    public function create(Request $request,$id){
        $data = $request->all();
        
        $model = new User();
        $model->id = $id;
        $model->name = $data['name'];
        $tags="";
        foreach($items as $data['tags']){
            $a= $items+",";
            $tags+=$a;
        }
        $model->tags = $tags;
        $model->save();


        return response()->json(['result','save']);


    }

    public function all($tags){

        $res = User::Where('tags',$tags)->get();

        return $res;
    }
}
