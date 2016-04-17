<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInita94a1b4119759a106b84483cd77579e1
=======
class ComposerAutoloaderInit26b2d33cd3130b678672c912f121a672
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInita94a1b4119759a106b84483cd77579e1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita94a1b4119759a106b84483cd77579e1', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit26b2d33cd3130b678672c912f121a672', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit26b2d33cd3130b678672c912f121a672', 'loadClassLoader'));
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequirea94a1b4119759a106b84483cd77579e1($file);
=======
            composerRequire26b2d33cd3130b678672c912f121a672($file);
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirea94a1b4119759a106b84483cd77579e1($file)
=======
function composerRequire26b2d33cd3130b678672c912f121a672($file)
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
{
    require $file;
}