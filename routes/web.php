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

    $page_title = 'Home';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('home', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('home');


Route::get('/characters', function () {

    $page_title = 'Characters';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('characters', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('characters');


Route::get('/comics', function () {

    $page_title = 'Comics';
    $comics = config('db');
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('comics', compact('page_title', 'comics', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('comics');


Route::get('/movies', function () {

    $page_title = 'Movies';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('movies', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('movies');


Route::get('/tv', function () {

    $page_title = 'TV';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('tv', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('tv');


Route::get('/games', function () {

    $page_title = 'Games';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('games', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('games');


Route::get('/collectibles', function () {

    $page_title = 'Collectibles';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('collectibles', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('collectibles');


Route::get('/videos', function () {

    $page_title = 'Videos';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('videos', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('videos');


Route::get('/fans', function () {

    $page_title = 'Fans';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('fans', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('fans');


Route::get('/news', function () {

    $page_title = 'News';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('news', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('news');


Route::get('/shop', function () {

    $page_title = 'Shop';
    $dcComicsList = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',];
    $shopList = ['Shop DC', 'Shop DC Collectibles'];
    $dcList = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',];
    $sitesList = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',];

    return view('shop', compact('page_title', 'dcComicsList', 'shopList', 'dcList', 'sitesList' ));
})->name('shop');