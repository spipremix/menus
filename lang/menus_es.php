<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/menus?lang_cible=es
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'configurer_entrees_masquees_explication' => 'Marque las entradas que desee <strong>esconder</strong> cuando cree un menú.',
	'configurer_titre' => 'Configurar las entradas del plugin Menus',
	'confirmer_supprimer_entree' => '¿Quiere realmente eliminar esta entrada?',

	// D
	'description_menu_accueil' => 'Enlace a la portada del sitio.',
	'description_menu_articles_rubrique' => 'Muestra una lista de artículos de una sección.',
	'description_menu_deconnecter' => 'Si el visitante se conecta, se añade una entrada que propone la desconexión.',
	'description_menu_espace_prive' => 'Enlace para conectarse al sitio si no está ya conectado, y luego ir a la zona privada, si se tiene autorización.',
	'description_menu_groupes_mots' => 'Muestra automáticamente un menú con las palabras del grupo y artículos relacionados. De manera predeterminada, muestra la lista de frases y palabras. Si un esqueleto groupes_mots.html existe, el enlace con el grupo es utilizado.',
	'description_menu_lien' => 'Añade un enlace arbitrario interno (URL relativa) o externo (http://...).',
	'description_menu_mapage' => 'Si el visitante se conecta, añade un enlace a su página de autor.',
	'description_menu_mots' => 'Muestra automáticamente un menú que enumera los artículos relacionados con la palabra clave.',
	'description_menu_objet' => 'Crea un enlace a un objeto de SPIP: artículo, sección u otro. De manera predeterminada, la entrada será el título del objeto.',
	'description_menu_page_speciale' => 'Añade un enlace a un esqueleto página accesible para una url del tipo <code>spip.php?page=nom&param1=xx&param2=yyy...</code> Estas páginas se proporcionan a menudo por los plugins.',
	'description_menu_page_speciale_zajax' => 'Añadir un enlace a un bloque de una página accesible por una url del tipo <code>spip.php?page=nom¶m1=xx¶m2=yyy...</code> Esto requiere un esqueleto de tipo Z y el plugin <a href="http://contrib.spip.net/MediaBox"> Mediabox</ a>.',
	'description_menu_rubriques_articles' => 'Muestra una lista de secciones y, si se quiere, subsecciones y artículos en varios niveles. De manera predeterminada, muestra todas las secciones de la raíz, ordenados por título (en orden alfabético y numérico). Los artículos se colocan automáticamente después de las secciones.',
	'description_menu_rubriques_completes' => 'Muestra una lista de secciones y, si se quiere, las subsecciones en varios niveles. Por defecto, muestra todas las secciones desde la raíz, ordenadas por título (numéricamente, y luego alfabéticamente).',
	'description_menu_secteurlangue' => 'Esta entrada es específica de los sitios que utilizan un sector para cada idioma. Se muestra automáticamente un menú con las secciones de la zona correspondiente al idioma de la página y, si se quiere, las sub-secciones en varios niveles. De manera predeterminada, muestra todas las secciones de la raíz, ordenados por título (en orden alfabético y numérico).',
	'description_menu_texte_libre' => 'Simplemente el texto que deseas, o un código de idiomas SPIP (<:...:>)',

	// E
	'editer_menus_editer' => 'Modificar el menú',
	'editer_menus_explication' => 'Crear y configurar aquí los menús de su sitio',
	'editer_menus_exporter' => 'Exportar el menú',
	'editer_menus_nouveau' => 'Crear un nuevo menú',
	'editer_menus_titre' => 'Menús del sitio',
	'entree_afficher_articles' => 'Incluir los artículos en en el menú ? (escribe "oui" para para que ocurra)',
	'entree_afficher_item_suite' => 'Incluir los artículos en el menu ? (escribe "oui" para esto)',
	'entree_articles_max' => 'Si es así, ¿ver los artículos sólo si la sección contiene como máximo xx artículos? (indicar el máximo número de artículos, o bien dejar en blanco para mostrar todos los artículos)',
	'entree_articles_max_affiches' => 'Si es así, ¿limitar el número de artículos listados en xx máximo (seguidos de un ítem "... Todos los artículos", con un enlace a la sección padre)? (Indique el número máximo de artículos, dejar en blanco para mostrar todos los artículos)', # MODIF
	'entree_aucun' => 'Ninguno',
	'entree_bloc' => 'Bloquear Zpip',
	'entree_choisir' => 'Seleccione el tipo de entrada que desea añadir:',
	'entree_classe_parent' => 'Clase de vínculos de elementos primarios. Esta clase se añadirá a li>a asociados a ul/li. Por ejemplo, si escribe "papá", lo que le permite utilizar el plugin "menu deroulant 2" para este menú.',
	'entree_connexion_objet' => 'Obligar  a estar conectado (poner "session") o desconectado (poner "nosession") para ver el objeto',
	'entree_contenu' => 'Contenido',
	'entree_css' => 'Clases css de la entrada (contenedor)',
	'entree_css_lien' => 'Clases CSS del link',
	'entree_id_groupe' => 'Número del grupo de palabras clave',
	'entree_id_mot' => 'Número de palabra clave',
	'entree_id_objet' => 'Número',
	'entree_id_rubrique' => 'Número de la sección padre',
	'entree_id_rubrique_ou_courante' => 'Número de la sección madre o "corriente" si la sección padre es la sección corriente del contexto',
	'entree_id_rubriques_exclues' => 'Números de secciones a excluir, separadas por coma',
	'entree_id_secteur_exclus' => 'Números de sectores a excluir, separados por coma',
	'entree_infini' => 'Al infinito',
	'entree_mapage' => 'Mi página personal',
	'entree_masquer_articles_uniques' => 'Si es así y si una sección contiene un solo elemento, se esconde? (Poner "oui" para esto)',
	'entree_niveau' => 'Niveles de sub-secciones',
	'entree_nombre_articles' => 'Número de artículos como máximo (0 por defecto)',
	'entree_page' => 'Nombre de la página',
	'entree_parametres' => 'Lista de parámetros',
	'entree_rubriques_max_affichees' => 'Si es así, limitar el número de secciones listadas a xx máximo (seguido por una entrada "... Todos las secciones" con un enlace a la sección padre)? (Especifique el número máximo de secciones, dejar en blanco para mostrarlas todas)', # MODIF
	'entree_sousrub_cond' => 'Mostrar sólo subcategorías de la sección actual (poner "oui", de lo contrario dejar en blanco)',
	'entree_suivant_connexion' => 'Restringir esta entrada según el estado de conexión (poner "connecte" para mostrar sólo si el visitante está conectado, "deconnecte" para el caso contrario, poner "admin" si el autor es administrador o dejar en blanco para mostrar siempre)',
	'entree_suivant_connexion_connecte' => 'sólo si conectado',
	'entree_suivant_connexion_deconnecte' => 'sólo si desconectado',
	'entree_sur_n_articles' => '@n@ artículo(s) mostrado(s)',
	'entree_sur_n_mots' => '@n@ palabra(s) mostrada(s)',
	'entree_sur_n_niveaux' => 'En @n@ nivel(es)',
	'entree_titre' => 'Título',
	'entree_titre_connecter' => 'Título para acceder al formulario de identificación',
	'entree_titre_prive' => 'Título para acceder al espacio privado',
	'entree_traduction_articles_rubriques' => 'Siempre que sea posible, ver los artículos en la categoría en el idioma del contexto (poner "trad" para esto)',
	'entree_traduction_objet' => 'En el caso de un artículo, seleccione la traducción en función del contexto (poner "trad" para esto)', # MODIF
	'entree_type_objet' => 'Tipo de objeto',
	'entree_url' => 'Dirección',
	'entree_url_public' => 'Dirección de retorno luego de la conexión',
	'erreur_aucun_type' => 'Ningún tipo de entrada se encontró.',
	'erreur_autorisation' => 'No estás autorizado a modificar los menús.',
	'erreur_identifiant_deja' => 'Este identificador ya es utilizado por un menú.',
	'erreur_identifiant_forme' => 'El identificador debe contener sólo letras, números o guión bajo.',
	'erreur_menu_inexistant' => 'El menú con numéro @id@  solicitado no existe.',
	'erreur_mise_a_jour' => 'Se produjo un error durante la actualización de la base de datos.',
	'erreur_parametres' => 'Hubo un error en los parámetros de la página',
	'erreur_type_menu' => 'Debes elegir un tipo de menú',
	'erreur_type_menu_inexistant' => 'Este tipo de menu no está, o ya no está disponible',

	// F
	'formulaire_ajouter_entree' => 'Añadir una entrada',
	'formulaire_ajouter_sous_menu' => 'Crear un submenú',
	'formulaire_css' => 'Clases CSS',
	'formulaire_css_explication' => 'Puedes agregar al menú eventuales clases CSS suplementarias.',
	'formulaire_deplacer_bas' => 'Bajar',
	'formulaire_deplacer_haut' => 'Subir',
	'formulaire_facultatif' => 'Opcional',
	'formulaire_identifiant' => 'Identificador',
	'formulaire_identifiant_explication' => 'Indique una palabra clave única que le permita nombrar a su menú fácilmente.',
	'formulaire_ieconfig_choisir_menus_a_importer' => 'Elija el(los) menú(s) que desea importar.',
	'formulaire_ieconfig_importer' => 'Importar',
	'formulaire_ieconfig_menu_meme_identifiant' => 'ATENCION : un menú con el mismo identificador ya existe en tu sitio !',
	'formulaire_ieconfig_menus_a_exporter' => 'Menús a exportar :',
	'formulaire_ieconfig_ne_pas_importer' => 'No importar',
	'formulaire_ieconfig_remplacer' => 'Reemplazar el menú actual por el menú importado',
	'formulaire_ieconfig_renommer' => 'Renombrar el menú antes de importar',
	'formulaire_importer' => 'Importar un menú',
	'formulaire_importer_explication' => 'Si ha exportado un menú en un archivo, puede importarlo ahora.',
	'formulaire_modifier_entree' => 'Modificar esta entrada',
	'formulaire_modifier_menu' => 'Modificar el menú :',
	'formulaire_nouveau' => 'Nuevo menú',
	'formulaire_partie_construction' => 'Construcción del menú',
	'formulaire_partie_identification' => 'Identificación del menú',
	'formulaire_supprimer_entree' => 'Eliminar esta entrada',
	'formulaire_supprimer_menu' => 'Eliminar el menú',
	'formulaire_supprimer_sous_menu' => 'Eliminar el submenú',
	'formulaire_titre' => 'Título',

	// I
	'info_afficher_articles' => 'Los artículos serán incluídos en el menú',
	'info_articles_max' => 'Sólo si la sección contiene como máximo @max@ artículos',
	'info_articles_max_affiches' => 'Visualización limitada a un máximo de @max@ artículos',
	'info_classe_parent' => 'Clase de elementos padre : ',
	'info_connexion_obligatoire' => 'Conexión obligatoria',
	'info_deconnexion_obligatoire' => 'Únicamente desconectado',
	'info_masquer_articles_uniques' => 'Artículos únicos ocultos',
	'info_numero_menu' => 'MENU NÚMERO :',
	'info_page_speciale' => 'Link a la página « @page@ »',
	'info_page_speciale_zajax' => 'Modalbox de la página «@page@» para el bloque «@bloc@» ',
	'info_rubrique_courante' => 'Sección en curso',
	'info_rubriques_exclues' => ' / salvo la(s) sección(es) @id_rubriques@',
	'info_rubriques_max_affichees' => 'Limitado a @max@ secciones',
	'info_secteur_exclus' => ' / salvo el/los sector(es) @id_secteur@',
	'info_sousrub_cond' => 'Sólo las subsecciones de las secciones que se muestran.',
	'info_tous_groupes_mots' => 'Todos los grupos de palabras',
	'info_traduction_recuperee' => 'El contexto decidirá la traducción elegida',
	'info_tri' => 'Orden de secciones:',
	'info_tri_alpha' => '(alfabético)',
	'info_tri_articles' => 'Orden de artículos :',
	'info_tri_num' => '(numérico)',

	// N
	'noisette_description' => 'Inserta un menú definido con el plugin Menús',
	'noisette_label_afficher_titre_menu' => 'Mostrar el título del menú ?',
	'noisette_label_identifiant' => 'Menú a mostrar :',
	'noisette_nom_noisette' => 'Menú',
	'nom_menu_accueil' => 'Inicio',
	'nom_menu_articles_rubrique' => 'Artículos de una sección',
	'nom_menu_deconnecter' => 'Desconectarse',
	'nom_menu_espace_prive' => 'Conectarse / link al espacio privado',
	'nom_menu_groupes_mots' => 'Palabras claves y artículos de un grupo de palabras clave',
	'nom_menu_lien' => 'Link arbitrario',
	'nom_menu_mapage' => 'Mi página',
	'nom_menu_mots' => 'Artículos de una palabra clave',
	'nom_menu_objet' => 'Artículo, sección u otro objeto de SPIP',
	'nom_menu_page_speciale' => 'Link a un esqueleto de página',
	'nom_menu_page_speciale_zajax' => 'Un bloque de una página Zpip',
	'nom_menu_rubriques_completes' => 'Lista o arborescencia de secciones y de artículos (con varias opciones)',
	'nom_menu_rubriques_evenements' => 'Eventos de secciones',
	'nom_menu_secteurlangue' => 'Sectores de idioma',
	'nom_menu_texte_libre' => 'Texto libre',

	// T
	'tous_les_articles' => '... Todos los artículos',
	'toutes_les_rubriques' => '... Todas las secciones'
);

?>
