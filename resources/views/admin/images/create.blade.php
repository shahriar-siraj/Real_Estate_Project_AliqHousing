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
                <div class="panel-heading">Add a image</div>
                <div class="panel-body">
                    <?php
                        $tb;
                        foreach ($textboxes as $key => $value) {
                            $tb[$value->id] = $value->textboxTitle;
                        }
                    ?>
                    <div class="col-md-6" dir="rtl" lang="ar">
                        {!! Form::open(array('route'=>'admin.images.store','files'=>'true')) !!}
                        <div class="form-group">
                            {!! Form::label('textbox', 'Choose Textbox') !!}
                            {!! Form::select('textboxID', $tb, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('choose', 'Choose Image') !!}
                            {!! Form::file('imageUpload', ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Enter Description (Optional)') !!}
                            {!! Form::textarea('imageDescription', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Save',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
                            <a href="{{ URL('admin/images') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection