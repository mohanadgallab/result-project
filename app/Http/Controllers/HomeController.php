<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function admin(){

        $x = User::all() ;
        return view('admin')->with('x', $x);
    }
    public function create(){
        //$x = User::find($id) ;
        return view('auth.create') ;
    }
    public function store(Request $request){

        $x = new User ;
        $x->name = $request->input('name');
        $x->email = $request->input('email');
        $x->password =bcrypt($request->input('password'));
        $x->isAdmin = $request->input('isAdmin');
        $x->result = $request->input('result');

        $x->save() ;
        return redirect('/admin/routes/');
       
    }

    public function edit($id){
        $x = User::find($id) ;
        return view('auth.edit')->with('x', $x);
    }

    public function update(Request $request, $id){
        $x = User::find($id) ;
        $x->name = $request->input('name');
        $x->email = $request->input('email');
        $x->isAdmin = $request->input('isAdmin');
        $x->result = $request->input('result');

        $x->save() ;
        return redirect('/admin/routes/');
    }
}
