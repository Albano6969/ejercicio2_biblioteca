@extends('app')
@section('title', "¿Que a pasado con mi libro?")
@section('content')
    @if($id > 0)
    <x-alert type="green">
        <h2 >Agregado correctamente</h2>
    </x-alert>
    @else
    <x-alert type="red">
        <h2 >Ha ocurrido un error al insertar</h2>
    </x-alert>
    @endif
@endsection