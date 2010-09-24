<?php
/**
 * ***** BEGIN LICENSE BLOCK *****
 * This file is part of CategoryBrowser.
 *
 * CategoryBrowser is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * CategoryBrowser is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CategoryBrowser; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * ***** END LICENSE BLOCK *****
 *
 * CategoryBrowser is an AJAX-enabled category filter and browser for MediaWiki.
 *
 * To activate this extension :
 * * Create a new directory named CategoryBrowser into the directory "extensions" of MediaWiki.
 * * Place the files from the extension archive there.
 * * Add this line at the end of your LocalSettings.php file :
 * require_once "$IP/extensions/CategoryBrowser/CategoryBrowser.php";
 *
 * @version 0.3.1
 * @link http://www.mediawiki.org/wiki/Extension:CategoryBrowser
 * @author Dmitriy Sintsov <questpc@rambler.ru>
 * @addtogroup Extensions
 */

/**
 * Messages list.
 */

$messages = array();

/** English (English)
 * @author QuestPC
 */
$messages['en'] = array(
	'categorybrowser' => 'Category browser',
	'categorybrowser-desc' => 'Provides a [[Special:CategoryBrowser|special page]] to filter out most populated categories and to navigate them using an AJAX interface',
	'cb_requires_javascript' => 'The category browser extension requires JavaScript to be enabled in the browser.',
	'cb_ie6_warning' => 'The condition editor does not work in Internet Explorer 6.0 or earlier versions.
However, browsing of pre-defined conditions should work normally.
Please change or upgrade your browser, if possible.',
	'cb_show_no_parents_only' => 'Show only categories which have no parents',
	'cb_cat_name_filter' => 'Search for category by name:',
	'cb_cat_name_filter_clear' => 'Press to clear category name filter',
	'cb_cat_name_filter_ci' => 'Case insensitive',
	'cb_copy_line_hint' => 'Use the [+] and [>+] buttons to copy and paste operators into the selected expression',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategory|subcategories}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|page|pages}}',
	'cb_has_files' => '$1 {{PLURAL:$1|file|files}}',
	'cb_has_parentcategories' => 'parent categories (if any)',
	'cb_previous_items_link' => 'Previous',
	'cb_previous_items_stats' => ' ($1 - $2)', # only translate this message to other languages if you have to change it
	'cb_previous_items_line' => '$1 $2', # do not translate or duplicate this message to other languages
	'cb_next_items_link' => 'Next',
	'cb_next_items_stats' => ' (from $1)',
	'cb_next_items_line' => '$1 $2', # do not translate or duplicate this message to other languages
	'cb_cat_subcats' => 'subcategories',
	'cb_cat_pages' => 'pages',
	'cb_cat_files' => 'files',
	'cb_apply_button' => 'Apply',
	'cb_op1_template' => '$1[$2]', # do not translate or duplicate this message to other languages
	'cb_op2_template' => '$1 $2 $3', # do not translate or duplicate this message to other languages
	'cb_all_op' => 'All',
	'cb_lbracket_op' => '(', # do not translate or duplicate this message to other languages
	'cb_rbracket_op' => ')', # do not translate or duplicate this message to other languages
	'cb_or_op' => 'or',
	'cb_and_op' => 'and',
	'cb_ge_op' => '>=', # do not translate or duplicate this message to other languages
	'cb_le_op' => '<=', # do not translate or duplicate this message to other languages
	'cb_eq_op' => '=', # do not translate or duplicate this message to other languages
	'cb_edit_left_hint' => 'Move left, if possible',
	'cb_edit_right_hint' => 'Move right, if possible',
	'cb_edit_remove_hint' => 'Delete, if possible',
	'cb_edit_copy_hint' => 'Copy operator to clipboard',
	'cb_edit_append_hint' => 'Insert operator to last position',
	'cb_edit_clear_hint' => 'Clear current expression (select all)',
	'cb_edit_paste_hint' => 'Paste operator into current position, if possible',
	'cb_edit_paste_right_hint' => 'Paste operator into next position, if possible',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author QuestPC
 */
$messages['qqq'] = array(
	'cb_cat_name_filter_ci' => 'Dialog string for case insensitive category name search.',
	'cb_has_pages' => '{{Identical|Page}}',
	'cb_has_files' => '{{Identical|File}}',
	'cb_previous_items_link' => '{{Identical|Previous}}',
	'cb_next_items_link' => '{{Identical|Next}}',
	'cb_cat_pages' => '{{Identical|Pages}}',
	'cb_cat_files' => '{{Identical|File}}',
	'cb_all_op' => 'Operator to select all categories available.
{{Identical|All}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'categorybrowser' => 'Kategorie-blaaier',
	'cb_cat_name_filter' => 'Soek vir kategorie met die naam:',
	'cb_cat_name_filter_ci' => 'Kas onsensitief',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subkategorie|subkategorieë}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|bladsy|bladsye}}',
	'cb_has_files' => '$1 {{PLURAL:$1|lêer|lêers}}',
	'cb_has_parentcategories' => 'boonste kategorieë (indien enige)',
	'cb_previous_items_link' => 'Vorige',
	'cb_next_items_link' => 'Volgende',
	'cb_next_items_stats' => '(vanaf $1)',
	'cb_cat_subcats' => 'subkategorië',
	'cb_cat_pages' => 'bladsye',
	'cb_cat_files' => 'lêers',
	'cb_apply_button' => 'Pas toe',
	'cb_all_op' => 'Alle',
	'cb_edit_left_hint' => 'Skuif na links, indien moontlik',
	'cb_edit_right_hint' => 'Skuif na regs, indien moontlik',
	'cb_edit_remove_hint' => 'Verwyder, indien moontlik',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'categorybrowser' => 'Прагляд катэгорыяў',
	'categorybrowser-desc' => 'Дадае [[Special:CategoryBrowser|спэцыяльную старонку]] для выбару найбольш поўных катэгорыяў для іх навігацыі з выкарыстаньнем AJAX-інтэрвэйсу',
	'cb_requires_javascript' => 'Пашырэньне для прагляду катэгорыяў патрабуе ўключэньне JavaScript у браўзэры.',
	'cb_ie6_warning' => 'Рэдактар станаў не працуе ў Internet Explorer 6.0 ці больш раньніх вэрсіях.
Тым ня менш, прагляд ужо вызначаных станаў павінен працаваць нармальна.
Калі ласка, зьмяніце ці абнавіце Ваш браўзэр, калі гэта магчыма.',
	'cb_show_no_parents_only' => 'Паказваць толькі катэгорыі без бацькоўскіх',
	'cb_cat_name_filter' => 'Пошук катэгорыяў па назьве:',
	'cb_cat_name_filter_clear' => 'Націсьніце для ачысткі фільтру назваў катэгорыяў',
	'cb_cat_name_filter_ci' => 'Без уліку рэгістру',
	'cb_copy_line_hint' => 'Выкарыстоўвайце кнопкі [+] і [>+] для капіяваньня і ўстаўкі апэратара ў выбраны выраз',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|падкатэгорыя|падкатэгорыі|падкатэгорыяў}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|старонка|старонкі|старонак}}',
	'cb_has_files' => '$1 {{PLURAL:$1|файл|файлы|файлаў}}',
	'cb_has_parentcategories' => 'бацькоўскія катэгорыі (калі ёсьць)',
	'cb_previous_items_link' => 'Папярэднія',
	'cb_next_items_link' => 'Наступныя',
	'cb_next_items_stats' => '(ад $1)',
	'cb_cat_subcats' => 'падкатэгорыі',
	'cb_cat_pages' => 'старонкі',
	'cb_cat_files' => 'файлы',
	'cb_apply_button' => 'Ужыць',
	'cb_all_op' => 'Усе',
	'cb_or_op' => 'ці',
	'cb_and_op' => 'і',
	'cb_edit_left_hint' => 'Перанесьці ўлева, калі магчыма',
	'cb_edit_right_hint' => 'Перанесьці ўправа, калі магчыма',
	'cb_edit_remove_hint' => 'Выдаліць, калі магчыма',
	'cb_edit_copy_hint' => 'Скапіяваць апэратар у буфэр абмену',
	'cb_edit_append_hint' => 'Уставіць апэратар у апошнюю пазыцыю',
	'cb_edit_clear_hint' => 'Ачысьціць цяперашні выраз (выбраць усё)',
	'cb_edit_paste_hint' => 'Уставіць апэратар у цяперашнюю пазыцыю, калі магчыма',
	'cb_edit_paste_right_hint' => 'Уставіць апэратар у наступную пазыцыю, калі магчыма',
);

/** Breton (Brezhoneg)
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'categorybrowser' => 'Merdeer rummadoù',
	'categorybrowser-desc' => 'A ro ur [[Special:CategoryBrowser|bajenn ispisial]] evit silañ ar brasañ eus ar rummadoù ha gellet merdeiñ enno en ur implijout an etrefas AJAX',
	'cb_requires_javascript' => "Merdeer ar rummadoù a c'houlenn ma vefe aotreet JavaScript gant ar merdeer web.",
	'cb_ie6_warning' => "Ne za ket en-dro an embanner amplegadek en Internet Explorer 6.0 pe gant stummoù koshañ.
Koulskoude, merdeadur an amplegadek raktermenet a rankfe mont-en-dro d'un doare normal.
Mar plij, cheñchit pe hizivit ho merdeer.",
	'cb_show_no_parents_only' => 'Diskouez ar rummadoù emzivad',
	'cb_cat_name_filter' => "O klask war-lec'h rummadoù hervez o anv :",
	'cb_cat_name_filter_clear' => 'Pouezit evit dizober sil anv ar rummad',
	'cb_copy_line_hint' => 'Implijit ar boutonoù [+] ha [>+] evit eilañ ha pegañ an oberataerioù er jedad dibabet',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|isrummad|isrummad}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|pajenn|pajenn}}',
	'cb_has_files' => '$1 {{PLURAL:$1|restr|restr}}',
	'cb_has_parentcategories' => 'Usrummadoù (ma vez reoù)',
	'cb_previous_items_link' => 'Kent',
	'cb_next_items_link' => "War-lerc'h",
	'cb_next_items_stats' => '(eus $1)',
	'cb_cat_subcats' => 'isrummadoù',
	'cb_cat_pages' => 'pajennoù',
	'cb_cat_files' => 'restroù',
	'cb_apply_button' => 'Arloañ',
	'cb_all_op' => 'An holl',
	'cb_or_op' => 'pe',
	'cb_and_op' => 'ha',
	'cb_edit_left_hint' => "Dilec'hiañ a-gleiz, mard eo posubl",
	'cb_edit_right_hint' => "Dilec'hiañ a-zehoù, mard eo posubl",
	'cb_edit_remove_hint' => 'Lemel, mard eo posubl',
	'cb_edit_copy_hint' => 'Eilañ an oberataer er golver',
	'cb_edit_append_hint' => "Ensoc'hañ an oberataer er plas diwezhañ",
	'cb_edit_clear_hint' => 'Dizober ar jedad-mañ (dibab pep tra)',
	'cb_edit_paste_hint' => 'Pegañ an oberataer amañ, mard eo posubl',
	'cb_edit_paste_right_hint' => "Pegañ an oberataer d'al lec'hiadur war-lec'h, mard eo posubl",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'categorybrowser' => 'Preglednik kategorija',
	'categorybrowser-desc' => 'Omogućuje [[Special:CategoryBrowser|posebnu stranicu]] za filtriranje najviše napunjenih kategorija te navigacija u njima putem AJAX interfejsa',
	'cb_requires_javascript' => 'Proširenje za preglednik kategorija zahtjeva da JavaScript bude omogućen u pregledniku.',
	'cb_show_no_parents_only' => 'Prikaži samo kategorije koje nemaju nadkategoriju',
	'cb_cat_name_filter' => 'Pretraga kategorija po nazivu:',
	'cb_cat_name_filter_clear' => 'Pritisnite za čišćenje filtera naziva kategorije',
	'cb_cat_name_filter_ci' => 'Ne razlikuje velika slova',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|podkategorija|podkategorije|podkategorija}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|stranica|stranice|stranica}}',
	'cb_has_files' => '$1 {{PLURAL:$1|datoteka|datoteke|datoteka}}',
	'cb_has_parentcategories' => 'nadkategorije (ako ih ima)',
	'cb_previous_items_link' => 'Prethodno',
	'cb_next_items_link' => 'Slijedeći',
	'cb_next_items_stats' => '(od $1)',
	'cb_cat_subcats' => 'potkategorije',
	'cb_cat_pages' => 'stranice',
	'cb_cat_files' => 'datoteke',
	'cb_apply_button' => 'Primijeni',
	'cb_all_op' => 'Sve',
	'cb_or_op' => 'ili',
	'cb_and_op' => 'i',
	'cb_edit_left_hint' => 'Premjesti lijevo, ako je moguće',
	'cb_edit_right_hint' => 'Premjesti desno, ako je moguće',
	'cb_edit_remove_hint' => 'Obriši, ako je moguće',
	'cb_edit_append_hint' => 'Ubaci operator na posljednju poziciju',
);

/** German (Deutsch)
 * @author Kghbln
 * @author The Evil IP address
 */
