@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-pencil" aria-hidden="true"></i> Manage my Account  <a href="{{ route('home') }}"><button class="btn btn-primary pull-right" style="margin-top: -7px"><i class="fa fa-backward" aria-hidden="true"></i> Go to Categories</button></a></div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    @endif
                                @endforeach
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('update_account', ['id' => $user[0]->id]) }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user[0]->name }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $user[0]->email }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('paypal_email') ? ' has-error' : '' }}">
                                    <label for="paypal_email" class="col-md-4 control-label">PayPal E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input id="paypal_email" type="email" class="form-control" name="paypal_email" value="{{ $user[0]->paypal_email }}">
                                        @if ($errors->has('paypal_email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('paypal_email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">Contact Phone</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" name="phone" value="{{ $user[0]->phone }}" required>
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D9EDF7; color: #31708F">
                                    Published Books
                                </div>
                                <div class="panel-body">
                                    <table data-toggle="table" id="published_books"  data-pagination="true" data-sort-order="desc">
                                        <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true" >Book ID</th>
                                            <th data-field="book_name" data-sortable="true">Book Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #DFF0D8; color: #3C763D;">
                        Purchased Books
                    </div>

                    <div class="panel-body">

                        <table data-toggle="table" id="purchased_books" data-pagination="true" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" >Book ID</th>
                                <th data-field="book_name" data-sortable="true">Book Name</th>
                                <th data-field="author"  data-sortable="true">Book Author</th>
                                <th data-field="year"  data-sortable="true">Book Year</th>
                                <th data-field="conditions"  data-sortable="true">Book Condition</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        $(document).ready(function(){

            response = {!! $published_books !!};
            var $table = $('#published_books');

            $table.bootstrapTable({
                data: response,
            });

            $(function () {
                $table.on('click-row.bs.table', function (e, row, $element) {
                    book_id = row.id;

                    var url_dir = "{{ route('bookdetails', ':id') }}";
                    url_dir = url_dir.replace(':id', book_id);
                    location.replace(url_dir);

                });
            });


            response1 = {!! $purchased_books !!};
            var $table1 = $('#purchased_books');

            $table1.bootstrapTable({
                data: response1,
            });

        });
    </script>
@endsection