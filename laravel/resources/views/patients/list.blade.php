@extends('template')

@section('content')
<div class="container">
<h1 class="text-center mt-4 mb-4">Lista pacjentów</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Operacje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($patientsList as $patient)
    <tr>
      <th scope="row">{{ $patient->id}}</th>
      <td><a href="{{ URL::to('patients/' . $patient->id ) }}">{{ $patient->name}}</a></td>
      <td>{{ $patient->email}}</td>
      <td>{{ $patient->phone}}</td>
      <td><a href="{{URL::to('patients/delete/' . $patient->id )}}" onclick="return confirm('napewno usuwac?')"> Usuń </a></br>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection('content')
