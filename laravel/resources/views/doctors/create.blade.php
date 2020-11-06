@extends('template')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        </ul>
        @endforeach
    </div>
@endif
<h2 class="text-center">Dodawanie leakrza</h2>
<form action="{{ action ('DoctorController@store')}}" method="POST" role="form">
<input type="hidden" name="_token" value="{{csrf_token() }}" />
<div class="text-center">
<div class="form-group">
    <label for="name">Imie</label>
    <input type="text" class="form-control" name="name" />
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" name="email" />
</div>
<div class="form-group">
    <label for="password">Haslo</label>
    <input type="password" class="form-control" name="password" />
</div>
<div class="form-group">
    <label for="phone">Telefon</label>
    <input type="phone" class="form-control" name="phone" />
</div>
<div class="form-group">
    <label for="address">Adres</label>
    <input type="address" class="form-control" name="address" />
</div>
<div class="form-group">
    <label for="pesel">Pesel</label>
    <input type="text" class="form-control" name="pesel" />
</div>
<div class="form-group">
    <label for="specialization">Specjalizacja</label>
    @foreach($specializations as $specialization)
    <input type="checkbox" class="form-control" name="specializations[]" value="{{$specialization->id}}" />
    {{$specialization->name}}
    @endforeach
<input type="hidden" name="status" value="active" />
</div>
    <input type="submit" value="Dodaj" class="btn btn-primary ml-8" /> 
</form>
</div>
@endsection('content')