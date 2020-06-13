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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '{K3OEtxOF1Z$@;,wS~Q|HAO[ziL5*tf3GRnn5@H4?`(`!uf=M|O^),oSRj4zh`iY' );
define( 'SECURE_AUTH_KEY',  'm#ur2gh[_wd<t|@/,bt2pfs h&#G)>Bx) {)Bxgsa[t*Eo[Bu)yS4Ay&{m^B<fEN' );
define( 'LOGGED_IN_KEY',    'sh.p12pP]3s}aHs0c.+dwTMy_|=pX/b.2h.guB,y @Uxleb2jPf~c9@FixTZruGv' );
define( 'NONCE_KEY',        'mfk]{h4inSWA%jnXtNZ%)B9TE1]qN]0)kxvhE@52?TK8e.{$EqOoNUiKd8^}Ndg|' );
define( 'AUTH_SALT',        '{vQdX? .|RN(6Dbk,X)KpvP$FR&DHY3wJ67-OR%y(7j`b^?IUAb7JRjBcv-:gJ1m' );
define( 'SECURE_AUTH_SALT', '@MjH:g@rXyLia*FLlen%_G$H(AJ|fLA!$jR|0 z pUJt23cjR9~Sv]=j2Px,x@E`' );
define( 'LOGGED_IN_SALT',   'RrnAOd+H Pk(%t<?oqmWK|(x#sgI#52dgXhx5h2I[-O(-fk+%bCm=D!vM#eb=*wI' );
define( 'NONCE_SALT',       'G`9+)TF#*P#Vq%F>T5z{{V)9qa4,binmcN9:3.@[OQ/n_KwyHz#0F@`ku6+++M/R' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
