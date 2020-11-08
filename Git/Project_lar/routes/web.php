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


use App\Http\Controllers\CdvSite;
Route::get('/site', [CdvSite::class, 'index']);
Route::get('/site/{CdvSite}', [CdvSite::class, 'index']);

use App\Http\Controllers\PageController;
Route::get('/drives/{drives}', [PageController::class, 'show']);

Route::get('/userform', function(){
    return view ('userForm');
});

Route::view('/userform', 'userform');

use App\Http\Controllers\UserController;

Route::post('/usercontroller', [UserController::class, 'account']);


Route::get('/newform', function(){
    return view ('newform');
});

Route::view('/newform', 'newform');

use App\Http\Controllers\FormController;
Route::post('/FormController', [FormController::class, 'account']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Data;
Route::get('/data', [App\Http\Controllers\Data::class, 'list']);


Route::get('/json', function(){
    echo 'isJson';
})->middleware('isjson');

Route::view('login','login');
use App\Http\Controllers\login;

Route::post('login',[App\Http\Controllers\login::class, 'index']);

Route::get('profile',function(){
    if(!session()->has('data')){
        return redirect('login');
    }
    return view ('profile');
});

Route::get('/logout',function(){
    session()->forget('data');
    return redirect('login');
});

use App\Http\Controllers\kursy;
Route::get('/kursy',[App\Http\Controllers\kursy::class, 'list']);

Route::view('kalk','kalk');

use App\Http\Controllers\Calculate;
Route::post('/Calculate',[App\Http\Controllers\Calculate::class, 'index']);





