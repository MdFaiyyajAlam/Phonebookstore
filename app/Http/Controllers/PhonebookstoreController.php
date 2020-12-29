<?php

namespace App\Http\Controllers;

use App\Models\Phonebookstore;
use Illuminate\Http\Request;

class PhonebookstoreController extends Controller
{
    public function index(Request $request)
    {
        $data['phonebookstores'] = Phonebookstore::where('name',$request->search)->orwhere('contact','LIKE', "%".$request->search."%")->get();
        //$data['phonebookstores'] = Phonebookstore::all();
        return view('home',$data);
    }

    public function create()
    {
        return view('insert');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'contact'=> 'required',
            'email'=> 'required',
            'cover'=> 'required|mimes:jpg,png',
            'address'=> 'required',
        ]);

        $filename = time(). "." .$request->cover->extension();
        $request->cover->move(public_path('covers'),$filename);

        Phonebookstore::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'cover'=>$filename,
            'address'=>$request->address,
        ]);

        return redirect()->route('phonebookstore.index');
    }

    
    public function show(Phonebookstore $phonebookstore)
    {
        //
    }

    
    public function edit(Phonebookstore $phonebookstore)
    {
        $data['record'] = $phonebookstore;
        return view('edit',$data);
    }

   
    public function update(Request $request, Phonebookstore $phonebookstore)
    {
        $request->validate([
            'name'=> 'required',
            'contact'=> 'required',
            'email'=> 'required',
            'cover'=> 'required|mimes:jpg,png',
            'address'=> 'required',
        ]);

        $filename = time(). "." .$request->cover->extension();
        $request->cover->move(public_path('covers'),$filename);

        Phonebookstore::find($phonebookstore->id)->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'cover'=>$filename,
            'address'=>$request->address,
        ]);
        return redirect()->route('phonebookstore.index');
    }

    
    public function destroy(Phonebookstore $phonebookstore)
    {
        $phonebookstore->delete();
        return redirect()->back();
    }
}
