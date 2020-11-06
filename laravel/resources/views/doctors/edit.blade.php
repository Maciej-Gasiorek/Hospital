@extends('template')

@section('content')
<div class="container">
<h2>Edycja lekarza</h2>
<form action="{{ action ('DoctorController@editStore')}}" method="POST" role="form">
<input type="hidden" name="_token" value="{{csrf_token() }}" />

<input type="hidden" name="id" value="{{$doctor->id }}" />
<div class="form-group">
    <label for="name">Imie</label>
    <input type="text" class="form-control" name="name" value="{{$doctor->name}}" />
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" name="email"  value="{{$doctor->email}}" />
</div>
<div class="form-group">
    <label for="phone">Telefon</label>
    <input type="text" class="form-control" name="phone"  value="{{$doctor->phone}}" />
</div>
<div class="form-group">
    <label for="address">Adres</label>
    <input type="text" class="form-control" name="address"  value="{{$doctor->address}}" />
</div>
<div class="form-group">
    <label for="pesel">Pesel</label>
    <input type="text" class="form-control" name="pesel"  value="{{$doctor->pesel}}" />
</div>
<div class="form-group">
    <label for="pesel">Specjalizacja</label>
    @foreach($specializations as $specialization)
    @if($doctor->specializations->contains($specialization->id))
    <input type="checkbox" class="form-control" name="specializations[]" value="{{$specialization->id}}" checked/>{{$specialization->name}}
    @else
    <input type="checkbox" class="form-control" name="specializations[]" value="{{$specialization->id}}" />{{$specialization->name}}
    @endif
    @endforeach
</div>

<div class="form-group">
    <label for="status">Status</label>
    @if($doctor->status == 'active')
    Aktywny<input type="radio" class="form-control" name="status"  value="active" checked />
    Nieaktywny<input type="radio" class="form-control" name="status"  value="inactive" />
    @else
    Aktywny<input type="radio" class="form-control" name="status"  value="active" />
    Nieaktywny<input type="radio" class="form-control" name="status"  value="inactive" checked />
    @endif
</div>

    <input type="submit" value="Zatwiedz" class="btn btn-primary">
</form>
</div>
@endsection('content')