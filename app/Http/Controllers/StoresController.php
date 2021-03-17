<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stores;

class StoresController extends Controller
{
    public function index(){ 
        $stores = Stores::paginate(5);
        
        return view('Stores.stores_list', compact('stores'));
    }
    
    public function store(Request $request){
        $stores = new Stores();
        $stores->name = $request->name;
        $stores->email = $request->email;
        // dd($request);die;
        $validatedData = $request->validate([
            'email' => ['required', 'unique:stores', 'max:255'],
            'name' => ['required'],
        ]);
        
        $stores->save();   
        return redirect()->route('stores_list');
    }

    public function show_add_form(){
        return view('Stores.Stores_add');
    }
    
    public function show($id){
        $stores = Stores::find($id);
        return view('Stores.stores_show', compact('stores'));
    }

    public function edit( Request $request,$id){
        $stores = Stores::where('id',$id)->update([
            'name'=>$request->post('name'),
            'email'=>$request->post('email')
        ]);
        return redirect()->route('stores_list');
    }

    public function delete(Request $request,$id){
        Stores::where('id',$id)->delete();
        return redirect()->route('stores_list');
    }


}
