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
        <div class="col-md-12" dir="rtl" lang="ar">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Page</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($page->imagePath != "")
                                <img class="img-responsive" src="{{ $page->imagePath }}" height="300" width="300" />
                                @endif
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                        {!! Form::model($page, array('route'=>['admin.pages.update',$page->id],'files'=>'true','method'=>'PUT')) !!}
                        <div class="form-group" dir="rtl" lang="ar">
                            {!! Form::label('category', 'Page Type') !!}
                            <p>{{ $page->type }}</p>
                        </div>

                        <div class="form-group">
                            {!! Form::label('choose', 'Change Image') !!}
                            {!! Form::file('image', ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group" dir="rtl" lang="ar">
                            {!! Form::label('title', 'Enter Page Title') !!}
                            {!! Form::text('title', $page->title, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group" dir="rtl" lang="ar">
                            {!! Form::label('body', 'Enter Page Description') !!}
                            {!! Form::textarea('description', $page->description, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
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
        </div>
    </section>
@endsection