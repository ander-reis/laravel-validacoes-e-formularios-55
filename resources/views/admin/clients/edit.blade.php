@extends('layouts.layout')

@section('content')
<h3>Editar cliente</h3>

@include('form._form_errors')

<a class="btn btn-default" href="{{ route($rota) }}">Voltar</a>

<form method="post" action="{{ route('clients.update',['client' => $client->id]) }}">

    {{--metodo spoofing 1ª opção--}}
    {{--<input type="hidden" name="client_type" value="{{$clientType}}">--}}

    {{--metodo spoofing 2ª opção--}}
    {{method_field('PUT')}}

    @include('admin.clients._form')
    <button type="submit" class="btn btn-default">Salvar</button>
</form>
@endsection