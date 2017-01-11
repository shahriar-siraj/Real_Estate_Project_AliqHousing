@extends('layouts.admin')
@section('content')
    <link href="{{ URL::asset('/assets/css/statistics.css') }}" rel="stylesheet" >
    <script src="{{ URL::asset('/assets/js/statistics.js') }}"></script>

    <section class="content">
        <div class="col-md-12">
            <div class="box-header">
                <div class="whatsapp">WhatsApp Clicks: <span class='clicks'>{{ $click_whatsapp }}</span></div>
                <div class="phone">Call Clicks: <span class='clicks'>{{ $click_call }}</span></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box-header">
                <div class="title">&ndash; WhatsApp Clicks</div>
                <div class="clear-history" data-type="whatsapp">Clear History</div>
            </div>
            <div class="box-body no-padding grid_div">
                <table id='grid_whatsapp' class='table table-condensed table-hover table-striped'>
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
        <div class="col-md-12">
            <div class="box-header">
                <div class="title">&ndash; Call Clicks</div>
                <div class="clear-history" data-type="phone">Clear History</div>
            </div>
            <div class="box-body no-padding grid_div">
                <table id='grid_phone' class='table table-condensed table-hover table-striped'>
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
        <div class="col-md-12">
            <div class="box-header">
                <div class="title">&ndash; Building Clicks</div>
                <div class="clear-history" data-type="building">Clear History</div>
            </div>
            <div class="box-body no-padding grid_div">
                <table id='grid_building' class='table table-condensed table-hover table-striped'>
                    <thead>
                    <tr>
                        <th data-column-id="no" data-type="numeric" data-identifier="true" data-sortable="false" data-width="2rem">No</th>
                        <th data-column-id="id" data-type="numeric" data-visible='false'>ID</th>
                        <th data-column-id="building" data-width="5rem">Building</th>
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