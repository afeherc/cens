@extends('app')
 
@section('content')
    <h2>Edita el votant "{{ $votant->nom }}"</h2>
 
    {!! Form::model($votant, ['method' => 'PATCH', 'route' => ['poblacions.votants.update', $poblacion->slug, $votant->slug]]) !!}
        @include('votants/parcials/_form', ['submit_text' => 'Edita el votant'])
    {!! Form::close() !!}
@endsection
