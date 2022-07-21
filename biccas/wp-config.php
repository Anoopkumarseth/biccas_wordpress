<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_biccas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OP^XwY~&dv~*C]r,]#L[9;&Y^Z+xzLk?E&)]2R[|;#/sTC>r&B;G#7@K;)6?$.}Y' );
define( 'SECURE_AUTH_KEY',  'dbQVvBMLM3uItV0)p ~2wEK? 9DVtmZ6UHB[rE328`u#d}Kpt.v??w+ EZc>!4=-' );
define( 'LOGGED_IN_KEY',    'N6sRc!I?r;-Fh^>[;@!kS*:^5RoXSb`vYeaz<Q^}tg7h&*Hnn9yN0p`5$w}}t(r ' );
define( 'NONCE_KEY',        'McRC_.5;cf;OVLs #F^O3O_~N~[J>/Jn5IZ#5pMXxQ?6U>Z;exPtseo6>jD/|uvq' );
define( 'AUTH_SALT',        '?6Ew0L.Ov0UKOVNZzhOEG,=$Blc2xUhr.Q(5isys>g[AY#r}OXQh N4Zqt|G&[#*' );
define( 'SECURE_AUTH_SALT', 'm;O ZHg2S&j?aMu6q0> YjtLBt1l`=|;kdB5()F&{wn2%(-.g:rdy#@9e$4XV6(0' );
define( 'LOGGED_IN_SALT',   '[{H %n~>H}`=Ns0_&R~1n<WI1Mw5|}Q|rk`<)SB5:6NQ;;cikFm%=[MRI]C)@FrX' );
define( 'NONCE_SALT',       '9m=;b,Ka.<*^[##R$KnwLyf2N*S =p_;Ah3cJsYs_*-;v@ jK_SA)7%2^?]*(0KY' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
