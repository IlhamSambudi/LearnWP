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
define('AUTH_KEY',         'OU6D0iiYncmgptgWhFKti1MiZ1xv+AzS4PXUe0vnZpZNh4RtHyqAH3iMxf1c8JWtCHnwKrRD3KSW2N8888l3EA==');
define('SECURE_AUTH_KEY',  'zgLigKJV6vfw3ddWHJwRiZul9MwEtWb4L25S20iRYrjYO4XA01wpnYhveaQuDcpLqL0I/odEmXwWzSivvCkoFw==');
define('LOGGED_IN_KEY',    'WEF9SwDcGV69B8P05WGvXSf4OmuPj9VSmtYuwKB8ni0zo0wh+ksXc6ypAgwAto1HniwNxgnOwlOt8qccIKeJjA==');
define('NONCE_KEY',        'Wltb5BDy7Zwhky/HJE+7P7kxAzqpuxXgmU8ITqUlUv6iXebMUQu2JBx6aLbrYzyK8YSd3gtpWkRAbdIEGgtRHA==');
define('AUTH_SALT',        'aE5mKLst/epQ1RvSW7Y3og5QWZ4dFfRR0fe0iNgVcwUTLO/7YsIZ3Kb41P4p39LGRdbVoenDBn+WM37XgqXqJg==');
define('SECURE_AUTH_SALT', 'v0GAz8+DuZekJ8KVQT2WR0g5IlZl6aWroS5p/1ZpM3b8WuLXnNSN/WQHdWi0nwg7sV41bjjhexyqRYkNeeeNGg==');
define('LOGGED_IN_SALT',   'mdOMnDGhQGaDX3F8VR695T0rZuBUw5Fk/j7aa5sLYJ+CYkggVZxCBKgOnCZyhrBJNvN7q3tpgT6iIUX38IIJug==');
define('NONCE_SALT',       'Yn2P2JlroucKbAozNgknTE6kmnrQDIFw0sXcCcqNJaJmBU/PWbQbt2nmFFfP4ZFOOGwXXyC7KooZwcANSYdZUA==');

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
