<?php

namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'No version set (parsed as 1.0.0)',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'No version set (parsed as 1.0.0)',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'aura/router' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '52507bc813c92511dbcacc7463f163ef5149ad38',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5527a48b7313d15261292c149e55e26eae771b0a',
    ),
    'illuminate/container' => 
    array (
      'pretty_version' => 'v5.6.33',
      'version' => '5.6.33.0',
      'aliases' => 
      array (
      ),
      'reference' => '1f0757cae8749400aeda730f6438a081fc3c082d',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v5.6.33',
      'version' => '5.6.33.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c029101285f6066f45e3ae5910b1b5f900fdcb4',
    ),
    'illuminate/database' => 
    array (
      'pretty_version' => 'v5.6.33',
      'version' => '5.6.33.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e89ec20a3589ae87fe4c75d809cfa543905601b',
    ),
    'illuminate/support' => 
    array (
      'pretty_version' => 'v5.6.33',
      'version' => '5.6.33.0',
      'aliases' => 
      array (
      ),
      'reference' => '0561e4e48797fbaeafeec0054b14605b08722a5a',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.33.0',
      'version' => '1.33.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '55667c1007a99e82030874b1bb14d24d07108413',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'respect/validation' => 
    array (
      'pretty_version' => '1.1.22',
      'version' => '1.1.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '19d6ec893994912d21b390c43d287816ab070772',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3d826245268269cd66f8326bd8bc066687b4a19',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd0cd638f4634c16d8df4508e847f14e9e43168b8',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.1.3',
      'version' => '4.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fcd1bd44fd6d7181e6ea57a6f4e08a09b29ef65',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a5f676b77a90823c2d4eaf76137b771adf31323',
    ),
    'zendframework/zend-diactoros' => 
    array (
      'pretty_version' => '1.8.5',
      'version' => '1.8.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e4edb822c942f37ade0d09579cfbab11e2fee87',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
