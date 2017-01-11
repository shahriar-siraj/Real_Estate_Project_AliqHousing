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
                <div class="panel-heading">Category List</div>
                <div class="panel-body">
                    <div class="col-md-6">
                    @foreach($categories as $cat)
                        <div class="row">
                            <div class="col-md-6">{{ $cat->categoryName }}</div>
                            <div class="col-md-6">
                                {!! Form::open(array('route'=>['admin.categories.destroy',$cat->id],'method'=>'DELETE')) !!}
                                    {!! link_to_route('admin.categories.edit','Edit', [$cat->id], ['class'=>'btn btn-success']) !!}
                                    {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <br/>
                    @endforeach
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add new category</a>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection