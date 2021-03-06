@extends('template')

@section('content')
<div class="container">
<h2>Dodawanie wizyty</h2>
<form action="{{ action ('VisitController@store')}}" method="POST" role="form">
<input type="hidden" name="_token" value="{{csrf_token() }}" />
<div class="form-group">
    <label for="name">Lekarz</label>
    <select name="doctor">
        @foreach ($doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
    </select>
    <input type="text" class="form-control" name="name" />
</div>
<div class="form-group">
    <label for="name">Pacjent</label>
    <select name="patient">
        @foreach ($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="name">Data Wizyty:</label>
    <input type="text" class="form-control" name="date" />
</div>
    <input type="submit" value="Dodaj" class="btn btn-warning" />
</form>
</div>
@endsection('content')