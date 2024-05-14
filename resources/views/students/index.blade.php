@extends ('layouts.app')

@section ('content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IDno</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <!-- {{$id = 1}} -->
        @foreach ($students as $stud)
        <tr>
            <td>{{$id++}}</td>
            <td scope='row'>{{$stud->IDno}}</td>
            <td scope='row'>{{$stud->name}}</td>
            <td scope='row'>{{$stud->age}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('students.edit',$stud->id)}}">Update</a>
            </td>
            <td>
                <form action="{{ route('students.destroy',$stud->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("students.create")}}">Create Student</a>
</div>
@endsection
