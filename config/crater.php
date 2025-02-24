<?php

return [

    /*
    * Current version of the application.
    */
    'version' => '4.0.0',

    /*
    * List of languages supported by Crater.
    */
    'languages' => [
        ["code" => "en", "name" => "English"],
        ["code" => "zh_TW", "name" => "繁體中文"],
        ["code" => "ja", "name" => "日本語"],
        ["code" => "ko", "name" => "한국어"],
    ],

    /*
    * List of Fiscal Years
    */
    'fiscal_years' => [
        ['key' => 'january-december' , 'value' => '1-12'],
        ['key' => 'february-january' , 'value' => '2-1'],
        ['key' => 'march-february'   , 'value' => '3-2'],
        ['key' => 'april-march'      , 'value' => '4-3'],
        ['key' => 'may-april'        , 'value' => '5-4'],
        ['key' => 'june-may'         , 'value' => '6-5'],
        ['key' => 'july-june'        , 'value' => '7-6'],
        ['key' => 'august-july'      , 'value' => '8-7'],
        ['key' => 'september-august' , 'value' => '9-8'],
        ['key' => 'october-september', 'value' => '10-9'],
        ['key' => 'november-october' , 'value' => '11-10'],
        ['key' => 'december-november', 'value' => '12-11'],
    ],
];
