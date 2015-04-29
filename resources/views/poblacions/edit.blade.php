@extends('app')
 
@section('content')
    <h2>Edita una població</h2>
 
    {!! Form::model($poblacion, ['method' => 'PATCH', 'route' => ['poblacions.update', $poblacion->slug]]) !!}
        @include('poblacions/parcials/_form', ['submit_text' => 'Edita una població'])
    {!! Form::close() !!}
@endsection
