@extends('card.master')
@section('content')
    <div class="container">

        <div class="row content p-1">
            <div class="col-sm-8 offset-sm-2">
                <h1>Add Contact</h1>
            </div>
            <div class="col-md-12 ">
                <div class="row logo">
                    <div class="col-3 stories">
                        <h1> Stories We Like.</h1>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-3 bar">
                        <div class="img-wrapper">
                            <img src="https://source.unsplash.com/random"alt="..." class="rounded-circle">
                        </div>

                    </div>
                </div>
                <div class="row cards">
                    @foreach($cards as $card)
                    <div class="col-sm-4 card">
                        <div class="card-img" style="width: 100%;">
                            <div class="card-wrapper">
                                <img src= "{{Storage::url($card->imgUrl)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <a href="{{ route('cards.show',$card->id)}}">
                                <h5 class="card-title">{{$card->title}} </h5>
                                <p class="card-text">{{$card->description}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-12">
                <a type="submit" href="{{route('cards.create')}}" class="btn btn-success"> Create Card</a>
            </div>

        </div>
    </div>

@endsection