$messages['de'] = array(
	'categorybrowser' => 'Kategorienbrowser',
	'categorybrowser-desc' => 'Ergänzt eine [[Special:CategoryBrowser|Spezialseite]] mit der die umfangreichsten Kategorien ausgewählt und in ihnen über ein Ajax-Interface navigiert werden kann',
	'cb_requires_javascript' => 'Um den Kategorienbrowser nutzen zu können, muss JavaScript im Browser aktiviert sein.',
	'cb_ie6_warning' => 'Der Editor für Bedingungen funktioniert nicht beim Internet Explorer 6.0 oder einer früheren Version.
Allerdings sollte das Browsen mit vordefinierten Bedingungen normalerweise funktionieren.
Dennoch sollte, sofern irgend möglich, der Browser aktualisiert oder gewechselt werden.',
	'cb_show_no_parents_only' => 'Nur Kategorien ohne übergeordnete Kategorie anzeigen',
	'cb_cat_name_filter' => 'Suche einer Kategorie anhand deren Namen:',
	'cb_cat_name_filter_clear' => 'Zum Zurücksetzen des Filters nach Kategoriename anklicken',
	'cb_cat_name_filter_ci' => 'Schreibungsunabhängig',
	'cb_copy_line_hint' => 'Zum Kopieren und Einfügen von Operatoren in die ausgewählten Ausdrücke, die Schaltflächen [+] und [>+] verwenden',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|Unterkategorie|Unterkategorien}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|Seite|Seiten}}',
	'cb_has_files' => '$1 {{PLURAL:$1|Datei|Dateien}}',
	'cb_has_parentcategories' => 'übergeordneten Kategorien (falls vorhanden)',
	'cb_previous_items_link' => 'Vorherige',
	'cb_next_items_link' => 'Nächste',
	'cb_next_items_stats' => ' (ab $1)',
	'cb_cat_subcats' => 'Unterkategorien',
	'cb_cat_pages' => 'Seiten',
	'cb_cat_files' => 'Dateien',
	'cb_apply_button' => 'Anwenden',
	'cb_all_op' => 'Alle',
	'cb_or_op' => 'oder',
	'cb_and_op' => 'und',
	'cb_edit_left_hint' => 'Nach links bewegen (sofern möglich)',
	'cb_edit_right_hint' => 'Nach rechts bewegen (sofern möglich)',
	'cb_edit_remove_hint' => 'Löschen (sofern möglich)',
	'cb_edit_copy_hint' => 'Operator in die Zwischenablage kopieren',
	'cb_edit_append_hint' => 'Operator an letzter Position einfügen',
	'cb_edit_clear_hint' => 'Aktuelle Ausdrücke entfernen (alle auswählen)',
	'cb_edit_paste_hint' => 'Operator an aktueller Position einfügen (sofern möglich)',
	'cb_edit_paste_right_hint' => 'Operator an nächstmöglicher Position einfügen (sofern möglich)',
);

/** Spanish (Español)
 * @author Danke7
 */
$messages['es'] = array(
	'cb_previous_items_link' => 'Anterior',
	'cb_next_items_link' => 'Siguiente',
	'cb_next_items_stats' => '(de $1)',
	'cb_cat_subcats' => 'subcategorías',
	'cb_cat_pages' => 'páginas',
	'cb_cat_files' => 'archivos',
	'cb_apply_button' => 'Aplicar',
	'cb_all_op' => 'Todos',
	'cb_edit_left_hint' => 'Mover a la izquierda, si es posible',
	'cb_edit_right_hint' => 'Mover a la derecha, si es posible',
	'cb_edit_remove_hint' => 'Borrar, si es posible',
);

/** French (Français)
 * @author Grondin
 * @author Sherbrooke
 * @author The Evil IP address
 */
$messages['fr'] = array(
	'categorybrowser' => 'Navigateur de catégories',
	'categorybrowser-desc' => 'Offre une [[Special:CategoryBrowser|page spéciale]] pour filtrer la plupart des catégories et y naviguer en utilisant une interface Ajax',
	'cb_requires_javascript' => 'Le navigateur de catégories exige que JavaScript soit autorisé par le navigateur web.',
	'cb_ie6_warning' => "L'éditeur conditionnel ne fonctionne pas dans Internet Explorer 6.0 ou versions antérieures. Toutefois, la navigation des conditions pré-défini devrait fonctionner normalement. S'il vous plaît, changer ou mettre à jour votre navigateur.",
	'cb_show_no_parents_only' => 'Afficher uniquement les catégories sans catégorie-mère',
	'cb_cat_name_filter' => 'Recherche de catégories par le nom :',
	'cb_cat_name_filter_clear' => 'Appuyer pour effacer le filtre de nom de catégorie',
	'cb_cat_name_filter_ci' => 'Casse insensible',
	'cb_copy_line_hint' => "Utilisez les boutons [+] et [>+] pour copier et coller les opérateurs dans l'expression choisie",
	'cb_has_subcategories' => '$1 {{PLURAL:$1|sous-catégorie|sous-catégories}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|page|pages}}',
	'cb_has_files' => '$1 {{PLURAL:$1|fichier|fichiers}}',
	'cb_has_parentcategories' => 'Catégorie mère (si elle existe)',
	'cb_previous_items_link' => 'Précédent',
	'cb_next_items_link' => 'Suivant',
	'cb_next_items_stats' => '(à partir de $1)',
	'cb_cat_subcats' => 'sous-catégories',
	'cb_cat_pages' => 'pages',
	'cb_cat_files' => 'fichiers',
	'cb_apply_button' => 'Appliquer',
	'cb_all_op' => 'Toutes',
	'cb_or_op' => 'ou',
	'cb_and_op' => 'et',
	'cb_edit_left_hint' => 'Déplacer à gauche, si possible',
	'cb_edit_right_hint' => 'Déplacer à droite, si possible',
	'cb_edit_remove_hint' => 'Supprimer, si possible',
	'cb_edit_copy_hint' => "Copier l'opérateur vers le presse-papier",
	'cb_edit_append_hint' => "Insérer l'opérateur en dernière position",
	'cb_edit_clear_hint' => 'Effacer la présente expression (tout sélectionner)',
	'cb_edit_paste_hint' => "Coller, si possible, l'opérateur à cet endroit",
	'cb_edit_paste_right_hint' => "Coller, si possible, l'opérateur à la position suivante",
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'categorybrowser' => 'Navegador de categorías',
	'categorybrowser-desc' => 'Proporciona unha [[Special:CategoryBrowser|páxina especial]] para filtrar as categorías máis populares e navegar por elas a través dunha interface AJAX',
	'cb_requires_javascript' => 'A extensión do navegador de categorías necesita que o navegador teña o JavaScript activado.',
	'cb_ie6_warning' => 'O editor de condicións non funciona no Internet Explorer 6.0 ou calquera versión anterior.
Porén, a navegación polas condicións predefinidas debería funcionar correctamente.
Cambie ou actualice o seu navegador, se fose posible.',
	'cb_show_no_parents_only' => 'Mostrar unicamente as categorías que non colgan de ningunha outra',
	'cb_cat_name_filter' => 'Procurar por nome de categoría:',
	'cb_cat_name_filter_clear' => 'Prema para limpar o filtro de nome de categoría',
	'cb_cat_name_filter_ci' => 'Sen distinción entre maiúsculas e minúsculas',
	'cb_copy_line_hint' => 'Empregue os botóns [+] e [>+] para copiar e pegar os operadores na expresión seleccionada',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategoría|subcategorías}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|páxina|páxinas}}',
	'cb_has_files' => '$1 {{PLURAL:$1|ficheiro|ficheiros}}',
	'cb_has_parentcategories' => 'categorías das que colga (se houbese algunha)',
	'cb_previous_items_link' => 'Anterior',
	'cb_next_items_link' => 'Seguinte',
	'cb_next_items_stats' => ' (de $1)',
	'cb_cat_subcats' => 'subcategorías',
	'cb_cat_pages' => 'páxinas',
	'cb_cat_files' => 'ficheiros',
	'cb_apply_button' => 'Aplicar',
	'cb_all_op' => 'Todas',
	'cb_or_op' => 'ou',
	'cb_and_op' => 'e',
	'cb_edit_left_hint' => 'Mover á esquerda, se fose posible',
	'cb_edit_right_hint' => 'Mover á dereita, se fose posible',
	'cb_edit_remove_hint' => 'Borrar, se fose posible',
	'cb_edit_copy_hint' => 'Copiar o operador na memoria',
	'cb_edit_append_hint' => 'Inserir o operador na última posición',
	'cb_edit_clear_hint' => 'Limpar a expresión actual (selecciona todas)',
	'cb_edit_paste_hint' => 'Pegar o operador na posición actual, se fose posible',
	'cb_edit_paste_right_hint' => 'Pegar o operador na seguinte posición, se fose posible',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'categorybrowser' => 'Kategoriebrowser',
	'categorybrowser-desc' => 'Ergänzt e [[Special:CategoryBrowser|Spezialsyte]], wu di umfangryychschte Kategorie chenne uusgwehlt wäre un zum Navigiere in emne iber e Aax-Interface',
	'cb_requires_javascript' => 'Go dr Kategoriebrowser nutze mueß JavaScript im Browser aktiviert syy.',
	'cb_ie6_warning' => 'Dr Editor fir Bedingige funktioniert nit bim Internet Explorer 6.0 oder ere friejere Version.
S Browse mit vordefinierte Bedingige sott aber normalerwyys funktioniere.
Wänn megli, tue Dyy Browser aktualisiere oder wächsle.',
	'cb_show_no_parents_only' => 'Nume Kategorie ohni ibergordneti Kategori aazeige',
	'cb_cat_name_filter' => 'E Kategori noch em Name sueche:',
	'cb_cat_name_filter_clear' => 'Zum Zrucksetze vum Filter no Kategoriname do klicke',
	'cb_cat_name_filter_ci' => 'Uuabhängig vu dr Groß-/Chleischryybig',
	'cb_copy_line_hint' => 'Zum Kopiere un Yyfiege vu Operatore in di uusgwehlte Uusdruck, d Schaltfleche [+] un [>+] bruche',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|Unterkategori|Unterkategorie}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|Syte|Syte}}',
	'cb_has_files' => '$1 {{PLURAL:$1|Datei|Dateie}}',
	'cb_has_parentcategories' => 'ibergordnete Kategorie (wänn s het)',
	'cb_previous_items_link' => 'Vorigi',
	'cb_next_items_link' => 'Negschti',
	'cb_next_items_stats' => ' (ab $1)',
	'cb_cat_subcats' => 'Unterkategorie',
	'cb_cat_pages' => 'Syte',
	'cb_cat_files' => 'Dateie',
	'cb_apply_button' => 'Aawände',
	'cb_all_op' => 'Alli',
	'cb_or_op' => 'oder',
	'cb_and_op' => 'un',
	'cb_edit_left_hint' => 'No links bewege (wänn megli)',
	'cb_edit_right_hint' => 'No rächts bewege (wänn megli)',
	'cb_edit_remove_hint' => 'Lesche (wänn megli)',
	'cb_edit_copy_hint' => 'Operator in d Zwischenablag kopiere',
	'cb_edit_append_hint' => 'Operator an dr letschte Position yyfiege',
	'cb_edit_clear_hint' => 'Aktuälli Uusdruck uuseneh (alli uuswehle)',
	'cb_edit_paste_hint' => 'Operator an dr aktuälle Position yyfiege (wänn megli)',
	'cb_edit_paste_right_hint' => 'Operator an dr negschte Position yyfiege (wänn megli)',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'categorybrowser' => 'Navigator de categorias',
	'categorybrowser-desc' => 'Provide un [[Special:CategoryBrowser|pagina special]] pro filtrar le categorias le plus popular e pro navigar per illos usante un interfacie AJAX',
	'cb_requires_javascript' => 'Le extension de navigator de categorias require JavaScript pro esser activate in le navigator del web.',
	'cb_ie6_warning' => 'Le editor de conditiones non functiona in Internet Explorer 6.0 o versiones anterior.
Nonobstante, le navigation de categorias predefinite debe functionar normalmente.
Per favor cambia o actualisa le navigator del web, si possibile.',
	'cb_show_no_parents_only' => 'Monstrar solmente categorias sin categoria superior',
	'cb_cat_name_filter' => 'Cerca un categoria per nomine:',
	'cb_cat_name_filter_clear' => 'Preme pro rader le filtro de nomine de categoria',
	'cb_cat_name_filter_ci' => 'Non distingue inter majusculas e minusculas',
	'cb_copy_line_hint' => 'Usa le buttones [+] and [>+] pro copiar e collar operatores in le expression seligite',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategoria|subcategorias}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|pagina|paginas}}',
	'cb_has_files' => '$1 {{PLURAL:$1|file|files}}',
	'cb_has_parentcategories' => 'categorias superior (si existe)',
	'cb_previous_items_link' => 'Precedente',
	'cb_next_items_link' => 'Sequente',
	'cb_next_items_stats' => ' (ab $1)',
	'cb_cat_subcats' => 'subcategorias',
	'cb_cat_pages' => 'paginas',
	'cb_cat_files' => 'files',
	'cb_apply_button' => 'Applicar',
	'cb_all_op' => 'Totes',
	'cb_or_op' => 'o',
	'cb_and_op' => 'e',
	'cb_edit_left_hint' => 'Displaciar a sinistra, si possibile',
	'cb_edit_right_hint' => 'Displaciar a dextra, si possibile',
	'cb_edit_remove_hint' => 'Deler, si possibile',
	'cb_edit_copy_hint' => 'Copiar le operator al area de transferentia',
	'cb_edit_append_hint' => 'Inserer le operator al ultime position',
	'cb_edit_clear_hint' => 'Rader le actual expression (seliger toto)',
	'cb_edit_paste_hint' => 'Collar le operator in le actual position, si possibile',
	'cb_edit_paste_right_hint' => 'Collar le operator in le sequente position, si possibile',
);

/** Japanese (日本語)
 * @author Tommy6
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'categorybrowser' => 'カテゴリーブラウザ',
	'categorybrowser-desc' => '最もページなどが格納されたカテゴリをフィルターにかけ、それらをAJAXを使ったインターフェースで案内する[[Special:CategoryBrowser|特別ページ]]を提供する',
	'cb_requires_javascript' => 'カテゴリブラウザを利用するにはブラウザのJavaScriptを有効にする必要があります。',
	'cb_ie6_warning' => '条件エディタはInternet Explorer 6.0以前のバージョンでは稼働しません。
ただし、事前に定義された条件のブラウジングは正常に稼働するでしょう。 
もし、可能であればブラウザを変更するか、アップデートしてください。',
	'cb_show_no_parents_only' => '親のないカテゴリのみを表示する',
	'cb_cat_name_filter' => '名前によるカテゴリの検索:',
	'cb_cat_name_filter_clear' => 'カテゴリ名フィルターをクリアするために押す',
	'cb_cat_name_filter_ci' => '大文字、小文字を区別しない場合',
	'cb_copy_line_hint' => '選択された式に演算子をコピーまたはペーストする場合は、[+] と[>+]ボタンを使用する',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|サブカテゴリ|総サブカテゴリ数}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|ページ|総ページ数}}',
	'cb_has_files' => '$1 {{PLURAL:$1|ファイル|総ファイル数}}',
	'cb_has_parentcategories' => '親元のカテゴリー(いかなる場合においても)',
	'cb_previous_items_link' => '前',
	'cb_next_items_link' => '次',
	'cb_next_items_stats' => '（$1から）',
	'cb_cat_subcats' => 'サブカテゴリ',
	'cb_cat_pages' => 'ページ',
	'cb_cat_files' => 'ファイル',
	'cb_apply_button' => '適用',
	'cb_all_op' => 'すべて',
	'cb_or_op' => 'または',
	'cb_and_op' => 'および',
	'cb_edit_left_hint' => '可能であれば、左に移動',
	'cb_edit_right_hint' => '可能であれば、右に移動',
	'cb_edit_remove_hint' => '可能であれば、削除する',
	'cb_edit_copy_hint' => 'クリップボードに演算子をコピーする',
	'cb_edit_append_hint' => '最後の位置に演算子を挿入する',
	'cb_edit_clear_hint' => '現在の式をクリアする（選択したすべての）',
	'cb_edit_paste_hint' => '可能であれば、現在の位置に演算子を貼付ける',
	'cb_edit_paste_right_hint' => '可能であれば、次の位置に演算子を貼付ける',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'categorybrowser' => 'Kategoriebrowser',
	'cb_requires_javascript' => "D'Erweiderung Kategriebrowser brauch ageschalte Javascript am Browser.",
	'cb_show_no_parents_only' => 'Nëmme Kategorie weisen déi keng Kategorie driwwer hunn',
	'cb_cat_name_filter' => 'Sich no enger Kategorie nom Numm:',
	'cb_cat_name_filter_clear' => 'Dréckt fir de Filter vum Kategoriennumm eidelzemaachen',
	'cb_cat_name_filter_ci' => 'Ënnerscheed tëschent groussen a klenge Buschtawen',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|Ënnerkategorie|Ënnerkategorien}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|Säit|Säiten}}',
	'cb_has_files' => '$1 {{PLURAL:$1|Fichier|Fichieren}}',
	'cb_previous_items_link' => 'Vireg',
	'cb_next_items_link' => 'Nächst',
	'cb_next_items_stats' => '(vu(n) $1)',
	'cb_cat_subcats' => 'Ënnerkategorien',
	'cb_cat_pages' => 'Säiten',
	'cb_cat_files' => 'Fichieren',
	'cb_apply_button' => 'Applizéieren',
	'cb_all_op' => 'All',
	'cb_or_op' => 'oder',
	'cb_and_op' => 'an',
	'cb_edit_left_hint' => 'No lénks réckelen, wa méiglech',
	'cb_edit_right_hint' => 'No riets réckelen, wa méiglech',
	'cb_edit_remove_hint' => 'Läschen, wa méiglech',
	'cb_edit_clear_hint' => 'Aktuellen Ausdrock ewechhuelen (alles uwielen)',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'categorybrowser' => 'Прелистувач на категории',
	'categorybrowser-desc' => 'Дава [[Special:CategoryBrowser|специјална страница]] за филтрирање на најисполнети категории и движење низ истите со помош на AJAX-посредник',
	'cb_requires_javascript' => 'Додатокот за прелистување на категории бара прелистувачот да има овозможено JavaScript',
	'cb_ie6_warning' => 'Уредникот на услови не работи на Internet Explorer 6.0 и постари верзии.
Меѓутоа прелистувањето на предодредени услови би требало да функционира нормално.
Сменете си го прелистувачот или подновете го.',
	'cb_show_no_parents_only' => 'Прикажувај само категории без матични категории',
	'cb_cat_name_filter' => 'Пребарување на категорија по име:',
	'cb_cat_name_filter_clear' => 'Притиснете тука за да го исчистите полето за пребарување категории по име',
	'cb_cat_name_filter_ci' => 'Не разликува големи/мали букви',
	'cb_copy_line_hint' => 'Користете ги копчињата [+] и [>+] за да копирање и лепење оператори во избраниот израз',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|поткатегорија|поткатегории}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|страница|страници}}',
	'cb_has_files' => '$1 {{PLURAL:$1|податотека|податотеки}}',
	'cb_has_parentcategories' => 'матични категории (ако има)',
	'cb_previous_items_link' => 'Претходни',
	'cb_next_items_link' => 'Следни',
	'cb_next_items_stats' => ' (од $1)',
	'cb_cat_subcats' => 'поткатегории',
	'cb_cat_pages' => 'страници',
	'cb_cat_files' => 'податотеки',
	'cb_apply_button' => 'Примени',
	'cb_all_op' => 'Сè',
	'cb_or_op' => 'или',
	'cb_and_op' => 'и',
	'cb_edit_left_hint' => 'Премести лево, ако може',
	'cb_edit_right_hint' => 'Премести десно, ако може',
	'cb_edit_remove_hint' => 'Избриши, ако може',
	'cb_edit_copy_hint' => 'Ископирај го операторот во оставата за копии',
	'cb_edit_append_hint' => 'Вметни го операторот во последната позиција',
	'cb_edit_clear_hint' => 'Исчисти го тековниот израз (избери сè)',
	'cb_edit_paste_hint' => 'Залепи го операторот во тековната позиција, ако може',
	'cb_edit_paste_right_hint' => 'Залепи го операторот во следната позиција, ако може',
);

/** Dutch (Nederlands)
 * @author Kjell
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'categorybrowser' => 'Categorieën doorbladeren',
	'categorybrowser-desc' => 'Maakt een [[Special:CategoryBrowser|speciale pagina]] beschikbaar om categorieën met de meeste elementen te selecteren en ze te verkennen via een AJAX-interface',
	'cb_requires_javascript' => 'De uitbreiding voor het doorbladeren van categorieën vereist dat JavaScript is ingeschakeld in de browser.',
	'cb_ie6_warning' => 'De tekstverwerker voor condities werkt niet in Internet Explorer 6.0 of eerdere versies.
Vooraf gedefinieerde voorwaarden doorbladeren hoort normaal te werken.
Gebruik een andere browser of werkt deze bij, als mogelijk.',
	'cb_show_no_parents_only' => 'Alleen categorieën weergeven die geen bovenliggende categorieën hebben',
	'cb_cat_name_filter' => 'Op naam naar categorie zoeken:',
	'cb_cat_name_filter_clear' => 'Klik om het categorienaamfilter te verwijderen',
	'cb_cat_name_filter_ci' => 'Hoofdletterongevoelig',
	'cb_copy_line_hint' => 'Gebruik de knoppen [+] en [>+] om de operators in de geselecteerde expressie te kopiëren en plakken',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategorie|subcategorieën}}',
	'cb_has_pages' => "$1 {{PLURAL:$1|pagina|pagina's}}",
	'cb_has_files' => '$1 {{PLURAL:$1|bestand|bestanden}}',
	'cb_has_parentcategories' => 'bovenliggende categorieën (als die bestaan)',
	'cb_previous_items_link' => 'Vorige',
	'cb_next_items_link' => 'Volgende',
	'cb_next_items_stats' => '(van $1)',
	'cb_cat_subcats' => 'subcategorieën',
	'cb_cat_pages' => "pagina's",
	'cb_cat_files' => 'bestanden',
	'cb_apply_button' => 'Toepassen',
	'cb_all_op' => 'Alles',
	'cb_or_op' => 'of',
	'cb_and_op' => 'en',
	'cb_edit_left_hint' => 'Naar links verplaatsen, indien mogelijk',
	'cb_edit_right_hint' => 'Naar rechts verplaatsen, indien mogelijk',
	'cb_edit_remove_hint' => 'Verwijderen, indien mogelijk',
	'cb_edit_copy_hint' => 'Operator naar klembord kopiëren',
	'cb_edit_append_hint' => 'Operator na laatste positie invoegen',
	'cb_edit_clear_hint' => 'Huidige expressie wissen (alles selecteren)',
	'cb_edit_paste_hint' => 'Als mogelijk de operator op de huidige positie invoegen',
	'cb_edit_paste_right_hint' => 'Als mogelijk de operator op de volgende positie invoegen',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'categorybrowser' => 'Przeglądarka kategorii',
	'categorybrowser-desc' => '[[Special:CategoryBrowser|Strona specjalna]] do odnajdywania najczęściej wykorzystywanych kategorii i do przeglądania ich z wykorzystaniem interfejsu wykonanego w technologii AJAX',
	'cb_requires_javascript' => 'Przeglądarka kategorii wymaga włączonej w przeglądarce obsługi JavaScript',
	'cb_ie6_warning' => 'Edytor warunków nie działa poprawnie w przeglądarce Internet Explorer 6.0 i jej wcześniejszych wersjach.
Można jednak przeglądać wcześniej zdefiniowane warunki.
Jeśli to możliwe zmień lub uaktualnij swoją przeglądarkę.',
	'cb_show_no_parents_only' => 'Pokaż wyłącznie kategorie, które nie mają kategorii nadrzędnych',
	'cb_cat_name_filter' => 'Szukaj kategorii według nazwy',
	'cb_cat_name_filter_clear' => 'Naciśnij, aby wyczyścić filtr nazw kategorii',
	'cb_cat_name_filter_ci' => 'Ignoruj wielkość liter',
	'cb_copy_line_hint' => 'Użyj przycisków [+] i [>+] aby skopiować i wkleić operatory w wybranym wyrażeniu',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|podkategoria|podkategorie|podkategorii}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|strona|strony|stron}}',
	'cb_has_files' => '$1 {{PLURAL:$1|plik|pliki|plików}}',
	'cb_has_parentcategories' => 'kategorię nadrzędne (jeśli są)',
	'cb_previous_items_link' => 'poprzednie',
	'cb_next_items_link' => 'następne',
	'cb_next_items_stats' => '(od $1)',
	'cb_cat_subcats' => 'podkategorie',
	'cb_cat_pages' => 'strony',
	'cb_cat_files' => 'pliki',
	'cb_apply_button' => 'Zastosuj',
	'cb_all_op' => 'Wszystkie',
	'cb_or_op' => 'lub',
	'cb_and_op' => 'i',
	'cb_edit_left_hint' => 'Jeśli to możliwe przesuń w lewo',
	'cb_edit_right_hint' => 'Jeśli to możliwe przesuń w prawo',
	'cb_edit_remove_hint' => 'Jeśli to możliwe usuń',
	'cb_edit_copy_hint' => 'Skopiuj operator do schowka',
	'cb_edit_append_hint' => 'Wstaw operator na ostatnią pozycję',
	'cb_edit_clear_hint' => 'Wyczyść aktualne wyrażenie (wybierz wszystko)',
	'cb_edit_paste_hint' => 'Jeśli to możliwe wstaw operator na aktualną pozycję',
	'cb_edit_paste_right_hint' => 'Jeśli to możliwe wstaw operator na następną pozycję',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'categorybrowser' => 'Navigador ëd categorìe',
	'categorybrowser-desc' => "A dà na [[Special:CategoryBrowser|pàgina special]] për filtré le categorìe pi popolar e për scorje an dovrand n'antërfacia AJAX",
	'cb_requires_javascript' => "L'estension ëd navigador ëd categorìa a ciama che JavaScript a sia abilità ant ël navigador.",
	'cb_ie6_warning' => "L'editor condissional a marcia pa con Internet Explorer 6.0 o version pi veje.
An tùit ij cas, la navigassion dle condission predefinìe a dovrìa travajé normalment.
Për piasì, ch'a cangia o ch'a modìfica sò navigador, se possìbil.",
	'cb_show_no_parents_only' => "Smon-e mach le categorìe ch'a l'han pa ëd categorìa mare",
	'cb_cat_name_filter' => 'Sërché dle categorìe për nòm:',
	'cb_cat_name_filter_clear' => 'Sgnaché për scancelé ij fìlter ëd nòm ëd categorìa',
	'cb_cat_name_filter_ci' => 'Pa sensìbil a minùscol/maiùscol',
	'cb_copy_line_hint' => "Ch'a deuvra ij boton [+] and [>+] për copié e ancolé j'operador ant l'espression selessionà",
	'cb_has_subcategories' => '$1 {{PLURAL:$1|sotcategorìa|sotcategorìe}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|pàgina|pàgine}}',
	'cb_has_files' => '$1 {{PLURAL:$1|archivi|archivi}}',
	'cb_has_parentcategories' => "categorìe mare (s'a-i na j'é)",
	'cb_previous_items_link' => 'Prima',
	'cb_next_items_link' => 'Apress',
	'cb_next_items_stats' => '(da $1)',
	'cb_cat_subcats' => 'sotcategorìe',
	'cb_cat_pages' => 'pàgine',
	'cb_cat_files' => 'archivi',
	'cb_apply_button' => 'Fà',
	'cb_all_op' => 'Tùit',
	'cb_or_op' => 'o',
	'cb_and_op' => 'e',
	'cb_edit_left_hint' => 'Va a snista, se possìbil',
	'cb_edit_right_hint' => 'Va a drita, se possìbil',
	'cb_edit_remove_hint' => 'Scancelé, se possìbil',
	'cb_edit_copy_hint' => 'Còpia operador a la tastera',
	'cb_edit_append_hint' => "Ansëriss operador ant l'ùltima posission",
	'cb_edit_clear_hint' => 'Scansela espression corenta (selession-a tut)',
	'cb_edit_paste_hint' => 'Còpia operador ant la posission corenta, se possìbil',
	'cb_edit_paste_right_hint' => "Còpia operador ant la posission d'apress, se possìbil",
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'categorybrowser' => 'Navegação de categorias',
	'categorybrowser-desc' => 'Fornece uma [[Special:CategoryBrowser|página especial]] para filtrar as categorias mais povoadas e navegá-las com uma interface AJAX',
	'cb_requires_javascript' => 'A extensão para navegação de categorias necessita que o JavaScript tenha sido activado no seu browser.',
	'cb_ie6_warning' => 'O editor de condições não funciona no Internet Explorer versão 6.0 ou anteriores.
No entanto, a navegação de condições predefinidas deve funcionar normalmente.
Se for possível, mude ou actualize o seu browser, por favor.',
	'cb_show_no_parents_only' => 'Mostrar só as categorias que não têm categorias superiores',
	'cb_cat_name_filter' => 'Procurar a categoria pelo nome:',
	'cb_cat_name_filter_clear' => 'Clique para limpar o filtro do nome da categoria',
	'cb_cat_name_filter_ci' => 'Sem distinguir maiúsculas de minúsculas',
	'cb_copy_line_hint' => 'Use os botões [+] e [>+] para copiar e inserir operadores na expressão seleccionada',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategoria|subcategorias}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'cb_has_files' => '$1 {{PLURAL:$1|ficheiro|ficheiros}}',
	'cb_has_parentcategories' => 'categorias superiores (se existirem)',
	'cb_previous_items_link' => 'Anterior',
	'cb_previous_items_stats' => ' ($1 - $2)',
	'cb_next_items_link' => 'Seguinte',
	'cb_next_items_stats' => ' (de $1)',
	'cb_cat_subcats' => 'subcategorias',
	'cb_cat_pages' => 'páginas',
	'cb_cat_files' => 'ficheiros',
	'cb_apply_button' => 'Aplicar',
	'cb_all_op' => 'Todas',
	'cb_or_op' => 'ou',
	'cb_and_op' => 'e',
	'cb_edit_left_hint' => 'Mover para a esquerda, se possível',
	'cb_edit_right_hint' => 'Mover para a direita, se possível',
	'cb_edit_remove_hint' => 'Apagar, se possível',
	'cb_edit_copy_hint' => 'Copiar o operador',
	'cb_edit_append_hint' => 'Inserir o operador na última posição',
	'cb_edit_clear_hint' => 'Limpar a expressão presente (seleccionar todas)',
	'cb_edit_paste_hint' => 'Inserir o operador na posição actual, se possível',
	'cb_edit_paste_right_hint' => 'Inserir o operador na posição seguinte, se possível',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'categorybrowser' => 'Navegador de categorias',
	'categorybrowser-desc' => 'Fornece uma [[Special:CategoryBrowser|página especial]] para filtrar as categorias mais povoadas e navegá-las com uma interface AJAX',
	'cb_requires_javascript' => 'A extensão para navegação de categorias necessita que o JavaScript tenha sido ativado no seu navegador.',
	'cb_ie6_warning' => 'O editor de condições não funciona no Internet Explorer versão 6.0 ou anteriores.
No entanto, a navegação de condições predefinidas deve funcionar normalmente.
Se for possível, mude ou atualize o seu navegador, por favor.',
	'cb_show_no_parents_only' => 'Mostrar só as categorias que não têm categorias superiores',
	'cb_cat_name_filter' => 'Procurar categoria por  nome:',
	'cb_cat_name_filter_clear' => 'Clique para limpar o filtro do nome da categoria',
	'cb_cat_name_filter_ci' => 'Não diferenciar maiúsculas/minúsculas',
	'cb_copy_line_hint' => 'Use os botões [+] e [>+] para copiar e inserir operadores na expressão selecionada',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|subcategoria|subcategorias}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|página|páginas}}',
	'cb_has_files' => '$1 {{PLURAL:$1|arquivo|arquivos}}',
	'cb_has_parentcategories' => 'categorias superiores (se existirem)',
	'cb_previous_items_link' => 'Anteriores',
	'cb_next_items_link' => 'Próximos',
	'cb_next_items_stats' => ' (de $1)',
	'cb_cat_subcats' => 'subcategorias',
	'cb_cat_pages' => 'páginas',
	'cb_cat_files' => 'arquivos',
	'cb_apply_button' => 'Aplicar',
	'cb_all_op' => 'Todos',
	'cb_or_op' => 'ou',
	'cb_and_op' => 'e',
	'cb_edit_left_hint' => 'Mover para esquerda, se possível',
	'cb_edit_right_hint' => 'Mover para direita, se possível',
	'cb_edit_remove_hint' => 'Apagar, se possível',
	'cb_edit_copy_hint' => 'Copiar o operador',
	'cb_edit_append_hint' => 'Inserir o operador na última posição',
	'cb_edit_clear_hint' => 'Limpar a expressão presente (selecionar todas)',
	'cb_edit_paste_hint' => 'Inserir o operador na posição atual, se possível',
	'cb_edit_paste_right_hint' => 'Inserir o operador na posição seguinte, se possível',
);

/** Russian (Русский)
 * @author MaxSem
 * @author QuestPC
 */
$messages['ru'] = array(
	'categorybrowser' => 'Просмотр категорий',
	'categorybrowser-desc' => 'Предоставляет [[Special:CategoryBrowser|специальную страницу]] для выбора наиболее ёмких категорий вики-сайта с целью последующей навигации с использованием AJAX-интерфейса',
	'cb_requires_javascript' => 'Расширение для просмотра категорий требует включения поддержки Javascript в браузере',
	'cb_ie6_warning' => 'Редактор выражений не поддерживается в Internet Explorer версии 6.0 или более ранних.
Возможен лишь просмотр предопределенных выражений.
Пожалуйста поменяйте или обновите ваш браузер.',
	'cb_show_no_parents_only' => 'Показывать только категории без родителей',
	'cb_cat_name_filter' => 'Поиск категории по имени:',
	'cb_cat_name_filter_clear' => 'Нажмите здесь для очистки поля поиска категории по имени',
	'cb_cat_name_filter_ci' => 'Без учёта регистра',
	'cb_copy_line_hint' => 'Используйте кнопки [+] и [>+] для копирования оператора в выбранное выражение',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|подкатегория|подкатегории|подкатегорий}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|страница|страницы|страниц}}',
	'cb_has_files' => '$1 {{PLURAL:$1|файл|файла|файлов}}',
	'cb_has_parentcategories' => 'родительские категории (если есть)',
	'cb_previous_items_link' => 'Предыдущие',
	'cb_next_items_link' => 'Следующие',
	'cb_next_items_stats' => ' (начиная с $1)',
	'cb_cat_subcats' => 'подкатегорий',
	'cb_cat_pages' => 'страниц',
	'cb_cat_files' => 'файлов',
	'cb_apply_button' => 'Применить',
	'cb_all_op' => 'Все',
	'cb_or_op' => 'или',
	'cb_and_op' => 'и',
	'cb_edit_left_hint' => 'Переместить влево, если возможно',
	'cb_edit_right_hint' => 'Переместить вправо, если возможно',
	'cb_edit_remove_hint' => 'Удалить, если возможно',
	'cb_edit_copy_hint' => 'Скопировать оператор в буфер обмена',
	'cb_edit_append_hint' => 'Вставить оператор в последнюю позицию',
	'cb_edit_clear_hint' => 'Очистить текущее выражение (выбрать всё)',
	'cb_edit_paste_hint' => 'Вставить оператор в текущую позицию, если возможно',
	'cb_edit_paste_right_hint' => 'Вставить оператор в следующую позицию, если возможно',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'categorybrowser' => 'Pantingin-tingin ng kategorya',
	'categorybrowser-desc' => 'Nagbibigay ng isang [[Special:CategoryBrowser|natatanging pahina]] upang salain ang pinakamaraming-lamang mga kategorya at upang malibot sila na ginagamitan ng ugnayang-mukhang AJAX',
	'cb_requires_javascript' => 'Ang pandugtong ng pantingin-tingin ng kategorya ay nangangailangan ng JavaScript upang mapagana ito sa pantingin-tingin.',
	'cb_ie6_warning' => 'Ang pamatnugot ng kundisyon ay hindi gumagana sa Internet Explorer 6.0 or mas naunang mga bersyon.
