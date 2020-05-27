<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'investstroy' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_invest' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B`V-:oI8!{n6u:8O$h+x21v<D*Cj<~~RKGpH9v167-4p6,bg^L@Ce:em?yp$UZk&' );
define( 'SECURE_AUTH_KEY',  'l:/Bh1)He1i207Or$+(T]e7*q2RZL7wgg7@_>VtrG7+lM1/@]r4az/8pVl,e7=KJ' );
define( 'LOGGED_IN_KEY',    'O>)+;gOU@cjb%HbR2J=R9EtQh/=e#lO}c7neM=v<+OvGgZ%VbGFVSNcl71 !ijjX' );
define( 'NONCE_KEY',        '!q#unPfX2In]FLb~H{-M}0AI.ZO<_, ]63N[c!9$h^7&8?fPm|lIKI!b0;VgM<q{' );
define( 'AUTH_SALT',        'p($3QFWnJU?WHJFIowT^($dM%/k!iPDPPtD&A;%Xdnw5^w8J&X*>`5pv%!`8ChQ[' );
define( 'SECURE_AUTH_SALT', 'Z-UMWRB4kMI*t[} y}PFkxC*? YU>,?ECjdk`615KXPWi=={EAX;+5=Vi6n&rpj3' );
define( 'LOGGED_IN_SALT',   '+lcsZ;jKDrn3}R0+lm.*j@$NNw :YaKYn^v`R07h<3L[`oSvMriwfS7qVO[LU@ip' );
define( 'NONCE_SALT',       'EH^9Ap$V9hom^4^4C4JgcaT>$NljaqDKe5~$E%#As.p|zt[=IST4vqW<r!.G/kA-' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
