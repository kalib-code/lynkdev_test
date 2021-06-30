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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'https://test.lynkdev.com' );
define( 'WP_SITEURL', 'https://test.lynkdev.com' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EyZ/EA9BQMY01VnXx2Zqk7G7tQmusbcTF95eCCBC+dwpWtvn8NQ6rCjhK7bBGBjpcNKItiIB00nnCdZPbRRGwA==');
define('SECURE_AUTH_KEY',  '35EESYnn2m/WW5qQOc1VH6aDkz6cSAKRCGlGGC0Ec26mkEPILzPpDgdDu7TcLuDjTOlQjnPE8edJqTX4e2Rx+Q==');
define('LOGGED_IN_KEY',    'ovKUF4KwbvuarnY1SlHj9KxLh4HW72/Jp6GNzPWGnJQDSNZrGem0rKlVbnlOG3FoH9JBylwfsfUmLNmYlJmO2g==');
define('NONCE_KEY',        'qs7JBjwlQ+p+cYo2QeeB1zLhvNQc9P6CC4yfyQPkmk5y1vWPlqIF6oO4X5H0RWVHeY/cqzg86NNcnp5dCTdV8g==');
define('AUTH_SALT',        'Gxwf3Gyypih4G2NZXqF/SJmYQwBeOlWXPzVbJSVGlMVAxD5e7/5q6Ikoiw4OnmkfDw8+sYYaixbSc/fqbN0A3w==');
define('SECURE_AUTH_SALT', 'FlTBSf76f3QntoCAnq+0CWFpMZ7YRzP7ixeMIMlM0tfRdnnjefiD92ckpcS1NnV5AypH30eHCczChXWi6iVcpw==');
define('LOGGED_IN_SALT',   '3M/EPQqp9toq0/dp+4JtSBqZY2HmvB/C6mvCXO2ovj4alCknHZCJEDlzFMX16xYTeguUEg+BQ2mZhP0GtrD9XQ==');
define('NONCE_SALT',       'H8CHZ3CsWg5HoiTduIz/Yl4N3PnZue14qKf05Whr37RLjyFeuv5Vd6czeq03mODRzbq/2ltkfnIJXTlr59BjsQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
