@extends('app')

@section('content')
        <h2>
		{!! link_to_route('poblacions.show', $poblacion->nom, [$poblacion->slug]) !!} -
		{{ $votant->dni }}
	</h2>
	<table class="table">
		<tr><td>Nom:</td><td>{{ $votant->nom }}</td></tr>
		<tr><td>Data de naixement:</td><td>{{ $votant->dataNaixement }}</td></tr>
		<tr><td>Data de creació:</td><td>{{ $votant->created_at }}</td></tr>
	</table>
@endsection

