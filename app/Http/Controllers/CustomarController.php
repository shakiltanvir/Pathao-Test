<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customar;


class CustomarController extends Controller
{
    public function showCustomar($id)
    {
         $customar = Customar::find($id);

         return response()->json(['details' => $customar]);

    }
    public function index()
    {
         $customar = Customar::all();

         return response()->json(['details' => $customar]);

    }
    public function newCustomar(request $request){

        // if($request->ismethod('post'))
        $data=$request->all();
        $modal=new Customar();
        $modal->firstname= $data['firstname'];
        $modal->lastname= $data['lastname'];
        $modal->password= $data['password'];
        $modal->phone= $data['phone'];
        $modal->save();
        $id=$modal->id;
        // $message='Customar added succesfully';
        return response()->json(['id'=> $id]);

    }
    public function destroyClient($id) //Destruir cliente y todo lo relacionado de la bbdd
    {
        $cliente = Customar::find($id); 
        $cliente->delete(); //delete the client
        // DB::table('client_project')->where('client_id',$id)->delete(); //delete the client_project relations which field client_id is the same that the client i just deleted.

        return response()->json('Succesfully Deleted');
    }
    public function updateClient(request $request)
    {
        $data=$request->all();
        $id=$data['id'];
        // $id=5;
        $modal = Customar::find($id); 
        $modal->firstname= $data['firstname'];
        $modal->lastname= $data['lastname'];
        $modal->password= $data['password'];
        $modal->phone= $data['phone'];
        $modal->update();
        return response()->json('Succesfully Updated');

    }

}

