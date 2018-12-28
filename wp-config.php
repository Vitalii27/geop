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
require __DIR__ . '/vendor/autoload.php';
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'geo-plus');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DNws(ErC CzfrSuEI#_6[oZH>k`x JI(cQ!F1J%kM>8z^q.Ps?;Fgq;Ja4V!Fo]4');
define('SECURE_AUTH_KEY',  '@S Bv7Y$r^,(sbGnJptzh6H./dqa#3Ulz5[f52W$-`crX2#w7!8}&t.m5w^aoqW{');
define('LOGGED_IN_KEY',    'kE7.+esNhE&)c=yn6_PuF:)qQ;;<A0KuG]kpFp]I)r}c%It)8VFx#m#usOk|Cm~T');
define('NONCE_KEY',        '59Lt[5cG~^U{S)AD5~OE>;pn/D/(R>$ O zPe%VNd,4o#`p)e|-:VqD;=b7:)zl+');
define('AUTH_SALT',        'ILUguHQeIbzV=@KZ:HrND^#+;+10>Smbt{YlWOWwa?$<0?R6VSZ:1t2c7{|*!+88');
define('SECURE_AUTH_SALT', 'qUJe%T~*mkoctB5N.hLIea>f76S9djK-Q}N!TNMreZJ[v{+QJ+m=?uf}aYT:O<IS');
define('LOGGED_IN_SALT',   'byTl$&%HYvT]2ISmp+%{8dMC~R%IukJqhJfJk_O#<*;P<rQw?^Lvpg%DN:pN|/Pk');
define('NONCE_SALT',       '%$<$<,P8.8eQS&KyFi@HK_2!sVbuFF}EI9EZ|,YM##c%GS.!V9NLX.C;a8IO[YU2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
