<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit452e3eb2c64c003addc8b376a7977d0f
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit452e3eb2c64c003addc8b376a7977d0f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
