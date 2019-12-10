@extends('card.master')
@section('content')
    <div class="container">

        <div>
            <div class="form-group">
                <label for="imgUrl">Image</label>
                <img src="{{$card->imgUrl}}">

            </div>
            <div class="form-group">
                <label for="title">Title</label> <p class="font-weight-normal">{{$card->title}}</p>
            </div>
            <div class="form-group">
                <label for="description">Description</label><p class="font-weight-normal">{{$card->description}}</p>
            </div>

            <a type="submit" href="{{route('cards.edit',$card->id)}}" class="btn btn-primary">Edit</a>
            <form method="post" action="{{route('cards.destroy',$card->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection
