@extends('layouts.app') 
@section('contenido') 
    <h1>Iniciar sesion</h1> 
    <form method="POST" action="{{ route('login.store') }}"> 
        @csrf 
        <label for="user">Usuario</label> 
        <input id="user" name="user" type="text" value="{{ old('user') }}" required>
        <label for="password">Contraseña</label> 
        <input id="password" name="password" type="password" required> 
        <button type="submit">Ingresar</button> 
    </form> 
@endsection 
