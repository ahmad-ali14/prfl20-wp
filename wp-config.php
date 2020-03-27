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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'Wj-y-8 $*haZFk]wh^fl?unLQ>JeUy)rXdE$n_wpi|?)nC9y+]OReAvRB7y!wJO(' );
define( 'SECURE_AUTH_KEY',  '>POgvJm*oBaCZ6Ih 0KJX6X(?65`Z2&@3oYK@`}(P8Q#6!Q$a`&rIh<2l#/~%g9u' );
define( 'LOGGED_IN_KEY',    '0(i<hTcsf.@L zj7RGS-WMwz>mJ>W=?vxJR3~-E6EAJ6]a,,%l&Bf7HhH,1v^^<r' );
define( 'NONCE_KEY',        'oT X26/J*vjnLCI)Y2>-Vzy8O)58Ft|3a/WI2rJ/5=(`9[]}HogsVYIPw_ TI9Xp' );
define( 'AUTH_SALT',        '6-&9y|].zd>cDrXo(o8@i12FA#Dko%zt]eI<=[ULh6]:43`26;|[=fNtEEguGnGU' );
define( 'SECURE_AUTH_SALT', '){B60Hzr&BRxCx%KbZ$@sTM}_2RLDYE5gsUChok_Kh4=W/-y@yEky_/D>Xs#U,Zg' );
define( 'LOGGED_IN_SALT',   '{8@NJ$|=:kC9M=/6n.3229~MB,I{=oanX^p2&i3#h=0=Xd/0q,{G/Qc|6]$!o05<' );
define( 'NONCE_SALT',       'an%)IF$u}EZ}#.A)/j5lYfu !$@T4By%iKmy{uEV:32v-OI2gw#5Q!Ke;}A|dPfv' );

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
