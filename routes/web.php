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

    $data2 = DB::table('measurement')
        ->select('unitOfMeasurement', DB::raw('SUM(measuredValue) as valueSum'), 'dateOfMeasurement')
        ->where('unitOfMeasurement', "pieces")
        ->groupBy('dateOfMeasurement', 'unitOfMeasurement')->get();

    $data3 = DB::table('measurement')
        ->select('unitOfMeasurement', DB::raw('SUM(measuredValue) as valueSum'), 'dateOfMeasurement')
        ->where('unitOfMeasurement', "m3")
        ->groupBy('dateOfMeasurement', 'unitOfMeasurement')->get();
    return view("welcome")->with("data", $data)->with("data2", $data2)->with("data3", $data3);
});

Route::get("/test", function () {
    $data = DB::table('measurement')->get();
    $data1 = DB::table('state_of_formwork')->get();
    $data2 = DB::table('machine')->get();
    return view("tempDataView")->with("data", $data)->with("data1", $data1)->with("data2", $data2);
});