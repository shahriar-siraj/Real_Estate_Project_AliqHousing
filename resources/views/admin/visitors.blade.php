@extends('layouts.admin')
@section('content')
    <style>
        .clear-history {
            display: inline;
            margin-left: 30px;
            background-color: #f4f4f4;
            border: solid 1px #ddd;
            color: #444;
            padding: 7px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 15px;
        }
    </style>
    <script src="{{ URL::asset('/assets/js/visitors.js') }}"></script>

    <section class="content">
        <div class="col-md-12">
            <div class="box-header">
                <div class="clear-history">Clear History</div>
            </div>
            <div class="box-body no-padding grid_div">
                <table id='grid_visitors' class='table table-condensed table-hover table-striped'>
                    <thead>
                    <tr>
                        <th data-column-id="no" data-type="numeric" data-identifier="true" data-sortable="false" data-width="2rem">No</th>
                        <th data-column-id="id" data-type="numeric" data-visible='false'>ID</th>
                        <th data-column-id="refer_url" data-width="5rem">Refer URL</th>
                        <th data-column-id="ip" data-width="5rem">IP Address</th>
                        <th data-column-id="datetime" data-width="5rem">DateTime</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
@endsection