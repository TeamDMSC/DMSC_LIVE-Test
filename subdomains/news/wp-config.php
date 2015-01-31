<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '48withou_l4l4');

/** MySQL database username */
define('DB_USER', '48withou_l4l4');

/** MySQL database password */
define('DB_PASSWORD', '27oaoonn5pfeilbt');

/** MySQL hostname */
define('DB_HOST', '10.168.1.77');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jmy207NgA5C3ymgzBncUu2Y5wP5JFY0N5Ou6iE7gngc8wjTis4dZMvaE7WWUKJh3');
define('SECURE_AUTH_KEY',  '6OMfdIeZkpsRRKopoxyXIKZ2zUbuyIfv5gY9GbDTuUvU79MTisdTnYkWeZ2ZFTu4');
define('LOGGED_IN_KEY',    'u0PfGzAyekSHhfcGQiXs8InWVxK5TZF5My4bF0LrKzvIyl8yHcrlk4PZQoi38Vyr');
define('NONCE_KEY',        'HIQqC7tovCgQN0Ppg10LCPOnSUuvWlMrNdBSB8oGOzrXtTkSHHb9KjcKQezzkaFW');
define('AUTH_SALT',        'g0aIYfPvKWuS0F8xD7sha8m6g5u8ysCwVgmDO4XNBJf4Z3MzzL3j0JbJcKjR9c3l');
define('SECURE_AUTH_SALT', 'e8axtK0cYxTOS9P9QpNo7p2nC8bRhEmUvvQqzd1tVD9jMp86rr3cV3afd52t1z8V');
define('LOGGED_IN_SALT',   '2LXrhkS09Bd7sZbmJYZA9wCnXzVJcHGuY4A9l94ZoOcyTOfpuuoD1LXffdwy1fGG');
define('NONCE_SALT',       'PZH4cAiKiwweMsnyqtEsgOBo8E0XLcBeoEVzDnGqUtidlqo3i0hG1uu8LANZnipU');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pozq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
