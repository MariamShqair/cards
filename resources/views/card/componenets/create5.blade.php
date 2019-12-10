@extends('card.master')

@section('content')
    <div class="container">
        <row>
        <div class="col-sm-8 offset-sm-2">
            <h1>Add new card</h1>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                     @endforeach
                </ul>

            </div>
        @endif

        <form method="post" action="{{route('cards.store')}}">
            @csrf
            <div class="form-group">
                <label for="imgUrl">put image here</label>
                <input type="text" name="imgUrl" class="form-control" id="imgUrl" placeholder="imgUrl">
            </div>
            <div class="form-group">
                <label for="title">put title here</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="description">put description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </row>
    </div>

@endsection
