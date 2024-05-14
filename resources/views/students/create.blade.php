@extends('layouts.app')

@section('content')

{!! Form::open(['url' => 'students','method'=>'post']) !!}
<div class="form-group mb-3">
    <label for="exampleInputEmail1">Name</label>
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'name'])!!}
</div>

<div class="form-group mb-3">
    <label for="exampleInputEmail1">age</label>
    {!!Form::number("age",null,['class'=>'form-control', 'placeholder'=>'age'])!!}
</div>

<div class="form-group mb-3">
    <label for="exampleInputEmail1">IDno</label>
    {!!Form::text('IDno',null,['class'=>'form-control', 'placeholder'=>'IDno'])!!}
</div>
<button type="submit" class="btn btn-primary">Add</button>

{!! Form::close() !!}
@endsection