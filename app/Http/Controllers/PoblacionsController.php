<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Poblacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoblacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $rules = [
        'nom' => ['required', 'min:3'],
        'slug' => ['required'],
        'habitants' => ['required', 'numeric', 'min:1']
    ];
    /**
     * 
     * @param string $locale
     * @return Response
     */
    public function index()
    {
        $poblacions = Poblacion::all();
        return view('poblacions.index', compact('poblacions'));
    }
    /**
     * 
     * @param string $locale
     * @param Poblacion $poblacion
     * @return Response
     */
    public function create(Poblacion $poblacion)
    {
        return view('poblacions.create', compact('poblacion'));
    }
    /**
     * 
     * @param string $locale
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        Poblacion::create($input);

        return Redirect::route('poblacions.index')
                ->with('message', 'Població creada!');
    }
    /**
     * 
     * @param string $locale
     * @param Poblacion $poblacion
     * @return Response
     */
    public function show(Poblacion $poblacion)
    {
        return view('poblacions.show', compact('poblacion'));
    }
    /**
     * 
     * @param string $locale
     * @param Poblacion $poblacion
     * @return Response
     */
    public function edit(Poblacion $poblacion)
    {
        return view('poblacions.edit', compact('poblacion'));
    }
    /**
     * 
     * @param string $locale
     * @param Poblacion $poblacion
     * @param Request $request
     * @return Response
     */
    public function update(Poblacion $poblacion, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $poblacion->update($input);

        return Redirect::route('poblacions.show', [$poblacion->slug])
                ->with('message', 'Població editada!');
    }
    /**
     * 
     * @param string $locale
     * @param Poblacion $poblacion
     * @return Response
     */
    public function destroy(Poblacion $poblacion)
    {
        $poblacion->delete();
        return Redirect::route('poblacions.index')
                ->with('message', 'Població eliminada!');
    }
}
