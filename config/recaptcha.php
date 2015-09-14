<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Keys
    |--------------------------------------------------------------------------
    |
    | Set the public and private API keys as provided by reCAPTCHA.
    |
    | In version 2 of reCAPTCHA, public_key is the Site key,
    | and private_key is the Secret key.
    |
    */
    'public_key'  => '6LdB0AwTAAAAAPXB_1jhA0u4fuyC2Tnu0vuP2-9p',
    'private_key' => '6LdB0AwTAAAAAH-93YvpH5oYX8fjd2hwVI60G4ZX',

    /*
    |--------------------------------------------------------------------------
    | Template
    |--------------------------------------------------------------------------
    |
    | Set a template to use if you don't want to use the standard one.
    |
    */
    'template'    => '',

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | Determine how to call out to get response; values are 'curl' or 'native'.
    | Only applies to v2.
    |    
    */
    'driver'      => 'curl',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | Various options for the driver
    |    
    */
    'options'     => [

        'curl_timeout' => 1,

    ],

    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | Set which version of ReCaptcha to use.
    |    
    */

    'version'     => 2,

];