@extends('card.master')
@section('content')



    <div class="container">

        <form method="post" action="{{route('cards.update',$card->id)}}">
            @csrf
            @method('patch');
            <div class="form-group">
                <label for="imgUrl">Image</label>
                <img src="{{$card->imgUrl}}">

            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="title"  value="{{$card->title}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{$card->description}}">
            </div>
            <button type="submit" class="btn btn-primary"> Update</button>

        </form>
    </div>

@endsection
