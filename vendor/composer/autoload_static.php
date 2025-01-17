<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a7aa056159d4765ff49cc445b264887
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rich4rdMuvirimi\\NoUpdates\\Vendor\\' => 33,
            'Rich4rdMuvirimi\\NoUpdates\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rich4rdMuvirimi\\NoUpdates\\Vendor\\' => 
        array (
            0 => __DIR__ . '/..' . '/no-updates/psr-4',
        ),
        'Rich4rdMuvirimi\\NoUpdates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'NoUpdates_AllowDynamicProperties' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/AllowDynamicProperties.php',
        'NoUpdates_Attribute' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'NoUpdates_ClientIP' => __DIR__ . '/..' . '/no-updates/classes/yidas/client-ip/src/ClientIP.php',
        'NoUpdates_PhpToken' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'NoUpdates_ReturnTypeWillChange' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php81/Resources/stubs/ReturnTypeWillChange.php',
        'NoUpdates_SensitiveParameter' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/SensitiveParameter.php',
        'NoUpdates_SensitiveParameterValue' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/SensitiveParameterValue.php',
        'NoUpdates_Stringable' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'NoUpdates_UnhandledMatchError' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'NoUpdates_ValueError' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'Random\\BrokenRandomEngineError' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/BrokenRandomEngineError.php',
        'Random\\CryptoSafeEngine' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/CryptoSafeEngine.php',
        'Random\\Engine' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/Engine.php',
        'Random\\Engine\\Secure' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/Engine/Secure.php',
        'Random\\RandomError' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/RandomError.php',
        'Random\\RandomException' => __DIR__ . '/..' . '/no-updates/classes/symfony/polyfill-php82/Resources/stubs/Random/RandomException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a7aa056159d4765ff49cc445b264887::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a7aa056159d4765ff49cc445b264887::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a7aa056159d4765ff49cc445b264887::$classMap;

        }, null, ClassLoader::class);
    }
}
