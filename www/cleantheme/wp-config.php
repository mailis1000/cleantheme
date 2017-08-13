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
define('DB_NAME', 'wp6');

/** MySQL database username */
define('DB_USER', 'wp6');

/** MySQL database password */
define('DB_PASSWORD', 'd0b5P2)!SS');

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
define('AUTH_KEY',         'cr8gsiodbkmsrudxoyuzixujfvz98fzvo48ggtnwv7rplrtyvyumnjeiryohxfee');
define('SECURE_AUTH_KEY',  'm55q015pl5kjxvocsu38k8hm13tg3vs0yxzzkqy2higzfvtgd2neq8cnjudzr1gn');
define('LOGGED_IN_KEY',    'ytxppfh0fpedksxmjeylot259whsvrs4jcxoesuiumgeoka0c0ywzzswwoubsl4v');
define('NONCE_KEY',        'obqzcx83sdifpddj1htpc2achz5bzubji0gugcwryyy7cvwoskkwvcipl5jhqatq');
define('AUTH_SALT',        'q8p51ee1sm4h7t7tlz4q43bb4gwsburm9uqmqo2wrkknhifycdu922yqwfj59psm');
define('SECURE_AUTH_SALT', 'w4lzjduzfvj5mksxwcdrmaoumipzacoeg4rajnm3qoujj8hfka23pcnxeimzptpl');
define('LOGGED_IN_SALT',   'q8lh6debfdpxw0cfswqlqryqqmihlta8grq0foj33kxmvotzkesry9eerfs9isce');
define('NONCE_SALT',       'dy2uwy4utftveznfhwp8n5sq3myxni7izirgwohheh78gkjwipyteoeixqfrxq8o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
