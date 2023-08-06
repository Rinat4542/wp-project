<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ERJ(TVM&wR68IZGsEyU[wLA@8^Pu~@rj>746ZHSl4R0*iXNl|QZ@+)s|YH+WIM:I' );
define( 'SECURE_AUTH_KEY',  '?$CLp+g@5VhAm}V?TX//?)H@AN-Zek%I!>;&W&$o`>IinEG](B4V*w:-YC~#0kY:' );
define( 'LOGGED_IN_KEY',    's4U_fg+[yY;)`%8z.`da]~I}8/vfcAZMPMM:]uR>?P3_LEk0z%z1NHNF^}^i lF[' );
define( 'NONCE_KEY',        'T0X+Cq+y{a]nI8|b%Beo1sk7D6Fh+xuDU_^h.dM-JTx5RNw<uto%H5C1A,T /mOf' );
define( 'AUTH_SALT',        'Z/;UHSc{6^JsMQFade1W[9fq)n?|0GeU@.`|lVZrbHgm|-+gqO%;[Z_b0uBw]^kc' );
define( 'SECURE_AUTH_SALT', 'abx8oDyIE]4=1{ 0.Pk0*/yT0-oZeZwc=pw6cg2RQbcTa6a7%Of=c2$@@4-bj<EC' );
define( 'LOGGED_IN_SALT',   'RG+&@q:.&t#U]y^SV?K!?S#YC3%>?)n!26m*^{@>85zgaUiV|F/SoSK~,o.~$>*V' );
define( 'NONCE_SALT',       'a/H^k*}hc$L{sKxR4N40sp5,cP&gbypR3$(X5X(=q5B!ue<#Sr)y#=CYN!;9[/x8' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
