<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('imgUrl')) {
            $imgUrl = $request->file('imgUrl')->storeAs(
                'public/avatars', time().'.'.$request->file('imgUrl')->extension()
            );
        }
        $card =  new Card([
            'imgUrl'=>$imgUrl,
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
            'imgUrl'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);

        $card = Card::findOrFail($id);

        if ($request->hasFile('imgUrl')) {

            $imgUrl = $request->file('imgUrl')->storeAs(
                'public/avatars', time().'.'.$request->file('imgUrl')->extension()
            );

        }
        Storage::delete($card->imgUrl);
        $card->imgUrl=$imgUrl;
        $card->title=$request->get('title');
        $card->description=$request->get('description');

       $card->save();
       return redirect('/cards')->with('success','update success');
    }
    public function destroy($id){
        $card = Card::findOrFail($id);
        Storage::delete($card->imgUrl);
        $card->delete();
        return redirect('/cards')->with('success','deleted');
    }
}
