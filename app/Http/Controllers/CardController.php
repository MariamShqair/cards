<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function index(){
        $cards = Card::all();
        return view('card.componenets.index',compact('cards'));

//        return view('card.temp');
    }
    public function create(){
        return view('card.componenets.create5');
    }
    public function store(Request $request){
        $request->validate([
            'imgUrl'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $card =  new Card([
            'imgUrl'=>$request->get('imgUrl'),
            'title'=>$request->get('title'),
            'description'=>$request->get('description')
        ]);

        $card->save();
        return redirect('/cards')->with('success','content saved!');
    }

    public function show($id){

        $card = Card::findOrFail($id);

        return view('card.componenets.show',compact('card'));
    }
    public function edit($id){
        $card = Card::findOrFail($id);

        return view('card.componenets.edit',compact('card'));
    }
    public function update(Request $request, $id){
        $request->validate([

            'title'=>'required',
            'description'=>'required'
        ]);

        $card = Card::findOrFail($id);

        $card->title=$request->get('title');
        $card->description=$request->get('description');

       $card->save();
       return redirect('/cards')->with('success','update success');
    }
    public function destroy($id){
        $card = Card::findOrFail($id);

        $card->delete();
        return redirect('/cards')->with('success','deleted');
    }
}
