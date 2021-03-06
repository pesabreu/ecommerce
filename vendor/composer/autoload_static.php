<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit347fe71b2a304c60cca79631be244ace
{
    public static $firstCharsPsr4 = array (
        'p' => true,
    );

    public static $prefixDirsPsr4 = array (
        'pesabreu\\' => 
        array (
            0 => __DIR__ . '/..' . '/pesabreu/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInit347fe71b2a304c60cca79631be244ace::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit347fe71b2a304c60cca79631be244ace::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit347fe71b2a304c60cca79631be244ace::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit347fe71b2a304c60cca79631be244ace::$classMap;

        }, null, ClassLoader::class);
    }
}
