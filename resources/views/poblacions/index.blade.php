@extends('app')
@section('content')
<h2>{{ Lang::get('messages.title') }}</h2>
@if ( !$poblacions->count())
{{ Lang::get('messages.noPoblations') }}
@else
<table class="table table-striped table-bordered">
    <tbody>
    @foreach( $poblacions as $poblacion )
    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE',
    'route' => array('poblacions.destroy', $poblacion->slug))) !!}
        <tr>
            <td><a href="{{route('poblacions.show', $poblacion->slug) }}">
                {{ $poblacion->nom }}</a></td>
            <td>{!! link_to_route('poblacions.edit', Lang::get('messages.edit'),
             array($poblacion->slug), array('class' => 'btn btn-info pull-right')) !!}</td>
            <td>{!! Form::submit(Lang::get('messages.delete'),
             array('class' => 'btn btn-danger pull-right')) !!}</td>
        </tr>
    {!! Form::close() !!}
    @endforeach
    </tbody>
</table>
@endif
<p>{!! link_to_route('poblacions.create',Lang::get('messages.create')) !!}</p>
@endsection
