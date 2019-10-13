<?php

return array(
    /** set your paypal credential **/
    'client_id' =>'AVlaqdOQ1I1cMi_hg_HKr877O2PGooHDEVqFBq0KXyGSbi5wdhd5n0mFAsjEOCFR_69JFY77Cc5orgaf',
    'secret' => 'EJX6tezpU_tXAxN7I6Fa4MYNIYe_IK3-wsTOWIdYPTLiNZzaSWb0LXHVuy0czossaVrCobG-1YtqC7fn',
    /**
    * SDK configuration
    */
    'settings' => array(
    /**
    * Available option 'sandbox' or 'live'
    */
    'business'=>'osamaarafa15@gmail.com',
    'mode' => 'live',
    'SOLUTIONTYPE' => 'Sole',
        'sandbox'=> false,
        'paypal_lib_currency_code'=> 'EG',
    /**
    * Specify the max request time in seconds
    */
    'http.ConnectionTimeOut' => 1000,
    /**
    * Whether want to log to a file
    */
    'log.LogEnabled' => true,
    /**
    * Specify the file that want to write on
    */
    'log.FileName' => storage_path() . '/logs/paypal.log',
    /**
    * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    *
    * Logging is most verbose in the 'FINE' level and decreases as you
    * proceed towards ERROR
    */
    'log.LogLevel' => 'FINE'
    ),
    );
