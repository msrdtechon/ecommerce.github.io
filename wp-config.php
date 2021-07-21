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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'darshal123' );

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
define( 'AUTH_KEY',         'Xj- TQ9~KBabalv6@{g1_`bKRk&HLU(EQhtroio6;eCuV H^h,*II@(?AD_gmE {' );
define( 'SECURE_AUTH_KEY',  'd^C<^3PcCcvnH(pqFX*GY6!~pTF`L%S^t-+Kb[Q,eWr[.2={Fu/(?LR[zhny3c <' );
define( 'LOGGED_IN_KEY',    '=eO{%,9^S-Z:)|&#(o8s}pxCMlYi_lLY1Y!#}e?>; SoUz_mAJa_L@qf7:j]S:F@' );
define( 'NONCE_KEY',        'H</_q;c7Wn21;#(bWgXKoGCH<W!EWf9L]YPf|P8yJwze@&(Uz@i)!J!-dT9Xy60p' );
define( 'AUTH_SALT',        'PmwsT;HlGr F5Tgb-]rTU+0PaO_67baL@4?[~o |;;`yDCG3_Lz.l^$acH9r~~Z%' );
define( 'SECURE_AUTH_SALT', 'Ye]y!}!{~[71L:%$$PhEb&>80q(1NjG;K;[4uv$(mjTFC~Y>cOsADg=:uq@iw5=6' );
define( 'LOGGED_IN_SALT',   'A?`07LBKZ8S8it{}ZG]pJt86kr5>Jmw*!]x]BkQ]nULhseil,M&`Vql/^=I#k#a}' );
define( 'NONCE_SALT',       'ztKk34Yg8I%-QKt<l$(*wv6ujknMDsp-+!+MO`N7mS;uM^lJ9co wEQp]9l/8z1L' );

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
