<?php
/**
 * Translations of Page Translation feature of Translate extension.
 *
 * @file
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

/** English
 * @author Nike
 */
$messages['en'] = array(
	'pagetranslation' => 'Page translation',
	'right-pagetranslation' => 'Mark versions of pages for translation',
	'tpt-desc' => 'Extension for translating content pages',
	'tpt-section' => 'Translation unit $1',
	'tpt-section-new' => 'New translation unit.
Name: $1',
	'tpt-section-deleted' => 'Translation unit $1',
	'tpt-template' => 'Page template',
	'tpt-templatediff' => 'The page template has changed.',

	'tpt-diff-old' => 'Previous text',
	'tpt-diff-new' => 'New text',
	'tpt-submit' => 'Mark this version for translation',

	'tpt-sections-oldnew' => 'New and existing translation units',
	'tpt-sections-deleted' => 'Deleted translation units',
	'tpt-sections-template' => 'Translation page template',

	'tpt-action-nofuzzy' => 'Do not invalidate translations',

	# Specific page on the special page
	'tpt-badtitle' => 'Page name given ($1) is not a valid title',
	'tpt-nosuchpage' => 'Page $1 does not exist',
	'tpt-oldrevision' => '$2 is not the latest version of the page [[$1]].
Only latest versions can be marked for translation.',
	'tpt-notsuitable' => 'Page $1 is not suitable for translation.
Make sure it has <nowiki><translate></nowiki> tags and has a valid syntax.',
	'tpt-saveok' => 'The page [[$1]] has been marked up for translation with $2 {{PLURAL:$2|translation unit|translation units}}.
The page can now be <span class="plainlinks">[$3 translated]</span>.',
	'tpt-badsect' => '"$1" is not a valid name for translation unit $2.',
	'tpt-showpage-intro' => 'Below new, existing and deleted sections are listed.
Before marking this version for translation, check that the changes to sections are minimised to avoid unnecessary work for translators.',
	'tpt-mark-summary' => 'Marked this version for translation',
	'tpt-edit-failed' => 'Could not update the page: $1',
	'tpt-duplicate' => 'Translation unit name $1 is used more than once.',
	'tpt-already-marked' => 'The latest version of this page has already been marked for translation.',
	'tpt-unmarked' => 'Page $1 is no longer marked for translation.',

	# Page list on the special page
	'tpt-list-nopages' => 'No pages are marked for translation nor ready to be marked for translation.',

	'tpt-new-pages-title' => 'Pages proposed for translation',
	'tpt-old-pages-title' => 'Pages in translation',
	'tpt-other-pages-title' => 'Broken pages',
	'tpt-discouraged-pages-title' => 'Discouraged pages',

	'tpt-new-pages' => '{{PLURAL:$1|This page contains|These pages contain}} text with translation tags,
but no version of {{PLURAL:$1|this page is|these pages are}} currently marked for translation.',
	'tpt-old-pages' => 'Some version of {{PLURAL:$1|this page has|these pages have}} been marked for translation.',
	'tpt-other-pages' => '{{PLURAL:$1|An old version of this page is|Older versions of these pages are}} marked for translation,
but the latest {{PLURAL:$1|version|versions}} cannot be marked for translation.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|This page has|These pages have}} been discouraged from further translation.',

	'tpt-select-prioritylangs' => 'Comma-separated list of priority language codes:',
	'tpt-select-prioritylangs-force' => 'Prevent translations to other languages than the priority languages',
	'tpt-select-prioritylangs-reason' => 'Reason:',
	'tpt-sections-prioritylangs' => 'Priority languages',

	'tpt-rev-mark' => 'mark for translation',
	'tpt-rev-unmark' => 'remove from translation',
	'tpt-rev-discourage' => 'discourage',
	'tpt-rev-encourage' => 'restore',

	'tpt-rev-mark-tooltip' => 'Mark the latest version of this page for translation.',
	'tpt-rev-unmark-tooltip' => 'Remove this page from translation.',
	'tpt-rev-discourage-tooltip' => 'Discourage further translations on this page.',
	'tpt-rev-encourage-tooltip' => 'Restore this page to normal translation.',


	# Source and translation page headers
	'translate-tag-translate-link-desc' => 'Translate this page',
	'translate-tag-markthis' => 'Mark this page for translation',
	'translate-tag-markthisagain' => 'This page has <span class="plainlinks">[$1 changes]</span> since it was last <span class="plainlinks">[$2 marked for translation]</span>.',
	'translate-tag-hasnew' => 'This page contains <span class="plainlinks">[$1 changes]</span> which are not marked for translation.',
	'tpt-translation-intro' => 'This page is a <span class="plainlinks">[$1 translated version]</span> of a page [[$2]] and the translation is $3% complete.',
	'tpt-translation-intro-fuzzy' => 'Outdated translations are marked like this.',

	'tpt-languages-legend' => 'Other languages:',
	'tpt-languages-separator' => '&#160;•&#160;',
	'tpt-languages-zero' => 'Start translation for this language',

	'tpt-target-page' => 'This page cannot be updated manually.
This page is a translation of page [[$1]] and the translation can be updated using [$2 the translation tool].',
	'tpt-unknown-page' => 'This namespace is reserved for content page translations.
The page you are trying to edit does not seem to correspond any page marked for translation.',
	'tpt-translation-restricted' => 'Translation of this page to this language has been prevented by a translation administrator.

Reason: $1',
	'tpt-discouraged-language-force' => 'A translation administrator has limited the languages this page can be translated in. This language is not among those languages.

Reason: $1',
	'tpt-discouraged-language' => 'This language is not among the priority languages set by a translation administrator for this page.

Reason: $1',

	'tpt-render-summary' => 'Updating to match new version of source page',

	'tpt-download-page' => 'Export page with translations',

	'pt-parse-open' => 'Unbalanced &lt;translate> tag.
Translation template: <pre>$1</pre>',
	'pt-parse-close' => 'Unbalanced &lt;/translate> tag.
Translation template: <pre>$1</pre>',
	'pt-parse-nested' => 'Nested &lt;translate> sections are not allowed.
Tag text: <pre>$1</pre>',
	'pt-shake-multiple' => 'Multiple section markers for one section.
Section text: <pre>$1</pre>',
	'pt-shake-position' => 'Section markers in unexpected position.
Section text: <pre>$1</pre>',
	'pt-shake-empty' => 'Empty section for marker $1.',

	# logging system
	'pt-log-header' => 'Log for actions related to the page translation system',
	'pt-log-name' => 'Page translation log',
	'pt-log-mark' => '{{GENDER:$2|marked}} revision $3 of page "[[:$1]]" for translation',
	'pt-log-unmark' => '{{GENDER:$2|removed}} page "[[:$1]]" from translation',
	'pt-log-moveok' => '{{GENDER:$2|completed}} renaming of translatable page $1 to $3',
	'pt-log-movenok' => '{{GENDER:$2|encountered}} a problem while moving [[:$1]] to [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|completed}} deletion of translatable page $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|encountered}} a problem while deleting translatable page [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|completed}} deletion of translation page $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|encountered}} a problem while deleting translation page [[:$1]]',
	'pt-log-encourage' => '{{GENDER:$2|encouraged}} translation of page [[:$1]]',
	'pt-log-discourage' => '{{GENDER:$2|discouraged}} translation of page [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|removed}} priority languages from translatable page [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|set}} the priority languages for translatable page [[:$1]] to $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|limited}} languages for translatable page [[:$1]] to $3',

	# move page replacement
	'pt-movepage-title' => 'Move translatable page $1',
	'pt-movepage-blockers' => 'The translatable page cannot be moved to a new name because of the following {{PLURAL:$1|error|errors}}:',
	'pt-movepage-block-base-exists' => 'The target base page [[:$1]] exists.',
	'pt-movepage-block-base-invalid' => 'The target base page is not a valid title.',
	'pt-movepage-block-tp-exists' => 'The target translation page [[:$2]] exists.',
	'pt-movepage-block-tp-invalid' => 'The target translation page title for [[:$1]] would be invalid (too long?).',
	'pt-movepage-block-section-exists' => 'The target section page [[:$2]] exists.',
	'pt-movepage-block-section-invalid' => 'The target section page title for [[:$1]] would be invalid (too long?).',
	'pt-movepage-block-subpage-exists' => 'The target subpage [[:$2]] exists.',
	'pt-movepage-block-subpage-invalid' => 'The target subpage title for [[:$1]] would be invalid (too long?).',

	'pt-movepage-list-pages' => 'List of pages to move',
	'pt-movepage-list-translation' => 'Translation pages',
	'pt-movepage-list-section' => 'Section pages',
	'pt-movepage-list-other' => 'Other subpages',
	'pt-movepage-list-count' => 'In total $1 {{PLURAL:$1|page|pages}} to move.',

	'pt-movepage-legend' => 'Move translatable page',
	'pt-movepage-current' => 'Current name:',
	'pt-movepage-new' => 'New name:',
	'pt-movepage-reason' => 'Reason:',
	'pt-movepage-subpages' => 'Move all subpages',

	'pt-movepage-action-check' => 'Check if the move is possible',
	'pt-movepage-action-perform' => 'Do the move',
	'pt-movepage-action-other' => 'Change target',

	'pt-movepage-intro' => 'This special page allows you to move pages which are marked for translation.
The move action will not be instant, because many pages will need to be moved.
While the pages are being moved, it is not possible to interact with the pages in question.
Failures will be logged in the [[Special:Log/pagetranslation|page translation log]] and they need to be repaired by hand.',

	'pt-movepage-logreason' => 'Part of translatable page $1.',
	'pt-movepage-started' => 'The base page is now moved.
Please check the [[Special:Log/pagetranslation|page translation log]] for errors and completion message.',

	'pt-locked-page' => 'This page is locked because the translatable page is currently being moved.',


	'pt-deletepage-lang-title' => 'Deleting translation page $1.',
	'pt-deletepage-full-title' => 'Deleting translatable page $1.',

	'pt-deletepage-invalid-title' => 'The specified page is not valid.',
	'pt-deletepage-invalid-text' => 'The specified page is not a translatable page nor translation of it.',

	'pt-deletepage-action-check' => 'List pages to be deleted',
	'pt-deletepage-action-perform' => 'Do the deletion',
	'pt-deletepage-action-other' => 'Change target',

	'pt-deletepage-lang-legend' => 'Delete translation page',
	'pt-deletepage-full-legend' => 'Delete translatable page',
	'pt-deletepage-any-legend' => 'Delete translatable page or translation of translatable page',
	'pt-deletepage-current' => 'Page name:',
	'pt-deletepage-reason' => 'Reason:',
	'pt-deletepage-subpages' => 'Delete all subpages',

	'pt-deletepage-list-pages' => 'List of pages to delete',
	'pt-deletepage-list-translation' => 'Translation pages',
	'pt-deletepage-list-section' => 'Section pages',
	'pt-deletepage-list-other' => 'Other subpages',
	'pt-deletepage-list-count' => 'In total $1 {{PLURAL:$1|page|pages}} to delete.',

	'pt-deletepage-full-logreason' => 'Part of translatable page $1.',
	'pt-deletepage-lang-logreason' => 'Part of translation page $1.',
	'pt-deletepage-started' => 'Please check the [[Special:Log/pagetranslation|page translation log]] for errors and completion message.',

	'pt-deletepage-intro' => 'This special page allows you delete whole translatable pages or translations into one language.
The delete action will not be instant, because many pages will need to be deleted.
Failures will be logged in the [[Special:Log/pagetranslation|page translation log]] and they need to be repaired by hand.',

);

/** Message documentation (Message documentation)
 * @author Darth Kule
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Mormegil
 * @author Nemo bis
 * @author Nike
 * @author Purodha
 * @author Siebrand
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'pagetranslation' => 'Title of [[Special:PageTranslation]] and its name in [[Special:SpecialPages]]. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'right-pagetranslation' => '{{doc-right|pagetranslation}}',
	'tpt-desc' => '{{desc}}',
	'tpt-section' => '[[File:Page_translation_mark_view.png|thumb|Page translation]]
<code>$1</code> is the number of the unit. A screenshot of the translation administration page is available.',
	'tpt-section-new' => '[[File:Page_translation_mark_view.png|thumb|Page translation]]
<code>$1</code> is the number of the unit. A screenshot of the translation administration page is available.',
	'tpt-sections-oldnew' => '"New and existing" refers to the sum of: (a) new translation units in a translatable page, plus (b) the already existing ones from previous version of a translatable page.',
	'tpt-sections-template' => '[[File:Page_translation_mark_view.png|thumb|Page translation]]
The template used by translations of the translatable page, extracted from the source text. Shown on the translation administration page; a screenshot is available.',
	'tpt-saveok' => '$1 is a page title,
$2 is a count of sections which can be used with PLURAL,
$3 is an URL.',
	'tpt-mark-summary' => 'This message is used as an edit summary.',
	'tpt-new-pages-title' => 'Header in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-old-pages-title' => 'Header in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-other-pages-title' => 'Header in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-discouraged-pages-title' => 'Header in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-new-pages' => '$1 is the number of pages in the following list. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-old-pages' => 'The words "some version" refer to "one version of the page", or "a single version of each of the pages", respectively. Each page can have either one or none of its versions marked for translaton. $1 is the number of pages [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-other-pages' => '$1 is the number of pages in the following list. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-discouraged-pages' => '$1 is the number of pages in the following list. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-select-prioritylangs' => 'Label for the input box to enter preferred languages',
	'tpt-select-prioritylangs-force' => 'Label for the checkbox to make the translation restriction',
	'tpt-select-prioritylangs-reason' => 'Label for the textbox to enter reason for restriction',
	'tpt-sections-prioritylangs' => 'Section title in [[Special:PageTranslation]]',
	'tpt-rev-mark' => 'Possible page action and link text in [[Special:PageTranslation]]. In parenthesis after page name. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-unmark' => 'Possible page action and link text in [[Special:PageTranslation]]. In parenthesis after page name. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-discourage' => 'Possible page action and link text in [[Special:PageTranslation]]. In parenthesis after page name. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-encourage' => 'Possible page action and link text in [[Special:PageTranslation]]. In parenthesis after page name. [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-mark-tooltip' => 'Tooltip for page action link text in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-unmark-tooltip' => 'Tooltip for page action link text in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-discourage-tooltip' => 'Tooltip for page action link text in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'tpt-rev-encourage-tooltip' => 'Tooltip for page action link text in [[Special:PageTranslation]] [[Image:Page translation admin view.png|thumb|Admin view]]',
	'translate-tag-markthisagain' => '"has changes" is to be understood as "has been altered/edited"',
	'translate-tag-hasnew' => '"has changes" is to be understood as "has been altered/edited"',
	'tpt-languages-legend' => 'The caption of a language selector displayed using <code>&lt;languages /&gt;</code>, e.g. on [[Project list]].',
	'tpt-languages-separator' => '{{optional}}',
	'tpt-languages-zero' => 'Tooltip for a link in &lt;language /> when language is included because it is a priority language, but translation does not yet exists. It links directly to the translation view.',
	'tpt-translation-restricted' => 'Error message shown to user when translation to a language which is restricted by translation admin.',
	'tpt-discouraged-language-force' => 'Warning shown along with group description if the language is prevented from translation for the selected language',
	'tpt-discouraged-language' => 'Warning shown along with group description if the language is discouraged from translation for the selected language',
	'pt-parse-open' => '"Translation template" is the structure of a translation page, where the place for the translations of each section is marked with a placeholder.',
	'pt-shake-multiple' => 'Each translation (=section) unit can only contain one marker.',
	'pt-shake-empty' => 'Translation unit (=section) is empty except for the translation marker (=<nowiki><!--T:1--></nowiki>)',
	'pt-log-header' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-name' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-mark' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-unmark' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-moveok' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-movenok' => 'Used on [[Special:Log/pagetranslation]]',
	'pt-log-priority-langs' => 'Used on [[Special:Log/pagetranslation]]. $3 is comma-separated list of languages.',
	'pt-log-priority-langs-force' => 'Used on [[Special:Log/pagetranslation]]. $3 is a comma-separated list of languages.',
	'pt-movepage-block-base-exists' => "'''base page''' refers to the untranslated version of the translatable page.",
	'pt-movepage-block-tp-exists' => 'translation page is a translated version of a translatable page',
	'pt-movepage-block-section-exists' => 'Section page is a translation of one section. Translation page consists of many translation sections.',
	'pt-movepage-block-subpage-exists' => 'Subpage is here any subpage of translation page, which is not a translated version of the translatable page.',
	'pt-movepage-reason' => '{{Identical|Reason}}',
	'pt-deletepage-action-check' => 'This is a button label. "List" is an imperative verb.',
	'pt-deletepage-current' => '{{Identical|Page name}}',
	'pt-deletepage-reason' => '{{Identical|Reason}}',
);

/** ꢱꣃꢬꢵꢯ꣄ꢡ꣄ꢬꢵ (ꢱꣃꢬꢵꢯ꣄ꢡ꣄ꢬꢵ)
 * @author MooRePrabu
 */
$messages['saz'] = array(
	'pt-movepage-current' => 'ꢂꢡ꣄ꢡꢵ ꢥꢵꢮ꣄',
	'pt-movepage-new' => 'ꢥꣁꢮ꣄ꢮꣁ ꢥꢵꢮ꣄',
);

/** Afrikaans (Afrikaans)
 * @author Ansumang
 * @author Naudefj
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'pagetranslation' => 'Bladsyvertaling',
	'right-pagetranslation' => 'Merk weergawes van bladsye vir vertaling',
	'tpt-desc' => 'Uitbreiding vir die vertaal van wikibladsye',
	'tpt-section' => 'Vertaaleenheid $1',
	'tpt-section-new' => 'Nuwe vertaaleenheid.
Naam: $1',
	'tpt-section-deleted' => 'Vertaaleenheid $1',
	'tpt-template' => 'Bladsysjabloon',
	'tpt-templatediff' => 'Die bladsysjabloon was gewysig.',
	'tpt-diff-old' => 'Vorige teks',
	'tpt-diff-new' => 'Nuwe teks',
	'tpt-submit' => 'Merk die weergawe vir vertaling',
	'tpt-sections-oldnew' => 'Nuwe en bestaande vertaaleenhede',
	'tpt-sections-deleted' => 'Verwyderde vertaaleenhede',
	'tpt-sections-template' => 'Vertaalbladsjabloon',
	'tpt-action-nofuzzy' => 'Het vertalings ongeldig nie',
	'tpt-badtitle' => "Die naam verskaf ($1) is nie 'n geldige bladsynaam nie",
	'tpt-nosuchpage' => 'Bladsy $1 bestaan nie.',
	'tpt-oldrevision' => '$2 is nie die nuutste weergawe van die bladsy [[$1]] nie.
Slegs die nuutste weergawe kan vir vertaling gemerk word.',
	'tpt-notsuitable' => 'Die bladsy $1 is nie geskik om vir vertaling gemerk te word nie.
Sorg dat dit die etiket <nowiki><translate></nowiki> bevat en dat die sintaks daarvan korrek is.',
	'tpt-saveok' => 'Die bladsy [[$1]] is gemerk vir vertaling met $2 uitstaande {{PLURAL:$2|vertaaleenheid|vertaaleenhede}}.
Die bladsy kan nou <span class="plainlinks">[$3 vertaal]</span> word.',
	'tpt-badsect' => '"$1" is nie \'n geldige naam vir vertaaleenheid $2 nie.',
	'tpt-showpage-intro' => 'Hieronder word nuwe, bestaande en verwyderde afdelings gelys.
Alvorens u die weergawe vir vertaling merk, maak seker dat die veranderinge geminimeer word om onnodig werk vir vertalers te voorkom.',
	'tpt-mark-summary' => 'Merk die weergawe vir vertaling',
	'tpt-edit-failed' => 'Die bladsy "$1" kon nie bygewerk word nie.',
	'tpt-already-marked' => 'Die nuutste weergawe van die bladsy is reeds gemerk vir vertaling.',
	'tpt-unmarked' => 'Bladsy $1 is nie meer vir vertaling gemerk nie.',
	'tpt-list-nopages' => 'Geen bladsye is vir vertaling gemerk of is reg om vir vertaling gemerk te word nie.',
	'tpt-old-pages-title' => 'Bladsye in vertaling',
	'tpt-other-pages-title' => 'Gebreekte bladsye',
	'tpt-discouraged-pages-title' => 'ontmoedig bladsye',
	'tpt-new-pages' => 'Hierdie {{PLURAL:$1|bladsy bevat|bladsye bevat}} teks met vertalings-etikette, maar geen weergawe van die {{PLURAL:$1|bladsy|bladsye}} is vir vertaling gemerk nie.',
	'tpt-old-pages' => "'n Weergawe van die {{PLURAL:$1|bladsy|bladsye}} is reeds vir vertaling gemerk.",
	'tpt-rev-mark' => 'merk vir vertaling',
	'tpt-rev-unmark' => 'verwyder van vertaling',
	'tpt-rev-discourage' => 'ontmoedig',
	'tpt-rev-encourage' => 'herstel',
	'tpt-rev-mark-tooltip' => 'Merk die nuutste weergawe van hierdie bladsy vir vertaling.',
	'tpt-rev-unmark-tooltip' => 'Verwyder hierdie bladsy van die vertaling.',
	'tpt-rev-discourage-tooltip' => 'Ontmoedig verdere vertalings van hierdie bladsy.',
	'tpt-rev-encourage-tooltip' => 'Herstel hierdie bladsy na normaal vertaling.',
	'translate-tag-translate-link-desc' => 'Vertaal die bladsy',
	'translate-tag-markthis' => 'Merk die bladsy vir vertaling',
	'translate-tag-markthisagain' => 'Hierdie bladsy is <span class="plainlinks">[$1 kere gewysig]</span> sedert dit laas <span class="plainlinks">[$2 vir vertaling gemerk was]</span>.',
	'translate-tag-hasnew' => 'Daar is <span class="plainlinks">[$1 wysigings]</span> aan die bladsy gemaak wat nie vir vertaling gemerk is nie.',
	'tpt-translation-intro' => 'Die bladsy is \'n <span class="plainlinks">[$1 vertaalde weergawe]</span> van bladsy [[$2]]. Die vertaling van die bladsy is $3% voltooi.',
	'tpt-translation-intro-fuzzy' => 'Verouderde vertalings word so weergegee.',
	'tpt-languages-legend' => 'Ander tale:',
	'tpt-target-page' => "Hierdie bladsy kan nie handmatig gewysig word nie.
Die bladsy is 'n vertaling van die bladsy [[$1]].
Die vertaling kan bygewerk word via die [$2 vertaalgereedskap].",
	'tpt-unknown-page' => 'Hierdie naamruimte is gereserveer vir die vertalings van bladsye.
Die bladsy wat u probeer wysig kom nie ooreen met een wat vir vertaling gemerk is nie.',
	'tpt-render-summary' => "Besig met bewerkings vanweë 'n nuwe basisweergawe van die bronblad",
	'tpt-download-page' => 'Eksporteer bladsy met vertalings',
	'pt-shake-empty' => 'Leë afdeling vir merker $1.',
	'pt-movepage-reason' => 'Rede:',
	'pt-deletepage-current' => 'Bladsynaam:',
	'pt-deletepage-reason' => 'Rede:',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 * @author ترجمان05
 * @author روخو
 */
$messages['ar'] = array(
	'pagetranslation' => 'ترجمة صفحة',
	'right-pagetranslation' => 'عّلم نسخًا م هذه الصفحة للترجمة',
	'tpt-desc' => 'امتداد لترجمة محتويات الصفحات',
	'tpt-section' => 'وحدة الترجمة $1',
	'tpt-section-new' => 'وحدة ترجمة جديدة.
الاسم: $1',
	'tpt-section-deleted' => 'وحدة الترجمة $1',
	'tpt-template' => 'قالب صفحة',
	'tpt-templatediff' => 'تغيّر قالب الصفحة.',
	'tpt-diff-old' => 'نص سابق',
	'tpt-diff-new' => 'نص جديد',
	'tpt-submit' => 'علّم هذه النسخة للترجمة',
	'tpt-sections-oldnew' => 'وحدات الترجمة الجديدة والموجودة',
	'tpt-sections-deleted' => 'وحدات الترجمة المحذوفة',
	'tpt-sections-template' => 'قالب صفحة ترجمة',
	'tpt-badtitle' => 'اسم الصّفحة المعطى ($1) ليس عنوانا صحيحا',
	'tpt-nosuchpage' => 'الصفحة $1 غير موجودة',
	'tpt-oldrevision' => '$2 ليست آخر نسخة للصّفحة [[$1]].
فقط آخر النسخ يمكن أن تؤشّر للترجمة.',
	'tpt-notsuitable' => 'الصفحة $1 غير مناسبة للترجمة.
تأكد أن لها وسم <nowiki><translate></nowiki> وأن لها صياغة صحيحة.',
	'tpt-saveok' => 'الصفحة [[$1]] تم التعليم عليها للترجمة ب $2 {{PLURAL:$2|وحدة ترجمة|وحدات ترجمة}}.
الصفحة يمكن الآن <span class="plainlinks">[$3 ترجمتها]</span>.',
	'tpt-badsect' => '"$1" ليس اسمًا صحيحًا لوحدة الترجمة $2.',
	'tpt-showpage-intro' => 'أدناه تُسرد الأقسام الجديدة والموجودة والمحذوفة.
قبل تعليم هذه النسخة للترجمة، تحقق من أن التغييرات على الأقسام مُقلّلة لتفادي العمل غير الضروري من المترجمين.',
	'tpt-mark-summary' => 'علَّم هذه النسخة للترجمة',
	'tpt-edit-failed' => 'تعذّر تحديث الصفحة: $1',
	'tpt-already-marked' => 'آخر نسخة من هذه الصفحة مُعلّمة بالفعل للترجمة.',
	'tpt-unmarked' => 'الصفحة $1 لم تعد مُعلّمة للترجمة',
	'tpt-list-nopages' => 'لا صفحات مُعلّمة للترجمة أو جاهزة للتعليم للترجمة.',
	'tpt-new-pages' => '{{PLURAL:$1|هذه الصفحة تحتوي|هذه الصفحات تحتوي}} على نص بوسوم ترجمة، لكن لا نسخة من {{PLURAL:$1|هذه الصفحة|هذه الصفحات}} معلمة حاليا للترجمة.',
	'tpt-old-pages' => 'إحدى نسخ {{PLURAL:$1||هذه الصفحة|هاتان الصفحتان|هذه الصفحات}} عُلّمت للترجمة.',
	'tpt-rev-unmark' => 'إزالة هذه الصفحة من الترجمة',
	'tpt-rev-encourage' => 'استرجع',
	'translate-tag-translate-link-desc' => 'ترجم هذه الصفحة',
	'translate-tag-markthis' => 'علّم هذه الصفحة للترجمة',
	'translate-tag-markthisagain' => 'هذه الصفحة بها <span class="plainlinks">[$1 تغيير]</span> منذ تم <span class="plainlinks">[$2 تعليمها للترجمة]</span> لآخر مرة.',
	'translate-tag-hasnew' => 'هذه الصفحة تحتوي على <span class="plainlinks">[$1 تغييرات]</span> غير معلمة للترجمة.',
	'tpt-translation-intro' => 'هذه الصفحة هي <span class="plainlinks">[$1 نسخة مترجمة]</span> لصفحة [[$2]] والترجمة مكتملة ومحدثة بنسبة $3%.',
	'tpt-translation-intro-fuzzy' => 'الترجمات غير المُحدّثة مُعلّمة بما يشبه هذه.',
	'tpt-languages-legend' => 'لغات أخرى:',
	'tpt-target-page' => 'لا يمكن تحديث هذه الصفحة يدويًا.
هذه الصفحة ترجمة لصفحة [[$1]] ويمكن تحديث الترجمة باستخدام [$2 أداة الترجمة].',
	'tpt-unknown-page' => 'هذا النطاق محجوز لترجمات صفحات المحتوى.
الصفحة التي تحاول تعديلها لا يبدو أنها تتبع أي صفحة معلمة للترجمة.',
	'tpt-render-summary' => 'تحديث لمطابقة نسخة صفحة المصدر الجديدة',
	'tpt-download-page' => 'صدّر الصفحة مع الترجمات',
	'pt-log-mark' => '{{GENDER:$2|marked}} تنقيح $3 صفحة "[[:$1]]" ل الترجمة',
	'pt-log-movenok' => '{{GENDER:$2|encountered}} خطأ اثناء النقل [[:$1]] to [[:$3]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|completed}} شطب صفحة الترجمة $1',
	'pt-movepage-block-tp-exists' => 'صفحة الهدف المترجمة [[:$2]] موجودة.',
	'pt-movepage-list-pages' => 'قائمة الصفحات التي ستنقل',
	'pt-movepage-list-translation' => 'صفحات الترجمة',
	'pt-movepage-list-other' => 'صفحات فرعية أخرى',
	'pt-movepage-current' => 'الاسم الحالي:',
	'pt-movepage-new' => 'الاسم الجديد:',
	'pt-movepage-reason' => 'السبب:',
	'pt-movepage-subpages' => 'انقل جميع الصفحات الفرعية',
	'pt-movepage-action-check' => 'تحقق اذا كان النقل ممكنا',
	'pt-movepage-action-perform' => 'لا تنقل',
	'pt-movepage-action-other' => 'تغيير الهدف',
	'pt-deletepage-current' => 'اسم الصفحة:',
	'pt-deletepage-reason' => 'السبب:',
	'pt-deletepage-list-translation' => 'صفحات الترجمة',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'pagetranslation' => 'ܬܘܪܓܡܐ ܕܦܐܬܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'pagetranslation' => 'ترجمه صفحة',
	'right-pagetranslation' => 'عّلم نسخًا م هذه الصفحه للترجمة',
	'tpt-desc' => 'امتداد لترجمه محتويات الصفحات',
	'tpt-section' => 'وحده الترجمه $1',
	'tpt-section-new' => 'وحده ترجمه جديده.
الاسم: $1',
	'tpt-section-deleted' => 'وحده الترجمه $1',
	'tpt-template' => 'قالب صفحة',
	'tpt-templatediff' => 'تغيّر قالب الصفحه.',
	'tpt-diff-old' => 'نص سابق',
	'tpt-diff-new' => 'نص جديد',
	'tpt-submit' => 'علّم هذه النسخه للترجمة',
	'tpt-sections-oldnew' => 'وحدات الترجمه الجديده والموجودة',
	'tpt-sections-deleted' => 'وحدات الترجمه المحذوفة',
	'tpt-sections-template' => 'قالب صفحه ترجمة',
	'tpt-badtitle' => 'اسم الصّفحه المعطى ($1) ليس عنوانا صحيحا',
	'tpt-oldrevision' => '$2 ليست آخر نسخه للصّفحه [[$1]].
فقط آخر النسخ يمكن أن تؤشّر للترجمه.',
	'tpt-notsuitable' => 'الصفحه $1 غير مناسبه للترجمه.
تأكد أن لها وسم <nowiki><translate></nowiki> وأن لها صياغه صحيحه.',
	'tpt-saveok' => 'الصفحه [[$1]] تم التعليم عليها للترجمه ب $2 {{PLURAL:$2|وحده ترجمة|وحدات ترجمة}}.
الصفحه يمكن الآن <span class="plainlinks">[$3 ترجمتها]</span>.',
	'tpt-badsect' => '"$1" ليس اسمًا صحيحًا لوحده الترجمه $2.',
	'tpt-showpage-intro' => 'أدناه تُسرد الأقسام الجديده والموجوده والمحذوفه.
قبل تعليم هذه النسخه للترجمه، تحقق من أن التغييرات على الأقسام مُقلّله لتفادى العمل غير الضرورى من المترجمين.',
	'tpt-mark-summary' => 'علَّم هذه النسخه للترجمة',
	'tpt-edit-failed' => 'تعذّر تحديث الصفحة: $1',
	'tpt-already-marked' => 'آخر نسخه من هذه الصفحه مُعلّمه بالفعل للترجمه.',
	'tpt-list-nopages' => 'لا صفحات مُعلّمه للترجمه أو جاهزه للتعليم للترجمه.',
	'tpt-new-pages' => '{{PLURAL:$1|هذه الصفحه تحتوي|هذه الصفحات تحتوي}} على نص بوسوم ترجمه، لكن لا نسخه من {{PLURAL:$1|هذه الصفحة|هذه الصفحات}} معلمه حاليا للترجمه.',
	'tpt-old-pages' => 'إحدى نسخ {{PLURAL:$1||هذه الصفحة|هاتان الصفحتان|هذه الصفحات}} عُلّمت للترجمه.',
	'translate-tag-translate-link-desc' => 'ترجمه هذه الصفحة',
	'translate-tag-markthis' => 'علّم هذه الصفحه للترجمة',
	'translate-tag-markthisagain' => 'هذه الصفحه بها <span class="plainlinks">[$1 تغيير]</span> منذ تم <span class="plainlinks">[$2 تعليمها للترجمة]</span> لآخر مره.',
	'translate-tag-hasnew' => 'هذه الصفحه تحتوى على <span class="plainlinks">[$1 تغييرات]</span> غير معلمه للترجمه.',
	'tpt-translation-intro' => 'هذه الصفحه هى <span class="plainlinks">[$1 نسخه مترجمة]</span> لصفحه [[$2]] والترجمه مكتمله ومحدثه بنسبه $3%.',
	'tpt-translation-intro-fuzzy' => 'الترجمات غير المُحدّثه مُعلّمه هكذا.',
	'tpt-languages-legend' => 'لغات أخرى:',
	'tpt-target-page' => 'لا يمكن تحديث هذه الصفحه يدويًا.
هذه الصفحه ترجمه لصفحه [[$1]] ويمكن تحديث الترجمه باستخدام [$2 أداه الترجمة].',
	'tpt-unknown-page' => 'هذا النطاق محجوز لترجمات صفحات المحتوى.
الصفحه التى تحاول تعديلها لا يبدو أنها تتبع أى صفحه معلمه للترجمه.',
	'tpt-render-summary' => 'تحديث لمطابقه نسخه صفحه المصدر الجديدة',
	'tpt-download-page' => 'صدّر الصفحه مع الترجمات',
);

/** Assamese (অসমীয়া)
 * @author Chaipau
 */
$messages['as'] = array(
	'pagetranslation' => 'পৃষ্ঠা ভাঙনি',
	'tpt-template' => 'পৃষ্ঠা সাঁচ',
	'tpt-diff-old' => 'আগৰ পাঠ্য',
	'tpt-diff-new' => 'নতুন পাঠ্য',
	'tpt-submit' => 'এই সংস্কৰণ ভাঙনিৰ বাবে বাচক',
	'translate-tag-translate-link-desc' => 'এই পৃষ্ঠা ভাঙনি কৰক',
	'tpt-languages-legend' => 'অন্য ভাষা:',
	'pt-movepage-list-translation' => 'ভাঙনি পৃষ্ঠাসমূহ',
	'pt-movepage-current' => 'সাম্প্ৰতিক নাম:',
	'pt-movepage-new' => 'নতুন নাম:',
	'pt-movepage-reason' => 'কাৰণ:',
	'pt-movepage-action-perform' => 'স্থানান্তৰ নকৰিব',
);

/** Asturian (Asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'pagetranslation' => 'Traducción de páxines',
	'right-pagetranslation' => 'Marcar versiones de páxines pa traducir',
	'tpt-desc' => 'Estensión pa traducir páxines de conteníu',
	'tpt-section' => 'Unidá de traducción $1',
	'tpt-section-new' => 'Nueva unidá de traducción.
Nome: $1',
	'tpt-section-deleted' => 'Unidá de traducción $1',
	'tpt-template' => 'Plantía de páxina',
	'tpt-templatediff' => 'La plantía de páxina camudó.',
	'tpt-diff-old' => 'Testu anterior',
	'tpt-diff-new' => 'Testu nuevu',
	'tpt-submit' => 'Marcar esta versión pa traducir',
	'tpt-sections-oldnew' => 'Unidaes de traducción nueves e esistentes',
	'tpt-sections-deleted' => 'Unidaes de traducción desaniciaes',
	'tpt-sections-template' => 'Plantía de páxina de traducción',
	'tpt-action-nofuzzy' => 'Nun invalidar les traducciones',
	'tpt-badtitle' => 'El nome que-y disti a la páxina ("$1") nun ye un títulu válidu',
	'tpt-nosuchpage' => 'La páxina $1 nun esiste',
	'tpt-oldrevision' => '$2 nun y la cabera versión de la páxina [[$1]].
Sólo les caberes versiones se puen marcar pa traducir.',
	'tpt-notsuitable' => 'La páxina "$1" nun ye válida pa traducir.
Comprueba que tenga les etiquetes <nowiki><translate></nowiki> y una sintaxis válida.',
	'tpt-saveok' => 'A páxina [[$1]] marcose pa traducir con {{PLURAL:$2|una unidá de traducción|$2 unidaes de traducción}}.
La páxina agora se pue <span class="plainlinks">[$3 traducir]</span>.',
	'tpt-badsect' => '"$1" nun ye un nome válidu pa la unidá de traducción $2.',
	'tpt-showpage-intro' => 'Abaxo ta la llista de les seiciones nueves, esistentes y desaniciaes.
Enantes de marcar esta versión pa traducir, comprueba que los cambios fechos nes seiciones tan amenorgaos pa evitar trabayu innecesariu de los traductores.',
	'tpt-mark-summary' => 'Marcó esta versión pa traducir',
	'tpt-edit-failed' => 'Nun se pudo anovar la páxina: $1',
	'tpt-already-marked' => "La cabera versión d'esta páxina yá se marcó pa traducir.",
	'tpt-unmarked' => 'La páxina "$1" yá nun ta marcada pa traducir.',
	'tpt-list-nopages' => 'Nun hai páxina dala marcada pa traducir nin preparada pa marcase pa traducir.',
	'tpt-new-pages-title' => 'Páxines propuestes pa traducción',
	'tpt-old-pages-title' => 'Páxines en traducción',
	'tpt-other-pages-title' => 'Páxines frañaes',
	'tpt-discouraged-pages-title' => 'Páxines desaconseyaes',
	'tpt-new-pages' => "{{PLURAL:$1|Esta páxina contién|Estes páxines contienen}} testu con etiquetes de traducción, pero denguna versión {{PLURAL:$1|d'esta páxina|d'estes páxines}} ta marcada pa traducir anguaño.",
	'tpt-old-pages' => "Dalguna versión {{PLURAL:$1|d'esta páxina|d'estes páxines}} se marcó pa traducir.",
	'tpt-other-pages' => "Hai {{PLURAL:$1|una versión vieya d'esta páxina marcada|delles versiones vieyes d'estes páxines marcaes}} pa traducir, pero {{PLURAL:$1|a cabera versión|les caberes versiones}} nun se {{PLURAL:$1|pue|pueden}} marcar pa traducir.",
	'tpt-discouraged-pages' => "Ta desaconseyao facer más traducciones {{PLURAL:$1|d'esta páxina|d'estes páxines}}.",
	'tpt-rev-mark' => 'marcar pa traducir',
	'tpt-rev-unmark' => 'desaniciar de la traducción',
	'tpt-rev-discourage' => 'desaconseyar',
	'tpt-rev-encourage' => 'restaurar',
	'tpt-rev-mark-tooltip' => "Marcar la cabera versión d'esta páxina pa traducir.",
	'tpt-rev-unmark-tooltip' => 'Desaniciar esta páxina de la traducción.',
	'tpt-rev-discourage-tooltip' => "Desaconseyar más traducciones d'esta páxina.",
	'tpt-rev-encourage-tooltip' => 'Restaurar esta páxina a traducción normal.',
	'translate-tag-translate-link-desc' => 'Traducir esta páxina',
	'translate-tag-markthis' => 'Marcar esta páxina pa traducir',
	'translate-tag-markthisagain' => 'Esta páxina tien <span class="plainlinks">[$1 cambios]</span> dende que se <span class="plainlinks">[$2 marcó pa traducir]</span> la última vegada.',
	'translate-tag-hasnew' => 'Esta páxina contién <span class="plainlinks">[$1 cambios]</span> que nun tan marcaos pa traducir.',
	'tpt-translation-intro' => 'Esta páxina ye una <span class="plainlinks">[$1 versión traducida]</span> de la páxina «[[$2]]» y la traducción ta completada nún $3%.',
	'tpt-translation-intro-fuzzy' => "Les traducciones desfasaes tan marcaes d'esta manera.",
	'tpt-languages-legend' => 'Otres llingües:',
	'tpt-target-page' => 'Esta páxina nun se pue anovar manualmente.
Esta páxina ye una traducción de la páxina [[$1]] y la traducción pue anovase usando [$2 la ferramienta de traducción].',
	'tpt-unknown-page' => 'Esti espaciu de nomes ta acutáu pa les traducciones de les páxines de conteníu.
La páxina que tas intentando editar paez que nun correspuende con denguna páxina marcada pa traducir.',
	'tpt-render-summary' => 'Anovando pa casar cola nueva versión de la páxina orixinal',
	'tpt-download-page' => 'Esportar la páxina con traducciones',
	'pt-parse-open' => 'Etiqueta &lt;translate> desequilibrada.
Plantía de traducción: <pre>$1</pre>',
	'pt-parse-close' => 'Etiqueta &lt;/translate> desequilibrada.
Plantía de traducción: <pre>$1</pre>',
	'pt-parse-nested' => 'Nun se permiten seiciones &lt;translate> añeraes.
Testu de la etiqueta: <pre>$1</pre>',
	'pt-shake-multiple' => 'Marcadores de seición múltiples pa una seición.
Testu de la seición: <pre>$1</pre>',
	'pt-shake-position' => 'Marcadores de seición en posición inesperada.
Testu de la seición: <pre>$1</pre>',
	'pt-shake-empty' => 'Seición balera pal marcador $1.',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'tpt-diff-new' => 'Yeni mətn',
	'pt-movepage-new' => 'Yeni ad:',
	'pt-movepage-reason' => 'Səbəb:',
	'pt-deletepage-current' => 'Səhifə adı:',
	'pt-deletepage-reason' => 'Səbəb:',
);

/** Bashkir (Башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'pt-movepage-list-other' => 'Башҡа эске биттәр',
	'pt-movepage-legend' => 'Тәржемә итеп булған биттәрҙең исемен үҙгәртергә',
	'pt-movepage-current' => 'Хәҙерге исеме:',
	'pt-movepage-new' => 'Яңы исеме:',
	'pt-movepage-reason' => 'Сәбәп:',
	'pt-movepage-subpages' => 'Бар эске биттәрҙең исемен үҙгәртергә',
	'pt-movepage-action-perform' => 'Исемен үҙгәртергә',
	'pt-movepage-action-other' => 'Маҡсатты үҙгәртергә',
	'pt-deletepage-action-check' => 'Юйыласаҡ биттәр исемлеге',
	'pt-deletepage-action-perform' => 'Юйырға',
	'pt-deletepage-action-other' => 'Маҡсатты үҙгәртергә',
	'pt-deletepage-lang-legend' => 'Тәржемә битен юйырға',
	'pt-deletepage-full-legend' => 'Тәржемә итеп булған битте юйырға',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'pagetranslation' => 'Seiten ywersétzen',
	'right-pagetranslation' => "Seitenversión fyr d' Ywersétzung markirn",
	'tpt-desc' => 'Daméglichts Ywersétzen voh Inhoidsseiten',
	'tpt-section' => 'Ywersétzungsoahheit $1',
	'tpt-section-new' => 'Neiche Ywersétzungsoahheit. Nåm $1',
	'tpt-section-deleted' => 'Ywersétzungsoahheit $1',
	'tpt-template' => 'Seitenvurlog',
	'tpt-templatediff' => 'Dé Seitenvurlog hod sé gänderd.',
	'tpt-diff-old' => 'Vuriger Text',
	'tpt-diff-new' => 'Neicher Text',
	'tpt-submit' => 'Dé Versión do zur Ywersétzung markirn',
	'tpt-sections-oldnew' => 'Neiche und vurhånderne Ywersétzungsoahheiten',
	'tpt-sections-deleted' => 'Gléschde Ywersétzungsoahheiten',
	'tpt-sections-template' => 'Ywersétzungsseitenvurlog',
	'tpt-action-nofuzzy' => "Sétz d' Ywersétzungen néd ausser Kroft",
	'tpt-badtitle' => 'Da ågeewerne Seitennåm „$1“ is koah gütiger Titl néd',
	'tpt-nosuchpage' => 'Dé Seiten $1 existird néd',
	'tpt-oldrevision' => "$2 is néd d' létzde Versión voh derer Seiten [[$1]].
Netter d' létzde Versión kå zur Ywersétzung markird wern.",
	'tpt-notsuitable' => 'Dé Seiten $1 is néd zum Ywersétzen geignet.
Stö sicher, daas a <nowiki><translate></nowiki>-Tag und gütige Syntax vawendt werd.',
	'tpt-languages-legend' => 'Ånderne Sproochen:',
	'pt-deletepage-any-legend' => 'Ywersétzbore óder ywersétzde Seiten léschen',
	'pt-deletepage-current' => 'Seitennåm',
	'pt-deletepage-reason' => 'Grund:',
	'pt-deletepage-subpages' => 'Olle Unterseiten léschen',
	'pt-deletepage-list-pages' => "Listen voh dé z' léschenden Seiten",
	'pt-deletepage-list-translation' => 'Ywersétzde Seiten',
	'pt-deletepage-list-section' => 'Obschnitsseiten',
	'pt-deletepage-list-other' => 'Weiderne Unterseiten',
	'pt-deletepage-list-count' => "Insgsåmt gibts $1 z' léschende {{PLURAL:$1|Seiten|Seiten}}.",
	'pt-deletepage-full-logreason' => 'Teil voh da ywersétzborn Seiten $1.',
	'pt-deletepage-lang-logreason' => 'Teil voh da ywersétzden Seiten $1.',
	'pt-deletepage-started' => "Bittscheh 's [[Special:Log/pagetranslation|Ywersétzungs-Logbuach]] noch Feelern und Ausfiarungsnoochrichten priaffm.",
);

/** Belarusian (Беларуская)
 * @author Тест
 */
$messages['be'] = array(
	'pt-movepage-reason' => 'Прычына:',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Renessaince
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'pagetranslation' => 'Пераклад старонкі',
	'right-pagetranslation' => 'пазначаць вэрсіяў старонак для перакладу',
	'tpt-desc' => 'Пашырэньне для перакладу старонак зьместу',
	'tpt-section' => 'Адзінка перакладу $1',
	'tpt-section-new' => 'Новая адзінка перакладу. Назва: $1',
	'tpt-section-deleted' => 'Адзінка перакладу $1',
	'tpt-template' => 'Старонка шаблёну',
	'tpt-templatediff' => 'Старонка шаблёну была зьменена.',
	'tpt-diff-old' => 'Папярэдні тэкст',
	'tpt-diff-new' => 'Новы тэкст',
	'tpt-submit' => 'Пазначыць гэту вэрсію для перакладу',
	'tpt-sections-oldnew' => 'Новыя і існуючыя адзінкі перакладу',
	'tpt-sections-deleted' => 'Выдаленыя адзінкі перакладу',
	'tpt-sections-template' => 'Шаблён старонкі перакладу',
	'tpt-action-nofuzzy' => 'Не бракаваць пераклады',
	'tpt-badtitle' => 'Пададзеная назва старонкі ($1) не зьяўляецца слушнай',
	'tpt-nosuchpage' => 'Старонка $1 не існуе',
	'tpt-oldrevision' => '$2 не зьяўляецца апошняй вэрсіяй старонкі [[$1]].
Толькі апошнія вэрсіі могуць пазначацца для перакладу.',
	'tpt-notsuitable' => 'Старонка $1 ня можа быць перакладзеная.
Упэўніцеся, што яна ўтрымлівае тэгі <nowiki><translate></nowiki> і мае слушны сынтаксіс.',
	'tpt-saveok' => 'Старонка «$1» была пазначаная для перакладу з $2 {{PLURAL:$2|адзінкай перакладу|адзінкамі перакладу|адзінкамі перакладу}}.
Зараз старонка можа быць <span class="plainlinks">[$3 перакладзеная]</span>.',
	'tpt-badsect' => '«$1» не зьяўляецца слушнай назвай для адзінкі перакладу $2.',
	'tpt-showpage-intro' => 'Ніжэй знаходзяцца новыя, існуючыя і выдаленыя сэкцыі.
Перад пазначэньнем гэтай вэрсіі для перакладу, праверце зьмены ў сэкцыях для таго, каб пазьбегнуць непатрэбнай працы для перакладчыкаў.',
	'tpt-mark-summary' => 'Пазначыў гэтую вэрсію для перакладу',
	'tpt-edit-failed' => 'Немагчыма абнавіць старонку: $1',
	'tpt-duplicate' => 'Назва адзінкі перакладу «$1» скарыстаная больш за адзін раз.',
	'tpt-already-marked' => 'Апошняя вэрсія гэтай старонкі ўжо была пазначана для перакладу.',
	'tpt-unmarked' => 'Старонка $1 болей не пазначаная для перакладу.',
	'tpt-list-nopages' => 'Старонкі для перакладу не пазначаныя альбо не падрыхтаваныя.',
	'tpt-new-pages-title' => 'Старонкі, прапанаваныя да перакладу',
	'tpt-old-pages-title' => 'Старонкі на стадыі перакладу',
	'tpt-other-pages-title' => 'Сапсаваныя старонкі',
	'tpt-discouraged-pages-title' => 'Адхіленыя старонкі',
	'tpt-new-pages' => '{{PLURAL:$1|Гэта старонка ўтрымлівае|Гэтыя старонкі ўтрымліваюць}} тэкст з тэгамі перакладу, але {{PLURAL:$1|пазначанай для перакладу вэрсіі гэтай старонкі|пазначаных для перакладу вэрсіяў гэтых старонак}} няма.',
	'tpt-old-pages' => 'Некаторыя вэрсіі {{PLURAL:$1|гэтай старонкі|гэтых старонак}} былі пазначаны для перакладу.',
	'tpt-other-pages' => '{{PLURAL:$1|Старая вэрсія гэтай старонкі пазначаная|Старыя вэрсіі гэтых старонак пазначаныя}} для перакладу, але {{PLURAL:$1|апошняя вэрсія ня можа быць пазначаная|апошнія вэрсіі ня могуць быць пазначаныя}} для перакладу.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Гэтай старонцы|Гэтым старонкам}} было адхілена ў далейшым перакладзе.',
	'tpt-rev-mark' => 'пазначыць да перакладу',
	'tpt-rev-unmark' => 'выдаліць зь перакладу',
	'tpt-rev-discourage' => 'адхіліць',
	'tpt-rev-encourage' => 'аднавіць',
	'tpt-rev-mark-tooltip' => 'Пазначыць апошнюю вэрсію старонкі да перакладу.',
	'tpt-rev-unmark-tooltip' => 'Выдаліць гэтую старонку зь перакладу.',
	'tpt-rev-discourage-tooltip' => 'Адхіліць далейшыя пераклады гэтай старонкі.',
	'tpt-rev-encourage-tooltip' => 'Аднавіць гэтую старонку да звычайнага перакладу.',
	'translate-tag-translate-link-desc' => 'Перакласьці гэту старонку',
	'translate-tag-markthis' => 'Пазначыць гэту старонку для перакладу',
	'translate-tag-markthisagain' => 'Гэта старонка ўтрымлівае <span class="plainlinks">[$1 зьмены]</span> пасьля апошняй <span class="plainlinks">[$2 пазнакі для перакладу]</span>.',
	'translate-tag-hasnew' => 'Гэта старонка ўтрымлівае <span class="plainlinks">[$1 зьмены]</span> не пазначаныя для перакладу.',
	'tpt-translation-intro' => 'Гэтая старонка — <span class="plainlinks">[$1 перакладзеная вэрсія]</span> старонкі [[$2]]. Пераклад завершаны на $3%.',
	'tpt-translation-intro-fuzzy' => 'Гэтак пазначаныя састарэлыя пераклады.',
	'tpt-languages-legend' => 'Іншыя мовы:',
	'tpt-target-page' => 'Гэта старонка ня можа быць абноўлена ўручную.
Гэта старонка зьяўляецца перакладам старонкі [[$1]], пераклад можа быць абноўлены з выкарыстаньнем [$2 інструмэнта перакладу].',
	'tpt-unknown-page' => 'Гэта прастора назваў зарэзэрваваная для перакладаў старонак зьместу.
Старонка, якую Вы спрабуеце рэдагаваць, верагодна не зьвязана зь якой-небудзь старонкай пазначанай для перакладу.',
	'tpt-render-summary' => 'Абнаўленьне для адпаведнасьці новай вэрсіі крынічнай старонкі',
	'tpt-download-page' => 'Экспартаваць старонку з перакладамі',
	'pt-parse-open' => 'Незбалянсаваны тэг &lt;translate>.
Шаблён перакладу: <pre>$1</pre>',
	'pt-parse-close' => 'Незбалянсаваны тэг &lt;/translate>.
Шаблён перакладу: <pre>$1</pre>',
	'pt-parse-nested' => 'Укладзеныя сэкцыі &lt;translate> — недазволеныя.
Тэкст тэгу: <pre>$1</pre>',
	'pt-shake-multiple' => 'Некалькі маркераў сэкцыяў у адной сэкцыі.
Тэкст сэкцыі: <pre>$1</pre>',
	'pt-shake-position' => 'Меткі сэкцыі ў нечаканых пазыцыях.
Тэкст сэкцыі: <pre>$1</pre>',
	'pt-shake-empty' => 'Пустая сэкцыя для меткі $1.',
	'pt-log-header' => 'Журнал для дзеяньняў зьвязаных з сыстэмай перакладу старонак',
	'pt-log-name' => 'Журнал перакладу старонак',
	'pt-log-mark' => '{{GENDER:$2|пазначыў|пазначыла}} вэрсію $3 старонкі «[[:$1]]» для перакладу.',
	'pt-log-unmark' => '{{GENDER:$2|выдаліў|выдаліла}} метку перакладу са старонкі «[[:$1]]».',
	'pt-log-moveok' => '{{GENDER:$2|перайменаваў|перайменавала}} старонку да перакладу з $1 на $3',
	'pt-log-movenok' => '{{GENDER:$2|выклікаў|выклікала}} праблему пад час пераносу [[:$1]] у [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|зьдзейсьніў|зьдзейсьніла}} выдаленьне старонкі $1 якую магчыма перакласьці',
	'pt-log-delete-full-nok' => '{{GENDER:$2|атрымаў|атрымала}} памылку пры выдаленьні старонкі [[:$1]], якую магчыма перакласьці',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|зьдзейсьніў|зьдзейсьніла}} выдаленьне старонкі перакладу $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|атрымаў|атрымала}} памылку пры выдаленьні старонкі перакладу [[:$1]]',
	'pt-movepage-title' => 'Перанесьці старонку $1, якую магчыма перакласьці',
	'pt-movepage-blockers' => 'Немагчыма перанесьці старонкі, якія магчыма перакладаць, з-за {{PLURAL:$1|наступнай памылкі|наступных памылак}}:',
	'pt-movepage-block-base-exists' => 'Існуе мэтавая базавая старонка [[:$1]].',
	'pt-movepage-block-base-invalid' => 'Мэтавая базавая старонка мае няслушную назву.',
	'pt-movepage-block-tp-exists' => 'Мэтавая старонка перакладу [[:$2]] існуе.',
	'pt-movepage-block-tp-invalid' => 'Мэтавая назва старонкі да перакладу [[:$1]] будзе няслушнай (занадта доўгая?)',
	'pt-movepage-block-section-exists' => 'Мэтавая сэкцыя старонкі [[:$2]] існуе.',
	'pt-movepage-block-section-invalid' => 'Мэтавая назва сэкцыі старонкі [[:$1]] будзе няслушнай (занадта доўгая?).',
	'pt-movepage-block-subpage-exists' => 'Мэтавая падстаронка [[:$2]] існуе.',
	'pt-movepage-block-subpage-invalid' => 'Мэтавая назва падстаронкі [[:$1]] будзе няслушнай (занадта доўгая?).',
	'pt-movepage-list-pages' => 'Сьпіс старонак да пераносу',
	'pt-movepage-list-translation' => 'Старонкі да перакладу',
	'pt-movepage-list-section' => 'Старонкі сэкцыі',
	'pt-movepage-list-other' => 'Іншыя падстаронкі',
	'pt-movepage-list-count' => '$1 {{PLURAL:$1|старонка|старонкі|старонак}} для пераносу.',
	'pt-movepage-legend' => 'Перанесьці старонкі, якія магчыма перакласьці',
	'pt-movepage-current' => 'Цяперашняя назва:',
	'pt-movepage-new' => 'Новая назва:',
	'pt-movepage-reason' => 'Прычына:',
	'pt-movepage-subpages' => 'Перанесьці ўсе падстаронкі',
	'pt-movepage-action-check' => 'Праверыць, ці магчымы перанос',
	'pt-movepage-action-perform' => 'Перанесьці',
	'pt-movepage-action-other' => 'Зьмяніць мэту',
	'pt-movepage-intro' => 'Гэтая спэцыяльная старонка дазваляе пераносіць старонкі, пазначаныя да перакладу.
Перанос не адбудзецца імгненна, таму што спатрэбіцца пераносіць шмат старонак.
Падчас пераносу маніпуляцыя са старонкамі будзе немагчымая.
Усе памылкі падчас пераносу будуць занесеныя ў [[Special:Log/pagetranslation|журнал перакладу старонак]], і будзе патрэбная іх ручная апрацоўка.',
	'pt-movepage-logreason' => 'Частка старонкі $1, якую магчыма перакласьці.',
	'pt-movepage-started' => 'Асноўная старонка перанесеная.
Праверце [[Special:Log/pagetranslation|журнал перакладаў старонак]] наконт памылак і паведамленьня пра выкананьне.',
	'pt-locked-page' => 'Гэтая старонка заблякаваная з-за працэсу пераносу старонкі, якую магчыма перакласьці.',
	'pt-deletepage-lang-title' => 'Выдаленьне старонкі перакладу $1.',
	'pt-deletepage-full-title' => 'Выдаленьне старонкі $1, якую магчыма перакладаць.',
	'pt-deletepage-invalid-title' => 'Пазначаная няслушная старонка.',
	'pt-deletepage-invalid-text' => 'Пазначаная старонка не зьяўляецца старонкай, якія магчыма перакладаць, альбо перакладам.',
	'pt-deletepage-action-check' => 'Сьпіс старонак да выдаленьня',
	'pt-deletepage-action-perform' => 'Выканаць выдаленьне',
	'pt-deletepage-action-other' => 'Зьмяніць мэту',
	'pt-deletepage-lang-legend' => 'Выдаліць старонку перакладу',
	'pt-deletepage-full-legend' => 'Выдаліць старонку, якую магчыма перакладаць',
	'pt-deletepage-any-legend' => 'Выдаліць старонку, якую магчыма перакласьці, альбо перакладзеную старонку',
	'pt-deletepage-current' => 'Назва старонкі:',
	'pt-deletepage-reason' => 'Прычына:',
	'pt-deletepage-subpages' => 'Выдаліць усе падстаронкі',
	'pt-deletepage-list-pages' => 'Сьпіс старонак да выдаленьня',
	'pt-deletepage-list-translation' => 'Старонкі перакладаў',
	'pt-deletepage-list-section' => 'Старонкі сэкцыі',
	'pt-deletepage-list-other' => 'Іншыя падстаронкі',
	'pt-deletepage-list-count' => 'Агулам $1 {{PLURAL:$1|старонка|старонкі|старонак}} да выдаленьня.',
	'pt-deletepage-full-logreason' => 'Частка старонкі $1, якую магчыма перакласьці.',
	'pt-deletepage-lang-logreason' => 'Частка перакладзенай старонкі $1.',
	'pt-deletepage-started' => 'Калі ласка, праверце [[Special:Log/pagetranslation|старонку журнала перакладаў]] адносна памылак і паведамленьняў пра выкананьне.',
	'pt-deletepage-intro' => 'Гэтая спэцыяльная старонка дазваляе Вам выдаляць цэлыя старонкі, якія магчыма перакладаць, альбо перакладзеныя на іншыя мовы.
Выдаленьне не здарыцца хутка, таму што патрэбна выдаліць шмат старонак.
Памылкі будуць запратакаляваныя на [[Special:Log/pagetranslation|старонцы журналу перакладаў]] і патрабуюць выпраўленьня ўручную.',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'tpt-diff-old' => 'Предишен текст',
	'tpt-diff-new' => 'Нов текст',
	'translate-tag-translate-link-desc' => 'Превеждане на тази страница',
	'tpt-languages-legend' => 'Други езици:',
	'tpt-download-page' => 'Изнасяне на страница с преводите',
	'pt-movepage-list-other' => 'Други подстраници',
	'pt-movepage-current' => 'Текущо име:',
	'pt-movepage-new' => 'Ново име:',
	'pt-movepage-reason' => 'Причина:',
	'pt-movepage-subpages' => 'Преместване на всички подстраници',
	'pt-deletepage-reason' => 'Причина:',
	'pt-deletepage-subpages' => 'Изтриване на всички подстраници',
	'pt-deletepage-list-other' => 'Други подстраници',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'pagetranslation' => 'পাতা অনুবাদ',
	'tpt-diff-old' => 'পূর্বের লেখা',
	'tpt-diff-new' => 'নতুন লেখা',
	'translate-tag-translate-link-desc' => 'এই পাতা অনুবাদ করুন',
	'translate-tag-markthis' => 'অনুবাদের জন্য এই পাতা চিহ্নিত করুন',
	'tpt-languages-legend' => 'অন্য ভাষা:',
	'pt-movepage-reason' => 'কারণ:',
	'pt-deletepage-reason' => 'কারণ:',
);

/** Tibetan (བོད་ཡིག)
 * @author Freeyak
 */
$messages['bo'] = array(
	'pagetranslation' => 'ཤོག་ངོས་ཡིག་སྒྱུར།',
	'tpt-diff-old' => 'ཡིག་འབྲུ་གོང་མ།',
	'tpt-diff-new' => 'ཡིག་འབྲུ་གསར་བ།',
	'translate-tag-translate-link-desc' => 'ཤོག་ངོས་འདི་བསྒྱུར་བ།',
	'tpt-languages-legend' => 'སྐད་རིགས་གཞན།',
	'pt-movepage-list-translation' => 'ཡིག་སྒྱུར་ཤོག་ངོས།',
	'pt-movepage-legend' => 'བསྒྱུར་རུང་བའི་ཤོག་ངོས་སྤོར་བ།',
	'pt-movepage-current' => 'ད་ཡོད་མིང་།',
	'pt-movepage-new' => 'མིང་གསར་བ།',
	'pt-movepage-reason' => 'རྒྱུ་མཚན།',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'pagetranslation' => 'Troidigezh ur bajenn',
	'right-pagetranslation' => 'Merkañ stummoù pajennoù evit ma vefent troet',
	'tpt-desc' => 'Astenn evit treiñ pajennoù gant danvez',
	'tpt-section' => 'Unanenn treiñ $1',
	'tpt-section-new' => 'Unvez treiñ nevez.
Anv : $1',
	'tpt-section-deleted' => 'Unanenn dreiñ $1',
	'tpt-template' => 'Patrom pajenn',
	'tpt-templatediff' => 'Kemmet eo patrom ar bajenn.',
	'tpt-diff-old' => 'Testenn gent',
	'tpt-diff-new' => 'Testenn nevez',
	'tpt-submit' => 'Merkañ ar stumm-mañ da vezañ troet',
	'tpt-sections-oldnew' => 'Unvezioù treiñ kozh ha nevez',
	'tpt-sections-deleted' => 'Unvezioù treiñ diverket',
	'tpt-sections-template' => 'Patrom pajenn dreiñ',
	'tpt-action-nofuzzy' => 'Chom hep diwiriekaat an droidigezhioù',
	'tpt-badtitle' => "N'eo ket reizh titl anv ar bajenn ($1) zo bet lakaet",
	'tpt-nosuchpage' => "N'eus ket eus ar bajenn $1.",
	'tpt-oldrevision' => "N'eo ket $2 stumm diwezhañ ar bajenn [[$1]].
N'eus nemet ar stummoù diwezhañ a c'hall bezañ merket evit bezañ troet.",
	'tpt-notsuitable' => "N'haller ket treiñ ar bajenn $1.
Gwiria ez eus balizennoù <nowiki><translate></nowiki> enni hag ez eo reizh an ereadurezh anezhi.",
	'tpt-saveok' => 'Merket eo bet ar bajenn [[$1]] evit bezañ troet gant $2 {{PLURAL:$2|unanenn dreiñ|unanenn dreiñ}}.
Gallout a ra ar bajenn bezañ <span class="plainlinks">[$3 troet]</span> bremañ.',
	'tpt-badsect' => 'Direizh eo an anv "$1" evit un unanenn dreiñ $2.',
	'tpt-showpage-intro' => "A-is emañ rollet an troidigezhioù nevez, ar re zo anezho hag ar re bet diverket.
Kent merkañ ar stumm-mañ evit an treiñ, gwiriait mat n'eus ket bet nemeur a gemmoù er rannbennadoù kuit da bourchas labour aner d'an droourien.",
	'tpt-mark-summary' => 'Merket eo bet ar stumm-mañ da vezañ troet',
	'tpt-edit-failed' => "N'eus ket bet gallet hizivaat ar bajenn : $1",
	'tpt-duplicate' => 'Implijet eo bet meur a wezh anv an unvez treiñ $1.',
	'tpt-already-marked' => 'Merket eo bet ar stumm diwezhañ eus ar bajenn-mañ da vezañ troet dija.',
	'tpt-unmarked' => "N'eo ket merket ken ar bajenn $1 evit bezañ troet.",
	'tpt-list-nopages' => "N'eus pajenn ebet merket da vezañ troet na prest da vezañ merket da vezañ troet.",
	'tpt-new-pages-title' => "Pajennoù a c'haller da dreiñ",
	'tpt-old-pages-title' => 'Pajennoù emeur o treiñ',
	'tpt-other-pages-title' => 'Pajennoù torr',
	'tpt-discouraged-pages-title' => 'Pajennoù dizerbedet',
	'tpt-new-pages' => "{{PLURAL:$1|Er bajenn-mañ|Er pajennoù-mañ}} ez eus testennoù enno balizennoù treiñ, met stumm ebet eus ar {{PLURAL:$1|bajenn-mañ|pajennoù-mañ}} n'eo bet merket da vezañ troet.",
	'tpt-old-pages' => 'Stummoù zo eus ar {{PLURAL:$1|bajenn-mañ|pajennoù-mañ}} zo bet merket da vezañ troet.',
	'tpt-other-pages' => "Merket ez eus bet da vezañ troet {{PLURAL:$1|ur stumm kozh eus ar bajenn-mañ|stummoù koshoc'h eus ar pajennoù-mañ}};
ar {{PLURAL:$1|stumm|stummoù}} diwezhañ avat n'hallont ket bezañ merket da vezañ troet.",
	'tpt-discouraged-pages' => "Dizerbedet eo treiñ ar {{PLURAL:$1|bajenn-mañ|pajennoù-mañ}} pelloc'h.",
	'tpt-rev-mark' => 'merkañ da vezañ troet',
	'tpt-rev-unmark' => 'Lemel a-ziwar ar roll treiñ',
	'tpt-rev-discourage' => 'dizerbediñ',
	'tpt-rev-encourage' => 'assevel',
	'tpt-rev-mark-tooltip' => 'Merkañ stumm diwezhañ ar bajenn-mañ evel stumm da vezañ troet.',
	'tpt-rev-unmark-tooltip' => 'Lemel ar bajenn-mañ a-ziwar ar roll treiñ.',
	'tpt-rev-discourage-tooltip' => "Dizerbediñ treiñ ar bajenn-mañ pelloc'h.",
	'tpt-rev-encourage-tooltip' => 'Adlakaat ar bajenn-mañ war ar roll treiñ normal.',
	'translate-tag-translate-link-desc' => 'Treiñ ar bajenn-mañ',
	'translate-tag-markthis' => 'Merkañ ar bajenn-mañ evit an treiñ',
	'translate-tag-markthisagain' => 'Er bajenn-mañ ez eus bet <span class="plainlinks">[$1 kemm]</span> abaoe m\'eo bet <span class="plainlinks">[$2 merket da vezañ troet]</span>.',
	'translate-tag-hasnew' => 'Er bajenn-mañ ez eus <span class="plainlinks">[$1 kemm]</span> ha n\'int ket bet merket da vezañ troet.',
	'tpt-translation-intro' => 'Ur stumm <span class="plainlinks">[$1 troet]</span> eus ar bajenn [[$2]] eo ar bajenn-mañ; kaset ez eus bet da benn $3% eus an droidigezh anezhi, ha diouzh an deiz emañ.',
	'tpt-translation-intro-fuzzy' => 'An troidigezhioù diamzeret zo merket evel-henn.',
	'tpt-languages-legend' => 'Yezhoù all :',
	'tpt-target-page' => "N'hall ket ar bajenn-mañ bezañ hizivaet gant an dorn.
Ur stumm troet eus [[$1]] eo ar bajenn-mañ; gallout a ra bezañ hizivaet en ur implijout [$2 an ostilh treiñ].",
	'tpt-unknown-page' => "Miret eo an esaouenn anv-mañ evit troidigezh ar pajennoù.
Ar bajenn hoc'h eus klasket kemm ne seblant ket klotañ gant pajenn ebet bet merket evit bezañ troet.",
	'tpt-render-summary' => 'Hizivadenn da glotañ gant stumm nevez mammenn ar bajenn',
	'tpt-download-page' => 'Ezporzhiañ ar bajenn gant an troidigezhioù',
	'pt-parse-open' => 'Balizenn &lt;translate> digempouez.
Patrom treiñ : <pre>$1</pre>',
	'pt-parse-close' => 'Balizenn &lt;/translate> digempouez.
Patrom treiñ  <pre>$1</pre>',
	'pt-parse-nested' => "N'eo ket aotreet ar rannbennadoù &lt;translate> empret an eil en egile.
Testenn ar valizenn : <pre>$1</pre>",
	'pt-shake-multiple' => 'Merkerioù rannbennadoù lies evit ur rannbennad.
Testenn ar rannbennad : <pre>$1</pre>',
	'pt-shake-position' => "Merkerioù rannbennad lec'hiet drol.
Testenn ar rannbennad : <pre>$1</pre>",
	'pt-shake-empty' => "Rannbennad c'houllo evit ar merker $1.",
	'pt-log-header' => 'Marilh an obererezhioù liammet gant sistem treiñ pajennoù',
	'pt-log-name' => 'Marilh troidigezhioù pajennoù',
	'pt-log-mark' => 'en deus merket{{GENDER:$2|}} an adweladenn $3 eus ar bajenn "[[:$1]]" evit bezañ troet',
	'pt-log-unmark' => 'en deus dilamet{{GENDER:$2|}} ar bajenn "[[:$1]]" eus an droidigezh',
	'pt-log-moveok' => '{{GENDER:$2|en deus|he deus}} adanvet ar bajenn da dreiñ $1 e $3',
	'pt-log-movenok' => '{{GENDER:$2|en deus|he deus}} bet ur gudenn en ur glask adenvel [[:$1]] e [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|en deus|he deus}} kaset da benn diverkadenn ar bajenn da dreiñ $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|zo en em gavet}} gant ur gudenn e-pad ma oa o diverkañ ar bajenn da vezañ troet [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|en deus|he deus}} kaset da benn diverkadenn ar bajenn droet $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|zo en em gavet}} gant ur gudenn e-pad ma oa o diverkañ ar bajenn dreiñ [[:$1]]',
	'pt-movepage-title' => 'Fiñval ar bajenn da dreiñ $1',
	'pt-movepage-blockers' => "Ar bajenn da dreiñ na c'hell ket bezañ adanvet en abeg d'ar fazi{{PLURAL:$1||où}} da-heul :",
	'pt-movepage-block-base-exists' => 'Bez ez eus eus ar bajenn diazez moned [[:$1]].',
	'pt-movepage-block-base-invalid' => 'Ar bajenn diazez moned en deus un titl direizh.',
	'pt-movepage-block-tp-exists' => 'Bez ez eus eus ar bajenn treiñ moned [[:$2]].',
	'pt-movepage-block-tp-invalid' => 'Direizh e vefe titl ar bajenn treiñ moned evit [[:$1]] (re hir ?).',
	'pt-movepage-block-section-exists' => 'Bez ez eus ar ran eus ar bajenn voned [[:$2]].',
	'pt-movepage-block-section-invalid' => 'Direizh e vefe titl rann ar bajenn voned evit [[:$1]] (re hir ?).',
	'pt-movepage-block-subpage-exists' => 'Bez ez eus eus an is-pajenn voned [[:$2]].',
	'pt-movepage-block-subpage-invalid' => 'Direizh e vefe titl an is-pajenn voned evit [[:$1]] (re hir ?).',
	'pt-movepage-list-pages' => 'Roll ar pajennoù da fiñval',
	'pt-movepage-list-translation' => 'Pajennoù treiñ',
	'pt-movepage-list-section' => 'Pajennoù e rann',
	'pt-movepage-list-other' => 'Ispajennoù all',
	'pt-movepage-list-count' => "$1 {{PLURAL:bajenn|pajenn}} da zilec'hiañ en holl.",
	'pt-movepage-legend' => 'Fiñval ar bajenn da dreiñ',
	'pt-movepage-current' => 'Anv red :',
	'pt-movepage-new' => 'Anv nevez :',
	'pt-movepage-reason' => 'Abeg :',
	'pt-movepage-subpages' => 'Fiñval an holl is-pajennoù',
	'pt-movepage-action-check' => 'Gwiriekaat ha posupl eo adenvel',
	'pt-movepage-action-perform' => 'Adenvel',
	'pt-movepage-action-other' => 'Kemmañ ar moned',
	'pt-movepage-intro' => "Gant ar bajenn dibar-mañ e c'hallit adenvel ar pajennoù merket da vezañ troet.
Ne zeuio ket da wir diouzhtu an adenvel rak ret e vo dilec'hiañ kalz a bajennoù.
Amzer dilec'hiañ ar pajennoù ne vo ket posupl c'hoari ganto.
Er [[Special:Log/pagetranslation|page marilh treiñ]] e vo enrollet ar mankoù adenvel; eno e vo deoc'h o reizhañ gant an dorn.",
	'pt-movepage-logreason' => 'Rann eus ar bajenn da dreiñ $1.',
	'pt-movepage-started' => 'Adanvet eo bet ar bajenn diazez.
Mar plij gwiriit [[Special:Log/pagetranslation|pajenn marilh an troidigezhioù]] evit kempenn ar fazioù, mar bez, ha lenn ar gemennadenn glozañ.',
	'pt-locked-page' => "Prennet eo ar bajenn-mañ dre m' emeur oc'h adenvel ar bajenn da dreiñ.",
	'pt-deletepage-lang-title' => 'O tiverkañ ar bajenn dreiñ $1.',
	'pt-deletepage-full-title' => 'O tiverkañ ar bajenn da dreiñ $1.',
	'pt-deletepage-invalid-title' => 'Faziek eo ar bajenn spisaet.',
	'pt-deletepage-invalid-text' => "N'eus ket eus ar bajenn spisaet ur bajenn da vezañ troet, nag un droidigezh anezhi.",
	'pt-deletepage-action-check' => 'Rollañ ar pajennoù da vezañ diverket',
	'pt-deletepage-action-perform' => 'Diverkañ',
	'pt-deletepage-action-other' => 'Kemmañ ar moned',
	'pt-deletepage-lang-legend' => 'Diverkañ ar bajenn dreiñ',
	'pt-deletepage-full-legend' => "Diverkañ ar bajenn a c'haller treiñ",
	'pt-deletepage-any-legend' => 'Diverkañ ar bajenn da vezañ troet pe troidigezh ar bajenn da vezañ troet',
	'pt-deletepage-current' => 'Anv ar bajenn :',
	'pt-deletepage-reason' => 'Abeg :',
	'pt-deletepage-subpages' => 'Diverkañ an holl ispajennoù',
	'pt-deletepage-list-pages' => 'Roll ar pajennoù da ziverkañ',
	'pt-deletepage-list-translation' => 'Pajennoù treiñ',
	'pt-deletepage-list-section' => 'Pajennoù e rann',
	'pt-deletepage-list-other' => 'Ispajennoù all',
	'pt-deletepage-list-count' => '$1 {{PLURAL:bajenn|pajenn}} da ziverkañ en holl.',
	'pt-deletepage-full-logreason' => 'Rann eus ar bajenn da dreiñ $1.',
	'pt-deletepage-lang-logreason' => 'Rann eus ar bajenn da dreiñ $1.',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'pagetranslation' => 'Prijevod stranice',
	'right-pagetranslation' => 'Označanje verzija stranica za prevođenje',
	'tpt-desc' => 'Proširenje za prevođenje stranica sadržaja',
	'tpt-section' => 'Jedinica prevođenja $1',
	'tpt-section-new' => 'Nova jedinica prevođenja. Naziv: $1',
	'tpt-section-deleted' => 'Jedinica prevođenja $1',
	'tpt-template' => 'Šablon stranice',
	'tpt-templatediff' => 'Šablon stranice se izmijenio.',
	'tpt-diff-old' => 'Prethodni tekst',
	'tpt-diff-new' => 'Novi tekst',
	'tpt-submit' => 'Označi ovu verziju za prevođenje',
	'tpt-sections-oldnew' => 'Nove i postojeće prevodilačke jedinice',
	'tpt-sections-deleted' => 'Obrisane prevodilačke jedinice',
	'tpt-sections-template' => 'Šablon stranice prevođenja',
	'tpt-action-nofuzzy' => 'Ne poništavajte prevode',
	'tpt-badtitle' => 'Zadano ime stranice ($1) nije valjan naslov',
	'tpt-nosuchpage' => 'Stranica $1 ne postoji',
	'tpt-oldrevision' => '$2 nije posljednja verzija stranice [[$1]].
Jedino posljednje verzije se mogu označiti za prevođenje.',
	'tpt-notsuitable' => 'Stranica $1 nije pogodna za prevođenje.
Provjerite da postoje oznake <nowiki><translate></nowiki> i da ima valjanu sintaksu.',
	'tpt-saveok' => 'Stranica [[$1]] je označena za prevođenje sa $2 {{PLURAL:$2|prevodilačkom jedinicom|prevodilačke jedinice|prevodilačkih jedinica}}.
Stranica se sad može <span class="plainlinks">[$3 prevoditi]</span>.',
	'tpt-badsect' => '"$1" nije valjano ime za jedinicu prevođenja $2.',
	'tpt-showpage-intro' => 'Ispod su navedene nove, postojeće i obrisane sekcije.
Prije nego što označite ovu verziju za prevođenje, provjerite da su izmjene sekcija minimizirane da bi se spriječio nepotrebni rad prevodioca.',
	'tpt-mark-summary' => 'Ova vezija označena za prevođenje',
	'tpt-edit-failed' => 'Nije moguće ažurirati stranicu: $1',
	'tpt-already-marked' => 'Posljednja verzija ove stranice je već označena za prevođenje.',
	'tpt-unmarked' => 'Stranica $1 više nije označena za prevođenje.',
	'tpt-list-nopages' => 'Nijedna stranica nije označena za prevođenje niti je spremna za označavanje.',
	'tpt-new-pages' => '{{PLURAL:$1|Ova stranica sadrži|Ove stranice sadrže}} tekst sa oznakama prijevoda, ali nijedna od verzija {{PLURAL:$1|ove stranice|ovih stranica}} nije trenutno označena za prevođenje.',
	'tpt-old-pages' => 'Neke verzije {{PLURAL:$1|ove stranice|ovih stranica}} su označene za prevođenje.',
	'tpt-other-pages' => '{{PLURAL:$1|Stara verzija ove stranice je označena|Stare verzije ovih stranica su označene}} za prevođenje,
ali {{PLURAL:$1|posljednja verzija ne može|posljednje verzije ne mogu}} biti {{PLURAL:$1|označena|označene}} za prevođenje.',
	'tpt-rev-unmark' => 'ukloni ovu stranicu iz prevođenja',
	'translate-tag-translate-link-desc' => 'Prevedi ovu stranicu',
	'translate-tag-markthis' => 'Označi ovu stranicu za prevođenje',
	'translate-tag-markthisagain' => 'Ova stranica ima <span class="plainlinks">[$1 izmjena]</span> od kako je posljednji put <span class="plainlinks">[$2 označena za prevođenje]</span>.',
	'translate-tag-hasnew' => 'Ova stranica sadrži <span class="plainlinks">[$1 izmjena]</span> koje nisu označene za prevođenje.',
	'tpt-translation-intro' => 'Ova stranica je <span class="plainlinks">[$1 prevedena verzija]</span> stranice [[$2]] a prijevod je $3% dovršen i ažuriran.',
	'tpt-translation-intro-fuzzy' => 'Zastarijeli prijevodi su označeni ovako.',
	'tpt-languages-legend' => 'Drugi jezici:',
	'tpt-target-page' => 'Ova stranica ne može biti ručno ažurirana.
Ova stranica je prijevod stranice [[$1]] a prevodi se mogu ažurirati putem [$2 alata za prevođenje].',
	'tpt-unknown-page' => 'Ovaj imenski prostor je rezervisan za prevode stranica sadržaja.
Stranica koju pokušavate uređivati ne odgovara nekoj od stranica koje su označene za prevođenje.',
	'tpt-render-summary' => 'Ažuriram na novu verziju izvorne stranice',
	'tpt-download-page' => 'Izvezi stranicu sa prijevodima',
	'pt-parse-open' => 'Neuravnotežena &lt;translate> oznaka.
Šablon za prevođenje: <pre>$1</pre>',
	'pt-parse-close' => 'Neuravnotežena &lt;/translate> oznaka.
Šablon za prevođenje: <pre>$1</pre>',
	'pt-parse-nested' => 'Uklopljene &lt;translate> sekcije nisu dozvoljene.
Tekst oznake: <pre>$1</pre>',
	'pt-shake-multiple' => 'Veći broj oznaka sekcija za istu sekciju.
Tekst sekcije: <pre>$1</pre>',
	'pt-shake-position' => 'Oznake sekcija na nepredviđenoj poziciji.
Tekst sekcije: <pre>$1</pre>',
	'pt-shake-empty' => 'Prazna sekcija za marker $1.',
	'pt-log-header' => 'Zapisnik akcije vezanih za sistem prevođenja stranica',
	'pt-log-name' => 'Zapisnik prijevoda stranice',
	'pt-log-mark' => '{{GENDER:$2|označen|označena}} revizija $3 stranice "[[:$1]]" za prevod',
	'pt-log-unmark' => '{{GENDER:$2|uklonio|uklonila}} stranicu "[[:$1]]" iz prevoda',
	'pt-log-moveok' => '{{GENDER:$2|završeno}} preimenovanje stranice za prevod $1 na novo ime',
	'pt-log-movenok' => '{{GENDER:$2|desio}} se problem pri premještanju [[:$1]] na [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|završeno}} brisanje stranica koje se mogu prevesti $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|desio}} se problem pri brisanju stranica koje se mogu prevesti [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|završeno}} brisanje stranica prevoda $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|desio}} se problem pri brisanju stranica prevoda [[:$1]]',
	'pt-movepage-title' => 'Premještanje stranice za prevođenje $1',
	'pt-movepage-blockers' => 'Stranica koja se može prevoditi ne može biti premještena na novo ime zbog {{PLURAL:$1|slijedeće greške|slijedećih grešaka}}:',
	'pt-movepage-block-base-exists' => 'Ciljna bazna stranica [[:$1]] postoji.',
	'pt-movepage-block-base-invalid' => 'Ciljna bazna stranica nije valjan naslov.',
	'pt-movepage-block-tp-exists' => 'Ciljna stranica za prijevod [[:$2]] postoji.',
	'pt-movepage-block-tp-invalid' => 'Naslov ciljne stranice za prijevod za [[:$1]] bi bio nevaljan (predugačak?).',
	'pt-movepage-block-section-exists' => 'Ciljna sekcija stranice [[:$2]] postoji.',
	'pt-movepage-block-section-invalid' => 'Naslov ciljne sekcije za [[:$1]] bi bio nevaljan (predugačak?).',
	'pt-movepage-block-subpage-exists' => 'Ciljna podstranica [[:$2]] postoji.',
	'pt-movepage-block-subpage-invalid' => 'Naslov ciljne podstranice za [[:$1]] bi bio nevaljan (predugačak?).',
	'pt-movepage-list-pages' => 'Spisak stranica za premještanje',
	'pt-movepage-list-translation' => 'Stranice za prijevod',
	'pt-movepage-list-section' => 'Stranice sekcije',
	'pt-movepage-list-other' => 'Druge podstranice',
	'pt-movepage-list-count' => 'Ukupno $1 {{PLURAL:$1|stranica|stranice|stranica}} za premještanje.',
	'pt-movepage-legend' => 'Premjesti stranicu koja se prevodi',
	'pt-movepage-current' => 'Trenutni naziv:',
	'pt-movepage-new' => 'Novi naziv:',
	'pt-movepage-reason' => 'Razlog:',
	'pt-movepage-subpages' => 'Premjesti sve podstranice',
	'pt-movepage-action-check' => 'Provjeri da li je moguće premještanje',
	'pt-movepage-action-perform' => 'Izvrši premještanje',
	'pt-movepage-action-other' => 'Promijeni cilj',
	'pt-movepage-intro' => 'Ova posebna stranica vam omogućava da premještate stranice koje su obilježene za prevođenje.
Akcija premještanja neće biti odmah, jer mnoge stranice trebaju biti premještene.
Dok se stranice premještaju, neće biti mogućnosti koristiti se s tim stranicama.
Greške će biti zapisane u [[Special:Log/pagetranslation|zapisnik prevođenja stranice]] te se one moraju ispravljati ručno.',
	'pt-movepage-logreason' => 'Dio stranice koja se prevodi $1.',
	'pt-movepage-started' => 'Osnovna stranica se sad premješta.
Molimo provjerite [[Special:Log/pagetranslation|zapisnik prevoda stranice]] za greške i poruke završetka.',
	'pt-locked-page' => 'Ova stranica je zaključana jer se stranica za prevođenje sada premješta.',
	'pt-deletepage-lang-title' => 'Brisanje stranice za prevođenje $1.',
	'pt-deletepage-action-check' => 'Spisak stranica za brisanje',
	'pt-deletepage-action-perform' => 'Izvrši brisanje',
	'pt-deletepage-action-other' => 'Promijeni cilj',
	'pt-deletepage-current' => 'Naslov stranice:',
	'pt-deletepage-reason' => 'Razlog:',
	'pt-deletepage-subpages' => 'Obriši sve podstranice',
	'pt-deletepage-list-pages' => 'Spisak stranica za brisanje',
	'pt-deletepage-list-translation' => 'Stranice za prijevod',
	'pt-deletepage-list-section' => 'Stranice sekcije',
	'pt-deletepage-list-other' => 'Druge podstranice',
	'pt-deletepage-full-logreason' => 'Dio stranice koja se prevodi $1.',
	'pt-deletepage-lang-logreason' => 'Dio stranice za prevođenje $1.',
);

/** Buginese (ᨅᨔ ᨕᨘᨁᨗ)
 * @author Kurniasan
 */
$messages['bug'] = array(
	'translate-tag-translate-link-desc' => "Tare'juma iyyedé leppa",
);

/** Catalan (Català)
 * @author Jordi Roqué
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'pagetranslation' => "Traducció d'una pàgina",
	'right-pagetranslation' => 'Marcar versions de pàgines per a traduir',
	'tpt-section' => 'Unitat de traducció $1',
	'tpt-section-new' => 'Nova unitat de traducció. Nom: $1',
	'tpt-diff-old' => 'Text anterior',
	'tpt-diff-new' => 'Text nou',
	'tpt-badtitle' => 'El nom de pàgina donat ($1) no és un títol vàlid',
	'tpt-notsuitable' => 'La pàgina $1 no està preparada per a la seva traducció.
Assegureu-vos que té les etiquetes <nowiki><translate></nowiki> i una sintaxi vàlida.',
	'translate-tag-translate-link-desc' => 'Traduir aquesta pàgina',
	'tpt-languages-legend' => 'Altres idiomes:',
	'pt-movepage-title' => 'Mou la pàgina traduïble $1',
	'pt-movepage-blockers' => "La pàgina traduïble no pot ser reanomenada a causa {{PLURAL:$1|de l'error següent|dels errors següents}}:",
	'pt-movepage-block-base-exists' => 'La pàgina base de destinació [[:$1]] ja existeix.',
	'pt-movepage-block-base-invalid' => 'La pàgina base de destinació no té un títol vàlid.',
	'pt-movepage-block-tp-exists' => 'La pàgina de traducció de destinació [[:$2]] ja existeix.',
	'pt-movepage-block-tp-invalid' => 'El títol de la pàgina de traducció de destinació [[:$1]] no seria vàlid (potser seria massa llarg).',
	'pt-movepage-block-section-exists' => 'La pàgina de secció de destinació [[:$2]] ja existeix.',
	'pt-movepage-block-section-invalid' => 'El títol de la pàgina de secció de destinació [[:$1]] no seria vàlid (potser seria massa llarg).',
	'pt-movepage-block-subpage-exists' => 'La subpàgina de destinació [[:$2]] ja existeix.',
	'pt-movepage-block-subpage-invalid' => 'El títol de la subpàgina de destinació [[:$1]] no seria vàlid (potser seria massa llarg).',
	'pt-movepage-list-pages' => 'Llista de pàgines per moure',
	'pt-movepage-list-translation' => 'Pàgines de traducció',
	'pt-movepage-list-section' => 'Pàgines de secció',
	'pt-movepage-list-other' => 'Altres subpàgines',
	'pt-movepage-list-count' => 'En total, $1 {{PLURAL:$1|pàgina|pàgines}} a moure.',
	'pt-movepage-legend' => 'Mou la pàgina traduïble',
	'pt-movepage-current' => 'Nom actual:',
	'pt-movepage-new' => 'Nom nou:',
	'pt-movepage-reason' => 'Motiu:',
	'pt-movepage-subpages' => 'Mou totes les subpàgines',
	'pt-movepage-action-check' => 'Verifica si és possible el trasllat',
	'pt-movepage-action-perform' => 'Fes el trasllat',
	'pt-movepage-action-other' => 'Canvia la destinació',
	'pt-movepage-intro' => "Aquesta pàgina especial permet desplaçar pàgines que estan marcades per a la traducció.
El trasllat no serà instantani, perquè moltes pàgines hauran de ser mogudes.
Mentre s'estiguin traslladant les pàgines no serà possible interaccionar amb les pàgines en qüestió.
Els errors sortiran indicats al [[Special:Log/pagetranslation|registre de traducció de pàgines]] i hauran d'ésser reparats a mà.",
	'pt-movepage-logreason' => 'Part de la pàgina a traduir $1.',
	'pt-movepage-started' => 'La pàgina base està traslladada.
Comproveu el [[Special:Log/pagetranslation|registre de traducció de pàgines]] pels errors i el missatge de finalització.',
	'pt-locked-page' => 'Aquesta pàgina està bloquejada perquè la pàgina a traduir està en un procés de trasllat.',
);

/** Chechen (Нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'tpt-diff-new' => 'Керла йоза',
	'tpt-languages-legend' => 'Кхин меттанаш:',
);

/** Sorani (کوردی)
 * @author Asoxor
 * @author Marmzok
 * @author رزگار
 */
$messages['ckb'] = array(
	'pagetranslation' => 'وەرگێڕانی پەڕە',
	'tpt-template' => 'داڕێژەی پەڕە',
	'tpt-templatediff' => 'داڕێژەی لاپەڕەکە گۆڕاوە.',
	'tpt-diff-old' => 'دەقی پێشوو',
	'tpt-diff-new' => 'دەقی نوێ',
	'tpt-submit' => 'نیشان‌کردنی ئەم وەشانە بۆ وەرگێڕان',
	'tpt-sections-template' => 'داڕێژی لاپەڕەی وەرگێڕان',
	'tpt-already-marked' => 'دوایین وەشانی ئەم لاپەڕەیە لە پێش‌دا بۆ وەرگێڕان نیشان کراوە.',
	'translate-tag-translate-link-desc' => 'وەرگێڕانی ئەم پەڕە',
	'translate-tag-markthis' => 'نیشان‌کردنی ئەم لاپەڕەیە بۆ وەرگێڕان',
	'tpt-languages-legend' => 'زمانەکانی دیکە:',
	'pt-movepage-reason' => 'هۆکار:',
);

/** Czech (Česky)
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'pagetranslation' => 'Překlad stránek',
	'right-pagetranslation' => 'Označování verzí stránek pro překlad',
	'tpt-desc' => 'Rozšíření pro překládání stránek s obsahem',
	'tpt-section' => 'Část překladu $1',
	'tpt-section-new' => 'Nová část překladu.
Název: $1',
	'tpt-section-deleted' => 'Část překladu $1',
	'tpt-template' => 'Šablona stránky',
	'tpt-templatediff' => 'Šablona stránky se změnila.',
	'tpt-diff-old' => 'Předchozí text',
	'tpt-diff-new' => 'Nový text',
	'tpt-submit' => 'Označit tuto verzi pro překlad',
	'tpt-sections-oldnew' => 'Nové a existující části překladu',
	'tpt-sections-deleted' => 'Smazané části překladu',
	'tpt-sections-template' => 'Šablona stránky pro překlad',
	'tpt-badtitle' => 'Zadaný název stránky ($1) je neplatný',
	'tpt-oldrevision' => '$2 není nejnovější verze stránky [[$1]].
Pro překlad je možné označit pouze nejnovější verze.',
	'tpt-notsuitable' => 'Stránka $1 není vhodná pro překlad.
Ujistěte se, že obsahuje značky <code><nowiki><translate></nowiki></code> a má platnou syntaxi.',
	'tpt-saveok' => 'Stránka [[$1]] byla označena pro překlad {{PLURAL:$2|s $2 částí překladu|se $2 částmi překladu|s $2 částmi překladu}}.
Tato stránka může být nyní <span class="plainlinks">[$3 přeložena]</span>.',
	'tpt-badsect' => '„$1“ není platný název části překladu $2.',
	'tpt-showpage-intro' => 'Níže jsou uvedeny nové, současné a smazané části.
Předtím než tuto verzi označíte pro překlad zkontrolujte, že změny částí jsou minimální, abyste zabránili zbytečné práci překladatelů.',
	'tpt-mark-summary' => 'Tato verze je označená pro překlad',
	'tpt-edit-failed' => 'Nelze aktualizovat stránku: $1',
	'tpt-already-marked' => 'Nejnovější verze této stránky už byla označena pro překlad.',
	'tpt-list-nopages' => 'Žádné stránky nejsou označeny pro překlad nebo na to nejsou připraveny.',
	'tpt-new-pages' => '{{PLURAL:$1|Tato stránka obsahuje|Tyto stránky obsahují}} text se značkami pro překlad, ale žádná verze {{PLURAL:$1|této stránky|těchto stránek}} není aktuálně označena pro překlad.',
	'tpt-old-pages' => 'Některé verze {{PLURAL:$1|této stránky|těchto stránek}} bylo označeny pro překlad.',
	'translate-tag-translate-link-desc' => 'Přeložit tuto stránku',
	'translate-tag-markthis' => 'Označit tuto stránku pro překlad',
	'translate-tag-markthisagain' => 'Tato stránka byla <span class="plainlinks">[$1 změněna]</span> od posledního <span class="plainlinks">[$2 označení pro překlad]</span>.',
	'translate-tag-hasnew' => 'Tato stránka obsahuje <span class="plainlinks">[$1 změny]</span>, které nebyly označeny pro překlad.',
	'tpt-translation-intro' => 'Toto je <span class="plainlinks">[$1 přeložená verze]</span> stránky [[$2]], překlad je úplný a aktuální na $3 %.',
	'tpt-translation-intro-fuzzy' => 'Takto jsou označeny zastaralé části překladu.',
	'tpt-languages-legend' => 'Jiné jazyky:',
	'tpt-target-page' => 'Tuto stránku nelze ručně aktualizovat.
Tato stránka je překladem stránky [[$1]] a překlad lze aktualizovat pomocí [$2 nástroje pro překlad].',
	'tpt-unknown-page' => 'Tento jmenný prostor je vyhrazen pro překlady stránek s obsahem.
Zdá se, že stránka, kterou se pokoušíte upravovat, neodpovídá žádné stránce označené pro překlad.',
	'tpt-render-summary' => 'Aktualizace na novou verzi zdrojové stránky',
	'tpt-download-page' => 'Exportovat stránky s překlady',
);

/** Danish (Dansk)
 * @author Byrial
 * @author Emilkris33
 * @author Peter Alberti
 * @author Purodha
 */
$messages['da'] = array(
	'pagetranslation' => 'Sideoversættelse',
	'right-pagetranslation' => 'Markere versioner af sider for oversættelse',
	'tpt-desc' => 'Udvidelse til oversættelse af indholdssider',
	'tpt-section' => 'Oversættelsesenhed $1',
	'tpt-section-new' => 'Ny oversættelsesenhed.
Navn: $1',
	'tpt-section-deleted' => 'Oversættelsesenhed $1',
	'tpt-template' => 'Sideskabelon',
	'tpt-templatediff' => 'Sideskabelonen er blevet ændret.',
	'tpt-diff-old' => 'Forrige tekst',
	'tpt-diff-new' => 'Ny tekst',
	'tpt-submit' => 'Markér denne version for oversættelse',
	'tpt-sections-oldnew' => 'Nye og eksisterende oversættelsesenheder',
	'tpt-sections-deleted' => 'Slettede oversættelsesenheder',
	'tpt-sections-template' => 'Skabelon til oversættelsesside',
	'tpt-action-nofuzzy' => 'Ugyldiggør ikke oversættelser.',
	'tpt-badtitle' => 'Det angivne sidenavn ($1) er ikke en gyldig titel',
	'tpt-nosuchpage' => 'Siden $1 findes ikke',
	'tpt-oldrevision' => '$2 er ikke den seneste version af siden [[$1]].
Kun den seneste version kan markeres for oversættelse.',
	'tpt-notsuitable' => 'Siden $1 er ikke parat til oversættelse.
Sørg for at den har <nowiki><translate></nowiki>-tags og en gyldig syntaks.',
	'tpt-saveok' => 'Siden [[$1]] har blevet markeret for oversættelse med $2 {{PLURAL:$2|oversættelsesenhed|oversættelsesenheder}}.
Siden kan nu <span class="plainlinks">[$3 oversættes]</span>.',
	'tpt-badsect' => '"$1" er ikke et gyldig navn for oversættelsesenhed $2.',
	'tpt-showpage-intro' => 'Herunder er nye, eksisterende og slettede sektioner oplistet.
kontrollér før denne version markeres for oversættelse, at ændringerne i sektionene er så små som muligt for at undgå unødigt arbejde for oversætterne.',
	'tpt-mark-summary' => 'Markerede denne version for oversættelse',
	'tpt-edit-failed' => 'Kunne ikke opdatere siden: $1',
	'tpt-already-marked' => 'Den seneste version af denne side er allerede markeret for oversættelse.',
	'tpt-unmarked' => 'Siden $1 er ikke længere markeret til oversættelse.',
	'tpt-list-nopages' => 'Ingen sider er markeret for oversættelse eller parate til at blive markeret for oversættelse.',
	'tpt-new-pages' => '{{PLURAL:$1|Denne side|Disse sider}} indeholder tekst med oversættelsestags, men ingen version af {{PLURAL:$1|siden|siderne}} er i øjeblikket markeret for oversættelse.',
	'tpt-old-pages' => 'En version af {{PLURAL:$1|denne side|disse sider}} er markeret for oversættelse.',
	'tpt-other-pages' => '{{PLURAL:$1|En gammel version af denne side er|Ældre versioner af disse sider er}} markeret til oversættelse,
men {{PLURAL:$1|den seneste version|de seneste versioner}} kan ikke mærkes til oversættelse.',
	'tpt-rev-unmark' => 'fjern denne side fra oversættelse',
	'translate-tag-translate-link-desc' => 'Oversæt denne side',
	'translate-tag-markthis' => 'Markér denne side for oversættelse',
	'translate-tag-markthisagain' => 'Denne side er <span class="plainlinks">[$1 ændret]</span> siden den sidst blev <span class="plainlinks">[$2 markeret for oversættelse]</span>.',
	'translate-tag-hasnew' => 'Denne side indeholder <span class="plainlinks">[$1 ændringer]</span> som ikke er markeret for oversættelse.',
	'tpt-translation-intro' => 'Denne side er en <span class="plainlinks">[$1 oversat version]</span> af en side [[$2]] og oversættelsen er $3 % komplet og opdateret.',
	'tpt-translation-intro-fuzzy' => 'Forældede oversættelser er markeret sådan her.',
	'tpt-languages-legend' => 'Andre sprog:',
	'tpt-target-page' => 'Denne side kan ikke opdateres manuelt.
Siden er en oversættelse af siden [[$1]] og oversættelsen kan opdateres ved at bruge [$2 oversættelsesværktøjet].',
	'tpt-unknown-page' => 'Dette navnerum er reserveret til oversættelser af indholdssider.
Siden som du prøver at redigere, ser ikke ud til at svare til nogen side markeret for oversættelse.',
	'tpt-render-summary' => 'Opdaterer for at passe til en ny version af kildesiden',
	'tpt-download-page' => 'Eksportér side med oversættelser',
	'pt-parse-open' => 'Ubalanceret &lt;translate> tag.
Oversættelse skabelon: <pre>$1</pre>',
	'pt-parse-close' => 'Ubalanceret &lt;/translate> tag.
Oversættelse skabelon: <pre>$1</pre>',
	'pt-parse-nested' => 'Indlejrede &lt;translate> sektioner er ikke tilladt.
Tag tekst: <pre>$1</pre>',
	'pt-shake-multiple' => 'Flere afsnit markører for et afsnit.
Afsnit tekst: <pre>$1</pre>',
	'pt-shake-position' => 'Afsnit markører i uvendet position.
Afsnit tekst: <pre>$1</pre>',
	'pt-shake-empty' => 'Tom section for markør $1.',
	'pt-log-header' => 'Log for handlinger i forbindelse med side oversættelses systemet',
	'pt-log-name' => 'Sideoversættelseslog',
	'pt-log-mark' => '{{GENDER:$2|markerede}} version $3 af siden "[[:$1]]" til oversættelse',
	'pt-log-unmark' => '{{GENDER:$2|fjernede}} side "[[:$1]]" fra oversættelse',
	'pt-log-moveok' => '{{GENDER:$2|fuldførte}} omdøbning af den oversætbare side $1 til $3',
	'pt-log-movenok' => '{{GENDER:$2|stødte på}} et problem under flytningen af [[:$1]] til [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|færdiggjorte}} sletning af oversætbar side $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|stødte på}} et problem under sletning oversætbar side [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|Fuldførte}} sletning af oversættelses side $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|stødte på}} et problem under sletning oversættelses side [[:$1]]',
	'pt-movepage-title' => 'Flyt oversætbare side $1',
	'pt-movepage-blockers' => 'Den oversætbare side kan ikke flyttes til et nyt navn på grund af følgende {{PLURAL:$1|fejl|fejl}}:',
	'pt-movepage-block-base-exists' => 'Målbase siden [[:$1]] findes.',
	'pt-movepage-block-base-invalid' => 'Målbase siden er ikke en gyldig titel.',
	'pt-movepage-block-tp-exists' => 'Mål oversættelsessiden [[:$2]] findes.',
	'pt-movepage-block-tp-invalid' => 'Mål oversættelses side titlen for [[:$1]] ville være ugyldig (for lang?).',
	'pt-movepage-block-section-exists' => 'Mål oversættelses sektionen [[:$2]] findes.',
	'pt-movepage-block-section-invalid' => 'Mål sections side titlen for [[:$1]] ville være ugyldig (for lang?).',
	'pt-movepage-block-subpage-exists' => 'Mål undersiden [[:$2]] findes.',
	'pt-movepage-block-subpage-invalid' => 'Mål underside titlen for [[:$1]] ville være ugyldig (for lang?).',
	'pt-movepage-list-pages' => 'Liste over sider til at flytte',
	'pt-movepage-list-translation' => 'Oversættelse sider',
	'pt-movepage-list-section' => 'Afsnit sider',
	'pt-movepage-list-other' => 'Andre undersider',
	'pt-movepage-list-count' => 'I alt $1 {{PLURAL:$1|side|sider}} til at flytte.',
	'pt-movepage-legend' => 'Flyt oversætbare side',
	'pt-movepage-current' => 'Nuværende navn:',
	'pt-movepage-new' => 'Nyt navn:',
	'pt-movepage-reason' => 'Årsag:',
	'pt-movepage-subpages' => 'Flyt alle undersider',
	'pt-movepage-action-check' => 'Tjek om flytningen er muligt',
	'pt-movepage-action-perform' => 'Gennemfør flytningen',
	'pt-movepage-action-other' => 'Skift mål',
	'pt-movepage-intro' => 'Denne speciale side tillader dig at flytte sider, der er markeret til oversættelse.
Flytningen vil ikke være øjeblikkelig, fordi mange sider skal flyttes.
Mens siderne bliver flyttet, er det ikke muligt at interagere med de omtalte sider.
Fejl vil blive logget på [[Special:Log/pagetranslation|sideoversættelsesloggen]], og de skal repareres manuelt.',
	'pt-movepage-logreason' => 'Del af oversætbar side $1.',
	'pt-movepage-started' => 'Base siden er nu flyttet.
Husk at tjekke [[Special:Log/pagetranslation|siden oversættelsen log]] for fejl og færdiggørelses besked.',
	'pt-locked-page' => 'Denne side er låst, fordi den oversætbare side, der aktuelt er ved at blive flyttet.',
	'pt-deletepage-lang-title' => 'Sletter oversættelses side $1.',
	'pt-deletepage-full-title' => 'Sletter oversætbar side $1.',
	'pt-deletepage-invalid-title' => 'Den angivne side er ikke gyldig.',
	'pt-deletepage-invalid-text' => 'Den angivne side er ikke en oversætbar side eller en oversættelse af én.',
	'pt-deletepage-action-check' => 'List sider der skal slettes',
	'pt-deletepage-action-perform' => 'Udfør sletningen',
	'pt-deletepage-action-other' => 'Skift mål',
	'pt-deletepage-lang-legend' => 'Slet oversættelses side',
	'pt-deletepage-full-legend' => 'Slet oversætbar side',
	'pt-deletepage-any-legend' => 'Slet en oversætbar side eller oversættelse af en oversætbare side',
	'pt-deletepage-current' => 'Sidenavn:',
	'pt-deletepage-reason' => 'Årsag:',
	'pt-deletepage-subpages' => 'Slet alle undersider',
	'pt-deletepage-list-pages' => 'Liste over sider til at slette',
	'pt-deletepage-list-translation' => 'Oversættelses sider',
	'pt-deletepage-list-section' => 'Afsnits sider',
	'pt-deletepage-list-other' => 'Andre undersider',
	'pt-deletepage-list-count' => 'I alt $1 {{PLURAL:$1|side|sider}} til at slette.',
	'pt-deletepage-full-logreason' => 'Del af oversætbar side $1.',
	'pt-deletepage-lang-logreason' => 'En del af oversættelses side $1 .',
	'pt-deletepage-started' => 'Tjek venligst [[Special:Log/pagetranslation|side oversættelses log]] for fejl og færdiggørelses besked.',
	'pt-deletepage-intro' => 'Denne med specielle side kan du slette hele oversætbare sider eller oversættelser til et sprog.
Sletningen vil ikke ske med det samme, fordi mange sider vil være nød til at blive slettet.
Fejl vil blive registreret i [[Special:Log/pagetranslation|side oversættelses log]], og de skal repareres i manuelt.',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author Imre
 * @author Kghbln
 * @author McDutchie
 * @author Metalhead64
 * @author Purodha
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'pagetranslation' => 'Seiten übersetzen',
	'right-pagetranslation' => 'Seitenversionen zur Übersetzung freigeben',
	'tpt-desc' => 'Ermöglicht das Übersetzen von Inhaltsseiten',
	'tpt-section' => 'Übersetzungseinheit $1',
	'tpt-section-new' => 'Neue Übersetzungseinheit. Name: $1',
	'tpt-section-deleted' => 'Übersetzungseinheit $1',
	'tpt-template' => 'Seitenvorlage',
	'tpt-templatediff' => 'Die Seitenvorlage hat sich geändert.',
	'tpt-diff-old' => 'Vorheriger Text',
	'tpt-diff-new' => 'Neuer Text',
	'tpt-submit' => 'Diese Version zur Übersetzung freigeben',
	'tpt-sections-oldnew' => 'Neue und vorhandene Übersetzungseinheiten',
	'tpt-sections-deleted' => 'Gelöschte Übersetzungseinheiten',
	'tpt-sections-template' => 'Übersetzungsseitenvorlage',
	'tpt-action-nofuzzy' => 'Die Übersetzungen nicht als veraltet markieren',
	'tpt-badtitle' => 'Der angegebene Seitenname „$1“ ist kein gültiger Titel',
	'tpt-nosuchpage' => 'Die Seite „$1“ ist nicht vorhanden',
	'tpt-oldrevision' => '$2 ist nicht die letzte Version der Seite [[$1]].
Nur die letzte Version kann zur Übersetzung freigegeben werden.',
	'tpt-notsuitable' => 'Die Seite $1 ist nicht zum Übersetzen geeignet.
Stelle sicher, dass ein <nowiki><translate></nowiki>-Tag und gültige Syntax verwendet wird.',
	'tpt-saveok' => 'Die Seite [[$1]] wurde mit {{PLURAL:$2|einem übersetzbaren Abschnitt|$2 übersetzbaren Abschnitten}} zur Übersetzung freigegeben.
Diese Seite kann nun <span class="plainlinks">[$3 übersetzt]</span> werden.',
	'tpt-badsect' => '„$1“ ist kein gültiger Name für Übersetzungseinheit $2.',
	'tpt-showpage-intro' => 'Untenstehend sind neue, vorhandene und gelöschte Abschnitte aufgelistet.
Bevor du diese Version zur Übersetzung freigibst, stelle bitte sicher, dass die Änderungen an den Abschnitten minimal sind, um unnötige Arbeit für Übersetzer zu verhindern.',
	'tpt-mark-summary' => 'Diese Seite wurde zum Übersetzen freigegeben',
	'tpt-edit-failed' => 'Seite kann nicht aktualisiert werden: $1',
	'tpt-duplicate' => 'Der Übersetzungseinheitname $1 wird mehr als einmal verwendet.',
	'tpt-already-marked' => 'Die letzte Version dieser Seite wurde bereits zum Übersetzen freigegeben.',
	'tpt-unmarked' => 'Seite $1 ist nicht länger als zu Übersetzen markiert.',
	'tpt-list-nopages' => 'Es sind keine Seiten zum Übersetzen freigegeben und auch nicht vorbereitet, um freigegeben werden zu können.',
	'tpt-new-pages-title' => 'Zur Übersetzung vorgeschlagene Seiten',
	'tpt-old-pages-title' => 'Zu übersetzende Seiten',
	'tpt-other-pages-title' => 'Fehlerhafte Seiten',
	'tpt-discouraged-pages-title' => 'Von der Übersetzung zurückgezogene Seiten',
	'tpt-new-pages' => '{{PLURAL:$1|Diese Seite beinhaltet|Diese Seiten beinhalten}} Text zum Übersetzen. Es wurde aber noch keine Version dieser {{PLURAL:$1|Seite|Seiten}} zum Übersetzen freigegeben.',
	'tpt-old-pages' => 'Eine Version dieser {{PLURAL:$1|Seite|Seiten}} wurde zur Übersetzung freigegeben.',
	'tpt-other-pages' => 'Veraltete Versionen {{PLURAL:$1|dieser Seite|dieser Seiten}} sind zur Übersetzung freigegeben.
Die neueste Version kann hingegen nicht zur Übersetzung freigegeben werden.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Diese Seite wurde|Diese Seiten wurden}} von der Übersetzung zurückgezogen.',
	'tpt-select-prioritylangs' => 'Komma-getrennte Liste der Codes der zu priorisierenden Sprachen:',
	'tpt-select-prioritylangs-force' => 'Übersetzungen in nicht priorisierte Sprachen verhindern',
	'tpt-select-prioritylangs-reason' => 'Grund:',
	'tpt-sections-prioritylangs' => 'Priorisierte Sprachen',
	'tpt-rev-mark' => 'Zum Übersetzen freigeben',
	'tpt-rev-unmark' => 'Freigabe zum Übersetzen entfernen',
	'tpt-rev-discourage' => 'Freigabe zurückziehen',
	'tpt-rev-encourage' => 'Freigabe wiederherstellen',
	'tpt-rev-mark-tooltip' => 'Die letzte Version dieser Seite zum Übersetzen freigeben.',
	'tpt-rev-unmark-tooltip' => 'Die Freigabe zum Übersetzen dieser Seite entfernen.',
	'tpt-rev-discourage-tooltip' => 'Die Freigabe für weitere Übersetzungen dieser Seite zurückziehen.',
	'tpt-rev-encourage-tooltip' => 'Die Freigabe zum Übersetzen dieser Seite wiederherstellen.',
	'translate-tag-translate-link-desc' => 'Diese Seite übersetzen',
	'translate-tag-markthis' => 'Diese Seite zur Übersetzung freigeben',
	'translate-tag-markthisagain' => 'Diese Seite wurde <span class="plainlinks">[$1 bearbeitet]</span>, nachdem sie zuletzt <span class="plainlinks">[$2 zur Übersetzung freigegeben]</span> wurde.',
	'translate-tag-hasnew' => 'Diese Seite enthält <span class="plainlinks">[$1 Bearbeitungen]</span>, die nicht zum Übersetzen freigegeben sind.',
	'tpt-translation-intro' => 'Diese Seite ist eine <span class="plainlinks">[$1 übersetzte Version]</span> der Seite [[$2]] und die Übersetzung ist zu $3 % abgeschlossen und aktuell.',
	'tpt-translation-intro-fuzzy' => 'Veraltete Übersetzungen werden wie dieser Text markiert.',
	'tpt-languages-legend' => 'Andere Sprachen:',
	'tpt-languages-zero' => 'Mit dem Übersetzen in diese Sprache anfangen',
	'tpt-target-page' => 'Diese Seite kann nicht manuell aktualisiert werden.
Diese Seite ist eine Übersetzung der Seite [[$1]] und die Übersetzung kann mithilfe des [$2 Übersetzungswerkzeuges] aktualisiert werden.',
	'tpt-unknown-page' => 'Dieser Namensraum ist für das Übersetzen von Wikiseiten reserviert.
Die Seite, die gerade bearbeitet wird, hat keine Verbindung zu einer übersetzbaren Seite.',
	'tpt-translation-restricted' => 'Das Übersetzen dieser Seite in diese Sprache wurde durch einen Übersetzungsadministrator deaktiviert.

Grund: $1',
	'tpt-discouraged-language-force' => 'Der Übersetzungsadministrator hat die Sprachen eingeschränkt, in die diese Systemnachrichtengruppe übersetzt werden kann. Diese Sprache befindet sich nicht unter zulässigen Sprachen.

Der Grund für die Einschränkung: $1',
	'tpt-discouraged-language' => 'Diese Sprache befindet sich nicht unter den priorisierten Sprachen für die Übersetzung dieser Systemnachrichtengruppe.

Der Grund für die Priorisierung: $1',
	'tpt-render-summary' => 'Übernehme Bearbeitung einer neuen Version der Quellseite',
	'tpt-download-page' => 'Seite mit Übersetzungen exportieren',
	'pt-parse-open' => 'Eine &lt;translate&gt;-Markierung hat kein Gegenstück.
Übersetzungsvorlage: <pre>$1</pre>',
	'pt-parse-close' => 'Eine &lt;&#47;translate&gt;-Markierung hat kein Gegenstück.
Übersetzungsvorlage: <pre>$1</pre>',
	'pt-parse-nested' => 'Verschachtelte &lt;translate&gt;-Abschnitte sind nicht möglich.
Text des Tag: <pre>$1</pre>',
	'pt-shake-multiple' => 'Mehrere Abschnittsmarker für einen Abschnitt.
Text des Abschnitts: <pre>$1</pre>',
	'pt-shake-position' => 'Abschnittsmarker befinden sich an unerwarteter Stelle.
Text des Abschnitts: <pre>$1</pre>',
	'pt-shake-empty' => 'Der Abschnitt für Marker $1 ist leer.',
	'pt-log-header' => 'Logbuch der Änderungen im Zusammenhang mit dem Übersetzungssystem für Seiten',
	'pt-log-name' => 'Übersetzungs-Logbuch',
	'pt-log-mark' => '{{GENDER:$2|gab}} Version $3 der Seite [[:$1]] zur Übersetzung frei',
	'pt-log-unmark' => '{{GENDER:$2|entfernte}} Seite [[:$1]] aus der Übersetzung',
	'pt-log-moveok' => '{{GENDER:$2|schloss}} die Umbenennung der übersetzbaren Seite $1 auf $3 ab',
	'pt-log-movenok' => '{{GENDER:$2|hatte}} ein Problem während der Verschiebung von [[:$1]] nach [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|schloss}} das Löschen der übersetzbaren Seite $1 ab',
	'pt-log-delete-full-nok' => '{{GENDER:$2|hatte}} ein Problem während des Löschens der übersetzbaren Seite [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|schloss}} das Löschen der übersetzten Seite $1 ab',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|hatte}} ein Problem während des Löschens der übersetzten Seite [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|Entfernte}} die priorisierten Sprachen von der übersetzbaren Seite [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|Legte}} die priorisierten Sprachen für die übersetzbare Seite [[:$1]] auf $3 fest',
	'pt-log-priority-langs-force' => '{{GENDER:$2|Schränkte}} die Sprachen für die übersetzbare Seite [[:$1]] auf $3 ein',
	'pt-movepage-title' => 'Die Übersetzungsseite $1 verschieben',
	'pt-movepage-blockers' => 'Die zum Übersetzen vorgesehene Seite konnte aufgrund {{PLURAL:$1|folgendes Fehlers|folgender Fehler}} nicht zur neuen Bezeichnung verschoben werden:',
	'pt-movepage-block-base-exists' => 'Die Basisseite [[:$1]] existiert bereits.',
	'pt-movepage-block-base-invalid' => 'Die Basisseite hat keine gültige Bezeichnung.',
	'pt-movepage-block-tp-exists' => 'Die Übersetzungsseite [[:$2]] existiert bereits.',
	'pt-movepage-block-tp-invalid' => 'Die Zielbezeichnung der Übersetzungsseite für [[:$1]] wäre ungültig (zu lang?).',
	'pt-movepage-block-section-exists' => 'Die Abschnittsseite [[:$2]] existiert bereits.',
	'pt-movepage-block-section-invalid' => 'Die Zielbezeichnung der Abschnittsseite für [[:$1]] wäre ungültig (zu lang?).',
	'pt-movepage-block-subpage-exists' => 'Die Unterseite [[:$2]] existiert bereits.',
	'pt-movepage-block-subpage-invalid' => 'Die Zielbezeichnung der Unterseite für [[:$1]] wäre ungültig (zu lang?).',
	'pt-movepage-list-pages' => 'Liste der zu verschiebenden Seiten',
	'pt-movepage-list-translation' => 'Übersetzte Seiten',
	'pt-movepage-list-section' => 'Abschnittsseiten',
	'pt-movepage-list-other' => 'Weitere Unterseiten',
	'pt-movepage-list-count' => 'Insgesamt gibt es $1 zu verschiebende {{PLURAL:$1|Seite|Seiten}}.',
	'pt-movepage-legend' => 'Übersetzungsseite verschieben',
	'pt-movepage-current' => 'Aktueller Seitenname:',
	'pt-movepage-new' => 'Neuer Seitenname:',
	'pt-movepage-reason' => 'Grund:',
	'pt-movepage-subpages' => 'Alle Unterseiten verschieben',
	'pt-movepage-action-check' => 'Überprüfung, ob die Verschiebung möglich ist',
	'pt-movepage-action-perform' => 'Verschiebung durchführen',
	'pt-movepage-action-other' => 'Ziel ändern',
	'pt-movepage-intro' => 'Diese Spezialseite ermöglicht es Seiten zu verschieben, die zur Übersetzung gekennzeichnet wurden.
Die Verschiebung wird nicht unverzüglich erfolgen, da dabei viele Seiten zu verschieben sind.
Während des Verschiebevorgangs ist es nicht möglich, die entsprechenden Seiten zu nutzen.
Verschiebefehler werden im [[Special:Log/pagetranslation|Übersetzungs-Logbuch]] aufgezeichnet und müssen manuell korrigiert werden.',
	'pt-movepage-logreason' => 'Teil der übersetzbaren Seite $1.',
	'pt-movepage-started' => 'Die Basisseite wurde nunmehr verschoben.
Bitte prüfe das [[Special:Log/pagetranslation|Übersetzungs-Logbuch]] auf Fehlermeldungen, bzw. die Vollzugsnachricht.',
	'pt-locked-page' => 'Diese Seite ist gesperrt, da die Übersetzungsseite momentan verschoben wird.',
	'pt-deletepage-lang-title' => 'Löschen der übersetzten Seite $1.',
	'pt-deletepage-full-title' => 'Löschen der übersetzbaren Seite $1.',
	'pt-deletepage-invalid-title' => 'Die angegebene Seite ist ungültig.',
	'pt-deletepage-invalid-text' => 'Die angegebene Seite ist weder eine übersetzbare Seite noch eine Übersetzung.',
	'pt-deletepage-action-check' => 'Zu löschende Seiten auflisten',
	'pt-deletepage-action-perform' => 'Löschung ausführen',
	'pt-deletepage-action-other' => 'Das Ziel ändern',
	'pt-deletepage-lang-legend' => 'Übersetze Seite löschen',
	'pt-deletepage-full-legend' => 'Übersetzbare Seite löschen',
	'pt-deletepage-any-legend' => 'Übersetzbare oder übersetzte Seite löschen',
	'pt-deletepage-current' => 'Seitenname:',
	'pt-deletepage-reason' => 'Grund:',
	'pt-deletepage-subpages' => 'Alle Unterseiten löschen',
	'pt-deletepage-list-pages' => 'Liste der zu löschenden Seiten',
	'pt-deletepage-list-translation' => 'Übersetzte Seiten',
	'pt-deletepage-list-section' => 'Abschnittsseiten',
	'pt-deletepage-list-other' => 'Weitere Unterseiten',
	'pt-deletepage-list-count' => 'Insgesamt gibt es $1 zu löschende {{PLURAL:$1|Seite|Seiten}}.',
	'pt-deletepage-full-logreason' => 'Teil der übersetzbaren Seite $1.',
	'pt-deletepage-lang-logreason' => 'Teil der übersetzten Seite $1.',
	'pt-deletepage-started' => 'Bitte das [[Special:Log/pagetranslation|Übersetzungs-Logbuch]] nach Fehlern und Ausführungsnachrichten prüfen.',
	'pt-deletepage-intro' => 'Diese Spezialseite ermöglicht die Löschung von in eine Sprache übersetzbare oder übersetzte Seiten.
Die Ausführung der Löschungen wird, je nach Anzahl der zu löschenden Seiten, nicht unmittelbar erfolgen.
Fehler werden im [[Special:Log/pagetranslation|Übersetzungs-Logbuch]] aufgezeichnet und müssen nachträglich manuell berichtigt werden.',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Imre
 * @author Kghbln
 * @author Purodha
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'tpt-action-nofuzzy' => 'Setzen Sie die Übersetzungen nicht außer Kraft',
	'tpt-notsuitable' => 'Die Seite $1 ist nicht zum Übersetzen geeignet.
Stellen Sie sicher, dass ein <nowiki><translate></nowiki>-Tag und gültige Syntax verwendet wird.',
	'tpt-showpage-intro' => 'Untenstehend sind neue, vorhandene und gelöschte Abschnitte aufgelistet.
Bevor Sie diese Version zur Übersetzung markieren, stellen Sie bitte sicher, dass die Änderungen an den Abschnitten minimal sind, um unnötige Arbeit für Übersetzer zu verhindern.',
	'pt-movepage-started' => 'Die Basisseite wurde nunmehr verschoben.
Bitte prüfen Sie das [[Special:Log/pagetranslation|Übersetzungs-Logbuch]] auf Fehlermeldungen, bzw. die Vollzugsnachricht.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'pagetranslation' => 'Pśełožowanje bokow',
	'right-pagetranslation' => 'Wersije bokow za pśełožowanje markěrowaś',
	'tpt-desc' => 'Rozšyrjenje za pśełožowanje wopśimjeśowych bokow',
	'tpt-section' => 'Pśełožowańska jadnotka $1',
	'tpt-section-new' => 'Nowa pśełožowańska jadnotka. Mě: $1',
	'tpt-section-deleted' => 'Pśełožowańska jadnotka $1',
	'tpt-template' => 'Bokowa pśedłoga',
	'tpt-templatediff' => 'Bokowa pśedłoga jo se změniła.',
	'tpt-diff-old' => 'Pśedchadny tekst',
	'tpt-diff-new' => 'Nowy tekst',
	'tpt-submit' => 'Toś tu wersiju za pśełožowanje markěrowaś',
	'tpt-sections-oldnew' => 'Nowe a eksistowace pśełožowańske jadnotki',
	'tpt-sections-deleted' => 'Wulašowane pśełožowańske jadnotki',
	'tpt-sections-template' => 'Pśedłoga pśełožowańskego boka',
	'tpt-action-nofuzzy' => 'Njeanulěruj pśełožki',
	'tpt-badtitle' => 'Pódane bokowe mě ($1) njejo płaśiwy titel',
	'tpt-nosuchpage' => 'Bok $1 njeeksistěrujo',
	'tpt-oldrevision' => '$2 njejo aktualna wersija boka [[$1]].
Jano aktualne wersije daju se za pśełožowanje markěrowaś.',
	'tpt-notsuitable' => 'Bok $1 njejo gódny za pśełožowanje.
Zawěsć, až ma toflicki <nowiki><translate></nowiki> a płaśiwu syntaksu.',
	'tpt-saveok' => 'Bok [[$1]] jo se markěrował za pśełožowanje z $2 {{PLURAL:$2|pśełožujobneju jadnotku|pśełožujobnyma jadnotkoma|pśełožujobnymi jadnotkami|pśełožujobnymi jadnotkami}}. Bok móže se něnto <span class="plainlinks">[$3 pśełožowaś]</span>.',
	'tpt-badsect' => '"$1" njejo płaśiwe mě za pśełožowańsku jadnotku $2.',
	'tpt-showpage-intro' => 'Dołojce su nowe, eksistěrujuce a wulašowane wótrězki nalicone.
Nježli až markěrujoš toś tu wersiju za pśełožowanje, pśekontrolěruj, lěc změny na wótrězkach su zminiměrowane, aby se wobinuł njetrěbne źěło za pśełožowarjow.',
	'tpt-mark-summary' => 'Jo toś tu wersiju za pśełožowanje markěrował',
	'tpt-edit-failed' => 'Toś ten bok njejo se dał aktualizěrowaś: $1',
	'tpt-duplicate' => 'Mě pśełožkoweje jadnotki $1 wužywa se wěcej ako jaden raz.',
	'tpt-already-marked' => 'Aktualna wersija toś togo boka jo južo za pśełožowanje markěrowana.',
	'tpt-unmarked' => 'Bok $1 wěcej njejo za pśełožowanje markěrowany.',
	'tpt-list-nopages' => 'Žedne boki njejsu za pśełožowanje markěrowane ani su gótowe, aby se za pśełožowanje markěrowali.',
	'tpt-new-pages-title' => 'Boki naraźone za pśełožowanje',
	'tpt-old-pages-title' => 'Boki, kótarež se pśełožuju',
	'tpt-other-pages-title' => 'Wobškóźone boki',
	'tpt-discouraged-pages-title' => 'Wuzamknjone boki',
	'tpt-new-pages' => '{{PLURAL:$1|Toś ten bok wopśimujo|Toś tej boka wopśumujotej|Toś te boki wopśimuju|Toś te boki wopśimuju}} tekst z pśełožowańskimi toflickami, ale žedna wersija {{PLURAL:$1|toś togo boka|toś teju bokowu|toś tych bokow|toś tych bokow}} njejo tuchylu za pśełožowanje markěrowana.',
	'tpt-old-pages' => 'Někaka wersija {{PLURAL:$1|toś togo boka|toś teju bokowu|toś tych bokow|toś tych bokow}} jo se za pśełožowanje markěrowała.',
	'tpt-other-pages' => 'Stara wersija {{PLURAL:$1|toś togo boka|toś teju bokowu|toś tych bokow|tośtych bokow}} jo za pśełožowanje markěrowana,
ale nejnowša wersija njedajo se za pśełožowanje markěrowaś.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Toś ten bok|Toś tej boka|Toś te boki|Toś te boki}} {{PLURAL:$1|jo|stej|su|su}} se wót dalšnego pśełoženja {{PLURAL:$1|wuzamknuła|wuzamknułej|wuzamknuli|wuzamknuli}}.',
	'tpt-select-prioritylangs' => 'Lisćina rěcnych kodow źělonych pśez komu:',
	'tpt-select-prioritylangs-force' => 'Pśełožkam do drugich rěcow zajźowaś',
	'tpt-select-prioritylangs-reason' => 'Pśicyna:',
	'tpt-sections-prioritylangs' => 'Primarne rěcy',
	'tpt-rev-mark' => 'za pśełožowanje markěrowaś',
	'tpt-rev-unmark' => 'wót pśełožowanja wuzamknuś',
	'tpt-rev-discourage' => 'wuzamknuś',
	'tpt-rev-encourage' => 'wótnowiś',
	'tpt-rev-mark-tooltip' => 'Nejnowšu wersiju toś togo boka za pśełožowanje markěrowaś.',
	'tpt-rev-unmark-tooltip' => 'Toś ten bok z pśełoženja wótpóraś',
	'tpt-rev-discourage-tooltip' => 'Dalšne pśełožki na toś tom boku wuzamknuś.',
	'tpt-rev-encourage-tooltip' => 'Toś ten bok za normalne pśełožowanje wótnowiś.',
	'translate-tag-translate-link-desc' => 'Toś ten bok pśełožyś',
	'translate-tag-markthis' => 'Toś ten bok za pśełožowanje markěrowaś',
	'translate-tag-markthisagain' => 'Toś ten bok ma <span class="plainlinks">[$1 {{PLURAL:$1|změnu|změnje|změny|změnow}}]</span>, wót togo casa, ako jo se slědny raz <span class="plainlinks">[$2 za pśełožowanje markěrował]</span>.',
	'translate-tag-hasnew' => 'Toś ten bok wopśimujo <span class="plainlinks">[$1 {{PLURAL:$1|změnu, kótaraž njejo markěrowana|změnje, kótarejž njejstej markěrowanej|změny, kótare njejsu markěrowane|změnow, kótarež njejsu markěrowane}}]</span> za pśełožowanje.',
	'tpt-translation-intro' => 'Toś ten bok jo <span class="plainlinks">[$1 pśełožona wersija]</span> boka [[$2]] a $3 % pśełožka jo dogótowane a pśełožk jo aktualny.',
	'tpt-translation-intro-fuzzy' => 'Zestarjone pśełožki su kaž toś ten markěrowany.',
	'tpt-languages-legend' => 'Druge rěcy:',
	'tpt-languages-zero' => 'Pśełožowanje za toś tu rěc zachopiś',
	'tpt-target-page' => 'Toś ten bok njedajo se manuelnje aktualizěrowaś.
Toś ten bok jo pśełožk boka [[$1]] a pśełožk dajo se z pomocu [$2 Pśełožyś] aktualizěrowaś.',
	'tpt-unknown-page' => 'Toś ten mjenjowy rum jo za pśełožki wopśimjeśowych bokow wuměnjony.
Zda se, až bok, kótaryž wopytujoš wobźěłaś, njewótpowědujo bokoju, kótaryž jo za pśełožowanje markěrowany.',
	'tpt-translation-restricted' => 'Pśełožowański administrator jo pśełožowanjeju toś teje kupki do toś teje rěcy jo zajźował.

Pśicyna za wobgranicowanje: $1',
	'tpt-discouraged-language-force' => 'Pśełožowański administrator jo rěcy wobgranicował, do kótarychž toś ta zdźěleńska kupka dajo se pśełožyś. Toś rěc njejo mjazy toś tymi rěcami:

Pśicyna za wobgranicowanje: $1',
	'tpt-discouraged-language' => 'Toś ta rěc njejo mjazy primarnymi rěcami, kótarež pśełožowański administrator jo za toś tu zdźěleńsku kupku póstajił.

Pśicyna za prioritu: $1',
	'tpt-render-summary' => 'Aktualizacija pó nowej wersiji žrědłowego boka',
	'tpt-download-page' => 'Bok z pśełožkami eksportěrowaś',
	'pt-parse-open' => 'Asymetriska toflicka &lt;translate>.
Pśełožowańska pśedłoga: <pre>$1</pre>',
	'pt-parse-close' => 'Asymetriska toflicka &lt;/translate>.
Pśełožowańska pśedłoga: <pre>$1</pre>',
	'pt-parse-nested' => 'Zakašćikowane wótrězki &lt;translate&gt; njejsu dowólone.
Tekst toflicki: <pre>$1</pre>',
	'pt-shake-multiple' => 'Někotare wótrězkowe marki za jaden wótrězk.
Tekst wótrězka: <pre>$1</pre>',
	'pt-shake-position' => 'Wótrězkowe marki na njewócakowanem městnje.
Tekst wótrězka: <pre>$1</pre>',
	'pt-shake-empty' => 'Prozny wótrězk za marku $1.',
	'pt-log-header' => 'Protokol za akcije w zwisku z pśełožowańskim systemom',
	'pt-log-name' => 'Protokol pśełožkow',
	'pt-log-mark' => 'jo wersiju $3 boka "[[:$1]]" za pśełožowanje {{GENDER:$2|markěrował|markěrowała}}.',
	'pt-log-unmark' => 'jo bok "[[:$1]]" z pśełožowanja {{GENDER:$2|wótpórał|wótpórała}}.',
	'pt-log-moveok' => 'Je {{GENDER:$2|dokóńcył|dokóńcyła}} pśemjenowanje pśełožujobnego boka $1 do $3',
	'pt-log-movenok' => 'Jo {{GENDER:$2|starcył|starcyła}} na problem pśi pśesuwanju [[:$1]] do [[:$3]]',
	'pt-log-delete-full-ok' => 'Jo {{GENDER:$2|dokóńcył|dokóńcyła}} wulašowanje pśełožujobnego boka $1',
	'pt-log-delete-full-nok' => 'jo {{GENDER:$2|starcył|starcyła}} na problem pśi lašowanju pśełožujobnego boka [[:$1]]',
	'pt-log-delete-lang-ok' => 'Jo {{GENDER:$2|dokóńcył|dokóńcyła}} wulašowanje pśełožujobnego boka $1',
	'pt-log-delete-lang-nok' => 'jo {{GENDER:$2|starcył|starcyła}} na problem pśi lašowanju pśełožonego boka [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2}} jo primarne rěcy z pśełožujobnego boka [[:$1]] {{GENDER:$2|wótpórał|wótpórała}}',
	'pt-log-priority-langs' => '{{GENDER:$2}} jo primarne rěcy za pśełožujobny bok [[:$1]] na $3 {{GENDER:$2|póstajił|póstajiła}}',
	'pt-log-priority-langs-force' => '{{GENDER:$2}} jo rěcy za pśełožujobny bok [[:$1]] na $3 {{GENDER:$2|wobgranicował|wobgranicowała}}',
	'pt-movepage-title' => 'Psełožujobny bok $1 psésunuś',
	'pt-movepage-blockers' => 'Pśełožujobny bok njedajo se dla {{PLURAL:$1|slědujuceje zmólki|slědujuceju zmólkowu|slědujucych zmólkow|slědujucych zmólkow}} do nowego mjenja pśesunuś:',
	'pt-movepage-block-base-exists' => 'Celowy zakładny bok  [[:$1]] eksistěrujo.',
	'pt-movepage-block-base-invalid' => 'Celowy zakładny bok njejo płaśiwy titel.',
	'pt-movepage-block-tp-exists' => 'Celowy pśełožowański bok [[:$2]] eksistěrujo.',
	'pt-movepage-block-tp-invalid' => 'Titel celowego pśełožowańskego boka za [[:$1]] by był njepłaśiwy (pśedłujki?).',
	'pt-movepage-block-section-exists' => 'Celowy wótrězkowy bok [[:$2]] eksistěrujo.',
	'pt-movepage-block-section-invalid' => 'Titel celowego wótrězkowego boka za [[:$1]] by był njepłaśiwy (pśedłujki?).',
	'pt-movepage-block-subpage-exists' => 'Celowy pódbok [[:$2]] eksistěrujo.',
	'pt-movepage-block-subpage-invalid' => 'Titel celowego pódboka za [[:$1]] by był njepłaśiwy (pśedłuki?).',
	'pt-movepage-list-pages' => 'Lisćina bokow, kótarež maju se pśesunuś',
	'pt-movepage-list-translation' => 'Pśełožowańske boki',
	'pt-movepage-list-section' => 'Wótrězkowe boki',
	'pt-movepage-list-other' => 'Druge pódboki',
	'pt-movepage-list-count' => 'Dogromady {{PLURAL:$1|ma se $1 bok|matej se $1 boka|maju se $1 boki|ma se $1 bokow}} pśesunuś.',
	'pt-movepage-legend' => 'Pśełožujobny bok pśesunuś',
	'pt-movepage-current' => 'Aktualne mě:',
	'pt-movepage-new' => 'Nowe mě:',
	'pt-movepage-reason' => 'Pśicyna:',
	'pt-movepage-subpages' => 'Wšykne pódboki pśesunuś',
	'pt-movepage-action-check' => 'Kontrolěrowaś, lěc pśesunjenje jo móžno',
	'pt-movepage-action-perform' => 'Pśesunuś',
	'pt-movepage-action-other' => 'Cel změniś',
	'pt-movepage-intro' => 'Toś ten specialny bok dowólujo śi boki pśesunuś, kótarež sz za pśełožk markěrowane.
Pśesunjenje njebuźo se ned staś, dokulaž wjele bokow musy se pśesunuś.

Mjaztym až boki se pśesuwaju,  njejo móžno z wótpowědnymi bokami interagěrowaś.
Zmólki budu se protokolěrowaś w [[Special:Log/pagetranslation|pséłožowańskem protokolu]] a muse se manuelnje wótpóraś.',
	'pt-movepage-logreason' => 'Źěl pśełožujobnego boka $1.',
	'pt-movepage-started' => 'Zakładny bok jo něnto pśesunjony.
Pšosym pśekontrolěruj [[Special:Log/pagetranslation|pśełožowański protokol boka]] za zmólkami a zdźělenje wuwjeźenja.',
	'pt-locked-page' => 'Toś ten bok jo se zastajił, dokulaž pśełožujobny bok se rowno pśesuwa.',
	'pt-deletepage-lang-title' => 'Pśełožony bok $1 so lašujo.',
	'pt-deletepage-full-title' => 'Pśełožujobny bok $1 so lašujo.',
	'pt-deletepage-invalid-title' => 'Pódany bok njejo płaśiwy.',
	'pt-deletepage-invalid-text' => 'Pódany bok njejo ani pśełožujobny bok ani pśełožk.',
	'pt-deletepage-action-check' => 'Boki nalicyś, kótarež maju se wulašowaś',
	'pt-deletepage-action-perform' => 'Lašowaś',
	'pt-deletepage-action-other' => 'Cel změniś',
	'pt-deletepage-lang-legend' => 'Pśełožony bok wulašowaś',
	'pt-deletepage-full-legend' => 'Pśełožujobny bok wulašowaś',
	'pt-deletepage-any-legend' => 'Přełožujobny bok abo pśełožk pśełožujobnego boka wulašowś',
	'pt-deletepage-current' => 'Mě boka:',
	'pt-deletepage-reason' => 'Pśicyna:',
	'pt-deletepage-subpages' => 'Wšykne pódboki lašowaś:',
	'pt-deletepage-list-pages' => 'Lisćina bokow, kótarež maju se wulašowaś',
	'pt-deletepage-list-translation' => 'Pśełožowańske boki',
	'pt-deletepage-list-section' => 'Wótrězkowe boki',
	'pt-deletepage-list-other' => 'Druge pódboki',
	'pt-deletepage-list-count' => 'Dogromady {{PLURAL:$1|ma se $1 bok|matej se $1 boka|maju se $1 boki|ma se $1 bokow}} wulašowaś.',
	'pt-deletepage-full-logreason' => 'Źěl pśełožujobnego boka $1.',
	'pt-deletepage-lang-logreason' => 'Źěl pśełožonego boka $1.',
	'pt-deletepage-started' => 'Pšosym pśekontrolěruj [[Special:Log/pagetranslation|pśełožowański protokol boka]] za zmólkami a zdźělenjami wuwjeźenja.',
	'pt-deletepage-intro' => 'Toś ten specialny bok śi dowólujo, aby do rěcy pśełožujobne boki abo  pśełožki wulašował.
Lašowanje njestanjo se ned, dokulaž wjele bokow musy se wulašowaś.
Zmólki budu se w  [[Special:Log/pagetranslation|protokolu pśełožkow]] protokolěrowaś a wóne muse se manuelnje pórěźiś.',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'translate-tag-translate-link-desc' => 'Ɖe axa sia gɔme',
	'tpt-languages-legend' => 'Gbe bubuwo:',
);

/** Greek (Ελληνικά)
 * @author Dead3y3
 * @author Flyax
 * @author Lou
 * @author ZaDiak
 */
$messages['el'] = array(
	'pagetranslation' => 'Μετάφραση σελίδων',
	'right-pagetranslation' => 'Σήμανση εκδόσεων σελίδων προς μετάφραση',
	'tpt-desc' => 'Επέκταση για μετάφραση σελίδων περιεχομένου',
	'tpt-section' => 'Μονάδα μετάφρασης $1',
	'tpt-section-new' => 'Νέα μονάδα μετάφρασης.
Όνομα: $1',
	'tpt-section-deleted' => 'Μονάδα μετάφρασης $1',
	'tpt-template' => 'Πρότυπο σελίδας',
	'tpt-templatediff' => 'Το πρότυπο σελίδας έχει αλλάξει.',
	'tpt-diff-old' => 'Προηγούμενο κείμενο',
	'tpt-diff-new' => 'Νέο κείμενο',
	'tpt-submit' => 'Σήμανση αυτής της έκδοσης για μετάφραση',
	'tpt-sections-oldnew' => 'Νέες και υπάρχοντες μονάδες μετάφρασης',
	'tpt-sections-deleted' => 'Διαγραμμένες μονάδες μετάφρασης',
	'tpt-sections-template' => 'Πρότυπο μετάφρασης σελίδας',
	'tpt-badtitle' => 'Ο τίτλος σελίδας που δόθηκε ($1) δεν είναι έγκυρος τίτλος',
	'tpt-notsuitable' => 'Η σελίδα $1 δεν είναι κατάλληλη για μετάφραση.
Βεβαιωθείτε ότι έχει τις ετικέτες <nowiki><translate></nowiki> και έχει έγκυρη σύνταξη.',
	'tpt-badsect' => 'Το "$1" δεν είναι έγκυρο όνομα για τη μονάδα μετάφρασης $2.',
	'tpt-mark-summary' => 'Αυτή η έκδοση σημάνθηκε για μετάφραση',
	'tpt-edit-failed' => 'Δεν ήταν δυνατό να ενημερωθεί η σελίδα: $1',
	'tpt-already-marked' => 'Η τελευταία έκδοση της σελίδας έχει ήδη σημανθεί προς μετάφραση.',
	'tpt-list-nopages' => 'Καμιά σελίδα δεν έχει σημανθεί προς μετάφραση ούτε είναι έτοιμο για σήμανση προς μετάφραση.',
	'translate-tag-translate-link-desc' => 'Μεταφράστε αυτή τη σελίδα',
	'translate-tag-markthis' => 'Σήμανση αυτής της σελίδας για μετάφραση',
	'tpt-translation-intro-fuzzy' => 'Ξεπερασμένες μεταφράσεις σημειώνονται ως εξής.',
	'tpt-languages-legend' => 'Άλλες γλώσσες:',
	'tpt-render-summary' => 'Ενημέρωση για να αντιστοιχεί στη νέα έκδοση της σελίδας πηγής',
	'tpt-download-page' => 'Εξαγωγή της σελίδας με τις μεταφράσεις',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 * @author Yekrats
 */
$messages['eo'] = array(
	'pagetranslation' => 'Paĝa traduko',
	'right-pagetranslation' => 'Marki versiojn de paĝoj por traduki',
	'tpt-desc' => 'Kromprogramo por tradukado de enhavaj paĝoj',
	'tpt-section' => 'Tradukada unuo $1',
	'tpt-section-new' => 'Nova tradukada unuo.
Nomo: $1',
	'tpt-section-deleted' => 'Tradukada unuo $1',
	'tpt-template' => 'Paĝa ŝablono',
	'tpt-templatediff' => 'La paĝa ŝablono estis ŝanĝita.',
	'tpt-diff-old' => 'Antaŭa teksto',
	'tpt-diff-new' => 'Nova teksto',
	'tpt-submit' => 'Marki ĉi tiun version por traduki',
	'tpt-sections-oldnew' => 'Novaj kaj ekzistantaj tradukaĵoj',
	'tpt-sections-deleted' => 'Forigitaj tradukadaj unuoj',
	'tpt-sections-template' => 'Ŝablono por tradukada paĝo',
	'tpt-action-nofuzzy' => 'Ne malvalidigu tradukojn.',
	'tpt-badtitle' => 'La provizita paĝnomo ($1) ne estas valida titolo',
	'tpt-nosuchpage' => 'La paĝo $1 ne ekzistas.',
	'tpt-oldrevision' => '$2 ne estas la lasta versio de la paĝo [[$1]].
Nur la lasta versio de la paĝo povas esti markita por esti tradukita.',
	'tpt-notsuitable' => 'Paĝo $1 ne taŭgas por traduki.
Certigu ke ĝi havas etikedojn <nowiki><translate></nowiki> kaj havas validan sintakson.',
	'tpt-saveok' => 'La paĝo [[$1]] estis markita por esti tradukita kun $2 traduk{{PLURAL:$2|ero|eroj}}.
La paĝo povas nun esti <span class="plainlinks">[$3 tradukita]</span>.',
	'tpt-badsect' => '« $1 » ne estas valida nomo por tradukero $2.',
	'tpt-mark-summary' => 'Markis ĉi tiun version por traduki.',
	'tpt-edit-failed' => 'Ne eblis ĝisdatigi la paĝon: $1',
	'tpt-old-pages-title' => 'Paĝoj en traduko',
	'tpt-other-pages-title' => 'Rompitaj paĝoj',
	'tpt-rev-mark' => 'marki por traduki',
	'tpt-rev-unmark' => 'forigi el traduko',
	'tpt-rev-encourage' => 'restarigi',
	'translate-tag-translate-link-desc' => 'Traduki ĉi tiun paĝon',
	'translate-tag-markthis' => 'Marki ĉi tiun paĝon por tradukado',
	'tpt-languages-legend' => 'Aliaj lingvoj:',
	'tpt-download-page' => 'Eksporti paĝon kun tradukoj',
	'pt-log-name' => 'Protokolo pri paĝaj tradukoj',
	'pt-log-mark' => '{{GENDER:$2|markis}} revizion $3 de paĝo "[[:$1]]" por traduki',
	'pt-movepage-list-translation' => 'Tradukaj paĝoj',
	'pt-movepage-list-section' => 'Paĝoj en sekcio',
	'pt-movepage-list-other' => 'Aliaj subpaĝoj',
	'pt-movepage-current' => 'Nuna nomo:',
	'pt-movepage-new' => 'Nova nomo:',
	'pt-movepage-reason' => 'Kialo:',
	'pt-deletepage-action-perform' => 'Fari la forigon',
	'pt-deletepage-current' => 'Nomo de paĝo:',
	'pt-deletepage-reason' => 'Kialo:',
	'pt-deletepage-subpages' => 'Forigi ĉiujn subpaĝojn',
	'pt-deletepage-list-section' => 'Sekciaj paĝoj',
	'pt-deletepage-list-count' => 'Entute $1 {{PLURAL:$1|paĝo|paĝoj}} por forigi.',
);

/** Spanish (Español)
 * @author Antur
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Diego Grez
 * @author Imre
 * @author Mor
 * @author Purodha
 * @author Sanbec
 * @author Translationista
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'pagetranslation' => 'Traducción de página',
	'right-pagetranslation' => 'Marcar versiones de páginas para traducción',
	'tpt-desc' => 'Extensiones para traducir páginas de contenido',
	'tpt-section' => 'Unidad de traducción $1',
	'tpt-section-new' => 'Nueva unidad de traducción. Nombre: $1',
	'tpt-section-deleted' => 'Unidad de traducción $1',
	'tpt-template' => 'Plantilla de página',
	'tpt-templatediff' => 'La plantilla de página ha cambiado.',
	'tpt-diff-old' => 'Texto previo',
	'tpt-diff-new' => 'Nuevo texto',
	'tpt-submit' => 'Marcar esta versión para traducción',
	'tpt-sections-oldnew' => 'Unidades de traducción nuevas y existentes',
	'tpt-sections-deleted' => 'Unidades de traducción borradas',
	'tpt-sections-template' => 'Plantilla de página de traducción',
	'tpt-action-nofuzzy' => 'No invalidar traducciones',
	'tpt-badtitle' => 'El nombre de página dado ($1) no es un título válido',
	'tpt-nosuchpage' => 'Página $1 no existe',
	'tpt-oldrevision' => '$2 no es la última versión de la página [[$1]].
Solamente las últimas versiones pueden ser marcadas para traducción',
	'tpt-notsuitable' => 'La página $1 no es adecuada para traducción.
Asegúrate que tiene etiquetas <nowiki><translate></nowiki> y tiene una sintaxis válida.',
	'tpt-saveok' => 'La página [[$1]] ha sido marcada para traducción con $2 {{PLURAL:$2|unidad de traducción |unidades de traducción}}.
La página puede ser ahora <span class="plainlinks">[$3 traducida]</span>.',
	'tpt-badsect' => '"$1" no es un nombre válido para una unidad de traducción $2.',
	'tpt-showpage-intro' => 'Debajo están listadas secciones nuevas, existentes y borradas .
Antes de marcar esta versión para traducción, verifica que los cambios a las secciones son mínimos para evitar trabajo innecesario a los traductores.',
	'tpt-mark-summary' => 'Marcada esta sección para traducción',
	'tpt-edit-failed' => 'No pudo actualizar la página : $1',
	'tpt-duplicate' => 'El nombre de la unidad de traducción  $1 es utilizado más de una vez.',
	'tpt-already-marked' => 'La última versión de esta página ya ha sido marcada para traducción.',
	'tpt-unmarked' => 'Página $1 ya no está marcada para traducción.',
	'tpt-list-nopages' => 'Ninguna página está marcada para traducción ni lista para ser marcada para traducción.',
	'tpt-new-pages-title' => 'Páginas propuestas para traducción',
	'tpt-old-pages-title' => 'Páginas en curso de traducción',
	'tpt-other-pages-title' => 'Páginas rotas',
	'tpt-discouraged-pages-title' => 'Páginas desaconsejadas',
	'tpt-new-pages' => '{{PLURAL:$1|Esta página contiene|Estas páginas contienen}} texto con etiquetas de traducción, pero ninguna versión de {{PLURAL:$1|esta página est|estas páginas están}} actualmente marcadas para traducción.',
	'tpt-old-pages' => 'Alguna versión de {{PLURAL:$1|esta página|estas páginas han}} sido marcadas para traducción.',
	'tpt-other-pages' => 'Versión antigua de {{PLURAL:$1|esta página está|estas páginas están}} marcadas para traducción,
pero la última versión no puede ser marcada para traducción.',
	'tpt-discouraged-pages' => 'Se desaconseja la traducción adicional de {{PLURAL:$1|esta página|estas páginas}}.',
	'tpt-select-prioritylangs' => 'Lista de códigos de idioma prioritarios separados por comas:',
	'tpt-select-prioritylangs-force' => 'Impedir la traducción a otros idiomas distintos de los prioritarios',
	'tpt-select-prioritylangs-reason' => 'Motivo:',
	'tpt-sections-prioritylangs' => 'Idiomas prioritarios',
	'tpt-rev-mark' => 'marcar para traducción',
	'tpt-rev-unmark' => 'eliminar de la traducción',
	'tpt-rev-discourage' => 'desaconsejar',
	'tpt-rev-encourage' => 'restaurar',
	'tpt-rev-mark-tooltip' => 'Marcar la última versión de esta página para traducción.',
	'tpt-rev-unmark-tooltip' => 'Eliminar esta página de la traducción',
	'tpt-rev-discourage-tooltip' => 'Desaconsejar nuevas traducciones de esta página.',
	'tpt-rev-encourage-tooltip' => 'Restaurar esta página para traducción normal.',
	'translate-tag-translate-link-desc' => 'Traducir esta página',
	'translate-tag-markthis' => 'Marcar esta página para traducción',
	'translate-tag-markthisagain' => 'Esta página tiene <span class="plainlinks">[$1 cambios]</span> desde la última vez que fue <span class="plainlinks">[$2 marcada para traducción]</span>.',
	'translate-tag-hasnew' => 'Esta página contiene <span class="plainlinks">[$1 cambios]</span> los cuales no han sido marcados para traducción.',
	'tpt-translation-intro' => 'Esta página es una <span class="plainlinks">[$1 versión traducida]</span> de una página [[$2]] y la traducción está $3% completa y actualizada.',
	'tpt-translation-intro-fuzzy' => 'Traducciones desactualizadas están marcadas así.',
	'tpt-languages-legend' => 'Otros idiomas:',
	'tpt-languages-zero' => 'Iniciar la traducción para este idioma',
	'tpt-target-page' => 'Esta página no puede ser actualizada manualmente.
Esta página es una traducción de la página [[$1]] y la traducción puede ser actualizada usando [$2 la herramienta de traducción].',
	'tpt-unknown-page' => 'Este espacio de nombre está reservado para traducciones de páginas de contenido.
La página que estás tratando de editar no parece corresponder con alguna página marcada para traducción.',
	'tpt-translation-restricted' => 'La traducción de esta página a este idioma ha sido impedida por un administrador de traducción.

Motivo de la restricción: $1',
	'tpt-discouraged-language-force' => 'Un administrador de traducción ha limitado los idiomas a los que esta página puede ser traducida. Este idioma no está entre ellos.

Razón: $1',
	'tpt-discouraged-language' => 'Este idioma no está entre los idiomas prioritarios establecidos por un administrador de traducción para esta página.

Razón: $1',
	'tpt-render-summary' => 'Actualizando para hallar una nueva versión de la página fuente',
	'tpt-download-page' => 'Exportar página con traducciones',
	'pt-parse-open' => 'Etiqueta &lt;translate> desequilibrada.
Plantilla de traducción: <pre>$1</pre>',
	'pt-parse-close' => 'Etiqueta &lt;/translate> desequilibrada.
Plantilla de traducción: <pre>$1</pre>',
	'pt-parse-nested' => 'No se permite secciones anidadas &lt;translate>.
Texto de etiqueta: <pre>$1</pre>',
	'pt-shake-multiple' => 'Múltiples marcadores de la sección para una sección.
Texto de ección: <pre>$1</pre>',
	'pt-shake-position' => 'Marcadores de sección en posición inesperada.
Texto de sección: <pre>$1</pre>',
	'pt-shake-empty' => 'Sección vacía para el marcador $1.',
	'pt-log-header' => 'Registro para acciones relacionadas al sistema de traducción de página',
	'pt-log-name' => 'Registro de traducción de página',
	'pt-log-mark' => 'Revisión {{GENDER:$2|marcada}} $3 de página "[[:$1]]" para traducción',
	'pt-log-unmark' => 'Revisión {{GENDER:$2|marcada}} de página "[[:$1]]" para traducción',
	'pt-log-moveok' => '{{GENDER:$2|trasladó}} la página traducible $1 a "$3"',
	'pt-log-movenok' => '{{GENDER:$2|encontrado}} un problema mientras se movía [[:$1]] a [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|completó}} el borrado de la página traducible "$1"',
	'pt-log-delete-full-nok' => '{{GENDER:$2|encontró}} un problema al eliminar la página de traducción [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|completó}} el borrado de la página de traducción "$1"',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|encontró}} un problema al eliminar la página de traducción [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|ha eliminado}} los idiomas prioritarios de las páginas traducibles [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|puso}} los idiomas prioritarios para páginas traducibles [[:$1]] en $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|limitó}} los idiomas para la página traducible [[:$1]] en $3',
	'pt-movepage-title' => 'Mover página traducible $1',
	'pt-movepage-blockers' => 'La página traducible no puede ser movida a un nuevo nombre por los siguientes {{PLURAL:$1|error|errores}}:',
	'pt-movepage-block-base-exists' => 'La página base de destino [[:$1]] existe.',
	'pt-movepage-block-base-invalid' => 'La página base de destino no es un título válido.',
	'pt-movepage-block-tp-exists' => 'La página de traducción de destino [[:$2]] existe.',
	'pt-movepage-block-tp-invalid' => 'El título de la página de traducción de destino para [[:$1]] sería inválido (demasiado largo?).',
	'pt-movepage-block-section-exists' => 'La sección de página de destino [[:$2]] existe.',
	'pt-movepage-block-section-invalid' => 'El título de sección de página de destino para [[:$1]] sería inválido (demasiado largo?).',
	'pt-movepage-block-subpage-exists' => 'La subpágina de destino [[:$2]] existe.',
	'pt-movepage-block-subpage-invalid' => 'El título de subpágina de destino para [[:$1]] sería inválido (demasiado largo?).',
	'pt-movepage-list-pages' => 'Lista de páginas a mover',
	'pt-movepage-list-translation' => 'Páginas de traducción',
	'pt-movepage-list-section' => 'Páginas de sección',
	'pt-movepage-list-other' => 'Otras subpáginas',
	'pt-movepage-list-count' => 'En total $1 {{PLURAL:$1|página|páginas}} a mover',
	'pt-movepage-legend' => 'Mover página traducible',
	'pt-movepage-current' => 'Nombre actual:',
	'pt-movepage-new' => 'Nuevo nombre:',
	'pt-movepage-reason' => 'Razón:',
	'pt-movepage-subpages' => 'Mover todas las subpáginas',
	'pt-movepage-action-check' => 'Verificar si el movimiento es posible',
	'pt-movepage-action-perform' => 'Hacer el movimiento',
	'pt-movepage-action-other' => 'Cambiar destino',
	'pt-movepage-intro' => 'Esta página especial te permite mover páginas que están marcadas para su traducción.
La acción de traslado no será instantánea, porque muchas páginas necesitarán ser movidas.
Cuando la página está siendo movida, no es posible interactuar con la páginas en cuestión.
Los fallos serán registrados en la [[Special:Log/pagetranslation|registro de página de traducción]] y necesitarán ser reparados manualmente.',
	'pt-movepage-logreason' => 'Parte de la página traducible $1.',
	'pt-movepage-started' => 'La página base se ha trasladado.
Por favor verifica el [[Special:Log/pagetranslation|registro de traducción de página]] para errores y mensaje de conclusión.',
	'pt-locked-page' => 'Esta página está bloqueada porque la página traducible está siendo movida actualmente.',
	'pt-deletepage-lang-title' => 'Eliminar la página de traducción $1.',
	'pt-deletepage-full-title' => 'Eliminar la página traducible $1.',
	'pt-deletepage-invalid-title' => 'La página especificada no es válida.',
	'pt-deletepage-invalid-text' => 'La página especificada no es una página traducible ni una traducción de la misma.',
	'pt-deletepage-action-check' => 'Lista de páginas a borrar',
	'pt-deletepage-action-perform' => 'Realizar la eliminación',
	'pt-deletepage-action-other' => 'Cambiar el destino',
	'pt-deletepage-lang-legend' => 'Eliminar la página de traducción',
	'pt-deletepage-full-legend' => 'Eliminar la página traducible',
	'pt-deletepage-any-legend' => 'Eliminar la página traducible o la traducción de la página traducible',
	'pt-deletepage-current' => 'Nombre de la página:',
	'pt-deletepage-reason' => 'Razón:',
	'pt-deletepage-subpages' => 'Eliminar todas las subpáginas',
	'pt-deletepage-list-pages' => 'Lista de páginas para eliminar',
	'pt-deletepage-list-translation' => 'Páginas de traducción',
	'pt-deletepage-list-section' => 'Sección de página',
	'pt-deletepage-list-other' => 'Otras subpáginas',
	'pt-deletepage-list-count' => 'En total $1 {{PLURAL:$1|página|páginas}} a eliminar.',
	'pt-deletepage-full-logreason' => 'Parte de la página traducible $1.',
	'pt-deletepage-lang-logreason' => 'Parte de la página de traducción $1.',
	'pt-deletepage-started' => 'Compruebe los errores y los mensajes de conclusión en el [[Special:Log/pagetranslation|registro de traducción de páginas]].',
	'pt-deletepage-intro' => 'Esta página especial permite eliminar páginas traducibles enteras o traducciones a un idioma. La eliminación no será instantánea, porque deben borrarse muchas páginas. Los fallos se registrarán en el [[Special:Log/pagetranslation|registro de traducción de la página]] y tendrán que ser reparados a mano.',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Ker
 * @author Pikne
 */
$messages['et'] = array(
	'pagetranslation' => 'Lehekülje tõlkimine',
	'right-pagetranslation' => 'Märkida lehekülje versioone tõlkimiseks',
	'tpt-desc' => 'Sisulehekülgede tõlkimise lisa',
	'tpt-section' => 'Tõlkeühik $1',
	'tpt-section-new' => 'Uus tõlkeühik.
Nimi: $1',
	'tpt-section-deleted' => 'Tõlkeüksus $1',
	'tpt-template' => 'Lehekülje mall',
	'tpt-templatediff' => 'Leheküljemall on muutunud.',
	'tpt-diff-old' => 'Eelnev tekst',
	'tpt-diff-new' => 'Uus tekst',
	'tpt-submit' => 'Märgi see versioon tõlkimiseks',
	'tpt-sections-oldnew' => 'Uued ja olemasolevad tõlkeüksused',
	'tpt-sections-deleted' => 'Kustutatud tõlkeühikud',
	'tpt-sections-template' => 'Tõlkelehekülje mall',
	'tpt-badtitle' => 'Pealkiri ($1) ei sobi.',
	'tpt-nosuchpage' => 'Lehekülge $1 pole',
	'tpt-badsect' => '"$1" ei sobi tõlkeüksuse $2 nimeks.',
	'tpt-edit-failed' => 'Lehekülje uuendamine ei õnnestunud: $1',
	'tpt-new-pages-title' => 'Tõlkimiseks esitatud leheküljed',
	'tpt-old-pages-title' => 'Tõlgitavad leheküljed',
	'tpt-other-pages-title' => 'Katkised leheküljed',
	'tpt-discouraged-pages-title' => 'Soovimatud leheküljed',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Selle lehekülje|Nende lehekülgede}} edasist tõlkimist ei soovita.',
	'tpt-rev-mark' => 'märgi tõlkimiseks',
	'tpt-rev-unmark' => 'eemalda tõlkimisest',
	'tpt-rev-discourage' => 'hoidu uutest tõlgetest',
	'tpt-rev-encourage' => 'ennista',
	'tpt-rev-mark-tooltip' => 'Märgi selle lehekülje viimane versioon tõlkimiseks.',
	'tpt-rev-unmark-tooltip' => 'Eemalda see lehekülg tõlkimisest.',
	'tpt-rev-discourage-tooltip' => 'Olgu selle lehekülje edasine tõlkimine soovimatu',
	'tpt-rev-encourage-tooltip' => 'Ennista see lehekülg harilikuks tõlkimiseks',
	'translate-tag-translate-link-desc' => 'Tõlgi see leht',
	'tpt-translation-intro-fuzzy' => 'Iganenud tõlkeid märgitakse nii.',
	'tpt-languages-legend' => 'Teistes keeltes:',
	'pt-log-header' => 'Lehekülgede tõlkesüsteemiga seotud toimingute logi',
	'pt-log-name' => 'Lehekülgede tõlkelogi',
	'pt-log-mark' => '{{GENDER:$2|märkis}} lehekülje "[[:$1]]" redaktsiooni $3 tõlkimiseks',
	'pt-log-unmark' => '{{GENDER:$2|eemaldas}} lehekülje "[[:$1]]" tõlkimisest',
	'pt-log-moveok' => '{{GENDER:$2|lõpetas}} tõlgitava lehekülje $1 ümbernimetamise kujule $3',
	'pt-log-delete-full-ok' => '{{GENDER:$2|lõpetas}} tõlgitava lehekülje $1 kustutamise',
	'pt-movepage-blockers' => '{{PLURAL:$1|Järgmise tõrke|Järgmiste tõrgete}} tõttu ei saa tõlgitavat lehekülge uue pealkirja alla teisaldada:',
	'pt-movepage-list-translation' => 'Tõlkeleheküljed',
	'pt-movepage-list-other' => 'Muud alamleheküljed',
	'pt-movepage-current' => 'Praegune nimi:',
	'pt-movepage-new' => 'Uus nimi:',
	'pt-movepage-reason' => 'Põhjus:',
	'pt-movepage-logreason' => 'Osa tõlgitavast leheküljest $1.',
	'pt-deletepage-invalid-title' => 'Määratud lehekülg pole sobiv.',
	'pt-deletepage-current' => 'Lehekülje nimi:',
	'pt-deletepage-reason' => 'Põhjus:',
	'pt-deletepage-list-translation' => 'Tõlkeleheküljed',
	'pt-deletepage-list-other' => 'Muud alamlehed',
	'pt-deletepage-full-logreason' => 'Osa tõlgitavast leheküljest $1.',
	'pt-deletepage-lang-logreason' => 'Osa tõlkeleheküljest $1.',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Kobazulo
 */
$messages['eu'] = array(
	'pagetranslation' => 'Orrialdearen itzulpena',
	'tpt-section-new' => 'Itzulpen unitate berria.
Izena: $1',
	'tpt-section-deleted' => '$1 itzulpen unitatea',
	'tpt-template' => 'Orrialde txantiloia',
	'tpt-diff-old' => 'Aurreko testua',
	'tpt-diff-new' => 'Testu berria',
	'tpt-edit-failed' => 'Ezin izan da orrialdea eguneratu: $1',
	'translate-tag-translate-link-desc' => 'Itzuli orri hau',
	'tpt-languages-legend' => 'Beste hizkuntzak:',
	'pt-movepage-list-translation' => 'Itzulpen orrialdeak',
	'pt-movepage-list-other' => 'Bestelako azpiorrialdeak',
	'pt-movepage-current' => 'Oraingo izena:',
	'pt-movepage-new' => 'Izen berria:',
	'pt-movepage-reason' => 'Arrazoia:',
	'pt-movepage-subpages' => 'Azpiorrialde guztiak mugitu',
	'pt-deletepage-reason' => 'Arrazoia:',
);

/** Persian (فارسی)
 * @author Huji
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'tpt-diff-old' => 'متن قبلی',
	'tpt-diff-new' => 'متن جدید',
	'pt-log-name' => 'سیاههٔ ترجمه صفحه',
	'pt-log-mark' => 'نسخه $3 از صفحهٔ "[[:$1]]" برای ترجمه {{GENDER:$2|علامت زده شد}}',
	'pt-log-unmark' => 'صفحهٔ "[[:$1]]" از ترجمه {{GENDER:$2|حذف شد}}',
	'pt-movepage-list-translation' => 'صفحه‌های ترجمه',
	'pt-movepage-list-section' => 'صفحه‌های بخش',
	'pt-movepage-list-other' => 'زیرصفحه‌های دیگر',
	'pt-movepage-current' => 'نام فعلی:',
	'pt-movepage-new' => 'نام جدید:',
	'pt-movepage-reason' => 'دلیل:',
	'pt-movepage-subpages' => 'انتقال همهٔ زیرصفحه‌ها',
	'pt-movepage-action-check' => 'بررسی کن که انتقال ممکن باشد',
	'pt-movepage-action-perform' => 'منتقل کن',
	'pt-movepage-action-other' => 'تغییر هدف',
	'pt-deletepage-lang-legend' => 'حذف صفحهٔ ترجمه',
	'pt-deletepage-full-legend' => 'حذف صحفهٔ قابل ترجمه',
	'pt-deletepage-any-legend' => 'حذف صفحهٔ قابل ترجمه یا ترجمهٔ صفحهٔ قابل ترجمه',
	'pt-deletepage-current' => 'نام صفحه:',
	'pt-deletepage-reason' => 'دلیل:',
	'pt-deletepage-subpages' => 'حذف تمام زیرصفحه‌ها',
	'pt-deletepage-list-pages' => 'فهرست صفحه‌هایی که حذف می‌شوند',
	'pt-deletepage-list-translation' => 'صفحه‌های ترجمه',
	'pt-deletepage-list-section' => 'صفحه‌های بخش',
	'pt-deletepage-list-other' => 'زیربخش‌های دیگر',
	'pt-deletepage-list-count' => 'در کل $1 {{PLURAL:$1|صفحه|صفحه}} حذف می‌شوند.',
);

/** Finnish (Suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Silvonen
 * @author ZeiP
 */
$messages['fi'] = array(
	'pagetranslation' => 'Sivujen kääntäminen',
	'right-pagetranslation' => 'Merkitä sivuja käännettäviksi',
	'tpt-desc' => 'Laajennus sisältösivujen kääntämiseen.',
	'tpt-section' => 'Käännösosio $1',
	'tpt-section-new' => 'Uusi käännösosio.
Nimi: $1',
	'tpt-section-deleted' => 'Käännösosio $1',
	'tpt-template' => 'Sivun mallipohja',
	'tpt-templatediff' => 'Sivun mallipohja on muuttunut.',
	'tpt-diff-old' => 'Aikaisempi teksti',
	'tpt-diff-new' => 'Uusi teksti',
	'tpt-submit' => 'Merkitse tämä versio käännettäväksi',
	'tpt-sections-oldnew' => 'Uudet ja olemassa olevat käännösosiot',
	'tpt-sections-deleted' => 'Poistetut käännösosiot',
	'tpt-sections-template' => 'Käännössivun mallipohja',
	'tpt-action-nofuzzy' => 'Älä merkitse käännöksiä vanhentuneiksi',
	'tpt-badtitle' => 'Sivun nimi ($1) ei ole kelvollinen otsikko',
	'tpt-nosuchpage' => 'Sivua $1 ei ole olemassa',
	'tpt-oldrevision' => '$2 ei ole uusin versio sivusta [[$1]].
Ainoastaan uusin versio voidaan merkitä käännettäviksi.',
	'tpt-notsuitable' => 'Sivu $1 ei sovellu käännettäväksi.
Varmista, että sivu sisältää &lt;translate>-merkinnät ja että siinä ei ole ole syntaksivirheitä.',
	'tpt-saveok' => 'Sivu [[$1]] on merkitty käännettäväksi ja se sisältää $2 {{PLURAL:$2|käännösosiolla|käännösosioilla}}.
Sivu voidaan nyt <span class="plainlinks">[$3 kääntää]</span>.',
	'tpt-badsect' => '”$1” ei ole kelpo nimi käännösosiolle $2.',
	'tpt-showpage-intro' => 'Alempana listattu uusia, nykyisiä ja poistettavia osioita.
Ennen kuin merkitset tämän version käännettäväksi, tarkista, että muutokset osioihin on minimoitu, jotta kääntäjille ei aiheudu tarpeetonta työtä.',
	'tpt-mark-summary' => 'Tämä versio merkittiin käännettäväksi',
	'tpt-edit-failed' => 'Ei voitu tallentaa muutosta sivulle: $1',
	'tpt-already-marked' => 'Viimeisin versio tästä sivusta on jo merkitty käännettäväksi.',
	'tpt-unmarked' => 'Sivu $1 ei ole enää käännettävänä.',
	'tpt-list-nopages' => 'Yhtään sivua ei ole merkitty käännettäväksi eikä yhtään sivua ole valmiina käännettäväksi merkitsemistä varten.',
	'tpt-new-pages-title' => 'Käännettäväksi ehdotetut sivut',
	'tpt-old-pages-title' => 'Käännettävät sivut',
	'tpt-other-pages-title' => 'Rikkoutuneet sivut',
	'tpt-discouraged-pages-title' => 'Sivut, joita ei enää suositella käännettäväksi',
	'tpt-new-pages' => '{{PLURAL:$1|Tämä sivu sisältää|Nämä sivut sisältävät}} tekstiä, joka on valmis merkittäväksi kääntämistä varten,
mutta mikään versio {{PLURAL:$1|tästä sivusta|näistä sivuista}} ei ole tällä hetkellä merkitty käännettäväksi.',
	'tpt-old-pages' => 'Jokin versio {{PLURAL:$1|tästä sivusta on|näistä sivuista on}} merkitty käännettäväksi.',
	'tpt-other-pages' => 'Vanha versio {{PLURAL:$1|tästä sivusta|näistä sivuista}} on merkitty käännettäväksi,
mutta viimeisintä versiota ei voi merkitä käännettäväksi.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Tätä sivua|Näitä sivuja}} ei enää suositella käännettävän.',
	'tpt-rev-mark' => 'merkitse käännettäväksi',
	'tpt-rev-unmark' => 'poista käännettävistä sivuista',
	'tpt-rev-discourage' => 'vältä uusia käännöksiä',
	'tpt-rev-encourage' => 'palauta',
	'tpt-rev-mark-tooltip' => 'Merkitse tämän sivun viimeisin versio käännettäväksi.',
	'tpt-rev-unmark-tooltip' => 'Poista tämän sivun käännösominaisuus.',
	'tpt-rev-discourage-tooltip' => 'Piilota sivu käännösjärjestelmästä, jotta uusia käännöksiä ei enää tehtäisi.',
	'tpt-rev-encourage-tooltip' => 'Palauta tämä sivu käännösjärjestelmään.',
	'translate-tag-translate-link-desc' => 'Käännä tämä sivu',
	'translate-tag-markthis' => 'Merkitse tämä sivu käännettäväksi',
	'translate-tag-markthisagain' => 'Tähän sivuun on tehty <span class="plainlinks">[$1 muutoksia]</span> sen jälkeen kun se viimeksi <span class="plainlinks">[$2 merkittiin käännettäväksi]</span>.',
	'translate-tag-hasnew' => 'Tämä sivu sisältää <span class="plainlinks">[$1 muutoksia],</span> joita ei ole merkitty käännettäväksi.',
	'tpt-translation-intro' => 'Tämä sivu on <span class="plainlinks">[$1 käännetty versio]</span> sivusta [[$2]] ja käännös on $3% täydellinen ja ajan tasalla.',
	'tpt-translation-intro-fuzzy' => 'Vanhentuneet käännökset merkitään näin.',
	'tpt-languages-legend' => 'Muut kielet:',
	'tpt-target-page' => 'Tätä sivua ei voi muokata tavalliseen tapaan.
Tämä sivu on käännös sivusta [[$1]] ja käännöstä voi päivittää käyttämällä [$2 käännöstyökalua].',
	'tpt-unknown-page' => 'Tämä nimiavaruus on varattu sisältösivujen käännöksille.
Sivu, jota yrität muokata, ei näytä vastaavan mitään sivua, joka on merkitty käännettäväksi.',
	'tpt-render-summary' => 'Päivittäminen vastaamaan uutta versiota lähdesivusta',
	'tpt-download-page' => 'Sivun vienti käännösten kera',
	'pt-parse-open' => 'Sulkematon &lt;translate>-tägi.
Käännöspohja: <pre>$1</pre>',
	'pt-parse-close' => 'Avaamaton &lt;/translate>-tägi.
Käännöspohja: <pre>$1</pre>',
	'pt-parse-nested' => 'Sisäkkäiset &lt;translate>-tägit eivät ole sallittuja.
Käännettävä teksti: <pre>$1</pre>',
	'pt-shake-multiple' => 'Enemmän kuin yksi käännösosiotunniste käännösosiolla.
Käännösosion teksti: <pre>$1</pre>',
	'pt-shake-position' => 'Käännösosiotunniste on odottamattomassa paikassa.
Käännösosion teksti: <pre>$1</pre>',
	'pt-shake-empty' => 'Käännösosio $1 sisältää vain tunnisteen.',
	'pt-log-header' => 'Tämä loki sisältää sivunkäännösominaisuuteen liittyviä tapahtumia.',
	'pt-log-name' => 'Sivunkääntöloki',
	'pt-log-mark' => '{{GENDER:$2|merkitsi}} version $3 sivusta [[:$1]] käännettäväksi',
	'pt-log-unmark' => '{{GENDER:$2|poisti}} sivun "[[:$1]]" käännösjärjestelmästä',
	'pt-log-moveok' => '{{GENDER:$2|sai valmiiksi}} käännettävän sivun $1 siirtämisen nimelle $3',
	'pt-log-movenok' => '{{GENDER:$2}}Käännettävän sivun siirtämisessä tapahtui virhe siirrettäessä sivua [[:$1]] nimelle [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|sai valmiiksi}} käännettävän sivun $1 poiston',
	'pt-log-delete-full-nok' => '{{GENDER:$2|huomasi}} ongelman poistaessaan käännettävää sivua [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|sai valmiiksi}} käännössivun $1 poiston',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|huomasi}} ongelman poistaessaan käännössivua [[:$1]]',
	'pt-movepage-title' => 'Käännettävän sivun $1 siirtäminen',
	'pt-movepage-blockers' => 'Käännettävää sivua ei voi siirtää uudelle nimelle {{PLURAL:$1|seuraavasta syystä|seuraavista syistä}}:',
	'pt-movepage-block-base-exists' => 'Kohdesivu [[:$1]] on olemassa.',
	'pt-movepage-block-base-invalid' => 'Kohdesivun nimi ei ole kelvollinen.',
	'pt-movepage-block-tp-exists' => 'Käännössivu [[:$2]] on olemassa.',
	'pt-movepage-block-tp-invalid' => 'Käännössivun [[:$1]] uusi nimi ei ole kelvollinen (liian pitkä?)',
	'pt-movepage-block-section-exists' => 'Käännösosiosivu [[:$2]] on olemassa.',
	'pt-movepage-block-section-invalid' => 'Käännösosiosivun [[:$1]] uusi nimi ei ole kelvollinen (liian pitkä?)',
	'pt-movepage-block-subpage-exists' => 'Alasivu [[:$2]] on olemassa.',
	'pt-movepage-block-subpage-invalid' => 'Alasivun [[:$1]] uusi nimi ei ole kelvollinen (liian pitkä?)',
	'pt-movepage-list-pages' => 'Lista siirrettävistä sivuista',
	'pt-movepage-list-translation' => 'Käännössivut',
	'pt-movepage-list-section' => 'Käännösosiosivut',
	'pt-movepage-list-other' => 'Muut alasivut',
	'pt-movepage-list-count' => 'Yhteensä $1 {{PLURAL:$1|siirrettävä sivu|siirrettävää sivua}}.',
	'pt-movepage-legend' => 'Siirrä käännettävä sivu',
	'pt-movepage-current' => 'Nykyinen nimi',
	'pt-movepage-new' => 'Uusi nimi',
	'pt-movepage-reason' => 'Syy',
	'pt-movepage-subpages' => 'Siirrä kaikki alasivut',
	'pt-movepage-action-check' => 'Tarkista, onko sivun siirtäminen mahdollista',
	'pt-movepage-action-perform' => 'Tee siirto',
	'pt-movepage-action-other' => 'Vaihda kohde',
	'pt-movepage-intro' => 'Tällä toimintosivulla voit siirtää käännettäväksi merkittyjä sivuja.
Siirto ei tapahdu heti, koska useita sivuja täytyy siirtää.
Sivut ovat lukittuna siirron ajan.
Epäonnistuneet siirrot tallennetaan [[Special:Log/pagetranslation|sivunkääntölokiin]] ja ne täytyy korjata käsin.',
	'pt-movepage-logreason' => 'Osa käännettävästä sivusta $1.',
	'pt-movepage-started' => 'Käännettävän sivun perussivu on siirretty.
Tarkista mahdolliset virheet ja valmistumisviestit [[Special:Log/pagetranslation|sivunkääntölokista]].',
	'pt-locked-page' => 'Tämä sivu on lukittu, koska käännettävän sivun siirtäminen on kesken.',
	'pt-deletepage-lang-title' => 'Poistetaan käännössivu $1.',
	'pt-deletepage-full-title' => 'Poistetaan käännettävissä oleva sivu $1.',
	'pt-deletepage-invalid-title' => 'Määritetty sivu ei kelpaa.',
	'pt-deletepage-invalid-text' => 'Sivu ei ole käännettävissä oleva sivu tai sellaisen käännös.',
	'pt-deletepage-action-check' => 'Luetteloi poistettavat sivut',
	'pt-deletepage-action-perform' => 'Suorita poisto',
	'pt-deletepage-action-other' => 'Vaihda kohdetta',
	'pt-deletepage-lang-legend' => 'Poista käännössivu',
	'pt-deletepage-full-legend' => 'Poista käännettävissä oleva sivu',
	'pt-deletepage-any-legend' => 'Poista käännettävissä oleva sivu tai käännettävissä olevan sivun käännös',
	'pt-deletepage-current' => 'Sivun nimi',
	'pt-deletepage-reason' => 'Syy',
	'pt-deletepage-subpages' => 'Poista kaikki alasivut',
	'pt-deletepage-list-pages' => 'Poistettavien sivujen luettelo',
	'pt-deletepage-list-translation' => 'Käännössivut',
	'pt-deletepage-list-section' => 'Osiosivut',
	'pt-deletepage-list-other' => 'Muut alasivut',
	'pt-deletepage-list-count' => 'Yhteensä $1 {{PLURAL:$1|poistettava sivu|poistettavaa sivua}}.',
	'pt-deletepage-full-logreason' => 'Osa käännettävää sivua $1.',
	'pt-deletepage-lang-logreason' => 'Osa käännössivua $1.',
	'pt-deletepage-started' => 'Virheet ja valmistusviesti löytyvät [[Special:Log/pagetranslation|sivunkääntölokista]].',
	'pt-deletepage-intro' => 'Tämän toimintosivun avulla voit poistaa koko käännettävän sivun tai tietynkieliset käännökset.
Poisto ei tapahdu välittömästi, sillä useita sivuja täytyy poistaa.
Virheet merkitään [[Special:Log/pagetranslation|sivunkääntölokiin]] ja ne täytyy korjata käsin.',
);

/** French (Français)
 * @author Crochet.david
 * @author Gomoko
 * @author Grondin
 * @author Houcinee1
 * @author IAlex
 * @author Peter17
 * @author Purodha
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 * @author Y-M D
 */
$messages['fr'] = array(
	'pagetranslation' => 'Traduction de pages',
	'right-pagetranslation' => 'Marquer des versions de pages pour être traduites',
	'tpt-desc' => 'Extension pour traduire des pages de contenu',
	'tpt-section' => 'Unité de traduction $1',
	'tpt-section-new' => 'Nouvelle unité de traduction. Nom : $1',
	'tpt-section-deleted' => 'Unité de traduction $1',
	'tpt-template' => 'Modèle de page',
	'tpt-templatediff' => 'Le modèle de page a changé.',
	'tpt-diff-old' => 'Texte précédent',
	'tpt-diff-new' => 'Nouveau texte',
	'tpt-submit' => 'Marquer cette version pour être traduite',
	'tpt-sections-oldnew' => 'Unités de traduction nouvelles et existantes',
	'tpt-sections-deleted' => 'Unités de traduction supprimées',
	'tpt-sections-template' => 'Modèle de page de traduction',
	'tpt-action-nofuzzy' => 'Ne pas invalider les traductions',
	'tpt-badtitle' => 'Le nom de page donné ($1) n’est pas un titre valide',
	'tpt-nosuchpage' => "La page $1 n'existe pas",
	'tpt-oldrevision' => '$2 n’est pas la dernière version de la page [[$1]].
Seule la dernière version de la page peut être marquée pour être traduite.',
	'tpt-notsuitable' => 'La page $1 n’est pas susceptible d’être traduite.
Assurez-vous qu’elle contienne la balise <nowiki><translate></nowiki> et qu’elle ait une syntaxe correcte.',
	'tpt-saveok' => 'La page [[$1]] a été marquée pour être traduite avec $2 {{PLURAL:$2|unité|unités}} de traduction.
La page peut être <span class="plainlinks">[$3 traduite]</span> dès maintenant.',
	'tpt-badsect' => '« $1 » n’est pas un nom valide pour une unité de traduction $2.',
	'tpt-showpage-intro' => 'Ci-dessous, les nouvelles traductions, celles existantes et supprimées.
Avant de marquer ces versions pour être traduites, vérifier que les modifications aux sections sont minimisées pour éviter du travail inutile aux traducteurs.',
	'tpt-mark-summary' => 'Cette version a été marquée pour être traduite',
	'tpt-edit-failed' => 'Impossible de mettre à jour la page $1',
	'tpt-duplicate' => "Le nom de l'unité traduction $1 est utilisé plus d'une fois.",
	'tpt-already-marked' => 'La dernière version de cette page a déjà été marquée pour être traduite.',
	'tpt-unmarked' => "La page $1 n'est plus marquée pour être traduite.",
	'tpt-list-nopages' => 'Aucune page n’a été marquée pour être traduite ni n’est prête à l’être.',
	'tpt-new-pages-title' => 'Pages proposées à la traduction',
	'tpt-old-pages-title' => 'Pages en cours de traduction',
	'tpt-other-pages-title' => 'Pages erronées',
	'tpt-discouraged-pages-title' => 'Pages découragées',
	'tpt-new-pages' => '{{PLURAL:$1|Cette page contient|Ces pages contiennent}} du texte avec des balises de traduction, mais aucune version de {{PLURAL:$1|cette page n’est marquée pour être traduite|ces pages ne sont marquées pour être traduites}}.',
	'tpt-old-pages' => 'Des versions de {{PLURAL:$1|cette page|ces pages}} ont été marquées pour être traduites.',
	'tpt-other-pages' => 'Une ancienne version de {{PLURAL:$1|la page suivante|chacune des pages suivantes}} a été marquée pour être traduite,
mais {{PLURAL:$1|sa dernière version|leur dernière version respective}} ne peut pas être marquée ainsi :',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Cette page a été découragée|Ces pages ont été découragées}} à être {{PLURAL:$1|traduite|traduites}} davantage.',
	'tpt-select-prioritylangs' => 'Liste de codes de langue séparés par des virgules:',
	'tpt-select-prioritylangs-force' => "Empêcher les traductions en d'autres langues",
	'tpt-select-prioritylangs-reason' => 'Motif:',
	'tpt-sections-prioritylangs' => 'Langues prioritaires',
	'tpt-rev-mark' => 'marquer pour traduction',
	'tpt-rev-unmark' => 'supprimer de la traduction',
	'tpt-rev-discourage' => 'décourager',
	'tpt-rev-encourage' => 'rétablir',
	'tpt-rev-mark-tooltip' => 'Marquer la version la plus récente de cette page pour la traduction.',
	'tpt-rev-unmark-tooltip' => 'Supprimer cette page de la traduction.',
	'tpt-rev-discourage-tooltip' => 'Dissuader les futures traductions sur cette page.',
	'tpt-rev-encourage-tooltip' => 'Rétablir cette page en traduction normale.',
	'translate-tag-translate-link-desc' => 'Traduire cette page',
	'translate-tag-markthis' => 'Marquer cette page pour être traduite',
	'translate-tag-markthisagain' => 'Cette page a eu <span class="plainlinks">[$1 des modifications]</span> depuis qu’elle a été dernièrement <span class="plainlinks">[$2 marquée pour être traduite]</span>.',
	'translate-tag-hasnew' => 'Cette page contient <span class="plainlinks">[$1 des modifications]</span> qui ne sont pas marquées pour la traduction.',
	'tpt-translation-intro' => 'Cette page est une <span class="plainlinks">[$1 traduction]</span> de la page [[$2]] et la traduction est complétée à $3 % et à jour.',
	'tpt-translation-intro-fuzzy' => 'Les traductions désuètes sont marquées comme ceci.',
	'tpt-languages-legend' => 'Autres langues :',
	'tpt-languages-zero' => 'Commencer la traduction pour cette langue',
	'tpt-target-page' => 'Cette page ne peut pas être mise à jour manuellement.
Elle est une version traduite de [[$1]] et la traduction peut être mise à jour en utilisant [$2 l’outil de traduction].',
	'tpt-unknown-page' => 'Cet espace de noms est réservé pour la traduction de pages.
La page que vous essayé de modifier ne semble correspondre à aucune page marquée pour être traduite.',
	'tpt-translation-restricted' => 'La traduction de ce groupe de messages dans cette langue a été empêchée par l’administrateur des traductions.

Motif de la limitation : $1',
	'tpt-discouraged-language-force' => "L'administrateur des traductions a limité les langues dans lesquelles ce groupe de messages peut être traduit. Ces langues ne font pas partie de celles-ci.

Raison de la limitation: $1",
	'tpt-discouraged-language' => "Cette langue ne fait pas partie des langues prioritaires positionnées par l'administrateur de traductions pour ce groupe de messages

Motif pour la priorisation: $1",
	'tpt-render-summary' => 'Mise à jour pour être en accord avec la nouvelle version de la source de la page',
	'tpt-download-page' => 'Exporter la page avec ses traductions',
	'pt-parse-open' => 'Balise &lt;translate> asymétrique.
Modèle de traduction : <pre>$1</pre>',
	'pt-parse-close' => 'Balise &lt;/translate> asymétrique.
Modèle de traduction : <pre>$1</pre>',
	'pt-parse-nested' => 'Les sections &lt;translate> imbriquées ne sont pas autorisées.
Texte de la balise : <pre>$1</pre>',
	'pt-shake-multiple' => 'Marqueurs de section multiples pour une section.
Texte de la section : <pre>$1</pre>',
	'pt-shake-position' => 'Marqueurs de section à une position inattendue.
Texte de la section : <pre>$1</pre>',
	'pt-shake-empty' => 'Section vide pour le marqueur $1.',
	'pt-log-header' => 'Journal des actions liées au système de traduction de pages',
	'pt-log-name' => 'Journal des traductions de pages',
	'pt-log-mark' => 'a {{GENDER:$2|marqué|marqué}} la révision $3 de la page « [[:$1]] » pour être traduite',
	'pt-log-unmark' => 'a {{GENDER:$2|supprimé|supprimé}} la page « [[:$1]] » de la traduction',
	'pt-log-moveok' => '{{GENDER:$2|a terminé}} le renommage de la page traduisible de $1 en $3',
	'pt-log-movenok' => '{{GENDER:$2|a rencontré|a rencontré}} un problème lors du renommage de [[:$1]] vers [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2||}}a complété la suppression de la page à traduire $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2||}}a rencontré un problème lors de la suppression de la page à traduire [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2||}}a complété la suppression de la page traduite $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2||}}a rencontré un problème lors de la suppression page de traduction [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|a supprimé}} les langues prioritaires pour la page traduisible [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|définir}} les langues prioritaires pour la page traduisible [[:$1]] en $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|limiter}} les langues pour la page traduisible [[:$1]] en $3',
	'pt-movepage-title' => 'Déplacer la page à traduire $1',
	'pt-movepage-blockers' => 'La page à traduire ne peut pas être renommée à cause {{PLURAL:$1|de l’erreur suivante|des erreurs suivantes}} :',
	'pt-movepage-block-base-exists' => 'La page de base cible [[:$1]] existe.',
	'pt-movepage-block-base-invalid' => 'La page de base cible a un titre incorrect.',
	'pt-movepage-block-tp-exists' => 'La page de traduction cible [[:$2]] existe.',
	'pt-movepage-block-tp-invalid' => 'Le titre de la page de traduction cible pour [[:$1]] serait incorrect (trop long ?).',
	'pt-movepage-block-section-exists' => 'La section de page cible [[:$2]] existe.',
	'pt-movepage-block-section-invalid' => 'Le titre de section de page cible pour [[:$1]] serait incorrect (trop long ?).',
	'pt-movepage-block-subpage-exists' => 'La sous-page cible [[:$2]] existe.',
	'pt-movepage-block-subpage-invalid' => 'Le titre de la sous-page cible pour [[:$1]] serait incorrect (trop long ?).',
	'pt-movepage-list-pages' => 'Liste des pages à déplacer',
	'pt-movepage-list-translation' => 'Pages de traduction',
	'pt-movepage-list-section' => 'Pages en section',
	'pt-movepage-list-other' => 'Autres sous-pages',
	'pt-movepage-list-count' => '$1 {{PLURAL:$1|page|pages}} à déplacer au total.',
	'pt-movepage-legend' => 'Déplacer la page à traduire',
	'pt-movepage-current' => 'Nom actuel :',
	'pt-movepage-new' => 'Nouveau nom :',
	'pt-movepage-reason' => 'Motif :',
	'pt-movepage-subpages' => 'Renommer toutes les sous-pages',
	'pt-movepage-action-check' => 'Vérifier si le renommage est possible',
	'pt-movepage-action-perform' => 'Renommer',
	'pt-movepage-action-other' => 'Changer la cible',
	'pt-movepage-intro' => "Cette page spéciale vous permet de renommer des pages qui sont marquées pour être traduites.
L’action de renommage ne sera pas immédiate, car de nombreuses pages devront être déplacées.
Pendant que les pages sont déplacées, il n'est pas possible d’interagir avec elles.
Les échecs seront enregistrés dans le [[Special:Log/pagetranslation|journal de traduction]] et devront être corrigés manuellement.",
	'pt-movepage-logreason' => 'Extrait de la page à traduire $1.',
	'pt-movepage-started' => 'La page de base est à présent renommée.
Veuillez vérifier le [[Special:Log/pagetranslation|journal des traductions]] pour repérer d’éventuelles erreurs et lire le message de complétion.',
	'pt-locked-page' => 'Cette page est verrouillée parce que la page à traduire est en cours de renommage.',
	'pt-deletepage-lang-title' => 'Suppression de la page de traduction $1.',
	'pt-deletepage-full-title' => 'Suppression de la page à traduire $1.',
	'pt-deletepage-invalid-title' => "La page spécifiée n'est pas valide.",
	'pt-deletepage-invalid-text' => "La page spécifiée n'est pas une page à traduire, ni une traduction de celle-ci.",
	'pt-deletepage-action-check' => 'Lister les pages à supprimer',
	'pt-deletepage-action-perform' => 'Faire la suppression',
	'pt-deletepage-action-other' => 'Changer la cible',
	'pt-deletepage-lang-legend' => 'Supprimer la page traduite',
	'pt-deletepage-full-legend' => 'Supprimer la page à traduire',
	'pt-deletepage-any-legend' => 'Supprimer la page à traduire ou la traduction de la page à traduire',
	'pt-deletepage-current' => 'Nom de la page :',
	'pt-deletepage-reason' => 'Motif :',
	'pt-deletepage-subpages' => 'Supprimer tous les sous-pages',
	'pt-deletepage-list-pages' => 'Liste des pages à supprimer',
	'pt-deletepage-list-translation' => 'Pages de traduction',
	'pt-deletepage-list-section' => 'Section pages',
	'pt-deletepage-list-other' => 'Autres sous-pages',
	'pt-deletepage-list-count' => 'Au total, $1 {{PLURAL:$1|page|pages}} à supprimer.',
	'pt-deletepage-full-logreason' => 'Partie de la page à traduire $1.',
	'pt-deletepage-lang-logreason' => 'Partie de la page de traduction $1.',
	'pt-deletepage-started' => 'Veuillez vérifier le [[Special:Log/pagetranslation|journal des traductions]] pour les erreurs et le message de la fin.',
	'pt-deletepage-intro' => "Cette page spéciale vous permet de supprimer des pages à traduire entières ou des traductions dans une langue.
La suppression n'est pas instantanée, car plusieurs pages seront supprimées.
Les échecs seront inscrits dans le [[Special:Log/pagetranslation|journal des traductions]] et ils doivent être corrigés à la main.",
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 * @author Purodha
 */
$messages['frp'] = array(
	'pagetranslation' => 'Traduccion de pâges',
	'right-pagetranslation' => 'Marcar des vèrsions de pâges por la traduccion',
	'tpt-desc' => 'Èxtension por traduire des pâges de contegnu.',
	'tpt-section' => 'Unitât de traduccion $1',
	'tpt-section-new' => 'Novèla unitât de traduccion.
Nom : $1',
	'tpt-section-deleted' => 'Unitât de traduccion $1',
	'tpt-template' => 'Modèlo de pâge',
	'tpt-templatediff' => 'Lo modèlo de pâge at changiê.',
	'tpt-diff-old' => 'Tèxto devant',
	'tpt-diff-new' => 'Tèxto novél',
	'tpt-submit' => 'Marcar ceta vèrsion por la traduccion',
	'tpt-sections-oldnew' => 'Unitâts de traduccion novèles et ègzistentes',
	'tpt-sections-deleted' => 'Unitâts de traduccion suprimâs',
	'tpt-sections-template' => 'Modèlo de pâge de traduccion',
	'tpt-action-nofuzzy' => 'Pas envalidar les traduccions',
	'tpt-badtitle' => 'Lo nom de pâge balyê ($1) est pas un titro valido',
	'tpt-nosuchpage' => 'La pâge $1 ègziste pas',
	'tpt-oldrevision' => '$2 est pas la dèrriére vèrsion de la pâge [[$1]].
Solament la dèrriére vèrsion de la pâge pôt étre marcâ por la traduccion.',
	'tpt-notsuitable' => 'La pâge $1 sè préte pas por la traduccion.
Assurâd-vos que contegne la balisa <nowiki><translate></nowiki> et pués qu’èye una sintaxa justa.',
	'tpt-saveok' => 'La pâge [[$1]] at étâ marcâ por la traduccion avouéc $2 unitât{{PLURAL:$2||s}} de traduccion.
La pâge pôt étre <span class="plainlinks">[$3 traduita]</span> dês ora.',
	'tpt-badsect' => '« $1 » est pas un nom valido por una unitât de traduccion $2.',
	'tpt-showpage-intro' => 'Ce-desot, les novèles traduccions, celes ègzistentes et pués celes suprimâs.
Devant que marcar cetes vèrsions por la traduccion, controlâd que los changements a les sèccions sont petiôts por èvitar de travâly inutilo ux traductors.',
	'tpt-mark-summary' => 'Ceta vèrsion at étâ marcâ por la traduccion',
	'tpt-edit-failed' => 'Empossiblo de betar a jorn la pâge : $1',
	'tpt-already-marked' => 'La dèrriére vèrsion de ceta pâge at ja étâ marcâ por la traduccion.',
	'tpt-unmarked' => 'La pâge $1 est pas més marcâ por la traduccion.',
	'tpt-list-nopages' => 'Niona pâge at étâ marcâ por la traduccion ou ben est prèsta por l’étre.',
	'tpt-new-pages-title' => 'Pâges proposâs a la traduccion',
	'tpt-old-pages-title' => 'Pâges en cors de traduccion',
	'tpt-other-pages-title' => 'Pâges câsses',
	'tpt-discouraged-pages-title' => 'Pâges dècoragiês',
	'tpt-new-pages' => '{{PLURAL:$1|Ceta pâge contint|Cetes pâges contegnont}} de tèxto avouéc des balises de traduccion,
mas niona vèrsion de {{PLURAL:$1|ceta pâge est marcâ|cetes pâges sont marcâs}} por la traduccion.',
	'tpt-old-pages' => 'Des vèrsions de {{PLURAL:$1|ceta pâge|cetes pâges}} ont étâ marcâs por la traduccion.',
	'tpt-other-pages' => '{{PLURAL:$1|Una vielye vèrsion de ceta pâge at étâ marcâ|Des vielyes vèrsions de cetes pâges ont étâ marcâs}} por la traduccion,
mas {{PLURAL:$1|la dèrriére vèrsion pôt pas étre marcâ|les dèrriéres vèrsions pôvont pas étre marcâs}} por la traduccion.',
	'tpt-rev-mark' => 'marcar por traduccion',
	'tpt-rev-unmark' => 'enlevar de la traduccion',
	'tpt-rev-discourage' => 'dècoragiér',
	'tpt-rev-encourage' => 'refâre',
	'translate-tag-translate-link-desc' => 'Traduire ceta pâge',
	'translate-tag-markthis' => 'Marcar ceta pâge por la traduccion',
	'translate-tag-markthisagain' => 'Ceta pâge at avu des <span class="plainlinks">[$1 changements]</span> dês qu’at étâ <span class="plainlinks">[$2 marcâ dèrriérement por la traduccion]</span>.',
	'translate-tag-hasnew' => 'Ceta pâge contint des <span class="plainlinks">[$1 changements]</span> que sont pas marcâs por la traduccion.',
	'tpt-translation-intro' => 'Ceta pâge est una <span class="plainlinks">[$1 traduccion]</span> de la pâge [[$2]] et la traduccion est complètâ a $3 % et pués a jorn.',
	'tpt-translation-intro-fuzzy' => 'Les traduccions dèpassâs sont marcâs d’ense.',
	'tpt-languages-legend' => 'Ôtres lengoues :',
	'tpt-target-page' => 'Ceta pâge pôt pas étre betâ a jorn a la man.
El est una traduccion de [[$1]] et la traduccion pôt étre betâ a jorn en utilisent l’[$2 outil de traduccion].',
	'tpt-unknown-page' => 'Ceti èspâço de noms est resèrvâ por la traduccion de pâges de contegnu.
La pâge que vos tâchiéd de changiér semble corrèspondre a gins de pâge marcâ por la traduccion.',
	'tpt-render-summary' => 'Misa a jorn por étre en acôrd avouéc la novèla vèrsion de la pâge d’origina',
	'tpt-download-page' => 'Èxportar la pâge avouéc ses traduccions',
	'pt-parse-open' => 'Balisa &lt;translate> asimètrica.
Modèlo de traduccion : <pre>$1</pre>',
	'pt-parse-close' => 'Balisa &lt;/translate> asimètrica.
Modèlo de traduccion : <pre>$1</pre>',
	'pt-parse-nested' => 'Les sèccions &lt;translate> embrecâs sont pas ôtorisâs.
Tèxto de la balisa : <pre>$1</pre>',
	'pt-shake-multiple' => 'Un mouél de marcors de sèccion por yona sèccion.
Tèxto de la sèccion : <pre>$1</pre>',
	'pt-shake-position' => 'Marcors de sèccion a una posicion emprèvua.
Tèxto de la sèccion : <pre>$1</pre>',
	'pt-shake-empty' => 'Sèccion voueda por lo marcor $1.',
	'pt-log-header' => 'Jornal de les accions liyês u sistèmo de traduccion de pâges',
	'pt-log-name' => 'Jornal de les traduccions de pâges',
	'pt-log-mark' => 'at {{GENDER:$2|marcâ}} la vèrsion $3 de la pâge « [[:$1]] » por la traduccion',
	'pt-log-unmark' => 'at {{GENDER:$2|suprimâ}} la pâge « [[:$1]] » de la traduccion',
	'pt-log-moveok' => 'at {{GENDER:$2|chavonâ}} lo changement de nom de la pâge a traduire de $1 en $3',
	'pt-log-movenok' => 'at {{GENDER:$2|rencontrâ}} un problèmo pendent lo changement de nom de [[:$1]] de vers [[:$3]]',
	'pt-log-delete-full-ok' => 'at {{GENDER:$2|chavonâ}} la suprèssion de la pâge a traduire $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2||}}at rencontrâ un problèmo pendent la suprèssion de la pâge a traduire [[:$1]]',
	'pt-log-delete-lang-ok' => 'at {{GENDER:$2|chavonâ}} la suprèssion de la pâge de traduccion $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2||}}at rencontrâ un problèmo pendent la suprèssion de la pâge de traduccion [[:$1]]',
	'pt-movepage-title' => 'Dèplaciér la pâge a traduire $1',
	'pt-movepage-blockers' => 'La pâge a traduire pôt pas étre renomâ a côsa de {{PLURAL:$1|ceta èrror|cetes èrrors}} :',
	'pt-movepage-block-base-exists' => 'La pâge de bâsa ciba [[:$1]] ègziste.',
	'pt-movepage-block-base-invalid' => 'La pâge de bâsa ciba at un titro fôx.',
	'pt-movepage-block-tp-exists' => 'La pâge de traduccion ciba [[:$2]] ègziste.',
	'pt-movepage-block-tp-invalid' => 'Lo titro de la pâge de traduccion ciba por [[:$1]] serêt fôx (trop long ?).',
	'pt-movepage-block-section-exists' => 'La pâge de sèccion ciba [[:$2]] ègziste.',
	'pt-movepage-block-section-invalid' => 'Lo titro de la pâge de sèccion ciba por [[:$1]] serêt fôx (trop long ?).',
	'pt-movepage-block-subpage-exists' => 'La sot-pâge ciba [[:$2]] ègziste.',
	'pt-movepage-block-subpage-invalid' => 'Lo titro de la sot-pâge ciba por [[:$1]] serêt fôx (trop long ?).',
	'pt-movepage-list-pages' => 'Lista de les pâges a dèplaciér',
	'pt-movepage-list-translation' => 'Pâges de traduccion',
	'pt-movepage-list-section' => 'Pâges de sèccion',
	'pt-movepage-list-other' => 'Ôtres sot-pâges',
	'pt-movepage-list-count' => 'En tot, $1 pâge{{PLURAL:$1||s}} a dèplaciér.',
	'pt-movepage-legend' => 'Dèplaciér la pâge a traduire',
	'pt-movepage-current' => 'Nom d’ora :',
	'pt-movepage-new' => 'Novél nom :',
	'pt-movepage-reason' => 'Rêson :',
	'pt-movepage-subpages' => 'Renomar totes les sot-pâges',
	'pt-movepage-action-check' => 'Controlar se lo changement de nom est possiblo',
	'pt-movepage-action-perform' => 'Renomar',
	'pt-movepage-action-other' => 'Changiér la ciba',
	'pt-movepage-logreason' => 'Èxtrèt de la pâge a traduire $1.',
	'pt-movepage-started' => 'Ora, la pâge de bâsa est renomâ.
Volyéd controlar lo [[Special:Log/pagetranslation|jornal de les traduccions de pâges]] por repèrar des èrrors et por liére lo mèssâjo d’avance.',
	'pt-locked-page' => 'Ceta pâge est vèrrolyê perce que la pâge a traduire est aprés étre renomâ.',
	'pt-deletepage-lang-title' => 'Suprèssion de la pâge de traduccion $1.',
	'pt-deletepage-full-title' => 'Suprèssion de la pâge a traduire $1.',
	'pt-deletepage-invalid-title' => 'La pâge spècefiâ est pas valida.',
	'pt-deletepage-action-check' => 'Listar les pâges a suprimar',
	'pt-deletepage-action-perform' => 'Fâre la suprèssion',
	'pt-deletepage-action-other' => 'Changiér la ciba',
	'pt-deletepage-lang-legend' => 'Suprimar la pâge de traduccion',
	'pt-deletepage-full-legend' => 'Suprimar la pâge a traduire',
	'pt-deletepage-current' => 'Nom de la pâge :',
	'pt-deletepage-reason' => 'Rêson :',
	'pt-deletepage-subpages' => 'Suprimar totes les sot-pâges',
	'pt-deletepage-list-pages' => 'Lista de les pâges a suprimar',
	'pt-deletepage-list-translation' => 'Pâges de traduccion',
	'pt-deletepage-list-section' => 'Pâges de sèccion',
	'pt-deletepage-list-other' => 'Ôtres sot-pâges',
	'pt-deletepage-list-count' => 'En tot, $1 pâge{{PLURAL:$1||s}} a suprimar.',
	'pt-deletepage-full-logreason' => 'Èxtrèt de la pâge a traduire $1.',
	'pt-deletepage-lang-logreason' => 'Èxtrèt de la pâge de traduccion $1.',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'translate-tag-translate-link-desc' => 'Tradûs cheste pagjine',
	'tpt-languages-legend' => 'Altris lenghis:',
	'pt-movepage-reason' => 'Reson:',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'pagetranslation' => 'Tradución de páxinas',
	'right-pagetranslation' => 'Marcar as versións de páxinas para seren traducidas',
	'tpt-desc' => 'Extensión para traducir contidos de páxinas',
	'tpt-section' => 'Unidade de tradución $1',
	'tpt-section-new' => 'Nova unidade de tradución. Nome: $1',
	'tpt-section-deleted' => 'Unidade de tradución $1',
	'tpt-template' => 'Modelo de páxina',
	'tpt-templatediff' => 'Cambiou o modelo de páxina.',
	'tpt-diff-old' => 'Texto anterior',
	'tpt-diff-new' => 'Texto novo',
	'tpt-submit' => 'Marcar esta versión para ser traducida',
	'tpt-sections-oldnew' => 'Unidades de tradución novas e existentes',
	'tpt-sections-deleted' => 'Unidades de tradución borradas',
	'tpt-sections-template' => 'Modelo de páxina de tradución',
	'tpt-action-nofuzzy' => 'Non invalidar as traducións',
	'tpt-badtitle' => 'O nome de páxina dado ("$1") non é un título válido',
	'tpt-nosuchpage' => 'A páxina "$1" non existe',
	'tpt-oldrevision' => '$2 non é a última versión da páxina "[[$1]]".
Só as últimas versións poden ser marcadas para seren traducidas.',
	'tpt-notsuitable' => 'A páxina "$1" non é válida para ser traducida.
Comprobe que teña as etiquetas <nowiki><translate></nowiki> e mais unha sintaxe válida.',
	'tpt-saveok' => 'A páxina "[[$1]]" foi marcada para ser traducida, {{PLURAL:$2|cunha unidade de tradución|con $2 unidades de tradución}}.
A páxina agora pode ser <span class="plainlinks">[$3 traducida]</span>.',
	'tpt-badsect' => '"$1" non é un nome válido para a unidade de tradución $2.',
	'tpt-showpage-intro' => 'A continuación están listadas as seccións existentes e borradas.
Antes de marcar esta versión para ser traducida, comprobe que as modificacións feitas ás seccións foron minimizadas para evitarlles traballo innecesario aos tradutores.',
	'tpt-mark-summary' => 'Marcou esta versión para ser traducida',
	'tpt-edit-failed' => 'Non se puido actualizar a páxina: $1',
	'tpt-duplicate' => 'O nome da unidade de tradución "$1" úsase máis dunha vez.',
	'tpt-already-marked' => 'A última versión desta páxina xa foi marcada para ser traducida.',
	'tpt-unmarked' => 'A páxina "$1" xa non está marcada para traducir.',
	'tpt-list-nopages' => 'Non hai ningunha páxina marcada para ser traducida, nin preparada para ser marcada para ser traducida.',
	'tpt-new-pages-title' => 'Páxinas propostas para a súa tradución',
	'tpt-old-pages-title' => 'Páxinas en tradución',
	'tpt-other-pages-title' => 'Páxinas rotas',
	'tpt-discouraged-pages-title' => 'Páxinas rexeitadas',
	'tpt-new-pages' => '{{PLURAL:$1|Esta páxina contén|Estas páxinas conteñen}} texto con etiquetas de tradución, pero ningunha versión {{PLURAL:$1|desta páxina|destas páxinas}} está actualmente marcada para ser traducida.',
	'tpt-old-pages' => 'Algunha versión {{PLURAL:$1|desta páxina|destas páxinas}} foi marcada para ser traducida.',
	'tpt-other-pages' => '{{PLURAL:$1|Hai marcada para traducir unha a versión vella desta páxina|Hai marcadas para traducir algunhas versións vellas destas páxinas}}, pero {{PLURAL:$1|a última versión|as últimas versións}} non se {{PLURAL:$1|pode|poden}} marcar.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Esta páxina foi rexeitada|Estas páxinas foron rexeitadas}} e xa non se solicita a súa tradución.',
	'tpt-rev-mark' => 'marcar para traducir',
	'tpt-rev-unmark' => 'eliminar da tradución',
	'tpt-rev-discourage' => 'rexeitar',
	'tpt-rev-encourage' => 'restaurar',
	'tpt-rev-mark-tooltip' => 'Marcar a última versión desta páxina para a súa tradución.',
	'tpt-rev-unmark-tooltip' => 'Eliminar esta páxina da tradución.',
	'tpt-rev-discourage-tooltip' => 'Rexeitar máis traducións desta páxina.',
	'tpt-rev-encourage-tooltip' => 'Restaurar esta páxina á tradución normal.',
	'translate-tag-translate-link-desc' => 'Traducir esta páxina',
	'translate-tag-markthis' => 'Marcar esta páxina para a súa tradución',
	'translate-tag-markthisagain' => 'Esta páxina sufriu <span class="plainlinks">[$1 cambios]</span> desde que foi <span class="plainlinks">[$2 marcada para a súa tradución]</span> por última vez.',
	'translate-tag-hasnew' => 'Esta páxina contén <span class="plainlinks">[$1 cambios]</span> que non están marcados para a súa tradución.',
	'tpt-translation-intro' => 'Esta páxina é unha <span class="plainlinks">[$1 versión traducida]</span> da páxina "[[$2]]" e a tradución está completada e actualizada ao $3%.',
	'tpt-translation-intro-fuzzy' => 'As traducións desfasadas están marcadas coma este texto.',
	'tpt-languages-legend' => 'Outras linguas:',
	'tpt-target-page' => 'Esta páxina non se pode actualizar manualmente.
Esta páxina é unha tradución da páxina "[[$1]]" e a tradución pódese actualizar usando [$2 a ferramenta de tradución].',
	'tpt-unknown-page' => 'Este espazo de nomes está reservado para traducións de páxinas de contido.
A páxina que está intentando editar parece non corresponder a algunha páxina marcada para ser traducida.',
	'tpt-render-summary' => 'Actualizando para coincidir coa nova versión da páxina de orixe',
	'tpt-download-page' => 'Exportar a páxina coas traducións',
	'pt-parse-open' => 'Etiqueta &lt;translate> desequilibrada.
Modelo de tradución: <pre>$1</pre>',
	'pt-parse-close' => 'Etiqueta &lt;/translate> desequilibrada.
Modelo de tradución: <pre>$1</pre>',
	'pt-parse-nested' => 'Non se permiten as seccións &lt;translate> aniñadas.
Texto da etiqueta: <pre>$1</pre>',
	'pt-shake-multiple' => 'Hai demasiados marcadores de sección para unha soa.
Texto da sección: <pre>$1</pre>',
	'pt-shake-position' => 'Os marcadores de sección atópanse nunha posición inesperada.
Texto da sección: <pre>$1</pre>',
	'pt-shake-empty' => 'Sección baleira para o marcador $1.',
	'pt-log-header' => 'Rexistro de accións e operacións relacionadas co sistema de tradución de páxinas',
	'pt-log-name' => 'Rexistro de páxinas de tradución',
	'pt-log-mark' => '{{GENDER:$2|marcou}} a revisión $3 da páxina "[[:$1]]" para traducir',
	'pt-log-unmark' => '{{GENDER:$2|retirou}} a páxina "[[:$1]]" da tradución',
	'pt-log-moveok' => '{{GENDER:$2|trasladou}} a páxina traducible "$1" a "$3"',
	'pt-log-movenok' => '{{GENDER:$2|deu}} cun problema ao mover "[[:$1]]" a "[[:$3]]"',
	'pt-log-delete-full-ok' => '{{GENDER:$2|completou}} o borrado da páxina traducible "$1"',
	'pt-log-delete-full-nok' => '{{GENDER:$2|atopou}} un problema durante o borrado da páxina traducible "[[:$1]]"',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|completou}} o borrado da páxina de tradución "$1"',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|atopou}} un problema durante o borrado da páxina de tradución "[[:$1]]"',
	'pt-movepage-title' => 'Mover a páxina traducible "$1"',
	'pt-movepage-blockers' => 'Non se pode trasladar a páxina traducible a un novo nome debido {{PLURAL:$1|ao seguinte erro|aos seguintes erros}}:',
	'pt-movepage-block-base-exists' => 'Existe a páxina de destino "[[:$1]]".',
	'pt-movepage-block-base-invalid' => 'A páxina de destino ten un título incorrecto.',
	'pt-movepage-block-tp-exists' => 'Existe a páxina de tradución de destino "[[:$2]]".',
	'pt-movepage-block-tp-invalid' => 'O título da páxina de tradución de destino para "[[:$1]]" é incorrecto (quizais sexa longo de máis).',
	'pt-movepage-block-section-exists' => 'Existe a sección da páxina de destino "[[:$2]]".',
	'pt-movepage-block-section-invalid' => 'O título da sección da páxina de destino para "[[:$1]]" é incorrecto (quizais sexa longo de máis).',
	'pt-movepage-block-subpage-exists' => 'Existe a subpáxina de destino "[[:$2]]".',
	'pt-movepage-block-subpage-invalid' => 'O título da subpáxina de destino para "[[:$1]]" é incorrecto (quizais sexa longo de máis).',
	'pt-movepage-list-pages' => 'Lista de páxinas a mover',
	'pt-movepage-list-translation' => 'Páxinas de tradución',
	'pt-movepage-list-section' => 'Sección de páxina',
	'pt-movepage-list-other' => 'Outras subpáxinas',
	'pt-movepage-list-count' => 'En total, $1 {{PLURAL:$1|páxina|páxinas}} a mover.',
	'pt-movepage-legend' => 'Mover a páxina traducible',
	'pt-movepage-current' => 'Nome actual:',
	'pt-movepage-new' => 'Novo nome:',
	'pt-movepage-reason' => 'Motivo:',
	'pt-movepage-subpages' => 'Mover todas as subpáxinas',
	'pt-movepage-action-check' => 'Comprobar se o traslado é posible',
	'pt-movepage-action-perform' => 'Realizar o traslado',
	'pt-movepage-action-other' => 'Cambiar o destino',
	'pt-movepage-intro' => 'Esta páxina especial permite mover páxinas que están marcadas para a súa tradución.
A acción de traslado non será inmediata porque é necesario mover moitas outras páxinas.
Mentres as páxinas son trasladadas, non é posible traballar nelas.
Os erros quedarán rexistrados no [[Special:Log/pagetranslation|rexistro de páxinas de tradución]] e deberán ser reparados manualmente.',
	'pt-movepage-logreason' => 'Parte da páxina traducible "$1".',
	'pt-movepage-started' => 'Estase a mover a páxina base.
Comprobe o [[Special:Log/pagetranslation|rexistro de páxinas de tradución]] por se houbese algún erro e para ler as mensaxes de conclusión.',
	'pt-locked-page' => 'Esta páxina está bloqueada porque se está a mover a páxina traducible.',
	'pt-deletepage-lang-title' => 'Borrar a páxina de tradución "$1".',
	'pt-deletepage-full-title' => 'Borrar a páxina traducible "$1".',
	'pt-deletepage-invalid-title' => 'A páxina especificada non é válida.',
	'pt-deletepage-invalid-text' => 'A páxina especificada non é unha páxina traducible nin unha tradución dela.',
	'pt-deletepage-action-check' => 'Lista de páxinas a borrar',
	'pt-deletepage-action-perform' => 'Realizar o borrado',
	'pt-deletepage-action-other' => 'Cambiar o destino',
	'pt-deletepage-lang-legend' => 'Borrar a páxina de tradución',
	'pt-deletepage-full-legend' => 'Borrar a páxina traducible',
	'pt-deletepage-any-legend' => 'Borrar a páxina traducible ou a tradución da páxina traducible',
	'pt-deletepage-current' => 'Nome da páxina:',
	'pt-deletepage-reason' => 'Motivo:',
	'pt-deletepage-subpages' => 'Borrar todas as subpáxinas',
	'pt-deletepage-list-pages' => 'Lista de páxinas a borrar',
	'pt-deletepage-list-translation' => 'Páxinas de tradución',
	'pt-deletepage-list-section' => 'Sección de páxina',
	'pt-deletepage-list-other' => 'Outras subpáxinas',
	'pt-deletepage-list-count' => 'En total, $1 {{PLURAL:$1|páxina|páxinas}} a borrar.',
	'pt-deletepage-full-logreason' => 'Parte da páxina traducible "$1".',
	'pt-deletepage-lang-logreason' => 'Parte da páxina de tradución "$1".',
	'pt-deletepage-started' => 'Comprobe os erros e as mensaxes de conclusión no [[Special:Log/pagetranslation|rexistro de páxinas de tradución]].',
	'pt-deletepage-intro' => 'Esta páxina especial permite borrar por completo páxinas traducibles ou traducións nunha lingua.
A acción de borrado non será inmediata porque cómpre eliminar moitas páxinas.
Os erros quedarán rexistrados no [[Special:Log/pagetranslation|rexistro de páxinas de tradución]] e terán que arranxarse manualmente.',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 * @author Purodha
 */
$messages['gsw'] = array(
	'pagetranslation' => 'Sytenibersetzig',
	'right-pagetranslation' => 'D Syte, wu sotte ibersetzt wäre, markiere',
	'tpt-desc' => 'Erwyterig fir d Iberstzig vu Inhaltssyte',
	'tpt-section' => 'Iberstzigs-Abschnitt $1',
	'tpt-section-new' => 'Neje Iberstzigs-Abschnitt. Name: $1',
	'tpt-section-deleted' => 'Ibersetzigs-Abschnitt $1',
	'tpt-template' => 'Sytevorlag',
	'tpt-templatediff' => 'D Sytevorlag het sich gänderet.',
	'tpt-diff-old' => 'Vorige Tekscht',
	'tpt-diff-new' => 'Neje Tekscht',
	'tpt-submit' => 'Die Version zum Ibersetze markiere',
	'tpt-sections-oldnew' => 'Neji un vorhandeni Ibersetzigs-Abschnitt',
	'tpt-sections-deleted' => 'Gleschti Ibersetzigs-Abschnitt',
	'tpt-sections-template' => 'Ibersetzigs-Sytevorlag',
	'tpt-action-nofuzzy' => 'Setz d Ibersetzige nit usser Chraft',
	'tpt-badtitle' => 'Dr Sytename, wu Du aagee hesch ($1), isch kei giltige Sytename',
	'tpt-nosuchpage' => 'D Syte $1 git s nit',
	'tpt-oldrevision' => '$2 isch nit di letscht Version vu dr Syte [[$1]].
Nume di letschte Versione chenne zum Iberseze markiert wäre.',
	'tpt-notsuitable' => 'D Syte $1 cha nit iberstez wäre.
Stell sicher, ass si <nowiki><translate></nowiki>-Markierige un e giltige Syntax het.',
	'tpt-saveok' => 'D Syte [[$1]] isch zum Ibersetze markiert wore mit $2 {{PLURAL:$2|Ibersetzigs-Abschnitt|Ibersetzigs-Abschnitt}}.
D Syte cha jetz <span class="plainlinks">[$3 ibersetzt]</span> wäre.',
	'tpt-badsect' => '"$1" isch kei giltige Name fir dr Iberstzigs-Abschnitt $2.',
	'tpt-showpage-intro' => 'Unte sin Abschnitt ufglischtet, wu nej sin, sonigi wu s git un sonigi wu s nit git.
Voreb Du die Versione zum Ibersetze markiersch, iberprief, ass d Änderige an dr Abschnitt gring ghalte sin go uunetigi Arbed bi dr Ibersetzig vermyde.',
	'tpt-mark-summary' => 'het die Versione zum Ibersetze markiert',
	'tpt-edit-failed' => 'Cha d Syte nit aktualisiere: $1',
	'tpt-already-marked' => 'Di letscht Version vu däre Syte isch scho zum Ibersetze markiert wore.',
	'tpt-unmarked' => 'D Syte $1 isch nit lenger markiert, ass sie mueß ibersetzt wäre.',
	'tpt-list-nopages' => 'S sin kei Syte zum Ibersetze markiert wore un sin au no keini Syte fertig, wu chennte zum Ibersetze markiert wäre',
	'tpt-new-pages' => '{{PLURAL:$1|In däre Syte|In däne Syte}} het s Tekscht mit Ibersetzigs-Markierige, aber zur Zyt isch kei Version {{PLURAL:$1|däre Syte|däne Syte}} zum Ibersetze markiert.',
	'tpt-old-pages' => '{{PLURAL:$1|E Version vu däre Syte isch|E paar Versione vu däne Syte sin}} zum Ibersetze markiert wore',
	'tpt-other-pages' => '{{PLURAL:$1|En alti Version vu däre Syte isch markiert, ass si mueß|Alti Versione vu däne Syte sin markiert, ass si mien}} ibersetzt wäre.
Di {{PLURAL:$1|nejscht Version cha dergege nit markiert wäre, ass si mueß|nejschte Versione chenne dergege nit markiert wäre, ass sin mien}} ibersetzt wäre.',
	'tpt-rev-unmark' => 'die Syte vum Ibersetze zruckneh',
	'translate-tag-translate-link-desc' => 'Die Syte ibersetze',
	'translate-tag-markthis' => 'Die Syte zum ibersetze markiere',
	'translate-tag-markthisagain' => 'An däre Syte het s <span class="plainlinks">[$1 Änderige]</span> gee, syt si s lescht Mol <span class="plainlinks">[$2 zum Ibersetze markiert wore isch]</span>.',
	'translate-tag-hasnew' => 'In däre Syte het s <span class="plainlinks">[$1 Änderige]</span>, wu nit zum Ibersetze markiert sin.',
	'tpt-translation-intro' => 'Die Syte isch e <span class="plainlinks">[$1 ibersetzti Version]</span> vun ere Syte [[$2]] un d Ibersetzig isch zue $3% vollständig un aktuäll.',
	'tpt-translation-intro-fuzzy' => 'Nit aktuälli Ibersetzige wäre wie dää Tekscht markiert.',
	'tpt-languages-legend' => 'Anderi Sproche:',
	'tpt-target-page' => 'Die Syte cha nit vu Hand aktualisiert wäre.
Die Syte isch e Ibersetzig vu dr Syte [[$1]] un d Ibersetzig cha aktualisert wäre mit em [$2 Ibersetzigstool].',
	'tpt-unknown-page' => 'Dää Namensruum isch reserviert fir Ibersetzige vu Inhaltssyte.
D Syte, wu Du witt bearbeite, ghert schyns zue keire Syte, wu zum Ibersetze markiert isch.',
	'tpt-render-summary' => 'Aktualisiere zum e neji Version vu dr Quällsyte z finde',
	'tpt-download-page' => 'Syte mit Ibersetzige exportiere',
	'pt-parse-open' => 'Uasymmetrischi &lt;translate&gt;-Markierig.
Ibersetzigsvorlag: <pre>$1</pre>',
	'pt-parse-close' => 'Uusymmetrischi &lt;&#47;translate&gt;-Markierig.
Ibersetzigsvorlag: <pre>$1</pre>',
	'pt-parse-nested' => 'Verschachtleti &lt;translate&gt;-Abschnitt sin nit megli.
Text vu dr Markierig: <pre>$1</pre>',
	'pt-shake-multiple' => 'Mehreri Abschnittsmarker fir ei Abschnitt.
Text vum Abschnitt: <pre>$1</pre>',
	'pt-shake-position' => 'S het Abschnittsmarker an ere nit erwartete Stell.
Text vum Abschnitt: <pre>$1</pre>',
	'pt-shake-empty' => 'Abschnitt lääre fir Marker $1.',
	'pt-log-header' => 'Logbuech vu dr Änderige im Zämmehang mit em Ibersetzigssyschtem',
	'pt-log-name' => 'Sytenibersetzigs-Logbuech',
	'pt-log-mark' => '{{GENDER:$2|het}} Version $3 vu dr Syte „[[:$1]]“ fir d Ibersetzig frejgee',
	'pt-log-unmark' => '{{GENDER:$2|het}} d Syte „[[:$1]]“ us dr Ibersetzig uusegnuu',
	'pt-log-moveok' => '{{GENDER:$2|het}} d Umnännig vu dr Ibersetzigssyte $1 uf $3 abgschlosse',
	'pt-log-movenok' => '{{GENDER:$2|het}} e Probläm bi dr Verschiebig vu [[:$1]] no [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|het}} d Umnännig vu dr ibersetzbare Syte $1 abgschlosse',
	'pt-log-delete-full-nok' => '{{GENDER:$2|het}} derwyylischt em Lösche vo de übersetzbare Syte [[:$1]] en Problem gha',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|het}} d Umnännig vu dr ibersetzte Syte $1 abgschlosse',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|het}} derwyylischt em Lösche vo de übersetze Syte [[:$1]] en Problem gha',
	'pt-movepage-title' => 'D Ibersetzigssyte $1 verschiebe',
	'pt-movepage-blockers' => 'Di ibersetzbar Syte het wäge {{PLURAL:$1|däm Fähler|däne Fähler}} nit nit uf dr nej Name chenne verschobe wäre:',
	'pt-movepage-block-base-exists' => 'D Basissyte [[:$1]] git s scho.',
	'pt-movepage-block-base-invalid' => 'D Basissyte het kei giltige Name.',
	'pt-movepage-block-tp-exists' => 'D Ibersetzigssyte [[:$2]] git s scho.',
	'pt-movepage-block-tp-invalid' => 'Dr Ziilname vu dr Ibersetzigssyte fir [[:$1]] wär nit giltig (z lang?).',
	'pt-movepage-block-section-exists' => 'D Abschnittssyte [[:$2]] git s scho.',
	'pt-movepage-block-section-invalid' => 'Dr Ziilname vu dr Abschnittssyte fir [[:$1]] wär nit giltig (z lang?).',
	'pt-movepage-block-subpage-exists' => 'D Untersyte [[:$2]] git s scho.',
	'pt-movepage-block-subpage-invalid' => 'Dr Ziilname vu dr Untersyte fir [[:$1]] wär nit giltig (z lang?).',
	'pt-movepage-list-pages' => 'Lischt vu dr Syte, wu mien verschobe wäre',
	'pt-movepage-list-translation' => 'Ibersetzigssyte',
	'pt-movepage-list-section' => 'Abschnittssyte',
	'pt-movepage-list-other' => 'Anderi Untersyte',
	'pt-movepage-list-count' => 'Insgsamt git s $1 Syte, wu {{PLURAL:$1|mueß|mien}} verschobe wäre.',
	'pt-movepage-legend' => 'Ibersetzigssyte verschiebe',
	'pt-movepage-current' => 'Aktuälle Sytename:',
	'pt-movepage-new' => 'Neje Sytename:',
	'pt-movepage-reason' => 'Grund:',
	'pt-movepage-subpages' => 'Alli Untersyte verschiebe',
	'pt-movepage-action-check' => 'Iberpriefig, eb d Verschiebig megli isch',
	'pt-movepage-action-perform' => 'Verschiebig durfiere',
	'pt-movepage-action-other' => 'Ziil ändere',
	'pt-movepage-intro' => 'Die Spezialsyte macht s megli Syte z verschiebe, wu fir d Ibersetzig zeichnet sin.
D Verschiebig chunnt nit sofort, wel vil Syte derby mien verschobe wäre.
Bim Verschiebigsvorgang isch s nit megli, die Syte z nutze.
Verschiebigsfähler wäre im [[Special:Log/pagetranslation|Ibersetzigs-Logbuech]] ufzeichnet un mien vu Hand verbesseret wäre.',
	'pt-movepage-logreason' => 'Teil vu dr Ibersetzigssyte $1.',
	'pt-movepage-started' => 'D Basissyte isch jetz verschobe wore.
Bitte prief s [[Special:Log/pagetranslation|Ibersetzigs-Logbuech]] uf Fählermäldige un d Vollzugsnochricht.',
	'pt-locked-page' => 'Die Syte isch gsperrt, wel d Ibersetzigssyte zurzyt verschobe wird.',
	'pt-deletepage-lang-title' => 'Übersetzigs-Syte $1 wird glöscht',
	'pt-deletepage-full-title' => 'Übersetzbari Syte $1 wird glöscht.',
	'pt-deletepage-invalid-title' => 'Die Syte, wo aagee hesch, isch nit gültig.',
	'pt-deletepage-invalid-text' => 'Die Syte, wo aagee hesch, isch weder e übersetzbari Syte, noch e Übersetzig.',
	'pt-deletepage-action-check' => 'Syte ufflischte, wo glöscht werde sölle',
	'pt-deletepage-action-perform' => 'Löschig durefiere',
	'pt-deletepage-action-other' => 'Ziil ändere',
	'pt-deletepage-lang-legend' => 'Übersetzigs-Syte lösche',
	'pt-deletepage-full-legend' => 'Übersetzbari Syte lösche',
	'pt-deletepage-any-legend' => 'Übersetzbari oder übersetzti Syte lösche',
	'pt-deletepage-current' => 'Sytename:',
	'pt-deletepage-reason' => 'Grund:',
	'pt-deletepage-subpages' => 'Alli Untersyte lösche',
	'pt-deletepage-list-pages' => 'Lischt vu dr Syte, wu mien glöscht wäre',
	'pt-deletepage-list-translation' => 'Ibersetzigssyte',
	'pt-deletepage-list-section' => 'Abschnittssyte',
	'pt-deletepage-list-other' => 'Anderi Untersyte',
	'pt-deletepage-list-count' => 'Insgsamt git s $1 Syte, wu {{PLURAL:$1|mueß|mien}} glöscht wäre.',
	'pt-deletepage-full-logreason' => 'Teil vu dr übersetzbare Syte $1.',
	'pt-deletepage-lang-logreason' => 'Teil vu dr übersetzte Syte $1.',
	'pt-deletepage-started' => 'Bitte due s [[Special:Log/pagetranslation|Übersetzigs-Logbuech]] uff Fääler un Ussfierigsnoochrichte überpriefe.',
	'pt-deletepage-intro' => 'Die Spezialsyte ermöglicht s Lösche vo ganze übersetbare Syte oder Übersetzige in ei Sprooch.
D Ussfierig vo Löschig passiert nit unmittelbar, wyl vili Syte übersetzt werde mien.
Fääler werde im [[Special:Log/pagetranslation|Übersetzigs-Logbuech]] uffzeichnet un mien noochträgli manuell berichtigt werde.',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'pagetranslation' => 'પાનું ભાષાંતરણ',
	'right-pagetranslation' => 'ભાષાંતર માટેનાં પાનાઓનાં સંસ્કરણો ચિહ્નિત કરો',
	'tpt-section' => 'ભાષાંતર એકમ $1',
	'tpt-section-new' => 'નવું ભાષાંતર એકમ. નામ: $1',
	'tpt-section-deleted' => 'ભાષાંતર એકમ $1',
	'tpt-template' => 'પાનાં ઢાંચો',
	'tpt-templatediff' => 'પાનાંનો ઢાંચો બદલાયો છે.',
	'tpt-diff-old' => 'પહેલાંનું લખાણ',
	'tpt-diff-new' => 'નવું લખાણ',
	'tpt-submit' => 'આ સંસ્કરણને ભાષાંતર માટે ચિહ્નિત કરો',
	'tpt-sections-oldnew' => 'નવાં અને વિદ્યમાન ભાષાંતર એકમો',
	'tpt-sections-deleted' => 'રદ કરાયેલા ભાષાંતર એકમો',
	'tpt-sections-template' => 'ભાષાંતર પાના ઢાંચો',
	'tpt-badtitle' => 'પાનાને અપાયેલું ($1) નામ પ્રમાણભૂત મથાળું નથી',
	'tpt-oldrevision' => '$2 એ પાનાં [[$1]] નું આધુનિક સંસ્કરણ નથી.

ફક્ત આધુનિક સંસ્કરણનેજ ભાષાંતર માટે ચિહ્નિત કરી શકાશે.',
	'tpt-notsuitable' => 'પાનું $1 ભાષાંતર માટે યોગ્ય નથી.

ખાતરી કરો કે તે <nowiki><ભાષાંતર></nowiki> ટેગ અને પ્રમાણભૂત વાક્યરચના ધરાવે છે.',
	'tpt-badsect' => '"$1" એ ભાષાંતર એકમ $2 માટેનું પ્રમાણભૂત નામ નથી.',
	'tpt-mark-summary' => 'આ સંસ્કરણને ભાષાંતર માટે ચિહ્નિત કરાયું',
	'tpt-edit-failed' => 'પાનાં: $1 ને અદ્યતન બનાવી શકાયું નહીં.',
	'tpt-already-marked' => 'આ પાનાનું આધુનિક સંસ્કરણ અગાઉથીજ ભાષાંતર માટે ચિહ્નિત થઇ ચુક્યું છે.',
	'tpt-list-nopages' => 'ન પાનાંઓ ભાષાંતર માટે ચિહ્નિત કરેલા છે કે ન ભાષાંતર માટે ચિહ્નિત થવા તૈયાર છે.',
	'tpt-new-pages' => '{{PLURAL:$1|આ પાના|આ પાનાઓ}} ભાષાંતર ટેગ શાથેનું લખાણ ધરાવે છે, પરંતુ {{PLURAL:$1|આ પાના|આ પાનાઓ}}નું હાલનું સંસ્કરણ ભાષાંતર માટે ચિહ્નિત કરાયેલ નથી.',
	'tpt-old-pages' => '{{PLURAL:$1|આ પાનાં|આ પાનાંઓ}}નાં કેટલાક સંસ્કરણ ભાષાંતર માટે ચિહ્નિત કરાયેલા છે.',
	'translate-tag-translate-link-desc' => 'આ પાનાનું ભાષાંતર કરો',
	'translate-tag-markthis' => 'આ પાનાંને ભાષાંતર માટે ચિહ્નિત કરો',
	'tpt-translation-intro-fuzzy' => 'કાલગ્રસ્ત ભાષાંતરણો આ રીતે ચિહ્નિત થયેલાં.',
	'tpt-languages-legend' => 'અન્ય ભાષાઓ:',
);

/** Manx (Gaelg)
 * @author Shimmin Beg
 */
$messages['gv'] = array(
	'pt-movepage-reason' => 'Fa:',
);

/** Hausa (هَوُسَ) */
$messages['ha'] = array(
	'pt-movepage-reason' => 'Dalili:',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Deror avi
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'pagetranslation' => 'תרגום דפים',
	'right-pagetranslation' => 'סימון גרסאות של הדפים לתרגום',
	'tpt-desc' => 'הרחבה לתרגום דפי תוכן',
	'tpt-section' => 'יחידת תרגום $1',
	'tpt-section-new' => 'יחידת תרגום חדשה.
שם: $1',
	'tpt-section-deleted' => 'יחידת תרגום $1',
	'tpt-template' => 'תבנית הדף',
	'tpt-templatediff' => 'תבנית הדף שונתה.',
	'tpt-diff-old' => 'הטקסט הקודם',
	'tpt-diff-new' => 'טקסט חדש',
	'tpt-submit' => 'סימון גרסה זו לתרגום',
	'tpt-sections-oldnew' => 'יחידות תרגום חדשות וקיימות',
	'tpt-sections-deleted' => 'יחידות תרגום שנמחקו',
	'tpt-sections-template' => 'תבנית דף תרגום',
	'tpt-action-nofuzzy' => 'לא לפסול תרגומים',
	'tpt-badtitle' => 'שם הדף שניתן ($1) אינו כותרת תקינה',
	'tpt-nosuchpage' => 'הדף $1 אינו קיים',
	'tpt-oldrevision' => '$2 היא לא הגרסה האחרונה של הדף [[$1]].
רק הגרסאות האחרונות יכולות להיות מסומנות לתרגום.',
	'tpt-notsuitable' => 'הדף $1 אינו מתאים לתרגום.
אנא ודאו שהוא מכיל תגיות <nowiki><translate></nowiki> ושהתחביר שלו תקין.',
	'tpt-saveok' => 'הדף [[$1]] סומן לתרגום עם {{PLURAL:$2|יחידת תרגום אחת|$2 יחידות תרגום}}.
עכשיו אפשר <span class="plainlinks">[$3 לתרגם]</span> את הדף.',
	'tpt-badsect' => 'השם "$1" אינו שם תקין ליחידת התרגום $2.',
	'tpt-showpage-intro' => 'להלן רשימת קטעים חדשים, קיימים ומחוקים.
לפני סימון גרסה זו לתרגום, בדקו שהשינויים למקטעים מזעריים, כדי למנוע עבודה מיותרת של מתרגמים.',
	'tpt-mark-summary' => 'גרסה זו סומנה לתרגום',
	'tpt-edit-failed' => 'לא ניתן לעדכן את הדף: $1',
	'tpt-duplicate' => 'נעשה שימוש מרובה בשם יחידת התרגום $1.',
	'tpt-already-marked' => 'הגרסה העדכנית ביותר של דף זה כבר סומנה לתרגום.',
	'tpt-unmarked' => 'הדף $1 כבר אינו מסומן לתרגום.',
	'tpt-list-nopages' => 'אין דפים המסומנים לתרגום וגם לא דפים המוכנים להיות מסומנים לתרגום.',
	'tpt-new-pages-title' => 'דפים שהוצעו לתרגום',
	'tpt-old-pages-title' => 'דפים בתרגום',
	'tpt-other-pages-title' => 'דפים מקולקלים',
	'tpt-discouraged-pages-title' => 'דפים לא מומלצים',
	'tpt-new-pages' => '{{PLURAL:$1|הדף הזה מכיל|הדפים האלה מכילים}} טקסט עם תגי תרגום,
אבל שום גרסה {{PLURAL:$1|דף זה|הדפים האלה}} מסומנת כעת לתרגום.',
	'tpt-old-pages' => '{{PLURAL:$1|גרסה מסוימת|גרסאות מסוימות}} של {{PLURAL:$1|דף זה סומנה|דפים אלה סומנו}} לתרגום.',
	'tpt-other-pages' => '{{PLURAL:$1|גרסה ישנה של דף זה סומנה|גרסאות ישנות של דפים אלה סומנו}} לתרגום,
אבל {{PLURAL:$1|הגרסה האחרונה אינה יכולה להיות מסומנת|הגרסאות האחרונות אינן יכולות להיות מסומנות}} לתרגום.',
	'tpt-discouraged-pages' => 'מומלץ לא לתרגם את {{PLURAL:$1|הדף הזה|הדפים האלה}}',
	'tpt-select-prioritylangs' => 'רשימת מופרדת בפסיקים של קודי שפה:',
	'tpt-select-prioritylangs-force' => 'למנוע תרגום לשפות אחרות',
	'tpt-select-prioritylangs-reason' => 'סיבה:',
	'tpt-sections-prioritylangs' => 'שפות מועדפות',
	'tpt-rev-mark' => 'לסמן לתרגום',
	'tpt-rev-unmark' => 'הסרה מהתרגום',
	'tpt-rev-discourage' => 'לסמן כלא מומלץ',
	'tpt-rev-encourage' => 'שחזור',
	'tpt-rev-mark-tooltip' => 'סימון הגרסה האחרונה של דף זה לתרגום',
	'tpt-rev-unmark-tooltip' => 'להסרת דף זה מרשימת התרגום.',
	'tpt-rev-discourage-tooltip' => 'להמליץ לא לתרגם את הדף הזה עוד.',
	'tpt-rev-encourage-tooltip' => 'לשחזר את הדף הזה לתרגום רגיל.',
	'translate-tag-translate-link-desc' => 'תרגום דף זה',
	'translate-tag-markthis' => 'סימון דף זה לתרגום',
	'translate-tag-markthisagain' => 'בדף הזה יש <span class="plainlinks">[$1 שינויים]</span> שנעשו מאז שהוא <span class="plainlinks">[$2 סומן לתרגום]</span> בפעם האחרונה.',
	'translate-tag-hasnew' => 'דף זה מכיל <span class="plainlinks">[$1 שינויים]</span> שאינם מסומנים לתרגום.',
	'tpt-translation-intro' => 'הדף הזה הוא <span class="plainlinks">[$1 גרסה מתורגמת]</span> של הדף [[$2]] והתרגום שלם ב־$3%.',
	'tpt-translation-intro-fuzzy' => 'תרגומים שפג תוקפם מסומנים כך.',
	'tpt-languages-legend' => 'שפות אחרות:',
	'tpt-languages-zero' => 'להתחיל לתרגום לשפה הזאת',
	'tpt-target-page' => 'לא ניתן לעדכן דף זה ידנית.
דף זה הוא תרגום של הדף [[$1]] וניתן לעדכן את התרגום באמצעות [$2 כלי התרגום].',
	'tpt-unknown-page' => 'מרחב שם זה שמור לצורך תרגומי דפי התוכן.
הדף אותו אתם מנסים לערוך אינו תואם לאף דף המסומן לתרגום.',
	'tpt-translation-restricted' => 'מנהל תרגומים נעל את תרגום קבוצת ההודעות הזאת לשפה הזאת.

סיבה להגבלה: $1',
	'tpt-discouraged-language-force' => 'מנהל תרגומים הגביל את השפות שאפשר לתרגם אליהן את קבוצת ההודעות הזאת. השפה הזאת לא נכללת בהן.

סיבה להגבלה: $1',
	'tpt-discouraged-language' => 'השפה הזאת היא לא אחת השפות המועדפות לתרגום כפי שהגדיר מנהל תרגומים עבור הקבוצה הזאת.

סיבה לתעדוף: $1',
	'tpt-render-summary' => 'עדכון להתאמת הגרסה החדשה של דף המקור',
	'tpt-download-page' => 'ייצוא דף עם תרגומים',
	'pt-parse-open' => 'תג &lt;translate> לא מאוזן.
תבנית תרגום: <pre>$1</pre>',
	'pt-parse-close' => 'תג &lt;/translate> לא מאוזן.
תבנית תרגום: <pre>$1</pre>',
	'pt-parse-nested' => 'קטעים &lt;translate> מקוננים אינם מורשים.
תוכן התג: <pre>$1</pre>',
	'pt-shake-multiple' => 'סמני קטעים מרובים עבור קטע אחד.
טקסט הקטע: <pre>$1</pre>',
	'pt-shake-position' => 'סמני קטעים במיקום בלתי צפוי.
תוכן הקטע: <pre>$1</pre>',
	'pt-shake-empty' => 'קטע ריק עבור סמן $1.',
	'pt-log-header' => 'יומן של פעולות שמיוחדות למערכת תרגום דפים',
	'pt-log-name' => 'יומן תרגום דפים',
	'pt-log-mark' => '{{GENDER:$2|סימן}} את גרסה $3 של הדף "[[:$1]]" לתרגום',
	'pt-log-unmark' => '{{GENDER:$2|הוציא|הוציאה}} את הדף "[[:$1]]" מהתרגום',
	'pt-log-moveok' => '{{GENDER:$2|השלים|השלימה}} את העברת הדף הניתן לתרגום $1 לשם $3',
	'pt-log-movenok' => '{{GENDER:$2|מצא|מצאה}} בעיה בעת העברת [[:$1]] אל [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|השלים|השלימה}} את המחיקה של הדף הניתן לתרגום $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|נתקל|נתקלה}} בבעיה בזמן מחיקת הדף הניתן לתרגום [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|השלים|השלימה}} את המחיקה של דף התרגום $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|נתקל|נתקלה}} בבעיה בזמן מחיקת דף התרגום [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|הסיר|הסירה}} את תעדוף השפות לתרגום מהדף [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|הגדיר|הגדירה}} שהשפות המועדפות לתרגום דף [[:$1]] הן $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|הגביל|הגבילה}} את תרגום הדף [[:$1]] לשפות הבאות: $3',
	'pt-movepage-title' => 'להעביר את הדף הניתן לתרגום $1',
	'pt-movepage-blockers' => 'דף שניתן לתרגום אינו יכול להיות מועבר לשם חדש בגלל {{PLURAL:$1|השגיאה הבאה|השגיאות הבאות}}:',
	'pt-movepage-block-base-exists' => 'דף הבסיס המיועד [[:$1]] קיים.',
	'pt-movepage-block-base-invalid' => 'לדף הבסיס המיועד אין כותרת תקינה.',
	'pt-movepage-block-tp-exists' => 'דף התרגום המיועד [[:$2]] קיים.',
	'pt-movepage-block-tp-invalid' => 'כותרת דף התרגום המיועד עבור [[:$1]] אינה תקינה (אולי ארוכה מדי).',
	'pt-movepage-block-section-exists' => 'דף הקטע המיועד [[:$2]] קיים.',
	'pt-movepage-block-section-invalid' => 'כותרת דף הקטע המיועד עבור [[:$1]] תהיה בלתי תקינה (אולי ארוך מדי?).',
	'pt-movepage-block-subpage-exists' => 'דף המשנה המיועד [[:$2]] קיים.',
	'pt-movepage-block-subpage-invalid' => 'כותרת דף המשנה המיועד עבור [[:$1]] אינה תקינה (אולי ארוכה מדי).',
	'pt-movepage-list-pages' => 'רשימת הדפים להעביר',
	'pt-movepage-list-translation' => 'דפי תרגום',
	'pt-movepage-list-section' => 'דפי קטע',
	'pt-movepage-list-other' => 'דפי משנה אחרים',
	'pt-movepage-list-count' => 'בסך הכול יש {{PLURAL:$1|דף אחד|$1 דפים}} להעברה.',
	'pt-movepage-legend' => 'העברת דף שאפשר לתרגום',
	'pt-movepage-current' => 'השם הנוכחי:',
	'pt-movepage-new' => 'השם החדש:',
	'pt-movepage-reason' => 'סיבה:',
	'pt-movepage-subpages' => 'העברת כל עמודי המשנה',
	'pt-movepage-action-check' => 'לבדוק אם ההעברה אפשרית',
	'pt-movepage-action-perform' => 'לבצע את ההעברה',
	'pt-movepage-action-other' => 'שינוי יעד',
	'pt-movepage-intro' => 'דף מיוחד זה מאפשר לך להעביר דפים מסומנים לתרגום.
פעולת ההעברה אינה מידית, מכיוון שצריך להעביר דפים רבים.
בזמן שהדפים מועברים, לא ניתן לקיים שום קשר אִתם.
כשלים יירשמו ב[[Special:Log/pagetranslation|יומן תרגום דפים]], ויהיה צריך לתקן אותם באופן ידני.',
	'pt-movepage-logreason' => 'חלק מהדף הניתן לתרגום $1.',
	'pt-movepage-started' => 'עכשיו דף הבסיס הועבר.
נא לבדוק את השגיאות ואת הודעת ההשלמה ב[[Special:Log/pagetranslation|יומן תרגום הדפים]].',
	'pt-locked-page' => 'הדף הזה נעול כי הדף הניתן לתרגום מועבר כעת.',
	'pt-deletepage-lang-title' => 'מחיקת דף התרגום $1.',
	'pt-deletepage-full-title' => 'מחיקת הדף הניתן לתרגום $1.',
	'pt-deletepage-invalid-title' => 'הדף השצוין אינו תקין.',
	'pt-deletepage-invalid-text' => 'הדף שצוין אינו דף ניתן לתרגום או תרגום של דף כזה.',
	'pt-deletepage-action-check' => 'רשימת דפים למחיקה',
	'pt-deletepage-action-perform' => 'לבצע את המחיקה',
	'pt-deletepage-action-other' => 'שינוי היעד',
	'pt-deletepage-lang-legend' => 'מחיקת דף תרגום',
	'pt-deletepage-full-legend' => 'מחיקת דף ניתן לתרגום',
	'pt-deletepage-any-legend' => 'מחיקת דף ניתן לתרגום או תרגום של דף כזה',
	'pt-deletepage-current' => 'שם הדף:',
	'pt-deletepage-reason' => 'סיבה:',
	'pt-deletepage-subpages' => 'מחק את כל דפי המשנה',
	'pt-deletepage-list-pages' => 'רשימת דפים למחיקה',
	'pt-deletepage-list-translation' => 'דפי תרגום',
	'pt-deletepage-list-section' => 'דפי קטע',
	'pt-deletepage-list-other' => 'דפי משנה אחרים',
	'pt-deletepage-list-count' => 'סך הכול {{PLURAL:$1|דף אחד|$1 דפים}} למחוק.',
	'pt-deletepage-full-logreason' => 'חלק מהדף הניתן לתרגום $1.',
	'pt-deletepage-lang-logreason' => 'חלק מדך התרגום $1.',
	'pt-deletepage-started' => 'נא לבדוק את השגיאות ואת הודעת ההשלמה ב[[Special:Log/pagetranslation|יומן תרגום הדפים]]',
	'pt-deletepage-intro' => 'הדך המיוחד הזה מאפשר למחוק בשלמותם דפים ניתנים לתרגום או תרגומים שלהם לשפה אחת.
פעולת המחיקה לא תהיה מידית, כי יש למחוק דפים מרובים.
הכישלונות יירשמו ב[[Special:Log/pagetranslation|יומן תרגום דפים]] ויהיה צריך לתקן אותם ידנית.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'pagetranslation' => 'पृष्ठ अनुबाद',
	'tpt-section' => 'अनुबाद यूनिट $1',
	'tpt-template' => 'पृष्ठ साँचा',
	'tpt-diff-old' => 'पूर्व लेख',
	'tpt-diff-new' => 'नया लेख',
	'tpt-other-pages-title' => 'टूटा पृष्ठ',
	'pt-movepage-list-translation' => 'अनुबाद पृष्ठ',
	'pt-movepage-list-section' => 'अनुभाग पृष्ठ',
	'pt-movepage-list-other' => 'अन्य उपपृष्ठ',
	'pt-movepage-current' => 'सद्य सदस्यनाम:',
	'pt-movepage-new' => 'नया नाम:',
	'pt-movepage-reason' => 'कारण:',
	'pt-deletepage-current' => 'पृष्ठ नाम:',
	'pt-deletepage-reason' => 'कारण:',
	'pt-deletepage-list-pages' => 'पृष्ठ तालिका हटाने के लिए',
	'pt-deletepage-list-translation' => 'अनुबाद पृष्ठ',
	'pt-deletepage-list-section' => 'अनुभाग पृष्ठ',
	'pt-deletepage-list-other' => 'अन्य उपपृष्ठ',
);

/** Croatian (Hrvatski)
 * @author Ex13
 * @author Herr Mlinka
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'pagetranslation' => 'Prijevod stranice',
	'right-pagetranslation' => 'Označi inačice stranica za prijevod',
	'tpt-desc' => 'Proširenje za prevođenje sadržaja stranica',
	'tpt-section' => 'Grupa za prijevod $1',
	'tpt-section-new' => 'Nova grupa za prijevod.
Ime: $1',
	'tpt-section-deleted' => 'Grupa za prijevod $1',
	'tpt-template' => 'Predložak stranice',
	'tpt-templatediff' => 'Predložak stranice je promijenjen.',
	'tpt-diff-old' => 'Prethodni tekst',
	'tpt-diff-new' => 'Novi tekst',
	'tpt-submit' => 'Označi ovu verziju za prijevod',
	'tpt-sections-oldnew' => 'Novi i postojeći prijevodi',
	'tpt-sections-deleted' => 'Obrisane grupe prijevoda',
	'tpt-sections-template' => 'Predložak stranice za prijevod',
	'tpt-nosuchpage' => 'Stranica $1 ne postoji',
	'translate-tag-translate-link-desc' => 'Prevedi ovu stranicu',
	'translate-tag-markthis' => 'Označi ovu stranicu za prijevod',
	'tpt-languages-legend' => 'Drugi jezici:',
	'pt-movepage-list-pages' => 'Popis stranica za premještanje',
	'pt-movepage-list-other' => 'Ostale podstranice',
	'pt-movepage-current' => 'Trenutačni naziv:',
	'pt-movepage-new' => 'Novi naziv:',
	'pt-movepage-reason' => 'Razlog:',
	'pt-movepage-subpages' => 'Premjesti sve podstranice',
	'pt-movepage-action-check' => 'Provjeri je li premještanje moguće',
	'pt-movepage-action-perform' => 'Premjesti',
	'pt-movepage-action-other' => 'Promijeni cilj',
	'pt-movepage-intro' => 'Ova posebna stranica omogućava vam premještanje stranica koje su označene za prijevod.
Premještanje nije trenutačno, jer mnoge stranice treba premjestiti.
Red poslova će se koristiti za premještanje stranica.
Dok se stranice premještaju, nije moguće raditi na stranicama u pitanju.
Kvarovi/pogreške biti će prijavljene u evidenciji prijevoda i trebaju se ručno popraviti.',
	'pt-movepage-logreason' => 'Dio prevodive stranice $1.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'pagetranslation' => 'Přełožowanje strony',
	'right-pagetranslation' => 'Wersije strony za přełožowanje markěrować',
	'tpt-desc' => 'Rozšěrjenje za přełožowanje wobsahowych stronow',
	'tpt-section' => 'Přełožowanska jednotka $1',
	'tpt-section-new' => 'Nowa přełožowanska jednotka. Mjeno: $1',
	'tpt-section-deleted' => 'Přełožowanska jednotka $1',
	'tpt-template' => 'Předłoha strony',
	'tpt-templatediff' => 'Předłoha strony je so změniła.',
	'tpt-diff-old' => 'Předchadny tekst',
	'tpt-diff-new' => 'Nowy tekst',
	'tpt-submit' => 'Tutu wersiju za přełožowanje markěrować',
	'tpt-sections-oldnew' => 'Nowe a eksistowace přełožowanske jednotki',
	'tpt-sections-deleted' => 'Wušmórnjene přełožowanske jednotki',
	'tpt-sections-template' => 'Předłoha přełožowanskeje strony',
	'tpt-action-nofuzzy' => 'Njeanuluj přełožki',
	'tpt-badtitle' => 'Podate mjeno strony ($1) płaćiwy titul njeje',
	'tpt-nosuchpage' => 'Strona $1 njeeksistuje',
	'tpt-oldrevision' => '$2 aktualna wersija strony [[$1]] njeje.
Jenož aktualne wersije hodźa so za přełožowanje markěrować.',
	'tpt-notsuitable' => 'Strona $1 za přełožowanje přihódna njeje.
Zaswěsć, zo ma taflički <nowiki><translate></nowiki> a płaćiwu syntaksu.',
	'tpt-saveok' => 'Strona [[$1]] je so za přełožowanje z $2 {{PLURAL:$2|přełožujomnej jednotku|přełožujomnej jednotkomaj|přełožujomnymi jednotkami|přełožujomnymi jednotkami}} markěrowała.
Strona hodźi so nětko <span class="plainlinks">[$3 přełožować]</span>.',
	'tpt-badsect' => '"$1" płaćiwe mjeno za přełožowansku jednotku $2 njeje.',
	'tpt-showpage-intro' => 'Deleka su nowe, eksistowace a wušmórnjene wotrězki nalistowane.
Prjedy hač tutu wersiju za přełožowanje markěruješ, skontroluj, hač změny wotrězkow su miniměrowane, zo by njetrěbne dźěło za přełožowarjow wobešoł.',
	'tpt-mark-summary' => 'Je tutu wersiju za přełožowanje markěrował',
	'tpt-edit-failed' => 'Strona njeda so aktualizować: $1',
	'tpt-duplicate' => 'Mjeno přełožkoweje jednotki $1 so wjace hač jedyn raz wužiwa.',
	'tpt-already-marked' => 'Akutalna wersija tuteje strony je so hižo za přełožowanje markěrowała.',
	'tpt-unmarked' => 'Strona $1 hižo njeje za přełožowanje markěrowana.',
	'tpt-list-nopages' => 'Strony njejsu ani za přełožowanje markěrowali ani njejsu hotowe za přełožowanje.',
	'tpt-new-pages-title' => 'Strony namjetowane za přełožk',
	'tpt-old-pages-title' => 'Strony, kotrež so přełožuja',
	'tpt-other-pages-title' => 'Wobškodźene strony',
	'tpt-discouraged-pages-title' => 'Wuzamknjene strony',
	'tpt-new-pages' => '{{PLURAL:$1|Tuta strona wobsahuje|Tutej stronje|Tute strony wobsahuja|Tute strony wobsahuja}} tekst z přełožowanskimi tafličkimi, ale žana wersija {{PLURAL:$1|tuteje strony|tuteju stronow|tutych stronow|tutych stronow}} njeje tuchwilu za přełožowanje markěrowana.',
	'tpt-old-pages' => 'Někajka wersija {{PLURAL:$1|tuteje strony|tuteju stronow|tutych stronow|tutych stronow}} je so za přełožowanje markěrowała.',
	'tpt-other-pages' => 'Stara wersija {{PLURAL:$1|tuteje strony|tuteju stronow|tutych stronow|tutych stronow}} je za přełožowanje markěrowana,
ale aktualna wersija njehodźi so za přełožowanje markěrować.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Tuta strona|Tutej stronje|Tute strony|Tute strony}} {{PLURAL:$1|bu|buštej|buchu|buchu}} wot dalšeho přełoženja {{PLURAL:$1|wuzamknjena|wuzamknjenej|wuzamknjene|wuzamknjene}}.',
	'tpt-select-prioritylangs' => 'Lisćina rěčnych kodow dźělenych přez komu:',
	'tpt-select-prioritylangs-force' => 'Přełožkam do druhich rěčow zadźěwać',
	'tpt-select-prioritylangs-reason' => 'Přičina:',
	'tpt-sections-prioritylangs' => 'Primarne rěče',
	'tpt-rev-mark' => 'za přełožowanje markěrować',
	'tpt-rev-unmark' => 'z přełoženja wotstronić',
	'tpt-rev-discourage' => 'wuzamknyć',
	'tpt-rev-encourage' => 'wobnowić',
	'tpt-rev-mark-tooltip' => 'Najnowšu wersiju tuteje strony za přełožowanje markěrować.',
	'tpt-rev-unmark-tooltip' => 'Tutu stronu z přełoženja wotstronić',
	'tpt-rev-discourage-tooltip' => 'Dalše přełožki na tutej stronje wuzamknyć.',
	'tpt-rev-encourage-tooltip' => 'Tutu stronu za normalne přełoženje wobnowić.',
	'translate-tag-translate-link-desc' => 'Tutu stronu přełožić',
	'translate-tag-markthis' => 'Tutu stronu za přełožowanje markěrować',
	'translate-tag-markthisagain' => 'Tuta strona ma <span class="plainlinks">[$1 {{PLURAL:$1|změnu|změnje|změny|změnow}}]</span>, wot toho zo, bu posledni raz <span class="plainlinks">[$2 za přełožowanje markěrowana]</span>.',
	'translate-tag-hasnew' => 'Tuta strona wobsahuje <span class="plainlinks">[$1 {{PLURAL:$1|změna, kotraž njeje markěrowana|změnje, kotrejž njejstej markěrowanej|změny, kotrež njejsu markěrowane|změnow, kotrež njejsu markěrowane}}]</span> za přełožowanje.',
	'tpt-translation-intro' => 'Tuta strona je <span class="plainlinks">[$1 přełožena wersija]</span> strony [[$2]] a $3 % přełožka je dokónčene a přełožk je aktualny.',
	'tpt-translation-intro-fuzzy' => 'Zestarjene přełožki su kaž tutón markěrowane.',
	'tpt-languages-legend' => 'Druhe rěče:',
	'tpt-languages-zero' => 'Přełožowanje za tutu rěč započeć',
	'tpt-target-page' => 'Tuta strona njeda so manulenje aktualizować.
Tuta strona je přełožk strony [[$1]] a přełožk hodźi so z pomocu [$2 Přełožić] aktualizować.',
	'tpt-unknown-page' => 'Tutón mjenowy rum je za přełožki wobsahowych stronow wuměnjeny.
Strona, kotruž pospytuješ wobdźěłać, po wšěm zdaću stronje markěrowanej za přełožowanje njewotpowěduje.',
	'tpt-translation-restricted' => 'Přełožowanski administrator je přełožowanju tuteje skupiny do tuteje rěče zadźěwał.

Přičina za wobmjezowanje: $1',
	'tpt-discouraged-language-force' => 'Přełožowanski administrator je rěče wobmjezował, do kotrychž tuta zdźělenska skupina da so přełožić. Tuta rěč mjez tutymi rěčemi njeje:

Přičina za wobmjezowanje: $1',
	'tpt-discouraged-language' => 'Tuta rěč njeje mjez primarnymi rěčemi, kotrež přełožowanski administrator je za tutu zdźělensku skupinu postajił.

Přičina za prioritu: $1',
	'tpt-render-summary' => 'Aktualizacija po nowej wersiji žórłoweje strony',
	'tpt-download-page' => 'Stronu z přełožkami eksportować',
	'pt-parse-open' => 'Asymetriska taflička &lt;translate>.
Přełožowanska předłoha: <pre>$1</pre>',
	'pt-parse-close' => 'Asymetriska taflička &lt;/translate>.
Přełožowanska předłoha: <pre>$1</pre>',
	'pt-parse-nested' => 'Zakšćikowane wotrězki &lt;translate> njejsu dowolene.
Tekst taflički: <pre>$1</pre>',
	'pt-shake-multiple' => 'Wjacore wotrězkowe marki za jedyn wotrězk.
Tekst wotrězka: <pre>$1</pre>',
	'pt-shake-position' => 'Wotrězkowe marki na njewočakowanym městnje.
Tekst wotrězka: <pre>$1</pre>',
	'pt-shake-empty' => 'Prózdny wotrězk za marku $1.',
	'pt-log-header' => 'Protokol za akcije w zwisku z přełožowanskim systemom',
	'pt-log-name' => 'Protokol přełožkow',
	'pt-log-mark' => 'jo wersiju $3 strony "[[:$1]]" za přełožowanje {{GENDER:$2|markěrował|markěrowała}}.',
	'pt-log-unmark' => 'jo stronu "[[:$1]]" z přełožowanja {{GENDER:$2|wotstronił|wotstroniła}}.',
	'pt-log-moveok' => 'je přemjenowanje přełožowanskeje strony $1 do $3 {{GENDER:$2|wotzamknył|wotzamknyła}}',
	'pt-log-movenok' => 'je při přesuwanju [[:$1]] do [[:$3]] na problem {{GENDER:$2|storčił|storčiła}}',
	'pt-log-delete-full-ok' => 'je hašenje přełožujomneje strony $1 {{GENDER:$2|wotzamknył|wotzamknyła}}',
	'pt-log-delete-full-nok' => '{{GENDER:$2|storči}} na problem při hašenju přełožujomneje strony [[:$1]]',
	'pt-log-delete-lang-ok' => 'je hašenje přełoženeje strony $1 {{GENDER:$2|wotzamknył|wotzamknyła}}',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|storči}} na problem při hašenju přełoženeje strony [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2}} je primarne rěče z přełožujomneje strony [[:$1]] {{GENDER:$2|wotstronił|wotstroniła}}',
	'pt-log-priority-langs' => '{{GENDER:$2}} je primarne rěče za přełožujomnu stronu [[:$1]] na $3 {{GENDER:$2|postajił|postajiła}}',
	'pt-log-priority-langs-force' => '{{GENDER:$2}} je rěče za přełožujomnu stronu [[:$1]] na $3 {{GENDER:$2|wobmjezował|wobmjezowała}}',
	'pt-movepage-title' => 'Přełožujomnu stronu $1 přesunyć',
	'pt-movepage-blockers' => 'Přełožujomna strona njeda so {{PLURAL:$1|slědowaceho zmylka|slědowaceju zmylkow|slědowacych zmylkow|slědowacych zmylkow}} dla do noweho mjena přesunyć:',
	'pt-movepage-block-base-exists' => 'Zakładna cilowa strona [[:$1]] eksistuje.',
	'pt-movepage-block-base-invalid' => 'Zakładna cilowa strona płaćiwy titul njeje.',
	'pt-movepage-block-tp-exists' => 'Cilowa přełožowanska strona [[:$2]] eksistuje.',
	'pt-movepage-block-tp-invalid' => 'Titul ciloweje přełožowanskeje strony za [[:$1]] by płaćiwy był (předołho?).',
	'pt-movepage-block-section-exists' => 'Cilowa wotrězkowa strona [[:$2]] eksistuje.',
	'pt-movepage-block-section-invalid' => 'Titul ciloweje wotrězkoweje strony za [[:$1]] by płaćiwy był (předołho?).',
	'pt-movepage-block-subpage-exists' => 'Cilowa podstrona [[:$2]] eksistuje.',
	'pt-movepage-block-subpage-invalid' => 'Titul ciloweje podstrony za [[:$1]] by płaćiwy był (předołho?).',
	'pt-movepage-list-pages' => 'Lisćina strony, kotrež maja so přesunyć',
	'pt-movepage-list-translation' => 'Přełožowanske strony',
	'pt-movepage-list-section' => 'Wotrězkowe strony',
	'pt-movepage-list-other' => 'Druhe podstrony',
	'pt-movepage-list-count' => 'W cyłku {{PLURAL:$1|ma so $1 strona|matej so $1 stronje|maja so $1 strony|ma so $1 stronow}} přesunyć.',
	'pt-movepage-legend' => 'Přełožujomnu stronu přesunyć',
	'pt-movepage-current' => 'Aktualne mjeno:',
	'pt-movepage-new' => 'Nowe mjeno:',
	'pt-movepage-reason' => 'Přičina:',
	'pt-movepage-subpages' => 'Wšě podstrony přesunyć',
	'pt-movepage-action-check' => 'Kontrolować, hač přesunjenje je móžno',
	'pt-movepage-action-perform' => 'Přesunyć',
	'pt-movepage-action-other' => 'Cil změnić',
	'pt-movepage-intro' => 'Tuta specialna strona zmóžnja přesuwanje stronow, kotrež su za přełožowanje markěrowane.
Přesunjenje so hnydom njestawa, dokelž wjele stronow dyrbi so přesunyć.
Při přesuwanju stronow njeje móžno, z wotpowědnymi stronami do zwiska stupić.
Zmylki budu so w [[Special:Log/pagetranslation|přełožowanskim protokolu strony]] protokolować  a dyrbja so manuelnje skorigować.',
	'pt-movepage-logreason' => 'Dźěl přełožujomneje strony $1.',
	'pt-movepage-started' => 'Zakładna strona je nětko přesunjena.
Prošu skontroluj [[Special:Log/pagetranslation|přełožowanski protokol strony]] za zmylkami a zdźělenku wukonjenja.',
	'pt-locked-page' => 'Tuta strona je zawrjena, dokelž přełožujomna strona so runje přesuwa.',
	'pt-deletepage-lang-title' => 'Přełožena strona $1 so haša.',
	'pt-deletepage-full-title' => 'Přełožujomna strona $1 so haša.',
	'pt-deletepage-invalid-title' => 'Podata strona płaćiwa njeje.',
	'pt-deletepage-invalid-text' => 'Podata strona ani přełožujomna strona ani přełožk njeje.',
	'pt-deletepage-action-check' => 'Strony nalistować, kotrež maja so zhašeć',
	'pt-deletepage-action-perform' => 'Zhašeć',
	'pt-deletepage-action-other' => 'Cil změnić',
	'pt-deletepage-lang-legend' => 'Přełoženu stronu wušmórnyć',
	'pt-deletepage-full-legend' => 'Přełožujomnu stronu wušmórnyć',
	'pt-deletepage-any-legend' => 'Přełožujomnu stronu abo přełožk přełožujomneje strony zhašeć',
	'pt-deletepage-current' => 'Mjeno strony:',
	'pt-deletepage-reason' => 'Přičina:',
	'pt-deletepage-subpages' => 'Wšě podstrony wušmórnyć',
	'pt-deletepage-list-pages' => 'Lisćina stronow, kotrež maja so zhašeć',
	'pt-deletepage-list-translation' => 'Přełožene strony',
	'pt-deletepage-list-section' => 'Wotrězkowe strony',
	'pt-deletepage-list-other' => 'Druhe podstrony',
	'pt-deletepage-list-count' => 'W cyłku {{PLURAL:$1|ma so $1 strona|matej so $1 stronje|maja so $1 strony|ma so $1 stronow}} zhašeć.',
	'pt-deletepage-full-logreason' => 'Dźěl přełožujomneje strony $1.',
	'pt-deletepage-lang-logreason' => 'Dźěl přełoženeje strony $1.',
	'pt-deletepage-started' => 'Prošu přepruwuj [[Special:Log/pagetranslation|protokol přełožkow]] za zmylkami a wuwjedźenskimi zdźělenkami.',
	'pt-deletepage-intro' => 'Tuta specialna strona ći dowoluje, zo by do rěče přełožujomne strony abo  přełožki zhašał.
Zhašenje njestanje so hnydom, dokelž wjele stronow dyrbi so zhašeć.
Zmylki budu so w  [[Special:Log/pagetranslation|protokolu přełožkow]] protokolować a wone dyrbja so manuelnje porjedźić.',
);

/** Haitian (Kreyòl ayisyen)
 * @author Boukman
 */
$messages['ht'] = array(
	'pagetranslation' => 'Tradiksyon paj yo',
	'right-pagetranslation' => 'Make vèsyon paj yo pou tradui',
	'tpt-desc' => 'Ekstansyon pou tradui paj kontni yo',
	'tpt-section' => 'Inite tradiksyon $1',
	'tpt-section-new' => 'Nouvo inite tradiksyon.
Non: $1',
	'tpt-section-deleted' => 'Inite tradiksyon $1',
	'tpt-template' => 'Modèl pou paj',
	'tpt-templatediff' => 'Modèl pou paj la chanje',
	'tpt-diff-old' => 'Teks presedan',
	'tpt-diff-new' => 'Nouvo tèks',
	'tpt-submit' => 'Make vèsyon sa pou tradui',
	'tpt-sections-oldnew' => 'Inite tradiksyon ki deja egziste ak nouvo yo',
	'tpt-sections-deleted' => 'Inite tradiksyon ki efase',
	'tpt-sections-template' => 'Modèl pou paj tradiksyon',
	'tpt-action-nofuzzy' => 'Pa rann tradiksyon envalid',
	'tpt-badtitle' => 'Non ou bay pou paj ($1) pa yon tit ki bon',
	'tpt-nosuchpage' => 'Paj $1 pa egziste',
	'tpt-oldrevision' => '$2 se pa dènye vèsyon paj [[$1]].
Se sèlman dènye vèsyon ki kapab make pou tradui.',
	'tpt-notsuitable' => 'Paj $1 pa bon pou tradui.
Asire w li gen etikèt <nowiki><translate></nowiki> epi ke li gen yon sentaks ki bon.',
	'tpt-saveok' => 'Paj [[$1]] te make pou yo tradui l ak 2 {{PLURAL:$2|inite tradiksyon|inite tradiksyon yo}}.
Paj sa kapab <span class="plainlinks">[$3 tradui]</span> kounye a.',
	'tpt-badsect' => '"$1" pa yon bon non pou inite tradiksyon $2.',
	'tpt-showpage-intro' => 'Anba, gen yon lis tout sèksyon ki nouvo, sa ki egzsite ak sa ki te efase yo.
Anvan ou make vèsyon sa pou yo tradui, verifye ki chanjman nan seksyon yo pa anpil, yon fason pou pa bay tradiktè yo travay ki pa nesesè.',
	'tpt-mark-summary' => 'Make vèsyon sa pou tradui',
	'tpt-edit-failed' => 'Pa t kapab mete paj sa ajou: $1',
	'tpt-already-marked' => 'Dènye vèsyon paj sa te make pou yo tradui l deja.',
	'tpt-unmarked' => 'Paj $1 pa make pou tradui ankò.',
	'tpt-list-nopages' => 'Pa gen okenn paj ki make pou tradui oubyen ki pare pou sa.',
	'tpt-new-pages' => '{{PLURAL:$1|Paj sa genyen|Paj sa yo genyen}} teks ak baliz tradiksyon, men pa gen okenn vèsyon {{PLURAL:$1|paj sa|paj sa yo}} ki make pou tradui.',
	'tpt-old-pages' => 'Kèk nan vèsyon {{PLURAL:$1|paj sa|paj sa yo}} te make pou tradui.',
	'tpt-other-pages' => '{{PLURAL:$1|Yon ansyen vèsyon paj sa a|Ansyen vèsyon paj sa yo}} make pou tradui,
men dènye {{PLURAL:$1|vèsyon|vèsyon yo}} pa ka make pou tradui.',
	'tpt-rev-unmark' => 'Retire paj sa nan tradiksyon',
	'translate-tag-translate-link-desc' => 'Tradui paj sa a',
	'translate-tag-markthis' => 'Make paj sa pou tradui',
	'translate-tag-markthisagain' => 'Paj sa te <span class="plainlinks">[$1 chanje]</span> depi li te <span class="plainlinks">[$2 make pou tradui]</span>.',
	'translate-tag-hasnew' => 'Paj sa genyen <span class="plainlinks">[$1 chanjman]</span> ki pa make pou tradui.',
	'tpt-translation-intro' => 'Paj sa a, se yon <span class="plainlinks">[$1 vèsyon ki tradui]</span> de paj [[$2]], epi tradiksyon a fèt a $3%.',
	'tpt-translation-intro-fuzzy' => 'Tradiksyon ki ansyen yo make konsa.',
	'tpt-languages-legend' => 'Lòt lang yo:',
	'tpt-target-page' => 'Paj sa a, se yon tradiksyon paj [[$1]] epi ou kapab mete a jou tradiksyon an lè ou itilize [$2 zouti tradiksyon an].',
	'tpt-unknown-page' => 'Espas non sa a rezève pou tradiksyon paj yo.
Paj w ap eseye modifye pa sanble koresponn ak yon paj ki make pou tradiksyon.',
	'tpt-render-summary' => 'N ap mete ajou pou nou genyen nouvo vèsyon paj sous la.',
	'tpt-download-page' => 'Ekspòte paj ki gen tradiksyon',
	'pt-parse-open' => 'Baliz &lt;translate> pa balanse.
Modèle tradiksyon: <pre>$1</pre>',
	'pt-parse-close' => 'Baliz &lt;/translate> pa balanse.
Modèle tradiksyon: <pre>$1</pre>',
	'pt-parse-nested' => 'Seksyon enbrike &lt;translate> pa otorize.
Teks baliz la: <pre>$1</pre>',
	'pt-movepage-list-pages' => 'Lis paj yo pou deplase',
	'pt-movepage-list-translation' => 'Paj tradiksyon',
	'pt-movepage-list-section' => 'Paj seksyon',
	'pt-movepage-list-other' => 'Lòt sou-paj',
	'pt-movepage-list-count' => '$1 {{PLURAL:$1|paj|paj}} total pou deplase.',
	'pt-movepage-legend' => 'Deplase paj ki ka tradui.',
	'pt-movepage-current' => 'Non aktyèl:',
	'pt-movepage-new' => 'Nouvo non:',
	'pt-movepage-reason' => 'Poukisa:',
	'pt-movepage-subpages' => 'Deplase tout sou-paj yo',
	'pt-movepage-action-check' => 'Gade si deplasman an posib',
	'pt-movepage-action-perform' => 'Fè deplasman an',
	'pt-movepage-action-other' => 'Chanje sib',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'pagetranslation' => 'Lap fordítása',
	'right-pagetranslation' => 'Lapok változatainak megjelölése fordítandónak',
	'tpt-desc' => 'Kiterjesztés lapok fordításához',
	'tpt-section' => '$1 fordítási egység',
	'tpt-section-new' => 'Új fordítási egység.
Név: $1',
	'tpt-section-deleted' => '$1 fordítási egység',
	'tpt-template' => 'Lapsablon',
	'tpt-templatediff' => 'A lapsablon megváltozott.',
	'tpt-diff-old' => 'Előző szöveg',
	'tpt-diff-new' => 'Új szöveg',
	'tpt-submit' => 'A változat megjelölése fordításra.',
	'tpt-sections-oldnew' => 'Új és meglevő fordítási egységek',
	'tpt-sections-deleted' => 'Törölt fordítási egységek',
	'tpt-sections-template' => 'Fordítási lapsablonok',
	'tpt-action-nofuzzy' => 'Ne érvénytelenítse a fordításokat',
	'tpt-badtitle' => 'A megadott lapnév ($1) nem érvényes cím',
	'tpt-nosuchpage' => 'A(z) $1 lap nem létezik.',
	'tpt-oldrevision' => '$2 nem a(z) [[$1]] lap legutolsó változata.
Csak a legfrissebb változatok jelölhetőek meg fordításra.',
	'tpt-notsuitable' => 'A(z) $1 lap nem alkalmas a fordításra.
Ellenőrizd, hogy szerepelnek-e benne <nowiki><translate></nowiki> tagek, és helyes-e a szintaxisa.',
	'tpt-saveok' => 'A(z) [[$1]] lap $2 fordítási egységgel megjelölve fordításra.
A lap mostantól <span class="plainlinks">[$3 lefordítható]</span>.',
	'tpt-badsect' => '„$1” nem érvényes név a(z) $2 fordítási egységnek.',
	'tpt-showpage-intro' => 'Alább az új, már létező és törölt szakaszok felsorolása látható.
Mielőtt fordításra jelölöd ezt a változatot, ellenőrizd hogy a szakaszok változásai minimálisak, elkerülendő a felesleges munkát a fordítóknak.',
	'tpt-mark-summary' => 'Változat megjelölve fordításra',
	'tpt-edit-failed' => 'Nem sikerült frissíteni a lapot: $1',
	'tpt-already-marked' => 'A lap legutolsó verziója már meg van jelölve fordításra.',
	'tpt-unmarked' => 'A(z) $1 lap most már nincs megjelölve fordításra.',
	'tpt-list-nopages' => 'Nincsenek sem fordításra kijelölt, sem kijelölésre kész lapok.',
	'tpt-new-pages' => '{{PLURAL:$1|Ez a lap tartalmaz|Ezek a lapok tartalmaznak}} fordítási tagekkel ellátott szöveget, de jelenleg egyik {{PLURAL:$1|változata|változatuk}} sincs megjelölve fordításra.',
	'tpt-old-pages' => '{{PLURAL:$1|Ennek a lapnak|Ezeknek a lapoknak}} néhány változata meg van jelölve fordításra.',
	'tpt-other-pages' => 'A lap korábbi {{PLURAL:$1|változata|változatai}} fordíthatónak voltak megjelölve, de a legutóbbi {{PLURAL:$1|változatot|változatokat}} nem lehet megjelölni fordításra.',
	'tpt-rev-unmark' => 'lap eltávolítása a fordításból',
	'translate-tag-translate-link-desc' => 'A lap fordítása',
	'translate-tag-markthis' => 'Lap megjelölése fordításra',
	'translate-tag-markthisagain' => 'Ezen a lapon történtek <span class="plainlinks">[$1 változtatások]</span>, mióta utoljára <span class="plainlinks">[$2 megjelölték fordításra]</span>.',
	'translate-tag-hasnew' => 'Ez a lap tartalmaz <span class="plainlinks">[$1 változtatásokat]</span>, amelyek nincsenek fordításra jelölve.',
	'tpt-translation-intro' => 'Ez a(z) [[$2]] lap egy <span class="plainlinks">[$1 lefordított változata]</span>, és a fordítás $3%-a kész és friss.',
	'tpt-translation-intro-fuzzy' => 'Az elavult fordítások az alábbi módon vannak jelölve.',
	'tpt-languages-legend' => 'Más nyelvek:',
	'tpt-target-page' => 'Ezt a lapot nem lehet kézzel frissíteni.
A(z) [[$1]] lap fordítása, és a fordítását [$2 a fordítás segédeszköz] segítségével lehet frissíteni.',
	'tpt-unknown-page' => 'Ez a névtér a tartalmi lapok fordításainak van fenntartva.
A lap, amit szerkeszteni próbálsz, úgy tűnik hogy nem egyezik egy fordításra jelölt lappal sem.',
	'tpt-render-summary' => 'Frissítés, hogy megegyezzen a forráslap új változatával',
	'tpt-download-page' => 'Lap exportálása fordításokkal együtt',
	'pt-parse-nested' => 'Egymásba ágyazott &lt;translate> szakaszok nem engedélyezettek.
Elem szövege: <pre>$1</pre>',
	'pt-log-header' => 'A lapfordító rendszerhez kapcsolódó műveletek naplója',
	'pt-log-name' => 'Oldalfordítási napló',
	'pt-movepage-title' => 'A(z) $1 fordítható lap átnevezése',
	'pt-movepage-blockers' => 'Nem lehet átnevezni a fordítható lapot az új névre a következő {{PLURAL:$1|hiba|hibák}} miatt:',
	'pt-movepage-list-pages' => 'Átnevezendő lapok listája',
	'pt-movepage-list-translation' => 'Fordítható lapok',
	'pt-movepage-list-section' => 'Szakaszlapok',
	'pt-movepage-list-other' => 'További allapok',
	'pt-movepage-list-count' => 'Összesen {{PLURAL:$1|egy|$1}} lapot kell átnevezni.',
	'pt-movepage-legend' => 'Fordítható lap átnevezése',
	'pt-movepage-current' => 'Jelenlegi név:',
	'pt-movepage-new' => 'Új név:',
	'pt-movepage-reason' => 'Indoklás:',
	'pt-movepage-subpages' => 'Összes allap átnevezése',
	'pt-movepage-action-check' => 'Ellenőrizze, hogy az átnevezés lehetséges-e',
	'pt-movepage-action-perform' => 'Átnevezés végrehajtása',
	'pt-movepage-action-other' => 'Cél megváltoztatása',
	'pt-movepage-logreason' => 'A(z) $1 fordítható lap része',
	'pt-deletepage-current' => 'Lap neve:',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'pagetranslation' => 'Traduction de paginas',
	'right-pagetranslation' => 'Marcar versiones de paginas pro traduction',
	'tpt-desc' => 'Extension pro traducer paginas de contento',
	'tpt-section' => 'Unitate de traduction $1',
	'tpt-section-new' => 'Nove unitate de traduction. Nomine: $1',
	'tpt-section-deleted' => 'Unitate de traduction $1',
	'tpt-template' => 'Patrono de pagina',
	'tpt-templatediff' => 'Le patrono del pagina ha cambiate.',
	'tpt-diff-old' => 'Texto anterior',
	'tpt-diff-new' => 'Texto nove',
	'tpt-submit' => 'Marcar iste version pro traduction',
	'tpt-sections-oldnew' => 'Unitates de traduction nove e existente',
	'tpt-sections-deleted' => 'Unitates de traduction delite',
	'tpt-sections-template' => 'Patrono de pagina de traduction',
	'tpt-action-nofuzzy' => 'Non invalidar traductiones',
	'tpt-badtitle' => 'Le nomine de pagina specificate ($1) non es un titulo valide',
	'tpt-nosuchpage' => 'Le pagina $1 non existe',
	'tpt-oldrevision' => '$2 non es le version le plus recente del pagina [[$1]].
Solmente le versiones le plus recente pote esser marcate pro traduction.',
	'tpt-notsuitable' => 'Le pagina $1 non es traducibile.
Assecura que illo contine etiquettas <nowiki><translate></nowiki> e ha un syntaxe valide.',
	'tpt-saveok' => 'Le pagina [[$1]] ha essite marcate pro traduction con $2 {{PLURAL:$2|unitate|unitates}} de traduction.
Le pagina pote ora esser <span class="plainlinks">[$3 traducite]</span>.',
	'tpt-badsect' => '"$1" non es un nomine valide pro le unitate de traduction $2.',
	'tpt-showpage-intro' => 'In basso es listate sectiones nove, existente e delite.
Ante de marcar iste version pro traduction, assecura que le modificationes al sectiones sia minimisate pro evitar labor innecessari pro traductores.',
	'tpt-mark-summary' => 'Marcava iste version pro traduction',
	'tpt-edit-failed' => 'Non poteva actualisar le pagina: $1',
	'tpt-duplicate' => 'Le nomine de unitate de traduction "$1" es usate plus de un vice.',
	'tpt-already-marked' => 'Le version le plus recente de iste pagina ha jam essite marcate pro traduction.',
	'tpt-unmarked' => 'Le pagina $1 non es plus marcate pro traduction.',
	'tpt-list-nopages' => 'Il non ha paginas marcate pro traduction, ni paginas preparate pro isto.',
	'tpt-new-pages-title' => 'Paginas proponite pro traduction',
	'tpt-old-pages-title' => 'Paginas in traduction',
	'tpt-other-pages-title' => 'Paginas defectuose',
	'tpt-discouraged-pages-title' => 'Paginas discoragiate',
	'tpt-new-pages' => 'Iste {{PLURAL:$1|pagina|paginas}} contine texto con etiquettas de traduction, ma nulle version de iste {{PLURAL:$1|pagina|paginas}} es actualmente marcate pro traduction.',
	'tpt-old-pages' => 'Alcun {{PLURAL:$1|version de iste pagina|versiones de iste paginas}} ha essite marcate pro traduction.',
	'tpt-other-pages' => '{{PLURAL:$1|Un ancian version de iste pagina|Ancian versiones de iste paginas}} es marcate pro traduction,
ma le ultime {{PLURAL:$1|version|versiones}} non pote esser marcate pro traduction.',
	'tpt-discouraged-pages' => 'Le ulterior traduction de iste {{PLURAL:$1|pagina|paginas}} es discoragiate.',
	'tpt-select-prioritylangs' => 'Linguas preferite (codices de lingua separate per commas):',
	'tpt-select-prioritylangs-force' => 'Limitar le traduction a iste linguas solmente',
	'tpt-select-prioritylangs-reason' => 'Motivo pro specificar iste serie de linguas preferite (optional):',
	'tpt-sections-prioritylangs' => 'Linguas preferite',
	'tpt-rev-mark' => 'marcar pro traduction',
	'tpt-rev-unmark' => 'remover del traduction',
	'tpt-rev-discourage' => 'discoragiar',
	'tpt-rev-encourage' => 'restaurar',
	'tpt-rev-mark-tooltip' => 'Marcar le ultime version de iste pagina pro traduction.',
	'tpt-rev-unmark-tooltip' => 'Remover iste pagina del traduction.',
	'tpt-rev-discourage-tooltip' => 'Discoragiar ulterior traductiones de iste pagina.',
	'tpt-rev-encourage-tooltip' => 'Restaurar iste pagina al traduction normal.',
	'translate-tag-translate-link-desc' => 'Traducer iste pagina',
	'translate-tag-markthis' => 'Marcar iste pagina pro traduction',
	'translate-tag-markthisagain' => 'Iste pagina ha <span class="plainlinks">[$1 modificationes]</span> depost le ultime vice que illo esseva <span class="plainlinks">[$2 marcate pro traduction]</span>.',
	'translate-tag-hasnew' => 'Iste pagina contine <span class="plainlinks">[$1 modificationes]</span> le quales non ha essite marcate pro traduction.',
	'tpt-translation-intro' => 'Iste pagina es un <span class="plainlinks">[$1 version traducite]</span> de un pagina [[$2]] e le traduction es complete e actual a $3%.',
	'tpt-translation-intro-fuzzy' => 'Le traductiones obsolete es marcate assi.',
	'tpt-languages-legend' => 'Altere linguas:',
	'tpt-languages-zero' => 'Comenciar le traduction in iste lingua',
	'tpt-target-page' => 'Iste pagina non pote esser actualisate manualmente.
Iste pagina es un traduction del pagina [[$1]] e le traduction pote esser actualisate con le [$2 instrumento de traduction].',
	'tpt-unknown-page' => 'Iste spatio de nomines es reservate pro traductiones de paginas de contento.
Le pagina que tu vole modificar non pare corresponder con alcun pagina marcate pro traduction.',
	'tpt-translation-restricted' => 'Le traduction de iste gruppo de messages in iste lingua ha essite impedite per le administrator de traductiones.',
	'tpt-discouraged-language-force' => 'Le administrator de traductiones ha limitate le linguas in le quales iste gruppo de messages pote esser traducite. Iste lingua non es inter le linguas permittite.

Motivo pro iste limitation: $1',
	'tpt-discouraged-language' => 'Iste lingua non es inter le linguas prioritari definite per le administrator de traductiones pro iste gruppo de messages.

Le motivo pro iste definition de prioritates: $1',
	'tpt-render-summary' => 'Actualisation a un nove version del pagina de origine',
	'tpt-download-page' => 'Exportar pagina con traductiones',
	'pt-parse-open' => 'Etiquetta &lt;translate> asymmetric.
Patrono de traduction: <pre>$1</pre>',
	'pt-parse-close' => 'Etiquetta &lt;/translate> asymmetric.
Patrono de traduction: <pre>$1</pre>',
	'pt-parse-nested' => 'Le sectiones &lt;translate> annidate non es permittite.
Texto del etiquetta: <pre>$1</pre>',
	'pt-shake-multiple' => 'Marcatores de section multiple pro un sol section.
Texto del section: <pre>$1</pre>',
	'pt-shake-position' => 'Marcatores de section a un position inexpectate.
Texto del section: <pre>$1</pre>',
	'pt-shake-empty' => 'Section vacue pro le marcator $1.',
	'pt-log-header' => 'Registro de actiones ligate al systema de traduction de paginas',
	'pt-log-name' => 'Registro de traduction de paginas',
	'pt-log-mark' => '{{GENDER:$2|marcava}} le version $3 del pagina "[[:$1]]" pro traduction.',
	'pt-log-unmark' => '{{GENDER:$2|removeva}} le pagina "[[:$1]]" del traduction.',
	'pt-log-moveok' => '{{GENDER:$2|completava}} le renomination del pagina traducibile $1 a $3',
	'pt-log-movenok' => '{{GENDER:$2|incontrava}} un problema movente [[:$1]] a [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|completava}} le deletion del pagina traducibile $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|incontrava}} un problema durante le deletion del pagina traducibile [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|completava}} le deletion del pagina traducite $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|incontrava}} un problema durante le deletion del pagina traducite [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|definiva}} le linguas prioritari pro le pagina traducibile [[:$1]] como $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|limitava}} le linguas pro le pagina traducibile [[:$1]] a $3',
	'pt-movepage-title' => 'Renominar le pagina traducibile $1',
	'pt-movepage-blockers' => 'Le pagina traducibile non pote esser renominate a causa del sequente {{PLURAL:$1|error|errores}}:',
	'pt-movepage-block-base-exists' => 'Le pagina de base de destination [[:$1]] existe.',
	'pt-movepage-block-base-invalid' => 'Le pagina de base de destination non es un titulo valide.',
	'pt-movepage-block-tp-exists' => 'Le pagina de traduction de destination [[:$2]] existe.',
	'pt-movepage-block-tp-invalid' => 'Le titulo del pagina de traduction de destination pro [[:$1]] esserea invalide (troppo longe?).',
	'pt-movepage-block-section-exists' => 'Le pagina de section de destination [[:$2]] existe.',
	'pt-movepage-block-section-invalid' => 'Le titulo del pagina de section de destination pro [[:$1]] esserea invalide (troppo longe?).',
	'pt-movepage-block-subpage-exists' => 'Le subpagina de destination [[:$2]] existe.',
	'pt-movepage-block-subpage-invalid' => 'Le titulo del subpagina de destination pro [[:$1]] esserea invalide (troppo longe?).',
	'pt-movepage-list-pages' => 'Lista de paginas a renominar',
	'pt-movepage-list-translation' => 'Paginas de traduction',
	'pt-movepage-list-section' => 'Paginas de section',
	'pt-movepage-list-other' => 'Altere subpaginas',
	'pt-movepage-list-count' => 'In total $1 {{PLURAL:$1|pagina|paginas}} a renominar.',
	'pt-movepage-legend' => 'Renominar pagina traducibile',
	'pt-movepage-current' => 'Nomine actual:',
	'pt-movepage-new' => 'Nove nomine:',
	'pt-movepage-reason' => 'Motivo:',
	'pt-movepage-subpages' => 'Renominar tote le subpaginas',
	'pt-movepage-action-check' => 'Verificar si le renomination es possibile',
	'pt-movepage-action-perform' => 'Facer le renomination',
	'pt-movepage-action-other' => 'Cambiar destination',
	'pt-movepage-intro' => 'Iste pagina special permitte renominar paginas marcate pro traduction.
Le renomination non essera instantanee, proque il essera necessari renominar multe paginas.
Durante le renomination del paginas, il non es possibile interager con le paginas in question.
Le fallimentos essera registrate in le [[Special:Log/pagetranslation|registro de traduction de paginas]] e illos necessita reparation manual.',
	'pt-movepage-logreason' => 'Parte del pagina traducibile $1.',
	'pt-movepage-started' => 'Le pagina de base ha essite renominate.
Per favor verifica le [[Special:Log/pagetranslation|registro de traductiones de paginas]] pro reparar eventual errores e leger le message de completion.',
	'pt-locked-page' => 'Iste pagina es serrate proque le pagina traducibile es actualmente in curso de renomination.',
	'pt-deletepage-lang-title' => 'Le pagina traducite $1 es delite.',
	'pt-deletepage-full-title' => 'Le pagina traducibile $1 es delite.',
	'pt-deletepage-invalid-title' => 'Le pagina specificate non es valide.',
	'pt-deletepage-invalid-text' => 'Le pagina specificate es ni traducibile ni traducite.',
	'pt-deletepage-action-check' => 'Listar paginas a deler',
	'pt-deletepage-action-perform' => 'Exequer le deletion',
	'pt-deletepage-action-other' => 'Cambiar destination',
	'pt-deletepage-lang-legend' => 'Deler pagina traducite',
	'pt-deletepage-full-legend' => 'Deler pagina traducibile',
	'pt-deletepage-any-legend' => 'Deler pagina traducibile o traducite',
	'pt-deletepage-current' => 'Nomine del pagina:',
	'pt-deletepage-reason' => 'Motivo:',
	'pt-deletepage-subpages' => 'Deler tote le subpaginas',
	'pt-deletepage-list-pages' => 'Lista de paginas a deler',
	'pt-deletepage-list-translation' => 'Paginas traducite',
	'pt-deletepage-list-section' => 'Paginas de section',
	'pt-deletepage-list-other' => 'Altere subpaginas',
	'pt-deletepage-list-count' => 'In total $1 {{PLURAL:$1|pagina|paginas}} a deler.',
	'pt-deletepage-full-logreason' => 'Parte del pagina traducibile $1.',
	'pt-deletepage-lang-logreason' => 'Parte del pagina traducite $1.',
	'pt-deletepage-started' => 'Per favor verifica in le [[Special:Log/pagetranslation|registro de traduction de paginas]] le existentia de errores e del message de completion.',
	'pt-deletepage-intro' => 'Iste pagina special permitte deler tote paginas traducibile o lor traductiones in un certe lingua.
Le deletion non essera instantanee perque il essera necessari deler multe paginas.
Fallimentos essera registrate in le [[Special:Log/pagetranslation|registro de traduction de paginas]] e requirera reparation manual.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Anakmalaysia
 * @author Bennylin
 * @author Farras
 * @author Irwangatot
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'pagetranslation' => 'Penerjemahan halaman',
	'right-pagetranslation' => 'Menandai revisi-revisi halaman untuk diterjemahkan',
	'tpt-desc' => 'Ekstensi untuk menerjemahkan halaman-halaman isi',
	'tpt-section' => 'Unit penerjemahan $1',
	'tpt-section-new' => 'Unit penerjemahan baru. Nama: $1',
	'tpt-section-deleted' => 'Unit penerjemahan $1',
	'tpt-template' => 'Templat halaman',
	'tpt-templatediff' => 'Templat halaman telah diubah.',
	'tpt-diff-old' => 'Teks sebelumnya',
	'tpt-diff-new' => 'Teks baru',
	'tpt-submit' => 'Tandai revisi ini untuk diterjemahkan',
	'tpt-sections-oldnew' => 'Unit-unit penerjemahan baru dan yang telah ada',
	'tpt-sections-deleted' => 'Unit penerjemahan yang dihapus',
	'tpt-sections-template' => 'Templat halaman penerjemahan',
	'tpt-action-nofuzzy' => 'Jangan membatalkan terjemahan',
	'tpt-badtitle' => 'Nama halaman yang diberikan ($1) tidak valid',
	'tpt-nosuchpage' => 'Halaman $1 tidak ada',
	'tpt-oldrevision' => '$2 bukan revisi terakhir dari halaman [[$1]].
Hanya revisi terakhir yang dapat ditandai untuk diterjemahkan.',
	'tpt-notsuitable' => 'Halaman $1 tidak dapat diterjemahkan.
Pastikan bahwa halaman ini memiliki tag <nowiki><translate></nowiki> dan memiliki sintaksis yang valid.',
	'tpt-saveok' => 'Halaman [[$1]] telah ditandai untuk diterjemahkan dengan $2 {{PLURAL:$2|unit penerjemahan|unit penerjemahan}}.
Halaman ini sekarang dapat <span class="plainlinks"[$3 diterjemahkan]</span>.',
	'tpt-badsect' => '"$1" bukanlah nama yang valid untuk unit penerjemahan $2.',
	'tpt-showpage-intro' => 'Berikut adalah daftar bagian baru, bagian yang telah ada, dan bagian yang dihapus.
Sebelum menandai revisi ini untuk diterjemahkan, harap periksa agar perubahan ke bagian-bagian dapat diminimalisasi guna menghindarkan para penerjemah dari melakukan pekerjaan yang tidak diperlukan.',
	'tpt-mark-summary' => 'Menandai revisi ini untuk diterjemahkan',
	'tpt-edit-failed' => 'Tidak dapat memperbarui halaman: $1',
	'tpt-already-marked' => 'Revisi terakhir halaman ini telah ditandai untuk diterjemahkan.',
	'tpt-unmarked' => 'Halaman $1 tidak lagi ditandai untuk diterjemahkan.',
	'tpt-list-nopages' => 'Tidak ada halaman yang ditandai untuk diterjemahkan atau siap ditandai untuk diterjemahkan.',
	'tpt-new-pages' => '{{PLURAL:$1|Halaman ini berisikan|Halaman-halaman ini berisikan}} teks dengan tag terjemahan, tetapi tidak ada versi {{PLURAL:$1|halaman ini|halaman-halaman ini}} yang sudah ditandai untuk diterjemahkan.',
	'tpt-old-pages' => 'Beberapa revisi dari {{PLURAL:$1|halaman ini|halaman-halaman ini}} telah ditandai untuk diterjemahkan.',
	'tpt-other-pages' => '{{PLURAL:$1|Versi lama dari halaman ini|Versi lama dari halaman ini}} ditandai untuk diterjemahkan,
tetapi {{PLURAL:$1|versi|versi}} terakhir tidak dapat ditandai untuk diterjemahkan.',
	'tpt-rev-unmark' => 'singkirkan halaman ini dari penerjemahan',
	'translate-tag-translate-link-desc' => 'Terjemahkan halaman ini',
	'translate-tag-markthis' => 'Tandai halaman ini untuk diterjemahkan',
	'translate-tag-markthisagain' => 'Halaman ini telah diubah <span class="plainlinks">[$1 kali]</span> sejak terakhir <span class="plainlinks">[$2 ditandai untuk diterjemahkan]</span>.',
	'translate-tag-hasnew' => 'Halaman ini berisikan <span class="plainlinks">[$1 revisi]</span> yang tidak ditandai untuk diterjemahkan.',
	'tpt-translation-intro' => 'Halaman ini adalah sebuah <span class="plainlinks">[$1 versi terjemahan]</span> dari halaman [[$2]] dan terjemahannya telah selesai $3% dari sumber terkini.',
	'tpt-translation-intro-fuzzy' => 'Terjemahan usang ditandai seperti ini.',
	'tpt-languages-legend' => 'Bahasa lain:',
	'tpt-target-page' => 'Halaman ini tidak dapat diperbarui secara manual.
Halaman ini adalah terjemahan dari halaman [[$1]] dan terjemahannya dapat diperbarui menggunakan [$2 peralatan penerjemahan].',
	'tpt-unknown-page' => 'Ruang nama ini dicadangkan untuk terjemahan halaman isi.
Halaman yang ingin Anda sunting ini tampaknya tidak memiliki hubungan dengan halaman mana pun yang ditandai untuk diterjemahkan.',
	'tpt-render-summary' => 'Memperbarui ke revisi terbaru halaman sumber',
	'tpt-download-page' => 'Ekspor halaman dengan terjemahan',
	'pt-parse-open' => 'Tag &lt;translate> tidak seimbang.
Templat terjemahan: <pre>$1</pre>',
	'pt-parse-close' => 'Tag &lt;/translate> tidak seimbang.
Templat terjemahan: <pre>$1</pre>',
	'pt-parse-nested' => 'Bagian &lt;translate> bersarang tidak diizinkan.
Teks tanda: <pre>$1</pre>',
	'pt-shake-multiple' => 'Penanda bagian ganda untuk satu bagian.
Teks bagian: <pre>$1</pre>',
	'pt-shake-position' => 'Penanda bagian di tempat tak terduka.
Teks bagian: <pre>$1</pre>',
	'pt-shake-empty' => 'Bagian kosong untuk penanda $1.',
	'pt-log-header' => 'Log tindakan yang berhubungan dengan sistem penerjemahan halaman',
	'pt-log-name' => 'Log penerjemahan halaman',
	'pt-log-mark' => '{{GENDER:$2|menandai}} versi $3 halaman "[[:$1]]" untuk diterjemahkan',
	'pt-log-unmark' => '{{GENDER:$2|menghapus}} halaman "[[:$1]]" dari penerjemahan',
	'pt-log-moveok' => '{{GENDER:$2|selesai}} mengganti nama halaman yang dapat diterjemahkan $1 menjadi $3',
	'pt-log-movenok' => '{{GENDER:$2|mengalami}} masalah ketika memindahkan [[:$1]] ke [[:$3]]',
	'pt-movepage-title' => 'Pindahkan halaman yang dapat diterjemahkan $1',
	'pt-movepage-blockers' => 'Halaman yang dapat diterjemahkan tidak dapat dipindahkan ke nama baru karena {{PLURAL:$1|kesalahan|kesalahan}} berikut:',
	'pt-movepage-block-base-exists' => 'Halaman dasar target [[:$1]] ditemukan.',
	'pt-movepage-block-base-invalid' => 'Halaman dasar target memiliki judul yang tidak sah.',
	'pt-movepage-block-tp-exists' => 'Halaman penerjemahan target [[:$2]] ditemukan.',
	'pt-movepage-block-tp-invalid' => 'Judul halaman penerjemahan target untuk [[:$1]] salah (terlalu panjang?).',
	'pt-movepage-block-section-exists' => 'Halaman bagian target [[:$2]] ditemukan.',
	'pt-movepage-block-section-invalid' => 'Judul halaman bagian target untuk [[:$1]] salah (terlalu panjang?).',
	'pt-movepage-block-subpage-exists' => 'Subhalaman taget [[:$2]] ditemukan.',
	'pt-movepage-block-subpage-invalid' => 'Judul subhalaman target untuk [[:$1]] salah (terlalu panjang?).',
	'pt-movepage-list-pages' => 'Daftar halaman yang akan dipindahkan',
	'pt-movepage-list-translation' => 'Halaman penerjemahan',
	'pt-movepage-list-section' => 'Halaman bagian',
	'pt-movepage-list-other' => 'Subhalaman lain',
	'pt-movepage-list-count' => 'Secara keseluruhan ada $1 {{PLURAL:$1|halaman|halaman}} yang akan dipindahkan.',
	'pt-movepage-legend' => 'Pindahkan halaman yang dapat diterjemahkan',
	'pt-movepage-current' => 'Nama sekarang:',
	'pt-movepage-new' => 'Nama baru:',
	'pt-movepage-reason' => 'Alasan:',
	'pt-movepage-subpages' => 'Pindahkan semua subhalaman',
	'pt-movepage-action-check' => 'Periksa apabila langkah ini memungkinkan',
	'pt-movepage-action-perform' => 'Lakukan langkah ini',
	'pt-movepage-action-other' => 'Ubah target',
	'pt-movepage-intro' => 'Halaman istimewa ini memungkinkan Anda untuk memindahkan halaman yang ditandai untuk diterjemahkan.
Tindakan pemindahan tidak akan berlangsung seketika karena banyak halaman yang perlu dipindahkan.
Saat halaman dipindahkan, tidak dimungkinkan untuk berinteraksi dengan halaman yang bersangkutan.
Kegagalan akan dicatat di [[Special:Log/pagetranslation|log terjemahan halaman]] dan perlu diperbaiki secara manual.',
	'pt-movepage-logreason' => 'Bagian dari halaman yang dapat diterjemahkan $1.',
	'pt-movepage-started' => 'Halaman dasar telah dipindahkan.
Silakan periksa [[Special:Log/pagetranslation|log penerjemahan halaman]] untuk pesan kesalahan dan penyelesaian.',
	'pt-locked-page' => 'Halaman ini dikunci karena halaman yang dapat diterjemahkan saat ini sedang dipindahkan.',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'pagetranslation' => 'Ihü kuwariala na asụsụ ozor',
	'tpt-template' => 'Àtụ ihü',
	'tpt-diff-new' => 'Mpkurụ edemede ohúrù',
	'translate-tag-translate-link-desc' => 'Kùwáría ihüá na asụsụ ozor',
	'tpt-languages-legend' => 'Asụsụ ndi ozor:',
	'pt-movepage-list-other' => 'Ihü-íme-ihü nke ozor',
	'pt-movepage-current' => 'Áhà nke di ùbwá:',
	'pt-movepage-new' => 'Áhà ọhúrù:',
	'pt-movepage-reason' => 'Mgbághapụtà:',
);

/** Icelandic (Íslenska)
 * @author Snævar
 */
$messages['is'] = array(
	'pt-log-name' => 'Þýðingarskrá',
	'pt-log-mark' => '{{GENDER:$2|merkti}} útgáfu $3 á "[[:$1]]" til þýðingar',
	'pt-log-unmark' => '{{GENDER:$2|fjarlægði}} "[[:$1]]" úr þýðingu',
);

/** Italian (Italiano)
 * @author Aushulz
 * @author Beta16
 * @author Civvì
 * @author Darth Kule
 * @author F. Cosoleto
 * @author Gianfranco
 * @author Nemo bis
 * @author VittGam
 */
$messages['it'] = array(
	'pagetranslation' => 'Traduzione pagine',
	'right-pagetranslation' => 'Segna le pagine come da tradurre',
	'tpt-desc' => 'Estensione per la traduzione di pagine',
	'tpt-section' => 'Elemento $1 della traduzione',
	'tpt-section-new' => 'Nuovo elemento della traduzione.
Nome: $1',
	'tpt-section-deleted' => 'Elemento $1 della traduzione',
	'tpt-template' => 'Modello della pagina',
	'tpt-templatediff' => 'Il modello della pagina è cambiato.',
	'tpt-diff-old' => 'Testo precedente',
	'tpt-diff-new' => 'Testo successivo',
	'tpt-submit' => 'Segna questa versione per la traduzione',
	'tpt-sections-oldnew' => 'Elementi della traduzione nuovi ed esistenti',
	'tpt-sections-deleted' => 'Elementi della traduzione cancellati',
	'tpt-sections-template' => 'Modello della pagina di traduzione',
	'tpt-action-nofuzzy' => 'Non invalidare le traduzioni',
	'tpt-badtitle' => 'Il nome fornito per la pagina ($1) non è un titolo valido',
	'tpt-nosuchpage' => 'La pagina $1 non esiste',
	'tpt-oldrevision' => "$2 non è l'ultima versione della pagina [[$1]].
Solo le ultime versioni possono essere segnate per la traduzione.",
	'tpt-notsuitable' => 'La pagina $1 non è adatta per la traduzione.
Assicurarsi che abbia i tag <nowiki><translate></nowiki> e una sintassi valida.',
	'tpt-saveok' => 'La pagina [[$1]] è stata segnalata per la traduzione con $2 {{PLURAL:$2|elemento di traduzione|elementi di traduzione}}.
La pagina può ora essere <span class="plainlinks">[$3 tradotta]</span>.',
	'tpt-badsect' => '"$1" non è un nome valido per l\'elemento $2 della traduzione.',
	'tpt-showpage-intro' => 'Di seguito sono elencate le sezioni nuove, esistenti e cancellate.
Prima di segnare questa versione per la traduzione, controllare che i cambiamenti per le sezioni siano ridotti al minimo per evitare lavoro superfluo ai traduttori.',
	'tpt-mark-summary' => 'Versione segnata per la traduzione',
	'tpt-edit-failed' => 'Impossibile aggiornare la pagina: $1',
	'tpt-duplicate' => "Il nome dell'elemento di traduzione $1 è usato più di una volta.",
	'tpt-already-marked' => "L'ultima versione di questa pagina è già stata segnata per la traduzione.",
	'tpt-unmarked' => 'La pagina $1 non è più segnata per la traduzione.',
	'tpt-list-nopages' => 'Nessuna pagina è segnata per la traduzione oppure è pronta per essere segnata per la traduzione.',
	'tpt-new-pages-title' => 'Pagine proposte per la traduzione',
	'tpt-old-pages-title' => 'Pagine in traduzione',
	'tpt-other-pages-title' => 'Pagine corrotte',
	'tpt-discouraged-pages-title' => 'Pagine scoraggiate',
	'tpt-new-pages' => '{{PLURAL:$1|Questa pagina contiene|Queste pagine contengono}} testo con tag di traduzione,
ma al momento nessuna versione di {{PLURAL:$1|questa pagina|queste pagine}} è segnata per la traduzione.',
	'tpt-old-pages' => 'Alcune versioni di {{PLURAL:$1|questa pagina|queste pagine}} sono state segnate per la traduzione.',
	'tpt-other-pages' => "{{PLURAL:$1|Una vecchia versione di questa pagina è segnata|Delle vecchie versioni di queste pagine sono segnate}} per la traduzione,
ma {{PLURAL:$1|l'ultima versione non può essere segnata|le ultime versioni non possono essere segnate}} per la traduzione.",
	'tpt-discouraged-pages' => "L'ulteriore traduzione di {{PLURAL:$1|questa pagina|queste pagine}} è scoraggiata.",
	'tpt-rev-mark' => 'segna per la traduzione',
	'tpt-rev-unmark' => 'rimuovi dalla traduzione',
	'tpt-rev-discourage' => 'scoraggia',
	'tpt-rev-encourage' => 'ripristina',
	'tpt-rev-mark-tooltip' => "Segna l'ultima versione di questa pagina come da tradurre.",
	'tpt-rev-unmark-tooltip' => 'Rimuove questa pagina dalla traduzione.',
	'tpt-rev-discourage-tooltip' => 'Scoraggia ulteriori traduzioni di questa pagina.',
	'tpt-rev-encourage-tooltip' => 'Ripristina la traduzione ordinaria di questa pagina.',
	'translate-tag-translate-link-desc' => 'Traduci questa pagina',
	'translate-tag-markthis' => 'Segna questa pagina per la traduzione',
	'translate-tag-markthisagain' => 'Questa pagina è stata <span class="plainlinks">[$1 modificata]</span> da quando era stata <span class="plainlinks">[$2 segnata per la traduzione]</span>.',
	'translate-tag-hasnew' => 'Questa pagina contiene delle <span class="plainlinks">[$1 modifiche]</span> che non sono segnate per la traduzione.',
	'tpt-translation-intro' => 'Questa pagina è una <span class="plainlinks">[$1 versione tradotta]</span> della pagina [[$2]]; la traduzione è completa e aggiornata al $3&nbsp;%.',
	'tpt-translation-intro-fuzzy' => 'Le traduzioni non aggiornate sono segnate come questo testo.',
	'tpt-languages-legend' => 'Altre lingue:',
	'tpt-target-page' => 'Questa pagina non può essere aggiornata manualmente. Questa pagina è una traduzione della pagina [[$1]] e la traduzione può essere aggiornata tramite [$2 lo strumento di traduzione].',
	'tpt-unknown-page' => 'Questo namespace è riservato alle traduzioni del contenuto delle pagine.
La pagina che stai cercando di modificare non sembra corrispondere ad alcuna pagina segnata per la traduzione.',
	'tpt-render-summary' => 'Aggiornamento come da nuova versione della pagina di origine',
	'tpt-download-page' => 'Esporta la pagina con le traduzioni',
	'pt-parse-open' => 'Marcatore &lt;translate> sbilanciato.
Struttura della traduzione: <pre>$1</pre>',
	'pt-parse-close' => 'Marcatore &lt;/translate> sbilanciato.
Struttura della traduzione: <pre>$1</pre>',
	'pt-parse-nested' => 'Non sono ammesse sezioni &lt;translate> nidificate.
Testo del marcatore: <pre>$1</pre>',
	'pt-shake-multiple' => 'Sono presenti più marcatori di sezione per una singola sezione.
Testo della sezione: <pre>$1</pre>',
	'pt-shake-position' => 'Sono presenti marcatori di sezione in una posizione inaspettata.
Testo della sezione: <pre>$1</pre>',
	'pt-shake-empty' => 'Sezione vuota per il marcatore $1.',
	'pt-log-header' => 'Registro per le azioni inerenti al sistema di traduzione delle pagine',
	'pt-log-name' => 'Registro delle traduzioni di pagine',
	'pt-log-mark' => '{{GENDER:$2|ha segnato}} la versione $3 della pagina "[[:$1]]" per la traduzione',
	'pt-log-unmark' => '{{GENDER:$2|ha rimosso}} la pagina "[[:$1]]" dalla traduzione',
	'pt-log-moveok' => '{{GENDER:$2|ha eseguito}} lo spostamento della pagina traducibile $1 a $3',
	'pt-log-movenok' => '{{GENDER:$2|ha incontrato}} un problema nello spostamento di [[:$1]] a [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|ha eseguito}} la cancellazione della pagina traducibile $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|ha incontrato}} un problema nella cancellazione della pagina da tradurre [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|ha eseguito}} la cancellazione della pagina di traduzione $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|ha incontrato}} un problema nella cancellazione della pagina di traduzione [[:$1]]',
	'pt-movepage-title' => 'Sposta la pagina da tradurre $1',
	'pt-movepage-blockers' => 'Questa pagina da tradurre non è stata spostata a un nuovo nome per {{PLURAL:$1|il seguente errore|i seguenti errori}}:',
	'pt-movepage-block-base-exists' => 'La pagina base di destinazione [[:$1]] esiste già.',
	'pt-movepage-block-base-invalid' => 'La pagina base di destinazione non ha un titolo valido.',
	'pt-movepage-block-tp-exists' => 'La pagina di traduzione di destinazione [[:$2]] esiste già.',
	'pt-movepage-block-tp-invalid' => 'Il titolo di destinazione della pagina di traduzione di [[:$1]] sarebbe invalido (troppo lungo?).',
	'pt-movepage-block-section-exists' => "La pagina di destinazione dell'elemento di traduzione [[:$2]] esiste già.",
	'pt-movepage-block-section-invalid' => "Il titolo di destinazione della pagina dell'elemento di traduzione di [[:$1]] sarebbe invalido (troppo lungo?).",
	'pt-movepage-block-subpage-exists' => 'La sottopagina di destinazione [[:$2]] esiste già.',
	'pt-movepage-block-subpage-invalid' => 'Il titolo della sottopagina di destinazione di [[:$1]] sarebbe invalido (troppo lungo?).',
	'pt-movepage-list-pages' => 'Elenco di pagine da spostare',
	'pt-movepage-list-translation' => 'Pagine di traduzione',
	'pt-movepage-list-section' => 'Pagine degli elementi di traduzione',
	'pt-movepage-list-other' => 'Altre sottopagine',
	'pt-movepage-list-count' => '$1 {{PLURAL:$1|pagina|pagine}} in tutto da spostare.',
	'pt-movepage-legend' => 'Sposta pagina traducibile',
	'pt-movepage-current' => 'Nome attuale:',
	'pt-movepage-new' => 'Nuovo nome:',
	'pt-movepage-reason' => 'Motivo:',
	'pt-movepage-subpages' => 'Sposta tutte le sottopagine',
	'pt-movepage-action-check' => 'Verifica se lo spostamento è possibile',
	'pt-movepage-action-perform' => 'Esegui lo spostamento',
	'pt-movepage-action-other' => 'Modifica destinazione',
	'pt-movepage-intro' => 'Questa pagina speciale ti permette di spostare pagine segnate come da tradurre.
Lo spostamento non sarà istantaneo, perché serve spostare molte pagine.
Mentre le pagine vengono spostate, non è possibile interagire con esse.
Gli errori sono riportati nel [[Special:Log/pagetranslation|registro delle traduzioni di pagine]] e devono essere corretti a mano.',
	'pt-movepage-logreason' => 'Parte della pagina traducibile $1',
	'pt-movepage-started' => 'La pagina base è stata spostata.
Controlla il [[Special:Log/pagetranslation|registro delle traduzioni di pagine]] per verificare il messaggio di completamento ed eventuali errori.',
	'pt-locked-page' => 'Questa pagina è protetta perché la pagina traducibile sta per essere spostata.',
	'pt-deletepage-lang-title' => 'Cancellazione della pagina di traduzione $1.',
	'pt-deletepage-full-title' => 'Cancellazione della pagina traducibile $1 in corso.',
	'pt-deletepage-invalid-title' => 'La pagina specificata non è valida.',
	'pt-deletepage-invalid-text' => 'La pagina indicata non è una pagina da tradurre né una traduzione di essa.',
	'pt-deletepage-action-check' => 'Elenca le pagine da cancellare',
	'pt-deletepage-action-perform' => 'Esegui la cancellazione',
	'pt-deletepage-action-other' => 'Modifica obiettivo',
	'pt-deletepage-lang-legend' => 'Cancella pagina di traduzione',
	'pt-deletepage-full-legend' => 'Cancella la pagina traducibile',
	'pt-deletepage-any-legend' => 'Cancella una pagina traducibile o la traduzione di una pagina traducibile',
	'pt-deletepage-current' => 'Nome della pagina:',
	'pt-deletepage-reason' => 'Motivo:',
	'pt-deletepage-subpages' => 'Cancella tutte le sottopagine',
	'pt-deletepage-list-pages' => 'Elenco di pagine da cancellare',
	'pt-deletepage-list-translation' => 'Pagine di traduzione',
	'pt-deletepage-list-section' => 'Pagine degli elementi di traduzione',
	'pt-deletepage-list-other' => 'Altre sottopagine',
	'pt-deletepage-list-count' => '$1 {{PLURAL:$1|pagina|pagine}} in tutto da cancellare.',
	'pt-deletepage-full-logreason' => 'Parte della pagina traducibile $1',
	'pt-deletepage-lang-logreason' => 'Parte della pagina di traduzione $1',
	'pt-deletepage-started' => 'Controlla il [[Special:Log/pagetranslation|registro delle traduzioni di pagine]] per verificare il messaggio di completamento ed eventuali errori.',
	'pt-deletepage-intro' => 'Questa pagina speciale ti consente di cancellare del tutto una pagina traducibile o la sua traduzione in una lingua.
La cancellazione non sarà istantanea, perché molte pagine devono essere cancellate.
Gli errori sono riportati nel [[Special:Log/pagetranslation|registro delle traduzioni di pagine]] e devono essere corretti a mano.',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'pagetranslation' => 'ページ翻訳',
	'right-pagetranslation' => 'ページの版を翻訳対象に指定する',
	'tpt-desc' => 'コンテンツページの翻訳のための拡張機能',
	'tpt-section' => '翻訳単位 $1',
	'tpt-section-new' => '新規翻訳単位。名前: $1',
	'tpt-section-deleted' => '翻訳単位 $1',
	'tpt-template' => 'ページの雛型',
	'tpt-templatediff' => 'このページの雛型が変更されました。',
	'tpt-diff-old' => '前のテキスト',
	'tpt-diff-new' => '新しいテキスト',
	'tpt-submit' => 'この版を翻訳対象に指定する',
	'tpt-sections-oldnew' => '新規および既存の翻訳単位',
	'tpt-sections-deleted' => '削除された翻訳単位',
	'tpt-sections-template' => '翻訳ページの雛型',
	'tpt-action-nofuzzy' => '翻訳を失効させない',
	'tpt-badtitle' => '指定したページ名 ($1) は無効なタイトルです',
	'tpt-nosuchpage' => 'ページ「$1」は存在しません',
	'tpt-oldrevision' => '$2 はページ [[$1]] の最新版ではありません。翻訳対象に指定できるのは最新版のみです。',
	'tpt-notsuitable' => 'ページ $1 は翻訳に対応していません。<nowiki><translate></nowiki>が含まれていること、またマークアップが正しいことを確認してください。',
	'tpt-saveok' => 'ページ [[$1]] は翻訳対象に指定されており、$2{{PLURAL:$2|個}}の翻訳単位を含んでいます。このページを<span class="plainlinks">[$3 翻訳]</span>することができます。',
	'tpt-badsect' => '「$1」は翻訳単位 $2 の名前として無効です。',
	'tpt-showpage-intro' => '以下には新しいセクション、既存のセクション、そして削除されたセクションが一覧されています。この版を翻訳対象に指定する前に、セクションの変更を最小限にすることで不要な翻訳作業を回避できないか確認してください。',
	'tpt-mark-summary' => 'この版を翻訳対象に指定しました',
	'tpt-edit-failed' => 'ページを更新できませんでした: $1',
	'tpt-duplicate' => '翻訳単位名$1は、複数回使用されています。',
	'tpt-already-marked' => 'このページの最新版がすでに翻訳対象に指定されています。',
	'tpt-unmarked' => 'ページ「$1」はもう翻訳対象に指定されていません。',
	'tpt-list-nopages' => '翻訳対象に指定されたページがない、または翻訳対象に指定する準備ができているページがありません。',
	'tpt-new-pages-title' => '翻訳が提案されているページ',
	'tpt-old-pages-title' => '翻訳ページ',
	'tpt-other-pages-title' => '壊れたページ',
	'tpt-discouraged-pages-title' => '翻訳が中止されたページ',
	'tpt-new-pages' => '{{PLURAL:$1|以下のページ}}は本文に翻訳タグを含んでいますが、翻訳対象に指定されている版が{{PLURAL:$1|ありません}}。',
	'tpt-old-pages' => '{{PLURAL:$1|これらの|この}}ページには翻訳対象に指定された版があります。',
	'tpt-other-pages' => '{{PLURAL:$1|このページの古い版}}が翻訳対象に指定されていますが、最新の{{PLURAL:$1|版}}は翻訳対象に指定できません。',
	'tpt-discouraged-pages' => '{{PLURAL:$1|このページ|これらのページ}}には、さらなる翻訳が不要です。',
	'tpt-rev-mark' => '翻訳としてマーク',
	'tpt-rev-unmark' => '翻訳から除去',
	'tpt-rev-discourage' => '翻訳中止',
	'tpt-rev-encourage' => '復元',
	'tpt-rev-mark-tooltip' => 'このページの最終版を翻訳対象に指定',
	'tpt-rev-unmark-tooltip' => 'このページを翻訳対象から除去。',
	'tpt-rev-discourage-tooltip' => 'このページの更なる翻訳を中止',
	'tpt-rev-encourage-tooltip' => 'このページを通常翻訳に復元',
	'translate-tag-translate-link-desc' => 'このページを翻訳する',
	'translate-tag-markthis' => 'このページを翻訳対象に指定する',
	'translate-tag-markthisagain' => 'このページには最後に<span class="plainlinks">[$2 翻訳が指定]</span>されて以降の<span class="plainlinks">[$1 変更]</span>があります。',
	'translate-tag-hasnew' => 'このページには翻訳対象に指定されていない<span class="plainlinks">[$1 変更]</span>があります。',
	'tpt-translation-intro' => 'このページはページ [[$2]] の<span class="plainlinks">[$1 翻訳版]</span> です。翻訳は $3% 完了しており、最新の状態を反映しています。',
	'tpt-translation-intro-fuzzy' => '古くなった翻訳はこのような印が付いています。',
	'tpt-languages-legend' => '他言語での翻訳:',
	'tpt-target-page' => 'このページは手動で更新できません。このページはページ [[$1]] の翻訳で、[$2 翻訳ツール]を使用して更新します。',
	'tpt-unknown-page' => 'この名前空間はコンテンツページの翻訳のために使用します。あなたが編集しようとしているページに対応する翻訳対象ページが存在しないようです。',
	'tpt-render-summary' => '翻訳元ページの新版に適合するように更新中',
	'tpt-download-page' => '翻訳付きでページを書き出し',
	'pt-parse-open' => '&lt;translate> タグの対応がとれていません。
翻訳の雛型: <pre>$1</pre>',
	'pt-parse-close' => '&lt;/translate> タグの対応がとれていません。
翻訳の雛型: <pre>$1</pre>',
	'pt-parse-nested' => '&lt;translate> タグのネストは許されません。
タグ内容: <pre>$1</pre>',
	'pt-shake-multiple' => '1つのセクションに対して、複数のセクション・マーカーがあります。
セクション内容: <pre>$1</pre>',
	'pt-shake-position' => '予期せぬ位置にセクション・マーカーがあります。
セクション内容: <pre>$1</pre>',
	'pt-shake-empty' => 'マーカー $1 に対応するセクションが空です。',
	'pt-log-header' => 'ページ翻訳システムに関連した操作の記録',
	'pt-log-name' => 'ページ翻訳記録',
	'pt-log-mark' => 'ページ「[[:$1]]」の版 $3 を翻訳対象に{{GENDER:$2|指定}}',
	'pt-log-unmark' => 'ページ「[[:$1]]」の翻訳指定を{{GENDER:$2|解除}}',
	'pt-log-moveok' => '翻訳可能ページ$1を新しい名前$3に変更{{GENDER:$2|完了}}',
	'pt-log-movenok' => '[[:$1]]を[[:$3]]へ移動中に問題が{{GENDER:$2|発生しました}}',
	'pt-log-delete-full-ok' => '翻訳可能ページ$1の削除が{{GENDER:$2|完了しました}}',
	'pt-log-delete-full-nok' => '翻訳可能ページ[[:$1]]の削除中に問題が{{GENDER:$2|発生しました}}',
	'pt-log-delete-lang-ok' => '翻訳ページ$1の削除が{{GENDER:$2|完了しました}}',
	'pt-log-delete-lang-nok' => '翻訳ページ[[:$1]]の削除中に問題が{{GENDER:$2|発生しました}}',
	'pt-movepage-title' => '翻訳可能ページ$1を移動',
	'pt-movepage-blockers' => '翻訳可能ページは、{{PLURAL:$1|以下の問題}}により、新しい名前に移動できません：',
	'pt-movepage-block-base-exists' => '対象の基底ページ[[:$1]]は既に存在しています。',
	'pt-movepage-block-base-invalid' => '対象の基底ページは有効なタイトルではありません。',
	'pt-movepage-block-tp-exists' => '対象の翻訳ページ[[:$2]]は既に存在しています。',
	'pt-movepage-block-tp-invalid' => '対象の翻訳ページの題[[:$1]]が無効です（長過ぎる？）。',
	'pt-movepage-block-section-exists' => '対象の節ページ[[:$2]]は既に存在しています。',
	'pt-movepage-block-section-invalid' => '対象の節ページの題[[:$1]]が無効です（長過ぎる？）。',
	'pt-movepage-block-subpage-exists' => '対象のサブページ[[:$2]]は既に存在しています。',
	'pt-movepage-block-subpage-invalid' => '対象のサブページの題[[:$1]]が無効です（長過ぎる？）。',
	'pt-movepage-list-pages' => '移動するページの一覧',
	'pt-movepage-list-translation' => '翻訳ページ',
	'pt-movepage-list-section' => '節ページ',
	'pt-movepage-list-other' => 'その他の下位ページ',
	'pt-movepage-list-count' => '合計で$1ページが移動',
	'pt-movepage-legend' => '翻訳可能ページを移動',
	'pt-movepage-current' => '現在の名前：',
	'pt-movepage-new' => '新しい名前：',
	'pt-movepage-reason' => '理由：',
	'pt-movepage-subpages' => 'サブページを全て移動',
	'pt-movepage-action-check' => '移動が可能な場合にチェック',
	'pt-movepage-action-perform' => '移動しない',
	'pt-movepage-action-other' => '対象を変更',
	'pt-movepage-intro' => 'この特別ページは、翻訳用に設定されたページを移動することができます。
多くのページを移動しなければならないため、移動操作はすぐに完了はしません。
ページが移動されている間、そのページの質問ページで対話することができません。
失敗した場合は、その[[Special:Log/pagetranslation|ページの翻訳ログ]]に記録されるので、手動で修正される必要があります。',
	'pt-movepage-logreason' => '翻訳可能ページ$1の一部。',
	'pt-movepage-started' => '基底ページが移動されました。
[[Special:Log/pagetranslation|ページの翻訳記録]]で、エラーや完了メッセージを確認してください。',
	'pt-locked-page' => '現在、翻訳ページが移動されているため、このページはロックされています',
	'pt-deletepage-lang-title' => '翻訳ページ$1を削除中。',
	'pt-deletepage-full-title' => '翻訳可能ページ$1を削除中。',
	'pt-deletepage-invalid-title' => '指定されたページは無効です。',
	'pt-deletepage-invalid-text' => '指定されたページは、翻訳可能ページでも、その翻訳ページでもありません。',
	'pt-deletepage-action-check' => '削除するページの一覧',
	'pt-deletepage-action-perform' => '削除を実行',
	'pt-deletepage-action-other' => '対象を変更',
	'pt-deletepage-lang-legend' => '翻訳ページを削除する',
	'pt-deletepage-full-legend' => '翻訳可能ページを削除する',
	'pt-deletepage-any-legend' => '翻訳可能ページや、翻訳可能ページや翻訳を削除する',
	'pt-deletepage-current' => 'ページ名：',
	'pt-deletepage-reason' => '理由：',
	'pt-deletepage-subpages' => '全ての下位ページを削除する',
	'pt-deletepage-list-pages' => '削除するページの一覧',
	'pt-deletepage-list-translation' => '翻訳ページ',
	'pt-deletepage-list-section' => '節ページ',
	'pt-deletepage-list-other' => 'その他の下位ページ',
	'pt-deletepage-list-count' => '合計で$1ページが削除',
	'pt-deletepage-full-logreason' => '翻訳可能ページ$1の一部。',
	'pt-deletepage-lang-logreason' => '翻訳ページ$1の一部。',
	'pt-deletepage-started' => '[[Special:Log/pagetranslation|ページの翻訳記録]]で、エラーや完了メッセージを確認して下さい。',
	'pt-deletepage-intro' => 'この特別ページでは、翻訳可能ページ全体やある言語への翻訳全てを削除することができます。
多くのページを削除しなければならないため、削除操作は即実行されません。
失敗した場合、その[[Special:Log/pagetranslation|ページの翻訳記録]]に記録されるので、手動で修正する必要があります。',
);

/** Jamaican Creole English (Patois)
 * @author Yocahuna
 */
$messages['jam'] = array(
	'pagetranslation' => 'Piej chranslieshan',
	'right-pagetranslation' => 'Maak voerjan a piejdem fi chranslieshan',
	'tpt-desc' => 'Extenshan fi chransliet kantent piejdem',
	'tpt-section' => 'Chranslieshan yuunit $1',
	'tpt-section-new' => 'New chranslieshan yuunit.
Niem: $1',
	'tpt-section-deleted' => 'Chranslieshan yuunit $1',
	'tpt-template' => 'Piej templit',
	'tpt-templatediff' => 'Di piej templit chienj',
	'tpt-diff-old' => 'Priivos tex',
	'tpt-diff-new' => 'Nyuu tex',
	'tpt-submit' => 'Maak dis voerjan fi chranslieshan',
	'tpt-sections-oldnew' => 'Nyuu ahn egzisin chranslieshan yuunit',
	'tpt-sections-deleted' => 'Chranslieshan yuunit wa diliit',
	'tpt-sections-template' => 'Chranslieshan piej templit',
	'tpt-action-nofuzzy' => 'No invalidiet no chranslieshan',
	'tpt-badtitle' => 'Piej niem yu gi ($1) a no valid taikl',
	'tpt-nosuchpage' => 'No piej ($1) no egzis',
	'tpt-oldrevision' => '$2 a no di lietis voerjan a di piej [[$1]].
Onggl lietis voerjan kiahn maak fi chranslieshan.',
	'tpt-notsuitable' => 'Piej $1 no suutobl fi chranslieshan.
Mek shuor se iab <nowiki><translate></nowiki> tag ahn gat valid sintax.',
	'tpt-saveok' => 'Di piej [[$1]] maakop fi chranslieshan wid $2 {{PLURAL:$2|chranslieshan yuunit|chranslieshan yuunit}}.
Di piej kiahn nou get <span class="plainlinks">[$3 chransliet]</span>.',
	'tpt-badsect' => '"$1" a no valid niem fi chranslieshan yuunit $2.',
	'tpt-showpage-intro' => 'Nyuu, egzisin ahn diliitid sekshan lis biluo.
Bifuo yu maak dis voerjan fi chranslieshan, chek se di chienj to sekshandem minimaiz fi avaid anesiseri wok fi chranslietadem.',
	'tpt-mark-summary' => 'Dis voerjan maak fi chranslieshan',
	'tpt-edit-failed' => 'Kudn opdiet di piej: $1',
	'tpt-already-marked' => 'Di lietis voerjan a dis piej don maak fi chranslieshan aredi.',
	'tpt-unmarked' => 'Piej $1 no langa maak fi chranslieshan.',
	'tpt-list-nopages' => 'No piej no maak fi chranslieshan nar redi fi maak fi chranslieshan.',
	'tpt-old-pages' => 'Som voerjan a {{PLURAL:$1|dis piej|demaya piej}} don maak fi chranslieshan.',
);

/** Javanese (Basa Jawa)
 * @author Pras
 */
$messages['jv'] = array(
	'translate-tag-translate-link-desc' => 'Terjemahaké kaca iki',
);

/** Georgian (ქართული)
 * @author Temuri rajavi
 */
$messages['ka'] = array(
	'tpt-diff-new' => 'ახალი ტექსტი',
);

/** Адыгэбзэ (Адыгэбзэ)
 * @author Тамэ Балъкъэрхэ
 */
$messages['kbd-cyrl'] = array(
	'tpt-diff-old' => 'Ипэ ит текстыр',
	'tpt-diff-new' => 'ТекстыщIэ',
	'translate-tag-translate-link-desc' => 'НапэкIуэцIыр зэхъуэкIын',
	'tpt-languages-legend' => 'НэгъуэщIыбзэхэр:',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'pagetranslation' => 'ការ​បក​ប្រែ​ទំព័រ​',
	'tpt-section' => 'ឯកតាបកប្រែ $1',
	'tpt-section-new' => 'ឯកតាបកប្រែថ្មី។
ឈ្មោះ៖ $1',
	'tpt-section-deleted' => 'ឯកតាបកប្រែ $1',
	'tpt-template' => 'គំរូទំព័រ',
	'tpt-templatediff' => 'គំរូ​ទំព័រ​បានផ្លាស់ប្តូរ​។',
	'tpt-diff-old' => 'អត្ថបទ​​ពីមុន​',
	'tpt-diff-new' => 'អត្ថបទ​ថ្មី​',
	'tpt-submit' => 'សម្គាល់​កំណែ​នេះ​សម្រាប់​ការបកប្រែ​',
	'tpt-sections-oldnew' => 'ឯកតាបកប្រែថ្មីនិងចាស់',
	'tpt-sections-deleted' => 'ឯកតាបកប្រែដែលត្រូវបានលុប',
	'tpt-sections-template' => 'គំរូ​ទំព័រ​បកប្រែ​',
	'tpt-badtitle' => 'ឈ្មោះ​ទំព័រ​សម្រាប់ ($1) គឺមិនមែន​ជា​ចំនងជើង​ត្រឹមត្រូវ​',
	'tpt-mark-summary' => 'បាន​សម្គាល់​កំណែ​នេះ​សម្រាប់​បកប្រែ​',
	'tpt-edit-failed' => 'មិនអាច​បន្ទាន់សម័យ​ទំព័រ​៖ $1',
	'tpt-already-marked' => 'កំណែ​ចុងក្រោយ​នៃទំព័រ​នេះ​ត្រូវបាន​សម្គាល់​ទុកសម្រាប់​បកប្រែ​។',
	'translate-tag-translate-link-desc' => 'បកប្រែទំព័រនេះ',
	'translate-tag-markthis' => 'សម្គាល់​ទំព័រ​​នេះ​សម្រាប់​ការបកប្រែ​',
	'tpt-languages-legend' => 'ជាភាសាដទៃទៀត៖',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'translate-tag-translate-link-desc' => 'ಈ ಪುಟವನ್ನು ಅನುವಾದಿಸಿ',
	'tpt-languages-legend' => 'ಇತರ ಭಾಷೆಗಳು:',
	'pt-movepage-reason' => 'ಕಾರಣ:',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'pagetranslation' => '문서 번역',
	'translate-tag-translate-link-desc' => '이 문서 번역하기',
	'tpt-languages-legend' => '다른 언어:',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'pagetranslation' => 'Sigge Övversäze',
	'right-pagetranslation' => 'Donn Versione vun Sigge för et Övversäze makeere',
	'tpt-desc' => 'Projrammzohsatz för Sigge vum Enhalt vum Wiki ze övversäze.',
	'tpt-section' => 'Knubbel $1 för ze Övversäze',
	'tpt-section-new' => 'Ene neue Knubbel för ze Övversäze: $1',
	'tpt-section-deleted' => 'Knubbel $1 för ze Övversäze',
	'tpt-template' => 'Siggeschabloon',
	'tpt-templatediff' => 'De Siggeschabloon hät sesch jeändert.',
	'tpt-diff-old' => 'Dä vörrijje Täx',
	'tpt-diff-new' => 'Dä neue Täx',
	'tpt-submit' => 'Donn hee di Version för et Övversäze makeere',
	'tpt-sections-oldnew' => 'De Knubbelle för ze Övversäze (Jez neu, un de älldere, zosamme)',
	'tpt-sections-deleted' => 'Fottjeschmeße Knubbelle för et Övversäze',
	'tpt-sections-template' => 'Övversäzungßsiggschabloon',
	'tpt-action-nofuzzy' => 'Donn de Övversäzunge nit als övverhollt makeere',
	'tpt-badtitle' => 'Dä Name „$1“ es keine jöltijje Tittel för en Sigg',
	'tpt-nosuchpage' => 'De Sigg „$1“ jidd_et nit.',
	'tpt-oldrevision' => '„$2“ es nit de neuste Version fun dä Sigg „[[$1]]“, ävver bloß de neuste kam_mer för et Övversäze makeere.',
	'tpt-notsuitable' => 'Di Sigg „$1“ paß nit för et Övversäze. Maach <code><nowiki><translate></nowiki></code>-Makeerunge erin, un looer dat de Süntax shtemmp.',
	'tpt-saveok' => 'De Sigg „$1“ es för ze Övversäze makeet. Doh dren {{PLURAL:$2|es eine Knubbel|sinn_er $2 Knubbelle|es ävver keine Knubbel}} för ze Övversäze. Di Sigg kam_mer <span class="plainlinks">[$3 jäz övversäze]</span>.',
	'tpt-badsect' => '„$1“ es kein jöltejje Name för dä Knubbel zom Övversäze $2.',
	'tpt-showpage-intro' => 'Hee dronger sin Afschnedde opjeleß, di eruß jenumme woode, un di noch doh sin. Ih dat De hee di Version för ze Övversäze makeere deihß, loor drop, dat esu winnisch wi müjjelesch Änderonge aan Afschnedde doh sin, öm dä Övversäzere et Levve leisch ze maache.',
	'tpt-mark-summary' => 'Han di Version för ze Övversäze makeet',
	'tpt-edit-failed' => 'Kunnt de Sigg „$1“ nit ändere',
	'tpt-already-marked' => 'De neuste Version vun dä Sigg es ald för zem Övversäze makeet.',
	'tpt-unmarked' => 'De Sigg „$1“ es nit ieh för ze övversäze makeet.',
	'tpt-list-nopages' => 'Et sinn_er kein Sigge för zem Övversäze makeet, un et sin och kein doh, wo esu en Makeerunge eren künnte.',
	'tpt-new-pages' => '{{PLURAL:$1|Di Sigg hät|Di Sigge han|Kein Sigg hät}} ene <code lang="en">translation</code>-Befähl en sesch, ävve kei Version dofun es för ze Övversäze makeet.',
	'tpt-old-pages' => 'En Version vun hee dä {{PLURAL:$1|Sigg|Sigge|-}} es för zem Övversäze makeet.',
	'tpt-other-pages' => '{{PLURAL:$1|En ällder Version vun heh dä Sigg es|$1 ällder Versione vun heh dä Sigg sin}} för et Övversäze frei jejovve, ävver de neuste Version löht sesh nit frei jävve.',
	'tpt-rev-unmark' => 'Donn heh di Sigg vum Övversäze ußschleeße',
	'translate-tag-translate-link-desc' => 'Don di Sigg hee övversäze',
	'translate-tag-markthis' => 'Donn heh di Sigg för et Övversäze makeere',
	'translate-tag-markthisagain' => 'Hee di Sigg es <span class="plainlinks">[$1 jeändert woode]</span> zick se et läz <span class="plainlinks">[$2 för ze Övversäze]</span> makeet woode es.',
	'translate-tag-hasnew' => 'Hee di Sigg <span class="plainlinks">[$1 es jeändert woode]</span>, es ävver nit för ze Övversäze makeet woode.',
	'tpt-translation-intro' => 'Hee di Sigg es en <span class="plainlinks">[$1 övversaz Version]</span> vun dä Sigg „[[$2]]“ un es zoh $3% jedonn un om aktoälle Shtandt.',
	'tpt-translation-intro-fuzzy' => 'Övverhollte Övversäzunge wäde su makeet, wi hee dä Täx.',
	'tpt-languages-legend' => 'Ander Shprooche:',
	'tpt-target-page' => 'Hee di Sigg kam_mer nit vun Hand ändere. Dat hee es en Översäzungß_Sigg vun dä Sigg [[$1]]. De Övversäzung kam_mer övver däm Wiki sing [$2 Övversäzungß_Wärkzüsch] op der neußte Shtand bränge.',
	'tpt-unknown-page' => 'Dat Appachtemang hee es för Sigge vum Enhallt vum Wiki ze Övversäze jedaach. Di Sigg, di de jraad ze ändere versöhks, schingk ävver nit met ööhnds en Sigg ze donn ze han, di för zem Övversäze makeet es.',
	'tpt-render-summary' => 'Ändere, öm op de neue Version fun de Ojinaal_Sigg ze kumme',
	'tpt-download-page' => 'Sigge met Övversäzunge expotteere',
	'pt-parse-open' => 'En &lt;translate&gt; es ohne Jääjeshtöck.
De Siggeschabloon för ze övversäze: <pre>$1</pre>',
	'pt-parse-close' => 'En &lt;/translate&gt; es ohne Jääjeshtöck.
De Siggeschabloon för ze övversäze: <pre>$1</pre>',
	'pt-parse-nested' => 'En einem &lt;translate> Affschned kann nit noch eine su ene Affschned dren shteishe.
Dä Täx vun dä Makeerung es: <pre>$1</pre>',
	'pt-shake-multiple' => 'Mieh wi eine Makeerung för dersellve ene Affschned es nit müjjelesh.
Dä Täx vun däm Affschned es: <pre>$1</pre>',
	'pt-shake-position' => 'Makeerunge för Affschnede sin aan dä Pusizjuhn nit müjjelesh.
Dä Täx vun däm Affschned es: <pre>$1</pre>',
	'pt-shake-empty' => 'Em Affschnett met dä Makeerong „$1“ es nix dren.',
	'pt-log-header' => 'Logbooch för di Saache, di mem Sigge Övversäze ze donn han',
	'pt-log-name' => 'Logbooch vum Sigge Övversäze',
	'pt-log-mark' => '{{GENDER:$2|hät}} de Version $3 vun dä Sigg „[[:$1]]“ för et Övversäze frei jejovve',
	'pt-log-unmark' => '{{GENDER:$2|hät}} de Sigg „[[:$1]]“ vum Övversäze ußjeschloße',
	'pt-log-moveok' => '{{GENDER:$2|hät}} dä övversäzzbaare Sigg „$1“ dä neue Tittel „$3“ jejovve un dä Vörjang es jäz fäädesh.',
	'pt-log-movenok' => '{{GENDER:$2|wullt}} dä Tittel vun dä Sigg „[[:$1]]“ op „[[:$3]]“ ändere, dat hät nit jeflup',
	'pt-log-delete-full-ok' => '{{GENDER:$2|hät}} de övversäzbaa Sigg „$1“ fäädesch fottjeschmeße.',
	'pt-log-delete-full-nok' => '{{GENDER:$2|hädd}} e Problem jehatt beim Fottschmieße vun dä övversäbaa Sigg „[[:$1]]“',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|hät}} de övversaz Sigg „$1“ fäädesch fottjeschmeße.',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|hät}} e Problem jehatt beim Fottschmieße vun dä övversaz Sigg „[[:$1]]“',
	'pt-movepage-title' => 'De övversäzbaa Sigg „$1“ ömnänne',
	'pt-movepage-blockers' => 'Di övversäbaa Sigg künne mer nit ömbenänne. {{PLURAL:$1|Der Jrond es:|De Jrönd sin:|Mer weße ävver kein Jrönd doför.}}',
	'pt-movepage-block-base-exists' => 'De Zielsigg „[[:$1]]“ jidd_et ald.',
	'pt-movepage-block-base-invalid' => 'De aanjejovve Zielsigg hät keine jölteje Siggetittel.',
	'pt-movepage-block-tp-exists' => 'De övversäzbaa Zielsigg „[[:$2]]“ jidd_et ald.',
	'pt-movepage-block-tp-invalid' => 'De aanjejovve övversäzbaa Zielsigg iere Tittel för „[[:$1]]“ wöhr nit jöltejsch, Velleisch zoh lang?',
	'pt-movepage-block-section-exists' => 'En Zielsigg met dämm Afschnett „[[:$2]]“ jidd_et ald.',
	'pt-movepage-block-section-invalid' => 'Dä Tittel för de Ziel_Affschnetts_Sigg för „[[:$1]]“ wöhr nit jöltejsch, Velleisch zoh lang?',
	'pt-movepage-block-subpage-exists' => 'De Ziel_Ongersigg „[[:$2]]“ jidd_et ald.',
	'pt-movepage-block-subpage-invalid' => 'Dä Tittel för de Onger_Sigg för „[[:$1]]“ wöhr nit jöltejsch, Velleisch zoh lang?',
	'pt-movepage-list-pages' => 'De Leß met dä Sigge zom Ömbenänne',
	'pt-movepage-list-translation' => 'Övversäzbaa Sigge',
	'pt-movepage-list-section' => 'Affschnetts_Sigge',
	'pt-movepage-list-other' => 'Ander Ongersigge',
	'pt-movepage-list-count' => 'Ensjesamp ham_mer {{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigg}} för ömzenänne.',
	'pt-movepage-legend' => 'Övversäzbaa Sigg ömnänne',
	'pt-movepage-current' => 'Der Name em Momang:',
	'pt-movepage-new' => 'Der neue Name:',
	'pt-movepage-reason' => 'För et Logbooch, der Aanlaß:',
	'pt-movepage-subpages' => 'De Ongersigge all met ömnänne',
	'pt-movepage-action-check' => 'Fengk erus, ov dat Ömnänne müjjlesch es',
	'pt-movepage-action-perform' => 'Ömnänne!',
	'pt-movepage-action-other' => 'Ander Zieltittel',
	'pt-movepage-intro' => 'Heh di Extrasigg löht Desh Sigge ömdäufe, di för et Övversäze frei jejovve sin.
Dat jeiht nit en einem Rötsch, weil ene Pöngel Sigge un -Deile ömjenannt wääde möße.
Em MediaWiki sing <i lang="en"> [http://www.mediawiki.org/wiki/Manual:Job_queue job queue] </i> weed doför jebruch.
Su lang, wi de Sigge ömjenannt wääde, kam_mer met dänne nix söns maache.
Fähler kumme en et [[Special:Log/pagetranslation|{{int:pt-log-name}}]] un möße vun Hand opjerühmp wääde.',
	'pt-movepage-logreason' => 'Deil vun dä övversäzbaa Sigg „$1“',
	'pt-movepage-started' => 'Di Sigg weed jäz ömjenannt.
Don op jede Fall em [[Special:Log/pagetranslation|{{int:pt-log-name}}]] noh Fähler loore, un dat dat öhndlesch aan et Eng jekumme es.',
	'pt-locked-page' => 'Dat Stöck heh is jesperrt, däm sing övversäbaa Sigg weed nämmisch jrad ömbenannt.',
	'pt-deletepage-lang-title' => 'De Övversäzongssigg „$1“ fottschmieße',
	'pt-deletepage-full-title' => 'De övversäzbaa Sigg „$1“ fottschmieße.',
	'pt-deletepage-invalid-title' => 'Di aanjejovve Sigg es nit jöltesch.',
	'pt-deletepage-invalid-text' => 'Di aanjejovve Sigg es nit övversäbaa un och kein Övversäzong vun einer.',
	'pt-deletepage-action-check' => 'Don de Sigge opleßte, di fott sulle',
	'pt-deletepage-action-perform' => 'Maach nu fott!',
	'pt-deletepage-action-other' => 'Nemm ene andere Zieltittel',
	'pt-deletepage-lang-legend' => 'Övversäzongssigg fottschmieße',
	'pt-deletepage-full-legend' => 'En övversäzbaa Sigg fottschmieße',
	'pt-deletepage-any-legend' => 'En övversäzbaa Sigg udder övversaz Sigg fottschmieße',
	'pt-deletepage-current' => 'Dä Sigg iere Tittel:',
	'pt-deletepage-reason' => 'Der Jrond:',
	'pt-deletepage-subpages' => 'Schmieß all de Ongersigge fott',
	'pt-deletepage-list-pages' => 'De Leß met dä Sigge zom Fottschmieße',
	'pt-deletepage-list-translation' => 'Övversaz Sigge',
	'pt-deletepage-list-section' => 'De Sigge met de Afschnedde',
	'pt-deletepage-list-other' => 'Ander Ongersigge',
	'pt-deletepage-list-count' => 'Ensjesamp ham_mer {{PLURAL:$1|ein Sigg|$1 Sigge|kein Sigg}} för fottzeschmieße.',
	'pt-deletepage-full-logreason' => 'Deil vun dä övversäzbaa Sigg „$1“',
	'pt-deletepage-lang-logreason' => 'Deil vun dä övversaz Sigg „$1“',
	'pt-deletepage-started' => 'Loor em [[Special:Log/pagetranslation|Logbooch vun de Övversäzonge]] noh Fähler un Nohreeschte.',
	'pt-deletepage-intro' => 'Heh di Söndersigg määd et müjjelesch kumplätte övversäbaa Sigge udder Övversäzonge en en beshtemmpte Shprooch fottzeschmieße.
Dat Fottschmieße dohrt e Wielsche, weil en janze Aanzahl Sigge derbei fott jeschmeße wääde moß.
Fähler kumme en et [[Special:Log/pagetranslation|Logbooch vum Övversäze]] un möße vun Hand jraadjeröck wääde.',
);

/** Kurdish (Latin script) (‪Kurdî (latînî)‬)
 * @author George Animal
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'right-pagetranslation' => 'Versiyonên rûpelên ji bo wergerê nîşan bike',
	'tpt-diff-old' => 'Nivîsa pêşî',
	'tpt-diff-new' => 'Nivîsa nû',
	'tpt-submit' => 'Vê versiyonê ji bo wergerê îşaret bike',
	'tpt-nosuchpage' => 'Rûpela $1 tune.',
	'translate-tag-translate-link-desc' => 'Vê rûpelê werrgerrîne',
	'translate-tag-markthis' => 'Vê rûpelê ji bo wergerê îşaret bike',
	'tpt-languages-legend' => 'Zimanên din:',
	'tpt-download-page' => 'Rûpela bi wergeran bişîne',
	'pt-movepage-list-translation' => 'Rûpelên wergerrê',
	'pt-movepage-list-other' => 'Binrûpelên din',
	'pt-movepage-current' => 'Navê niha:',
	'pt-movepage-new' => 'Navê nû:',
	'pt-movepage-reason' => 'Sedem:',
	'pt-movepage-subpages' => 'Hemû binrûpelan bigerîne',
	'pt-deletepage-current' => 'Navê rûpelê:',
	'pt-deletepage-reason' => 'Sedem:',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Purodha
 * @author Robby
 */
$messages['lb'] = array(
	'pagetranslation' => 'Iwwersetzung vun der Säit',
	'right-pagetranslation' => 'Versioune vu Säite fir Iwwersetzung markéieren',
	'tpt-desc' => "Erweiderung fir ihaltlech Säiten z'iwwersetzen",
	'tpt-section' => 'Iwwersetzungseenheet $1',
	'tpt-section-new' => 'Numm: $1',
	'tpt-section-deleted' => 'Iwwersetzungseenheet $1',
	'tpt-template' => 'Säiteschabloun',
	'tpt-templatediff' => "D'Säiteschabloun gouf geännert.",
	'tpt-diff-old' => 'Viregen Text',
	'tpt-diff-new' => 'Neien Text',
	'tpt-submit' => "Dës Versioun fir d'Iwwersetze markéieren",
	'tpt-sections-oldnew' => 'Nei an Iwwersetzungseeenheeten déi et scho gëtt',
	'tpt-sections-deleted' => 'Geläschten Iwwersetzungseenheeten',
	'tpt-sections-template' => 'Iwwersetzung Säiteschabloun',
	'tpt-action-nofuzzy' => 'Invalidéiert keng Iwwersetzungen',
	'tpt-badtitle' => 'De Säitennumm deen ugi gouf ($1) ass kee valabelen Titel',
	'tpt-nosuchpage' => "D'Säit $1 gëtt et net",
	'tpt-oldrevision' => "$2 ass net déi lescht Versioun vun der Säit [[$1]].
Nëmmen déi lescht Versioune kënne fir d'Iwwersetzung markéiert ginn.",
	'tpt-notsuitable' => "D'Säit $1 ass net geeegent fir iwwersat ze ginn.
Vergewëssert Iech ob se <nowiki><translate></nowiki>-Taggen  an eng valabel Syntax huet.",
	'tpt-saveok' => 'D\'Säit [[$1]] gouf fir d\'Iwwersetzung mat $2 {{PLURAL:$2|Iwwersetzungseenheet|Iwwersetzungseenheete}} markéiert.
D\'Säit kann elo <span class="plainlinks">[$3 iwwersat]</span> ginn.',
	'tpt-badsect' => '"$1" ass kee valbelen Numm fir d\'Iwwersetzungseenheet $2.',
	'tpt-showpage-intro' => "Ënnendrënner stinn déi nei, aktuell a gescläschten Abschnitter.
Ier dir dës Versioun fir d'iwwersetze markéiert, kuckt w.e.g. no datt d'Ännerunge vun den Abschnitter op e Minimum reduzéiert gi fir onnëtz Aarbecht vun den Iwwersezer ze vermeiden.",
	'tpt-mark-summary' => "huet dës Versioun fir d'Iwwersetzung markéiert",
	'tpt-edit-failed' => "D'Säit $1 konnt net aktualiséiert ginn",
	'tpt-duplicate' => 'Den Numm $1 vun der Iwwersetzungwseenheet gëtt méi wéi eemol benotzt.',
	'tpt-already-marked' => "Déilescht Versioun vun dëser Säit gouf scho fir d'Iwwersetzung markéiert.",
	'tpt-unmarked' => "D'Säit $1 ass net méi fir z'iwwersetze markéiert.",
	'tpt-list-nopages' => "Et si keng Säite fir d'Iwwersetzung markéiert respektiv fäerdeg fir fir d'Iwersetzung markéiert ze ginn.",
	'tpt-new-pages-title' => "Säiten déi fir d'Iwwersetzung virgeschlo goufen",
	'tpt-old-pages-title' => 'Säiten déi iwwersat ginn',
	'tpt-other-pages-title' => 'Futtis Säiten',
	'tpt-discouraged-pages-title' => 'Säiten déi vun der Iwwersetzung zréckgezu sinn',
	'tpt-new-pages' => "Op {{PLURAL:$1|dëser Säit|dëse Säiten}} ass Text mat Iwwersetzungs-Markéierungen, awer keng Versioun vun {{PLURAL:$1|dëser Säit|dëse Säiten}} ass elo fir d'Iwwersetze  markéiert.",
	'tpt-old-pages' => "Eng Versioun vun {{PLURAL:$1|dëser Säit|dëse Säite}} gouf fir d'Iwwersetze markéiert.",
	'tpt-other-pages' => "Al Versioun vun {{PLURAL:$1|dëser Säit|dëse Säite}} sinn als z'iwwesetze markéiert,
awer déi lescht Versioun kann fir d'Iwwersetzung markéiert ginn.",
	'tpt-rev-mark' => "markéiere fir z'iwwersetzen",
	'tpt-rev-unmark' => 'Vum Iwwersetzen ewechhuelen',
	'tpt-rev-discourage' => 'Vun der Iwwersetzung zréckzéien',
	'tpt-rev-encourage' => 'restauréieren',
	'tpt-rev-mark-tooltip' => "Déi rezentst Versioun vun dëser Säit fir d'Iwwersetze markéieren.",
	'tpt-rev-unmark-tooltip' => 'Dës Säit vum Iwwersetzen ewechhuelen.',
	'tpt-rev-discourage-tooltip' => 'Weider Iwwersetzunge vun dëser Säit net méi ënnerstëtzten.',
	'tpt-rev-encourage-tooltip' => "Dës Säit nees fir d'Iwwersetze fräiginn",
	'translate-tag-translate-link-desc' => 'Dës Säit iwwersetzen',
	'translate-tag-markthis' => "Dës Säit fir d'Iwwersetzung markéieren",
	'translate-tag-markthisagain' => 'Dës Säit huet <span class="plainlinks">[$1 Ännerungen]</span> zënter datt se fir d\'lescht <span class="plainlinks">[$2 fir d\'Iwwersetzung markéiert gouf]</span>.',
	'translate-tag-hasnew' => 'Op dëser Säit si(nn)s <span class="plainlinks">[$1 Ännerungen]</span> déi net fir d\'iwwersetzung markéiert sinn.',
	'tpt-translation-intro' => 'Dës Säit ass eng <span class="plainlinks">[$1 iwwersate Versioun]</span> vun der Säit [[$2]] an d\'Iwweersetzung ass zu $3 % ofgeschloss an aktuell.',
	'tpt-translation-intro-fuzzy' => 'Net aktuell Iwwersetzunge sinn esou markéiert.',
	'tpt-languages-legend' => 'aner Sproochen:',
	'tpt-target-page' => "Dës Säit kann net manuell aktualiséiert ginn.
Dës Säit ass eng Iwwersetzung vun der Säit [[$1]] an d'Iwwersetzung ka mat Hëllef vun der [$2 Iwwersetzungs-Fonctioun] aktulaiséiert ginn.",
	'tpt-unknown-page' => "Dëse Nummraum ass fir d'Iwwersetze vu Säitemat Inhalt reservéiert.
D'Säit, déi Dir versicht z'änneren schéngt net mat enger Säit déi fir d'iwwersetzung markéiert ass ze korrespondéieren.",
	'tpt-render-summary' => 'Aktualiséieren fir mat der neier Versioun vun der Quellsäit iwwereneenzestëmmen',
	'tpt-download-page' => 'Säit mat Iwwersetzungen exportéieren',
	'pt-parse-open' => 'Netsymetreschen &lt;translate&gt;-Tag.
Iwwersetzungsschabloun: <pre>$1</pre>',
	'pt-parse-close' => 'Netsymetreschen &lt;&#47;translate&gt;-Tag.
Iwwersetzungsschabloun: <pre>$1</pre>',
	'pt-parse-nested' => 'Verschachtelt &lt;translate&gt;-Abschnitter sinn net méiglech.
Text vum Tag: <pre>$1</pre>',
	'pt-shake-multiple' => 'E puer Abschnittsmarkéierungen fir een Abschnitt.
Text vum Abschnitt: <pre>$1</pre>',
	'pt-shake-position' => 'Abschnittsmarkéierungen op enger onerwaarter Plaz.
Text vum Abschnitt: <pre>$1</pre>',
	'pt-shake-empty' => 'Abschnitt fir Marker $1 eidelmaachen.',
	'pt-log-header' => 'Logbuch vun den Aktiounee a Verbindung mat dem System vun der Säiteniwwersetzung',
	'pt-log-name' => 'Logbuch vun de Säiteniwwersetzungen',
	'pt-log-mark' => '{{GENDER:$2|huet}} d\'Versioun $3 vun der Säit "[[:$1]]" fir z\'iwwersetze markéiert',
	'pt-log-unmark' => '{{GENDER:$2|huet}} d\'Säit "[[:$1]]" vun der Iwwersetzung ewechgeholl',
	'pt-log-moveok' => "{{GENDER:$2|huet}} d'iwwersetzbar Säit $1 op $3 ëmbenannt",
	'pt-log-movenok' => '{{GENDER:$2|hat}} e Problem beim Réckele vu(n) [[:$1]] op [[:$3]]',
	'pt-movepage-title' => 'Déi iwwersetzbar Säit $1 réckelen',
	'pt-movepage-blockers' => 'déi iwwersetzbar Säit kann net op den neien Numm geréckelt gi wéinst {{PLURAL:$1|dësem|dëse}} Feeler:',
	'pt-movepage-block-base-exists' => "D'Basiszilsäit [[:$1]] gëtt et schonn.",
	'pt-movepage-block-base-invalid' => "D'Basiszilsäit huet kee valabelen Titel.",
	'pt-movepage-block-tp-exists' => "D'Iwwersetzungszilsäit [[:$2]] gëtt et schonn.",
	'pt-movepage-block-tp-invalid' => 'Den Numm vun der iwwersater Zilsäit fir [[:$1]] wier net valabel (ze laang?).',
	'pt-movepage-block-section-exists' => 'Den Zilabschnitt [[:$2]] gëtt et schonn.',
	'pt-movepage-block-section-invalid' => 'Den Numm vum Abschnitt vun der Zilsäit fir [[:$1]] wier net valabel (ze laang?).',
	'pt-movepage-block-subpage-exists' => "D'Zil-Ënnersäit [[:$2]] gëtt et schonn.",
	'pt-movepage-block-subpage-invalid' => 'Den Titel vun der Zil-Ënnersäit fir [[:$1]] wier net valabel (ze laang?).',
	'pt-movepage-list-pages' => 'Lëscht vun de Säite fir ze réckelen',
	'pt-movepage-list-translation' => 'Iwwersetzungssäiten',
	'pt-movepage-list-section' => 'Abschnitter vu Säiten',
	'pt-movepage-list-other' => 'Aner Ënnersäiten',
	'pt-movepage-list-count' => 'Am ganzen $1 {{PLURAL:$1|Säit|Säite}} fir ze réckelen.',
	'pt-movepage-legend' => 'Iwwersetzbar Säit réckelen',
	'pt-movepage-current' => 'Aktuellen Numm:',
	'pt-movepage-new' => 'Neien Numm:',
	'pt-movepage-reason' => 'Grond:',
	'pt-movepage-subpages' => 'All Ënnersäite réckelen',
	'pt-movepage-action-check' => "Nokucken ob d'Réckele méiglech ass",
	'pt-movepage-action-perform' => 'Réckelen',
	'pt-movepage-action-other' => 'Zil änneren',
	'pt-movepage-intro' => "Dës Spezialsäit erméiglecht Iech et fir Säiten déi fir d'Iwwersetzung markéiert sinn ze réckelen.
D'Réckelaktioun gëtt net direkt gemaach wëll vill Säite geréckelt musse ginn.
D'Job-Queue gëtt fir d'Réckele vun de Säite benotzt.
Da wann d'Säite geréckelt ginn ass et net méiglech mat deene Säiten déi grad geréckelt ginn ze schaffen.
Wann et net fonctionnéiert gëtt dat am [[Special:Log/pagetranslation|Iwwersetzungs-Logbuch]] festgehal an et muss vun Hand reparéiert ginn.",
	'pt-movepage-logreason' => 'Deel vun der iwwersetzbarer Säit $1.',
	'pt-movepage-started' => "D'Basissäit ass elo geréckelt.
Kuckt w.e.g. d'[[Special:Log/pagetranslation|Logbuch vun den Iwwersetzunge]] fir Feelermeldungen respektiv d'Meldung datt alles ok ass.",
	'pt-locked-page' => 'Dës Säit ass gespaart wëll déi iwwersetzbar Säit elo geréckelt gëtt.',
	'pt-deletepage-lang-title' => "D'Iwwersetzungssäit $1 gëtt geläscht.",
	'pt-deletepage-full-title' => 'Déi iwwersetzbar Säit $1 gëtt geläscht.',
	'pt-deletepage-invalid-title' => 'Déi spezifizéiert Säit ass net valabel.',
	'pt-deletepage-invalid-text' => 'Déi Säit déi Dir uginn hutt ass keng iwwersetzbar Säit a keng Iwwersetzung vun esou enger.',
	'pt-deletepage-action-check' => 'Säiten déi geläscht solle ginn opzielen',
	'pt-deletepage-action-perform' => 'Elo läschen',
	'pt-deletepage-action-other' => 'Zil änneren',
	'pt-deletepage-lang-legend' => 'Iwwersetzungssäit läschen',
	'pt-deletepage-full-legend' => 'Iwwersetzbar Säit läschen',
	'pt-deletepage-current' => 'Numm vun der Säit:',
	'pt-deletepage-reason' => 'Grond:',
	'pt-deletepage-subpages' => 'All Ënnersäite läschen',
	'pt-deletepage-list-pages' => 'Lëscht vun de Säite fir ze läschen',
	'pt-deletepage-list-translation' => 'Iwwersetzungssäiten',
	'pt-deletepage-list-section' => 'Abschnitter vu Säiten',
	'pt-deletepage-list-other' => 'Aner Ënnersäiten',
	'pt-deletepage-list-count' => 'Am ganzen $1 {{PLURAL:$1|Säit|Säite}} fir ze läschen.',
	'pt-deletepage-full-logreason' => 'Deel vun der iwwersetzbarer Säit $1.',
	'pt-deletepage-lang-logreason' => 'Deel vun der iwwersater Säit $1.',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'translate-tag-translate-link-desc' => 'Vvuunula olupapula luno',
	'tpt-languages-legend' => 'Nnimi ndala:',
);

/** Lithuanian (Lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'pagetranslation' => 'Puslapio vertimas',
	'tpt-templatediff' => 'Pasikeitė puslapio šablonas.',
	'tpt-diff-old' => 'Ankstesnis tekstas',
	'tpt-diff-new' => 'Naujas tekstas',
	'tpt-sections-template' => 'Vertimo puslapio šablonas',
	'tpt-badtitle' => 'duotas puslapio pavadinimas ($1) nėra gera antraštė',
	'tpt-nosuchpage' => 'Puslapio $1 neegzistuoja',
	'tpt-mark-summary' => 'Ši versija pažymėta vertimui',
	'tpt-edit-failed' => 'Nepavyko atnaujinti puslapio: $1',
	'tpt-already-marked' => 'Šio puslapio naujausia versija jau yra pažymėta vertimui.',
	'tpt-unmarked' => 'Puslapis $1 nebėra pažymėtas vertimams.',
	'tpt-other-pages-title' => 'Sugadinti puslapiai',
	'tpt-rev-mark' => 'Pažymėti vertimui',
	'tpt-rev-unmark' => 'pašalinti iš vertimo',
	'tpt-rev-encourage' => 'atkurti',
	'translate-tag-translate-link-desc' => 'Versti šį puslapį',
	'tpt-translation-intro-fuzzy' => 'Pasenę vertimai yra pažymėti kaip šis.',
	'tpt-languages-legend' => 'Kitos kalbos:',
	'pt-movepage-action-other' => 'Pakeisti taikinį',
	'pt-deletepage-action-check' => 'Sąrašą puslapių kurie turi būti ištrinti.',
	'pt-deletepage-action-perform' => 'Padaryti trynimą',
	'pt-deletepage-action-other' => 'Pakeisti taikinį',
	'pt-deletepage-lang-legend' => 'Ištrinti vertimo puslapį',
	'pt-deletepage-full-legend' => 'Ištrinti išverčiama puslapį',
	'pt-deletepage-current' => 'Puslapio pavadinimas:',
	'pt-deletepage-reason' => 'Priežastis:',
	'pt-deletepage-list-pages' => 'Sąrašas ištrinti puslapius',
	'pt-deletepage-list-translation' => 'Vertimo puslapiai',
	'pt-deletepage-full-logreason' => 'Dalis išverčiamo puslapio $1.',
	'pt-deletepage-lang-logreason' => 'Dalis vertimo puslapio $1.',
);

/** Latgalian (Latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'tpt-diff-new' => 'Jauns teksts',
	'tpt-languages-legend' => 'Cytys volūdys:',
	'pt-movepage-new' => 'Jauna pasauka:',
	'pt-movepage-reason' => 'Īmesle:',
);

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'translate-tag-translate-link-desc' => 'Tulkot šo lapu',
	'tpt-languages-legend' => 'Citas valodas:',
	'pt-log-name' => 'Lapu tulkošanas žurnāls',
	'pt-movepage-list-pages' => 'Pārvietojamo lapu saraksts',
	'pt-movepage-list-translation' => 'Tulkojuma lapas',
	'pt-movepage-list-other' => 'Citas apakšlapas',
	'pt-movepage-current' => 'Esošais nosaukums:',
	'pt-movepage-new' => 'Jaunais nosaukums:',
	'pt-movepage-reason' => 'Iemesls:',
	'pt-movepage-subpages' => 'Pārvietot visas apakšlapas',
	'pt-movepage-action-check' => 'Pārbaudīt, vai ir iespējams pārvietot',
	'pt-movepage-action-perform' => 'Nepārvietot',
	'pt-movepage-action-other' => 'Mainīt mērķi',
	'pt-movepage-logreason' => 'Daļa no tulkojamas lapas $1.',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'right-pagetranslation' => 'Mamamarika ny santiônam-pejy hodikaina',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'pagetranslation' => 'Превод на страници',
	'right-pagetranslation' => 'Обележување на верзии на страници за преведување',
	'tpt-desc' => 'Додаток за преведување на страници со содржини',
	'tpt-section' => 'Преводна единица $1',
	'tpt-section-new' => 'Нова преводна единица.
Назив: $1',
	'tpt-section-deleted' => 'Преводна единица $1',
	'tpt-template' => 'Шаблон за страница',
	'tpt-templatediff' => 'Шаблонот за страницата е променет.',
	'tpt-diff-old' => 'Претходен текст.',
	'tpt-diff-new' => 'Нов текст',
	'tpt-submit' => 'Обележи ја оваа верзија на преводот',
	'tpt-sections-oldnew' => 'Нови и постоечки преводни единици',
	'tpt-sections-deleted' => 'Избришани преводни едници',
	'tpt-sections-template' => 'Шаблон за страница со превод',
	'tpt-action-nofuzzy' => 'Не поништувај преводи',
	'tpt-badtitle' => 'Даденото име на страницата ($1) е погрешен наслов',
	'tpt-nosuchpage' => 'Страницата $1 не постои',
	'tpt-oldrevision' => '$2 не е најнова верзија на страницата [[$1]].
Само најновите верзии можат да се обележуваат за преведување.',
	'tpt-notsuitable' => 'Страницата $1 не е погодна за преведување.
Проверете дали има ознаки <nowiki><translate></nowiki> и дали има правилна синтакса.',
	'tpt-saveok' => 'Оваа страница [[$1]] е обележана за преведување со $2 {{PLURAL:$2|преводна единица|преводни единици}}.
Страницата сега може да се <span class="plainlinks">[$3 преведува]</span>.',
	'tpt-badsect' => '„$1“ е погрешно име за преводната единица $2.',
	'tpt-showpage-intro' => 'Подолу не наведени нови, постоечки и избришани пасуси делови.
Пред да ја обележите оваа верзија за преведување, проверете дали промените во деловите се сведени на минимум со што би се избегнала непотреба работа за преведувачите.',
	'tpt-mark-summary' => 'Ја означи оваа верзија за преведување',
	'tpt-edit-failed' => 'Не можев да ја обновам страницата: $1',
	'tpt-duplicate' => 'Името $1 се користи кај повеќе од една преводна единица.',
	'tpt-already-marked' => 'Најновата верзија на оваа страница е веќе обележана за преведување.',
	'tpt-unmarked' => 'Страницата $1 повеќе не е означена за преведување.',
	'tpt-list-nopages' => 'Нема пораки обележани за преведување, ниту страници готови за обележување за да бидат преведени.',
	'tpt-new-pages-title' => 'Страници предложени за преведување',
	'tpt-old-pages-title' => 'Страници за преведување',
	'tpt-other-pages-title' => 'Расипани страници',
	'tpt-discouraged-pages-title' => 'Непрепорачани страници',
	'tpt-new-pages' => '{{PLURAL:$1|Оваа страница содржи|Овие страници содржат}} текст со ознаки за преведување, но моментално нема верзија на {{PLURAL:$1|оваа страница|овие страници}} која е обележана за преведување.',
	'tpt-old-pages' => 'Извесна верзија на {{PLURAL:$1|оваа страница|овие страници}} е обележана за преведување.',
	'tpt-other-pages' => '{{PLURAL:$1|Стара верзија на оваа страница е означена за преведување|Постари верзии на оваа страница се означени за преведување}},
но {{PLURAL:$1|најновата верзија не може да се означи|најновите верзии не можат да се означат}} за преведување.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Се препорачува оваа страница повеќе да не се преведува|Се препорачува овие страници повеќе да не се преведуваат}}.',
	'tpt-select-prioritylangs' => 'Список на јазични кодови одделени со запирка:',
	'tpt-select-prioritylangs-force' => 'Спречи преводи на други јазици',
	'tpt-select-prioritylangs-reason' => 'Причина:',
	'tpt-sections-prioritylangs' => 'Приоритетни јазици',
	'tpt-rev-mark' => 'означи за преведување',
	'tpt-rev-unmark' => 'отстрани од преводот',
	'tpt-rev-discourage' => 'непрепорачана',
	'tpt-rev-encourage' => 'врати',
	'tpt-rev-mark-tooltip' => 'Означи ја последната верзија на страницава како „за преведување“',
	'tpt-rev-unmark-tooltip' => 'Отстрани ја страницава од преводот.',
	'tpt-rev-discourage-tooltip' => 'Постави ја страницата како непрепорачана за понатамошното преведување.',
	'tpt-rev-encourage-tooltip' => 'Врати ја страницата на нормално преведување.',
	'translate-tag-translate-link-desc' => 'Преведи ја оваа страница',
	'translate-tag-markthis' => "Обележи ја оваа страница со 'за преведување'",
	'translate-tag-markthisagain' => 'Оваа страница има <span class="plainlinks">[$1 промени]</span> од последниот пат кога <span class="plainlinks">[$2 обележана за преведување]</span>.',
	'translate-tag-hasnew' => 'Оваа страница содржи <span class="plainlinks">[$1 промени]</span> кои не се обележани за преведување.',
	'tpt-translation-intro' => 'Оваа страница е <span class="plainlinks">[$1 преведена верзија]</span> на страницата [[$2]], а преводот е $3% потполн и тековен.',
	'tpt-translation-intro-fuzzy' => 'Застарените преводи се обележуваат вака.',
	'tpt-languages-legend' => 'Други јазици:',
	'tpt-languages-separator' => '&#160;•&#160;',
	'tpt-languages-zero' => 'Почнете превод на овој јазик',
	'tpt-target-page' => 'Оваа страница не може да се обнови рачно.
Страницава е превод на страницата [[$1]], а преводот може да се обнови само со помош на [$2 алатката за преведување].',
	'tpt-unknown-page' => 'Овој именски простор е резервиран за преводи на содржински страници.
Страницата која се обидувате да ја уредите не соодветствува со ниедна страница обележана за преведување.',
	'tpt-translation-restricted' => 'Преведувањето на групава на тој јазик е спречено од преводен администратор.

Причина за ограничувањето: $1',
	'tpt-discouraged-language-force' => 'Преводниот администратор ги ограничи јазиците на кои може да се преведе оваа група пораки. Овој јазик не е меѓу нив.

Причина за ограничувањето: $1',
	'tpt-discouraged-language' => 'Овој јазик не е меѓу приоритетните јазици што ги задал администраторот на оваа група пораки

Причина за приоритизацијата: $1',
	'tpt-render-summary' => 'Обнова за усогласување со новата верзија на изворната страница',
	'tpt-download-page' => 'Извези страница со преводи',
	'pt-parse-open' => 'Неврамнотежена &lt;translate> ознака.
Шаблон за преводот: <pre>$1</pre>',
	'pt-parse-close' => 'Неврамнотежена &lt;/translate> ознака.
Шаблон за преводот: <pre>$1</pre>',
	'pt-parse-nested' => 'Не се дозволени гвнездени &lt;translate> поднаслови.
Текст на ознаката: <pre>$1</pre>',
	'pt-shake-multiple' => 'Повеќекратни означувачи за поднаслови во еден поднаслов.
Текст на поднасловот: <pre>$1</pre>',
	'pt-shake-position' => 'Неочекувана положба на означувачите за поднаслови.
Текст во поднасловот: <pre>$1</pre>',
	'pt-shake-empty' => 'Празен поднаслов за означувачот $1.',
	'pt-log-header' => 'Дневник на дејства кои се однесуваат на системот за превод на страници',
	'pt-log-name' => 'Дневник на преводи на страници',
	'pt-log-mark' => '{{GENDER:$2|ја означи}} за превод ревизијата $3 на стрaницата „[[:$1]]“.',
	'pt-log-unmark' => '{{GENDER:$2|ја отстрани}} од преводот страницата „[[:$1]]“.',
	'pt-log-moveok' => '{{GENDER:$2|изврши}} преименување на преводливата страница $1 во $3',
	'pt-log-movenok' => '{{GENDER:$2|наиде}} на проблем при преместувањето на [[:$1]] во [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|изврши}} бришење на преводливата страница $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|наиде}} на проблем бришејќи ја преводливата страница [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|изврши}} бришење на преводната страница $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|наиде}} на проблем бришејќи ја преводната страница [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|отстрани}} приоритетни јазици од преводливата страница [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|ѝ ги зададе}} следниве приоритетни јазици на преводливата страница [[:$1]]: $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|ги ограничи}} јазиците на преводливата страница [[:$1]] на $3',
	'pt-movepage-title' => 'Преместување на преводливата страница $1',
	'pt-movepage-blockers' => 'Преводливата страница не може да се премести на нов наслов заради {{PLURAL:$1|следнава грешка|следниве грешки}}:',
	'pt-movepage-block-base-exists' => 'Целната основна страница [[:$1]] постои.',
	'pt-movepage-block-base-invalid' => 'Целната основна страница не претставува важечки наслов.',
	'pt-movepage-block-tp-exists' => 'Целната страница со превод [[:$2]] постои.',
	'pt-movepage-block-tp-invalid' => 'Насловот на целната страница за превод на [[:$1]] би била неважечка (предолга?).',
	'pt-movepage-block-section-exists' => 'Целната страница за поднаслов [[:$2]] постои.',
	'pt-movepage-block-section-invalid' => 'Насловот на целната страница за поднаслов на [[:$1]] би била неважечка (предолга?).',
	'pt-movepage-block-subpage-exists' => 'Целната потстраница [[:$2]] постои.',
	'pt-movepage-block-subpage-invalid' => 'Насловот на целната потстраница на [[:$1]] би била неважечка (предолга?).',
	'pt-movepage-list-pages' => 'Список на страници за преместување',
	'pt-movepage-list-translation' => 'Страници со превод',
	'pt-movepage-list-section' => 'Страници за поднаслови',
	'pt-movepage-list-other' => 'Други потстраници',
	'pt-movepage-list-count' => 'Вкупно $1 {{PLURAL:$1|страница|страници}} за преместување.',
	'pt-movepage-legend' => 'Премести преводлива страница',
	'pt-movepage-current' => 'Сегашен назив:',
	'pt-movepage-new' => 'Нов назив:',
	'pt-movepage-reason' => 'Причина:',
	'pt-movepage-subpages' => 'Премести ги сите потстраници',
	'pt-movepage-action-check' => 'Провери дали преместувањето е изводливо',
	'pt-movepage-action-perform' => 'Изврши преместување',
	'pt-movepage-action-other' => 'Смени цел',
	'pt-movepage-intro' => 'Оваа специјална страница ви овозможува да преместувате страници обележани за преведување.
Самото преместување нема да се случи веднаш, бидејќи треба да се преместат голем број на страници.
Преместувањето ќе се води по редица на задачи.
Додека се преместуваат страниците, со нив нема да може да се работи.
Неуспешните ќе бидат заведени во [[Special:Log/pagetranslation|дневникот на преводи на страници]] и тие ќе треба да се поправаат рачно.',
	'pt-movepage-logreason' => 'Дел од преводливата страница $1.',
	'pt-movepage-started' => 'Страницата сега е преместена.
Проверете дали [[Special:Log/pagetranslation|дневникот на преводи на страници]] има пријавено грешки и порака за завршена задача.',
	'pt-locked-page' => 'Оваа страница е заклучена бидејќи е во тек преместување на преводлива страница.',
	'pt-deletepage-lang-title' => 'Бришење на страницата со превод $1.',
	'pt-deletepage-full-title' => 'Бришење на преводливата страница $1.',
	'pt-deletepage-invalid-title' => 'Наведената страница е неважечка.',
	'pt-deletepage-invalid-text' => 'Наведената страница не е преводлива, ниту пак нејзин превод.',
	'pt-deletepage-action-check' => 'Список на страници за бришење',
	'pt-deletepage-action-perform' => 'Изврши го бришењето',
	'pt-deletepage-action-other' => 'Смени цел',
	'pt-deletepage-lang-legend' => 'Избриши ја страницата за превод',
	'pt-deletepage-full-legend' => 'Избриши преводлива страница',
	'pt-deletepage-any-legend' => 'Избриши преводлива страница или нејзин превод',
	'pt-deletepage-current' => 'Име на страницата:',
	'pt-deletepage-reason' => 'Причина:',
	'pt-deletepage-subpages' => 'Избриши ги сите потстраници',
	'pt-deletepage-list-pages' => 'Список на страници за бришење',
	'pt-deletepage-list-translation' => 'Страници со превод',
	'pt-deletepage-list-section' => 'Страници за поднаслови',
	'pt-deletepage-list-other' => 'Други потстраници',
	'pt-deletepage-list-count' => 'Вкупно $1 {{PLURAL:$1|страница|страници}} за бришење.',
	'pt-deletepage-full-logreason' => 'Дел од преводливата страница $1.',
	'pt-deletepage-lang-logreason' => 'Дел од страницата со превод $1.',
	'pt-deletepage-started' => 'Погледајте го [[Special:Log/pagetranslation|дневникот со преводи на страници]] за грешки и порака при завршувањето.',
	'pt-deletepage-intro' => 'Оваа специјална страница овозможува бришење на цели преводливи страници или преводи на еден јазик.
Бришењето не делува веднаш, бидејќи се бришат многу страници.
Неуспешните обиди ќе се заведуваат во [[Special:Log/pagetranslation|дневникот на страници за превод]] и ќе треба да се исправаат рачно.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'pagetranslation' => 'താളിന്റെ പരിഭാഷ',
	'tpt-template' => 'താൾ ഫലകം',
	'tpt-diff-old' => 'പഴയ എഴുത്ത്',
	'tpt-diff-new' => 'പുതിയ എഴുത്ത്',
	'tpt-badtitle' => 'താളിനു നൽകിയ പേര് ($1) സാധുവായ തലക്കെട്ട് അല്ല',
	'tpt-nosuchpage' => '$1 എന്ന താൾ നിലവിലില്ല.',
	'tpt-edit-failed' => 'താൾ പുതുക്കാൻ കഴിഞ്ഞില്ല: $1',
	'tpt-rev-discourage' => 'നിരുത്സാഹപ്പെടുത്തുക',
	'translate-tag-translate-link-desc' => 'ഈ താൾ പരിഭാഷപ്പെടുത്തുക',
	'tpt-languages-legend' => 'മറ്റു ഭാഷകൾ:',
	'pt-log-name' => 'താൾ പരിഭാഷാ രേഖ',
	'pt-movepage-block-subpage-exists' => 'ലക്ഷ്യം വെച്ച ഉപതാൾ [[:$2]] നിലവിലുണ്ട്.',
	'pt-movepage-list-pages' => 'മാറ്റേണ്ട താളുകളുടെ പട്ടിക',
	'pt-movepage-list-translation' => 'പരിഭാഷാ താളുകൾ',
	'pt-movepage-list-section' => 'ഉപവിഭാഗ താളുകൾ',
	'pt-movepage-list-other' => 'മറ്റ് ഉപതാളുകൾ',
	'pt-movepage-legend' => 'പരിഭാഷപ്പെടുത്താവുന്ന താൾ നീക്കുക',
	'pt-movepage-current' => 'ഇപ്പോഴത്തെ പേര്:',
	'pt-movepage-new' => 'പുതിയ പേര്:',
	'pt-movepage-reason' => 'കാരണം:',
	'pt-movepage-subpages' => 'എല്ലാ ഉപതാളുകളും മാറ്റുക',
	'pt-movepage-action-check' => 'മാറ്റൽ സാദ്ധ്യമാണോയെന്നു പരിശോധിക്കുക',
	'pt-movepage-action-perform' => 'മാറ്റുക',
	'pt-movepage-action-other' => 'ലക്ഷ്യം മാറ്റുക',
	'pt-deletepage-action-check' => 'മായ്ക്കേണ്ട താളുകളുടെ പട്ടിക നൽകുക',
	'pt-deletepage-action-perform' => 'മായ്ക്കൽ നടപ്പിൽ വരുത്തുക',
	'pt-deletepage-action-other' => 'ലക്ഷ്യം മാറ്റുക',
	'pt-deletepage-lang-legend' => 'പരിഭാഷാ താൾ മായ്ക്കുക',
	'pt-deletepage-full-legend' => 'പരിഭാഷപ്പെടുത്താവുന്ന താൾ മായ്ക്കുക',
	'pt-deletepage-current' => 'താളിന്റെ പേര്:',
	'pt-deletepage-reason' => 'കാരണം:',
	'pt-deletepage-subpages' => 'എല്ലാ ഉപതാളുകളും മായ്ക്കുക',
	'pt-deletepage-list-pages' => 'മായ്ക്കേണ്ട താളുകളുടെ പട്ടിക',
	'pt-deletepage-list-translation' => 'പരിഭാഷാ താളുകൾ',
	'pt-deletepage-list-section' => 'ഉപവിഭാഗ താളുകൾ',
	'pt-deletepage-list-other' => 'മറ്റ് ഉപതാളുകൾ',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'pt-movepage-reason' => 'Шалтгаан:',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'pagetranslation' => 'Penterjemahan laman',
	'right-pagetranslation' => 'Menandai versi-versi laman untuk diterjemah',
	'tpt-desc' => 'Sambungan untuk menterjemah laman-laman kandungan',
	'tpt-section' => 'Unit penterjemahan $1',
	'tpt-section-new' => 'Unit penterjemahan baru.
Nama: $1',
	'tpt-section-deleted' => 'Unit penterjemahan $1',
	'tpt-template' => 'Templat laman',
	'tpt-templatediff' => 'Templat laman telah berubah.',
	'tpt-diff-old' => 'Teks sebelumnya',
	'tpt-diff-new' => 'Teks baru',
	'tpt-submit' => 'Tandai versi ini untuk diterjemah',
	'tpt-sections-oldnew' => 'Unit penterjemahan yang baru dan sedia ada',
	'tpt-sections-deleted' => 'Unit penterjemahan yang dihapuskan',
	'tpt-sections-template' => 'Templat laman penterjemahan',
	'tpt-action-nofuzzy' => 'Jangan taksahkan terjemahan',
	'tpt-badtitle' => 'Nama laman yang diberikan ($1) bukan tajuk yang sah',
	'tpt-nosuchpage' => 'Laman $1 tidak wujud',
	'tpt-oldrevision' => '$2 bukan versi terkini laman [[$1]].
Hanya versi terkini boleh ditandai untuk penterjemahan.',
	'tpt-notsuitable' => 'Laman $1 tidak sesuai untuk diterjemah.
Pastikan ia ada tag <nowiki><translate></nowiki> dan sintaks yang sah.',
	'tpt-saveok' => 'Laman [[$1]] telah ditandai untuk penterjemahan dengan $2 unit penterjemahan.
Laman ini kini boleh <span class="plainlinks">[$3 diterjemah]</span>.',
	'tpt-badsect' => '"$1" bukan nama yang sah untuk unit penterjemahan $2.',
	'tpt-showpage-intro' => 'Di bawah tersenarainya bahagian yang baru, sedia ada dan terhapus.
Sebelum menandai versi ini untuk diterjemah, pastikan supaya perubahan kepada bahagian diminimumkan untuk mengelakkan beban yang tidak perlu untuk penterjemah.',
	'tpt-mark-summary' => 'Menandakan versi ini untuk diterjemah',
	'tpt-edit-failed' => 'Laman ini tidak dapat dikemas kini: $1',
	'tpt-duplicate' => 'Nama unit terjemahan $1 terguna lebih daripada sekali.',
	'tpt-already-marked' => 'Versi terkini laman ini sudah ditandai untuk diterjemah.',
	'tpt-unmarked' => 'Laman $1 tidak lagi ditandai untuk diterjemah.',
	'tpt-list-nopages' => 'Tiadanya laman yang ditandai untuk diterjemah atau sedia ditandai untuk diterjemah.',
	'tpt-new-pages-title' => 'Laman yang diusulkan untuk diterjemah',
	'tpt-old-pages-title' => 'Laman yang sedang diterjemah',
	'tpt-other-pages-title' => 'Laman yang rosak',
	'tpt-discouraged-pages-title' => 'Laman yang ditegah',
	'tpt-new-pages' => '{{PLURAL:$1|Laman|Laman-laman}} ini mengandungi teks dengan tag penterjemahan,
tetapi tiada versi yang ditandai untuk diterjemah.',
	'tpt-old-pages' => 'Suatu versi {{PLURAL:$1|laman|laman-laman}} ini telah ditandai untuk diterjemah.',
	'tpt-other-pages' => '{{PLURAL:$1|Satu versi lama laman|Versi lama laman-laman}} ini ditandai untuk diterjemah,
tetapi {{PLURAL:$1|versi|versi-versi}} terkini tidak boleh ditandai untuk diterjemah.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Laman|Laman-laman}} ini telah ditegah daripada mendapat penterjemahan selanjutnya.',
	'tpt-select-prioritylangs' => 'Senarai kod bahasa keutamaan yang diasingkan dengan koma:',
	'tpt-select-prioritylangs-force' => 'Sekat terjemahan ke bahasa-bahasa selain bahasa keutamaan',
	'tpt-select-prioritylangs-reason' => 'Sebab:',
	'tpt-sections-prioritylangs' => 'Bahasa keutamaan',
	'tpt-rev-mark' => 'tempah untuk penterjemahan',
	'tpt-rev-unmark' => 'gugurkan daripada penterjemahan',
	'tpt-rev-discourage' => 'tegah',
	'tpt-rev-encourage' => 'pulihkan',
	'tpt-rev-mark-tooltip' => 'Tempah versi terbaru laman ini untuk diterjemahkan.',
	'tpt-rev-unmark-tooltip' => 'Gugurkan laman ini daripada penterjemahan.',
	'tpt-rev-discourage-tooltip' => 'Tegah penterjemahan lanjutan bagi laman ini.',
	'tpt-rev-encourage-tooltip' => 'Pulihkan laman ini kepada penterjemahan biasa.',
	'translate-tag-translate-link-desc' => 'Terjemahkan laman ini',
	'translate-tag-markthis' => 'Tandai laman ini untuk diterjemah',
	'translate-tag-markthisagain' => 'Laman ini mengalami <span class="plainlinks">[$1 perubahan]</span> sejak kali terakhir <span class="plainlinks">[$2 ditandai untuk diterjemah]</span>.',
	'translate-tag-hasnew' => 'Laman ini mengalami <span class="plainlinks">[$1 perubahan]</span> yang belum ditandai untuk diterjemah.',
	'tpt-translation-intro' => 'Laman ini merupakan <span class="plainlinks">[$1 versi terjemahan]</span> laman [[$2]] dan penterjemahannya $3% siap.',
	'tpt-translation-intro-fuzzy' => 'Terjemahan yang lapuk ditandai sebegini.',
	'tpt-languages-legend' => 'Bahasa lain:',
	'tpt-languages-separator' => '&#160;•&#160;',
	'tpt-languages-zero' => 'Mulakan terjemahan dalam bahasa ini',
	'tpt-target-page' => 'Laman ini tidak boleh dikemaskini secara manual.
Laman ini merupakan terjemahan laman [[$1]], dan terjemahannya boleh dikemas kini dengan menggunakan [$2 alatan penterjemahan].',
	'tpt-unknown-page' => 'Ruang nama ini ditempah untuk penterjemahan laman kandungan.
Laman yang anda cuba sunting itu nampaknya tidak berpadan dengan sebarang laman yang ditandai untuk diterjemah.',
	'tpt-translation-restricted' => 'Penterjemahan halaman ini kepada bahasa ini disekat oleh pentadbir penterjemahan.

Sebab: $1',
	'tpt-discouraged-language-force' => 'Pentadbir penterjemahan telah mengehadkan bahasa-bahasa yang mana halaman ini boleh diterjemahkan. Bahasa ini bukan salah satu bahasa yang dibenarkan.

Sebab: $1',
	'tpt-discouraged-language' => 'Bahasa ini bukan bahasa keutamaan yang ditetapkan oleh pentadbir penterjemahan untuk halaman ini.

Sebab: $1',
	'tpt-render-summary' => 'Mengemas kini agar sepadan dengan versi baru laman sumber',
	'tpt-download-page' => 'Eksport laman dengan terjemahan',
	'pt-parse-open' => 'Tag &lt;translate> tidak seimbang.
Templat penterjemahan: <pre>$1</pre>',
	'pt-parse-close' => 'Tag &lt;/translate> tidak seimbang.
Templat penterjemahan: <pre>$1</pre>',
	'pt-parse-nested' => 'Bahagian &lt;translate> tersarang tidak dibenarkan.
Teks tag: <pre>$1</pre>',
	'pt-shake-multiple' => 'Berbilang penanda bahagian untuk satu bahagian.
Teks bahagian: <pre>$1</pre>',
	'pt-shake-position' => 'Penanda bahagian di kedudukan yang tidak dijangka.
Teks bahagian: <pre>$1</pre>',
	'pt-shake-empty' => 'Bahagian kosong untuk penanda $1.',
	'pt-log-header' => 'Log untuk tindakan yang berkaitan dengan sistem penterjemahan laman',
	'pt-log-name' => 'Log penterjemahan laman',
	'pt-log-mark' => '{{GENDER:$2|menandai}} semakan $3 pada laman "[[:$1]]" untuk diterjemahkan',
	'pt-log-unmark' => '{{GENDER:$2|membuang}} laman "[[:$1]]" daripada penterjemahan',
	'pt-log-moveok' => '{{GENDER:$2|menyiapkan}} penukaran nama laman boleh terjemah $1 kepada $3',
	'pt-log-movenok' => '{{GENDER:$2|menemui}} masalah ketika memindahkan [[:$1]] ke [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|menyiapkan}} penghapuskan laman boleh terjemah $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|menemui}} masalah ketika menghapuskan laman boleh terjemah [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|menyiapkan}} penghapuskan laman penterjemahan $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|menemui}} masalah ketika menghapuskan laman penterjemahan [[:$1]]',
	'pt-log-priority-langs-unset' => '{{GENDER:$2|menggugurkan}} bahasa keutamaan dari halaman boleh terjemah [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|menetapkan}} bahasa keutamaan untuk halaman boleh terjemah [[:$1]] kepada $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|mengehadkan}} bahasa untuk halaman boleh terjemah [[:$1]] kepada $3',
	'pt-movepage-title' => 'Alihkan laman boleh terjemah $1',
	'pt-movepage-blockers' => 'Laman boleh terjemah ini tidak boleh dipindahkan ke nama baru atas {{PLURAL:$1|ralat|ralat-ralat}} yang berikut:',
	'pt-movepage-block-base-exists' => 'Laman asas sasaran [[:$1]] wujud.',
	'pt-movepage-block-base-invalid' => 'Laman asas sasaran bukan tajuk yang sah.',
	'pt-movepage-block-tp-exists' => 'Laman penterjemahan sasaran [[:$2]] wujud.',
	'pt-movepage-block-tp-invalid' => 'Tajuk laman penterjemahan sasaran untuk [[:$1]] adalah tidak sah (terlalu panjang?).',
	'pt-movepage-block-section-exists' => 'Laman bahagian sasaran [[:$2]] wujud.',
	'pt-movepage-block-section-invalid' => 'Tajuk laman bahagian sasaran untuk [[:$1]] adalah tidak sah (terlalu panjang?).',
	'pt-movepage-block-subpage-exists' => 'Sublaman sasaran [[:$2]] wujud.',
	'pt-movepage-block-subpage-invalid' => 'Tajuk sublaman sasaran untuk [[:$1]] adalah tidak sah (terlalu panjang?).',
	'pt-movepage-list-pages' => 'Senarai laman untuk dipindahkan',
	'pt-movepage-list-translation' => 'Laman penterjemahan',
	'pt-movepage-list-section' => 'Laman bahagian',
	'pt-movepage-list-other' => 'Sublaman lain',
	'pt-movepage-list-count' => 'Sejumlah $1 laman untuk dipindahkan.',
	'pt-movepage-legend' => 'Pindahkan laman yang boleh diterjemah',
	'pt-movepage-current' => 'Nama sekarang:',
	'pt-movepage-new' => 'Nama baru:',
	'pt-movepage-reason' => 'Sebab:',
	'pt-movepage-subpages' => 'Pindahkan semua sublaman',
	'pt-movepage-action-check' => 'Periksa sama ada langkah ini boleh dilakukan',
	'pt-movepage-action-perform' => 'Lakukan pemindahan',
	'pt-movepage-action-other' => 'Tukar sasaran',
	'pt-movepage-intro' => 'Laman khas ini membolehkan anda untuk memindahkan laman-laman yang ditandai untuk diterjemah.
Tindakan pemindahan itu tidak meninggalkan kesan segera, kerana banyak laman yang perlu dipindahkan.
Sementara laman-laman berkenaan dipindahkan, anda tidak boleh berinteraksi dengan laman-laman yang terlibat.
Kegagalan akan dilogkan dalam [[Special:Log/pagetranslation|log penterjemahan laman]] dan perlu dibaiki dengan tangan.',
	'pt-movepage-logreason' => 'Sebahagian laman boleh terjemah $1.',
	'pt-movepage-started' => 'Laman asas kini telah dipindahkan.
Sila periksa [[Special:Log/pagetranslation|log penterjemahan laman]] untuk ralat dan mesej penyiapan.',
	'pt-locked-page' => 'Laman ini dikunci kerana laman boleh terjemah yang terlibat kini sedang dipindahkan.',
	'pt-deletepage-lang-title' => 'Menghapuskan laman penterjemahan $1.',
	'pt-deletepage-full-title' => 'Menghapuskan laman boleh terjemah $1.',
	'pt-deletepage-invalid-title' => 'Laman yang dinyatakan itu tidak sah.',
	'pt-deletepage-invalid-text' => 'Laman yang dinyatakan bukan halaman yang boleh diterjemah atau terjemahannya.',
	'pt-deletepage-action-check' => 'Senarai laman yang ingin dihapuskan',
	'pt-deletepage-action-perform' => 'Lakukan penghapusan',
	'pt-deletepage-action-other' => 'Tukar sasaran',
	'pt-deletepage-lang-legend' => 'Hapuskan laman penterjemahan',
	'pt-deletepage-full-legend' => 'Hapuskan laman yang boleh diterjemah',
	'pt-deletepage-any-legend' => 'Hapuskan laman yang boleh diterjemah, atau terjemahannya',
	'pt-deletepage-current' => 'Nama laman:',
	'pt-deletepage-reason' => 'Sebab:',
	'pt-deletepage-subpages' => 'Hapuskan semua sublaman',
	'pt-deletepage-list-pages' => 'Senarai laman untuk dihapuskan',
	'pt-deletepage-list-translation' => 'Laman penterjemahan',
	'pt-deletepage-list-section' => 'Laman bahagian',
	'pt-deletepage-list-other' => 'Sublaman lain',
	'pt-deletepage-list-count' => 'Sejumlah $1 laman untuk dihapuskan.',
	'pt-deletepage-full-logreason' => 'Sebahagian laman boleh terjemah $1.',
	'pt-deletepage-lang-logreason' => 'Sebahagian laman penterjemahan $1.',
	'pt-deletepage-started' => 'Sila periksa [[Special:Log/pagetranslation|log penterjemahan laman]] untuk ralat dan mesej penyiapan.',
	'pt-deletepage-intro' => 'Laman khas ini membolehkan anda untuk menghapuskan seluruh laman boleh terjemah dan terjemahannya di dalam satu bahasa.
Tindakan penghapusan itu tidak meninggalkan kesan segera, kerana banyak laman yang perlu dihapuskan.
Kegagalan akan dilogkan dalam [[Special:Log/pagetranslation|log penterjemahan laman]] dan perlu dibaiki dengan tangan.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'pagetranslation' => 'Traduzzjoni tal-paġni',
	'tpt-old-pages' => "Xi verżjonijiet ta' {{PLURAL:$1|din il-paġna ġiet immarkata|dawn il-paġni ġew immarkati}} għat-traduzzjoni.",
	'tpt-languages-legend' => 'Lingwi oħra:',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'tpt-diff-old' => 'Икелень текст',
	'tpt-diff-new' => 'Од текст',
	'translate-tag-translate-link-desc' => 'Йутавтык те лопанть',
	'tpt-languages-legend' => 'Лия кельтне:',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'translate-tag-translate-link-desc' => 'Tictlahtōlcuepāz inīn zāzanilli',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Audun
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 * @author Purodha
 */
$messages['nb'] = array(
	'pagetranslation' => 'Sideoversetting',
	'right-pagetranslation' => 'Merk versjoner av sider for oversettelse',
	'tpt-desc' => 'Utvidelse for oversetting av innholdssider',
	'tpt-section' => 'Oversettelsesenhet $1',
	'tpt-section-new' => 'Ny oversettelsesenhet.
Navn: $1',
	'tpt-section-deleted' => 'Oversettelsesenhet $1',
	'tpt-template' => 'Sidemal',
	'tpt-templatediff' => 'Sidemalen har blitt endret.',
	'tpt-diff-old' => 'Forrige tekst',
	'tpt-diff-new' => 'Ny tekst',
	'tpt-submit' => 'Marker denne versjonen for oversetting',
	'tpt-sections-oldnew' => 'Nye og eksisterende oversettelsesenheter',
	'tpt-sections-deleted' => 'Slettede oversettelsesenheter',
	'tpt-sections-template' => 'Mal for oversettelsesside',
	'tpt-action-nofuzzy' => 'Ikke ugyldiggjør oversettelser',
	'tpt-badtitle' => 'Det angitte sidenavnet ($1) er ikke en gyldig tittel',
	'tpt-nosuchpage' => 'Siden $1 finnes ikke',
	'tpt-oldrevision' => '$2 er ikke den siste versjonen av siden [[$1]].
Kun siste versjoner kan bli markert for oversettelse.',
	'tpt-notsuitable' => 'Side $1 er ikke egnet for oversettelse.
Sjekk at siden har <nowiki><translate></nowiki>-merket og har en gyldig syntaks.',
	'tpt-saveok' => 'Siden [[$1]] har blitt markert for oversettelse med {{PLURAL:$2|én oversettelsesenhet|$2 oversettelsesenheter}}.
Den kan nå bli <span class="plainlinks">[$3 oversatt]</span>.',
	'tpt-badsect' => '«$1» er ikke et gyldig navn for oversettelsesenheten $2.',
	'tpt-showpage-intro' => 'Nedenfor er nye, eksisterende og slettede avsnitt listet opp.
Før denne versjonen merkes for oversettelse, sjekk at endringene i avsnittene er minimert for å unngå unødvendig arbeid for oversetterne.',
	'tpt-mark-summary' => 'Markerte denne versjonen for oversettelse',
	'tpt-edit-failed' => 'Kunne ikke oppdatere siden: $1',
	'tpt-already-marked' => 'Den siste versjonen av denne siden har allerede blitt markert for oversettelse.',
	'tpt-unmarked' => 'Siden $1 er ikke lenger markert for oversettelse.',
	'tpt-list-nopages' => 'Ingen sider er markert for oversettelse, eller er klare for å bli markert for oversettelse.',
	'tpt-new-pages' => '{{PLURAL:$1|Denne siden|Disse sidene}} inneholder tekst med oversettelsesmerker, men ingen versjon av {{PLURAL:$1|denne siden|disse sidene}} er for tiden markert for oversettelse.',
	'tpt-old-pages' => 'En versjon av {{PLURAL:$1|denne siden|disse sidene}} har blitt markert for oversettelse.',
	'tpt-other-pages' => '{{PLURAL:$1|En gammel versjon av denne siden|Eldre versjoner av disse sidene}} er markert for oversettelse, men den siste versjonen kan ikke markeres for oversettelse.',
	'tpt-rev-unmark' => 'fjern denne siden fra oversettelse',
	'translate-tag-translate-link-desc' => 'Oversett denne siden',
	'translate-tag-markthis' => 'Merk denne siden for oversettelse',
	'translate-tag-markthisagain' => 'Denne siden har hatt <span class="plainlinks">[$1 endringer]</span> siden den sist ble <span class="plainlinks">[$2 markert for oversettelse]</span>.',
	'translate-tag-hasnew' => 'Denne siden inneholder <span class="plainlinks">[$1 endringer]</span> som ikke har blitt markert for oversettelse.',
	'tpt-translation-intro' => 'Denne siden er en <span class="plainlinks">[$1 oversatt versjon]</span> av en side [[$2]] og oversettelsen er $3% ferdig og oppdatert.',
	'tpt-translation-intro-fuzzy' => 'Utdaterte oversettelser er markert på denne måten.',
	'tpt-languages-legend' => 'Andre språk:',
	'tpt-target-page' => 'Denne siden kan ikke oppdateres manuelt.
Denne siden er en oversettelse av siden [[$1]] og oversettelsen kan bli oppdatert ved å bruke [$2 oversettelsesverktøyet].',
	'tpt-unknown-page' => 'Dette navnerommet er reservert for oversettelser av innholdssider.
Denne siden som du prøver å redigere ser ikke ut til å samsvare med noen av sidene som er markert for oversettelse.',
	'tpt-render-summary' => 'Oppdaterer for å svare til ny versjon av kildesiden',
	'tpt-download-page' => 'Eksporter side med oversettelser',
	'pt-parse-open' => 'Ubalansert &lt;translate>-element.
Oversettelsesmal: <pre>$1</pre>',
	'pt-parse-close' => 'Ubalansert &lt;/translate>-element.
Oversettelsesmal: <pre>$1</pre>',
	'pt-parse-nested' => 'Nøstede &lt;translate>-seksjoner er ikke tillatt.
Elementtekst: <pre>$1</pre>',
	'pt-shake-multiple' => 'Flere avsnittsmarkører for en seksjon.
Seksjonstekst: <pre>$1</pre>',
	'pt-shake-position' => 'Seksjonsmarkører i uventede posisjoner.
Seksjonstekst: <pre>$1</pre>',
	'pt-shake-empty' => 'Tøm seksjon for markør $1.',
	'pt-log-header' => 'Logg over handlinger relatert til systemet for sideoversettelser',
	'pt-log-name' => 'Logg for sideoversettelser',
	'pt-log-mark' => '{{GENDER:$2|markerte}} revisjon $3 av side «[[:$1]]» for oversettelse',
	'pt-log-unmark' => '{{GENDER:$2|fjernet}} side «[[:$1]]» fra oversettelse',
	'pt-log-moveok' => '{{GENDER:$2|fullførte}} omdøping av oversettbar side $1 til et nytt navn',
	'pt-log-movenok' => '{{GENDER:$2|støtte på}} et problem under flytting av [[:$1]] til [[:$3]]',
	'pt-movepage-title' => 'Flytt oversettbar side $1',
	'pt-movepage-blockers' => 'Den oversettbare siden kan ikke flyttes til et nytt navn på grunn av følgende {{PLURAL:$1|feil|feil}}:',
	'pt-movepage-block-base-exists' => 'Målbasesiden [[:$1]] finnes.',
	'pt-movepage-block-base-invalid' => 'Målbasesiden er ikke en gyldig tittel.',
	'pt-movepage-block-tp-exists' => 'Måloversettelsessiden [[:$2]] finnes.',
	'pt-movepage-block-tp-invalid' => 'Måloversettelsessidetittelen for [[:$1]] ville vært ugyldig (for lang?).',
	'pt-movepage-block-section-exists' => 'Målavsnittssiden [[:$2]] finnes.',
	'pt-movepage-block-section-invalid' => 'Målavsnittssidetittelen for [[:$1]] ville vært ugyldig (for lang?).',
	'pt-movepage-block-subpage-exists' => 'Målundersiden [[:$2]] finnes.',
	'pt-movepage-block-subpage-invalid' => 'Målundersidetittelen for [[:$1]] ville vært ugyldig (for lang?).',
	'pt-movepage-list-pages' => 'Liste over sider å flytte',
	'pt-movepage-list-translation' => 'Oversettelsessider',
	'pt-movepage-list-section' => 'Avsnittssider',
	'pt-movepage-list-other' => 'Andre undersider',
	'pt-movepage-list-count' => 'Totalt $1 {{PLURAL:$1|side|sider}} å flytte.',
	'pt-movepage-legend' => 'Flytt oversettbar side',
	'pt-movepage-current' => 'Nåværende navn:',
	'pt-movepage-new' => 'Nytt navn:',
	'pt-movepage-reason' => 'Årsak:',
	'pt-movepage-subpages' => 'Flytt alle undersider',
	'pt-movepage-action-check' => 'Kontroller om flyttingen er mulig',
	'pt-movepage-action-perform' => 'Utfør flyttingen',
	'pt-movepage-action-other' => 'Endre mål',
	'pt-movepage-intro' => 'Denne spesialsiden tillater deg å flytte sider som er markert for oversettelse.
Flyttehandlingen vil ikke skje umiddelbart fordi mange sider må flyttes.
Mens sidene flyttes er det ikke mulig å samhandle med gjeldende sider.
Feil vil bli logget i [[Special:Log/pagetranslation|sideoversettelsesloggen]] og de må repareres for hånd.',
	'pt-movepage-logreason' => 'Del av oversettbar side $1.',
	'pt-movepage-started' => 'Basesiden har nå blitt flyttet.
Kontroller [[Special:Log/pagetranslation|sideoversettelsesloggen]] for feil- og fullføringsmeldinger.',
	'pt-locked-page' => 'Denne siden er låst fordi oversettelsessiden blir flyttet nå.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'pagetranslation' => 'Paginavertaling',
	'right-pagetranslation' => "Versies van pagina's voor de vertaling markeren",
	'tpt-desc' => "Uitbreiding voor het vertalen van wikipagina's",
	'tpt-section' => 'Vertaaleenheid $1',
	'tpt-section-new' => 'Nieuwe vertaaleenheid.
Naam: $1',
	'tpt-section-deleted' => 'Vertaaleenheid $1',
	'tpt-template' => 'Paginasjabloon',
	'tpt-templatediff' => 'Het paginasjabloon is gewijzigd.',
	'tpt-diff-old' => 'Vorige tekst',
	'tpt-diff-new' => 'Nieuwe tekst',
	'tpt-submit' => 'Deze versie voor vertaling markeren',
	'tpt-sections-oldnew' => 'Nieuwe en bestaande vertaaleenheden',
	'tpt-sections-deleted' => 'Verwijderde vertaaleenheden',
	'tpt-sections-template' => 'Vertaalpaginasjabloon',
	'tpt-action-nofuzzy' => 'Vertalingen niet als verouderd markeren',
	'tpt-badtitle' => 'De opgegeven paginanaam ($1) is geen geldige paginanaam',
	'tpt-nosuchpage' => 'Pagina "$1" bestaat niet',
	'tpt-oldrevision' => '$2 is niet de meest recente versie van de pagina "[[$1]]".
Alleen de meest recente versie kan voor vertaling gemarkeerd worden.',
	'tpt-notsuitable' => 'De pagina "$1" kan niet voor vertaling gemarkeerd worden.
Zorg ervoor dat de labels <nowiki><translate></nowiki> geplaatst zijn en dat deze juist zijn toegevoegd.',
	'tpt-saveok' => 'De pagina [[$1]] is gemarkeerd voor vertaling met $2 te vertalen {{PLURAL:$2|vertaaleenheid|vertaaleenheden}}.
De pagina kan nu  <span class="plainlinks">[$3 vertaald]</span> worden.',
	'tpt-badsect' => '"$1" is geen geldige naam voor vertaaleenheid $2.',
	'tpt-showpage-intro' => 'Hieronder zijn nieuwe, bestaande en verwijderde secties opgenomen.
Controleer voordat u deze versie voor vertaling markeert of de wijzigingen aan de secties zo klein mogelijk zijn om onnodig werk voor vertalers te voorkomen.',
	'tpt-mark-summary' => 'Heeft deze versie voor vertaling gemarkeerd',
	'tpt-edit-failed' => 'De pagina "$1" kon niet bijgewerkt worden.',
	'tpt-duplicate' => 'De vertaaleenheid "$1" wordt meer dan eens gebruikt.',
	'tpt-already-marked' => 'De meest recente versie van deze pagina is al gemarkeerd voor vertaling.',
	'tpt-unmarked' => 'Pagina "$1" is niet langer te vertalen.',
	'tpt-list-nopages' => "Er zijn geen pagina's gemarkeerd voor vertaling, noch klaar om gemarkeerd te worden voor vertaling.",
	'tpt-new-pages-title' => 'Voorgesteld voor vertaling',
	'tpt-old-pages-title' => 'Te vertalen',
	'tpt-other-pages-title' => 'Kapot',
	'tpt-discouraged-pages-title' => 'Ontmoedigd',
	'tpt-new-pages' => "Deze {{PLURAL:$1|pagina bevat|pagina's bevatten}} tekst met vertalingslabels, maar van deze {{PLURAL:$1|pagina|pagina's}} is geen versie gemarkeerd voor vertaling.",
	'tpt-old-pages' => "Er is al een versie van deze {{PLURAL:$1|pagina|pagina's}} gemarkeerd voor vertaling.",
	'tpt-other-pages' => '{{PLURAL:$1|Een oude versie van deze pagina is|Oude versies van deze pagina zijn}} gemarkeerd voor vertaling,
maar de laatste {{PLURAL:$1|versie kan|versies kunnen}} niet gemarkeerd worden voor vertaling.',
	'tpt-discouraged-pages' => "Voor deze {{PLURAL:$1|pagina|pagina's}} wordt vertalen ontmoedigd.",
	'tpt-select-prioritylangs' => "Voorkeurstalen (taalcodes door komma's gescheiden):",
	'tpt-select-prioritylangs-force' => 'Vertaling beperken tot alleen deze talen',
	'tpt-select-prioritylangs-reason' => 'Reden voor het instellen van deze reeks voorkeurstalen (optioneel):',
	'tpt-sections-prioritylangs' => 'Voorkeurstalen',
	'tpt-rev-mark' => 'voor vertaling markeren',
	'tpt-rev-unmark' => 'als te vertalen pagina verwijderen',
	'tpt-rev-discourage' => 'ontmoedigen',
	'tpt-rev-encourage' => 'herstellen',
	'tpt-rev-mark-tooltip' => 'De laatste versie van deze pagina voor vertaling markeren.',
	'tpt-rev-unmark-tooltip' => 'Deze pagina niet langer laten vertalen.',
	'tpt-rev-discourage-tooltip' => 'Vertalen van deze pagina ontmoedigen.',
	'tpt-rev-encourage-tooltip' => 'Normale vertaling van deze pagina opnieuw instellen.',
	'translate-tag-translate-link-desc' => 'Deze pagina vertalen',
	'translate-tag-markthis' => 'Deze pagina voor vertaling markeren',
	'translate-tag-markthisagain' => 'Deze pagina is <span class="plainlinks">[$1 gewijzigd]</span> sinds deze voor het laatst <span class="plainlinks">[$2 voor vertaling gemarkeerd]</span> is geweest.',
	'translate-tag-hasnew' => 'Aan deze pagina zijn <span class="plainlinks">[$1 wijzigingen]</span> gemaakt die niet voor vertaling zijn gemarkeerd.',
	'tpt-translation-intro' => 'Deze pagina is een <span class="plainlinks">[$1 vertaalde versie]</span> van de pagina [[$2]] en de vertaling is $3% compleet en bijgewerkt.',
	'tpt-translation-intro-fuzzy' => 'Verouderde vertalingen worden zo weergegeven.',
	'tpt-languages-legend' => 'Andere talen:',
	'tpt-languages-zero' => 'Vertaling voor deze taal starten',
	'tpt-target-page' => 'Deze pagina kan niet handmatig worden bijgewerkt.
Deze pagina is een vertaling van de pagina [[$1]].
De vertaling kan bijgewerkt worden via de [$2 vertaalhulpmiddelen].',
	'tpt-unknown-page' => "Deze naamruimte is gereserveerd voor de vertalingen van van pagina's.
De pagina die u probeert te bewerken lijkt niet overeen te komen met een te vertalen pagina.",
	'tpt-translation-restricted' => 'De vertaling van deze berichtengroep naar deze taal is voorkomen door de vertalingenbeheerder.',
	'tpt-discouraged-language-force' => 'De vertalingenbeheerder heeft de talen in welke deze berichtengroep kan vertaald worden beperkt. Deze taal maakt geen deel uit van die talen.

Reden voor de beperking: $1',
	'tpt-discouraged-language' => 'De vertalingenbeheerder heeft deze taal niet bij de prioritaire talen ingesteld voor deze berichtengroep

Reden voor prioriteitinstelling: $1',
	'tpt-render-summary' => 'Bijgewerkt vanwege een nieuwe basisversie van de bronpagina',
	'tpt-download-page' => 'Pagina met vertalingen exporteren',
	'pt-parse-open' => 'Ongebalanceerd label &lt;translate>.
Vertaalsjabloon: <pre>$1</pre>',
	'pt-parse-close' => 'Ongebalanceerd label &lt;translate>.
Vertaalsjabloon: <pre>$1</pre>',
	'pt-parse-nested' => 'Geneste &lt;translate>-secties zijn niet toegestaan.
Labeltekst: <pre>$1</pre>',
	'pt-shake-multiple' => 'Meerdere sectiemarkeringen voor een enkele sectie aangetroffen.
Sectietekst: <pre>$1</pre>',
	'pt-shake-position' => 'Sectiemarkeringen op een onverwachte plaats.
Sectietekst: <pre>$1</pre>',
	'pt-shake-empty' => 'Lege sectie voor markering $1.',
	'pt-log-header' => 'Logboek voor handelingen rerelateerd aan het paginavertalingsysteem',
	'pt-log-name' => 'Logboek paginavertaling',
	'pt-log-mark' => '{{GENDER:$2|heeft}} versie $3 van pagina "[[:$1]]" voor vertaling gemarkeerd',
	'pt-log-unmark' => '{{GENDER:$2|heeft}} de vertalingsmarkering voor pagina "[[:$1]]" verwijderd',
	'pt-log-moveok' => '{{GENDER:$2|hernoemde}} de te vertalen pagina $1 naar $3',
	'pt-log-movenok' => '{{GENDER:$2|is}} een probleem tegengekomen bij het hernoemen van [[:$1]] naar [[:$3]]',
	'pt-log-delete-full-ok' => 'heeft het verwijderen van de vertaalbare pagina $1 {{GENDER:$2|afgerond}}',
	'pt-log-delete-full-nok' => 'is een probleem {{GENDER:$2|tegengekomen}} tijdens het verwijderen van de vertaalbare pagina [[:$1]]',
	'pt-log-delete-lang-ok' => 'heeft het verwijderen van de vertaalde pagina $1 {{GENDER:$2|afgerond}}',
	'pt-log-delete-lang-nok' => 'is een probleem {{GENDER:$2|tegengekomen}} tijdens het verwijderen van de vertaalde pagina [[:$1]]',
	'pt-log-priority-langs' => '{{GENDER:$2|heeft}} de prioritaire talen voor de vertaalbare pagina [[:$1]] ingesteld op $3',
	'pt-log-priority-langs-force' => '{{GENDER:$2|heeft}} de talen voor de vertaalbare pagina [[:$1]] beperkt tot $3',
	'pt-movepage-title' => 'Te vertalen pagina $1 hernoemen',
	'pt-movepage-blockers' => 'De te vertalen pagina kan niet hernoemd worden vanwege de volgende {{PLURAL:$1|foutmelding|foutmeldingen}}:',
	'pt-movepage-block-base-exists' => 'De doelpagina [[:$1]] bestaat al.',
	'pt-movepage-block-base-invalid' => 'De doelpagina is geen geldige paginanaam.',
	'pt-movepage-block-tp-exists' => 'De te vertalen doelpagina [[:$2]] bestaat al.',
	'pt-movepage-block-tp-invalid' => 'De te vertalen doelpaginanaam voor [[:$1]] is ongeldig (te lang?).',
	'pt-movepage-block-section-exists' => 'De doelpagina voor de sectie [[:$2]] bestaat al.',
	'pt-movepage-block-section-invalid' => 'De doelpagina voor de sectienaam voor [[:$1]] is ongeldig (te lang?).',
	'pt-movepage-block-subpage-exists' => 'De doelsubpagina [[:$2]] bestaat al.',
	'pt-movepage-block-subpage-invalid' => 'De doelsubpaginanaam voor [[:$1]] is ongeldig (te lang?).',
	'pt-movepage-list-pages' => "Lijst van te hernoemen pagina's",
	'pt-movepage-list-translation' => "Te vertalen pagina's",
	'pt-movepage-list-section' => "Sectiepagina's",
	'pt-movepage-list-other' => "Overige subpagina's",
	'pt-movepage-list-count' => "In totaal {{PLURAL:$1|is er $1 pagina|zijn er $1 pagina's}} te hernoemen.",
	'pt-movepage-legend' => 'Te vertalen pagina hernoemen',
	'pt-movepage-current' => 'Huidige naam:',
	'pt-movepage-new' => 'Nieuwe naam:',
	'pt-movepage-reason' => 'Reden:',
	'pt-movepage-subpages' => "Alle subpagina's hernoemen",
	'pt-movepage-action-check' => 'Controleren of hernoemen mogelijk is',
	'pt-movepage-action-perform' => 'Hernoemen',
	'pt-movepage-action-other' => 'Doel wijzigen',
	'pt-movepage-intro' => "Via deze speciale pagina kunt u een te vertalen pagina's hernoemen.
Dit wordt niet direct gedaan, omdat het mogelijk is dat heel veel pagina's hernoemd moeten worden.
Terwijl de pagina's worden hernoemd, is het niet mogelijk handelingen uit te voeren op betrokken pagina's.
In het [[Special:Log/pagetranslation|logboek paginavertaling]] worden fouten opgeslagen die op een later moment handmatig hersteld kunnen worden.",
	'pt-movepage-logreason' => 'Onderdeel van te vertalen pagina $1.',
	'pt-movepage-started' => 'De basispagina is nu hernoemd.
Kijk in het [[Special:Log/pagetranslation|logboek paginavertaling]] na of er fouten zijn gemeld en of de complete handeling is afgerond.',
	'pt-locked-page' => 'Deze pagina kan niet gewijzigd worden omdat de te vertalen pagina op dit moment hernoemd wordt.',
	'pt-deletepage-lang-title' => 'De vertaalde pagina $1 wordt verwijderd.',
	'pt-deletepage-full-title' => 'De vertaalbare pagina $1 wordt verwijderd.',
	'pt-deletepage-invalid-title' => 'De opgegeven pagina is ongeldig.',
	'pt-deletepage-invalid-text' => 'De opgegeven pagina is geen vertaalbare pagina en ook geen vertaalde pagina.',
	'pt-deletepage-action-check' => "Lijst met te verwijderen pagina's",
	'pt-deletepage-action-perform' => 'Doorgaan met verwijderen',
	'pt-deletepage-action-other' => 'Doel wijzigen',
	'pt-deletepage-lang-legend' => 'Vertaalde pagina verwijderen',
	'pt-deletepage-full-legend' => 'Vertaalbare pagina verwijderen',
	'pt-deletepage-any-legend' => 'De vertaalbare of vertaalde pagina verwijderen',
	'pt-deletepage-current' => 'Paginanaam:',
	'pt-deletepage-reason' => 'Reden:',
	'pt-deletepage-subpages' => "Alle subpagina's verwijderen",
	'pt-deletepage-list-pages' => "Lijst met te verwijderen pagina's",
	'pt-deletepage-list-translation' => "Vertaalde pagina's",
	'pt-deletepage-list-section' => "Sectiepagina's",
	'pt-deletepage-list-other' => "Andere subpagina's",
	'pt-deletepage-list-count' => "In totaal {{PLURAL:$1|wordt er $1 pagina|worden er $1 pagina's}} verwijderd.",
	'pt-deletepage-full-logreason' => 'Onderdeel van te vertalen pagina $1.',
	'pt-deletepage-lang-logreason' => 'Onderdeel van de vertaalde pagina $1.',
	'pt-deletepage-started' => 'Controleer het [[Special:Log/pagetranslation|Logboek paginavertaling]] op fouten en of de opdracht is afgerond.',
	'pt-deletepage-intro' => "Via deze pagina kunt u vertaalbare pagina's of vertalingen in een taal verwijderen.
Het verwijderen vindt niet per direct plaats, omdat het mogelijk is dat vele pagina's verwijderd moeten worden.
Fouten worden opgenomen in het [[Special:Log/pagetranslation|Logboek paginavertaling]] en deze moeten handmatig gecorrigeerd worden.",
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Eirik
 * @author Frokor
 * @author Gunnernett
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'pagetranslation' => 'Sideomsetjing',
	'right-pagetranslation' => 'Merk versjonar av sider for omsetjing',
	'tpt-desc' => 'Utviding for omsetjing av innhaldssider',
	'tpt-section' => 'Omsetjingseining $1',
	'tpt-section-new' => 'Ny omsetjingseining. Namn: $1',
	'tpt-section-deleted' => 'Omsetjingseining $1',
	'tpt-template' => 'Sidemal',
	'tpt-templatediff' => 'Sidemalen har vorte endra.',
	'tpt-diff-old' => 'Førre teksten',
	'tpt-diff-new' => 'Ny tekst',
	'tpt-submit' => 'Merk denne versjonen for omsetjing',
	'tpt-sections-oldnew' => 'Nye og eksisterande omsetjingseiningar',
	'tpt-sections-deleted' => 'Sletta omsetjingseiningar',
	'tpt-sections-template' => 'Mal for omsetjingsside',
	'tpt-badtitle' => 'Det gjevne sidenamnet ($1) er ikkje ein gyldig tittel',
	'tpt-oldrevision' => '$2 er ikkje den siste versjonen av sida [[$1]].
Berre siste versjonar kan verta markert for omsetjing.',
	'tpt-notsuitable' => 'Side $1 er ikkje høveleg for omsetjing.
Sjekk at sida er merkt med <nowiki><translate></nowiki>-merke og har ein gyldig syntaks.',
	'tpt-saveok' => 'Sida [[$1]] er vorten merkt for omsetjing med {{PLURAL:$2|éi omsetjingseining|$2 omsetjingseiningar}}. Ho kan no verta <span class="plainlinks">[$3 sett om]</span>.',
	'tpt-badsect' => '«$1» er ikkje eit gyldig namn for omsetjingseininga $2.',
	'tpt-mark-summary' => 'Markerte denne versjonen for omsetjing',
	'tpt-edit-failed' => 'Kunne ikkje oppdatera sida: $1',
	'tpt-already-marked' => 'Den siste versjonen av denne sida har allereie vorte markert for omsetjing.',
	'tpt-list-nopages' => 'Ingen sider er markerte for omsetjing, eller klar til å verta markert for omsetjing.',
	'tpt-old-pages' => 'Ein versjon av {{PLURAL:$1|denne sida|desse sidene}} er vorten merkt for omsetjing.',
	'translate-tag-translate-link-desc' => 'Set om denne sida',
	'translate-tag-markthis' => 'Merk denne sida for omsetjing',
	'tpt-translation-intro-fuzzy' => 'Utdaterte omsetjingar er merkte på dette viset.',
	'tpt-languages-legend' => 'Andre språk:',
	'tpt-render-summary' => 'Oppdatering for å svara til ny versjon av kjeldesida',
	'tpt-download-page' => 'Eksporter side med omsetjingar',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'pagetranslation' => 'Traduccion de paginas',
	'right-pagetranslation' => 'Marcar de versions de paginas per èsser traduchas',
	'tpt-desc' => 'Extension per traduire de paginas de contengut',
	'tpt-section' => 'Unitat de traduccion $1',
	'tpt-section-new' => 'Unitat de traduccion novèla. Nom : $1',
	'tpt-section-deleted' => 'Unitat de traduccion $1',
	'tpt-template' => 'Modèl de pagina',
	'tpt-templatediff' => 'Lo modèl de pagina a cambiat.',
	'tpt-diff-old' => 'Tèxte precedent',
	'tpt-diff-new' => 'Tèxte novèl',
	'tpt-submit' => 'Marcar aquesta version per èsser traducha',
	'tpt-sections-oldnew' => 'Unitats de traduccion novèlas e existentas',
	'tpt-sections-deleted' => 'Unitats de traduccion suprimidas',
	'tpt-sections-template' => 'Modèl de pagina de traduccion',
	'tpt-badtitle' => 'Lo nom de pagina donada ($1) es pas un títol valid',
	'tpt-oldrevision' => '$2 es pas la darrièra version de la pagina [[$1]].
Sola la darrièra version de la pagina pòt èsser marcada per èsser traducha.',
	'tpt-notsuitable' => "La pagina $1 conven pas per èsser traducha.
Siatz segur(a) que conten la balisa <nowiki><translate></nowiki> e qu'a una sintaxi corrècta.",
	'tpt-saveok' => 'La pagina « $1 » es estada marcada per èsser traducha amb $2 {{PLURAL:$2|unitat de traduccion|unitats de traduccion}}.
La pagina pòt èsser <span class="plainlinks">[$3 traducha]</span> tre ara.',
	'tpt-badsect' => '« $1 » es pas un nom valid per una unitat de traduccion $2.',
	'tpt-showpage-intro' => "Çaijós, las traduccions novèlas, las qu'existisson e las suprimidas.
Abans de marcar aquestas versions per èsser traduchas, verificatz que las modificacions a las seccions son minimizadas per evitar de trabalh inutil als traductors.",
	'tpt-mark-summary' => 'Aquesta version es estada marcada per èsser traducha',
	'tpt-edit-failed' => 'Impossible de metre a jorn la pagina $1',
	'tpt-already-marked' => "La darrièra version d'aquesta pagina ja es estada marcada per èsser traducha.",
	'tpt-list-nopages' => "Cap de pagina es pas estada marcada per èsser traducha o prèsta per l'èsser.",
	'tpt-new-pages' => "{{PLURAL:$1|Aquesta pagina conten|Aquestas paginas contenon}} de tèxte amb de balisas de traduccion, mas cap de version d'{{PLURAL:$1|aquesta pagina es pas marcada per èsser traducha|aquestas paginas son pas marcadas per èsser traduchas}}.",
	'tpt-old-pages' => "De versions d'{{PLURAL:$1|aquesta pagina|aquestas paginas}} son estadas marcadas per èsser traduchas.",
	'translate-tag-translate-link-desc' => 'Traduire aquesta pagina',
	'translate-tag-markthis' => 'Marcar aquesta pagina per èsser traducha',
	'translate-tag-markthisagain' => 'Aquesta pagina a agut <span class="plainlinks">[$1 de modificacions]</span> dempuèi qu’es estada darrièrament <span class="plainlinks">[$2 marcada per èsser traducha]</span>.',
	'translate-tag-hasnew' => 'Aquesta pagina conten <span class="plainlinks">[$1 de modificacions]</span> que son pas marcadas per la traduccion.',
	'tpt-translation-intro' => 'Aquesta pagina es una <span class="plainlinks">[$1 traduccion]</span> de la pagina [[$2]] e la traduccion es completada a $3 % e a jorn.',
	'tpt-translation-intro-fuzzy' => 'Las traduccions obsolètas son marcadas atal.',
	'tpt-languages-legend' => 'Autras lengas :',
	'tpt-target-page' => "Aquesta pagina pòt pas èsser mesa a jorn manualament.
Es una version traducha de [[$1]] e la traduccion pòt èsser mesa a jorn en utilizant [$2 l'esplech de traduccion].",
	'tpt-unknown-page' => "Aqueste espaci de noms es reservat per la traduccion de paginas.
La pagina qu'ensajatz de modificar sembla pas correspondre a cap de pagina marcada per èsser traducha.",
	'tpt-render-summary' => 'Mesa a jorn per èsser en acòrd amb la version novèla de la font de la pagina',
	'tpt-download-page' => 'Exportar la pagina amb sas traduccions',
	'pt-movepage-list-translation' => 'Paginas de traduccion',
	'pt-movepage-new' => 'Nom novèl :',
	'pt-movepage-reason' => 'Motiu :',
	'pt-movepage-action-perform' => 'Tornar nomenar',
	'pt-movepage-action-other' => 'Cambiar la cibla',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'pagetranslation' => 'ପୃଷ୍ଠା ଅନୁବାଦ',
	'tpt-template' => 'ପୃଷ୍ଠା ଛାଞ୍ଚ',
	'tpt-languages-legend' => 'ଅଲଗା ଭାଷାସବୁ:',
	'pt-movepage-list-translation' => 'ଅନୁବାଦ ପୃଷ୍ଠାସବୁ',
	'pt-movepage-list-other' => 'ଅନ୍ୟ ଉପପୃଷ୍ଠାସବୁ',
	'pt-movepage-legend' => 'ଅନୁବାଦ ହୋଇପାରୁଥିବା ପୃଷ୍ଠାଗୁଡିକୁ ଘୁଞ୍ଚାଇବେ',
	'pt-movepage-current' => 'ବର୍ତମାନର ନାମ',
	'pt-movepage-new' => 'ନୂଆ  ନାମ',
	'pt-movepage-reason' => 'କାରଣ :',
	'pt-deletepage-current' => 'ପୃଷ୍ଠା ନାମ:',
	'pt-deletepage-reason' => 'କାରଣ:',
	'pt-deletepage-list-section' => 'ଅନୁଭାଗ ପୃଷ୍ଠାସବୁ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'pagetranslation' => 'Iwwersetzing vun Bledder',
	'tpt-template' => 'Moddel fer des Blatt',
	'translate-tag-translate-link-desc' => 'Des Blatt iwwersetze',
	'tpt-languages-legend' => 'Annere Schprooche:',
	'pt-movepage-new' => 'Neier Naame:',
	'pt-movepage-reason' => 'Grund:',
	'pt-deletepage-current' => 'Naame vum Blatt:',
	'pt-deletepage-reason' => 'Grund:',
);

/** Polish (Polski)
 * @author BeginaFelicysym
 * @author Deejay1
 * @author Equadus
 * @author Leinad
 * @author Olgak85
 * @author Sp5uhe
 * @author ToSter
 * @author Woytecr
 */
$messages['pl'] = array(
	'pagetranslation' => 'Tłumaczenie strony',
	'right-pagetranslation' => 'Oznaczanie wersji stron do przetłumaczenia',
	'tpt-desc' => 'Rozszerzenie pozwalające tłumaczyć strony treści',
	'tpt-section' => 'Jednostka tłumaczenia $1',
	'tpt-section-new' => 'Nowa jednostka tłumaczenia.
Nazwa – $1',
	'tpt-section-deleted' => 'Jednostka tłumaczenia $1',
	'tpt-template' => 'Szablon strony',
	'tpt-templatediff' => 'Szablon strony został zmieniony.',
	'tpt-diff-old' => 'Poprzedni tekst',
	'tpt-diff-new' => 'Nowy tekst',
	'tpt-submit' => 'Oznacz tę wersję do przetłumaczenia',
	'tpt-sections-oldnew' => 'Nowe i istniejące jednostki tłumaczenia',
	'tpt-sections-deleted' => 'Usunięte jednostki tłumaczenia',
	'tpt-sections-template' => 'Szablon strony tłumaczenia',
	'tpt-action-nofuzzy' => 'Nie unieważniaj tłumaczeń',
	'tpt-badtitle' => 'Podana nazwa strony ($1) nie jest dozwolonym tytułem',
	'tpt-nosuchpage' => 'Strona $1 nie istnieje',
	'tpt-oldrevision' => '$2 nie jest najnowszą wersją strony [[$1]].
Tylko najnowsze wersje mogą być oznaczane do tłumaczenia.',
	'tpt-notsuitable' => 'Strona $1 nie nadaje się do tłumaczenia.
Upewnij się, że ma znaczniki <nowiki><translate></nowiki> i właściwą składnię.',
	'tpt-saveok' => 'Strona [[$1]] została oznaczona do tłumaczenia razem z $2 {{PLURAL:$2|jednostką|jednostkami}} tłumaczenia.
Można ją teraz <span class="plainlinks">[$3 przetłumaczyć]</span>.',
	'tpt-badsect' => '„$1” nie jest dozwoloną nazwą jednostki tłumaczenia $2.',
	'tpt-showpage-intro' => 'Poniżej wypisane są nowe, istniejące i usunięte sekcje.
Przed oznaczeniem tej wersji do tłumaczenia, aby uniknąć niepotrzebnej pracy tłumaczy, sprawdź czy zmiany w sekcjach zostały zminimalizowane.',
	'tpt-mark-summary' => 'Oznaczono tę wersję do tłumaczenia',
	'tpt-edit-failed' => 'Nie udało się zaktualizować strony $1',
	'tpt-duplicate' => 'Nazwa jednostki tłumaczenia  $1  jest używana więcej niż jeden raz.',
	'tpt-already-marked' => 'Najnowsza wersja tej strony już wcześniej została oznaczona do tłumaczenia.',
	'tpt-unmarked' => 'Strona $1 nie będzie dłużej oznaczona jako przeznaczona do tłumaczenia.',
	'tpt-list-nopages' => 'Nie oznaczono stron do tłumaczenia i nie ma stron gotowych do oznaczenia do tłumaczenia.',
	'tpt-new-pages-title' => 'Strony proponowane do tłumaczenia',
	'tpt-old-pages-title' => 'Strony będące w tłumaczeniu',
	'tpt-other-pages-title' => 'Uszkodzone strony',
	'tpt-discouraged-pages-title' => 'Strony odradzane',
	'tpt-new-pages' => '{{PLURAL:$1|Ta strona zawiera|Te strony zawierają}} tekst ze znacznikami tłumaczenia, ale żadna wersja {{PLURAL:$1|tej strony|tych stron}} nie jest aktualnie oznaczona do tłumaczenia.',
	'tpt-old-pages' => 'Niektóre wersje {{PLURAL:$1|tej strony|tych stron}} zostały oznaczone do tłumaczenia.',
	'tpt-other-pages' => '{{PLURAL:$1|Stara wersja tej strony jest oznaczona jako przeznaczona|Stare wersje tych stron są oznaczone jako przeznaczone}} do tłumaczenia, ale {{PLURAL:$1|jej aktualna wersja nie może zostać oznaczona jako przeznaczona|ich aktualne wersje nie mogą zostać oznaczone jako przeznaczone}} do tłumaczenia.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Ta strona jest odradzana|Te strony są odradzane}} do dalszego tłumaczenia.',
	'tpt-rev-mark' => 'zaznacz do tłumaczenia',
	'tpt-rev-unmark' => 'usuń z tłumaczenia',
	'tpt-rev-discourage' => 'zniechęcić',
	'tpt-rev-encourage' => 'Przywracanie',
	'tpt-rev-mark-tooltip' => 'Zaznacz najnowszą wersję tej strony do tłumaczenia.',
	'tpt-rev-unmark-tooltip' => 'Usuń tę stronę z tłumaczenia.',
	'tpt-rev-discourage-tooltip' => 'Zniechęć do dalszych tłumaczeń na tej stronie.',
	'tpt-rev-encourage-tooltip' => 'Przywrócić tę stronę do zwykłego tłumaczenia.',
	'translate-tag-translate-link-desc' => 'Przetłumacz tę stronę',
	'translate-tag-markthis' => 'Oznacz tę stronę do tłumaczenia',
	'translate-tag-markthisagain' => 'Ta strona została <span class="plainlinks">[zmieniona $1 razy]</span>, od kiedy ostatnio była <span class="plainlinks">[$2 oznaczona do tłumaczenia]</span>.',
	'translate-tag-hasnew' => 'Ta strona została <span class="plainlinks">[zmieniona $1 razy]</span> i nie została oznaczona do tłumaczenia.',
	'tpt-translation-intro' => 'Ta strona to <span class="plainlinks">[$1 przetłumaczona wersja]</span> strony [[$2]], a tłumaczenie jest ukończone lub aktualne w $3%.',
	'tpt-translation-intro-fuzzy' => 'Tak są oznaczane nieaktualne tłumaczenia.',
	'tpt-languages-legend' => 'Inne języki:',
	'tpt-target-page' => 'Ta strona nie może zostać zaktualizowana ręcznie.
Jest ona tłumaczeniem strony [[$1]], a tłumaczenie może zostać zmienione za pomocą [$2 narzędzia tłumacza].',
	'tpt-unknown-page' => 'Ta przestrzeń nazw jest zarezerwowana dla tłumaczeń stron z zawartością.
Strona, którą próbujesz edytować, prawdopodobnie nie odpowiada żadnej stronie oznaczonej do tłumaczenia.',
	'tpt-translation-restricted' => 'Tłumaczenie tej grupy na ten język zostało zablokowane przez administratora tłumaczenia.',
	'tpt-render-summary' => 'Aktualizowanie w celu dopasowania nowej wersji strony źródłowej',
	'tpt-download-page' => 'Wyeksportuj stronę z tłumaczeniami',
	'pt-parse-open' => 'Niezrównoważony znacznik &lt;translate>.
Szablon tłumaczenia – <pre>$1</pre>',
	'pt-parse-close' => 'Niezrównoważony znacznik &lt;/translate>.
Szablon tłumaczenia – <pre>$1</pre>',
	'pt-parse-nested' => 'Zagnieżdżanie sekcji &lt;translate> nie jest dopuszczalne.
Tekst znacznika – <pre>$1</pre>',
	'pt-shake-multiple' => 'Wiele wyróżników sekcji dla jednej sekcji.
Tekst sekcji – <pre>$1</pre>',
	'pt-shake-position' => 'Wyróżniki sekcji w nieoczekiwanym miejscu.
Tekst sekcji – <pre>$1</pre>',
	'pt-shake-empty' => 'Pusta sekcja dla wyróżnika $1.',
	'pt-log-header' => 'Rejestr działań związanych z systemem tłumaczenia stron',
	'pt-log-name' => 'Rejestr tłumaczenia stron',
	'pt-log-mark' => '{{GENDER:$2|oznaczył|oznaczyła|oznaczył(‐a)}} wersję $3 strony „[[:$1]]“ jako przeznaczonej do tłumaczenia',
	'pt-log-unmark' => '{{GENDER:$2|usunął|usunęła|usunął(‐eła)}} oznaczenie strony „[[:$1]]“ jako przeznaczonej do tłumaczenia',
	'pt-log-moveok' => '{{GENDER:$2|zmienił|zmieniła|zmieniono}} nazwę tłumaczonej strony $1 na $3',
	'pt-log-movenok' => '{{GENDER:$2|napotkał|napotkała|napotkano}} problem z przeniesieniem [[:$1]] do [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|usunął|usunęła}} tłumaczoną stronę $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|napotkał|napotkała}} problem przy usuwaniu tłumaczonej strony [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|usunął|usunęła}} tłumaczoną stronę $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|napotkał|napotkała}} problem podczas usuwania strony z tłumaczeniem [[:$1]]',
	'pt-movepage-title' => 'Przenieś przetłumaczalną stronę $1',
	'pt-movepage-blockers' => 'Przetłumaczalna strona nie może zostać przeniesiona pod nową nazwę ponieważ {{PLURAL:$1|wystąpił następujący błąd|wystąpiły następujące błędy:}}',
	'pt-movepage-block-base-exists' => 'Istnieje bazowa strona docelowa [[:$1]].',
	'pt-movepage-block-base-invalid' => 'Nazwa docelowej strony nie jest poprawnym tytułem.',
	'pt-movepage-block-tp-exists' => 'Istnieje docelowa strona tłumaczenia [[:$2]].',
	'pt-movepage-block-tp-invalid' => 'Nazwa docelowej strony tłumaczenia [[:$1]] może być nieprawidłowa. Może jest zbyt długa?',
	'pt-movepage-block-section-exists' => 'Istnieje docelowa sekcja strony [[:$2]].',
	'pt-movepage-block-section-invalid' => 'Nazwa docelowej sekcji strony [[:$1]] jest nieprawidłowa. Może jest zbyt długa?',
	'pt-movepage-block-subpage-exists' => 'Docelowa podstrona [[:$2]] istnieje.',
	'pt-movepage-block-subpage-invalid' => 'Nazwa docelowej podstrony [[:$1]] jest nieprawidłowa. Może jest zbyt długa?',
	'pt-movepage-list-pages' => 'Lista stron do przeniesienia',
	'pt-movepage-list-translation' => 'Strony do przetłumaczenia',
	'pt-movepage-list-section' => 'Sekcje stron',
	'pt-movepage-list-other' => 'Inne podstrony',
	'pt-movepage-list-count' => 'W sumie do przeniesienia {{PLURAL:$1|jest $1 strona|są $1 strony|jest $1 stron}}.',
	'pt-movepage-legend' => 'Przenieś przetłumaczalną stronę',
	'pt-movepage-current' => 'Obecna nazwa',
	'pt-movepage-new' => 'Nowa nazwa',
	'pt-movepage-reason' => 'Powód',
	'pt-movepage-subpages' => 'Przenieś wszystkie podstrony',
	'pt-movepage-action-check' => 'Sprawdź czy przeniesienie jest wykonalne',
	'pt-movepage-action-perform' => 'Przenieś',
	'pt-movepage-action-other' => 'Zmiana celu',
	'pt-movepage-intro' => 'Ta strona specjalna umożliwia przenoszenie stron, które zostały oznaczone jako wymagające tłumaczenia.
Działanie przenoszenia nie jest natychmiastowe, ponieważ wiele stron wymaga przenoszenia.
Podczas gdy strony są przenoszone, nie jest możliwa praca z tymi stronami poprzez zapytania.
Błędy zostaną odnotowane na [[Special:Log/pagetranslation|stronie rejestru tłumaczeń]] i muszą zostać naprawione ręcznie.',
	'pt-movepage-logreason' => 'Część przetłumaczalnej strony $1.',
	'pt-movepage-started' => 'Strona bazowa jest teraz przenoszona. 
Proszę sprawdzić na [[Special:Log/pagetranslation|stronie rejestru tłumaczeń]] czy nie wystąpiły błędy oraz komunikat o zakończeniu operacji.',
	'pt-locked-page' => 'Ta strona jest zablokowana ponieważ jest przygotowana do przeniesienia.',
	'pt-deletepage-lang-title' => 'Usuwanie strony tłumaczenia  $1.',
	'pt-deletepage-full-title' => 'Usuwanie strony do tłumaczenia  $1.',
	'pt-deletepage-invalid-title' => 'Wybrana strona nie jest poprawna.',
	'pt-deletepage-invalid-text' => 'Wybrana strona nie jest przeznaczona do tłumaczenia ani jej tłumaczeniem.',
	'pt-deletepage-action-check' => 'Pokaż spis stron, które mają zostać usunięte',
	'pt-deletepage-action-perform' => 'Usuń',
	'pt-deletepage-action-other' => 'Zmiana celu',
	'pt-deletepage-lang-legend' => 'Usuwanie strony tłumaczenia',
	'pt-deletepage-full-legend' => 'Usunąć stronę przeznaczoną do tłumaczenia',
	'pt-deletepage-any-legend' => 'Usuń stronę przeznaczoną do tłumaczenia lub tłumaczenie strony',
	'pt-deletepage-current' => 'Tytuł strony',
	'pt-deletepage-reason' => 'Powód',
	'pt-deletepage-subpages' => 'Usuń wszystkie podstrony',
	'pt-deletepage-list-pages' => 'Lista stron do usunięcia',
	'pt-deletepage-list-translation' => 'Strony tłumaczeń',
	'pt-deletepage-list-section' => 'Sekcje stron',
	'pt-deletepage-list-other' => 'Inne podstrony',
	'pt-deletepage-list-count' => 'W sumie  $1 {{PLURAL:$1|strona|strony|stron}} do usunięcia.',
	'pt-deletepage-full-logreason' => 'Część strony do tłumaczenia  $1.',
	'pt-deletepage-lang-logreason' => 'Część strony tłumaczenia  $1.',
	'pt-deletepage-started' => 'Sprawdź [[Special:Log/pagetranslation|dziennik strony tłumaczenia]] pod względem błędów i komunikatów zakończenia.',
	'pt-deletepage-intro' => 'Ta specjalna strona pozwala na usuwanie całych stron do tłumaczenia lub tłumaczenia na jeden z języków.
Akcja usuwania nie będzie błyskawiczna, ponieważ będzie musiało być usunięte wiele stron.
Błędy będą rejestrowane [[Special:Log/pagetranslation|w dzienniku tłumaczenia strony]] i muszą one być naprawione ręcznie.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'pagetranslation' => 'Tradussion dle pàgine',
	'right-pagetranslation' => 'Marché le version dle pàgine për la tradussion',
	'tpt-desc' => 'Estension për fé la tradussion dle pàgine ëd contnù',
	'tpt-section' => 'Unità ëd tradussion $1',
	'tpt-section-new' => 'Neuva unità ëd tradussion.
Nòm: $1',
	'tpt-section-deleted' => 'Unità ëd tradussion $1',
	'tpt-template' => 'Model ëd pàgina',
	'tpt-templatediff' => "Ël model dla pàgina a l'é cangià.",
	'tpt-diff-old' => 'Test ëd prima',
	'tpt-diff-new' => 'Test neuv',
	'tpt-submit' => 'Marca costa version për la tradussion',
	'tpt-sections-oldnew' => 'Unità ëd tradussion neuve e esistente',
	'tpt-sections-deleted' => 'Unità ëd tradussion eliminà',
	'tpt-sections-template' => 'Model ëd pàgina ëd tradussion',
	'tpt-action-nofuzzy' => 'Invalidé nen le tradussion',
	'tpt-badtitle' => "Ël nòm dàit a la pàgina ($1) a l'é pa un tìtol bon",
	'tpt-nosuchpage' => 'La pàgina $1 a esist pa',
	'tpt-oldrevision' => "$2 a l'é nen l'ùltima version dla pàgina [[$1]].
Mach j'ùltime version a peulo esse marcà për la tradussion.",
	'tpt-notsuitable' => "La pàgina $1 a va nen bin për la tradussion.
Ch'a contròla ch'a l'abia le tichëtte <nowiki><translate></nowiki> e na sintassi bon-a.",
	'tpt-saveok' => 'La pàgina [[$1]] a l\'é stàita marcà për la tradussion con $2 {{PLURAL:$2|unità ëd tradussion|unità ëd tradussion}}.
Adess la pàgina a peul esse <span class="plainlinks">[$3 voltà]</span>.',
	'tpt-badsect' => "«$1» a l'é pa un nòm bon për l'unità ëd tradussion $2.",
	'tpt-showpage-intro' => 'Sì-sota a son listà le session neuve, esistente e sganfà.
Prima ëd marché costa version për la tradussion, controlé che le modìfiche a le session a son minimisà për evité dël travaj inùtil ai tradutor.',
	'tpt-mark-summary' => "Costa version a l'é stàita marcà për la tradussion",
	'tpt-edit-failed' => "Impossìbil d'agiorné la pàgina: $1",
	'tpt-duplicate' => "Ël nòm dl'unità ëd tradussion $1 a l'é dovrà pi che na vira.",
	'tpt-already-marked' => "L'ùltima version ëd sa pàgina a l'é stàita già marcà për la tradussion.",
	'tpt-unmarked' => "La pàgina $1 a l'é pi nen marcà për la tradussion.",
	'tpt-list-nopages' => 'A-i é gnun-a pàgina marcà për la tradussion ni pronta për esse marcà për la tradussion.',
	'tpt-new-pages-title' => 'Pàgine proponùe për la tradussion',
	'tpt-old-pages-title' => 'Pàgine an tradussion',
	'tpt-other-pages-title' => 'Pàgine cioche',
	'tpt-discouraged-pages-title' => 'Pàgine dëscoragià',
	'tpt-new-pages' => "{{PLURAL:$1|Sa pàgina a conten|Se pàgine a conten-o}} dël test con la tichëtta ëd tradussion, ma gnun-a version ëd {{PLURAL:$1|costa pàgina|coste pàgine}} a l'é al moment marcà për la tradussion.",
	'tpt-old-pages' => 'Chèiche version ëd {{PLURAL:$1|costa pàgine|coste pàgine}} a son ëstàite marcà për la tradussion.',
	'tpt-other-pages' => "{{PLURAL:$1|Na veja version ëd costa pàgina a l'é|Dle veje version ëd coste pàgine a son}} marcà për la tradussion,
ma {{PLURAL:$1|l'ùltima version a peul|j'ùltime version a peulo}} pa esse marcà për la tradussion.",
	'tpt-discouraged-pages' => "{{PLURAL:$1|Costa pàgina a l'é stàita|Coste pagine a son ëstaite}} dëscoragià da avèj d'àutre tradussion.",
	'tpt-rev-mark' => 'marca për tradussion',
	'tpt-rev-unmark' => 'gava da la tradussion',
	'tpt-rev-discourage' => 'dëscoragia',
	'tpt-rev-encourage' => "buté 'me ch'a l'era",
	'tpt-rev-mark-tooltip' => "Marché l'ùltima version ëd costa pàgina për la tradussion.",
	'tpt-rev-unmark-tooltip' => 'Gava costa pàgina da la tradussion.',
	'tpt-rev-discourage-tooltip' => "Dëscoragé d'àutre tradussion su costa pagina.",
	'tpt-rev-encourage-tooltip' => 'Ripristiné costa pàgina an tradussion normal.',
	'translate-tag-translate-link-desc' => 'Fé la tradussion ëd sa pàgina',
	'translate-tag-markthis' => 'Marca costa pàgina për la tradussion',
	'translate-tag-markthisagain' => 'Costa pàgina a l\'ha avù <span class="plainlinks">[$1 cangiament]</span> da cand a l\'é stàita <span class="plainlinks">[$2 marcà për la tradussion]</span> l\'ùltima vira.',
	'translate-tag-hasnew' => 'Costa pàgina a conten <span class="plainlinks">[$1 cangiament]</span> ch\'a son pa marcà për la tradussion.',
	'tpt-translation-intro' => 'Sta pàgina-sì a l\'é na <span class="plainlinks">[$1 vërsion traduvùa]</span> ëd na pàgina [[$2]] e la tradussion a l\'é $3% completa e agiornà.',
	'tpt-translation-intro-fuzzy' => 'Tradussion pa agiornà a son marcà com costa.',
	'tpt-languages-legend' => 'Àutre lenghe:',
	'tpt-target-page' => "Sta pàgina-sì a peul pa esse modificà a man.
Sta pàgina-sì a l'é na tradussion ëd la pàgina [[$1]] e la tradussion a peul esse modificà an dovrand [$2 l'utiss ëd tradussion].",
	'tpt-unknown-page' => "Sto spassi nominal-sì a l'é riservà për tradussion ëd pàgine ëd contnù.
La pàgina ch'it preuve a modifiché a smija pa ch'a corisponda a na pàgina marcà për tradussion.",
	'tpt-render-summary' => 'Modifiché për esse com la neuva version dla pàgina sorgiss',
	'tpt-download-page' => 'Espòrta pàgina con tradussion',
	'pt-parse-open' => 'Tichëtta &lt;translate> pa bilansà.
Stamp ëd viragi: <pre>$1</pre>',
	'pt-parse-close' => 'Tichëtta &lt;/translate> pa bilansà.
Stamp ëd viragi: <pre>$1</pre>',
	'pt-parse-nested' => 'Le session &lt;translate> anidà a son pa përmëttùe.
Test ëd la tichëtta: <pre>$1</pre>',
	'pt-shake-multiple' => 'Marcador mùltipl ëd session për na session.
Test ëd la session: <pre>$1</pre>',
	'pt-shake-position' => 'Marcador ëd session an na posission pa spetà.
Test ëd la session: <pre>$1</pre>',
	'pt-shake-empty' => 'Session veuida për ël marcador $1.',
	'pt-log-header' => "Registr ëd j'assion colegà al sistema ëd tradussion ëd pàgine",
	'pt-log-name' => 'Registr dle tradussion ëd pàgine',
	'pt-log-mark' => '{{GENDER:$2|marcà}} la revision $3 dla pàgina "[[:$1]]" për la tradussion',
	'pt-log-unmark' => 'a l\'ha {{GENDER:$2|gavà}} la pàgina "[[:$1]]" da la tradussion',
	'pt-log-moveok' => "a l'ha {{GENDER:$2|completà}} ëd deje un nòm neuv a la pàgina da volté $1 a $3",
	'pt-log-movenok' => "{{GENDER:$2|a l'ha rancontrà}} un problema an tramudand [[:$1]] a [[:$3]]",
	'pt-log-delete-full-ok' => "{{GENDER:$2|a l'ha completà}} lë scancelament ëd la pàgina da volté $1",
	'pt-log-delete-full-nok' => "{{GENDER:$2|a l'ha rancontrà}} un problema an scanceland la pàgina da volté [[:$1]]",
	'pt-log-delete-lang-ok' => "{{GENDER:$2|a l'ha completà}} le scancelament ëd la pàgina ëd tradussion $1",
	'pt-log-delete-lang-nok' => "{{GENDER:$2|a l'ha rancontrà}} un problema an scanceland la pagina ëd tradussion [[:$1]]",
	'pt-movepage-title' => 'Tramudé la pàgina da volté $1',
	'pt-movepage-blockers' => 'La pàgina da volté a peul pa esse tramudà a un nòm neuv a motiv ëd {{PLURAL:$1|cost eror|costi eror}}:',
	'pt-movepage-block-base-exists' => 'La pàgina base pontà [[:$1]] a esist.',
	'pt-movepage-block-base-invalid' => "La pàgina base pontà a l'é pa un tìtol bon.",
	'pt-movepage-block-tp-exists' => 'La pàgina ëd viragi pontà [[:$2]] a esist.',
	'pt-movepage-block-tp-invalid' => 'Ël tìtol ëd la pàgina ëd viragi pontà për [[:$1]] a podrìa esse pa bon (tròp longh?).',
	'pt-movepage-block-section-exists' => 'La pàgina ëd session pontà [[:$2]] a esist.',
	'pt-movepage-block-section-invalid' => 'Ël tìtol ëd la pàgina ëd session pontà për [[:$1]] a podrìa esse pa bon (tròp longh?).',
	'pt-movepage-block-subpage-exists' => 'La sotpàgina pontà [[:$2]] a esist.',
	'pt-movepage-block-subpage-invalid' => 'Ël tìtol ëd la sotpàgina pontà për [[:$1]] a podrìa esse pa bon (tròp longh?).',
	'pt-movepage-list-pages' => 'Lista dle pàgine da tramudé',
	'pt-movepage-list-translation' => 'Pàgine ëd viragi',
	'pt-movepage-list-section' => 'Pàgine ëd session',
	'pt-movepage-list-other' => 'Àutre sot-pàgine',
	'pt-movepage-list-count' => 'An total $1 {{PLURAL:$1|pàgina|pàgine}} da tramudé.',
	'pt-movepage-legend' => 'Tramudé la pàgina da volté',
	'pt-movepage-current' => 'Nòm corent:',
	'pt-movepage-new' => 'Nòm neuv:',
	'pt-movepage-reason' => 'Rason:',
	'pt-movepage-subpages' => 'Tramuda tute le sotpàgine',
	'pt-movepage-action-check' => "Contròla s'a l'é possìbil tramudé",
	'pt-movepage-action-perform' => 'Fé ël tramud',
	'pt-movepage-action-other' => 'Cangé ël bërsaj',
	'pt-movepage-intro' => "Sta pàgina special a-j përmët ëd tramudé dle pàgine ch'a son marcà për la tradussion.
L'assion ëd tramud a sarà pa d'amblé, përchè tante pàgine a dovran esse tramudà.
Antramentre che le pàgine a son tramudà, a l'é nen possìbil anteragì con cole pàgine.
J'eror a saran registrà ant ël [[Special:Log/pagetranslation|registr ëd tradussion ëd le pàgine]] e a dovran esse rangià a man.",
	'pt-movepage-logreason' => 'Tòch ëd la pàgina da volté $1.',
	'pt-movepage-started' => "La pàgina base adess a l'é tramudà.
Për piasì, ch'a contròla ël [[Special:Log/pagetranslation|registr ëd tradussion dle pàgine]] për eror e mëssagi ëd completament.",
	'pt-locked-page' => "Cota pàgina a l'é blocà përchè la pàgina da volté a l'é an camin ch'as tramuda.",
	'pt-deletepage-lang-title' => 'Scancelassion ëd la pàgina ëd tradussion $1.',
	'pt-deletepage-full-title' => 'Scancelassion ëd la pàgina da volté $1.',
	'pt-deletepage-invalid-title' => "La pàgina spessificà a l'é pa bon-a.",
	'pt-deletepage-invalid-text' => "La pàgina specificà a l'é nen na pàgina da volté ni na tradussion ëd cola.",
	'pt-deletepage-action-check' => 'Listé le pàgine da scancelé',
	'pt-deletepage-action-perform' => 'Fé la scancelassion',
	'pt-deletepage-action-other' => 'Cangé ël bërsaj',
	'pt-deletepage-lang-legend' => 'Scancelé la pàgina ëd tradussion',
	'pt-deletepage-full-legend' => 'Scancelé la pàgina da volté',
	'pt-deletepage-any-legend' => 'Scancelé la pàgina da volté o la tradussion ëd na pàgina da volté',
	'pt-deletepage-current' => 'Nòm ëd la pàgina:',
	'pt-deletepage-reason' => 'Rason:',
	'pt-deletepage-subpages' => 'Scancelé tute le sot-pàgine',
	'pt-deletepage-list-pages' => 'Lista dle pàgine da scancelé',
	'pt-deletepage-list-translation' => 'Pàgine ëd tradussion',
	'pt-deletepage-list-section' => 'Pàgine ëd session',
	'pt-deletepage-list-other' => 'Àutre sot-pàgine',
	'pt-deletepage-list-count' => 'An total $1 {{PLURAL:$1|pàgina|pàgine}} da scancelé.',
	'pt-deletepage-full-logreason' => 'Tòch ëd la pàgina da volté $1.',
	'pt-deletepage-lang-logreason' => 'Tòch ëd la pàgina ëd tradussion $1.',
	'pt-deletepage-started' => "Për piasì, ch'a contròla ël [[Special:Log/pagetranslation|registr ëd tradussion dle pàgine]] për j'eror e ël mëssagi ëd completament.",
	'pt-deletepage-intro' => "Costa pàgina special a-j përmët dë scancelé qualsëssìa pàgina da volté o dle tradussion ant na lenga.
L'assion dë scancelassion a sarà pa imedià, përché tante pàgine a devo esse scancelà.
J'eror a saran registrà ant ël [[Special:Log/pagetranslation|registr ëd le tradussion ëd le pàgine]]  e a devo esse rangià a man.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'pagetranslation' => 'د مخ ژباړه',
	'tpt-template' => 'د مخ کينډۍ',
	'tpt-templatediff' => 'د مخ کينډۍ بدلون موندلی.',
	'tpt-diff-old' => 'پخوانی متن',
	'tpt-diff-new' => 'نوی متن',
	'tpt-sections-template' => 'د ژباړې د مخ کينډۍ',
	'tpt-nosuchpage' => 'د $1 په نوم کوم مخ نشته',
	'tpt-old-pages-title' => 'د ژباړې مخونه',
	'tpt-other-pages-title' => 'مات مخونه',
	'translate-tag-translate-link-desc' => 'همدا مخ ژباړل',
	'translate-tag-markthis' => 'همدا مخ د ژباړې لپاره په نښه کول',
	'tpt-languages-legend' => 'نورې ژبې:',
	'pt-movepage-list-pages' => 'د لېږدون د مخونو لړليک',
	'pt-movepage-list-translation' => 'د ژباړې مخونه',
	'pt-movepage-list-section' => 'د برخې مخونه',
	'pt-movepage-list-other' => 'نور واړه مخونه',
	'pt-movepage-current' => 'اوسنی نوم:',
	'pt-movepage-new' => 'نوی نوم:',
	'pt-movepage-reason' => 'سبب:',
	'pt-movepage-subpages' => 'ټول واړه مخونه لېږدول',
	'pt-movepage-action-perform' => 'لېږد ترسره کول',
	'pt-movepage-action-other' => 'موخه بدلول',
	'pt-deletepage-action-perform' => 'ړنګېدنه ترسره کول',
	'pt-deletepage-action-other' => 'موخه بدلول',
	'pt-deletepage-current' => 'د مخ نوم:',
	'pt-deletepage-reason' => 'سبب:',
	'pt-deletepage-subpages' => 'ټول واړه مخونه ړنګول',
	'pt-deletepage-list-translation' => 'د ژباړې مخونه',
	'pt-deletepage-list-section' => 'د برخې مخونه',
	'pt-deletepage-list-other' => 'نور واړه مخونه',
);

/** Portuguese (Português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Malafaya
 * @author Vivaelcelta
 * @author Waldir
 */
$messages['pt'] = array(
	'pagetranslation' => 'Tradução de páginas',
	'right-pagetranslation' => 'Marcar versões de páginas para tradução',
	'tpt-desc' => 'Extensão para traduzir páginas de conteúdo',
	'tpt-section' => 'Unidade de tradução $1',
	'tpt-section-new' => 'Nova unidade de tradução. Nome: $1',
	'tpt-section-deleted' => 'Unidade de tradução $1',
	'tpt-template' => 'Modelo de página',
	'tpt-templatediff' => 'O modelo de página foi modificado.',
	'tpt-diff-old' => 'Texto anterior',
	'tpt-diff-new' => 'Texto novo',
	'tpt-submit' => 'Marcar esta versão para tradução',
	'tpt-sections-oldnew' => 'Unidades de tradução novas e existentes',
	'tpt-sections-deleted' => 'Unidades de tradução eliminadas',
	'tpt-sections-template' => 'Modelo de página de tradução',
	'tpt-action-nofuzzy' => 'Não invalidar traduções',
	'tpt-badtitle' => 'O nome de página fornecido ($1) não é um título válido',
	'tpt-nosuchpage' => 'A página $1 não existe',
	'tpt-oldrevision' => '$2 não é a versão mais recente da página [[$1]].
Apenas as últimas versões podem ser marcadas para tradução.',
	'tpt-notsuitable' => 'A página $1 não é adequada para tradução.
Certifique-se de que a mesma contém os elementos <nowiki><translate></nowiki> e tem uma sintaxe válida.',
	'tpt-saveok' => 'A página [[$1]] foi marcada para tradução com $2 {{PLURAL:$2|unidade|unidades}} de tradução.
A página pode agora ser <span class="plainlinks">[$3 traduzida]</span>.',
	'tpt-badsect' => '"$1" não é um nome válido para a unidade de tradução $2.',
	'tpt-showpage-intro' => 'Abaixo estão listadas secções novas, existentes e apagadas.
Antes de marcar esta versão para tradução, verifique que as alterações às secções são minimizadas para evitar trabalho desnecessário para os tradutores.',
	'tpt-mark-summary' => 'Marcou esta versão para tradução',
	'tpt-edit-failed' => 'Não foi possível actualizar a página: $1',
	'tpt-already-marked' => 'A versão mais recente desta página já foi marcada para tradução.',
	'tpt-unmarked' => 'A página $1 já não está marcada para tradução.',
	'tpt-list-nopages' => 'Não existem páginas marcadas para tradução, nem prontas a ser marcadas para tradução.',
	'tpt-new-pages' => "{{PLURAL:$1|Esta página contém|Estas páginas contêm}} texto com ''tags'' de tradução, mas nenhuma versão {{PLURAL:$1|da página|das páginas}} está presentemente marcada para tradução.",
	'tpt-old-pages' => 'Uma versão {{PLURAL:$1|desta página|destas páginas}} foi marcada para tradução.',
	'tpt-other-pages' => '{{PLURAL:$1|A versão anterior desta página está marcada|Versões anteriores destas páginas estão marcadas}} para tradução, mas a última versão não pode ser marcada para tradução.',
	'tpt-rev-unmark' => 'remover esta página das páginas para tradução',
	'translate-tag-translate-link-desc' => 'Traduzir esta página',
	'translate-tag-markthis' => 'Marcar esta página para tradução',
	'translate-tag-markthisagain' => 'Esta página tem <span class="plainlinks">[$1 alterações]</span> desde a última vez que foi <span class="plainlinks">[$2 marcada para tradução]</span>.',
	'translate-tag-hasnew' => 'Esta página contém <span class="plainlinks">[$1 alterações]</span> que não estão marcadas para tradução.',
	'tpt-translation-intro' => 'Esta página é uma <span class="plainlinks">[$1 versão traduzida]</span> da página [[$2]] e a tradução está $3% completa e actualizada.',
	'tpt-translation-intro-fuzzy' => 'Traduções desactualizadas estão marcadas desta forma.',
	'tpt-languages-legend' => 'Outras línguas:',
	'tpt-target-page' => 'Esta página não pode ser actualizada manualmente.
Ela é uma tradução da página [[$1]] e a tradução pode ser actualizada usando [$2 a ferramenta de tradução].',
	'tpt-unknown-page' => 'Este espaço nominal está reservado para traduções de páginas de conteúdo.
A página que está a tentar editar não parece corresponder a nenhuma página marcada para tradução.',
	'tpt-render-summary' => 'A actualizar para corresponder à nova versão da página fonte',
	'tpt-download-page' => 'Exportar a página com traduções',
	'pt-parse-open' => 'O elemento &lt;translate> está desequilibrado.
Modelo de tradução: <pre>$1</pre>',
	'pt-parse-close' => 'O elemento &lt;/translate> está desequilibrado.
Modelo de tradução: <pre>$1</pre>',
	'pt-parse-nested' => 'Não são permitidas secções &lt;translate> cruzadas.
Texto do elemento: <pre>$1</pre>',
	'pt-shake-multiple' => 'Vários marcadores de secção para uma secção.
Texto da secção: <pre>$1</pre>',
	'pt-shake-position' => 'Marcadores de secção encontram-se numa posição inesperada.
Texto da secção: <pre>$1</pre>',
	'pt-shake-empty' => 'Secção em branco para o marcador $1.',
	'pt-log-header' => 'Registo para operações relacionadas com o sistema de tradução de páginas',
	'pt-log-name' => 'Registo de tradução de páginas',
	'pt-log-mark' => '{{GENDER:$2|marcou}} a edição $3 da página "[[:$1]]" para tradução.',
	'pt-log-unmark' => '{{GENDER:$2|removeu}} a página "[[:$1]]" de tradução.',
	'pt-log-moveok' => '{{GENDER:$2|alterou o nome}} da página traduzível $1 para $3',
	'pt-log-movenok' => '{{GENDER:$2|encontrou}} um problema ao mover [[:$1]] para [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|eliminou}} a página traduzível $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|encontrou}} um problema ao eliminar a página traduzível [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|eliminou}} a página traduzida $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|encontrou}} um problema ao eliminar a página traduzida [[:$1]]',
	'pt-movepage-title' => 'Mover a página traduzível $1',
	'pt-movepage-blockers' => 'A página traduzível não pode ser movida para outro nome devido {{PLURAL:$1|ao seguinte erro|aos seguintes erros}}:',
	'pt-movepage-block-base-exists' => 'A página base de destino [[:$1]] existe.',
	'pt-movepage-block-base-invalid' => 'A página base de destino não tem um título válido.',
	'pt-movepage-block-tp-exists' => 'A página de tradução de destino [[:$2]] existe.',
	'pt-movepage-block-tp-invalid' => 'O título da página de tradução de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-block-section-exists' => 'A página da secção de destino [[:$2]] existe.',
	'pt-movepage-block-section-invalid' => 'O título da página da secção de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-block-subpage-exists' => 'A subpágina de destino [[:$2]] existe.',
	'pt-movepage-block-subpage-invalid' => 'O título da subpágina de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-list-pages' => 'Lista de páginas para serem movidas',
	'pt-movepage-list-translation' => 'Páginas de tradução',
	'pt-movepage-list-section' => 'Páginas de secção',
	'pt-movepage-list-other' => 'Outras subpáginas',
	'pt-movepage-list-count' => 'No total, $1 {{PLURAL:$1|página para ser movida|páginas para serem movidas}}.',
	'pt-movepage-legend' => 'Mover página traduzível',
	'pt-movepage-current' => 'Nome actual:',
	'pt-movepage-new' => 'Nome novo:',
	'pt-movepage-reason' => 'Motivo:',
	'pt-movepage-subpages' => 'Mover todas as subpáginas',
	'pt-movepage-action-check' => 'Verificar se a movimentação é possível',
	'pt-movepage-action-perform' => 'Realizar a movimentação',
	'pt-movepage-action-other' => 'Alterar o destino',
	'pt-movepage-intro' => 'Esta página especial permite-lhe mover páginas que estão marcadas para tradução.
A operação de movimentação não é instantânea, porque será necessário mover muitas páginas.
Enquanto estas estão a ser movidas, não é possível interagir com as páginas em questão.
As falhas serão registadas no [[Special:Log/pagetranslation|registo de tradução de páginas]] e necessitam de ser reparadas manualmente.',
	'pt-movepage-logreason' => 'Parte da página traduzível $1.',
	'pt-movepage-started' => 'A página base foi movida.
Verifique no [[Special:Log/pagetranslation|registo de tradução de páginas]] se ocorreram erros e se existe a mensagem de conclusão, por favor.',
	'pt-locked-page' => 'Está página está bloqueada porque a página traduzível está a ser movida.',
	'pt-deletepage-lang-title' => 'A eliminar a página traduzida $1.',
	'pt-deletepage-full-title' => 'A eliminar a página traduzível $1.',
	'pt-deletepage-invalid-title' => 'A página especificada é inválida.',
	'pt-deletepage-invalid-text' => 'A página especificada não é uma página traduzível nem uma página traduzida.',
	'pt-deletepage-action-check' => 'Listar as páginas para eliminar',
	'pt-deletepage-action-perform' => 'Eliminar',
	'pt-deletepage-action-other' => 'Alterar o destino',
	'pt-deletepage-lang-legend' => 'Eliminar a página traduzida',
	'pt-deletepage-full-legend' => 'Eliminar a página traduzível',
	'pt-deletepage-any-legend' => 'Eliminar a página traduzível ou a tradução de uma página traduzível',
	'pt-deletepage-current' => 'Nome da página:',
	'pt-deletepage-reason' => 'Motivo:',
	'pt-deletepage-subpages' => 'Eliminar todas as subpáginas',
	'pt-deletepage-list-pages' => 'Lista das páginas para eliminar',
	'pt-deletepage-list-translation' => 'Páginas traduzidas',
	'pt-deletepage-list-section' => 'Páginas de secção',
	'pt-deletepage-list-other' => 'Outras subpáginas',
	'pt-deletepage-list-count' => '$1 {{PLURAL:$1|página|páginas}} para eliminar, no total.',
	'pt-deletepage-full-logreason' => 'Parte da página traduzível $1.',
	'pt-deletepage-lang-logreason' => 'Parte da página traduzida $1.',
	'pt-deletepage-started' => 'Verifique a existência de erros ou de uma mensagem de sucesso no [[Special:Log/pagetranslation|registo de traduções]].',
	'pt-deletepage-intro' => 'Esta página especial permite eliminar páginas traduzíveis ou as traduções para uma língua.
A eliminação não é instantânea, porque será necessário eliminar muitas páginas.
Os problemas que ocorrerem serão registados no [[Special:Log/pagetranslation|registo de traduções]] e podem exigir reparação manual.',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 * @author Eduardo.mps
 * @author Giro720
 * @author Helder.wiki
 * @author Heldergeovane
 */
$messages['pt-br'] = array(
	'pagetranslation' => 'Tradução de páginas',
	'right-pagetranslation' => 'Marca versões de páginas para tradução',
	'tpt-desc' => 'Extensão para traduzir páginas de conteúdo',
	'tpt-section' => 'Unidade de tradução $1',
	'tpt-section-new' => 'Nova unidade de tradução.
Nome: $1',
	'tpt-section-deleted' => 'Unidade de tradução $1',
	'tpt-template' => 'Modelo de página',
	'tpt-templatediff' => 'O modelo de página foi modificado.',
	'tpt-diff-old' => 'Texto anterior',
	'tpt-diff-new' => 'Novo texto',
	'tpt-submit' => 'Marca esta versão para tradução',
	'tpt-sections-oldnew' => 'Unidades de tradução novas e existentes',
	'tpt-sections-deleted' => 'Unidades de tradução apagadas',
	'tpt-sections-template' => 'Modelo de página de tradução',
	'tpt-action-nofuzzy' => 'Não invalidar traduções',
	'tpt-badtitle' => 'O nome de página dado ($1) não é um título válido',
	'tpt-nosuchpage' => 'A página $1 não existe',
	'tpt-oldrevision' => '$2 não é a versão atual da página [[$1]].
Apenas as versões atuais pode ser marcadas para tradução.',
	'tpt-notsuitable' => 'A página $1 não está adequada para tradução.
Tenha certeza que ela tem marcas <nowiki><translate></nowiki> e tem a sintaxe válida.',
	'tpt-saveok' => 'A página [[$1]] foi marcada para tradução com $2 {{PLURAL:$2|unidade|unidades}} de tradução.
A página pode ser <span class="plainlinks">[$3 traduzida]</span> agora.',
	'tpt-badsect' => '"$1" não é um nome válido para a unidade de tradução $2.',
	'tpt-showpage-intro' => 'Abaixo estão listadas seções novas, existentes e removidas.
Antes de marcar esta versão para tradução, verifique se as mudanças nas seções foram minimizadas para evitar trabalho desnecessário para os tradutores.',
	'tpt-mark-summary' => 'Marcou esta versão para tradução',
	'tpt-edit-failed' => 'Não foi possível atualizar a página: $1',
	'tpt-already-marked' => 'A versão atual desta página já foi marcada para tradução.',
	'tpt-unmarked' => 'A página $1 já não está marcada para tradução.',
	'tpt-list-nopages' => 'Nenhuma página está marcada para tradução nem pronta para ser marcada para tradução.',
	'tpt-new-pages' => '{{PLURAL:$1|Esta página contém|Estas páginas contêm}} texto com marcas de tradução, mas nenhuma versão {{PLURAL:$1|desta página|destas páginas}} está atualmente marcada para tradução.',
	'tpt-old-pages' => 'Alguma versão {{PLURAL:$1|desta página|destas páginas}} foi marcada para tradução.',
	'tpt-other-pages' => '{{PLURAL:$1|A versão anterior desta página está marcada|Versões anteriores desta página estão marcadas}} para tradução, mas a última versão não pode ser marcada para tradução.',
	'tpt-rev-unmark' => 'remover esta página das páginas para tradução',
	'translate-tag-translate-link-desc' => 'Traduzir esta página',
	'translate-tag-markthis' => 'Marcar esta página para tradução',
	'translate-tag-markthisagain' => 'Esta página tem <span class="plainlinks">[$1 alterações]</span> desde a última vez em que ela foi <span class="plainlinks">[$2 marcada para tradução]</span>.',
	'translate-tag-hasnew' => 'Esta página contém <span class="plainlinks">[$1 alterações]</span> que não são marcadas para tradução.',
	'tpt-translation-intro' => 'Esta página é uma <span class="plainlinks">[$1 versão traduzida]</span> de uma página [[$2]], e a tradução está $3% completa e atualizada.',
	'tpt-translation-intro-fuzzy' => 'Traduções desatualizadas estão marcadas assim.',
	'tpt-languages-legend' => 'Outros idiomas:',
	'tpt-target-page' => 'Esta página não pode ser atualizada manualmente.
Esta página é uma tradução da página [[$1]] e a tradução pode ser atualizada usando [$2 a ferramenta de tradução].',
	'tpt-unknown-page' => 'Este domínio é reservado para traduções de páginas de conteúdo.
Esta página que você está tentando editar não aparenta corresponder a nenhuma página marcada para tradução.',
	'tpt-render-summary' => 'Atualizando para corresponder a nova versão da página fonte',
	'tpt-download-page' => 'Exportar página com traduções',
	'pt-parse-open' => 'O elemento &lt;translate> está desequilibrado.
Modelo de tradução: <pre>$1</pre>',
	'pt-parse-close' => 'O elemento &lt;/translate> está desequilibrado.
Modelo de tradução: <pre>$1</pre>',
	'pt-parse-nested' => 'Não são permitidas scções &lt;translate> cruzadas.
Texto do elemento: <pre>$1</pre>',
	'pt-shake-multiple' => 'Vários marcadores de seção para uma seção.
Texto da seção: <pre>$1</pre>',
	'pt-shake-position' => 'Marcadores de seção encontram-se numa posição inesperada.
Texto da seção: <pre>$1</pre>',
	'pt-shake-empty' => 'Seção em branco para o marcador $1.',
	'pt-log-header' => 'Registro para operações relacionadas com o sistema de tradução de páginas',
	'pt-log-name' => 'Registro de tradução de páginas',
	'pt-log-mark' => '{{GENDER:$2|marcou}} a edição $3 da página "[[:$1]]" para tradução.',
	'pt-log-unmark' => '{{GENDER:$2|removeu}} a página "[[:$1]]" de tradução.',
	'pt-log-moveok' => '{{GENDER:$2|alterou o nome}} da página traduzível $1 para um nome novo',
	'pt-log-movenok' => '{{GENDER:$2|encontrou}} um problema ao mover [[:$1]] para [[:$3]]',
	'pt-movepage-title' => 'Mover a página traduzível $1',
	'pt-movepage-blockers' => 'A página traduzível não pode ser movida para outro nome devido {{PLURAL:$1|ao seguinte erro|aos seguintes erros}}:',
	'pt-movepage-block-base-exists' => 'A página base de destino [[:$1]] existe.',
	'pt-movepage-block-base-invalid' => 'A página base de destino não tem um título válido.',
	'pt-movepage-block-tp-exists' => 'A página de tradução de destino [[:$2]] existe.',
	'pt-movepage-block-tp-invalid' => 'O título da página de tradução de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-block-section-exists' => 'A página da seção de destino [[:$2]] existe.',
	'pt-movepage-block-section-invalid' => 'O título da página da seção de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-block-subpage-exists' => 'A subpágina de destino [[:$2]] existe.',
	'pt-movepage-block-subpage-invalid' => 'O título da subpágina de destino para [[:$1]] seria inválido (talvez demasiado longo).',
	'pt-movepage-list-pages' => 'Lista de páginas para serem movidas',
	'pt-movepage-list-translation' => 'Páginas de tradução',
	'pt-movepage-list-section' => 'Páginas de seção',
	'pt-movepage-list-other' => 'Outras subpáginas',
	'pt-movepage-list-count' => 'No total, $1 {{PLURAL:$1|página para ser movida|páginas para serem movidas}}.',
	'pt-movepage-legend' => 'Mover página traduzível',
	'pt-movepage-current' => 'Nome atual:',
	'pt-movepage-new' => 'Nome novo:',
	'pt-movepage-reason' => 'Motivo:',
	'pt-movepage-subpages' => 'Mover todas as subpáginas',
	'pt-movepage-action-check' => 'Verificar se a movimentação é possível',
	'pt-movepage-action-perform' => 'Realizar a movimentação',
	'pt-movepage-action-other' => 'Alterar o destino',
	'pt-movepage-intro' => 'Esta página especial permite mover páginas que estão marcadas para tradução.
A operação de movimentação não é instantânea, porque será necessário mover muitas páginas.
A fila de tarefas será usada para mover as páginas.
Enquanto estão sendo movidas, não é possível interagir com as páginas em questão.
As falhas serão registradas no [[Special:Log/pagetranslation|registro de tradução de páginas]] e necessitarão ser reparadas manualmente.',
	'pt-movepage-logreason' => 'Parte da página traduzível $1.',
	'pt-movepage-started' => 'A página base foi movida.
Verifique no [[Special:Log/pagetranslation|registo de tradução de páginas]] eventuais mensagens de erro e/ou de atividade concluída.',
	'pt-locked-page' => 'Está página está bloqueada porque a página traduzível está sendo movida.',
	'pt-deletepage-list-translation' => 'Páginas de tradução',
);

/** Romansh (Rumantsch)
 * @author Gion-andri
 */
$messages['rm'] = array(
	'pagetranslation' => 'Translaziun da paginas',
	'tpt-diff-old' => 'Ultim text',
	'tpt-diff-new' => 'Nov text',
	'tpt-languages-legend' => 'Autras linguas:',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 */
$messages['ro'] = array(
	'pagetranslation' => 'Traducerea paginii',
	'right-pagetranslation' => 'Marcați versiunile paginilor pentru traduceri',
	'tpt-desc' => 'Extensie pentru traducerea conținutului paginilor',
	'tpt-section' => 'Unitate de traducere $1',
	'tpt-section-new' => 'Unitate de traducere nouă.
Nume: $1',
	'tpt-section-deleted' => 'Unitate de traducere $1',
	'tpt-template' => 'Șablon pagină',
	'tpt-templatediff' => 'Formatul paginii a fost schimbat.',
	'tpt-diff-old' => 'Text precedent',
	'tpt-diff-new' => 'Text nou',
	'tpt-submit' => 'Marchează această versiune pentru traducere',
	'tpt-sections-oldnew' => 'Unități de traducere noi și existente',
	'tpt-sections-deleted' => 'Unități de traducere șterse',
	'tpt-sections-template' => 'Format de pagină de traducere',
	'tpt-action-nofuzzy' => 'Nu invalidați traduceri',
	'tpt-nosuchpage' => 'Pagina $1 nu există',
	'tpt-badsect' => '„$1” nu este un nume valid pentru unitatea de traducere $2.',
	'tpt-mark-summary' => 'Marcat această versiune pentru traducere',
	'tpt-edit-failed' => 'Pagina nu a putut fi actualizată: $1',
	'tpt-already-marked' => 'Ultima versiune a acestei pagini a fost deja marcată pentru traducere.',
	'tpt-list-nopages' => 'Nici o pagină nu este marcată pentru traducere sau gata să fie marcată pentru traducere.',
	'tpt-rev-encourage' => 'restaurare',
	'translate-tag-translate-link-desc' => 'Tradu această pagină',
	'translate-tag-markthis' => 'Marchează această pagină pentru traducere',
	'tpt-translation-intro' => 'Această pagină reprezintă <span class="plainlinks">[$1 versiunea tradusă]</span> a paginii [[$2]], procesul de traducere fiind completat în proporție de $3%.',
	'tpt-translation-intro-fuzzy' => 'Traducerile învechite sunt marcate în acest fel.',
	'tpt-languages-legend' => 'Alte limbi:',
	'pt-log-name' => 'Jurnal traducere pagini',
	'pt-movepage-list-pages' => 'Listă de pagini de mutat',
	'pt-movepage-list-other' => 'Alte subpagini',
	'pt-movepage-current' => 'Nume actual:',
	'pt-movepage-new' => 'Nume nou:',
	'pt-movepage-reason' => 'Motiv:',
	'pt-movepage-logreason' => 'Parte a paginii traductibile $1.',
	'pt-deletepage-action-other' => 'Schimbați ținta',
	'pt-deletepage-lang-legend' => 'Ștergeți pagina traducerii',
	'pt-deletepage-current' => 'Numele paginii:',
	'pt-deletepage-reason' => 'Motiv:',
	'pt-deletepage-subpages' => 'Ștergeți toate subpaginile',
	'pt-deletepage-list-count' => 'În total, $1 {{PLURAL:$1|pagină|pagini|de pagini}} de șters.',
	'pt-deletepage-full-logreason' => 'Parte a paginii traductibile $1.',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'tpt-template' => "Pàgene d'u template",
	'tpt-diff-old' => 'Teste precedende',
	'tpt-diff-new' => 'Teste nuève',
	'tpt-nosuchpage' => "Pàgene $1 non g'esiste",
	'tpt-rev-mark' => 'signe da traducere',
	'tpt-rev-unmark' => "live da 'a traduzione",
	'tpt-rev-discourage' => 'scoragge',
	'tpt-rev-encourage' => 'repristine',
	'translate-tag-translate-link-desc' => 'Traduce sta vosce',
	'tpt-languages-legend' => 'Otre lènghe:',
	'tpt-languages-separator' => '&#160;•&#160;',
	'pt-movepage-current' => 'Nome de mò:',
	'pt-movepage-new' => 'Nome nuève:',
	'pt-movepage-reason' => 'Mutive:',
	'pt-movepage-subpages' => 'Spuèste tutte le sottopàggene',
	'pt-movepage-action-perform' => "Fà 'u spostamende",
	'pt-movepage-action-other' => "Cange 'a destinazione",
	'pt-deletepage-current' => "Nome d'a pàgene:",
	'pt-deletepage-reason' => 'Mutive:',
);

/** Russian (Русский)
 * @author Askarmuk
 * @author Eugrus
 * @author Express2000
 * @author Ferrer
 * @author G0rn
 * @author Grigol
 * @author Hypers
 * @author KPu3uC B Poccuu
 * @author Kaganer
 * @author Purodha
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'pagetranslation' => 'Перевод страниц',
	'right-pagetranslation' => 'отметка версий страниц для перевода',
	'tpt-desc' => 'Расширение для перевода содержимого страниц',
	'tpt-section' => 'Блок перевода $1',
	'tpt-section-new' => 'Новый блок перевода. Название: $1',
	'tpt-section-deleted' => 'Элемент перевода $1',
	'tpt-template' => 'Страничный шаблон',
	'tpt-templatediff' => 'Этот страничный шаблон изменён.',
	'tpt-diff-old' => 'Предыдущий текст',
	'tpt-diff-new' => 'Новый текст',
	'tpt-submit' => 'Отметить эту версию для перевода',
	'tpt-sections-oldnew' => 'Новые и существующие элементы перевода',
	'tpt-sections-deleted' => 'Удалённые элементы перевода',
	'tpt-sections-template' => 'Шаблон страницы перевода',
	'tpt-action-nofuzzy' => 'Не помечать переводы как устаревшие',
	'tpt-badtitle' => 'Указанное название страницы ($1) не является допустимым',
	'tpt-nosuchpage' => 'Страница «$1» не существует.',
	'tpt-oldrevision' => '$2 не является последней версией страницы [[$1]].
Только последние версии могут быть отмечены для перевода.',
	'tpt-notsuitable' => 'Страница $1 является неподходящей для перевода.
Убедитесь, что она имеет теги <nowiki><translate></nowiki> и правильный синтаксис.',
	'tpt-saveok' => 'Страница [[$1]] был отмечена для перевода, она содержит $2 {{PLURAL:$2|блок перевода|блока перевода|блоков переводов}}.
Теперь страницу можно <span class="plainlinks">[$3 переводить]</span>.',
	'tpt-badsect' => '«$1» не является допустимым названием для блока перевода $2.',
	'tpt-showpage-intro' => 'Ниже приведены новые, существующие и удалённые разделы.
Перед отметкой этой версии для перевода, убедитесь, что изменения в разделе будут минимальны, это позволит сократить объём работы переводчиков.',
	'tpt-mark-summary' => 'Отметить эту версию для перевода',
	'tpt-edit-failed' => 'Невозможно обновить эту страницу: $1',
	'tpt-duplicate' => 'Перевод элемента с названием  $1  используется более одного раза.',
	'tpt-already-marked' => 'Последняя версия этой страницы уже была отмечена для перевода.',
	'tpt-unmarked' => 'Страница $1 больше не отмечена для перевода.',
	'tpt-list-nopages' => 'Нет страниц, отмеченных для перевода, а также нет страниц готовых к отметке.',
	'tpt-new-pages-title' => 'Страницы, предложенные для перевода',
	'tpt-old-pages-title' => 'Страницы в переводе',
	'tpt-other-pages-title' => 'Повреждённые страницы',
	'tpt-discouraged-pages-title' => 'Отклонённые страницы',
	'tpt-new-pages' => '{{PLURAL:$1|Эта страница содержит|Эти страницы содержат}} текст с тегами перевода, но ни одна из версий {{PLURAL:$1|этой страницы|этих страниц}} не отмечена для перевода.',
	'tpt-old-pages' => 'Некоторые версии {{PLURAL:$1|этой страницы|этих страниц}} были отмечены для перевода.',
	'tpt-other-pages' => '{{PLURAL:$1|Старая версия этой страницы отмечена|Старые версии этих страниц отмечены}} для перевода,
но последняя версия не может быть отмечена для перевода.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Этой странице|Этим страницам}} было отказано в дальнейшем переводе.',
	'tpt-select-prioritylangs' => 'Предпочитаемые языки (коды языков, разделенные запятой):',
	'tpt-select-prioritylangs-reason' => 'Причина для установки этих предпочитаемых языков (необязательно)',
	'tpt-sections-prioritylangs' => 'Предпочитаемые языки',
	'tpt-rev-mark' => 'пометить для перевода',
	'tpt-rev-unmark' => 'убрать из перевода',
	'tpt-rev-discourage' => 'исключить',
	'tpt-rev-encourage' => 'восстановить',
	'tpt-rev-mark-tooltip' => 'Отметить последнюю версию этой страницы для перевода.',
	'tpt-rev-unmark-tooltip' => 'Исключить эту страницу из перевода.',
	'tpt-rev-discourage-tooltip' => 'Предотвратить дальнейшие переводы на этой странице.',
	'tpt-rev-encourage-tooltip' => 'Восстановить эту страницу для обычного перевода.',
	'translate-tag-translate-link-desc' => 'Перевести эту страницу',
	'translate-tag-markthis' => 'Отметить эту страницу для перевода',
	'translate-tag-markthisagain' => 'На этой странице было произведено <span class="plainlinks">[$1 изменений]</span> с момента последней <span class="plainlinks">[$2 отметки о переводе]</span>.',
	'translate-tag-hasnew' => 'На этой странице было произведено <span class="plainlinks">[$1 изменений]</span>, которые не отмечены для перевода.',
	'tpt-translation-intro' => 'Эта страница является <span class="plainlinks">[$1 переводом]</span> страницы [[$2]]. Перевод актуален и выполнен на $3%.',
	'tpt-translation-intro-fuzzy' => 'Устаревшие переводы отмечены следующим образом.',
	'tpt-languages-legend' => 'Другие языки:',
	'tpt-languages-zero' => 'Начать перевод на этот язык',
	'tpt-target-page' => 'Эта страница не может быть обновлена вручную.
Эта страница является переводом страницы [[$1]], перевод может быть обновлен с помощью специального [$2 инструмента перевода].',
	'tpt-unknown-page' => 'Это пространство имён зарезервировано для переводов текстов страниц.
Страница, которую вы пытаетесь изменить, не соответствует какой-либо странице, отмеченной для перевода.',
	'tpt-translation-restricted' => 'Перевод этой страницы на данный язык был предотвращен администратором перевода.


Причина: $1',
	'tpt-discouraged-language-force' => 'Администратор перевода ограничил список языков, на которые может быть переведена данная страница. Данный язык не входит в этот список.


Причина: $1',
	'tpt-discouraged-language' => 'Данный язык не входит в список приоритетных для данной страницы, установленных администратором перевода

Причина: $1',
	'tpt-render-summary' => 'Обновление для соответствия новой версии исходной страницы.',
	'tpt-download-page' => 'Экспортировать страницу с переводами',
	'pt-parse-open' => 'Несбалансированный тег &lt;translate>.
Шаблон перевода: <pre>$1</pre>',
	'pt-parse-close' => 'Несбалансированный тег &lt;translate>.
Шаблон перевода: <pre>$1</pre>',
	'pt-parse-nested' => 'Недопустимы вложенные разделы &lt;translate>.
Текст тега: <pre>$1</pre>',
	'pt-shake-multiple' => 'Несколько маркеров раздела в одном разделе.
Текст раздела: <pre>$1</pre>',
	'pt-shake-position' => 'Неожиданное положение маркеров разделов.
Текст раздела: <pre>$1</pre>',
	'pt-shake-empty' => 'Пустой раздел для маркера $1.',
	'pt-log-header' => 'Журнал для действий, связанных с системой перевода страниц',
	'pt-log-name' => 'Журнал перевода страниц',
	'pt-log-mark' => '{{GENDER:$2|отметил|отметила}} для перевода версию $3 страницы «[[:$1]]»',
	'pt-log-unmark' => '{{GENDER:$2|снял|сняла}} отметку перевода со страницы [[:$1]]',
	'pt-log-moveok' => '{{GENDER:$2|произвёл|произвела}} переименование доступной для перевода страницы $1 в $3',
	'pt-log-movenok' => '{{GENDER:$2|вызвал|вызвала}} ошибку при переименовании [[:$1]] в [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|произвёл|произвела}} удаление доступной для перевода страницы $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|вызвал|вызвала}} ошибку при удалении доступной для перевода страницы [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|произвёл|произвела}} удаление страницы с переводом $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|вызвал|вызвала}} ошибку при удалении страницы с переводом [[:$1]]',
	'pt-movepage-title' => 'Переименование доступной для перевода страницы $1',
	'pt-movepage-blockers' => 'Страница с возможностью перевода не может быть переименована из-за {{PLURAL:$1|следующей ошибки|следующих ошибок}}:',
	'pt-movepage-block-base-exists' => 'Основная целевая страница [[:$1]] уже существует.',
	'pt-movepage-block-base-invalid' => 'Недопустимое название основной целевой страницы.',
	'pt-movepage-block-tp-exists' => 'Перевод целевой страницы [[:$2]] уже существует.',
	'pt-movepage-block-tp-invalid' => 'Название перевода целевой страницы [[:$1]] будет считаться недействительным (возможно, слишком длинное).',
	'pt-movepage-block-section-exists' => 'Раздел целевой страницы [[:$2]] уже существует.',
	'pt-movepage-block-section-invalid' => 'Название раздела целевой страницы [[:$1]] будет считаться недействительным (возможно, слишком длинным).',
	'pt-movepage-block-subpage-exists' => 'Целевая подстраница [[:$2]] уже существует.',
	'pt-movepage-block-subpage-invalid' => 'Название целевой подстраницы [[:$1]] будет считаться недействительным (возможно, слишком длинным).',
	'pt-movepage-list-pages' => 'Список страниц для переименования',
	'pt-movepage-list-translation' => 'Страницы перевода',
	'pt-movepage-list-section' => 'Разделы страниц',
	'pt-movepage-list-other' => 'Другие подстраницы',
	'pt-movepage-list-count' => 'Всего переименовать $1 {{PLURAL:$1|страницу|страницы|страниц}}.',
	'pt-movepage-legend' => 'Переименование переводимых страниц',
	'pt-movepage-current' => 'Текущее название:',
	'pt-movepage-new' => 'Новое название:',
	'pt-movepage-reason' => 'Причина:',
	'pt-movepage-subpages' => 'Переименовать все подстраницы',
	'pt-movepage-action-check' => 'Проверить, возможно ли переименование',
	'pt-movepage-action-perform' => 'Произвести переименование',
	'pt-movepage-action-other' => 'Изменить цель',
	'pt-movepage-intro' => 'Эта служебная страница позволяет переименовывать страницы, отмеченные для перевода.
Переименование не будет произведено одномоментно, так как требуется сменить название многим страницам.
Во время процесса переименования пропадает возможность взаимодействия с этими страницами.
Возникшие проблемы будут записаны в [[Special:Log/pagetranslation|журнал]], их нужно будет исправить вручную.',
	'pt-movepage-logreason' => 'Часть переводимой страницы $1.',
	'pt-movepage-started' => 'Основная страница переименована.
Пожалуйста, проверьте [[Special:Log/pagetranslation|журнал переводимых страниц]] на наличие ошибок.',
	'pt-locked-page' => 'Эта страница заблокирована, так как переводимая страница сейчас переименовывается.',
	'pt-deletepage-lang-title' => 'Удаление страницы перевода «$1».',
	'pt-deletepage-full-title' => 'Удаление доступной для перевода страницы $1.',
	'pt-deletepage-invalid-title' => 'Указана неверная страница.',
	'pt-deletepage-invalid-text' => 'Указанная страница не относится к числу доступных для перевода страниц или их переводов.',
	'pt-deletepage-action-check' => 'Список подлежащих удалению страниц',
	'pt-deletepage-action-perform' => 'Выполнить удаление',
	'pt-deletepage-action-other' => 'Изменить цель',
	'pt-deletepage-lang-legend' => 'Удалить страницу с переводом',
	'pt-deletepage-full-legend' => 'Удалить доступную для перевода страницу',
	'pt-deletepage-any-legend' => 'Удалить доступную для перевода страницу или её перевод',
	'pt-deletepage-current' => 'Название страницы:',
	'pt-deletepage-reason' => 'Причина',
	'pt-deletepage-subpages' => 'Удалить все подстраницы',
	'pt-deletepage-list-pages' => 'Список страниц для удаления',
	'pt-deletepage-list-translation' => 'Страницы перевода',
	'pt-deletepage-list-section' => 'Страницы раздела',
	'pt-deletepage-list-other' => 'Другие подстраницы',
	'pt-deletepage-list-count' => 'В сумме $1 {{PLURAL:$1|страница|страниц}} для перевода.',
	'pt-deletepage-full-logreason' => 'Часть доступной для перевода страницы «$1».',
	'pt-deletepage-lang-logreason' => 'Часть страницы перевода «$1».',
	'pt-deletepage-started' => 'Пожалуйста, проверьте [[Special:Log/pagetranslation|журнал перевода страниц]] на предмет сообщений об ошибках и успешных завершениях.',
	'pt-deletepage-intro' => 'Это специальная страница позволяет вам удалить целые страницы, доступные для перевода, или переводы на определённый язык.
Действие по удалению не будет выполнено сразу же, так как в очереди на удаление будет много страниц.
Сбои будут отмечены в [[Special:Log/pagetranslation|журнале перевода страниц]] и должны быть устранены вручную.',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'pagetranslation' => 'Переклад сторінок',
	'right-pagetranslation' => 'Означованя верзій сторінок про переклад',
	'tpt-desc' => 'Росшыріня про перекладаня сторінок з обсягом',
	'tpt-section' => 'Блок перекладу $1',
	'tpt-section-new' => 'Новый блок перекладу.
Назва: $1',
	'tpt-section-deleted' => 'Блок перекладу $1',
	'tpt-template' => 'Шаблона сторінкы',
	'tpt-templatediff' => 'Шаблона сторінкы зміненый.',
	'tpt-diff-old' => 'Попереднїй текст',
	'tpt-diff-new' => 'Новый текст',
	'tpt-submit' => 'Означіти тоту верзію про переклад',
	'tpt-sections-oldnew' => 'Новы і екзістуючі сторінкы перекладу',
	'tpt-sections-deleted' => 'Змазаны части сторінок',
	'tpt-sections-template' => 'Шаблона сторінкы перекладу',
	'tpt-nosuchpage' => 'Сторінка $1 не екзістує',
	'tpt-oldrevision' => '$2 не є найновша верзія сторінкы [[$1]].
Про переклад є можне означіти лем найновшы сторінкы.',
	'translate-tag-translate-link-desc' => 'Перекласти тоту сторінку',
	'translate-tag-markthis' => 'Означіти тоту сторінку про переклад',
	'tpt-languages-legend' => 'Іншы языкы:',
	'pt-movepage-new' => 'Нова назва:',
	'pt-movepage-reason' => 'Причіна:',
	'pt-movepage-subpages' => 'Переменовати вшыткы підсторінкы',
	'pt-movepage-action-other' => 'Змінити ціль',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 */
$messages['sa'] = array(
	'pt-movepage-reason' => 'कारणम् :',
);

/** Sakha (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'pagetranslation' => 'Сирэйдэри тылбаастааһын',
	'right-pagetranslation' => 'Тылбаастанар сирэйдэр барылларын бэлиэтээһин',
	'tpt-desc' => 'Сирэй ис хоһоонун тылбаастыырга кэҥэтии',
	'tpt-section' => 'Тылбаас единицата $1',
	'tpt-section-new' => 'Тылбаас саҥа единицата.
Аата: $1',
	'tpt-section-deleted' => 'Тылбаас элэмиэнэ $1',
	'tpt-template' => 'Сирэй халыыба',
	'tpt-templatediff' => 'Бу сирэй халыыба уларытыллыбыт (уларытылынна).',
	'tpt-diff-old' => 'Бу иннинээҕи тиэкис',
	'tpt-diff-new' => 'Саҥа тиэкис',
	'tpt-submit' => 'Бу барылы тылбаастыырга бэлиэтээһин',
	'tpt-sections-oldnew' => 'Тылбаас саҥа уонна уруккуттан баар элэмиэннэрэ',
	'tpt-sections-deleted' => 'Тылбаас сотуллубут элэмиэннэрэ',
	'tpt-sections-template' => 'Тылбаас сирэйин халыыба',
	'tpt-badtitle' => 'Сирэй ыйыллыбыт аата ($1) аат буолар кыаҕа суох',
	'tpt-oldrevision' => '$2 [[$1]] сирэй бүтэһик барыла буолбатах.
Сирэйдэр бүтэһик эрэ барыллара тылбааска бэлиэтэниэхтэрин сөп.',
	'tpt-notsuitable' => '$1 сирэй тылбаастыырга табыгаһа суох.
<nowiki><translate></nowiki> тиэктээҕин уонна синтаксииһэ сөпкө суруллубутун бэрэбиэркэлээ.',
	'tpt-saveok' => '[[$1]] сирэй тылбаастанарга бэлиэтэммит, кини иһигэр {{PLURAL:$2|биир тылбаастаныахтаах этии|$2 тылбаастаныахтаах этии}} баар.
Билигин сирэйи <span class="plainlinks">[$3 тылбаастыахха]</span> сөп.',
	'tpt-badsect' => '"$1" диэн аат $2 тылбаас единицатын аатыгар сөп түбэспэт.',
	'tpt-showpage-intro' => 'Манна саҥа, билигин баар уонна сотуллубут салаалар көстөллөр.
Бу барылы тылбаастаныахтаах курдук бэлиэтиэҥ иннинэ салааҕа уларытыы төһө кыалларынан аҕыйах буоларын ситиһэ сатыахтааххын өйдөө, ол тылбаасчыттар үлэлэрин аҕыйатыа.',
	'tpt-mark-summary' => 'Бу барылы тылбастаныахтаах курдук бэлиэтииргэ',
	'tpt-edit-failed' => 'Бу сирэйи саҥардар табыллыбата: $1',
);

/** Sicilian (Sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'pt-movepage-reason' => 'Mutivu:',
	'pt-deletepage-reason' => 'Mutivu:',
);

/** Sinhala (සිංහල)
 * @author චතුනි අලහප්පෙරුම
 * @author තඹරු විජේසේකර
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 * @author ශ්වෙත
 */
$messages['si'] = array(
	'pagetranslation' => 'පිටුව පරිවර්තනය',
	'right-pagetranslation' => 'පරිවර්තනය සඳහා පිටුවල අනුවාද සලකුණු කරන්න',
	'tpt-desc' => 'අන්තර්ගත පිටු පරිවර්තනය කිරීම සඳහා විස්තීරණය',
	'tpt-section' => '$1 පරිවර්තන ඒකකය',
	'tpt-section-new' => 'නව පරිවර්තන ඒකකය.
නම: $1',
	'tpt-section-deleted' => '$1 පරිවර්තන ඒකකය',
	'tpt-template' => 'පිටු සැකිල්ල',
	'tpt-templatediff' => 'පිටු සැකිල්ල වෙනස් වී ඇත',
	'tpt-diff-old' => 'පූර්ව පෙළ',
	'tpt-diff-new' => 'නව පෙළ',
	'tpt-submit' => 'මෙම අනුවාදය පරිවර්තනය සඳහා සලකුණු කරගන්න',
	'tpt-sections-oldnew' => 'නව හා දැනට පවත්නා පරිවර්තන ඒකක',
	'tpt-sections-deleted' => 'මකාදැමුණු පරිවර්තන ඒකක',
	'tpt-sections-template' => 'පරිවර්තන පිටුව සැකිල්ල',
	'tpt-action-nofuzzy' => 'පරිනර්තන අවලංගු නොකරන්න',
	'tpt-badtitle' => 'දී ඇති පිටු නාමය ($1) නීතික මාතෘකාවක් නොවේ',
	'tpt-nosuchpage' => '$1 පිටුව නොපවතියි',
	'tpt-oldrevision' => '$2 යනු [[$1]] පිටුවෙහි නවතම අනුවාදය නොවේ.
නවතම අනුවාදයන් පමණක් පරිවර්තනය සඳහා තෝරාගත හැක.',
	'tpt-notsuitable' => '$1 පිටුව පරිවර්තනය සඳහා සුදුසු නොවේ.
එය සතුව <nowiki><translate></nowiki> ටැගයන් පැවතීම සහ එය සතුව නීතික වින්‍යාසයක් ඇතිබව සහතික කරන්න.',
	'tpt-saveok' => '{{PLURAL:$2|එක් පරිවර්තන ඒකකයක්|පරිවර්තන ඒකක $2 ක්}} හා සමගින් පරිවර්තනය කෙරුමට [[$1]] පිටුව ‍සලකුණු කොට ඇත.
මෙම පිටුව දැන් <span class="plainlinks">[$3 පරිවර්තනය කල හැක]</span>.',
	'tpt-badsect' => '"$1" යනු $2 පරිවර්තන ඒකකය සඳහා නීතික මාතෘකාවක් නොවේ.',
	'tpt-mark-summary' => 'පරිවර්තනය සඳහා මෙම අනුවාදය සලකුණු කරන ලදී',
	'tpt-edit-failed' => 'පිටුව යාවත්කාලීන කල නොහැක: $1',
	'tpt-already-marked' => 'මෙම පිටුවෙහි නවතම අනුවාදය පරිවර්තනය සඳහා දැනටමත් සලකුණු කොට ඇත.',
	'tpt-unmarked' => '$1 පිටුව පරිවර්තනය සඳහා තවදුරටත් සලකුණු කර නොමැත.',
	'tpt-new-pages-title' => 'පරිවර්තනය සඳහා යෝජිත පිටු',
	'tpt-old-pages-title' => 'පරිවර්තනයේ ඇති පිටු',
	'tpt-other-pages-title' => 'බිඳුණු පිටු',
	'tpt-discouraged-pages-title' => 'අධෛර්යකල පිටු',
	'tpt-old-pages' => 'පරිවර්තනය සඳහා {{PLURAL:$1|මෙම පිටුවේ|මෙම පිටුවල}} සමහර අනුවාදයන් සලකුණු කරන ලදී.',
	'tpt-rev-mark' => 'පරිවර්තනය සඳහා සලකුණු කරන්න',
	'tpt-rev-unmark' => 'පරිවර්තනයෙන් ඉවත් කරන්න',
	'tpt-rev-discourage' => 'අධෛර්ය කරන්න',
	'tpt-rev-encourage' => 'නැවත පිහිටුවන්න',
	'tpt-rev-mark-tooltip' => 'පරිවර්තනය සඳහා මෙම පිටුවෙහි නවතම අනුවාදය සලකුණු කරන්න.',
	'tpt-rev-unmark-tooltip' => 'මෙම පිටුව පරිවර්තනයෙන් ඉවත් කරන්න.',
	'tpt-rev-discourage-tooltip' => 'මෙම පිටුවෙහි ඉදිරි පරිවර්තනයන් අධෛර්ය කරන්න.',
	'tpt-rev-encourage-tooltip' => 'සාමාන්‍ය පරිවර්තනය වෙත මෙම පිටුව නැවත පිහිටුවන්න.',
	'translate-tag-translate-link-desc' => 'මෙම පිටුව පරිවර්තනය කරන්න',
	'translate-tag-markthis' => 'පරිවර්තනය සඳහා මෙම පිටුව සලකුණු කරන්න',
	'translate-tag-hasnew' => 'මෙම පිටුවේ අඩංගු වන <span class="plainlinks">[$1 වෙනස්කම්]</span> පරිවර්තනය සඳහා සලකුණු කොට නොමැත.',
	'tpt-translation-intro-fuzzy' => 'යල්පැනපු පරිවර්තනයන් මෙලෙස සලකුණු කරයි.',
	'tpt-languages-legend' => 'වෙනත් භාෂා:',
	'tpt-render-summary' => 'මූලාශ්‍ර පිටුවේ නව අනුවාදය වෙත ගැලපීම සඳහා යාවත්කාලීන කරමින්',
	'tpt-download-page' => 'පරිවර්තනය සහිත පිටුව නිර්යාත කරන්න',
	'pt-shake-empty' => '$1 ලකුණුකරණය සඳහා හිස් කාණ්ඩය.',
	'pt-log-name' => 'පිටු පරිවර්තන ලඝු සටහන',
	'pt-log-unmark' => '"[[:$1]]" පිටුව පරිවර්තනයෙන් {{GENDER:$2|ඉවත්කරන ලදී}}',
	'pt-log-movenok' => '[[:$1]] [[:$3]] වෙත ගෙනයමින් සිටින අතරතුරදී ගැටලුවක් {{GENDER:$2|හට ගැනිණි}}',
	'pt-log-delete-full-ok' => '$1 පරිවර්තනමය පිටුවේ මකාදැමීම {{GENDER:$2|සම්පූර්ණ කරන ලදී}}',
	'pt-log-delete-full-nok' => '[[:$1]] පරිවර්තනමය පිටුව මකමින් සිටිනා අතරතුර ගැටලුවක් {{GENDER:$2|හට ගැනිණි}}',
	'pt-log-delete-lang-ok' => '$1 පරිවර්තන පිටුවේ මකාදැමීම {{GENDER:$2|සම්පූර්ණ කරන ලදී}}',
	'pt-log-delete-lang-nok' => '[[:$1]] පරිවර්තන පිටුව මකමින් සිටිනා අතරතුර ගැටලුවක් {{GENDER:$2|හට ගැනිණි}}',
	'pt-movepage-title' => 'පරිවර්තනය කල හැකි $1 පිටුව ගෙනයන්න',
	'pt-movepage-block-base-exists' => 'ඉලක්කගත ආධාරක පිටුව [[:$1]] දැනටමත් පවතියි.',
	'pt-movepage-block-base-invalid' => 'ඉලක්කගත ආධාරක පිටුව වලංගු මාතෘකාවක් නොවේ.',
	'pt-movepage-block-tp-exists' => 'ඉලක්කගත පරිවර්තනමය පිටුව [[:$2]] දැනටමත් පවතියි.',
	'pt-movepage-block-section-exists' => 'ඉලක්කගත අංශ පිටුව [[:$2]] දැනටමත් පවතියි.',
	'pt-movepage-block-subpage-exists' => 'ඉලක්කගත උපපිටුව [[:$2]] දැනටමත් පවතියි.',
	'pt-movepage-list-pages' => 'ගෙනයාමට ඇති පිටු ලැයිස්තුව',
	'pt-movepage-list-translation' => 'පරිවර්තන පිටු',
	'pt-movepage-list-section' => 'කාණ්ඩ පිටු',
	'pt-movepage-list-other' => 'වෙනත් උපපිටු',
	'pt-movepage-list-count' => 'එකතුව වශයෙන් {{PLURAL:$1|පිටු|පිටු}} $1 ක් ගෙන යාමට ඇත.',
	'pt-movepage-legend' => 'පරිවර්තනය කල හැකි පිටුව ගෙනයන්න',
	'pt-movepage-current' => 'වත්මන් නාමය:',
	'pt-movepage-new' => 'නව නම:',
	'pt-movepage-reason' => 'හේතුව:',
	'pt-movepage-subpages' => 'සියලුම උපපිටු ගෙනයන්න',
	'pt-movepage-action-check' => 'ගෙනයාම කළහැකි දැයි පිරික්සන්න',
	'pt-movepage-action-perform' => 'ගෙනයන්න',
	'pt-movepage-action-other' => 'ඉලක්කය මාරු කරන්න',
	'pt-movepage-logreason' => '$1 පරිවර්තනය කල හැකි පිටුවෙහි කොටසක්.',
	'pt-movepage-started' => 'පදනම් පිටුව දැන් ගෙනයන ලදී.
සම්පූර්ණ පණිවුඩය සහ දෝෂයන් සඳහා කරුණාකර [[Special:Log/pagetranslation|පිටු පරිවර්තන ලඝු සටහන]] පිරික්සන්න.',
	'pt-locked-page' => 'මෙම පිටුව අගුළුදමා ඇත මන්ද පරිවර්තනමය පිටුව ගෙනයමින් පවතියි.',
	'pt-deletepage-lang-title' => '$1 පරිවර්තන පිටුව මකමින්.',
	'pt-deletepage-full-title' => '$1 පරිවර්තනය කල හැකි පිටුව මකමින්.',
	'pt-deletepage-invalid-title' => 'විශේෂණය කෙරූ පිටුව වලංගු නොවේ.',
	'pt-deletepage-invalid-text' => 'විශේෂණය කෙරූ පිටුව පරිවර්තනය කල නොහැකි හෝ පරිවර්තනමය නොවේ.',
	'pt-deletepage-action-check' => 'මැකීමට ඇති පිටු ලැයිස්තුගත කරන්න',
	'pt-deletepage-action-perform' => 'මැකීම සිදු කරන්න',
	'pt-deletepage-action-other' => 'ඉලක්කය වෙනස් කරන්න',
	'pt-deletepage-lang-legend' => 'පරිවර්තන පිටුව මකමින්',
	'pt-deletepage-full-legend' => 'පරිවර්තනය කල හැකි පිටුව මකන්න',
	'pt-deletepage-any-legend' => 'පරිවර්තනය කළහැකි හෝ පරිවර්තනය කළහැකි පරිවර්තන පිටුවක් මකන්න',
	'pt-deletepage-current' => 'පිටු නාමය:',
	'pt-deletepage-reason' => 'හේතුව:',
	'pt-deletepage-subpages' => 'සියලුම උපපිටු මකන්න',
	'pt-deletepage-list-pages' => 'මැකීමට ඇති පිටු ලැයිස්තුව',
	'pt-deletepage-list-translation' => 'පරිවර්තන පිටු',
	'pt-deletepage-list-section' => 'කාණ්ඩ පිටු',
	'pt-deletepage-list-other' => 'වෙනත් උපපිටු',
	'pt-deletepage-list-count' => 'එකතුව වශයෙන් {{PLURAL:$1|පිටු|පිටු}} $1 ක් මැකීමට ඇත.',
	'pt-deletepage-full-logreason' => '$1 පරිවර්තනමය පිටුවෙහි කොටසක්.',
	'pt-deletepage-lang-logreason' => '$1 පරිවර්තන පිටුවෙහි කොටසක්.',
	'pt-deletepage-started' => 'සම්පූර්ණ පණිවුඩය සහ දෝෂයන් සඳහා කරුණාකර [[Special:Log/pagetranslation|පිටු පරිවර්තන ලඝු සටහන]] පිරික්සන්න.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Mormegil
 * @author Rudko
 */
$messages['sk'] = array(
	'pagetranslation' => 'Preklad stránky',
	'right-pagetranslation' => 'Označiť verzie stránok na preklad',
	'tpt-desc' => 'Rozšírenie na preklad stránok s obsahom',
	'tpt-section' => 'Jednotka prekladu $1',
	'tpt-section-new' => 'Nová jednotka prekladu.
Názov: $1',
	'tpt-section-deleted' => 'Jednotka prekladu $1',
	'tpt-template' => 'Šablóna stránky',
	'tpt-templatediff' => 'Šablóna stránky sa zmenila.',
	'tpt-diff-old' => 'Predošlý text',
	'tpt-diff-new' => 'Nový text',
	'tpt-submit' => 'Označiť túto verziu na preklad',
	'tpt-sections-oldnew' => 'Nové a existujúce jednotky prekladu',
	'tpt-sections-deleted' => 'Zmazané jednotky prekladu',
	'tpt-sections-template' => 'Šablóna stránky na preklad',
	'tpt-badtitle' => 'Zadaný názov stránky ($1) nie je platný',
	'tpt-oldrevision' => '$2 nie je najnovšia verzia stránky [[$1]].
Na preklad je možné označiť iba posledné verzie stránok.',
	'tpt-notsuitable' => 'Stránka $1 nie je vhodná na preklad.
Uistite sa, že obsahuje značky <nowiki><translate></nowiki> a má platnú syntax.',
	'tpt-saveok' => 'Stránka [[$1]] bola označená na preklad s $2 {{PLURAL:$2|jednotkou prekladu, ktorú|jednotkami prekladu, ktoré}} možno preložiť.
Túto stránku je teraz možné <span class="plainlinks">[$3 preložiť]</span>.',
	'tpt-badsect' => '„$1“ nie je platný názov jednotky prekladu $2.',
	'tpt-showpage-intro' => 'Dolu sú uvedené nové, súčasné a zmazané sekcie,
Predtým než túto verziu označíte na preklad skontrolujte, že zmeny sekcií sú minimálne aby ste zabránili zbytočnej práci prekladateľov.',
	'tpt-mark-summary' => 'Táto verzia je označená na preklad',
	'tpt-edit-failed' => 'Nebolo možné aktualizovať stránku: $1',
	'tpt-already-marked' => 'Najnovšia verzia tejto stránky už bola označená na preklad.',
	'tpt-list-nopages' => 'Žiadne stránky nie sú označené na preklad alebo na to nie sú pripravené.',
	'tpt-new-pages' => '{{PLURAL:$1|Táto stránka obsahuje|Tieto stránky obsahujú}} text so značkami na preklad, ale žiadna verzia {{PLURAL:$1|tejto stránky|týchto stránok}} nie je označená na preklad.',
	'tpt-old-pages' => 'Niektoré verzie {{PLURAL:$1|tejto stránky|týchto stránok}} boli označené na preklad.',
	'translate-tag-translate-link-desc' => 'Preložiť túto stránku',
	'translate-tag-markthis' => 'Označiť túto stránku na preklad',
	'translate-tag-markthisagain' => 'Táto stránka obsahuje <span class="plainlinks">[$1 {{PLURAL:$1|zmenu|zmeny|zmien}}]</span> odkedy bola naposledy <span class="plainlinks">[$2 označená na preklad]</span>.',
	'translate-tag-hasnew' => 'Táto stránka obsahuje <span class="plainlinks">[$1 zmeny]</span>, ktoré nie sú označené na preklad.',
	'tpt-translation-intro' => 'Táto stránka je <span class="plainlinks">[$1 preloženou verziou]</span> stránky [[$2]] a preklad je hotový a aktuálny na $3 %.',
	'tpt-translation-intro-fuzzy' => 'Zastaralé preklady sú označené takto.',
	'tpt-languages-legend' => 'Iné jazyky:',
	'tpt-target-page' => 'Túto stránku nemožno aktualizovať ručne.
Táto stránka je prekladom stránky [[$1]] a preklad možno aktualizovať pomocou [$2 nástroja na preklad].',
	'tpt-unknown-page' => 'Tento menný priestor je vyhradený na preklady stránok s obsahom.
Zdá sa, že stránka, ktorú sa pokúšate upravovať nezodpovedá žiadnej stránke označenej na preklad.',
	'tpt-render-summary' => 'Aktualizácia na novú verziu zdrojovej stránky',
	'tpt-download-page' => 'Exportovať stránky s prekladmi',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 * @author Irena Plahuta
 * @author Smihael
 */
$messages['sl'] = array(
	'pagetranslation' => 'Prevajanje strani',
	'right-pagetranslation' => 'Označi različice strani za prevajanje',
	'tpt-desc' => 'Razširitev za prevajanje vsebine strani',
	'tpt-section' => 'Prevajalna enota $1',
	'tpt-section-new' => 'Nove prevajalna enota.
Ime: $1',
	'tpt-section-deleted' => 'Prevajalna enota $1',
	'tpt-template' => 'Predloga strani',
	'tpt-templatediff' => 'Predloga te strani se je spremenila.',
	'tpt-diff-old' => 'Prejšnje besedilo',
	'tpt-diff-new' => 'Novo besedilo',
	'tpt-submit' => 'Označi to različico za prevajanje',
	'tpt-sections-oldnew' => 'Nove in obstoječe prevajalske enote',
	'tpt-sections-deleted' => 'Izbrisane prevajalske enote',
	'tpt-sections-template' => 'Prevod predloge strani',
	'tpt-action-nofuzzy' => 'Ne označuj prevodov kot ohlapne',
	'tpt-badtitle' => 'Dano ime strani ($1) ni veljaven naslov',
	'tpt-nosuchpage' => 'Stran $1 ne obstaja',
	'tpt-oldrevision' => '$2 ni najnovejša različics strani [[$1]].
Samo zadnje različice se lahko označi za prevod.',
	'tpt-notsuitable' => 'Stran $1 ni primerna za prevod.
Prepričajte se, da ima oznake <nowiki><translate></nowiki> in veljavno sintakso.',
	'tpt-saveok' => 'Stran [[$1]] je bila označena za prevod z $2 {{PLURAL:$2|prevajalsko enoto|prevajalskima enotama|prevajalskimi enotami}}.
Stran je sedaj mogoče <span class="plainlinks">[$3 prevesti]</span>.',
	'tpt-badsect' => '»$1« ni veljavno ime za prevajalsko enoto $2.',
	'tpt-showpage-intro' => 'Spodaj so navedeni novi, obstoječi in izbrisani razdelki.
Pred označitvijo te redakcije za prevajanje preverite, da so spremembe razdelkov čim manjše, saj tako prevajalcem prihranite nepotrebno delo.',
	'tpt-mark-summary' => 'Označil to različico za prevajanje',
	'tpt-edit-failed' => 'Ni mogoče posodobiti strani: $1',
	'tpt-duplicate' => 'Ime prevajalne enote $1 se uporablja več kot enkrat.',
	'tpt-already-marked' => 'Najnovejša različica te strani je že bila označena za prevajanje.',
	'tpt-unmarked' => 'Stran $1 ni več označena za prevajanje.',
	'tpt-list-nopages' => 'Nobena stran ni označena za prevajanje, niti pripravljena, da se označi za prevajanje.',
	'tpt-new-pages-title' => 'Strani, predlagane za prevajanje',
	'tpt-old-pages-title' => 'Strani v prevajanju',
	'tpt-other-pages-title' => 'Poškodovane strani',
	'tpt-discouraged-pages-title' => 'Zatrte strani',
	'tpt-new-pages' => '{{PLURAL:$1|Ta stran vsebuje|Ti strani vsebujeta|Te strani vsebujejo}} besedilo z oznakami za prevajanje,
vendar ni trenutno nobena različica {{PLURAL:$1|te strani|teh strani}} označena za prevajanje.',
	'tpt-old-pages' => 'Nekatere različice {{PLURAL:$1|te strani|teh strani}} so bile označene za prevajanje.',
	'tpt-other-pages' => '{{PLURAL:$1|Stara različica te strani je bila označena|Stari različici teh strani sta bili označeni|Stare različice teh strani so bile označene}} za prevajanje,
vendar {{PLURAL:$1|trenutne različice|trenutnih različic}} ni mogoče označiti za prevajanje.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Naslednja stran je zatrta|Naslednji strani sta zatrti|Naslednje strani so zatrte}} pred nadaljnjimi prevodi.',
	'tpt-rev-mark' => 'Označi za prevajanje',
	'tpt-rev-unmark' => 'odstrani iz prevoda',
	'tpt-rev-discourage' => 'zatri',
	'tpt-rev-encourage' => 'obnovi',
	'tpt-rev-mark-tooltip' => 'Označi zadnjo različico strani za prevajanje.',
	'tpt-rev-unmark-tooltip' => 'Odstranite stran iz prevajanja.',
	'tpt-rev-discourage-tooltip' => 'Zatri nadaljnje prevode strani.',
	'tpt-rev-encourage-tooltip' => 'Obnovite stran na običajni prevod.',
	'translate-tag-translate-link-desc' => 'Prevedi to stran',
	'translate-tag-markthis' => 'Označi to stran za prevajanje',
	'translate-tag-markthisagain' => 'Ta stran ima <span class="plainlinks">[$1 sprememb]</span> odkar je bila nazadnje <span class="plainlinks">[$2 označena za prevajanje]</span>.',
	'translate-tag-hasnew' => 'Stran vsebuje <span class="plainlinks">[$1 spremembe]</span>, ki niso označene za prevajanje.',
	'tpt-translation-intro' => 'Ta stran je <span class="plainlinks">[$1 prevedena različica]</span> strani [[$2]] in prevod je $3 % dokončan.',
	'tpt-translation-intro-fuzzy' => 'Zastareli prevodi so označeni tako.',
	'tpt-languages-legend' => 'Ostali jeziki:',
	'tpt-target-page' => 'Te strani ni mogoče ročno posodobiti.
Ta stran je prevod strani [[$1]], njen prevod lahko posodobite z uporabo [$2 prevajalskega orodja].',
	'tpt-unknown-page' => 'Ta imenski prostor je pridržan za prevode vsebinskih strani.
Stran, ki jo poskušate urediti, ne ustreza nobeni strani označeni za prevajanje.',
	'tpt-render-summary' => 'Posodabljanje za ujemanje nove različice izvorne strani',
	'tpt-download-page' => 'Izvozi stran s prevodi',
	'pt-parse-open' => 'Neizenačena etiketa &lt;translate>.
Prevajalna predloga: <pre>$1</pre>',
	'pt-parse-close' => 'Neizenačena etiketa &lt;/translate>.
Prevajalna predloga: <pre>$1</pre>',
	'pt-parse-nested' => 'Gnezdeni razdelki &lt;translate> niso dovoljeni.
Besedilo etikete: <pre>$1</pre>',
	'pt-shake-multiple' => 'Več označevalcev razdelkov za en razdelek.
Besedilo razdelka: <pre>$1</pre>',
	'pt-shake-position' => 'Označevalci razdelkov na nepričakovanem položaju.
Besedilo razdelka: <pre>$1</pre>',
	'pt-shake-empty' => 'Prazen razdelek za označevalec $1.',
	'pt-log-header' => 'Dnevnik dejanj, ki so povezana s sistemom prevajanja strani',
	'pt-log-name' => 'Dnevnik prevajanja strani',
	'pt-log-mark' => 'je {{GENDER:$2|označil|označila|označil(-a)}} redakcijo $3 strani »[[:$1]]« za prevajanje',
	'pt-log-unmark' => 'je {{GENDER:$2|odstranil|odstranila|odstranil(-a)}} stran »[[:$1]]« iz prevajanja',
	'pt-log-moveok' => 'je {{GENDER:$2|končal|končala|končal(-a)}} s preimenovanjem prevedljive strani $1 v $3',
	'pt-log-movenok' => '{{GENDER:$2|naletel|naletela|naletel(-a)}} na težavo med prestavljanjem [[:$1]] na [[:$3]]',
	'pt-log-delete-full-ok' => 'je {{GENDER:$2|zaključil|zaključila}} z brisanjem prevedljive strani $1',
	'pt-log-delete-full-nok' => 'je {{GENDER:$2|naletel|naletela}} na težavo med brisanjem prevedljive strani [[:$1]]',
	'pt-log-delete-lang-ok' => 'je {{GENDER:$2|zaključil|zaključila}} z brisanjem strani prevoda $1',
	'pt-log-delete-lang-nok' => 'je {{GENDER:$2|naletel|naletela}} na težavo med brisanjem strani prevoda [[:$1]]',
	'pt-movepage-title' => 'Premakni prevedljivo stran $1',
	'pt-movepage-blockers' => 'Prevedljive strani ni mogoče prestaviti na novo ime zaradi {{PLURAL:$1|naslednje napake|naslednjih napak}}:',
	'pt-movepage-block-base-exists' => 'Ciljna izhodiščna stran [[:$1]] obstaja.',
	'pt-movepage-block-base-invalid' => 'Ciljna izhodiščna stran ni veljaven naslov.',
	'pt-movepage-block-tp-exists' => 'Ciljna stran s prevodom [[:$2]] obstaja.',
	'pt-movepage-block-tp-invalid' => 'Naslov ciljne strani s prevodom za [[:$1]] bi bil neveljaven (predolg?).',
	'pt-movepage-block-section-exists' => 'Ciljna stran razdelka [[:$2]] obstaja.',
	'pt-movepage-block-section-invalid' => 'Naslov ciljne strani razdelka za [[:$1]] bi bil neveljaven (predolg?).',
	'pt-movepage-block-subpage-exists' => 'Ciljna podstran [[:$2]] obstaja.',
	'pt-movepage-block-subpage-invalid' => 'Naslov ciljne podstrani [[:$1]] bi bil neveljaven (predolg?).',
	'pt-movepage-list-pages' => 'Seznam strani za prestavitev',
	'pt-movepage-list-translation' => 'Strani s prevodi',
	'pt-movepage-list-section' => 'Strani razdelkov',
	'pt-movepage-list-other' => 'Ostale podstrani',
	'pt-movepage-list-count' => 'Skupno je za prestaviti $1 {{PLURAL:$1|stran|strani}}.',
	'pt-movepage-legend' => 'Premakni prevedljivo stran',
	'pt-movepage-current' => 'Trenutno ime:',
	'pt-movepage-new' => 'Novo ime:',
	'pt-movepage-reason' => 'Razlog:',
	'pt-movepage-subpages' => 'Prestavi vse podstrani',
	'pt-movepage-action-check' => 'Preveri, če je prestavitev mogoča',
	'pt-movepage-action-perform' => 'Izvedi prestavitev',
	'pt-movepage-action-other' => 'Spremeni cilj',
	'pt-movepage-intro' => 'Ta posebna stran omogoča prestavljanje strani, ki so označene za prevajanje.
Dejanje prestavitve ne bo izvedeno takoj, saj bo potrebno prestaviti veliko strani.
Medtem ko se strani premikajo, ne bo mogoče delovati na straneh v obravnavi.
Neuspehi bodo zabeleženi v [[Special:Log/pagetranslation|dnevniku strani prevodov]] in jih je potrebno ročno popraviti.',
	'pt-movepage-logreason' => 'Del prevedljive strani $1.',
	'pt-movepage-started' => 'Izhodna stran je prestavljena.
Prosimo, preverite [[Special:Log/pagetranslation|dnevnik strani prevodov]] za napake in sporočila o dokončanju.',
	'pt-locked-page' => 'Stran je zaklenjena, ker se prevedljiva stran trenutno prestavlja.',
	'pt-deletepage-lang-title' => 'Brisanje strani pravoda $1.',
	'pt-deletepage-full-title' => 'Brisanje prevedljive strani $1.',
	'pt-deletepage-invalid-title' => 'Določena stran ni veljavna.',
	'pt-deletepage-invalid-text' => 'Določena stran ni prevedljiva stran niti njen prevod.',
	'pt-deletepage-action-check' => 'Navedi strani za izbris',
	'pt-deletepage-action-perform' => 'Izvedi izbris',
	'pt-deletepage-action-other' => 'Spremeni cilj',
	'pt-deletepage-lang-legend' => 'Izbriši stran prevoda',
	'pt-deletepage-full-legend' => 'Izbriši prevedljivo stran',
	'pt-deletepage-any-legend' => 'Izbriši prevedljivo stran ali prevod prevedljive strani',
	'pt-deletepage-current' => 'Naslov strani:',
	'pt-deletepage-reason' => 'Razlog:',
	'pt-deletepage-subpages' => 'Izbriši vse podstrani',
	'pt-deletepage-list-pages' => 'Seznam strani za izbris',
	'pt-deletepage-list-translation' => 'Strani prevodov',
	'pt-deletepage-list-section' => 'Strani razdelkov',
	'pt-deletepage-list-other' => 'Druge podstrani',
	'pt-deletepage-list-count' => 'Skupno je za izbrisati $1 {{PLURAL:$1|stran|strani}}.',
	'pt-deletepage-full-logreason' => 'Del prevedljive strani $1.',
	'pt-deletepage-lang-logreason' => 'Del strani prevoda $1.',
	'pt-deletepage-started' => 'Prosimo, preverite [[Special:Log/pagetranslation|dnevnik prevajanja strani]] za napake in sporočilo o dokončanju.',
	'pt-deletepage-intro' => 'Ta posebna stran vam omogoča izbrisati celotne prevedljive strani ali prevode enega jezika.
Dejanje izbrisa ne bo izvedeno takoj, ker je potrebno izbrisati veliko strani.
Neuspehi bodo zabeleženi v [[Special:Log/pagetranslation|dnevniku prevajanja strani]] in jih morate urediti ročno.',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'right-pagetranslation' => 'означавање издања страница за превод',
	'tpt-diff-old' => 'Претходни текст',
	'tpt-diff-new' => 'Следећи текст',
	'tpt-submit' => 'Означи ову верзију за превод',
	'tpt-rev-mark' => 'означи за превођење',
	'tpt-rev-unmark' => 'уклони из превода',
	'tpt-rev-discourage' => 'непрепоручено',
	'tpt-rev-encourage' => 'врати',
	'tpt-rev-mark-tooltip' => 'Означи последњу верзију странице као „за превођење“.',
	'tpt-rev-unmark-tooltip' => 'Уклони страницу из превода.',
	'tpt-rev-discourage-tooltip' => 'Постави страницу као непрепоручену за даљње превођење.',
	'tpt-rev-encourage-tooltip' => 'Врати страницу за нормално превођење.',
	'translate-tag-translate-link-desc' => 'Преведите ову страницу',
	'translate-tag-markthis' => 'Означи страницу као „за превођење“',
	'tpt-translation-intro' => 'Ова страница је <span class="plainlinks">[$1 преведено издање]</span> странице [[$2]]. Превод је $3% завршен.',
	'tpt-languages-separator' => '&#160;•&#160;',
	'pt-log-name' => 'Историја превода страница',
	'pt-log-mark' => '{{GENDER:$2|је означио|је означила|је означио}} измену $3 странице „[[:$1]]“ за превод',
	'pt-log-unmark' => '{{GENDER:$2|је уклонио|је уклонила|је уклонио}} страницу „[[:$1]]“ из превода',
	'pt-log-moveok' => '{{GENDER:$2|је преименовао|је преименовала|је преименовао}} преводиву страницу $1 у $3',
	'pt-log-movenok' => '{{GENDER:$2|је наишао|је наишла|је наишао}} на проблем при премештању [[:$1]] у [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|је обрисао|је обрисала|је обрисао}} преводиву страницу „$1“',
	'pt-log-delete-full-nok' => '{{GENDER:$2|је наишао|је наишла|је наишао}} на проблем при брисању преводиве странице „[[:$1]]“',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|је обрисао|је обрисала|је обрисао}} страницу за превод $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|је наишао|је наишла|је наишао}} на проблем при брисању странице за превод „[[:$1]]“',
	'pt-movepage-title' => 'Премештање преводиве странице $1',
	'pt-movepage-block-base-exists' => 'Циљна основна страница [[:$1]] постоји.',
	'pt-movepage-block-base-invalid' => 'Циљ основне странице не представља исправан наслов.',
	'pt-movepage-block-tp-exists' => 'Циљна страница за превод [[:$2]] постоји.',
	'pt-movepage-block-tp-invalid' => 'Наслов циљне странице за превод за [[:$1]] био би неисправан (предугачак?).',
	'pt-movepage-block-section-exists' => 'Циљна страница за поднаслов [[:$2]] постоји.',
	'pt-movepage-block-section-invalid' => 'Наслов циљне странице за поднаслов за [[:$1]] био би неисправан (предугачак?).',
	'pt-movepage-block-subpage-exists' => 'Циљна подстраница [[:$2]] постоји.',
	'pt-movepage-block-subpage-invalid' => 'Наслов циљне подстранице за [[:$1]] био би неисправан (предугачак?).',
	'pt-movepage-list-pages' => 'Списак страница за премештање',
	'pt-movepage-list-translation' => 'Странице за превод',
	'pt-movepage-list-section' => 'Странице за поднаслове',
	'pt-movepage-list-other' => 'Друге подстранице',
	'pt-movepage-list-count' => 'Укупно $1 {{PLURAL:$1|страница|странице|страница}} за премештање.',
	'pt-movepage-legend' => 'Премести преводиву страницу',
	'pt-movepage-current' => 'Текући назив:',
	'pt-movepage-new' => 'Нови назив:',
	'pt-movepage-reason' => 'Разлог:',
	'pt-movepage-subpages' => 'Премести све подстранице',
	'pt-movepage-action-check' => 'Провери да ли је премештање изводљиво',
	'pt-movepage-action-perform' => 'Премести',
	'pt-movepage-action-other' => 'Промени циљ',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Michaello
 * @author Rancher
 */
$messages['sr-el'] = array(
	'right-pagetranslation' => 'označavanje izdanja stranica za prevod',
	'tpt-diff-old' => 'Prethodni tekst',
	'tpt-diff-new' => 'Sledeći tekst',
	'tpt-submit' => 'Označi ovu verziju za prevod',
	'translate-tag-translate-link-desc' => 'Prevedite ovu stranu',
	'tpt-translation-intro' => 'Ova stranica je <span class="plainlinks">[$1 prevedeno izdanje]</span> stranice [[$2]]. Prevod je $3% završen.',
	'tpt-languages-separator' => '&#160;•&#160;',
	'pt-log-name' => 'Istorija prevoda stranice',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'translate-tag-translate-link-desc' => 'Disse Siede uursätte',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'pagetranslation' => 'Alihbasa kaca',
	'tpt-diff-old' => 'Téks saméméhna',
	'tpt-diff-new' => 'Téks anyar',
	'tpt-nosuchpage' => 'Kaca $1 euweuh.',
	'pt-movepage-current' => 'Ngaran ayeuna:',
	'pt-movepage-new' => 'Ngaran anyar:',
	'pt-movepage-reason' => 'Alesan:',
	'pt-movepage-subpages' => 'Pindahkeun sakabéh subkaca',
	'pt-movepage-action-check' => 'Pariksa susuganan bisa dipindahkeun',
	'pt-movepage-action-perform' => 'Pindahkeun',
	'pt-movepage-action-other' => 'Ganti tujul',
);

/** Swedish (Svenska)
 * @author Dafer45
 * @author Fluff
 * @author Jopparn
 * @author M.M.S.
 * @author Najami
 * @author Rotsee
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'pagetranslation' => 'Sidöversättning',
	'right-pagetranslation' => 'Märk versioner av sidor för översättning',
	'tpt-desc' => 'Programtillägg för översättning av innehållssidor',
	'tpt-section' => 'Översättningsenhet $1',
	'tpt-section-new' => 'Ny översättningsenhet. Namn: $1',
	'tpt-section-deleted' => 'Översättningsenhet $1',
	'tpt-template' => 'Sidmall',
	'tpt-templatediff' => 'Sidmallen har ändrats.',
	'tpt-diff-old' => 'Föregående text',
	'tpt-diff-new' => 'Ny text',
	'tpt-submit' => 'Märk den här versionen för översättning',
	'tpt-sections-oldnew' => 'Nya och existerande översättningsenheter',
	'tpt-sections-deleted' => 'Raderade översättningsenheter',
	'tpt-sections-template' => 'Mall för översättningssida',
	'tpt-badtitle' => 'Det angivna sidnammet ($1) är inte en giltlig titel',
	'tpt-nosuchpage' => 'Sidan $1 finns inte',
	'tpt-oldrevision' => '$2 är inte den senaste versionen av sidan [[$1]].
Endast den senaste versionen kan märkas för översättning.',
	'tpt-notsuitable' => 'Sidan $1 är inte redo för översättning.
Se till att sidan har <nowiki><translate></nowiki>-taggar och att syntaxen är giltlig.',
	'tpt-saveok' => 'Sidan [[$1]] har märkts för översättning med {{PLURAL:$2|en översättning|$2 översättningar}}. Sidan kan nu <span class="plainlinks">[$3 översättas]</span>.',
	'tpt-badsect' => '"$1" är inte ett giltligt namn för översättningen $2.',
	'tpt-showpage-intro' => 'Här nedanför finns nya, existerande och raderade sektioner uppradade.
Innan den här versionen märks för översättning, kontrollera att förändringarna i texten är minimala för att undvika extra arbete för översättarna.',
	'tpt-mark-summary' => 'Den här versionen är märkt för översättning',
	'tpt-edit-failed' => 'Sidan "$1" kunde inte uppdateras.',
	'tpt-already-marked' => 'Den senaste versionen av den här sidan har redan märkts för översättning.',
	'tpt-unmarked' => 'Sidan $1 är inte längre markerad för översättning.',
	'tpt-list-nopages' => 'Det finns inga sidor som är märkta för översättning eller är klara att märkas för översättning.',
	'tpt-new-pages-title' => 'Sidor föreslagna för översättning',
	'tpt-old-pages-title' => 'Sidor i översättning',
	'tpt-other-pages-title' => 'Trasiga sidor',
	'tpt-new-pages' => '{{PLURAL:$1|Den här sidan|De här sidorna}} innehåller text med översättningstaggar, men ingen version av {{PLURAL:$1|den här sidan|de här sidorna}} är märkt för översättning.',
	'tpt-old-pages' => 'En version av {{PLURAL:$1|den här sidan|de här sidorna}} har märkts för översättning.',
	'tpt-other-pages' => '{{PLURAL:$1|En gammal version av den här sidan är markerad|Äldre versioner av dessa sidor är markerade}} för översättning,
men {{PLURAL:$1|den senaste versionen|de senaste versionerna}} kan inte markeras för översättning.',
	'tpt-rev-mark' => 'markera för översättning',
	'tpt-rev-unmark' => 'ta bort från översättning',
	'tpt-rev-encourage' => 'återställ',
	'tpt-rev-unmark-tooltip' => 'Ta bort denna sida från översättning.',
	'translate-tag-translate-link-desc' => 'Översätt den här sidan',
	'translate-tag-markthis' => 'Märk den här sidan för översättning',
	'translate-tag-markthisagain' => 'Den här sidan har <span class="plainlinks">[$1 förändringar]</span> sedan den senast <span class="plainlinks">[$2 märktes för översättning]</span>.',
	'translate-tag-hasnew' => 'Den här sidan innehåller <span class="plainlinks">[$1 förändringar]</span> som inte är märkta för översättning.',
	'tpt-translation-intro' => 'Det här är en <span class="plainlinks">[$1 översatt version]</span> av sidan [[$2]]. Översättningen är till $3% färdig och uppdaterad.',
	'tpt-translation-intro-fuzzy' => 'Föråldrade översättningar visas på det här sättet.',
	'tpt-languages-legend' => 'Andra språk:',
	'tpt-target-page' => 'Den här sidan kan inte uppdateras manuellt. Den här sidan är en översättning av [[$1]] och översättningen kan uppdateras genom att använda [$2 översättningsverktyget].',
	'tpt-unknown-page' => 'Den här namnrymden är reserverad för översättningar av sidor. Sidan du försöker redigera verkar inte stämma överens med någon sida som är märkt för översättning.',
	'tpt-render-summary' => 'Uppdaterar för att matcha den nya versionen av källpaketet',
	'tpt-download-page' => 'Exportera sidan med översättningar',
	'pt-parse-open' => 'Obalanserad &lt;translate>-tagg.
Översättningsmall: <pre>$1</pre>',
	'pt-parse-close' => 'Obalanserad &lt;/translate>-tagg.
Översättningsmall: <pre>$1</pre>',
	'pt-log-mark' => '{{GENDER:$2|markerade}} revision $3 av sidan "[[:$1]]" för översättning',
	'pt-log-unmark' => '{{GENDER:$2|tog bort}} sidan "[[:$1]]" från översättning',
	'pt-log-moveok' => '{{GENDER:$2|slutförde}} namnändring av översättningsbara sidan $1 till $3',
	'pt-log-movenok' => '{{GENDER:$2|stötte på}} ett problem under flyttningen av [[:$1]] till [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|slutförde}} radering av översättningsbara sidan $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|stötte på}} ett problem under radering av översättningsbara sidan [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|slutförde}} radering av översättningssidan $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|påträffade}} ett problem vid radering av översättningssidan [[:$1]]',
	'pt-movepage-title' => 'Flytta översättningsbar sida $1',
	'pt-movepage-blockers' => 'Den översättningsbara sidan kan inte flyttas till ett nytt namn på grund av följande {{PLURAL:$1|fel|fel}}:',
	'pt-movepage-list-pages' => 'Lista över sidor att flytta',
	'pt-movepage-list-translation' => 'Översättningssidor',
	'pt-movepage-list-section' => 'Avsnittssidor',
	'pt-movepage-list-other' => 'Andra undersidor',
	'pt-movepage-list-count' => 'Totalt $1 {{PLURAL:$1|sida|sidor}} att flytta.',
	'pt-movepage-legend' => 'Flytta översättningsbar sida',
	'pt-movepage-current' => 'Nuvarande namn:',
	'pt-movepage-new' => 'Nytt namn:',
	'pt-movepage-reason' => 'Orsak:',
	'pt-movepage-subpages' => 'Flytta alla undersidor',
	'pt-movepage-action-check' => 'Kontrollera om flytten är möjligt',
	'pt-movepage-action-perform' => 'Genomför flytten',
	'pt-movepage-action-other' => 'Ändra mål',
	'pt-locked-page' => 'Denna sida är låst eftersom den översättningsbara sidan håller på att flyttas.',
	'pt-deletepage-full-legend' => 'Radera översättningsbar sida',
	'pt-deletepage-any-legend' => 'Radera översättningsbar sida eller översättning av översättningsbar sida',
	'pt-deletepage-current' => 'Sidnamn:',
	'pt-deletepage-reason' => 'Anledning:',
	'pt-deletepage-subpages' => 'Radera alla undersidor',
	'pt-deletepage-list-pages' => 'Lista över sidor att radera',
	'pt-deletepage-list-translation' => 'Översättningssidor',
	'pt-deletepage-list-section' => 'Avsnittssidor',
	'pt-deletepage-list-other' => 'Andra undersidor',
	'pt-deletepage-list-count' => 'Totalt $1 {{PLURAL:$1|sida|sidor}} att radera.',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 * @author TRYPPN
 */
$messages['ta'] = array(
	'pagetranslation' => 'பக்கத்தின் மொழிபெயர்ப்பு',
	'right-pagetranslation' => 'மொழிபெயர்ப்புக்காக  பக்கங்களின்  பதிப்புகளை குறியிடு',
	'tpt-desc' => 'உள்ளடக்க பக்கங்களை மொழிபெயர்க்க  விரிவாக்கம்',
	'tpt-section' => 'மொழிபெயர்ப்பு அலகு$1',
	'tpt-section-new' => 'புதிய மொழிபெயர்ப்பு அலகு.
பெயர்:$1',
	'tpt-section-deleted' => 'மொழிபெயர்ப்பு அலகு$1',
	'tpt-template' => 'பக்கத்தின் வார்ப்புரு',
	'tpt-templatediff' => 'பக்க வார்ப்புரு மாற்றப்பட்டுள்ளது.',
	'tpt-diff-old' => 'முந்தைய சொற்றொடர்',
	'tpt-diff-new' => 'புதிய சொற்றொடர்',
	'tpt-submit' => 'இந்த பதிப்பை மொழிபெயர்ப்புக்காக குறியிடு',
	'tpt-sections-oldnew' => 'புதிய மற்றும் தற்போதுள்ள மொழிபெயர்ப்பு பிரிவுகள்',
	'tpt-sections-deleted' => 'நீக்கப்பட்ட மொழிபெயர்ப்பு பிரிவுகள்',
	'tpt-sections-template' => 'மொழிபெயர்ப்பு பக்க வார்ப்புரு',
	'tpt-action-nofuzzy' => 'மொழிபெயர்ப்புகளை செல்லத்தாகாததாக்க வேண்டாம்.',
	'tpt-badtitle' => ' தரப்பட்ட பக்க பெயர் ( $1 ) செல்லத்தக்க தலைப்பு இல்லை',
	'tpt-nosuchpage' => 'பக்க  $1  இல்லை',
	'tpt-badsect' => 'மொழிபெயர்ப்பு அலகு   $2 க்கு \'\'$1 "ஒரு செல்லத்தக்க பெயர்  அல்ல.',
	'tpt-rev-mark' => 'மொழிபெயர்ப்புக்காக குறியிடு',
	'tpt-rev-unmark' => 'மொழிபெயர்ப்பிலிருந்து நீக்கு',
	'tpt-rev-discourage' => 'அதையரியப்படுத்து',
	'tpt-rev-encourage' => 'மீட்டமை',
	'tpt-rev-mark-tooltip' => 'இப்பக்கத்தின் சமீபத்திய பதிப்பை மொழிபெயர்ப்புக்காக குறியிடு.',
	'tpt-rev-unmark-tooltip' => 'இப்பக்கத்தை  மொழிபெயர்ப்பில் இருந்து நீக்கவும்.',
	'tpt-rev-discourage-tooltip' => 'இந்த பக்கத்தில் மேலும் செய்யப்படும் மொழிபெயப்புகளை அதையரியப்படுத்து',
	'tpt-rev-encourage-tooltip' => 'இப்பக்கத்தை சராசரி மொழிபெயர்ப்புக்கு மீட்டெடுக்கவும்.',
	'translate-tag-translate-link-desc' => 'இப்பக்கத்தை மொழிபெயர்க்கவும்',
	'translate-tag-markthis' => 'இந்த பக்கத்தை மொழிபெயர்ப்புக்காக குறியிடு',
	'tpt-languages-legend' => 'மற்ற மொழிகள்:',
	'pt-movepage-list-pages' => 'நகர்த்த வேண்டிய பக்கங்களின் பட்டியல்',
	'pt-movepage-list-translation' => 'மொழிபெயர்ப்பு பக்கங்கள்',
	'pt-movepage-list-section' => 'பிரிவு பக்கங்கள்',
	'pt-movepage-list-other' => 'மற்ற துணைப்பக்கங்கள்',
	'pt-movepage-list-count' => 'மொத்தம்  $1   {{PLURAL:$1|பக்கம் |பக்கங்கள்}} நகர்த்த.',
	'pt-movepage-legend' => 'மொழிபெயர்க்கதகுந்த பக்கத்தை நகர்த்து',
	'pt-movepage-current' => 'நடப்பு பெயர்:',
	'pt-movepage-new' => 'புதிய பெயர்:',
	'pt-movepage-reason' => 'காரணம்:',
	'pt-movepage-subpages' => 'எல்லா துணைப்பக்கங்களையும் நகர்த்து',
	'pt-movepage-action-check' => 'இந்த நகர்த்தல் சாத்தியமானதா என சரிபார்',
	'pt-movepage-action-perform' => 'நகர்த்தலை செய்யவும்',
	'pt-movepage-action-other' => 'இலக்கை மாற்று',
	'pt-movepage-logreason' => 'மொழிபெயர்க்க தகுந்த பக்கத்தின் பகுதி $1.',
	'pt-movepage-started' => 'அடிப்படை பக்கம் இப்போது நகர்த்தப்பட்டுள்ளது.
தயவுகூர்ந்து  [[Special:Log/pagetranslation|பக்க மொழிபெயர்ப்பு குறிப்பேடு]] ல்  பிழைகளை மற்றும் நிறைவு தகவலை சரிபார்க்கவும்.',
	'pt-locked-page' => 'இப்பக்கம் பூட்டப்பட்டுள்ளது ஏனெனில் மொழிபெயர்க்கத்தகுந்த பக்கம்  தற்போது  நகர்த்தப்பட்டது.',
	'pt-deletepage-lang-title' => 'மொழிபெயர்ப்பு பக்கம்  $1 நீக்கப்படுகிறது.',
	'pt-deletepage-full-title' => 'மொழிபெயர்க்கதகுந்த பக்கம் $1 நீக்கப்படுகிறது',
	'pt-deletepage-invalid-title' => 'குறிப்பிட்ட பக்கம் செல்லத்தக்கது அல்ல.',
	'pt-deletepage-invalid-text' => 'குறிப்பிட்ட பக்கம் ஒரு மொழிபெயர்ப்புசெய்யத்தகுந்த பக்கம் அல்லது அதன் மொழிபெயர்ப்பு அல்ல',
	'pt-deletepage-action-check' => 'நீக்க வேண்டிய பக்கங்களை பட்டியலிடு',
	'pt-deletepage-action-perform' => 'நீக்கலை செய்யவும்',
	'pt-deletepage-action-other' => 'இலக்கை மாற்று',
	'pt-deletepage-lang-legend' => 'மொழிபெயர்ப்பு பக்கத்தை நீக்கு',
	'pt-deletepage-full-legend' => 'மொழிபெயர்க்கதகுந்த பக்கத்தை நீக்கு',
	'pt-deletepage-any-legend' => 'மொழிபெயர்க்கத்தகுந்த பக்கம் அல்லது மொழிபெயர்க்கத்தகுந்த பக்கத்தின் மொழிபெயர்ப்பை நீக்கு',
	'pt-deletepage-current' => 'பக்கப் பெயர்:',
	'pt-deletepage-reason' => 'காரணம்:',
	'pt-deletepage-subpages' => 'எல்லா துணைப்பக்கங்களையும் நீக்கு',
	'pt-deletepage-list-pages' => 'நீக்கபடவேண்டிய பக்கங்களின் பட்டியல்',
	'pt-deletepage-list-translation' => 'மொழிபெயர்ப்பு பக்கங்கள்',
	'pt-deletepage-list-section' => 'பிரிவு பக்கங்கள்',
	'pt-deletepage-list-other' => 'மற்ற துணைப்பக்கங்கள்',
	'pt-deletepage-list-count' => 'மொத்தம்  $1   {{PLURAL:$1|பக்கம் |பக்கங்கள்}} நீக்கப்பட.',
	'pt-deletepage-full-logreason' => 'மொழிபெயர்க்க தகுந்த பக்கத்தின் பகுதி $1.',
	'pt-deletepage-lang-logreason' => 'மொழிபெயர்ப்பு பக்கத்தின் பகுதி  $1 .',
	'pt-deletepage-started' => 'தயவுகூர்ந்து  [[Special:Log/pagetranslation|பக்க மொழிபெயர்ப்பு குறிப்பேடு]] ல்  பிழைகளை மற்றும் நிறைவு தகவலை சரிபார்க்கவும், .',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 */
$messages['te'] = array(
	'pagetranslation' => 'పేజీ అనువాదం',
	'right-pagetranslation' => 'పేజీల కూర్పులను అనువాదానికై గుర్తించడం',
	'tpt-desc' => 'విషయపు పేజీలను అనువదించడానికై పొడగింత',
	'tpt-section' => 'అనువాద విభాగం $1',
	'tpt-section-new' => 'కొత్త అనువాద విభాగం. పేరు: $1',
	'tpt-section-deleted' => 'అనువాద విభాగము $1',
	'tpt-template' => 'పేజీ మూస',
	'tpt-diff-old' => 'గత పాఠ్యం',
	'tpt-diff-new' => 'కొత్త పాఠ్యం',
	'tpt-sections-template' => 'అనువాద పేజీ మూస',
	'tpt-badtitle' => 'ఇచ్చిన పేజీ పేరు ($1) సరైన శీర్షిక కాదు',
	'tpt-nosuchpage' => '$1 అనే పుట లేనే లేదు',
	'tpt-edit-failed' => 'పేజీని తాజాకరించలేకపోయాం: $1',
	'tpt-already-marked' => 'ఈ పేజీ యొక్క సరికొత్త కూర్పుని ఇప్పటికే అనువాదానికై గుర్తించారు.',
	'translate-tag-translate-link-desc' => 'ఈ పేజీని అనువదించండి',
	'translate-tag-markthis' => 'ఈ పేజీని అనువాదం కొరకు గుర్తించు',
	'translate-tag-markthisagain' => 'చివరిసారి <span class="plainlinks">[$2 అనువాదానికి గుర్తించినప్పటి నుండి]</span> ఈ పేజీకి <span class="plainlinks">[$1 మార్పులు]</span> జరిగాయి.',
	'tpt-languages-legend' => 'ఇతర భాషలు:',
	'pt-log-name' => 'పేజీ అనువాదాల చిట్టా',
	'pt-movepage-block-subpage-exists' => 'ఆ లక్ష్యిత ఉపపుట [[:$2]] ఉనికిలో ఉంది.',
	'pt-movepage-list-pages' => 'తరలించాల్సిన పుటల యొక్క జాబితా',
	'pt-movepage-list-translation' => 'అనువాద పుటలు',
	'pt-movepage-list-other' => 'ఇతర ఉపపుటలు',
	'pt-movepage-list-count' => 'మొత్తం తరలించాల్సినవి $1 {{PLURAL:$1|పుట|పుటలు}}.',
	'pt-movepage-current' => 'ప్రస్తుత పేరు:',
	'pt-movepage-new' => 'కొత్త పేరు:',
	'pt-movepage-reason' => 'కారణం:',
	'pt-deletepage-current' => 'పేజీ పేరు:',
	'pt-deletepage-reason' => 'కారణం:',
	'pt-deletepage-subpages' => 'అన్ని ఉపపేజీలను తొలగించు',
);

/** Thai (ไทย)
 * @author Ans
 * @author Passawuth
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'pagetranslation' => 'การแปลภาษา',
	'right-pagetranslation' => 'กำหนดให้รุ่นปรับปรุงนี้เพื่อการแปลภาษา',
	'tpt-desc' => 'ส่วนเพิ่มเติมสำหรับหน้าที่มีการแปลเนื้อหา',
	'tpt-section' => 'หน่วยการแปล $1',
	'tpt-section-new' => 'หน่วยการแปลใหม่

ชื่อ: $1',
	'tpt-section-deleted' => 'หน่วยการแปล $1',
	'tpt-template' => 'แม่แบบของหน้า',
	'tpt-templatediff' => 'แม่แบบของหน้านี้ได้ถูกเปลี่ยนแปลงแล้ว',
	'tpt-diff-old' => 'อักษรก่อนหน้า',
	'tpt-diff-new' => 'คำใหม่',
	'tpt-submit' => 'กำหนดให้รุ่นนี้เพื่อการแปลภาษา',
	'tpt-sections-oldnew' => 'หน่วยการแปลใหม่และที่มีอยู่เดิมแล้ว',
	'tpt-sections-deleted' => 'หน่วยการแปลที่ถูกลบแล้ว',
	'tpt-sections-template' => 'แม่แบบหน้าการแปลภาษา',
	'tpt-badtitle' => 'ชื่อหน้าที่กำหนดมานั้น ($1) ไม่ใช่ชื่อหน้าที่ถูกต้อง',
	'tpt-nosuchpage' => 'ไม่มีหน้า $1',
	'tpt-oldrevision' => '$2 ไม่ใช่รุ่นปรับปรุงล่าสุดของหน้าชื่อ[[$1]]

เฉพาะรุ่นปรับปรุงล่าสุดเท่านั้นที่สา่มารถกำหนดเพื่อการแปลภาษา',
	'tpt-notsuitable' => 'หน้า $1 นั้นไม่เมาะสมในการแปลภาษา

ตรวจสอบให้แน่ใจว่ามีแท็ก <nowiki><translate></nowiki> อยู่และมีประโยคของโค้ดที่ถูกต้อง',
	'tpt-saveok' => 'หน้า [[$1]] ได้ถูกกำหนดไว้สำหรับการแปลภาษากับหน่วยการแปลภาษา $2 หน่วย

หน้านี้สามารถ<span class="plainlinks">[$3 เริ่มแปลภาษาได้แล้ว]</span>',
	'tpt-badsect' => '"$1" ไม่ใช่ชื่อที่ถูกต้องสำหรับหน่วยการแปลภาษา $2',
	'tpt-showpage-intro' => 'ส่วนที่มีการเพิ่มใหม่, มีอยู่เดิม และที่ถูกลบไปแล้วนั้นปรากฎด้านล่างนี้
ก่อนที่จะทำให้รุ่นปรับปรุงนี้สำหรับการแปลภาษา ตรวจสอบให้แน่ใจว่าการเปลี่ยนแปลงของส่วนต่างๆ ได้ถูกลดลงมาเพื่อเป็นการหลีกเลี่ยงงานที่ไม่จำเป็นของผู้แปลภาษา',
	'tpt-mark-summary' => 'กำหนดให้รุ่นปรับปรุงนี้สำหรับการแปลภาษา',
	'tpt-edit-failed' => 'ไม่สามารถปรับปรุงหน้า: $1 ได้',
	'tpt-already-marked' => 'รุ่นปรับปรุงล่าสุดของหน้านี้ได้ถูกกำหนดเพื่อการแปลภาษาแล้ว',
	'tpt-list-nopages' => 'ไม่มีหน้าใดๆ ที่ถูกกำหนดเพื่อการแปลภาษา หรือพร้อมที่จะถูกกำหนดเพื่อการแปลภาษา',
	'tpt-new-pages' => '{{PLURAL:$1|หน้านี้|หน้าเหล่านี้}} มีที่คั่นสำหรับการแปลภาษาอยู่ แต่ไม่มีรุ่นปรับปรุงใดๆ เลยของ{{PLURAL:$1|หน้านี้|หน้าแหล่านี้}} ที่ได้ถูกกำหนดเพื่อการแปลภาษา',
	'tpt-old-pages' => 'รุ่นปรับปรุงบางรุ่นของ{{PLURAL:$1|หน้านี้|หน้าต่างๆ เหล่านี้}} ได้ถูกกำหนดเพื่อการแปลภาษาแล้ว',
	'tpt-rev-unmark' => 'ลบหน้านี้จากการแปล',
	'translate-tag-translate-link-desc' => 'แปลหน้านี้',
	'translate-tag-markthis' => 'กำหนดให้หน้านี้เพื่อการแปลภาษา',
	'translate-tag-markthisagain' => 'หน้านี้มี<span class="plainlinks">[$1 ความเปลี่ยนแปลง]</span> นับตั้งแต่ครั้งสุดท้ายที่<span class="plainlinks">[$2 ถูกกำหนดเพื่อการแปลภาษา]</span>.',
	'translate-tag-hasnew' => 'หน้านี้มี<span class="plainlinks">[$1 ความเปลี่ยนแปลง]</span> ที่ไม่ได้ถูกกำหนดเพื่อการแปลภาษา',
	'tpt-translation-intro' => 'หน้านี้คือ<span class="plainlinks">[$1 รุ่นปรับปรุงที่เริ่มแปลแล้ว]</span> ของ [[$2]] และการแปลภาษาเสร็จสิ้นแล้ว $3 เปอร์เซ็นต์ของทั้งหมดและเป็นรุ่นล่าสุด',
	'tpt-translation-intro-fuzzy' => 'การแปลภาษาที่ตกรุ่นแล้วจะถูกกำหนดในลักษณะนี้',
	'tpt-languages-legend' => 'ภาษาอื่นๆ:',
	'tpt-target-page' => 'หน้านี้ไม่สามารถถูกปรับปรุงตามปกติได้

หน้านี้เป็นหน้าการแปลของหน้า[[$1]] และสามารถปรับปรุงการแปลได้โดยใช้[เครื่องมือการแปล $2]',
	'tpt-render-summary' => 'กำลังอัพเดตเพื่อทำให้ตรงกันกับรุ่นปรับปรุงใหม่ของหน้่าโค้ดหลัก',
	'tpt-download-page' => 'ส่งหน้าออกไปพร้อมการแปลภาษา',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'pagetranslation' => 'Terjime sahypasy',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'pagetranslation' => 'Salinwika ng pahina',
	'right-pagetranslation' => 'Tatakan ang mga bersyon ng mga pahinang isasalinwika',
	'tpt-desc' => 'Dugtong para sa pagsasalinwika ng mga pahina ng nilalaman',
	'tpt-section' => 'Yunit ng salinwika $1',
	'tpt-section-new' => 'Bagong yunit ng salinwika.
Pangalan: $1',
	'tpt-section-deleted' => 'Yunit ng salinwika $1',
	'tpt-template' => 'Suleras ng pahina',
	'tpt-templatediff' => 'Nabago na ang suleras ng pahina.',
	'tpt-diff-old' => 'Naunang teksto',
	'tpt-diff-new' => 'Bagong teksto',
	'tpt-submit' => 'Tatakan ang bersyong ito para isalinwika',
	'tpt-sections-oldnew' => 'Bago at umiiral ng mga yunit ng salinwika',
	'tpt-sections-deleted' => 'Naburang mga yunit ng salinwika',
	'tpt-sections-template' => 'Suleras ng pahina ng salinwika',
	'tpt-action-nofuzzy' => 'Huwag hindi tanggapin ang mga salinwika',
	'tpt-badtitle' => 'Ang pangalan ng pahinang ibinigay ($1) ay isang hindi tanggap na pamagat',
	'tpt-nosuchpage' => 'Hindi umiiral ang pahinang $1',
	'tpt-oldrevision' => 'Ang $2 ay hindi ang pinakabagong bersyon ng pahinang [[$1]].
Tanging pinakabagong mga bersyong lang ang tatatakan para sa pagsasalinwika.',
	'tpt-notsuitable' => 'Hindi angkop ang pahinang $1 para sa pagsasalinwika.
Tiyaking mayroon itong mga tatak na <nowiki><translate></nowiki> at may isang tanggap na sintaks.',
	'tpt-saveok' => 'Nilagyang ng tanda ang pahinang [[$1]] para sa pagsasalinwika na may $2 na {{PLURAL:$2|yunit ng salinwika|mga yunit ng salinwika}}.
Maaari na ngayong <span class="plainlinks">[$3 isalinwika]</span> ang pahina.',
	'tpt-badsect' => 'Ang $1" ay isang hindi tanggap na pangalan para sa yunit ng salinwikang $2.',
	'tpt-showpage-intro' => 'Nakatala sa ibaba ang bago, umiiral at naburang mga seksyon.
Bago tatakan ang bersyong ito para isalinwika, suriing nakauntian ang mga pagbabago sa mga seksyon upang maiwasan ang hindi kailangang gawain para sa mga tagapagsalinwika.',
	'tpt-mark-summary' => 'Tinatakan ang bersyong ito para isalinwika',
	'tpt-edit-failed' => 'Hindi maisapanahon ang pahina:  $1',
	'tpt-already-marked' => 'Ang huling bersyon ng pahinang ito ay natatakan na para sa pagsasalinwika.',
	'tpt-unmarked' => 'Ang pahinang $1 ay hindi na tinatakan para sa pagsasalinwika.',
	'tpt-list-nopages' => 'Walang mga pahinang tinatakan para sa pagsasalinwika o nakahanda upang markahan para sa pagsasalinwika.',
	'tpt-new-pages' => '{{PLURAL:$1|Naglalaman ang pahinang ito|Naglalaman ang mga pahinang ito}} ng tekstong may mga tatak ng pagsasalinwika,
ngunit walang bersyon na {{PLURAL:$1|ang pahinang ito|ang mga pahinang ito}} ay kasalukuyang tinatakan para sa pagsasalinwika.',
	'tpt-old-pages' => 'Ilang bersyon ng {{PLURAL:$1|pahinang ito|mga pahinang ito}} ay natatakan na para sa pagsasalinwika.',
	'tpt-other-pages' => '{{PLURAL:$1|Isang lumang bersyon ng pahinang ito ang|Mas lumang mga bersyon ng mga pahinang ito ang}} tinatakan para sa pagsasalinwika,
subalit ang pinakabagong {{PLURAL:$1|bersyon|mga bersyon}} ay hindi matatatakan para sa pagsasalinwika.',
	'tpt-rev-unmark' => 'alisin ang pahinang ito mula sa pagsasalinwika',
	'translate-tag-translate-link-desc' => 'Isalinwika ang pahinang ito',
	'translate-tag-markthis' => 'Tatakan ang pahinang ito para isalinwika',
	'translate-tag-markthisagain' => 'Ang pahinang ito ay may <span class="plainlinks">[$1 mga pagbabago]</span> mula pa noong huli itong <span class="plainlinks">[$2 tinatakan para isalinwika]</span>.',
	'translate-tag-hasnew' => 'Naglalaman ang pahinang ito ng <span class="plainlinks">[$1 mga pagbabagong]</span> hindi tinatakan para isalinwika.',
	'tpt-translation-intro' => 'Ang pahinang ito ay isang <span class="plainlinks">[$1 naisalinwikang bersyon]</span> ng isang pahina [[$2]] at ang salinwika ay $3% kumpleto na.',
	'tpt-translation-intro-fuzzy' => 'Tinatakan ng ganito ang mga pagsasalinwikang lipas na sa panahon.',
	'tpt-languages-legend' => 'Iba pang mga wika:',
	'tpt-target-page' => 'Hindi maaaring kinakamay na maisapanahon ang pahinang ito.
Ang pahinang ito ay isang salinwika ng pahinang [[$1]] at maisasapanahon ang salinwika sa pamamagitan ng [$2 kasangkapang pansalinwika].',
	'tpt-unknown-page' => 'Nakalaan ang puwang na pampangalang ito para sa mga salinwika ng pahina ng nilalaman.
Tila hindi tumutugma ang pahinang sinusubukan mong baguhin sa anumang pahinang natatakan para sa pagsasalinwika.',
	'tpt-render-summary' => 'Isinasapanahon upang tumugma sa bagong bersyon ng pinagmulang pahina',
	'tpt-download-page' => 'Iluwas ang pahinang may mga pagsasalinwika',
	'pt-parse-open' => 'Hindi magkatimbang na tatak na &lt;translate>.
Suleras ng pagsasalinwika:  <pre>$1</pre>',
	'pt-parse-close' => 'Hindi magkatimbang na tatak na &lt;translate>.
Suleras ng pagsasalinwika:  <pre>$1</pre>',
	'pt-parse-nested' => 'Hindi pinapayagan ang nakapugad na mga seksyong &lt;translate>.
Teksto ng tatak: <pre>$1</pre>',
	'pt-shake-multiple' => 'Mga pananda ng maramihang seksyon para sa isang seksyon.
Teksto ng seksyon: <pre>$1</pre>',
	'pt-shake-position' => 'Mga panandang pangseksyon sa loob ng posisyong hindi inaasahan.
Teksto ng seksyon: <pre>$1</pre>',
	'pt-shake-empty' => 'Seksyong walang laman para sa panandang $1.',
	'pt-log-header' => 'Itala para sa mga gawaing may kaugnayan sa sistema ng pagsasalinwika ng pahina',
	'pt-log-name' => 'Tala ng pagsasalinwika ng pahina',
	'pt-log-mark' => '{{GENDER:$2|minarkahang}} rebisyong  $3 ng pahinang "[[:$1]]" para sa pagsasalinwika',
	'pt-log-unmark' => '{{GENDER:$2|tinanggal}} na pahinang "[[:$1]]" mula sa pagsasalinwika',
	'pt-log-moveok' => '{{Gender:$2|nakumpleto}}ng pagpapalit ng pangalan ng maisasalinwikang pahina $1 papunta sa isang bagong pangalan',
	'pt-log-movenok' => '{{Gender:$2|nakaranas}} ng suliranin habang inililipat ang [[:$1]] papunta sa [[:$3]]',
	'pt-movepage-title' => 'Ilipat ang maisasalinwikang pahinang $1',
	'pt-movepage-blockers' => 'Hindi malilipat ang maisasalinwikang pahina papunta sa bagong pangalan dahil sa sumusunod na {{PLURAL:$1|kamalian|mga kamalian}}:',
	'pt-movepage-block-base-exists' => 'Umiiral ang puntiryang batayang pahina na [[:$1]].',
	'pt-movepage-block-base-invalid' => 'Hindi isang tanggap na pamagat ang puntiryang batayang pahina.',
	'pt-movepage-block-tp-exists' => 'Umiiral ang puntiryang pahina ng salinwika na [[:$2]].',
	'pt-movepage-block-tp-invalid' => 'Ang pinupukol na pamagat ng pahinang maisasalinwika para sa [[:$1]] ay hindi matatanggap (napakahaba?).',
	'pt-movepage-block-section-exists' => 'Umiiral ang pahina ng seksyong pinupukol na [[:$2]].',
	'pt-movepage-block-section-invalid' => 'Ang pamagat ng pahina ng seksyong pinupukol para sa [[:$1]] ay hindi matatanggap (napakahaba?).',
	'pt-movepage-block-subpage-exists' => 'Umiiral ang pinupukol na kabahaging pahinang [[:$2]].',
	'pt-movepage-block-subpage-invalid' => 'Ang pinupukol na pamagat ng kabahaging pahina para sa [[:$1]] ay hindi matatanggap (napakahaba?).',
	'pt-movepage-list-pages' => 'Talaan ng mga pahinang ililipat',
	'pt-movepage-list-translation' => 'Mga pahina ng salinwika',
	'pt-movepage-list-section' => 'Mga pahina ng seksyon',
	'pt-movepage-list-other' => 'Iba pang kabahaging mga pahina',
	'pt-movepage-list-count' => 'Sa kabuoan ay $1 {{PLURAL:$1|pahina|mga pahina}}ng ililipat.',
	'pt-movepage-legend' => 'Ilipat ang pahinang maisasalinwika',
	'pt-movepage-current' => 'Kasalukuyang pangalan:',
	'pt-movepage-new' => 'Bagong pangalan:',
	'pt-movepage-reason' => 'Dahilan:',
	'pt-movepage-subpages' => 'Ilipat ang lahat ng kabahaging mga pahina',
	'pt-movepage-action-check' => 'Suriin kung maaari ang paglilipat',
	'pt-movepage-action-perform' => 'Gawin ang paglipat',
	'pt-movepage-action-other' => 'Baguhin ang pinupukol',
	'pt-movepage-intro' => 'Ang natatanging pahinang ito ay nagpapahintulot sa iyong mailipat ang mga pahinang minarkahan para sa pagsasalinwika.
Ang galaw ng paglipat ay hindi magiging kaagad-agad, dahil maraming mga pahina ang kailangang ilipat.
Habang inililipat ang mga pahina, hindi maaaring kasalamuhain ang mga pahinang tinutukoy.
Ang mga kabiguan ay itatala sa loob ng [[Special:Log/pagetranslation|talaan ng pagsasalinwika ng pahina]] at nangangailangan sila ng kinakamay na pagkukumpuni.',
	'pt-movepage-logreason' => 'Bahagi ng maisasalinwikang pahinang $1.',
	'pt-movepage-started' => 'Nailipat na ngayon ang pahinang batayan.
Pakisuri ang [[Special:Log/pagetranslation|talaan ng pagsasalinwika ng pahina]] para sa mga kamalian at mensahe ng pagkakabuo.',
	'pt-locked-page' => 'Ikinandao ang pahinang ito dahil ang pahinang maisasalinwika ay kasalukuyang inililipat.',
);

/** Turkish (Türkçe)
 * @author Incelemeelemani
 * @author Joseph
 * @author Karduelis
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'pagetranslation' => 'Çeviri sayfası',
	'right-pagetranslation' => 'Sayfa sürümlerini çeviri için işaretler',
	'tpt-desc' => 'İçerik sayfalarının çevirisi için eklenti',
	'tpt-section' => 'Çeviri birimi $1',
	'tpt-section-new' => 'Yeni çeviri birimi.
Ad: $1',
	'tpt-section-deleted' => 'Çeviri birimi $1',
	'tpt-template' => 'Sayfa şablonu',
	'tpt-templatediff' => 'Sayfa şablonu değişti.',
	'tpt-diff-old' => 'Önceki metin',
	'tpt-diff-new' => 'Yeni metin',
	'tpt-submit' => 'Bu sürümü çeviri için işaretle',
	'tpt-sections-oldnew' => 'Yeni ve mevcut çeviri birimleri',
	'tpt-sections-deleted' => 'Silinen çeviri birimleri',
	'tpt-sections-template' => 'Çeviri sayfası şablonu',
	'tpt-badtitle' => 'Verilen sayfa adı ($1) geçerli bir başlık değil',
	'tpt-oldrevision' => '$2, [[$1]] sayfasının en son sürümü değil.
Sadece en son sürümler çeviri için işaretlenebilir.',
	'tpt-saveok' => '[[$1]] adlı sayfa $2 {{PLURAL:$2|çeviri birimi|çeviri birimi}} ile çeviri için işaretlenmiş.
Sayfa artık <span class="plainlinks">[$3 çevrilebilir]</span>.',
	'tpt-badsect' => '"$1", $2 çeviri birimi için geçerli bir ad değil.',
	'tpt-showpage-intro' => 'Aşağıda yeni, mevcut ve silinmiş bölümler listelenmiştir.
Bu sürümü çeviri için işaretlemeden önce, çevirmenlere gereksiz iş çıkarmamak için bölümlerde yapılan değişikliklerin asgari seviyede olduğundan emin olun.',
	'tpt-mark-summary' => 'Bu sürüm çeviri için işaretlendi',
	'tpt-edit-failed' => 'Sayfa güncellenemedi: $1',
	'tpt-already-marked' => 'Bu sayfanın en son sürümü çeviri için işaretlenmiş.',
	'tpt-list-nopages' => 'Çeviri için işaretlenen ya da işaretlenmeye hazır olan herhangi bir sayfa bulunmuyor.',
	'tpt-old-pages-title' => 'Çeviri sayfası',
	'tpt-old-pages' => '{{PLURAL:$1|Bu sayfanın|Bu sayfaların}} bazı sürümleri çeviri için işaretlenmiş.',
	'translate-tag-translate-link-desc' => 'Bu sayfayı çevir',
	'translate-tag-markthis' => 'Bu sayfayı çeviri için işaretle',
	'translate-tag-hasnew' => 'Bu sayfa, çeviri için işaretlenmemiş <span class="plainlinks">[$1 değişiklik]</span> içeriyor.',
	'tpt-translation-intro-fuzzy' => 'Tarihi geçen çeviriler bu şekilde işaretlenmiştir.',
	'tpt-languages-legend' => 'Diğer diller:',
	'tpt-render-summary' => 'Kaynak sayfanın yeni sürümü ile eşleme için güncelleniyor',
	'tpt-download-page' => 'Çevirileri olan sayfayı dışa aktar',
	'pt-movepage-new' => 'Yeni adı:',
);

/** Tatar (Cyrillic script) (Татарча)
 * @author Ильнар
 * @author Рашат Якупов
 */
$messages['tt-cyrl'] = array(
	'pagetranslation' => 'Битләр тәрҗемәсе',
	'tpt-diff-new' => 'Яңа текст',
	'translate-tag-translate-link-desc' => 'Бу битне тәрҗемә итү',
	'tpt-translation-intro' => 'Әлеге бит [[$2]] сәхифәсенең <span class="plainlinks">[$1 тәрҗемәсе булып тора]</span>. Тәрҗемә $3% башкарылган.',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'pagetranslation' => 'بەت تەرجىمە',
	'tpt-section' => '$1 تەرجىمە بۆلىكى',
	'tpt-section-new' => 'يېڭى تەرجىمە بۆلىكى.
ئاتى: $1',
	'tpt-section-deleted' => '$1 تەرجىمە بۆلىكى',
	'tpt-template' => 'بەت قېلىپى',
	'tpt-templatediff' => 'بەت قېلىپى ئۆزگەردى.',
	'tpt-diff-old' => 'ئالدىنقى تېكست',
	'tpt-diff-new' => 'يېڭى تېكست',
	'translate-tag-translate-link-desc' => 'بۇ بەتنى تەرجىمە قىل',
	'translate-tag-markthis' => 'تەرجىمە ئۈچۈن بۇ بەتكە بەلگە سال',
	'tpt-languages-legend' => 'باشقا تىل',
);

/** Ukrainian (Українська)
 * @author A1
 * @author AS
 * @author Ahonc
 * @author Hypers
 * @author NickK
 * @author Prima klasy4na
 * @author Riwnodennyk
 * @author Тест
 */
$messages['uk'] = array(
	'pagetranslation' => 'Переклад сторінок',
	'right-pagetranslation' => 'позначення версій сторінок для перекладу',
	'tpt-desc' => 'Розширення для перекладу статей',
	'tpt-section' => 'Блок перекладу $1',
	'tpt-section-new' => 'Новий блок перекладу. Назва: $1',
	'tpt-section-deleted' => 'Блок перекладу $1',
	'tpt-template' => 'Шаблон сторінки',
	'tpt-templatediff' => 'Шаблон сторінки змінений.',
	'tpt-diff-old' => 'Попередній текст',
	'tpt-diff-new' => 'Новий текст',
	'tpt-submit' => 'Позначити цю версію для перекладу',
	'tpt-sections-oldnew' => 'Нові та існуючі блоки перекладу',
	'tpt-sections-deleted' => 'Вилучені блоки перекладу',
	'tpt-sections-template' => 'Шаблон сторінки перекладу',
	'tpt-action-nofuzzy' => 'Не відмічати переклади як застарілі',
	'tpt-badtitle' => 'Зазначена назва сторінки ($1) недопустима',
	'tpt-nosuchpage' => 'Сторінки $1 не існує',
	'tpt-oldrevision' => '$2 не є останньою версією сторінки [[$1]].
Тільки останні версії можуть бути відмічені для перекладу.',
	'tpt-notsuitable' => 'Сторінка $1 не підходить для перекладу.
Переконайтеся, що вона містить теги <nowiki><translate></nowiki> і має вірний синтаксис.',
	'tpt-saveok' => 'Сторінка [[$1]] була відмічена для перекладу і містить $2 {{PLURAL:$2|блок перекладу|блоки перекладу|блоків перекладу}}.
Тепер сторінку можна <span class="plainlinks">[$3 перекладати]</span>.',
	'tpt-badsect' => '"$1" не є припустимою назвою для частини перекладів $2.',
	'tpt-showpage-intro' => "Нижче наведені нові, існуючі та видалені розділи.
Перед тим, які відмітити цю версію для перекладу, переконайтесь, що зміни в розділах будуть мінімальними, щоб уникнути необов'язкової роботи для перекладачів.",
	'tpt-mark-summary' => 'Позначено цю версію для перекладу',
	'tpt-edit-failed' => 'Не вдалося оновити сторінку: $1',
	'tpt-already-marked' => 'Остання версія цієї сторінки вже була відмічена для перекладу.',
	'tpt-unmarked' => 'Сторінка $1 більше не відмічена для перекладу.',
	'tpt-list-nopages' => 'Немає сторінок, відмічених для перекладу, або готових бути відміченими для перекладу.',
	'tpt-new-pages-title' => 'Сторінки, запропоновані для перекладу',
	'tpt-old-pages-title' => 'Сторінки в процесі перекладу',
	'tpt-other-pages-title' => 'Пошкоджені сторінки',
	'tpt-discouraged-pages-title' => 'Відключені сторінки',
	'tpt-new-pages' => '{{PLURAL:$1|Ця сторінка містить|Ці сторінки містять}} текст з тегами перекладу, але жодна з версій {{PLURAL:$1|цієї сторінки|цих сторінок}} не відмічена для перекладу.',
	'tpt-old-pages' => 'Деякі версії {{PLURAL:$1|цієї сторінки|цих сторінок}} були відмічені для перекладу.',
	'tpt-other-pages' => '{{PLURAL:$1|Стара версія цієї сторінки відмічена|Старі версії цих сторінок відмічені}} для перекладу,
але {{PLURAL:$1|остання версія не може бути відмічена|останні версії не можуть бути відмічені}} для перекладу.',
	'tpt-rev-mark' => 'позначити для перекладу',
	'tpt-rev-unmark' => 'вилучити з перекладу',
	'tpt-rev-discourage' => 'виключити',
	'tpt-rev-encourage' => 'відновити',
	'tpt-rev-mark-tooltip' => 'Відзначити останню версію цієї сторінки для перекладу.',
	'tpt-rev-unmark-tooltip' => 'Прибрати цю сторінку з перекладу',
	'tpt-rev-discourage-tooltip' => 'Запобігти подальшим перекладам цієї сторінки',
	'tpt-rev-encourage-tooltip' => 'Відновити цю сторінку для звичайного перекладу',
	'translate-tag-translate-link-desc' => 'Перекласти цю сторінку',
	'translate-tag-markthis' => 'Позначити цю сторінку для перекладу',
	'translate-tag-markthisagain' => 'На цій сторінці було здійснено <span class="plainlinks">[$1 змін]</span> з моменту, коли ця сторінка була востаннє <span class="plainlinks">[$2 відмічена до перекладу]</span>.',
	'translate-tag-hasnew' => 'На цій сторінці було здійснено <span class="plainlinks">[$1 змін]</span>, які не відмічені для перекладу.',
	'tpt-translation-intro' => 'Ця сторінка є <span class="plainlinks">[$1 перекладом]</span> сторінки [[$2]]. Переклад виконано на $3%.',
	'tpt-translation-intro-fuzzy' => 'Застарілі переклади позначені так.',
	'tpt-languages-legend' => 'Інші мови:',
	'tpt-target-page' => 'Ця сторінка не може бути оновлена вручну.
Це – переклад сторінки [[$1]] і його можна оновити за допомогою [$2 засобу перекладу].',
	'tpt-unknown-page' => 'Цей простір імен зарезервовано для перекладів текстів сторінок.
Сторінка, яку ви намагаєтесь редагувати, скоріше за все, не відповідає жодній сторінці, відміченій для перекладу.',
	'tpt-render-summary' => 'Оновлення для відповідності новій версії вихідної сторінки',
	'tpt-download-page' => 'Експортувати сторінку з перекладами',
	'pt-parse-open' => 'Незбалансований тег &lt;translate>.
Шаблон перекладу: <pre>$1</pre>',
	'pt-parse-close' => 'Незбалансований тег &lt;/translate>.
Шаблон перекладу: <pre>$1</pre>',
	'pt-parse-nested' => 'Вкладати один розділ &lt;translate> в інший не допускається.
Текст тегу: <pre>$1</pre>',
	'pt-shake-multiple' => 'Декілька маркерів розділу для одного розділу.
Текст розділу: <pre>$1</pre>',
	'pt-shake-position' => 'Маркери розділу в неочікуваному місці.
Текст розділу: <pre>$1</pre>',
	'pt-shake-empty' => 'Порожній розділ у маркера $1.',
	'pt-log-header' => "Журнал для дій, пов'язаних з системою перекладу сторінок.",
	'pt-log-name' => 'Журнал перекладу сторінок',
	'pt-log-mark' => '{{GENDER:$2|позначив|позначила}} для перекладу версію $3 сторінки "[[:$1]]"',
	'pt-log-unmark' => '{{GENDER:$2|зняв|зняла}} сторінку "[[:$1]]" з перекладу',
	'pt-log-moveok' => '{{GENDER:$2|виконав|виконала}} перейменування сторінки для перекладу $1 на $3',
	'pt-log-movenok' => '{{GENDER:$2|викликав|викликала}} помилку при переміщенні [[:$1]] до [[:$3]]',
	'pt-movepage-title' => 'Перемістити сторінку $1, доступну для перекладу',
	'pt-movepage-blockers' => 'Сторінка перекладу не може бути перейменована через {{PLURAL:$1|таку помилку|такі помилки}}:',
	'pt-movepage-block-base-exists' => 'Основна кінцева сторінка [[:$1]] вже існує.',
	'pt-movepage-block-base-invalid' => 'Недопустима назва основної кінцевої сторінки.',
	'pt-movepage-block-tp-exists' => 'Переклад кінцевої сторінки [[:$2]] вже існує.',
	'pt-movepage-block-tp-invalid' => 'Назва перекладу кінцевої сторінки [[:$1]] буде неправильною (можливо, занадто довга?).',
	'pt-movepage-block-section-exists' => 'Розділ цільової сторінки [[:$2]] вже існує.',
	'pt-movepage-block-section-invalid' => 'Назва сторінки кінцевого розділу [[:$1]] буде неправильною (можливо, занадто довга?).',
	'pt-movepage-block-subpage-exists' => 'Кінцева підсторінка [[:$2]] вже існує.',
	'pt-movepage-block-subpage-invalid' => 'Назва кінцевої підсторінки [[:$1]] буде неправильною (можливо, занадто довга?).',
	'pt-movepage-list-pages' => 'Список сторінок для перейменування',
	'pt-movepage-list-translation' => 'Сторінки перекладу',
	'pt-movepage-list-section' => 'Сторінки розділу',
	'pt-movepage-list-other' => 'Інші підсторінки',
	'pt-movepage-list-count' => 'Усього перемістити $1 {{PLURAL:$1|сторінку|сторінки|сторінок}}.',
	'pt-movepage-legend' => 'Перемістити сторінку, доступну для перекладу',
	'pt-movepage-current' => "Поточне ім'я:",
	'pt-movepage-new' => 'Нова назва:',
	'pt-movepage-reason' => 'Причина:',
	'pt-movepage-subpages' => 'Перемістити всі підсторінки',
	'pt-movepage-action-check' => 'Перевірити, чи можливе переміщення',
	'pt-movepage-action-perform' => 'Виконати переміщення',
	'pt-movepage-action-other' => 'Змінити ціль',
	'pt-movepage-intro' => 'Ця службова сторінка дозволяє переміщати сторінки, помічені для перекладу.
Переміщення не буде миттєвим, оскільки потрібно переміщати багато сторінок.
Для переміщення сторінок буде використовуватись черга завдань.
Під час переміщення сторінок взаємодіяти з ними неможливо.
Помилки будуть записані в журналі перекладу сторінок, ці помилки необхідно буде виправити вручну.',
	'pt-movepage-logreason' => 'Частина сторінки, що перекладається, $1.',
	'pt-movepage-started' => 'Основна сторінка тепер переміщена.
Будь ласка, перевірте [[Special:Log/pagetranslation|журнал перекладу сторінок]] на наявність помилок і повідомлення про завершення.',
	'pt-locked-page' => 'Ця сторінка заблокована, оскільки в даний момент відбувається переміщення сторінки, що перекладається.',
	'pt-deletepage-invalid-title' => 'Зазначена сторінка є недійсною.',
	'pt-deletepage-action-check' => 'Список сторінок, які будуть вилучені',
	'pt-deletepage-action-perform' => 'Виконати вилучення',
	'pt-deletepage-lang-legend' => 'Вилучити сторінку перекладу',
	'pt-deletepage-full-legend' => 'Вилучити сторінку перекладу',
	'pt-deletepage-any-legend' => 'Вилучити сторінку для перекладу або її переклад',
	'pt-deletepage-current' => 'Назва сторінки:',
	'pt-deletepage-reason' => 'Причина:',
	'pt-deletepage-subpages' => 'Вилучити всі підсторінки',
	'pt-deletepage-list-pages' => 'Список сторінок для вилучення',
	'pt-deletepage-list-translation' => 'Сторінки перекладу',
	'pt-deletepage-list-section' => 'Сторінки розділу',
	'pt-deletepage-list-other' => 'Інші підсторінки',
	'pt-deletepage-list-count' => 'Усього вилучити $1 {{PLURAL:$1|сторінку|сторінки|сторінок}}.',
	'pt-deletepage-full-logreason' => 'Частина сторінки для перекладу, $1.',
	'pt-deletepage-lang-logreason' => 'Частина сторінки перекладу $1.',
);

/** Urdu (اردو) */
$messages['ur'] = array(
	'pt-movepage-reason' => 'وجہ:',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'translate-tag-translate-link-desc' => 'Tradusi sta pagina',
);

/** Veps (Vepsän kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'pagetranslation' => 'Lehtpoliden kändmine',
	'right-pagetranslation' => 'Znamoita lehpoliden versijad kändmižen täht',
	'tpt-desc' => 'Ližaprogramm lehtpoliden südäimištod kätes.',
	'tpt-section' => 'Kändmižühtnik $1',
	'tpt-section-new' => "Uz' kändmižühtnik. Nimi: $1",
	'tpt-section-deleted' => 'Kändmižühtnik $1',
	'tpt-template' => 'Lehtpolen šablon',
	'tpt-templatediff' => 'Nece lehtpolen šablon om toižetanus.',
	'tpt-diff-old' => 'Edeline tekst',
	'tpt-diff-new' => "Uz' tekst",
	'tpt-submit' => 'Znamoita nece versii kändmižen täht.',
	'tpt-sections-oldnew' => 'Uded da olijad kändmižühtnikad',
	'tpt-sections-template' => 'Kändmižen lehtpolen šablon',
	'tpt-nosuchpage' => 'Ei ole mugošt lehtpol\'t: "$1".',
	'tpt-new-pages-title' => 'Lehtpoled kändmižen täht',
	'tpt-old-pages-title' => "Lehtpoled, kudambad kätas nügüd'",
	'tpt-other-pages-title' => 'Traudüd lehtpoled',
	'tpt-rev-encourage' => 'endištada',
	'tpt-rev-mark-tooltip' => "Znamoita necen lehtpolen jäl'gmäine versii kändmižen täht",
	'translate-tag-translate-link-desc' => "Käta nece lehtpol'",
	'translate-tag-markthis' => "Znamoita nece lehtpol' kändmižen täht.",
	'tpt-languages-legend' => 'Toižed keled:',
	'tpt-download-page' => "Eksportiruida lehtpol' kändusidenke",
	'pt-movepage-list-other' => 'Toižed alalehtpoled',
	'pt-movepage-current' => 'Olii nimi:',
	'pt-movepage-new' => "Uz' nimi:",
	'pt-movepage-reason' => 'Sü:',
	'pt-movepage-action-perform' => 'Udesnimitada',
	'pt-movepage-action-other' => 'Vajehtada met',
	'pt-deletepage-action-other' => 'Vajehtada met',
	'pt-deletepage-current' => 'Lehtpolen nimi:',
	'pt-deletepage-reason' => 'Sü:',
	'pt-deletepage-list-other' => 'Toižed alalehtpoled',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'pagetranslation' => 'Dịch trang',
	'right-pagetranslation' => 'Đánh dấu các phiên bản của trang là cần dịch',
	'tpt-desc' => 'Bộ mở rộng để dịch trang nội dung',
	'tpt-section' => 'Đơn vị dịch thuật $1',
	'tpt-section-new' => 'Đơn vị dịch thuật mới.
Tên: $1',
	'tpt-section-deleted' => 'Đơn vị dịch thuật $1',
	'tpt-template' => 'Mẫu trang',
	'tpt-templatediff' => 'Mẫu trang đã thay đổi.',
	'tpt-diff-old' => 'Văn bản trước',
	'tpt-diff-new' => 'Văn bản mới',
	'tpt-submit' => 'Đánh dấu phiên bản này là cần dịch',
	'tpt-sections-oldnew' => 'Các đơn vị dịch thuật mới và hiện có',
	'tpt-sections-deleted' => 'Các đơn vị dịch thuật đã bị xóa',
	'tpt-sections-template' => 'Bản mẫu trang dịch',
	'tpt-action-nofuzzy' => 'Đừng làm mất hiệu lực bản dịch',
	'tpt-badtitle' => 'Tên trang cung cấp ($1) không phải là tên đúng',
	'tpt-nosuchpage' => 'Trang $1 không tồn tại',
	'tpt-oldrevision' => '$2 không phải là phiên bản mới của trang [[$1]]/
Chỉ có các phiên bản mới nhất mới có thể đánh dấu cần dịch được.',
	'tpt-notsuitable' => 'Trang $1 không phù hợp để dịch thuật.
Hãy đảm bảo là nó có thẻ <nowiki><translate></nowiki> và có cú pháp đúng.',
	'tpt-saveok' => 'Trang [[$1]] đã được đánh dấu chờ dịch với $2 đơn vị dịch thuật.
Bạn có thể <span class="plainlinks">[$3 dịch]</span> trang ngay bây giờ.',
	'tpt-badsect' => '“$1” không phải là tên hợp lệ cho đơn vị dịch thuật $2.',
	'tpt-showpage-intro' => 'Dưới đây là các mục mới, đang tồn tại hoặc đã bị xóa.
Trước khi đánh dấu phiên bản này chờ dịch, hãy kiểm tra những thay đổi tại các mục đã được thu gọn lại để tránh công việc không cần thiết cho biên dịch viên chưa.',
	'tpt-mark-summary' => 'Đánh dấu phiên bản này là cần dịch',
	'tpt-edit-failed' => 'Không thể cập nhật trang: $1',
	'tpt-duplicate' => 'Tên đơn vị dịch $1 được sử dụng hơn một lần.',
	'tpt-already-marked' => 'Phiên bản mới nhất của trang này đã được đánh dấu cần dịch rồi.',
	'tpt-unmarked' => 'Trang $1 không còn đánh dấu là cần dịch.',
	'tpt-list-nopages' => 'Chưa có trang này được đánh dấu cần dịch hoặc chưa sẵn sàng để được đánh dấu cần dịch.',
	'tpt-new-pages-title' => 'Các trang cần dịch',
	'tpt-old-pages-title' => 'Các trang đang được dịch',
	'tpt-other-pages-title' => 'Các trang hỏng',
	'tpt-discouraged-pages-title' => 'Các trang được khuyên để yên',
	'tpt-new-pages' => '{{PLURAL:$1|Trang|Các trang}} này có chứa văn bản có thẻ cần dịch, nhưng không có phiên bản nào của {{PLURAL:$1|nó|chúng}} được đánh dấu cần dịch.',
	'tpt-old-pages' => 'Một phiên bản nào đó của {{PLURAL:$1||các}} trang này đã được đánh dấu cần dịch.',
	'tpt-other-pages' => '{{PLURAL:$1|Một|Những}} phiên bản trước của trang này được đánh dấu là cần dịch, nhưng {{PLURAL:$1|phiên bản|các phiên bản}} gần đây nhất không thể được đánh dấu là cần dịch.',
	'tpt-discouraged-pages' => '{{PLURAL:$1|Trang|Các trang}} này đã được khuyên để yên không cần dịch tiếp.',
	'tpt-rev-mark' => 'đánh dấu cần dịch',
	'tpt-rev-unmark' => 'bỏ dấu cần dịch',
	'tpt-rev-discourage' => 'khuyên để yên',
	'tpt-rev-encourage' => 'khuyên dịch tiếp',
	'tpt-rev-mark-tooltip' => 'Đánh dấu phiên bản mới nhất của trang này là cần dịch.',
	'tpt-rev-unmark-tooltip' => 'Bỏ dấu cần dịch khỏi trang này.',
	'tpt-rev-discourage-tooltip' => 'Khuyên để yên bản dịch hiện hành của trang này.',
	'tpt-rev-encourage-tooltip' => 'Khuyên tiếp tục dịch trang này bình thường.',
	'translate-tag-translate-link-desc' => 'Dịch trang này',
	'translate-tag-markthis' => 'Đánh dấu trang này là cần dịch',
	'translate-tag-markthisagain' => 'Trang này có <span class="plainlinks">[$1 thay đổi]</span> từ khi nó được <span class="plainlinks">[$2 đánh dấu cần dịch]</span> lần cuối.',
	'translate-tag-hasnew' => 'Trang này có <span class="plainlinks">[$1 thay đổi]</span> chưa được đánh dấu cần dịch.',
	'tpt-translation-intro' => 'Trang này là một <span class="plainlinks">[$1 bản dịch]</span> của trang [[$2]] và bản dịch đã hoàn thành $3%.',
	'tpt-translation-intro-fuzzy' => 'Các bản dịch lỗi thời được đánh dấu như thế này.',
	'tpt-languages-legend' => 'Ngôn ngữ khác:',
	'tpt-target-page' => 'Trang này không thể cập nhật bằng tay.
Nó là một bản dịch của trang [[$1]] và có thể cập nhật bản dịch bằng cách sử dụng [$2 công cụ dịch thuật].',
	'tpt-unknown-page' => 'Không gian tên này được dành cho các bản dịch trang nội dung.
Trang bạn muốn sửa đổi dường như không tương ứng với trang nào đã được đánh dấu cần dịch.',
	'tpt-translation-restricted' => 'Người quản lý biên dịch không cho phép dịch nhóm ra ngôn ngữ này.',
	'tpt-render-summary' => 'Cập nhật đến phiên bản mới của trang nguồn',
	'tpt-download-page' => 'Xuất trang cùng các bản dịch',
	'pt-parse-open' => 'Thẻ &lt;translate> không đều.
Bản mẫu thông dịch: <pre>$1</pre>',
	'pt-parse-close' => 'Thẻ &lt;/translate> không đều.
Bản mẫu thông dịch: <pre>$1</pre>',
	'pt-parse-nested' => 'Không được phép bỏ phần &lt;translate> trong phần khác.
Văn bản thẻ: <pre>$1</pre>',
	'pt-shake-multiple' => 'Nhiều phần đánh dấu cho một mục.
Phần văn bản: <pre>$1</pre>',
	'pt-shake-position' => 'Phần đánh dấu ở vị trí không mong đợi.
Phần văn bản: <pre>$1</pre>',
	'pt-shake-empty' => 'Điểm đánh dấu $1 có phần rỗng.',
	'pt-log-header' => 'Nhật trình các tác vụ co liên quan đến hệ thống dịch trang',
	'pt-log-name' => 'Nhật trình dịch trang',
	'pt-log-mark' => '{{GENDER:$2|}}đã đánh dấu phiên bản $3 của trang “[[:$1]]” là cần được dịch',
	'pt-log-unmark' => '{{GENDER:$2}}đã di chuyển trang “[[:$1]]” từ bản dịch',
	'pt-log-moveok' => '{{GENDER:$2}}đã hoàn thành việc đổi tên của trang dịch được $1 thành $3',
	'pt-log-movenok' => '{{GENDER:$2|}}đã gặp vấn đề trong khi di chuyển [[:$1]] đến [[:$3]]',
	'pt-log-delete-full-ok' => '{{GENDER:$2|}}đã hoàn thành xóa trang dịch được $1',
	'pt-log-delete-full-nok' => '{{GENDER:$2|}}đã gặp một vấn đề khi xóa trang dịch được [[:$1]]',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|}}đã hoàn thành xóa trang dịch $1',
	'pt-log-delete-lang-nok' => '{{GENDER:$2|}}đã gặp một vấn đề khi xóa trang dịch [[:$1]]',
	'pt-movepage-title' => 'Di chuyển trang dịch được $1',
	'pt-movepage-blockers' => 'Trang dịch được không thể được đổi tên vì {{PLURAL:$1|lỗi|các lỗi}} sau:',
	'pt-movepage-block-base-exists' => 'Bản gốc của trang đích [[:$1]] tồn tại.',
	'pt-movepage-block-base-invalid' => 'Bản gốc của trang đích có tên không hợp lệ.',
	'pt-movepage-block-tp-exists' => 'Bản dịch của trang đích [[:$2]] tồn tại.',
	'pt-movepage-block-tp-invalid' => 'Bản dịch của trang đích [[:$1]] có tên không hợp lệ (có lẽ dài quá).',
	'pt-movepage-block-section-exists' => 'Đề mục của trang đích [[:$2]] tồn tại.',
	'pt-movepage-block-section-invalid' => 'Đề mục của trang đích [[:$1]] có tên không hợp lệ (có lẽ dài quá).',
	'pt-movepage-block-subpage-exists' => 'Trang phụ của trang đích [[:$2]] tồn tại.',
	'pt-movepage-block-subpage-invalid' => 'Trang phụ của trang đích [[:$1]] có tên không hợp lệ (có lẽ dài quá).',
	'pt-movepage-list-pages' => 'Danh sách trang để di chuyển',
	'pt-movepage-list-translation' => 'Trang dịch thuật',
	'pt-movepage-list-section' => 'Trang phần',
	'pt-movepage-list-other' => 'Những trang phụ khác',
	'pt-movepage-list-count' => 'Tổng cộng có $1 trang để di chuyển.',
	'pt-movepage-legend' => 'Di chuyển trang dịch được',
	'pt-movepage-current' => 'Tên hiện hành:',
	'pt-movepage-new' => 'Tên mới:',
	'pt-movepage-reason' => 'Lý do:',
	'pt-movepage-subpages' => 'Di chuyển các trang phụ',
	'pt-movepage-action-check' => 'Kiểm tra có thể di chuyển',
	'pt-movepage-action-perform' => 'Di chuyển',
	'pt-movepage-action-other' => 'Thay đổi trang đích',
	'pt-movepage-intro' => 'Trang đặc biệt này cho phép bạn di chuyển các trang được đánh dấu là cần dịch.
Tác vụ này sẽ không được thực hiện ngay vì cần di chuyển nhiều trang một lúc.
Trong khi các trang đang được di chuyển, không thể tương tác các trang đó.
Những vụ thất bại sẽ được ghi vào [[Special:Log/pagetranslation|nhật trình dịch trang]]; các trang được ảnh hưởng sẽ cần được sửa đổi bằng tay.',
	'pt-movepage-logreason' => 'Một phần của trang dịch được $1.',
	'pt-movepage-started' => 'Trang gốc đã được di chuyển.
Xin hãy kiểm tra những lỗi hay thông điệp kết quả thành công trong [[Special:Log/pagetranslation|nhật trình dịch trang]].',
	'pt-locked-page' => 'Trang này bị khóa vì trang dịch được hiện đang được di chuyển.',
	'pt-deletepage-lang-title' => 'Đang xóa trang dịch $1.',
	'pt-deletepage-full-title' => 'Đang xóa trang dịch được $1.',
	'pt-deletepage-invalid-title' => 'Trang đã chỉ định là không hợp lệ.',
	'pt-deletepage-invalid-text' => 'Trang đã chỉ định không phải là trang dịch được mà cũng không phải là bản dịch của nó.',
	'pt-deletepage-action-check' => 'Danh sách các trang sẽ được xóa',
	'pt-deletepage-action-perform' => 'Thực hiện xóa',
	'pt-deletepage-action-other' => 'Thay đổi trang đích',
	'pt-deletepage-lang-legend' => 'Xóa trang dịch',
	'pt-deletepage-full-legend' => 'Xóa trang dịch được',
	'pt-deletepage-any-legend' => 'Xóa trang dịch được hoặc bản dịch của trang dịch được',
	'pt-deletepage-current' => 'Tên trang:',
	'pt-deletepage-reason' => 'Lý do:',
	'pt-deletepage-subpages' => 'Xóa mọi trang phụ',
	'pt-deletepage-list-pages' => 'Danh sách các trang sẽ được xóa',
	'pt-deletepage-list-translation' => 'Các trang dịch',
	'pt-deletepage-list-section' => 'Các trang đề mục',
	'pt-deletepage-list-other' => 'Những trang phụ khác',
	'pt-deletepage-list-count' => 'Tổng cộng $1 trang sẽ được xóa.',
	'pt-deletepage-full-logreason' => 'Một phần của trang dịch được $1.',
	'pt-deletepage-lang-logreason' => 'Một phần của trang dịch $1.',
	'pt-deletepage-started' => 'Xin hãy kiểm tra những lỗi hay thông điệp kết quả thành công trong [[Special:Log/pagetranslation|nhật trình dịch trang]].',
	'pt-deletepage-intro' => 'Trang đặc biệt này cho phép bạn xóa toàn bộ trang dịch được hoặc các bản dịch trong một ngôn ngữ nào đó.
Tác vụ xóa sẽ không được thực hiện ngay, bởi vì nhiều trang sẽ cần phải bị xóa.
Các thất bại được ghi vào [[Special:Log/pagetranslation|nhật trình dịch trang]] sẽ cần phải được sửa bằng tay.',
);

/** Volapük (Volapük)
 * @author Smeira
 */
$messages['vo'] = array(
	'translate-tag-translate-link-desc' => 'Tradutön padi at',
);

/** Wu (吴语) */
$messages['wuu'] = array(
	'pt-movepage-reason' => '理由：',
);

/** Yiddish (ייִדיש)
 * @author Imre
 * @author פוילישער
 */
$messages['yi'] = array(
	'pagetranslation' => 'בלאט טײַטש',
	'tpt-template' => 'בלאט מוסטער',
	'tpt-templatediff' => 'דער בלאט מוסטער האט זיך געענדערט.',
	'tpt-diff-old' => 'פֿריערדיגער טעקסט',
	'tpt-diff-new' => 'נײַער טעקסט',
	'tpt-submit' => 'מארקירן די ווערסיע פאר איבערזעצונג',
	'tpt-sections-oldnew' => 'נײַע און עקסיסטירנדע איבערזעצונג איינהייטן',
	'tpt-sections-deleted' => 'אויסגעמעקטע איבערזעצונג איינהייטן',
	'tpt-sections-template' => 'איבערזעצונג בלאט מוסטער',
	'tpt-old-pages-title' => 'בלעטער צו איבערזעצן',
	'tpt-other-pages-title' => 'צעבראכענע בלעטער',
	'tpt-rev-encourage' => 'אויפֿריכטן',
	'tpt-rev-mark-tooltip' => 'מארקירן די לעצטע ווערזיע פון דעם בלאט פאר איבערזעצן.',
	'tpt-rev-unmark-tooltip' => 'אוועקנעמען דעם בלאט פון איבערזעצן.',
	'translate-tag-translate-link-desc' => 'פֿאַרטײַטשט דעם בלאַט',
	'translate-tag-markthis' => 'מארקירן דעם בלאט פאר איבערזעצונג',
	'translate-tag-markthisagain' => 'דער בלאַט האט <span class="plainlinks">[ $1 ענדערונגען]</span> זינט ער איז לעצט געווארן <span class="plainlinks">[ $2 אנגעצייכנט פֿאַר איבערזעצונג].</span>',
	'translate-tag-hasnew' => 'דער בלאַט אַנטהאַלט  <span class="plainlinks">[ $1 ענדערונגען]</span> וואָס זענען נישט אנגעצייכנט פֿאַר איבערזעצונג.',
	'tpt-translation-intro' => 'דער דאזיקער בלאט איז א <span class="plainlinks">[$1 איבערגעזעצטע ווערסיע]</span> פון דעם בלאט [[$2]] און די איבערזעצונג איז $3% פארענדיקט.',
	'tpt-translation-intro-fuzzy' => 'פארעלטערטע איבערזעצונגען זענען מארקירט אזוי.',
	'tpt-languages-legend' => 'אנדערע שפראַכן:',
	'pt-movepage-list-pages' => 'רשימה פון בלעטער צו באַוועגן',
	'pt-movepage-list-translation' => 'טײַטש  בלעטער',
	'pt-movepage-current' => 'אקטועלער נאמען:',
	'pt-movepage-new' => 'נײַער נאָמען:',
	'pt-movepage-reason' => 'אורזאַך:',
	'pt-movepage-subpages' => 'באוועגן אלע אונטערבלעטער',
	'pt-movepage-action-check' => 'קאנטראלירט צי די באוועגונג איז מעגלעך',
	'pt-movepage-action-perform' => 'פֿירט אויס די באוועגונג',
	'pt-movepage-action-other' => 'ענדערט ציל',
	'pt-deletepage-current' => 'בלאַט נאָמען:',
	'pt-deletepage-reason' => 'אורזאַך:',
	'pt-deletepage-subpages' => 'אויסמעקן אלע אונטערבלעטער',
	'pt-deletepage-list-pages' => 'רשימה פון בלעטער אויסצומעקן',
	'pt-deletepage-list-translation' => 'איבערזעצונג בלעטער',
	'pt-deletepage-list-section' => 'אפטיילונג בלעטער',
	'pt-deletepage-list-other' => 'אנדערע אונטערבלעטער',
	'pt-deletepage-list-count' => 'אינגאנצן $1 {{PLURAL:$1|בלאט|בלעטער}} אויסצומעקן.',
	'pt-deletepage-full-logreason' => 'טייל פון איבערזעצבארן בלאט $1.',
	'pt-deletepage-lang-logreason' => 'טייל פון איבערזעצונג בלאט $1.',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Anakmalaysia
 * @author Chenxiaoqino
 * @author Gzdavidwong
 * @author Hydra
 * @author Liangent
 * @author PhiLiP
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'pagetranslation' => '页面翻译',
	'right-pagetranslation' => '为翻译标记页面的版本',
	'tpt-desc' => '用于翻译内容页面的扩展',
	'tpt-section' => '翻译单元$1',
	'tpt-section-new' => '新翻译单元。
名字：$1',
	'tpt-section-deleted' => '翻译单元$1',
	'tpt-template' => '页面模板',
	'tpt-templatediff' => '页面模板已改变。',
	'tpt-diff-old' => '上一版本文字',
	'tpt-diff-new' => '下一版本文字',
	'tpt-submit' => '标记此版本进行翻译',
	'tpt-sections-oldnew' => '新的和现存的翻译单元',
	'tpt-sections-deleted' => '已删除的翻译模块',
	'tpt-sections-template' => '翻译页面模版',
	'tpt-action-nofuzzy' => '不要使翻译作废',
	'tpt-badtitle' => '页面名称 ($1) 不是一个有效的标题',
	'tpt-nosuchpage' => '页面$1 不存在。',
	'tpt-oldrevision' => '$2 不是最新版本的页面 [[$1]]。
只有最新版本可以将标记进行翻译。',
	'tpt-notsuitable' => '页$1不适合翻译。
请确保它具有 <nowiki><translate></nowiki> 标记，并具有有效的语法。',
	'tpt-saveok' => '[[$1]]页面已被标记将进行翻译，一共$2个翻译单位。
本页面现已可以<span class="plainlinks">[$3 翻译]</span>。',
	'tpt-badsect' => '“$1”对于$2翻译单位不是有效的名称。',
	'tpt-showpage-intro' => '以下列出新创、现存及已删除的部分。
将此版本标记进行翻译之前，请检查来确定该部分极少受修改，以便翻译员避免得到多余的工作。',
	'tpt-mark-summary' => '此版本已被标记将进行翻译',
	'tpt-edit-failed' => '无法更新该页面：$1',
	'tpt-duplicate' => '翻译单位名称$1已被使用超过一次。',
	'tpt-already-marked' => '此页面的最新版本已经已标记进行翻译。',
	'tpt-unmarked' => '$1页不再被标记进行翻译。',
	'tpt-list-nopages' => '没有被标记进行翻译或者准备被标记进行翻译的页面。',
	'tpt-new-pages-title' => '提议翻译的页面',
	'tpt-old-pages-title' => '正在翻译的页面',
	'tpt-other-pages-title' => '损坏的页面',
	'tpt-discouraged-pages-title' => '不推荐的页面',
	'tpt-new-pages' => '以下{{PLURAL:$1|此|这些}}页面包含具有翻译标记的文本，
但没有被标记进行翻译的版本。',
	'tpt-old-pages' => '以下{{PLURAL:$1|此|这些}}页面有被标记进行翻译的版本。',
	'tpt-other-pages' => '以下{{PLURAL:$1|此|这些}}页面有旧版本被标记进行翻译，
但最新版本不得标记进行翻译。',
	'tpt-discouraged-pages' => '以下{{PLURAL:$1|此|这些}}页面挫折更多翻译。',
	'tpt-rev-mark' => '标记进行翻译',
	'tpt-rev-unmark' => '从翻译中删除',
	'tpt-rev-discourage' => '挫折',
	'tpt-rev-encourage' => '恢复',
	'tpt-rev-mark-tooltip' => '标记本页的最新版本进行翻译。',
	'tpt-rev-unmark-tooltip' => '从翻译中删除此页。',
	'tpt-rev-discourage-tooltip' => '在此页上挫折更多的翻译。',
	'tpt-rev-encourage-tooltip' => '将此页面恢复正常翻译模式。',
	'translate-tag-translate-link-desc' => '翻译本页',
	'translate-tag-markthis' => '标记此页面将进行翻译',
	'translate-tag-markthisagain' => '此页面<span class="plainlinks">[$2 最近被标记进行翻译]</span>以来，已经过一些<span class="plainlinks">[$1 更改]</span>。',
	'translate-tag-hasnew' => '此页面有未被标记进行翻译的<span class="plainlinks">[$1更改]</span>。',
	'tpt-translation-intro' => '此页面是[[$2]]页面的<span class="plainlinks">[$1 翻译版本]</span>，而该翻译工作已经$3%完成。',
	'tpt-translation-intro-fuzzy' => '已过时的翻译就这样标记。',
	'tpt-languages-legend' => '其他语言：',
	'tpt-target-page' => '本页面无法手动更新。
本页面是[[$1]]页面的翻译版，可以使用[$2 翻译工具]来更新该翻译。',
	'tpt-unknown-page' => '此命名空间是保留给内容页面翻译。
您尝试编辑的页面似乎没有对应任何被标记进行翻译的页面。',
	'tpt-render-summary' => '要匹配的源页的新版本更新',
	'tpt-download-page' => '汇出含翻译的页面',
	'pt-parse-open' => '&lt;translate>标签不平衡。
翻译模板：<pre>$1</pre>',
	'pt-parse-close' => '&lt;/translate>标签不平衡。
翻译模板：<pre>$1</pre>',
	'pt-parse-nested' => '不允许嵌套&lt;translate>部分。
标签文本：$1',
	'pt-shake-multiple' => '有个部分含多余部分标记。
部分文本：<pre>$1</pre>',
	'pt-shake-position' => '部分标记在意外位置。
部分文本：<pre>$1</pre>',
	'pt-shake-empty' => '空节标记为 $1。',
	'pt-log-header' => '与有关的网页翻译系统操作日志',
	'pt-log-name' => '网页翻译日志',
	'pt-log-mark' => '{{GENDER:$2|标记}}“[[:$1]]”页面$3版本进行翻译',
	'pt-log-unmark' => '从翻译中{{GENDER:$2|删除}}“[[:$1]]”页面',
	'pt-log-moveok' => '{{GENDER:$2|完成}}将$1改名成为$3',
	'pt-log-movenok' => '当移动[[:$1]]至[[:$3]]{{GENDER:$2|遇到}}问题',
	'pt-log-delete-full-ok' => '{{GENDER:$2|完成}}删除$1可翻译页面',
	'pt-log-delete-full-nok' => '当删除[[:$1]]可翻译页面{{GENDER:$2|遇到}}问题',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|完成}}删除$1翻译页面',
	'pt-log-delete-lang-nok' => '当删除[[:$1]]翻译页面{{GENDER:$2|遇到}}问题',
	'pt-movepage-title' => '移动可翻译页面$1',
	'pt-movepage-blockers' => '可翻译页面无法移动至新名称，原因为以下这{{PLURAL:$1|个|些}}错误：',
	'pt-movepage-block-base-exists' => '目标基页面 [[:$1]] 存在。',
	'pt-movepage-block-base-invalid' => '目标基页不是一个有效的标题。',
	'pt-movepage-block-tp-exists' => '目标翻译页面 [[:$2]] 存在。',
	'pt-movepage-block-tp-invalid' => '为[[:$1]]的目标翻译页面的标题无效，可能因为太长。',
	'pt-movepage-block-section-exists' => '目标部分页面 [[:$2]] 存在。',
	'pt-movepage-block-section-invalid' => '为[[:$1]]的目标部分页面的标题无效，可能因为太长。',
	'pt-movepage-block-subpage-exists' => '目标子页面 [[:$2]] 存在。',
	'pt-movepage-block-subpage-invalid' => '为[[:$1]]的目标子页面的标题无效，可能因为太长。',
	'pt-movepage-list-pages' => '移动到页面的列表',
	'pt-movepage-list-translation' => '翻译网页',
	'pt-movepage-list-section' => '部分页面',
	'pt-movepage-list-other' => '其他子页面',
	'pt-movepage-list-count' => '总计$1个页面即将移动。',
	'pt-movepage-legend' => '移动可翻译页面',
	'pt-movepage-current' => '当前的名称：',
	'pt-movepage-new' => '新的名称：',
	'pt-movepage-reason' => '原因：',
	'pt-movepage-subpages' => '移动所有子页面',
	'pt-movepage-action-check' => '检查是否可以移动',
	'pt-movepage-action-perform' => '确认移动',
	'pt-movepage-action-other' => '更改目标',
	'pt-movepage-intro' => '本特殊页面允许您移动被标记进行翻译的页面。
此移动操作将不会一瞬间，因为有很多页面要移动。
当页面移动中，不能与该页面交互。
任何移动失败将在[[Special:Log/pagetranslation|页面翻译日志]]记录，并且需要手动修理。',
	'pt-movepage-logreason' => '可翻译页面$1 的部分。',
	'pt-movepage-started' => '基页面现已移动。
请检查[[Special:Log/pagetranslation|页面翻译日志]]内的错误和完成消息。',
	'pt-locked-page' => '此页面已被锁定，因为可翻译页面正在被移动。',
	'pt-deletepage-lang-title' => '删除翻译网页 $1。',
	'pt-deletepage-full-title' => '删除可翻译网页 $1。',
	'pt-deletepage-invalid-title' => '指定的页不是有效的。',
	'pt-deletepage-invalid-text' => '指定的页不是可翻译页面也的翻译。',
	'pt-deletepage-action-check' => '要删除的列表页',
	'pt-deletepage-action-perform' => '不要删除',
	'pt-deletepage-action-other' => '更改目标',
	'pt-deletepage-lang-legend' => '删除翻译页面',
	'pt-deletepage-full-legend' => '删除可翻译页面',
	'pt-deletepage-any-legend' => '删除可翻译页面或翻译的翻译页面',
	'pt-deletepage-current' => '页面名称：',
	'pt-deletepage-reason' => '原因：',
	'pt-deletepage-subpages' => '删除所有子页面',
	'pt-deletepage-list-pages' => '若要删除的页面列表',
	'pt-deletepage-list-translation' => '翻译网页',
	'pt-deletepage-list-section' => '第页',
	'pt-deletepage-list-other' => '其他子页面',
	'pt-deletepage-list-count' => '总计$1个页面即将删除。',
	'pt-deletepage-full-logreason' => '翻译页面的一部分 $1。',
	'pt-deletepage-lang-logreason' => '翻译页面的一部分 $1。',
	'pt-deletepage-started' => '请检查[[Special:Log/pagetranslation|页面翻译日志]]内的错误和完成消息。',
	'pt-deletepage-intro' => '本特殊页面允许您删除一种语言中全部可翻译页面与翻译作品。
此移动操作将不会一瞬间，因为有很多页面要删除。
任何删除失败将在[[Special:Log/pagetranslation|页面翻译日志]]记录，并且需要手动修理。',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Anakmalaysia
 * @author Liangent
 * @author Mark85296341
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'pagetranslation' => '頁面翻譯',
	'right-pagetranslation' => '為翻譯標記頁面的版本',
	'tpt-desc' => '用於翻譯內容頁面的擴展',
	'tpt-section' => '翻譯單元$1',
	'tpt-section-new' => '新翻譯單元。
名字：$1',
	'tpt-section-deleted' => '翻譯單元$1',
	'tpt-template' => '頁面模板',
	'tpt-templatediff' => '頁面模板已改變。',
	'tpt-diff-old' => '上一個文字',
	'tpt-diff-new' => '下一個文字',
	'tpt-submit' => '標記此版本的翻譯',
	'tpt-sections-oldnew' => '新的和現存的翻譯單元',
	'tpt-sections-deleted' => '已刪除的翻譯模塊',
	'tpt-sections-template' => '翻譯頁面模版',
	'tpt-action-nofuzzy' => '不要使翻譯作廢',
	'tpt-badtitle' => '頁面名稱 ($1) 不是一個有效的標題',
	'tpt-nosuchpage' => '頁面$1 不存在。',
	'tpt-oldrevision' => '$2 不是最新版本的頁面 [[$1]]。
最新版本只可以將標記進行翻譯。',
	'tpt-notsuitable' => '頁$1不適合翻譯。
請確保它具有 <nowiki><translate></nowiki> 標記，並具有有效的語法。',
	'tpt-saveok' => '[[$1]]頁面已被標記將進行翻譯，一共$2個翻譯單位。
本頁面現已可以<span class="plainlinks">[$3 翻譯]</span>。',
	'tpt-badsect' => '「$1」對於$2翻譯單位不是有效的名稱。',
	'tpt-showpage-intro' => '以下列出新創、現存及已刪除的部分。
將此版本標記進行翻譯之前，請檢查來確定該部分極少受修改，以便翻譯員避免得到多餘的工作。',
	'tpt-mark-summary' => '標記此版本的翻譯',
	'tpt-edit-failed' => '無法更新該頁面：$1',
	'tpt-already-marked' => '此頁面的最新版本已經已標記進行翻譯。',
	'tpt-unmarked' => '$1頁不再被標記進行翻譯。',
	'tpt-list-nopages' => '沒有被標記進行翻譯或者準備被標記進行翻譯的頁面。',
	'tpt-new-pages-title' => '提議翻譯的頁面',
	'tpt-old-pages-title' => '正在翻譯的頁面',
	'tpt-other-pages-title' => '損壞的頁面',
	'tpt-discouraged-pages-title' => '不推薦的頁面',
	'tpt-new-pages' => '以下{{PLURAL:$1|此|這些}}頁麵包含具有翻譯標記的文本，
但沒有被標記進行翻譯的版本。',
	'tpt-old-pages' => '以下{{PLURAL:$1|此|這些}}頁面有被標記進行翻譯的版本。',
	'tpt-other-pages' => '以下{{PLURAL:$1|此|這些}}頁面有舊版本被標記進行翻譯，
但最新版本不得標記進行翻譯。',
	'tpt-discouraged-pages' => '以下{{PLURAL:$1|此|這些}}頁面挫折更多翻譯。',
	'tpt-rev-mark' => '標記進行翻譯',
	'tpt-rev-unmark' => '從翻譯中刪除',
	'tpt-rev-discourage' => '挫折',
	'tpt-rev-encourage' => '恢復',
	'tpt-rev-mark-tooltip' => '標記本頁的最新版本進行翻譯。',
	'tpt-rev-unmark-tooltip' => '從翻譯中刪除此頁。',
	'tpt-rev-discourage-tooltip' => '在此頁上挫折更多翻譯。',
	'tpt-rev-encourage-tooltip' => '將此頁面恢復正常翻譯模式。',
	'translate-tag-translate-link-desc' => '翻譯本頁',
	'translate-tag-markthis' => '標記此頁面的翻譯',
	'translate-tag-markthisagain' => '此頁面<span class="plainlinks">[$2 最近被標記進行翻譯]</span>以來，已經過一些<span class="plainlinks">[$1 更改]</span>。',
	'translate-tag-hasnew' => '此頁面有未被標記進行翻譯的<span class="plainlinks">[$1更改]</span>。',
	'tpt-translation-intro' => '此頁面是[[$2]]頁面的<span class="plainlinks">[$1 翻譯版本]</span>，而該翻譯工作已經$3%完成。',
	'tpt-translation-intro-fuzzy' => '像這樣標記為過時的翻譯。',
	'tpt-languages-legend' => '其他語言：',
	'tpt-target-page' => '本頁面無法手動更新。
本頁面是[[$1]]頁面的翻譯版，可以使用[$2 翻譯工具]來更新該翻譯。',
	'tpt-unknown-page' => '此命名空間是保留給內容頁面翻譯。
您嘗試編輯的頁面似乎沒有對應任何被標記進行翻譯的頁面。',
	'tpt-render-summary' => '要匹配的源頁的新版本更新',
	'tpt-download-page' => '匯出含翻譯的頁面',
	'pt-parse-open' => '&lt;translate>標籤不平衡。
翻譯模板：<pre>$1</pre>',
	'pt-parse-close' => '&lt;/translate>標籤不平衡。
翻譯模板：<pre>$1</pre>',
	'pt-parse-nested' => '不允許嵌套&lt;translate>部分。
標籤文本：$1',
	'pt-shake-multiple' => '有個部分含多餘部分標記。
部分文本：<pre>$1</pre>',
	'pt-shake-position' => '部分標記在意外位置。
部分文本：<pre>$1</pre>',
	'pt-shake-empty' => '空節標記為 $1。',
	'pt-log-header' => '與有關的網頁翻譯系統操作日誌',
	'pt-log-name' => '網頁翻譯日誌',
	'pt-log-mark' => '{{GENDER:$2|標記}}「[[:$1]]」頁面$3版本進行翻譯',
	'pt-log-unmark' => '從翻譯中{{GENDER:$2|刪除}}「[[:$1]]」頁面',
	'pt-log-moveok' => '{{GENDER:$2|完成}}將$1改名成為$3',
	'pt-log-movenok' => '當移動[[:$1]]至[[:$3]]{{GENDER:$2|遇到}}問題',
	'pt-log-delete-full-ok' => '{{GENDER:$2|完成}}刪除$1可翻譯頁面',
	'pt-log-delete-full-nok' => '當刪除[[:$1]]可翻譯頁面{{GENDER:$2|遇到}}問題',
	'pt-log-delete-lang-ok' => '{{GENDER:$2|完成}}刪除$1翻譯頁面',
	'pt-log-delete-lang-nok' => '當刪除[[:$1]]翻譯頁面{{GENDER:$2|遇到}}問題',
	'pt-movepage-title' => '移動可翻譯頁面$1',
	'pt-movepage-blockers' => '可翻譯頁面無法移動至新名稱，原因為以下這{{PLURAL:$1|個|些}}錯誤：',
	'pt-movepage-block-base-exists' => '目標基頁 [[:$1]] 存在。',
	'pt-movepage-block-base-invalid' => '目標基頁不是一個有效的標題。',
	'pt-movepage-block-tp-exists' => '目標翻譯頁 [[:$2]] 存在。',
	'pt-movepage-block-tp-invalid' => '為[[:$1]]的目標翻譯頁面的標題無效，可能因為字符太多。',
	'pt-movepage-block-section-exists' => '目標部分頁面 [[:$2]] 存在。',
	'pt-movepage-block-section-invalid' => '為[[:$1]]的目標部分頁面的標題無效，可能因為字符太多。',
	'pt-movepage-block-subpage-exists' => '目標子頁面 [[:$2]] 存在。',
	'pt-movepage-block-subpage-invalid' => '為[[:$1]]的目標子頁面的標題無效，可能因為字符太多。',
	'pt-movepage-list-pages' => '移動到頁面的列表',
	'pt-movepage-list-translation' => '翻譯網頁',
	'pt-movepage-list-section' => '第頁',
	'pt-movepage-list-other' => '其他子頁面',
	'pt-movepage-list-count' => '總計$1個頁面即將移動。',
	'pt-movepage-legend' => '移動可翻譯頁面',
	'pt-movepage-current' => '當前的名稱：',
	'pt-movepage-new' => '新的名稱：',
	'pt-movepage-reason' => '原因：',
	'pt-movepage-subpages' => '移動所有子頁面',
	'pt-movepage-action-check' => '檢查是否可以移動',
	'pt-movepage-action-perform' => '確認移動',
	'pt-movepage-action-other' => '更改目標',
	'pt-movepage-intro' => '本特殊頁面允許您移動被標記進行翻譯的頁面。
此移動操作將不會一瞬間，因為有很多頁面要移動。
當頁面移動中，不能與該頁面交互。
任何移動失敗將在[[Special:Log/pagetranslation|頁面翻譯日誌]]記錄，並且需要手動修理。',
	'pt-movepage-logreason' => '可翻譯頁面$1 的部分。',
	'pt-movepage-started' => '基頁面現已移動。
請檢查[[Special:Log/pagetranslation|頁面翻譯日誌]]內的錯誤和完成消息。',
	'pt-locked-page' => '此頁面已被鎖定，因為可翻譯頁面正在被移動。',
	'pt-deletepage-lang-title' => '刪除翻譯網頁 $1。',
	'pt-deletepage-full-title' => '刪除可翻譯網頁 $1。',
	'pt-deletepage-invalid-title' => '指定的頁不是有效的。',
	'pt-deletepage-invalid-text' => '指定的頁不是可翻譯頁面也的翻譯。',
	'pt-deletepage-action-check' => '要刪除的列表頁',
	'pt-deletepage-action-perform' => '不要刪除',
	'pt-deletepage-action-other' => '更改目標',
	'pt-deletepage-lang-legend' => '刪除翻譯頁面',
	'pt-deletepage-full-legend' => '刪除可翻譯頁面',
	'pt-deletepage-any-legend' => '刪除可翻譯頁面或翻譯的翻譯頁面',
	'pt-deletepage-current' => '頁面名稱：',
	'pt-deletepage-reason' => '原因：',
	'pt-deletepage-subpages' => '刪除所有子頁面',
	'pt-deletepage-list-pages' => '若要刪除的頁面列表',
	'pt-deletepage-list-translation' => '翻譯網頁',
	'pt-deletepage-list-section' => '第頁',
	'pt-deletepage-list-other' => '其他子頁面',
	'pt-deletepage-list-count' => '總計$1個頁面即將刪除。',
	'pt-deletepage-full-logreason' => '翻譯頁面的一部分 $1。',
	'pt-deletepage-lang-logreason' => '翻譯頁面的一部分 $1。',
	'pt-deletepage-started' => '請檢查[[Special:Log/pagetranslation|頁面翻譯日誌]]內的錯誤和完成消息。',
	'pt-deletepage-intro' => '本特殊頁面允許您刪除一種語言中全部可翻譯頁面與翻譯作品。
此移動操作將不會一瞬間，因為有很多頁面要刪除。
任何刪除失敗將在[[Special:Log/pagetranslation|頁面翻譯日誌]]記錄，並且需要手動修理。',
);

