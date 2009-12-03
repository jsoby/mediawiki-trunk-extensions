<?php

/**
 * Internationalization file for the Semantic Maps extension
 *
 * @file SemanticMaps.i18n.php
 * @ingroup Semantic Maps
 *
 * @author Jeroen De Dauw
 */ 

$messages = array();

/** English
 * @author Jeroen De Dauw
 */

$messages['en'] = array(
	// General
	'semanticmaps_name' => 'Semantic Maps',
	'semanticmaps_desc' => "Provides the ability to view and edit coordinate data stored through the Semantic MediaWiki extension ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Available map services: $1",

	// Geo coord data type
	'semanticmaps_lonely_unit'     => 'No number found before the symbol "$1".', // $1 is something like Â°
	'semanticmaps_bad_latlong'     => 'Latitude and longitude must be given only once, and with valid coordinates.',
	'semanticmaps_abb_north'       => 'N',
	'semanticmaps_abb_east'        => 'E',
	'semanticmaps_abb_south'       => 'S',
	'semanticmaps_abb_west'        => 'W',
	'semanticmaps_label_latitude'  => 'Latitude:',
	'semanticmaps_label_longitude' => 'Longitude:',

	// Forms
	'semanticmaps_lookupcoordinates' 	=> 'Look up coordinates',
	'semanticmaps_enteraddresshere' 	=> 'Enter address here',
	'semanticmaps_notfound' 			=> 'not found',
	
	// Parameter descriptions
	'semanticmaps_paramdesc_format' 	=> 'The mapping service used to generate the map',
	'semanticmaps_paramdesc_geoservice' => 'The geocoding service used to turn addresses into coordinates',
	'semanticmaps_paramdesc_height' 	=> 'The height of the map, in pixels (default is $1)',
	'semanticmaps_paramdesc_width' 		=> 'The width of the map, in pixels (default is $1)',
	'semanticmaps_paramdesc_zoom' 		=> 'The zoom level of the map',
	'semanticmaps_paramdesc_centre' 	=> 'The coordinates of the maps\' centre',
	'semanticmaps_paramdesc_controls' 	=> 'The user controls placed on the map',
	'semanticmaps_paramdesc_types' 		=> 'The map types available on the map',
	'semanticmaps_paramdesc_type' 		=> 'The default map type for the map',
	'semanticmaps_paramdesc_overlays' 	=> 'The overlays available on the map',
	'semanticmaps_paramdesc_autozoom' 	=> 'Whether or not one can zoom in and out by using the mouse scroll wheel',
	'semanticmaps_paramdesc_layers' 	=> 'The layers available on the map',
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author Raymond
 */
$messages['qqq'] = array(
	'semanticmaps_desc' => '{{desc}}

* $1: a list of available map services',
	'semanticmaps_label_latitude' => '{{Identical|Latitude}}',
	'semanticmaps_label_longitude' => '{{Identical|Longitude}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'semanticmaps_desc' => 'Bied die vermoë om koördinaatdata met behulp van die Semantiese MediaWiki-uitbreiding te sien en te wysig ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Beskikbare kaartdienste: $1',
	'semanticmaps_lonely_unit' => 'Daar is nie \'n getal voor die "$1"-simbool nie.',
	'semanticmaps_bad_latlong' => 'Lengte en breedte moet slegs een keer gegee word, en moet geldige koördinate wees.',
	'semanticmaps_abb_north' => 'N',
	'semanticmaps_abb_east' => 'O',
	'semanticmaps_abb_south' => 'S',
	'semanticmaps_abb_west' => 'W',
	'semanticmaps_label_latitude' => 'Breedte:',
	'semanticmaps_label_longitude' => 'Lengte:',
	'semanticmaps_lookupcoordinates' => 'Soek koördinate op',
	'semanticmaps_enteraddresshere' => 'Voer adres hier in',
	'semanticmaps_notfound' => 'nie gevind nie',
	'semanticmaps_paramdesc_format' => 'Die kaartdiens wat die kaart lewer',
	'semanticmaps_paramdesc_geoservice' => 'Die geokoderingsdiens gebruik om adresse na koördinate om te skakel',
	'semanticmaps_paramdesc_height' => 'Die hoogte van die kaart in spikkels (standaard is $1)',
	'semanticmaps_paramdesc_width' => 'Die breedte van die kaart in spikkels (standaard is $1)',
	'semanticmaps_paramdesc_zoom' => 'Die zoom-vlak van die kaart',
	'semanticmaps_paramdesc_centre' => 'Die koördinate van die middel van die kaart',
	'semanticmaps_paramdesc_controls' => 'Die gebruikerskontroles op die kaart geplaas',
	'semanticmaps_paramdesc_types' => 'Die kaarttipes beskikbaar op die kaart',
	'semanticmaps_paramdesc_type' => 'Die standaard kaarttipe vir die kaart',
	'semanticmaps_paramdesc_overlays' => 'Die oorleggings beskikbaar op die kaart',
	'semanticmaps_paramdesc_autozoom' => 'Of in- en uit-zoom met die muis se wiel moontlik is',
	'semanticmaps_paramdesc_layers' => 'Die lae beskikbaar op die kaart',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'semanticmaps_desc' => 'يقدم إمكانية عرض وتعديل بيانات التنسيق التي خزنها امتداد سيمانتيك ميدياويكي ([http://wiki.bn2vs.com/wiki/Semantic_Maps تجربة]).
خدمات الخرائط المتوفرة: $1',
	'semanticmaps_lookupcoordinates' => 'ابحث عن الإحداثيات',
	'semanticmaps_enteraddresshere' => 'أدخل العنوان هنا',
	'semanticmaps_notfound' => 'لم يوجد',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 */
$messages['arz'] = array(
	'semanticmaps_lookupcoordinates' => 'ابحث عن الإحداثيات',
	'semanticmaps_enteraddresshere' => 'أدخل العنوان هنا',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'semanticmaps_name' => 'Сэмантычныя мапы',
	'semanticmaps_desc' => 'Забясьпечвае магчымасьць прагляду і рэдагаваньня зьвестак пра каардынаты, якія захоўваюцца з дапамогай пашырэньня Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps дэманстрацыя]). Даступныя сэрвісы мапаў: $1',
	'semanticmaps_lonely_unit' => 'Лік перад сымбалем «$1» ня знойдзены.',
	'semanticmaps_bad_latlong' => 'Даўгата і шырата павінны падавацца толькі аднойчы і са слушнымі каардынатамі.',
	'semanticmaps_abb_north' => 'Пн.',
	'semanticmaps_abb_east' => 'У.',
	'semanticmaps_abb_south' => 'Пд.',
	'semanticmaps_abb_west' => 'З.',
	'semanticmaps_lookupcoordinates' => 'Пошук каардынатаў',
	'semanticmaps_enteraddresshere' => 'Увядзіце тут адрас',
	'semanticmaps_notfound' => 'ня знойдзена',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'semanticmaps_desc' => 'Talvezout a ra da welet ha da gemmañ roadennoù stoket dre an astenn Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]). Servijoù kartennoù hegerz : $1',
	'semanticmaps_lookupcoordinates' => 'Istimañ an daveennoù',
	'semanticmaps_enteraddresshere' => "Merkit ar chomlec'h amañ",
	'semanticmaps_notfound' => "N'eo ket bet kavet",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'semanticmaps_desc' => 'Daje mogućnost pregleda i uređivanja podataka koordinata koji su spremljeni putem Semantic MediaWiki proširenja ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Dostupne usluge mapa: $1',
	'semanticmaps_lonely_unit' => 'Nije pronađen broj ispred simbola "$1".',
	'semanticmaps_bad_latlong' => 'Geografska širina i dužina moraju biti navedene samo jednom i sa valjanim koordinatama.',
	'semanticmaps_abb_north' => 'S',
	'semanticmaps_abb_east' => 'I',
	'semanticmaps_abb_south' => 'J',
	'semanticmaps_abb_west' => 'Z',
	'semanticmaps_label_latitude' => 'Geografska širina:',
	'semanticmaps_label_longitude' => 'Geografska dužina:',
	'semanticmaps_lookupcoordinates' => 'Nađi koordinate',
	'semanticmaps_enteraddresshere' => 'Unesite adresu ovdje',
	'semanticmaps_notfound' => 'nije pronađeno',
	'semanticmaps_paramdesc_height' => 'Visina mape, u pikselima (pretpostavljeno je $1)',
	'semanticmaps_paramdesc_width' => 'Širina mape, u pikselima (pretpostavljeno je $1)',
	'semanticmaps_paramdesc_zoom' => 'Nivo zumiranja mape',
	'semanticmaps_paramdesc_types' => 'Tipovi karti dostupnih na mapi',
	'semanticmaps_paramdesc_layers' => 'Slojevi dostupni na mapi',
);

/** Catalan (Català)
 * @author Paucabot
 */
$messages['ca'] = array(
	'semanticmaps_notfound' => "no s'ha trobat",
);

/** German (Deutsch)
 * @author DaSch
 * @author Pill
 * @author Umherirrender
 */
$messages['de'] = array(
	'semanticmaps_desc' => 'Ergänzt eine Möglichkeit zum Ansehen und Bearbeiten von Koordinaten, die im Rahmen der Erweiterung „Semantisches MediaWiki“ gespeichert wurden ([http://wiki.bn2vs.com/wiki/Semantic_Maps Demo]).
Unterstützte Kartendienste: $1',
	'semanticmaps_lookupcoordinates' => 'Koordinaten nachschlagen',
	'semanticmaps_enteraddresshere' => 'Adresse hier eingeben',
	'semanticmaps_notfound' => 'nicht gefunden',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'semanticmaps_desc' => 'Bitujo zmóžnosć se koordinatowe daty pśez rozšyrjenje Semantic MediaWiki woglědaś a wobźěłaś ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
K dispoziciji stojece kórtowe słužby: $1.',
	'semanticmaps_lonely_unit' => 'Pśed symbolom "$1" žedna licba namakana.',
	'semanticmaps_bad_latlong' => 'Šyrina a dlinina musytej se jano jaden raz pódaś, a z płaśiwymi koordinatami.',
	'semanticmaps_abb_north' => 'PP',
	'semanticmaps_abb_east' => 'PZ',
	'semanticmaps_abb_south' => 'PD',
	'semanticmaps_abb_west' => 'PW',
	'semanticmaps_label_latitude' => 'Šyrina:',
	'semanticmaps_label_longitude' => 'Dlinina:',
	'semanticmaps_lookupcoordinates' => 'Za koordinatami póglědaś',
	'semanticmaps_enteraddresshere' => 'Zapódaj how adresu',
	'semanticmaps_notfound' => 'njenamakany',
	'semanticmaps_paramdesc_format' => 'Kartěrowańska słužba, kótaraž se wužywa, aby napórała kórtu',
	'semanticmaps_paramdesc_geoservice' => 'Geokoděrowańska słužba, kótaraž se wužywa, aby pśetwóriła adrese do koordinatow',
	'semanticmaps_paramdesc_height' => 'Wusokosć kórty, w pikselach (standard jo $1)',
	'semanticmaps_paramdesc_width' => 'Šyrokosć kórty, w pikselach (standard jo $1)',
	'semanticmaps_paramdesc_zoom' => 'Skalěrowański schóźeńk kórty',
	'semanticmaps_paramdesc_centre' => 'Koordinaty srjejźišća kórty',
	'semanticmaps_paramdesc_controls' => 'Wužywarske elementy na kórśe',
	'semanticmaps_paramdesc_types' => 'Kórtowe typy, kótarež stoje za kórtu k dispoziciji',
	'semanticmaps_paramdesc_type' => 'Standardny kórtowy typ za kórtu',
	'semanticmaps_paramdesc_overlays' => 'Pśewarstowanja, kótarež stoje za kórtu k dispoziciji',
	'semanticmaps_paramdesc_autozoom' => 'Jolic pówětšenje a pómjeńšenje z pomocu kólaska myški jo móžno abo nic',
	'semanticmaps_paramdesc_layers' => 'Warsty, kótarež stoje za kórtu k dispoziciji',
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'semanticmaps_lookupcoordinates' => 'Επιθεώρηση συντεταγμένων',
	'semanticmaps_enteraddresshere' => 'Εισαγωγή διεύθυνσης εδώ',
	'semanticmaps_notfound' => 'δεν βρέθηκε',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'semanticmaps_lookupcoordinates' => 'Rigardi koordinatojn',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Imre
 * @author Locos epraix
 */
$messages['es'] = array(
	'semanticmaps_desc' => 'Proporciona la capacidad de ver y editar los datos coordinados almacenados a través de la extensión Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Servicios de mapas disponibles: $1',
	'semanticmaps_lookupcoordinates' => 'Busque las coordenadas',
	'semanticmaps_enteraddresshere' => 'Ingresar dirección aquí',
	'semanticmaps_notfound' => 'no encontrado',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'semanticmaps_lookupcoordinates' => 'Koordenatuak bilatu',
);

/** Finnish (Suomi)
 * @author Str4nd
 */
$messages['fi'] = array(
	'semanticmaps_notfound' => 'ei löytynyt',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author IAlex
 * @author Jean-Frédéric
 * @author PieRRoMaN
 */
$messages['fr'] = array(
	'semanticmaps_desc' => "Permet de voir et modifier les données de coordonnées stockées à travers l'extension Semantic MediaWiki. Services de cartes disponibles : $1. [http://www.mediawiki.org/wiki/Extension:Semantic_Maps Documentation]. [http://wiki.bn2vs.com/wiki/Semantic_Maps Démo]",
	'semanticmaps_abb_north' => 'N',
	'semanticmaps_abb_east' => 'E',
	'semanticmaps_abb_south' => 'S',
	'semanticmaps_abb_west' => 'O',
	'semanticmaps_label_latitude' => 'Latitude :',
	'semanticmaps_label_longitude' => 'Longitude :',
	'semanticmaps_lookupcoordinates' => 'Estimer les coordonnées',
	'semanticmaps_enteraddresshere' => 'Entrez ici l’adresse',
	'semanticmaps_notfound' => 'pas trouvé',
	'semanticmaps_paramdesc_format' => 'Le service de cartographie utilisé pour générer la carte',
	'semanticmaps_paramdesc_geoservice' => 'Le service de géocodage utilisé pour transformer les adresses en coordonnées',
	'semanticmaps_paramdesc_height' => 'La hauteur de la carte, en pixels ($1 par défaut)',
	'semanticmaps_paramdesc_width' => 'La largeur de la carte, en pixels ($1 par défaut)',
	'semanticmaps_paramdesc_zoom' => "Le niveau d'agrandissement de la carte",
	'semanticmaps_paramdesc_centre' => 'Les coordonnées du centre de la carte',
	'semanticmaps_paramdesc_controls' => 'Les contrôles utilisateurs placés sur la carte',
	'semanticmaps_paramdesc_types' => 'Les types de cartes disponibles sur la carte',
	'semanticmaps_paramdesc_type' => 'Le type de carte par défaut pour la carte',
	'semanticmaps_paramdesc_overlays' => 'Les revêtements disponibles sur la carte',
	'semanticmaps_paramdesc_autozoom' => 'Si on peut faire un zoom avant ou arrière en utilisant la molette de la souris ou non',
	'semanticmaps_paramdesc_layers' => 'Les revêtements disponibles sur la carte',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'semanticmaps_desc' => 'Proporciona a capacidade de visualizar e modificar os datos de coordenadas gardados a través da extensión Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demostración]).
Servizos de mapa dispoñibles: $1',
	'semanticmaps_lookupcoordinates' => 'Ver as coordenadas',
	'semanticmaps_enteraddresshere' => 'Introduza o enderezo aquí',
	'semanticmaps_notfound' => 'non se atopou',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'semanticmaps_desc' => 'Ergänzt e Megligkeit zum Aaluege un Bearbeite vu Koordinate, wu im Ramme vu dr Erwyterig „Semantisch MediaWiki“ gspycheret wore sin. Unterstitzti Chartedienscht: $1. [http://www.mediawiki.org/wiki/Extension:Semantic_Maps Dokumäntation]. [http://wiki.bn2vs.com/wiki/Semantic_Maps Demo]',
	'semanticmaps_lookupcoordinates' => 'Koordinate nooluege',
	'semanticmaps_enteraddresshere' => 'Doo Adräss yygee',
	'semanticmaps_notfound' => 'nit gfunde',
	'semanticmaps_paramdesc_format' => 'Dr Chartedienscht, wu brucht wäre soll zum Erzyyge vu dr Charte',
	'semanticmaps_paramdesc_geoservice' => 'Dr Geokodierigs-Service, wu brucht wäre soll zum umwandle vu Adrässe in Koordinate',
	'semanticmaps_paramdesc_height' => 'D Hechi vu dr Charte, in Pixel (Standard: $1)',
	'semanticmaps_paramdesc_width' => 'D Breiti vu dr Charte, in Pixel (Standard: $1)',
	'semanticmaps_paramdesc_zoom' => 'S Zoom-Level vu dr Charte',
	'semanticmaps_paramdesc_centre' => 'D Koordinate vum Mittelpunkt vu dr Charte',
	'semanticmaps_paramdesc_controls' => 'D Hilfsmittel, wu in d Charte yygfiegt sin',
	'semanticmaps_paramdesc_types' => 'D Chartetype, wu fir d Charte verfiegbar sin',
	'semanticmaps_paramdesc_type' => 'Dr Standard-Chartetyp fir d Charte',
	'semanticmaps_paramdesc_overlays' => 'D Overlays, wu fir d Charte verfiegbar sin',
	'semanticmaps_paramdesc_autozoom' => 'Eb mer e Charte cha vergreßere oder verchleinere mit em Muusrad',
	'semanticmaps_paramdesc_layers' => 'D Lage, wu fir Charte verfiegbar sin',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'semanticmaps_desc' => 'הוספת האפשרות לצפייה ולעריכה בנתוני קואורדינטה המאוחסנים דרך הרחבת המדיה־ויקי הסמנטי ([http://wiki.bn2vs.com/wiki/Semantic_Maps הדגמה]).
שירותי מפה זמינים: $1',
	'semanticmaps_lookupcoordinates' => 'חיפוש קואורדינטות',
	'semanticmaps_enteraddresshere' => 'כתבו כתובת כאן',
	'semanticmaps_notfound' => 'לא נמצאה',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'semanticmaps_desc' => 'Skići móžnosć koordinatowe daty, kotrež buchu přez rozšěrjenje Semantic MediaWiki składowane, sej wobhladać a změnić. ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]). K dispoziciji stejace kartowe słužby: $1',
	'semanticmaps_lonely_unit' => 'Před symbolom "$1" žana ličba namakana.',
	'semanticmaps_bad_latlong' => 'Šěrina a dołhosć dyrbitej so jenož jedyn raz podać a z płaćiwymi koordinatami.',
	'semanticmaps_abb_north' => 'S',
	'semanticmaps_abb_east' => 'W',
	'semanticmaps_abb_south' => 'J',
	'semanticmaps_abb_west' => 'Z',
	'semanticmaps_label_latitude' => 'Šěrina:',
	'semanticmaps_label_longitude' => 'Dołhosć:',
	'semanticmaps_lookupcoordinates' => 'Za koordinatami hladać',
	'semanticmaps_enteraddresshere' => 'Zapodaj tu adresu',
	'semanticmaps_notfound' => 'njenamakany',
	'semanticmaps_paramdesc_format' => 'Kartěrowanska słužba, kotraž so wužiwa, zo by kartu wutworiła',
	'semanticmaps_paramdesc_geoservice' => 'Geokodowanska słužba, kotraž so wužiwa, zo by adresy do koordinatow přetworiła',
	'semanticmaps_paramdesc_height' => 'Wysokosć karty, w pikselach (standard je $1)',
	'semanticmaps_paramdesc_width' => 'Šěrokosć karty, w pikselach (standard je $1)',
	'semanticmaps_paramdesc_zoom' => 'Skalowanski schodźenk karty',
	'semanticmaps_paramdesc_centre' => 'Koordinaty srjedźišća karty',
	'semanticmaps_paramdesc_controls' => 'Wužiwarske elementy na karće',
	'semanticmaps_paramdesc_types' => 'Kartowe typy, kotrež za kartu k dispoziciji steja',
	'semanticmaps_paramdesc_type' => 'Standardny kartowy typ za kartu',
	'semanticmaps_paramdesc_overlays' => 'Naworštowanja, kotrež za kartu k dispoziciji steja',
	'semanticmaps_paramdesc_autozoom' => 'Jeli powjetšenje a pomjenšenje z pomocu kolesko myški je móžno abo nic',
	'semanticmaps_paramdesc_layers' => 'Woršty, kotrež za kartu k dispoziciji steja',
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'semanticmaps_desc' => 'Lehetővé teszi a szemantikus MediaWiki kiterjesztés segítségével tárolt koordinátaadatok megtekintését és szerkesztését ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Elérhető térképszolgáltatók: $1',
	'semanticmaps_lookupcoordinates' => 'Koordináták felkeresése',
	'semanticmaps_enteraddresshere' => 'Add meg a címet itt',
	'semanticmaps_notfound' => 'nincs találat',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'semanticmaps_desc' => 'Permitte vider e modificar datos de coordinatas immagazinate per le extension Semantic MediaWiki
([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Servicios de cartas disponibile: $1',
	'semanticmaps_lonely_unit' => 'Nulle numero trovate ante le symbolo "$1".',
	'semanticmaps_bad_latlong' => 'Latitude e longitude debe esser date solo un vice, e con valide coordinatas.',
	'semanticmaps_abb_north' => 'N',
	'semanticmaps_abb_east' => 'E',
	'semanticmaps_abb_south' => 'S',
	'semanticmaps_abb_west' => 'W',
	'semanticmaps_label_latitude' => 'Latitude:',
	'semanticmaps_label_longitude' => 'Longitude:',
	'semanticmaps_lookupcoordinates' => 'Cercar coordinatas',
	'semanticmaps_enteraddresshere' => 'Entra adresse hic',
	'semanticmaps_notfound' => 'non trovate',
	'semanticmaps_paramdesc_format' => 'Le servicio cartographic usate pro generar le carta',
	'semanticmaps_paramdesc_geoservice' => 'Le servicio de geocodification usate pro converter adresses in coordinatas',
	'semanticmaps_paramdesc_height' => 'Le altitude del carta, in pixeles (predefinition es $1)',
	'semanticmaps_paramdesc_width' => 'Le latitude del carta, in pixeles (predefinition es $1)',
	'semanticmaps_paramdesc_zoom' => 'Le nivello de zoom del carta',
	'semanticmaps_paramdesc_centre' => 'Le coordinatas del centro del carta',
	'semanticmaps_paramdesc_controls' => 'Le buttones de adjustamento placiate in le carta',
	'semanticmaps_paramdesc_types' => 'Le typos de carta disponibile in le carta',
	'semanticmaps_paramdesc_type' => 'Le typo de carta predefinite pro le carta',
	'semanticmaps_paramdesc_overlays' => 'Le superpositiones disponibile in le carta',
	'semanticmaps_paramdesc_autozoom' => 'Si o non on pote facer zoom avante o retro con le rota de rolamento del mouse',
	'semanticmaps_paramdesc_layers' => 'Le stratos disponibile in le carta',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 */
$messages['id'] = array(
	'semanticmaps_desc' => 'Memampukan penampilan dan penyuntingan data koordinat yang disimpan melalui pengaya MediaWiki Semantic ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]). 
Layanan peta yang tersedia: $1',
	'semanticmaps_lookupcoordinates' => 'Cari koordinat',
	'semanticmaps_enteraddresshere' => 'Masukkan alamat di sini',
	'semanticmaps_notfound' => 'tidak ditemukan',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'semanticmaps_desc' => "Offre la possibilità di visualizzare e modificare le coordinate memorizzate attraverso l'estensione Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]). Servizi di mappe disponibili: $1",
	'semanticmaps_lookupcoordinates' => 'Cerca coordinate',
	'semanticmaps_enteraddresshere' => 'Inserisci indirizzo qui',
	'semanticmaps_notfound' => 'non trovato',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Mizusumashi
 */
$messages['ja'] = array(
	'semanticmaps_desc' => 'Semantic MediaWiki 拡張機能を通して格納された座標データを表示・編集する機能を提供する ([http://wiki.bn2vs.com/wiki/Semantic_Maps 実演])。次の地図サービスに対応します：$1',
	'semanticmaps_lonely_unit' => '記号「$1」の前に数値がありません。',
	'semanticmaps_bad_latlong' => '緯度と経度は有効な座標値をもって、一回のみ指定されなければなりません。',
	'semanticmaps_abb_north' => '北',
	'semanticmaps_abb_east' => '東',
	'semanticmaps_abb_south' => '南',
	'semanticmaps_abb_west' => '西',
	'semanticmaps_label_latitude' => '緯度:',
	'semanticmaps_label_longitude' => '経度:',
	'semanticmaps_lookupcoordinates' => '座標を調べる',
	'semanticmaps_enteraddresshere' => '住所をここに入力します',
	'semanticmaps_notfound' => '見つかりません',
	'semanticmaps_paramdesc_format' => '地図の生成に利用されている地図サービス',
	'semanticmaps_paramdesc_geoservice' => '住所の座標への変換に利用されているジオコーディングサービス',
	'semanticmaps_paramdesc_height' => '地図の縦幅 (単位はピクセル、既定は$1)',
	'semanticmaps_paramdesc_width' => '地図の横幅 (単位はピクセル、既定は$1)',
	'semanticmaps_paramdesc_zoom' => '地図の拡大度',
	'semanticmaps_paramdesc_centre' => '地図の中心の座標',
	'semanticmaps_paramdesc_controls' => 'この地図上に設置するユーザーコントロール',
	'semanticmaps_paramdesc_types' => 'この地図で利用できる地図タイプ',
	'semanticmaps_paramdesc_type' => 'この地図のデフォルト地図タイプ',
	'semanticmaps_paramdesc_overlays' => 'この地図で利用できるオーバーレイ',
	'semanticmaps_paramdesc_autozoom' => 'マウスのスクロールホイールを使ってズームインやアウトができるようにするかどうか',
	'semanticmaps_paramdesc_layers' => 'この地図で利用できるレイヤー',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Thearith
 */
$messages['km'] = array(
	'semanticmaps_lookupcoordinates' => 'ក្រឡេក​មើល​កូអរដោនេ',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'semanticmaps_desc' => 'Määt et müjjelesch, Koodinaate ze beloore un ze ändere, di per Semantesch Mediawiki faßjehallde woodte. (E [http://wiki.bn2vs.com/wiki/Semantic_Maps Beijshpöll]) Deenste för Kaate ham_mer di heh: $1',
	'semanticmaps_lookupcoordinates' => 'Koordinate nohkike',
	'semanticmaps_enteraddresshere' => 'Donn hee de Address enjäve',
	'semanticmaps_notfound' => 'nit jefonge',
	'semanticmaps_paramdesc_format' => 'Dä Deens för Kaate ußzejävve, woh heh di Kaat vun kütt',
	'semanticmaps_paramdesc_geoservice' => "Dä Deens för Adräße en Ko'odinaate öm_ze_wandelle",
	'semanticmaps_paramdesc_height' => 'De Hühde vun heh dä Kaat en Pixelle — schtandattmääßesch {{PLURAL:$1|$1 Pixel|$1 Pixelle|nix}}',
	'semanticmaps_paramdesc_width' => 'De Breedt vun heh dä Kaat en Pixelle — schtandattmääßesch {{PLURAL:$1|$1 Pixel|$1 Pixelle|nix}}',
	'semanticmaps_paramdesc_zoom' => 'Wi doll dä Zoom fö heh di Kaat es',
	'semanticmaps_paramdesc_centre' => "De Ko'odinaate op de Ääd, vun de Medde vun heh dä Kaat",
	'semanticmaps_paramdesc_controls' => 'De Knöppe för de Bedeenung, di op di Kaat jemohlt wäääde',
	'semanticmaps_paramdesc_types' => 'De Kaate-Zoote di mer för heh di Kaat ußsöhke kann',
	'semanticmaps_paramdesc_type' => 'De Schtandatt Kaate-Zoot för heh di Kaat',
	'semanticmaps_paramdesc_layers' => 'De Nivohs, di för di Kaat ze han sin',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'semanticmaps_lookupcoordinates' => 'Koordinaten nokucken',
	'semanticmaps_enteraddresshere' => 'Adress hei aginn',
	'semanticmaps_notfound' => 'net fonnt',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'semanticmaps_desc' => 'Дава можност за гледање и уредување на податоци со координати складирани преку проширувањето Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps демо]).
Картографски служби на располагање: $1',
	'semanticmaps_lookupcoordinates' => 'Побарај координати',
	'semanticmaps_enteraddresshere' => 'Внесете адреса тука',
	'semanticmaps_notfound' => 'не е најдено ништо',
);

/** Dutch (Nederlands)
 * @author Jeroen De Dauw
 * @author Siebrand
 */
$messages['nl'] = array(
	'semanticmaps_desc' => 'Biedt de mogelijkheid om locatiegegevens die zijn opgeslagen met behulp van de uitbreiding Semantic MediaWiki te bekijken en aan te passen ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Beschikbare kaartdiensten: $1',
	'semanticmaps_lonely_unit' => 'Er is geen getal gevonden voor het symbool "$1".',
	'semanticmaps_bad_latlong' => 'Lengte en breedte hoeven maar een keer opgegeven te worden, en dienen geldige coördinaten te zijn.',
	'semanticmaps_abb_north' => 'N',
	'semanticmaps_abb_east' => 'O',
	'semanticmaps_abb_south' => 'Z',
	'semanticmaps_abb_west' => 'W',
	'semanticmaps_label_latitude' => 'Breedte:',
	'semanticmaps_label_longitude' => 'Lengte:',
	'semanticmaps_lookupcoordinates' => 'Coördinaten opzoeken',
	'semanticmaps_enteraddresshere' => 'Voer hier het adres in',
	'semanticmaps_notfound' => 'niet gevonden',
	'semanticmaps_paramdesc_format' => 'De kaartdienst die de kaart levert',
	'semanticmaps_paramdesc_geoservice' => 'De geocoderingsdienst die adressen in coördinaten converteert',
	'semanticmaps_paramdesc_height' => 'De hoogte van de kaart in pixels (standaard is $1)',
	'semanticmaps_paramdesc_width' => 'De breedte van de kaart in pixels (standaard is $1)',
	'semanticmaps_paramdesc_zoom' => 'Het zoomniveau van de kaart',
	'semanticmaps_paramdesc_centre' => 'De coördinaten van het midden van de kaart',
	'semanticmaps_paramdesc_controls' => 'De op de kaart te plaatsen hulpmiddelen',
	'semanticmaps_paramdesc_types' => 'De voor de kaart beschikbare kaarttypen',
	'semanticmaps_paramdesc_type' => 'Het standaard kaarttype voor de kaart',
	'semanticmaps_paramdesc_overlays' => 'De voor de kaart beschikbare overlays',
	'semanticmaps_paramdesc_autozoom' => 'Of in- en uitzoomen met het scrollwiel van de muis mogelijk is',
	'semanticmaps_paramdesc_layers' => 'De lagen die beschikbaar zijn voor de kaart',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Harald Khan
 */
$messages['nn'] = array(
	'semanticmaps_lookupcoordinates' => 'Sjekk koordinatar',
	'semanticmaps_enteraddresshere' => 'Skriv inn adressa her',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'semanticmaps_lookupcoordinates' => 'Sjekk koordinater',
	'semanticmaps_enteraddresshere' => 'Skriv inn adressen her',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'semanticmaps_desc' => "Permet de veire e modificar las donadas de coordenadas estocadas a travèrs l'extension Semantic MediaWiki. Servicis de mapas disponibles : $1. [http://www.mediawiki.org/wiki/Extension:Semantic_Maps Documentacion]. [http://wiki.bn2vs.com/wiki/Semantic_Maps Demo]",
	'semanticmaps_lookupcoordinates' => 'Estimar las coordenadas',
	'semanticmaps_enteraddresshere' => 'Picatz aicí l’adreça',
	'semanticmaps_notfound' => 'pas trobat',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'semanticmaps_desc' => 'Daje możliwość przeglądania oraz edytowania współrzędnych zapisanych przez rozszerzenie Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Dostępne serwisy mapowe: $1',
	'semanticmaps_lookupcoordinates' => 'Wyszukaj współrzędne',
	'semanticmaps_enteraddresshere' => 'Podaj adres',
	'semanticmaps_notfound' => 'nie odnaleziono',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'semanticmaps_desc' => 'A dà la possibilità ëd visualisé e modìfiché le coordinà memorisà con le estension Semantic mediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Sërvissi ëd mapa disponìbij: $1',
	'semanticmaps_lookupcoordinates' => 'Serca coordinà',
	'semanticmaps_enteraddresshere' => 'Ansëriss adrëssa sì',
	'semanticmaps_notfound' => 'pa trovà',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 * @author Indech
 * @author Malafaya
 */
$messages['pt'] = array(
	'semanticmaps_desc' => 'Permite visualizar e editar dados de coordenadas, armazenados através da extensão Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demonstração]).
Serviços de cartografia disponíveis: $1',
	'semanticmaps_lonely_unit' => 'Não foi encontrado um número antes do símbolo "$1".',
	'semanticmaps_bad_latlong' => 'Latitude e longitude têm de ser fornecidas uma só vez e com coordenadas válidas.',
	'semanticmaps_abb_north' => 'N',
	'semanticmaps_abb_east' => 'E',
	'semanticmaps_abb_south' => 'S',
	'semanticmaps_abb_west' => 'O',
	'semanticmaps_label_latitude' => 'Latitude:',
	'semanticmaps_label_longitude' => 'Longitude:',
	'semanticmaps_lookupcoordinates' => 'Pesquisar coordenadas',
	'semanticmaps_enteraddresshere' => 'Introduza um endereço aqui',
	'semanticmaps_notfound' => 'não encontrado',
	'semanticmaps_paramdesc_format' => 'O serviço de cartografia usado para gerar o mapa',
	'semanticmaps_paramdesc_geoservice' => 'O serviço de geocódigos usado para transformar endereços em coordenadas',
	'semanticmaps_paramdesc_height' => 'A altura do mapa, em pixels (por omissão, $1)',
	'semanticmaps_paramdesc_width' => 'A largura do mapa, em pixels (por omissão, $1)',
	'semanticmaps_paramdesc_zoom' => 'O nível de aproximação do mapa',
	'semanticmaps_paramdesc_centre' => 'As coordenadas do centro do mapa',
	'semanticmaps_paramdesc_controls' => 'Os controles colocados no mapa',
	'semanticmaps_paramdesc_types' => 'Os tipos de mapa disponíveis no mapa',
	'semanticmaps_paramdesc_type' => 'O tipo do mapa, por omissão',
	'semanticmaps_paramdesc_overlays' => 'As sobreposições disponíveis no mapa',
	'semanticmaps_paramdesc_autozoom' => 'Possibilitar, ou não, a aproximação e afastamento usando a roda de deslizamento do rato',
	'semanticmaps_paramdesc_layers' => 'As camadas disponíveis no mapa',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'semanticmaps_desc' => 'Provê a possibilidade de ver e editar dados de coordenadas armazenados através da extensão Semantic MediaWiki. ([http://wiki.bn2vs.com/wiki/Semantic_Maps demonstração]).
Serviços de mapeamento disponíveis: $1',
	'semanticmaps_lookupcoordinates' => 'Pesquisar coordenadas',
	'semanticmaps_enteraddresshere' => 'Introduza um endereço aqui',
	'semanticmaps_notfound' => 'Não encontrado',
);

/** Romanian (Română)
 * @author Firilacroco
 */
$messages['ro'] = array(
	'semanticmaps_notfound' => 'nu a fost găsit',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'semanticmaps_desc' => "Dè l'abbilità a fà vedè e cangià le coordinate reggistrate cu l'estenzione Semandiche de MediaUicchi ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Disponibbile le servizie de mappe: $1",
	'semanticmaps_lookupcoordinates' => 'Ingroce le coordinate',
	'semanticmaps_enteraddresshere' => "Scaffe l'indirizze aqquà",
	'semanticmaps_notfound' => 'no acchiate',
);

/** Russian (Русский)
 * @author Eugene Mednikov
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'semanticmaps_desc' => 'Предоставляет возможность просмотра и редактирования данных о координатах, хранящихся посредством расширения Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps демонстрация]).
Доступные службы карт: $1',
	'semanticmaps_lookupcoordinates' => 'Найти координаты',
	'semanticmaps_enteraddresshere' => 'Введите адрес',
	'semanticmaps_notfound' => 'не найдено',
	'semanticmaps_paramdesc_format' => 'Картографическая служба, используемая для создания карт',
	'semanticmaps_paramdesc_geoservice' => 'Служба геокодирования используется для преобразования адреса в координаты',
	'semanticmaps_paramdesc_height' => 'Высота карты в пикселях (по умолчанию $1)',
	'semanticmaps_paramdesc_width' => 'Ширина карты в пикселях (по умолчанию $1)',
	'semanticmaps_paramdesc_zoom' => 'Масштаб карты',
	'semanticmaps_paramdesc_centre' => 'Координаты центра карты',
	'semanticmaps_paramdesc_controls' => 'Элементы управления на карте',
	'semanticmaps_paramdesc_types' => 'Типы карты, доступные на карте',
	'semanticmaps_paramdesc_type' => 'Тип карты по умолчанию',
	'semanticmaps_paramdesc_overlays' => 'Доступные наложения',
	'semanticmaps_paramdesc_autozoom' => 'Можно ли увеличивать и уменьшать масштаб с помощью колеса прокрутки мыши',
	'semanticmaps_paramdesc_layers' => 'Доступные на карте слои',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'semanticmaps_desc' => 'Poskytuje schopnosť zobrazovať a upravovať údaje súradníc uložené prostredníctvom rozšírenia Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps demo]).
Dostupné mapové služby: $1',
	'semanticmaps_lookupcoordinates' => 'Vyhľadať súradnice',
	'semanticmaps_enteraddresshere' => 'Sem zadajte emailovú adresu',
	'semanticmaps_notfound' => 'nenájdené',
);

/** Serbian Cyrillic ekavian (Српски (ћирилица))
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'semanticmaps_enteraddresshere' => 'Унеси адресу овде',
	'semanticmaps_notfound' => 'није нађено',
);

/** Serbian Latin ekavian (Srpski (latinica))
 * @author Michaello
 */
$messages['sr-el'] = array(
	'semanticmaps_enteraddresshere' => 'Unesi adresu ovde',
	'semanticmaps_notfound' => 'nije nađeno',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author Najami
 */
$messages['sv'] = array(
	'semanticmaps_lookupcoordinates' => 'Kolla upp koordinater',
	'semanticmaps_enteraddresshere' => 'Skriv in adress här',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'semanticmaps_notfound' => 'కనబడలేదు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'semanticmaps_lookupcoordinates' => "Hanapin ang mga tugmaang-pampook (''coordinate'')",
	'semanticmaps_enteraddresshere' => 'Ipasok ang adres dito',
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'semanticmaps_notfound' => 'ei voi löuta',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'semanticmaps_desc' => 'Cung cấp khả năng xem và sửa đổi dữ liệu tọa độ được lưu bởi phần mở rộng Semantic MediaWiki ([http://wiki.bn2vs.com/wiki/Semantic_Maps thử xem]).
Các dịch vụ bản đồ có sẵn: $1',
	'semanticmaps_lookupcoordinates' => 'Tra tọa độ',
	'semanticmaps_enteraddresshere' => 'Nhập địa chỉ vào đây',
	'semanticmaps_notfound' => 'không tìm thấy',
);

/** Volapük (Volapük)
 * @author Smeira
 */
$messages['vo'] = array(
	'semanticmaps_lookupcoordinates' => 'Tuvön koordinatis',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Gzdavidwong
 */
$messages['zh-hans'] = array(
	'semanticmaps_lookupcoordinates' => '查找坐标',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'semanticmaps_lookupcoordinates' => '尋找座標',
);

