<?php
/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @author Stephanie Amanda Stevens <phroziac@gmail.com>
 * @author SPQRobin <robin_1273@hotmail.com>
 * @copyright Copyright (C) 2005-2007 Stephanie Amanda Stevens
 * @copyright Copyright (C) 2007 SPQRobin
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgSpecialInterwikiMessages = array();

$wgSpecialInterwikiMessages['en'] = array(
	# general messages
	'interwiki' => 'View and manipulate interwiki data',
	'interwiki_prefix' => 'Prefix',
	'interwiki_url' => 'URL',
	'interwiki_local' => 'Local',
	'interwiki_trans' => 'Trans',
	'interwiki_reasonfield' => 'Reason',
	# deleting a prefix
	'interwiki_delquestion' => 'Deleting "$1"',
	'interwiki_deleting' => 'You are deleting prefix "$1".',
	'interwiki_deleted' =>  'Prefix "$1" was successfully removed from the interwiki table.',
	'interwiki_delfailed' => 'Prefix "$1" could not be removed from the interwiki table.',
	# adding a prefix
	'interwiki_addtext' => 'Add an interwiki prefix',
	'interwiki_addbutton' => 'Add',
	'interwiki_added' => 'Prefix "$1" was successfully added to the interwiki table.',
	'interwiki_addfailed' => 'Prefix "$1" could not be added to the interwiki table. Possibly he already exists in the interwiki table.',
	# interwiki log
	'interwiki_logpagename' => 'Interwiki table log',
	'interwiki_log_added' => 'Added "$1" ($2) (trans: $3) (local: $4) to the interwiki table: $5',
	'interwiki_log_deleted' => 'Removed prefix "$1" from the interwiki table: $2',
	'interwiki_logpagetext' => 'This is a log of changes to the [[Special:Interwiki|interwiki table]].',
	'interwiki_logentry' => '', # Don't translate this message
	# error messages
	'interwiki_error' => 'ERROR: The interwiki table is empty, or something else went wrong.',
);

/* German translation by MF-Warburg */
$wgSpecialInterwikiMessages['de'] = array(
	'interwiki' => 'Interwiki-Daten betrachten und verändern',
	'interwiki_prefix' => 'Präfix',
	'interwiki_reasonfield' => 'Grund',
	'interwiki_delquestion' => 'Löscht "$1"',
	'interwiki_deleted' => '$1 wurde erfolgreich aus der Interwiki-Tabelle entfernt.',
	'interwiki_delfailed' => '$1 konnte nicht aus der Interwiki-Tabelle gelöscht werden.',
	'interwiki_addtext' => 'Ein Interwiki-Präfix hinzufügen',
	'interwiki_addbutton' => 'Hinzufügen',
	'interwiki_added' => '$1 wurde erfolgreich der Interwiki-Tabelle hinzugefügt.',
	'interwiki_addfailed' => '$1 konnte nicht der Interwiki-Tabelle hinzugefügt werden.',
	'interwiki_logpagename' => 'Interwiki-Tabellenlogbuch',
	'interwiki_log_added' => 'hat "$1" ($2) (trans: $3) (local: $4) der Interwiki-Tabelle hinzugefügt: $5',
	'interwiki_log_deleted' => 'hat "$1" aus der Interwiki-Tabelle entfernt: $2',
	'interwiki_logpagetext' => 'In diesem Logbuch werden Änderungen an der [[Special:Interwiki|Interwiki-Tabelle]] protokolliert.',
);

/* French Translation by Bertrand GRONDIN */
$wgSpecialInterwikiMessages['fr'] = array(
	'interwiki' => 'Voir et manipuler les données interwiki',
	'interwiki_prefix' => 'Préfixe',
	'interwiki_reasonfield' => 'Motif',
	'interwiki_delquestion' => 'Suppression "$1"',
	'interwiki_deleted' => '$1 a été enlevée avec succès de la table interwiki.',
	'interwiki_delfailed' => '$1 n\'a pas pu être enlevé de la table interwiki.',
	'interwiki_addtext' => 'Ajoute un préfixe interwiki',
	'interwiki_addbutton' => 'Ajouter',
	'interwiki_added' => '$1 a été ajouté avec succès dans la table interwiki.',
	'interwiki_addfailed' => '$1 n\'a pas pu être ajouté à la table interwiki.',
	'interwiki_logpagename' => 'Journal de la table interwiki',
	'interwiki_log_added' => 'Ajouté "$1" ($2) (trans: $3) (local: $4) dans la table interwiki: $5',
	'interwiki_log_deleted' => 'Préfixe "$1" supprimé de la table interwiki: $2',
	'interwiki_logpagetext' => 'Ceci est le journal des changements dans la [[Special:Interwiki|table interwiki]].',
);

