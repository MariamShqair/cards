@extends('card.master')
@section('content')
    <div class="container">

        <div class="row content p-1">

            <div class="col-md ">
                <div class="row logo">
                    <div class="col-3 stories">
                        <h1> Stories We Like.</h1>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-3 bar">
                        <div class="img-wrapper">
                            <img src="img/bar.png"alt="..." class="rounded-circle">
                        </div>

                    </div>
                </div>
                <div class="row cards">
                    <div class="col-md-5">
                        <div class="card" style="width: 100%;">
                            <div class="card-wrapper">
                                <img src="https://source.unsplash.com/random" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 100%;">
                            <div class="card-wrapper">
                                <img src="https://source.unsplash.com/random" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-wrapper">
                                <img src="https://source.unsplash.com/random" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
