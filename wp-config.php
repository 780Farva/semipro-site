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
define('DB_NAME', 'semip071_wp951');

/** MySQL database username */
define('DB_USER', 'semip071_wp951');

/** MySQL database password */
define('DB_PASSWORD', '2l7]PWZS9!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'elg28i1c6t2ydyp3a7rnhdfunse30wf80azlyydwsuy1nvaqvkfh2s98p5w6bkq2');
define('SECURE_AUTH_KEY',  'klv4fadekuxrnq24kev8dlyj4bmd5sec1kacctjwq0xmouvexte9lidlrpmcd1nq');
define('LOGGED_IN_KEY',    'bibri3hrvotkof1wuuq1fl5n0mwdyikcv5rsuj9kvapbbt121xzwvvk4v1xzf18t');
define('NONCE_KEY',        '4xcnhqoz7xqdbln3t1cyhkf6iwiwuzqvabzmqymhilfyekhswwqvv55icvhfqi67');
define('AUTH_SALT',        'mololhiixs8m3u3jkok74trjmhwyiedqlrqvhxkt2fyzxtjwk9mibteqysk6enfn');
define('SECURE_AUTH_SALT', 'wfzxksmbqrsilozduhla3aods03pe8grmeosg9gg5bz0jksaemcnkahihos1ntyh');
define('LOGGED_IN_SALT',   'osc2ikuedfwfwzyfl5l3ug8n1y8cqwstn1orez3l3sccczqlb8aszdkdhxcqgzaf');
define('NONCE_SALT',       'o3eqd98itzy9nfpzbtgomp69oay9cn832j0d3oosy7nmdogbugq854v8luqu3tqt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpnp_';

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
