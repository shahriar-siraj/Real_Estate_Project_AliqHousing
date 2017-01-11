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
                <div class="panel-heading" dir="rtl" lang="ar">{{ $textbox->textboxTitle }}</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="page-header" dir="rtl" lang="ar">
                            <h1>{{ $textbox->textboxTitle }}</h1>
                        </div>
                        <span class="label label-info float-right">{{ $textbox->category->categoryName }}</span>
                        
                        <div class="form-group float-right" dir="rtl" lang="ar" style="white-space: pre-line; margin-top: -10px;">
                            {{ $textbox->textboxText }}
                        </div>

                        <div class="form-group">
                        

                        {!! Form::open(array('route'=>['admin.textboxes.destroy',$textbox->id],'method'=>'DELETE')) !!}
                            <a href="{{ URL('admin/textboxes') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a>
                            
                            {!! link_to_route('admin.textboxes.edit','Edit', [$textbox->id], ['class'=>'btn btn-success']) !!}
                            {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection