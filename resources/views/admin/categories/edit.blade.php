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
                <div class="panel-heading">Edit Category</div>
                <div class="panel-body">
                    <div class="col-md-6">

                        {!! Form::model($category, array('route'=>['admin.categories.update',$category->id],'method'=>'PUT')) !!}
                        <div class="form-group" dir="rtl" lang="ar">
                            {!! Form::label('title', 'Enter Title') !!}
                            {!! Form::text('categoryName', $category->categoryName, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'Submit', 'class'=>'btn btn-success']) !!}
                            <a href="{{ URL('admin/categories') }}" class="btn btn-danger">Cancel</a>
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