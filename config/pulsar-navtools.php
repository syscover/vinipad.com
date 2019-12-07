<?php

return [
    /*
	|--------------------------------------------------------------------------
	| Url type
	|--------------------------------------------------------------------------
	|
	| Here you may configure your url type. You can need set across url
	| the language or locale or both.
	| If select false, the plugin will be deactivated
    |
	| Available Settings: 'lang', 'country', 'lang-country', false
    |
    | Route example with lang-country option:
    | Route::get('en-us/init', function(){ return view('www.index'); });
    |
    | Route example with lang option:
    | Route::get('en/init', function(){ return view('www.index'); });
    |
    | Route example with country option:
    | Route::get('us/init', function(){ return view('www.index'); });
	|
	*/

    'url_type' => env('NAVTOOLS_URL_TYPE', false),

    /*
    |--------------------------------------------------------------------------
    | Langs resource
    |--------------------------------------------------------------------------
    |
    | Set if langs resource come from NAVTOOLS_LANGS variable environment
    | or from other config array
    |
    | Example Settings: 'web.langs'
    |
    */
    'langs_resource' => env('NAVTOOLS_LANGS_RESOURCE', null),

    /*
	|--------------------------------------------------------------------------
	| Languages
	|--------------------------------------------------------------------------
	|
	| Available languages that you have in your web.
    | Values has in ISO 639-1.
    |
	| Example Settings: 'en', 'fr', 'de', 'es', 'ja', 'zh', 'ru', 'pt' etc.
    |
    | you can set with array or string to explode after
	|
	*/

    'langs' => explode('|', env('NAVTOOLS_LANGS', 'en|es')),

    /*
    |--------------------------------------------------------------------------
    | Countries resource
    |--------------------------------------------------------------------------
    |
    | Set if countries resource come from NAVTOOLS_COUNTRIES variable environment
    | or from other config array
    |
    | Example Settings: 'web.countries'
    |
    */
    'countries_resource' => env('NAVTOOLS_COUNTRIES_RESOURCE', null),

    /*
    |--------------------------------------------------------------------------
    | Countries
    |--------------------------------------------------------------------------
    |
    | Available countries that you have in your web.
    | Values has in ISO 3166.
    |
    | Example Settings: 'us', 'gb', 'fr', 'de', 'es', 'jp', 'cn', 'ru', 'pt' etc.
    |
    */

    'countries' => explode('|', env('NAVTOOLS_COUNTRIES', 'us|gb|es')),

    /*
    |--------------------------------------------------------------------------
    | Country
    |--------------------------------------------------------------------------
    |
    | Default country if don't find country
    |
    | Example Settings: 'us', 'gb', 'fr', 'de', 'es', 'jp', 'cn', 'ru', 'pt' etc.
    |
    */

    'default_country' => env('NAVTOOLS_DEFAULT_COUNTRY', 'es'),

    /*
    |--------------------------------------------------------------------------
    | Countries Languages
    |--------------------------------------------------------------------------
    |
    | Countries according to the chosen language 'lang' => 'country'
    |
    */

    'country_lang' => [
        'de' => 'de',
        'en' => 'us',
        'es' => 'es',
        'fr' => 'fr',
        'ja' => 'jp',
        'pt' => 'pt',
        'ru' => 'ru',
        'zn' => 'cn',
    ]
];