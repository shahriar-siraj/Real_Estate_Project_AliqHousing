@extends('layouts.admin')
@section('content')
    <link href="{{ URL::asset('/assets/css/profile.css') }}" rel="stylesheet" >
    <script src="{{ URL::asset('/assets/js/profile.js') }}"></script>

    <section class="content">
        <div class="col-md-12">
            <div class="box-body no-padding">
                <div>
                    <div id="div_error" class="clear alert alert-warning display-none"></div>
                    <div class="clear float-left label">
                        <label for='uid'>User ID</label>
                    </div>
                    <div class="float-right div-user-input input">
                        <input id="uid" type="text" class="form-control input-sm user-input" value="{{ $uid }}" />
                    </div>
                    <div class="clear float-left label">
                        <label for='pwd'>Password</label>
                    </div>
                    <div class="float-right div-user-input input">
                        <input id="pwd" type="password" class="form-control input-sm user-input" value="" />
                    </div>
                    <div class="clear float-left label">
                        <label for='confirm'>Confirm Password</label>
                    </div>
                    <div class="float-right div-user-input input">
                        <input id="confirm" type="password" class="form-control input-sm user-input" value="" />
                    </div>
                    <div class="clear save">
                        <button id='save' class="btn bg-olive btn-flat" style="margin:auto;"><i class="fa fa-save"></i> <span name='text'>Update</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection