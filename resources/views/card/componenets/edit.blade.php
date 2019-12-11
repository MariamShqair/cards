@extends('card.master')
@section('content')



    <div class="container">

        <form method="post" action="{{route('cards.update',$card->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch');
            <div class="form-group">
                <label for="imgUrl">Image</label>
                <img src="{{Storage::url($card->imgUrl)}}">
                <div class="form-group">
                    <label for="imgUrl">put image here</label>
                    <input type="file" name="imgUrl" class="form-control" id="imgUrl" placeholder="imgUrl">
                </div>

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
