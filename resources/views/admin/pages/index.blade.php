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
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">Page List</div>
                <div class="panel-body">
                    <div class="col-md-6">
                    @foreach($pages as $page)
                        <div class="row">
                            <div class="col-md-6">{!! link_to_route('admin.pages.show',$page->title, [$page->id]) !!}</div>
                            <div class="col-md-6">
                                {!! Form::open(array('route'=>['admin.pages.destroy',$page->id],'method'=>'DELETE')) !!}
                                    {!! link_to_route('admin.pages.edit','Edit', [$page->id], ['class'=>'btn btn-success']) !!}
                                    @if($page->type == "Blog")
                                        {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    @endif
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <br/>
                    @endforeach
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add new page</a>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection