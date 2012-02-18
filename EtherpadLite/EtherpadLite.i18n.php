<?php
/**
 * Internationalisation file for extension EtherpadLite
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Thomas Gries
 */
$messages['en'] = array(
	'etherpadlite-desc' => 'Adds &lt;eplite&gt; parser tag to embed one or many Etherpad Lite pads (which are hosted on local or external Etherpad Lite server/s) on pages',
	'etherpadlite-invalid-pad-url' => '"$1" is not a valid Etherpad Lite URL or pad name.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" is not in the whitelist of allowed Etherpad Lite servers. {{PLURAL:$3|$2 is the only allowed server|The allowed servers are as follows: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" is not in the whitelist of allowed Etherpad Lite servers. There are no allowed servers in the whitelist.',
	'etherpadlite-pad-used-more-than-once' => 'The pad "$1" has already been used before on this page; you can have many pads on a page, but only if they are different pads.', 
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'etherpadlite-invalid-pad-url' => "Error if the url did not meet validation (for example, if it didn't start with an allowed protocol). $1 is the invalid url",
	'etherpadlite-url-is-not-whitelisted' => "Error if url isn't in list of allowed urls. $1 is name of url specified by user, $2 is a comma separated list of allowed urls, $3 is the number of urls in the allowed list",
	'etherpadlite-pad-used-more-than-once' => 'Error if users try to show multiple frames of the very same pad, identified by the full pad url $1 (server/padid). Each pad must be unique on a wiki page.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'etherpadlite-desc' => 'Дадае падтрымку парсэрам тэгу &lt;eplite&gt;, з дапамогай якога можна дадаваць на старонку адзін ці некалькі сшыткаў Etherpad Lite, якія разьмяшчаюцца на лякальным або вонкавым сэрвэры (сэрвэрах) Etherpad Lite.',
	'etherpadlite-invalid-pad-url' => '«$1» не зьяўляецца слушным URL або назовам сшытку Etherpad Lite.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Tiin
 */
$messages['de'] = array(
	'etherpadlite-desc' => 'Ergänzt das Tag &lt;eplite&gt; zum Einbetten eines oder mehrerer, entweder lokal oder extern auf EtherPad-Lite-Servern gehosteter, EtherPad-Lite-Editierflächen in eine Seite',
	'etherpadlite-invalid-pad-url' => '„$1“ ist keine gültige EtherPad-Lite-URL oder ein Editierfeldname.',
	'etherpadlite-url-is-not-whitelisted' => '„$1“ befindet sich nicht in der Liste zulässiger EtherPad-Lite-Server. {{PLURAL:$3|$2 ist der einzige mögliche Server|Die folgenden Server sind möglich: $2}}.',
	'etherpadlite-empty-whitelist' => '„$1“ befindet sich nicht in der Liste zulässiger EtherPad-Lite-Server. Es gibt keine zulässigen Server in der Liste.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'etherpadlite-desc' => 'Pśidawa parserowu toflicku &lt;eplite&gt;, za zasajźenje jadneje pisańskeje płoniny abo někotarych płoninow Etherpad Lite (kótarež su na lokalnych abo eksternych serwerach Etherpad Lite zaměstnjone) na bokach',
	'etherpadlite-invalid-pad-url' => '"$1" njejo płaśiwy URL Etherpad Lite abo płaśiwe mě pisańskeje płoniny.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" njejo w lisćinje dowólonych serwerow Etherpad Lite. {{PLURAL:$3|$2 jo jadnucki dowólony serwer|Slědujucej serwera stej móžno: $2|Slědujuce serwery su móžno: $2|Slědujuce serwery su móžno: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" njejo w lisćinje dowólonych serwerow Etherpad Lite. W lisćinje dowólone serwery njejsu.',
);

/** French (Français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'etherpadlite-desc' => "Ajoute la balise de l'analyseur &lt;eplite&gt; pour incorporer un ou plusieurs blocs d'Etherpad Lite (qui sont hébergés sur des serveurs Etherpad Lite locaux ou externes) dans les pages",
	'etherpadlite-invalid-pad-url' => '"$1" n\'est pas une URL ou un nom de bloc Etherpad Lite valide.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" ne fait pas partie de la liste des serveurs Etherpad Lite autorisés. {{PLURAL:$3|$2 est le seul serveur autorisé|Les serveurs autorisés sont les suivants: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" n\'est pas dans la liste des serveurs d\'application Lite autorisés. Il n\'y a pas de serveur dans la liste autorisée.',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'etherpadlite-desc' => 'Engade a etiqueta analítica &lt;eplite&gt; para incorporar un ou moitos documentos de Etherpad Lite (aloxados nun ou en varios servidores de Etherpad Lite) nas páxinas',
	'etherpadlite-invalid-pad-url' => '"$1" non é un nome de documento ou enderezo URL de Etherpad Lite válido.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" non se atopa na lista branca dos servidores de Etherpad Lite permitidos. {{PLURAL:$3|$2 é o único servidor permitido|Os servidores permitidos son os seguintes: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" non se atopa na lista branca dos servidores de Etherpad Lite permitidos. Non hai servidores permitidos na lista branca.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'etherpadlite-desc' => 'Přidawa parserowu tafličku &lt;eplite&gt;, za zasadźenje jedneje pisanskeje płoniny abo wjacorych płoninow Etherpad Lite (kotrež su na lokalnych abo eksternych serwerach Etherpad Lite zaměstnjene) na stronach',
	'etherpadlite-invalid-pad-url' => '"$1" płaćiwy URL Etherpad Lite abo płaćiwe mjeno pisanskeje płoniny njeje.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" njeje w lisćinje dowolenych serwerow Etherpad Lite. {{PLURAL:$3|$2 je jenički dowoleny serwer|Slědowacej serweraj stej móžno: $2|Slědowace serwery su móžno: $2|Slědowace serwery su móžno: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" njeje w lisćinje dowolenych serwerow Etherpad Lite. W lisćinje dowolene serwery njejsu.',
	'etherpadlite-pad-used-more-than-once' => 'Pisanska płonina "$1" je so hižo do toho na tutej stronje wužiła; móžeš wjele pisanskich płoninow na stronje měć, ale jenož, jeli su rozdźělne płoniny-',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'etherpadlite-desc' => 'Adde un etiquetta &lt;eplite&gt; al analysator syntactic que incorpora un o plure documentos collaborative de Etherpad Lite (le quales es albergate in servitor(es) externe de Etherpad Lite) in paginas',
	'etherpadlite-invalid-pad-url' => '"$1" non es un URL de Etherpad Lite o nomine de documento valide.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" non es in le lista de servitores Etherpad Lite autorisate. {{PLURAL:$3|Solmente le servitor $2 es autorisate|Le servitores autorisate es: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" non es in le lista de servitores Etherpad Lite autorisate. Nulle servitor es autorisate.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'etherpadlite-desc' => 'Ја додава парсерската ознака &lt;eplite&gt; за вметнување на една или повеќе плочки Etherpad Lite (кои се вдомени на локални или надворешни опслужувачи на Etherpad Lite) во страниците',
	'etherpadlite-invalid-pad-url' => '„$1“ не е важечко име на плочка или URL на Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => '„$1“ не е на белиот список на дозволени опслужувачи за Etherpad Lite. {{PLURAL:$3|Единствениот дозволен е $2|Дозволени се следниве: $2}}.',
	'etherpadlite-empty-whitelist' => '„$1“ не е на белиот список на дозволени опслужувачи за Etherpad Lite. На списокот нема ниеден дозволен осплужувач.',
);

