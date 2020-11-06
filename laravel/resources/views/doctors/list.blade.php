@extends('template')

@section('content')
<div class="container">
<h1 class="text-center mt-4">Lista lekarzy</h1>
<div class="text-center mb-2 mt-2"><a href="{{URL::to('doctors/create' )}}"> Dodaj lekarza </a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Specializacja</th>
      <th scope="col">Status</th>
      <th scope="col">Operacje</th>
 
    </tr>
  </thead>
  <tbody>
  @foreach ($doctorsList as $doctor)
    <tr>
      <th scope="row">{{ $doctor->id}}</th>
      <td><a href="{{ URL::to('doctors/' . $doctor->id ) }}">{{ $doctor->name}}</a></td>
      <td>{{ $doctor->email}}</td>
      <td>{{ $doctor->phone}}</td>
      <td>
          <ul>
          @foreach ($doctor->specializations as $specialization)

          <li>{{ $specialization->name}}</li>

          @endforeach
          </ul>
      </td>
      <td>{{ $doctor->status}}</td>
      <td><a href="{{URL::to('doctors/delete/' . $doctor->id )}}" onclick="return confirm('napewno usuwac?')"> Usuń </a></br>
      <a href="{{URL::to('doctors/edit/' . $doctor->id )}}"> Edytuj </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@foreach ($statistics as $stat)
  @if ($stat->status == "active")
  Liczba dostepnych lekarzy:  {{$stat->user_count}} </br>
  @endif
  @if ($stat->status == "inactive")
  Liczba niedostepnych lekarzy:  {{$stat->user_count}}
  @endif
@endforeach
@endsection('content')
