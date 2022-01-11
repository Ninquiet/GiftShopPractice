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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mr6OoyismMYMZGeFI3FTLcsd1T4Jglvi83lOn+0IoyLQWrnnlFYoOE516wOA3Z897WZUEL4E3OgO0liS0wOzUg==');
define('SECURE_AUTH_KEY',  'j2sbMPx0FkVjcc0HeQINkhdaQ0FJTkVk7GOYv6DikmsfgS09nyc/fHy842F1/Bfe1jO6p95EMFXOgAsPTRf/fg==');
define('LOGGED_IN_KEY',    'hGYuaDzOt+ESRFHwNlpKmX+cSQpYcRTYh9KjgGiyhsL3D40kQbkNf0rYYblwMoSOYhXuwE/N8dMv9TIC67avjQ==');
define('NONCE_KEY',        '7xAAFoLY6PFbmOOqZuRQmCD3LpnNKuHSVrL0zryw2vGIgrtedAuZ+NpAD6bnuxQ2vHg30ripiGEt2jiGgW51DA==');
define('AUTH_SALT',        '9vJuXKcGzV1HOFbTIiG3Tu0L9M6mIp5aQsIO7c7CSST2Hd1gvbdJnc3+r+HEAW82Jl65+R2VKHXnjFCspsHU8Q==');
define('SECURE_AUTH_SALT', 'xAE+n6GkGBw3qxniBGf/SToykPw9JApx/mFk2gSqL/4Orl9ij5KN6v1kHf/Gb/0He9PDPAF1/abnoMotPggpnQ==');
define('LOGGED_IN_SALT',   'LXI4+eaX9oSYEJ5zBtOCTlhwZRKa1es+WZl4gCVOUmnsJTNs8/WTTYkdX4TLOMkX3vewW9faLoaRxLsyTT1fDQ==');
define('NONCE_SALT',       '9j+PXyFeryQH1+NMItVMleKLp3JFpXFcwlIXdgWs6UUCPFlwFcMqjhQPoMVA9f/kemvrsIkOdxv13mlHf7LMyA==');

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
