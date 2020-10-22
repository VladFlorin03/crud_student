@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Student</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('student') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Au existat unele probleme.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Nume:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Introduceti numele..." name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Prenume:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Introduceti prenumele..." name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtAddress">Adresa:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Introduceti adresa..."></textarea>
        </div>
        <button type="submit" class="btn btn-default">Adauga</button>
    </form>
@endsection