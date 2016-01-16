<?php
$TRANSLATIONS = array(
"Feed contains invalid XML" => "La fuente contiene XML inválido",
"Detected feed format is not supported" => "El formato de fuente detectado no está soportado",
"SSL Certificate is invalid" => "El certificado SSL es inválido",
"Website not found" => "Sitio web no encontrado",
"More redirects than allowed, aborting" => "Hay más redirecciones que el máximo permitido, cancelando",
"Bigger than maximum allowed size" => "Mayor tamaño que el máximo permitido",
"Request timed out" => "Tiempo de espera agotado",
"Request failed, network connection unavailable!" => "La petición ha fallado, ¡conexión de red no disponible!",
"Request unauthorized. Are you logged in?" => "Petición no autorizada, ¿está autenticado?",
"Request forbidden. Are you an admin?" => "Petición prohibida, ¿es usted el admin?",
"Token expired or app not enabled! Reload the page!" => "¡Token expirado o aplicación no habilitada! ¡Recarge la página!",
"Internal server error! Please check your " => "¡Error interno del servidor! Por favor, compruebe su",
"Request failed, ownCloud is in currently " => "La petición ha fallado: ownCloud ya está actualmente",
"Can not add feed: Exists already" => "No se puede agregar fuente: ya existe",
"Articles without feed" => "Artículos sin fuente",
"Can not add folder: Exists already" => "No se puede agregar la carpeta: ya existe",
"Use ownCloud cron for updates" => "Utilizar el programador de tareas de ownCloud para las actualizaciones",
"Disable this if you run a custom updater such as the Python updater included in the app" => "Deshabilita esto si ejecutas un actualizador personalizado como el actualizador Python incluido en la aplicación",
"Purge interval" => "Intervalo de purgamiento",
"Minimum amount of seconds after deleted feeds and folders are removed from the database; values below 60 seconds are ignored" => "Número mínimo de segundos antes de que las fuentes y carpetas eliminadas sean eliminadas definitivamente de la base de datos; valores por debajo de 60 segundos serán ignorados.",
"Maximum read count per feed" => "Máximo número de lecturas por fuente",
"Defines the maximum amount of articles that can be read per feed which won't be deleted by the cleanup job; if old articles reappear after being read, increase this value; negative values such as -1 will turn this feature off completely" => "Define el máximo número de artículos que se pueden leer por fuente que no serán eliminados por la tarea de limpieza; si los artículos antiguos reaparecen tras la lectura, incremente este valor; los valor negativos, como -1, deshabilitan esta funcionalidad por completo.",
"Maximum redirects" => "Máximo de redirecciones",
"How many redirects the feed fetcher should follow" => "¿Cuántas redirecciones debería soportar el descargador de fuentes?",
"Maximum feed page size" => "Máximo tamaño de página de la fuente",
"Maximum feed size in bytes. If the RSS/Atom page is bigger than this value, the update will be aborted" => "Máximo tamaño de la fuente en bytes. Si la página RSS/Atom es más grande que este valor, la actualización será cancelada",
"Feed fetcher timeout" => "Tiempo de espera agotado para la descarga de la fuente",
"Maximum number of seconds to wait for an RSS or Atom feed to load; if it takes longer the update will be aborted" => "Número máximo de segundos para esperar a que cargue una fuente de RSS o Atom; si toma más tiempo, la actualización será cancelada.",
"Explore Service URL" => "Explorar URL del Servicio",
"If given, this service's URL will be queried for displaying the feeds in the explore feed section. To fall back to the built in explore service, leave this input empty" => "En caso de haberse rellenado, la URL de este servicio será consultada para mostrar los \"feeds\" de la sección explorar feeds. Para volver al servicio de exploración integrado, deje este campo vacío",
"Saved" => "Guardado",
"Download" => "Descargar",
"Close" => "Cerrar",
"Ajax or webcron cron mode detected! Your feeds will not be updated correctly. It is recommended to either use the operating system cron or a custom updater." => "¡Ajax o modo cron webcron detectadas! Sus noticias no se actualizarán correctamente. Se recomienda utilizar el cron del sistema operativo o un programa de actualización personalizado.",
"How to set up the operating system cron" => "Cómo configurar el cron del sistema operativo",
"How to set up a custom updater (faster and no possible deadlock) " => "Cómo configurar un actualizador personalizado (más rápido y sin estancamiento)",
"Subscribe" => "Subscribirse",
"Refresh" => "Actualizar",
"No articles available" => "No hay artículos disponibles",
"No unread articles available" => "No hay artículos leídos disponibles",
"Open website" => "Abrir página web",
"Star article" => "Añadir artículo a favoritos",
"Unstar article" => "Quitar artículo de favoritos",
"Keep article unread" => "Mantener el artículo como no-leído.",
"Remove keep article unread" => "Elimina mantener el artículo como no-leído.",
"by" => "por",
"from" => "de",
"Play audio" => "Reproducir audio",
"Download video" => "Descargar vídeo",
"Download audio" => "Descargar audio",
"Keyboard shortcut" => "Atajo de teclado",
"Description" => "Descripción",
"right" => "derecha",
"Jump to next article" => "Ir al artículo siguiente",
"left" => "izquierda",
"Jump to previous article" => "Ir al artículo anterior",
"Toggle star article" => "Marcar como favorito",
"Star article and jump to next one" => "Marcar como favorito e ir al siguiente",
"Toggle keep current article unread" => "Marcar como no leído",
"Open article in new tab" => "Abrir artículo en una nueva pestaña",
"Toggle expand article in compact view" => "Expandir artículo en vista compacta",
"Load next feed" => "Cargar fuente siguiente",
"Load previous feed" => "Cargar fuente anterior",
"Load next folder" => "Cargar carpeta siguiente",
"Load previous folder" => "Cargar carpeta anterior",
"Scroll to active navigation entry" => "Desplácese hasta la entrada de navegación activa",
"Focus search field" => "Campo de búsqueda de enfoque",
"Mark current article's feed/folder read" => "Marcar los articulos actuales como leidos",
"Web address" => "Dirección web",
"Feed exists already!" => "Esa fuente ya existe.",
"Folder" => "Carpeta",
"No folder" => "Sin carpeta",
"New folder" => "Nueva carpeta",
"Folder name" => "Nombre de la carpeta",
"Go back" => "Atrás",
"Folder exists already!" => "¡La carpeta ya existe!",
"New Folder" => "Nueva carpeta",
"Create" => "Crear",
"Explore" => "Explorar",
"Update failed more than 50 times" => "Actualización fallida más de 50 veces.",
"Deleted feed" => "Eliminar fuente",
"Undo delete feed" => "Deshacer eliminar fuente",
"Rename" => "Renombrar",
"Menu" => "Menú",
"No feed ordering" => "Fuentes no ordenadas",
"Reversed feed ordering" => "Fuentes en orden inverso",
"Normal feed ordering" => "Fuentes en orden normal",
"Keep updated articles as is" => "Mantener artículos actualizadas como este",
"Mark updated articles unread" => "Marcar artículos actualizados como no leídos",
"Rename feed" => "Renombrar fuente",
"Delete feed" => "Eliminar fuente",
"Mark all articles read" => "Marcar todos los artículos como leídos",
"Dismiss" => "Descartar",
"Collapse" => "Colapsar",
"Deleted folder" => "Carpeta eliminada",
"Undo delete folder" => "Deshacer eliminar carpeta",
"Rename folder" => "Renombrar carpeta",
"Delete folder" => "Eliminar carpeta",
"Starred" => "Favoritos",
"Unread articles" => "Artículos sin leer",
"All articles" => "Todos los artículos",
"Settings" => "Ajustes",
"Keyboard shortcuts" => "Atajos de teclado",
"Disable mark read through scrolling" => "Deshabilitar la marca de lectura al realizar el desplazamiento.",
"Compact view" => "Vista compacta",
"Expand articles on key navigation" => "Expandir los articilos al navegar",
"Show all articles" => "Mostrar todos los artículos",
"Reverse ordering (oldest on top)" => "Ordenación inversa (la más antigua en la parte superior)",
"Subscriptions (OPML)" => "Subscripciones (OPML)",
"Import" => "Importar",
"Export" => "Exportar",
"Error when importing: file does not contain valid OPML" => "Error al importar: el archivo no contiene OPML válido",
"Unread/Starred Articles" => "Artículos no leídos y favoritos",
"Error when importing: file does not contain valid JSON" => "Error al importar: el archivo no contiene JSON válido"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
