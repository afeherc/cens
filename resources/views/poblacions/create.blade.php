@extends('app')
 
@section('content')
    <h2>{{Lang::get('messages.create')}}</h2>
  	
    {!! Form::model(new App\Poblacion, ['route' => ['poblacions.store']]) !!}
        @include('poblacions/parcials/_form', ['submit_text' => Lang::get('messages.create')])
    {!! Form::close() !!}
@endsection
