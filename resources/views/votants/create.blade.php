@extends('app')
 
@section('content')
    <h2>Crea un votant per a la població de "{{ $poblacion->nom }}"</h2>
 
    {!! Form::model(new App\Votant, ['route' => ['poblacions.votants.store', $poblacion->slug], 'class'=>'']) !!}
        @include('votants/parcials/_form', ['submit_text' => 'Crea un votant'])
    {!! Form::close() !!}
@endsection
