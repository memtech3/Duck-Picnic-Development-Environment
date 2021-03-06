<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20dff4ef15e2090e54c04a9aa83321b9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thunder\\Shortcode\\' => 18,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\Shortcodes\\' => 23,
            'Grav\\Plugin\\ShortcodeCore\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
        'Grav\\Plugin\\Shortcodes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/shortcodes',
        ),
        'Grav\\Plugin\\ShortcodeCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/plugin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\ShortcodeCorePlugin' => __DIR__ . '/../..' . '/shortcode-core.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20dff4ef15e2090e54c04a9aa83321b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20dff4ef15e2090e54c04a9aa83321b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20dff4ef15e2090e54c04a9aa83321b9::$classMap;

        }, null, ClassLoader::class);
    }
}
