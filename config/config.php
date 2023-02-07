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
            'primary_color' => '#43836f',
            'primary_color_darkmode' => '#bef1e1',
            'sitename' => 'demo site',
            'logo' => 'codenlassen-logo.svg',
            'tracking' => true, // true enables tracking function 
            'local_tracking' => true, // true enables tracking function 
            'github_link' => 'https://github.com/stefan-klaes/super-simple-php-website', //whatever you want to access
            'stefan_github' => 'https://github.com/stefan-klaes',
        ];

        return $config;
        
    }

 }
