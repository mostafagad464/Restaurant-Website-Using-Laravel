<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Restaurant;
use App\Menu;


class MenuController extends Controller
{
    // show menu
    public function index(){
        $menus = Menu::paginate(10);
        return view('menu',compact('menus'));
    }

    // method to create menus
    public function add(){
        return view('addmenu');
    }

    // method to store data
    public function store(Request $request){

        $request->validate([
            'title'=> 'required',
            'description'=>'required',
            'category'=>'required',
            'offer'=>'required | boolean',
            'price'=>'required | integer',
            //'photo'=> 'photo'
        ]);

        // // move image to public folder and save it name in database 
        // $img = $request->file('photo');
        // $imagename = $request->file('photo')->getClientOriginalName();
        // $img->move( public_path('imgs/menus') ,$imagename);


        // 1- store data into db
        Menu::Create([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'category'=> $request->category,
            'offer'=> $request->offer,
            //'photo'=> $request->file('photo')->getClientOriginalName(),
        ]);

       
        // 2- redirct to any other view
        return redirect(  route('allMenu') );
    }
}
