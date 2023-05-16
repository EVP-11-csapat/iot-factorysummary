<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = DB::table('measurement')
        ->select('unitOfMeasurement', DB::raw('SUM(measuredValue) as valueSum'), 'dateOfMeasurement')
        ->where('unitOfMeasurement', "kWh")
        ->groupBy('dateOfMeasurement', 'unitOfMeasurement')->get();
    return view("welcome")->with("data", $data);
});

Route::get("/test", function () {
    $data = DB::table('measurement')->get();
    return view("tempDataView")->with("data", $data);
});
