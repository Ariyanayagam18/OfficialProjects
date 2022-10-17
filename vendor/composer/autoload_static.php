<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit289399705e8ff439c045d0567ba1cfbb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit289399705e8ff439c045d0567ba1cfbb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit289399705e8ff439c045d0567ba1cfbb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
