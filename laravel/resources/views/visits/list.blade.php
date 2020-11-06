@extends('template')

@section('content')
<div class="container">
<h1 class="text-center mt-4">Wizyty</h1>
<div class="text-center mb-2 mt-2"><a href="{{ URL::to('visits/create') }}">Dodaj nowa wizyte</a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pacjent</th>
      <th scope="col">Lekarz</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($visits as $visit)
    <tr>
      <th scope="row">{{ $visit->id}}</th>
      <td>{{ $visit->patient->name}} ({{$visit->patient->pesel}})</td>
      <td>{{ $visit->doctor->name}}</td>
      <td>{{ $visit->date}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection('content')