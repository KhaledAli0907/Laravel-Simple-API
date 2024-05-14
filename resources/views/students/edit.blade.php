@extends('layouts.app')

@section('content')

{!! Form::open(["url" => "students/$stud->id/update", "method"=>"put"]) !!}
<div class="form-group mb-3">
    <label for="exampleInputEmail1">Name</label>
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>$stud->name])!!}
</div>

<div class="form-group mb-3">
    <label for="exampleInputEmail1">age</label>
    {!!Form::number("age",null,['class'=>'form-control', 'placeholder'=>$stud->age])!!}
</div>

<div class="form-group mb-3">
    <label for="exampleInputEmail1">IDno</label>
    {!!Form::text('IDno',null,['class'=>'form-control', 'placeholder'=>$stud->IDno])!!}
</div>
<button type="submit" class="btn btn-primary">Add</button>

{!! Form::close() !!}
@endsection
