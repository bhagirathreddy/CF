<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'techalc1_wp550');

/** MySQL database username */
define('DB_USER', 'techalc1_wp550');

/** MySQL database password */
define('DB_PASSWORD', '2@SYQ!8p6X');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6yjq4aw1t14vql2orpa1drr8hnwe8mn7qajzeejbihidtvdjjrnttv3p5fsyyxjd');
define('SECURE_AUTH_KEY',  'px9bfqpsq0a8wy0obcoerhbllvzkikiyuxgi8tlyodx6zvcskezzpzrj6yo22wpq');
define('LOGGED_IN_KEY',    '4drrmnihlyg9pm8kf7ytvxvp59xkaypm9pjheihn85j8ebhz4rhxjb70qjtivswo');
define('NONCE_KEY',        '0zfwalixmakrrbpl1q5idncnibddmcf9h5tyd7xnbk1b3dcn2ubtqnikqzr2zbt4');
define('AUTH_SALT',        'y4onfuuvzecur5zzxopa8eoy8mqaswi77nkuxnsvpqpd26o1empkrtaswgq0hhum');
define('SECURE_AUTH_SALT', 'gsou2vqqs7kttoiinbwz5gzdusubylmpdnpgqapaotuoblzaz7vwucyxxc2faxom');
define('LOGGED_IN_SALT',   'mxstn3nvhoazvbllhkt7gpaagcghhvvneuihng8smh5ihiijaedwuglruhikjwif');
define('NONCE_SALT',       'pxxshbyqqnpvgtrd7tjoig8lwvnsxwghfsancsdptn10mrbtaskoeykeftdpofcd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
