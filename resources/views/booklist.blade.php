@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $category_name }}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table data-toggle="table" id="book_list" data-search="true" data-pagination="true" data-sort-order="desc">
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
@endsection

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
    $(document).ready(function(){

        response = {!! $data !!};

        $('#book_list').bootstrapTable({
            data: response,
            height: 500,

        });

        // $('#remove').click(function(){
        //     var ids = $.map($('#book_list').bootstrapTable('getSelections'), function (row) {
        //         return row.id;
        //     });
        //
        //     $('#book_list').bootstrapTable('remove', {
        //         field: 'id',
        //         values: ids
        //     });
        // })

        var $table = $('#book_list');
        $(function () {
            $table.on('click-row.bs.table', function (e, row, $element) {
                book_id = row.id;

                var url_dir = "{{ route('bookdetails', ':id') }}";
                url_dir = url_dir.replace(':id', book_id);
                location.replace(url_dir);

            });
        });


    });
</script>