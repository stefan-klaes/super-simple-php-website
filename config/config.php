<?php
/**
 * Verwaltungsdatei aller globalen angaben:
 * seiten name, logo url, etc
 */


 class Config {

    public function getConfig()
    {

        // Array with global settings
        $config = [
            'sitename' => 'demo site',
            'logo' => 'codenlassen-logo.svg',
            'tracking' => true, // true enables tracking function 
            'local_tracking' => false, // true enables tracking function 
            'github_link' => 'https://github.com/stefan-klaes/super-simple-php-website', //whatever you want to access
            'stefan_github' => 'https://github.com/stefan-klaes',
        ];

        return $config;
        
    }

 }
