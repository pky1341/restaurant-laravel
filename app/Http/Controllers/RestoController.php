<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;
use crypt;
class RestoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function list(){
        $data=Restaurant::all();
        return view('list',['data'=>$data]);
    }
    public function add(Request $req){

        $resto=new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->addr=$req->input('message');
        $resto->save();
        $req->session()->flash('status','your form has been successfully submitted');
        return redirect('/list');
    }
    public function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('status','deleted successfully');
        return redirect('/list');
    }
    public function edit($id)
    {
        $data=Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $req)
    {
        $resto=Restaurant::find($req->input('id'));
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->addr=$req->input('message');
        $resto->save();
        $req->session()->flash('status','your form has been  updated successfully submitted');
        return redirect('/list');   
    }
    public function signup(Request $req)
    {
        return $req->input();
    }
}
