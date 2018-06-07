<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita74a4c7fd8102c02c12bc997c305a57f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DocxMerge\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DocxMerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/krustnic/docx-merge/src',
        ),
    );

    public static $classMap = array (
        'DocxMerge\\DocxMerge' => __DIR__ . '/..' . '/krustnic/docx-merge/src/DocxMerge.php',
        'DocxMerge\\DocxMerge\\Docx' => __DIR__ . '/..' . '/krustnic/docx-merge/src/DocxMerge/Docx.php',
        'DocxMerge\\DocxMerge\\Prettify' => __DIR__ . '/..' . '/krustnic/docx-merge/src/DocxMerge/Prettify.php',
        'DocxMerge\\libraries\\TbsZip' => __DIR__ . '/..' . '/krustnic/docx-merge/src/libraries/TbsZip.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita74a4c7fd8102c02c12bc997c305a57f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita74a4c7fd8102c02c12bc997c305a57f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita74a4c7fd8102c02c12bc997c305a57f::$classMap;

        }, null, ClassLoader::class);
    }
}