Subalit, ang pagtingin-tingin ng paunang nilarawang mga kundisyon ay dapat na gumana ng normal.
Paki bago o itaas ang antas ng iyong pantingin-tingin, kung maaari.',
	'cb_show_no_parents_only' => 'Ipakita lamang ang mga kategoryang walang mga magulang',
	'cb_cat_name_filter' => 'Maghanap ng mga kategorya ayon sa pangalan:',
	'cb_cat_name_filter_clear' => 'Pindutin upang malinis ang pansala ng pangalan ng kategorya',
	'cb_cat_name_filter_ci' => 'Hindi sensitibo sa uri ng panitik',
	'cb_copy_line_hint' => 'Gamitin ang mga pindutang [+] at [>+] upang kopyahin at idikit ang mga bantas sa napiling mga pagsasaad',
	'cb_has_subcategories' => '$1 {{PLURAL:$1|kabahaging kategorya|kabahaging mga kategorya}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|pahina|mga pahina}}',
	'cb_has_files' => '$1 {{PLURAL:$1|talaksan|mga talaksan}}',
	'cb_has_parentcategories' => 'magulang na mga kategorya (kung mayroon)',
	'cb_previous_items_link' => 'Nakaraan',
	'cb_next_items_link' => 'Kasunod',
	'cb_next_items_stats' => '(mula $1)',
	'cb_cat_subcats' => 'kabahaging mga kategorya',
	'cb_cat_pages' => 'mga pahina',
	'cb_cat_files' => 'mga talaksan',
	'cb_apply_button' => 'Gamitin',
	'cb_all_op' => 'Lahat',
	'cb_or_op' => 'o',
	'cb_and_op' => 'at',
	'cb_edit_left_hint' => 'Ilipat sa kaliwa, kung maaari',
	'cb_edit_right_hint' => 'Ilipat sa kanan, kung maaari',
	'cb_edit_remove_hint' => 'Burahin, kung maaari',
	'cb_edit_copy_hint' => 'Kopyahin ang bantas sa tablang-ipitan',
	'cb_edit_append_hint' => 'Isingit ang bantas sa huling posisyon',
	'cb_edit_clear_hint' => 'Linisin ang pangkasalukuyang pagsasaad (piliing lahat)',
	'cb_edit_paste_hint' => 'Idikit ang bantas sa pangkasalukuyang posisyon, kung maaari',
	'cb_edit_paste_right_hint' => 'Idikit ang bantas sa kasunod na posisyon, kung maaari',
);

