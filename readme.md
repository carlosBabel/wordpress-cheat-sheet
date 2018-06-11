# [![WordPress](wp-admin/images/wordpress-logo.png)](http://wordpress.org/)  
Version 4.9.6

Plataforma Semántica de Publicación Personal

# Antes de empezar

Te damos la bienvenida. WordPress es un proyecto muy especial para mí. Cada desarrollador o colaborador añade algo único a la mezcla, y juntos vamos creando algo hermoso de lo que me enorgullece formar parte. Se han dedicado miles de horas a WordPress y nos seguimos empleando en mejorarlo cada día. Gracias por hacerlo parte de tu mundo.

— Matt Mullenweg

# Instalación: la famosa Instalación en 5 minutos

1.  Descomprime el archivo en un directorio vacío y cárgalo en tu alojamiento web o algú otro destino en particular.
2.  Abre <span class="file">[wp-admin/install.php](wp-admin/install.php)</span> desde tu navegador. Se abrirá un proceso que te guiará para crear el archivo `wp-config.php` con los detalles de conexión a tu base de datos.
    1.  Si esto no funciona, no te preocupes. No funciona en todos los alojamientos. Abre `wp-config-sample.php` con un editor de texto como WordPad o similar y añade los detalles de tu base de datos.
    2.  Guarda el archivo como `wp-config.php` y súbelo.
    3.  Abre <span class="file">[wp-admin/install.php](wp-admin/install.php)</span> en tu navegador.
3.  Una vez completado el archivo de configuración, el instalador creará las tablas necesarias para tu blog en la base de datos. Si apareciera algún error, chequea de nuevo tu archivo `wp-config.php` y vuelve a intentarlo. Si falla de nuevo, por favor visita los [foros de soporte](http://es.forums.wordpress.org/ "Foros de soporte WordPress.org") con toda la información que puedas conseguir.
4.  **Si no incluiste una contraseña, utiliza la que se te habrá enviado por correo electrónico.** Si no proporcionaste un nombre de usuario, éste será `admin`.
5.  El instalador debería enviarte a la [página de login](wp-login.php). Accede con el nombre de usuario y contraseña que seleccionaste durante la instalación. Si la contraseña fue generada por el sistema, puedes hacer clic en 'Perfil' para modificarla.

# Actualizar

## Usar el Actualizador automático

Si estás actualizando desde la versión 2.7 o superior puedes usar el actualizador automático:

1.  Abre <span class="file">[wp-admin/update-core.php](wp-admin/update-core.php)</span> en tu navegador y sigue las instrucciones.
2.  ¿Querías más? ¡Eso es todo!

## Actualizar manualmente:

1.  Antes de actualizar nada, asegúrate de tener copias de seguridad de cualquier archivo que hayas modificado, como `index.php`.
2.  Elimina tus archivos de WP anteriores, guardando aquellos que hayas modificado.
3.  Sube los nuevos archivos a tu servidor.
4.  Dirige tu navegador a <span class="file">[/wp-admin/upgrade.php](wp-admin/upgrade.php)</span>.

# Migrar desde otros sistemas

WordPress puede [importar contenido de otros sistemas](http://codex.wordpress.org/Importing_Content). Lo primero que tienes que hacer es instalar WordPress y ponerlo en marcha como se ha descrito arriba, y luego usar [nuestras herramientas de importación](wp-admin/import.php "Importar a WordPress").

# Requisitos del sistema

*   [PHP](http://php.net/) versión **5.2.4** o superior.
*   [MySQL](http://www.mysql.com/) versión **5.0** o superior.

## Recomendaciones del sistema

*   El módulo de Apache [mod_rewrite](http://httpd.apache.org/docs/2.2/mod/mod_rewrite.html).
*   Un enlace a [https://wordpress.org](https://wordpress.org/) en tu sitio.

# Recursos en la red

Si alguna de tus preguntas no encuentra respuesta en este documento, te sugerimos que aproveches los numerosos recursos de WordPress en la red:

<dl>

<dt>[El Codex de WordPress](http://codex.wordpress.org/)</dt>

<dd>El Codex es la enciclopedia de todo lo relacionado con WordPress. Es la fuente de información más detallada disponible sobre WordPress.</dd>

<dt>[El blog de WordPress](http://wordpress.org/news/)</dt>

<dd>Aquí encontrarás las últimas actualizaciones y noticias acerca de WordPress. Las noticias recientes sobre WordPress aparecerán en tu escritorio por defecto.</dd>

<dt>[WordPress Planet](http://planet.wordpress.org/)</dt>

<dd>El WordPress Planet (Planeta WordPress) es un agregador de noticias que recopila entradas de blogs de WordPress por toda la web.</dd>

<dt>[Foros de ayuda de WordPress](https://wordpress.org/support/)</dt>

<dd>Si has buscado por todas partes pero sigues sin encontrar la respuesta, en los foros de ayuda, muy activos, cuentas con una amplia comunidad deseosa de ayudar. Para ayudarles a ayudarte, asegúrate de usar un título descriptivo e incluir en tu pregunta tantos detalles como te sea posible.</dd>

<dt>[Foros de ayuda de WordPress en español](http://es.forums.wordpress.org/)</dt>

<dd>También puedes acceder a los foros específicos para español.</dd>

<dt>[Canal IRC de WordPress](http://codex.wordpress.org/IRC)</dt>

<dd>Por último, existe un canal de chat utilizado por la gente que usa Wordpress para intercambiar opiniones y eventualmente solicitar ayuda. La página del wiki que ves arriba podrá orientarte. ([irc.freenode.net #wordpress](irc://irc.freenode.net/wordpress))</dd>

</dl>

# Notas finales

*   Si tienes alguna sugerencia, idea, comentario, o si encuentras (ejem) un fallo, únete a nosotros en los [Foros de soporte](http://es.forums.wordpress.org/).
*   WordPress tiene ahora una robusta API de plugins que facilita la ampliación del código. Si eres un desarrollador interesado en utilizarla, mira la [documentación para plugins en el Codex](http://codex.wordpress.org/Plugin_API). En la mayoría de los casos, no tendrás que modificar nada del código central.

# Comparte tu afición

WordPress no cuenta con campañas de publicidad multimillonarias ni promotores famosos, pero tiene algo aún mejor: tú. Si disfrutas con WordPress, por favor, piensa en decírselo a un amigo, instalárselo a alguien menos entendido que tú o escribir al autor de un artículo que pase de nosotros.

WordPress es la continuación oficial de [b2/cafélog](http://cafelog.com/), de Michel V. El trabajo se ha continuado gracias a los [desarrolladores de WordPress](http://wordpress.org/about/). Si quieres apoyar a WordPress puedes [dar un donativo](http://wordpress.org/donate/ "Donaciones a WordPress").

# Licencia

WordPress se distribuye bajo la <abbr title="Licencia Pública de GNU">GPL</abbr>v2 (ver la [licencia](licencia.txt)).