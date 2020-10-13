<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cdv', function(){
    //return view ('cdv');
    //return 'cdv';
    //return ['name' => 'Anna','surname'=>'kowalska'];

    return view ('/cdv',['name' => 'Anna','surname'=>'kowalska']);

});


Route::get('/pages/{x}', function ($x) {
    $pages = [
        'about' => 'Strona CDV',
        'contact' => 'poznan',
        'home' => 'strona domova'
    ];
    return $pages[$x];
});

// Route::get('/addres/{city}', function (String $city) {
//     echo "Miasto: $city";
// });

// Route::get('/addres/{city}/{street}', function (String $city, String $street) {
//     echo <<< ADRESS
//     Miasto: $city<br>
//     Ulica : $street<br>
// ADRESS;
// });

Route::get('/address/{city?}/{street?}/{zipCode?}', function (String $city = "brak danych", String $street="-", int $zipCode = null) {
    $zipCode = substr($zipCode,0,2).'-'.substr($zipCode,2,3);
    echo <<< ADRESS
    Kod pocztowy: $zipCode <br>
    Miasto: $city<br>
    Ulica : $street<br>
ADRESS;
}) -> name('address');

Route::redirect('/adres/{city?}/{street?}/{zipCode?}','/address');

Route::prefix('admin')->group(function(){
    Route::get('/home/{name}',function (String $name){
        echo "Witaj $name na stronie administracyjniej";
    });

    Route::get('users',function(){
        echo "<h3>Uzytkownicy systemu</h3>";
    });
});

Route::redirect('/admin/{name}','/admin/home/{name}');

Route::get('/user/{name}/{age?}',function(String $name,int $age = null){
    echo "<h3>Dane</h3>";

})->where(['name'=>'[A-Za-z]+', 'age' =>'[0-9]+']);



Route::get('/city', function(){
    return view ('city',['name' => 'Anna','surname'=>'kowalska','city'=>'Poznań']);
});

Route::get('/table', function(){
    $car =[
        ['model'=> 'Ferrari','mark'=> 'F430','color'=>'red'],
        ['model'=> 'Fiat','mark'=> '126p','color'=>'white'],
        ['model'=> 'Porsche','mark'=> 'Panamera','color'=>'black']
    ];
    return view ('table',['car'=> $car]);
});

Route::get('/blade', function(){
    return view ('szablon');
});

