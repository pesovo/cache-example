<?php declare(strict_types = 1);

use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * @var \Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__ . '/../vendor/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
