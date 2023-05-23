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

    $comics = config('db');
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('home', compact('comics', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('home');