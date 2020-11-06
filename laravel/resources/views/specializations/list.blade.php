@extends('template')

@section('content')
<div class="container">
<h1 class="text-center mt-4">Specjalizacje</h1>
<div class="text-center mb-2 mt-2"><a href="{{ URL::to('specializations/create') }} ">Dodaj specjalizacje</a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa specjalizacji</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($specializations as $specialization)
    <tr>
      <th scope="row">{{ $specialization->id}}</th>
      <td><a href="{{ URL::to('doctors/specializations/' . $specialization->id) }}">{{ $specialization->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection('content')