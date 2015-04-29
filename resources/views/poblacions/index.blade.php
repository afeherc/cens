@extends('app')

@section('content')
	<h2>{{ Lang::get('messages.title') }}</h2>
	
	@if ( !$poblacions->count())
                {{ Lang::get('messages.noPoblations') }}
        @else
                <ul>
                        @foreach( $poblacions as $poblacion )
                                <li>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.destroy', $poblacion->slug))) !!}
					<a href="{{route('poblacions.show', $poblacion->slug) }}">{{ $poblacion->nom }}</a>
					(
                            		{!! link_to_route('poblacions.edit', Lang::get('messages.edit'), array($poblacion->slug), array('class' => 'btn btn-info')) !!},
                            		{!! Form::submit(Lang::get('messages.delete'), array('class' => 'btn btn-danger')) !!}
                        		)
                    			{!! Form::close() !!}
                
				</li>
                        @endforeach
                </ul>
        @endif
	<p>
		{!! link_to_route('poblacions.create',Lang::get('messages.create')) !!}
	</p>
@endsection
