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
                <div class="panel-heading">Image List</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <a href="{{ route('admin.images.create') }}" class="btn btn-primary">Add new image</a>
                    
                    @foreach($images as $image)
                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-thumbnail img-responsive" src="{{ URL::to('/') }}{{ $image->imagePath }}" />
                            </div>
                            <div class="col-md-6">{!! link_to_route('admin.images.show',$image->imageName, [$image->id]) !!}</div>
                            <div class="col-md-4">
                                {!! Form::open(array('route'=>['admin.images.destroy',$image->id],'method'=>'DELETE')) !!}
                                    {!! link_to_route('admin.images.edit','Edit', [$image->id], ['class'=>'btn btn-success']) !!}
                                    {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <br/>
                    @endforeach
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection