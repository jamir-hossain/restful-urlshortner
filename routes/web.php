<?php

use App\Models\ShortenedUrl;
use Illuminate\Http\Request;
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

Route::get('/{slug}', function (Request $request) {
    $shorted = ShortenedUrl::query()
        ->where('slug', $request->slug)
        ->first();

    if ($shorted) {
        $shorted->update([
            'visit' => $shorted->visit + 1
        ]);

        return redirect()->to(url($shorted->main_url));
    }

    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';
