@extends('student.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Student</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('student') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Au existat unele probleme.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('student.update',$student->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">Nume:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Introduceti numele..." name="txtFirstName" value="{{ $student->first_name }}">
        </div>
        <div class="form-group">
            <label for="txtLastName">Prenume:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Introduceti prenumele..." name="txtLastName" value="{{ $student->last_name }}">
        </div>
        <div class="form-group">
            <label for="txtAddress">Adresa:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Introduceti adresa...">{{ $student->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Edit</button>
    </form>
@endsection