<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite62f4138bec54069bbd3c15fbd2ea127
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite62f4138bec54069bbd3c15fbd2ea127::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite62f4138bec54069bbd3c15fbd2ea127::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite62f4138bec54069bbd3c15fbd2ea127::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}