/** Turkish (Türkçe)
 * @author CnkALTDS
 */
$messages['tr'] = array(
	'categorybrowser' => 'Kategori tarayıcısı',
	'cb_previous_items_link' => 'Önceki',
	'cb_next_items_link' => 'Sonraki',
);

/** Tatar (Cyrillic) (Татарча/Tatarça (Cyrillic))
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'cb_previous_items_link' => 'Алдагы',
	'cb_next_items_link' => 'Киләсе',
	'cb_next_items_stats' => ' ( $1 башлап)',
	'cb_cat_subcats' => 'төркемчәләр',
	'cb_cat_pages' => 'битләр',
	'cb_cat_files' => 'файллар',
	'cb_apply_button' => 'Сакларга',
	'cb_all_op' => 'Барысы',
	'cb_or_op' => 'яки',
	'cb_and_op' => 'һәм',
	'cb_edit_left_hint' => 'Мөмкин булса сулга күчерергә',
	'cb_edit_right_hint' => 'Мөмкин булса уңга күчерергә',
	'cb_edit_remove_hint' => 'Мөмкин булса бетерегә',
	'cb_edit_copy_hint' => 'Бирелешне алмаш буферга күчермәләү',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'cb_has_subcategories' => '$1 {{PLURAL:$1|підкатегорія|підкатегорії|підкатегорій}}',
	'cb_has_pages' => '$1 {{PLURAL:$1|сторінка|сторінки|сторінок}}',
	'cb_cat_subcats' => 'підкатегорій',
	'cb_cat_pages' => 'сторінок',
	'cb_all_op' => 'Усі',
);

