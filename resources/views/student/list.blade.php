@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>CRUD Student</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('student.create') }}">Adauga</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nr</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Adresa</th>
            <th width="280px">Actiune</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('student.show',$student->id) }}">Arata</a>
                        <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sterge</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection