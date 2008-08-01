<?php

/**
* Internationalisation file for the GroupPermissions Manager extension
* See http://www.mediawiki.org/wiki/Extension:GroupPermissions_Manager for more info
*/

$messages = array();
	
/** English
 * @author Ryan Schmidt
 */
$messages['en'] = array(
	'grouppermissions'               => 'Manage group permissions',
	'sortpermissions'                => 'Sort permissions',
	'removeunusedgroups'             => 'Remove unused groups',
	'grouppermissions-desc'          => 'Manage group permissions via a [[Special:GroupPermissions|special page]]',
	'grouppermissions-desc2'         => 'Extended permissions system',
	'grouppermissions-desc3'         => 'Allows for the content actions (tabs) to be customized',
	'grouppermissions-header'        => 'You may use this page to change the underlying permissions of the various usergroups.',
	'grouppermissions-search'        => 'Group:',
	'grouppermissions-dologin'       => 'Login',
	'grouppermissions-dosearch'      => 'Go',
	'grouppermissions-searchlabel'   => 'Search for group',
	'grouppermissions-deletelabel'   => 'Delete group',
	'grouppermissions-error'         => 'An unknown error has occurred, please hit the back button on your browser and try again',
	'grouppermissions-change'        => 'Change group permissions',
	'grouppermissions-add'           => 'Add group',
	'grouppermissions-delete'        => 'Delete group',
	'grouppermissions-comment'       => 'Comment:',
	'grouppermissions-addsuccess'    => '$1 has been successfully added',
	'grouppermissions-deletesuccess' => '$1 has been successfully deleted',
	'grouppermissions-changesuccess' => 'Permissions for $1 have successfully been changed',
	'grouppermissions-true'          => 'True',
	'grouppermissions-false'         => 'False',
	'grouppermissions-never'         => 'Never',
	'grouppermissions-nooldrev'      => 'Error encountered when attempting to archive the current config file. No archive will be made',
	'grouppermissions-sort-read'     => 'Reading',
	'grouppermissions-sort-edit'     => 'Editing',
	'grouppermissions-sort-manage'   => 'Management',
	'grouppermissions-sort-admin'    => 'Administration',
	'grouppermissions-sort-tech'     => 'Technical',
	'grouppermissions-sort-misc'     => 'Miscellaneous',
	'grouppermissions-log-add'       => 'added group "$2"',
	'grouppermissions-log-change'    => 'changed permissions for group "$2"',
	'grouppermissions-log-delete'    => 'deleted group "$2"',
	'grouppermissions-log-name'      => 'Group permissions log',
	'grouppermissions-log-entry'     => '', #do not translate this message
	'grouppermissions-log-header'    => 'This page tracks changes to the underlying permissions of user groups.',
	'grouppermissions-needjs'        => 'Warning: JavaScript is disabled on your browser. Some features may not work!',
	'grouppermissions-sp-header'     => 'You may use this page to manage how permissions are sorted and add new permissions.',
	'grouppermissions-sp-sort'       => 'Sort permissions',
	'grouppermissions-sp-save'       => 'Save',
	'grouppermissions-sp-success'    => 'Permissions have been successfully sorted',
	'grouppermissions-sp-addtype'    => 'Add sort type',
	'grouppermissions-sp-addperm'    => 'Add permission',
	'grouppermissions-sp-remove'     => 'remove',
	'grouppermissions-sp-deltype'    => 'Delete sort type',
	'grouppermissions-rug-header'    => 'You may use this page to remove users from unused (deleted) groups.',
	'grouppermissions-rug-success'   => 'Successfully removed users from unused groups!',
	'grouppermissions-rug-confirm'   => 'Remove users from unused groups',
	'right-viewsource'               => 'View wiki source of protected pages',
	'right-raw'                      => 'View raw pages',
	'right-render'                   => 'View rendered pages without navigation',
	'right-info'                     => 'View page info',
	'right-credits'                  => 'View page credits',
	'right-history'                  => 'View page histories',
	'right-search'                   => 'Search the wiki',
	'right-contributions'            => 'View contributions pages',
	'right-recentchanges'            => 'View recent changes',
	'right-edittalk'                 => 'Edit discussion pages',
	'right-edit-new'                 => 'Edit pages (which are not discussion pages)',
	'grouppermissions-ca-article'    => 'ARTICLE',
	'grouppermissions-ca-discussion' => 'DISCUSSION',
	'grouppermissions-ca-edit'       => 'EDIT',
	'grouppermissions-ca-watch'      => 'WATCH',
	'grouppermissions-ca-protect'    => 'PROTECT',
	'grouppermissions-ca-delete'     => 'DELETE',
	'grouppermissions-ca-history'    => 'HISTORY',
	'grouppermissions-ca-move'       => 'MOVE',
	'grouppermissions-ca-newsection' => 'NEWSECTION',
	'content_actions'                => "* ARTICLE\n* DISCUSSION\n* EDIT\n* NEWSECTION\n* HISTORY\n* DELETE\n* MOVE\n* PROTECT\n* WATCH",
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'grouppermissions-dologin' => 'Surum',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'grouppermissions-dosearch' => 'Gaan',
	'grouppermissions-comment'  => 'Opmerking:',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Alnokta
 * @author Siebrand
 */
$messages['ar'] = array(
	'grouppermissions'               => 'التحكم بسماحات المجموعات',
	'sortpermissions'                => 'ترتيب السماحات',
	'removeunusedgroups'             => 'إزالة المجموعات غير المستخدمة',
	'grouppermissions-desc'          => 'أدر صلاحيات المجموعات من [[Special:GroupPermissions|صفحة خاصة]]',
	'grouppermissions-desc2'         => 'نظام الصلاحيات الممتد',
	'grouppermissions-desc3'         => 'يسمح بتخصيص أفعال المحتوى (الألسنة)',
	'grouppermissions-header'        => 'أنت يمكنك استخدام هذه الصفحة لتغيير السماحات المتضمنة في مجموعات المستخدم المختلفة.',
	'grouppermissions-search'        => 'المجموعة:',
	'grouppermissions-dologin'       => 'دخول',
	'grouppermissions-dosearch'      => 'اذهب',
	'grouppermissions-searchlabel'   => 'بحث عن المجموعة',
	'grouppermissions-deletelabel'   => 'حذف المجموعة',
	'grouppermissions-error'         => 'لقد حدث خطأ مجهول، من فضلك اضغط على زر الرجوع في متصفحك وجرب مرة أخرى',
	'grouppermissions-change'        => 'تغيير سماحات المجموعة',
	'grouppermissions-add'           => 'إضافة مجموعة',
	'grouppermissions-delete'        => 'حذف مجموعة',
	'grouppermissions-comment'       => 'تعليق:',
	'grouppermissions-addsuccess'    => '$1 تمت إضافتها بنجاح',
	'grouppermissions-deletesuccess' => '$1 تم حذفها بنجاح',
	'grouppermissions-changesuccess' => 'تغيرت صلاحيات $1 بنجاح',
	'grouppermissions-true'          => 'صواب',
	'grouppermissions-false'         => 'خطأ',
	'grouppermissions-never'         => 'أبدا',
	'grouppermissions-nooldrev'      => 'تمت مصادفة خطأ عند محاولة أرشفة ملف الضبط الحالي. لا أرشيف سيتم صنعه',
	'grouppermissions-sort-read'     => 'قراءة',
	'grouppermissions-sort-edit'     => 'تعديل',
	'grouppermissions-sort-manage'   => 'تحكم',
	'grouppermissions-sort-admin'    => 'إدارة',
	'grouppermissions-sort-tech'     => 'تقني',
	'grouppermissions-sort-misc'     => 'أخرى',
	'grouppermissions-log-add'       => 'أضاف المجموعة "$2"',
	'grouppermissions-log-change'    => 'تغيرت الصلاحيات للمجموعة "$2"',
	'grouppermissions-log-delete'    => 'حذف المجموعة "$2"',
	'grouppermissions-log-name'      => 'سجل سماحات المجموعات',
	'grouppermissions-log-header'    => 'هذه الصفحة تتتبع التغييرات للسماحات المتضمنة لمجموعات المستخدم.',
	'grouppermissions-needjs'        => 'تحذير: الجافاسكريبت في متصفحك معطبة. بعض الميزات لن تعمل!',
	'grouppermissions-sp-header'     => 'أنت يمكنك استخدام هذه الصفحة للتحكم بترتيب السماحات وإضافة سماحات جديدة.',
	'grouppermissions-sp-sort'       => 'ترتيب السماحات',
	'grouppermissions-sp-save'       => 'حفظ',
	'grouppermissions-sp-success'    => 'السماحات تم ترتيبها بنجاح',
	'grouppermissions-sp-addtype'    => 'إضافة نوع ترتيب',
	'grouppermissions-sp-addperm'    => 'إضافة سماح',
	'grouppermissions-sp-remove'     => 'إزالة',
	'grouppermissions-sp-deltype'    => 'حذف نوع ترتيب',
	'grouppermissions-rug-header'    => 'أنت يمكنك استخدام هذه الصفحة لإزالة المستخدمين من المجموعات غير المستخدمة (المحذوفة).',
	'grouppermissions-rug-success'   => 'تمت إزالة المستخدمون من المجموعات غير المستخدمة بنجاح!',
	'grouppermissions-rug-confirm'   => 'أزل المستخدمون من المجموعات غير المستخدمة',
	'right-viewsource'               => 'رؤية مصدر الويكي للصفحات المحمية',
	'right-raw'                      => 'رؤية الصفحات الخام',
	'right-render'                   => 'رؤية الصفحات الناتجة بدون إبحار',
	'right-info'                     => 'رؤية معلومات الصفحة',
	'right-credits'                  => 'رؤية حقوق الصفحة',
	'right-history'                  => 'رؤية تواريخ الصفحات',
	'right-search'                   => 'البحث في الويكي',
	'right-contributions'            => 'رؤية صفحات المساهمات',
	'right-recentchanges'            => 'رؤية أحدث التغييرات',
	'right-edittalk'                 => 'تعديل صفحات النقاش',
	'right-edit-new'                 => 'تعديل الصفحات (التي ليست صفحات نقاش)',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 */
$messages['be-tarask'] = array(
	'grouppermissions-comment' => 'Камэнтар:',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Siebrand
 */
$messages['bg'] = array(
	'grouppermissions'             => 'Управление на груповите права',
	'sortpermissions'              => 'Сортиране на правата',
	'removeunusedgroups'           => 'Премахване на неизползваните групи',
	'grouppermissions-desc'        => 'Управление на груповите права през [[Special:GroupPermissions|специална страница]]',
	'grouppermissions-search'      => 'Група:',
	'grouppermissions-dologin'     => 'Влизане',
	'grouppermissions-searchlabel' => 'Търсене за група',
	'grouppermissions-deletelabel' => 'Изтриване на група',
	'grouppermissions-add'         => 'Добавяне на група',
	'grouppermissions-delete'      => 'Изтриване на група',
	'grouppermissions-comment'     => 'Коментар:',
	'grouppermissions-never'       => 'Никога',
	'grouppermissions-sort-read'   => 'Четене',
	'grouppermissions-sort-edit'   => 'Редактиране',
	'grouppermissions-sort-manage' => 'Управление',
	'grouppermissions-sort-admin'  => 'Администриране',
	'grouppermissions-sort-tech'   => 'Технически',
	'grouppermissions-sort-misc'   => 'Разни',
	'grouppermissions-log-change'  => 'промени правата на група „$2“',
	'grouppermissions-log-delete'  => 'изтри група „$2“',
	'grouppermissions-sp-save'     => 'Съхраняване',
	'right-search'                 => 'Търсене в уикито',
	'right-recentchanges'          => 'Преглеждане на последните промени',
	'right-edittalk'               => 'Редактиране на дискусионни страници',
	'right-edit-new'               => 'редактиране на страници',
);

/** German (Deutsch)
 * @author Leithian
 * @author Raymond
 */
$messages['de'] = array(
	'grouppermissions'               => 'Gruppenberechtigungen verwalten',
	'sortpermissions'                => 'Berechtigungen sortieren',
	'removeunusedgroups'             => 'Unbenutzte Gruppen entfernen',
	'grouppermissions-desc'          => 'Verwalten von Gruppenberechtigungen über eine [[Special:GroupPermissions|Spezialseite]]',
	'grouppermissions-desc2'         => 'Erweitertes Berechtigungssystem',
	'grouppermissions-header'        => 'Mit dieser Spezialseite kannst du die Berechtigungen verschiedener Benutzergruppen ändern.',
	'grouppermissions-search'        => 'Gruppe:',
	'grouppermissions-dologin'       => 'Anmelden',
	'grouppermissions-dosearch'      => 'OK',
	'grouppermissions-searchlabel'   => 'Suche nach Gruppe',
	'grouppermissions-deletelabel'   => 'Gruppe löschen',
	'grouppermissions-error'         => 'Es ist ein unbekannter Fehler aufgetreten. Klicke bitte auf die Zurück-Schaltfläche deines Browsers und sende die Seite erneut ab.',
	'grouppermissions-change'        => 'Gruppenberechtigungen ändern',
	'grouppermissions-add'           => 'Gruppe hinzufügen',
	'grouppermissions-delete'        => 'Gruppe löschen',
	'grouppermissions-comment'       => 'Kommentar:',
	'grouppermissions-addsuccess'    => '$1 wurde erfolgreich hinzugefügt',
	'grouppermissions-deletesuccess' => '$1 wurde erfolgreich gelöscht',
	'grouppermissions-sp-header'     => 'Auf dieser Spezialseite kannst du Berechtigungen sortieren und neue Berechtigungen einrichten.',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'grouppermissions-comment' => 'Σχόλιο:',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'sortpermissions'                => 'Ordigi rajtojn',
	'grouppermissions-search'        => 'Grupo:',
	'grouppermissions-dologin'       => 'Salutnomo',
	'grouppermissions-dosearch'      => 'Ek',
	'grouppermissions-searchlabel'   => 'Serĉi Grupon',
	'grouppermissions-deletelabel'   => 'Forigi Grupon',
	'grouppermissions-change'        => 'Ŝanĝi grup-rajtojn',
	'grouppermissions-add'           => 'Aldoni grupon',
	'grouppermissions-delete'        => 'Forigi grupon',
	'grouppermissions-comment'       => 'Komento:',
	'grouppermissions-addsuccess'    => '$1 estis sukcese aldonita',
	'grouppermissions-deletesuccess' => '$1 estis sukcese forigita',
	'grouppermissions-true'          => 'Vera',
	'grouppermissions-false'         => 'Falsa',
	'grouppermissions-never'         => 'Neniam',
	'grouppermissions-sort-read'     => 'Legado',
	'grouppermissions-sort-edit'     => 'Redaktado',
	'grouppermissions-sort-manage'   => 'Administrado',
	'grouppermissions-log-add'       => 'aldonis grupon "$2"',
	'grouppermissions-log-change'    => 'ŝanĝis rajtojn por grupon "$2"',
	'grouppermissions-log-delete'    => 'forigis grupon "$2"',
	'grouppermissions-log-name'      => 'Protokolo pri grup-rajtoj',
	'grouppermissions-sp-save'       => 'Konservi',
	'grouppermissions-sp-success'    => 'Rajtoj estis sukcese ordigitaj',
	'grouppermissions-sp-addperm'    => 'Aldoni rajton',
	'right-raw'                      => 'Vidi krudajn paĝojn',
	'right-info'                     => 'Vidi paĝan informon',
	'right-history'                  => 'Vidi paĝajn historiojn',
	'right-search'                   => 'Serĉi la vikion',
	'right-edittalk'                 => 'Redakti diskuto-paĝojn',
	'right-edit-new'                 => 'Redaktu paĝojn',
);

/** French (Français)
 * @author Grondin
 * @author Siebrand
 * @author Jon Harald Søby
 */
$messages['fr'] = array(
	'grouppermissions'               => 'Gérer les permissions des groupes',
	'sortpermissions'                => 'Classer les permissions',
	'removeunusedgroups'             => 'Retirer les groupes inutilisés',
	'grouppermissions-desc'          => 'Gère les permissions des groupes au travers d’une [[Special:GroupPermissions|page spéciale]]',
	'grouppermissions-desc2'         => 'Système étendu des permissions',
	'grouppermissions-desc3'         => 'Permet au contenu des actions (tabulations) d’être personalisé',
	'grouppermissions-header'        => 'Vous pouvez utiliser cette page pour modifier les permissions soulignées des différents groupes d’utilisateurs.',
	'grouppermissions-search'        => 'Groupe :',
	'grouppermissions-dologin'       => 'Connexion',
	'grouppermissions-dosearch'      => 'Lancer',
	'grouppermissions-searchlabel'   => 'Recherche d’un groupe',
	'grouppermissions-deletelabel'   => 'Supprimer le groupe',
	'grouppermissions-error'         => 'Une erreur indéterminée est intervenue, veuillez cliquer sur le bouton de retour à la page précédente de votre navigateur puis essayez à nouveau',
	'grouppermissions-change'        => 'Modifier les permissions du groupe',
	'grouppermissions-add'           => 'Ajouter un groupe',
	'grouppermissions-delete'        => 'Supprimer le groupe',
	'grouppermissions-comment'       => 'Commentaire :',
	'grouppermissions-addsuccess'    => '$1 a été ajouté avec succès',
	'grouppermissions-deletesuccess' => '$1 a été supprimé avec succès',
	'grouppermissions-changesuccess' => 'Les permissions pour $1 ont été modifiées avec succès',
	'grouppermissions-true'          => 'Vrai',
	'grouppermissions-false'         => 'Faux',
	'grouppermissions-never'         => 'Jamais',
	'grouppermissions-nooldrev'      => 'Une erreur est intervenue lors de la tentative d’archivage du fichier de configuration. Aucune archive ne sera créée.',
	'grouppermissions-sort-read'     => 'Lecture',
	'grouppermissions-sort-edit'     => 'Édition',
	'grouppermissions-sort-manage'   => 'Gestion',
	'grouppermissions-sort-admin'    => 'Administration',
	'grouppermissions-sort-tech'     => 'Technique',
	'grouppermissions-sort-misc'     => 'Divers',
	'grouppermissions-log-add'       => 'a ajouté le groupe « $2 »',
	'grouppermissions-log-change'    => 'a modifié les permissions du groupe « $2 »',
	'grouppermissions-log-delete'    => 'a supprimé le groupe « $2 »',
	'grouppermissions-log-name'      => 'Journal des permissions des groupes',
	'grouppermissions-log-header'    => 'Cette page piste les changements des permissions soulignées des groupes utilisateurs.',
	'grouppermissions-needjs'        => 'Aversissement : JavaScript est désactivé sur votre navigateur. Plusieurs fonctionnalités peuvent ne pas fonctionner !',
	'grouppermissions-sp-header'     => 'Vous pouvez utiliser cette page pour gérer comment les permissions sont affichées et pour ajouter de nouvelles permissions.',
	'grouppermissions-sp-sort'       => 'Trier les permissions',
	'grouppermissions-sp-save'       => 'Sauvegarder',
	'grouppermissions-sp-success'    => 'Les permissions ont été triées avec succès',
	'grouppermissions-sp-addtype'    => 'Ajouter toutes sortes de classement',
	'grouppermissions-sp-addperm'    => 'Ajouter la permission',
	'grouppermissions-sp-remove'     => 'retirer',
	'grouppermissions-sp-deltype'    => 'Supprimer le type de tri',
	'grouppermissions-rug-header'    => 'Vous pouvez utiliser cette page pour retirer les utilisateurs des groupes inutilisés ou supprimés.',
	'grouppermissions-rug-success'   => 'Utilisateurs retirés avec succès des groupes inutilisés !',
	'grouppermissions-rug-confirm'   => 'Retirer les utilisateurs des groupes inutilisés',
	'right-viewsource'               => 'Voir le code source wiki des pages protégées',
	'right-raw'                      => 'Voir les pages brutes',
	'right-render'                   => 'Voir le rendu des pages sans navigation',
	'right-info'                     => 'Voir les informations de la page',
	'right-credits'                  => 'Voir les crédits de la page',
	'right-history'                  => 'Voir les historiques de la page',
	'right-search'                   => 'Rechercher le wiki',
	'right-contributions'            => 'Voir les pages des contributions',
	'right-recentchanges'            => 'Voir les modifications récentes',
	'right-edittalk'                 => 'Modifier les pages de discussion',
	'right-edit-new'                 => 'Modifier les pages (qui n’ont pas de page de discussion)',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'grouppermissions-comment' => 'Oanmerking:',
	'grouppermissions-sp-save' => 'Fêstlizze',
);

/** Galician (Galego)
 * @author Toliño
 * @author Siebrand
 * @author Jon Harald Søby
 */
$messages['gl'] = array(
	'grouppermissions'               => 'Xestionar os permisos dun grupo',
	'sortpermissions'                => 'Tipo de permisos',
	'removeunusedgroups'             => 'Eliminar os grupos non usados',
	'grouppermissions-desc'          => 'Xestionar os permisos dun grupo mediante unha [[Special:GroupPermissions|páxina especial]]',
	'grouppermissions-desc2'         => 'Sistema de permisos estendido',
	'grouppermissions-desc3'         => 'Permite que sexan personalizadas as accións de contido (lapelas)',
	'grouppermissions-header'        => 'Pode usar esta páxina para cambiar os permisos subxacentes de varios grupos de usuario.',
	'grouppermissions-search'        => 'Grupo:',
	'grouppermissions-dologin'       => 'Rexistro',
	'grouppermissions-dosearch'      => 'Ir',
	'grouppermissions-searchlabel'   => 'Procurar por grupo',
	'grouppermissions-deletelabel'   => 'Borrar un grupo',
	'grouppermissions-error'         => 'Ocorreu un erro descoñecido, por favor, prema no botón "Atrás" do seu navegador e ténteo de novo',
	'grouppermissions-change'        => 'Cambiar os permisos dun grupo',
	'grouppermissions-add'           => 'Engadir un grupo',
	'grouppermissions-delete'        => 'Borrar un grupo',
	'grouppermissions-comment'       => 'Comentario:',
	'grouppermissions-addsuccess'    => '$1 foi engadido con éxito',
	'grouppermissions-deletesuccess' => '$1 foi borrado con éxito',
	'grouppermissions-changesuccess' => 'Os permisos para $1 foron cambiados con éxito',
	'grouppermissions-true'          => 'Verdadeiro',
	'grouppermissions-false'         => 'Falso',
	'grouppermissions-never'         => 'Nunca',
	'grouppermissions-nooldrev'      => 'Atopouse un erro ao intentar arquivar a configuración actual do ficheiro. Non se fará ningún arquivo',
	'grouppermissions-sort-read'     => 'Lendo',
	'grouppermissions-sort-edit'     => 'Editando',
	'grouppermissions-sort-manage'   => 'Xestión',
	'grouppermissions-sort-admin'    => 'Administración',
	'grouppermissions-sort-tech'     => 'Técnico',
	'grouppermissions-sort-misc'     => 'Varios',
	'grouppermissions-log-add'       => 'engadiu o grupo "$2"',
	'grouppermissions-log-change'    => 'cambiou os permisos do grupo "$2"',
	'grouppermissions-log-delete'    => 'borrou o grupo "$2"',
	'grouppermissions-log-name'      => 'Rexistro de permisos de grupo',
	'grouppermissions-log-header'    => 'Nesta páxina pode seguir os cambios dos permisos subxacentes dos grupos de usuario.',
	'grouppermissions-needjs'        => 'Aviso: o JavaScript non está permitido no seu navegador. Pode que algunhas características non funcionen ben!',
	'grouppermissions-sp-header'     => 'Pode usar esta páxina para xestionar como están ordenados e engadir novos permisos.',
	'grouppermissions-sp-sort'       => 'Ordenar os permisos',
	'grouppermissions-sp-save'       => 'Gardar',
	'grouppermissions-sp-success'    => 'Os permisos foron ordenados con éxito',
	'grouppermissions-sp-addtype'    => 'Engadir o tipo de clasificación',
	'grouppermissions-sp-addperm'    => 'Engadir permisos',
	'grouppermissions-sp-remove'     => 'eliminar',
	'grouppermissions-sp-deltype'    => 'Borrar o tipo de clasificación',
	'grouppermissions-rug-header'    => 'Pode usar esta páxina para eliminar usuarios dos grupos sen uso (borrados).',
	'grouppermissions-rug-success'   => 'Foron eliminados con éxito os usuarios dos grupos sen uso!',
	'grouppermissions-rug-confirm'   => 'Eliminar os usuarios dos grupos sen uso',
	'right-viewsource'               => 'Ver o código fonte das páxinas protexidas',
	'right-raw'                      => 'Ver as páxinas "brutas"',
	'right-render'                   => 'Ver as páxinas renderizadas sen navegación',
	'right-info'                     => 'Ver a información das páxinas',
	'right-credits'                  => 'Ver os créditos das páxinas',
	'right-history'                  => 'Ver os historiais da páxinas',
	'right-search'                   => 'Procurar no wiki',
	'right-contributions'            => 'Ver as páxinas de contribucións',
	'right-recentchanges'            => 'Ver os cambios recentes',
	'right-edittalk'                 => 'Editar as páxinas de conversa',
	'right-edit-new'                 => 'Editar páxinas (que non son de conversa)',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'grouppermissions-dologin' => 'Aperir un session',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'grouppermissions'               => 'Gestisci permessi di gruppi',
	'sortpermissions'                => 'Ordina permessi',
	'removeunusedgroups'             => 'Rimuovi gruppi inutilizzati',
	'grouppermissions-desc'          => 'Gestisci permessi di gruppo attraverso una [[Special:GroupPermissions|pagina speciale]]',
	'grouppermissions-desc2'         => 'Sistema dei permessi esteso',
	'grouppermissions-header'        => 'È possibile usare questa pagina per cambiare i permessi sottostanti dei vari gruppi utente.',
	'grouppermissions-search'        => 'Gruppo:',
	'grouppermissions-dologin'       => 'Entra',
	'grouppermissions-dosearch'      => 'Vai',
	'grouppermissions-searchlabel'   => 'Cerca gruppo',
	'grouppermissions-deletelabel'   => 'Cancella gruppo',
	'grouppermissions-error'         => 'Si è verificato un errore sconosciuto, premi il pulsante Indietro sul tuo browser e riprova',
	'grouppermissions-change'        => 'Cambia i permessi di gruppo',
	'grouppermissions-add'           => 'Aggiungi gruppo',
	'grouppermissions-delete'        => 'Cancella gruppo',
	'grouppermissions-comment'       => 'Commento:',
	'grouppermissions-addsuccess'    => '$1 è stato aggiunto con successo',
	'grouppermissions-deletesuccess' => '$1 è stato cancellato con successo',
	'grouppermissions-changesuccess' => 'I permessi per $1 sono stati cambiati con successo',
	'grouppermissions-true'          => 'Vero',
	'grouppermissions-false'         => 'Falso',
	'grouppermissions-never'         => 'Mai',
	'grouppermissions-nooldrev'      => 'Si è verificato un errore nel tentativo di archiviare il file config corrente. Non verrà creato alcun archivio',
	'grouppermissions-sort-read'     => 'Lettura',
	'grouppermissions-sort-edit'     => 'Modifica',
	'grouppermissions-sort-manage'   => 'Gestione',
	'grouppermissions-sort-admin'    => 'Amministrazione',
	'grouppermissions-sort-tech'     => 'Tecnico',
	'grouppermissions-sort-misc'     => 'Varie',
	'grouppermissions-log-add'       => 'aggiunto gruppo "$2"',
	'grouppermissions-log-change'    => 'permessi modificati per il gruppo "$2"',
	'grouppermissions-log-delete'    => 'cancellato gruppo "$2"',
	'grouppermissions-log-name'      => 'Log permessi dei gruppi',
	'grouppermissions-log-header'    => 'Questa pagina elenca i cambiamenti dei permessi sottostanti dei gruppi utente.',
	'grouppermissions-needjs'        => 'Attenzione: JavaScript non è attivo sul tuo browser. Alcune funzioni potrebbero non funzionare!',
	'grouppermissions-sp-header'     => 'È possibile usare questa pagina per gestire come i permessi sono ordinati e aggiungerne nuovi.',
	'grouppermissions-sp-sort'       => 'Ordina permessi',
	'grouppermissions-sp-save'       => 'Salva',
	'grouppermissions-sp-success'    => 'I permessi sono stati ordinati con successo',
	'grouppermissions-sp-addtype'    => 'Aggiungi tipo di ordinamento',
	'grouppermissions-sp-addperm'    => 'Aggiungi permesso',
	'grouppermissions-sp-remove'     => 'rimuovi',
	'grouppermissions-sp-deltype'    => 'Cancella tipo di ordinamento',
	'grouppermissions-rug-header'    => 'È possibile usare questa pagina per rimuovere utenti dai gruppi inutilizzati (cancellati).',
	'grouppermissions-rug-success'   => 'Utenti rimossi con successo dai gruppi inutilizzati!',
	'grouppermissions-rug-confirm'   => 'Rimuovi utenti dai gruppi inutilizzati',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 */
$messages['km'] = array(
	'removeunusedgroups'             => 'ដកហូតក្រុមដែលមិនត្រូវបានប្រើប្រាស់',
	'grouppermissions-search'        => 'ក្រុម:',
	'grouppermissions-dologin'       => 'ឡុកអ៊ីន',
	'grouppermissions-dosearch'      => 'ទៅ',
	'grouppermissions-deletelabel'   => 'លុបក្រុម',
	'grouppermissions-change'        => 'ប្តូរក្រុមសមាជិកភាព',
	'grouppermissions-add'           => 'បន្ថែមក្រុម',
	'grouppermissions-delete'        => 'លុបក្រុម',
	'grouppermissions-comment'       => 'យោបល់៖',
	'grouppermissions-addsuccess'    => '$1ត្រូវបានបន្ថែមដោយជោគជ័យ',
	'grouppermissions-deletesuccess' => '$1ត្រូវបានលុបដោយជោគជ័យ',
	'grouppermissions-true'          => 'ពិត',
	'grouppermissions-false'         => 'មិនពិត',
	'grouppermissions-never'         => 'មិនដែល',
	'grouppermissions-sort-edit'     => 'ការកែប្រែ',
	'grouppermissions-sort-manage'   => 'ការគ្រប់គ្រង',
	'grouppermissions-log-add'       => 'បានបន្ថែមក្រុម"$2"',
	'grouppermissions-log-delete'    => 'បានលុបក្រុម"$2"',
	'grouppermissions-sp-save'       => 'រក្សាទុក',
	'grouppermissions-sp-remove'     => 'ដកហូត',
	'right-history'                  => 'មើលប្រវត្តិទំព័រ',
	'right-search'                   => 'ស្វែងរកវិគី',
	'right-recentchanges'            => 'មើលបំលាស់ប្តូរថ្មីៗ',
	'right-edittalk'                 => 'កែប្រែទំព័រពិភាក្សា',
	'right-edit-new'                 => 'កែប្រែទំព័រ(ដែលមិនមែនជាទំព័រពិភាក្សា)',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Siebrand
 * @author Jon Harald Søby
 */
$messages['lb'] = array(
	'grouppermissions'               => "D'Rechter vu Gruppe geréieren",
	'sortpermissions'                => 'Rechter sortéieren',
	'removeunusedgroups'             => 'Gruppen déi net benotzt ginn ewechhuelen',
	'grouppermissions-desc'          => "D'Rechter vu Gruppen iwwer eng [[Special:GroupPermissions|Spezialsäit]] geréieren",
	'grouppermissions-desc2'         => 'ERweiderte System vun de Rechter',
	'grouppermissions-header'        => "Dir kënnt dës Säit benotzen fir déi ënnerluechte Rechter vun de verschidden Benotzergruppen z'änneren.",
	'grouppermissions-search'        => 'Grupp:',
	'grouppermissions-dologin'       => 'Aloggen',
	'grouppermissions-dosearch'      => 'Lass',
	'grouppermissions-searchlabel'   => 'Sich no engem Grupp',
	'grouppermissions-deletelabel'   => 'Grupp läschen',
	'grouppermissions-change'        => "D'Rechter vum Grupp änneren",
	'grouppermissions-add'           => 'Grupp derbäisetzen',
	'grouppermissions-delete'        => 'Grupp läschen',
	'grouppermissions-comment'       => 'Bemierkung:',
	'grouppermissions-addsuccess'    => '$1 gouf derbäigesat',
	'grouppermissions-deletesuccess' => '$1 gouf geläscht',
	'grouppermissions-changesuccess' => "D'Rechter fir $1 goufe geännert",
	'grouppermissions-true'          => 'Wouer',
	'grouppermissions-false'         => 'Falsch',
	'grouppermissions-never'         => 'Nie',
	'grouppermissions-sort-edit'     => 'Ännerung',
	'grouppermissions-sort-manage'   => 'Gestioun',
	'grouppermissions-sort-admin'    => 'Verwaltung',
	'grouppermissions-sort-misc'     => 'Verschiddenes',
	'grouppermissions-log-add'       => 'huet de Grupp "$2" derbäigesat',
	'grouppermissions-log-change'    => 'huet d\'Rechter fir de Grupp "$2" geännert',
	'grouppermissions-log-delete'    => 'huet de Grupp "$2" geläscht',
	'grouppermissions-log-name'      => 'Lëscht vun de Rechter vu Gruppen',
	'grouppermissions-sp-save'       => 'Späicheren',
	'right-info'                     => "D'Informarioune vun der Säit weisen",
	'right-history'                  => "D'Versioune vun der Säit weisen",
	'right-search'                   => 'Op der Wiki sichen',
	'right-recentchanges'            => 'Weis rezent Ännerungen',
	'right-edittalk'                 => 'Diskussiounssäiten änneren',
	'right-edit-new'                 => 'Säiten änneren',
);

/** Nahuatl (Nahuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'grouppermissions-dosearch' => 'Yāuh',
	'grouppermissions-never'    => 'Aīcmah',
	'grouppermissions-sp-save'  => 'Ticpiyāz',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'grouppermissions'               => 'Groepsrechten beheren',
	'sortpermissions'                => 'Rechten sorteren',
	'removeunusedgroups'             => 'Ongebruikte groepen verwijderen',
	'grouppermissions-desc'          => 'Groepsrechten beheren via een [[Special:GroupPermissions|speciale pagina]]',
	'grouppermissions-desc2'         => 'Uitgebreid rechtensysteem',
	'grouppermissions-desc3'         => 'Maakt het mogelijk om alle contentgerelateerde handelingen (tabs) aan te passen',
	'grouppermissions-header'        => 'U kunt via deze pagina de groepsrechten van gebruikersgroepen aanpassen.',
	'grouppermissions-search'        => 'Groep:',
	'grouppermissions-dologin'       => 'Aanmelden',
	'grouppermissions-dosearch'      => 'OK',
	'grouppermissions-searchlabel'   => 'Naar groep zoeken',
	'grouppermissions-deletelabel'   => 'Groep verwijderen',
	'grouppermissions-error'         => 'Er is een onbekende fout opgetreden. Klik alstublieft op de knop "vorige pagina" in uw browser en probeer het nog een keer',
	'grouppermissions-change'        => 'Groepsrechten wijzigen',
	'grouppermissions-add'           => 'Groep toevoegen',
	'grouppermissions-delete'        => 'Groep verwijderen',
	'grouppermissions-comment'       => 'Opmerking:',
	'grouppermissions-addsuccess'    => '$1 is toegevoegd',
	'grouppermissions-deletesuccess' => '$1 is verwijderd',
	'grouppermissions-changesuccess' => 'De rechten voor $1 zijn aangepast',
	'grouppermissions-true'          => 'Waar',
	'grouppermissions-false'         => 'Onwaar',
	'grouppermissions-never'         => 'Nooit',
	'grouppermissions-nooldrev'      => 'Er is een fout opgetreden bij het maken van een veiligheidskopie van het huidige instellingenbestand. Er wordt geen veiligheidskopie gemaakt',
	'grouppermissions-sort-read'     => 'Lezen',
	'grouppermissions-sort-edit'     => 'Bewerken',
	'grouppermissions-sort-manage'   => 'Beheer',
	'grouppermissions-sort-admin'    => 'Administratie',
	'grouppermissions-sort-tech'     => 'Technisch',
	'grouppermissions-sort-misc'     => 'Overige',
	'grouppermissions-log-add'       => 'heeft groep "$2" toegevoegd',
	'grouppermissions-log-change'    => 'heeft de rechten voor groep "$2" aangepast',
	'grouppermissions-log-delete'    => 'heeft groep "$2" verwijderd',
	'grouppermissions-log-name'      => 'Groepsrechtenlogboek',
	'grouppermissions-log-header'    => 'Op deze pagina worden wijzigingen in de rechten van gebruikersgroepen weergegeven.',
	'grouppermissions-needjs'        => 'Waarschuwing: JavaScript is uitgeschakeld in uw browser. Een aantal mogelijkheden werkt wellicht niet!',
	'grouppermissions-sp-header'     => 'U kunt deze pagina gebruiker voor het sorteren van rechten en het toevoegen van nieuwe rechten.',
	'grouppermissions-sp-sort'       => 'Rechten sorteren',
	'grouppermissions-sp-save'       => 'Opslaan',
	'grouppermissions-sp-success'    => 'De rechten zijn gesorteerd',
	'grouppermissions-sp-addtype'    => 'Sorteertype toevoegen',
	'grouppermissions-sp-addperm'    => 'Recht toevoegen',
	'grouppermissions-sp-remove'     => 'verwijderen',
	'grouppermissions-sp-deltype'    => 'Sorteertype verwijderen',
	'grouppermissions-rug-header'    => 'U kunt deze pagina gebruiken om gebruikers uit ongebruikte (verwijderde) groepen te verwijderen.',
	'grouppermissions-rug-success'   => 'De gebruikers zijn uit de ongebruikte groepen verwijderd!',
	'grouppermissions-rug-confirm'   => 'Gebruikers uit ongebruikte groepen verwijderen',
	'right-viewsource'               => "Brontekst van beveiligde pagina's bekijken",
	'right-raw'                      => "Ruwe pagina's bekijken",
	'right-render'                   => "Gerenderde pagina's zonder navigatie bekijken",
	'right-info'                     => 'Paginainformatie bekijken',
	'right-credits'                  => 'Pagina-auteurs bekijken',
	'right-history'                  => 'Paginageschiedenis bekijken',
	'right-search'                   => 'Wiki doorzoeken',
	'right-contributions'            => "Bijdragenpagia's bekijken",
	'right-recentchanges'            => 'Recente wijzigingen bekijken',
	'right-edittalk'                 => "Overlegpagina's bewerken",
	'right-edit-new'                 => "Pagina's bewerken",
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Siebrand
 */
$messages['no'] = array(
	'grouppermissions'               => 'Behandle grupperettigheter',
	'sortpermissions'                => 'Sorter rettigheter',
	'removeunusedgroups'             => 'Fjern ubrukte grupper',
	'grouppermissions-desc'          => 'Behandle grupperettigheter via en [[Special:GroupPermissions|spesialside]]',
	'grouppermissions-desc2'         => 'Utvidet rettighetssystem',
	'grouppermissions-desc3'         => 'Tillater egendefinering av innholdsfanene',
	'grouppermissions-header'        => 'Du kan bruke denne siden for å endre rettightene de forskjellige brukergruppene har.',
	'grouppermissions-search'        => 'Gruppe:',
	'grouppermissions-dologin'       => 'Logg inn',
	'grouppermissions-dosearch'      => 'Gå',
	'grouppermissions-searchlabel'   => 'Søk etter gruppe',
	'grouppermissions-deletelabel'   => 'Slett gruppe',
	'grouppermissions-error'         => 'En ukjent feil oppsto. Trykk på tilbake-knappen i nettleseren din og prøv igjen',
	'grouppermissions-change'        => 'Endre grupperettigheter',
	'grouppermissions-add'           => 'Legg til gruppe',
	'grouppermissions-delete'        => 'Slett gruppe',
	'grouppermissions-comment'       => 'Kommentar:',
	'grouppermissions-addsuccess'    => '$1 ble lagt til',
	'grouppermissions-deletesuccess' => '$1 har blitt slettet',
	'grouppermissions-changesuccess' => 'Rettighetene for $1 ble endret',
	'grouppermissions-true'          => 'Sant',
	'grouppermissions-false'         => 'Usant',
	'grouppermissions-never'         => 'Aldri',
	'grouppermissions-nooldrev'      => 'Feil oppsto under forsøk på å arkivere konfigurasjonsfilen. Ingen arkivering ble gjort.',
	'grouppermissions-sort-read'     => 'Lesing',
	'grouppermissions-sort-edit'     => 'Redigering',
	'grouppermissions-sort-manage'   => 'Behandling',
	'grouppermissions-sort-admin'    => 'Administrasjon',
	'grouppermissions-sort-tech'     => 'Teknisk',
	'grouppermissions-sort-misc'     => 'Diverse',
	'grouppermissions-log-add'       => 'la til gruppen «$2»',
	'grouppermissions-log-change'    => 'endret rettigheter for gruppen «$2»',
	'grouppermissions-log-delete'    => 'slettet gruppen «$2»',
	'grouppermissions-log-name'      => 'Logg for endringer i grupperettigheter',
	'grouppermissions-log-header'    => 'Denne siden viser endringer i rettighetene brukergrupper innehar.',
	'grouppermissions-needjs'        => 'Advarsel: JavaScript er slått av i nettleseren din. Noen funksjoner vil ikke fungere.',
	'grouppermissions-sp-header'     => 'Du kan bruke denne siden for å styre hvordan rettigheter sorteres, og legge til nye rettigheter.',
	'grouppermissions-sp-sort'       => 'Sorter rettigheter',
	'grouppermissions-sp-save'       => 'Lagre',
	'grouppermissions-sp-success'    => 'Rettighetene ble sortert',
	'grouppermissions-sp-addtype'    => 'Legg til sorteringstype',
	'grouppermissions-sp-addperm'    => 'Legg til rettighet',
	'grouppermissions-sp-remove'     => 'fjern',
	'grouppermissions-sp-deltype'    => 'Slett sorteringstype',
	'grouppermissions-rug-header'    => 'Du kan bruke denne siden for å fjerne brukere fra ubrukte (slettede) grupper.',
	'grouppermissions-rug-success'   => 'Fjernet brukere fra ubrukte grupper.',
	'grouppermissions-rug-confirm'   => 'Fjern brukere fra ubrukte grupper',
	'right-viewsource'               => 'Se kilden til beskyttede sider',
	'right-raw'                      => 'Se sider i råformat',
	'right-render'                   => 'Se sider uten navigasjon',
	'right-info'                     => 'Se sideinfo',
	'right-credits'                  => 'Se sidekrediteringer',
	'right-history'                  => 'Se sidehistorikker',
	'right-search'                   => 'Søke i wikien',
	'right-contributions'            => 'Vise bidragssider',
	'right-recentchanges'            => 'Vise siste endringer',
	'right-edittalk'                 => 'Redigere diskusjonssider',
	'right-edit-new'                 => 'Redigere sider',
);

/** Occitan (Occitan)
 * @author Cedric31
 * @author Jon Harald Søby
 */
$messages['oc'] = array(
	'grouppermissions'               => 'Gerir las permissions dels gropes',
	'sortpermissions'                => 'Classar las permissions',
	'removeunusedgroups'             => 'Levar los gropes inutilizats',
	'grouppermissions-desc'          => 'Gerís las permissions dels gropes al travèrs d’una [[Special:GroupPermissions|pagina especiala]]',
	'grouppermissions-desc2'         => 'Sistèma espandit de las permissions',
	'grouppermissions-header'        => 'Podètz utilizar aquesta pagina per modificar las permissions soslinhadas dels diferents gropes d’utilizaires.',
	'grouppermissions-search'        => 'Grop :',
	'grouppermissions-dologin'       => 'Connexion',
	'grouppermissions-dosearch'      => 'Aviar',
	'grouppermissions-searchlabel'   => 'Recèrca d’un grop',
	'grouppermissions-deletelabel'   => 'Suprimir lo grop',
	'grouppermissions-error'         => 'Una error indeterminada es intervenguda, clicatz sul boton de retorn a la pagina precedenta de vòstre navigador puèi ensajatz tornamai',
	'grouppermissions-change'        => 'Modificar las permissions del grop',
	'grouppermissions-add'           => 'Apondre un grop',
	'grouppermissions-delete'        => 'Suprimir lo grop',
	'grouppermissions-comment'       => 'Comentari :',
	'grouppermissions-addsuccess'    => '$1 es estat apondut amb succès',
	'grouppermissions-deletesuccess' => '$1 es estat suprimit amb succès',
	'grouppermissions-changesuccess' => 'Las permissions per $1 son estadas modificadas amb succès',
	'grouppermissions-true'          => 'Verai',
	'grouppermissions-false'         => 'Fals',
	'grouppermissions-never'         => 'Pas jamai',
	'grouppermissions-nooldrev'      => "Una error es intervenguda al moment de la temptativa d’archivatge del fichièr de configuracion. Cap d'archiu serà pas creat.",
	'grouppermissions-sort-read'     => 'Lectura',
	'grouppermissions-sort-edit'     => 'Edicion',
);

/** Polish (Polski)
 * @author Airwolf
 * @author Sp5uhe
 * @author Maikking
 */
$messages['pl'] = array(
	'removeunusedgroups'             => 'Usuń nieużywane grupy',
	'grouppermissions-search'        => 'Grupa',
	'grouppermissions-dologin'       => 'Zaloguj',
	'grouppermissions-dosearch'      => 'Szukaj',
	'grouppermissions-searchlabel'   => 'Znajdź grupę',
	'grouppermissions-deletelabel'   => 'Usuń grupę',
	'grouppermissions-error'         => 'Wystąpił nieznany błąd. Kliknij wstecz w przeglądarce i spróbuj ponownie.',
	'grouppermissions-change'        => 'Zmień uprawnienia grupy',
	'grouppermissions-add'           => 'Dodaj grupę',
	'grouppermissions-delete'        => 'Usuń grupę',
	'grouppermissions-comment'       => 'Komentarz',
	'grouppermissions-addsuccess'    => 'Grupa $1 została dodana',
	'grouppermissions-deletesuccess' => 'Grupa $1 została usunięta',
	'grouppermissions-changesuccess' => 'Uprawnienia dla grupy $1 zostały zmienione',
	'grouppermissions-true'          => 'Prawda',
	'grouppermissions-false'         => 'Fałsz',
	'grouppermissions-never'         => 'Nigdy',
	'grouppermissions-log-add'       => 'dodał grupę „$2”',
	'grouppermissions-log-change'    => 'zmienił uprawnienia grupy „$2”',
	'grouppermissions-log-delete'    => 'usunął grupę „$2”',
	'grouppermissions-needjs'        => 'Ostrzeżenie: JavaScript w Twojej przeglądarce jest wyłączony. Niektóre opcje mogą nie działać.',
	'grouppermissions-sp-save'       => 'Zapisz',
	'grouppermissions-sp-remove'     => 'usuń',
	'grouppermissions-rug-header'    => 'Ta strona służy do usuwania użytkowników z nieużywanych lub usuniętych grup.',
	'grouppermissions-rug-success'   => 'Usunięto użytkowników z nieużywanych grup.',
	'grouppermissions-rug-confirm'   => 'Usuń użytkowników z nieużywanych grup',
	'right-edit-new'                 => 'Edycja stron',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'grouppermissions-search'        => 'ډله:',
	'grouppermissions-dologin'       => 'ننوتل',
	'grouppermissions-dosearch'      => 'ورځه',
	'grouppermissions-add'           => 'ډله ورګډول',
	'grouppermissions-delete'        => 'ډله ړنګول',
	'grouppermissions-comment'       => 'تبصره:',
	'grouppermissions-addsuccess'    => 'د $1 ډله په برياليتوب سره ورګډه شوه',
	'grouppermissions-deletesuccess' => 'د $1 ډله په برياليتوب سره ړنګه شوه',
	'grouppermissions-changesuccess' => 'د $1 ډلې لپاره د اجازې واک په برياليتوب سره بدل شو',
	'grouppermissions-true'          => 'سم',
	'grouppermissions-false'         => 'ناسم',
	'grouppermissions-never'         => 'هېڅکله',
	'grouppermissions-sp-save'       => 'خوندي کول',
);

/** Tarifit (Tarifit)
 * @author Jose77
 */
$messages['rif'] = array(
	'grouppermissions-dosearch' => 'Raḥ ɣa',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'removeunusedgroups'             => 'Elimină grupuri neutilizate',
	'grouppermissions-search'        => 'Grup:',
	'grouppermissions-dologin'       => 'Autentificare',
	'grouppermissions-searchlabel'   => 'Caută grup',
	'grouppermissions-deletelabel'   => 'Şterge grup',
	'grouppermissions-change'        => 'Schimbă permisiunile de grup',
	'grouppermissions-add'           => 'Adaugă grup',
	'grouppermissions-delete'        => 'Şterge grup',
	'grouppermissions-comment'       => 'Comentariu:',
	'grouppermissions-addsuccess'    => '$1 a fost adăugat cu succes',
	'grouppermissions-deletesuccess' => '$1 a fost şters cu succes',
	'grouppermissions-changesuccess' => 'Permisiunile pentru $1 au fost schimbate cu succes',
	'grouppermissions-never'         => 'Niciodată',
	'grouppermissions-log-add'       => 'adăugat grupul "$2"',
	'grouppermissions-log-change'    => 'schimbat permisiunile grupului "$2"',
	'grouppermissions-log-delete'    => 'şters grupul "$2"',
	'grouppermissions-sp-save'       => 'Salvează',
	'grouppermissions-sp-addperm'    => 'Adaugă permisiune',
	'grouppermissions-sp-remove'     => 'elimină',
	'right-search'                   => 'Caută în wiki',
);

/** Russian (Русский)
 * @author Innv
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'grouppermissions'               => 'Управление правами доступа',
	'removeunusedgroups'             => 'Удалить неиспользуемые группы',
	'grouppermissions-desc'          => 'Управлять правами доступа на [[Special:GroupPermissions|спецстранице]]',
	'grouppermissions-search'        => 'Группа:',
	'grouppermissions-dologin'       => 'Имя участника',
	'grouppermissions-dosearch'      => 'Перейти',
	'grouppermissions-deletelabel'   => 'Удалить группу',
	'grouppermissions-change'        => 'Изменить групповые права доступа',
	'grouppermissions-add'           => 'Добавить группу',
	'grouppermissions-delete'        => 'Удалить группу',
	'grouppermissions-comment'       => 'Примечание:',
	'grouppermissions-addsuccess'    => '$1 были успешно добавлены',
	'grouppermissions-deletesuccess' => '$1 были успешно удалены',
	'grouppermissions-changesuccess' => 'Права доступа для $1 были успешно изменены',
	'grouppermissions-log-name'      => 'Журнал групповых прав доступа',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Siebrand
 * @author Jon Harald Søby
 */
$messages['sk'] = array(
	'grouppermissions'               => 'Spravovať skupinové oprávnenia',
	'sortpermissions'                => 'Radiť oprávnenia',
	'removeunusedgroups'             => 'Odstrániť nepoužité skupiny',
	'grouppermissions-desc'          => 'Správa oprávnení skupín prostredníctvom [[Special:GroupPermissions|špeciálnej stránky]]',
	'grouppermissions-desc2'         => 'Rozšírený systém oprávnení',
	'grouppermissions-desc3'         => 'Umožňuje prispôsobenie operácií s obsahom (záložiek)',
	'grouppermissions-header'        => 'Pomocou tejto stránky môžete zmeniť oprávnenia rozličných skupín používateľov.',
	'grouppermissions-search'        => 'Skupina:',
	'grouppermissions-dologin'       => 'Prihlasovacie meno',
	'grouppermissions-dosearch'      => 'Vykonať',
	'grouppermissions-searchlabel'   => 'Hľadať skupinu',
	'grouppermissions-deletelabel'   => 'Zmazať skupinu',
	'grouppermissions-error'         => 'Vyskytla sa neznáma chyba, prosím stlačte tlačidlo späť vo vašom prehliadači a skúste to znova',
	'grouppermissions-change'        => 'Zmeniť oprávnenia skupiny',
	'grouppermissions-add'           => 'Pridať skupinu',
	'grouppermissions-delete'        => 'Zmazať skupinu',
	'grouppermissions-comment'       => 'Komentár:',
	'grouppermissions-addsuccess'    => '$1 bola úspešne pridaná',
	'grouppermissions-deletesuccess' => '$1 bola úspešne zmazaná',
	'grouppermissions-changesuccess' => 'Oprávnenia skupiny $1 boli úspešne zmenené',
	'grouppermissions-true'          => 'Áno',
	'grouppermissions-false'         => 'Nie',
	'grouppermissions-never'         => 'Nikdy',
	'grouppermissions-nooldrev'      => 'Pri pokuse o archiváciu aktuálneho konfiguračného súboru sa vyskytla chyba. Archovácia sa neuskutoční.',
	'grouppermissions-sort-read'     => 'Čítanie',
	'grouppermissions-sort-edit'     => 'Úpravy',
	'grouppermissions-sort-manage'   => 'Manažment',
	'grouppermissions-sort-admin'    => 'Správa',
	'grouppermissions-sort-tech'     => 'Technické',
	'grouppermissions-sort-misc'     => 'Rôzne',
	'grouppermissions-log-add'       => 'pridal skupinu „$2”',
	'grouppermissions-log-change'    => 'zmenil oprávnenia skupiny „$2”',
	'grouppermissions-log-delete'    => 'zmazal skupinu „$2”',
	'grouppermissions-log-name'      => 'Záznam skupinových oprávnení',
	'grouppermissions-log-header'    => 'Táto stránka obsahuje zoznam zmien oprávnení skupín používateľov.',
	'grouppermissions-needjs'        => 'Upozornenie: Váš prehlidač má vypnutý JavaScript. Niektoré možnosti nebudú fungovať!',
	'grouppermissions-sp-header'     => 'Táto stránka slúži na správu oprávnení a pridávanie nových oprávnení.',
	'grouppermissions-sp-sort'       => 'Radiť oprávnenia',
	'grouppermissions-sp-save'       => 'Uložiť',
	'grouppermissions-sp-success'    => 'Oprávnenia boli úspešne zoradené',
	'grouppermissions-sp-addtype'    => 'Pridať typ radenia',
	'grouppermissions-sp-addperm'    => 'Pridať oprávnenie',
	'grouppermissions-sp-remove'     => 'odstrániť',
	'grouppermissions-sp-deltype'    => 'Zmazať typ radenia',
	'grouppermissions-rug-header'    => 'Túto stránku môžete použiť na odstránenie používateľov z nepoužívaných (zmazaných) skupín.',
	'grouppermissions-rug-success'   => 'Používatelia boli úspešne odstránení z nepoužívaných skupín.',
	'grouppermissions-rug-confirm'   => 'Odstrániť používateľov z nepoužívaných skupín',
	'right-viewsource'               => 'Zobraziť zdrojový text chránených stránok',
	'right-raw'                      => 'Zobraziť nespracované stránky',
	'right-render'                   => 'Zobraziť vykreslené stránky bez navigácie',
	'right-info'                     => 'Zobraziť informácie o stránke',
	'right-credits'                  => 'Zobraziť autorov stránky',
	'right-history'                  => 'Zobraziť histórie stránok',
	'right-search'                   => 'Hľadať na wiki',
	'right-contributions'            => 'Zobraziť stránky príspevkov',
	'right-recentchanges'            => 'Zobraziť posledné zmeny',
	'right-edittalk'                 => 'Upraviť diskusné stránky',
	'right-edit-new'                 => 'Upravovať stránky (ktoré nie sú diskusné stránky)',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author M.M.S.
 * @author Siebrand
 * @author Jon Harald Søby
 */
$messages['sv'] = array(
	'grouppermissions'               => 'Hantera behörigheter för användargrupper',
	'sortpermissions'                => 'Sortera behörigheter',
	'removeunusedgroups'             => 'Ta bort oanvända användargrupper',
	'grouppermissions-desc'          => 'Hantera behörigheter för användargrupper via en [[Special:GroupPermissions|specialsida]]',
	'grouppermissions-desc2'         => 'Utökat system för behörigheter',
	'grouppermissions-desc3'         => 'Tillåter egendefiniering av innehållshandlingar',
	'grouppermissions-header'        => 'Du kan använda denna sida för att ändra de underliggande behörigheterna av de olika användargrupperna.',
	'grouppermissions-search'        => 'Användargrupp:',
	'grouppermissions-dologin'       => 'Logga in',
	'grouppermissions-dosearch'      => 'Gå till',
	'grouppermissions-searchlabel'   => 'Sök efter användargrupper',
	'grouppermissions-deletelabel'   => 'Radera användargrupp',
	'grouppermissions-error'         => 'Ett okänt fel har uppstått, var god tryck på tillbaka-knappen i din webbläsare och pröva igen',
	'grouppermissions-change'        => 'Ändra behörigheter för användargrupper',
	'grouppermissions-add'           => 'Lägg till användargrupp',
	'grouppermissions-delete'        => 'Radera användargrupp',
	'grouppermissions-comment'       => 'Kommentar:',
	'grouppermissions-addsuccess'    => '$1 har blivit tillagd',
	'grouppermissions-deletesuccess' => '$1 har blivit raderad',
	'grouppermissions-changesuccess' => 'Behörigheterna för $1 har blivit ändrade',
	'grouppermissions-true'          => 'Sant',
	'grouppermissions-false'         => 'Falskt',
	'grouppermissions-never'         => 'Aldrig',
	'grouppermissions-nooldrev'      => 'Fel uppstod under försök att arkivera den nuvarande konfigurationsfilen. Inget arkiv kommer att skapas',
	'grouppermissions-sort-read'     => 'Läser',
	'grouppermissions-sort-edit'     => 'Redigerar',
	'grouppermissions-sort-manage'   => 'Hantering',
	'grouppermissions-sort-admin'    => 'Administration',
	'grouppermissions-sort-tech'     => 'Tekniskt',
	'grouppermissions-sort-misc'     => 'Diverse',
	'grouppermissions-log-add'       => 'la till grupp "$2"',
	'grouppermissions-log-change'    => 'ändrade rättigheter för grupp "$2"',
	'grouppermissions-log-delete'    => 'raderade grupp "$2"',
	'grouppermissions-log-name'      => 'Grupprättighetslogg',
	'grouppermissions-log-header'    => 'Denna sida visar ändringar i användargruppernas underliggande rättigheter.',
	'grouppermissions-needjs'        => 'Warning: JavaScript är avstängt i din webbläsare. Det kan få vissa funktioner att inte fungera.',
	'grouppermissions-sp-header'     => 'Du kan använda denna sida för att hantera hur rättigheter sorteras och lägga till nya rättigheter.',
	'grouppermissions-sp-sort'       => 'Sortera behörigheter',
	'grouppermissions-sp-save'       => 'Spara',
	'grouppermissions-sp-success'    => 'Behörigheterna har blivit sorterade',
	'grouppermissions-sp-addtype'    => 'Lägg till sorteringstyp',
	'grouppermissions-sp-addperm'    => 'Lägg till behörighet',
	'grouppermissions-sp-remove'     => 'ta bort',
	'grouppermissions-sp-deltype'    => 'Radera sorteringstyp',
	'grouppermissions-rug-header'    => 'Du kan använda denna sida för att ta bort användare från oanvända (raderade) användargrupper.',
	'grouppermissions-rug-success'   => 'Användarna har tagits bort från oanvända användargrupper!',
	'grouppermissions-rug-confirm'   => 'Ta bort användare från oanvända användargrupper',
	'right-viewsource'               => 'Se skyddade sidors wiki-kod',
	'right-raw'                      => 'Se sidor i råformat',
	'right-render'                   => 'Se renderade sidor utan navigation',
	'right-info'                     => 'Se sidinfo',
	'right-credits'                  => 'Se sidokrediteringar',
	'right-history'                  => 'Se sidohistorik',
	'right-search'                   => 'Söka wikin',
	'right-contributions'            => 'Se bidragssidor',
	'right-recentchanges'            => 'Se senaste ändringar',
	'right-edittalk'                 => 'Redigera diskussionssidor',
	'right-edit-new'                 => 'Redigera sidor',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'grouppermissions-search'      => 'సమూహం:',
	'grouppermissions-dologin'     => 'ప్రవేశించు',
	'grouppermissions-dosearch'    => 'వెళ్ళు',
	'grouppermissions-deletelabel' => 'సమూహాన్ని తొలగించు',
	'grouppermissions-change'      => 'సమూహపు అనుమతులు మార్చండి',
	'grouppermissions-add'         => 'సమూహాన్ని చేర్చు',
	'grouppermissions-delete'      => 'సమూహాన్ని తొలగించు',
	'grouppermissions-comment'     => 'వ్యాఖ్య:',
	'grouppermissions-true'        => 'సత్యం',
	'grouppermissions-false'       => 'అసత్యం',
	'grouppermissions-sort-tech'   => 'సాంకేతికం',
	'grouppermissions-sp-save'     => 'భద్రపరచు',
	'grouppermissions-sp-remove'   => 'తొలగించు',
	'right-info'                   => 'పేజీ సమాచారం చూడవచ్చు',
	'right-history'                => 'పేజీల చరిత్రలను చూడవచ్చు',
	'right-search'                 => 'వికిలో అన్వేషించవచ్చు',
	'right-recentchanges'          => 'ఇటీవలి మార్పులను చూడవచ్చు',
	'right-edittalk'               => 'చర్చా పేజీలను మార్చవచ్చు',
	'right-edit-new'               => 'పేజీలను మార్చడం',
);

