@extends('layouts.app')
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Book Name: {{$data[0]->book_name}}</div>

                    <div class="panel-body">
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-xs-4 item-photo">
                            <img style="max-width:100%;" src="{{ asset('images/'.$data[0]->picture) }}" />
                        </div>
                        <div class="col-xs-5" style="border:0px solid gray">
                            <!-- Datos del vendedor y titulo del producto -->
                            <h3>{{ $data[0]->book_name }}</h3>
                            <h5 style="color:#337ab7">Sold by <a href="#">{{ $data[0]->name }}</a> · <small style="color:#337ab7">({{rand(100, 10000)}} sales)</small></h5>

                            <!-- Precios -->
                            <h6 class="title-price"><small>Offer Price</small></h6>
                            <h3 style="margin-top:0px;">US $ {{$data[0]->price}}</h3>



                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Aqui van los campos de paypal por si el cliente va a pagar el servicio -->
                            <input type="hidden" name="business" value="lenis.daniel-facilitator@outlook.com">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="item_name" value="Product Name: {{$data[0]->book_name}}">
                            <input type="hidden" name="item_number" value="{{$data[0]->id}}">
                            <input type="hidden" name="amount" value="{{$data[0]->price}}">
                            <!-- <input type="hidden" name="tax" value="future tax qty"> -->
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" id="custom_parameter" name="custom" value="{{$data[0]->user_id}}">
                            <!-- Specify URLs -->
                            <input type='hidden' name='cancel_return' value='{{ route('home') }}'>
                            <input type='hidden' name='return' value='{{ route('success') }}'>
                            <!-- ********************************************************************** -->

                            <!-- Botones de compra -->
                            <div class="section" style="padding-bottom:20px;">
                                <button type="submit" class="btn btn-success"><span style="margin-right:20px"  aria-hidden="true"><i class="fa fa-paypal" aria-hidden="true"></i> Pay Book</button>
                            </div>
                            </form>
                        </div>

                        <div class="col-xs-9">
                            <ul class="menu-items">
                                <li class="active">Product Details</li>
                            </ul>
                            <div style="width:100%;border-top:1px solid silver">
                                <p style="padding:15px;">
                                    <small>
                                        {{$data[0]->descr}}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection