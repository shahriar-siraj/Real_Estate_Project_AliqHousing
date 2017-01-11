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
                <div class="panel-heading">Edit Image</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img class="img-thumbnail img-responsive" src="{{ URL::to('/') }}{{ $image->imagePath }}" />
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4" dir="rtl" lang="ar">
                        <div class="form-group">
                            <h2>{{ $image->imageName }}</h2>
                        </div>

                        <div class="form-group">
                            <h4 style="color: #00a65a !important;">{{ $image->imagePath }}</h4>
                        </div>
                        
                        {!! Form::model($image, array('route'=>['admin.images.update',$image->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('textbox', 'Choose Textbox') !!}
                            {!! Form::select('textboxID', $tb, $image->textboxID, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Enter Description') !!}
                            {!! Form::textarea('imageDescription', $image->imageDescription, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
                            <a href="{{ URL('admin/images') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection