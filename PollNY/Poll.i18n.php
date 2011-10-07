<?php
/**
 * Internationalization file for the Poll extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Aaron Wright <aaron.wright@gmail.com>
 * @author David Pean <david.pean@gmail.com>
 */
$messages['en'] = array(
	'adminpoll' => 'Administrate Polls',
	'createpoll' => 'Create a Poll',
	'randompoll' => 'Random Poll',
	'viewpoll' => 'View Polls',
	'poll-admin-no-polls' => 'There are no polls. [[Special:CreatePoll|Create a poll!]]',
	'poll-admin-closed' => 'Closed',
	'poll-admin-flagged' => 'Flagged',
	'poll-admin-open' => 'Open',
	'poll-admin-panel' => 'Admin',
	'poll-admin-status-nav' => 'Filter by Status',
	'poll-admin-title-all' => 'Poll Admin - View All Polls',
	'poll-admin-title-closed' => 'Poll Admin - View Closed Polls',
	'poll-admin-title-flagged' => 'Poll Admin - View Flagged Polls',
	'poll-admin-title-open' => 'Poll Admin - View Open Polls',
	'poll-admin-viewall' => 'View All',
	'poll-ago' => '$1 ago',
	'poll-atleast' => 'You must have at least two answer choices',
	'poll-based-on-votes' => 'based on {{PLURAL:$1|one vote|$1 votes}}',
	'poll-blocked-no-create' => 'You are currently blocked and cannot create any polls',
	'poll-cancel-button' => 'Cancel',
	'poll-category' => 'Polls',
	'poll-category-user' => 'Polls by User $1',
	'poll-choices-label' => 'Answer Choices',
	'poll-close-message' => 'Are you sure you want to close this poll? All voting will be suspended.',
	'poll-close-poll' => 'Close Poll',
	'poll-closed' => 'This poll has been closed for voting',
	'poll-create' => 'Create Poll',
	'poll-createpoll-error-nomore' => 'There are no more polls left!', // keep it simple, this is used in JS so it cannot contain links etc.
	'poll-create-button' => 'Create and Play!',
	'poll-create-threshold-reason' => 'Sorry, you cannot create a poll until you have at least $1',
	'poll-create-threshold-title' => 'Create Poll',
	'poll-create-title' => 'Create a Poll',
	'poll-createdago' => 'Created $1 ago',
	'poll-delete-message' => 'Are you sure you want to delete this poll?',
	'poll-delete-poll' => 'Delete Poll',
	'poll-discuss' => 'Discuss',
	'poll-edit-answers' => 'Edit Answers',
	'poll-edit-button' => 'Save Page',
	'poll-edit-desc' => 'new poll',
	'poll-edit-image' => 'Edit Image',
	'poll-edit-invalid-access' => 'Invalid Access',
	'poll-edit-title' => 'Editing Poll - $1',
	'poll-embed' => 'Embed on wiki page',
	'poll-enterquestion' => 'You must enter a question',
	'poll-finished' => '<b>There are no more polls left. Add your <a href="$1">own!</a></b> or <a href="$2">View Results of this Poll</a>',
	'poll-flagged' => 'This poll has been flagged',
	'poll-flagged-message' => 'Are you sure you want to flag this poll?',
	'poll-flag-poll' => 'Flag Poll',
	'poll-hash' => '# is an invalid character for the poll question.',
	'poll-image-label' => 'Add an Image',
	'poll-instructions' => 'Ask a poll question, write some answer choices, press the "{{int:poll-create-button}}" button. It\'s that easy!',
	'poll-js-loading' => 'Loading...',
	'poll-next' => 'next',
	'poll-next-poll' => 'Next Poll',
	'poll-no-more-message' => 'You have voted for every poll!<br />Don\'t get sad, [[Special:CreatePoll|create your very own]]!',
	'poll-no-more-title' => 'No More Polls!',
	'poll-open-message' => 'Are you sure you want to open this poll?',
	'poll-open-poll' => 'Open Poll',
	'poll-pleasechoose' => 'Please choose another poll name',
	'poll-prev' => 'prev',
	'poll-previous-poll' => 'Previous Poll',
	'poll-question-label' => 'Poll Question',
	'poll-skip' => 'Skip >',
	'poll-submitted-by' => 'Submitted By',
	'poll-take-button' => '< Back to Polls',
	'poll-unavailable' => 'This poll is unavailable',
	'poll-unflag-poll' => 'Unflag Poll',
	'poll-upload-image-button' => 'Upload',
	'poll-upload-new-image' => 'Upload New Image',
	'poll-view-title' => "View $1's Polls",
	'poll-view-order' => 'Order',
	'poll-view-newest' => 'Newest',
	'poll-view-popular' => 'Popular',
	'poll-view-answered-times' => 'Answered {{PLURAL:$1|one time|$1 times}}',
	'poll-view-all-by' => 'View All Polls by $1',
	'poll-voted-for' => 'You have voted for $1 {{PLURAL:$1|poll|polls}} out of <b>$2</b> total polls and received <span class="profile-on">$3 points</span>',
	'poll-votes' => '{{PLURAL:$1|one vote|$1 votes}}',
	'poll-woops' => 'Woops!',
	'poll-would-have-earned' => 'You would have earned <span class="profile-on">$1 points</span> had you [[Special:UserLogin/signup|signed up]]',
	'poll-time-ago' => '$1 ago',
	'poll-time-days' => '{{PLURAL:$1|one day|$1 days}}',
	'poll-time-hours' => '{{PLURAL:$1|one hour|$1 hours}}',
	'poll-time-minutes' => '{{PLURAL:$1|one minute|$1 minutes}}',
	'poll-time-seconds' => '{{PLURAL:$1|one second|$1 seconds}}',
	'specialpages-group-poll' => 'Polls',
	'right-polladmin' => 'Administer polls',
);

/** Finnish (Suomi)
 * @author Jack Phoenix <jack@countervandalism.net>
 */
$messages['fi'] = array(
	'adminpoll' => 'Hallinnoi äänestyksiä',
	'createpoll' => 'Luo äänestys',
	'randompoll' => 'Satunnainen äänestys',
	'viewpoll' => 'Katso äänestyksiä',
	'poll-admin-no-polls' => 'Äänestyksiä ei ole olemassa. [[Special:CreatePoll|Luo äänestys!]]',
	'poll-admin-closed' => 'Suljetut',
	'poll-admin-flagged' => 'Merkityt',
	'poll-admin-open' => 'Avoimet',
	'poll-admin-panel' => 'Halinnoi',
	'poll-admin-status-nav' => 'Suodata tilan mukaan',
	'poll-admin-title-all' => 'Äänestysten ylläpito - katso kaikki äänestykset',
	'poll-admin-title-closed' => 'Äänestysten ylläpito - katso suljetut äänestykset',
	'poll-admin-title-flagged' => 'Äänestysten ylläpito - katso merkityt äänestykset',
	'poll-admin-title-open' => 'Äänestysten ylläpito - katso avoimet äänestykset',
	'poll-admin-viewall' => 'Katso kaikki',
	'poll-ago' => '$1 sitten',
	'poll-atleast' => 'Sinulla täytyy olla ainakin kaksi vastausvaihtoehtoa',
	'poll-based-on-votes' => 'perustuen {{PLURAL:$1|yhteen ääneen|$1 ääneen}}',
	'poll-blocked-no-create' => 'Sinut on estetty etkä voi luoda äänestyksiä',
	'poll-cancel-button' => 'Peruuta',
	'poll-category' => 'Äänestykset',
	'poll-category-user' => 'Käyttäjän $1 äänestykset',
	'poll-choices-label' => 'Vastausvaihtoehdot',
	'poll-close-message' => 'Oletko varma, että haluat sulkea tämän äänestyksen? Kaikkien äänien antaminen keskeytetään.',
	'poll-close-poll' => 'Sulje äänestys',
	'poll-closed' => 'Tämä äänestys on suljettu ääniltä',
	'poll-create' => 'Luo äänestys',
	'poll-createpoll-error-nomore' => 'Äänestyksiä ei ole enempää jäljellä!',
	'poll-create-button' => 'Luo ja pelaa!',
	'poll-create-threshold-reason' => 'Pahoittelut, et voi luoda äänestystä ennen kuin sinulla on ainakin $1',
	'poll-create-threshold-title' => 'Luo äänestys',
	'poll-create-title' => 'Luo äänestys',
	'poll-createdago' => 'Luotu $1 sitten',
	'poll-delete-message' => 'Oletko varma, että haluat poistaa tämän äänestyksen?',
	'poll-delete-poll' => 'Poista äänestys',
	'poll-discuss' => 'Keskustele',
	'poll-edit-answers' => 'Muokkaa vastauksia',
	'poll-edit-button' => 'Tallenna sivu',
	'poll-edit-desc' => 'uusi äänestys',
	'poll-edit-image' => 'Muokkaa kuvaa',
	#'poll-edit-invalid-access' => 'Invalid Access',
	'poll-edit-title' => 'Muokataan äänestystä - $1',
	'poll-embed' => 'Upota wiki-sivulle',
	'poll-enterquestion' => 'Sinun tulee antaa kysymys',
	'poll-finished' => '<b>Äänestyksiä ei ole enempää jäljellä. Lisää <a href="$1">omasi</a></b> tai <a href="$2">katso tämän äänestyksen tulokset</a>',
	'poll-flagged' => 'Tämä äänestys on merkitty',
	'poll-flagged-message' => 'Oletko varma, että haluat merkitä tämän äänestyksen?',
	'poll-flag-poll' => 'Merkitse äänestys',
	'poll-hash' => '# on merkki, joka ei kelpaa äänestyksen kysymykseen.',
	'poll-image-label' => 'Lisää kuva',
	'poll-instructions' => 'Kysy kysymys, kirjoita joitakin vastausvaihtoehtoja ja paina "{{int:poll-create-button}}" -painiketta. Se on niin helppoa!',
	'poll-js-loading' => 'Ladataan...',
	'poll-next' => 'seur.',
	'poll-next-poll' => 'Seuraava äänestys',
	'poll-no-more-message' => 'Olet äänestänyt jokaiseen äänestykseen!<br />Älä masennu, [[Special:CreatePoll|luo omasi]]!',
	'poll-no-more-title' => 'Ei enempää äänestyksiä!',
	'poll-open-message' => 'Oletko varma, että haluat avata tämän äänestyksen?',
	'poll-open-poll' => 'Avaa äänestys',
	'poll-pleasechoose' => 'Ole hyvä ja valitse toinen nimi äänestykselle',
	'poll-prev' => 'edell.',
	'poll-previous-poll' => 'Edellinen äänestys',
	'poll-question-label' => 'Äänestyskysymys',
	'poll-skip' => 'Ohita >',
	'poll-submitted-by' => 'Lähettänyt',
	'poll-take-button' => '< Takaisin äänestyksiin',
	'poll-unavailable' => 'Tämä äänestys ei ole saatavilla',
	'poll-unflag-poll' => 'Poista merkintä äänestyksestä',
	'poll-upload-image-button' => 'Tallenna',
	'poll-upload-new-image' => 'Tallenna uusi kuva',
	'poll-view-title' => 'Katso käyttäjän $1 äänestykset',
	'poll-view-order' => 'Järjestys',
	'poll-view-newest' => 'Uusimmat',
	'poll-view-popular' => 'Suositut',
	'poll-view-answered-times' => 'Vastattu {{PLURAL:$1|kerran|$1 kertaa}}',
	'poll-view-all-by' => 'Katso kaikki käyttäjän $1 äänestykset',
	'poll-voted-for' => 'Olet äänestänyt {{PLURAL:$1|yhteen äänestykseen|$1 äänestykseen}} kaikista äänestyksistä, joita on yhteensä <b>$2</b> kappaletta ja saanut <span class="profile-on">$3 pistettä</span>',
	'poll-votes' => '{{PLURAL:$1|yksi ääni|$1 ääntä}}',
	'poll-woops' => 'Ups!',
	'poll-would-have-earned' => 'Olisit ansainnut <span class="profile-on">$1 pistettä</span> jos olisit [[Special:UserLogin/signup|rekisteröitynyt]]',
	'poll-time-ago' => '$1 sitten',
	'poll-time-days' => '{{PLURAL:$1|yksi päivä|$1 päivää}}',
	'poll-time-hours' => '{{PLURAL:$1|yksi tunti|$1 tuntia}}',
	'poll-time-minutes' => '{{PLURAL:$1|yksi minuutti|$1 minuuttia}}',
	'poll-time-seconds' => '{{PLURAL:$1|yksi sekunti|$1 sekuntia}}',
	'specialpages-group-poll' => 'Äänestykset',
	'right-polladmin' => 'Hallinnoida äänestyksiä',
);

/** French (Français)
 * @author Constant Depièreux
 */
$messages['fr'] = array(
	'adminpoll' => 'Administration des sondages',
	'createpoll' => 'Créer un sondage',
	'randompoll' => 'Sondages aléatoires',
	'viewpoll' => 'Voir les sondages',
	'poll-admin-no-polls' => "Il n'y a pas de sondage. [[Special:CreatePoll|Créer un sondage!]]",
	'poll-admin-closed' => 'Fermé',
	'poll-admin-flagged' => 'Marqué',
	'poll-admin-open' => 'Ouvrir',
	'poll-admin-panel' => 'Admininistrer',
	'poll-admin-status-nav' => 'Filtrer par statut',
	'poll-admin-title-all' => 'Adminstration des sondages - Voir tous les sondages',
	'poll-admin-title-closed' => 'Adminstration des sondages - Voir les sondages clôturés',
	'poll-admin-title-flagged' => 'Adminstration des sondages - Voir les sondages marqués',
	'poll-admin-title-open' => 'Adminstration des sondages - Voir les sondages ouverts',
	'poll-admin-viewall' => 'Tout visualiser',
	'poll-ago' => '$1 passé',
	'poll-atleast' => 'Vous devez avoir au moins deux réponses possibles',
	'poll-based-on-votes' => 'basé sur {{PLURAL:$1|un vote|$1 votes}}',
	'poll-blocked-no-create' => 'Vous êtes actuellement bloqué et ne pouvez soumettre de sondage',
	'poll-cancel-button' => 'Supprimer',
	'poll-category' => 'Sondages',
	'poll-category-user' => 'Sondage par utilisateur $1',
	'poll-choices-label' => 'Réponses possibles',
	'poll-close-message' => 'Etes-vous sûr que vous voulez clôturer ce sondage? Tous les votes futurs seront suspendus.',
	'poll-close-poll' => 'Clôturer le sondage',
	'poll-closed' => 'Ce sondage est clos. Tous les votes sont terminés',
	'poll-create' => 'Créer un sondage',
	'poll-createpoll-error-nomore' => 'Il n\'y a plus de sondage ouvert!',
	'poll-create-button' => 'Créez et jouez!',
	'poll-create-threshold-reason' => 'Désolé, vous ne pouvez créer de sondage avant d\'avoir $1',
	'poll-create-threshold-title' => 'Créer un sondage',
	'poll-create-title' => 'Créer un sondage',
	'poll-createdago' => 'Créé il y a $1 passé',
	'poll-delete-message' => 'Etes-vous sûr que vous vouler supprimer ce sondage?',
	'poll-delete-poll' => 'Supprimer un sondage',
	'poll-discuss' => 'Discussions',
	'poll-edit-answers' => 'Edition des réponses',
	'poll-edit-button' => 'Sauvegarde de la page',
	'poll-edit-desc' => 'nouveau sondage',
	'poll-edit-image' => "Edition de l'image",
	'poll-edit-invalid-access' => 'Accès invalide',
	'poll-edit-title' => 'Edition du sondage - $1',
	'poll-embed' => 'Inclusion sur une page wiki',
	'poll-enterquestion' => 'Vous devez entrer une question',
	'poll-finished' => '<b>Il n\'y a plus de sondage. Créez votre <a href="$1">propre sondage</a></b> ou <a href="$2">visualisez le résultat du sondage en cours</a>',
	'poll-flagged' => 'Ce sondage a été marqué',
	'poll-flagged-message' => 'Etes-vous sûr que vous souhaitez marquer ce sondage?',
	'poll-flag-poll' => 'Marquer le sondage',
	'poll-hash' => '# est un caractère invalide.',
	'poll-image-label' => 'Ajouter une image',
	'poll-instructions' => 'Posez une question de sondage, proposez un choix de réponses possibles, pressez le bouton "{{int:poll-create-button}}". N\'est-ce pas facile!',
	'poll-js-loading' => 'En cours de chargement ...',
	'poll-next' => 'suivant',
	'poll-next-poll' => 'Sondage suivant',
	'poll-no-more-message' => 'Vous avez voté pour tous les sondages!<br />Ne soyez pas désolé, [[Special:CreatePoll|créez le vôtre!]]!',
	'poll-no-more-title' => 'Plus de sondage!',
	'poll-open-message' => 'Etes-vous sûr que vous souhaitez ouvrir ce sondage?',
	'poll-open-poll' => 'Sondage ouvert',
	'poll-pleasechoose' => 'Choississez une autre nom pour ce sondage SVP.',
	'poll-prev' => 'précédent',
	'poll-previous-poll' => 'Sondage précédent',
	'poll-question-label' => 'Question du sondage',
	'poll-skip' => 'Aller à >',
	'poll-submitted-by' => 'Proposé par',
	'poll-take-button' => '< Retour aux sondages',
	'poll-unavailable' => 'Ce sondage est indisponible',
	'poll-unflag-poll' => 'Démarquez ce sondage',
	'poll-upload-image-button' => 'Charger',
	'poll-upload-new-image' => 'Cherger une nouvelle image',
	'poll-view-title' => 'Voir le sondage $1',
	'poll-view-order' => 'Ordre',
	'poll-view-newest' => 'Nouveau',
	'poll-view-popular' => 'Populaire',
	'poll-view-answered-times' => 'Répondu {{PLURAL:$1|une fois|$1 fois}}',
	'poll-view-all-by' => 'Voir tous les sondages proposés par $1',
	'poll-voted-for' => 'Vous avez voté pour $1 {{PLURAL:$1|sondage|sondages}} parmi <b>$2</b> sondages possibles et obtenu <span class="profile-on">$3 points</span>',
	'poll-votes' => '{{PLURAL:$1|un vote|$1 votes}}',
	'poll-woops' => 'Oups!',
	'poll-would-have-earned' => 'Vous avez gagné <span class="profile-on">$1 points</span> si vous vous êtes [[Special:UserLogin/signup|identifié]]',
	'poll-time-ago' => '$1 passé',
	'poll-time-days' => '{{PLURAL:$1|un jour|$1 jours}}',
	'poll-time-hours' => '{{PLURAL:$1|une heure|$1 heures}}',
	'poll-time-minutes' => '{{PLURAL:$1|une minute|$1 minutes}}',
	'poll-time-seconds' => '{{PLURAL:$1|une seconde|$1 secondes}}',
	'specialpages-group-poll' => 'Sondages',
	'right-polladmin' => 'Administrer les sondages',
);

/** Dutch (Nederlands)
 * @author Mitchel Corstjens
 */
$messages['nl'] = array(
	'adminpoll' => 'Administreer peilingen',
	'createpoll' => 'Maak een peiling',
	'randompoll' => 'Willekeurige peiling',
	'viewpoll' => 'Bekijk peilingen',
	'poll-admin-no-polls' => 'Er zijn nog geen peilingen. [[Special:CreatePoll|Maak een peiling hier!]]',
	'poll-admin-closed' => 'Gesloten',
	'poll-admin-flagged' => 'Gemarkeerd',
	'poll-admin-open' => 'Open',
	'poll-admin-panel' => 'Administrator',
	'poll-admin-status-nav' => 'Filter aan de hand van status',
	'poll-admin-title-all' => 'Peiling admin - bekijk alle peilingen',
	'poll-admin-title-closed' => 'Peiling admin - Bekijk gesloten peilingen',
	'poll-admin-title-flagged' => 'Peiling admin - Bekijk gemarkeerde peilingen',
	'poll-admin-title-open' => 'Peiling admin - Bekijk open peilingen',
	'poll-admin-viewall' => 'Bekijk alle peilingen',
	'poll-ago' => '$1 geleden',
	'poll-atleast' => 'Je moet minimaal twee antwoord opties hebben',
	'poll-based-on-votes' => 'gebaseerd op {{PLURAL:$1|een stem|$1 stemmen}}',
	'poll-blocked-no-create' => 'Je bent op het moment geblokkeerd en kan hierdoor geen peilingen maken',
	'poll-cancel-button' => 'Annuleren',
	'poll-category' => 'Peilingen',
	'poll-category-user' => 'Peilingen door gebruiker $1',
	'poll-choices-label' => 'antwoord opties',
	'poll-close-message' => 'Weet je zeker dat je deze peiling wilt sluiten? Stemmen is hierna niet meer mogelijk.',
	'poll-close-poll' => 'Sluit peiling',
	'poll-closed' => 'Deze peiling is gesloten',
	'poll-create' => 'Creëer peiling',
	'poll-createpoll-error-nomore' => 'Er zijn geen verdere peilingen meer!',
	'poll-create-button' => 'Creëer en speel',
	'poll-create-threshold-reason' => 'Sorry, je kunt geen peiling maken tot je minimaal $1 hebt',
	'poll-create-threshold-title' => 'Creëer een peiling',
	'poll-create-title' => 'Creëer een peiling',
	'poll-createdago' => '$1 geleden gecreëerd',
	'poll-delete-message' => 'Weet je zeker dat je deze peiling wilt verwijderen?',
	'poll-delete-poll' => 'Verwijder peiling',
	'poll-discuss' => 'Discussieer',
	'poll-edit-answers' => 'Bewerk antwoorden',
	'poll-edit-button' => 'Pagina opslaan',
	'poll-edit-desc' => 'nieuwe peiling',
	'poll-edit-image' => 'Bewerkt afbeelding',
	'poll-edit-invalid-access' => 'Ongeldige toegang',
	'poll-edit-title' => 'Bewerk peiling - $1',
	'poll-embed' => 'Ingevoegd op wiki pagina',
	'poll-enterquestion' => 'Je moet een vraag invoeren',
	'poll-finished' => '<b>Er zijn geen peilingen meer over. Maak je <a href="$1">eigen peiling!</a></b> of <a href="$2">Bekijk resultaten van deze peiling</a>',
	'poll-flagged' => 'Deze peiling is gemarkeerd',
	'poll-flagged-message' => 'Weet je zeker dat je deze peiling wilt markeren?',
	'poll-flag-poll' => 'Markeer peiling',
	'poll-hash' => '# is een ongeldig karakter voor de vraag.',
	'poll-image-label' => 'Voeg een afbeelding toe',
	'poll-instructions' => 'Stel een vraag, geef een aantal antwoord opties en klik op {{int:poll-create-button}}. Zo makkelijk is het!',
	'poll-js-loading' => 'Laden...',
	'poll-next' => 'volgende',
	'poll-next-poll' => 'Volgende peiling',
	'poll-no-more-message' => 'Je hebt voor iedere peiling gestemd!<br />[[Special:CreatePoll|Maak nu je eigen peiling]]!',
	'poll-no-more-title' => 'Geen peilingen meer!',
	'poll-open-message' => 'Weet je zeker dat je deze peiling wilt openen?',
	'poll-open-poll' => 'Open peiling',
	'poll-pleasechoose' => 'Kies alstublieft een andere peiling naam',
	'poll-prev' => 'vorige',
	'poll-previous-poll' => 'Vorige peiling',
	'poll-question-label' => 'Peiling vraag',
	'poll-skip' => 'Overslaan >',
	'poll-submitted-by' => 'Toegevoegd door',
	'poll-take-button' => '< Terug naar peilingen',
	'poll-unavailable' => 'Deze peiling is niet beschikbaar',
	'poll-unflag-poll' => 'On-markeer peiling',
	'poll-upload-image-button' => 'Upload',
	'poll-upload-new-image' => 'Voeg een nieuwe afbeelding toe',
	'poll-view-title' => "Bekijk $1's peilingen",
	'poll-view-order' => 'Orde',
	'poll-view-newest' => 'Nieuwste',
	'poll-view-popular' => 'Populair',
	'poll-view-answered-times' => '{{PLURAL:$1|Een keer|$1 keren}} beantwoord',
	'poll-view-all-by' => 'bekijk alle peilingen door $1',
	'poll-voted-for' => 'Je hebt voor $1 {{PLURAL:$1|peiling|peilingen}} van de <b>$2</b> peilingen gestemd en hebt <span class="profile-on">$3 punten</span> ontvangen',
	'poll-votes' => '{{PLURAL:$1|een stem|$1 stemmen}}',
	'poll-woops' => 'oeps!',
	'poll-would-have-earned' => 'Je zou <span class="profile-on">$1 punten</span> als je [[Special:UserLogin/signup|geregistreerd had]]',
	'poll-time-ago' => '$1 geleden',
	'poll-time-days' => '{{PLURAL:$1|een dag|$1 dagen}}',
	'poll-time-hours' => '{{PLURAL:$1|een uur|$1 uren}}',
	'poll-time-minutes' => '{{PLURAL:$1|een minuut|$1 minuten}}',
	'poll-time-seconds' => '{{PLURAL:$1|een seconde|$1 seconden}}',
	'specialpages-group-poll' => 'Peilingen',
	'right-polladmin' => 'Administreer peilingen',
);