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
                <div class="panel-heading" dir="rtl" lang="ar">{{ $page->title }}</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="page-header" dir="rtl" lang="ar">
                            <h1>{{ $page->title }}</h1>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            @if($page->imagePath != "")
                                <img class="img-responsive img-thumbnail" src="{{ $page->imagePath }}" height="300" width="300" dir="rtl" />
                                @endif
                        </div>
                        <div class="col-md-6">
                        <div class="form-group float-right" dir="rtl" lang="ar" style="white-space: pre-line; margin-top: -10px;">
                            {{ $page->description }}
                        </div>
                        </div>
                        </div>

                        <br/><br/>
                        <div class="form-group">
                        

                        {!! Form::open(array('route'=>['admin.pages.destroy',$page->id],'method'=>'DELETE')) !!}
                            <a href="{{ URL('admin/pages') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a>
                            
                            {!! link_to_route('admin.pages.edit','Edit', [$page->id], ['class'=>'btn btn-success']) !!}
                            @if($page->type == "Blog")
                                {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                            @endif

                        {!! Form::close() !!}
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection