<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Poblacion;
use App\Votant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VotantsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $rules =[
		'dni'=>['required','min:9'],
		'slug'=>['required','min:2'],
		'nom'=>['required','min:2'],
		'dataNaixement'=>['required','date_format:Y-n-j']

	];
	public function index(Poblacion $poblacion)
	{
		return view('votants.index', compact('poblacion'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Poblacion $poblacion, Votant $votant)
	{
		return view('votants.create', compact('poblacion'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Poblacion $poblacion, Request $request)
	{
		$this->validate($request, $this->rules);
		$input = Input::all();
		$input['poblacion_id'] = $poblacion->id;
		Votant::create( $input );
 
		return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Votant creat!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Poblacion $poblacion, Votant $votant)
	{
		return view('votants.show', compact('poblacion', 'votant'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Poblacion $poblacion, Votant $votant)
	{
		
		return view('votants.edit', compact('poblacion', 'votant'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Poblacion $poblacion, Votant $votant, Request $request)
	{
		$this->validate($request, $this->rules);
		$input = array_except(Input::all(), '_method');
		$votant->update($input);
 
		return Redirect::route('poblacions.votants.show', [$poblacion->slug, $votant->slug])->with('message', 'Votant editat!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Poblacion $poblacion, Votant $votant)
	{
		$votant->delete();

		return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Votant eliminat!');

	}

}
