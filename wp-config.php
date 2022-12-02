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
define( 'DB_NAME', 'WhatCX-WordpressAssessment' );

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
define( 'AUTH_KEY',         '*2jt76a+GQskB1V,Z_?m=Vb3X.e&3dfLErGQ7gn_-rTZ!G0g{:FYNy)x?yNaR)aY' );
define( 'SECURE_AUTH_KEY',  'ECYQ#_qy=Du%`S{IZYACfziyVU8{lR8k%*fo({6Va+K-r:iNxU8wr4@:KkL %|.M' );
define( 'LOGGED_IN_KEY',    '@,!NX$^iWcYzFwtdr[2xUv<XO5R-Kms|}_=J? QFvjh>:{<i1w8w2a/ >qJ~WAf>' );
define( 'NONCE_KEY',        '=|Y w_Mt+h`{AEJuRNr2[4c_0*ru~*P)6 .%vxxH:3o.MI.y#/%2c-c*n)CHggy#' );
define( 'AUTH_SALT',        '`[Z6=u,)w!_7VZ@1*8g66sGD~<t<|l(RD-TbGU,q{=c_n Sm/aqb-h0LXZC`Q@sg' );
define( 'SECURE_AUTH_SALT', 'k(.kjol2<sC:f14T5Au[|Nm$1e^E:4AD2`G*oko0qL,VrX.`@,h&{K.|a<HRBrCn' );
define( 'LOGGED_IN_SALT',   'S$rZgR{ 2`T#ulOuHT@>}&W@0.WEc.k2>H :+2r[N+0UG8<[b-7Fkcv@vO!J+(D{' );
define( 'NONCE_SALT',       '2P~b{?.Jf%uh8x1Uw|qQ`RO3UBQwBk@L/v1[N:/5eHclkCofoxa<GVL]s4<)52;m' );

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
