@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Books Categories</div>

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
                                <div>
                                    {{--<img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/>--}}
                                    <h1 class="heading">
                                        Books Categories
                                    </h1>
                                </div>
                                <div class="content">
                                    <div class="container">
                                        {{--<div class="row">--}}
                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="/category/bedroom"> Ingles--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}
                                        {{--<p class="">--}}
                                        {{--Material Design is a visual programming language made by Google. Language programming...--}}
                                        {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="/category/bedroom" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="#"> Matematicas--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}

                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="#" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="#"> Admi--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}

                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="#" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="#"> Biologia--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}

                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="#" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="#"> Electronica--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}

                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="#" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-xs-4 col-sm-4">--}}
                                        {{--<div class="card">--}}
                                        {{--<a class="img-card" href="#">--}}
                                        {{--<img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="card-content">--}}
                                        {{--<h4 class="card-title">--}}
                                        {{--<a href="#"> Edfi--}}
                                        {{--</a>--}}
                                        {{--</h4>--}}

                                        {{--</div>--}}
                                        {{--<div class="card-read-more">--}}
                                        {{--<a href="#" class="btn btn-link btn-block">--}}
                                        {{--Ver Libros--}}
                                        {{--</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <a class="img-card" href="#">
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
