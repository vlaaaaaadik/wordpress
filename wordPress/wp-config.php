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
define( 'DB_NAME', 'wordpress365' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ZzT;N%;b*Oy]Ug- GJ+Zqp?B.%>Lq`^Cc3<qbh/v42HyBMhg[SutsY?V^WvI51t^' );
define( 'SECURE_AUTH_KEY',  ':L,-EOLJ+xdlX[e&w(|9ZP[~L7IeTv)&~ys[}}qnoe{fCWAp@`eiHH<8zL!NE{$a' );
define( 'LOGGED_IN_KEY',    '&@BaoT)!F8br8snN)0u~3T7wmDgz7k6nS*0&|BUSS,PwG&Eb_8E|+WCG@{iVc+E6' );
define( 'NONCE_KEY',        '-=Eevra]mM;&uQp^M4 U]U>,`8~<*c}#K$@6HI#,V/P$Ww|[>g5F]94ZMz#m;ry}' );
define( 'AUTH_SALT',        '672yx={l^!]HQ0+U)xVh`]6kuR7zBx0Y-2]n1/qpX#D`8bs[kA$fyKYzWUgm0/eW' );
define( 'SECURE_AUTH_SALT', 'Gi`!lYH:n^53(812)Ta1so8@1/9^d-ee^MxIbjNz>a#$(#YpJw@y@(;fydAUf(~Y' );
define( 'LOGGED_IN_SALT',   'K~!A.k,V}3.Tu{ZVj`k@Gy^7fS+Tb92_oXwBQ/U/qJv0nYwtM!(PjC4K37pJQqhZ' );
define( 'NONCE_SALT',       'k_uBoyn*e1#PUxZ4L8cPSIrU8CB8A!LV&H3T!f;aU}/Y9EKoQ|e1~`(o//Qoc;iA' );

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
