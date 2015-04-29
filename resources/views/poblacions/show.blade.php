@extends('app')

@section('content')
	<h2>{{ $poblacion->nom }}</h2>
	
	@if ( !$poblacion->votants->count() )
		La teva població no té votants.
	@else
		<ul>
			@foreach ( $poblacion->votants as $votant)
				<li>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.votants.destroy', $poblacion->slug, $votant->slug))) !!}
					<a href="{{ route('poblacions.votants.show', [$poblacion->slug, $votant->slug]) }}">{{ $votant->nom }}</a>
					(
                    			{!! link_to_route('poblacions.votants.edit', 'Edita', array($poblacion->slug, $votant->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Elimina', array('class' => 'btn btn-danger')) !!}
                )
            {!! Form::close() !!}
        </li>
    @endforeach
</ul>
@endif

<p>
{!! link_to_route('poblacions.index', 'Torna al menú poblacions') !!} |
{!! link_to_route('poblacions.votants.create', 'Crea un votant', $poblacion->slug) !!}
</p>
@endsection
