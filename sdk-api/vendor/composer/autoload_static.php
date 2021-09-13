<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4257e2a662f50524442964cbb92d8479
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'org\\gov\\br\\sdk\\ControllerAPI' => __DIR__ . '/../..' . '/main/ControllerAPI.php',
        'org\\gov\\br\\sdk\\entity\\request\\AuxilioBenifeciarioMunicipioRequest' => __DIR__ . '/../..' . '/main/entity/request/AuxilioBenifeciarioMunicipioRequest.php',
        'org\\gov\\br\\sdk\\entity\\request\\AuxilioMunicipioRequest' => __DIR__ . '/../..' . '/main/entity/request/AuxilioMunicipioRequest.php',
        'org\\gov\\br\\sdk\\entity\\request\\AuxilioNisRequest' => __DIR__ . '/../..' . '/main/entity/request/AuxilioNisRequest.php',
        'org\\gov\\br\\sdk\\entity\\request\\BolsaCpfNisRequest' => __DIR__ . '/../..' . '/main/entity/request/BolsaCpfNisRequest.php',
        'org\\gov\\br\\sdk\\entity\\request\\BolsaMunicipioRequest' => __DIR__ . '/../..' . '/main/entity/request/BolsaMunicipioRequest.php',
        'org\\gov\\br\\sdk\\entity\\request\\BolsaParcelaSaqueNis' => __DIR__ . '/../..' . '/main/entity/request/BolsaParcelaSaquesNis.php',
        'org\\gov\\br\\sdk\\entity\\request\\Request' => __DIR__ . '/../..' . '/main/entity/request/Request.php',
        'org\\gov\\br\\sdk\\entity\\response\\Response' => __DIR__ . '/../..' . '/main/entity/response/Response.php',
        'org\\gov\\br\\sdk\\service\\AuxilioService' => __DIR__ . '/../..' . '/main/service/AuxilioService.php',
        'org\\gov\\br\\sdk\\service\\BolsaFamiliaService' => __DIR__ . '/../..' . '/main/service/BolsaFamiliaService.php',
        'org\\gov\\br\\sdk\\service\\Service' => __DIR__ . '/../..' . '/main/service/Service.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4257e2a662f50524442964cbb92d8479::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4257e2a662f50524442964cbb92d8479::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4257e2a662f50524442964cbb92d8479::$classMap;

        }, null, ClassLoader::class);
    }
}
