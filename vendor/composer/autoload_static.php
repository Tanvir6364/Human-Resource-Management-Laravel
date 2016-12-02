<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d07818f621435cd10b967ceb900de65
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Utility\\' => 12,
            'App\\Message\\' => 12,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Utility\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Utility',
        ),
        'App\\Message\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Message',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d07818f621435cd10b967ceb900de65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d07818f621435cd10b967ceb900de65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d07818f621435cd10b967ceb900de65::$classMap;

        }, null, ClassLoader::class);
    }
}
