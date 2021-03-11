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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0q5K1wRpbSO3YdqsRT8A7WbFTcgIeMs0XvDF1tBV37aG1e3lzi1TgP4veVo9tLJ3AKbiEjf4JZbDHpRoobZjFg==');
define('SECURE_AUTH_KEY',  'rTb0dJ5daunIuOp+azebxysJ01dIKfMFkl3dpljaIhfLPFg1HGaL07VKxAzmzUv4fWSKENiSwOgqWlgAqITJqQ==');
define('LOGGED_IN_KEY',    'zMKZ6iMorDfuzqiAQtazkYvBbR4X6YG14iJhDTot/VBFjQOyxAIuwzzHuvAnxDBeVcT1EnO31iO0UfXYgwjYcQ==');
define('NONCE_KEY',        'wnJ1XIpukfIRgm0BY99YO+9KfYhkXauHz+OgDV7bbKxH6vJ+iWY1ZZfQPnykF7p1kRjLsN9V9ZpW738MNV7J+A==');
define('AUTH_SALT',        'tfWJO1saj0oeA7k2YJhIyq1mXBq183vPPXrLsTa9xuWUuEP6wlglwlVpZqrkaagv6fNQscPGKzVVD6mHAZy9Cg==');
define('SECURE_AUTH_SALT', 'BEqCh5TG2Rvp8tQh5XJ3V8vLJJ3iNh1T2Flpg0DDYovFQcdi2jJN/PEI9PIJ5Sy6ds6oXHyXazrK01exFbV5fg==');
define('LOGGED_IN_SALT',   'wXseAZ9MuuE4nUkBiwrtMANU9lIyTfRHo7OAwRJcL08hMn9ECm8bZLQjyUK4Bz4U7zmFB9d59MADaVXq5zXljw==');
define('NONCE_SALT',       'gDN5377DxSMlzg3H6C7fwbSsYcMDr8UJJJk7ss4/yGf0WftzNazFz9+IAjupmXf8gei8d+/Iq2oHM3y8bVm4Yw==');

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
