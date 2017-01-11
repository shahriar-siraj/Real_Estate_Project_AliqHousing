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
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $image->imageName }}</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img class="img-thumbnail img-responsive" src="{{ URL::to('/') }}{{ $image->imagePath }}" />
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="page-header">
                            <h2>{{ $image->imageName }}</h2>
                        </div>
                        <span class="label label-info">{{ $image->textbox->textboxTitle }}</span>
                        
                        <div class="form-group">
                            <h4 style="color: #00a65a !important;">{{ $image->imagePath }}</h4>
                        </div>

                        <div class="form-group">
                            <p>{{ $image->imageDescription }}</p>
                        </div>

                        <div class="form-group">
                            <a href="{{ URL('admin/images') }}" class="btn btn-primary">Done</a>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection