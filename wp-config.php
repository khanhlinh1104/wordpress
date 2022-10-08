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
define( 'DB_NAME', 'khanhlinh' );

/** Database username */
define( 'DB_USER', 'khanhlinh' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '|tl-Q%Ylp9.(wBTiAOT}I!*Y4mM*FHsyVuY3Yl`/X+E8nXRqV8[yzK/1XBPpPv#h' );
define( 'SECURE_AUTH_KEY',  '9j R_QCOR6.zcXM3Q+`6Qr~Nh=]^1 +e0kYR1&]|r^IN~xfRsE#;$&A?u4+t.6:U' );
define( 'LOGGED_IN_KEY',    'o1}*%Z-S3=Xt>?`Kmk O8J*fGY)N8F*YpWrx63^,x1{,{j@)KJ}Fxs`f#ENCpo+a' );
define( 'NONCE_KEY',        'wYZ=LN.gCFPDoja$:E]XoD=*8#Gew, ^sc{O<HZhK]qEX^}s{yyyztv&C4PJi4$t' );
define( 'AUTH_SALT',        'yN&uwgf;Q#O25WDj=UocQ^[0Y1+leLNskp>@t<Igvx-cFz@t,PM/p((c@1[0w%;M' );
define( 'SECURE_AUTH_SALT', 'UuR[kbr8wrD]s74$#ks6QQ?B0b+HgaXspPD|,Qh/T,BZX<@K9f$=e0ayYWi SH31' );
define( 'LOGGED_IN_SALT',   'VdIYY[ATg[~w:Jk88Nt}hR9b!#(^akb[h)<|[Ulj0!:c:Uf|F?}yzqjCW_^DQv3i' );
define( 'NONCE_SALT',       'wA(%)`kV7zhB_Cj:(Jh)%AsHxXNdz/(sPBzb^: J$xBHvSjImV0#Dlc1 vSaEF%L' );

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
