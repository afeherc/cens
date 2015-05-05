<?php

/**
 * 
 * @param string $entity
 * @param array $routes
 */
/*function setRoutes($entity, $routes) {
    foreach ($routes as $method => $url) {
        Route::get($url, [
            'as' => $entity . ucfirst($method),
            'uses' => ucfirst($entity) . 'Controller@' . $method
        ]);
    }
}

$appRoutes = [
    'poblacions' => [
        'index' => '{locale}/poblacions',
        'create' => '{locale}/poblacions/{poblacion}',
        'store' => '{locale}/poblacions',
        'show' => '{locale}/poblacions/{poblacion}',
        'edit' => '{locale}/poblacions/{poblacion}',
        'update' => '{locale}/poblacions/{poblacion}',
        'destroy' => '{locale}/poblacions/{poblacion}'
    ]/*,
    'votants' => [
        'index' => '{locale}/poblacions/{poblacion}/votants',
        'create' => '{locale}/poblacions/{poblacion}/votants/{votant}',
        'store' => '{locale}/poblacions/{poblacion}/votants',
        'show' => '{locale}/poblacions/{poblacion}/votants/{votant}',
        'edit' => '{locale}/poblacions/{poblacion}/votants/{votant}',
        'update' => '{locale}/poblacions/{poblacion}/votants/{votant}',
        'destroy' => '{locale}/poblacions/{poblacion}/votants/{votant}'
    ]*
];*/

//Route::get('/','WelcomeController@index');
//Route::get('{locale}','WelcomeController@index');

/*foreach ($appRoutes as $entity => $routes) {
    setRoutes($entity, $routes);
}
$router->get('/',['as'=>'index','uses' => 'WelcomeController@index']);
$router->get('poblacions',['as'=>'index', 'uses' => 'PoblacionsController@index']);
$router->get('poblacions',['as'=>'store', 'uses' => 'PoblacionsController@store']);
$router->get('poblacions/{poblacion}',['as'=>'show', 'uses' => 'PoblacionsController@show']);
$router->get('poblacions/{poblacion}',['as'=>'edit', 'uses' => 'PoblacionsController@edit']);
$router->get('poblacions/{poblacion}',['as'=>'update', 'uses' => 'PoblacionsController@update']);
$router->get('poblacions/{poblacion}',['as'=>'destroy', 'uses' => 'PoblacionsController@destroy']);
$router->get('poblacions/{poblacion}',['as'=>'create', 'uses' => 'PoblacionsController@create']);
/*Route::get('{locale}/poblacions/{poblacion}',
    ['as' => 'poblacionsCreate', 'uses' => 'PoblacionsController@create']);
Route::get('{locale}/poblacions',
    ['as' => 'poblacionsStore', 'uses' => 'PoblacionsController@store']);
Route::get('{locale}/poblacions/{poblacion}',
    ['as' => 'poblacionsShow', 'uses' => 'PoblacionsController@show']);
Route::get('{locale}/poblacions/{poblacion}',
    ['as' => 'poblacionsEdit', 'uses' => 'PoblacionsController@edit']);
Route::get('{locale}/poblacions/{poblacion}',
    ['as' => 'poblacionsUpdate', 'uses' => 'PoblacionsController@update']);
Route::get('{locale}/poblacions/{poblacion}',
    ['as' => 'poblacionsDestroy', 'uses' => 'PoblacionsController@destroy']);*/

/*    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

Route::resource('poblacions','PoblacionsController');
Route::resource('poblacions.votants','VotantsController');

Route::model('votants', 'Votant');
Route::model('poblacions', 'Poblacion');

Route::bind('votants', function($value, $route) {
    return App\Votant::whereSlug($value)->first();
});
Route::bind('poblacions', function($value, $route) { 
        return App\Poblacion::whereSlug($value)->first();
});
