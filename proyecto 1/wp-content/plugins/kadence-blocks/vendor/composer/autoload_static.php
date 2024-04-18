<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50d497dc9e859851f26e9cd8f38243ca
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KadenceWP\\KadenceBlocks\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KadenceWP\\KadenceBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/resources',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'KadenceWP\\KadenceBlocks\\App' => __DIR__ . '/../..' . '/includes/resources/App.php',
        'KadenceWP\\KadenceBlocks\\Cache\\Ai_Cache' => __DIR__ . '/../..' . '/includes/resources/Cache/Ai_Cache.php',
        'KadenceWP\\KadenceBlocks\\Cache\\Block_Library_Cache' => __DIR__ . '/../..' . '/includes/resources/Cache/Block_Library_Cache.php',
        'KadenceWP\\KadenceBlocks\\Cache\\Cache_Provider' => __DIR__ . '/../..' . '/includes/resources/Cache/Cache_Provider.php',
        'KadenceWP\\KadenceBlocks\\Cache\\Config' => __DIR__ . '/../..' . '/includes/resources/Cache/Config.php',
        'KadenceWP\\KadenceBlocks\\Container' => __DIR__ . '/../..' . '/includes/resources/Container.php',
        'KadenceWP\\KadenceBlocks\\Hasher' => __DIR__ . '/../..' . '/includes/resources/Hasher.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Cache_Primer' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Cache_Primer.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Image_Downloader' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Image_Downloader.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Image_Downloader_Provider' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Image_Downloader_Provider.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Image_Editor' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Image_Editor.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Meta' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Meta.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\Pexels_ID_Registry' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/Pexels_ID_Registry.php',
        'KadenceWP\\KadenceBlocks\\Image_Downloader\\WordPress_Importer' => __DIR__ . '/../..' . '/includes/resources/Image_Downloader/WordPress_Importer.php',
        'KadenceWP\\KadenceBlocks\\Shutdown\\Contracts\\Terminable' => __DIR__ . '/../..' . '/includes/resources/Shutdown/Contracts/Terminable.php',
        'KadenceWP\\KadenceBlocks\\Shutdown\\Shutdown_Collection' => __DIR__ . '/../..' . '/includes/resources/Shutdown/Shutdown_Collection.php',
        'KadenceWP\\KadenceBlocks\\Shutdown\\Shutdown_Handler' => __DIR__ . '/../..' . '/includes/resources/Shutdown/Shutdown_Handler.php',
        'KadenceWP\\KadenceBlocks\\Shutdown\\Shutdown_Provider' => __DIR__ . '/../..' . '/includes/resources/Shutdown/Shutdown_Provider.php',
        'KadenceWP\\KadenceBlocks\\Traits\\Image_Size_Trait' => __DIR__ . '/../..' . '/includes/resources/Traits/Image_Size_Trait.php',
        'KadenceWP\\KadenceBlocks\\Traits\\Rest\\Image_Trait' => __DIR__ . '/../..' . '/includes/resources/Traits/Rest/Image_Trait.php',
        'KadenceWP\\KadenceBlocks\\Uplink\\Uplink_Provider' => __DIR__ . '/../..' . '/includes/resources/Uplink/Uplink_Provider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50d497dc9e859851f26e9cd8f38243ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50d497dc9e859851f26e9cd8f38243ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50d497dc9e859851f26e9cd8f38243ca::$classMap;

        }, null, ClassLoader::class);
    }
}
