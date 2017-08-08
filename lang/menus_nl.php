<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/menus?lang_cible=nl
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'configurer_entrees_masquees_explication' => 'Geef aan welke items je wilt <strong>verbergen</strong> bij het aanmaken van een menu.',
	'configurer_titre' => 'Configureer de items van plugin Menus',
	'confirmer_supprimer_entree' => 'Wil je deze regel inderdaad verwijderen?',
	'confirmer_supprimer_sous_menu' => 'Wil je dit submenu echt verwijderen?',

	// D
	'description_menu_accueil' => 'Link naar de startpagina van de site.',
	'description_menu_articles_rubrique' => 'Toon een lijst van artikelen van een rubriek.',
	'description_menu_deconnecter' => 'Ook een optie afmelden weergeven voor aangemelde bezoekers.',
	'description_menu_espace_prive' => 'Link om te kunnen inloggen, en vervolgens naar het privé gedeelte van de site kunnen gaan.',
	'description_menu_groupes_mots' => 'Toon automatisch een menu met trefwoorden van de groep en gekoppelde artikelen, toon de lijst van trefwoordgroepen met bijbehorende trefwoorden. Wanneer een model groupes_mots.html bestaat, wordt de link ernaar gebruikt.',
	'description_menu_lien' => 'Voeg een arbitraire link toe, intern (relatieve URL) of extern (http://...).',
	'description_menu_mapage' => 'Wanneer een bezoeker is aangemeld een link naar zijn auteur bladzijde toevoegen.',
	'description_menu_mots' => 'Toon automatisch een menu met artikelen met het trefwoord.',
	'description_menu_objet' => 'Maak een link met een SPIP object: artikel, rubriek of anders. Standaard wordt de titel van het object gebruikt. Deze wordt pas na publicatie zichtbaar.',
	'description_menu_page_speciale' => 'Voeg een link toe naar een bladzijde die toegankelijk is via <code>spip.php?page=nom&param1=xx&param2=yyy...</code>.',
	'description_menu_page_speciale_zajax' => 'Voeg een link toe naar een blok van een bladzijde van het type <code>spip.php?page=nom&param1=xx&param2=yyy...</code> (plugin <a href="http://contrib.spip.net/MediaBox">médiabox</a>).',
	'description_menu_rubriques_articles' => 'Toon een lijst van rubrieken en desgewenst subrubrieken met artikelen op verschillende niveaus. Standaard vanaf de root, gesorteerd op titel. De artikelen worden systematisch na de rubrieken vermeld.',
	'description_menu_rubriques_completes' => 'Toon een lijst van rubrieken en desgewenst subrubrieken met artikelen op verschillende niveaus. Standaard vanaf de root, gesorteerd op titel.',
	'description_menu_secteurlangue' => 'Deze parameter is specifiek voor rubrieken per taal. Automatsich wordt de rubriek (met subrubrieken) van de juiste taal gekozen. Standaard vanaf de root, gesorteerd op titel.',
	'description_menu_texte_libre' => 'De tekst die je wil tonen, of een code uit de taaltabellen van SPIP (< :... :>)',

	// E
	'editer_menus_editer' => 'Pas menu aan',
	'editer_menus_explication' => 'Maak en configureer hier de menu’s van de site.',
	'editer_menus_exporter' => 'Exporteer dit menu',
	'editer_menus_nouveau' => 'Maak een nieuw menu',
	'editer_menus_titre' => 'Menu’s van de site',
	'entree_afficher_articles' => 'Ook de artikelen in het menu weergeven?',
	'entree_afficher_item_suite' => 'De artikelen in het menu invoegen?',
	'entree_articles_max' => 'Zo ja, toon dan alleen de artikelen wanneer de rubriek er niet meer telt dan (geef een aantal op of laat leeg om alle artikelen te tonen)',
	'entree_articles_max_affiches' => 'Zo ja, beperk het aantal vermelde artikelen tot (gevolgd door een item "... Alle artikelen" met een link naar de rubriek) (geef een aantal op of laat leeg om alle artikelen te tonen)',
	'entree_aucun' => 'Geen',
	'entree_bloc' => 'Zpip blok',
	'entree_choisir' => 'Kies het type dat je wilt toevoegen:',
	'entree_classe_parent' => 'Klasse van de bovenliggende elementen. Deze CSS class wordt toegevoegd aan de li>a met een daarop volgende ul/li.',
	'entree_connexion_objet' => 'Alleen indien ingelogd ("session") of niet aangemeld ("nosession") om dit object te kunnen zien',
	'entree_contenu' => 'Inhoud',
	'entree_css' => 'Initiële CSS class (van de container)',
	'entree_css_lien' => 'CSS class van de link',
	'entree_id_groupe' => 'Trefwoordengroepnummer',
	'entree_id_mot' => 'Trefwoordnummer',
	'entree_id_objet' => 'Nummer',
	'entree_id_rubrique' => 'Nummer van de bovenliggende rubriek',
	'entree_id_rubrique_ou_courante' => 'Nummer van de bovenliggende rubriek, of "huidige" wanneer de aangegeven rubriek de huidige is',
	'entree_id_rubriques_exclues' => 'Uit te sluiten subrubrieken, gescheiden door een komma',
	'entree_id_secteur_exclus' => 'Uit te sluiten hoofdrubrieken, gescheiden door een komma',
	'entree_infini' => 'Onbeperkt',
	'entree_lien_direct_articles_uniques' => 'Indien ja en unieke artikelen verborgen zijn, een link maken naar het artikel wanneer in de rubriek slechts één artikel rest? (bevestig met "ja" )',
	'entree_mapage' => 'Mijn eigen pagina',
	'entree_masquer_articles_uniques' => 'Een rubriek met slechts een artikel verbergen?',
	'entree_niveau' => 'Niveau van de subrubrieken',
	'entree_nombre_articles' => 'Maximum aantal artikelen (standaard 0)',
	'entree_page' => 'Naam van de bladzijde',
	'entree_parametres' => 'Lijst van parameters',
	'entree_rubriques_max_affichees' => 'Beperk het aantal vermelde rubrieken tot (gevolgd door item "... Alle rubrieken" met een link naar de bovenliggende rubriek) (laat leeg om alles te tonen)',
	'entree_sousrub_cond' => 'Toon alleen de subrubrieken van de huidige rubriek',
	'entree_suivant_connexion' => 'Toon alleen voor ingelogde of niet aangemelde gebruikers, alleen voor de "admin" (of laat leeg om altijd te tonen)',
	'entree_suivant_connexion_connecte' => 'alleen wanneer aangemeld',
	'entree_suivant_connexion_deconnecte' => 'alleen wanneer niet aangemeld',
	'entree_sur_n_articles' => '@n@ artikel(en) getoond',
	'entree_sur_n_mots' => '@n@ trefwoord(en) getoond',
	'entree_sur_n_niveaux' => 'Op @n@ niveau(s)',
	'entree_titre' => 'Titel',
	'entree_titre_connecter' => 'Titel voor toegang tot het aanlogscherm',
	'entree_titre_prive' => 'Titel voor toegang tot het privé-deel',
	'entree_traduction_articles_rubriques' => 'Toon (indien mogelijk) de artikelen die aan de taal gekoppeld zijn (kies "trad")',
	'entree_traduction_objet' => 'Kies de vertaling van een artikel op basis van de context (kies "trad")',
	'entree_tri' => 'Sorteervolgorde van rubrieken ("titre" per titel, "num titre" per nummer van de titel; voor omgekeerd sorteren plaats je er een "!" voor)',
	'entree_tri_articles' => 'Sorteervolgorde van artikelen ("titre" per titel, "num titre" per nummer van de titel; voor omgekeerd sorteren plaats je er een "!" voor)',
	'entree_type_objet' => 'Type object',
	'entree_url' => 'Adres',
	'entree_url_public' => 'Terugkeeradres na het aanmelden',
	'erreur_aucun_type' => 'Geen item gevonden.',
	'erreur_autorisation' => 'Je mag de menus niet aanpassen.',
	'erreur_identifiant_deja' => 'Deze identificatie wordt al voor een menu gebruikt.',
	'erreur_identifiant_forme' => 'De identificatie mag bestaan uit letters, cijfers en een liggend streepje.',
	'erreur_menu_inexistant' => 'Het menu met nummer @id@ bestaat niet.',
	'erreur_mise_a_jour' => 'Een fout is opgetreden bij het aanpassen van de database.',
	'erreur_parametres' => 'Er is een fout in de paramaters van de bladzijde',
	'erreur_type_menu' => 'Je moet een type menu kiezen',
	'erreur_type_menu_inexistant' => 'Dit type menu is niet (meer) beschikbaar',

	// F
	'formulaire_ajouter_entree' => 'Voeg een regel toe',
	'formulaire_ajouter_sous_menu' => 'Maak een submenu',
	'formulaire_css' => 'CSS class',
	'formulaire_css_explication' => 'Je kunt eventueel extra CSS classes aan het menu toevoegen.',
	'formulaire_deplacer_bas' => 'Naar beneden verplaatsen',
	'formulaire_deplacer_haut' => 'Naar boven verplaatsen',
	'formulaire_facultatif' => 'Facultatief',
	'formulaire_identifiant' => 'Identificatie',
	'formulaire_identifiant_explication' => 'Geef een uniek trefwoord om het menu gemakkelijk op te roepen.',
	'formulaire_ieconfig_choisir_menus_a_importer' => 'Kies welk(e) menu(’s) je wilt importeren.',
	'formulaire_ieconfig_importer' => 'Importeren',
	'formulaire_ieconfig_menu_meme_identifiant' => 'LET OP: een menu met dezelfde identificatie bestaat al!',
	'formulaire_ieconfig_menus_a_exporter' => 'Te exporteren menu’s:',
	'formulaire_ieconfig_ne_pas_importer' => 'Niet importeren',
	'formulaire_ieconfig_remplacer' => 'Vervang het bestaande menu door het geïmporteerde',
	'formulaire_ieconfig_renommer' => 'Hernoem het menu voor het importeren',
	'formulaire_importer' => 'Importeer een menu',
	'formulaire_importer_explication' => 'Wanneer je een menu in een bestand hebt geëxporteerd, kun je het nu importeren.',
	'formulaire_modifier_entree' => 'Pas deze regel aan',
	'formulaire_modifier_menu' => 'Aanpassen van menu:',
	'formulaire_nouveau' => 'Nieuw menu',
	'formulaire_partie_construction' => 'Opbouw van het menu',
	'formulaire_partie_identification' => 'Identificatie van het menu',
	'formulaire_supprimer_entree' => 'Deze regel verwijderen',
	'formulaire_supprimer_menu' => 'Dit menu verwijderen',
	'formulaire_supprimer_sous_menu' => 'Dit submenu verwijderen',
	'formulaire_titre' => 'Titel',

	// I
	'info_afficher_articles' => 'De artikelen worden in het menu opgenomen.',
	'info_articles_max' => 'Alleen indien de rubriek maximaal @max@ artikelen heeft',
	'info_articles_max_affiches' => 'Beperkt tot @max@ artikelen',
	'info_classe_parent' => 'Class van bovenliggende elementen: ',
	'info_connexion_obligatoire' => 'Aangemeld',
	'info_deconnexion_obligatoire' => 'Niet aangemeld',
	'info_masquer_articles_uniques' => 'Enkele artikelen verborgen',
	'info_numero_menu' => 'MENU NUMMER:',
	'info_page_speciale' => 'Link naar bladzijde « @page@ »',
	'info_page_speciale_zajax' => 'Modalbox van bladzijde « @page@ » voor blok « @bloc@ &#187',
	'info_rubrique_courante' => 'Huidige rubriek',
	'info_rubriques_exclues' => ' / behalve rubriek(en) @id_rubriques@',
	'info_rubriques_max_affichees' => 'Maximaal @max@ rubrieken',
	'info_secteur_exclus' => ' / behalve hoofdrubriek(en) @id_secteur@',
	'info_sousrub_cond' => 'Alleen subrubrieken van de huidige rubriek.',
	'info_tous_groupes_mots' => 'Alle trefwoordgroepen',
	'info_traduction_recuperee' => 'De context bepaald de gekozen vertaling',
	'info_tri' => 'Sortering rubrieken:',
	'info_tri_alpha' => '(alfabetisch)',
	'info_tri_articles' => 'Sortering artikelen:',
	'info_tri_num' => '(numeriek)',

	// N
	'noisette_description' => 'Voeg een menu van plugin Menus toe.',
	'noisette_label_afficher_titre_menu' => 'De titel van het menu tonen?',
	'noisette_label_identifiant' => 'Te tonen menu:',
	'noisette_nom_noisette' => 'Menu',
	'nom_menu_accueil' => 'Begin',
	'nom_menu_articles_rubrique' => 'Artikelen van een rubriek',
	'nom_menu_deconnecter' => 'Afmelden',
	'nom_menu_espace_prive' => 'Aanmelden / link naar privé-deel',
	'nom_menu_groupes_mots' => 'Trefwoorden en Artikelen van een Trefwoordengroep',
	'nom_menu_lien' => 'Willekeurige link',
	'nom_menu_mapage' => 'Mijn pagina',
	'nom_menu_mots' => 'Artikelen van een Trefwoord',
	'nom_menu_objet' => 'Artikel, rubriek of een ander SPIP object',
	'nom_menu_page_speciale' => 'Link naar een modelbladzijde',
	'nom_menu_page_speciale_zajax' => 'Een blok van een Zpip pagina',
	'nom_menu_rubriques_completes' => 'Lijst van rubrieken en artikelen (met vele opties)',
	'nom_menu_rubriques_evenements' => 'Evenementen van rubrieken',
	'nom_menu_secteurlangue' => 'Taalrubrieken',
	'nom_menu_texte_libre' => 'Vrije tekst',

	// T
	'tous_les_articles' => '... Alle artikelen',
	'toutes_les_rubriques' => '... Alle rubrieken',

	// U
	'utiles_explication' => 'De huidige skeletten van de site mogen de volgende menu’s gebruiken.',
	'utiles_generer_menu' => 'Het menu <strong>@titre@ (<em>@identifiant@</em>)</strong> maken',
	'utiles_generer_menus' => 'Maak <strong>alle</strong> menu’s bruikbaar',
	'utiles_titre' => 'Bruikbare menu’s'
);
