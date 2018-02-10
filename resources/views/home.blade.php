@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" >
                    <div class="panel-heading"  style="background-color: #D9EDF7; color: #31708F"><i class="fa fa-book" aria-hidden="true" ></i> Book Categories</div>

                    <div class="panel-body">
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>

                        <section class="wrapper">
                            <div class="container-fostrap">
                                {{--<div>--}}
                                    {{--<img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/>--}}
                                    {{--<h1 class="heading">--}}
                                         {{--Book Categories--}}
                                    {{--</h1>--}}
                                {{--</div>--}}
                                <div class="content">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/english.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> English
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 1]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/mathematics.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> Mathematics
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 2]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/administration.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> Administration
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 3]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/biology.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> Biology
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 4]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/electronics.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> Electronics
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 5]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="{{ asset('/images/physical.jpg') }}" />
                                                    </a>
                                                    <div class="card-content">
                                                        <h4 class="card-title">
                                                            <a href="#"> Physical Education
                                                            </a>
                                                        </h4>
                                                        <p class="">
                                                            Material Design is a visual programming language made by Google. Language programming...
                                                        </p>
                                                    </div>
                                                    <div class="card-read-more">
                                                        <a href="{{ route('categories',['id' => 6]) }}" class="btn btn-link btn-block">
                                                            Ver Libros
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
