

@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Cristian Franco Bedoya
        </div>

        <div class="links">
            <a href="{{ route('vivienda.create') }}">Registrar viviendas</a>
            <a href="{{ route('vivienda.index') }}">Listar viviendas</a>
            <a href="{{ route('vivienda.show') }}">Estadísticas</a>
        </div>
    </div>
</div>
@endsection
