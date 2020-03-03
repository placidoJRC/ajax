@extends('index')

@section('content')

<div class="form-group">
    <form>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="ingresa nombre"/>
        <label for="">Raza:</label>
        <input type="text" name="raza" id="raza" placeholder="ingresa raza"/>
        
    </form>
    <a class="btn btn-primary btn-lg" href="{{url('personaje')}}" id="registro" role="button">Registrar</a>
</div>
@endsection