$wgSpecialInterwikiMessages['hsb'] = array(
	'interwiki'             => 'Interwiki-daty wobhladać a změnić',
	'interwiki_prefix'      => 'Prefiks',
	'interwiki_url'         => 'URL',#identical but defined
	'interwiki_local'       => 'Lokalny',
	'interwiki_trans'       => 'Trans',#identical but defined
	'interwiki_reasonfield' => 'Přičina',
	'interwiki_delquestion' => 'Wušmórnja so "$1"',
	'interwiki_deleting'    => 'Wušmórnješ prefiks "$1".',
	'interwiki_deleted'     => 'Prefiks "$1" je so wuspěšnje z interwiki-tabele wotstronił.',
	'interwiki_delfailed'   => 'Prefiks "$1" njeda so z interwiki-tabele wotstronić.',
	'interwiki_addtext'     => 'Interwiki-prefiks přidać',
	'interwiki_addbutton'   => 'Přidać',
	'interwiki_added'       => 'Prefiks "$1" je so wuspěšnje interwiki-tabeli přidał.',
	'interwiki_addfailed'   => 'Prefiks "$1" njeda so interwiki-tabeli přidać. Snano eksistuje hižo w interwiki-tabeli.',
	'interwiki_logpagename' => 'Protokol interwiki-tabele',
	'interwiki_log_added'   => 'Je "$1" ($2) (trans: $3) (lokalny: $4) interwiki-tabeli přidał: $5',
	'interwiki_log_deleted' => 'je prefiks "$1" z interwiki-tabele wotstronił: $2',
	'interwiki_logpagetext' => 'To je protokol změnow na [[Special:Interwiki|interwiki-tabeli]].',
	'interwiki_error'       => 'ZMYLK: Interwiki-tabela je prózdna abo něšto je wopak.',
);

/* Some Latin translations by SPQRobin */
$wgSpecialInterwikiMessages['la'] = array(
	'interwiki_reasonfield' => 'Causa',
	'interwiki_delquestion' => 'Removens "$1"',
	'interwiki_addbutton' => 'Addere',
);

/* Dutch translation by SPQRobin */
$wgSpecialInterwikiMessages['nl'] = array(
	'interwiki'             => 'Interwikigegevens bekijken en wijzigen',
	'interwiki_prefix'      => 'Voorvoegsel',
	'interwiki_url'         => 'URL',#identical but defined
	'interwiki_local'       => 'Local',#identical but defined
	'interwiki_trans'       => 'Trans',#identical but defined
	'interwiki_reasonfield' => 'Reden',
	'interwiki_delquestion' => '"$1" aan het verwijderen',
	'interwiki_deleting'    => 'U bent voorvoegsel "$1" aan het verwijderen.',
	'interwiki_deleted'     => 'Voorvoegsel "$1" is succesvol verwijderd van de interwikitabel.',
	'interwiki_delfailed'   => 'Voorvoegsel "$1" kon niet worden verwijderd van de interwikitabel.',
	'interwiki_addtext'     => 'Een interwikivoorvoegsel toevoegen',
	'interwiki_addbutton'   => 'Toevoegen',
	'interwiki_added'       => 'Voorvoegsel "$1" is succesvol toegevoegd aan de interwikitabel.',
	'interwiki_addfailed'   => 'Voorvoegsel "$1" kon niet worden toegevoegd aan de interwikitabel. Mogelijk bestaat hij al in de interwikitabel.',
	'interwiki_logpagename' => 'Logboek interwikitabel',
	'interwiki_log_added'   => 'Voegde "$1" ($2) (trans: $3) (local: $4) toe aan de interwikitabel: $5',
	'interwiki_log_deleted' => 'Verwijderde voorvoegsel "$1" van de interwikitabel: $2',
	'interwiki_logpagetext' => 'Dit is een logboek van wijzigingen aan de [[Special:Interwiki|interwikitabel]].',
	'interwiki_error'       => 'FOUT: De interwikitabel is leeg, of iets anders ging verkeerd.',
);

/* Russian Translation by Alexander Chemeris */
$wgSpecialInterwikiMessages['ru'] = array(
	'interwiki' => 'Просмотр и изменение префиксов интервики',
	'interwiki_prefix' => 'Префикс',
	'interwiki_reasonfield' => 'Причина',
	'interwiki_delquestion' => 'Удаление "$1"',
	'interwiki_deleted' => 'Префикс $1 успешно удалён.',
	'interwiki_delfailed' => 'Префикс $1 не может быть удалён.',
	'interwiki_addtext' => 'Добавить новый префикс интервики',
	'interwiki_addbutton' => 'Добавить',
	'interwiki_added' => 'Префикс $1 успешно добавлен.',
	'interwiki_addfailed' => 'Префикс $1 не может быть добавлен.',
	'interwiki_logpagename' => 'Список изменений таблицы префиксов интервики',
	'interwiki_log_added' => 'Префикс "$1" ($2) (trans: $3) (local: $4) добавлен в таблицу интервики: $5',
	'interwiki_log_deleted' => 'Префикс "$1" удалён из таблицы интервики: $2',
	'interwiki_logpagetext' => 'На этой странице можно увидеть список всех изменений таблицы интервики.',
);
