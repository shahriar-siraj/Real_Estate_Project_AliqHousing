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

    <section class="content" dir="rtl" lang="ar">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Add a page</div>
                <div class="panel-body">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        {!! Form::open(array('route'=>'admin.pages.store', 'files'=>'true')) !!}
                        <div class="form-group">
                            {!! Form::label('type', 'Type') !!}
                            <p>Blog</p>
                        </div>

                        <div class="form-group">
                            {!! Form::label('title', 'Enter Page Title') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('choose', 'Upload Image') !!}
                            {!! Form::file('image', ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Enter Page Description') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Save',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
                            <a href="{{ URL('admin/pages') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        {!! Form::close() !!}

                        @if($errors->any())
                        <ul class='alert alert-danger'>
                            @foreach($errors->all() as $error)
                                <li style="margin-left: 10px;">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection