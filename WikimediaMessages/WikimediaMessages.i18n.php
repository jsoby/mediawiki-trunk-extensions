<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @addtogroup Extensions
 * @comment TODO:
 * @comment + Remove current events and community portal from the default sidebar
 * @comment + and add those messages to here
 * @comment + Make the help links on non-Wikimedia sites point to mediawiki.org?
 */

$messages = array();

$messages['en'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donate', # do not translate this URL to other languages until a donation page, approved by Wikimedia Foundation, exists
	'sitesupport'            => 'Donate',
	'tooltip-n-sitesupport'  => 'Support us',
	'sidebar'                =>  '* navigation
** mainpage|mainpage-description
** portal-url|portal
** currentevents-url|currentevents
** recentchanges-url|recentchanges
** randompage-url|randompage
** helppage|help
** sitesupport-url|sitesupport', # do not translate or duplicate this message to other languages

	# Per http://lists.wikimedia.org/pipermail/wikitech-l/2008-September/039454.html
	'robots.txt'  => '# Lines here will be added to the global robots.txt', # do not translate or duplicate this message to other languages

	# Wikimedia specific usergroups
	'group-accountcreator'        => 'Account creators',
	'group-developer'             => 'Developers',
	'group-founder'               => 'Founders',
	'group-import'                => 'Importers',
	'group-ipblock-exempt'        => 'IP block exemptions',
	'group-rollbacker'            => 'Rollbackers',
	'group-transwiki'             => 'Transwiki importers',
	'group-uploader'              => 'Uploaders',

	'group-accountcreator-member' => 'account creator',
	'group-developer-member'      => 'developer',
	'group-founder-member'        => 'founder',
	'group-import-member'         => 'importer',
	'group-ipblock-exempt-member' => 'IP block exempt',
	'group-rollbacker-member'     => 'rollbacker',
	'group-transwiki-member'      => 'transwiki importer',
	'group-uploader-member'       => 'uploader',

	'grouppage-accountcreator' => '{{ns:project}}:Account creators',
	'grouppage-developer'      => '{{ns:project}}:Developers',
	'grouppage-founder'        => '{{ns:project}}:Founders',
	'grouppage-import'         => '{{ns:project}}:Importers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP block exemption',
	'grouppage-rollbacker'     => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki'      => '{{ns:project}}:Transwiki importers',
	'grouppage-uploader'       => '{{ns:project}}:Uploaders',

	# Global Wikimedia specific usergroups (defined on http://meta.wikimedia.org/wiki/Special:GlobalGroupPermissions)

	'group-steward'         => 'Stewards',
	'group-sysadmin'        => 'System administrators',
	'group-Global_bot'      => 'Global bots',
	'group-Global_rollback' => 'Global rollbackers',
	'group-Ombudsmen'       => 'Ombudsmen',

	'group-steward-member'         => 'steward',
	'group-sysadmin-member'        => 'system administrator',
	'group-Global_bot-member'      => 'global bot',
	'group-Global_rollback-member' => 'global rollbacker',
	'group-Ombudsmen-member'       => 'ombudsman',

	'grouppage-steward'         => 'm:Stewards', # only translate this message to other languages if you have to change it
	'grouppage-sysadmin'        => 'm:System administrators', # only translate this message to other languages if you have to change it
	'grouppage-Global_bot'      => 'm:Global bot', # only translate this message to other languages if you have to change it
	'grouppage-Global_rollback' => 'm:Global rollback', # only translate this message to other languages if you have to change it
	'grouppage-Ombudsmen'       => 'm:Ombudsman commission', # only translate this message to other languages if you have to change it

	# mediawiki.org specific user group

	'group-coder'        => 'Coders',
	'group-coder-member' => 'coder',
	'grouppage-coder'    => 'Project:Coder', # only translate this message to other languages if you have to change it
	
);

/** Message documentation (Message documentation)
 * @author Jon Harald Søby
 * @author Meno25
 * @author Purodha
 * @author SPQRobin
 */
$messages['qqq'] = array(
	'wikimediamessages-desc' => 'Short description of the Wikimediamessages extension, shown in [[Special:Version]]. Do not translate or change links.',
	'sitesupport-url' => 'Wikimedia-specific message used in the sidebar.
{{doc-important|Only change the link if it has a translation!|([http://wikimediafoundation.org/wiki/Special:Prefixindex/Donate/ check])}}',
	'sitesupport' => "Display name for the 'Donations' page, shown in the sidebar menu of all pages. The target page is meant to be the page where users can see how they can contribute financially to the wiki site.",
	'tooltip-n-sitesupport' => 'The tooltip when hovering over the {{msg|sitesupport}} link in the sidebar.',
	'group-accountcreator' => 'A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/accountcreator]]. See also {{msg|group-accountcreator-member}}.',
	'group-founder' => 'A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/founder]] (used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]). See also {{msg|group-founder-member}}.',
	'group-accountcreator-member' => 'A member of the group {{msg|group-accountcreator}}.',
	'group-founder-member' => 'A member in the group {{msg|group-founder}} (used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]).',
	'grouppage-steward' => '{{Global grouppage}}',
	'grouppage-Global_bot' => '{{Global grouppage}}',
	'grouppage-Global_rollback' => '{{Global grouppage}}',
	'grouppage-Ombudsmen' => '{{Global grouppage}}',
);

/** Säggssch (Säggssch)
 * @author Thogo
 */
$messages['sxu'] = array(
	'sitesupport' => 'Schbändn',
	'group-steward' => 'Schdewards',
	'group-steward-member' => 'Schdeward',
	'grouppage-steward' => '{{ns:project}}:Schdewards',
);

/** Dalecarlian (Övdalską) */
$messages['dlc'] = array(
	'sitesupport' => 'Stjaintja',
	'tooltip-n-sitesupport' => 'Styða {{SITENAME}}',
);

/** Behase Mentawei (Behase Mentawei)
 * @author Päge bintën
 */
$messages['mwv'] = array(
	'tooltip-n-sitesupport' => 'Dukung kami',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'sitesupport' => 'Tupe fakalofa mo e lagomatai',
);

/** Achinese (Achèh)
 * @author Andri.h
 */
$messages['ace'] = array(
	'tooltip-n-sitesupport' => 'Dukông kamoë',
);

/** Afrikaans (Afrikaans)
 * @author Meno25
 * @author Naudefj
 * @author SPQRobin
 * @author Spacebirdy
 */
$messages['af'] = array(
	'wikimediamessages-desc' => 'Wikimedia spesifieke boodskappe',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/af',
	'sitesupport' => 'Skenkings',
	'tooltip-n-sitesupport' => 'Ondersteun ons',
	'group-developer' => 'Ontwikkelaars',
	'group-founder' => 'Grondleggers',
	'group-import' => 'Importeurders',
	'group-transwiki' => 'Transwiki-importeurs',
	'group-developer-member' => 'Ontwikkelaar',
	'group-founder-member' => 'Grondlegger',
	'group-import-member' => 'Importeurder',
	'grouppage-developer' => '{{ns:project}}:Ontwikkelaars',
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'grouppage-import' => '{{ns:project}}:Importeurders',
	'group-steward' => 'Waarde',
	'group-Global_bot' => 'Globale botte',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-steward-member' => 'Waard',
	'group-sysadmin-member' => 'Stelseladministrateur',
	'group-Global_bot-member' => 'globale bot',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => '{{ns:project}}:Waarde',
);

/** Gheg Albanian (Gegë)
 * @author Cradel
 */
$messages['aln'] = array(
	'sitesupport' => 'Dhurime',
	'tooltip-n-sitesupport' => 'Përkraheni projektin',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'sitesupport' => 'መዋጮ ለመስጠት',
	'tooltip-n-sitesupport' => 'የገንዘብ ስጦታ ለዊኪሜድያ ይስጡ',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'wikimediamessages-desc' => 'Mensaches espezificos de Wikimedia',
	'sitesupport-url' => 'Project:Donazions',
	'sitesupport' => 'Donazions',
	'tooltip-n-sitesupport' => 'Refirme o procheuto',
	'group-accountcreator' => 'Creyadors de cuentas',
	'group-developer' => 'Desembolicadors',
	'group-founder' => 'Fundadors',
	'group-import' => 'Importadors',
	'group-ipblock-exempt' => 'Exenzion de bloqueyo IP',
	'group-rollbacker' => 'Esfedors',
	'group-transwiki' => 'Importadors de transwiki',
	'group-accountcreator-member' => 'Creyador de cuenta',
	'group-developer-member' => 'Desembolicador',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-ipblock-exempt-member' => 'Exenzion de bloqueyo IP',
	'group-rollbacker-member' => 'Rebertidor',
	'group-transwiki-member' => 'Importador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creyadors de cuenta',
	'grouppage-developer' => '{{ns:project}}:Desembolicadors',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exenzión d'o bloqueyo d'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Esfedors',
	'grouppage-transwiki' => '{{ns:project}}:Importardors transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => "Almenistradors d'o sistemas",
	'group-Global_bot' => 'Bots globals',
	'group-Global_rollback' => 'Esfedors globals',
	'group-Ombudsmen' => 'Chustizias',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => "almenistrador d'o sistema",
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'Esfedor global',
	'group-Ombudsmen-member' => 'Chustizia',
);

/** Old English (Anglo-Saxon) */
$messages['ang'] = array(
	'sitesupport' => 'Gieldgiefa',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'wikimediamessages-desc' => 'رسائل خاصة بويكيميديا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA',
	'sitesupport' => 'تبرع',
	'tooltip-n-sitesupport' => 'ادعمنا',
	'group-accountcreator' => 'منشئو الحسابات',
	'group-developer' => 'مطورون',
	'group-founder' => 'مؤسسون',
	'group-import' => 'مستوردون',
	'group-ipblock-exempt' => 'مستثنون من منع الأيبي',
	'group-rollbacker' => 'مسترجعون',
	'group-transwiki' => 'مستوردون عبر الويكي',
	'group-accountcreator-member' => 'منشئ حساب',
	'group-developer-member' => 'مطور',
	'group-founder-member' => 'مؤسس',
	'group-import-member' => 'مستورد',
	'group-ipblock-exempt-member' => 'مستثنى من منع الأيبي',
	'group-rollbacker-member' => 'مسترجع',
	'group-transwiki-member' => 'مستورد عبر الويكي',
	'grouppage-accountcreator' => '{{ns:project}}:منشئو الحسابات',
	'grouppage-developer' => '{{ns:project}}:مطورون',
	'grouppage-founder' => '{{ns:project}}:مؤسسون',
	'grouppage-import' => '{{ns:project}}:مستوردون',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الأيبي',
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعون',
	'grouppage-transwiki' => '{{ns:project}}:مستوردون عبر الويكي',
	'group-steward' => 'مضيفون',
	'group-sysadmin' => 'إداريو النظام',
	'group-Global_bot' => 'بوتات عامة',
	'group-Global_rollback' => 'مسترجعون عامون',
	'group-Ombudsmen' => 'أومبدسمين',
	'group-steward-member' => 'مضيف',
	'group-sysadmin-member' => 'إداري نظام',
	'group-Global_bot-member' => 'بوت عام',
	'group-Global_rollback-member' => 'مسترجع عام',
	'group-Ombudsmen-member' => 'أومبدسمان',
	'grouppage-steward' => 'm:Stewards/ar',
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'group-coder' => 'مكودون',
	'group-coder-member' => 'مكود',
	'grouppage-coder' => 'Project:مكود',
);

/** Aramaic (ܐܪܡܝܐ) */
$messages['arc'] = array(
	'sitesupport' => 'ܕܚܘܝܬܐ',
);

/** Araucanian (Mapudungun)
 * @author Lin linao
 */
$messages['arn'] = array(
	'sitesupport' => 'Elungechi',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 */
$messages['arz'] = array(
	'wikimediamessages-desc' => 'رسايل خاصه بويكيميديا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA',
	'sitesupport' => 'التبرعات',
	'tooltip-n-sitesupport' => 'ساندنا',
	'group-accountcreator' => 'مؤسسين الحسابات',
	'group-developer' => 'مطورين',
	'group-founder' => 'مؤسسين',
	'group-import' => 'مستوردين',
	'group-ipblock-exempt' => 'مستثنيين من منع الااى بى',
	'group-rollbacker' => 'مسترجعين',
	'group-transwiki' => 'مستوردين عبر الويكى',
	'group-accountcreator-member' => 'مؤسس حساب',
	'group-developer-member' => 'مطور',
	'group-founder-member' => 'مؤسس',
	'group-import-member' => 'مستورد',
	'group-ipblock-exempt-member' => 'مستثنى من منع الاايبى',
	'group-rollbacker-member' => 'مسترجع',
	'group-transwiki-member' => 'مستورد عبر الويكى',
	'grouppage-accountcreator' => '{{ns:project}}:منشئين الحسابات',
	'grouppage-developer' => '{{ns:project}}:مطورين',
	'grouppage-founder' => '{{ns:project}}:مؤسسين',
	'grouppage-import' => '{{ns:project}}:مستوردين',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الااى بى',
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعين',
	'grouppage-transwiki' => '{{ns:project}}:مستوردين عبر الويكى',
	'group-steward' => 'مضيفين',
	'group-sysadmin' => 'اداريين النظام',
	'group-Global_bot' => 'بوتات عامه',
	'group-Global_rollback' => 'مسترجعين عامين',
	'group-Ombudsmen' => 'اومبادزمين',
	'group-steward-member' => 'مضيف',
	'group-sysadmin-member' => 'ادارى نظام',
	'group-Global_bot-member' => 'بوت عام',
	'group-Global_rollback-member' => 'مسترجع عام',
	'group-Ombudsmen-member' => 'اومبدادزمان',
	'grouppage-steward' => 'm:Stewards/ar',
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'group-coder' => 'مكودون',
	'group-coder-member' => 'مكود',
	'grouppage-coder' => 'Project:مكود',
);

/** Assamese (অসমীয়া)
 * @author Psneog
 * @author Rajuonline
 */
$messages['as'] = array(
	'sitesupport' => 'দান-বৰঙনি',
	'tooltip-n-sitesupport' => 'আমাক সহায় কৰক!',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicos de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donativos',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Sofítanos',
	'group-accountcreator' => 'Creadores de cuentes',
	'group-developer' => 'Desenrolladores',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-ipblock-exempt' => 'Exenciones de bloqueos IP',
	'group-rollbacker' => 'Revertidores',
	'group-transwiki' => 'Importadores treswiki',
	'group-accountcreator-member' => 'creador de cuentes',
	'group-developer-member' => 'desenrollador',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-ipblock-exempt-member' => 'exentu de bloqueos IP',
	'group-rollbacker-member' => 'revertidor',
	'group-transwiki-member' => 'importador treswiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentes',
	'grouppage-developer' => '{{ns:project}}:Desenrolladores',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:exención de bloqueos IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revertidores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores treswiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Alministradores del sistema',
	'group-Global_bot' => 'Bots globales',
	'group-Global_rollback' => 'Revertidores globales',
	'group-Ombudsmen' => 'Comisarios',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'alministrador del sistema',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revertidor global',
	'group-Ombudsmen-member' => 'comisariu',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
);

/** Avaric (Авар) */
$messages['av'] = array(
	'sitesupport' => 'Садакъа',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'sitesupport' => 'Zobera',
	'tooltip-n-sitesupport' => 'Va cin zobel !',
);

/** Aymara (Aymar aru) */
$messages['ay'] = array(
	'sitesupport' => 'Ramañanaka',
);

/** Azerbaijani (Azərbaycan) */
$messages['az'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Bashkir (Башҡорт) */
$messages['ba'] = array(
	'sitesupport' => 'Ярҙам итеү',
);

/** Samogitian (Žemaitėška)
 * @author Hugo.arg
 * @author Zordsdavini
 */
$messages['bat-smg'] = array(
	'sitesupport' => 'Pagelba',
	'group-steward' => 'Gaspaduorē',
	'group-sysadmin' => 'Sėstėmas admėnėstratuorē',
	'group-Global_bot' => 'Gluobalūs buotā',
	'group-Global_bot-member' => 'gluobalus buots',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'wikimediamessages-desc' => 'کوله یان مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'مدتان',
	'tooltip-n-sitesupport' => 'ما را حمایت کنیت',
	'group-accountcreator' => 'حساب شرکنوکان',
	'group-developer' => 'پیشبروکان',
	'group-founder' => 'بنگیج کنوکان',
	'group-import' => 'وارد کنوکان',
	'group-ipblock-exempt' => 'معافیت محدودیت آی پی',
	'group-rollbacker' => 'عقب ترینوک',
	'group-transwiki' => 'واردکنوکان بین‌ویکی',
	'group-accountcreator-member' => 'حساب شرکنوک',
	'group-developer-member' => 'پیشبروک',
	'group-founder-member' => 'بنگیج کنوک',
	'group-import-member' => 'واردکنوک',
	'group-ipblock-exempt-member' => 'استثنای محدودیت آی پی',
	'group-rollbacker-member' => 'ترینوک',
	'group-transwiki-member' => 'واردکنوک بین‌ویکی',
	'grouppage-accountcreator' => '{{ns:project}}:حساب شرکنوکان',
	'grouppage-developer' => '{{ns:project}}:پیشبروکان',
	'grouppage-founder' => '{{ns:project}}:بنگیج کنوکان',
	'grouppage-import' => '{{ns:project}}:واردکنوکان',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء محدودیت آی پی',
	'grouppage-rollbacker' => '{{ns:project}}:واردکنوکان',
	'grouppage-transwiki' => '{{ns:project}}:واردکنوکان بین ویکی',
	'group-steward' => 'نگهبانان',
	'group-sysadmin' => 'مدیران سیستم',
	'group-Global_bot' => 'رباتان سراسری',
	'group-Global_rollback' => 'ترینوک سراسری',
	'group-steward-member' => 'نگهبان',
	'group-sysadmin-member' => 'مدیر سیستم',
	'group-Global_bot-member' => 'ربات سراسری',
	'group-Global_rollback-member' => 'ترینوک سراسری',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'sitesupport' => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Suportaran kami',
);

/** Belarusian (Беларуская)
 * @author Yury Tarasievich
 */
$messages['be'] = array(
	'sitesupport' => 'Ахвяраванні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author Cesco
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 */
$messages['be-tarask'] = array(
	'wikimediamessages-desc' => 'Спэцыфічныя паведамленьні фундацыі «Вікімэдыя»',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Ахвяраваньні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
	'group-accountcreator' => 'Стваральнікі рахункаў',
	'group-developer' => 'Распрацоўшчыкі',
	'group-founder' => 'Фундатары',
	'group-import' => 'Імпартэры',
	'group-ipblock-exempt' => 'Выключэньні з блякаваньняў ІР-адрасоў',
	'group-rollbacker' => 'Адкатвальнікі',
	'group-transwiki' => 'Імпартэры зь іншых вікі',
	'group-accountcreator-member' => 'стваральнік рахункаў',
	'group-developer-member' => 'распрацоўшчык',
	'group-founder-member' => 'фундатар',
	'group-import-member' => 'імпартэр',
	'group-ipblock-exempt-member' => 'выключэньне з блякаваньняў ІР-адрасоў',
	'group-rollbacker-member' => 'адкатвальнік',
	'group-transwiki-member' => 'імпартэр зь іншых вікі',
	'grouppage-accountcreator' => '{{ns:project}}:Стваральнікі рахункаў',
	'grouppage-developer' => '{{ns:project}}:Распрацоўшчыкі',
	'grouppage-founder' => '{{ns:project}}:Фундатары',
	'grouppage-import' => '{{ns:project}}:Імпартэры',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Выключэньні з блякаваньняў ІР-адрасоў',
	'grouppage-rollbacker' => '{{ns:project}}:Адкатвальнікі',
	'grouppage-transwiki' => '{{ns:project}}:Імпартэры зь іншых вікі',
	'group-steward' => 'Сьцюарды',
	'group-sysadmin' => 'Сыстэмныя адміністратары',
	'group-Global_bot' => 'Глябальныя робаты',
	'group-Global_rollback' => 'Глябальныя адкатвальнікі',
	'group-Ombudsmen' => 'праваабаронцы',
	'group-steward-member' => 'сьцюард',
	'group-sysadmin-member' => 'сыстэмны адміністратар',
	'group-Global_bot-member' => 'глябальны робат',
	'group-Ombudsmen-member' => 'праваабаронца',
);

/** Bulgarian (Български)
 * @author Borislav
 * @author DCLXVI
 * @author Meno25
 * @author Spiritia
 */
$messages['bg'] = array(
	'wikimediamessages-desc' => 'Съобщения, специфични за Уикимедия',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bg',
	'sitesupport' => 'Дарения',
	'tooltip-n-sitesupport' => 'Подкрепете ни',
	'group-developer' => 'Разработчици',
	'group-founder' => 'Основатели',
	'group-developer-member' => 'Разработчик',
	'group-founder-member' => 'Основател',
	'grouppage-developer' => '{{ns:project}}:Разработчици',
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'group-steward' => 'Стюарди',
	'group-sysadmin' => 'Системни администратори',
	'group-Global_bot' => 'Глобални ботове',
	'group-Ombudsmen' => 'Омбудсмани',
	'group-steward-member' => 'Стюард',
	'group-sysadmin-member' => 'системен администратор',
	'group-Global_bot-member' => 'глобален бот',
	'group-Ombudsmen-member' => 'омбудсман',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-coder' => 'Програмисти',
	'group-coder-member' => 'програмист',
);

/** Bambara (Bamanankan) */
$messages['bm'] = array(
	'sitesupport' => 'Banumanke',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Zaheen
 */
$messages['bn'] = array(
	'wikimediamessages-desc' => 'উইকিমিডিয়া নির্ধারিত বার্তা',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'দান করুন',
	'tooltip-n-sitesupport' => 'আমাদের সহায়তা করুন',
	'group-accountcreator' => 'অ্যাকাউন্ট তৈরি করেন যারা',
	'group-developer' => 'ডেভেলোপারগণ',
	'group-founder' => 'উদ্যোক্তা',
	'group-import' => 'আমদানীকারক',
	'group-rollbacker' => 'রোলব্যাকারগণ',
	'group-transwiki' => 'ট্রান্সউইকি ইম্পোর্টারগণ',
	'group-accountcreator-member' => 'অ্যাকাউন্ট তৈরি করেন যিনি',
	'group-developer-member' => 'ডেভেলোপার',
	'group-founder-member' => 'উদ্যোক্তা',
	'group-import-member' => 'ইম্পোর্টার',
	'group-rollbacker-member' => 'রোলব্যাকার',
	'group-transwiki-member' => 'ট্রান্সউইকি ইম্পোর্টার',
	'grouppage-developer' => '{{ns:project}}:ডেভেলোপার',
	'grouppage-founder' => '{{ns:project}}:প্রতিষ্ঠাতা',
	'grouppage-import' => '{{ns:project}}:ইম্পোর্টার',
	'grouppage-rollbacker' => '{{ns:project}}:রোলব্যাকার',
	'grouppage-transwiki' => '{{ns:project}}:ট্রান্সউইকি ইম্পোর্টার',
	'group-steward' => 'স্টিউয়ার্ডগণ',
	'group-sysadmin' => 'সিস্টেম প্রশাসকগণ',
	'group-Global_bot' => 'গ্লোবাল বটসমূহ',
	'group-Global_rollback' => 'গ্লোবাল রোলব্যাকারগণ',
	'group-steward-member' => 'স্টিউয়ার্ড',
	'group-sysadmin-member' => 'সিস্টেম প্রশাসক',
	'group-Global_bot-member' => 'গ্লোবাল বট',
	'group-Global_rollback-member' => 'গ্লোবাল রোলব্যাকার',
);

/** Tibetan (བོད་ཡིག) */
$messages['bo'] = array(
	'sitesupport' => 'ཞལ་འདེབས།',
);

/** Bishnupria Manipuri (ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী) */
$messages['bpy'] = array(
	'sitesupport' => 'দান দেনা',
);

/** Bakhtiari (بختياري)
 * @author Behdarvandyani
 */
$messages['bqi'] = array(
	'wikimediamessages-desc' => 'پیام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bqi',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایت زه ایما',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author לערי ריינהארט
 */
$messages['br'] = array(
	'wikimediamessages-desc' => 'Kemennoù dibar Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Roadoù',
	'tooltip-n-sitesupport' => "Harpit ac'hanomp",
	'group-accountcreator' => 'Krouerien kontoù',
	'group-developer' => 'Diorroer',
	'group-founder' => 'Diazezourien',
	'group-import' => 'Enporzhier',
	'group-ipblock-exempt' => "Nemedennoù bloc'hadoù IP",
	'group-rollbacker' => 'Assaverien',
	'group-transwiki' => 'Enporzherien treuzwiki',
	'group-accountcreator-member' => 'Krouer kontoù',
	'group-developer-member' => 'Diorroer',
	'group-founder-member' => 'Diazezer',
	'group-import-member' => 'Enporzhier',
	'group-ipblock-exempt-member' => "Nemedenn bloc'had IP",
	'group-rollbacker-member' => 'Assaver',
	'group-transwiki-member' => 'Enporzhier treuzwiki',
	'grouppage-accountcreator' => '{{ns:project}}: Krouerien kontoù',
	'grouppage-developer' => '{{ns:project}}:Diorroerien',
	'grouppage-founder' => '{{ns:project}}:Diazezerien',
	'grouppage-import' => '{{ns:project}}:Enporzherien',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Nemedenn bloc'had IP",
	'grouppage-rollbacker' => '{{ns:project}}:Assaverien',
	'grouppage-transwiki' => '{{ns:project}}:Enporzherien treuzwiki',
);

/** Bosnian (Bosanski)
 * @author CERminator
 * @author Demicx
 * @author לערי ריינהארט
 */
$messages['bs'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bs',
	'sitesupport' => 'Donacije',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'group-founder' => 'Osnivači',
	'group-founder-member' => 'osnivač',
);

/** Catalan (Català)
 * @author Juanpabl
 * @author Martorell
 * @author Paucabot
 */
$messages['ca'] = array(
	'wikimediamessages-desc' => 'Missatges específics de Wikimedia',
	'sitesupport' => 'Donacions',
	'tooltip-n-sitesupport' => 'Ajudau-nos',
	'group-accountcreator' => 'Creadors de comptes',
	'group-developer' => 'Desenvolupadors',
	'group-founder' => 'Fundadors',
	'group-import' => 'Importadors',
	'group-ipblock-exempt' => "Exempts del bloqueig d'IP",
	'group-rollbacker' => 'Revertidors ràpids',
	'group-transwiki' => 'Importadors transwiki',
	'group-accountcreator-member' => 'Creador de comptes',
	'group-developer-member' => 'Desenvolupador',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-ipblock-exempt-member' => "Exempt del bloqueig d'IP",
	'group-rollbacker-member' => 'Revertidor ràpid',
	'group-transwiki-member' => 'Importador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creadors de comptes',
	'grouppage-developer' => '{{ns:project}}:Desenvolupadors',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exempts del bloqueig d'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Revertidors ràpids',
	'grouppage-transwiki' => '{{ns:project}}:Importadors transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradors del sistema',
	'group-Global_bot' => 'Bots globals',
	'group-Global_rollback' => 'Revertidors ràpids globals',
	'group-Ombudsmen' => 'Defensors del poble',
	'group-steward-member' => 'Majordom',
	'group-sysadmin-member' => 'administrador del sistema',
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'Revertidor ràpid global',
	'group-Ombudsmen-member' => 'Defensor del poble',
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄) */
$messages['cdo'] = array(
	'sitesupport' => 'Dà̤-giŏng',
);

/** Chechen (Нохчийн) */
$messages['ce'] = array(
	'sitesupport' => 'Сайтан сагIа',
);

/** Cebuano (Cebuano)
 * @author Abastillas
 */
$messages['ceb'] = array(
	'sitesupport' => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Tabangi kami',
);

/** Chamorro (Chamoru)
 * @author Gadao01
 */
$messages['ch'] = array(
	'sitesupport' => "Nina'i siha",
	'tooltip-n-sitesupport' => 'Supotta ham',
);

/** Cherokee (ᏣᎳᎩ) */
$messages['chr'] = array(
	'sitesupport' => 'ᎠᎵᏍᎪᎸᏙᏗ',
);

/** Corsican (Corsu) */
$messages['co'] = array(
	'sitesupport' => 'Dunazione',
	'group-steward' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Crimean Turkish (Latin) (Qırımtatarca (Latin)) */
$messages['crh-latn'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Crimean Turkish (Cyrillic) (Qırımtatarca (Cyrillic)) */
$messages['crh-cyrl'] = array(
	'sitesupport' => 'Багъышлар',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'wikimediamessages-desc' => 'Hlášení specifická pro projekty nadace Wikimedia Foundation',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Sponzorstv%C3%AD',
	'sitesupport' => 'Podpořte nás',
	'tooltip-n-sitesupport' => 'Podpořte nás',
	'group-accountcreator' => 'Zakladatelé účtů',
	'group-developer' => 'Vývojáři',
	'group-founder' => 'Zakladatelé',
	'group-import' => 'Importéři',
	'group-ipblock-exempt' => 'Nepodléhající blokování IP adres',
	'group-rollbacker' => 'Revertovatelé',
	'group-transwiki' => 'Transwiki importéři',
	'group-uploader' => 'Načítači souborů',
	'group-accountcreator-member' => 'zakladatel účtů',
	'group-developer-member' => 'vývojář',
	'group-founder-member' => 'zakladatel',
	'group-import-member' => 'importér',
	'group-ipblock-exempt-member' => 'nepodléhající blokování IP adres',
	'group-rollbacker-member' => 'revertovatel',
	'group-transwiki-member' => 'transwiki importér',
	'group-uploader-member' => 'načítač souborů',
	'grouppage-accountcreator' => '{{ns:project}}:Zakladatelé účtů',
	'grouppage-developer' => '{{ns:project}}:Vývojáři',
	'grouppage-founder' => '{{ns:project}}:Zakladatelé',
	'grouppage-import' => '{{ns:project}}:Importéři',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výjimky z blokování IP adres',
	'grouppage-rollbacker' => '{{ns:project}}:Revertovatelé',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéři',
	'grouppage-uploader' => '{{ns:project}}:Načítači souborů',
	'group-steward' => 'Stevardi',
	'group-sysadmin' => 'Správcové serveru',
	'group-Global_bot' => 'Globální boti',
	'group-Global_rollback' => 'Globální revertovatelé',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-steward-member' => 'stevard',
	'group-sysadmin-member' => 'správce serveru',
	'group-Global_bot-member' => 'globální bot',
	'group-Global_rollback-member' => 'globální revertovatel',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-coder' => 'Programátoři',
	'group-coder-member' => 'programátor',
);

/** Church Slavic (Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'sitesupport' => 'даꙗ́ниꙗ',
);

/** Chuvash (Чăвашла)
 * @author PCode
 */
$messages['cv'] = array(
	'sitesupport' => 'Пожертвованисем',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'sitesupport' => 'Rhoi arian',
	'tooltip-n-sitesupport' => "Ein cefnogi'n ariannol",
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'sitesupport' => 'Støt siden',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Pill
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifische Systemnachrichten',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spenden',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unterstütze uns',
	'group-accountcreator' => 'Benutzerkonten-Ersteller',
	'group-developer' => 'Systemadministratoren',
	'group-founder' => 'Gründer',
	'group-import' => 'Importeure',
	'group-ipblock-exempt' => 'IP-Sperre-Ausnahmen',
	'group-rollbacker' => 'Zurücksetzer',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-uploader' => 'Hochlader',
	'group-accountcreator-member' => 'Benutzerkonten-Ersteller',
	'group-developer-member' => 'Systemadministrator',
	'group-founder-member' => 'Gründer',
	'group-import-member' => 'Importeur',
	'group-ipblock-exempt-member' => 'IP-Sperre-Ausnahme',
	'group-rollbacker-member' => 'Zurücksetzer',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'group-uploader-member' => 'Hochlader',
	'grouppage-accountcreator' => '{{ns:project}}:Benutzerkonten-Ersteller',
	'grouppage-developer' => '{{ns:project}}:Systemadministratoren',
	'grouppage-founder' => '{{ns:project}}:Gründer',
	'grouppage-import' => '{{ns:project}}:Importeure',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperre-Ausnahme',
	'grouppage-rollbacker' => '{{ns:project}}:Zurücksetzer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'grouppage-uploader' => '{{ns:project}}:Hochlader',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Systemadministratoren',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_rollback' => 'Globale Zurücksetzer',
	'group-Ombudsmen' => 'Ombudspersonen',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrator',
	'group-Global_bot-member' => 'Globaler Bot',
	'group-Global_rollback-member' => 'Globaler Zurücksetzer',
	'group-Ombudsmen-member' => 'Ombudsperson',
	'grouppage-steward' => 'm:Stewards/de',
	'group-coder' => 'Programmierer',
	'group-coder-member' => 'Programmierer',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Raimond Spekking
 */
$messages['de-formal'] = array(
	'tooltip-n-sitesupport' => 'Unterstützen Sie uns',
);

/** Zazaki (Zazaki)
 * @author Mirzali
 */
$messages['diq'] = array(
	'sitesupport' => 'Beğş',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 * @author Pe7er
 * @author Qualia
 */
$messages['dsb'] = array(
	'wikimediamessages-desc' => 'Zdźělenja specifiske za Wikimediju',
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Pódpěraj nas',
	'group-accountcreator' => 'Kontowe załožarje',
	'group-developer' => 'Wuwiwarje',
	'group-founder' => 'Załožarje',
	'group-import' => 'Importery',
	'group-transwiki' => 'Transwiki importery',
	'group-accountcreator-member' => 'kontowy załožaŕ',
	'group-developer-member' => 'wuwiwaŕ',
	'group-founder-member' => 'załožaŕ',
	'group-import-member' => 'importer',
	'group-transwiki-member' => 'transwiki importer',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowe załožarje',
	'grouppage-developer' => '{{ns:project}}:Wuwiwarje',
	'grouppage-founder' => '{{ns:project}}:Załožarje',
	'grouppage-import' => '{{ns:project}}:Importery',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importery',
	'group-steward' => 'Stewardy',
	'group-sysadmin' => 'Systemowe administratory',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemowy administrator',
);

/** Divehi (ދިވެހިބަސް) */
$messages['dv'] = array(
	'sitesupport' => 'ޚައިރާތުތައް',
);

/** Dzongkha (ཇོང་ཁ)
 * @author Tenzin
 */
$messages['dz'] = array(
	'sitesupport' => 'ཕན་འདེབས།',
	'tooltip-n-sitesupport' => 'ང་བཅས་ལུ་རྒྱབ་སྐྱོར་འབད།',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'sitesupport' => 'Wɔ nunana',
	'tooltip-n-sitesupport' => 'Kpe ɖe mía ŋu',
	'group-accountcreator' => 'Ŋkɔ ŋlɔlawo',
	'group-accountcreator-member' => 'ŋkɔ ŋlɔla',
);

/** Greek (Ελληνικά)
 * @author Badseed
 * @author Consta
 * @author ZaDiak
 */
$messages['el'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/el',
	'sitesupport' => 'Δωρεές',
	'tooltip-n-sitesupport' => 'Υποστηρίξτε μας',
	'group-founder' => 'Ιδρυτές',
	'group-founder-member' => 'Ιδρυτής',
	'grouppage-founder' => '{{ns:project}}:Ιδρυτές',
	'group-sysadmin-member' => 'διαχειριστής συστήματος',
);

/** Emiliano-Romagnolo (Emiliàn e rumagnòl) */
$messages['eml'] = array(
	'sitesupport' => 'Donaziòun',
);

/** Esperanto (Esperanto)
 * @author Tlustulimu
 * @author Yekrats
 */
$messages['eo'] = array(
	'wikimediamessages-desc' => 'Specifaj mesaĝoj de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Monkolektado',
	'sitesupport' => 'Donaci',
	'tooltip-n-sitesupport' => 'Subteni nin per mono',
	'group-accountcreator' => 'Kreintoj de kontoj',
	'group-developer' => 'Programistoj',
	'group-founder' => 'Fondintoj',
	'group-import' => 'Importantoj',
	'group-ipblock-exempt' => 'Sendevigoj por IP-forbaroj',
	'group-rollbacker' => 'Restarigantoj',
	'group-transwiki' => 'Importintoj de Transvikio',
	'group-accountcreator-member' => 'Kreinto de konto',
	'group-developer-member' => 'Programisto',
	'group-founder-member' => 'Fondinto',
	'group-import-member' => 'Importanto',
	'group-ipblock-exempt-member' => 'maldeviga de IP-forbaro',
	'group-rollbacker-member' => 'Restariganto',
	'group-transwiki-member' => 'Transvikia importanto',
	'grouppage-accountcreator' => '{{ns:project}}:Kreintoj de kontoj',
	'grouppage-developer' => '{{ns:project}}:Programistoj',
	'grouppage-founder' => '{{ns:project}}:Fondintoj',
	'grouppage-import' => '{{ns:project}}:Importantoj',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Sendevigo por IP-forbaro',
	'grouppage-rollbacker' => '{{ns:project}}:Restarigantoj',
	'grouppage-transwiki' => '{{ns:project}}:Transvikiaj importantoj',
	'group-steward' => 'Stevardoj',
	'group-sysadmin' => 'Sistemaj administrantoj',
	'group-Global_bot' => 'Ĝeneralaj robotoj',
	'group-Global_rollback' => 'Transvikia restariganto',
	'group-Ombudsmen' => 'Arbitraciistoj',
	'group-steward-member' => 'Stevardo',
	'group-sysadmin-member' => 'sistema administranto',
	'group-Global_bot-member' => 'Ĝenerala roboto',
	'group-Global_rollback-member' => 'transvikia restariganto',
	'group-Ombudsmen-member' => 'Arbitraciisto',
	'group-coder' => 'Programistoj',
	'group-coder-member' => 'programisto',
);

/** Spanish (Español)
 * @author Ascánder
 * @author Platonides
 * @author Sanbec
 */
$messages['es'] = array(
	'wikimediamessages-desc' => 'Mensajes específicos de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donaciones',
	'sitesupport' => 'Donaciones',
	'tooltip-n-sitesupport' => 'Apóyenos',
	'group-accountcreator' => 'Creadores de cuentas',
	'group-developer' => 'Desarrolladores',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-ipblock-exempt' => 'Dispensas de bloqueo IP',
	'group-rollbacker' => 'Pueden deshacer',
	'group-transwiki' => 'Importadores transwiki',
	'group-accountcreator-member' => 'creador de la cuenta',
	'group-developer-member' => 'desarrollador',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-ipblock-exempt-member' => 'dispensa de bloqueo IP',
	'group-rollbacker-member' => 'puede deshacer',
	'group-transwiki-member' => 'Importador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentas',
	'grouppage-developer' => '{{ns:project}}:Desarrolladores',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Dispensa de bloqueo IP',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'administradores del sistema',
	'group-Global_bot' => 'bots globales',
	'group-Global_rollback' => 'Pueden deshacer globalmente',
	'group-Ombudsmen' => 'Defensores de la comunidad',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrador del sistema',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'Puede deshacer globalmente',
	'group-Ombudsmen-member' => 'defensor de la comunidad',
);

/** Estonian (Eesti)
 * @author WikedKentaur
 */
$messages['et'] = array(
	'sitesupport' => 'Annetused',
	'tooltip-n-sitesupport' => 'Toeta meid',
);

/** Basque (Euskara) */
$messages['eu'] = array(
	'sitesupport' => 'Emariak',
);

/** Extremaduran (Estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'sitesupport' => 'Donacionis',
	'tooltip-n-sitesupport' => 'Ayúamus',
);

/** Persian (فارسی)
 * @author Huji
 */
$messages['fa'] = array(
	'wikimediamessages-desc' => 'پیغام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fa',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایت از ما',
	'group-accountcreator' => 'سازندگان حساب کاربری',
	'group-developer' => 'توسعه‌دهندگان',
	'group-founder' => 'بنیان‌گذاران',
	'group-import' => 'واردکنندگان',
	'group-ipblock-exempt' => 'استثناهای قطع دسترسی نشانی اینترنتی',
	'group-rollbacker' => 'واگردانی‌کنندگان',
	'group-transwiki' => 'واردکنندگان تراویکی',
	'group-uploader' => 'بارگذارها',
	'group-accountcreator-member' => 'ایجادکنندهٔ حساب کاربری',
	'group-developer-member' => 'توسعه‌دهنده',
	'group-founder-member' => 'بنیان‌گذار',
	'group-import-member' => 'واردکننده',
	'group-ipblock-exempt-member' => 'استثنای قطع دسترسی نشانی اینترنتی',
	'group-rollbacker-member' => 'واگردانی‌کننده',
	'group-transwiki-member' => 'واردکنندهٔ تراویکی',
	'group-uploader-member' => 'بارگذار',
	'grouppage-accountcreator' => '{{ns:project}}:سازندگان حساب کاربری',
	'grouppage-developer' => '{{ns:project}}:توسعه‌دهندگان',
	'grouppage-founder' => '{{ns:project}}:بنیان‌گذاران',
	'grouppage-import' => '{{ns:project}}:واردکنندگان',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثنای قطع دسترسی نشانی اینترنتی',
	'grouppage-rollbacker' => '{{ns:project}}:واگردانی‌کنندگان',
	'grouppage-transwiki' => '{{ns:project}}:واردکنندگان تراویکی',
	'grouppage-uploader' => '{{ns:project}}:بارگذارها',
	'group-steward' => 'ویکیبدان',
	'group-sysadmin' => 'مدیران سیستم',
	'group-Global_bot' => 'ربات‌های سراسری',
	'group-Global_rollback' => 'واگردانی‌کنندگان سراسری',
	'group-Ombudsmen' => 'دادآوران',
	'group-steward-member' => 'ویکیبد',
	'group-sysadmin-member' => 'مدیر سیستم',
	'group-Global_bot-member' => 'ربات سراسری',
	'group-Global_rollback-member' => 'واگردانی‌کنندهٔ سراسری',
	'group-Ombudsmen-member' => 'دادآور',
	'group-coder' => 'برنامه‌نویسان',
	'group-coder-member' => 'برنامه‌نویس',
);

/** Fulah (Fulfulde) */
$messages['ff'] = array(
	'sitesupport' => 'Dokkal',
);

/** Finnish (Suomi)
 * @author Agony
 * @author Crt
 * @author Jaakonam
 * @author Nike
 */
$messages['fi'] = array(
	'wikimediamessages-desc' => 'Wikimedian käyttämiä järjestelmäviestejä.',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fi',
	'sitesupport' => 'Lahjoitukset',
	'tooltip-n-sitesupport' => 'Tue meitä',
	'group-accountcreator' => 'käyttäjätunnusten luojat',
	'group-developer' => 'ohjelmistokehittäjät',
	'group-founder' => 'perustajat',
	'group-import' => 'sivujen tuojat',
	'group-ipblock-exempt' => 'IP-estoista vapautetut',
	'group-rollbacker' => 'palauttajat',
	'group-transwiki' => 'toisesta wikistä sivujen tuojat',
	'group-accountcreator-member' => 'käyttäjätunnusten luoja',
	'group-developer-member' => 'ohjelmistokehittäjä',
	'group-founder-member' => 'perustaja',
	'group-import-member' => 'sivujen tuoja',
	'group-ipblock-exempt-member' => 'IP-estosta vapautettu',
	'group-rollbacker-member' => 'palauttaja',
	'group-transwiki-member' => 'toisesta wikistä sivujen tuoja',
	'grouppage-accountcreator' => '{{ns:project}}:Käyttäjätunnusten luojat',
	'grouppage-developer' => '{{ns:project}}:Ohjelmistokehittäjät',
	'grouppage-founder' => '{{ns:project}}:Perustajat',
	'grouppage-import' => '{{ns:project}}:Sivujen tuojat',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-estoista vapautetut',
	'grouppage-rollbacker' => '{{ns:project}}:Palauttajat',
	'grouppage-transwiki' => '{{ns:project}}:Toisista wikeistä sivujen tuojat',
	'group-steward' => 'ylivalvojat',
	'group-sysadmin' => 'järjestelmän ylläpitäjät',
	'group-Global_bot' => 'globaalit botit',
	'group-Global_rollback' => 'globaalit palauttajat',
	'group-steward-member' => 'ylivalvoja',
	'group-sysadmin-member' => 'järjestelmän ylläpitäjä',
	'group-Global_bot-member' => 'globaalibotti',
	'group-Global_rollback-member' => 'globaalipalauttaja',
	'grouppage-steward' => 'm:Stewards/fi',
);

/** Võro (Võro)
 * @author Võrok
 */
$messages['fiu-vro'] = array(
	'sitesupport' => 'Tugõminõ',
	'tooltip-n-sitesupport' => 'Tukõq mi tüüd',
);

/** Fijian (Na Vosa Vakaviti) */
$messages['fj'] = array(
	'sitesupport' => 'Soli',
);

/** Faroese (Føroyskt)
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'tooltip-n-sitesupport' => 'Stuðla okkum',
	'group-steward' => 'Ternur',
	'group-steward-member' => 'Terna',
	'grouppage-steward' => '{{ns:project}}:Ternur',
);

/** French (Français)
 * @author Grondin
 * @author IAlex
 * @author Meno25
 * @author Sherbrooke
 * @author Verdy p
 * @author Yekrats
 * @author Zetud
 * @author לערי ריינהארט
 */
$messages['fr'] = array(
	'wikimediamessages-desc' => 'Messages spécifiques de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fr',
	'sitesupport' => 'Faire un don',
	'tooltip-n-sitesupport' => 'Aidez-nous',
	'group-accountcreator' => 'Créateurs de comptes',
	'group-developer' => 'Développeurs',
	'group-founder' => 'Fondateurs',
	'group-import' => 'Importateurs',
	'group-ipblock-exempt' => 'Exemptions de blocs IP',
	'group-rollbacker' => 'Réverteurs',
	'group-transwiki' => 'Importateurs transwiki',
	'group-uploader' => 'Téléverseurs',
	'group-accountcreator-member' => 'Créateur de comptes',
	'group-developer-member' => 'Développeur',
	'group-founder-member' => 'Fondateur',
	'group-import-member' => 'Importateur',
	'group-ipblock-exempt-member' => 'Exemption de bloc IP',
	'group-rollbacker-member' => 'Réverteur',
	'group-transwiki-member' => 'Importateur Transwiki',
	'group-uploader-member' => 'téléverseur',
	'grouppage-accountcreator' => '{{ns:project}}:Créateurs de comptes',
	'grouppage-developer' => '{{ns:project}}:Développeurs',
	'grouppage-founder' => '{{ns:project}}:Fondateurs',
	'grouppage-import' => '{{ns:project}}:Importateurs',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de bloc IP',
	'grouppage-rollbacker' => '{{ns:project}}:Réverteurs',
	'grouppage-transwiki' => '{{ns:project}}:Importateurs Transwiki',
	'grouppage-uploader' => '{{ns:project}}:Téléverseurs',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administrateurs système',
	'group-Global_bot' => 'Bots globaux',
	'group-Global_rollback' => 'Reverteurs globaux',
	'group-Ombudsmen' => 'Commissaires',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrateur système',
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'Reverteur global',
	'group-Ombudsmen-member' => 'Commissaire',
	'grouppage-steward' => 'm:Stewards/fr',
	'grouppage-Global_bot' => 'm:Bot policy/fr',
	'group-coder' => 'Codeurs',
	'group-coder-member' => 'codeur',
);

/** Cajun French (Français cadien)
 * @author JeanVoisin
 */
$messages['frc'] = array(
	'sitesupport' => "Donner de l'argent",
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'sitesupport' => 'Balyér',
	'tooltip-n-sitesupport' => 'Sotegnéd lo projèt.',
	'group-steward' => 'Stevârds',
	'group-steward-member' => 'Stevârd',
	'grouppage-steward' => '{{ns:project}}:Stevârds',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'sitesupport' => 'Doninus',
	'tooltip-n-sitesupport' => 'Judinus',
	'group-developer' => 'Disvilupadôrs',
	'group-founder' => 'Fondadôrs',
	'group-developer-member' => 'Disvilupadôr',
	'group-founder-member' => 'Fondadôr',
);

/** Western Frisian (Frysk)
 * @author Pyt
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'sitesupport' => 'Donaasjes',
	'tooltip-n-sitesupport' => 'Stypje ús',
);

/** Irish (Gaeilge) */
$messages['ga'] = array(
	'sitesupport' => 'Síntiúis',
);

/** Gagauz (Gagauz)
 * @author Cuman
 */
$messages['gag'] = array(
	'sitesupport' => 'Baaşişlär',
	'tooltip-n-sitesupport' => 'Material destek',
);

/** Gan (贛語)
 * @author Symane
 */
$messages['gan'] = array(
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資援偶嗰俚',
);

/** Scottish Gaelic (Gàidhlig) */
$messages['gd'] = array(
	'sitesupport' => 'Tabhartasan',
);

/** Galician (Galego)
 * @author Alma
 * @author Meno25
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicas da Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/gl',
	'sitesupport' => 'Doazóns',
	'tooltip-n-sitesupport' => 'Apóienos',
	'group-accountcreator' => 'Creadores de contas',
	'group-developer' => 'Desenvolvedores',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-ipblock-exempt' => 'Exención de bloqueo IP',
	'group-rollbacker' => 'Revertidores',
	'group-transwiki' => 'Importadores transwiki',
	'group-accountcreator-member' => 'Creador de contas',
	'group-developer-member' => 'Desenvolvedor',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-ipblock-exempt-member' => 'Exento de bloqueo IP',
	'group-rollbacker-member' => 'Revertidor',
	'group-transwiki-member' => 'Importador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de contas',
	'grouppage-developer' => '{{ns:project}}:Desenvolvedores',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exención de bloqueo IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revertidores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradores do sistema',
	'group-Global_bot' => 'Bots globais',
	'group-Global_rollback' => 'Revertedores globais',
	'group-Ombudsmen' => 'Comisarios',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrador do sistema',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revertedor global',
	'group-Ombudsmen-member' => 'comisario',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
);

/** Gilaki (گیلکی)
 * @author AminSanaei
 */
$messages['glk'] = array(
	'sitesupport' => 'بال زئن',
);

/** Guarani (Avañe'ẽ) */
$messages['gn'] = array(
	'sitesupport' => "Me'ẽ rei",
);

/** Gothic
 * @author Jocke Pirat
 */
$messages['got'] = array(
	'sitesupport' => 'Hairtiþaskatts',
	'tooltip-n-sitesupport' => 'Hairtiþ uns',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'sitesupport' => 'Δῶρα',
	'tooltip-n-sitesupport' => 'Τρέφειν ἡμᾶς',
	'group-accountcreator' => 'Ποιητὲς λογισμῶν',
	'group-developer' => 'Ἐμφανισταί',
	'group-founder' => 'Ἱδρυταί',
	'group-import' => 'Εἰσαγωγεῖς',
	'group-rollbacker' => 'Μεταστροφεῖς',
	'group-steward-member' => 'φροντιστής',
	'group-Global_rollback-member' => 'καθολικὸς μεταστροφεύς',
	'group-coder' => 'Κωδικεύοντες',
);

/** Swiss German (Alemannisch) */
$messages['gsw'] = array(
	'sitesupport' => 'Finanzielli Hilf',
);

/** Gujarati (ગુજરાતી)
 * @author Aksi great
 * @author Dsvyas
 * @author לערי ריינהארט
 */
$messages['gu'] = array(
	'sitesupport' => 'દાન',
	'tooltip-n-sitesupport' => 'અમારું સમર્થન કરો',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'sitesupport' => 'Toyrtysyn',
	'tooltip-n-sitesupport' => 'Cooin lhien',
);

/** Hakka (Hak-kâ-fa)
 * @author Hakka
 */
$messages['hak'] = array(
	'sitesupport' => 'Chan-chhu',
	'tooltip-n-sitesupport' => 'Chṳ̂-chhu',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'sitesupport' => 'E lūlū mai',
	'tooltip-n-sitesupport' => 'Kāko‘o mai',
	'group-steward' => 'Nā kuene',
	'group-steward-member' => 'Kuene',
);

/** Hebrew (עברית)
 * @author Rotem Liss
 */
$messages['he'] = array(
	'wikimediamessages-desc' => 'הודעות המיוחדות לוויקימדיה',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/תרומות',
	'sitesupport' => 'תרומות',
	'tooltip-n-sitesupport' => 'תרומה',
	'group-accountcreator' => 'יוצרי חשבונות',
	'group-developer' => 'מפתחים',
	'group-founder' => 'מייסדים',
	'group-import' => 'מייבאים',
	'group-ipblock-exempt' => 'חסיני חסימות IP',
	'group-rollbacker' => 'משחזרים',
	'group-transwiki' => 'מייבאים בין־אתריים',
	'group-accountcreator-member' => 'יוצר חשבונות',
	'group-developer-member' => 'מפתח',
	'group-founder-member' => 'מייסד',
	'group-import-member' => 'מייבא',
	'group-ipblock-exempt-member' => 'חסין חסימות IP',
	'group-rollbacker-member' => 'משחזר',
	'group-transwiki-member' => 'מייבא בין־אתרי',
	'grouppage-accountcreator' => '{{ns:project}}:יוצר חשבונות',
	'grouppage-developer' => '{{ns:project}}:מפתח',
	'grouppage-founder' => '{{ns:project}}:מייסד',
	'grouppage-import' => '{{ns:project}}:מייבא',
	'grouppage-ipblock-exempt' => '{{ns:project}}:חסין חסימות IP',
	'grouppage-rollbacker' => '{{ns:project}}:משחזר',
	'grouppage-transwiki' => '{{ns:project}}:מייבא בין-אתרי',
	'group-steward' => 'דיילים',
	'group-sysadmin' => 'מנהלי מערכת',
	'group-Global_bot' => 'בוטים גלובליים',
	'group-Global_rollback' => 'משחזרים גלובליים',
	'group-Ombudsmen' => 'נציבי תלונות הציבור',
	'group-steward-member' => 'דייל',
	'group-sysadmin-member' => 'מנהל מערכת',
	'group-Global_bot-member' => 'בוט גלובלי',
	'group-Global_rollback-member' => 'משחזר גלובלי',
	'group-Ombudsmen-member' => 'נציב תלונות הציבור',
	'group-coder' => 'מתכנתים',
	'group-coder-member' => 'מתכנת',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 * @author לערי ריינהארט
 */
$messages['hi'] = array(
	'sitesupport' => 'दान',
	'tooltip-n-sitesupport' => 'हमें सहायता दें',
);

/** Fiji Hindi (Latin) (Fiji Hindi (Latin))
 * @author Girmitya
 */
$messages['hif-latn'] = array(
	'sitesupport' => 'Daan',
	'tooltip-n-sitesupport' => 'Ham log ke sahara do',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 * @author Kguirnela
 */
$messages['hil'] = array(
	'sitesupport' => 'Donasyon',
	'tooltip-n-sitesupport' => 'Sakdaga kami',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'wikimediamessages-desc' => 'Posebne poruke Wikimedije',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donacije',
	'sitesupport' => 'Novčani prilozi',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'group-accountcreator' => 'Otvaratelji računa',
	'group-developer' => 'Sistem administratori',
	'group-founder' => 'Osnivači',
	'group-import' => 'Unositelji',
	'group-ipblock-exempt' => 'IP blok iznimke',
	'group-rollbacker' => 'Uklonitelji',
	'group-transwiki' => 'Međuwiki unositelji',
	'group-accountcreator-member' => 'otvaratelj računa',
	'group-developer-member' => 'sistem administrator',
	'group-founder-member' => 'osnivač',
	'group-import-member' => 'unositelj',
	'group-ipblock-exempt-member' => 'IP blok iznimka',
	'group-rollbacker-member' => 'uklonitelj',
	'group-transwiki-member' => 'međuwiki unositelj',
	'grouppage-accountcreator' => '{{ns:project}}:Otvaratelji računa',
	'grouppage-developer' => '{{ns:project}}:Sistem administratori',
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'grouppage-import' => '{{ns:project}}:Unositelji',
	'grouppage-ipblock-exempt' => '{ns:project}}:IP blok iznimka',
	'grouppage-rollbacker' => '{{ns:project}}:Uklonitelji',
	'grouppage-transwiki' => '{{ns:project}}:Međuwiki unositelji',
	'group-steward' => 'Stjuardi',
	'group-sysadmin' => 'Sistem administratori',
	'group-Global_bot' => 'Globalni bot',
	'group-Global_rollback' => 'Globalni uklonitelji',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-steward-member' => 'Stjuard',
	'group-sysadmin-member' => 'sistem administrator',
	'group-Global_bot-member' => 'globalni bot',
	'group-Global_rollback-member' => 'globalni uklonitelj',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => '{{ns:project}}:Stjuardi',
	'group-coder' => 'Programeri',
	'group-coder-member' => 'programer',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Podpěrajće nas',
	'group-accountcreator' => 'Kontowi załožerjo',
	'group-developer' => 'Wuwiwarjo',
	'group-founder' => 'Załožerjo',
	'group-import' => 'Importerojo',
	'group-transwiki' => 'Transwiki importerojo',
	'group-accountcreator-member' => 'Kontowe załožer',
	'group-developer-member' => 'wuwiwar',
	'group-founder-member' => 'załožer',
	'group-import-member' => 'importer',
	'group-transwiki-member' => 'transwiki importer',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowi załožerjo',
	'grouppage-developer' => '{{ns:project}}:Wuwiwarjo',
	'grouppage-founder' => '{{ns:project}}:Załožerjo',
	'grouppage-import' => '{{ns:project}}:Importerojo',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importerojo',
	'group-steward' => 'Stewardźa',
	'group-sysadmin' => 'Systemowi administratorojo',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemowy administrator',
);

/** Haitian (Kreyòl ayisyen)
 * @author Masterches
 */
$messages['ht'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Fè yon don',
	'tooltip-n-sitesupport' => 'Soutni pwojè a',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifikus üzenetek',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Adományok',
	'tooltip-n-sitesupport' => 'Támogatás',
	'group-accountcreator' => 'fióklétrehozók',
	'group-developer' => 'fejlesztők',
	'group-founder' => 'alapítók',
	'group-import' => 'importálók',
	'group-ipblock-exempt' => 'IP-blokkok alól mentesülők',
	'group-rollbacker' => 'visszaállítók',
	'group-transwiki' => 'wikiközi importálók',
	'group-accountcreator-member' => 'fióklétrehozó',
	'group-developer-member' => 'fejlesztő',
	'group-founder-member' => 'alapító',
	'group-import-member' => 'importáló',
	'group-ipblock-exempt-member' => 'IP-blokkok alól mentesülő',
	'group-rollbacker-member' => 'visszaállító',
	'group-transwiki-member' => 'wikiközi importáló',
	'grouppage-accountcreator' => '{{ns:project}}:Fióklétrehozók',
	'grouppage-developer' => '{{ns:project}}:Fejlesztők',
	'grouppage-founder' => '{{ns:project}}:Alapítók',
	'grouppage-import' => '{{ns:project}}:Importálók',
	'grouppage-ipblock-exempt' => 'Mentesülés az IP-blokkok alól',
	'grouppage-rollbacker' => '{{ns:project}}:Visszaállítók',
	'grouppage-transwiki' => '{{ns:project}}:Wikiközi importálók',
	'group-steward' => 'helytartók',
	'group-sysadmin' => 'rendszeradminisztrátorok',
	'group-Global_bot' => 'globális botok',
	'group-Global_rollback' => 'globális visszaállítók',
	'group-Ombudsmen' => 'ombudsmanok',
	'group-steward-member' => 'helytartó',
	'group-sysadmin-member' => 'rendszeradminisztrátor',
	'group-Global_bot-member' => 'globális bot',
	'group-Global_rollback-member' => 'globális visszaállító',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => '{{ns:project}}:Helytartók',
);

/** Armenian (Հայերեն)
 * @author Teak
 */
$messages['hy'] = array(
	'sitesupport' => 'Դրամական նվիրատվություն',
);

/** Interlingua (Interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'wikimediamessages-desc' => 'Messages specific de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Donationes',
	'tooltip-n-sitesupport' => 'Sustene nos',
	'group-accountcreator' => 'Creatores de contos',
	'group-developer' => 'Disveloppatores',
	'group-founder' => 'Fundatores',
	'group-import' => 'Importatores',
	'group-ipblock-exempt' => 'Exemptiones de blocos IP',
	'group-rollbacker' => 'Revertitores',
	'group-transwiki' => 'Importatores transwiki',
	'group-accountcreator-member' => 'Creator de contos',
	'group-developer-member' => 'Disveloppator',
	'group-founder-member' => 'Fundator',
	'group-import-member' => 'Importator',
	'group-ipblock-exempt-member' => 'Exemption de bloco IP',
	'group-rollbacker-member' => 'Revertitor',
	'group-transwiki-member' => 'Importator transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creatores de contos',
	'grouppage-developer' => '{{ns:project}}:Disveloppatores',
	'grouppage-founder' => '{{ns:project}}:Fundatores',
	'grouppage-import' => '{{ns:project}}:Importatores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de blocos IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revertitores',
	'grouppage-transwiki' => '{{ns:project}}:Importatores transwiki',
	'group-steward' => 'Stewardes',
	'group-sysadmin' => 'Administratores de systema',
	'group-Global_bot' => 'Bots global',
	'group-Global_rollback' => 'Revocatores global',
	'group-Ombudsmen' => 'Mediatores',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator de systema',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revocator global',
	'group-Ombudsmen-member' => 'mediator',
	'group-coder' => 'Programmatores',
	'group-coder-member' => 'programmator',
	'grouppage-coder' => 'Project:Programmator',
);

/** Indonesian (Bahasa Indonesia)
 * @author Rex
 */
$messages['id'] = array(
	'wikimediamessages-desc' => 'Pesan-pesan spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Penggalangan_dana',
	'sitesupport' => 'Menyumbang',
	'tooltip-n-sitesupport' => 'Dukung kami',
	'group-accountcreator' => 'Pembuat akun',
	'group-developer' => 'Developer',
	'group-founder' => 'Pendiri',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Pengecualian pemblokiran IP',
	'group-rollbacker' => 'Pengembali revisi',
	'group-transwiki' => 'Importir transwiki',
	'group-accountcreator-member' => 'Pembuat akun',
	'group-developer-member' => 'Developer',
	'group-founder-member' => 'Pendiri',
	'group-import-member' => 'Importir',
	'group-ipblock-exempt-member' => 'Pengecualian pemblokiran IP',
	'group-rollbacker-member' => 'Pengembali revisi',
	'group-transwiki-member' => 'Importir transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Pembuat akun',
	'grouppage-developer' => '{{ns:project}}:Developer',
	'grouppage-founder' => '{{ns:project}}:Pendiri',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian pemblokiran IP',
	'grouppage-rollbacker' => '{{ns:project}}:Pengembali revisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Administrator sistem',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Pengembali revisi global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrator sistem',
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'Pengembali revisi global',
	'group-Ombudsmen-member' => 'Ombudsman',
	'grouppage-steward' => 'm:Stewards/id',
	'group-coder' => 'Programer',
	'group-coder-member' => 'programer',
);

/** Interlingue (Interlingue)
 * @author Malafaya
 */
$messages['ie'] = array(
	'sitesupport' => 'Donationes',
);

/** Eastern Canadian (Unified Canadian Aboriginal Syllabics) (ᐃᓄᒃᑎᑐᑦ) */
$messages['ike-cans'] = array(
	'sitesupport' => 'ᑐᓐᓂᖅᑯᓯᐊᑦ ᑮᓇᐅᔭᐃᑦ',
);

/** Iloko (Ilokano)
 * @author Saluyot
 * @author לערי ריינהארט
 */
$messages['ilo'] = array(
	'sitesupport' => 'Donasion',
	'tooltip-n-sitesupport' => 'Suportarandakami',
);

/** Ingush (ГІалгІай Ğalğaj)
 * @author Tagir
 */
$messages['inh'] = array(
	'sitesupport' => 'СагIа',
);

/** Ido (Ido)
 * @author Malafaya
 * @author לערי ריינהארט
 */
$messages['io'] = array(
	'sitesupport' => 'Donacaji',
	'tooltip-n-sitesupport' => 'Suportez ni',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 * @author לערי ריינהארט
 */
$messages['is'] = array(
	'sitesupport' => 'Fjárframlög',
	'tooltip-n-sitesupport' => 'Fjárframlagssíða',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Brownout
 * @author Darth Kule
 * @author Pietrodn
 */
$messages['it'] = array(
	'wikimediamessages-desc' => 'Messaggi specifici di Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donazioni',
	'sitesupport' => 'Donazioni',
	'tooltip-n-sitesupport' => 'Sostienici',
	'group-accountcreator' => 'Creatori di account',
	'group-developer' => 'Sviluppatori',
	'group-founder' => 'Fondatori',
	'group-import' => 'Importatori',
	'group-ipblock-exempt' => 'esente dal blocco IP',
	'group-rollbacker' => 'Rollbacker',
	'group-transwiki' => 'Importatori transwiki',
	'group-accountcreator-member' => 'creatore di account',
	'group-developer-member' => 'sviluppatore',
	'group-founder-member' => 'fondatore',
	'group-import-member' => 'importatore',
	'group-ipblock-exempt-member' => 'esente dal blocco IP',
	'group-rollbacker-member' => 'rollbacker',
	'group-transwiki-member' => 'importatore transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori di account',
	'grouppage-developer' => '{{ns:project}}:Sviluppatori',
	'grouppage-founder' => '{{ns:project}}:Founders',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dal blocco IP',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki' => '{{ns:project}}:Importatori transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Amministratori di sistema',
	'group-Global_bot' => 'Bot globali',
	'group-Global_rollback' => 'Rollbacker globali',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'amministratore di sistema',
	'group-Global_bot-member' => 'bot globale',
	'group-Global_rollback-member' => 'rollbacker globale',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => 'm:Stewards/it',
	'grouppage-Global_rollback' => 'm:Global rollback/it',
);

/** Japanese (日本語)
 * @author Aotake
 * @author JtFuruhata
 * @author Meno25
 * @author Suisui
 */
$messages['ja'] = array(
	'wikimediamessages-desc' => 'ウィキメディア固有のメッセージ',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ja',
	'sitesupport' => '寄付',
	'tooltip-n-sitesupport' => 'ご支援ください',
	'group-accountcreator' => 'アカウント作成権限保持者',
	'group-developer' => '開発者',
	'group-founder' => '創立者',
	'group-import' => 'インポート権限保持者',
	'group-ipblock-exempt' => 'IPブロック適用除外',
	'group-rollbacker' => 'ロールバック権限保持者',
	'group-transwiki' => 'トランスウィキ・インポート権限保持者',
	'group-accountcreator-member' => 'アカウント作成権限保持者',
	'group-developer-member' => '開発者',
	'group-founder-member' => '創立者',
	'group-import-member' => 'インポート権限保持者',
	'group-ipblock-exempt-member' => 'IPブロック適用除外',
	'group-rollbacker-member' => 'ロールバック権限保持者',
	'group-transwiki-member' => 'トランスウィキ・インポート権限保持者',
	'grouppage-accountcreator' => '{{ns:project}}:アカウント作成権限保持者',
	'grouppage-developer' => '{{ns:project}}:開発者',
	'grouppage-founder' => '{{ns:project}}:創立者',
	'grouppage-import' => '{{ns:project}}:インポート権限保持者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IPブロック適用除外',
	'grouppage-rollbacker' => '{{ns:project}}:ロールバック権限保持者',
	'grouppage-transwiki' => '{{ns:project}}:トランスウィキ・インポート権限保持者',
	'group-steward' => 'スチュワード',
	'group-sysadmin' => 'システム管理者',
	'group-Global_bot' => 'グローバル・ボット',
	'group-Global_rollback' => 'グローバル・ロールバック権限保持者',
	'group-Ombudsmen' => 'オンブズマン',
	'group-steward-member' => '{{int:group-steward}}',
	'group-sysadmin-member' => 'システム管理者',
	'group-Global_bot-member' => 'グローバル・ボット',
	'group-Global_rollback-member' => 'グローバル・ロールバック権限保持者',
	'group-Ombudsmen-member' => 'オンブズマン',
	'grouppage-steward' => 'm:Stewards/ja',
);

/** Lojban (Lojban)
 * @author OldakQuill
 */
$messages['jbo'] = array(
	'sitesupport' => 'jdini sidju',
);

/** Jutish (Jysk)
 * @author Ælsån
 */
$messages['jut'] = array(
	'sitesupport' => 'Støtside',
	'tooltip-n-sitesupport' => 'Støt os',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'wikimediamessages-desc' => 'Pesen-pesen spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Panggalangan_dana',
	'sitesupport' => 'Nyumbang dana',
	'tooltip-n-sitesupport' => 'Sokongen kita',
	'group-accountcreator' => 'Sing gawé akun',
	'group-developer' => 'Developer',
	'group-founder' => 'Pendhiri',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Pambébasan saka pamblokiran IP',
	'group-rollbacker' => 'Sing mbalèkaké révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-uploader' => 'Pamunggah',
	'group-accountcreator-member' => 'Sing gawé akun',
	'group-developer-member' => 'Developer',
	'group-founder-member' => 'Pandhiri',
	'group-import-member' => 'importir',
	'group-ipblock-exempt-member' => 'Pambébasan saka pamblokiran IP',
	'group-rollbacker-member' => 'Sing mbalèkaké révisi',
	'group-transwiki-member' => 'importir transwiki',
	'group-uploader-member' => 'pamunggah',
	'grouppage-accountcreator' => '{{ns:project}}:Sing gawé akun',
	'grouppage-developer' => '{{ns:project}}:Developer',
	'grouppage-founder' => '{{ns:project}}:Pandhiri',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pambébasan saka pamblokiran IP',
	'grouppage-rollbacker' => '{{ns:project}}:Sing mbalèkaké révisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'grouppage-uploader' => '{{ns:project}}:Pamunggah',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Administrator sistem',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Sing mbalèkaké révisi global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator sistem',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'Sing mbalèkaké révisi global',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => 'm:Stewards',
	'grouppage-sysadmin' => 'm:System administrators',
	'grouppage-Global_bot' => 'm:Global bot',
	'grouppage-Global_rollback' => 'm:Global rollback',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-coder' => 'Programer',
	'group-coder-member' => 'programer',
	'grouppage-coder' => 'Proyèk:Programer',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author לערי ריינהארט
 */
$messages['ka'] = array(
	'sitesupport' => 'შეწირულობები',
	'tooltip-n-sitesupport' => 'მხარდაჭერა',
);

/** Kara-Kalpak (Qaraqalpaqsha)
 * @author AlefZet
 */
$messages['kaa'] = array(
	'sitesupport' => "Ja'rdem berıw",
	'tooltip-n-sitesupport' => "Bizge ja'rdem berin'",
);

/** Kabyle (Taqbaylit)
 * @author Agurzil
 */
$messages['kab'] = array(
	'sitesupport' => 'Efk-aɣ idrimen',
	'tooltip-n-sitesupport' => 'Ellil-aɣ',
);

/** Kazakh (Arabic script) (‫قازاقشا (تٴوتە)‬) */
$messages['kk-arab'] = array(
	'sitesupport' => 'دەمەۋشىلىك',
);

/** Kazakh (Cyrillic) (Қазақша (Cyrillic))
 * @author AlefZet
 * @author GaiJin
 */
$messages['kk-cyrl'] = array(
	'sitesupport' => 'Демеушілік',
	'group-developer' => 'Дамытушылар',
	'group-import' => 'Сырттан алушылар',
	'group-developer-member' => 'дамытушы',
	'group-import-member' => 'сырттан алушы',
	'group-sysadmin' => 'Жүйе әкімшілері',
	'group-sysadmin-member' => 'жүйе әкімшісі',
);

/** Kazakh (Latin) (Қазақша (Latin)) */
$messages['kk-latn'] = array(
	'sitesupport' => 'Demewşilik',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Kiensvay
 * @author Lovekhmer
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'wikimediamessages-desc' => 'សារយថាប្រភេទរបស់វិគីមេឌា',
	'sitesupport-url' => 'Project:ទំព័រគាំទ្រ',
	'sitesupport' => 'វិភាគទាន',
	'tooltip-n-sitesupport' => 'គាំទ្រ​យើងខ្ញុំ',
	'group-accountcreator' => 'អ្នកបង្កើតគណនី',
	'group-developer' => 'អ្នកអភិវឌ្ឍន៍',
	'group-founder' => 'ស្ថាបនិក',
	'group-import' => 'អ្នកនាំចូល',
	'group-transwiki' => 'អ្នកនាំចូលអន្តរវិគី',
	'group-accountcreator-member' => 'អ្នកបង្កើតគណនី',
	'group-developer-member' => 'អ្នកអភិវឌ្ឍន៍',
	'group-founder-member' => 'ស្ថាបនិក',
	'group-import-member' => 'អ្នកនាំចូល',
	'group-transwiki-member' => 'អ្នកនាំចូលអន្តរវិគី',
	'grouppage-accountcreator' => '{{ns:project}}:អ្នកបង្កើតគណនី',
	'grouppage-developer' => '{{ns:project}}:អ្នកអភិវឌ្ឍន៍',
	'grouppage-founder' => '{{ns:project}}:ស្ថាបនិក',
	'grouppage-import' => '{{ns:project}}:អ្នកនាំចូល',
	'grouppage-transwiki' => '{{ns:project}}:អ្នកនាំចូលអន្តរវិគី',
	'group-sysadmin' => 'អ្នកអភិបាលប្រព័ន្ឋ',
	'group-Ombudsmen' => 'អមប៊ុដហ្ស៍ម៉ឹន',
	'group-sysadmin-member' => 'អ្នកអភិបាលប្រព័ន្ឋ',
	'group-Ombudsmen-member' => 'អមប៊ុដហ្ស៍ម៉ឹន',
);

/** Kannada (ಕನ್ನಡ)
 * @author Shushruth
 * @author לערי ריינהארט
 */
$messages['kn'] = array(
	'sitesupport' => 'ದೇಣಿಗೆ',
	'tooltip-n-sitesupport' => 'ನಮ್ಮನ್ನು ಬೆಂಬಲಿಸಿ',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author Ficell
 * @author Klutzy
 * @author Kwj2772
 */
$messages['ko'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ko',
	'sitesupport' => '기부 안내',
	'tooltip-n-sitesupport' => '지원을 기다립니다',
	'group-developer' => '개발자',
	'group-founder' => '설립자',
	'group-developer-member' => '개발자',
	'group-founder-member' => '설립자',
	'grouppage-developer' => '{{ns:project}}:개발자',
	'group-steward' => '스튜어드',
	'group-sysadmin' => '시스템 관리자',
	'group-Global_bot' => '글로벌 봇',
	'group-steward-member' => '스튜어드',
	'group-sysadmin-member' => '시스템 관리자',
	'grouppage-steward' => 'm:Stewards/ko',
);

/** Kinaray-a (Kinaray-a)
 * @author RonaldPanaligan
 */
$messages['krj'] = array(
	'sitesupport' => 'Donasyon',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wikimediamessages-desc' => 'Systemnohrechte un Tex för de Wikimedia Shtefftung ier Wikis.',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spende',
	'sitesupport' => 'Spende',
	'tooltip-n-sitesupport' => 'Donn uns Ungerstötze!',
	'group-accountcreator' => 'Metmaacher-Maachere',
	'group-developer' => 'Entwecklere',
	'group-founder' => 'Jröndere',
	'group-import' => 'Emportöre',
	'group-ipblock-exempt' => 'IP-Jruppe-Sperre-Ußnahme',
	'group-rollbacker' => 'Zeröcknemmere',
	'group-transwiki' => 'Transwiki-Emportöre',
	'group-accountcreator-member' => 'Metmaacher-Maacher',
	'group-developer-member' => 'Entweckler',
	'group-founder-member' => 'Jrönder',
	'group-import-member' => 'Emportör',
	'group-ipblock-exempt-member' => 'IP-Jruppe-Sperre-Ußnahm',
	'group-rollbacker-member' => 'Zeröcknemmer',
	'group-transwiki-member' => 'Transwiki-Emportör',
	'grouppage-accountcreator' => '{{ns:project}}:Metmaacher-Maacher',
	'grouppage-developer' => '{{ns:project}}:Entweckler',
	'grouppage-founder' => '{{ns:project}}:Jrönder',
	'grouppage-import' => '{{ns:project}}:Emportör',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Jruppe-Sperre-Ußnahm',
	'grouppage-rollbacker' => '{{ns:project}}:Zeröcknemmer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Emportör',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Wiki-Köbesse',
	'group-Global_bot' => 'Bots för all Wikis',
	'group-Global_rollback' => 'Zeröcknämmere för all Wikis',
	'group-Ombudsmen' => 'Vermeddeler',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Wiki-Köbes',
	'group-Global_bot-member' => 'Bot för all Wikis',
	'group-Global_rollback-member' => 'Zeröcknämmer för all Wikis',
	'group-Ombudsmen-member' => 'Vermeddeler',
	'group-coder' => 'Projrammierer',
	'group-coder-member' => 'Projrammierer',
);

/** Kurdish (Latin) (Kurdî / كوردی (Latin)) */
$messages['ku-latn'] = array(
	'sitesupport' => 'Ji bo Weqfa Wikimedia Beş',
);

/** Cornish (Kernewek)
 * @author Malafaya
 */
$messages['kw'] = array(
	'sitesupport' => 'Riansow',
);

/** Kirghiz (Кыргызча) */
$messages['ky'] = array(
	'sitesupport' => 'Демөөр',
);

/** Latin (Latina)
 * @author לערי ריינהארט
 */
$messages['la'] = array(
	'sitesupport' => 'Donationes',
);

/** Ladino (Ladino)
 * @author לערי ריינהארט
 */
$messages['lad'] = array(
	'sitesupport' => 'Donasiones',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Kaffi
 * @author Robby
 * @author לערי ריינהארט
 */
$messages['lb'] = array(
	'wikimediamessages-desc' => 'Spezifesch Systemmessage fir Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Donatiounen',
	'tooltip-n-sitesupport' => 'Ënnerstetzt eis',
	'group-accountcreator' => 'Benotzer déi Benotzerkonten uleeën däerfen',
	'group-developer' => 'System-Entwéckler',
	'group-founder' => 'Grënner',
	'group-import' => 'Importateuren',
	'group-ipblock-exempt' => 'Ausnahme vun IP-Spären',
	'group-rollbacker' => 'Zrécksetzer',
	'group-transwiki' => 'Transwiki-Importateuren',
	'group-accountcreator-member' => 'Benotzer dee Benotzerkonten uleeën däerf',
	'group-developer-member' => 'System-Entwéckler',
	'group-founder-member' => 'Grënner',
	'group-import-member' => 'Importateur',
	'group-ipblock-exempt-member' => 'Ausnam vun der IP-Spär',
	'group-rollbacker-member' => 'Zrécksetzer',
	'group-transwiki-member' => 'Transwiki-Importateur',
	'grouppage-accountcreator' => '{{ns:project}}:Benotzer déi Benotzerkonten uleeën däerfen',
	'grouppage-developer' => '{{ns:project}}:System-Entwéckler',
	'grouppage-founder' => '{{ns:project}}:Grënner',
	'grouppage-import' => '{{ns:project}}:Importateuren',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Ausnahm vun der IP-Spär',
	'grouppage-rollbacker' => '{{ns:project}}:Zrécksetzer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importateuren',
	'group-steward' => 'Stewarden',
	'group-sysadmin' => 'Systemadministrateuren',
	'group-Global_bot' => 'Global Botten',
	'group-Global_rollback' => 'Global Zrécksetzer',
	'group-Ombudsmen' => 'Ombudsmänner',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrateur',
	'group-Global_bot-member' => 'Globale Bot',
	'group-Global_rollback-member' => 'Globalen Zrécksetzer',
	'group-Ombudsmen-member' => 'Ombudsmann',
	'grouppage-steward' => '{{ns:project}}:Stewarden',
	'grouppage-sysadmin' => 'm:System Administrateuren',
	'grouppage-Global_bot' => 'm:Global bot',
	'group-coder' => 'Programméierer',
	'group-coder-member' => 'Programméierer',
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Cgboeree
 */
$messages['lfn'] = array(
	'sitesupport' => 'Donas',
	'tooltip-n-sitesupport' => 'suporta nos',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'sitesupport' => 'Okutonera wiki',
	'tooltip-n-sitesupport' => "Nyiga wano ob'oyagala wiki okugiwa obuyambi obw'ensimbi",
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author לערי ריינהארט
 */
$messages['li'] = array(
	'wikimediamessages-desc' => 'Wikimedia specifieke berichte',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Ongersteun os financieel',
	'group-accountcreator' => 'Gebroekeraanmakers',
	'group-developer' => 'Ontwikkeleers',
	'group-founder' => "Gronkli'jers",
	'group-import' => 'Importäörs',
	'group-ipblock-exempt' => 'Oetgezongerde van IP-adres blokkades',
	'group-rollbacker' => "Trökdri'jers",
	'group-transwiki' => 'Transwikiimportäörs',
	'group-accountcreator-member' => 'Gebroekeraanmaker',
	'group-developer-member' => 'Ontwikkeleer',
	'group-founder-member' => "Gronkli'jer",
	'group-import-member' => 'Importäör',
	'group-ipblock-exempt-member' => 'OEtgezongerde van IP-adresblokkades',
	'group-rollbacker-member' => "Trökdri'jer",
	'group-transwiki-member' => 'Transwikiimportäör',
	'grouppage-accountcreator' => '{{ns:project}}:Gebroekeraanmakers',
	'grouppage-developer' => '{{ns:project}}:Ontwikkeleers',
	'grouppage-founder' => "{{ns:project}}:Gronkli'jers",
	'grouppage-import' => '{{ns:project}}:Importäörs',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Oetgezongerde van IP-adresblokkades',
	'grouppage-rollbacker' => "{{ns:project}}:Trökdri'jers",
	'grouppage-transwiki' => '{{ns:project}}:Transwikiimportäörs',
	'group-steward' => 'Stewards',
	'group-Global_bot' => 'Globaal bots',
	'group-Global_rollback' => "Globaal trökdri'jers",
	'group-Ombudsmen' => 'Ombudsmen',
	'group-steward-member' => 'Steward',
	'group-Global_bot-member' => 'Globale bot',
	'group-Global_rollback-member' => "Globale trökdri'jer",
	'group-Ombudsmen-member' => 'Ombudsman',
	'grouppage-steward' => '{{ns:project}}:Stewards',
);

/** Líguru (Líguru)
 * @author ZeneizeForesto
 */
$messages['lij'] = array(
	'sitesupport' => 'Donasioin',
	'tooltip-n-sitesupport' => 'Agiûttine',
);

/** Lumbaart (Lumbaart) */
$messages['lmo'] = array(
	'sitesupport' => 'Dunazziun',
);

/** Lingala (Lingála) */
$messages['ln'] = array(
	'sitesupport' => 'Kofutela',
);

/** Lao (ລາວ)
 * @author Tuinui
 */
$messages['lo'] = array(
	'wikimediamessages-desc' => 'ຂໍ້ຄວາມສະເພາະ ວິກິພີເດຍ',
	'sitesupport' => 'ບໍລິຈາກ',
	'tooltip-n-sitesupport' => 'ສະໜັບສະໜຸນພວກເຮົາ',
);

/** Lozi (Silozi)
 * @author Ooswesthoesbes
 * @author SF-Language
 */
$messages['loz'] = array(
	'sitesupport' => 'Adonetarina',
	'tooltip-n-sitesupport' => 'Sepotisize',
);

/** Lithuanian (Lietuvių)
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'sitesupport' => 'Parama',
	'group-steward' => 'Ūkvedžiai',
	'group-sysadmin' => 'Sistemos administratoriai',
	'group-Global_bot' => 'Globalūs botai',
);

/** Latvian (Latviešu)
 * @author Xil
 * @author Yyy
 */
$messages['lv'] = array(
	'wikimediamessages-desc' => 'Wikimedia raksturīgi paziņojumi',
	'sitesupport' => 'Ziedojumi',
	'tooltip-n-sitesupport' => 'Atbalsti mūs',
);

/** Maithili (मैथिली)
 * @author Ggajendra
 */
$messages['mai'] = array(
	'tooltip-n-sitesupport' => 'हमरा सभकेँ सहयोग करू',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author לערי ריינהארט
 */
$messages['map-bms'] = array(
	'sitesupport' => 'Sumbang dana',
);

/** Moksha (Мокшень)
 * @author Kranch
 * @author Numulunj pilgae
 */
$messages['mdf'] = array(
	'sitesupport' => 'Лезкс максома',
	'tooltip-n-sitesupport' => 'Макст тейнек лезкс',
);

/** Malagasy (Malagasy) */
$messages['mg'] = array(
	'sitesupport' => 'Fanomezana',
);

/** Maori (Māori) */
$messages['mi'] = array(
	'sitesupport' => 'Koha',
);

/** Macedonian (Македонски)
 * @author Brest
 * @author Misos
 */
$messages['mk'] = array(
	'wikimediamessages-desc' => 'Викимедија специфични пораки',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Донации',
	'tooltip-n-sitesupport' => 'Подржете не',
	'group-developer' => 'Развивачи',
	'group-founder' => 'Основачи',
	'group-developer-member' => 'развивач',
	'group-founder-member' => 'основач',
	'group-steward' => 'Стјуарди',
	'group-sysadmin' => 'Систем администратори',
	'group-Global_bot' => 'Глобални ботови',
	'group-Ombudsmen' => 'Омбудсман',
	'group-steward-member' => 'Стјуард',
	'group-sysadmin-member' => 'систем администратор',
	'group-Global_bot-member' => 'глобален бот',
	'group-Ombudsmen-member' => 'омбудсман',
);

/** Malayalam (മലയാളം)
 * @author Meno25
 * @author Shijualex
 * @author לערי ריינהארט
 */
$messages['ml'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ml',
	'sitesupport' => 'സംഭാവന',
	'tooltip-n-sitesupport' => 'ഞങ്ങളെ പിന്തുണക്കുക',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 * @author לערי ריינהארט
 */
$messages['mn'] = array(
	'sitesupport' => 'Хандив',
	'tooltip-n-sitesupport' => 'Биднийг дэмжээрэй',
);

/** Moldavian (Молдовеняскэ)
 * @author Node ue
 */
$messages['mo'] = array(
	'tooltip-n-sitesupport' => 'Сприжиниць-не',
);

/** Marathi (मराठी)
 * @author Mahitgar
 */
$messages['mr'] = array(
	'sitesupport' => 'दान',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 * @author Kurniasan
 */
$messages['ms'] = array(
	'wikimediamessages-desc' => 'Pesanan-pesanan Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Derma',
	'tooltip-n-sitesupport' => 'Derma',
	'group-accountcreator' => 'Pencipta akaun',
	'group-developer' => 'Pembangun',
	'group-founder' => 'Pengasas',
	'group-import' => 'Pengimport',
	'group-ipblock-exempt' => 'Pengecualian sekatan IP',
	'group-rollbacker' => 'Pengundur',
	'group-transwiki' => 'Pengimport rentas wiki',
	'group-uploader' => 'Pemuat naik',
	'group-accountcreator-member' => 'Pencipta akaun',
	'group-developer-member' => 'Pembangun',
	'group-founder-member' => 'Pengasas',
	'group-import-member' => 'Pengimport',
	'group-ipblock-exempt-member' => 'Pengecualian sekatan IP',
	'group-rollbacker-member' => 'Pengundur',
	'group-transwiki-member' => 'Pengimport rentas wiki',
	'group-uploader-member' => 'pemuat naik',
	'grouppage-accountcreator' => '{{ns:project}}:Pencipta akaun',
	'grouppage-developer' => '{{ns:project}}:Pembangun',
	'grouppage-founder' => '{{ns:project}}:Pengasas',
	'grouppage-import' => '{{ns:project}}:Pengimport',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian sekatan IP',
	'grouppage-rollbacker' => '{{ns:project}}:Pengundur suntingan',
	'grouppage-transwiki' => '{{ns:project}}:Pengimport rentas wiki',
	'grouppage-uploader' => '{{ns:project}}:Pemuat naik',
	'group-steward' => 'Pengelola',
	'group-sysadmin' => 'Pentadbir sistem',
	'group-Global_bot' => 'Bot sejagat',
	'group-Global_rollback' => 'Pengundur suntingan sejagat',
	'group-Ombudsmen' => 'Ombudsman',
	'group-steward-member' => 'Pengelola',
	'group-sysadmin-member' => 'pentadbir sistem',
	'group-Global_bot-member' => 'Bot sejagat',
	'group-Global_rollback-member' => 'Pengundur suntingan sejagat',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-coder' => 'Pengekod',
	'group-coder-member' => 'pengekod',
);

/** Maltese (Malti)
 * @author Giangian15
 */
$messages['mt'] = array(
	'wikimediamessages-desc' => "Messaġġi speċifiki ta' Wikimedija",
	'sitesupport' => 'Donazzjonijiet',
	'tooltip-n-sitesupport' => 'Appoġġjana',
);

/** Mirandese (Mirandés)
 * @author MCruz
 */
$messages['mwl'] = array(
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Ayude-nos',
);

/** Burmese (Myanmasa)
 * @author Hakka
 * @author Hintha
 */
$messages['my'] = array(
	'sitesupport' => 'လှု​ဒါန်း​မှု​',
	'tooltip-n-sitesupport' => 'အားပေးပါ',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'sitesupport' => 'Лезксйармаконь максома',
	'tooltip-n-sitesupport' => 'Макста миненек нежедематарка',
);

/** Nauru (Dorerin Naoero) */
$messages['na'] = array(
	'sitesupport' => 'Eadu a me',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'sitesupport' => 'Tēyocatiliztli',
	'tooltip-n-sitesupport' => 'Xitēchtēpalēhuia',
	'group-founder-member' => 'Chīhualōni',
);

/** Min Nan Chinese (Bân-lâm-gú) */
$messages['nan'] = array(
	'sitesupport' => 'Kià-hù',
);

/** Neapolitan (Nnapulitano)
 * @author Cryptex
 */
$messages['nap'] = array(
	'sitesupport' => 'Donazzione',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 * @author לערי ריינהארט
 */
$messages['nds'] = array(
	'wikimediamessages-desc' => 'Systemnarichten för Wikimedia',
	'sitesupport' => 'Spennen',
	'tooltip-n-sitesupport' => 'Ünnerstütt uns',
	'group-developer' => 'Utwicklers',
	'group-founder' => 'Grünners',
	'group-import' => 'Importörs',
	'group-rollbacker' => 'Trüchsetters',
	'group-developer-member' => 'Utwickler',
	'group-founder-member' => 'Grünner',
	'group-import-member' => 'Importör',
	'group-rollbacker-member' => 'Trüchsetter',
	'grouppage-developer' => '{{ns:project}}:Utwicklers',
	'grouppage-founder' => '{{ns:project}}:Grünners',
	'grouppage-import' => '{{ns:project}}:Importörs',
	'grouppage-rollbacker' => '{{ns:project}}:Trüchsetters',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'System-Administraters',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_rollback' => 'Globale Trüchsetters',
	'group-Ombudsmen' => 'Ombudslüüd',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'System-Administrater',
	'group-Global_bot-member' => 'Global Bot',
	'group-Global_rollback-member' => 'Global Trüchsetter',
	'group-Ombudsmen-member' => 'Ombudsmann',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 * @author לערי ריינהארט
 */
$messages['nds-nl'] = array(
	'sitesupport' => 'Financiële steun',
	'tooltip-n-sitesupport' => 'Gef oons geald',
);

/** Nepali (नेपाली) */
$messages['ne'] = array(
	'sitesupport' => 'चन्दा',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'sitesupport' => 'दान',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 * @author Troefkaart
 * @author Tvdm
 */
$messages['nl'] = array(
	'wikimediamessages-desc' => 'Berichten voor Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Giften',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Ondersteun ons financieel',
	'group-accountcreator' => 'gebruikersaanmakers',
	'group-developer' => 'ontwikkelaars',
	'group-founder' => 'grondleggers',
	'group-import' => 'importeurs',
	'group-ipblock-exempt' => 'uitgezonderden van IP-adresblokkades',
	'group-rollbacker' => 'terugdraaiers',
	'group-transwiki' => 'Transwiki-importeurs',
	'group-uploader' => 'uploaders',
	'group-accountcreator-member' => 'gebruikersaanmaker',
	'group-developer-member' => 'ontwikkelaar',
	'group-founder-member' => 'grondlegger',
	'group-import-member' => 'importeur',
	'group-ipblock-exempt-member' => 'uitgezonderde van IP-adresblokkades',
	'group-rollbacker-member' => 'terugdraaier',
	'group-transwiki-member' => 'transwiki-importeur',
	'group-uploader-member' => 'uploader',
	'grouppage-accountcreator' => '{{ns:project}}:Gebruikersaanmakers',
	'grouppage-developer' => '{{ns:project}}:Ontwikkelaars',
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'grouppage-import' => '{{ns:project}}:Importeurs',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uitgezonderden van IP-adresblokkades',
	'grouppage-rollbacker' => '{{ns:project}}:Terugdraaiers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importeurs',
	'grouppage-uploader' => '{{ns:project}}:Uploaders',
	'group-steward' => 'stewards',
	'group-sysadmin' => 'systeembeheerders',
	'group-Global_bot' => 'globale bots',
	'group-Global_rollback' => 'globale terugdraaiers',
	'group-Ombudsmen' => 'ombudsmannen',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systeembeheerder',
	'group-Global_bot-member' => 'globale bot',
	'group-Global_rollback-member' => 'globale terugdraaier',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => 'm:Stewards/nl',
	'grouppage-Global_rollback' => 'm:Global rollback/nl',
	'group-coder' => 'programmeurs',
	'group-coder-member' => 'programmeur',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Frokor
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke meldingar',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/nn',
	'sitesupport' => 'Gåver',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'group-accountcreator' => 'Kontoopprettarar',
	'group-developer' => 'Utviklarar',
	'group-founder' => 'Grunnleggarar',
	'group-import' => 'Importørar',
	'group-ipblock-exempt' => 'Unntak frå IP-blokkering',
	'group-rollbacker' => 'Attenderullarar',
	'group-transwiki' => 'Transwiki-importørar',
	'group-accountcreator-member' => 'Kontoopprettar',
	'group-developer-member' => 'utviklar',
	'group-founder-member' => 'grunnleggar',
	'group-import-member' => 'importør',
	'group-ipblock-exempt-member' => 'Unteke frå IP-blokkering',
	'group-rollbacker-member' => 'attenderullar',
	'group-transwiki-member' => 'transwiki-importør',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettarar',
	'grouppage-developer' => '{{ns:project}}:Utviklarar',
	'grouppage-founder' => '{{ns:project}}:Grunnleggarar',
	'grouppage-import' => '{{ns:project}}:Importørar',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unnatekne frå IP-blokkering',
	'grouppage-rollbacker' => '{{ns:project}}:Attenderullarar',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importørar',
	'group-steward' => 'Stewardar',
	'group-sysadmin' => 'Systemadministratorar',
	'group-Global_bot' => 'Globale robotar',
	'group-Global_rollback' => 'Globale attenderullarar',
	'group-Ombudsmen' => 'Ombodsmenn',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemadministrator',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global attenderullar',
	'group-Ombudsmen-member' => 'ombodsmann',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-sysadmin' => 'm:Systemadministratorar',
	'grouppage-Global_bot' => 'm:Global robot',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodarar',
	'group-coder-member' => 'kodar',
	'grouppage-coder' => 'Prosjekt:Kodar',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke beskjeder',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/nb',
	'sitesupport' => 'Donasjoner',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'group-accountcreator' => 'Kontoopprettere',
	'group-developer' => 'Utviklere',
	'group-founder' => 'Grunnleggere',
	'group-import' => 'Importører',
	'group-ipblock-exempt' => 'Untatte fra IP-blokkering',
	'group-rollbacker' => 'Tilbakestillere',
	'group-transwiki' => 'Transwiki-importører',
	'group-accountcreator-member' => 'Kontooppretter',
	'group-developer-member' => 'Utvikler',
	'group-founder-member' => 'Grunnlegger',
	'group-import-member' => 'Importør',
	'group-ipblock-exempt-member' => 'Unttatt fra IP-blokkering',
	'group-rollbacker-member' => 'Tilbakestiller',
	'group-transwiki-member' => 'Transwiki-importør',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettere',
	'grouppage-developer' => '{{ns:project}}:Utviklere',
	'grouppage-founder' => '{{ns:project}}:Grunnleggere',
	'grouppage-import' => '{{ns:project}}:Importører',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unntatte fra IP-blokkering',
	'grouppage-rollbacker' => '{{ns:project}}:Tilbakestillere',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importører',
	'group-steward' => 'Forvaltere',
	'group-sysadmin' => 'Systemadministratorer',
	'group-Global_bot' => 'Globale roboter',
	'group-Global_rollback' => 'Globale tilbakestillere',
	'group-Ombudsmen' => 'Ombudsmenn',
	'group-steward-member' => 'forvalter',
	'group-sysadmin-member' => 'systemadministrator',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global tilbakestiller',
	'group-Ombudsmen-member' => 'ombudsmann',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodere',
	'group-coder-member' => 'koder',
);

/** Novial (Novial)
 * @author Malafaya
 */
$messages['nov'] = array(
	'sitesupport' => 'Donationes',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'sitesupport' => 'Dineelo',
	'tooltip-n-sitesupport' => 'Re thekge',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'wikimediamessages-desc' => 'Messatges especifics de Wikimèdia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/oc',
	'sitesupport' => 'Far un don',
	'tooltip-n-sitesupport' => 'Sostenètz lo projècte',
	'group-accountcreator' => 'Creators de comptes',
	'group-developer' => 'Desvolopaires',
	'group-founder' => 'Fondators',
	'group-import' => 'Importaires',
	'group-ipblock-exempt' => 'Exempcions de blòts IP',
	'group-rollbacker' => 'Revocaires',
	'group-transwiki' => 'Importaires Transwiki',
	'group-uploader' => 'Telecargaires',
	'group-accountcreator-member' => 'Creator de comptes',
	'group-developer-member' => 'Desvolopaire',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'Importaire',
	'group-ipblock-exempt-member' => 'Exempcion de blòt IP',
	'group-rollbacker-member' => 'Revocaire',
	'group-transwiki-member' => 'Importaire Transwiki',
	'group-uploader-member' => 'Telecargaire',
	'grouppage-accountcreator' => '{{ns:project}}:Creators de comptes',
	'grouppage-developer' => '{{ns:project}} : Desvolopaires',
	'grouppage-founder' => '{{ns:project}} : Fondators',
	'grouppage-import' => '{{ns:project}} : Importaires',
	'grouppage-ipblock-exempt' => '{{ns:project}} : Exempcion de blòt IP',
	'grouppage-rollbacker' => '{{ns:project}} : Revocaires',
	'grouppage-transwiki' => '{{ns:project}} : Importaires Transwiki',
	'grouppage-uploader' => '{{ns:project}}:Telecargaires',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administrators del sistèma',
	'group-Global_bot' => 'Bòts globals',
	'group-Global_rollback' => 'Revocaires globals',
	'group-Ombudsmen' => 'Comissaris',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrator del sistèma',
	'group-Global_bot-member' => 'Bòt global',
	'group-Global_rollback-member' => 'Revocaire global',
	'group-Ombudsmen-member' => 'Comissari',
	'group-coder' => 'Encodaires',
	'group-coder-member' => 'encodaire',
);

/** Punjabi (ਪੰਜਾਬੀ) */
$messages['pa'] = array(
	'sitesupport' => 'ਦਾਨ',
);

/** Pangasinan (Pangasinan) */
$messages['pag'] = array(
	'sitesupport' => 'Donasyon',
);

/** Pampanga (Kapampangan)
 * @author Katimawan2005
 */
$messages['pam'] = array(
	'sitesupport' => 'Donasiun',
	'tooltip-n-sitesupport' => 'Saupan yu kami',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'sitesupport' => 'Gowe',
	'tooltip-n-sitesupport' => 'Unjastett onns',
);

/** Pfälzisch (Pfälzisch)
 * @author SPS
 */
$messages['pfl'] = array(
	'sitesupport' => 'Spende',
	'group-steward' => 'Stewards',
	'group-steward-member' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Norfuk / Pitkern (Norfuk / Pitkern) */
$messages['pih'] = array(
	'sitesupport' => 'Doenaiishun',
);

/** Polish (Polski)
 * @author Beau
 * @author Derbeth
 * @author Leinad
 * @author Meno25
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'wikimediamessages-desc' => 'Komunikaty unikalne dla projektów Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pl',
	'sitesupport' => 'Darowizny',
	'tooltip-n-sitesupport' => 'Pomóż nam',
	'group-accountcreator' => 'Tworzący konta',
	'group-developer' => 'Deweloperzy',
	'group-founder' => 'Założyciele',
	'group-import' => 'Importerzy',
	'group-ipblock-exempt' => 'Uprawnieni do logowania się z zablokowanych adresów IP',
	'group-rollbacker' => 'Uprawnieni do wycofywania edycji',
	'group-transwiki' => 'Importerzy transwiki',
	'group-uploader' => 'Ładujący pliki',
	'group-accountcreator-member' => 'twórca kont',
	'group-developer-member' => 'deweloper',
	'group-founder-member' => 'założyciel',
	'group-import-member' => 'importer',
	'group-ipblock-exempt-member' => 'uprawniony do zalogowania się z zablokowanego adresu IP',
	'group-rollbacker-member' => 'uprawniony do wycofania edycji',
	'group-transwiki-member' => 'importer transwiki',
	'group-uploader-member' => 'ładujący pliki',
	'grouppage-accountcreator' => '{{ns:project}}:Twórcy kont',
	'grouppage-developer' => '{{ns:project}}:Deweloperzy',
	'grouppage-founder' => '{{ns:project}}:Założyciele',
	'grouppage-import' => '{{ns:project}}:Importerzy',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uprawnieni do logowania się z zablokowanych adresów IP',
	'grouppage-rollbacker' => '{{ns:project}}:Uprawnieni do wycofywania edycji',
	'grouppage-transwiki' => '{{ns:project}}:Importerzy transwiki',
	'grouppage-uploader' => '{{ns:project}}:Ładujący pliki',
	'group-steward' => 'Stewardzi',
	'group-sysadmin' => 'Administratorzy systemu',
	'group-Global_bot' => 'Boty globalne',
	'group-Global_rollback' => 'Globalnie uprawnieni do wycofywania edycji',
	'group-Ombudsmen' => 'Rzecznicy praw',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator systemu',
	'group-Global_bot-member' => 'bot globalny',
	'group-Global_rollback-member' => 'globalnie uprawniony do wycofywania edycji',
	'group-Ombudsmen-member' => 'rzecznik praw',
	'grouppage-steward' => 'm:Stewards/pl',
	'group-coder' => 'Programiści',
	'group-coder-member' => 'programista',
);

/** Piedmontese (Piemontèis) */
$messages['pms'] = array(
	'sitesupport' => 'Oferte',
);

/** Pontic (Ποντιακά)
 * @author Sinopeus
 */
$messages['pnt'] = array(
	'sitesupport' => 'Δωρεάς',
	'tooltip-n-sitesupport' => 'Βοηθέστεν το έργον.',
	'group-sysadmin' => 'Διαχειριστάδες συστηματί',
	'group-sysadmin-member' => 'διαχειριστάς συστηματί',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wikimediamessages-desc' => 'د ويکيمېډيا ځانګړي پيغامونه',
	'sitesupport' => 'بسپنې',
	'tooltip-n-sitesupport' => 'زموږ ملاتړ وکړی',
	'group-accountcreator' => 'کارن-حساب جوړونکي',
	'group-developer' => 'پرمخبوونکي',
	'group-accountcreator-member' => 'کارن-حساب جوړونکی',
	'grouppage-accountcreator' => '{{ns:project}}:کارن-حساب جوړونکي',
	'grouppage-developer' => '{{ns:project}}:پرمخبوونکي',
	'group-sysadmin' => 'د غونډال پازوالان',
	'group-sysadmin-member' => 'د غونډال پازوال',
);

/** Portuguese (Português)
 * @author 555
 * @author Malafaya
 * @author Sir Lestaty de Lioncourt
 */
$messages['pt'] = array(
	'wikimediamessages-desc' => 'Mensagens específicas à Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pt',
	'sitesupport' => 'Doações',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'group-accountcreator' => 'Criadores de contas',
	'group-developer' => 'Desenvolvedores',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-ipblock-exempt' => 'IPs não bloqueados',
	'group-rollbacker' => 'Revertedores',
	'group-transwiki' => 'Importadores Transwiki',
	'group-accountcreator-member' => 'Criador de contas',
	'group-developer-member' => 'Desenvolvedor',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-ipblock-exempt-member' => 'IPs não bloqueados',
	'group-rollbacker-member' => 'Revertedor',
	'group-transwiki-member' => 'importador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Criadores de contas',
	'grouppage-developer' => '{{ns:project}}:Desenvolvedores',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP não bloqueado',
	'grouppage-rollbacker' => '{{ns:project}}:Revertedores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradores de sistema',
	'group-Global_bot' => 'Robôs globais',
	'group-Global_rollback' => 'Revertedores globais',
	'group-Ombudsmen' => 'Mediadores',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrador de sistema',
	'group-Global_bot-member' => 'robô global',
	'group-Global_rollback-member' => 'revertedor global',
	'group-Ombudsmen-member' => 'mediador',
	'grouppage-steward' => 'm:Stewards/pt',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 * @author Carla404
 */
$messages['pt-br'] = array(
	'sitesupport' => 'Doações',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'group-developer' => 'Desenvolvedores',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'sitesupport' => 'Qarana',
	'tooltip-n-sitesupport' => 'Yanapawayku',
);

/** Tarifit (Tarifit)
 * @author Agzennay
 */
$messages['rif'] = array(
	'tooltip-n-sitesupport' => 'Ɛawn-anɣ',
);

/** Rhaeto-Romance (Rumantsch) */
$messages['rm'] = array(
	'sitesupport' => 'Donaziuns',
);

/** Romani (Romani)
 * @author Desiphral
 * @author לערי ריינהארט
 */
$messages['rmy'] = array(
	'sitesupport' => 'Denimata',
	'group-steward' => 'Stewardurya',
	'group-steward-member' => 'Stewardo',
	'grouppage-steward' => '{{ns:project}}:Stewardurya',
);

/** Romanian (Română)
 * @author Emily
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Mihai
 */
$messages['ro'] = array(
	'wikimediamessages-desc' => 'Mesaje specifice Wikimedia',
	'sitesupport' => 'Donaţii',
	'tooltip-n-sitesupport' => 'Sprijină-ne',
	'group-accountcreator' => 'Creator de conturi',
	'group-developer' => 'Dezvoltatori',
	'group-founder' => 'Fondatori',
	'group-import' => 'Importatori',
	'group-transwiki' => 'Importatori între wiki',
	'group-accountcreator-member' => 'creator de conturi',
	'group-developer-member' => 'dezvoltator',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'importator',
	'group-transwiki-member' => 'importator între wiki',
	'grouppage-developer' => '{{ns:project}}:Dezvoltatori',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'grouppage-transwiki' => '{{ns:project}}:Importatori între wiki',
	'group-steward' => 'Stewarzi',
	'group-sysadmin' => 'Administratori de sistem',
	'group-Global_bot' => 'Roboţi globali',
	'group-Ombudsmen' => 'Mijlocitor independent',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator de sistem',
	'group-Global_bot-member' => 'robot global',
	'group-Ombudsmen-member' => 'mijlocitor independent',
);

/** Aromanian (Armãneashce)
 * @author Hakka
 */
$messages['roa-rup'] = array(
	'sitesupport' => 'Donatsiur',
);

/** Russian (Русский)
 * @author Ahonc
 * @author Aleksandrit
 * @author AlexSm
 * @author Flrn
 * @author HalanTul
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'wikimediamessages-desc' => 'Сообщения, специфичные для Викимедиа',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Сделать_пожертвование',
	'sitesupport' => 'Пожертвования',
	'tooltip-n-sitesupport' => 'Поддержите нас',
	'group-accountcreator' => 'Создатели учётных записей',
	'group-developer' => 'Разработчики',
	'group-founder' => 'Основатели',
	'group-import' => 'Импортёры',
	'group-ipblock-exempt' => 'Исключения из IP-блокировок',
	'group-rollbacker' => 'Откатывающие',
	'group-transwiki' => 'Импортёры из Transwiki',
	'group-uploader' => 'Загружающие',
	'group-accountcreator-member' => 'создатель учётных записей',
	'group-developer-member' => 'разработчик',
	'group-founder-member' => 'основатель',
	'group-import-member' => 'импортёр',
	'group-ipblock-exempt-member' => 'исключение из IP-блокировок',
	'group-rollbacker-member' => 'откатывающий',
	'group-transwiki-member' => 'импортёр из Transwiki',
	'group-uploader-member' => 'загружающий',
	'grouppage-accountcreator' => '{{ns:project}}:Создатели учётных записей',
	'grouppage-developer' => '{{ns:project}}:Разработчики',
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'grouppage-import' => '{{ns:project}}:Импортёры',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Исключение из IP-блокировок',
	'grouppage-rollbacker' => '{{ns:project}}:Откатывающие',
	'grouppage-transwiki' => '{{ns:project}}:Импортёры из Transwiki',
	'grouppage-uploader' => '{{ns:project}}:Загружающие',
	'group-steward' => 'Стюарды',
	'group-sysadmin' => 'Системные администраторы',
	'group-Global_bot' => 'Глобальные боты',
	'group-Global_rollback' => 'Глобальные откатывающие',
	'group-Ombudsmen' => 'Омбудсмены',
	'group-steward-member' => 'стюард',
	'group-sysadmin-member' => 'системный администратор',
	'group-Global_bot-member' => 'глобальный бот',
	'group-Global_rollback-member' => 'глобальный откатывающий',
	'group-Ombudsmen-member' => 'омбудсмен',
	'grouppage-steward' => 'm:Stewards/ru',
	'group-coder' => 'Программисты',
	'group-coder-member' => 'программист',
);

/** Megleno-Romanian (Cyrillic) (Vlăheşte (Cyrillic))
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-cyrl'] = array(
	'sitesupport' => 'Донационс',
	'tooltip-n-sitesupport' => 'Супора-ностре',
);

/** Megleno-Romanian (Latin) (Vlăheşte (Latin))
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-latn'] = array(
	'sitesupport' => 'Donacions',
	'tooltip-n-sitesupport' => 'Supora-nostre',
);

/** Yakut (Саха тыла)
 * @author Bert Jickty
 * @author HalanTul
 */
$messages['sah'] = array(
	'wikimediamessages-desc' => 'Викимедиаҕа эрэ сыһыаннаах этиилэр',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Харчынан_көмө',
	'sitesupport' => 'Бу сири өйөө',
	'tooltip-n-sitesupport' => 'Өйөбүл',
	'group-accountcreator' => 'Кыттааччылар ааттарын айааччылар/бигэргэтээччилэр',
	'group-developer' => 'Оҥорооччулар',
	'group-founder' => 'Тэрийээччилэр',
	'group-import' => 'Импортааччылар',
	'group-ipblock-exempt' => 'Хааччахтааһыҥҥа киирбэт IP-лаахтар',
	'group-rollbacker' => 'Төннөрөөччүлэр',
	'group-transwiki' => 'Transwiki`ттан импортааччылар',
	'group-accountcreator-member' => 'Кыттаачылар ааттарын бигэргэтээччи/оҥорооччу',
	'group-developer-member' => 'Оҥорооччу',
	'group-founder-member' => 'Тэрийээччи',
	'group-import-member' => 'Импортааччы',
	'group-ipblock-exempt-member' => 'IP-та хааччахтаммат кыттааччы',
	'group-rollbacker-member' => 'Төннөрөөччү',
	'group-transwiki-member' => 'transwiki`ттан импортааччы',
	'grouppage-accountcreator' => '{{ns:project}}:Кыттааччылар ааттарын бигэргэтээччилэр/айааччылар',
	'grouppage-developer' => '{{ns:project}}:Оҥорооччулар',
	'grouppage-founder' => '{{ns:project}}:Тэрийээччилэр',
	'grouppage-import' => '{{ns:project}}:Импортааччылар',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-лара хааччахтаммат кыттааччылар',
	'grouppage-rollbacker' => '{{ns:project}}:Төннөрөөччүлэр',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki`ттан көһөрөөччүлэр',
	'group-steward' => 'Үстүйээрдэр',
	'group-sysadmin' => 'Тиһик (систиэмэ) дьаһабыллара',
	'group-sysadmin-member' => 'дьаһабыл',
);

/** Sicilian (Sicilianu)
 * @author Gmelfi
 * @author לערי ריינהארט
 */
$messages['scn'] = array(
	'wikimediamessages-desc' => 'Missaggi spicifici di Wikimedia',
	'sitesupport' => 'Dunazzioni',
	'tooltip-n-sitesupport' => 'Sustinìticci',
	'group-accountcreator' => 'Criatura di cunti',
	'group-developer' => 'Sviluppatura',
	'group-founder' => 'Funnatura',
	'group-import' => 'Mpurtatura',
	'group-ipblock-exempt' => 'Esenti dû bloccu IP',
	'group-rollbacker' => 'Ripristinatura',
	'group-transwiki' => 'Mpurtaturi transwiki',
	'group-accountcreator-member' => 'Criaturi di cuntu',
	'group-developer-member' => 'Sviluppaturi',
	'group-founder-member' => 'Funnaturi',
	'group-import-member' => 'Mpurtaturi',
	'group-ipblock-exempt-member' => 'Esenti dû bloccu IP',
	'group-rollbacker-member' => 'Ripristinaturi',
	'group-transwiki-member' => 'Mpurtaturi transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Criatura di cunti',
	'grouppage-developer' => '{{ns:project}}:Sviluppatura',
	'grouppage-founder' => '{{ns:project}}:Funnatura',
	'grouppage-import' => '{{ns:project}}:Mpurtatura',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dû bloccu IP',
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinatura',
	'grouppage-transwiki' => '{{ns:project}}:Mpurtatura transwiki',
	'group-steward' => 'Stiùwart',
	'group-sysadmin' => 'Amministratura di sistema',
	'group-Global_bot' => 'Bot glubbali',
	'group-Global_rollback' => 'Ripristinatura glubbali',
	'group-Ombudsmen' => 'Difinsura civici',
	'group-steward-member' => 'Stiùwart',
	'group-sysadmin-member' => 'amministraturi di sistema',
	'group-Global_bot-member' => 'bot glubbali',
	'group-Global_rollback-member' => 'ripristinaturi glubbali',
	'group-Ombudsmen-member' => 'difinsuri cìvicu',
	'grouppage-steward' => 'm:Stewards',
	'grouppage-sysadmin' => 'm:System administrators',
);

/** Scots (Scots)
 * @author OchAyeTheNoo
 */
$messages['sco'] = array(
	'sitesupport' => 'Propines',
);

/** Sindhi (سنڌي)
 * @author Aursani
 */
$messages['sd'] = array(
	'sitesupport' => 'مالي امداد',
	'tooltip-n-sitesupport' => 'اسان جي مدد ڪريو',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'sitesupport' => 'Dunazioni',
	'tooltip-n-sitesupport' => 'Supporthazi',
);

/** Northern Sami (Sámegiella)
 * @author Skuolfi
 */
$messages['se'] = array(
	'sitesupport' => 'Skeaŋkkat',
	'tooltip-n-sitesupport' => 'Doarrjo siidduid doaimma',
);

/** Cmique Itom (Cmique Itom)
 * @author SeriCtam
 */
$messages['sei'] = array(
	'sitesupport' => 'Donación',
	'tooltip-n-sitesupport' => 'Donacíonhuíiitl',
);

/** Tachelhit (Tašlḥiyt)
 * @author Zanatos
 */
$messages['shi'] = array(
	'tooltip-n-sitesupport' => 'ɛawn anɣ',
);

/** Sinhala (සිංහල) */
$messages['si'] = array(
	'sitesupport' => 'පරිත්‍යාග',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'wikimediamessages-desc' => 'Správy špecifické pre Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Zbieranie_príspevkov',
	'sitesupport' => 'Podpora',
	'tooltip-n-sitesupport' => 'Podporte nás',
	'group-accountcreator' => 'Tvorcovia účtov',
	'group-developer' => 'Vývojári',
	'group-founder' => 'Zakladatelia',
	'group-import' => 'Importéri',
	'group-ipblock-exempt' => 'Výnimky z blokovaní IP',
	'group-rollbacker' => 'S právom rollback',
	'group-transwiki' => 'Transwiki importéri',
	'group-accountcreator-member' => 'Tvorca účtu',
	'group-developer-member' => 'Vývojár',
	'group-founder-member' => 'Zakladateľ',
	'group-import-member' => 'Importér',
	'group-ipblock-exempt-member' => 'Výnimka z blokovaní IP',
	'group-rollbacker-member' => 'S právom rollback',
	'group-transwiki-member' => 'Transwiki importér',
	'grouppage-accountcreator' => '{{ns:project}}:Tvorcovia účtov',
	'grouppage-developer' => '{{ns:project}}:Vývojári',
	'grouppage-founder' => '{{ns:project}}:Zakladatelia',
	'grouppage-import' => '{{ns:project}}:Importéri',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výnimky z blokovaní IP',
	'grouppage-rollbacker' => '{{ns:project}}:S právom rollback',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéri',
	'group-steward' => 'Stewardi',
	'group-sysadmin' => 'Správcovia systému',
	'group-Global_bot' => 'Globálni roboti',
	'group-Global_rollback' => 'Globálni rollbackeri',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'správca systému',
	'group-Global_bot-member' => 'Globálny robot',
	'group-Global_rollback-member' => 'Globálny rollbacker',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-coder' => 'Kóderi',
	'group-coder-member' => 'kóder',
);

/** Slovenian (Slovenščina) */
$messages['sl'] = array(
	'sitesupport' => 'Denarni prispevki',
);

/** Samoan (Gagana Samoa) */
$messages['sm'] = array(
	'sitesupport' => 'Meaalofa tupe',
);

/** Southern Sami (Åarjelsaemien)
 * @author M.M.S.
 */
$messages['sma'] = array(
	'sitesupport' => 'Vedtedh beetnegh',
	'tooltip-n-sitesupport' => '{{SITENAME}} dåarjedidh',
);

/** Shona (chiShona)
 * @author Hakka
 */
$messages['sn'] = array(
	'sitesupport' => 'Zvipo',
);

/** Somali (Soomaaliga)
 * @author Mimursal
 */
$messages['so'] = array(
	'sitesupport' => 'Tabarucid',
	'tooltip-n-sitesupport' => 'Nacaawi',
);

/** Albanian (Shqip)
 * @author Dori
 */
$messages['sq'] = array(
	'sitesupport' => 'Dhurime',
	'group-steward' => 'Përgjegjës',
	'group-steward-member' => 'Përgjegjës',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Millosh
 * @author Red Baron
 */
$messages['sr-ec'] = array(
	'wikimediamessages-desc' => 'Поруке специфичне за Викимедију.',
	'sitesupport' => 'Донације',
	'tooltip-n-sitesupport' => 'подржи нас',
	'group-accountcreator' => 'ствараоци налога',
	'group-developer' => 'развијачи софтвера',
	'group-founder' => 'оснивачи',
	'group-import' => 'уносници',
	'group-ipblock-exempt' => 'изузеци од ИП блокова',
	'group-rollbacker' => 'враћачи',
	'group-transwiki' => 'међувики уносници',
	'group-accountcreator-member' => 'стваралац налога',
	'group-developer-member' => 'развијач софтвера',
	'group-founder-member' => 'оснивач',
	'group-import-member' => 'уносник',
	'group-ipblock-exempt-member' => 'изузетак од ИП блокова',
	'group-rollbacker-member' => 'враћач',
	'group-transwiki-member' => 'међувики уносник',
	'grouppage-accountcreator' => '{{ns:project}}:Стварачи налога',
	'grouppage-developer' => '{{ns:project}}:Развијачи софтвера',
	'grouppage-founder' => '{{ns:project}}:Оснивачи',
	'grouppage-import' => '{{ns:project}}:Уносници',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Изузетак од ИП блокова',
	'grouppage-rollbacker' => '{{ns:project}}:Враћачи',
	'grouppage-transwiki' => '{{ns:project}}:Међувики уносници',
	'group-steward' => 'Стјуарди',
	'group-steward-member' => 'Стјуард',
);

/** latinica (latinica) */
$messages['sr-el'] = array(
	'sitesupport' => 'Donacije',
	'group-steward' => 'Stjuardi',
	'group-steward-member' => 'Stjuard',
);

/** Sranan Tongo (Sranantongo)
 * @author Adfokati
 */
$messages['srn'] = array(
	'sitesupport' => 'Yibi a finansi',
	'tooltip-n-sitesupport' => 'Gi wi wan finansi',
);

/** Southern Sotho (Sesotho) */
$messages['st'] = array(
	'sitesupport' => 'Dimpho',
);

/** Seeltersk (Seeltersk)
 * @author Maartenvdbent
 * @author Pyt
 */
$messages['stq'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifiske Systemättergjuchten',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spändje',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unnerstutse uus',
	'group-accountcreator' => 'Benutserkonten-Moakere',
	'group-developer' => 'Systemadministrator',
	'group-founder' => 'Gruundere',
	'group-import' => 'Importeur',
	'group-ipblock-exempt' => 'IP-Speere-Uutnoamen',
	'group-rollbacker' => 'Touräächsättere',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-accountcreator-member' => 'Benutserkonten-Moaker',
	'group-developer-member' => 'Systemadministrator',
	'group-founder-member' => 'Gruunder',
	'group-import-member' => 'Importeur',
	'group-ipblock-exempt-member' => 'IP-Speere-Uutnoame',
	'group-rollbacker-member' => 'Touräächsätter',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'grouppage-accountcreator' => '{{ns:project}}:Benutserkonten-Moakere',
	'grouppage-developer' => '{{ns:project}}:Systemadministratore',
	'grouppage-founder' => '{{ns:project}}:Gruundere',
	'grouppage-import' => '{{ns:project}}:Importeure',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Speere-Uutnoame',
	'grouppage-rollbacker' => '{{ns:project}}:Touräächsättere',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'group-steward' => 'Stewarde',
	'group-sysadmin' => 'Systemadministratore',
	'group-Global_bot' => 'Globoale Bots',
	'group-Global_rollback' => 'Globoale Touräächsättere',
	'group-Ombudsmen' => 'Ombudsljuude',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrator',
	'group-Global_bot-member' => 'Globoalen Bot',
	'group-Global_rollback-member' => 'Globoalen Touräächsätter',
	'group-Ombudsmen-member' => 'Ombudspersoon',
	'grouppage-steward' => '{{ns:project}}:Stewards',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'wikimediamessages-desc' => 'Talatah-talatah spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Penggalangan_dana',
	'sitesupport' => 'Sumbangan',
	'tooltip-n-sitesupport' => 'Bobotohan',
	'group-accountcreator' => 'Nu nyieun rekening',
	'group-developer' => 'Developer',
	'group-founder' => 'Nu ngadegkeun',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Peungpeuk kajaba IP',
	'group-rollbacker' => 'Malikeun révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-accountcreator-member' => 'nu nyieun rekening',
	'group-developer-member' => 'developer',
	'group-founder-member' => 'nu ngadegkeun',
	'group-import-member' => 'importir',
	'group-ipblock-exempt-member' => 'Peungpeuk kajaba IP',
	'group-rollbacker-member' => 'Malikeun révisi',
	'group-transwiki-member' => 'importir transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Nu nyieun rekening',
	'grouppage-developer' => '{{ns:project}}:Developer',
	'grouppage-founder' => '{{ns:project}}:Nu ngadegkeun',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Peungpeuk kajaba IP',
	'grouppage-rollbacker' => '{{ns:project}}:Malikeun révisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Kuncén sistem',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Malikeun révisi global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'kuncén sistem',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'Malikeun révisi global',
	'group-Ombudsmen-member' => 'Ombudsman',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author Jon Harald Søby
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author Sannab
 */
$messages['sv'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifika meddelanden',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/sv',
	'sitesupport' => 'Donationer',
	'tooltip-n-sitesupport' => 'Stöd oss',
	'group-accountcreator' => 'Kontoskapare',
	'group-developer' => 'Utvecklare',
	'group-founder' => 'Grundare',
	'group-import' => 'Importörer',
	'group-ipblock-exempt' => 'Undantagna från IP-blockering',
	'group-rollbacker' => 'Tillbakarullare',
	'group-transwiki' => 'Transwiki-importörer',
	'group-uploader' => 'Uppladdare',
	'group-accountcreator-member' => 'kontoskapare',
	'group-developer-member' => 'utvecklare',
	'group-founder-member' => 'grundare',
	'group-import-member' => 'importör',
	'group-ipblock-exempt-member' => 'undantagen från IP-blockering',
	'group-rollbacker-member' => 'tillbakarullare',
	'group-transwiki-member' => 'transwiki-importör',
	'group-uploader-member' => 'uppladdare',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoskapare',
	'grouppage-developer' => '{{ns:project}}:Utvecklare',
	'grouppage-founder' => '{{ns:project}}:Grundare',
	'grouppage-import' => '{{ns:project}}:Importörer',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Undantagna från IP-blockering',
	'grouppage-rollbacker' => '{{ns:project}}:Tillbakarullare',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importörer',
	'grouppage-uploader' => '{{ns:project}}:Uppladdare',
	'group-steward' => 'Stewarder',
	'group-sysadmin' => 'Systemadministratörer',
	'group-Global_bot' => 'Globala robotar',
	'group-Global_rollback' => 'Globala tillbakarullare',
	'group-Ombudsmen' => 'Ombudsmän',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemadministratör',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global tillbakarullare',
	'group-Ombudsmen-member' => 'ombudsman',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodare',
	'group-coder-member' => 'kodare',
);

/** Swahili (Kiswahili)
 * @author Malangali
 * @author לערי ריינהארט
 */
$messages['sw'] = array(
	'sitesupport' => 'Michango',
	'tooltip-n-sitesupport' => 'Tuunge mkono',
);

/** Silesian (Ślůnski)
 * @author Herr Kriss
 * @author Lajsikonik
 */
$messages['szl'] = array(
	'sitesupport' => 'Śćepa',
	'tooltip-n-sitesupport' => 'Wspůmůž nas',
);

/** Tamil (தமிழ்)
 * @author Mayooranathan
 * @author Trengarasu
 */
$messages['ta'] = array(
	'sitesupport' => 'நன்கொடை',
	'tooltip-n-sitesupport' => 'நன்கொடைகளை வழங்குங்கள்',
);

/** Telugu (తెలుగు)
 * @author Mpradeep
 * @author Veeven
 */
$messages['te'] = array(
	'sitesupport' => 'విరాళములు',
	'tooltip-n-sitesupport' => 'మాకు తోడ్పడండి',
	'group-steward' => 'స్టీవార్డులు',
	'group-steward-member' => 'స్టీవార్డు',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'sitesupport' => 'Fó donativu ida',
	'tooltip-n-sitesupport' => 'Tulun ami',
	'group-steward' => 'Steward sira',
	'group-steward-member' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward sira',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 * @author לערי ריינהארט
 */
$messages['tg-cyrl'] = array(
	'sitesupport' => 'Кӯмаки молӣ',
	'group-founder-member' => 'асосгузор',
	'group-import-member' => 'воридкунанда',
	'group-ipblock-exempt-member' => 'Истиснои қатъи дастрасии нишонаи интернетӣ',
	'group-rollbacker-member' => 'вогардоникунанда',
	'group-transwiki-member' => 'воридкунандаи трансвики',
	'grouppage-accountcreator' => '{{ns:project}}:Созандагони ҳисоби корбарӣ',
	'grouppage-developer' => '{{ns:project}}:Таъвсиядиҳандагон',
	'grouppage-founder' => '{{ns:project}}:Асосгузорон',
	'grouppage-import' => '{{ns:project}}:Воридкунандагон',
);

/** Thai (ไทย) */
$messages['th'] = array(
	'sitesupport' => 'สนับสนุน',
);

/** Tagalog (Tagalog)
 * @author לערי ריינהארט
 */
$messages['tl'] = array(
	'sitesupport' => 'Donasyon',
);

/** Tswana (Setswana)
 * @author Hakka
 */
$messages['tn'] = array(
	'sitesupport' => 'Dimpho',
);

/** Tonga (faka-Tonga) */
$messages['to'] = array(
	'sitesupport' => 'Ngaahi meʻa ʻofa',
	'group-steward' => 'Kau setuate',
	'group-steward-member' => 'Setuate',
);

/** Toki Pona (Toki Pona) */
$messages['tokipona'] = array(
	'sitesupport' => 'o pana e mani',
);

/** Tok Pisin (Tok Pisin)
 * @author לערי ריינהארט
 */
$messages['tpi'] = array(
	'sitesupport' => 'Givim moni',
);

/** Turkish (Türkçe)
 * @author Karduelis
 */
$messages['tr'] = array(
	'sitesupport' => 'Bağışlar',
	'group-steward' => 'Stewardlar',
	'group-sysadmin' => 'Sistem yöneticileri',
	'group-sysadmin-member' => 'Sistem yöneticisi',
	'grouppage-steward' => '{{ns:project}}:Stewardlar',
);

/** Tsonga (Xitsonga)
 * @author Thuvack
 */
$messages['ts'] = array(
	'sitesupport' => 'Nyikela mali',
	'tooltip-n-sitesupport' => 'Hi seketeli',
);

/** Tatar (Cyrillic) (Tatarça/Татарча (Cyrillic))
 * @author Ерней
 */
$messages['tt-cyrl'] = array(
	'sitesupport' => 'Иганә',
	'tooltip-n-sitesupport' => 'Безгә ярдәм итегез',
);

/** Tatar (Latin) (Tatarça/Татарча (Latin)) */
$messages['tt-latn'] = array(
	'sitesupport' => 'Ximäyäçegä',
);

/** Tahitian (Reo Mā`ohi) */
$messages['ty'] = array(
	'sitesupport' => 'Pūpū i te ō',
);

/** Tuvinian (Тыва дыл) */
$messages['tyv'] = array(
	'sitesupport' => 'Белектер',
);

/** Udmurt (Удмурт)
 * @author ОйЛ
 */
$messages['udm'] = array(
	'sitesupport' => 'Проектлы юрттон',
);

/** Uighur (Uyghurche‎ / ئۇيغۇرچە) */
$messages['ug'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** Ukrainian (Українська)
 * @author AS
 * @author Ahonc
 */
$messages['uk'] = array(
	'wikimediamessages-desc' => 'Повідомлення, характерні для Вікімедіа',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Пожертвування',
	'tooltip-n-sitesupport' => 'Підтримайте проект',
	'group-accountcreator' => 'Створювачі облікових записів',
	'group-developer' => 'Розробники',
	'group-founder' => 'Засновники',
	'group-import' => 'Імпортери',
	'group-ipblock-exempt' => 'Виключення з IP-блокувань',
	'group-rollbacker' => 'Відкочувачі',
	'group-transwiki' => 'Transwiki-імпортери',
	'group-accountcreator-member' => 'створювач облікових записів',
	'group-developer-member' => 'розробник',
	'group-founder-member' => 'засновник',
	'group-import-member' => 'імпортер',
	'group-ipblock-exempt-member' => 'виключення з IP-блокування',
	'group-rollbacker-member' => 'відкочувач',
	'group-transwiki-member' => 'Transwiki-імпортер',
	'grouppage-accountcreator' => '{{ns:project}}:Створювачі облікових записів',
	'grouppage-developer' => '{{ns:project}}:Розробники',
	'grouppage-founder' => '{{ns:project}}:Засновники',
	'grouppage-import' => '{{ns:project}}:Імпортери',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Виключення з IP-блокування',
	'grouppage-rollbacker' => '{{ns:project}}:Відкочувачі',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-імпортери',
	'group-steward' => 'Стюарди',
	'group-sysadmin' => 'Системні адміністратори',
	'group-Global_bot' => 'Глобальні боти',
	'group-Global_rollback' => 'Глобальні відкочувачі',
	'group-Ombudsmen' => 'Омбудсмени',
	'group-steward-member' => 'стюард',
	'group-sysadmin-member' => 'системний адміністратор',
	'group-Global_bot-member' => 'глобальний бот',
	'group-Global_rollback-member' => 'глобальний відкочувач',
	'group-Ombudsmen-member' => 'омбудсмен',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-coder' => 'Програмісти',
	'group-coder-member' => 'програміст',
);

/** Urdu (اردو) */
$messages['ur'] = array(
	'sitesupport' => 'رابطہ',
);

/** Uzbek (O'zbek) */
$messages['uz'] = array(
	'sitesupport' => "Loyihaga ko'mak",
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'wikimediamessages-desc' => 'Messagi specifici de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/vec',
	'sitesupport' => 'Donassioni',
	'tooltip-n-sitesupport' => 'Jùtane',
	'group-accountcreator' => 'Creatori de account',
	'group-developer' => 'Svilupadori',
	'group-founder' => 'Fondatori',
	'group-import' => 'Inportadori',
	'group-ipblock-exempt' => "Esenzioni dal bloco de l'IP",
	'group-rollbacker' => 'Ripristinadori',
	'group-transwiki' => 'Inportadori transwiki',
	'group-accountcreator-member' => 'Creator de account',
	'group-developer-member' => 'Svilupador',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'Inportador',
	'group-ipblock-exempt-member' => 'esente dal bloco IP',
	'group-rollbacker-member' => 'ripristinador',
	'group-transwiki-member' => 'Inportador transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori de account',
	'grouppage-developer' => '{{ns:project}}:Svilupadori',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'grouppage-import' => '{{ns:project}}:Inportadori',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Esenzion dal bloco de l'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinadori',
	'grouppage-transwiki' => '{{ns:project}}:Inportadori transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Aministradori de sistema',
	'group-Global_bot' => 'Bot globali',
	'group-Global_rollback' => 'Ripristinadori globali',
	'group-Ombudsmen' => 'Ombudsman',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'aministrador de sistema',
	'group-Global_bot-member' => 'bot globale',
	'group-Global_rollback-member' => 'ripristinador globale',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-coder' => 'Programatori',
	'group-coder-member' => 'programator',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 * @author לערי ריינהארט
 */
$messages['vi'] = array(
	'wikimediamessages-desc' => 'Các thông báo đặc trưng cho Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Quy%C3%AAn_g%C3%B3p',
	'sitesupport' => 'Quyên góp',
	'tooltip-n-sitesupport' => 'Hãy hỗ trợ chúng tôi',
	'group-accountcreator' => 'Người mở tài khoản',
	'group-developer' => 'Người phát triển',
	'group-founder' => 'Nhà sáng lập',
	'group-import' => 'Người nhập trang',
	'group-ipblock-exempt' => 'Người được miễn cấm IP',
	'group-rollbacker' => 'Người lùi sửa',
	'group-transwiki' => 'Người nhập trang giữa wiki',
	'group-accountcreator-member' => 'Người mở tài khoản',
	'group-developer-member' => 'Người phát triển',
	'group-founder-member' => 'Nhà sáng lập',
	'group-import-member' => 'Người nhập trang',
	'group-ipblock-exempt-member' => 'Người được miễn cấm IP',
	'group-rollbacker-member' => 'Người lùi sửa',
	'group-transwiki-member' => 'Người nhập trang giữa wiki',
	'grouppage-accountcreator' => '{{ns:project}}:Người mở tài khoản',
	'grouppage-developer' => '{{ns:project}}:Người phát triển',
	'grouppage-founder' => '{{ns:project}}:Nhà sáng lập',
	'grouppage-import' => '{{ns:project}}:Người nhập trang',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Người được miễn cấm IP',
	'grouppage-rollbacker' => '{{ns:project}}:Người lùi sửa',
	'grouppage-transwiki' => '{{ns:project}}:Người nhập trang giữa wiki',
	'group-steward' => 'Tiếp viên',
	'group-sysadmin' => 'Người quản lý hệ thống',
	'group-Global_bot' => 'Robot toàn cầu',
	'group-Global_rollback' => 'Thành viên lùi sửa toàn cầu',
	'group-Ombudsmen' => 'Thanh tra viên',
	'group-steward-member' => 'Tiếp viên',
	'group-sysadmin-member' => 'người quản lý hệ thống',
	'group-Global_bot-member' => 'robot toàn cầu',
	'group-Global_rollback-member' => 'người lùi sửa toàn cầu',
	'group-Ombudsmen-member' => 'thanh tra viên',
	'group-coder' => 'Lập trình viên',
	'group-coder-member' => 'lập trình viên',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'sitesupport' => 'Födagivots',
	'tooltip-n-sitesupport' => 'Stütolös obsi',
);

/** Walloon (Walon)
 * @author Srtxg
 */
$messages['wa'] = array(
	'sitesupport' => 'Ecwårlaedje',
	'group-steward' => 'Mwaisse-manaedjeus tot avå',
	'group-steward-member' => 'mwaisse-manaedjeu tot avå',
);

/** Waray (Winaray)
 * @author לערי ריינהארט
 */
$messages['war'] = array(
	'sitesupport' => 'Mga Donasyon',
);

/** Wolof (Wolof)
 * @author Ibou
 */
$messages['wo'] = array(
	'sitesupport' => 'Joxe ag ndimbal',
);

/** Wu (吴语) */
$messages['wuu'] = array(
	'sitesupport' => '捐款',
);

/** Xhosa (isiXhosa) */
$messages['xh'] = array(
	'sitesupport' => 'Amalizo',
);

/** Mingrelian (მარგალური)
 * @author Alsandro
 * @author Dato deutschland
 */
$messages['xmf'] = array(
	'sitesupport' => 'აზარა',
	'tooltip-n-sitesupport' => 'ხუჯ დომკინით',
);

/** Yiddish (ייִדיש)
 * @author Yidel
 */
$messages['yi'] = array(
	'sitesupport' => 'ביישטייערונגן',
	'tooltip-n-sitesupport' => 'שטיצט אונז',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'sitesupport' => 'Se ẹ̀bùn owó',
);

/** Yue (粵語) */
$messages['yue'] = array(
	'wikimediamessages-desc' => 'Wikimedia特定訊息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:捐贈}}',
	'sitesupport' => '慷慨解囊',
	'tooltip-n-sitesupport' => '資持我哋',
	'group-accountcreator' => '開戶專員',
	'group-developer' => '技術員',
	'group-founder' => '創辦人',
	'group-import' => '匯入者',
	'group-ipblock-exempt' => 'IP封鎖例外者',
	'group-rollbacker' => '反轉者',
	'group-transwiki' => 'Transwiki匯入者',
	'group-accountcreator-member' => '開戶專員',
	'group-developer-member' => '技術員',
	'group-founder-member' => '創辦人',
	'group-import-member' => '匯入者',
	'group-ipblock-exempt-member' => 'IP封鎖例外',
	'group-rollbacker-member' => '反轉者',
	'group-transwiki-member' => 'Transwiki匯入者',
	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'grouppage-developer' => '{{ns:project}}:技術員',
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'grouppage-import' => '{{ns:project}}:匯入者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'grouppage-rollbacker' => '{{ns:project}}:反轉者',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki匯入者',
	'group-steward' => '執行員',
	'group-sysadmin' => '系統管理員',
	'group-Global_bot' => '全域機械人',
	'group-Global_rollback' => '全域反轉者',
	'group-Ombudsmen' => '申訴專員',
	'group-steward-member' => '執行員',
	'group-sysadmin-member' => '系統管理員',
	'group-Global_bot-member' => '全域機械人',
	'group-Global_rollback-member' => '全域反轉者',
	'group-Ombudsmen-member' => '申訴專員',
);

/** Zeeuws (Zeêuws)
 * @author NJ
 */
$messages['zea'] = array(
	'sitesupport' => 'Donaoties',
);

/** Classical Chinese (文言) */
$messages['zh-classical'] = array(
	'wikimediamessages-desc' => '維基媒體特集',
	'sitesupport' => '捐助集',
	'tooltip-n-sitesupport' => '濟資財、施續命、傳美皓',
);

/** Simplified Chinese (‪中文(简体)‬) */
$messages['zh-hans'] = array(
	'wikimediamessages-desc' => '维基媒体特定信息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:赞助}}',
	'sitesupport' => '资助',
	'tooltip-n-sitesupport' => '资助我们',
	'group-accountcreator' => '账户创建员',
	'group-developer' => '开发员',
	'group-founder' => '创办人',
	'group-import' => '导入者',
	'group-ipblock-exempt' => 'IP查封例外者',
	'group-rollbacker' => '回退员',
	'group-transwiki' => '跨维基导入者',
	'group-accountcreator-member' => '账户创建员',
	'group-developer-member' => '开发员',
	'group-founder-member' => '创办人',
	'group-import-member' => '导入者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-rollbacker-member' => '回退员',
	'group-transwiki-member' => '跨维基导入者',
	'grouppage-accountcreator' => '{{ns:project}}:账户创建员',
	'grouppage-developer' => '{{ns:project}}:开发员',
	'grouppage-founder' => '{{ns:project}}:创办人',
	'grouppage-import' => '{{ns:project}}:回退员',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-rollbacker' => '{{ns:project}}:反转者',
	'grouppage-transwiki' => '{{ns:project}}:跨维基导入者',
	'group-steward' => '监管员',
	'group-sysadmin' => '系统管理员',
	'group-Global_bot' => '全域机器人',
	'group-Global_rollback' => '全域反转者',
	'group-Ombudsmen' => '申诉专员',
	'group-steward-member' => '监管员',
	'group-sysadmin-member' => '系统管理员',
	'group-Global_bot-member' => '全域机器人',
	'group-Global_rollback-member' => '全域反转者',
	'group-Ombudsmen-member' => '申诉专员',
);

/** Traditional Chinese (‪中文(繁體)‬) */
$messages['zh-hant'] = array(
	'wikimediamessages-desc' => '維基媒體特定信息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:資助}}',
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資助我們',
	'group-accountcreator' => '賬戶創建員',
	'group-developer' => '開發員',
	'group-founder' => '創辦人',
	'group-import' => '匯入者',
	'group-ipblock-exempt' => 'IP查封例外者',
	'group-rollbacker' => '回退員',
	'group-transwiki' => '跨維基匯入者',
	'group-accountcreator-member' => '賬戶創建員',
	'group-developer-member' => '開發員',
	'group-founder-member' => '創辦人',
	'group-import-member' => '匯入者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-rollbacker-member' => '回退員',
	'group-transwiki-member' => '跨維基匯入者',
	'grouppage-accountcreator' => '{{ns:project}}:賬戶創建員',
	'grouppage-developer' => '{{ns:project}}:開發員',
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'grouppage-import' => '{{ns:project}}:回退員',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-rollbacker' => '{{ns:project}}:反轉者',
	'grouppage-transwiki' => '{{ns:project}}:跨維基匯入者',
	'group-steward' => '監管員',
	'group-sysadmin' => '系統管理員',
	'group-Global_bot' => '全域機器人',
	'group-Global_rollback' => '全域反轉者',
	'group-Ombudsmen' => '申訴專員',
	'group-steward-member' => '監管員',
	'group-sysadmin-member' => '系統管理員',
	'group-Global_bot-member' => '全域機器人',
	'group-Global_rollback-member' => '全域反轉者',
	'group-Ombudsmen-member' => '申訴專員',
);

/** Chinese (Hong Kong) (‪中文(香港)‬) */
$messages['zh-hk'] = array(
	'group-Global_bot' => '全域機械人',
	'group-Global_bot-member' => '全域機械人',
);

/** Zulu (isiZulu)
 * @author לערי ריינהארט
 */
$messages['zu'] = array(
	'sitesupport' => 'Izipho',
);

