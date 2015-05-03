@extends('app')

@section('content')
	<h2>{{ $poblacion->nom }}</h2>
	
	@if ( !$poblacion->votants->count() )
		{{Lang::get('messages.noVotants')}}
	@else
		<dl>
			@foreach ( $poblacion->votants as $votant)
				<li>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.votants.destroy', $poblacion->slug, $votant->slug))) !!}
					<a href="{{ route('poblacions.votants.show', [$poblacion->slug, $votant->slug]) }}">{{ $votant->nom }}</a>
					(
                    			{!! link_to_route('poblacions.votants.edit', Lang::get('messages.edit'), array($poblacion->slug, $votant->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit(Lang::get('messages.delete'), array('class' => 'btn btn-danger')) !!}
                )
            {!! Form::close() !!}
        </li>
    @endforeach
</dl>
@endif

<p>
{!! link_to_route('poblacions.index', Lang::get('messages.backPoblations')) !!} |
{!! link_to_route('poblacions.votants.create', Lang::get('messages.createVotant'), $poblacion->slug) !!}
</p>
@endsection
