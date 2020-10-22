@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>CRUD Student</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('student') }}"> Inapoi</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nume:</th>
            <td>{{ $student->first_name }}</td>
        </tr>
        <tr>
            <th>Prenume:</th>
            <td>{{ $student->first_name }}</td>
        </tr>
        <tr>
            <th>Adresa:</th>
            <td>{{ $student->address }}</td>
        </tr>

    </table>
@endsection