<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'e6eh');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'carlos');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'reload');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '${jo57t2(}p}U+tDt$]|DRjKB7gvqZ|;1bl .# cVGp6@QMVfwMk(5c+yvS|44M(');
define('SECURE_AUTH_KEY', 'Sj)bo5fZEJ[Z|/LGQp[VTh,&q(iUv?w>FMr(`X}UdZy1)m5r6p$j/8{MFEhR.0=o');
define('LOGGED_IN_KEY', 'u69OJA22l.HT&x,jfN$Zop]cHP!T:6Q`v5[l$,U|P[b?X|qBU?AU^!3zF49r+H{m');
define('NONCE_KEY', 'R4&bA;?./%^|c5Q-h*x2Y^m.pQ*Ho~I4nn!O^z;lyxuvu/#hk!qouk7Xo>G@F(B]');
define('AUTH_SALT', 'm =z=(Z6BM<r+K:.Rj&JRyrcG~[` iBV>Rf_9>6Pa~lurHGo+N D/9vo7)MG4@Z?');
define('SECURE_AUTH_SALT', '-lK,W+2HAR{RPgB)1t;%F*zRy,fE}<VTItWEAx{u*<u$AD Zpt*(HNAI|dMd7}nZ');
define('LOGGED_IN_SALT', 'f62K&4K^>k-q@z*N>#`MC;>)j6U*4~I@0D{9x+Ym|jmE%/XNw.@x9kR;wJU;*|LR');
define('NONCE_SALT', '5iZ<Nhe]qGGg)^|2/^?`4Y?k-C8;*tX=Q5EMDXN`bhazX%q4;TD/+paw`!:.mfg?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'e6eh_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

