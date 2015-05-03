@extends('app')

@section('content')
	<div id="canv">
{{ App::setLocale("ca") }}
	</div>
	<button onclick="changeLang(this)">ca</button>

	<h2>{{ Lang::get('messages.title') }}</h2>
	
	@if ( !$poblacions->count())
                {{ Lang::get('messages.noPoblations') }}
        @else
                <dl>
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
                </dl>
        @endif
	<p>
		{!! link_to_route('poblacions.create',Lang::get('messages.create')) !!}
	</p>
	<script>
		function changeLang(lang){
			//document.getElementById('test').innerHTML=lang.innerHTML;
			var idiom = lang.innerHTML;
				document.getElementById('canv').innerHTML='{{ App::setLocale("ca") }}';
				document.getElementById('test').innerHTML='<a href="{{route('poblacions.index') }}">Recarrega</a>'; 

		}
	</script>
@endsection
