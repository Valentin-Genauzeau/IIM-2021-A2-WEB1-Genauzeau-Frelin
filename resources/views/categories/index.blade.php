@extends('main')

@section('title', '| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

                <h2 class="text-center">New Category</h2>
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Name']) }}

                {{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection