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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop21' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'x)-t$Z=->3mcieu_cW^0e,j:S?,8l;P0x,|O-{zk_[@t}<[H}V;BN-T,tp:>a`L=' );
define( 'SECURE_AUTH_KEY',  '%tF68O+J$9cDh6mst`-9uqF!/;DO[UtF?v$3VnmRg_#jB$deA]^6U@!B)u>?ik-t' );
define( 'LOGGED_IN_KEY',    'JmG.Cp;,Z}y(lYPo2a]hvU^AG063~9 a.Js;9HoE!5ge,j$tLWf:]Q1(u@hgYqG(' );
define( 'NONCE_KEY',        'l2g2dX(8>4{ne.Q(NcDa FLKH/|}Qk2l!Rh<@1bck v!9Oc(mSbC^O2KQI{BwO/H' );
define( 'AUTH_SALT',        '!VJG7*Jh>*/q*mddTrviw|$?4HFgD7TYa|7K1S}Is`TB.}C,#jh}i5:^pjR<6^u<' );
define( 'SECURE_AUTH_SALT', '7)XCQPkEG}=IQ,niaNwjJYQ1-z{Wf4@OC@Sg})oMb}!*=Qd?pYVkpM9POu8TngKx' );
define( 'LOGGED_IN_SALT',   '3B9,x>7EuQW_{]Dwd`ZGq=OT1`lIgW_4H[[o<I--JREM/OQNWm)}wDJ/%m5woh,M' );
define( 'NONCE_SALT',       '4,-WRay7k6]O,nx~):&Vd =cc>4aszzbaRr<sP+$ *4:c8{TC7MCuqLWn1oSB)ar' );

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
