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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'webuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ocdla' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VLgeIj_F/_=0xfKxr{:IUYT#-]YItr&E<WwjYhRyUd#S[1-`~`Xkj}#cs/4(c;M^' );
define( 'SECURE_AUTH_KEY',  '-}pG4k_MRn~^3k{k&/b CT(mTMh4`ksJwhmZ5zdkCyxbagorqUh`rUe<3fP@8KZn' );
define( 'LOGGED_IN_KEY',    '8&;`WMy_{8&LgY7nMIz5m(0uH5/!PB]0L2`%B{<K|/Dl-q{8<{Q8eisZUp{|1*PZ' );
define( 'NONCE_KEY',        '%K oqf3i2=KfA27(*n:;C=P`IP)8+{a:m@olnS+%J:.6llZ7x{3p7j+x{9B$#g#H' );
define( 'AUTH_SALT',        '}[D0>|{ZOI9`3-Hlxq=NmTMzPZLVT;s6K?o6p$s|WSzzB-VS5+L):9.NsSi@+qI[' );
define( 'SECURE_AUTH_SALT', 'e:~<dOj8#BQ%04A.,j<6Yxgf] RciHc+O66 N>lGJem+uB 5a=r6e2veK.]R?3HN' );
define( 'LOGGED_IN_SALT',   'm!MfS&9<. 39WRgrr3#HSaMyG`mfR DE~#eIk$8-&f{~o.=_0WSvqi[1bOY:l*~h' );
define( 'NONCE_SALT',       'aLp#2CUX_3&#|@2WJ9pP|j%Xt}9{M.NJ)&YUP-XPWL]m!MkNy>C=C$hvJslp@?yN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
