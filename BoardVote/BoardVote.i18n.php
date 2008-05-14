<?php
/**
 * Internationalisation file for BoardVote extension.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'boardvote'               => "Wikimedia Board of Trustees election",
	'boardvote-desc'          => '[[meta:Board elections|Wikimedia Board of Trustees election]]',
	'boardvote_entry'         => "* [[Special:Boardvote/vote|Vote]]
* [[Special:Boardvote/list|List votes to date]]
* [[Special:Boardvote/dump|Dump encrypted election record]]",
	'boardvote_intro'         => "<p>Welcome to the 2008 election for the Wikimedia Board of Trustees. We are
voting for one person to represent the community of users on the various
Wikimedia projects. They will help to determine the future direction
that the Wikimedia projects will take, individually and as a group, and
represent <em>your</em> interests and concerns to the Board of Trustees. They will
decide on ways to generate income and the allocation of moneys raised.</p>

<p>Please read the candidates' statements and responses to queries carefully
before voting. Each of the candidates is a respected user, who has contributed
considerable time and effort to making these projects a welcoming environment
committed to the pursuit and free distribution of human knowledge.</p>

<p>Please rank the candidates according to your preferences by filling in a number 
beside the box (1 = favourite candidate, 2 = second favourite...). You may give the 
same preference to more than one candidate and may keep candidates unranked. It is 
presumed that you prefers all ranked candidates to all not ranked candidates and 
that you are indifferent between all not ranked candidates.</p>

<p>The winner of the election will be calculated using the Schulze method.</p>

<p>For more information, see:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">Board elections 2008</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">Candidates</a></li>
<li><a href=\"http://en.wikipedia.org/wiki/Schulze_method\" class=\"external\">Schulze method</a></li></ul>",
	'boardvote_intro_change'  => "<p>You have voted before. However you may change
your vote using the form below. Please rank the candidates in your order of preferences, whereby a smaller number 
indicate a higher preference for that particular candidate.</p>",
	'boardvote_footer'        => "&nbsp;", # Do not translate this
	'boardvote_entered'       => "Thank you, your vote has been recorded.

If you wish, you may record the following details. Your voting record is:

<pre>$1</pre>

It has been encrypted with the public key of the Election Administrators:

<pre>$2</pre>

The resulting encrypted version follows. It will be displayed publicly on [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]",
	'boardvote_invalidentered'=> "<p><strong>Error</strong>: candidate preference must be expressed in positive whole number only (1, 2, 3, ....), or 
left empty.</p>",
	'boardvote_nosession'     => "Your Wikimedia user ID could not be determined.
Please log in to the wiki where you are qualified to vote, and go to <nowiki>[[Special:Boardvote]]</nowiki>.
You must use an account with at least $1 contributions before $2, and have made at least $3 contributions between $4 and $5.",
	'boardvote_notloggedin'   => "You are not logged in.
To vote, you must use an account with at least $1 contributions before $2, and have made at least $3 contributions between $4 and $5.",
	'boardvote_notqualified'  => "You are not qualified to vote in this election.
You need to have made at least $1 contributions before $2, and have made at least $3 contributions between $4 and $5.",
	'boardvote_novotes'       => "Nobody has voted yet.",
	'boardvote_time'          => "Time",
	'boardvote_user'          => "User",
	'boardvote_edits'         => "Edits",
	'boardvote_days'          => "Days",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "User agent",
	'boardvote_listintro'     => "<p>This is a list of all votes which have been recorded to date.
$1 for the encrypted data.</p>",
	'boardvote_dumplink'      => "Click here",
	'boardvote_submit'        => 'OK',
	'boardvote_strike'        => "Strike",
	'boardvote_unstrike'      => "Unstrike",
	'boardvote_needadmin'     => "Only election administrators can perform this operation.",
	'boardvote_sitenotice'    => "<a href=\"{{localurle:Special:Boardvote/vote}}\">Wikimedia Board Elections</a>:
Vote open until June 22",
	'boardvote_notstarted'    => 'Voting has not yet started',
	'boardvote_closed'        => 'Voting is now closed, see [http://meta.wikimedia.org/wiki/Board_elections/2008/Results the elections page for results] soon.',
	'boardvote_edits_many'    => 'many',
	'group-boardvote'         => 'Board vote admins',
	'group-boardvote-member'  => 'Board vote admin',
	'grouppage-boardvote'     => '{{ns:project}}:Board vote admin',
	'boardvote_blocked'       => 'Sorry, you have been blocked on your registered wiki. Blocked users are not allowed to vote.',
	'boardvote_bot'           => 'Sorry, you are flag as a bot on your registered wiki. Bot account are not allowed to vote.',
	'boardvote_welcome'       => "Welcome '''$1'''!",
	'go_to_board_vote'        => 'Wikimedia Board Elections 2008',
	'boardvote_redirecting'   => 'For improved security and transparency, we are running the vote on an external, independently controlled server.

You will be redirected to this external server in 20 seconds. [$1 Click here] to go there now.

A security warning about an unsigned certificate may be displayed.',

	'right-boardvote'         => 'Administer elections',
);

$messages['af'] = array(
	'boardvote'               => 'Wikimedia-Trusteeraadverkiesing',
	'boardvote_time'          => 'Tyd',
	'boardvote_user'          => 'Gebruiker',
	'boardvote_edits'         => 'Redigerings',
	'boardvote_days'          => 'Dae',
	'boardvote_dumplink'      => 'Kliek hier',
	'boardvote_edits_many'    => 'baie',
	'boardvote_welcome'       => 'Welkom \'\'\'$1\'\'\'!',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 * @author Siebrand
 */
$messages['an'] = array(
	'boardvote'              => "Elezión d'o Consello d'Almenistrazión d'a Fundazión Wikimedia",
	'boardvote-desc'         => "[[meta:Board elections|Elezión d'o Consello d'Almenistrazión d'a Fundazión Wikimedia]]",
	'boardvote_entry'        => "* [[Special:Boardvote/vote|Botar]]
* [[Special:Boardvote/list|Amostrar os botos dica agora]]
* [[Special:Boardvote/dump|Bulcar o rechistro zifrato d'a elezión]]",
	'boardvote_intro'        => "<p>Biemplegato t'a segunda eslezión d'o Consello d'Almenistrazión d'a Fundazión Wikimedia. Somos esliyendo dos presonas que representen á la comunidat d'usuarios d'os procheutos de Wikimedia. Els aduyarán á determinar a endrezera futura que abrán de prener os procheutos de Wikimedia, endibidualment y como grupo, y representarán os intreses y procupazions <em>d'os usuarios</em> en o Consello d'Almenistrazión. Tamién dezidirán sobre as trazas de chenerar ingresos y sobre o emplego d'os diners aconseguius.</p>

<p>Leiga-se con ficazio as declarazions y respuestas d'os candidatos antes de botar. Toz os candidatos son usuarios respetaus, que han contrebuyiu con un tiempo y esfuerzo considerables ta fer d'istos procheutos un puesto acullidor, adedicato á aconseguir a libre destribuzión d'o conoximiento umán.</p>

<p>Bustet puede botar por tantos candidatos como quiera. O candidato con más botos en cada puesto será declarato o ganador de ixe puesto. Caso d'empazar á botos, se ferá una nueba eslezión entre os candidatos empazatos.</p>

<p>Ta más informazión, mire-se:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">Election FAQ</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">Candidates</a></li></ul>",
	'boardvote_intro_change' => "<p>Ya ha botato denantes. Manimenos puede cambiar o suyo boto si quiere
fendo serbir o formulario d'abaixo. Siñale por fabor as caxas amán de cada
candidato que quiera aprebar</p>",
	'boardvote_entered'      => "Grazias, o suyo boto s'ha rechistrato.

Si lo deseya, puede alzar os siguients detalles. O suyo rechistro de boto ye:

<pre>$1</pre>

S'ha zifrato con a clau publica d'os Almenistradors d'a Elezión:

<pre>$2</pre>

A bersión zifrata resultant ye a que sigue. S'amuestra publicament en [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Enta zaga]]",
	'boardvote_nosession'    => "No puedo identificar-le como usuario de Wikimedia. Por fabor, dentre ta una wiki an que pueda botar y baiga ta <nowiki>[[Special:Boardvote]]</nowiki>. Ta poder botar ha de tener una cuenta con un menimo de  $1 contrebuzions antes d'o $2, y con a primer edizión antes d'o $3.",
	'boardvote_notloggedin'  => "No ha enzetato garra sesión. Ta poder botar, ha d'usar una cuenta con un menimo de $1 contrebuzions feitas antes de $2, y con a primer edizión feita antes de $3.",
	'boardvote_notqualified' => "No cumple as condizions ta poder botar en ista elezión. Amenista aber feito $3 edizions antes d'o $2 y a suya primer edizión ha d'estar anterior á o $5.",
	'boardvote_novotes'      => 'Dengún no ha botato encara.',
	'boardvote_time'         => 'Tiempo',
	'boardvote_user'         => 'Usuario',
	'boardvote_edits'        => 'Edizions',
	'boardvote_days'         => 'Días',
	'boardvote_ip'           => 'Adreza IP',
	'boardvote_ua'           => "Representant de l'usuario",
	'boardvote_listintro'    => "<p>Esta ye una lista de toz os botos que s'han rechistrato
dica agora. $1 ta beyer os datos zifratos.</p>",
	'boardvote_dumplink'     => 'Faiga click aquí',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Nular',
	'boardvote_unstrike'     => 'Recuperar',
	'boardvote_needadmin'    => "Sólo os Almenistradors d'a Elezión puede fer ista operazión.",
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Elezions ta o Consello de Wikimedia</a>:  Botazión ubierta dica o 12 de chulio',
	'boardvote_notstarted'   => 'A botazión no ha prenzipiato encara',
	'boardvote_closed'       => "A botazión ya ye zarrata, mire-se [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En a pachina d'as elezions ta beyer os resultaus] luego.",
	'boardvote_edits_many'   => 'muitos',
	'group-boardvote'        => "Almenistradors d'a botazión",
	'group-boardvote-member' => "Almenistrador d'a botazión",
	'grouppage-boardvote'    => "{{ns:project}}:Almenistrador d'a botazión",
	'boardvote_blocked'      => 'Lo sentimos, pero ye estato bloqueyato en a wiki en que ye rechistrato. Os usuarios bloqueyatos no pueden botar.',
	'boardvote_welcome'      => "Biemplegau '''$1'''!",
	'go_to_board_vote'       => 'Elezions ta o Consello de Wikimedia 2008',
	'boardvote_redirecting'  => "Ta amillorar a seguranza y a transparenzia, a botazión s'está fendo en un serbidor esterno y controlato independientment.

Será endrezato enta este serbidor esterno en 20 segundos. [$1 Punche aquí] ta ir-ie agora.

Puestar que s'amuestre una albertenzia de seguranza sobre un zertificato no siñato..",
);

$messages['ang'] = array(
	'boardvote_user'          => 'Brūcend',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Siebrand
 */
$messages['ar'] = array(
	'boardvote'              => 'انتخابات مجلس أمناء ويكيميديا',
	'boardvote-desc'         => '[[meta:Board elections|انتخابات مجلس أمناء ويكيميديا]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|صوت]]
* [[Special:Boardvote/list|عرض الأصوات لغاية اليوم]]
* [[Special:Boardvote/dump|نسخة مخزنة من سجل الانتخابات]]',
	'boardvote_intro'        => '<p>مرحبا في الانتخابات الثانية لمجلس إدارة ويكيميديا. يتم التصويت على تمثيل مجتمع المساهمين في مشاريع ويكيميديا المختلفة بشخص واحد.هولاء سيقومون بتحديد التوجه المستقبلي لمشاريع ويكيميديا، بشكل شخصي أو بشكل مجموعة، و تمثيل <em>اهتماماتك</em>  وتوصيلها لمجلس الإدارة. وسيقومون أيضا بتحديد كيفية جلب المال وأوجه إنفاقه.</p>

<p>من فضلك قم بقراءة كلمات المرشحين وردودهم جيدا قبل التصويت.
 كل مستخدم منهم هو مستخدم جدير بالاحترام، بذل وقتا وجهدا كبيرا
لجعل هذه المشاريع مجتمع جيد يهدف إلى المشاركة والتوزيع الحر للمعرفة الإنسانية.</p>

<p>يمكنك التصويت للعدد الذي تريده من المرشحين. المستخدم الذي يحصل على
العدد الأكبر من الأصوات يفوز بالمنصب.
 في حالة التعادل، ستقام جولة إعادة.</p>

<p>من فضلك تذكر أنه لديك فقط صوت واحد.
 حتى لو كان عندك أكثر من 400 مشاركة على كذا مشروع، فهذا لا يعطيك الحق في التصويت مرتين. إذا أردت تغيير ترشيحك، قم بهذا عن طريق المشروع الذي صوت من خلاله.</p>

<p>لمعلومات أكثر، انظر:</p>
<ul>
<li><a href="http://meta.wikipedia.org/wiki/Election_FAQ_2008" class="external">أسئلة متكررة حول الانتخابات</a></li>
<li><a href="http://meta.wikipedia.org/wiki/Election_Candidates_2008" class="external">المرشحين</a></li>
</ul>',
	'boardvote_intro_change' => '<p>لقد قمت بالتصويت من قبل. إذا أردت تغيير صوتك، من الممكن عمل ذلك باستخدام الاستمارة التالية.
يرجى وضع إشارة في الصندوق بجانب المرشح الذي تود التصويت له.</p>',
	'boardvote_entered'      => 'شكرا لك، لقد تم اعتماد صوتك.

إذا كنت ترغب بحفظ المعلومات التالية، هي لسجل تصويتك:

<pre>$1</pre>
تم تشفيرها باستعمال مفتاح خاص بالمشرفين على الانتخابات:

<pre>$2</pre>

نتيجة التشفير تأتي في التالي، وسيتم حفظها وإظهارها في الصفحة [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]',
	'boardvote_nosession'    => 'لا يمكنني تحديد رقم المستخدم الخاص بك. من فضلك، ادخل للويكي الذي أنت مؤهل به واذهب إلى<nowiki>[[Special:Boardvote]]</nowiki>. يجب أن تستخدم حسابا لديه على الأقل $1 مساهمة قبل $2، والمساهمة الأولى قبل $3',
	'boardvote_notloggedin'  => 'لم تقم بتسجيل الدخول. لكي تستطيع التصويت، يجب أن يكون لديك حساب وأجريت $1 تعديل قبل $2، وتكون مساهمتك الأولى قبل $3.',
	'boardvote_notqualified' => 'أنت غير مؤهل للتصويت في هذه الانتخابات. يجب أن يكون لديك $3 مساهمة قبل $2، ومساهمتك الأولى يجب أن تكون قبل $5.',
	'boardvote_novotes'      => 'لم يقم أي شخص بالتصويت بعد.',
	'boardvote_time'         => 'الزمن',
	'boardvote_user'         => 'المستخدم',
	'boardvote_edits'        => 'التعديلات',
	'boardvote_days'         => 'الأيام',
	'boardvote_ip'           => 'الأيبي',
	'boardvote_ua'           => 'وسيط المستخدم',
	'boardvote_listintro'    => '<p>فيما يلي قائمة بكافة عمليات التصويت إلى هذه اللحظة. للبيانات المشفرة $1.</p>',
	'boardvote_dumplink'     => 'اضغط هنا',
	'boardvote_submit'       => 'موافق',
	'boardvote_strike'       => 'شطب',
	'boardvote_unstrike'     => 'احتساب',
	'boardvote_needadmin'    => 'فقط إداريو الانتخابات يمكنهم أن يقوموا بهذه العملية.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">انتخابات مجلس ويكيميديا</a>:  التصويت مفتوح حتى 12 يوليو',
	'boardvote_notstarted'   => 'لم يبدأ التصويت بعد',
	'boardvote_closed'       => 'تم غلق باب التصويت، انظر [http://meta.wikimedia.org/w/index.php?title=Election_results_2008/ar هذه الصفحة لمشاهدة النتائج]',
	'boardvote_edits_many'   => 'كثير',
	'group-boardvote'        => 'إداريو انتخابات المجلس',
	'group-boardvote-member' => 'إداري انتخابات المجلس',
	'grouppage-boardvote'    => '{{ns:project}}:إداري انتخابات المجلس',
	'boardvote_blocked'      => 'عذرا، لقد تم منعك في الويكي الذي أنت مسجل به. المستخدمون الممنوعون غير مسموح لهم بالتصويت.',
	'boardvote_welcome'      => "مرحبا '''$1'''!",
	'go_to_board_vote'       => 'انتخابات مجلس أمناء ويكيميديا 2008',
	'boardvote_redirecting'  => 'من أجل مزيد من السرية والشفافية، ندير الانتخابات من خلال خادم خارجي مستقل.

سيتم تحويلك لهذا الخادم الخارجي خلال 20 ثانية. [$1 اضغط هنا] للذهاب هناك الآن.

قد يتم عرض تحذير للسرية حول شهادة غير موقعة.',
);

/** Asturian (Asturianu)
 * @author SPQRobin
 * @author Esbardu
 * @author Siebrand
 */
$messages['ast'] = array(
	'boardvote'              => "Eleiciones pal Conseyu d'Alministración de Wikimedia (Board of Trustees)",
	'boardvote-desc'         => "[[meta:Board elections|Eleiciones pal Conseyu d'Alministración de Wikimedia]]",
	'boardvote_entry'        => "* [[Special:Boardvote/vote|Votar]]
* [[Special:Boardvote/list|Llista de votos hasta la fecha]]
* [[Special:Boardvote/dump|Volcáu de datos encriptaos d'eleición]]",
	'boardvote_intro'        => "<p>Bienveníu a la segunda eleición pal Conseyu d'Alministración de Wikimedia.
Tamos votando pa que dos persones representen a la comunidá d'usuarios de
los distintos proyectos Wikimedia. Ellos aidarán a determinar la direición
futura que los proyectos Wikimedia van siguir, en forma individual y en grupu,
y representen los <em>tos</em> intereses y esmoliciones hacia'l Conseyu d'Alministración.
Ellos decidirán les formes de xenerar ingresos y la destinación de los mesmos.</p>

<p>Por favor, llei con procuru les declaraciones y rempuestes de los candidatos
enantes de votar. Caún de los candidatos ye un usuariu respetáu que contribuyó
con munchu esfuerzu y tiempu pa facer d'estos proyectos un llugar afayadizu
col enfotu de distribuyir llibremente'l conocimientu humanu.</p>

<p>Pues votar por tolos candidatos que quieras. El candidatu con más votos en cada
posición sedrá declaráu'l ganador d'esa posición. En casu d'empate, llevaráse a
cabu una eleición de desempate.</p>

<p>Pa más información, ver:</p>
<ul><li><a href=\\\"http://meta.wikimedia.org/wiki/Board_elections/2008/Es\\\" class=\\\"external\\\">Entrugues frecuentes sobre la eleición (FAQ)</a></li>
<li><a href=\\\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Es\\\" class=\\\"external\\\">Candidatos</a></li></ul>",
	'boardvote_intro_change' => "<p>Yá votasti. Sicasí, pues camudar el to votu usando'l
formulariu d'embaxo. Por favor rellena les casielles d'al llau de cada candidatu
que quieras aprobar.</p>",
	'boardvote_entered'      => 'Gracies, el to votu quedó grabáu.

Si quies, pues guardar los siguientes detalles. El rexistru del to votu ye:

<pre>$1</pre>

Encriptóse cola clave pública de los Alministradores de la Eleición:

<pre>$2</pre>

A continuación amuésase la versión encriptada resultante. Va ser publicada en [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Volver]]',
	'boardvote_nosession'    => "Nun se pue determinar el to númeru d'identificación d'usuariu de Wikimedia. Por favor, identifícate na wiki onde tas rexistráu y vete a <nowiki>[[Special:Boardvote]]</nowiki>. Tienes qu'usar una cuenta con a lo menos $1 contribuciones enantes del $2, y con una primer edición enantes del $3.",
	'boardvote_notloggedin'  => "Nun tas identificáu. Pa votar tienes qu'usar una cuenta con a lo menos $1 contribuciones enantes del $2, y con una primer edición enantes del $3.",
	'boardvote_notqualified' => 'Nun cumples criterios pa votar nesta eleición. Necesites tener feches $3 ediciones enantes del $2, y que la to primer edición seya enantes del $5.',
	'boardvote_novotes'      => 'Naide votó tovía.',
	'boardvote_time'         => 'Hora',
	'boardvote_user'         => 'Usuariu',
	'boardvote_edits'        => 'Ediciones',
	'boardvote_days'         => 'Díes',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Representante del usuariu',
	'boardvote_listintro'    => '<p>Esta ye una llista de tolos votos rexistraos
hasta la fecha. $1 pa los datos encriptaos.</p>',
	'boardvote_dumplink'     => 'Calca equí',
	'boardvote_submit'       => 'Aceutar',
	'boardvote_strike'       => 'Tachar',
	'boardvote_unstrike'     => 'Destachar',
	'boardvote_needadmin'    => 'Esta operación namái la puen facer los alministradores de la eleición.',
	'boardvote_sitenotice'   => "<a href={{localurle:Special:Boardvote/vote}}\\\">Eleiciones al Conseyu d'Alministración de Wikimedia</a>: Votación abierta hasta'l 12 de xunetu",
	'boardvote_notstarted'   => 'La votación entá nun empecipió',
	'boardvote_closed'       => 'La votación ta zarrada, mira en breve [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En la páxina de resultaos de les eleiciones].',
	'boardvote_edits_many'   => 'munches',
	'group-boardvote'        => "Alministradores de votaciones pal Conseyu d'Alministración",
	'group-boardvote-member' => "Alministrador de votaciones pal Conseyu d'Alministración",
	'grouppage-boardvote'    => "{{ns:project}}:Alministrador de votaciones pal Conseyu d'Alministración",
	'boardvote_blocked'      => 'Sentímoslo, fuisti bloquiáu na to wiki. Los usuarios bloquiaos nun puen votar.',
	'boardvote_welcome'      => "¡Bienveníu '''$1'''!",
	'go_to_board_vote'       => "Eleiciones pal Conseyu d'Alministración de Wikimedia 2008",
	'boardvote_redirecting'  => "P'ameyorar la seguridá y tresparencia, tamos faciendo les votaciones nun
servidor esternu y controláu de forma independiente.

Vas ser redirixíu a esti servidor esternu en 20 segundos. [$1 Calca equí] pa dir agora.

Podría apaecer un avisu de seguridá tocante a un certificáu non firmáu.",
	'right-boardvote'        => 'Alministrar les eleiciones',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'boardvote_novotes'    => 'Metan ixam al brudar.',
	'boardvote_time'       => 'Ugal',
	'boardvote_user'       => 'Favesik',
	'boardvote_edits'      => 'Betaks yo',
	'boardvote_days'       => 'Viel se',
	'boardvote_ip'         => 'IP mane',
	'boardvote_dumplink'   => 'Batliz vulegal',
	'boardvote_submit'     => 'Tuená !',
	'boardvote_strike'     => 'Yastera',
	'boardvote_unstrike'   => 'Volyastera',
	'boardvote_needadmin'  => 'Anton liburaristusik baton roskur.',
	'boardvote_notstarted' => 'Brudaratoza men tir',
	'boardvote_edits_many' => 'konak',
	'boardvote_welcome'    => "'''$1''' til drumbaf !",
);

$messages['bcl'] = array(
	'boardvote_novotes'       => 'Mayô pang naboto.',
	'boardvote_time'          => 'Oras',
	'boardvote_user'          => 'Parágamit',
	'boardvote_edits'         => 'Mga hira',
	'boardvote_days'          => 'Aldaw',
	'boardvote_dumplink'      => 'Lagatik digdi',
	'boardvote_notstarted'    => 'Dai pa napoon an pirilian',
	'boardvote_edits_many'    => 'dakol',
	'boardvote_blocked'       => 'Despensa, pigbágat ka sa pagrehistrohan mong wiki. An mga pigbágat na parágamit dai pigtotogotan na makaboto.',
	'boardvote_welcome'       => 'Dagos \'\'\'$1\'\'\'!',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Spiritia
 * @author Borislav
 * @author Siebrand
 */
$messages['bg'] = array(
	'boardvote'              => 'Избори за борда на Фондация Уикимедия',
	'boardvote-desc'         => '[[meta:Board elections|Избори за борда на Уикимедия]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Гласуване]]
* [[Special:Boardvote/list|Списък на гласовете до ммента]]
* [[Special:Boardvote/dump|Извличане на криптирана информация]]',
	'boardvote_intro_change' => '<p>Вие вече сте гласували. Ако желаете, обаче, можете да промените вота си, като използвате формата по-долу. Отбележете кутийките срещу имената на всички кандидати, които одобрявате.</p>',
	'boardvote_entered'      => 'Благодарим ви, гласът ви беше отчетен.

Ако желаете, можете да си запишете следните детайли. Запис на гласуването:

<pre>$1</pre>

Гласуването ви беше криптирано с публичния ключ на Администраторите по гласуването:

<pre>$2</pre>

По-долу е включена и криптираната версия. Тя ще бъде публичнодостъпна на [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Обратно]]',
	'boardvote_nosession'    => 'Вашият потребителски номер в Уикимедия не можа да бъде определен.
Необходимо е да влезете в уикито, в което имате права за гласуване, и да отворите <nowiki>[[Special:Boardvote]]</nowiki>.
Необходимо е потребителската сметка да има поне $1 редакции преди $2 и първата редакция трябва да е била преди $3.',
	'boardvote_notloggedin'  => 'Не сте влезли в системата. За да гласувате, трябва да използвате сметка с най-малко $1 приноса към $2, като първата ви редакция е отпреди $3.',
	'boardvote_notqualified' => 'Не отговаряте на условията за гласуване в тези избори. Трябвало е да имате $3 редакции към $2, като първата ви редакция е отпреди $5.',
	'boardvote_novotes'      => 'Все още никой не е гласувал.',
	'boardvote_time'         => 'Време',
	'boardvote_user'         => 'Потребител',
	'boardvote_edits'        => 'Редакции',
	'boardvote_days'         => 'Дни',
	'boardvote_ip'           => 'IP',
	'boardvote_listintro'    => '<p>Тази страница съдържа списък на всички гласувания, отчетени към настоящия момент.
$1 за криптирани данни.</p>',
	'boardvote_dumplink'     => 'Тук',
	'boardvote_submit'       => 'Гласуване',
	'boardvote_strike'       => 'Задраскване',
	'boardvote_unstrike'     => 'Махане на задраскването',
	'boardvote_needadmin'    => 'Това действие може да бъде извършено само от администратори по гласуването',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Избори за борда на Уикимедия</a>:
Гласуването е отворено до 12 юли',
	'boardvote_notstarted'   => 'Гласуването все още не е започнало',
	'boardvote_closed'       => 'Гласуването е приключено, вижте [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En страницата с резултатите].',
	'boardvote_edits_many'   => 'много',
	'boardvote_blocked'      => 'Потребителската ви сметка е блокирана на уикито, от което гласувате. На блокираните потребители не се позволява да гласуват.',
	'boardvote_welcome'      => "Здравейте, '''$1'''!",
	'go_to_board_vote'       => 'Избори за борда на Уикимедия 2008',
	'boardvote_redirecting'  => 'За по-голяма сигурност и прозрачност, гласуването се провежда на външен и независим сървър.

След 20 секунди ще бъдете прехвърлени на външния сървър. [$1 Щракнете тук] за отиване сега.

Възможно е да бъде показано предупреждение за неподписан сертификат.',
	'right-boardvote'        => 'Администриране на изборите',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Zaheen
 * @author Siebrand
 */
$messages['bn'] = array(
	'boardvote'              => 'উইকিমিডিয়া বোর্ড অফ ট্রাস্টিজ-এর নির্বাচন',
	'boardvote-desc'         => '[[meta:Board elections|উইকিমিডিয়া ট্রাষ্টিবোর্ডের নির্বাচন]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|ভোট দিন]]
* [[Special:Boardvote/list|এ পর্যন্ত দেওয়া ভোটের তালিকা]]
* [[Special:Boardvote/dump|গুপ্তায়িত নির্বাচন রেকর্ড ডাম্প করা হোক]]',
	'boardvote_intro'        => '<p>উইকিমিডিয়া বোর্ড অফ ট্রাস্টিজের দ্বিতীয় নির্বাচনে আপনাদের স্বাগতম। আমরা নির্বাচন আয়োজন করছি যেখানে দুইজন ব্যক্তি নির্বাচিত হবেন এবং যারা বিভিন্ন উইকিমিডিয়া প্রকল্পসমূহে ব্যবহারকারী সম্প্রদায়ের প্রতিনিধিত্ব করবেন। উইকিমিডিয়া প্রকল্পগুলো ভবিষ্যতে কোন দিকে পা বাড়াবে তারা এ সিদ্ধান্ত নিতে সাহায্য করবেন, তারা তা করবেন ব্যক্তিগত ও দলগত ভাবে, এবং তারা বোর্ড অফ ট্রাস্টিজে <em>আপনার</em> আগ্রহ এবং দাবিগুলোর প্রতিনিধিত্ব করবেন। কিভাবে অর্থের যোগান এবং সংগৃহীত অর্থের যথার্থ প্রয়োগ করা যায় তা সিদ্ধান্ত নিবেন।</p>

<p>দয়াকরে ভোট দেওয়ার আগে প্রার্থীদের বক্তব্য এবং প্রশ্নের উত্তরসমূহ ভাল করে পড়ে নিন। প্রত্যেক প্রার্থী ব্যবহারকারীদের প্রতিনিধিত্ব করে, যারা ইতিমধ্যে তাদের মূল্যবান সময়, শ্রম এবং চেষ্টার দ্বারা  প্রকল্পসমূহে মানব জ্ঞানের উন্মুক্ত বিতরণের একটি সুন্দর পরিবেশ তৈরি করতে সাহায্য করেছেন।</p>

<p>আপনি ইচ্ছামত একাধিক প্রার্থীর জন্য ভোট দিতে পারেন। প্রত্যেক পদের জন্য প্রার্থী যিনি সবচেয়ে বেশি ভোট পাবেন তাকে ঐ পদের জন্য বিজয়ী ঘোষণা করা হবে। সমান সংখ্যক ভোট প্রাপ্ত হলে, চূড়ান্ত নির্বাচন অনুষ্ঠিত হবে।</p>

<p>আরও তথ্যের জন্য, দেখুন:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">নির্বাচন সংক্রান্ত প্রশ্নসমূহ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">প্রার্থীগণ</a></li></ul>',
	'boardvote_intro_change' => '<p>আপনি আগে ভোট দিয়েছে। আপনি নিচের ফরম থেকে আপনার ভোট পরিবর্তন করতে পারেন। আপনি যে প্রার্থীকে অনুমোদন করেন দয়াকরে প্রত্যেকের পাশের চেক বক্সে টিক দিন।</p>',
	'boardvote_entered'      => 'ধন্যবাদ, আপনার ভোট গন্য করা হয়েছে।

আপনি চাইলে, নিম্নের বিস্তারিত রেকর্ড করে রাখতে পারেন। আপনার ভোটিং রেকর্ড হল:

<pre>$1</pre>

এটি নির্বাচল প্রশাসকের পাবলিক কি (public key) দ্বারা এনক্রিপ্ট করা হয়েছে:

<pre>$2</pre>

নিম্নে এর এনক্রিপ্ট সংস্করণ রয়েছে। এটি [[Special:Boardvote/dump]] এ জনসমক্ষে দেখানো হবে।

<pre>$3</pre>

[[Special:Boardvote/entry|পেছনে]]',
	'boardvote_nosession'    => 'আপনার ব্যবহারকারী আইডি খুজে পাওয়া যাচ্ছে না। আপনি যে উইকি তে যোগ্যতাসম্পন্ন দয়াকরে সেখানে লগ-ইন করুন এবং <nowiki>[[Special:Boardvote]]</nowiki> তে যান। আপনাকে এমন অ্যাকাউন্ট ব্যবহার করতে হবে যাতে $2 এর আগে অন্তত $1 অবদান থাকতে হবে, এবং যা দ্বারা $3 এর আগে প্রথম সম্পাদনা করেছেন।',
	'boardvote_notloggedin'  => 'আপনি লগ-ইন করেননি। ভোট দিতে, আপনাকে অবশ্যই এমন অ্যাকাউন্ট ব্যবহার করতে হবে যা দ্বারা $2 এর আগে অন্তত $1 অবদান রাখা হয়েছে, এবং $3 এর আগে প্রথম সম্পাদনা করা হয়েছে।',
	'boardvote_notqualified' => 'আপনি এই নির্বাচনে ভোট দেওয়ার যোগ্যতাসম্পন্ন নন। আপনার $2 এর আগে $3 সম্পাদনা থাকতে হবে, এবং $5 এর আগে প্রথম সম্পাদনা করতে হবে।',
	'boardvote_novotes'      => 'কেউ এখনও ভোট দেয়নি।',
	'boardvote_time'         => 'সময়',
	'boardvote_user'         => 'ব্যবহারকারী',
	'boardvote_edits'        => 'সম্পাদনাসমূহ',
	'boardvote_days'         => 'দিন',
	'boardvote_ip'           => 'আইপি',
	'boardvote_ua'           => 'ব্যবহাকারী প্রতিনিধি',
	'boardvote_listintro'    => '<p>এটি এ তারিখ পর্যন্ত গ্রহণকৃত সমস্ত ভোটের তালিকা। এনক্রিপ্ট ডাটার জন্য $1।</p>',
	'boardvote_dumplink'     => 'এখানে ক্লিক করুন',
	'boardvote_submit'       => 'ঠিক আছে',
	'boardvote_strike'       => 'কেটে দিন',
	'boardvote_unstrike'     => 'কাটা উঠিয়ে নিন',
	'boardvote_needadmin'    => 'শুধু নির্বাচন প্রশাসকগণ এই কাজটি করতে পারবেন।',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">উইকিমিডিয়া বোর্ড নির্বাচন</a>:  ভোট গ্রহণ শুরু হবে ১২ই জুলাই',
	'boardvote_notstarted'   => 'এখনও ভোট গ্রহণ শুরু হয়নি',
	'boardvote_closed'       => 'ভোটগ্রহণ বর্তমানে বন্ধ আছে, [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En নির্বাচন পাতায় ফলাফল] সিঘ্রই দেখুন।',
	'boardvote_edits_many'   => 'অনেক',
	'group-boardvote'        => 'বোর্ড নির্বাচন প্রশাসকগণ',
	'group-boardvote-member' => 'বোর্ড নির্বাচন প্রশাসক',
	'grouppage-boardvote'    => '{{ns:project}}:বোর্ড নির্বাচন প্রশাসকগণ',
	'boardvote_blocked'      => 'দুঃখিত, আপনার নিবন্ধিত উইকিতে আপনাকে বাধা দেওয়া হয়েছে। বাধা প্রাপ্ত ব্যবহারকারীদের ভোট দেওয়ার অনুমোদন নাই।',
	'boardvote_welcome'      => "স্বাগতম '''$1'''!",
	'go_to_board_vote'       => 'উইকিমিডিয়া বোর্ড নির্বাচন ২০০৭',
	'boardvote_redirecting'  => 'নিরাপত্তা এবং স্বচ্ছতা বাড়াতে, আমরা ভোট কার্যক্রম অন্য একটি স্বাধীন সার্ভারে চালনা করছি।

আপনি ২০ সেকেন্ডের মধ্যেই অন্য সার্ভারে পুননির্দেশিত হবেন। [$1 এখানে ক্লিক করুন] সেখানে এখনই যাওয়ার জন্য।

অস্বাক্ষরিত সার্টিফিকেটের সম্পর্কিত একটি সতর্কিকরণ বার্তা দেখাতে পারে।',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Siebrand
 */
$messages['br'] = array(
	'boardvote'              => 'Dilennadeg Kuzul-merañ Diazezadur Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Dilennadeg da Guzul-merañ Diazezadur Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vot]]
* [[Special:Boardvote/list|Roll ar mouezhioù evit poent]]
* [[Special:Boardvote/dump|Enrolladennoù sifrennet]]',
	'boardvote_intro_change' => "<p>Mouezhiet hoc'h eus c'hoazh. Distreiñ war ho vot a c'hallit ober koulskoude en ur implijout ar furmskrid a-is. Mar plij, klikit war ar logoù a-dal da anv kement emstriver aprouet ganeoc'h.</p>",
	'boardvote_entered'      => "Trugarez vras, enrollet eo bet ho mouezh.

Mar karit e c'hallit enrollañ an elfennoù da-heul. Setu an titouroù evit ho vot :

<pre>$1</pre>

Sifrennet eo bet gant alc'hwez foran Dilennadeg ar Verourien :

<pre>$2</pre>

Setu ar stumm sifrennet anezhañ. Dispaket e vo ent foran war [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Kent]]",
	'boardvote_nosession'    => "N'hallan ket termeniñ hoc'h anv implijer war Wikimedia. Trugarez d'en em lugañ war ar wiki m'oc'h bet anvet ha kit da <nowiki>[[Special:Boardvote]]</nowiki>. Ret eo deoc'h implijout ur gont gant da nebeutañ $1 degasadenn a-raok an $2, ha gant ur c'hemm kentañ a-raok an $3.",
	'boardvote_notloggedin'  => "N'oc'h ket luget. Evit votiñ e rankit implijout ur gont gant da nebeutañ $1 degasadenn a-raok an $2 ha gant ur c'hemm kentañ a-raok an $3.",
	'boardvote_notqualified' => "N'hallit ket votiñ en dilennadeg-mañ. Ret eo deoc'h bezañ graet $3 kemm a-raok an $2 hag ho kemm kentañ a rank bezañ bet graet a-raok an $5",
	'boardvote_novotes'      => "Den n'eus votet c'hoazh.",
	'boardvote_time'         => 'Eur',
	'boardvote_user'         => 'Implijer',
	'boardvote_edits'        => 'Degasadennoù',
	'boardvote_days'         => 'Deiz',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Dileuriad an implijer',
	'boardvote_listintro'    => '<p>setu aze ur roll eus an holl votoù bet enrollet evit ar mare. $1 evit ar roadennoù sifrennet.</p>',
	'boardvote_dumplink'     => 'Klikañ amañ',
	'boardvote_submit'       => 'Mat eo',
	'boardvote_strike'       => 'Barrenniñ',
	'boardvote_unstrike'     => 'Divarrenniñ',
	'boardvote_needadmin'    => "An ober-mañ n'hall bezañ kaset da benn nemet gant merourien.",
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Dilennadeg Kuzul-merañ Wikimedia</a>:  Vot digor betek an 12 a viz Gouere',
	'boardvote_notstarted'   => "N'eo ket digor ar vot c'hoazh",
	'boardvote_closed'       => "Serr eo ar vot bremañ, gwelet [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En pajenn an dilennadeg evit an disoc'hoù] dizale.",
	'boardvote_edits_many'   => 'kalz',
	'group-boardvote'        => "Izili eus ar C'huzul-merañ a vot",
	'group-boardvote-member' => "Ezel eus ar c'huzul-merañ a vot",
	'grouppage-boardvote'    => '{{ns:project}} : ezel eus ar chuzul-merañ a vot',
	'boardvote_blocked'      => "Ho tigarez, stanket oc'h bet war ar wiki m'emaoc'h enrollet. N'eo ket aotreet an izili stanket da votiñ.",
	'boardvote_welcome'      => "Degemer mat '''$1'''!",
	'go_to_board_vote'       => 'Dilennadeg Kuzul-merañ Wikimedia 2008',
	'boardvote_redirecting'  => "Evit gwellaat ar surentez hag an dreuzwelusted eo bet aozet ar votadeg adal ur servijer kontrollet ha dizalc'h diavaez.

Adkaset e viot war-du ar servijer diavaez-se a-benn 20 eilenn. [$1 Klikañ amañ] evit mont di diouzhtu.

Ur c'hemenn surentez diwall a-zivout un testeni disin a c'hallo dont war wel marteze.",
);

/** Catalan (Català)
 * @author SMP
 * @author Siebrand
 */
$messages['ca'] = array(
	'boardvote'              => "Eleccions al Consell d'Administració de la Fundació Wikimedia",
	'boardvote-desc'         => "[[meta:Board elections|eleccions al Consell d'administració de Wikimedia]]",
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Voteu]]
* [[Special:Boardvote/list|Llista de vots emesos]]
* [[Special:Boardvote/dump|Dades encriptades de la votació]]',
	'boardvote_intro_change' => '<p>Ja heu votat. Podeu canviar el vostre vot usant el següent formulari. Marqueu aquells candidats que voleu aprovar.</p>',
	'boardvote_entered'      => "Gràcies, el vostre vot ha estat registrat. A continuació podeu comprovar-ne els detalls. Les dades del vostre vot són: <pre>$1</pre> Ha estat codificat mitjançant la clau pública de l'administració electoral de Wikimedia: <pre>$2</pre> La versió encriptada resultant apareix a continuació. Serà mostrada públicament a [[Special:Boardvote/dump]]. <pre>$3</pre> [[Special:Boardvote/entry|Torna]]",
	'boardvote_nosession'    => "No s'ha pogut determinar l'identificador del vostre compte Wikimedia. Si us plau, identifiqueu-vos al projecte en el que teniu dret a vot i aneu a <nowiki>[[Special:Boardvote]]</nowiki>. Recordeu que heu de tenir un mínim de $1 contribucions fetes abans del $2, i que la vostra primera edició ha de ser anterior al $3.",
	'boardvote_notloggedin'  => "No esteu identificats dins d'un compte d'usuari. Per a votar, heu de tenir un compte amb un mínim de $1 contribucions fetes abans del dia $2, de les quals la primera ha de ser anterior al $3.",
	'boardvote_notqualified' => "No podeu votar en aquestes eleccions. Els requisits per a votar són tenir un compte registrat amb un mínim de $3 edicions fetes abans del dia $2, i amb la primera d'aquestes edicions feta abans del $5.",
	'boardvote_novotes'      => 'Encara no ha votat ningú.',
	'boardvote_time'         => 'Temps',
	'boardvote_user'         => 'Usuari',
	'boardvote_edits'        => 'Edicions',
	'boardvote_days'         => 'Dies',
	'boardvote_ip'           => 'Adreça IP',
	'boardvote_ua'           => 'Agent usuari',
	'boardvote_listintro'    => '<p>Aquí hi ha la llista de tots els vots rebuts. $1 per les dades encriptades.</p>',
	'boardvote_dumplink'     => 'Cliqueu ací',
	'boardvote_submit'       => "D'acord",
	'boardvote_strike'       => 'Anul·la',
	'boardvote_unstrike'     => 'Recupera',
	'boardvote_needadmin'    => 'Només els administradors electorals poden fer aquesta operació.',
	'boardvote_notstarted'   => 'La votació encara no ha començat',
	'boardvote_closed'       => 'La votació ha acabat, a [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En la pàgina de les eleccions] hi trobareu els resultats.',
	'boardvote_blocked'      => 'Ho sentim, el vostre compte registrat ha estat blocat. Els usuaris blocats no tenen dret a vot.',
	'boardvote_welcome'      => "Benvingut '''$1'''!",
	'boardvote_redirecting'  => "Per millorar la seguretat i la transparència de la votació, aquesta es farà en un servidor independent extern.

D'aquí 20 segons sereu redirigit a aquesta pàgina. [$1 Cliqueu aquí] per anar-hi ara mateix.

Tingueu en compte que us pot aparèixer un avís de certificat de seguretat.",
);

$messages['cdo'] = array(
	'boardvote_time'          => "Sì-găng",
	'boardvote_user'          => "Ê̤ṳng-hô",
	'boardvote_edits'         => "Siŭ-gāi",
	'boardvote_dumplink'      => "Áik cŭ-uái",
	'boardvote_submit'        => 'Hō̤',
);

/** Chechen (Нохчийн)
 * @author SPQRobin
 */
$messages['ce'] = array(
	'boardvote_time' => 'Хан',
	'boardvote_days' => 'Денош',
);

$messages['co'] = array(
	'group-boardvote'         => 'Cummissione eletturale',
	'group-boardvote-member'  => 'Cummissariu eletturale',
	'grouppage-boardvote'     => '{{ns:project}}:Cummissarii eletturali',
);

/** Czech (Česky)
 * @author Matěj Grabovský
 * @author Danny B.
 */
$messages['cs'] = array(
	'boardvote'              => 'Volby do Správní rady nadace Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Volby do správní rady nadace Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Hlasovat]]
* [[Special:Boardvote/list|Seznam již hlasujících]]
* [[Special:Boardvote/dump||Šifrovaný záznam hlasování]]',
	'boardvote_intro'        => '
<blockquote>
<p>Vítejte u čtvrtých voleb do Správní rady nadace Wikimedia. Hlasováním bude zvoleni tři zástupci komunity uživatelů všech projektů nadace na dvouleté období do Správní rady. Tito zástupci budou pomáhat v rozhodování o budoucím směru rozvoje projektů, jednotlivě i jako skupina, a budou reprezentovat <em>vaše</em> zájmy a ohledy ve Správní radě. Budou také rozhodovat o způsobech získávání finančních prostředků a využívání získaných peněz.</p>

<p>Před hlasováním si laskavě důkladně přečtěte vyjádření kandidátů a jejich odpovědi na dotazy. Všichni kandidáti jsou respektovanými uživateli, kteří přispěli velkým množstvím času a úsilí při snaze učinit z projektů přátelské prostředí cílené na shromažďování a volné šíření znalostí lidstva.</p>

<p>Můžete hlasovat pro libovolně mnoho kandidátů. Tři kandidáti, kteří bude mít nejvíce hlasů, bude do této pozice zvoleni. V případě shody bude pořádáno druhé kolo hlasování.</p>

<p>Pamatujte, že můžete hlasovat jen jednou. I pokud máte více než 400 editací na více projektech, tak to neznamená, že máte právo volit dvakrát. Pokud se později rozhodnete změnit své hlasy, učiňte tak na projektu, kde jste hlasování provedl(a) předtím.</p>

<p>Další informace (anglicky a v dalších jazycích) najdete na následujících stránkách:</p> <ul><li><a href="http://meta.wikipedia.org/wiki/Board_elections/2008/FAQ" class="external">Často kladené otázky o hlasování</a></li> <li><a href="http://meta.wikipedia.org/wiki/Board_elections/2008/Candidates/cs" class="external">Kandidáti</a></li></ul>
</blockquote>',
	'boardvote_intro_change' => '<p>Již jste hlasoval(a). Můžete však svůj hlas změnit prostřednictvím níže uvedeného formuláře. Zaškrtněte čtvereček u každého kandidáta, kterého schvalujete.</p>',
	'boardvote_entered'      => 'Děkujeme vám, váš hlas byl zaznamenán.

Pokud si přejete, můžete si poznamenat podrobnosti. Váš záznam o hlasování je:

<pre>$1</pre>

Byl zašifrován s použitím veřejného klíče volebních úředníků:

<pre>$2</pre>

Výsledná šifrovaná podoba následuje. Bude veřejně dostupná na stránce [[Speciální:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Zpět]]',
	'boardvote_nosession'    => 'Nemohu určit vaše ID uživatele Wikimedie. Přihlaste se na wiki, kde splňujete podmínky a a přejděte na stránku <nowiki>[[Special:Boardvote]]</nowiki>. Musíte mít učet s alespoň $1 editacemi před $2 a první editací před $3.',
	'boardvote_notloggedin'  => 'Nejste přihlášen(a). Pro hlasování musíte použít účet s nejméně $1 příspěvky před $2 a první editací před $3.',
	'boardvote_notqualified' => 'Litujeme, nejste oprávněn(a) hlasovat v těchto volbách. Musíte mít $3 editací před datem $2 a vaše první editace musí být provedena před $5.',
	'boardvote_novotes'      => 'Nikdo dosud nehlasoval.',
	'boardvote_time'         => 'Datum a čas',
	'boardvote_user'         => 'Uživatel',
	'boardvote_edits'        => 'Editací',
	'boardvote_days'         => 'Dní',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Klient',
	'boardvote_listintro'    => '<p>Toto je seznam všech dosud zaznamenaných hlasů. Také můžete získat $1.</p>',
	'boardvote_dumplink'     => 'šifrovaný záznam hlasování',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Zaškrtnout',
	'boardvote_unstrike'     => 'Odškrtnout',
	'boardvote_needadmin'    => 'Pouze volební správci mohou provést tuto operaci.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Volby do správní rady nadace Wikimedia</a>:',
	'boardvote_notstarted'   => 'Volby ještě nezačaly.',
	'boardvote_closed'       => 'Volby skončily. Podívejte se na [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Cs výsledky].',
	'boardvote_edits_many'   => 'mnoho',
	'group-boardvote'        => 'Volební správci',
	'group-boardvote-member' => 'Volební správce',
	'grouppage-boardvote'    => '{{ns:project}}:Volební správce',
	'boardvote_blocked'      => 'Je nám líto, ale na své wiki jste zablokován. Zablokovaní uživatelé nemohou hlasovat.',
	'boardvote_welcome'      => "Vítáme uživatele '''$1'''!",
	'go_to_board_vote'       => 'Volby do správní rady Wikimedia 2008',
	'boardvote_redirecting'  => 'Pro lepší bezpečnost a transparentnost provozujeme volby na externím, nezávisle řízeném serveru.

Budete přesměrování na tuto externí stránku za 20 sekund. Okamžitě tam můžete přejít [$1 kliknutím sem].

Může se zobrazit bezpečnostní varování o nepodepsaném certifikátu.',
	'right-boardvote'        => 'Administrace voleb',
);

/** Danish (Dansk)
 * @author M.M.S.
 * @author Morten
 * @author Jon Harald Søby
 * @author Jan Friberg
 */
$messages['da'] = array(
	'boardvote'          => 'Valg af medlemmer til Wikimedias bestyrelse',
	'boardvote-desc'     => '[[meta:Board elections|Valg af medlemmer til Wikimedias bestyrelse]]',
	'boardvote_entry'    => '* [[Special:Boardvote/vote|Stem]]
* [[Special:Boardvote/list|Vis alle stemmer til dato]]
* [[Special:Boardvote/dump|Dump krypteret stemmefortegnelse]]',
	'boardvote_time'     => 'Tid',
	'boardvote_user'     => 'Bruger',
	'boardvote_edits'    => 'Redigeringer',
	'boardvote_days'     => 'Dage',
	'boardvote_ip'       => 'IP',
	'boardvote_dumplink' => 'Klik her',
	'boardvote_submit'   => 'OK',
	'boardvote_welcome'  => "Velkommen '''$1'''!",
);

$messages['de'] = array(
	'boardvote'               => "Wahlen zum Wikimedia-Kuratorium",
	'boardvote-desc'          => '[[meta:Board elections|Wahlen zum Wikimedia-Kuratorium]]',
	'boardvote_entry'         => "* [[meta:Board elections/2008/Candidates/de|Kandidatenvorstellungen]]
* [[{{ns:special}}:Boardvote/vote|Abstimmen]]
* [[{{ns:special}}:Boardvote/list|Bislang abgegebene Stimmen]]
* [[{{ns:special}}:Boardvote/dump|Verschlüsselte Wahleinträge]]",
	'boardvote_intro'         => '<blockquote>
<p>
Willkommen zur Wahl 2008 zum Wikimedia-Kuratorium, dem Verwaltungsorgan der Wikimedia-Foundation. Es wird ein Benutzer gewählt, um die Community der Wikimedianer in den verschiedenen Wikimedia-Projekten zu repräsentieren. Dieser wird für einen Zeitraum von zwei Jahren gewählt. Er wird dabei helfen, die künftige Richtung der Wikimedia-Projekte festzulegen, einzeln und als Gruppe und sie repräsentieren <em>deine</em> Interessen und Belange. Sie werden neben vielen anderen Dingen über die Einnahmen und Ausgaben entscheiden.
</p>

<p>Vor deiner Wahl lies bitte die Kandidatenvorstellungen und ihre Antworten auf Fragen. Jeder Kandidat ist ein respektierter Benutzer, der bereits beträchtliche Zeit aufgewendet hat, um den Projekten ein positives Umfeld für die freie Verbreitung menschlichen Wissens zu verschaffen.</p>

<p>Du darfst für so viele Kandidaten stimmen wie du möchtest. Die drei Kandidaten mit den meisten Stimmen werden die Sieger sein. Gibt es ein Unentschieden, wird es eine Stichwahl geben.</p>

<p>Bitte beachte, dass du nur aus einem Projekt heraus wählen darfst. Auch wenn du jeweils mehr als 400 Bearbeitungen in mehreren Projekten hast, so berechtigt dies nicht zu einer Doppelabstimmung. Wenn du deine Stimmabgabe ändern möchtest, wähle bitte erneut von dem Projekt, in dem du bereits vorher abgestimmt hast.</p>

<p>Weitere Informationen:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">Kuratoriumwahl 2008</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">Kandidaten</a></li></ul>",
</blockquote>',
	'boardvote_intro_change'  => "<p>Du hast bereits abgestimmt. Jedoch kannst du deine Stimme(n) mit dem folgenden Formular ändern. Markiere dazu die Kästchen der Kandidaten, die du befürwortest.</p>",
	'boardvote_entered'       => "Danke, deine Stimme wurde gespeichert.

Wenn du möchtest, kannst du folgende Details festhalten. Deine Abstimmungsaufzeichnung ist:

<pre>$1</pre>

Diese wurde mit dem Public Key der Wahladministratoren verschlüsselt:

<pre>$2</pre>

Die daraus folgende, verschlüsselte Version folgt unten. Sie wird öffentlich auf [[{{ns:special}}:Boardvote/dump]] angezeigt.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|Zurück]]",
	'boardvote_nosession'     => "Deine Wikimedia-Benutzer-ID kann nicht ermittelt werden. Bitte melde dich in dem Wiki an, in dem du zur Wahl zugelassen bist und gehe dort nach <nowiki>[[Special:Boardvote]]</nowiki>. 
	Wählen darf, dessen Benutzerkonto mindestens $1 Bearbeitungen vor dem $2 aufweist, und der mindestens $3 Bearbeitungen zwischen $4 und $5 getätigt hat.",
	'boardvote_notloggedin'   => "Du bist nicht eingeloggt. Um abstimmen zu können, musst du eingeloggt sein und ein Benutzerkonto verwenden, mit dem mindestens $1 Bearbeitungen vor dem $2 getätigt wurden, und mit dem mindestens $3 Bearbeitungen zwischen $4 und $5 getätigt wurden.",
	'boardvote_notqualified'  => "Du bist nicht berechtigt an dieser Wahl teilzunehmen. Um abstimmen zu können, musst du eingeloggt sein und ein Benutzerkonto verwenden, mit dem mindestens $1 Bearbeitungen vor dem $2 getätigt wurden, und mit dem mindestens $3 Bearbeitungen zwischen $4 und $5 getätigt wurden.",
	'boardvote_novotes'       => "Bislang hat noch keiner abgestimmt.",
	'boardvote_time'          => "Zeit",
	'boardvote_user'          => "Benutzer",
	'boardvote_edits'         => "Bearbeitungen",
	'boardvote_days'          => "Tage",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "User-Agent",
	'boardvote_listintro'     => "<p>Dies ist eine Liste aller Stimmen, die bisher abgegeben wurden. $1 für die verschlüsselten Daten.</p>",
	'boardvote_dumplink'      => "Hier klicken",
	'boardvote_submit'        => 'Abstimmen',
	'boardvote_strike'        => "Stimme streichen",
	'boardvote_unstrike'      => "Stimmstreichung zurücknehmen",
	'boardvote_needadmin'     => "Nur Wahladministratoren können diese Aktion durchführen.",
	'boardvote_sitenotice'    => "<a href=\"{{localurle:Special:Boardvote/vote}}\">Wahlen zum Wikimedia-Kuratorium</a>:  ",
	'boardvote_notstarted'    => 'Die Wahl hat noch nicht begonnen',
	'boardvote_closed'        => 'Die Wahl ist beendet. Das Ergebnis ist [http://meta.wikimedia.org/wiki/Board_elections/2008/Results im Meta-Wiki] einsehbar.',
	'group-boardvote'         => 'Wahl-Administratoren',
	'group-boardvote-member'  => 'Wahl-Administrator',
	'grouppage-boardvote'     => '{{ns:project}}:Wahl-Administrator',
	'boardvote_blocked'       => 'Entschuldigung, aber du wurdest in deinem Wiki gesperrt. Gesperrten Benutzern ist es nicht erlaubt an der Wahl teilzunehmen.',
	'boardvote_bot'           => 'Entschuldigung, aber dein Benutzerkonto ist im registrierten Wiki als Bot gekennzeichnet. Bots dürfen nicht abstimmen.',
	'boardvote_welcome'       => "Willkommen '''$1'''!",
	'go_to_board_vote'        => 'Wahlen zum Wikimedia-Kuratorium 2008',
	'boardvote_redirecting'   => 'Um eine erhöhte Sicherung und Transparenz zu gewährleisten, findet die Wahl auf einem externen, unabhängig kontrollierten Server statt.

Du wirst in 20 Sekunden zu diesem externen Server weitergeleitet. [$1 klicke hier], um sofort dorthin zu gelangen.

Eine Sicherheitswarnung über ein unsigniertes Zertifikat kann angezeigt werden.',

	'right-boardvote'         => 'Wahlen administrieren',
);

/** Zazaki (Zazaki)
 * @author SPQRobin
 */
$messages['diq'] = array(
	'boardvote_user' => 'Karber',

);

/** Ewe (Eʋegbe)
 * @author M.M.S.
 */
$messages['ee'] = array(
	'boardvote_user'    => 'Ezãla',
	'boardvote_welcome' => "Woezɔ loo '''$1'''!",
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Badseed
 * @author ZaDiak
 * @author MF-Warburg
 */
$messages['el'] = array(
	'boardvote'             => 'Εκλογές για το Διοιηκτικό Συμβούλιο του Ιδρύματος Wikimedia',
	'boardvote-desc'        => '[[meta:Board elections|Εκλογές για το Διοικητικό Συμβούλιο του Wikimedia]]',
	'boardvote_novotes'     => 'Κανείς δεν έχει ψηφίσει ακόμη.',
	'boardvote_time'        => 'Ώρα',
	'boardvote_user'        => 'Χρήστης',
	'boardvote_edits'       => 'Επεξεργασίες',
	'boardvote_days'        => 'Ημέρες',
	'boardvote_ip'          => 'IP',
	'boardvote_listintro'   => '<p>Αυτός είναι ένας κατάλογος με όλες τις ψηφοφορίες που έχουν καταγραφεί μέχρι σήμερα. $1 για τα κρυπτογραφημένα δεδομένα</p>',
	'boardvote_dumplink'    => 'Πάτησε εδώ',
	'boardvote_submit'      => 'Εντάξει',
	'boardvote_notstarted'  => 'Η ψηφοφορία δεν έχει αρχίσει ακόμη',
	'boardvote_edits_many'  => 'πολλές',
	'boardvote_welcome'     => "Καλώς ήλθατε '''$1'''!",
	'go_to_board_vote'      => 'Εκλογές για το Διοικητικό Συμβούλιο του Wikimedia 2008',
	'boardvote_redirecting' => 'Για καλύτερη ασφάλεια και διαφάνεια, η ψηφοφορία διεξάγεται σε εξωτερικό, ανεξάρτητα ελεγχόμενο server.

Θα μεταφερθείτε αυτόματα στον εξωτερικό αυτό server σε 20 δευτερόλεπτα. [$1 Πατήστε εδώ] για να μεταφερθείτε εκεί άμεσα.

Μπορεί να εμφανιστεί μια προειδοποίηση ασφάλειας για ένα μη επικυρωμένο πιστοποιητικό.',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 * @author Siebrand
 */
$messages['eo'] = array(
	'boardvote'              => 'Baloto por la "Administra Konsilantaro de Wikimedia Fondaĵo"',
	'boardvote-desc'         => '[[meta:Board elections|Baloto de "Administra Konsilantaro de Wikimedia Fondaĵo"]]',
	'boardvote_entry'        => '* [[Speciala:Boardvote/vote|Baloto]]
* [[Speciala:Boardvote/list|Ĝisdata balotlisto]]
* [[Speciala:Boardvote/dump|Ĉifrita elsxutaĵo de la esprimitaj voĉoj]]',
	'boardvote_intro'        => '<p>Bonvenon al la tria baloto por la Administra Konsilantaro de \'\'Wikimedia\'\'. Ni vocxdonas por anstatauxi unu demisiintan delegiton kiu reprezentu la uzantarojn de la diversaj projektoj de \'\'Wikimedia\'\' <!--- : la <strong>Reprezentanto de la Kontribuantaj Aktivaj Uzantoj</strong> kaj la <strong>Reprezentanto de la Volontulaj Uzantoj</strong> --->. Tiu helpos difini la estontan direkton, kiun la projektoj de Wikimedia sekvos, individue kaj grupe, kaj reprezentas <em>viajn</em> interesojn kaj zorgojn en la Administrantaro. la Konsilantaro decidas pri rimedoj por estigi enspezojn kaj la uzon de la kolektita mono. </p>

<p>Bonvolu atente legi la proklamojn kaj respondojn al demandoj de la <a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Eo" class="external">kandidatoj</a> antaux ol vocxodoni. Cxiu el la kandidatoj estas respektata uzanto, kiu kontribuis per konsiderinda tempo kaj peno por igi tiujn projektojn bonetosa medio dedicxita al disvolvigxo kaj libera disdono de homaj scioj.  </p>

<p>Vi povas vocxdoni por tiom da kandidatoj <!-- en cxiu kategorio--> kiom vi volas. La kandidato ricevinta la plej multajn vocxojn por la posteno estos deklarita la gajninto de la posteno. Okaze de egala nombro da vocxoj, dua baloto estos organizita.</p>

<p>Por pli da informoj bonvolu legi:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Eo" class="external">Plej oftaj demandoj pri la baloto</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Eo" class="external">Kandidatoj</a></li></ul>',
	'boardvote_intro_change' => '<p>Vi estas jam balotita. Tamen vi povas ŝanĝi vian baloton per la jena formularo. Bonvolu elekti la kvadratetojn apud la kanditatoj kiujn vi elektas.</p>',
	'boardvote_entered'      => 'Dankon! Via baloto estas registrita.

Se vi deziras, vi povas registri la sekvantajn detalojn. La registrajxo de via baloto estas: 

<pre>$1</pre>

Gxi estis encxifrita per la publika sxlosilo de la Balotadministrantoj:

<pre>$2</pre>

La rezultanta cxifrita versio sekvas. Gxi estos publike montrita sur [[Speciala:Boardvote/dump]]. 

<pre>$3</pre>

[[Speciala:Boardvote/entry|Reen]]',
	'boardvote_nosession'    => 'Via uzanto-identigo de WikiMedia ne estas determinebla. Bonvolu ensaluti la Vikion kie vi estas registrita kaj iri al <nowiki>[[Special:Boardvote]]</nowiki>. Vi devas uzi konton kun almenaŭ $1 kontribuoj antaŭ $2, kaj kun unua redakto antaŭ $3.',
	'boardvote_notloggedin'  => 'Vi ne estas ensalutinta. Voĉdoni vi povas nepre el uzula konto kun minimume $1 kontribuoj antaŭ $2, kies unua estu antaŭ $3.',
	'boardvote_notqualified' => 'Vi ne rajtas voĉdoni en ĉi baloto. Vi nepre estu redaktinta $3-foje antaŭ $2, vi redaktis $1-foje. Ankaŭ via unua redakto estis je $4, necesus ke estu antaŭ $5.',
	'boardvote_novotes'      => 'Neniu ne jam voĉdonis.',
	'boardvote_time'         => 'Tempo',
	'boardvote_user'         => 'Uzanto',
	'boardvote_edits'        => 'Redaktoj',
	'boardvote_days'         => 'Tagoj',
	'boardvote_ip'           => 'IP-adreso',
	'boardvote_ua'           => 'Retlegilo de la uzanto.',
	'boardvote_listintro'    => 'Jen listo de ĉiuj balotoj registritaj
ĝis nun. $1 por la ĉifritaj datumoj.',
	'boardvote_dumplink'     => 'Klaku ĉi tien',
	'boardvote_submit'       => 'Ek!',
	'boardvote_strike'       => 'Trastreku',
	'boardvote_unstrike'     => 'Maltrastreku',
	'boardvote_needadmin'    => 'Nur balotadministrantoj povas fari tiun agon.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Baloto por la Administra Konsilantaro de Wikimedia</a>: Baloto malfermita ĝis la 12-a de julio.',
	'boardvote_notstarted'   => 'Balotado ne jam komenciĝis',
	'boardvote_closed'       => 'La Balotado estas ŝlosita. Vidu la [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/eo rezultojn].',
	'boardvote_edits_many'   => 'multaj',
	'group-boardvote'        => 'Balotadministrantoj',
	'group-boardvote-member' => 'Balotadministranto',
	'grouppage-boardvote'    => '{{ns:project}}:Balotadministranto',
	'boardvote_blocked'      => 'Bedaŭrinde vi estis forbarita ĉe via registrita vikio. Forbaritaj uzantoj ne estas permesita voĉdoni.',
	'boardvote_welcome'      => "Bonvenon '''$1'''!",
	'go_to_board_vote'       => 'Baloto de Wikimedia Administrantaro',
	'boardvote_redirecting'  => 'Por pli bona sekureco kaj travidebleco, ni konduktas la voĉdonadon ĉe ekstera sendepende kontrolita servilo. 

Vi estos alidirektita al ĉi servilo en 20 sekundoj. [$1 Klaku ĉi tien] iri tie nun. 

Sekureca averto pri nevalida atesto eble estos montrata.',
	'right-boardvote'        => 'Administri balotadojn',
);

/** Spanish (Español)
 * @author Lin linao
 */
$messages['es'] = array(
	'boardvote'              => 'Elección del Consejo de Administración de la Fundación Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Elección del Consejo de Administración de la Fundación Wikimedia]]',
	'boardvote_intro'        => '<p>Bienvenido a la segunda elección del Consejo de Administración de la Fundación Wikimedia. Estamos votando por dos personas para que representen a la comunidad de usuarios de todos los proyectos de Wikimedia. Los dos candidatos elegidos yudarán a determinar la dirección que tomarán en el futuro los proyectos de Wikimedia, individualmente y como grupo, y representan <em>tus</em> intereses y preocupaciones ante el Consejo de Administración. Ellos decidirán la forma de obtener financiamiento y el destino del dinero recaudado.</p>

<p>Por favor, antes de votar lee cuidadosamente las afirmaciones de los candidatos y sus respuestas a las consultas. Cada uno de ellos es un usuario respetado, que ha contribuido con mucho tiempo y esfuerzo para crear en estos proyectos un buen ambiente agradable destinado a la promoción y libre distribución del conocimiento humano.</p>

<p>Puedes votar por tantos candidatos como desees. El candidato que acumule la mayor cantidad de votos en cada posición será considerado el ganador en esa posición. En caso de igual cantidad de votos en un puesto, se llevará a cabo una votación para desempatar.</p>

<p>Para más información, lee:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Election FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Candidates</a></li></ul>',
	'boardvote_notloggedin'  => 'No has iniciado sesión. Para votar, debes tener una cuenta con al menos $1 contribuciones antes del $2 y haber hecho la primera edición antes del $3.',
	'boardvote_notqualified' => 'No cumples con los requisitos para votar en esta elección. Necesitas tener $3 ediciones antes del $2 y haber hecho tu primera edición antes del $5.',
	'boardvote_user'         => 'Usuario',
	'boardvote_edits'        => 'Ediciones',
	'boardvote_ip'           => 'IP',
	'boardvote_dumplink'     => 'Haz click aquí',
	'boardvote_notstarted'   => 'La votación todavía no ha comenzado',
	'boardvote_welcome'      => "¡Bienvenido, '''$1'''!",
	'boardvote_redirecting'  => 'Para mejorar la seguridad y la transparencia, la votación se está realizando en un servidor externo y controlado independientemente.

Serás redireccionado a este servidor externo en 20 segundos. [$1 Haz click aquí] para ir ahora.

Un aviso de seguridad sobre un certificado no cifrado podría aparacer.',
);

/** Basque (Euskara)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['eu'] = array(
	'boardvote'              => 'Wikimediaren Administrazio Kontseiluaren aukeraketa',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Bozkatu]]
* [[Special:Boardvote/list|Orain arteko botuen zerrenda]]
* [[Special:Boardvote/dump|Erregistroa]]',
	'boardvote_intro_change' => '<p>Lehenago ere bozkatu duzu. Dena dela, beheko formularioa erabiliz zure botua aldatu dezakezu. Hautatu ezazu bozkatu nahi duzun aukera.</p>',
	'boardvote_entered'      => 'Mila esker, zure botua gorde egin da.

Nahi izanez gero, hurrengo datuak gorde ditzakezu. Zure botu erregistroa:

<pre>$1</pre>

Hauteskundeetako administratzaileen gako publikoarekin zifratu da:

<pre>$2</pre>.

Publikoki erakutsiko da [[Special:Boardvote/dump]] orrialdean.

<pre>$3</pre>

[[Special:Boardvote/entry|Atzera]]',
	'boardvote_notloggedin'  => 'Ez duzu saioa hasi. $2 baino lehenago $1 ekarpen izatea eta lehen aldaketa $3 baino lehenagokoa izatea beharrezkoa da bozkatu ahal izateko.',
	'boardvote_notqualified' => 'Ez duzu hauteskunde hauetan bozkatzeko baimenik. $2 baino lehenago $3 ekarpen eginda izatea beharrezkoa da, eta zuk $1 egin dituzu. Gainera, lehen aldaketa $4 egin zenuen, eta $5 baino lehenagokoa izan beharra dauka.',
	'boardvote_novotes'      => 'Oraindik ez du inork bozkatu.',
	'boardvote_time'         => 'Ordua',
	'boardvote_user'         => 'Erabiltzaile',
	'boardvote_edits'        => 'aldaketak',
	'boardvote_days'         => 'Egunak',
	'boardvote_ua'           => 'Erabiltzaile agentea',
	'boardvote_listintro'    => '<p>Honako hau orain arteko botu guztien zerrenda da. Zifratutako datuentzako $1.</p>',
	'boardvote_dumplink'     => 'Egin klik hemen',
	'boardvote_needadmin'    => 'Hauteskundeko administratzaileek baino ezin dute eragiketa hori burutu.',
	'boardvote_notstarted'   => 'Oraindik ez da bozketa hasi',
	'boardvote_closed'       => 'Bozketa itxita dago orain, ikus [[meta:Board elections/2008/en|hauteskundeen orrialdea]] emaitzak jakiteko.',
	'boardvote_edits_many'   => 'hainbat',
	'boardvote_welcome'      => "Ongi etorri '''$1'''!",
);

/** Extremaduran (Estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'boardvote_novotes'  => 'Naidi á votau entovia.',
	'boardvote_time'     => 'Ora',
	'boardvote_user'     => 'Usuáriu',
	'boardvote_edits'    => 'Eicionis',
	'boardvote_days'     => 'Dias',
	'boardvote_dumplink' => 'Pulsa aquí',
	'boardvote_welcome'  => "Bienviniu '''$1'''!",
);

/** فارسی (فارسی)
 * @author Huji
 */
$messages['fa'] = array(
	'boardvote'              => 'انتخابات هیئت امنای ویکی‌مدیا',
	'boardvote-desc'         => '[[meta:Board elections|انتخابات هیئت امنای ویکی‌مدیا]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|رای دادن]]
* [[Special:Boardvote/list|فهرست آرا تا کنون]]
* [[Special:Boardvote/dump|فهرست رمزنگاری‌شده آرا]]',
	'boardvote_intro'        => '<p>به دومین انتخابات هیئت امنای ویکی‌مدیا خوش آمدید.
ما برای انتخاب دو نفر به عنوان نماینده جامعه کاربران
پروژه‌های مختلف ویکی‌مدیا رای می‌دهیم. آن‌ها در تعیین جهت‌گیری‌های
بعدی پروژه‌های ویکی مدیا، به تنهایی و به عنوان یک گروه، کمک می‌کنند
و نمایندهٔ علایق و نگرانی‌های <em>شما</em> هستند. آن‌ها در مورد راه‌های کسب
درآمد و صرف آن برای ویکی‌مدیا تصمیم می‌گیرند.</p>

<p>لطفاً قبل از رای‌دادن اظهارات هر نماینده و پاسخ‌هایش به پرسش‌ها را
با دقت بخوانید. هر یک از نماینده‌ها یک فرد محترم است، که زمان و انرژی
زیادی را صرف تبدیل این پروژه‌ها به محیطی گرم که متعهد به جمع‌آوری و عرضه
آزاد دانش بشری هستند، کرده‌است.</p>

<p>شما می‌توانید به هر تعداد نامزد که می‌خواهید رای بدهید. نامزدی که
بیشترین آرا را برای هر مقام کسب کند برندهٔ آن مقام محسوب می‌شود. اگر
تعداد آرای چند نامزد برابر شد، رای‌گیری دیگری برای آن‌ها انجام خواهد شد.</p>

<p>برای اطلاع بیشتر، به نشانی‌های زیر مراجعه کنید:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">پرسش‌های متداول در مورد انتخابات</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">نامزدها</a></li></ul>',
	'boardvote_intro_change' => '<p>شما پیش از این رای داده‌اید. با این حال می‌توانید با استفاده از فرم زیر
رای خود را تغییر دهید. لطفاً جعبه کنار نام نامزدهایی که مورد قبول‌تان هستند
را علامت بزنید.</p>',
	'boardvote_entered'      => 'از شما متشکریم، رای شما ثبت شد.

اگر مایل باشید می‌توانید توضیحات زیر را برای بایگانی نگاه دارید. رای شما چنین ثبت شده‌است:

<pre>$1</pre>

این رای با کلید عمومی مدیران انتخابات که در زیر آمده رمزگذاری شده‌است:

<pre>$2</pre>

نتیجه رمزگذاری در ادامه آمده‌است. این نتیجه در [[Special:Boardvote/dump]] به طور عمومی
نمایش داده می‌شود.

<pre>$3</pre>

[[Special:Boardvote/entry|بازگشت]]',
	'boardvote_nosession'    => 'سیستم قادر به تشخیص نام کاربری شما در ویکی‌مدیا نیست. لطفاً در همان ویکی که در آن مجاز به رای دادن هستید وارد شوید، و به <nowiki>[[Special:Boardvote]]</nowiki> بروید. برای رای دادن شما باید از یک حساب کاربری استفاده کنید که حداقل $1 مشارکت تا پیش از $2 داشته باشد، و اولین ویرایش توسط ‌آن قبل از $3 انجام شده باشد.',
	'boardvote_notloggedin'  => 'شما به سیستم وارد نشده‌اید. برای رای دادن، شما باید از یک حساب کاربری با $1 مشارکت تا پیش از $2، که اولین ویرایش توسط آن قبل از $3 انجام شده باشد استفاده کنید.',
	'boardvote_notqualified' => 'شما مجاز به رای دادن نیستید. شما باید دست کم $3 ویرایش تا قبل از #2 انجام داده باشید، و اولین ویرایش شما قبل از $5 انجام شده باشد.',
	'boardvote_novotes'      => 'هنوز کسی رای نداده‌است.',
	'boardvote_time'         => 'زمان',
	'boardvote_user'         => 'کاربر',
	'boardvote_edits'        => 'ویرایش‌ها',
	'boardvote_days'         => 'روزها',
	'boardvote_ip'           => 'نشانی اینترنتی',
	'boardvote_ua'           => 'عامل کاربر (user agent)',
	'boardvote_listintro'    => '<p>این فهرستی از تمام آرای ثبت شده تا کنون است. برای آرای رمزگذاری شده $1.</p>',
	'boardvote_dumplink'     => 'این‌جا کلیک کنید',
	'boardvote_submit'       => 'تایید',
	'boardvote_strike'       => 'خط زدن',
	'boardvote_unstrike'     => 'از خط‌خوردگی در آوردن',
	'boardvote_needadmin'    => 'فقط مدیران انتخابات می‌توانند این کار را انجام بدهند.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">انتخابات هیئت امنای ویکی‌مدیا</a>:  رای‌گیری تا ۱۲ ژوئیه ادامه دارد',
	'boardvote_notstarted'   => 'رای‌گیری هنوز شروع نشده‌است',
	'boardvote_closed'       => 'رای‌گیری پایان یافته‌است، به زودی می‌توانید [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En صفحه نتایج رای‌گیری] را ببینید.',
	'boardvote_edits_many'   => 'خیلی',
	'group-boardvote'        => 'مدیران انتخابات هیئت امنا',
	'group-boardvote-member' => 'مدیر انتخابات هیئت امنا',
	'grouppage-boardvote'    => '{{ns:project}}:مدیر انتخابات هیئت امنا',
	'boardvote_blocked'      => 'متاسفانه دسترسی شما در ویکی مورد نظر قطع شده‌است. کاربرانی که دسترسی‌شان قطع شده اجازه رای دادن ندارند.',
	'boardvote_welcome'      => "'''$1''' خوش‌آمدید!",
	'go_to_board_vote'       => 'انتخابات سال ۲۰۰۷ هیئت امنای ویکی‌مدیا',
	'boardvote_redirecting'  => 'برای افزایش امینت و شفافیت، ما رای‌گیری را روی یک کارگزار
خارجی که به طور مستقل اداره می‌شود انجام می‌دهیم.

شما ظرف ۲۰ ثانیه به کارگزار خارجی هدایت می‌شود. برای این که الآن به آن‌جا بروید [$1 این‌جا کلیک کنید].

ممکن است یک پیام امنیتی در مورد گواهینامه غیر مجاز دریافت کنید.',
	'right-boardvote'        => 'مدیریت انتخابات',

);

/** Finnish (Suomi)
 * @author Crt
 * @author Nike
 * @author M.M.S.
 * @author Str4nd
 */
$messages['fi'] = array(
	'boardvote'              => 'Wikimedian johtokunnan valtuutettujen vaalit',
	'boardvote-desc'         => '[[meta:Board elections|Wikimedian johtokunnan valtuutettujen vaalit]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Äänestä]]
* [[Special:Boardvote/list|Listaa tähänastiset äänet]]
* [[Special:Boardvote/dump|Salattu äänestystallenne]]',
	'boardvote_intro'        => '<p>Tervetuloa Wikimedian johtokunnan vuoden 2008 vaaleihin. Äänestämme N:ää ihmistä edustamaan Wikimedian projektien yhteisöjä.
He määrittävät sen suunnan, jonka Wikimedian projektit tulevaisuudessa ottavat, ja edustavat <em>sinun</em> etujasi ja huoliasi johtokunnalle.
He päättävät tavoista hankkia varoja ja niiden käytöstä.</p>

<p>Lue ehdokkaiden lausunnot ja vastaukset kysymyksiin huolellisesti ennen äänestämistä.
Jokainen ehdokas on tunnettu ja arvostettu käyttäjä, joka on käyttänyt huomattavasti aikaa luodakseen näistä projekteista helppopääsyisen ympäristön vapaan tiedon levittämiseen.</p>

<p>Voit äänestää niin montaa ehdokasta kuin haluat.
Ehdokkaat, joilla on eniten ääniä jossakin asemassa, julistetaan voittajaksi.
Tasaäänten sattuessa, järjestetään uusintavaalit.</p>

<p>Lisätietoja:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Johtokuntavaalit 2008</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Ehdokkaat</a></li></ul>',
	'boardvote_intro_change' => '<p>Olet jo äänestänyt. Voit kuitenkin muuttaa ääntäsi käyttämällä alla olevaa lomaketta. Napsauta kunkin hyväksymäsi ehdokkaan vieressä olevaa ruutua.</p>',
	'boardvote_entered'      => 'Kiitos. Äänesi on tallennettu.

Mikäli haluat, voit kirjata itsellesi seuraavat tiedot. Äänestystietueesi on:

<pre>$1</pre>

Se on salattu vaalivirkailijoiden julkisella avaimella:

<pre>$2</pre>

Siitä muodostuu seuraava salattu muoto, joka on julkisesti näkyvillä sivulla [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Takaisin]]',
	'boardvote_nosession'    => 'Järjestelmä ei pysty määrittämään käyttäjätunnustasi. Kirjaudu sisään projektissa, jossa sinulla on äänioikeuteen riittävät ehdot täytetty ja mene sivulle <nowiki>[[Special:Boardvote]]</nowiki>. Sinun täytyy käyttää käyttäjätunnusta, jolla on ainakin $1 muokkausta ennen $2, ja vähintään $3 muokkausta aikavälillä $4 ja $5.',
	'boardvote_notloggedin'  => 'Et ole kirjautunut sisään. Äänestääksesi sinulla täytyy olla käyttäjätunnus, vähintään $1 muokkausta ennen $2 ja vähintään $3 muokkausta aikavälillä $4 ja $5.',
	'boardvote_notqualified' => 'Et ole äänioikeutettu näissä vaaleissa. Sinulla täytyy olla $1 muokkausta ennen $2, ja vähintään $3 muokkausta aikavälillä $4 ja $5.',
	'boardvote_novotes'      => 'Kukaan ei ole vielä äänestänyt.',
	'boardvote_time'         => 'Aika',
	'boardvote_user'         => 'Käyttäjä',
	'boardvote_edits'        => 'Muokkausta',
	'boardvote_days'         => 'Päivää',
	'boardvote_ip'           => 'IP-osoite',
	'boardvote_ua'           => 'Käyttäjäagentti',
	'boardvote_listintro'    => '<p>Tämä on lista kaikista äänistä, jotka on kirjattu tähän mennessä. $1 nähdäksesi tiedot salattuna.</p>',
	'boardvote_dumplink'     => 'Napsauta tästä',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Älä tue',
	'boardvote_unstrike'     => 'Palauta tuetuksi',
	'boardvote_needadmin'    => 'Vain vaalitarkastajat voivat suorittaa tämän toiminnon.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedian johtokunnan vaalit</a>: <!-- Äänestys avoinna FIXME asti -->',
	'boardvote_notstarted'   => 'Äänestys ei ole vielä alkanut',
	'boardvote_closed'       => 'Äänestys on päättynyt. Tulokset ovat [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En äänestyssivulla].',
	'boardvote_edits_many'   => 'monta',
	'group-boardvote'        => 'johtokuntavaalien järjestäjät',
	'group-boardvote-member' => 'johtokuntavaalien järjestäjä',
	'grouppage-boardvote'    => '{{ns:project}}:Johtokuntavaalien järjestäjä',
	'boardvote_blocked'      => 'Valitettavasti muokkausestosi projektissa johon olet kirjautunut estää sinua äänestämästä.',
	'boardvote_bot'          => 'Tunnuksellasi on botti-merkintä wikissä. Bottitunnus ei ole oikeutettu äänestämään.',
	'boardvote_welcome'      => "Tervetuloa '''$1'''!",
	'go_to_board_vote'       => 'Wikimedian johtokunnan valtuutettujen vaalit 2008',
);

$messages['fo'] = array(
	'boardvote_user'          => 'Brúkari',
	'boardvote_edits'         => 'Rættingar',
	'boardvote_days'          => 'Dagar',
	'boardvote_dumplink'      => 'Trýst her',
	'boardvote_welcome'       => 'Vælkomin \'\'\'$1\'\'\'!',
);

/** French (Français)
 * @author Grondin
 * @author Urhixidur
 */
$messages['fr'] = array(
	'boardvote'              => 'Élections au conseil d’administration de la Fondation Wikimedia',
	'boardvote-desc'         => "[[meta:Board elections|Élections au Conseil d'administration de Wikimedia]]",
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vote]]
* [[Special:Boardvote/list|Liste des votes enregistrés]]
* [[Special:Boardvote/dump|Enregistrements cryptés]]',
	'boardvote_intro'        => '
<p>Bienvenue aux troisièmes élections du conseil d\'administration de <i><a href="http://wikimediafoundation.org/wiki/Accueil" class="extiw" title="foundation:Accueil">Wikimedia Foundation Inc.</a></i>.
Nous votons pour une personne qui représentera la communauté des utilisateurs sur les différents projets Wikimedia.
Cette personne et le conseil d\'administration contribueront à orienter la direction de ces projets et représenteront <i>vos</i> intérêts et préoccupations auprès du conseil d\'administration.
Ils décideront des moyens de financement et de l\'affectation des fonds.</p>

<p>Lisez attentivement les déclarations des candidats et leurs réponses aux questions avant de voter.
Tous les candidats sont des utilisateurs respectés, qui ont donné beaucoup de temps et d\'effort pour faire de ces projets un endroit accueillant dédié au développement de la libre diffusion du savoir humain.</p>

<p>Vous pouvez voter pour autant de candidats que vous le souhaitez. Celui qui remportera le plus de voix sera déclaré élu pour le poste auquel il s\'est présenté. En cas de ballotage, il y aura un vote de départage.</p>

<p>Pour plus d\'information, voyez :</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Fr" class="extiw" title="meta:Election_FAQ_2008/Fr">FAQ sur les élections</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Fr" class="extiw" title="meta:Election_candidates_2008/Fr">Candidat-e-s</a></li></ul>
',
	'boardvote_intro_change' => '<p>Vous avez déjà voté. Cependant vous pouvez modifier votre vote en utilisant le formulaire ci-dessous. Merci de cocher les cases en regard de chaque candidat qui a votre support.</p></p>',
	'boardvote_entered'      => 'Merci, votre vote a été enregistré.

Si vous le souhaitez, vous pouvez enregistrer les détails suivants. Votre historique de vote est :

<pre>$1</pre>

Il a été crypté avec la clé publique des scrutateurs officiels pour l’élection :

<pre>$2</pre>

La version cryptée suit. Elle sera affichée publiquement sur [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Retour]]',
	'boardvote_nosession'    => 'Impossible de déterminer votre identifiant Wikimedia. Veuillez vous rendre sur votre wiki d’origine, vous enregistrer, et vous rendre sur la page <nowiki>[[Special:Boardvote]]</nowiki>. Vous devez posséder un compte avec au moins $1 contributions effectuées avant le $2, et avoir effectué votre première édition avant le $3.',
	'boardvote_notloggedin'  => 'Vous n’êtes actuellement pas authentifié. Pour voter, vous devez utiliser un compte comportant au moins $1 contributions avant le $2, et avoir effectuer au moins $3 contributions entre le $4 et le $5.',
	'boardvote_notqualified' => 'Vous ne répondez pas à l’une des conditions requises pour voter lors de ce scrutin. Il est nécessaire d’avoir $3 contributions avant le $2,  et vous en avez effectuées $1. En outre, votre première modification date du $4, et elle doit avoir été faite avant le $5.',
	'boardvote_novotes'      => 'Personne n’a encore voté.',
	'boardvote_time'         => 'Heure ',
	'boardvote_user'         => 'Utilisateur',
	'boardvote_edits'        => 'Modifications ',
	'boardvote_days'         => 'Jours',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Représentant de l’utilisateur',
	'boardvote_listintro'    => 'Liste des personnes ayant voté :<br /><br />',
	'boardvote_dumplink'     => 'Cliquez ici',
	'boardvote_submit'       => 'Valider',
	'boardvote_strike'       => 'biffer ',
	'boardvote_unstrike'     => 'débiffer ',
	'boardvote_needadmin'    => 'Seuls les administrateurs du vote peuvent effectuer cette opération.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Élections au conseil d’administration Wikimedia</a> :  Vote ouvert jusqu’au 12 juillet',
	'boardvote_notstarted'   => 'Le vote n’est pas encore commencé.',
	'boardvote_closed'       => 'L’élection est désormais close. Le résultat est proclamé sur [[meta:Election results 2008/fr|la page de résultats]] (fr).',
	'boardvote_edits_many'   => 'plusieurs ',
	'group-boardvote'        => 'Membres votants du conseil d’administration',
	'group-boardvote-member' => 'Membre votant du conseil d’administration',
	'grouppage-boardvote'    => '{{ns:project}}:membre votant du conseil d’administration',
	'boardvote_blocked'      => 'Désolé, mais vous avez été bloqué sur votre wiki d’origine. Les utilisateurs bloqués ne peuvent pas voter.',
	'boardvote_bot'          => 'Désolé, vous avez le statut de bot sur wiki enregistré. Les comptes de Bot ne sont autorisés à voter.',
	'boardvote_welcome'      => "Bienvenue '''$1'''!",
	'go_to_board_vote'       => 'Élections 2008 au Conseil d’administration de la Wikimedia',
	'boardvote_redirecting'  => 'Pour plus de transparence et sécurité le vote se déroule sur un serveur externe et indépendant.

Vous serez redirigé à ce serveur externe en 20 secondes. [$1 Cliquez ici] pour y aller maintenant.

Un avertissement concernant un certificat non signé sera peut-être affiché.',
	'right-boardvote'        => 'Administrer les élections',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 * @author Siebrand
 */
$messages['frp'] = array(
	'boardvote'              => 'Èlèccions u Consèly d’administracion de la Wikimedia Foundation',
	'boardvote-desc'         => '[[meta:Board elections|Èlèccions u Consèly d’administracion de la Wikimedia Foundation]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Voto/votacion]]
* [[Special:Boardvote/list|Lista des votos/de les votacions enregistrâs]]
* [[Special:Boardvote/dump|Enregistraments criptâs]]',
	'boardvote_intro'        => '<p>Benvegnua a les trêsiémes èlèccions du Consèly d’administracion de la <i><a href="http://wikimediafoundation.org/wiki/Accueil" class="extiw" title="Pâge de reçua en francês">Wikimedia Foundation Inc.</a></i>.
Nos votens por una pèrsona que reprèsenterat la comunôtât des utilisators sur los difèrents projèts Wikimedia.
Cela pèrsona et los ôtros membros votants du Consèly d’administracion contribueront a oriantar la dirèccion de celos projèts et reprèsenteront <i>voutros</i> entèrèts et soucis vers lo Consèly d’administracion.
Dècideront des moyens de financement et de l’afèctacion des fonds.</p>

<p>Liéséd bien les dècllaracions des candidats et lors rèponses a les quèstions devant que votar.
Tôs los candidats sont des utilisators rèspèctâs, qu’ont balyê tot plen de temps et d’èfôrt por fâre de celos projèts un endrêt recevent consacrâ u dèvelopament de l’abada difusion du savêr humen.</p>

<p>Vos pouede votar por atant de candidats que vos lo souhètâd. Celi que remporterat lo més de vouèx serat dècllarâ èlu por lo pôsto uquint s’est presentâ. En câs de balotâjo, y arat un voto/una votacion de dèpartâjo.</p>

<p>Por més d’enformacion, vêde :</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="extiw" title="« meta:Election FAQ 2008 » : pâge multilinga">FdeQ sur les èlèccions</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Fr" class="extiw" title="« meta:Election candidates 2008/Fr » : pâge en francês">Candidat(e)s</a></li></ul>',
	'boardvote_intro_change' => '<p>Vos éd ja votâ. Portant vos pouede modifiar
voutron voto/voutra votacion en utilisent lo formulèro ce-desot. Marci de marcar les câses en regârd de châque candidat qu’at voutron supôrt.</p>',
	'boardvote_entered'      => 'Marci, voutron voto/voutra votacion at étâ enregistrâ.

Se vos lo souhètâd, vos pouede enregistrar los dètalys siuvents. Voutron historico de voto/votacion est :

<pre>$1</pre>

Il at étâ criptâ avouéc la cllâf publica des scrutators oficièls por l’èlèccion :

<pre>$2</pre>

La vèrsion criptâ siut. Serat afichiê publicament dessus [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Retôrn]]',
	'boardvote_nosession'    => 'Empossiblo de dètèrmenar voutron identifiant Wikimedia. Volyéd tornar a voutron vouiqui d’origina, vos enregistrar, et pués alar a la pâge <nowiki>[[Special:Boardvote]]</nowiki>. Vos dête avêr un compto avouéc u muens $1 contribucions fêtes devant lo $2, et avêr fêt voutra premiére èdicion devant lo $3.',
	'boardvote_notloggedin'  => 'Orendrêt, vos éte pas ôtentifiâ. Por votar, vos dête utilisar un compto èyent u muens $1 contribucions devant lo $2, et que la premiére remonte u $3.',
	'boardvote_notqualified' => 'Vos rèpondéd pas a yona de les condicions requises por votar pendent ceta èlèccion. Fôt avêr $3 contribucions devant lo $2, et vos en éd fêtes $1. Et pués, voutra premiére modificacion dâte du $4, et dêt avêr étâ fêta devant lo $5.',
	'boardvote_novotes'      => 'Nion at adés votâ.',
	'boardvote_time'         => 'Hora',
	'boardvote_user'         => 'Utilisator',
	'boardvote_edits'        => 'Modificacions',
	'boardvote_days'         => 'Jorns',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Reprèsentent de l’utilisator',
	'boardvote_listintro'    => 'Lista de les gens èyent votâ :<br /><br />',
	'boardvote_dumplink'     => 'Clicâd ique',
	'boardvote_submit'       => 'D’acôrd',
	'boardvote_strike'       => 'Barrar',
	'boardvote_unstrike'     => 'Dèbarrar',
	'boardvote_needadmin'    => 'Solèts los administrators du voto/de la votacion pôvont fâre cela opèracion.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Èlèccions u Consèly d’administracion de la Wikimedia Foundation</a> : voto uvèrt/votacion uvèrta tant qu’u 12 de julyèt 2008.',
	'boardvote_notstarted'   => 'Lo voto/la votacion est p’oncor comenciê.',
	'boardvote_closed'       => 'Dês ora, l’èlèccion est cllôsa. Lo rèsultat est procllamâ sur la [[:meta:Board elections/2008/Results/fr|<span title="« Board elections/2008/Results/fr » : pâge en francês" style="text-decoration:none">pâge des rèsultats</span>]].',
	'boardvote_edits_many'   => 'plusiors',
	'group-boardvote'        => 'Membros votants du Consèly d’administracion',
	'group-boardvote-member' => 'Membro votant du Consèly d’administracion',
	'grouppage-boardvote'    => '{{ns:project}}:Membros votants du Consèly d’administracion',
	'boardvote_blocked'      => 'Dèsolâ, mas vos avéd étâ blocâ sur voutron vouiqui d’origina. Los utilisators blocâs pôvont pas votar.',
	'boardvote_welcome'      => "Benvegnua '''$1''' !",
	'go_to_board_vote'       => 'Èlèccions u Consèly d’administracion de la Wikimedia Foundation 2008',
	'boardvote_redirecting'  => 'Por més de transparence et de sècuritât lo voto/la votacion sè pâsse sur un sèrvior de defôr et endèpendent.

Vos seréd redirigiê vers cél sèrvior de defôr en 20 secondes. [$1 Clicâd ique] por y alar orendrêt.

Un avèrtissement regardent un cèrtificat pas signê serat pôt-étre afichiê.',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'boardvote_ip'       => 'IP',
	'boardvote_dumplink' => 'Frache culì',
	'boardvote_welcome'  => "Benvignût/Benvignude '''$1'''!",
);

/** Irish (Gaeilge)
 * @author SPQRobin
 */
$messages['ga'] = array(
	'boardvote_dumplink' => 'Gliogáil anseo',
);

/** Galician (Galego)
 * @author Toliño
 * @author Xosé
 * @author Alma
 */
$messages['gl'] = array(
	'boardvote'              => 'Eleccións dos Membros do Consello de Administración da Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Eleccións dos Membros do Consello de Administración da Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Votar]]
* [[Special:Boardvote/list|Listaxe de votos ata a data]]
* [[Special:Boardvote/dump|Crear un baleiramento do rexistro cifrado das eleccións]]',
	'boardvote_intro'        => '<p>Dámoslle a benvida ás Eleccións do Consello de Administración da Wikimedia do ano 2008. Estamos
a escoller unha persoa para que represente á comunidade de usuarios dos diversos
proxectos da Wikimedia. Axudarán a determinar a dirección futura
que tomarán os proxectos da Wikimedia, individualmente e como grupo, e
representarán os <em>seus</em> intereses e preocupacións no Consello de Administración. Decidirán
maneiras de xerar ingresos e o destino do diñeiro obtido.</p>

<p>Por favor, lea as presentacións dos candidatos e as súas respostas ás preguntas coidadosamente
antes de votar. Cada un dos candidatos é un usuario respectado, que lle ten dedicado
tempo e esforzo para facer que estes proxectos sexan uns lugares agradables
comprometidos coa construción e libre distribución do coñecemento humano.</p>

<p>Pode votar por tantos candidatos como queira. O
candidato con máis votos por cada posto será declarado gañador dese
posto. En caso de empate, celebrarase unha nova elección para ese posto.</p>

<p>Se quere máis información, visite:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Eleccións do Consello de Administración da Wikimedia do ano 2008</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Candidatos</a></li></ul>',
	'boardvote_intro_change' => '<p>Xa votou antes. Porén, pode cambiar
o sentido do seu voto usando o seguinte formulario. Por favor, sinale os cadriños contiguos a cada candidato a quen
vostede aprobe.</p>',
	'boardvote_entered'      => 'Grazas, o seu voto foi rexstrado.

Se quere, pode gardar os seguintes detalles. O seu rexistro de voto é:

<pre>$1</pre>

Foi cifrado coa chave pública dos Administradores das Eleccións:

<pre>$2</pre>

A versión seguinte, sen cifrado, é a que segue. Mostrarase publicamente en [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Voltar]]',
	'boardvote_nosession'    => 'Non se pode determinar o seu ID de usuario da Wikimedia.
Por favor, acceda ao sistema wiki no que cumpre os requisitos e vaia a <nowiki>[[Special:Boardvote]]</nowiki>.
Debe usar unha conta con, como mínimo, $1 edicións antes de $2, e ter feito, polo menos, $3 contribucións entre $4 e $5.',
	'boardvote_notloggedin'  => 'Non accedeu ao sistema.
Para votar, debe usar unha conta con, como mínimo, $1 edicións antes de $2, e ter feito, polo menos, $3 contribucións entre $4 e $5.',
	'boardvote_notqualified' => 'Non ten permisos para votar nestas eleccións.
Necesita ter feitas, como mínimo, $1 edicións antes de $2, e ter feito, polo menos, $3 contribucións entre $4 e $5.',
	'boardvote_novotes'      => 'Aínda non votou ninguén.',
	'boardvote_time'         => 'Hora',
	'boardvote_user'         => 'Usuario',
	'boardvote_edits'        => 'Edicións',
	'boardvote_days'         => 'Días',
	'boardvote_ip'           => 'Enderezo IP',
	'boardvote_ua'           => 'Axente de usuario',
	'boardvote_listintro'    => '<p>Esta é unha listaxe de todos os votos rexistrados até o momento.
$1 para ver os datos cifrados.</p>',
	'boardvote_dumplink'     => 'Prema aquí',
	'boardvote_submit'       => 'De acordo',
	'boardvote_strike'       => 'Riscar',
	'boardvote_unstrike'     => 'Retirar o riscado',
	'boardvote_needadmin'    => 'Esta operación só a poden realizar os administradores das eleccións.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Eleccións ao Consello de Administración da Wikimedia</a>:
Votación aberta até o 12 de xullo',
	'boardvote_notstarted'   => 'Aínda non comezou a votación',
	'boardvote_closed'       => 'Agora a votación está fechada, vexa axiña [http://meta.wikimedia.org/wiki/Board_elections/2008/Results a páxina das eleccións para comprobar os resultados].',
	'boardvote_edits_many'   => 'moitos',
	'group-boardvote'        => 'Administradores da votación ao Consello de Administración',
	'group-boardvote-member' => 'Administrador da votación ao Consello de Administración',
	'grouppage-boardvote'    => '{{ns:project}}:Administrador de eleccións ao Consello de Administración',
	'boardvote_blocked'      => 'Sentímolo, vostede foi bloqueado no wiki no que está rexistrado. Aos usuarios bloqueados non se lles permite votar.',
	'boardvote_bot'          => 'Sentímolo, está clasificado coma un bot no seu wiki. Non está permitido que as contas de bots voten.',
	'boardvote_welcome'      => "Reciba a nosa benvida, '''$1'''!",
	'go_to_board_vote'       => 'Eleccións do Consello de Administración da Wikimedia do ano 2008',
	'boardvote_redirecting'  => 'Para unha maior seguranza e transparencia, a votación realízase nun servidor externo con control independente.

Vai ser redirixido cara a este servidor externo en 20 segundos. [$1 Prema aquí] para ir a el agora.

Pode que lle apareza unha advertencia de seguranza acerca dun certificado sen asinar.',
	'right-boardvote'        => 'Administrar as eleccións',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'boardvote_time'     => 'Am',
	'boardvote_user'     => 'Ymmydeyr',
	'boardvote_days'     => 'Laaghyn',
	'boardvote_ip'       => 'IP',
	'boardvote_dumplink' => 'Click ayns shoh',
	'boardvote_submit'   => 'OK',
	'boardvote_welcome'  => "Failt ort '''$1'''!",
);

$messages['he'] = array(
	'boardvote'               => "בחירות לחבר הנאמנים של ויקימדיה",
	'boardvote-desc'          => '[[meta:Board elections|בחירות לחבר הנאמנים של ויקימדיה]]',
	'boardvote_entry'         => "* [[{{ns:special}}:Boardvote/vote|הצבעה]]
* [[{{ns:special}}:Boardvote/list|רשימת ההצבעות נכון לעכשיו]]
* [[{{ns:special}}:Boardvote/dump|ההעתק המוצפן של הבחירות]]",
	'boardvote_intro'         => "
<p>ברוכים הבאים לבחירות 2008 לחבר הנאמנים של קרן ויקימדיה. בהצבעה זו ייבחר נציג אחד אשר ייצג את הקהילה של משתמשי המיזמים השונים של ויקימדיה. הם יעזרו להחליט על כיוון התפתחותם העתידי של המיזמים השונים, כבודדים וכקבוצה, וייצגו את האינטרסים והדאגות <em>שלך</em> בחבר הנאמנים. הם יחליטו על הדרכים לבקשת תרומות ועל חלוקת המשאבים הכספיים.</p>

<p>אנא קראו בעיון, בטרם ההצבעה, את פרטי המועמדים ואת תשובותיהם לשאלות. כל אחד מן המועמדים והמועמדות הוא משתמש מוכר, אשר השקיע זמן רב ומאמץ להפוך את המיזמים הללו לסביבה נעימה המחויבת למטרת ההפצה חופשית של הידע האנושי.</p>

<p>באפשרותכם להצביע עבור מספר מועמדים. המועמדים עם מירב ההצבעות בכל עמדה יוכרזו כמנצחים בעמדה זו. במידה ויתקיים שיוויון בין מספר מועמדים, תתבצע הצבעה נוספת ביניהם.</p>

<p>למידע נוסף, ראו:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">הבחירות לחבר הנאמנים, 2008</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">המועמדים</a></li></ul>",
	'boardvote_intro_change'  => "<p>כבר הצבעתם בעבר. עם זאת, באפשרותכם לשנות את הצבעתכם באמצעות הטופס המצורף למטה. אנא סמנו את תיבת הסימון ליד כל אחד מהמועמדים המועדפים עליכם.</p>",
	'boardvote_entered'       => "תודה לכם, הצבעתכם נרשמה.

אם ברצונכם בכך, אתם יכולים לרשום את הפרטים הבאים. ההצבעה נרשמה כ:

<pre>$1</pre>

היא הוצפנה באמצעות המפתח הציבורי של ועדת הבחירות:

<pre>$2</pre>

תוצאות ההצפנה מופיעות בהמשך. הן גם תופענה בפומבי בקישור [[{{ns:special}}:Boardvote/entry]].

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|חזרה]]",
	'boardvote_nosession'     => "לא ניתן לוודא את מספר המשתמש שלכם בוויקימדיה.
אנא היכנסו לאתר ויקי שבו אתם רשאים להצביע, ואז היכנסו ל<nowiki>[[מיוחד:Boardvote]]</nowiki>.
עליכם להשתמש בחשבון ממנו ביצעתם לפחות $1 עריכות לפני $2, ולפחות $3 עריכות בין $4 ל־$5.",
	'boardvote_notloggedin'   => "אינכם רשומים לחשבון.
כדי להצביע, עליכם להשתמש בחשבון ממנו ביצעתם לפחות $1 עריכות לפני $2, ולפחות $3 עריכות בין $4 ל־$5.",
	'boardvote_notqualified'  => "אינכם רשאים להצביע בבחירות הללו.
היה עליכם לבצע $1 עריכות לפני $2, ולפחות $3 עריכות בין $4 ל־$5.",
	'boardvote_novotes'       => "איש לא הצביע עדיין.",
	'boardvote_time'          => "שעה",
	'boardvote_user'          => "משתמש",
	'boardvote_edits'         => "עריכות",
	'boardvote_days'          => "ימים",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "זיהוי הדפדפן",
	'boardvote_listintro'     => "<p>זוהי רשימה של כל ההצבעות שנרשמו עד כה. $1 כדי להגיע לנתונים המוצפנים.</p>",
	'boardvote_dumplink'      => "לחצו כאן",
	'boardvote_submit'        => 'הצבעה',
	'boardvote_strike'        => "גילוי",
	'boardvote_unstrike'      => "הסתרה",
	'boardvote_needadmin'     => "רק מנהלי הבחירות יכולים לבצע פעולה זו.",
	'boardvote_sitenotice'    => "<a href=\"{{localurle:{{ns:special}}:Boardvote/vote}}\">בחירות לחבר הנאמנים של ויקימדיה</a>: ההצבעה פתוחה עד 12 ביולי",
	'boardvote_notstarted'    => 'ההצבעה עדיין לא התחילה',
	'boardvote_closed'        => 'ההצבעה סגורה כעת, ראו את ב[http://meta.wikimedia.org/wiki/Board_elections/2008/Results הדף על תוצאות הבחירות] בקרוב.',
	'boardvote_edits_many'    => 'הרבה',
	'group-boardvote'         => 'מנהלי הבחירות לחבר הנאמנים',
	'group-boardvote-member'  => 'מנהל הבחירות לחבר הנאמנים',
	'grouppage-boardvote'     => '{{ns:project}}:מנהל הבחירות לחבר הנאמנים',
	'boardvote_blocked'       => 'מצטערים, אתם חסומים באתר הוויקי שאתם רשומים בו. משתמשים חסומים אינם יכולים להצביע.',
	'boardvote_bot'           => 'מצטערים, אתם רשומים כבוטים באתר הוויקי שאתם רשומים בו. חשבונות בוט אינם רשאים להצביע.',
	'boardvote_welcome'       => "ברוכים הבאים, '''$1'''!",
	'go_to_board_vote'        => 'בחירות לחבר הנאמנים של ויקימדיה, 2008',
	'boardvote_redirecting'   => 'לשם אבטחה ושקיפות רבות יותר בתהליך ההצבעה, אנו מריצים שרתים חיצוניים ובלתי תלויים.

בתוך 20 שניות תבוצע הפניה לשרת החיצוני הזה. [$1 לחצו כאן] כדי להגיע לשם עכשיו.

ייתכן שתוצג אזהרת אבטחה בגלל תעודת אישור בלתי חתומה.',

	'right-boardvote' => 'ניהול הבחירות',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 * @author Siebrand
 */
$messages['hi'] = array(
	'boardvote'              => 'विकिमीडिया विश्वस्त मंडल चुनाव',
	'boardvote-desc'         => '[[meta:Board elections|विकिमीडिया विश्वस्त मंडलका चुनाव]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|मत दें]]
* [[Special:Boardvote/list|आजतकके मतोंकी सूची]]
* [[Special:Boardvote/dump|एन्क्रिप्ट की हुई मतोंकी सूची डम्प करें]]',
	'boardvote_intro'        => '<p>विकिमीडिया बोर्ड ऑफ ट्रस्टीजके चुनाव में आपका स्वागत हैं। विविध
विकिमीडिया प्रकल्पोंमें सहभागी सदस्योंका प्रतिनिधित्व करने के लिये दो लोगोंको चुनने के लिये यह चुनाव हो रहा हैं।
वे विकिमीडिया प्रकल्पोंके भविष्यकालीन दिशा के लिये अकेले या ग्रुपमें विविध निर्णय लेंगे,
तथा <em>आपकी</em> पसंद और सवाल बोर्ड ऑफ ट्रस्टीज के सामने रखेंगे। वे पैसा कमाने के साधन धुंडने और खर्चे का
बँटवारा करने का भी काम करेंगे।</p>

<p>कृपया मत देने के पहले उम्मीदवारकी ज़ानकारी देख लें और साथ ही उसने दिये हुए सवालों के जवाब ध्यानपूर्वक जाँचे।
इसमेंसे हर उम्मीदवार एक आदरणीय सदस्य हैं जिसने पूरे मानवजात के लिये मुफ्त ज्ञान बाँटने के लिये
अपना बहुतसा समय और परिश्रम दिये हुए हैं।</p>

<p>आप कितनेभी उम्मीदवारोंको वोट दे सकते हैं। हर पोज़िशन के जिस उम्मीदवारको
सबसे ज्यादा वोट मिलेंगे उसे उस पोज़िशन का विजेता घोषित किया जायेगा।
अगर एक जगहके लिये एकसे ज्यादा उम्मीदवारोंको समान वोट मिलें तो उप-चुनाव लिया जायेगा।</p>

<p>कृपया अधिक ज़ानकारी के लिये देखें:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">चुनाव के बारे में प्राय: पूछे जाने वाले सवाल</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">उम्मीदवार</a></li></ul>',
	'boardvote_intro_change' => '<p>आपने पहले मत दिया हुआ हैं। अगर आप उसमें बदलाव करना चाहते हैं तो निचे दिये ढाँचे का इस्तेमाल करें। कृपया आप प्रमाणित करनेवाले उम्मीदवार के आगे दिये बक्सेमें सही का चिन्ह दें।</p>',
	'boardvote_entered'      => 'धन्यवाद, आपका वोट मिल गया हैं।

अगर आप चाहे तो नीचे दी गई ज़ानकारी नोट कर सकतें हैं। आपका वोट:

<pre>$1</pre>

वोट चुनाव प्रबंधकोंके निम्नलिखित पब्लिक कीसे एन्क्रीप्ट किया हुआ हैं:

<pre>$2</pre>

एन्क्रीप्ट करने के बाद का वोट नीचे दिया गया हैं। यह वोट [[Special:Boardvote/dump]] सभी देख सकतें हैं।

<pre>$3</pre>

[[Special:Boardvote/entry|पीछे जायें]]',
	'boardvote_nosession'    => 'आपका विकिमीडिया सदस्य क्रमांक मिल नहीं रहा।
कृपया अपने सदस्यनामसे जहां आपको वोट देनेकी अनुमति हैं, उस विकिपर लॉग इन करें, एवम्‌ <nowiki>[[Special:Boardvote]]</nowiki> यहां जायें।
आपको वोट देने के लिये कमसेकम $1 बदलाव $2 के पहले, और पहिला बदलाव $3 के पहले किये होने आवश्यक हैं।',
	'boardvote_notloggedin'  => 'आपने लॉग इन नहीं किया हैं।
वोट देने के लिये आपने कमसे कम $1 बदलाव $2 के पहले, और पहिला बदलाव $3 के पहले किये होने आवश्यक हैं।',
	'boardvote_notqualified' => 'आप यहांपर वोट देने के लिये योग्यता प्राप्त नहीं हैं।
वोट देने के लिये आपने कमसे कम $3 बदलाव $2 के पहले, और पहिला बदलाव $5 के पहले किये होने आवश्यक हैं।',
	'boardvote_novotes'      => 'अबतक किसीनेभी वोट नहीं किया हैं।',
	'boardvote_time'         => 'समय',
	'boardvote_user'         => 'सदस्य',
	'boardvote_edits'        => 'बदलाव',
	'boardvote_days'         => 'दिन',
	'boardvote_ip'           => 'आईपी',
	'boardvote_ua'           => 'सदस्य एजंट',
	'boardvote_listintro'    => '<p>यह आजतक मिले वोटोंकी सूची हैं। एन्क्रीप्टेड ज़ानकारी के लिये $1 देखें।</p>',
	'boardvote_dumplink'     => 'यहांपर क्लिक करें',
	'boardvote_submit'       => 'ओके',
	'boardvote_strike'       => 'कांटें',
	'boardvote_unstrike'     => 'कांट निकाल दें',
	'boardvote_needadmin'    => 'सिर्फ चुनाव प्रबंधक ही इस क्रिया को कर सकतें हैं।',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">विकिमीडिया बोर्ड चुनाव</a>:  जुलै १२ तक मतदान चलेगा',
	'boardvote_notstarted'   => 'मतदान अभीतक शुरू नहीं हुआ हैं',
	'boardvote_closed'       => 'मतदान अब बंद हो गया हैं। कृपया परिणामोंके लिये [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En चुनाव पृष्ठ] देखें।',
	'boardvote_edits_many'   => 'ज्यादा',
	'group-boardvote'        => 'बोर्ड वोट प्रबंधक',
	'group-boardvote-member' => 'बोर्ड वोट प्रबंधक',
	'grouppage-boardvote'    => '{{ns:project}}:बोर्ड वोट प्रबंधक',
	'boardvote_blocked'      => 'माफ किजीये, जिस विकिपर आप पंजीकृत हैं वहां आपको ब्लॉक कर दिया गया हैं। आप वोट नहीं दे सकतें।',
	'boardvote_welcome'      => "सुस्वागतम्‌ '''$1'''!",
	'go_to_board_vote'       => 'विकिमीडिया मंडल चुनाव २००७',
	'boardvote_redirecting'  => 'ज्यादा सुरक्षितता और पारदर्शक चुनावके लिये, यह चुनाव एक बाह्य, दुसरोंसे चलाये जाने वाले सर्वरपर लिया जा रहा हैं।

आपको उस बाह्य सर्वरपर २० सेंकंदोंमें पहूंचाया जायेगा। अभी उधर जाने के लिये [$1 यहां क्लिक करें]।

दस्तखत ना होने वाले सर्टिफिकेट्स के लिये सुरक्षा इशारा दिख सकता हैं।',
	'right-boardvote'        => 'चुनावोंका प्रबंधन करें',
);

/** Croatian (Hrvatski)
 * @author Dnik
 * @author SpeedyGonsales
 * @author Siebrand
 */
$messages['hr'] = array(
	'boardvote'              => 'Izbori za Odbor povjerenika Wikimedije',
	'boardvote-desc'         => '[[meta:Board elections|Izbori za Vijeće povjerenika Wikimedije]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Glas]]
* [[Special:Boardvote/list|Pregled glasova do sada]]
* [[Special:Boardvote/dump|Kreiraj šifrirani zapis o glasanju]]',
	'boardvote_intro'        => '<p>Dobro došli na druge izbore za Wikimedijin Odbor povjerenika. Glasamo
za dvije osobe koje će predstavljati zajednicu suradnika na različitim
projektima Wikimedije. Oni će pomoći odrediti budući smjer kojim će krenuti
projekti Wikimedije, pojedinačno i kao cjelina, i predstavljati
<em>Vaše</em> interese i zahtjeve u Odboru povjerenika. Oni će
odlučivati o načinima za stvaranje prihoda i dodjelu prikupljenog novca.</p>

<p>Molimo pažljivo pročitajte izjave kandidata i odgovore na upite prije
glasanja. Svaki od kandidata je cijenjeni suradnik, koji je dao zamjetno
vrijeme i trud kako bi od tih projekata napravio pristupačnu okolinu
posvećenu potrazi i slobodnom dijeljenju ljudskog znanja.</p>

<p>Možete glasati za onoliko kandidata koliko želite. Kandidat s najviše
glasova za svako mjesto će biti proglašen pobjednikom za to mjesto.
U slučaju izjednačenog rezultata, održat će se drugi krug izbora.</p>',
	'boardvote_intro_change' => '<p>Već ste glasali. Ipak, možete promijeniti vaš glas koristeći donji obrazac. Molimo
označite rubrike uz svakog kandidata kojeg podržavate.</p>',
	'boardvote_entered'      => 'Hvala, Vaš glas je zabilježen.

Ako želite, možete zabilježiti sljedeće detalje. Zapis vašeg glasanja je:

<pre>$1</pre>

Šifriran je pomoću javnog ključa administratora Izbora:

<pre>$2</pre>',
	'boardvote_nosession'    => 'Ne mogu odrediti Vaš identifikator (ID) na Wikimediji. Molimo, prijavite se na wiki na kojoj ste kvalificirani, i idite na <nowiki>[[Special:Boardvote]]</nowiki>. Morate koristiti račun s barem $1 doprinosa prije $2, a s prvom izmjenom prije $3.',
	'boardvote_notloggedin'  => 'Niste prijavljeni. Da glasate, trebate koristiti račun s bar $1 doprinosa prije $2, i s prvom izmjenom prije $3.',
	'boardvote_notqualified' => 'Niste kvalificirani da glasate u ovim izborima. Trebali ste napraviti $3 izmjena prije $2, a Vaša prva izmjena je morala biti prije $5.',
	'boardvote_novotes'      => 'Nitko još nije glasovao.',
	'boardvote_time'         => 'Vrijeme',
	'boardvote_user'         => 'Suradnik',
	'boardvote_edits'        => 'Broj uređivanja',
	'boardvote_days'         => 'Dana',
	'boardvote_ip'           => 'IP adresa',
	'boardvote_ua'           => 'Web klijent',
	'boardvote_listintro'    => '<p>Ovo je popis svih glasova koji su zabilježeni do sada.
$1 za šifrirane podatke.</p>',
	'boardvote_dumplink'     => 'Klikni ovdje',
	'boardvote_submit'       => 'Glasuj',
	'boardvote_strike'       => 'Poništi',
	'boardvote_unstrike'     => 'Poništi poništenje',
	'boardvote_needadmin'    => 'Samo administratori izbora mogu obaviti ovaj postupak',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Izbori za Odbor Wikimedije</a>:  Glasanje otvoreno do 12 srpnja',
	'boardvote_notstarted'   => 'Glasanje još nije započelo',
	'boardvote_closed'       => 'Glasanje je završeno, pogledajte uskoro [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En stranicu s rezultatima izbora].',
	'boardvote_edits_many'   => 'mnogi',
	'group-boardvote'        => 'Administratori izbora za Odbor',
	'group-boardvote-member' => 'Administrator izbora za Odbor',
	'grouppage-boardvote'    => '{{ns:project}}:Administrator izbora za Odbor',
	'boardvote_blocked'      => 'Nažalost, blokirani ste na Vašoj registriranoj wiki. Blokiranim suradnicima nije dozvoljeno glasanje.',
	'boardvote_welcome'      => "Dobrodošli '''$1'''!",
	'go_to_board_vote'       => 'Izbori za Odbor Wikimedije 2008.',
	'boardvote_redirecting'  => 'Radi poboljšane sigurnosti i transparentnosti, glasanje se odvija na vanjskom, neovisno kontroliranom serveru.

Bit ćete preusmjereni na taj vanjski server za 20 sekundi. [$1 Kliknite ovdje] da odete tamo odmah.

Moguće je da ćete vidjeti sigurnosno upozorenje o nepotpisanom certifikatu.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'boardvote'              => 'Wólby za kuratorij Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Wólby kuratorija Wikimedije]]',
	'boardvote_entry'        => '* [[{{ns:special}}:Boardvote/vote|Wothłosować]]
* [[{{ns:special}}:Boardvote/list|Dotal wotedate hłosy]]
* [[{{ns:special}}:Boardvote/dump|Zaklučowane wólbne zapiski]]',
	'boardvote_intro'        => '<blockquote>
<p>
Witaj k štwórtej wólbje do kuratorija Wikimedija. Wola so třo wužiwarjo, zo bychu zhromadźenstwo wužiwarjow we wšelakich projektach reprezentowali. Tući třo wužiwarjo wola so za dobu dweju lět. Budu pomhać, přichodny směr projektow Wikimedije postajić, jednotliwje a jako skupina a reprezentuja <em>twoje</em> zajimy a naležnosće. Budu nimo wjele druhich wěcow wo dochodach a wudawkach rozsudźeć.
</p>

<p>Přečitaj přošu před twojim hłosowanjom předstajenja kandidatow a jich wotmołwy na prašenja. Kóždy kandidat je respektowany wužiwar, kiž je hižo wjele časa a prócy inwestował, zo by projektam pozitiwnu wokolinu za swobodne rozšerjowanje čłowječeje wědy wutworił.</p>

<p>Směš za telko kandidatow hłosować, kaž chceš. Třo kandidaća z najwjace hłosami budu dobyćerjo. Jeli je jenaki staw, budu so rozsudne wólby wotměwać.</p>

<p>Prošu kedźbuj, zo směš jenož z jednoho projekta hłosować. Tež jeli maš přez 400 změnow we wjacorych projektach, njesměš dwójce hłosować. Jeli chceš swój hłós změnić, wothłosuj prošu znowa z toho projekta, w kotrymž sy hižo prjedy wothłosował.</p>

<p>Dalše informacije:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ/de" class="external">FAQ k wólbam</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/hsb" class="external">Kandidaća</a></li></ul>
</blockquote>',
	'boardvote_intro_change' => '<p>Sy hižo wothłosował. Ale móžeš swoje wothłosowanje ze slědowacym formularom změnić. Markěruj prošu kašćiki pódla kandidatow, za kotrychž hłosuješ.</p>',
	'boardvote_entered'      => 'Dźakujemy so ći, twój hłós bu zregistrowany.

Jeli chceš, móžeš slědowace podrobnosce zapisować. Twoje zregistrowane wothłosowanje je:

<pre>$1</pre>

Bu ze zjawnym klučom wólbnych administratorow zaklučowane:

<pre>$2</pre>

Slěduje nastata zaklučowana wersija. Budźe so na [[{{ns:special}}:Boardvote/dump]] zjawnje zwobraznjeć.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|Wróćo]]',
	'boardvote_nosession'    => 'Twój wužiwarski ID za Wikimediju njehodźi so zwěsćić. Prošu přizjew so w tym wikiju, w kotrymž sy za wólbu pušćeny a dźi tam k <nowiki>[[Special:Boardvote]]</nowiki>. Zo by wolić móhł, dyrbiš wužiwarske konto měć, kotrež znajmjeńša $1 přinoškow před $2 pokazuje, přeni přinošk dyrbi před $3 być.',
	'boardvote_notloggedin'  => 'Njejsy so přizjewił. Zo by wohthłosować móhł, dyrbiš přizjewjeny być a wužiwarske konto wužiwać, z kotrymž sy znajmjeńša $1 změnow před $2 činił a hdźež prěnja změna je před $3.',
	'boardvote_notqualified' => 'Njejsy woprawnjeny so na tutej wólbje wobdźělić. Dyrbiš $3 změnow před $2 činić a twoja prěnja změna dyrbi před $5 być.',
	'boardvote_novotes'      => 'Dotal nichtó njeje hłosował.',
	'boardvote_time'         => 'Čas',
	'boardvote_user'         => 'Wužiwar',
	'boardvote_edits'        => 'Změny',
	'boardvote_days'         => 'Dny',
	'boardvote_ip'           => 'IP-adresa',
	'boardvote_ua'           => 'Klient',
	'boardvote_listintro'    => '<p>To je lisćina wšěch hłosow, kotrež buchu dotal wotedate. $1 za zaklučowane daty.</p>',
	'boardvote_dumplink'     => 'Tu kliknyć',
	'boardvote_submit'       => 'Hłosować',
	'boardvote_strike'       => 'Hłos wušmórnyć',
	'boardvote_unstrike'     => 'Wušmórnjenje hłosu cofnyć',
	'boardvote_needadmin'    => 'Jenož wólbni administratorojo móža tutu akciju přewjesć.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wólby za kuratorij Wikimedija</a>:',
	'boardvote_notstarted'   => 'Wólba hišće njeje so započała.',
	'boardvote_closed'       => 'Wólba je zakónčena. Wuslědki móžeš na [http://meta.wikimedia.org/wiki/Election_results_2008/hsb na Wikimediji] widźeć.',
	'boardvote_edits_many'   => 'mnohe',
	'group-boardvote'        => 'Wólbni administratorojo',
	'group-boardvote-member' => 'Wólbny administrator',
	'grouppage-boardvote'    => '{{ns:project}}:Wólbny administrator',
	'boardvote_blocked'      => 'Wodaj, ale ty bu we swojim wikiju zablokowany. Zablokowani wužiwarjo njesmědźa so na wólbje wobdźělić.',
	'boardvote_welcome'      => "Witaj '''$1'''!",
	'go_to_board_vote'       => 'Wólby k Wikimedija-kuratorijej 2008',
	'boardvote_redirecting'  => 'Zo bychmy wěstosć a transparencu zaručili, přewjedźemy wólby na eksternym, njewotwisnje kontrolowanym serwerje. Sposrědkujemy tam w běhu 20 sekundow. [$1 Klikń tu] zo by so bjesporědnje tam dóstał. Je móžno, zo widźiš naprjedy wěstotne warnowanje wo njesignowanym certifikaće.',
);

/** Haitian (Kreyòl ayisyen)
 * @author Masterches
 * @author Siebrand
 */
$messages['ht'] = array(
	'boardvote'              => 'Eleksyon nan konsèy adminstrasyon fondasyon Wikimedya a',
	'boardvote-desc'         => '[[meta:Board elections|Eleksyon nan konsèy adminstrasyon fondasyon Wikimedya a]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vòt]]
* [[Special:Boardvote/list|Lis vòt anrejistre]]
* [[Special:Boardvote/dump|Anrejistreman kripte]]',
	'boardvote_intro'        => '<p>Byenvini nan twazyèm eleksyon konsèy <i><a href="http://wikimediafoundation.org/wiki/Accueil" class="extiw" title="foundation:Accueil">Fondasyon Wikimedya Inc.</a></i>.
N ap vote pou yon moun ki ap kapab reprezante kominote itilizatè a nan diferan pwojè Wikimedya yo.
Moun sa a epi konsèy administrasyon an ap kontribiye nan oryantasyon pou pwojè yo epitou ap reprezante <i>enterè nou yo</i> ak kesyon nou yo bò kote konsèy administrasyon an.
Yo ap deside de mwayen finansye yo ap chwazi epitou ki kote kòb al prale.</p>

<p>Li tout deklarasyon tout kandida yo epitou repons yo bay anvan ou vote pou yo.
Tout itilizatè sa yo se itilizatè epi respè, ki bay anpil tan ak efò pou fè pwojè sa yo bout, pou fè yo toujou rete lib, pou pwojè sa yo kapab difize pou tout moun.</p>

<p>Ou mèt vote pou tout kandida ou ta renmen bay vwa pa ou. Kandida an ki ap mennen plis vwa ke ap eli, chwazi pou travay li mande a. Si toutfwa li ta genyen ezitasyon an plizyè kandida, ke genyen yon vòt pou depataje yo.</p>

<p>Pou konnen plis, gade:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Fr" class="extiw" title="meta:Election_FAQ_2008/Fr">FAQ anlè eleksyon yo</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Fr" class="extiw" title="meta:Election_candidates_2008/Fr">kandida yo</a></li></ul>',
	'boardvote_intro_change' => '<p>Ou vote deja.Men ou kapab modifye vòt ou a, itilize fòmilè sa a anba. Koche kaz ki ap koresponn ak kandida ke ou ap soutni.</p></p>',
	'boardvote_entered'      => 'Mèsi, vòt ou an anrejistre.

Si ou vle, oukapab anrejistre detay sa yo. Istorik vòt ou an :

<pre>$1</pre>

Li kripte ak kle piblik obsèvatè ofisyèl pou eleksyon sa a:

<pre>$2</pre>

Vèsyon kripte an ap vini. Li ap afiche piblikman anlè [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Ritounen]]',
	'boardvote_nosession'    => 'Nou pa kapab idantifye nimewo ID pou kont ou an.
Souple, konekte ou nan wiki ou otorize vote, epi ale nan <nowiki>[[Special:Boardvote]]</nowiki>.
Ou dwèt genyen yon kont avèk minimòm $1 kontribisyon anvan $2, epitou avèk premye edisyon ou an anvan $3.',
	'boardvote_notloggedin'  => 'Ou poko idantifye nan sistèm an.Pou ou kapab vote, ou dwèt itilize yon kont ki kontribiyeplis ke $1 fwa anvan $2, epitou premye kontribisyon te fèt depi $3.',
	'boardvote_notqualified' => 'Ou pa kapab vote nan eleksyon sa.
Ou dwèt fè $3 edisyon anvan $2, epitou premye edisyon ou an dwèt fèt anvan $5.',
	'boardvote_novotes'      => 'Pon moun poko vote.',
	'boardvote_time'         => 'Tan, lè li ye',
	'boardvote_user'         => 'Itilizatè',
	'boardvote_edits'        => 'Modifikasyon yo',
	'boardvote_days'         => 'Jou yo',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Reprezantan itilizatè sa a',
	'boardvote_listintro'    => 'Lis moun ki vote :<br /><br />
$1 pou done yo ki pa kripte, sekirize.</p>',
	'boardvote_dumplink'     => 'Klike anlè lyen sa',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Elimine',
	'boardvote_unstrike'     => 'Pa elimine',
	'boardvote_needadmin'    => 'Administratè yo sèlman kapab fè operasyon sa',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Eleksyon nan konsèy administrasyon fondasyon Wikimedya</a> :  Vòt ouvè jiska 12 jiyè',
	'boardvote_notstarted'   => 'Vòt an poko koumanse.',
	'boardvote_closed'       => 'Eleksyon an fini. Rezilta a make anlè [[meta:Election results 2008/fr|paj rezilta yo]] (ht).',
	'boardvote_edits_many'   => 'pliszyè',
	'group-boardvote'        => 'Tablo pou vòt administratè yo',
	'group-boardvote-member' => 'Tablo pou vòt administratè a',
	'grouppage-boardvote'    => '{{ns:project}}:Tablo pou vòt administratè a',
	'boardvote_blocked'      => 'Eskize nou, kont ou an bloke nan wiki ou te anrejistre w. Itilizatè yo ki bloke pa otorize vote.',
	'boardvote_welcome'      => "Byenvini '''$1'''!",
	'go_to_board_vote'       => 'Konsèy administrasyon pou eleksyon Wikimedya 2008',
	'boardvote_redirecting'  => 'Pou rann sekirite ak transparans pi wo, n ap mennen vòt an sou yon sèvè dewò ki kontrole ak endepandans.
W ap dirije nan sèvè dewò sa nan 20 segonn. [$1 Klike isit] pou ale nan paj an kounye a.',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author KossuthRad
 * @author Tgr
 * @author Dorgan
 */
$messages['hu'] = array(
	'boardvote'              => 'Wikimedia Kuratórium választás',
	'boardvote-desc'         => '[[meta:Board elections|Wikimedia Kuratórium választás]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Szavazz!]]
* [[Special:Boardvote/list|Szavazatok listája]]
* [[Special:Boardvote/dump|Választási jegyzőkönyv titkosított dump-ja]]',
	'boardvote_intro'        => '<p>Üdvözlünk a 2008-as Wikimedia Kuratórium-választáson! Ezúttal egy
embert választunk, hogy képviselje a különböző Wikimedia projektek
közösségeit. A kuratórium tagjai meghatározó szerepet kapnak
annak eldöntésében, hogy a Wikimedia projektek milyen irányban fejlődjenek
tovább (egyenként, illetve összességükben), illetve hogy képviseljék a
<em>Te</em> érdekeidet, és továbbítsák véleményed a kuratórium felé.
Feladatuk dönteni a bevételi források felkutatásáról és igénybevételéről,
és a befolyt összegek felhasználásáról.</p>

<p>Kérjük, szavazás előtt alaposan olvasd át a jelentkezők bemutatkozó lapjait,
és a kérdéseitekre adott válaszait. A jelöltek a legmegbecsültebb szerkesztőink
közül kerülnek ki, akik idejük jelentős részének feláldozásával és nagyfokú
erőfeszítéssekkel tették a Wikimedia projekteket az emberiség tudásának minden
eddiginél szabadabb, gazdagabb tárházává.</p>

<p>Tetszőleges számú jelöltre szavazhatsz, minden betöltendő pozíciót az arra
jelentkezők közül a legtöbb szavazatot birtokló jelölt fog kapni. Holtverseny
esetén rendkívüli választást írunk ki.</p>

<p>További részleteket a következő helyeken tudhatsz meg:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">2008-as kuratóriumi választások</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Jelöltek</a></li></ul>',
	'boardvote_intro_change' => '<p>Már szavaztál. A szavazatodat módosíthatod a lenti űrlap kitöltésével. Válaszd ki azokat a jelölteket, akikre szavazni szeretnél.</p>',
	'boardvote_entered'      => 'Köszönjük, a szavazatodat rögzítettük.

Ha szeretnéd, rögzítheted a következő részleteket. A letárolt szavazatod:

<pre>$1</pre>

A szavazat titkosításra került a Választási Adminisztrátorok nyilvános kulcsával:

<pre>$2</pre>

A titkosított változat (nyilvánosan elérhető [[Special:Boardvote/dump|itt]]):

<pre>$3</pre>

[[Special:Boardvote/entry|Vissza]]',
	'boardvote_nosession'    => 'Nem sikerült meghatározni a Wikimediás felhasználói azonosítódat.
Jelentkezz be abba a wikibe, ahonnan szavazhatsz, majd menj a <nowiki>[[Special:Boardvote]]</nowiki> lapra.
Csak akkor szavazhatsz, ha $2 előtt már volt $1, és az első szerkesztésedet $3 előtt végezted.',
	'boardvote_notloggedin'  => 'Nem vagy bejelentkezve.
Hogy szavazhass, be kell jelentkezned egy olyan fiókkal, amivel $2 előtt minimum $1 szerkesztést végeztél, valamint a fiókhoz kapcsolódó első szerkesztésed $3 előtt volt.',
	'boardvote_notqualified' => 'Sajnáljuk, de még nincs jogosultságod szavazni ezek a választáson.
Csak az szavazhat, aki $2 előtt legalább $3 szerkesztést végzett, valamint a legelső szerkesztését $5 előtt végezte.',
	'boardvote_novotes'      => 'Még senki sem szavazott.',
	'boardvote_time'         => 'szavazás ideje',
	'boardvote_user'         => 'felhasználó',
	'boardvote_edits'        => 'szerkesztések száma',
	'boardvote_days'         => 'Napok',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'User agent',
	'boardvote_listintro'    => '<p>Itt olvasható az összes, mostanáig leadott szavazat.
A titkosított adatokhoz $1.</p>',
	'boardvote_dumplink'     => 'kattints ide',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Tiltakozás',
	'boardvote_unstrike'     => 'Érvényesítés',
	'boardvote_needadmin'    => 'Csak a választás vezetői tudják végrehajtani ezt a műveletet.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedia Kuratórium választás</a>:  július 12-ig lehet szavazni',
	'boardvote_notstarted'   => 'A szavazás még nem indult el.',
	'boardvote_closed'       => 'A szavazás már lezárult, az eredmények hamarosan [http://meta.wikimedia.org/wiki/Board_elections/2008/Results itt].',
	'boardvote_edits_many'   => 'Sok',
	'group-boardvote'        => 'választási adminisztrátorok',
	'group-boardvote-member' => 'Választási adminisztrátor',
	'grouppage-boardvote'    => '{{ns:project}}:Választási adminisztrátor',
	'boardvote_blocked'      => 'Sajnáljuk, de blokkolva vagy. Blokkolt felhasználóknak nincsen lehetőségük szavazásra.',
	'boardvote_bot'          => 'Sajnáljuk, botként vagy regisztrálva a wikidben. Botok nem szavazhatnak.',
	'boardvote_welcome'      => "Üdvözlünk, '''$1'''!",
	'go_to_board_vote'       => 'Wikimedia Kuratórium választás 2008',
	'boardvote_redirecting'  => 'A nagyobb biztonságért és jobb átláthatóságért egy külső, független
szerveren bonyolítjuk a szavazást.

20 másodpercen belül át leszel irányítva a külső szerverre. [$1 Kattints ide], ha nem szeretnél várni.

Az aláíratlan tanúsítványú oldallal kapcsolatban egy biztonsági figyelmezetés jelenhet meg.',
	'right-boardvote'        => 'választások irányítása',
);

/** Interlingua (Interlingua)
 * @author Malafaya
 */
$messages['ia'] = array(
	'boardvote_user' => 'Usator',
	'boardvote_days' => 'Dies',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 * @author Meursault2004
 */
$messages['id'] = array(
	'boardvote'              => 'Pemilihan Anggota Dewan Kepercayaan Yayasan Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Pemilihan Dewan Kepercayaan Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Berikan suara]]
* [[Special:Boardvote/list|Daftar suara hingga saat ini]]
* [[Special:Boardvote/dump|Data pemilihan terenkripsi]]',
	'boardvote_intro'        => '
<p>Selamat datang di pemilihan keempat Dewan Kepercayaan Wikimedia, otoritas pemerintahan bagi Yayasan Wikimedia. Kita akan memilih tiga orang untuk mewakili komunitas pengguna untuk berbagai proyek Wikimedia. Tiga orang terpilih tersebut akan bertugas selama dua tahun di Dewan Kepercayaan. Mereka akan membantu menentukan arah ke depan dari proyek-proyek Wikimedia, baik untuk tiap proyek maupun secara keseluruhan, dan mereka akan mewakili kepentingan dan kepedulian <em>Anda</em>. Mereka akan menentukan cara-cara mendapatkan pemasukan dan alokasinya serta berbagai isu lainnya.</p>

<p>Sebelum memberikan suara, harap baca dengan seksama pernyataan dan jawaban kandidat terhadap pertanyaan. Tiap kandidat adalah pengguna yang diakui, yang telah menyumbangkan cukup waktu dan upaya untuk menjadikan proyek-proyek ini menjadi suatu lingkungan yang ramah dan berkomitmen untuk pencapaian dan penyebaran bebas pengetahuan manusia.</p>

<p>Anda dapat memberikan suara untuk sebanyak mungkin kandidat yang Anda inginkan. Tiga kandidat dengan suara terbanyak akan dinyatakan sebagai pemenang. Jika terjadi seri, akan dilakukan suatu pemilihan lanjutan.</p>

<p>Harap diingat bahwa Anda hanya dapat memberikan suara dari satu proyek. Bahkan jika Anda memiliki 400 suntingan pada berbagai proyek, tidak berarti bahwa Anda memiliki hak memberikan suara dua kali. Jika Anda kemudian ingin mengganti pilihan Anda, silakan memberikannya melalui proyek yang telah Anda pilih sebelumnya.</p>

<p>Untuk informasi tambahan, lihat:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ" class="external">Tanya jawab Pemilihan</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/en" class="external">Kandidat</a></li></ul>',
	'boardvote_intro_change' => '<p>Anda telah memilih sebelumnya. Meskipun demikian, Anda masih dapat mengganti pilihan Anda pada isian berikut. Harap pilih kotak disamping masing-masing kandidat yang Anda pilih.</p>',
	'boardvote_entered'      => 'Terima kasih, pilihan Anda telah dicatat.

Jika mau, Anda dapat mencatat detil berikut. Catatan suara Anda adalah:

<pre>$1</pre>

Catatan tersebut telah dienkripsi dengan kunci publik Administrator Pemilihan:

<pre>$2</pre>

Versi terenkripsi tercantum di bawah ini. Hasil tersebut akan ditampilkan untuk publik di [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]',
	'boardvote_nosession'    => 'Saya tak dapat menentukan ID pengguna Wikimedia Anda. Harap masuk log pada Wiki yang dapat mengkualifikasikan Anda, dan gunakan <nowiki>[[Special:Boardvote]]</nowiki>. Anda harus menggunakan suatu akun yang paling tidak telah memiliki $1 kontribusi sebelum $2, dengan suntingan pertama sebelum $3.',
	'boardvote_notloggedin'  => 'Anda tidak masuk log. Untuk dapat memilih Anda harus menggunakan akun dengan paling tidak $1 suntingan sebelum $2, dan dengan suntingan pertama sebelum $3.',
	'boardvote_notqualified' => 'Anda tidak memiliki hak untuk memberikan suara dalam pemilihan ini. Anda harus memiliki $3 suntingan sebelum $2, dan suntingan pertama Anda harus sebelum $5.',
	'boardvote_novotes'      => 'Belum ada pemilih.',
	'boardvote_time'         => 'Waktu',
	'boardvote_user'         => 'Pengguna',
	'boardvote_edits'        => 'Suntingan',
	'boardvote_days'         => 'Hari',
	'boardvote_ua'           => 'Agen pengguna',
	'boardvote_listintro'    => '<p>Berikut adalah daftar semua suara yang telah masuk sampai hari ini. $1 untuk data terenkripsi.</p>',
	'boardvote_dumplink'     => 'Klik di sini',
	'boardvote_submit'       => 'Kirim',
	'boardvote_strike'       => 'Coret',
	'boardvote_unstrike'     => 'Hapus coretan',
	'boardvote_needadmin'    => 'Hanya pengurus pemilihan yang dapat melakukan tindakan ini.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Pemilihan Dewan Wikimedia</a>: Pemilihan dibuka sampai 12 Juli',
	'boardvote_notstarted'   => 'Pemilihan belum dimulai',
	'boardvote_closed'       => 'Pemilihan telah ditutup, lihat [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En halaman pemilihan untuk mengetahui hasilnya] sebentar lagi.',
	'boardvote_edits_many'   => 'banyak',
	'group-boardvote'        => 'Pengurus pemilihan anggota dewan',
	'group-boardvote-member' => 'Pengurus pemilihan anggota dewan',
	'grouppage-boardvote'    => '{{ns:project}}:Pengurus pemilihan anggota dewan',
	'boardvote_blocked'      => 'Maaf, Anda telah diblokir pada wiki tempat Anda terdaftar. Pengguna yang diblokir tidak diizinkan untuk memberikan suaranya.',
	'boardvote_welcome'      => "Selamat datang '''$1'''!",
	'go_to_board_vote'       => 'Pemilihan Dewan Wikimedia 2008',
	'boardvote_redirecting'  => 'Untuk keamanan dan transparansi yang lebih baik, kami melakukan pemungutan suara dengan menggunakan suatu server eksternal dan dikontrol secara independen.

Anda akan dialihkan ke server eksternal tersebut dalam waktu 20 detik. [$1 Klik di sini] untuk langsung menuju ke sana.

Suatu peringatan keamanan mengenai sertifikat tak bertanda mungkin akan muncul.',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'boardvote_time'    => 'Tempo',
	'boardvote_user'    => 'Uzanto',
	'boardvote_days'    => 'Dii',
	'boardvote_welcome' => "Bonveno, '''$1'''!",
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 * @author Spacebirdy
 */
$messages['is'] = array(
	'boardvote'              => 'Kosningar stjórnarmanna Wikimedia',
	'boardvote_intro_change' => '<p>Þú hefur nú þegar kosið. Samt sem áður getur þú breytt
afkvæði þínu með eyðublaðinu að neðan. Görðu svo vel að fylla í reitinn við hliðina á þeim
sem að þú styður.</p>',
	'boardvote_notloggedin'  => 'Þú ert ekki skráð(ur) inn. Til að kjósa þarft þú að hafa aðgang og hafa gert að minnsta kosti $1 breytingar fyrir $2 og fyrsta breytingin þarf að gerast fyrir $3.',
	'boardvote_notqualified' => 'Þú hefur ekki leyfi til að taka þátt í þessari kosningu. Þú þarft að hafa gert $1 breytingar fyrir $2 og fyrsta breytingin þín verður að gerast fyrir $5.',
	'boardvote_novotes'      => 'Enginn hefur kosið enn.',
	'boardvote_time'         => 'Tími',
	'boardvote_user'         => 'Notandi',
	'boardvote_edits'        => 'Breytingar',
	'boardvote_days'         => 'Dagar',
	'boardvote_ip'           => 'Vistfang',
	'boardvote_ua'           => 'Aðgangsbúnaður',
	'boardvote_dumplink'     => 'Smelltu hér',
	'boardvote_submit'       => 'Í lagi',
	'boardvote_needadmin'    => 'Aðeins umsjónamenn kosninga geta framkvæmt þessa aðgerð.',
	'boardvote_notstarted'   => 'Kosningarnar eru ekki enn byrjaðar',
	'boardvote_edits_many'   => 'margar',
	'boardvote_blocked'      => 'Því miður, þú hefur verið bannaður/bönnuð á wiki-kerfinu þínu. Bannaðir notendur mega ekki kjósa.',
	'boardvote_welcome'      => "Velkomin '''$1'''!",
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Gianfranco
 */
$messages['it'] = array(
	'boardvote'              => 'Elezioni del Consiglio direttivo della Wikimedia Foundation',
	'boardvote-desc'         => '[[meta:Board elections|Elezioni del Consiglio direttivo Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vota]]
* [[Special:Boardvote/list|Visualizza i voti espressi sinora]]
* [[Special:Boardvote/dump|Scarica i voti in forma cifrata]]',
	'boardvote_intro'        => '<blockquote>
<p>
Benvenuto/a alla quarta elezione per il consiglio direttivo Wikimedia, l\'autorità a capo della Wikimedia Foundation. Si vota per le tre persone che rappresenteranno la comunità di utenti dei vari progetti Wikimedia. Gli eletti rimarranno in carica per due anni nel consiglio direttivo ed aiuteranno a determinare il futuro orientamento dei progetti Wikimedia, individualmente e come gruppo, rappresentando i <em>tuoi</em> interessi e le tue idee. Decideranno in merito a vari temi, tra cui, in particolare, le modalità di raccolta e investimento dei fondi.</p>

<p>Per favore, prima di votare, leggi attentamente le presentazioni dei candidati e le risposte alle domande che sono state loro poste. Ognuno dei candidati è un utente rispettato, che ha contribuito con molto del proprio tempo e con notevoli sforzi a rendere questi progetti un ambiente accogliente e dedicato alla libera raccolta, organizzazione e distribuzione della conoscenza umana.</p>

<p>Puoi votare per più candidati a tua scelta: i tre con il maggior numero di voti saranno dichiarati eletti. Nel caso di pareggio, sarà tenuta una votazione di ballottaggio.</p>

<p>Per favore, ricorda che puoi effettuare il tuo voto solamente in un progetto. Anche se hai 400 edit su più progetti, non significa che tu abbia il diritto di votare più di una volta. Se successivamente vorrai cambiare il tuo voto, ricorda di votare dal progetto da cui hai precedentemente votato.</p>

<p>Per maggiori informazioni, vedi:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ" class="external">FAQ sulle elezioni (in inglese)</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/it" class="external">Candidati</a></li></ul>
</blockquote>',
	'boardvote_intro_change' => '<p>Il voto è già stato espresso. Per cambiarlo, usare il modulo sottostante. Spuntare la casella a fianco di ciascuno dei candidati che si desidera sostenere.</p>',
	'boardvote_entered'      => "Il voto è stato registrato. Grazie.

Se lo si desidera, è possibile registrare i dettagli del proprio voto, riportati di seguito:

<pre>$1</pre>

Il voto è stato cifrato con la chiave pubblica della commissione elettorale:

<pre>$2</pre>

Il voto espresso in forma cifrata è riportato di seguito. È inoltre visibile al pubblico all'indirizzo [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Indietro]]",
	'boardvote_nosession'    => "Non siamo in grado di determinare il tuo ID utente Wikimedia. Per favore, esegui il login nel progetto in cui hai i requisiti per votare, e vai alla pagina <nowiki>[[Speciale:Boardvote]]</nowiki>. Devi usare un account con almeno $1 contributi prima di $2 e con il primo contributo precedente a $3.

È necessario impostare il proprio browser affinché accetti i cookie dal nostro server di voto esterno: '''wikimedia.spi-inc.org'''.",
	'boardvote_notloggedin'  => "Accesso non effettuato. Per esprimere un voto è necessario disporre di un'utenza che abbia effettuato almeno $1 contributi prima del $2; la prima modifica registrata deve essere precedente al $3.",
	'boardvote_notqualified' => 'Non hai i requisiti necessari per votare in questa elezione. Devi necessariamente avere $3 contributi prima di $2, e il tuo primo contributo deve essere stato compiuto prima di $5.',
	'boardvote_novotes'      => 'Non ha ancora votato nessuno.',
	'boardvote_time'         => 'Data e ora',
	'boardvote_user'         => 'Utente',
	'boardvote_edits'        => 'Modifiche',
	'boardvote_days'         => 'Giorni',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'User agent',
	'boardvote_listintro'    => "<p>Di seguito viene riportato l'elenco dei voti registrati sinora. $1 per scaricare i dati in forma cifrata.</p>",
	'boardvote_dumplink'     => 'Fare clic qui',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Annulla questo voto',
	'boardvote_unstrike'     => 'Elimina annullamento',
	'boardvote_needadmin'    => 'Operazione riservata ai componenti della commissione elettorale.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Elezioni del Consiglio direttivo Wikimedia</a>: è possibile votare fino al 12 luglio',
	'boardvote_notstarted'   => 'La votazione non è ancora iniziata',
	'boardvote_closed'       => 'La votazione è conclusa, si invita a consultare  [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/It la pagina dei risultati].',
	'boardvote_edits_many'   => 'molti',
	'group-boardvote'        => 'Commissione elettorale',
	'group-boardvote-member' => 'Commissario elettorale',
	'grouppage-boardvote'    => '{{ns:project}}:Commissario elettorale',
	'boardvote_blocked'      => 'Siamo spiacenti, sei stato bloccato nel progetto in cui sei registrato. Gli utenti bloccati non hanno diritto di voto.',
	'boardvote_welcome'      => "Benvenuto/a '''$1'''!",
	'go_to_board_vote'       => 'Elezioni 2008 del Board di Wikimedia',
	'boardvote_redirecting'  => 'Per una migliore sicurezza e trasparenza, il voto si tiene su un server esterno, a controllo indipendente. Sarai reindirizzato a questo server esterno in 20 secondi. [$1 Clicca qui] per raggiungerlo direttamente. Potrebbe apparire un avviso di sicurezza riguardante un certificato di protezione non verificato.',
);

/** Japanese (日本語)
 * @author JtFuruhata
 * @author Broad-Sky
 * @author Siebrand
 */
$messages['ja'] = array(
	'boardvote'              => 'ウィキメディア財団 理事選挙',
	'boardvote-desc'         => '[[meta:Board elections|ウィキメディア財団 理事選挙]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|投票]]
* [[Special:Boardvote/list|現在までの投票]]
* [[Special:Boardvote/dump|暗号化された投票データのダンプ]]',
	'boardvote_intro'        => '2008年度の選挙は終了しました。

<p>より詳細な情報はこちらをご覧ください:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">候補者一覧</a></li></ul>',
	'boardvote_intro_change' => '<p>あなたは既に投票済みです。投票する候補者の変更は、以下のフォームから行うことができます。支持する候補者の投票欄をチェックしてください。</p>',
	'boardvote_entered'      => 'ありがとうございます、あなたの投票は正常に記録されました。

あなたが望むなら、以下の詳細を記録しておくとよいでしょう。あなたの投票記録は:

<pre>$1</pre>

これを、選挙管理委員会の公開鍵を用いて暗号化します:

<pre>$2</pre>

暗号化された投票データは以下のとおりです。これは[[Special:Boardvote/dump|暗号化された投票データのダンプ]]から一般に公開されます。

<pre>$3</pre>

[[Special:Boardvote/entry|戻る]]',
	'boardvote_nosession'    => 'ウィキメデイア利用者IDを確認できません。投票資格のあるウィキにログインし、<nowiki>[[Special:Boardvote]]</nowiki>へ進んでください。投票に使うアカウントは、$2以前に$1回を超える編集を行い、かつ最初の編集が$3以前のものである必要があります。',
	'boardvote_notloggedin'  => 'あなたはログインしていません。投票に使うアカウントは、$2以前に$1回を超える編集を行い、かつ最初の編集が$3以前のものである必要があります。',
	'boardvote_notqualified' => 'あなたには、この選挙の投票資格がありません。投票に使うアカウントは、$2以前に$1回を超える編集を行い、かつ最初の編集が$3以前のものである必要があります。',
	'boardvote_novotes'      => 'まだ誰も投票していません。',
	'boardvote_time'         => '時刻',
	'boardvote_user'         => '利用者',
	'boardvote_edits'        => '編集回数',
	'boardvote_days'         => '日数',
	'boardvote_ip'           => 'IPアドレス',
	'boardvote_ua'           => 'ユーザーエージェント',
	'boardvote_listintro'    => '<p>現在までに行われた投票の記録です。暗号化されたデータは$1。<p>',
	'boardvote_dumplink'     => 'こちらをクリックしてください',
	'boardvote_submit'       => '投票',
	'boardvote_strike'       => '抹消',
	'boardvote_unstrike'     => '抹消取り消し',
	'boardvote_needadmin'    => 'この処理は選挙管理委員のみ行うことができます。',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">ウィキメディア財団総選挙</a>:  7月12日まで投票実施中',
	'boardvote_notstarted'   => 'まだ投票は始まっていません',
	'boardvote_closed'       => '投票は終了しました。後日[http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En 選挙結果のページ]をご覧ください。',
	'boardvote_edits_many'   => '多数',
	'group-boardvote'        => '選挙管理委員会',
	'group-boardvote-member' => '選挙管理委員',
	'grouppage-boardvote'    => '{{ns:project}}:選挙管理委員',
	'boardvote_blocked'      => '申し訳ありません、あなたは登録されているウィキでブロック対象となっています。ブロックされた利用者は投票することができません。',
	'boardvote_welcome'      => "'''$1'''さん ようこそ!",
	'go_to_board_vote'       => 'ウィキメディア財団総選挙2008',
	'boardvote_redirecting'  => 'セキュリティと透明性を確保するため、外部の独立したサーバ上で投票を行っています。

20秒後に外部サーバへ転送されます。[$1 ここをクリック]するとすぐに投票ページに移動できます。

サーバ証明書のセキュリティに関する警告が表示される場合があります。',
);

/** Jutish (Jysk)
 * @author Huslåke
 * @author Siebrand
 */
$messages['jut'] = array(
	'boardvote'              => 'Valg åf velemmer til Wikimedias bestyrelse',
	'boardvote-desc'         => '[[meta:Board elections|Valg åf velemmer til Wikimedias bestyrelse]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Stemme]]
* [[Special:Boardvote/list|Ves ål stemmer til dato]]
* [[Special:Boardvote/dump|Dump krypteret stemmeførtegnelse]]',
	'boardvote_intro'        => '<p>Velkommen hen til den other stemmeafgivning nemlig den Wikimedia Råd i Håbet. Vi er stemmeafgivning nemlig to folk hen til gengive den samfundet i brugernes oven på den alskens Wikimedia anlægsarbejder. De vil hjælp hen til afgøre den senere ledelse at den Wikimedia anlægsarbejder vil holde , hver for sig og nemlig en sammenstille , og gengive <em>diin</em> interesserer og angår hen til den Råd i Håbet. De vil pådømme oven på veje hen til frembringe indkomst og den tildeling i penge ophøjet.</p>

<p>Behage læse den ansøgere opgørelser og svar hen til forespørgsler grundigt i nærværelse af stemmeafgivning. Hver i den ansøgere er en agtet bruger , hvem har bidrog anseelig gang og indsats hen til gør disse anlægsarbejder en velkommen omgivelser forpligtet hen til den jagt og omkostningsfrit distribution i human kundskab.</p>

<p>Det må du gerne stemme for nemlig mange ansøgere nemlig jer savn. ansøger hos den højst stemmer i hver holdning vil være erklæret den vinder i at holdning I tilfælde af en baste , en opstille - ned af stemmeafgivning vil være besad.</p>

<p>Før mær informåsje, sæg:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Eleksje FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Kandidåter</a></li></ul>',
	'boardvote_intro_change' => '<p>Du har stemme i nærværelse af. Hvordan end det må du gerne lave om på jeres stemme benytter den skema nedenstående. Behage indskrive den bokse næst efter hver ansøger hvem jer godkende i.</p>',
	'boardvote_notloggedin'  => 'Du er ikke journaliseret i. Hen til stemme , jer skal hjælp en beretning hos det vil sige $1 bidrag i nærværelse af $2, og hos en først redigere i nærværelse af $3.',
	'boardvote_notqualified' => 'Du erst ikke kwalifærn til stemme en dette eleksje. Du nødst til har $3 redigærenge førdette $2, ønd diin erste redigærenge mu derfør $5 være.',
	'boardvote_novotes'      => 'Ekke man her stemmen nu.',
	'boardvote_time'         => 'Tid',
	'boardvote_user'         => 'Bruger',
	'boardvote_edits'        => 'Redigærer',
	'boardvote_days'         => 'Tåg',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'User agent',
	'boardvote_listintro'    => "<p>Dett'er en liste åler votes which have been recorded
to date. $1 før æ enkriptet data.</p>",
	'boardvote_dumplink'     => 'Klik her',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Stryk',
	'boardvote_unstrike'     => 'Unstryk',
	'boardvote_needadmin'    => 'Ålen eleksje administratårer kan performær dette operåsje.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedia Board Eleksje</a>:  Eleksje åp til July 12',
	'boardvote_notstarted'   => "Stemmenge har ig'n stårtet",
	'boardvote_closed'       => "Eleksje er nu slotn, sæg'n [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En eleksje ertikel før resultåter] sån.",
	'boardvote_edits_many'   => 'føl',
	'group-boardvote'        => 'Board vote admin',
	'group-boardvote-member' => 'Board vote admin',
	'grouppage-boardvote'    => '{{ns:project}}:Board vote admin',
	'boardvote_blocked'      => 'Bedrøvelig , du har blevet spærret oven på jeres anbefalet wiki. Spærret brugernes er ikke tilladt hen til stemme.',
	'boardvote_welcome'      => "Vælkomme '''$1'''!",
	'go_to_board_vote'       => 'Wikimedia Board Eleksje 2008',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Siebrand
 */
$messages['jv'] = array(
	'boardvote'              => 'Pamilihan Anggota Déwan Kapercayan Yayasan Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Pamilihan Déwan Kapercayan Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Coblos]]
* [[Special:Boardvote/list|Daftar coblosan nganti saiki]]
* [[Special:Boardvote/dump|Data pamilihan sing diènkripsi]]',
	'boardvote_intro'        => '<p>Sugeng rawuh ing pamilihan kapindho Déwan Kapercayan Wikimedia. Kita milih wong loro kanggo ngwakili komunitas panganggo ing sawetara proyek-proyek Wikimedia. Wong loro iki bakal ngréwangi nemtokaké arah tujuan proyèk-proyèk Wikimedia iki ing mangsa ngarep, minangka individu lan minangka kelompok, lan ngwakili kawigatèn saha kakuwatiran <em>panjenengan</em> menyang Déwan Kapercayan. Wong-wong iku kabèh bakal nemtokaké cara golèk dhuwit lan alokasi dana sing wis olèh.</p>

<p>Mangga diwaca dhisik pranyatan lan wangsulan para kandidat minangka saksama sadurungé panjenengan miwiti nyoblos. Saben kandidat iku panganggo sing wis dikurmati, sing wis nyumbangsihaké wektu lan daya upaya supaya nggawé proyèk-proyèk iki dadi sawijining lingkungan sing ramah lan duwé komitmen kanggo nggolèk serta nyebaraké kawruh umat manungsa minangka bébas.</p>

<p>Panjenengan bisa nyoblos saakèh-akèh kandidat sing panjenengan péngèni. Kandidat sing olèh swara akèh dhéwé ing saben posisi, bakal dinyatakaké dadi pamenang ing posisi iku. Yèn anaa séri utawa remis, mengko bakal dianakaké pamilihan swara lanjutan.</p>

<p>Kanggo informasi sabanjuré, mangga mirsanit:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ" class="external">Pitakonan bab Pamilihan sing kerep diajokaké</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/en" class="external">Kandidat</a></li></ul>',
	'boardvote_intro_change' => '<p>Panjenengan wis tau nyoblos. Senadyan mengkono, panjenengan bisa
ngowahi pilihan panjenengan mawa formulir ing ngisor iki. Mangga dipriksa dhisik kothak
ing sandhingé saben kandidat sing panjenengan pilih.</p>',
	'boardvote_entered'      => 'Matur nuwun, pilihané panjenengan wis dicathet.

Yèn kersa, panjenengan bisa nyathet détail sing kapacak ing ngisor iki. Cathetan swara panjenengan:

<pre>$1</pre>

Cathetan iku wis diènkripsi mawa kunci publik Pangurus Pamilihan:

<pre>$2</pre>

Vèrsi sin diènkripsi kapacak ing ngisor iki. Kasil iku bakal dituduhaké sacara umum ing [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]',
	'boardvote_nosession'    => 'Idèntitas panganggo Wikimedia panjenengan ora bisa ditemtokaké.
Mangga log mlebu ing wiki ing ngendi panjenengan duwé hak kanggo mèlu coblosan, lan tumujua menyang <nowiki>[[Special:Boardvote]]</nowiki>.
Panjenengan kudu nganggo sawijining rékening (akun) mawa minimal $1 kontribusi sadurungé $2, lan suntingan kapisan sadurungé $3.',
	'boardvote_notloggedin'  => 'Panjenengan ora mlebu log. Supaya bisa mèlu nyoblos, panjenengan kudu nganggo rékening (akun) mawa paling ora $1 suntingan sadurungé $2, lan suntingan sing kapisan dilakoni sadurungé $3.',
	'boardvote_notqualified' => 'Panjenengan ora bisa mèlu mènèhaké swara ing pamilihan iki. Panjenengan kudu wis nglakoni $3 suntingan sadurungé $2, lan suntingan kapisan wis ana sadurungé $5.',
	'boardvote_novotes'      => 'Durung ana sing nyoblos.',
	'boardvote_time'         => 'Wektu',
	'boardvote_user'         => 'Panganggo',
	'boardvote_edits'        => 'Suntingan',
	'boardvote_days'         => 'Dina',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Agèn panganggo',
	'boardvote_listintro'    => '<p>Ing ngisor iki kapacak daftar kabèh swara sing wis mlebu nganti dina iki. $1 iku kanggo data sing diènkripsi.</p>',
	'boardvote_dumplink'     => 'Kliken ing kéné',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Corèt',
	'boardvote_unstrike'     => 'Batalna corètan',
	'boardvote_needadmin'    => 'Namung para pangurus pamilihan waé sing bisa ngalakoni operasi iki.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Pamilihan Déwan Wikimedia</a>: Pamilihan dibuka nganti 12 Juli',
	'boardvote_notstarted'   => 'Coblosané durung diwiwiti',
	'boardvote_closed'       => 'Pamilihan wis ditutup, mangga mirsani [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En kaca pamilihan kanggo nuwèni kasilé] sadélok manèh.',
	'boardvote_edits_many'   => 'akèh',
	'group-boardvote'        => 'Pangurus pamilihan anggota déwan',
	'group-boardvote-member' => 'Pangurus pamilihan anggota déwan',
	'grouppage-boardvote'    => '{{ns:project}}:Pangurus pamilihan anggota déwan',
	'boardvote_blocked'      => 'Nuwun sèwu, panjenengan diblokir ing wiki papan panjenengan ndaftar. Panganggo sing diblokir ora pareng mèlu awèh swara.',
	'boardvote_welcome'      => "Sugeng rawuh '''$1'''!",
	'go_to_board_vote'       => 'Pamilihan Déwan Wikimedia 2008',
	'boardvote_redirecting'  => 'Kanggo kaamanan lan transparansi sing luwih apik, kita nglakoni pamungutan swara iki ing sawijining server èkstèrnal sing dikontrol sacara mardika.

Panjenengan bakal dialihaké menyang server èkstèrnal iki sajroning 20 detik. [$1 Kliken ing kéné] kanggo langsung manuju menyang kana.

Sawijining pèngetan kaamanan ngenani sèrtifikat sing ora ditandhani mbok-menawa bakal dituduhaké.',
	'right-boardvote'        => 'Ngurusi pemilu',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author Malafaya
 */
$messages['ka'] = array(
	'boardvote'            => 'ვიკიმედიის რწმუნებულთა საბჭოს არჩევნები',
	'boardvote_entry'      => '* [[Special:Boardvote/vote|კენჭისყრა]]
* [[Special:Boardvote/list|დღემდე მიცემული ხმების სია]]
* [[Special:Boardvote/dump|წაშალე კრიპტირებული არჩევნების მონაცემები]]',
	'boardvote_time'       => 'დრო',
	'boardvote_user'       => 'მომხმარებელი',
	'boardvote_days'       => 'დღეები',
	'boardvote_dumplink'   => 'აქ დააწკაპუნეთ',
	'boardvote_notstarted' => 'კენჭისყრა ჯერ არ დაწყებულა',
	'boardvote_welcome'    => "მოგესალმებით '''$1'''!",
);

$messages['kk-cyrl'] = array(
	'boardvote'              => 'Wikimedia қорының Уәкілдер кеңесінің сайлауы',
	'boardvote_entry'        => '* [[{{ns:special}}:Boardvote/vote|Дауыс беру]]
* [[{{ns:Special}}:Boardvote/list|Күн бойынша дауыс беру тізімі]]
* [[{{ns:Special}}:Boardvote/dump|Мұқамдалған сайлау жазбаларының арқауы]]',
	'boardvote_intro_change' => '<p>Даусыңызды бұрын беріп қойыпсыз.
Дегенмен, төмендегі пішінді пайдаланып даусыңызды өзгерте аласыз.
Өзіңіз таңдаған әрбір ұсынылған тұлғалар жанында құсбелгі қойыңыз.</p>',
	'boardvote_entered'      => 'Рахмет, дауысыңыз жазылыпп алынды.

Егер көңіліңіз болса, келесі егжей-тегжейлерін жазып толтыруыңызға болады. Дауыс беруіңіздің жазбасы:

<pre>$1</pre>

Бұл Сайлау Әкімшілерінің баршаға жарияланған електронды кілтімен мұқамдалған:

<pre>$2</pre>

Мұқамдалған нұсқасының нәтижесі келесіде көрсетіледі. Бұл [[{{ns:special}}:Boardvote/dump]] бетінде көрсетіліп баршаға жарияланады.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|Артқа]]',
	'boardvote_nosession'    => 'Wikimedia қатысушының жеке анықтаушы нөмірі шамаланбады. Өзіңізді айқындаған уикиге кіріңіз де, <nowiki>[[Special:Boardvote]]</nowiki> деген бетке өтііңіз. Бірінші түзетуіңіз $3 кезіне дейін болып, $2 кезіне дейін ең кемінде $1 үлес берген тіркелгініз болу керек.',
	'boardvote_notloggedin'  => 'Жобаға кірмегенсіз. Дауыс беру үшін бірінші түзетуіңіз $3 кезіне дейін болып, $2 кезіне дейін ең кемінде $1 үлес берген тіркелгініз болу керек.',
	'boardvote_notqualified' => 'Бұл сайлаудағы дауыс беруіне айқындалмадыңыз. Бірінші түзетуіңіз $5 кезіне дейін болып, $2 кезіне дейін ең кемінде $3 түзету жасауыңыз керек.',
	'boardvote_novotes'      => 'Әліде ешкім дауысын берген жоқ.',
	'boardvote_time'         => 'Уақыт',
	'boardvote_user'         => 'Қатысушы',
	'boardvote_edits'        => 'Түзету',
	'boardvote_days'         => 'Күн',
	'boardvote_ip'           => 'IP жай',
	'boardvote_ua'           => 'Пайдаланушы әрекеткіші',
	'boardvote_listintro'    => '<p>Осында жазылып алынған барлық дауыс берушілердің күн-айы бойынша тізімі беріліп тұр.
Мұқамдалған деректер үшін $1.</p>',
	'boardvote_dumplink'     => 'мынаны нұқыңыз',
	'boardvote_submit'        => 'Жарайды',
	'boardvote_strike'       => 'Сызып тастау',
	'boardvote_unstrike'     => 'Сызуды өшіру',
	'boardvote_needadmin'    => 'Бұл әрекетті тек сайлау әкімшілер орындай алады.',
	'boardvote_notstarted'    => 'Дауыс беру әлі басталмаған',
	'boardvote_edits_many'    => 'көп',
	'group-boardvote'         => 'Кеңес сайлау әкімшілері',
	'group-boardvote-member' => 'кеңес сайлау әкімшісі',
	'grouppage-boardvote'     => '{{ns:project}}:Кеңес сайлау әкімшілері',
	'boardvote_blocked'      => 'Ғафу етіңіз, тіркелген уикиіңізде бұғатталғансыз. Бұғатталған қатысушыларға дауыс беру үшін рұқсат жоқ.',
	'boardvote_welcome'      => "'''$1''', қөш келдіңіз!",
	'boardvote_redirecting'  => 'Нығайтылған қауіпсіздік пен мөлдірлік үшін, біз сайлауды тәуелсіз меңгерілген
сыртқы серверде өткіземіз.

20 секунд мезгілінде осы сыртқы серверке  айдатыласыз. Соған қазір өтіп кету үшін [$1 мында нұқыңыз].

Қол қойылмаған куәлік туралы қауіпсіздік аңғарту көрсетілуге мүмкін.',

);
$messages['kk-latn'] = array(
	'boardvote'              => 'Wikimedia qorınıñ Wäkilder keñesiniñ saýlawı',
	'boardvote_entry'        => '* [[{{ns:special}}:Boardvote/vote|Dawıs berw]]
* [[{{ns:Special}}:Boardvote/list|Kün boýınşa dawıs berw tizimi]]
* [[{{ns:Special}}:Boardvote/dump|Muqamdalğan saýlaw jazbalarınıñ arqawı]]',
	'boardvote_intro_change' => '<p>Dawsıñızdı burın berip qoýıpsız.
Degenmen, tömendegi pişindi paýdalanıp dawsıñızdı özgerte alasız.
Öziñiz tañdağan ärbir usınılğan tulğalar janında qusbelgi qoýıñız.</p>',
	'boardvote_entered'      => 'Raxmet, dawısıñız jazılıpp alındı.

Eger köñiliñiz bolsa, kelesi egjeý-tegjeýlerin jazıp toltırwıñızğa boladı. Dawıs berwiñizdiñ jazbası:

<pre>$1</pre>

Bul Saýlaw Äkimşileriniñ barşağa jarïyalanğan elektrondı kiltimen muqamdalğan:

<pre>$2</pre>

Muqamdalğan nusqasınıñ nätïjesi keleside körsetiledi. Bul [[{{ns:special}}:Boardvote/dump]] betinde körsetilip barşağa jarïyalanadı.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|Artqa]]',
	'boardvote_nosession'    => 'Wikimedia qatıswşınıñ jeke anıqtawşı nömiri şamalanbadı. Öziñizdi aýqındağan wïkïge kiriñiz de, <nowiki>[[Special:Boardvote]]</nowiki> degen betke ötiiñiz. Birinşi tüzetwiñiz $3 kezine deýin bolıp, $2 kezine deýin eñ keminde $1 üles bergen tirkelginiz bolw kerek.',
	'boardvote_notloggedin'  => 'Jobağa kirmegensiz. Dawıs berw üşin birinşi tüzetwiñiz $3 kezine deýin bolıp, $2 kezine deýin eñ keminde $1 üles bergen tirkelginiz bolw kerek.',
	'boardvote_notqualified' => 'Bul saýlawdağı dawıs berwine aýqındalmadıñız. Birinşi tüzetwiñiz $5 kezine deýin bolıp, $2 kezine deýin eñ keminde $3 tüzetw jasawıñız kerek.',
	'boardvote_novotes'      => 'Älide eşkim dawısın bergen joq.',
	'boardvote_time'         => 'Waqıt',
	'boardvote_user'         => 'Qatıswşı',
	'boardvote_edits'        => 'Tüzetw',
	'boardvote_days'         => 'Kün',
	'boardvote_ip'           => 'IP jaý',
	'boardvote_ua'           => 'Paýdalanwşı äreketkişi',
	'boardvote_listintro'    => '<p>Osında jazılıp alınğan barlıq dawıs berwşilerdiñ kün-aýı boýınşa tizimi berilip tur.
Muqamdalğan derekter üşin $1.</p>',
	'boardvote_dumplink'     => 'mınanı nuqıñız',
	'boardvote_submit'        => 'Jaraýdı',
	'boardvote_strike'       => 'Sızıp tastaw',
	'boardvote_unstrike'     => 'Sızwdı öşirw',
	'boardvote_needadmin'    => 'Bul äreketti tek saýlaw äkimşiler orındaý aladı.',
	'boardvote_notstarted'    => 'Dawıs berw äli bastalmağan',
	'boardvote_edits_many'    => 'köp',
	'group-boardvote'         => 'Keñes saýlaw äkimşileri',
	'group-boardvote-member' => 'keñes saýlaw äkimşisi',
	'grouppage-boardvote'     => '{{ns:project}}:Keñes saýlaw äkimşileri',
	'boardvote_blocked'      => 'Ğafw etiñiz, tirkelgen wïkïiñizde buğattalğansız. Buğattalğan qatıswşılarğa dawıs berw üşin ruqsat joq.',
	'boardvote_welcome'      => "'''$1''', qöş keldiñiz!",
	'boardvote_redirecting'  => 'Nığaýtılğan qawipsizdik pen möldirlik üşin, biz saýlawdı täwelsiz meñgerilgen
sırtqı serverde ötkizemiz.

20 sekwnd mezgilinde osı sırtqı serverke  aýdatılasız. Soğan qazir ötip ketw üşin [$1 mında nuqıñız].

Qol qoýılmağan kwälik twralı qawipsizdik añğartw körsetilwge mümkin.',

);
$messages['kk-arab'] = array(
	'boardvote'              => 'Wikimedia قورىنىڭ ۋاكىلدەر كەڭەسىنىڭ سايلاۋى',
	'boardvote_entry'        => '* [[{{ns:special}}:Boardvote/vote|داۋىس بەرۋ]]
* [[{{ns:Special}}:Boardvote/list|كۇن بويىنشا داۋىس بەرۋ ٴتىزىمى]]
* [[{{ns:Special}}:Boardvote/dump|مۇقامدالعان سايلاۋ جازبالارىنىڭ ارقاۋى]]',
	'boardvote_intro_change' => '<p>داۋسىڭىزدى بۇرىن بەرىپ قويىپسىز.
دەگەنمەن, تومەندەگى ٴپىشىندى پايدالانىپ داۋسىڭىزدى وزگەرتە الاسىز.
ٴوزىڭىز تاڭداعان ٴاربىر ۇسىنىلعان تۇلعالار جانىندا قۇسبەلگى قويىڭىز.</p>',
	'boardvote_entered'      => 'راحمەت, داۋىسىڭىز جازىلىپپ الىندى.

ەگەر كوڭىلىڭىز بولسا, كەلەسى ەگجەي-تەگجەيلەرىن جازىپ تولتىرۋىڭىزعا بولادى. داۋىس بەرۋىڭىزدىڭ جازباسى:

<pre>$1</pre>

بۇل سايلاۋ اكىمشىلەرىنىڭ بارشاعا جارىييالانعان ەلەكتروندى كىلتىمەن مۇقامدالعان:

<pre>$2</pre>

مۇقامدالعان نۇسقاسىنىڭ ناتىيجەسى كەلەسىدە كورسەتىلەدى. بۇل [[{{ns:special}}:Boardvote/dump]] بەتىندە كورسەتىلىپ بارشاعا جارىييالانادى.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|ارتقا]]',
	'boardvote_nosession'    => 'Wikimedia قاتىسۋشىنىڭ جەكە انىقتاۋشى ٴنومىرى شامالانبادى. ٴوزىڭىزدى ايقىنداعان ۋىيكىيگە كىرىڭىز دە, <nowiki>[[Special:Boardvote]] دەگەن بەتكە ٴوتىىڭىز. ٴبىرىنشى تۇزەتۋىڭىز $3 كەزىنە دەيىن بولىپ, $2 كەزىنە دەيىن ەڭ كەمىندە $1 ۇلەس بەرگەن تىركەلگىنىز بولۋ كەرەك.',
	'boardvote_notloggedin'  => 'جوباعا كىرمەگەنسىز. داۋىس بەرۋ ٴۇشىن ٴبىرىنشى تۇزەتۋىڭىز $3 كەزىنە دەيىن بولىپ, $2 كەزىنە دەيىن ەڭ كەمىندە $1 ۇلەس بەرگەن تىركەلگىنىز بولۋ كەرەك.',
	'boardvote_notqualified' => 'بۇل سايلاۋداعى داۋىس بەرۋىنە ايقىندالمادىڭىز. ٴبىرىنشى تۇزەتۋىڭىز $5 كەزىنە دەيىن بولىپ, $2 كەزىنە دەيىن ەڭ كەمىندە $3 تۇزەتۋ جاساۋىڭىز كەرەك.',
	'boardvote_novotes'      => 'الىدە ەشكىم داۋىسىن بەرگەن جوق.',
	'boardvote_time'         => 'ۋاقىت',
	'boardvote_user'         => 'قاتىسۋشى',
	'boardvote_edits'        => 'تۇزەتۋ',
	'boardvote_days'         => 'كۇن',
	'boardvote_ip'           => 'IP جاي',
	'boardvote_ua'           => 'پايدالانۋشى ارەكەتكىشى',
	'boardvote_listintro'    => '<p>وسىندا جازىلىپ الىنعان بارلىق داۋىس بەرۋشىلەردىڭ كۇن-ايى بويىنشا ٴتىزىمى بەرىلىپ تۇر.
مۇقامدالعان دەرەكتەر ٴۇشىن $1.</p>',
	'boardvote_dumplink'     => 'مىنانى نۇقىڭىز',
	'boardvote_submit'        => 'جارايدى',
	'boardvote_strike'       => 'سىزىپ تاستاۋ',
	'boardvote_unstrike'     => 'سىزۋدى ٴوشىرۋ',
	'boardvote_needadmin'    => 'بۇل ارەكەتتى تەك سايلاۋ اكىمشىلەر ورىنداي الادى.',
	'boardvote_notstarted'   => 'داۋىس بەرۋ ٴالى باستالماعان',
	'boardvote_edits_many'   => 'كوپ',
	'group-boardvote'        => 'كەڭەس سايلاۋ اكىمشىلەرى',
	'group-boardvote-member' => 'كەڭەس سايلاۋ اكىمشىسى',
	'grouppage-boardvote'    => '{{ns:project}}:كەڭەس سايلاۋ اكىمشىلەرى',
	'boardvote_blocked'      => 'عافۋ ەتىڭىز, تىركەلگەن ۋىيكىيىڭىزدە بۇعاتتالعانسىز. بۇعاتتالعان قاتىسۋشىلارعا داۋىس بەرۋ ٴۇشىن رۇقسات جوق.',
	'boardvote_welcome'      => "'''$1''', قوش كەلدىڭىز!",
	'boardvote_redirecting'  => 'نىعايتىلعان قاۋىپسىزدىك پەن مولدىرلىك ٴۇشىن, ٴبىز سايلاۋدى تاۋەلسىز مەڭگەرىلگەن
سىرتقى سەرۆەردە وتكىزەمىز.

20 سەكۋند مەزگىلىندە وسى سىرتقى سەرۆەركە  ايداتىلاسىز. سوعان قازىر ٴوتىپ كەتۋ ٴۇشىن [$1 مىندا نۇقىڭىز].

قول قويىلماعان كۋالىك تۋرالى قاۋىپسىزدىك اڭعارتۋ كورسەتىلۋگە مۇمكىن.',

);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author Chhorran
 * @author Lovekhmer
 * @author Siebrand
 */
$messages['km'] = array(
	'boardvote'              => 'ការបោះឆ្នោត​ក្រុមប្រឹក្សាអភិបាល​មូលនិធី​វិគីមេឌា',
	'boardvote-desc'         => '[[meta:Board elections|ការបោះឆ្នោត​ក្រុមប្រឹក្សាអភិបាល​មូលនិធី​វិគីមេឌា]]',
	'boardvote_intro_change' => '<p>អ្នក​បានបោះឆ្នោត​ម្តងហើយ។ តែអ្នកអាច​ផ្លាស់ប្ដូរ​ការបោះឆ្នោត​របស់អ្នក​ដោយប្រើប្រាស់​សំនុំបែបបទ​ខាងក្រោម។ សូមគូស​នៅក្នុង​ប្រអបពីមុខ​ឈ្មោះបេក្ខជន​ដែលអ្នក​សំរេច​បោះឆ្នោត​អោយ។​</p>',
	'boardvote_entered'      => 'សូមអរគុណ! ការបោះឆ្នោតរបស់អ្នកត្រូវបានរក្សាទុកហើយ។


If you wish, you may record the following details. Your voting record is:

<pre>$1</pre>

It has been encrypted with the public key of the Election Administrators:

<pre>$2</pre>

The resulting encrypted version follows. It will be displayed publicly on [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]',
	'boardvote_notloggedin'  => 'អ្នក​មិន​ទាន់​ឡុកអ៊ីន​ទេ។ ដើម្បី​មានសិទ្ឋិ​បោះឆ្នោតបាន អ្នកត្រូវមាន​គណនី​ដែលមាន​ការរូមចំនែក​យ៉ាងហោចណាស់ $1 ដង មុន $2 និង មានកំនែប្រែ​លើកដំបូងនៅមុន ​$3។',
	'boardvote_notqualified' => 'អ្នក​មិនមាន​សិទ្ឋិ​ក្នុងការបោះឆ្នោតទេ។ អ្នកត្រូវមានការកែប្រែ​អត្ថបទលើសពី $3 នៅមុន $2 ហើយការកែប្រែដំបូងរបស់អ្នក​ត្រូវតែនៅមុន $5។',
	'boardvote_novotes'      => 'មិនទាន់មានអ្នកបានបោះឆ្នោតទេ។',
	'boardvote_time'         => 'ពេល',
	'boardvote_user'         => 'អ្នកប្រើប្រាស់',
	'boardvote_edits'        => 'ចំនួនកំនែប្រែ',
	'boardvote_days'         => 'ចំនួនថ្ងៃ',
	'boardvote_ip'           => 'IP',
	'boardvote_listintro'    => '<p>នេះជា​បញ្ជី​នៃគ្រប់សន្លឹកឆ្នោត​បានដែលត្រូវកត់ត្រាទុក​មកទល់ពេលនេះ ។ $1 សំរាប់​ទិន្នន័យ​បំលែង​ជា​អក្សរកូដ ។</p>',
	'boardvote_dumplink'     => 'ចុចទីនេះ',
	'boardvote_submit'       => 'យល់ព្រម',
	'boardvote_strike'       => 'គូសចេញ',
	'boardvote_unstrike'     => 'លែងគូសចេញ',
	'boardvote_needadmin'    => 'មានតែអ្នកអភិបាលដែលជាប់ឆ្នោតប៉ុណ្ណោះ ទើបអាចធ្វើការងារនេះបាន។',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">បោះឆ្នោត​ក្រុមប្រឹក្សា​វិគីមេឌា </a> ៖  បោះឆ្នោតចំហ​រហូតដល់ថ្ងៃ​១២ ខែកក្កដា ។',
	'boardvote_notstarted'   => 'ការបោះឆ្នោត មិនទាន់បាន ចាប់ផ្តើម',
	'boardvote_closed'       => 'ការបោះឆ្នោត បានត្រូវបញ្ចប់, មើល [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En លទ្ធផលបោះឆ្នោត] ក្នុងពេល ឆាប់ៗ ខាងមុខ ។',
	'boardvote_edits_many'   => 'ច្រើន',
	'group-boardvote'        => 'ក្រុមប្រឹក្សា​បោះឆ្នោត​អភិបាល',
	'group-boardvote-member' => 'ក្រុមប្រឹក្សា​បោះឆ្នោត​អភិបាល',
	'grouppage-boardvote'    => '{{ns:project}}:ក្រុមប្រឹក្សា​បោះឆ្នោត​អភិបាល',
	'boardvote_blocked'      => 'សូមអភ័យទោស! អ្នកត្រូវបានហាមឃាត់នៅលើវិគីដែលអ្នកបានចុះឈ្មោះ។ អ្នកប្រើប្រាស់ដែលត្រូវបានហាមឃាត់ មិនត្រូវបានអនុញ្ញាតឱ្យបោះឆ្នោតទេ។',
	'boardvote_welcome'      => "សូមស្វាគមន៍'''$1'''!",
	'go_to_board_vote'       => 'ការបោះឆ្នោតក្រុមប្រឹក្សាវិគីមេឌាឆ្នាំ២០០៧',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'boardvote_submit' => 'OK dun',
);

$messages['ksh'] = array(
	'boardvote'               => 'Waahle för_t „Wikimedia Board of Trustees“ (De forantwochtlijje Füürshtändt bëij Wikkimedija)',
	'boardvote_entry'         => '* [[Special:Boardvote/vote|Affshtemme]]
* [[Special:Boardvote/list|Zëĳsh de affjejovvene Shtemme beß jäz]]
* [[Special:Boardvote/dump|Zëĳsh de affjejovvene Shtemme beß jäz en ÷:ksh:MediaWiki:MediaWiki:boardvote_dumplink]]',
	'boardvote_intro_change'  => '<p>Do häß alld fröjer affjeshtemmp.
Do kannß ävver Ding affjejovvene Shtemm änndere.
Maach unge ëijnfach e Höksche odder Ding Krüzzje
nevven di Kandidaate, di de ungershtözze wellß.</p>',
	'boardvote_entered'       => 'Häzlijjen Dangk. Ding Shtemm eß jäz faßßjehallde.

Wänn_De wellß, donn Der de Ëijnzelhëĳte fun hee shpëijshere. Ding Daate fun de Affshtemmung sinn:

<pre>$1</pre>

Se weede foschlößßeldt jedshpëijshot, me_m [http://ksh.wikipedia.org/wiki/%C3%96ffentlijje_Schl%C3%B6%C3%9F%C3%9Fel öffentlijje Schlößßel] fun däm Lëijder fun dä Affshtemmung. Dä Schlößßel eß:

<pre>$2</pre>

Hee de foschlößßelte Väsjohn fun_Dinge Daate:

<pre>$3</pre>

Alle Shtemme kannß_De_Der [[Special:Boardvote/dump|hee en ÷:ksh:MediaWiki:MediaWiki:boardvote_dumplink]] aanluure.<br />Sönß [[Special:Boardvote/entry|jangk zerögk]]',
	'boardvote_notloggedin'   => 'Do beß nit aanjemälldt.
För affshtemme ze dörrəve, moß de aanjemelldt sinn,
un Do moßß füür_em $2 minnßtenß $1 Bëijdrääsh unger Däm ÷:ksh:User_Naam jemaat hann.',
	'boardvote_notqualified'  => '\'\'\'Schaadt.\'\'\'
Ding beßheerijje $1 Bëijdrääsh füür_em $2 sin_nit jenooch.
Mer moßß winnishßtenß $3 Bëijdrääsh füürem Shtėshdaach jeschrevve hann,
iih dat mer bëijem Affshtemme övver de Diräktoore
un Füüshtändt zohjelooße eß.
Beß nit kott.
Bëijm nääkße Mool klabb_et beshtemmp.',
	'boardvote_novotes'       => 'Noch hät Këijne hee affjeshtimmp…',
	'boardvote_time'          => 'Dattum un Zigk',
	'boardvote_user'          => '÷:ksh:User',
	'boardvote_edits'         => 'Bëijdrääsh',
	'boardvote_days'          => 'Dare',
	'boardvote_listintro'     => '<p>Hee küdd_en Lėßß med_all dä Shtemme,
di_mer heß_jäz faßßjehallde hann,
noh_m Allfabet zotteet.</p>
<p>(Mer künne die Daate och en $1 aanzëije)</p>',
	'boardvote_dumplink'      => 'Foschlößßeldt',
	'boardvote_needadmin'     => 'Nuur de ÷:ksh:MediaWiki:group-sysop fö_de Waahle künne dat maache.',
	'boardvote_closed'        => 'De Waahl ess_eröm, luuer dann op de [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation Sigk medt_te Waal_Äjeepnißße], wadd_errußß_koohm.',
	'boardvote_edits_many'    => '— janz fill —',
);
$messages['la'] = array(
	'boardvote_time'          => 'Tempus',
	'boardvote_user'          => 'Usor',
	'boardvote_edits'         => 'Recensiones',
	'boardvote_days'          => 'Dies',
	'boardvote_dumplink'      => 'Imprime hic',
	'boardvote_edits_many'    => 'plurimae',
	'boardvote_welcome'       => 'Salve \'\'\'$1\'\'\'!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'boardvote'              => 'Wale fir de Wikimedia Board of Trustees',
	'boardvote-desc'         => "[[meta:Board elections|Wale vum Conseil d'administration vu Wikimedia]]",
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Ofstëmmen]]
* [[Special:Boardvote/list|Lëscht vun de Stëmmen bis haut]]
* [[Special:Boardvote/dump|Verschlësselt Donnéeë vun der Ofstëmmung]]',
	'boardvote_intro'        => "<p>Wëllkomm bei der zweeter Wal fir de Wikimedia Board of Trustees. Et ginn zwou Persoune gewielt, déi d'Benotzer vun de verschiddene Wikimedia-Projete representéieren. Si wäerten dobäi hëllefe fir z'entscheeden, wellech Richtung fir déi verschidde Wikimedia-Projeten ageschloe gëtt, ob eleng oder als Grupp, an <em>är</em> Interessen a Standpunkter beim Board of Trustees representéieren. Si wäerten och dobäi hëllefen, Konzepter z'entwéckelen, fir d'Recetten an d'Spende fir Wikimedia z'erhéijen.</p>

<p>Liest w.e.g. d'Stellungnahm vun de Kandidaten an hir Äntwerten op Froen, éier Dir fir ee stëmmt. All Kandidat ass e respektéierte Benotzer, dee mat vill Zäit a Gedold dozou bäigedroen huet, aus de Projeten en Ëmfeld ze schafen, dat fir d'Verbreedung vu fräiem Wëssen aluet.</p>

<p>Dir kënnt fir esou vill Kandidate stëmme wéi Dir wëllt. Déi zwéi Kandidate mat de meeschte Stëmme gewannen d'Wal. Sollt et dobäi zu engem Rampo kommen, kënnt et zu engem Ballottage.</p>",
	'boardvote_intro_change' => "<p>Dir hutt schonn ofgestëmmt. Dir kënnt är Stëmm awer mat dem Formulaire ënnedrënner änneren. Klickt op d'Këschten niewent de Kandidaten fir déi Dir wiele wëllt.</p>",
	'boardvote_entered'      => "Merci, är Stëmm gouf gespäichert.

Wann der wëllt, kënnt der déi folgend Detailer festhalen. Är Ofstëmmungsfiche ass:

<pre>$1</pre>

Dës Fiche gouf mam Public Key vun de Waladministrateure verschlësselt:

<pre>$2</pre>

D'verschlësselt Versioun dovunner fannt der ënnen. Si gëtt ëffentlech op [[Special:Boardvote/dump]] ugewisen.

<pre>$3</pre>

[[Special:Boardvote/entry|Zréck]]",
	'boardvote_notloggedin'  => 'Dir sidd net agelogged.
Fir ze wiele musst Dir e Benotzerkont benotze matt mindestens $1 Kontributioune virum $2, an Dir musst mindestens $3 Kontributiounen tëschent dem $4 a(n) $5 gemaach hunn.',
	'boardvote_notqualified' => 'Dir sidd net berechtegt fir un dëser Wal deelzehuelen. 
Dir musst mindestens $3 Kontributioune virum $2 gemaacht hunn, a mindestens $3 Kontrutiounen tëschent dem $4 a(n) $5 gemaach hun.',
	'boardvote_novotes'      => 'Et huet nach keen ofgestëmmt.',
	'boardvote_time'         => 'Zäit',
	'boardvote_user'         => 'Benotzer',
	'boardvote_edits'        => 'Ännerungen',
	'boardvote_days'         => 'Deeg',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Vertrieder vum Benotzer',
	'boardvote_listintro'    => '<p>Dëst ass eng Lëscht mat all Stëmmen déi bis haut gespäichert goufen.
$1 fir déi verschlëselt Daten.</p>',
	'boardvote_dumplink'     => 'Hei klicken',
	'boardvote_submit'       => 'Ofstëmmen',
	'boardvote_strike'       => 'Stëmm läschen',
	'boardvote_unstrike'     => 'Annulléierung vun der Stëmm ophiewen',
	'boardvote_needadmin'    => 'Nëmme Administrateure vun de Walen kënnen dëst maachen.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedia Wale fir de Conseil d\'administration</a>:
dir kënnt bis den 12. Juli ofstëmmen',
	'boardvote_notstarted'   => "D'Ofstëmmung huet nach net ugefaang",
	'boardvote_closed'       => "D'Wale sinn eriwwer. D'Resultat fannt Dir geschwënn [http://meta.wikimedia.org/wiki/Election_results_2008/En hei].",
	'boardvote_edits_many'   => 'vill',
	'group-boardvote'        => 'Administrateure vun de Wale fir de Wikimedia Board of Trustees',
	'group-boardvote-member' => "Administrateur vun de Wale vum Conseil d'administration",
	'grouppage-boardvote'    => "{{ns:project}}: Administrateur vun de Wale vum Conseil d'administration",
	'boardvote_blocked'      => 'Dir gouft op ärer Wiki gespaart. Gespaarte Benotzer däerfen net wielen.',
	'boardvote_welcome'      => "Wëllkomm '''$1'''!",
	'go_to_board_vote'       => '"Wikimedia Board" Walen 2008',
	'boardvote_redirecting'  => "Aus Sécherheetsgrënn a wéinst der Transparenz sinn d'Walen op engem externen an onofhägeg kontrolléierte Server.

Dir gitt an 20 Sekonnen op dësen externe Server virugeleed. [$1 Klickt hei] fir elo dohinn ze goen.

Eng Sécherheetswarnung iwwer een net ënnerschriwwenen Zertifikat kann ugewise ginn.",
	'right-boardvote'        => 'Walen administréieren',
);

/** Lezghian (Лезги)
 * @author M.M.S.
 */
$messages['lez'] = array(
	'boardvote_time'       => 'Заман',
	'boardvote_strike'     => 'Ягъун',
	'boardvote_edits_many' => 'гзаф',
	'boardvote_welcome'    => "Ша буюр '''$1'''!",
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Malafaya
 */
$messages['lfn'] = array(
	'boardvote_user'   => 'Usor',
	'boardvote_submit' => 'Oce',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'boardvote'              => 'Wikimedia Board of Trustees-verkezing',
	'boardvote-desc'         => '[[meta:Board elections|Wikimedia Board of Trustees-verkezing]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Stöm]]
* [[Special:Boardvote/list|Oetgebrachdje stömme toeane]]
* [[Special:Boardvote/dump|Dump geëncrypdje verkezingsopname]]',
	'boardvote_intro'        => '<p>Welkom bie de tweede verkiezinge veur de Wikimedia Board of Trustees. We
kieze twee personen die de gebroekersgemeenschap vertegenwoordige in de
versjellden Wikimedia-projecte. Ze bepalen mede de toekomstige richting
van Wikimedia-projecten, individueel en als groep, en behartigen <em>uw</em>
belangen en zorgen bij de Board of Trustees. Ze beslissen ook over hoe
inkomsten gemaakt kunnen worden en waar het opgehaalde geld aan wordt
besteed.</p>

<p>Lees alstublieft de kandidaatstelling en de antwoorden op vragen zorgvuldig
voordat u stemt. Iedere kandidaat is een gewaardeerde gebruiker die
aanzielijke hoeveelheden tijd en moeite heeft besteed aan het bouwen van
uitnodigende omgevingen die toegewijd zijn aan het nastreven en vrij verspreiden
van menselijke kennis.</p>

<p>U mag veur zoveel kandidate stemme as u wilt. De kandidaat met de meeste
stemme voor iddere positie wordt tot winnaar oetgerope voor de betreffende
positie. In geval de stemme stake wordt er een tweede ronde gehoude.</p>

<p>Meer informatie:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Bestuursverkiezing FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Kandidate</a></li></ul>',
	'boardvote_intro_change' => "<p>Geer höb al gestömp. Geer kintj uche stöm verangere via 't óngersäöndje formeleer. Vink estebleef de vekskes nao edere kanditaat daet geer steuntj aan.</p>",
	'boardvote_entered'      => 'Danke. Uche stöm is verwerk.

Es geer wiltj kintj geer de volgende gegaeves beware. Uche stöm:

<pre>$1</pre>

Deze is versleuteldj mit de publieke sleutel vanne Verkezingskemissie:

<pre>$2</pre>

Noe völg de versleuteldje versie. Deze is aopebaor en nao te zeen op [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Trök]]',
	'boardvote_nosession'    => "Uch Wikimedia-gebroekersnómmer kin neet bepaoldj waere. Meldj geer uch aan in de wiki wo geer volduit aan de eise en gao nao <nowiki>[[Special:Boardvote]]</nowiki>. Gebroek 'ne gebroeker mit teminste $1 biedraag veur $2 en mit uche ieëste bewèrking veur $3.",
	'boardvote_notloggedin'  => 'Geer bönt neet aangemeldj. Geer kintj stömmes es geer uvh veur $2 teminste $1 bewèrkinge höb gemaakt en uche ieëste bewèrking mót veur $3 gemaak zeen.',
	'boardvote_notqualified' => 'Geer kintj neet stömme in dees verkezing. Geer mót $3 bewèrkinge gemaak höbbe veur $2 en uche ieëste bewèrking mót veur $5 gemaak zeen.',
	'boardvote_novotes'      => "D'r is door nag nemes gestömp.",
	'boardvote_time'         => 'Tied',
	'boardvote_user'         => 'Gebroeker',
	'boardvote_edits'        => 'Bewerkinge',
	'boardvote_days'         => 'Daag',
	'boardvote_ip'           => 'IP-adres',
	'boardvote_ua'           => 'User-agent',
	'boardvote_listintro'    => '<p>Hiej ónger staon alle stömme die toet noe toe zeen oetgebrach. $1 veur de versleuteldje gegaeves.</p>',
	'boardvote_dumplink'     => 'Klik hiej',
	'boardvote_submit'       => 'ok',
	'boardvote_strike'       => 'Óngeljig',
	'boardvote_unstrike'     => 'Geljig',
	'boardvote_needadmin'    => 'Allein lede van de Verkezingscommisie kinne dees hanjeling oetveure.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedia Bestuursverkeziginge</a>:<!--  Vote open until July 12 -->',
	'boardvote_notstarted'   => "'t Stömme is nag neet begós",
	'boardvote_closed'       => 'De stömming is noe geslaote. zee saon [http://meta.wikimedia.org/wiki/Board_elections de verkezingspazjena veur de rezultaote].',
	'boardvote_edits_many'   => 'väöl',
	'group-boardvote'        => 'Boardvote-administrators',
	'group-boardvote-member' => 'Boardvote-administrator',
	'grouppage-boardvote'    => '{{ns:project}}:Boardvote-administrator',
	'boardvote_blocked'      => 'Sorry, doe bös geblokkeerd op uche geregistreerde wiki. Geblokkeerde gebroekers moge neet stömme.',
	'boardvote_welcome'      => "Wèlkom, '''$1'''!",
	'go_to_board_vote'       => 'Wikimedia Bestuursverkezing 2008',
	'boardvote_redirecting'  => "Waeges 'ne baetere beveilige en mieë transparantie vinje de verkezinge plaats op 'ne externe, ónaafhankelik beheerde server.

Geer wuuertj euver 20 second ómgeleid nao deze externe server. [$1 Klik hiej] óm d'r noe haer te gaon.

't Is meugelik det geer 'n waorsjuwing krieg waeges 'n neet ónbekindj certificaat.",
	'right-boardvote'        => 'Behieër verkeziginge',
);

/** Lumbaart (Lumbaart)
 * @author SPQRobin
 */
$messages['lmo'] = array(
	'boardvote' => 'Elezziún dal cunsili diretiif dala Wikimedia Foundation',
);

$messages['loz'] = array(
	'boardvote_user'          => 'Sebelu',
	'boardvote_submit'        => 'Afi',
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 * @author Hugo.arg
 * @author Siebrand
 */
$messages['lt'] = array(
	'boardvote'              => 'Vikimedijos išlaikymo tarybos rinkimai',
	'boardvote-desc'         => '[[meta:Board elections|Vikimedijos Valdytojų tarybos rinkimai]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Balsuoti]]
* [[Special:Boardvote/list|Balsavimų sąrašas]]
* [[Special:Boardvote/dump|Koduoti rinkimų rezultatai]]',
	'boardvote_intro_change' => '<p>Jūs jau balsavote. Tačiau galite pakeisti savo balsą naudodami žemiau pateiktą formą. Prašome patikrinti laukelius šalia kiekvieno kandidato, kuriam pritariate.</p>',
	'boardvote_entered'      => 'Ačiū, Jūsų balsavimas įrašytas.

Jei norite, jūs galite įrašyti kitas detales. Jūsų balsavimo įrašas yra:

<pre>$1</pre>

Jis buvo užkoduotas viešu raktu rinkimų administratorių:

<pre>$2</pre>

Paskutinė koduota versija žemiau. Ji bus viešai rodoma [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Atgal]]',
	'boardvote_notloggedin'  => 'Jūs esate neprisijungęs. Norėdamas balsuoti, privalote naudoti sąskaitą su mažiausiai $1 redagavimų prieš $2, ir pirmuoju redagavimų prieš $3.',
	'boardvote_novotes'      => 'Niekas dar nebalsavo.',
	'boardvote_time'         => 'Laikas',
	'boardvote_user'         => 'Naudotojas',
	'boardvote_edits'        => 'Redagavimai',
	'boardvote_days'         => 'Dienos',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Naudotojo agentas',
	'boardvote_dumplink'     => 'Spauskite čia',
	'boardvote_submit'       => 'Gerai',
	'boardvote_needadmin'    => 'Tik rinkimų administratoriai gali vykdyti šią operaciją.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Vikimedijos tarybos rinkimai</a>:  Balsavimas vyksta iki liepos 12-os',
	'boardvote_notstarted'   => 'Balsavimas dar neprasidėjo',
	'boardvote_closed'       => 'Balsavimas uždarytas, žiūrėkite [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En rinkimų puslapį rezultatams].',
	'boardvote_edits_many'   => 'daug',
	'boardvote_blocked'      => 'Atsiprašome, jūs buvote užblokuotas wiki, kurioje užsiregistravote. Užblokuotiems naudotojams nėra leidžiama balsuoti.',
	'boardvote_welcome'      => "Sveiki '''$1'''!",
	'go_to_board_vote'       => 'Vikimedijos tarybos rinkimai 2008',
	'boardvote_redirecting'  => 'Pagerintam saugumui ir aiškumui, mes balsavimą leidžiame išoriniame, nepriklausomai kontroliuojamame serveryje.

Jūs būsite peradresuotas į šį išorinį serverį po 20 sekundžių. [$1 Spauskite čia], jei norite patekti dabar.

Gali būti rodomas saugumo įspėjimas apie nepasirašytą sertifikatą.',
);

/** Malayalam (മലയാളം)
 * @author Jacob.jose
 * @author Shijualex
 */
$messages['ml'] = array(
	'boardvote'              => 'വിക്കിമീഡിയ ബോര്‍ഡ് ഓഫ് ട്രസ്റ്റീസിനായുള്ള തിരഞ്ഞെടുപ്പ്',
	'boardvote-desc'         => '[[meta:Board elections|വിക്കിമീഡിയ ബോര്‍ഡ് ഓഫ് ട്രസ്റ്റീസിനായുള്ള തെരഞ്ഞെടുപ്പ്]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|വോട്ട് ചെയ്യുക]]
* [[Special:Boardvote/list|ഇന്നുവരെയുള്ള വോട്ടുകള്‍ നിരത്തുക]]
* [[Special:Boardvote/dump|എന്‍‌ക്രിപ്റ്റ് ചെയ്ത തെരഞ്ഞെടുപ്പ് റിക്കാര്‍ഡുകള്‍ ശേഖരിക്കുക]]',
	'boardvote_intro'        => '<p>വിക്കിമീഡിയ ബോര്‍ഡ് ഓഫ് ട്രസ്റ്റീസിന്റെ രണ്ടാമത്തെ വോട്ടെടുപ്പിലേക്കു സ്വാഗതം. വിവിധ വിക്കിമീഡിയ സം‌രംഭങ്ങളില്‍ പ്രവര്‍ത്തിക്കുന്ന ഉപയോക്താക്കളെ പ്രതിനിധീകരിച്ചു കൊണ്ട് രണ്ട് പേര്‍ക്കു വേണ്ടിയാണു നമ്മള്‍ ഈ വോട്ടെടുപ്പ് നടത്തുന്നത്. ഈ രണ്ട് പേര്‍ വിക്കിമീഡിയ സം‌രംഭങ്ങളുടെ ഭാവി പദ്ധതികളുടെ പ്രയാണത്തിനു വേണ്ട സഹകരണങ്ങള്‍ നല്‍കുകയും, ബോര്‍ഡ് ഓഫ് ട്രസ്റ്റീസില്‍ \'\'നിങ്ങളുടെ\'\' താല്പര്യങ്ങളും ഉല്‍കണ്ഠകളും അവതരിപ്പിക്കുകയും ചെയ്യും. അവര്‍ വരുമാനം ഉണ്ടാക്കുന്നതിനെ പറ്റിയുള്ള വഴികളെ പറ്റിയും, പിരിച്ചെടുത്ത പണം വിവിധ പദ്ധതികളില്‍ വിഭജിക്കുന്നതിനെ പറ്റിയും തീരുമാനം എടുക്കുകയും  ചെയ്യും.</p>


<p>വോട്ട് ചെയ്യുന്നതിനു മുന്‍പ് സ്ഥാനാര്‍ത്ഥികളുടെ പ്രസ്ഥാവനകളും ചോദ്യങ്ങള്‍ക്ക് അവര്‍ പറഞ്ഞ മറുപടിയും ശ്രദ്ധിച്ച് വായിക്കുക. ഓരോ സ്ഥാനാര്‍ത്ഥിയും, മനുഷ്യന്‍ നേടിയെടുത്ത വിജ്ഞാനം സൗജന്യമായി ലോകത്തിനു കാഴ്ചവെക്കുന്നതിനു വിക്കിമീഡിയ സം‌രംഭങ്ങളില്‍ വളരെയധികം സമയവും പ്രയത്നവും ചെലവഴിച്ച് ഈ സം‌രംഭങ്ങളെ നന്നാക്കുന്നതിനു സഹായിക്കുന്നവരും, മറ്റുള്ളവരാല്‍ ബഹുമാനിക്കപ്പെടുന്നവരും ആണ്‌.</p>


<p>എത്ര സ്ഥാനാര്‍ത്ഥികള്‍ക്കു വേണമെങ്കിലും നിങ്ങള്‍ക്കു വോട്ടു ചെയ്യാവുന്നതാണ്‌. ഓരോ പദവിയിലും ഏറ്റവും കൂടുതല്‍ വോട്ടു നേടുന്ന സ്ഥാനാര്‍ത്ഥിയെ വിജയിയായി പ്രഖ്യാപിക്കും. തുല്യത പാലിക്കുന്ന പക്ഷം, തുല്യത പാലിക്കുന്ന സ്ഥാനാര്‍ത്ഥിളെ മാത്രം വെച്ച് ഒരു തിരഞ്ഞെടുപ്പ് നടത്തും.</p>


<p>കൂടുതല്‍ വിവരത്തിനു, കാണുക:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">തിരഞ്ഞെടുപ്പ് പതിവു ചോദ്യങ്ങള്‍</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/en" class="external">സ്ഥാനാര്‍ത്ഥികള്‍</a></li></ul>',
	'boardvote_intro_change' => '<p>താങ്കള്‍ ഇതിനു മുന്‍പ് വോട്ട് ചെയ്തിട്ടുണ്ട്. പക്ഷെ താഴെയുള്ള പത്രിക ഉപയോഗിച്ചു താങ്കള്‍ക്കു താങ്കളുടെ വോട്ടില്‍ മാറ്റം വരുത്താവുന്നതാണ്‌. താങ്കള്‍ പിന്തുണയ്ക്കുന്ന സ്ഥാനാര്‍ത്ഥികളുടെ പേരിനു സമീപമുള്ള ബോക്സില്‍ ക്ലിക്ക് ചെയ്ത് അവരെ അംഗീകരിക്കുക.</p>',
	'boardvote_entered'      => 'വളരെ നന്ദി, താങ്കളുടെ വോട്ട് രേഖപ്പെടുത്തിയിരിക്കുന്നു.

താഴെ കാണുന്ന വോട്ടിങ്ങിന്റെ വിശദാംശങ്ങള്‍ താങ്കള്‍ക്കു താല്പര്യമുണ്ടെങ്കില്‍ സൂക്ഷിച്ചു വെക്കാം.  


താങ്കളുടെ വോട്ടിന്റെ രേഖ:

<pre>$1</pre>

അതു തിരഞ്ഞെടുപ്പ് കാര്യനിര്‍‌വാഹകരുടെ പബ്ലിക്ക് കീ ഉപയോഗിച്ച് എന്‍‌ക്രിപ്റ്റ് ചെയ്തിരിക്കുന്നു:

<pre>$2</pre>


തല്‍ഫലമായുണ്ടായ എന്‍‌ക്രിപ്റ്റഡ് വേര്‍ഷന്‍ താഴെ കൊടുക്കുന്നു. ഈ വേര്‍ഷന്‍ [[Special:Boardvote/dump]] എന്ന ലിങ്കില്‍ പബ്ലിക്ക് ആയി ലഭ്യമാണ്‌.  

<pre>$3</pre>

[[Special:Boardvote/entry|Back]]',
	'boardvote_nosession'    => 'താങ്കളുടെ വിക്കിമീഡിയ ഉപയോക്തൃ ഐഡി കണ്ടെത്താന്‍ കഴിഞ്ഞില്ല. 

താങ്കള്‍ വോട്ട് ചെയ്യാന്‍ യോഗ്യത നേടിയ വിക്കിയിലേക്ക് ലോഗിന്‍ ചെയ്ത്, <nowiki>[[Special:Boardvote]]</nowiki> എന്ന ലിങ്കിലേക്ക് പോവുക. 

വോട്ടിനു യോഗ്യത നേടണമെങ്കില്‍ താങ്കളുടെ ആദ്യത്തെ തിരുത്തല്‍ $3-നു മുന്‍പായിരിക്കുകയും, $2-നു മുന്‍പ് $1 തിരുത്തലുകള്‍ നടത്തിയിരിക്കുകയും വേണം.',
	'boardvote_notloggedin'  => 'താങ്കള്‍ ലോഗിന്‍ ചെയ്തിട്ടില്ല.

വോട്ടു ചെയ്യണമെങ്കില്‍ $2നു മുന്‍പ് $1 തിരുത്തലുകള്‍ നടത്തിയിരിക്കുകയും, ആദ്യത്തെ തിരുത്തല്‍ $3നു മുന്‍പായിരിക്കുകയും വേണം.',
	'boardvote_notqualified' => 'ഈ തിരഞ്ഞെടുപ്പിനു വോട്ടു ചെയ്യാന്‍ താങ്കള്‍ യോഗ്യത നേടിയിട്ടില്ല.

യോഗ്യത നേടണങ്കില്‍ $2 നു മുന്‍പ് $3 തിരുത്തലുകള്‍ നടത്തിയിരിക്കുകയും, ആദ്യത്തെ തിരുത്തല്‍ $5നു മുന്‍പായിരിക്കുകയും വേണം.',
	'boardvote_novotes'      => 'ആരും ഇതുവരെ വോട്ടുചെയ്തിട്ടില്ല.',
	'boardvote_time'         => 'സമയം',
	'boardvote_user'         => 'ഉപയോക്താവ്',
	'boardvote_edits'        => 'തിരുത്തലുകള്‍',
	'boardvote_days'         => 'ദിവസങ്ങള്‍',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'യൂസര്‍ ഏജന്റ് (User agent)',
	'boardvote_listintro'    => '<p>ഇന്നേ വരെ രേഖപ്പെടുത്തപ്പെട്ട എല്ലാ വോട്ടുകളുടേയും പട്ടികയാണിതു.  
എന്‍‌ക്രിപറ്റ്ഡ് ഡാറ്റയ്ക്കു $1.</p>',
	'boardvote_dumplink'     => 'ഇവിടെ അമര്‍ത്തുക',
	'boardvote_submit'       => 'ശരി',
	'boardvote_strike'       => 'വെട്ടുക',
	'boardvote_unstrike'     => 'വെട്ടല്‍ ഒഴിവാക്കുക',
	'boardvote_needadmin'    => 'ഈ പ്രവര്‍ത്തി ചെയ്യാന്‍ തിരഞ്ഞെടുപ്പു കാര്യനിര്‍‌വാഹകര്‍ക്കു മാത്രമേ അനുമതിയുള്ളൂ.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">വിക്കിമീഡിയ ബോര്‍ഡ് തിരഞ്ഞെടുപ്പ്</a>:
വോട്ടെടുപ്പ് ജൂലൈ 12 വരെ',
	'boardvote_notstarted'   => 'വോട്ടെടുപ്പ് ആരംഭിച്ചിട്ടില്ല',
	'boardvote_closed'       => 'വോട്ടെടുപ്പ് അവസാനിച്ചു, താമസിയാതെ തന്നെ [http://meta.wikimedia.org/wiki/Board_elections/2008/Results  തെരഞ്ഞെടുപ്പു താള്‍] ശ്രദ്ധിച്ചാല്‍ ഫലങ്ങള്‍ അറിയാവുന്നതാണ്.',
	'boardvote_edits_many'   => 'ധാരാളം',
	'group-boardvote'        => 'ബോര്‍ഡ് വോട്ട് കാര്യനിര്‍‌വാഹകര്‍',
	'group-boardvote-member' => 'ബോര്‍ഡ് വോട്ട് കാര്യനിര്‍‌വാഹകന്‍/കാര്യനിര്‍വാഹക',
	'grouppage-boardvote'    => '{{ns:project}}:ബോര്‍ഡ് വോട്ട് കാര്യനിര്‍‌വാഹകന്‍',
	'boardvote_blocked'      => 'ക്ഷമിക്കുക, താങ്കള്‍ രജിസ്റ്റര്‍ ചെയ്ത വിക്കിയില്‍ താങ്കള്‍ നിലവില്‍ തടയപ്പെട്ടിരിക്കുകയാണ്. തടയപ്പെട്ട ഉപയോക്താക്കള്‍ക്ക് വോട്ട് ചെയ്യാന്‍ അവകാശമില്ല.',
	'boardvote_welcome'      => "സ്വാഗതം '''$1'''!",
	'go_to_board_vote'       => 'വിക്കിമീഡിയ ബോര്‍ഡ് തെരഞ്ഞെടുപ്പ് 2008',
	'boardvote_redirecting'  => 'കൂടുതല്‍ സുതാര്യതയ്ക്കും സുരക്ഷിതത്വത്തിനുമായി വോട്ടെടുപ്പ് പുറത്തുള്ള സ്വതന്ത്രമായ ഒരു സെര്‍‌വറിലാണു നടത്തുന്നത്. 

നിങ്ങള്‍ 20 സെക്കന്റിനുള്ളില്‍ യാന്ത്രികമായി ആ സെര്‍‌വറിലേക്കു ആനയിക്കപ്പെടും. അവിടേക്കു പോകാന്‍ [$1 ഇവിടെ] ഞെക്കാവുന്നതും ആണ്‌. 

ഒപ്പിടാത്ത സര്‍ട്ടിഫിക്കറ്റിനെ കുറിച്ചുള്ള സുരക്ഷാസന്ദേശം ചിലപ്പോള്‍ പ്രദര്‍ശിപ്പിക്കപ്പെട്ടേക്കാം.',
	'right-boardvote'        => 'കാര്യനിര്‍വാഹക തിരഞ്ഞെടുപ്പ്',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 * @author Siebrand
 */
$messages['mr'] = array(
	'boardvote'              => 'विकिमीडिया विश्वस्त मंडळ निवडणूक',
	'boardvote-desc'         => '[[meta:Board elections|विकिमीडिया विश्वस्त मंडळाची निवडणूक]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|मत द्या]]
* [[Special:Boardvote/list|आजपर्यंतच्या मतांची यादी]]
* [[Special:Boardvote/dump|एन्क्रीप्ट केलेली मतांची यादी डम्प करा]]',
	'boardvote_intro'        => '<p>विकिमीडिया बोर्ड ऑफ ट्रस्टीजच्या मतदानात आपले स्वागत आहे. विविध
विकिमीडिया प्रकल्पांमध्ये सहभागी असलेल्या सदस्यांचे प्रतिनिधित्व करण्यासाठी दोन लोकांची निवड करण्यासाठी हे मतदान होत आहे.
ते विकिमीडिया प्रकल्पांच्या भविष्यातील वाटचालीबद्दल एकट्याने अथवा एकत्रितपणे निर्णय घेतील,
तसेच <em>तुमच्या</em> आवडी तसेच शंका बोर्ड ऑफ ट्रस्टीज पुढे मांडतील. ते उत्पन्नाची साधने
शोधणे तसेच खर्चाची विभागणी करणे ही कामे करतील.</p>

<p>कृपया मत देण्यापूर्वी उमेदवाराची माहिती तसेच त्याने दिलेल्या प्रश्नांची उत्तरे काळजीपूर्वक वाचावीत.
यातील प्रत्येक उमेदवार हा आदरणीय सदस्य आहे ज्याने संपूर्ण मानवजातीला फुकट ज्ञान मिळण्यासाठी 
आपला बराचसा वेळ तसेच श्रम खर्ची घातलेले आहेत.</p>

<p>तुम्ही कितीही उमेदवारांना मत देऊ शकता. प्रत्येक स्थानावरच्या ज्या
उमेदवाराला सर्वात जास्त मते मिळतील तो त्या स्थानावरील विजेता म्हणून घोषित करण्यात येईल.
जर एका जागेसाठी एकापेक्षा जास्त उमेदवारांमध्ये बरोबरी झाली तर उप-मतदान घेण्यात येईल.</p>

<p>कृपया अधिक माहितीसाठी पहा:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">मतदानाबाबत नेहमी विचारले जाणारे प्रश्न</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">उमेदवार</a></li></ul>',
	'boardvote_intro_change' => '<p>तुम्ही पूर्वी मत दिलेले आहे. जर तुम्हांला त्यात बदल करायचा असेल तर खालील अर्ज वापरा. कृपया आपणांस योग्य वाटणार्‍या उमेदवारापुढील चौकोनात बरोबरची खूण करा.</p>',
	'boardvote_entered'      => 'धन्यवाद, तुमचे मत नोंदले गेलेले आहे.

जर तुम्हांस इच्छा असेल तर तुम्ही खालील माहितीची नोंद करु शकता. तुमचे मत:

<pre>$1</pre>

मत मतदान प्रबंधकांच्या खालील चावीने एन्क्रीप्ट केलेले आहे:

<pre>$2</pre>

एन्क्रीप्ट केल्यानंतरचे मत खाली दिलेले आहे. हे मत [[Special:Boardvote/dump]] सर्वांना पाहण्यासाठी खुले आहे.

<pre>$3</pre>

[[Special:Boardvote/entry|मागे जा]]',
	'boardvote_nosession'    => 'तुमचा विकिमीडिया सदस्य क्रमांक सापडत नाही आहे. कृपया आपल्या सदस्यनामानी जिथे तुम्हाला मतदान करायला परवानगी आहे, त्या विकीवर प्रवेश करा, व <nowiki>[[Special:Boardvote]]</nowiki> इथे जा. तुम्ही मत देण्यासाठी कमीतकमी $1 संपादने $2 च्या पूर्वी, तसेच पहिले संपादन $3 च्या पूर्वी केलेले असणे आवश्यक आहे.',
	'boardvote_notloggedin'  => 'तुम्ही प्रवेश केलेला नाही. मत देण्यासाठी तुम्ही कमीतकमी $1 संपादने $2 च्या पूर्वी, तसेच पहिले संपादन $3 च्या पूर्वी केलेले असणे आवश्यक आहे.',
	'boardvote_notqualified' => 'तुम्ही इथे मत देण्यासाठी पात्र नाही आहात. तुम्ही $2 च्या पूर्वी $3 संपादने केलेली असणे तसेच पहिले संपादन $5 च्या पूर्वी केलेले असणे आवश्यक आहे.',
	'boardvote_novotes'      => 'अजून कोणीही मत दिलेले नाही.',
	'boardvote_time'         => 'वेळ',
	'boardvote_user'         => 'सदस्य',
	'boardvote_edits'        => 'संपादने',
	'boardvote_days'         => 'दिवस',
	'boardvote_ip'           => 'अंकपत्ता',
	'boardvote_ua'           => 'सदस्य एजंट',
	'boardvote_listintro'    => '<p>ही आजपर्यंत नोंदल्या गेलेल्या मतांची यादी आहे. एन्क्रीप्टेड माहिती साठी $1 पहा.</p>',
	'boardvote_dumplink'     => 'येथे टिचकी मारा',
	'boardvote_submit'       => 'ठीक',
	'boardvote_strike'       => 'खोडा',
	'boardvote_unstrike'     => 'खोडणे रद्द',
	'boardvote_needadmin'    => 'फक्त मतदान प्रशासक ही कृती करू शकतात.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">विकिमीडिया बोर्ड मतदान</a>:  जुलै १२ पर्यंत मतदान चालू',
	'boardvote_notstarted'   => 'मतदान अजून सुरू झालेले नाही.',
	'boardvote_closed'       => 'मतदान बंद झालेले आहे. कृपया निकालांसाठी [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En मतदान पान] पहा.',
	'boardvote_edits_many'   => 'खूप',
	'group-boardvote'        => 'बोर्ड मत प्रशासक',
	'group-boardvote-member' => 'बोर्ड मत प्रशासक',
	'grouppage-boardvote'    => '{{ns:project}}:बोर्ड मत प्रशासक',
	'boardvote_blocked'      => 'माफ करा, तुम्ही सदस्य असलेल्या विकीने तुम्हांला ब्लॉक केलेले आहे. तुम्ही मत देऊ शकत नाही.',
	'boardvote_welcome'      => "सुस्वागतम्‌ '''$1'''!",
	'go_to_board_vote'       => 'विकिमीडिया मंडळ निवडणूक २००७',
	'boardvote_redirecting'  => 'अधिक सुरक्षितता व पारदर्शक मतदानासाठी, हे मतदान एका बाह्य, दुसर्‍यांनी चालविलेल्या सर्व्हरवर घेण्यात येत आहे.

तुम्हाला त्या बाह्य सर्व्हरवर २० सेंकंदात नेण्यात येईल. आत्ता तिथे जाण्यासाठी [$1 इथे टिचकी द्या].

सही नसलेल्या सर्टिफिकेटसाठी सुरक्षापट्टी दिसू शकते.',
	'right-boardvote'        => 'निवडणूकांचे प्रबंधन करा',
);

/** Erzya (эрзянь кель)
 * @author Amdf
 */
$messages['myv'] = array(
	'boardvote_time'       => 'Шка',
	'boardvote_user'       => 'Совиця',
	'boardvote_days'       => 'Чить',
	'boardvote_ip'         => 'IP',
	'boardvote_submit'     => 'ОК',
	'boardvote_edits_many' => 'ламот',
);

$messages['nan'] = array(
	'boardvote'               => "Wikimedia Táng-sū-hōe soán-kí",
	'boardvote_entry'         => "* [[Special:Boardvote/vote|Tâu-phiò]]
* [[Special:Boardvote/list|Lia̍t kàu taⁿ ê tâu-phiò]]
* [[Special:Boardvote/dump|Dump encrypted soán-kí kì-lo̍k]]",
	'boardvote_dumplink'      => "Chhi̍h chia",
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'boardvote'              => 'Wahlen to dat Wikimedia-Kuratorium',
	'boardvote-desc'         => '[[meta:Board elections|Wahlen to dat Wikimedia-Kuratorium]]',
	'boardvote_entry'        => '* [[{{ns:special}}:Boardvote/vote|Afstimmen]]
* [[{{ns:special}}:Boardvote/list|Bet nu al afgevene Stimmen]]
* [[{{ns:special}}:Boardvote/dump|Verslötelte Wahlindrääg]]',
	'boardvote_novotes'      => 'Noch hett nüms afstimmt.',
	'boardvote_time'         => 'Tiet',
	'boardvote_user'         => 'Bruker',
	'boardvote_edits'        => 'Ännern',
	'boardvote_days'         => 'Daag',
	'boardvote_ip'           => 'IP',
	'boardvote_dumplink'     => 'Hier klicken',
	'boardvote_submit'       => 'Afstimmen',
	'boardvote_strike'       => 'Strieken',
	'boardvote_unstrike'     => 'Strieken trüchnehmen',
	'boardvote_notstarted'   => 'De Wahl hett noch nich anfungen',
	'boardvote_edits_many'   => 'veel',
	'group-boardvote'        => 'Wahl-Administraters',
	'group-boardvote-member' => 'Wahl-Administrater',
	'grouppage-boardvote'    => '{{ns:project}}:Wahl-Administrater',
	'boardvote_welcome'      => "Moin '''$1'''.",
	'go_to_board_vote'       => 'Wahlen to dat Wikimedia-Kuratorium 2008',
);

/** Nepali (नेपाली)
 * @author SPQRobin
 */
$messages['ne'] = array(
	'boardvote_entry'      => '* [[Special:Boardvote/vote|भोट हाल्नुहोस्]]
* [[Special:Boardvote/list|हालसम्मको सुची]]
* [[Special:Boardvote/dump| encrypt गरिएको रद्दी निर्वाचन सुची]]',
	'boardvote_time'       => 'समय',
	'boardvote_user'       => 'प्रयोगकर्ता',
	'boardvote_days'       => 'दिनहरु',
	'boardvote_dumplink'   => 'यहाँ क्लिक गर्नुहोस',
	'boardvote_edits_many' => 'धेरै',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 */
$messages['nl'] = array(
	'boardvote'              => 'Wikimedia Board of Trustees-verkiezing',
	'boardvote-desc'         => '[[meta:Board elections|Wikimedia Board of Trustees-verkiezing]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Stemmen]]
* [[Special:Boardvote/list|Uitgebrachte stemmen bekijken]]
* [[Special:Boardvote/dump|Dump encrypted election record]]',
	'boardvote_intro'        => '<p>Welkom bij de verkiezingen van 2008 voor de Wikimedia Board of Trustees.
We kiezen één persoon die de gebruikersgemeenschap vertegenwoordigt in de verschillende Wikimedia-projecten.
Deze persoon bepaaltn mede de toekomstige richting van Wikimedia-projecten, individueel en als groep, en behartigt <em>uw</em> belangen en zorgen bij de Board of Trustees.
Deze persoon beslist ook mede over hoe inkomsten gemaakt kunnen worden en waar het opgehaalde geld aan wordt besteed.</p>

<p>Lees alstublieft de kandidaatstelling en de antwoorden op vragen zorgvuldig voordat u stemt.
Iedere kandidaat is een gewaardeerde gebruiker die aanzielijke hoeveelheden tijd en moeite heeft besteed aan het bouwen van uitnodigende omgevingen die toegewijd zijn aan het nastreven en vrij verspreiden van menselijke kennis.</p>

<p>U mag op zoveel kandidaten stemmen als u wilt.
De kandidaat met de meeste stemmen voor iedere positie wordt tot winnaar uitgeroepen voor de betreffende positie.
In geval de stemmen staken wordt er een tweede ronde gehouden.</p>

<p>Meer informatie:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Bestuursverkiezing 2008</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Kandidaten</a></li></ul>',
	'boardvote_intro_change' => '<p>U hebt al gestemd.
U kunt uw stem wijzigen via het onderstaande formulier.
Vink alstublieft de vakjes aan naast iedere kandidaat die u steunt aan.</p>',
	'boardvote_entered'      => 'Dank u. Uw stem is verwerkt.

Als u wilt kunt u de volgende gegevens bewaren. Uw stem:

<pre>$1</pre>

Deze is versleuteld met de publieke sleutel van de Verkiezingscommissie:

<pre>$2</pre>

Nu volgt de versleutelde versie. Deze is openbaar en na te zien op [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Terug]]',
	'boardvote_nosession'    => 'Uw Wikimedia-gebruikersnummer kan niet bepaald worden.
Meldt u zich aan in wiki waar u voldoet aan de eisen, en ga naar <nowiki>[[Special:Boardvote]]</nowiki>.
Gebruik een gebruiker met tenminste $1 bijdragen voor $2, en met tenminste $3 bewerkingen tussen $4 en $5.',
	'boardvote_notloggedin'  => 'U bent niet aangemeld.
U kunt stemmen als u voor $2 ten minste $1 bewerkingen hebt gemaakt en uw ten minste $3 bewerkingen hebt gemaakt tussen $4 en $5.',
	'boardvote_notqualified' => 'U kunt niet stemmen in deze verkiezing.
U moet tenminste $1 bewerkingen hebben gemaakt voor $2 en uw moet tenminste $3 bewerkingen hebben gemaakt tussen $4 en $5.',
	'boardvote_novotes'      => 'Er is nog niet gestemd.',
	'boardvote_time'         => 'Tijd',
	'boardvote_user'         => 'Gebruiker',
	'boardvote_edits'        => 'Bewerkingen',
	'boardvote_days'         => 'Dagen',
	'boardvote_ip'           => 'IP-adres',
	'boardvote_ua'           => 'User-agent',
	'boardvote_listintro'    => '<p>Hieronder staan alle stemmen die tot nu toe zijn
uitgebracht. $1 voor de versleutelde gegevens.</p>',
	'boardvote_dumplink'     => 'Klik hier',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Ongeldig',
	'boardvote_unstrike'     => 'Geldig',
	'boardvote_needadmin'    => 'Alleen leden van de Verkiezingscommissie kunnen deze handeling uitvoeren.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wikimedia Bestuursverkiezingen</a>:<!--  Vote open until July 12 -->',
	'boardvote_notstarted'   => 'Het stemmen is nog niet gestart',
	'boardvote_closed'       => 'De stemming is nu gesloten, zie binnenkort de [http://meta.wikimedia.org/wiki/Board_elections/2008/Results verkiezingspagina voor de resultaten].',
	'boardvote_edits_many'   => 'veel',
	'group-boardvote'        => 'Boardvote-beheerders',
	'group-boardvote-member' => 'Boardvote-beheerder',
	'grouppage-boardvote'    => '{{ns:project}}:Boardvote-beheerder',
	'boardvote_blocked'      => 'Sorry, u bent geblokkeerd op uw geregistreerde wiki. Geblokkeerde gebruikers mogen niet stemmen.',
	'boardvote_bot'          => 'Deze gebruiker staat geregistreerd als bot. Bots mogen geen stem uitbrengen.',
	'boardvote_welcome'      => "Welkom, '''$1'''!",
	'go_to_board_vote'       => 'Wikimedia Bestuursverkiezing 2008',
	'boardvote_redirecting'  => 'Vanwege een betere beveiliging en meer transparantie vinden de verkiezingen plaats op een externe, onafhankelijk beheerde server.

U wordt over 20 seconden omgeleid naar deze externe server. [$1 Klik hier] om er nu heen te gaan.

Het is mogelijk dat u een waarschuwing krijgt vanwege een niet ondertekend certificaat.',
	'right-boardvote'        => 'Verkiezingen beheren',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Jon Harald Søby
 * @author Eirik
 */
$messages['nn'] = array(
	'boardvote_user'    => 'Brukar',
	'boardvote_submit'  => 'OK',
	'boardvote_welcome' => "Velkomen, '''$1'''!",
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'boardvote'              => 'Valg til Wikimedia-styret',
	'boardvote-desc'         => '[[meta:Board elections|Styrevalg i Wikimedia Foundation]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Stem]]
* [[Special:Boardvote/list|Liste over stemmer]]
* [[Special:Boardvote/dump|Dump med kryptert stemmehistorie]]',
	'boardvote_intro'        => '<p>(informasjon)</p>',
	'boardvote_intro_change' => '<p>Du har stemt før. Du kan imidlertid endre din stemme ved hjelp av skjemaet nedenunder. Vennligst merk av boksene ved siden av kandidatene du vil gå god for.</p>',
	'boardvote_entered'      => 'Takk, din stemme er registrert.

Om du ønsker, kan du ta vare på følgende resultater. Din stemmegivingshistorikk er:

<pre>$1</pre>

Det er blitt kryptert med den offentlige nøkkelen fra valgadminsitratorene:

<pre>$2</pre>

Dette resulterer i den følgende krypterte versjonen. Den vil vises offentlig på [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Tilbake]]',
	'boardvote_nosession'    => 'Vi kan ikke verifisere Wikimedia-kontoen din.
Logg inn på wikien der du er kvalifisert til å stemme, og gå til <nowiki>[[Special:Boardvote]]</nowiki>. Du må bruke en konto med minst $1 redigeringer før $2, og ha gjort minst $3 redigeringer mellom $4 og $5.',
	'boardvote_notloggedin'  => 'Du er ikke logget inn.
For å stemme må du ha en konto med minst $1 redigeringer før $2, og ha gjort minst $3 redigeringer mellom $4 og $5.',
	'boardvote_notqualified' => 'Du er ikke kvalifisert til å stemme i dette valget.
For å stemme må du ha gjort minst $1 redigeringer før $2, og ha gjort minst $3 redigeringer mellom $4 og $5.',
	'boardvote_novotes'      => 'Ingen har stemt enda.',
	'boardvote_time'         => 'Tid',
	'boardvote_user'         => 'Bruker',
	'boardvote_edits'        => 'Redigeringer',
	'boardvote_days'         => 'Dager',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Brukeragent',
	'boardvote_listintro'    => '<p>Dette er en liste over alle stemmer som har blitt registrert hittil. $1 for krypterte data.</p>',
	'boardvote_dumplink'     => 'Klikk her',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Stryk',
	'boardvote_unstrike'     => 'Fjern strykning',
	'boardvote_needadmin'    => 'Kun valgadministratorer kan utføre dette.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Styrevalg i Wikimedia</a>',
	'boardvote_notstarted'   => 'Valget har ikke startet',
	'boardvote_closed'       => 'Stemmefasen er nå stengt, se [http://meta.wikimedia.org/w/index.php?title=Board_elections/2008/nb&uselang=nb resultatsiden] snart.',
	'boardvote_edits_many'   => 'mange',
	'group-boardvote'        => 'valgadministratorer',
	'group-boardvote-member' => 'valgadministrator',
	'grouppage-boardvote'    => '{{ns:project}}:Valgadministrator',
	'boardvote_blocked'      => 'Beklager, du har blitt blokkert på den registrerte wikien. Blokkerte brukere har ikke lov til å stemme.',
	'boardvote_welcome'      => "Velkommen, '''$1'''!",
	'go_to_board_vote'       => 'Styrevalg i Wikimedia 2008',
	'boardvote_redirecting'  => 'Stemmegivingen blir avholdt på en ekstern tjener som kontrolleres av en uavhengig tredjepart for å øke sikkerheten og åpenheten rundt valget. Du blir omdirigert til denne tjener om 20&nbsp;sekunder. [$1 Klikk her] for å gå direkte til tjeneren. Du vil muligens få en sikkerhetsadvarsel om et usignert sertifikat.',
	'right-boardvote'        => 'Administrere styrevalg',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'boardvote_time'  => 'Nako',
	'boardvote_user'  => 'Mošomiši',
	'boardvote_edits' => 'Fetogo',
	'boardvote_days'  => 'Matšatši',
);

/** Occitan (Occitan)
 * @author Cedric31
 * @author Siebrand
 */
$messages['oc'] = array(
	'boardvote'              => 'Eleccions al conselh d’administracion de la Wikimedia Foundation',
	'boardvote-desc'         => "[[meta:Board elections|Eleccions al Conselh d'administracion de Wikimèdia]]",
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vòte]]
* [[Special:Boardvote/list|Lista dels vòtes enregistrats]]
* [[Special:Boardvote/dump|Enregistraments criptats]]',
	'boardvote_intro'        => '<p>Benvenguda a las tresenas eleccions del conselh d\'administracion de <i><a href="http://wikimediafoundation.org/wiki/Acuèlh" class="extiw" title="foundation:Acuèlh">Wikimedia Foundation Inc.</a></i>. Votam per una persona que representarà la comunautat dels utilizaires suls diferents projèctes Wikimedia. Aquesta persona e lo conselh d\'administracion contribuiràn a orientar la direccion d\'aquestes projèctes e representaràn <i>vòstres</i> interèsses e preocupacions alprèp del conselh d\'administracion. Decidiràn dels mejans de finançament e de l\'afectacion dels fonses.</p> <p>Legissètz atentivament las declaracions dels candidats e lors responsas a las questions abans de votar. Totes los candidats son d\'utilizaires respectats, qu\'an balhat fòrça de temps e d\'esfòrces per far d\'aquestes projèctes un endrech acuelhant dedicat al desvolopament de la liura difusion del saber uman.</p> <p>Podètz votar per autant de candidats qu\'o desiratz. Lo que remportarà mai de voses serà declarat elegit pel pòst alqual s\'es presentat. En cas de balotatge, i aurà un vòte de departatge.</p> <p>Per mai d\'informacion, vejatz :</p> <ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Oc" class="extiw" title="meta:Election_FAQ_2008/Oc">FAQ sus las eleccions</a></li> <li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Oc" class="extiw" title="meta:Election_candidates_2008/Oc">Candidat-a-s</a></li></ul>',
	'boardvote_intro_change' => "<p>Ja avètz votat. Çaquelà, podètz modificar vòstre vòte en utilizant lo formulari çaijós. Mercés de marcar las casas en regard de cada candidat qu'a vòstre supòrt.</p></p>",
	'boardvote_entered'      => "Mercé, vòstre vòte es estat enregistrat. 

S'o desiratz, podètz enregistrar los detalhs seguents. Vòstre istoric de vòte es :

<pre>$1</pre>

Es estat criptat amb la clau publica dels escrutators oficials per l’eleccion : 

<pre>$2</pre> 

La version criptada seguís. Serà afichada publicament sus [[Special:Boardvote/dump]].

<pre>$3</pre> 

[[Special:Boardvote/entry|Retorn]]",
	'boardvote_nosession'    => 'Impossible de determinar vòstre identificant Wikimèdia. Rendètz-vos sus vòstre wiki d’origina, enregistratz-vos, e rendètz-vos sus la pagina <nowiki>[[Special:Boardvote]]</nowiki>. Vos cal aver un compte amb almens $1 contribucions efectuadas abans lo $2, e aver efectuat vòstra primièra edicion abans lo $3.',
	'boardvote_notloggedin'  => 'Actualament sètz pas autentificat. Per votar, devètz utilizar un compte comportant al mens $1 contribucions abans lo $2, e que la primièra remonte al $3.',
	'boardvote_notqualified' => "Respondètz pas a una de las condicions requesidas per votar a aqueste escrutin. Es necessari d’aver $3 contribucions abans lo $2, e n'avètz efectuadas $1. En mai, vòstra primièra modificacion data del $4, e deu aver estada facha abans lo $5.",
	'boardvote_novotes'      => 'Degun a pas encara votat.',
	'boardvote_time'         => 'Ora',
	'boardvote_user'         => 'Utilizaire',
	'boardvote_edits'        => 'Modificacions',
	'boardvote_days'         => 'Jorns',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Representant de l’utilizaire',
	'boardvote_listintro'    => 'Vaquí la lista de las personas que ja an votat :<br /><br />',
	'boardvote_dumplink'     => 'Clicatz aicí',
	'boardvote_submit'       => "D'acòrdi",
	'boardvote_strike'       => 'Raiar',
	'boardvote_unstrike'     => 'Desraiar',
	'boardvote_needadmin'    => 'Sols los administrators del vòte pòdon efectuar aquesta operacion.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Eleccions al conselh d’administracion Wikimedia</a> : Vòte dobert fins al 12 de julhet',
	'boardvote_notstarted'   => 'Lo vòte es pas encara començat',
	'boardvote_closed'       => "L’eleccion es d'ara enlà clausa. Lo resultat es proclamat sus [[meta:Election results 2008/oc|la pagina de resultats]] (oc).",
	'boardvote_edits_many'   => 'mantun',
	'group-boardvote'        => 'Membres votants del conselh d’administracion',
	'group-boardvote-member' => 'Membre votant del conselh d’administracion',
	'grouppage-boardvote'    => '{{ns:project}}:membre votant del conselh d’administracion',
	'boardvote_blocked'      => 'O planhèm, mas sètz estat(ada) blocat(ada) sus vòstra wiki d’origina. Los utilizaires blocats pòdon pas votar.',
	'boardvote_welcome'      => "Benvengut '''$1'''!",
	'go_to_board_vote'       => 'Tablèu de las eleccions Wikimèdia 2008',
	'boardvote_redirecting'  => 'Per mai de transparéncia e de seguretat lo vòte se desenròtla sus un serveire extèrn e independent. Seretz redirigit vèrs aqueste serveire extèrn en 20 segondas. [$1 Clicatz aicí] per i anar ara. Un avertiment concernent un certificat non signat benlèu serà afichat.',
	'right-boardvote'        => 'Administrar las eleccions',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'boardvote_time'   => 'Рæстæг',
	'boardvote_ip'     => 'IP-адрис',
	'boardvote_submit' => 'Афтæ уæд!',
);

/** Pangasinan (Pangasinan)
 * @author SPQRobin
 */
$messages['pag'] = array(
	'boardvote_novotes'    => 'Anggapo niy binmoto',
	'boardvote_days'       => 'Agew',
	'boardvote_dumplink'   => 'Click dia',
	'boardvote_notstarted' => 'Aga ni gimmapo so botoan',
	'boardvote_edits_many' => 'dakel',
);

/** Pampanga (Kapampangan)
 * @author SPQRobin
 * @author Katimawan2008
 */
$messages['pam'] = array(
	'boardvote'            => 'Alalan ning Wikimedia Board of Trustees',
	'boardvote_novotes'    => 'Ala pang mig botu',
	'boardvote_time'       => 'Oras',
	'boardvote_user'       => 'Talagamit',
	'boardvote_edits'      => 'Ding meyalili',
	'boardvote_days'       => 'Deng aldo',
	'boardvote_ua'         => 'Talagamit a mamajala',
	'boardvote_dumplink'   => 'Keni ya pindutan',
	'boardvote_needadmin'  => 'Den mung manibala king alalan (election administrator) ing makagawa kaniti.',
	'boardvote_notstarted' => 'Ing alalan epa megumpisa',
	'boardvote_edits_many' => 'dakal',
);

/** Polish (Polski)
 * @author Sp5uhe
 * @author Derbeth
 * @author Siebrand
 */
$messages['pl'] = array(
	'boardvote'              => 'Wybory do Rady Powierniczej Fundacji Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Mechanizm głosowania w wyborach do Rady powierniczej Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Głosuj]]
* [[Special:Boardvote/list|Pokaż listę głosów]]
* [[Special:Boardvote/dump|Zrzut zakodowanych danych wyborów]]',
	'boardvote_intro'        => '<p>Witamy na specjalnych wyborach do Rady Powierniczej Fundacji Wikimedia. 
Wybieramy dwóch Wikipedystów, którzy mają reprezentować społeczności użytkowników różnych
projektów Wikimedia. Pomogą oni w określeniu przyszłości projektów Wikimedia, 
pojedynczych i wszystkich ogólnie, a także będą reprezentować <em>wasz</em> głos i wszelkie 
sprawy w Radzie Powierniczej. Będą decydować jak zbierać pieniądze i w co je zainwestować.</p>

<p>Prosimy o uważne przeczytanie oświadczeń kandydatów i odpowiedzi na wszelkie 
pytania przed zagłosowaniem. Każdy z kandydatów jest cenionym użytkownikiem, który 
poświęcił swój czas i chęci dla rozwijaniu projektów tak, aby dalej służyły wolnemu 
rozpowszechnianiu ludzkiej wiedzy.</p>

<p>Możesz głosować na dowolną liczbę kandydatów. Kandydat z największą ilością głosów poparcia zostanie ogłoszony zwycięzcą. Jeżeli wybory zakończą się wynikiem remisowym, zostaną rozegrane drugie wybory mające na celu rozstrzygnąć remisową sytuację.</p>

<p>Więcej informacji:</p>
<ul><li><a href="http://meta.wikipedia.org/wiki/Election_FAQ_2008" class="external">FAQ wyborów</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/" class="external">Kandydaci</a></li></ul>',
	'boardvote_intro_change' => '<p>Już głosowałeś w tych wyborach. Możesz jednak zmienić swoje głosy za pomocą poniższego formularza. Zaznacz kandydatów, na których głosujesz.</p>',
	'boardvote_entered'      => 'Dziękujemy, twój głos został zapisany.

Jeśli chcesz, możesz zapisać poniższe informacje. Oto zapis Twojego głosu:

<pre>$1</pre>

Został on zakodowany poniższym kluczem publicznym Koordynatorów Wyborów:

<pre>$2</pre>

Oto zakodowana wersja. Będzie ona publicznie widoczna w [[Special:Boardvote/dump|zrzucie danych]].

<pre>$3</pre>

[[Special:Boardvote/entry|Wstecz]]',
	'boardvote_nosession'    => 'Nie można ustalić twojego ID użytkownika w projektach Wikimedia. Zaloguj się w wiki, gdzie edytujesz, i przejdź na stronę <nowiki>[[Special:Boardvote]]</nowiki>. Musisz mieć konto z przynajmniej $1 edycjami przed tą datą: $2, z pierwszą edycją przed tą datą: $3.',
	'boardvote_notloggedin'  => 'Nie jesteś zalogowany. Aby głosować musisz posiadać konto z wkładem minimum $1 edycji od $2 oraz pierwszą edycją wykonaną przed $3.',
	'boardvote_notqualified' => 'Niestety nie jesteś uprawniony do głosowania, ponieważ wykonałeś tylko $1 edycji. Aby móc głosować musisz mieć minimum $3 edycji wykonanych przed $2, a twoja pierwsza edycja powinna mieć miejsce przed $5. Swoją pierwszą edycję wykonałeś $4.',
	'boardvote_novotes'      => 'Nikt jeszcze nie głosował.',
	'boardvote_time'         => 'Czas',
	'boardvote_user'         => 'Użytkownik',
	'boardvote_edits'        => 'Edycje',
	'boardvote_days'         => 'dni',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Klient',
	'boardvote_listintro'    => '<p>Lista wszystkich głosów dotychczas oddanych. $1 dla zakodowanych danych.</p>',
	'boardvote_dumplink'     => 'Kliknij tutaj',
	'boardvote_submit'       => 'zagłosuj',
	'boardvote_strike'       => 'Skreślenie głosu',
	'boardvote_unstrike'     => 'Przywrócenie głosu',
	'boardvote_needadmin'    => 'Tylko koordynatorzy wyborów mogą wykonać tę akcję.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Wybory Rady Powierniczej Fudacji Wikimedia</a>:  głosowanie otwarte do 21 września',
	'boardvote_notstarted'   => 'Głosowanie nie zostało jeszcze rozpoczęte',
	'boardvote_closed'       => 'Głosowanie zostało zakończone, niedługo [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Pl na stronie wyborów] pojawią się wyniki.',
	'boardvote_edits_many'   => 'dużo',
	'group-boardvote'        => 'Koordynatorzy wyborów',
	'group-boardvote-member' => 'Koordynator wyborów',
	'grouppage-boardvote'    => '{{ns:project}}:Administrator wyborów',
	'boardvote_blocked'      => 'Przykro nam, ale zablokowani użytkownicy nie mogą głosować.',
	'boardvote_welcome'      => "Witamy, '''$1'''!",
	'go_to_board_vote'       => 'Wybory do Rady Powierniczej Fundacji Wikimedia 2008',
	'boardvote_redirecting'  => 'Ze względu na bezpieczeństwo i przejrzystość, głosowanie odbywa się na zewnętrznym, niezależnie kontrolowanym serwerze. Zostaniesz przekierowany na ten serwer za 20 sekund. [$1 Kliknij tu] aby przejść tam już teraz. Może pojawić się ostrzeżenie o niepodpisanym certyfikacie.',
	'right-boardvote'        => 'Wybory administatorów',
);

/** Piemontèis (Piemontèis)
 * @author Bèrto 'd Sèra
 * @author Siebrand
 */
$messages['pms'] = array(
	'boardvote'              => 'Elession dël Consej ëd Gestion dla Fondassion Wikimedia',
	'boardvote_entry'        => "* [[Special:Boardvote/vote|Voté]]
* [[Special:Boardvote/list|Vardé ij vot ch'a-i son al dì d'ancheuj]]
* [[Special:Boardvote/dump|Dëscarié la version segretà dij vot]]",
	'boardvote_intro'        => "<blockquote>
<p>
Bin ëvnù a la quarta elession dël Consej ëd Gestion dla Wikimedia, visadì dl'aotorità ch'a la goèrna la Fondassion Wikimedia. I soma antramentr ch'i votoma për sërne tre person-e ch'a rapresento la comun-a dj'utent dij vàire proget dla Wikimedia. Ste tre person-e ch'a saran elegiùe a travajeran për doj agn ant ël Consej ëd Gestion. A giutëran a determiné le diression che ij proget dla Wikimedia a l'avran ant lë vnì, tant pijait un për un che tuti ansema, e a rapresenteran j'anteressi e ij but <em>dj'eletor</em>. A l'avran da decide coma fé dl'incass për andé anans e coma spend-lo, antra vàire àotre ròbe.</p>

<p>Anans dë voté, për piasì ch'as lesa bin ij programa dij candidà e lòn ch'a l'han arspondù a vàire question. Minca candidà a l'é n'utent ch'a l'é vagnasse sò rispet ant sël camp, ën dand-se da fé con sò temp e sò sfòrs a fé an manera che sti proget a fusso un pòst ch'a fa piasì ess-ie, e ch'a fusso motobin dedicà a arsërchè e a spantié a gràtis la conossensa dl'òmo.</p>

<p>A peul voté për vàire candidà ch'a veul. Ij tre candidà che a la fin dle fin a l'avran pì 'd vot a saran elegiù. S'a-i dovèissa mai riveie na parità as ciamërìa n'elession supletiva antra coj ch'a son a pari mèrit.</p>

<p>Për piasì, ch'as visa ch'a peul mach voté da 'nt un proget sol. Bele che se a l'avèissa fait pì che 400 modìfiche an pì che un proget, lòn a vorerìa nen dì ch'a peul voté doe vire. Se pì anans a vorèissa cambié sò vot a podrìa felo, ma sempe da 'nt ël proget d'andova ch'a l'ha votà la prima vira.</p>

<p>Për savejne dë pì, ch'a varda:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ\" class=\"external\">Soèns an ciamo - Elession</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/en\" class=\"external\">Candidà</a></li></ul>
</blockquote>",
	'boardvote_intro_change' => "<p>Chiel/Chila a l'ha già votà. Comsëssìa, a peul sempe cambié sò vot ën dovrand la domanda ambelessì sota.
Për piasì, ch'a-i buta la crosëtta ansima a le casele dij candidà ch'a veul voté.</p>",
	'boardvote_entered'      => "Motobin mersì, sò vot a l'é stait registrà.

S'a veul, a peul marchesse sò detaj dla votassion. Sò vot a resta:

<pre>$1</pre>

A l'é stait butà via segretà con la ciav pùblica dj'Aministrator dj'Elession:

<pre>$2</pre>

Coma arzultà a në ven la version segretà ch'i jë smonoma ambelessì sota. A resta smonù al pùblich ant sla pàgina [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|André]]",
	'boardvote_nosession'    => "Ël sistema a-i la fa pa a determiné soa utensa ant la Wikimedia. Për piasì, ch'a rintra ant ël sistema da 'nt la wiki andova ch'a l'ha drit ëd vot, e d'ambelelì ch'a vada a<nowiki>[[Special:Boardvote]]</nowiki>. A dev dovré un cont ch'a l'abia fait almanch $1 contribussion anans dël $2, e dont soa prima modìfica a sia staita faita anans dël $3.

Ch'as visa ch'a l'ha dë regolé sò navigator (browser) an manera ch'a pija ij cookies da 'nt la màchina serventa esterna dle votassion: '''wikimedia.spi-inc.org'''.",
	'boardvote_notloggedin'  => "A l'é anco' pa rintra ant ël sistema. Për voté a venta dovré un cont con almanch $1 modìfiche faite anans dij $2, e dont prima modìfica a la sia staita faita anans dij $3.",
	'boardvote_notqualified' => "Chiel a l'ha nen drit al vot an st'elession-sì. Un për podej voté a dev avej fait almanch $3 modìfiche anans dël $2, e soa prima modìfica a dovrìa esse staita faita anans dël $5.",
	'boardvote_novotes'      => "A l'ha anco' pa votà gnun.",
	'boardvote_time'         => 'Data e ora',
	'boardvote_user'         => 'Utent',
	'boardvote_edits'        => 'Modìfiche',
	'boardvote_days'         => 'Dì',
	'boardvote_ua'           => "Agent dl'utent",
	'boardvote_listintro'    => "<p>Sòn a l'é la lista ëd tuti ij vot ch'a son ëstait registrà al dì d'ancheuj. $1 për ës-ciairé ij dat segretà.</p>",
	'boardvote_dumplink'     => "Ch'a-i bata ansima a sossì",
	'boardvote_submit'       => 'Bin parèj',
	'boardvote_strike'       => 'Gava ës vot-sì',
	'boardvote_unstrike'     => "Gava via l'anulament",
	'boardvote_needadmin'    => "Sossì a peulo felo mach j'aministrator dj'elession.",
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Elession dël Consej ëd Gestion dla Wikimedia</a>:  vot doèrt fin-a ij 12 ëd Luj',
	'boardvote_notstarted'   => "Ël vot a l'é anco' pa doèrt",
	'boardvote_closed'       => "La votassion a l'é già sarà, ch'a varda [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Pms la pàgina dj'elession] antra nen vàire për vëdde j'arzultà.",
	'boardvote_edits_many'   => 'vàire',
	'group-boardvote'        => 'Comità Eletoral',
	'group-boardvote-member' => 'Comissari eletoral',
	'grouppage-boardvote'    => '{{ns:project}}:Comissari eletoral',
	'boardvote_blocked'      => "Ch'a në scusa, ma chiel/chila a l'é stait(a) blocà ansima a la wiki andova a l'é registrà. J'utent blocà as ësmon-o sò drit ëd vot.",
	'boardvote_welcome'      => "Bin ëvnù(a) '''$1'''!",
	'go_to_board_vote'       => 'Elession dël Consej ëd Gestion dla Wikimedia dël 2008',
	'boardvote_redirecting'  => "Për na question a sigurëssa e trasparensa, ël vot as fa ansima a na màchina esterna, controlà daspërchila da an manera andipendenta.
A sarà ëmnà a sta màchina esterna antra 20 second. [$1 Ch;a bata ambelessì] për tramudesse prima.

Ch'a ten-a da ment che ën bogiandse a peul arsèive n'avis dla sigurëssa ëd sò calcolator, rësgoard a un certificà sensa firma.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'boardvote_novotes'    => 'تر اوسه هېچا رايه نه ده ورکړې.',
	'boardvote_time'       => 'وخت',
	'boardvote_user'       => 'کارونکی',
	'boardvote_days'       => 'ورځې',
	'boardvote_ua'         => 'د کارونکي پلاوی',
	'boardvote_dumplink'   => 'دلته وټوکۍ',
	'boardvote_submit'     => 'هو',
	'boardvote_notstarted' => 'تر اوسه پورې لا د رايو بهير نه دی پيل شوی.',
	'boardvote_welcome'    => "'''$1''' ته ښه راغلاست!",
);

/** Portuguese (Português)
 * @author Malafaya
 * @author 555
 * @author Brunoy Anastasiya Seryozhenko
 */
$messages['pt'] = array(
	'boardvote'              => 'Eleições para o Board of Trustees da Wikimedia Foundation',
	'boardvote-desc'         => '[[meta:Board elections|Eleições para o Conselho de Administração da Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Votar]]
* [[Special:Boardvote/list|Listar votos por data]]
* [[Special:Boardvote/dump|Dados encriptados da eleição]]',
	'boardvote_intro'        => '
<p>Bem-vindo à segunda edição das eleições para o Comité da Fundação Wikimedia. A votação irá designar duas pessoas para representar a comunidade de utilizadores nos vários projectos Wikimedia. Essas duas pessoas irão ajudar a determinar a orientação futura a seguir pelos projectos Wikimedia, individualmente ou como um todo, e representar os <em>seus</em> interesses e preocupações em relação ao Comité. Irão, também, tomar as decisões respeitantes ao financiamento e alocação de fundos.</p>

<p>Por favor, leia cuidadosamente os discursos dos candidatos e respostas a perguntas antes de votar. Cada um dos candidatos é um utilizador respeitado, consideravelmente em tempo e dedicação para tornar estes projectos um ambiente acolhedor empenhado na procura e livre distribuição do conhecimento humano.</p>

<p>Poderá votar em tantos candidatos quantos desejar. O candidato que apurar mais votos em cada posição será declarado vencedor dessa posição. Em caso de empate, serão lançadas votações para desempate.</p>

<p>Para mais informações, consulte:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">FAQ de eleição</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Candidatos</a></li></ul>
',
	'boardvote_intro_change' => '<p>Já votou anteriormente. Contudo pode alterar o seu voto utilizando o formulário abaixo. Por favor marque a caixa ao lado de cada candidato que aprovar.</p>',
	'boardvote_entered'      => 'Obrigado, o seu voto foi registado.

Se desejar pode guardar os seguintes detalhes. O seu registo de voto é:

<pre>$1</pre>

Foi encriptado com a chave pública dos Administradores da Eleição:

<pre>$2</pre>

A versão da encriptação segue-se, e será publicada em [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Voltar]]',
	'boardvote_nosession'    => 'Não foi possível determinar o seu ID de utilizador Wikimedia. Por favor, efectue login no wiki onde está qualificado e vá a <nowiki>[[Special:Boardvote]]</nowiki>. Deverá usar uma conta com pelo menos $1 contribuições antes de $2, e com a primeira edição antes de $3.',
	'boardvote_notloggedin'  => 'Não se encontra autentificado. De modo a poder votar, deve utilizar uma conta com pelo menos $1 contribuições antes de $2.',
	'boardvote_notqualified' => 'Desculpe, mas só fez $1 edições antes de $2. Precisa de ter no mínimo $3 edições de modo a poder votar.',
	'boardvote_novotes'      => 'Ninguém votou até ao momento.',
	'boardvote_time'         => 'Data',
	'boardvote_user'         => 'Utilizador',
	'boardvote_edits'        => 'Contribuições',
	'boardvote_days'         => 'Dias',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Agente do utilizador',
	'boardvote_listintro'    => '<p>Esta é uma lista de todos votos registados até à data. $1 para os dados encriptados.</p>',
	'boardvote_dumplink'     => 'Clique aqui',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Riscar',
	'boardvote_unstrike'     => 'Limpar risco',
	'boardvote_needadmin'    => 'Apenas administradores podem efectuar esta operação.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Especial:Boardvote/vote}}">Comité da Fundação Wikimedia</a>: Votação aberta até 12 de Julho',
	'boardvote_notstarted'   => 'A votação ainda não começou',
	'boardvote_closed'       => 'As eleições estão agora encerradas, ver [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Pt a página de eleições para os resultados] brevemente.',
	'boardvote_edits_many'   => 'muitos',
	'group-boardvote'        => 'Board vote administradores',
	'group-boardvote-member' => 'Board vote administrador',
	'grouppage-boardvote'    => '{{ns:project}}:Administrador da votação para o Conselho',
	'boardvote_blocked'      => 'Desculpe, mas a sua conta foi bloqueada no seu wiki de registo. Utilizadores bloqueados não estão autorizados a votar.',
	'boardvote_welcome'      => "Bem-vindo, '''$1'''!",
	'go_to_board_vote'       => 'Eleições para o Conselho de Administração da Wikimedia 2008',
	'boardvote_redirecting'  => 'Para maior segurança e transparência, estamos a realizar a votação num servidor externo controlado independentemente.

Será redireccionado para este servidor externo dentro de 20 segundos. [$1 Clique aqui] para ser redireccionado agora.

Um aviso de segurança sobre um certificado não assinado poderá eventualmente ser apresentado.',
	'right-boardvote'        => 'Administrar eleições',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'boardvote'             => 'Wikimedia sunqullisqa runakunata akllanakuy',
	'boardvote-desc'        => '[[meta:Board elections|Wikimedia sunqullisqa runakunata akllanakuy]]',
	'boardvote_entry'       => '* [[Special:Boardvote/vote|Runata akllay]]
* [[Special:Boardvote/list|Ña akllanapaq nisqa kunkakuna]]
* [[Special:Boardvote/dump|Pakaykusqa akllana qillqamusqakuna]]',
	'boardvote_novotes'     => 'Manaraqmi pipas akllarqanchu.',
	'boardvote_time'        => 'Pacha',
	'boardvote_user'        => 'Ruraq',
	'boardvote_edits'       => "Llamk'apusqakuna",
	'boardvote_days'        => "P'unchawkuna",
	'boardvote_listintro'   => '<p>Kayqa kunankama musyasqaña akllasqakunam. $1 pakaykusqa willakunapaq.</p>',
	'boardvote_dumplink'    => "Kaypi ñit'iy",
	'boardvote_strike'      => "Siq'ipay",
	'boardvote_unstrike'    => "Amaña siq'ipaychu",
	'boardvote_edits_many'  => 'achka',
	'boardvote_welcome'     => "Allinmi hamusqayki '''$1'''!",
	'boardvote_redirecting' => "Akllanakuytaqa hawa, huk runakunap kamachisqan sirwiqpim rurachkanchik aswan qasi astawan rikunalla kananpaq.

Iskay chunka sikundupim chay hawa sirwiqman pusasqaykiku. [$1 Kaypi ñit'iy] chayman kunan rinaykipaq.

Mana silq'usqa illumanta qasi yuyampay rikch'akunqachá.",
);

$messages['rm'] = array(
	'boardvote_user'          => 'Utilisader',
	'boardvote_welcome'       => 'Chau \'\'\'$1\'\'\'!',
);
$messages['ro'] = array(
	'boardvote_novotes'       => 'Nimeni nu a votat încă.',
	'boardvote_time'          => 'Timp',
	'boardvote_user'          => 'Utilizator',
	'boardvote_edits'         => 'Modificări',
	'boardvote_days'          => 'Zile',
	'boardvote_ip'            => 'IP',#identical but defined
	'boardvote_listintro'     => '<p>Aceasta este o listă a tuturor voturilor înregistrate până acum. $1 pentru datele criptate.</p>',
	'boardvote_submit'        => 'OK',#identical but defined
	'boardvote_notstarted'    => 'Votarea încă nu a început',
);

/** Russian (Русский)
 * @author .:Ajvol:.
 * @author HalanTul
 */
$messages['ru'] = array(
	'boardvote'              => 'Выборы в Совет поверенных фонда «Викимедиа»',
	'boardvote-desc'         => '[[meta:Board elections|Выборы в Совет поверенных Викимедиа]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Проголосовать]]
* [[Special:Boardvote/list|Посмотреть список уже проголосовавших]]
* [[Special:Boardvote/dump|Посмотреть зашифрованную запись голосов]]',
	'boardvote_intro'        => '
<p>Добро пожаловать на выборы в Совет поверенных фонда «Викимедиа». Мы голосуем с целью избрать двух представителей сообществ участников различных проектов Викимедиа. Они должны будут помогать нам определить вектор будущего развития проектов Викимедиа и представлять <em>ваши</em> интересы в Совете поверенных. Они призваны решать проблемы привлечения финансирования и размещения привлеченных ресурсов.</p>

<p>Пожалуйста, внимательно прочитайте заявления кандидатов и ответы на вопросы прежде чем голосовать. Все кандидаты — уважаемые пользователи, пожертвовавшие существенным временем и усилиями, чтобы улучшить наши проекты и сделать их привлекательной средой, цель которой поиск и свободное распространение знаний человечества.</p>

<p>Вы можете голосовать за любое число кандидатов. Кандидат, набравший наибольшее число голосов на любую из двух позиций, будет объявлен победителем в выборах на эту позицию. В случае равенства кандидатов будет проведено повторное голосование с выбыванием наименее популярных кандидатов.</p>

<p>Дополнительная информация:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Часто задаваемые вопросы о выборах</a></li> <li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Ru" class="external">Кандидаты</a></li></ul>
',
	'boardvote_intro_change' => '<p>Вы уже проголосовали. Тем не менее, с помощью приведённой ниже формы вы можете изменить свое решение. Пожалуйста, отметьте тех кандидатов, кандидатуры которых вы поддерживаете.</p>',
	'boardvote_entered'      => 'Спасибо, ваш голос учтён.

При желании, вы можете записать следующую информацию. Номер вашего бюллетеня:

<pre>$1</pre>

Он зашифрован с открытым ключом администрации выборов:

<pre>$2</pre>

Зашифрованный текст приведен ниже. Любой желающий сможет найти его на странице [[Special:Boardvote/dump]]. 

<pre>$3</pre>

[[Special:Boardvote/entry|Назад]]',
	'boardvote_nosession'    => 'Невозможно определить ваш идентификатор участника Викимедии.
Пожалуйста, представьтесь в проекте, где ваша учётная запись удовлетворяет предъявляемым требованиям и перейдите на страницу <nowiki>[[Special:Boardvote]]</nowiki>.
Требования к учётной записи: $1 правок до $2, не менее $3 правок с $4 по $5.',
	'boardvote_notloggedin'  => 'Вы не представились. Чтобы проголосовать, вы должны быть зарегистрированным пользователем и сделать не менее $1 правок до $2, первая правка должна быть до $3.',
	'boardvote_notqualified' => 'Извините, на вашем счету лишь $3 правок до $2. Необходимо как минимум $1 для участия в голосовании. Ваше первая правка была сделана $4, к голосованию допускаются только участники сделавшие первую правку до $5.',
	'boardvote_novotes'      => 'Никто ещё не проголосовал. ',
	'boardvote_time'         => 'Время',
	'boardvote_user'         => 'Участник',
	'boardvote_edits'        => 'Число правок',
	'boardvote_days'         => 'Дни',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Браузер',
	'boardvote_listintro'    => '<p>Это список всех принятых на данный момент бюллетеней для голосования. В зашифрованном виде они доступны $1.</p>',
	'boardvote_dumplink'     => 'здесь',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Зачеркнуть',
	'boardvote_unstrike'     => 'Убрать зачёркивание',
	'boardvote_needadmin'    => 'Эта операция доступна только администрации выборов.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Выборы в Совет поверенных фонда «Викимедиа»</a>: Голосование открыто до 12 июля',
	'boardvote_notstarted'   => 'Голосование ещё не началось',
	'boardvote_closed'       => 'Голосование окончено, см. [[m:Elections for the Board of Trustees of the Wikimedia Foundation, 2008/En|страницу результатов]].',
	'boardvote_edits_many'   => 'много',
	'group-boardvote'        => 'Члены избиркома',
	'group-boardvote-member' => 'член избиркома',
	'grouppage-boardvote'    => '{{ns:project}}:Член избиркома',
	'boardvote_blocked'      => 'Извините, но вы заблокированы в вашем вики-проекте. Заблокированные участники не могут голосовать.',
	'boardvote_bot'          => 'Извините, в вики, где вы зарегистрированы, у вас установлен флаг бота. Учётные записи ботов не допускаются к голосованию.',
	'boardvote_welcome'      => "Добро пожаловать, '''$1'''!",
	'go_to_board_vote'       => 'Выборы в совет поверенных Викимедиа 2008',
	'boardvote_redirecting'  => 'Для увеличения безопасности и прозрачности мы проводим голосование на внешнем, независимо управляемом сервере.

Вы будете перенаправлены на этот внешний сервер через 20 секунд. [$1 Нажмите сюда], чтобы перейти туда прямо сейчас.

Может возникнуть сообщение о неподписанном сертификате.',
	'right-boardvote'        => 'администрирование выборов',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 * @author Siebrand
 */
$messages['sah'] = array(
	'boardvote'              => '"Викимедиа" Сүбэтин быыбара',
	'boardvote-desc'         => '[[meta:Board elections|Викимедиа пуондатын Сүбэтигэр быыбар]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Куоластыырга]]
* [[Special:Boardvote/list|Куоластаабыттар испииһэктэрэ]]
* [[Special:Boardvote/dump|Куоластааһын хаамыыта (ким туохха куоластаабыта көрдөрүллүбэт)]]',
	'boardvote_intro'        => '<p>«Викимедиа» пуондатын Сүбэтин (Совет поверенных, Wikimedia Board of Trustees) быыбарыгар нөрүөн нөргүй! Мы голосуем с целью избрать двух представителей сообществ участников различных проектов Викимедиа. Кинилэр биһиэхэ Викимедиа бырайыактарын кэскиллээх сайдыытын быһаарарга көмөлөһүөхтэрэ уонна <em>эһиги</em> иннигитин Сүбэҕэ көмүскүөхтэрэ. Кинилэр үбү булууну уонна үбү хайдах туһанар туһунан боппуруостары быһаарсыахтара.</p>

<p>Бастаан кандидааттар этиилэрин уонна ыйытыыга хоруйдарын ааҕан баран куоластааҥ. Кандидааттар бары — бар дьоҥҥо билиини булар уонна биэрэр соруктаах биһиги бырайыактарбытын тупсарыыга элбэх сыраларын биэрбит ытыктанар дьон.</p>

<p>Биир киһи хас баҕарар кандидаакка куоластыан сөп. Саамай элбэх куолаһы ылбыт кандидааттар кыайыыны ылыахтара. Куолас тэҥнэһэр түбэлтэтигэр иккистээн куоластааһын ыытыллыаҕа.</p>

<p>Эбии маны көрүөххэ сөп:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Быыбар туһунан элбэхтик бэриллэр ыйытыылар</a></li> <li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Ru" class="external">Кандидааттар</a></li></ul>',
	'boardvote_intro_change' => '<p>Эн куоластаабыккын. Ол гынан баран манна баар куорманы туһанан урукку быһаарыныыгын уларытыаххын сөп. Өйүөххүн баҕарар кандидааттаргын бэлиэтээ.</p>',
	'boardvote_entered'      => 'Махтал, эн куолаһыҥ ааҕылынна.

Баҕарар буоллаххына манна бэриллибит сибидиэнньэлэри устан ылыаххын сөп. Бүллүтүөнүҥ нүөмэрэ:

<pre>$1</pre>

Атын киһи көрөрүттэн хаххаламмыт күлүүһэ:

<pre>$2</pre>

Сиипирдэммит тиэкис аллара көстөр. Ким баҕалаах ону бу сирэйгэ булуон сөп [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Төнүн]]',
	'boardvote_nosession'    => 'Викимедияҕа кыттар идентификаторгын кыайан система булбата. Бука диэн көрдөбүллэргэ эппиэттиир ааккынан (атын Викимедиа бырайыактара да буоллун) киирэн баран маннык сирэйгэ киир <nowiki>[[Special:Boardvote]]</nowiki>. Көрдөбүллэр: $1 көннөрүүнү бу күҥҥэ $2 дылы оҥорбут буолуохтааххын, бастакы көннөрүүҥ баччаҕа $3 дылы оҥоһуллубут буолуохтаах.',
	'boardvote_notloggedin'  => 'Эн ааккын билиһиннэрбэтэххин. Куоластыаххын баҕарар буоллаххына бэлиэтэммит кыттааччы буолуохтааххын уонна $1 көннөрүүнү $2 дылы оҥорбут буолуохтааххын. Бастакы көннөрүүҥ баччаҕа $3 дылы оҥоһуллубут буолуохтаах.',
	'boardvote_notqualified' => 'Эн бу аатынан бу күҥҥэ дылы $2 $3 көннөрүүнү эрэ оҥорбуккун. Куоластааһыҥҥа кыттарга $1 наада. Бастакы көннөрүүҥ $4 оҥоһуллубут, куоластааһыҥҥа баччаҕа $5 дылы бастакы көннөрүүнү оҥорбуттар кыттар кыахтаахтар.',
	'boardvote_novotes'      => 'Ким да куоластыы илик',
	'boardvote_time'         => 'Кэм',
	'boardvote_user'         => 'Кыттааччы',
	'boardvote_edits'        => 'Көннөрүүлэр',
	'boardvote_days'         => 'Күннэр',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Браузер',
	'boardvote_listintro'    => '<p>Бу быыбар бүллэтиэннэрин испииһэгэ. Билиҥҥи түмүгүн манна: $1 көрүөххэ сөп (ким туох иһин куоластаабыта көстүбэт).</p>',
	'boardvote_dumplink'     => 'Маны баттаа',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Соторго',
	'boardvote_unstrike'     => 'Сотууну суох гынарга',
	'boardvote_needadmin'    => 'Бу дьайыыны быыбары тэрийээччилэр эрэ оҥорор кыахтаахтар.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">«Викимедиа» пуонда Сүбэтигэр быыбар </a>: Куоластааһын от ыйын 12 күнүгэр дылы барар',
	'boardvote_notstarted'   => 'Куоластааһын саҕалана илик',
	'boardvote_closed'       => 'Куоластааһын түмүктэннэ, [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En быыбар түмүгүн манна көр].',
	'boardvote_edits_many'   => 'элбэх',
	'group-boardvote'        => 'Быыбар хамыыһыйатын чилиэннэрэ',
	'group-boardvote-member' => 'Быыбар хамыыһыйатын чилиэнэ',
	'grouppage-boardvote'    => '{{ns:project}}:Быыбар хамыыһыйатын чилиэнэ',
	'boardvote_blocked'      => 'Бука диэн баалаама, эн бу биикигэ тугу эмит гынарыҥ бобуллубут. Онон сатаан куоластыыр кыаҕыҥ суох.',
	'boardvote_welcome'      => "Нөрүөн нөргүй, '''$1'''!",
	'go_to_board_vote'       => 'Викимедиа Сүбэтин быыбара - 2008',
	'boardvote_redirecting'  => 'Куттала суох буоллун уонна аһаҕас кэпсэтии таҕыстын диэн куоластааһыны атын сиэрбэргэ ыытабыт.

Эн ол сиэрбэргэ 20 сөкүүндэннэн утаарыллыаҥ. [$1 Маны баттаатаххына], онно тута барыаҥ.

Илии баттамматах сэртипикээт туһунан биллэрии тахсыан сөп.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Siebrand
 */
$messages['sk'] = array(
	'boardvote'              => 'Voľby do Správnej rady Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Voľby do Rady Rady správcov Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Hlasovať]]
* [[Special:Boardvote/list|Zobraziť doterajšie hlasy]]
* [[Special:Boardvote/dump|Vypísať kryptovaný záznam volieb]]',
	'boardvote_intro'        => '<p>Vitajte v druhých voľbách do Rady správcov Wikimedia. Hlasujeme za
dvoch ľudí, ktorí budú reprezentovať komunitu používateľov rozličných
projektov Wikimedia. Pomôžu určiť budúce smerovanie projektov Wikimedia,
ako jednotlivci a ako skupina, a budú reprezentovať <em>vaše</em>
záujmy v Rade správcov. Budú rozhodovať o spôsoboch tvorby zisku
a rozdelení získaných peňazí.</p>

<p>Prosím, prečítajte si pozorne vyhlásenia kandidátov a ich odpovede predtým,
než zahlasujete. Každý z kandidátov je rešpektovaný používateľ, ktorý prispel
nezanedbateľným časom a snahou urobiť z týchto projektov príjemné prostredie
oddané zbieraniu a šíreniu ľudského poznania.</p>

<p>Môžete hlasovať za toľko kandidátov, koľko chcete. Kandidát s najväčším
počtom hlasov hlasov na každej pozícii bude vyhlásený za víťaza danej
pozície. V prípade remízy sa bude konať ďalšia voľba medzi nimi.</p>

<p>Viac informácií nájdete na:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Často kladené otázky o voľbách</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Kandidáti</a></li></ul>',
	'boardvote_intro_change' => '<p>Už ste hasovali. Môžete však zmeniť svoj hlas vo formulári dolu. Prosím, označte pole pri každom kandidátovi, ktorého schvaľujete.</p>',
	'boardvote_entered'      => 'Ďakujeme, váš hlas bol zaznamenaný.

Ak si želáte, môžete si uchovať nasledovné podrobnosti. Váš záznam o hlasovaní je:

<pre>$1</pre>

Bol zakryptovaný verejným kľúčom Správcov volieb:

<pre>$2</pre>

Nasleduje výsledná zakryptovaná verzia. Zobrazí sa verejne na [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Späť]]',
	'boardvote_nosession'    => 'Nedá sa určiť váš používateľský ID na projekte Wikimedia. Prosím, prihláste sa na wiki, na ktorej ste oprávnení a choďte na <nowiki>[[Special:Boardvote]]</nowiki>. Musíte použiť účet s aspoň $1 príspevkami pred $2, ktorý má prvú úpravu pred $3.',
	'boardvote_notloggedin'  => 'Nie ste prihlásený. Aby ste mohli hlasovať, musíte použiť účet s aspoň $1 príspevkami pred $2, ktorý má prvú úpravu pred $3.',
	'boardvote_notqualified' => 'Nemáte oprávnenie hlasovať v týchto voľbách. Museli by ste urobiť $3 úprav pred $2 a vaša prvá úprava by musela byť pred $5.',
	'boardvote_novotes'      => 'Nikto ešte nevolil.',
	'boardvote_time'         => 'Čas',
	'boardvote_user'         => 'Používateľ',
	'boardvote_edits'        => 'Úpravy',
	'boardvote_days'         => 'Dni',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Prehliadač',
	'boardvote_listintro'    => '<p>Toto je zoznam všetkých doteraz zaznamenaných hlasov. Kliknutím sem získate $1.</p>',
	'boardvote_dumplink'     => 'kryptované údaje',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Začiarknuť',
	'boardvote_unstrike'     => 'Zrušiť začiarknutie',
	'boardvote_needadmin'    => 'Túto operáciu môžu vykonávať iba správcovia hlasovania.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Voľby do Rady Wikimedia</a>:  Hlasovanie je otvorené do 12. júla',
	'boardvote_notstarted'   => 'Hlasovanie sa ešte nezačalo.',
	'boardvote_closed'       => 'Hlasovanie je teraz zatvorené, čoskoro budú dostupné [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En výsledky na stránke hlasovania].',
	'boardvote_edits_many'   => 'mnoho',
	'group-boardvote'        => 'Správcovia volieb do Rady',
	'group-boardvote-member' => 'Správca volieb do Rady',
	'grouppage-boardvote'    => '{{ns:project}}:Správca volieb do Rady',
	'boardvote_blocked'      => 'Je nám ľúto, boli ste zablokovaní na wiki na ktorej ste zaregistrovaný. Zablokovaní používatelia nemôžu hlasovať.',
	'boardvote_welcome'      => "Vitaj '''$1'''!",
	'go_to_board_vote'       => 'Voľby do Správnej rady Wikimedia 2008',
	'boardvote_redirecting'  => 'Pre lepšiu bezpečnosť a transparentnosť prevádzkujeme voľby na externom, nezávisle riadenom serveri.

Budete presmerovaní na túto externú stránku o 20 sekúnd. Okamžite tam prejdete [$1 kliknutím sem].

Môže sa zobraziť bezpečnostné varovanie o nepodpísanom certifikáte.',
	'right-boardvote'        => 'Spravovať voľby',
);

/** ћирилица (ћирилица)
 * @author Sasa Stefanovic
 */
$messages['sr-ec'] = array(
	'boardvote'              => 'Избор за Одбор повереника Викимедија Фондације',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Гласај]]
* [[Special:Boardvote/list|Списак гласова до датума]]
* [[Special:Boardvote/dump|Енкриптован запис гласања]]',
	'boardvote_intro'        => '
<p>Добро дошли на треће изборе за Викимедијин Одбор повереника.
Гласамо за једну особу која би представљала заједницу корисника разних Викимедијиних пројеката.
Она ће помоћи да се утврди будући смер којим ће Викимедијини пројекти да се крећу,
индивидуално и као група, и представљаће <em>ваше</em> интересе и бриге Одбору повереника.
Одлучиће како да се стварају приноси и како да се расподели прикупљен новац.</p>

<p>Молимо прочитајте изјаве кандидата и одговоре на претраге пажљиво пре него што гласате.
Сваки од кандидата је поштовани корисник, који је допринео значајним временом и напорима да
ови пројекти буду добродошло окружење са слободном дистрибуцијом људског знања као циљем.</p>

<p>Можете гласати за онолико кандидата за колико желите. Кандидат са највише гласова у сваком положају
ће бити проглашени победником тог положаја. У случају нерешеног, ново гласање ће бити одржано.</p>

<p>За више информација, погледајте:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Најчешће постављена питања избора</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Кандидати</a></li></ul>
',
	'boardvote_intro_change' => '<p>Гласали сте раније. Међутим, можете променити ваш глас користећи формулар испод.
Молимо одаберите кандидате за које гласате.</p>',
	'boardvote_entered'      => 'Хвала вам, ваш глас је снимљен.

Уколико желите, можете сачувати следеће детаље. Ваше гласачки снимак је:

<pre>$1</pre>

Шифриран је јавним кључем администратора гласања:

<pre>$2</pre>

Следи резултујућа шифрирана верзија. Биће јавно представљена на [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Назад]]',
	'boardvote_notloggedin'  => 'Нисте пријављени. Да бисте гласали, морате да имате налог са бар $1 измена пре $2, где је прва измена пре $3.',
	'boardvote_notqualified' => 'Жао нам је, нисте квалификовани да гласате на овом избору. Морате да имате овде бар $3 измена пре $2, а ви имате $1. Такође, ваша прва измена на овом викију је била у $4, а треба да буде пре $5.',
	'boardvote_novotes'      => 'Још нико није гласао.',
	'boardvote_time'         => 'Време',
	'boardvote_user'         => 'Корисник',
	'boardvote_edits'        => 'Измена',
	'boardvote_days'         => 'Дана',
	'boardvote_ip'           => 'ИП',
	'boardvote_ua'           => 'Кориснички агент',
	'boardvote_listintro'    => '<p>Ово је списак свих гласова који су снимљени до сада. $1 за шифриране податке.</p>',
	'boardvote_dumplink'     => 'Кликните овде',
	'boardvote_submit'       => 'У реду',
	'boardvote_strike'       => 'Прецртано',
	'boardvote_unstrike'     => 'Непрецртано',
	'boardvote_needadmin'    => 'Само администратори гласања могу да изводе ову операцију.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Избори за Викимедијин Одбор</a>:  Гласање отворено до 21. септембра',
	'boardvote_notstarted'   => 'Гласање још није почело',
	'boardvote_closed'       => 'Гласање је завршено, погледајте [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En страницу за гласање за резултате] ускоро.',
	'boardvote_edits_many'   => 'много',
	'group-boardvote'        => 'изборна комисија',
	'group-boardvote-member' => 'изборна комисија',
	'grouppage-boardvote'    => '{{ns:project}}:Администратор гласања за Одбор',
	'boardvote_blocked'      => 'Жао нам је, блокирани сте на вашој Вики. Блокираним корисницима је забрањено да гласају.',
	'boardvote_welcome'      => "Добро дошли '''$1'''!",
);


$messages['sr-el'] = array(
	'boardvote'               => "Izbor za Odbor poverenika Vikimedija Fondacije",
	'boardvote_entry'         => "* [[Special:Boardvote/vote|Vote]]
* [[Special:Boardvote/list|Spisak glasova do datuma]]
* [[Special:Boardvote/dump|Enkriptovan zapis glasanja]]",
	'boardvote_intro'         => "
<p>Dobro došli na treće izbore za Vikimedijin Odbor poverenika.
Glasamo za jednu osobu koja bi predstavljala zajednicu korisnika raznih Vikimedijinih projekata.
Ona će pomoći da se utvrdi budući smer kojim će Vikimedijini projekti da se kreću,
individualno i kao grupa, i predstavljaće <em>vaše</em> interese i brige Odboru poverenika.
Odlučiće kako da se stvaraju prinosi i kako da se raspodeli prikupljen novac.</p>

<p>Molimo pročitajte izjave kandidata i odgovore na pretrage pažljivo pre nego što glasate.
Svaki od kandidata je poštovani korisnik, koji je doprineo značajnim vremenom i naporima da
ovi projekti budu dobrodošlo okruženje sa slobodnom distribucijom ljudskog znanja kao ciljem.</p>

<p>Možete glasati za onoliko kandidata za koliko želite. Kandidat sa najviše glasova u svakom položaju
će biti proglašeni pobednikom tog položaja. U slučaju nerešenog, novo glasanje će biti održano.</p>

<p>Za više informacija, pogledajte:</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">Najčešće postavljena pitanja izbora</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">Kandidati</a></li></ul>
",
	'boardvote_intro_change'  => "<p>Glasali ste ranije. Međutim, možete promeniti vaš glas koristeći formular ispod.
Molimo odaberite kandidate za koje glasate.</p>",
	'boardvote_footer'        => "&nbsp;", # Do not translate this
	'boardvote_entered'       => "Hvala vam, vaš glas je snimljen.

Ukoliko želite, možete sačuvati sledeće detalje. Vaše glasački snimak je:

<pre>$1</pre>

Šifriran je javnim ključem administratora glasanja:

<pre>$2</pre>

Sledi rezultujuća šifrirana verzija. Biće javno predstavljena na [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Nazad]]",
	'boardvote_notloggedin'   => "Niste prijavljeni. Da biste glasali, morate da imate nalog sa bar $1 izmena pre $2, gde je prva izmena pre $3.",
	'boardvote_notqualified'  => "Žao nam je, niste kvalifikovani da glasate na ovom izboru. Morate da imate ovde bar $3 izmena pre $2, a vi imate $1. Takođe, vaša prva izmena na ovom vikiju je bila u $4, a treba da bude pre $5.",
	'boardvote_novotes'       => "Još niko nije glasao.",
	'boardvote_time'          => "Vreme",
	'boardvote_user'          => "Korisnik",
	'boardvote_edits'         => "Izmena",
	'boardvote_days'          => "Dana",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "Korisnički agent",
	'boardvote_listintro'     => "<p>Ovo je spisak svih glasova koji su snimljeni do sada. $1 za šifrirane podatke.</p>",
	'boardvote_dumplink'      => "Kliknite ovde",
	'boardvote_submit'        => 'U redu',
	'boardvote_strike'        => "Precrtano",
	'boardvote_unstrike'      => "Neprecrtano",
	'boardvote_needadmin'     => "Samo administratori glasanja mogu da izvode ovu operaciju.",
	'boardvote_sitenotice'    => "<a href=\"{{localurle:Special:Boardvote/vote}}\">Izbori za Vikimedijin Odbor</a>:  Glasanje otvoreno do 21. septembra",
	'boardvote_notstarted'    => 'Glasanje još nije počelo',
	'boardvote_closed'        => 'Glasanje je završeno, pogledajte [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En stranicu za glasanje za rezultate] uskoro.',
	'boardvote_edits_many'    => 'mnogo',
	'group-boardvote'         => 'izborna komisija',
	'group-boardvote-member'  => 'izborna komisija',
	'grouppage-boardvote'     => '{{ns:project}}:Administrator glasanja za Odbor',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 * @author Maartenvdbent
 * @author Siebrand
 */
$messages['stq'] = array(
	'boardvote'              => 'Woalen tou dät Wikimedia-Kuratorium',
	'boardvote-desc'         => '[[meta:Board elections|Woalen tou dät Wikimedia-Kuratorium]]',
	'boardvote_entry'        => '* [[meta:Board elections/2008/Candidates/de|Kandidoatenfoarstaalengen]]
* [[{{ns:special}}:Boardvote/vote|Oustämme]]
* [[{{ns:special}}:Boardvote/list|Bit nu ouroate Stämmen]]
* [[{{ns:special}}:Boardvote/dump|Ferslöätelde Woaliendraage]]',
	'boardvote_intro'        => '<blockquote>
<p>
Wäilkuumen tou ju fjoode Woal tou dät Wikimedia-Kuratorium, dät Ferwaltengsorgoan fon ju Wikimedia-Foundation. Der wäide träi Benutsere wääld, uum ju Community fon do Wikimediane in do ferscheedene Wikimedia-Projekte tou repräsentierjen. Disse träi Benutsere wäide foar n Tiedruum fon two Jiere wääld. Jo wollen deerbie hälpe, ju kuumende Gjuchte fon do Wikimedia-Projekte fäästtoulääsen, eenpeld un as Gruppe un jo repräsentierje <em>dien</em> Interessen un Belange. Jo wollen ieuwenske fuul uur Dingere uur do Iennoamen un Uutgoawen äntscheede.
</p>

<p>Foar dien Woal läs do Kandidoatenfoarstaalengen un hiere Oantwoude ap Froagen. Älke Kandidoat is n respektierden Benutser, die der al fuul Tied bruukt häd, uum do Projekte n positiv Uumfäild foar ju fräie Ferspreedenge fon moanskelk Wieten tou reeken.</p>

<p>Du duurst foar so fuul Kandidoaten stämme as du moatest. Do träi Kandidoaten mäd do maaste Stämmen wollen do Siegere weese. Rakt et n Uunäntscheeden, wol et n Stichwoal reeke.</p>

<p>Beoachte, dät du bloot uut aan Projekt hääruut wääle doarst. Uk wan du älkemoal moor as 400 Beoarbaidengen in moorere Projekten hääst, so begjuchtiget dit nit tou ne Dubbeloustämmenge. Wan du dien Stämougoawe annerje moatest, wääl fon näien fon dät Projekt, wieroun du al eer oustämd hääst.</p>

<p>Wiedere Informatione:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/FAQ/de" class="external">Election FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/de" class="external">Candidates</a></li></ul>
</blockquote>',
	'boardvote_intro_change' => '<p>Du hääst al oustämd. Man du koast dien Stämme mäd dät foulgjende Formular annerje. Markier deertou do litje Kasten fon do Kandidoate, do du wääle moatest.</p>',
	'boardvote_entered'      => 'Tonk, dien Stämme wuude spiekerd.

Wan du moatest, koast du foulgjende Eempeldhaide fäästhoolde. Dien Oustämmengsapteekenge is:

<pre>$1</pre>

Ju wuude mäd dän Public Key fon do Woaladministratore ferslöäteld:

<pre>$2</pre>

Ju deeruut foulgjende, ferslöätelde Version foulget hierunner. Ju wäd eepentelk ap [[{{ns:special}}:Boardvote/dump]] anwiesd.

<pre>$3</pre>

[[{{ns:special}}:Boardvote/entry|Tourääch]]',
	'boardvote_nosession'    => 'Dien Wikimedia-Benutser-ID kon nit fääststoald wäide. Mäld die in dän Wiki an, in dän du tou ju Woal toulät bäst un gung deer ätter <nowiki>[[Special:Boardvote]]</nowiki>. Wäälen duur wäl, dän sien Benutserkonto nit minner as $1 Beoarbaidengen foar dän $2 apwiest, ju eerste Beoarbaidenge mout foar dän $3 geböärd weese. 

Din Browser mout so konfigurierd weese, dät hie Cookies fon dän externe Woalcomputer
<tt>wikimedia.spi-inc.org</tt> akzeptiert.',
	'boardvote_notloggedin'  => 'Du bäst nit ienlogged. Uum oustämme tou konnen, moast du ienlogged weese un n Benutserkonto ferweende, wiermäd al foar dän Täldai ($2) ap minste $1 Beoarbaidengen moaked wuuden, un mäd ne eerste Beoarbaidenge foar $3.',
	'boardvote_notqualified' => 'Du bäst nit begjuchtiged an dissen Woal deeltouniemen. Du moast $3 Beoarbaidengen foar dän $2 moaked hääbe un die eerste Beoarbaidenge mout foar dän $5 geböärd weese. Aal Bedingengengen mouten tou ju Woaldeelnoame ärfäld weese.',
	'boardvote_novotes'      => 'Tou nu tou häd noch neemens oustämd.',
	'boardvote_time'         => 'Tied',
	'boardvote_user'         => 'Benutser',
	'boardvote_edits'        => 'Beoarbaidengen',
	'boardvote_days'         => 'Deege',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'User-Agent',
	'boardvote_listintro'    => '<p>Dit is ne Lieste fon aal Stämme, do der tou nu tou ouroat wuuden. $1 foar do ferslöätelde Doaten.<p>',
	'boardvote_dumplink'     => 'Klik hier',
	'boardvote_submit'       => 'Oustimme',
	'boardvote_strike'       => 'Stämmen straikje',
	'boardvote_unstrike'     => 'Stämstriekenge tourääch nieme',
	'boardvote_needadmin'    => 'Bloot Woaladministratore konnen disse Aktion truchfiere.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Woale tou dät Wikimedia-Kuratorium</a>:',
	'boardvote_notstarted'   => 'Ju Woal is noch nit ounfangd.',
	'boardvote_closed'       => 'Ju Woal is be-eended. Dät Resultoat is [http://meta.wikimedia.org/wiki/Election_results_2008/De in Meta-Wiki] ientoukiekjen.',
	'boardvote_edits_many'   => 'fuul',
	'group-boardvote'        => 'Woal-Administratore',
	'group-boardvote-member' => 'Woal-Administrator',
	'grouppage-boardvote'    => '{{ns:project}}:Woal-Administrator',
	'boardvote_blocked'      => 'Äntscheeldigenge, man du wuudest in din Wiki speerd. Speerde Benutsere duuren nit an ju Woal deelnieme.',
	'boardvote_welcome'      => "Wäilkuumen '''$1'''!",
	'go_to_board_vote'       => 'Woalen tou dät Wikimedia-Kuratorium 2008',
	'boardvote_redirecting'  => 'Foar ne haagere Sicherhaid un Klooregaid, wäd ju Woal moaked ap n externen, uunouhongich kontrollierden Server.

Du wädst in 20 Sekunden tou dissen externen Server fääre lat. [$1 klik hier], uum fluks deerwai tou kuumen.',
	'right-boardvote'        => 'Woalen administrierje',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 * @author Siebrand
 */
$messages['su'] = array(
	'boardvote'              => 'Saémbara Anggota Déwan Kapercayaan Yayasan Wikimedia',
	'boardvote_notloggedin'  => 'Anjeun can asup log. Pikeun nyoara, anjeun kudu maké rekening nu sahanteuna geus boga $1 kontribusi ti méméh $3 nepi ka $2.',
	'boardvote_notqualified' => 'Anjeun teu nedunan sarat pikeun ngilu milih. Anjeun kudu grus boga $3 éditan saméméh $2, nu sahanteuna geus dimimitian saméméh $5.',
	'boardvote_novotes'      => 'Acan aya pamilih.',
	'boardvote_time'         => 'Wanci',
	'boardvote_user'         => 'Pamaké',
	'boardvote_edits'        => 'Édit',
	'boardvote_days'         => 'Poé',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Agén pamaké',
	'boardvote_listintro'    => '<p>Di handap ieu béréndélan sakabéh sora nu geus kacatet. $1 pikeun enkripsi data.</p>',
	'boardvote_dumplink'     => 'Klik di dieu',
	'boardvote_submit'       => 'Kintun',
	'boardvote_unstrike'     => 'Hapus nu dicoret',
	'boardvote_needadmin'    => 'Ngan kuncén saémbara nu bisa ngalakukeun ieu.',
	'boardvote_notstarted'   => 'Saémbara can dimimitian',
	'boardvote_closed'       => 'Saémbara geus ditutup, tempo [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En kaca saémbara keur hasilna] teu lila.',
	'boardvote_edits_many'   => 'loba',
	'group-boardvote'        => 'Kuncén saémbara anggota dewan',
	'group-boardvote-member' => 'Kuncén saémbara anggota dewan',
	'grouppage-boardvote'    => '{{ns:project}}:Kuncén saémbara anggota dewan',
	'boardvote_blocked'      => 'Punten, anjeun keur dipeungpeuk di wiki. Pamaké nu keur dipeungpeuk teu kaci ngilu milih.',
	'boardvote_welcome'      => "Bagéa, '''$1'''!",
);

/** Swedish (Svenska)
 * @author Lejonel
 * @author Sannab
 * @author M.M.S.
 * @author SPQRobin
 */
$messages['sv'] = array(
	'boardvote'              => 'Val till Wikimedias styrelse (Wikimedia Board of Trustees)',
	'boardvote-desc'         => '[[meta:Board elections|Val till Wikimedias styrelse]]',
	'boardvote_entry'        => '* [[m:Election_candidates_2008/Sv|Kandidaternas presentationer]]
* [[Special:Boardvote/vote|Rösta]]
* [[Special:Boardvote/list|Lista röster]]
* [[Special:Boardvote/dump|Dumpa krypterad röstpost]]',
	'boardvote_intro'        => '<p>Välkommen till det tredje valet till Wikimedia Foundations styrelse. Vi ska välja en person som ska representera wikigemenskapen, det vill säga användarna på de olika Wikimedia-projekten. Denna person ska, tillsammans med styrelsens andra användarrepresentant, hjälpa till att bestämma Wikimediaprojektens framtida inriktning vart för sig och som grupp, och i styrelsen representera <em>dina</em> intressen och bekymmer. Styrelsen ska besluta om sätt att få in pengar och hur dessa ska fördelas.</p>

<p>Innan du röstar, läs kandidaternas programförklaringar och deras svar på andra användares frågor. Alla kandidaterna är respekterade anvädnare som lagt ner åtskillig tid och möda för att göra projekten till en välkomnande miljö, ägnat åt inskaffande och fri spridning av mänsklig kunskap.</p>

<p>Du kan rösta på så många kandidater som du önskar. Den kandidat som fått flest röster kommer att bli vald. Om det skulle bli oavgjort mellan några kandidater, kommer en extra valomgång att arrangeras.</p>

<p>En påminnelse: du får bara rösta en gång. Även om du har 400 redigeringar på flera olika projekt, innebär inte det att du har rätt att rösta flera gånger. Om du vill ändra din röst innan valet är slut, var snäll gör det från det projekt som du tidigare röstat ifrån.</p>

<p>Mera information hittas på:</p>
<ul><li><a href="http://meta.wikipedia.org/wiki/Election_FAQ_2008/Sv" class="external">Vanliga frågor</a></li>
<li><a href="http://meta.wikipedia.org/wiki/Election_candidates_2008/Sv" class="external">Kandidaterna</a></li></ul>',
	'boardvote_intro_change' => '<p>Du har redan röstat. Emellertid kan du ändra din röst genom att använda nedanstående formulär. Var god markera rutorna invid de kandidater du röstar på.</p>

<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Sv" class="external">Kandidaternas presentationer</a></li>',
	'boardvote_entered'      => 'Tack för det. Din röst är registrerad.

Om du så önskar, kan du notera följande detaljer. Din röst är registrerad som :

<pre>$1</pre>

Den är krypterad med valadministratörernas publika nyckel:

<pre>$2</pre>

Den resulterande krypterade versionen följer här. Den kommer att visas öppet på [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Tillbaka]]',
	'boardvote_nosession'    => 'Ditt användar-ID på Wikimedia kunde inte verifieras.
Var god logga in på den wikin som du är kvalificierad att rösta på, och gå till <nowiki>[[Special:Boardvote]]</nowiki>.
Du måste använda ett konto som har gjort minst $1 ändringar före $2, och ha gjort minst $3 ändringar mellan $4 och $5.',
	'boardvote_notloggedin'  => 'Du är inte inloggad. För att rösta måste du ha ett konto med minst $1 bidrag före $2.',
	'boardvote_notqualified' => "Tyvärr har du enbart gjort $1 redigeringar före $2. Du måste ha minst $3 redigeringar för att få rösta.

Om du fick detta meddelande trots att du '''har gjort''' fler än $1 redigeringar i ett Wikimediaprojekt, v g försäkra dig om att du röstar från rätt projekt.",
	'boardvote_novotes'      => 'Ingen har röstat ännu.',
	'boardvote_time'         => 'Tid',
	'boardvote_user'         => 'Användare',
	'boardvote_edits'        => 'Redigeringar',
	'boardvote_days'         => 'Dagar',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'Användaragent',
	'boardvote_listintro'    => '<p>Det här är en lista över alla röster som har registrerats hittills.
$1 för de krypterade uppgifterna.</p>',
	'boardvote_dumplink'     => 'Klicka här',
	'boardvote_submit'       => 'OK',
	'boardvote_strike'       => 'Stryk',
	'boardvote_unstrike'     => 'Återställ efter strykning',
	'boardvote_needadmin'    => 'Endast valadministratörer kan utföra denna operation.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Styrelseval i Wikimediastiftelsen</a>:  Valet pågår till och med den 12 juli kl 02:00 (CEST)',
	'boardvote_notstarted'   => 'Röstning har ej påbörjats än',
	'boardvote_closed'       => 'Röstningen är nu stängd, se [http://meta.wikimedia.org/wiki/Board_elections/2008/Results valsidan för resultat] snart.',
	'boardvote_edits_many'   => 'många',
	'group-boardvote'        => 'Styrelsevalsadministratörer',
	'group-boardvote-member' => 'Styrelsevalsadministratör',
	'grouppage-boardvote'    => '{{ns:project}}:Styrelsevalsadministratör',
	'boardvote_blocked'      => 'Beklagar, du har blivit blockerad på din registrerade wiki. Blockerade användare är inte tillåtna att rösta.',
	'boardvote_bot'          => 'Beklagar, du är flaggad som en robot på din registrerade wiki. Robotkonton är inte tillåtna att rösta.',
	'boardvote_welcome'      => "Välkommen '''$1'''!",
	'go_to_board_vote'       => 'Val till Wikimedias styrelse 2008',
	'boardvote_redirecting'  => 'För bättre säkerhet och genomskinlighet, så genomförs röstningen på en extern oberoende kontrollerad server.

Du kommer bli omdirigerad till den externa servern inom 20 sekunder. [$1 Klicka här] för att gå dit nu.

En säkerhetsvarning om ett osignerat certifikat kanske kommer att visas.',
	'right-boardvote'        => 'Administrera styrelseval',
);

/** Silesian (Ślůnski)
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'boardvote_ip' => 'IP',
);

/** Tamil (தமிழ்)
 * @author Trengarasu
 */
$messages['ta'] = array(
	'boardvote_time'     => 'நேரம்',
	'boardvote_user'     => 'பயனர்',
	'boardvote_edits'    => 'தொகுப்புகள்',
	'boardvote_days'     => 'நாட்கள்',
	'boardvote_ip'       => 'ஐ.பி.',
	'boardvote_dumplink' => 'இங்கே சொடுகவும்',
	'boardvote_submit'   => 'சரி',
	'boardvote_welcome'  => "நல்வரவு '''$1'''!",
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author Mpradeep
 * @author Siebrand
 * @author Chaduvari
 */
$messages['te'] = array(
	'boardvote'              => 'వికీమీడియా ట్రస్టుబోర్డు ఎన్నికలు',
	'boardvote-desc'         => '[[meta:Board elections|వికీమీడియా ట్రస్టీల బోర్డు ఎన్నికలు]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|వోటెయ్యండి]]
* [[Special:Boardvote/list|ఇప్పటివరకు వచ్చిన ఓట్ల జాబీతా]]
* [[Special:Boardvote/dump|Dump encrypted election record]]',
	'boardvote_intro'        => '<p>వికీమీడియా ట్రస్టు బోర్డు రెండవ ఎన్నికలకు స్వాగతం. వివిధ వికీమీడియా ప్రాజెక్టులలో సభ్యుల ప్రతినిధులుగా ఉండేందుకు ఇద్దరిని ఎన్నుకుంటున్నాం. భవిష్యత్తులో వికీమీడియా ప్రాజెక్టులకు దిశానిర్దేశం చెయ్యడంలో వాళ్ళు పాత్ర వహిస్తారు. <em>మీ</em> అభిప్రాయాలు, అభీష్టాలను ట్రస్టు బోర్డు వద్ద వినిపిస్తారు. ధనసమీకరణ పద్ధతులు, ధన వినియోగ పద్ధతులను నిర్ణయిస్తారు.</p>

<p>వోటేసేముందు అభ్యర్థుల ప్రకటనలు, వివిధ ప్రశ్నలకు వారిచ్చిన సమాధానాలను జాగ్రత్తగా చదవండి. ప్రతి అభ్యర్థి కూడా ఓ గౌరవ సభ్యులే.., ఈ ప్రాజెక్టులను తీర్చిదిద్దడంలో తమ శక్తియుక్తులు ఉపయోగించిన వారే.., విజ్ఞానాన్ని ఉచితంగా జనబాహుళ్యానికి అందించడంలో అంకితమైనవారే.</p>

<p>మీ ఇష్టమొచ్చినంతమంది అభ్యర్థులకు మీరు వోట్లేయవచ్చు. ప్రతీ స్థానంలోను అత్యధిక వోట్లు పొందిన అభ్యర్థి ఎన్నికవుతారు. పోటీ టై అయితే, అమీతుమీ ఎన్నిక జరుగుతుంది.</p>

<p>మరింత సమాచారనికై, చూడండి:</p>
<ul><li><a href="http://meta.wikipedia.org/wiki/Election_FAQ_2008" class="external">ఎన్నికల ప్రశ్నలు</a></li>
<li><a href="http://meta.wikipedia.org/wiki/Election_Candidates_2008" class="external">అభ్యర్థులు</a></li></ul>',
	'boardvote_intro_change' => '<p>మీరిప్పటికే వోటు చేసారు. అయితే, కింది ఫారమును వాడి మీ వోటును మార్చవచ్చు. మీరు ఆమోదించదలచిన అభ్యర్థుల పేర్లకు ఎదురుగా ఉన్న పెట్టెలలో టిక్కు పెట్టండి.</p>',
	'boardvote_entered'      => 'మీ వోటు నమోదయింది, ధన్యవాదాలు!

కావాలనుకుంటే మీరు కింది వివరాలను జాగ్రత్తచేసుకోవచ్చు. మీ వోటింగు రికార్డు:

<pre>$1</pre>

అది ఎన్నికల అధికారుల పబ్లిక్‌కీ ద్వారా కోడీకరించబడింది:

<pre>$2</pre>

కోడీకరించబడిన సంపుటి ఇది. దీన్ని [[Special:Boardvote/dump]] లో అందరూ చూడవచ్చు. 

<pre>$3</pre>

[[Special:Boardvote/entry|వెనక్కు]]',
	'boardvote_nosession'    => 'మీ వికీమీడియా వాడుకరి ఐడీని నిర్ధారించుకోలేకున్నాం. మీకు సభ్యత్వం ఉన్న వికీలో లాగినయ్యి, <nowiki>[[Special:Boardvote]]</nowiki> కు వెళ్ళండి. మీరు వాడే ఖాతాతో $2 నాటికి కనీసం $1 రచనలు చేసి ఉండాలి. అలాగే మొదటి దిద్దుబాటు $3 కంటే ముందు చేసి ఉండాలి.',
	'boardvote_notloggedin'  => 'మీరు లోనికి ప్రవేశించలేదు. వోటేసేందుకు, మీకు ఓ ఖాతా ఉండి $2కి ముందు కనీసం $1 మార్పులు చేసివుండాలి, మరియు $3కి ముందు మొదటి మార్పు చేసివుండాలి.',
	'boardvote_notqualified' => 'ఈ ఎన్నికలో వోటేసేందుకు మీకు అర్హత లేదు. $2కి ముందు మీరు $3 మార్పులు చేసివుండాలి, మరియు మీ మొదటి మార్పు $5 కంటే ముందు జరిగివుండాలి.',
	'boardvote_novotes'      => 'ఇంకా ఎవరూ ఓటెయ్యలేదు.',
	'boardvote_time'         => 'సమయం',
	'boardvote_user'         => 'వాడుకరి',
	'boardvote_edits'        => 'దిద్దుబాట్లు',
	'boardvote_days'         => 'రోజులు',
	'boardvote_ip'           => 'ఐపీ',
	'boardvote_ua'           => 'వాడుకరి ఏజెంటు',
	'boardvote_listintro'    => '<p>ఇప్పటివరకు నమోదైన వోట్ల జాబితా ఇది. కోడీకరించబడిన డేటా కొరకు $1.</p>',
	'boardvote_dumplink'     => 'ఇక్కడ నొక్కండి',
	'boardvote_submit'       => 'సరే',
	'boardvote_strike'       => 'కొట్టివేయు',
	'boardvote_unstrike'     => 'కొట్టెయ్యవద్దు',
	'boardvote_needadmin'    => 'ఎన్నికల నిర్వాహకులు మాత్రమే ఈ పని చెయ్యగలరు.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">వికీమీడియా బోర్డు ఎన్నికలు</a>:  జూలై 12 వరకు వోటెయ్యవచ్చు',
	'boardvote_notstarted'   => 'వోటింగు ఇంకా మొదలు కాలేదు',
	'boardvote_closed'       => 'వోటింగు పూర్తయింది. త్వరలో వెలువడనున్న ఫలితాల కోసం [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En ఎన్నికల పేజీ] చూడండి',
	'boardvote_edits_many'   => 'చాలా',
	'group-boardvote'        => 'బోర్డు వోటు నిర్వాహకులు',
	'group-boardvote-member' => 'బోర్డు వోటు నిర్వాహకులు',
	'grouppage-boardvote'    => '{{ns:project}}:బోర్డు వోటు నిర్వహణ',
	'boardvote_blocked'      => 'క్షమించండి, మీరు నమోదైన వికీలో మీమ్మల్ని నిషేధించారు. నిషేధించిన వాడుకరులకు వోటెయ్యడానికి అనుమతిలేదు.',
	'boardvote_welcome'      => "స్వాగతం '''$1'''!",
	'go_to_board_vote'       => 'వికీమీడియా బోర్డు ఎన్నికలు 2008',
	'boardvote_redirecting'  => 'మెరుగైన భద్రత మరియు పారదర్శకత కొరకు, వోటింగుని బయటి, స్వతంత్ర నియంత్రిత సేవికపై నడుపుతున్నాం.

20 క్షణాల్లో మీమ్మల్ని అక్కడికి చేరుస్తాం. ఇప్పుడే అక్కడికి వెళ్ళడానికి [$1 ఇక్కడ నొక్కండి].

సంతకంలేని దృవపత్రం గురించి ఓ భద్రతా హెచ్చరిక చూపించబడవచ్చు.',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'boardvote_submit' => 'OK',
);

/** Tajik (Cyrillic) (Тоҷикӣ/tojikī (Cyrillic))
 * @author Ibrahim
 * @author Siebrand
 */
$messages['tg-cyrl'] = array(
	'boardvote'              => 'Интихоботи Ҳайати Амнои Викимедиа',
	'boardvote-desc'         => '[[meta:Board elections|Интихоботи Ҳайати Амнои Викимедиа]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Раъй додан]]
* [[Special:Boardvote/list|Феҳристи раъй то кунун]]
* [[Special:Boardvote/dump|Феҳристи рамзнигорӣ шудаи интихобот]]',
	'boardvote_intro'        => '<p>Ба дувумин интихоботи Ҳайати Амнои Викимедиа хуш омадед. Мо барои интихоби ду нафар намояндаи ҷомеаъ и корбарони лоиҳаҳои мухталифи Викимедиа раъй медиҳем. Онҳо дар таъйини ҷаҳтгириҳои баъдии лоиҳаҳои Викимедиа, ба танҳои ва ба унвони як гурӯҳ, кӯмак мекунанд. Дар мавриди роҳҳои касбии худ шавқу ҳавас ва нигарониҳои <em>шуморо</em> ба Ҳайати Амно намояндагӣ мекунанд. Онҳо даромад ва сарфи роҳҳои сарфи он ва афзудани онро ҳалу фасл менамоянд.</p>

<p>Лутфан, қабл аз раъй додан изҳороти ҳар намоянда ва посухҳояш ба пурсишҳоро бо диққат бихонед. Ҳар яке аз намояндаҳо як фарди мӯҳтарам аст, ки вақт ва қувваи зиёдеро сарфи табдили ин лоиҳаҳо ба муҳити гарм ки муттаҳид ба ҷамъовари ва паҳн кардани дониши озод ба башарият аст, карда аст.</p>

<p>Шумо метавонед ба ҳар теъдоди номзад, ки мехоҳед раъй бидиҳед. Номзаде бо бештарин раъй дар ҳар мақом, ғолиби ҳамон мақом хоҳад гашт. Дар ҳолате, ки раъйи чанд номзадҳо баробар шавад, раъйгирии дигаре барои онҳо анҷом хоҳад шуд.</p>

<p>Барои иттилооти бештар, нигаред:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Пурсишҳо дар мавриди Интихобот</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Номзадҳо</a></li></ul>',
	'boardvote_intro_change' => '<p>Шумо пеш аз ин раъй додаед. Бо ин ҳол метавонед бо истифода аз форми зерин раъйи худро тағйир диҳед. Лутфан ҷабъаи канори номи номзадҳое, ки мавриди қабулатон ҳастанд аломати раъй бизанед.</p>',
	'boardvote_entered'      => 'Аз шумо миннатдорем, раъйи шумо сабт шуд.

Агар майл дошта бошед, шумо метавонед тавзеҳоти зеринро барои бойгонӣ нигоҳ доред. Раъйи шумо чунин сабт шудааст:

<pre>$1</pre>

Ин раъй бо калиди умумии мудирони интихобот, ки дар зер омада, рамзгузорӣ шудааст:

<pre>$2</pre>

Ба таври умумӣ [[Special:Boardvote/dump]] натиҷаи рамзгузорӣ дар идома омадааст. Ин натиҷа дар намоиш дода мешавад.

<pre>$3</pre>

[[Special:Boardvote/entry|Бозгашт]]',
	'boardvote_nosession'    => 'Система қодир ба ташхиси номи корбарии шумо дар Викимедиа нест. Лутфан ба викие, ки дар он миҷоз ба раъй додан ҳастед ворид шавед, ва ба он шумо бояд аз як ҳисоби корбарӣ истифода кунед, ки ҳадди ақал $1 ҳиссагузорӣ пеш аз $2 дошта бошад, ва аввалин вироиш тавассути он пеш аз $3 анҷом шуда бошад.',
	'boardvote_notloggedin'  => 'Шумо ба систем ворид нашудаед. Барои раъй додан, шумо бояд аз як ҳисоби корбарӣ бо $1 ҳиссагузориҳо то пеш аз $2, ки аввалин вироиш тавассути он қабл аз $3 анҷом шуда бошад, истифода кунед.',
	'boardvote_notqualified' => 'Шумо миҷоз ба раъй додан нестед. Шумо бояд дасти кам $3 вироиш то қабл аз  $2 дошта бошед, ва аввалин вироиши шумо қабл аз $5 анчом шуда бошад.',
	'boardvote_novotes'      => 'Ҳанӯз касе раъй надодааст.',
	'boardvote_time'         => 'Вақт',
	'boardvote_user'         => 'Корбар',
	'boardvote_edits'        => 'Вироишҳо',
	'boardvote_days'         => 'Рӯзҳо',
	'boardvote_ip'           => 'Нишонаи IP',
	'boardvote_ua'           => 'Амали корбар (user agent)',
	'boardvote_listintro'    => '<p>Ин феҳристи тамоми раъйҳои сабтшуда то кунун аст. $1 барои додаҳои рамзгузоришуда.</p>',
	'boardvote_dumplink'     => 'Инҷо клик кунед',
	'boardvote_submit'       => 'Таъйид',
	'boardvote_strike'       => 'Хат задан',
	'boardvote_unstrike'     => 'Ах хат задан озод кардан',
	'boardvote_needadmin'    => 'Фақат мудирони интихобот метавонанд ин коро анҷом диҳанд',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Интихоботи Ҳайати Амнои Википедиа</a>:  Овоздиҳӣ то 12 июл идома дорад',
	'boardvote_notstarted'   => 'Раъйпурсӣ ҳануз шурӯъ нашудааст',
	'boardvote_closed'       => 'Овоздиҳӣ поён ёфтааст, нигаред ба  [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En саҳифаи натоиҷи интихобот].',
	'boardvote_edits_many'   => 'бисёр',
	'group-boardvote'        => 'Мудирияти интихоботи ҳайати амно',
	'group-boardvote-member' => 'Мудири интихоботи ҳайати амно',
	'grouppage-boardvote'    => '{{ns:project}}:Мудири интихоботи ҳайати амно',
	'boardvote_blocked'      => 'Мутаасифона, дастрасии шумо дар викии мавриди назар қатъ шудааст. Корбароне, ки дастрасиашон қатъ шудааст, иҷозати раъй додан надоранд.',
	'boardvote_welcome'      => "Хуш омадед '''$1'''!",
	'go_to_board_vote'       => 'Интихоботи соли 2008 Ҳайати Амнои Викимедиа',
	'boardvote_redirecting'  => 'Барои афзоиши амният ва шаффофият, мо раъйгириро рӯи як коргузори хориҷӣ, ки ба таври мустақил идора мешавад, анҷом медиҳем.

Шумо зарфи 20 сония ба коргузори хориҷӣ ҳидоят мешавед. Барои он, ки ҳозир онҷо биравед [$1 инҷо клик кунед].

Мумкин аст як пайёми амнияти дар мавриди гувоҳиномаи  ғайримиҷоз дарёфт кунед.',
);

/** Tonga (faka-Tonga)
 * @author SPQRobin
 */
$messages['to'] = array(
	'boardvote'          => 'Ko e fili ʻo e kau talāsiti ki he Poate Wikimedia',
	'boardvote_days'     => 'Ngaahi ʻaho',
	'boardvote_dumplink' => 'Lomiʻi heni',
);

/** Turkish (Türkçe)
 * @author SPQRobin
 * @author Erkan Yilmaz
 * @author Srhat
 */
$messages['tr'] = array(
	'boardvote'              => 'Wikimedia Mütevelli Heyeti Seçimleri',
	'boardvote_intro_change' => '<p>Daha evvel oy kullanmıştınız. Ama oyunuzu değiştirebilirsiniz. Aşağıdaki formu kullanarak, uygun olduğunu düşündüğünüz aday ya da adayların yanına işart koyup, oyunuzu gönderiniz.</p>',
	'boardvote_notloggedin'  => 'Oturum açmamışsınız. Oy kullanabilmek için, kullanıcı olarak $2 tarihinden önce en az $1 değişikliğe sahip olmanız şart. Ayrıca ilk değişikliğinizin $3 tarihinden önce gerçekleşmiş olması gerekmekte.',
	'boardvote_novotes'      => 'Henüz kimse oy kullanmadı.',
	'boardvote_time'         => 'Oy kullandığı tarih',
	'boardvote_user'         => 'Kullanıcı',
	'boardvote_edits'        => 'Değişiklik sayısı',
	'boardvote_days'         => 'Günleri',
	'boardvote_ip'           => 'IP',
	'boardvote_listintro'    => '<p>Bugüne kadar kaydedilmiş oyların listesi. Şifrelendirilmiş olarak indirmek için $1.</p>',
	'boardvote_dumplink'     => 'Buraya tıklayın',
	'boardvote_submit'       => 'Oyunuzu kullanın',
	'boardvote_needadmin'    => 'Bu işlemi sadece seçim yöneticileri yapabilir.',
	'boardvote_notstarted'   => 'Oylama henüz başlamadı',
	'boardvote_edits_many'   => 'çok',
	'boardvote_welcome'      => "Hoş geldiniz '''$1'''!",
);

/** Tahitian (Reo Mā`ohi)
 * @author SPQRobin
 */
$messages['ty'] = array(
	'boardvote_user' => 'Ta’ata fa’a’ohipa',
);

/** Ukrainian (Українська)
 * @author Ahonc
 * @author Siebrand
 * @author AS
 */
$messages['uk'] = array(
	'boardvote'              => 'Вибори до Ради повірених фонду «Вікімедіа»',
	'boardvote-desc'         => '[[meta:Board elections|Вибори до Ради повірених Вікімедіа]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Проголосувати]]
* [[Special:Boardvote/list|Переглянути список тих, хто вже проголосував]]
* [[Special:Boardvote/dump|Переглянути зашифрований запис голосів]]',
	'boardvote_intro'        => '<p>Ласкаво просимо на вибори до Ради повірених фонду «Вікімедіа». Ми голосуємо з метою обрати двох представників спільнот користувачів різник проектів Вікімедіа. Вони повинні будуть допомагати нам визначити напрямок майбутнього розвитку проектів і представляти <em>ваші</em> інтереси в раді повірених. Вони покликані вирішувати проблеми залучення фінансування і розміщення залучених ресурсів.</p>

<p>Будь ласка, уважно прочитайте заяви кандидатів і відповіді на них перед тим, як голосувати. Усі кандидати — поважні користувачі, які пожертвували істотним часом і зусиллями, щоб покращити наші проекти і зробити їх привабливим середовищем, ціль якої пошук і вільне розповсюдження знань людства.</p>

<p>Ви можете голосувати за будь-яку кількість кандидатів. Кандидат, який набере найбільшу кількість голосів на будь-яку з двох позицій, буде оголошений переможцем у виборах на цю позицію. У випадку рівності голосів буде проведене повторне голосування з вибуванням найменш популярних кандидатів.</p>

<p>Додаткова інформація:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Часті питання про вибори</a></li> <li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates/Uk" class="external">Кандидати</a></li></ul>',
	'boardvote_intro_change' => '<p>Ви вже проголосували. Тим не менш, за допомогою наведеної нижче форми ви можете змінити своє рішення. Будь ласка, помітьте кандидатів, яких ви підтримуєте.</p>',
	'boardvote_entered'      => 'Дякуємо, ваш голос врахований.

При бажанні, ви можете записати наступну інформацію. Номер вашого бюлетеня:

<pre>$1</pre>

Він зашифрований відкритим ключем адміністрації виборів:

<pre>$2</pre>

Зашифрований текст наведено нижче. Будь-хто може знайти його на сторінці [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Назад]]',
	'boardvote_nosession'    => 'Неможливо визначити ваш ідентифікатор користувача Вікімедії.
Будь ласка, ввійдіть до системи у проекті, де ваш обліковий запис задовольняє вимогам, і перейдіть на сторінку <nowiki>[[Special:Boardvote]]</nowiki>. Вимоги до облікового запису: $1 редагувань до $2, принаймні $3 редагувань між $4 і $5.',
	'boardvote_notloggedin'  => 'Ви не ввійшли до системи.
Щоб проголосувати, ви маєте бути зареєстрованим користувачем і зробити щонайменше $1 редагувань до $2, зробити щонайменше $3 редагувань між $4 і $5.',
	'boardvote_notqualified' => 'У вас недостатньо редагувань для голосування на цих виборах.
Ви повинні мати щонайменше $3 редагувань до $2 і ваше перше редагування має бути зроблене до $5.',
	'boardvote_novotes'      => 'Ніхто ще не проголосував.',
	'boardvote_time'         => 'Час',
	'boardvote_user'         => 'Користувач',
	'boardvote_edits'        => 'Кількість редагувань',
	'boardvote_days'         => 'Дні',
	'boardvote_ip'           => 'IP-адреса',
	'boardvote_ua'           => 'Браузер',
	'boardvote_listintro'    => '<p>Це список всіх прийнятих на даний момент бюлетенів для голосування.
У зашифрованому вигляді вони доступні $1.</p>',
	'boardvote_dumplink'     => 'тут',
	'boardvote_submit'       => 'ОК',
	'boardvote_strike'       => 'Закреслити',
	'boardvote_unstrike'     => 'Прибрати закреслення',
	'boardvote_needadmin'    => 'Ця операція доступна лише адміністрації виборів.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Вибори до Ради повірених Фонду «Вікімедіа»</a>: Голосування відкрите до 12 липня',
	'boardvote_notstarted'   => 'Голосування ще не розпочалося',
	'boardvote_closed'       => 'Голосування закінчене, див. [[m:Elections for the Board of Trustees of the Wikimedia Foundation, 2008/En|сторінку результатів]].',
	'boardvote_edits_many'   => 'багато',
	'group-boardvote'        => 'Члени виборчкому',
	'group-boardvote-member' => 'Член виборчкому',
	'grouppage-boardvote'    => '{{ns:project}}:Члени виборчкому',
	'boardvote_blocked'      => 'Вибачте, але ви заблоковані у вашому вікі-проекті. Заблоковані користувачі не можуть голосувати.',
	'boardvote_welcome'      => "Ласкаво просимо, '''$1'''!",
	'go_to_board_vote'       => 'Вибори до Ради повірених Вікімідіа 2008',
	'boardvote_redirecting'  => "Для збільшення безпеки і прозорості, ми проводимо голосування на зовнішньому, не залежно керованому сервері.

Ви будете переадресовані на цей зовнішній сервер через 20 секунд. [$1 Клацніть сюди], щоб перейти туди прямо зараз.

Може з'явитися попередження про непідписаний сертифікат.",
	'right-boardvote'        => 'Адміністрування виборів',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'boardvote'              => 'Elezion del Consejo diretivo de la Wikimedia Foundation',
	'boardvote-desc'         => '[[meta:Board elections|Elezion del Consejo diretivo Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vota]]
* [[Special:Boardvote/list|Varda i voti epressi fin desso]]
* [[Special:Boardvote/dump|Scarica i voti in forma cifrada]]',
	'boardvote_intro'        => '<p>
Benvegnùo/a a la elezion 2008 par el Consejo diretivo Wikimedia. Se vota per una persona che le rapresentarà la comunità de utenti dei vari progeti Wikimedia. El ne jutarà a determinar el futuro orientamento dei progeti Wikimedia, individualmente e come grupo, rapresentando i <em>to</em> interessi e le to idee presso el Consejo diretivo. El deciderà in merito a vari temi, tra cui, in particolare, le modalità par catar su i fondi e investirli.</p>

<p>Par piaser, prima de votar, lezi atentamente le presentazion dei candidati e le risposte a le domande che ghe xe stà fato. Ognuno dei candidati el xe un utente rispetà, che el gà contribuìo con molto del so tenpo e con notevoli sforzi a réndar sti progetti un anbiente acogliente e dedicà a la lìbara racolta, organizazion e distribuzion de la conosienza umana.</p>

<p>Te pol votar par più de un candidato a to sielta: i tri col magior nùmaro de voti i sarà dichiarà eleti. In caso de paregio, sarà tegnùa na votazion de balotagio.</p>

<p>Par magiori informazioni, varda:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board elections/2008" class="external">Elezion del Consejo 2008</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board elections/2008/Candidates" class="external">Candidati</a></li></ul>',
	'boardvote_intro_change' => '<p>Te ghè zà votà. Comunque te podi canbiar el to voto doparando el modulo qua soto. Par piaser spunta la casela de fianco de ognuno dei candicati che te vol sostegner.</p>',
	'boardvote_entered'      => "El to voto el xe stà registrà. Grassie.

Se te voli, te pol registrar i detagli del to voto, riportà de seguito:

<pre>$1</pre>

El voto el xe stà crità con la ciave publica de la comission eletoral:

<pre>$2</pre>

El voto espresso in forma cifrà el xe riportà de seguito. Se pol védarlo anca a l'indirizo [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Indrìo]]",
	'boardvote_nosession'    => "No semo in grado de determinar el to ID utente Wikimedia. 
Par piaser, esegui el login nel progeto in cui te ghè i requisiti par votar, e và a la pagina <nowiki>[[Special:Boardvote]]</nowiki>. Te ghè de doparar un account con almanco $1 contributi prima del $2, e aver fato almanco $3 contributi rta el $4 e'l $5.",
	'boardvote_notloggedin'  => "Acesso mìa efetuà. 
Par esprìmar un voto bisogna verghe un'utenza che gabia efetuà almanco $1 contributi prima del $2, e aver fato almanco $3 contributi tra el $4 e'l $5.",
	'boardvote_notqualified' => "No te ghè i requisiti necessari par votar in sta elezion. 
Bisogna necessariamente che te gavi $1 contributi prima del $2, e che te gavi fato almanco $3 contributi tra el $4 e'l $5.",
	'boardvote_novotes'      => 'No gà gnancora votà nissuni.',
	'boardvote_time'         => 'Data e ora',
	'boardvote_user'         => 'Utente',
	'boardvote_edits'        => 'Modifiche',
	'boardvote_days'         => 'Giòrni',
	'boardvote_ip'           => 'IP',
	'boardvote_ua'           => 'User agent',
	'boardvote_listintro'    => '<p>Qua se cata na lista dei voti registrà fin desso. $1 par descargar i dati in forma cifrà.</p>',
	'boardvote_dumplink'     => 'Struca qua',
	'boardvote_submit'       => 'Va ben',
	'boardvote_strike'       => 'Anula sto voto',
	'boardvote_unstrike'     => 'Elimina anulamento',
	'boardvote_needadmin'    => 'Solo i conponenti de la comission eletoral i pol far sta operazion.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Elezion del Consejo diretivo de Wikimedia</a>:
la votazion la xe verta fin al 12 de lujo',
	'boardvote_notstarted'   => 'La votazion no la xe gnancora verta',
	'boardvote_closed'       => 'La votazion la xe sarà, se invita a consultar [http://meta.wikimedia.org/wiki/Board_elections/2008/Results la pagina dei risultati].',
	'boardvote_edits_many'   => 'tanti',
	'group-boardvote'        => 'Comission eletoral',
	'group-boardvote-member' => 'Comissario eletoral',
	'grouppage-boardvote'    => '{{ns:project}}:Comissario eletoral',
	'boardvote_blocked'      => 'Ne despiase, ma te sì stà blocà nel progeto in do che te sì registrà. I utenti blocà no i gà dirito de voto.',
	'boardvote_bot'          => 'Me dispiase, ma ti sì segnà come bot su la wiki in cui te sì registrà. Le utense bot no ghe xe permesso de votar.',
	'boardvote_welcome'      => "Benvegnù '''$1'''!",
	'go_to_board_vote'       => 'Elezion 2008 del Board de Wikimedia',
	'boardvote_redirecting'  => "Par verghe na mazor sicureza e trasparensa, el voto el se tien su un server esterno, a controlo indipendente. Te sarè reindirizà a sto server esterno in 20 secondi. [$1 Struca qua] par 'ndarghe diretamente. Podarìa vegner fora un aviso de sicureza riguardante un certificato de protezion mìa verificà.",
	'right-boardvote'        => 'Aministra le elezion',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'boardvote'              => 'Bầu cử cho Ban Quản trị Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Bầu cử cho Ban Quản trị Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Bỏ phiếu]]
* [[Special:Boardvote/list|Danh sách những lá phiếu đến nay]]
* [[Special:Boardvote/dump|Hồ sơ bầu cử mật mã hóa]]',
	'boardvote_intro'        => '<p>Chào mừng bạn đã tới cuộc bầu cử lần thứ hai cho Ban Quản tri Wikimedia. Chúng ta sẽ bầu cho hai người đại diện cho cộng đồng thành viên trên các dự án Wikimedia. Họ sẽ cùng định hướng tương lai của các dự án, từng người một và toàn bộ, và sẽ theo những quan tâm và chuyện lo <em>của bạn</e> tại Ban Quản trị. Họ sẽ quyết định về cách phát thu nhập và cách sử dụng tiền cho.</p>

<p>Xin hãy đọc những lời tuyên bố và trả lời của những ứng cử cẩn thận trước khi bỏ phiếu. Mọi ứng cử viên là thành viên được cộng đồng kính trọng, và họ đã đóng góp nhiều sức và thì giờ để làm mỗi dự án thân mật để kiếm và phổ biến thông tin.</p>

<p>Bạn được phép bỏ phiếu cho hơn một ứng cử viên. Trong mỗi cuộc thi, người ứng cử được nhiều lá phiếu nhất sẽ thắng ghế đó. Nếu trường hợp là hai người cùng số phiếu thì sẽ bầu cử lại.</p>

<p>Để biết thêm về bầu cử này, xem:</p>
<ul>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Hỏi đáp về bầu cử</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Giới thiệu các ứng cử viên</a></li>
</ul>',
	'boardvote_intro_change' => '<p>Bạn đã bỏ phiếu rồi, nhưng có thể đổi phiếu dùng biểu mẫu ở dưới. Xin hãy đánh hộp kiểm bên cạnh mọi ứng cử viên mà bạn muốn ủng hộ.</p>',
	'boardvote_entered'      => 'Cám ơn bạn, lá phiếu của bạn đã được lưu thành công. Bạn có thể ghi xuống những chi tiết ở dưới để nhớ lựa chọn. Lá phiếu của bạn là:

<pre>$1</pre>

Nó đã mật mã hóa dùng chiều khóa công cộng của nhóm viên chức bầu cử:

<pre>$2</pre>

Kết quả là phiên bản đã mật mã hóa ở dưới. Trang [[Special:Boardvote/dump]] sẽ liệt kê nó cho mọi người xem.

<pre>$3</pre>

[[Special:Boardvote/entry|Trở lại]]',
	'boardvote_nosession'    => 'Rất tiếc, không biết ID thành viên Wikimedia của bạn. Xin hãy đăng nhập tại wiki mà bạn đã có đủ tiêu chuẩn, và đi vào <nowiki>[[Special:Boardvote]]</nowiki>. Bạn cần phải sử dụng tài khoản đã đóng góp $1 lần trở lên trước $2, và đã đóng góp lần đầu tiên trước $3.',
	'boardvote_notloggedin'  => 'Bạn chưa đăng nhập. Để bỏ phiếu, bạn cần phải sử dụng tài khoản đã đóng góp $1 lần trở lên trước $2, và đã đóng góp lần đầu tiên trước $3.',
	'boardvote_notqualified' => 'Rất tiếc, tài khoản này chỉ có $1 sửa đổi trước $2, nên không đủ tiêu chuẩn bỏ phiếu kỳ này. Bạn cần phải đã đóng góp $3 lần trở lên trước $2, và đã đóng góp lần đầu tiên trước $5. Nếu bạn làm thêm sửa đổi dùng tài khoản khác ở đây hay ở một wiki khác thuộc về Quỹ Hỗ trợ Wikimedia, xin hãy sử dụng tài khoản đó để bỏ phiếu.',
	'boardvote_novotes'      => 'Chưa có ai bỏ phiếu.',
	'boardvote_time'         => 'Lúc giờ',
	'boardvote_user'         => 'Thành viên',
	'boardvote_edits'        => 'Số lần sửa đổi',
	'boardvote_days'         => 'Thời gian đóng góp',
	'boardvote_ip'           => 'Địa chỉ IP',
	'boardvote_ua'           => 'Trình duyệt',
	'boardvote_listintro'    => '<p>Danh sách này có tất cả mọi lá phiếu đến lúc này. $1 có dữ liệu mật mã hóa.</p>',
	'boardvote_dumplink'     => 'Hãy nhấn chuột vào đây',
	'boardvote_submit'       => 'Được',
	'boardvote_strike'       => 'Gạch bỏ',
	'boardvote_unstrike'     => 'Phục hồi',
	'boardvote_needadmin'    => 'Chỉ có viên chức bầu cử được làm việc này.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Bầu cử cho Ban Quản trị Wikimedia</a> cho đến ngày 12 tháng 7',
	'boardvote_notstarted'   => 'Cuộc bầu cử chưa bắt đầu',
	'boardvote_closed'       => 'Kỳ bầu cử này đã kết thúc rồi. Hãy xem [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En kết quả bầu cử].',
	'boardvote_edits_many'   => 'nhiều',
	'group-boardvote'        => 'Viên chức bầu cử',
	'group-boardvote-member' => 'Viên chức bầu cử',
	'grouppage-boardvote'    => '{{ns:project}}:Viên chức bầu cử',
	'boardvote_blocked'      => 'Rất tiếc, tài khoản của bạn đã bị cấm. Các thành viên bị cấm không được phép bỏ phiếu.',
	'boardvote_welcome'      => "Hoan nghênh '''$1'''!",
	'go_to_board_vote'       => 'Bầu cử cho Ban Quản trị Wikimedia 2008',
	'boardvote_redirecting'  => 'Để cho cuộc bầu cử này được an toàn và trong sạch hơn, chúng ta thực hiện nó trên máy chủ bên ngoài được quản lý riêng khỏi các máy thường.

Bạn sẽ được chuyển đến máy chủ này trong vòng 20 giây. Hãy [$1 nhấn chuột vào đây] để qua đấy ngay.

Bạn có thể gặp lời cảnh cáo nói về một giấy chứng nhận chưa được ký.',
	'right-boardvote'        => 'Bầu cử người quản trị',
);

/** Volapük (Volapük)
 * @author Smeira
 * @author Malafaya
 * @author Siebrand
 */
$messages['vo'] = array(
	'boardvote'              => 'Daväl Kipedalefa Fünoda: Wikimedia',
	'boardvote-desc'         => '[[meta:Board elections|Daväl Kipedalefa Fünoda: Wikimedia]]',
	'boardvote_entry'        => '* [[Special:Boardvote/vote|Vögodön]]
* [[Special:Boardvote/list|Lised vögodas jünuik]]
* [[Special:Boardvote/dump|Davälaregistar pejüföl]]',
	'boardvote_intro'        => '<p>Benokömö! ini Daväl Balid Kipedalefa Fünoda: Wikimedia. Anu davälobs pösodis tel ad pladulön gebanefi proyegas distöfik ela Wikimedia. Oyufons ad sludön lüodi fütürik proyegas - grupo e balato - ed opladulons nitedis e büsidis <em>olik</em> lo Kipedalef. Okesludons tefü mods ad dagetön moni ed ad gebön monis dagetöl.</p>

<p>Reidolös, begö! kuratiküno stetotis steifädanas äsi gesagis onsik säkes veütik büä ovögodol. Steifädan alik binon geban pastümöl, kel ekeblünon timi e steifi greitikis ad jafön pö proyegs at züoamöpi kovenik pro konlet e seagiv libik seva menik.</p>

<p>Kanol vögodön gönü steifädans mödik, if vilol. Tefü cal alik, steifädan labü vögods mödikün posteton as gaenan. If steifädans anik labons vögodamödoti ot, daväl nulik pojenükon.</p>

<p>Ad dagetön nünis pluik, reidolös:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Daväl: SSP</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Steifädans</a></li></ul>',
	'boardvote_intro_change' => '<p>Ya evögodol. Kanol ye votükön vögodi olik me fomet dono. Välolös bokilis nilü steifädans, kelis büuköl.</p>',
	'boardvote_entered'      => 'Danö! Vögod olik peregistaron.

If vilol, dalol registarön patis sököl. Peregistarol as:

<pre>$1</pre>

Atos pejüfon me kik notidik Guvanas Daväla:

<pre>$2</pre>

Is palisedon fomam pejüföl. Pojonon valikanes su [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Geikön]].',
	'boardvote_nosession'    => 'Gebanadientif olik no kanon pafümükön. Nunädolös oli pö vük olik, e logolös eli <nowiki>[[Special:Boardvote]]</nowiki>. Mutol gebön kali labü keblünots pu $1 bü $2, e kela redakam balid äjenon bü $3.',
	'boardvote_notloggedin'  => 'No enunädol oli. Ad vögodön, mutol gebön kali labü keblünots pu $1 bü $2, e kela redakam balid äjenon bü $3.',
	'boardvote_notqualified' => 'No dalol kompenön pö daväl at. Zesüdos, das ädunol redakamis $3 bü $2, e das redakam balid ola äjenon bü $5.',
	'boardvote_novotes'      => 'Nek nog evögodon.',
	'boardvote_time'         => 'Tim',
	'boardvote_user'         => 'Geban',
	'boardvote_edits'        => 'Redakams',
	'boardvote_days'         => 'Dels',
	'boardvote_ip'           => 'ladet-IP',
	'boardvote_ua'           => 'Pladulan gebana',
	'boardvote_listintro'    => '<p>Is pajonon lised vögodas jünu peregistarölas valikas. $1 ad getön fomami pejüföl.</p>',
	'boardvote_dumplink'     => 'Klikolös is',
	'boardvote_submit'       => 'Baiced',
	'boardvote_strike'       => 'Duliunön',
	'boardvote_unstrike'     => 'Säduliunön',
	'boardvote_needadmin'    => 'Te davälaguvans dalons dunön atosi.',
	'boardvote_sitenotice'   => '<a href="{{localurle:Special:Boardvote/vote}}">Daväl Kipedalefa ela Wikimedia</a>:  Vögodam padälon jü yulul 12',
	'boardvote_notstarted'   => 'Daväl no nog eprimon',
	'boardvote_closed'       => 'Vögodam ya efinikon, logolös [http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En davälapadi] suno ad getön sekis.',
	'boardvote_edits_many'   => 'mödik',
	'group-boardvote'        => 'guvans Daväla Kipedalefa',
	'group-boardvote-member' => 'guvan Daväla Kipedalefa',
	'grouppage-boardvote'    => '{{ns:project}}:guvan Daväla Kipedalefa',
	'boardvote_blocked'      => 'Liedo peblokol in vük olik. Gebans pebloköl no dalons vögodön.',
	'boardvote_welcome'      => "Benokömö, o '''$1'''!",
	'go_to_board_vote'       => 'Daväl Kipedalefa ela Wikimedia (yelü 2008)',
	'boardvote_redirecting'  => 'Ad gretükön sefi e dulogamovi, vögodam pajenükon medü dünanünöm plödik nesekidiko pekontrolöl.

Olüodükol lü dünanünöm plödik at pos sekuns 20. [$1 Klikolös is] ad golön usio anu.

Sefanüned tefü doküm no pedispenöl ba pojonon.',
);

$messages['wa'] = array(
	'boardvote' => 'Vôtaedje po les manaedjeus del fondåcion Wikimedia',
	'boardvote_entry' => '* [[Special:Boardvote/vote|Vôter]]
* [[Special:Boardvote/list|Djivêye des vôtaedjes dedja fwaits]]
* [[Special:Boardvote/dump|Djiveye des bultins]] (tchaeke bultin est on blok ecripté)',
	'boardvote_intro' => '<p>
Bénvnowe å prumî vôtaedje po les manaedjeus del fondåcion Wikimedia.
Li vôtaedje c\' est po tchoezi deus djins ki cåzront å consey des manaedjeus po les contribouweus des diferins pordjets Wikimedia k\' overnut félmint po lzès fé viker:
on <strong>rprezintant des mimbes ki sont des contribouweus actifs</strong>,
eyet on <strong>rprezintant des uzeus volontaires</strong>.
Il aidront a defini l\' voye ki prindront les pordjets Wikimedia, ossu bén tchaeke pordjet ki zels tos come groupe, dj\' ô bén k\' i rprezintèt <em>vos</em> interesses divant l\' consey des manaedjes. I decidront so des sudjets come l\' ecwårlaedje eyet l\' atribouwaedje des çanses ås diferinnès bouyes.
</p>

<p>
Prindoz s\' i vs plait li tins di bén lére li prezintaedje di tchaesconk des candidats dvant d\' vôter.
Tchaeke des candidats est èn uzeu respecté del kiminaalté, k\' a contribouwé bråmint do tins eyet ds efoirts po fé di ces pordjets èn evironmint amiståve ey ahessåve, et ki croeyèt fel å franc cossemaedje del kinoxhaence amon l\' djin.
</p>

<p>
Vos ploz vôter po ostant d\' candidats ki vos vloz dins tchaeke plaece.
Li candidat avou l\' pus d\' vwès po tchaeke plaece serè rclamé wangneu
Dins l\' cas k\' i gn årè ewalisté inte deus prumîs candidats, on deujhinme vôtaedje serè fwait po les dispårti.
</p>

<p>
Po pus di racsegnes, loukîz a:
</p>
<ul>
<li><a href="http://meta.wikimedia.org/wiki/Election_FAQ" class="external">FAQ sol vôtaedje</a> (en inglès)</li>
<li><a href="http://meta.wikimedia.org/wiki/Election_Candidates" class="external">Candidats</a></li>
</ul>',
	'boardvote_intro_change' => '<p>
Vos avoz ddja voté.
Mins vos ploz tot l\' minme candjî vosse vôte, po çoula
rifjhoz ene tchuze tot clitchant so les boesses a clitchîz des
candidats ki vos estoz d\' acoird avou zels.
</p>',
	'boardvote_entered' => 'Gråces, vosse vôtaedje a stî conté.

Si vos vloz, vos ploz wårder les informåcions shuvantes.
Vosse bultin a stî eredjîstré come:

<pre>$1</pre>

Il a stî ecripté avou l\' clé publike des manaedjeus do vôtaedje:

<pre>$2</pre>

Vosse bultins ecripté est chal pa dzo. Tos les bultins ecriptés polèt
esse publicmint veyous so [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|En erî]]',
	'boardvote_notloggedin' => 'Vos n\' estoz nén elodjî.
Po pleur vôter vos dvoz esse elodjî eyet vosse conté
doet aveur stî ahivé i gn a 90 djoûs pol moens.',
	'boardvote_notqualified' => 'Dji rgrete, mins vosse prumî contribouwaedje a stî fwait
i gn a $1 djoûs seulmint.
Po pleur vôter vos dvoz aveur contribouwé po pus long ki
90 djoûs.',
	'boardvote_novotes' => 'I gn a co nolu k\' a vôté.',
	'boardvote_time' => 'Date ey eure',
	'boardvote_user' => 'Uzeu',
	'boardvote_edits' => 'Contribs',
	'boardvote_days' => 'Djoûs',
	'boardvote_listintro' => '<p>Çouchal, c\' est ene djivêye di totes les djins
k\' ont ddja vote disk\' asteure.
$1 po les dnêyes sourdant des bultins.</p>',
	'boardvote_dumplink' => 'Clitchîz chal',
);

$messages['yue'] = array(
	'boardvote'               => "Wikimedia理事委員會選舉",
	'boardvote-desc'          => '[[meta:Board elections|Wikimedia理事委員會選舉]]',
	'boardvote_entry'         => "* [[Special:Boardvote/vote|投票]]
* [[Special:Boardvote/list|列示至今已經投咗票嘅投票]]
* [[Special:Boardvote/dump|選舉記錄傾印]]",
	'boardvote_intro'         => "
<p>歡迎嚟到Wikimedia理事委員會嘅第二次選舉。我哋而家去為我哋嘅Wikimedia計劃進行投票，選出兩位人兄。佢哋會幫手去決定Wikimedia計劃將來嘅發展方向，無論個人定係團體，係畀理事委員之中代表<em>你</em>嘅興趣同埋關懷。另外佢哋會決定點樣運用所得來嘅錢同埋點樣整收入。</p>

<p>響投票之前，請小心咁去睇吓有關候選人嘅表達同埋有關嘅回應。每一個候選人係一位受到尊重嘅用戶，佢哋係用咗唔少時間同埋動力去令到呢啲計劃繼續進行到一個受歡迎嘅環境同埋自由咁發放人類嘅知識。</p>

<p>你可以向幾多位候選人投票都得。響每個位置中獲得最多票數嘅候選人會成為優勝者。如果有打和嘅情況，會另設決勝回合。</p>

<p>要睇更多嘅資料，睇吓：</p>
<ul><li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008\" class=\"external\">選舉FAQ</a></li>
<li><a href=\"http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates\" class=\"external\">候選人</a></li></ul>
",
	'boardvote_intro_change'  => "<p>你已經投咗票。
但係你可以利用下面嘅表格去改你嘅投票。請響每一位心目中嘅候選人打剔。</p>",
	'boardvote_entered'       => "多謝，你嘅投票已經被記錄落嚟。

如果你想記低你嘅投票記錄，你可以記住你嘅投票記錄。你嘅投票記錄係：

<pre>$1</pre>

佢係利用選舉管理員嘅公眾匙嘅信息：

<pre>$2</pre>

所加密嘅結果響下面列示。佢會響[[Special:Boardvote/dump]]度畀公眾顯示。

<pre>$3</pre>

[[Special:Boardvote/entry|返去]]",
	'boardvote_nosession'     => "我唔知你嘅維基媒體用戶ID。 唔該登入你合資格嘅維基，然後去嗰度嘅<nowiki>[[Special:Boardvote]]</nowiki>。你要喺$2之前要有至少$1次編輯，第一次編輯要早過$3。",
	'boardvote_notloggedin'   => "你仲未登入。要投票，你一定要用一個響$2之前最少有$1次貢獻，而且響$3之前作第一次編輯嘅戶口。",
	'boardvote_notqualified'  => "你仲未有資格響呢次選舉度投票。你需要用響$2之前最少有$1次編輯，你而家有$1次編輯。而且，你嘅第一次編輯響$4，佢係需要響$5之前。",
	'boardvote_novotes'       => "仲未有人投票。",
	'boardvote_time'          => "時間",
	'boardvote_user'          => "用戶",
	'boardvote_edits'         => "編輯數",
	'boardvote_days'          => "日",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "用戶代理",
	'boardvote_listintro'     => "<p>嘅個係到而家所被記錄落嚟嘅全部票數嘅名單。
$1去睇加密嘅資料。</p>",
	'boardvote_dumplink'      => "撳呢度",
	'boardvote_submit'        => 'OK',
	'boardvote_strike'        => "刪除綫",
	'boardvote_unstrike'      => "取消刪除綫",
	'boardvote_needadmin'     => "只有選舉管理員可以執行呢一個操作。",
	'boardvote_sitenotice'    => "<a href=\"{{localurle:Special:Boardvote/vote}}\">Wikimedia理事委員會選舉</a>：投票開放到9月20日",
	'boardvote_notstarted'    => '投票仲未開始',
	'boardvote_closed'        => '投票已經結束咗，請響之後睇吓[http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/En 選舉頁嘅結果]。',
	'boardvote_edits_many'    => '好多',
	'group-boardvote'         => '理事會投票管理員',
	'group-boardvote-member'  => '理事會投票管理員',
	'grouppage-boardvote'     => '{{ns:project}}:理事會投票管理員',
	'boardvote_blocked'       => '對唔住，響你註冊咗嘅維基度，你被封住咗。封住咗嘅用戶係唔畀投票嘅。',
	'boardvote_welcome'       => "'''$1'''，歡迎你！",
	'go_to_board_vote'        => 'Wikimedia理事委員會選舉2008',
	'boardvote_redirecting'   => '為咗好啲嘅保安同埋透明度，我哋用一個外置、獨立控制嘅伺服器去搞呢次嘅投票。

20秒之內你會彈去呢個外置伺服器。如果你想即刻去，就[$1 撳呢度]。

你有可能會收到一個安全警告，話個憑證冇簽到。',
);

/** Zeeuws (Zeêuws)
 * @author NJ
 */
$messages['zea'] = array(
	'boardvote'              => 'Wikimedia Board of Trustees-verkiezieng',
	'boardvote-desc'         => '[[meta:Board elections|Wikimedia Board of Trustees-verkiezieng]]',
	'boardvote_intro'        => '<p>Welkom bie de twidde verkieziengen voe de Wikimedia Board of Trustees.
We kiezen twi persoônen die an de gebrukersgemeênschap vertehenwoordihen in de verschill\'nde Wikimedia-projecten.
Ze bepaelen mede de toekomstihe richtieng van Wikimedia-projecten, individueêl en as hroep, en behartihen <em>uw</em> belangen en zurhen bie de Board of Trustees.
Ze beslissen ok over oe an inkomsen emikt kunnen worn en wi a \'t opehaeln held an wor besteed.</p>

<p>Lees asjeblieft de kandidaotstellieng en de antwoorn op vraegen nauwkeurig voeda je stem.
Iedere kandidaot is een hewaerdeerde gebruker die a anzienlijke hoeveelheden tied en moeite ei besteed an \'t bouwen van uutnoôdihende omheviengen die an toehewied zien an \'t naestreven en vrie verspreien van menselijke kennis.</p>

<p>Je mag op zòvee kandidaoten stemm\'n as a je wil.
De kandidaot mie de miste stemm\'n voe iedere positie wor tot winnaer uuteropen voe de betreffende positie.
In \'t heval dan de stemm\'n staken wor der een twidde ronde ehouwen.</p>

<p>Meêr informaotie:</p>
<ul><li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008" class="external">Bestuursverkiezieng FAQ</a></li>
<li><a href="http://meta.wikimedia.org/wiki/Board_elections/2008/Candidates" class="external">Kandidaoten</a></li></ul>',
	'boardvote_intro_change' => "<p>Je ei a estemd.
Je kan je stemme wiezigen via 't onderstaende formulier.
Vienk asjeblieft de vakjes an neffen iedere kandidaot die a je steun.</p>",
	'boardvote_entered'      => 'Dank je. Je stemme is verwerkt.

A je wil kan je de volhende hehevens bewaeren. Je stemme:

<pre>$1</pre>

Dezen is versleuteld mie de publieke sleutel van de Verkieziengscommissie:

<pre>$2</pre>

Noe volg de versleutelde versie. Dezen is openbaer en nae te ziene op [[Special:Boardvote/dump]].

<pre>$3</pre>

[[Special:Boardvote/entry|Trug]]',
	'boardvote_time'         => 'Tied',
	'boardvote_user'         => 'Gebruker',
	'boardvote_edits'        => 'Bewerkiengen',
	'boardvote_days'         => 'Daegen',
	'boardvote_ip'           => 'IP-adres',
);

$messages['zh-classical'] = array(
	'boardvote_time'          => "時辰",
	'boardvote_user'          => "編者",
	'boardvote_submit'        => '確定',
);

$messages['zh-hans'] = array(
	'boardvote'               => "维基媒体基金会理事会选举",
	'boardvote-desc'          => '[[meta:Board elections|维基媒体基金会理事会选举]]',
	'boardvote_entry'         => "* [[Special:Boardvote/vote|参与投票]]
* [[Special:Boardvote/list|至今已投票列表]]
* [[Special:Boardvote/dump|加密的选举数据]]",
	'boardvote_intro'         => "
<p>欢迎参与维基媒体基金会理事会第三届选举。我们将选出一人，代表各维基计划的用户社群。他/她将独力或与团队一起，帮助决定维基媒体计划的未来走向，同时在理事会中代表<b>你</b>的利益及考虑。他/她会决定创造收入的方式，及募得款项的分配。</p>

<p>请在投票前，仔细阅读参选人陈述及对质问的回应。每位参选人都是受尊重的用户，贡献了相当多的时间与精力来营造维基计划的友善环境，使其为人类知识的追求及自由分散服务。</p>

<p>你可以投票给任意多个参选人。得票最多的参选人将会公布为胜选。若最高票数相同，他们将进入第二轮选举。</p>

<p>请留意，你有且只有一票。即便你在多个计划有超过400次编辑，你仍只可投一票。若你要改变投票选择，请在原投票计划处修改。</p>
<p>更多信息，见：</p>
<ul><li><a href=\"http://meta.wikipedia.org/wiki/Election_FAQ_2008\" class=\"external\">选举的常见问题解答</a></li>
<li><a href=\"http://meta.wikipedia.org/wiki/Election_Candidates_2008\" class=\"external\">参选人</a></li></ul>
",
	'boardvote_intro_change'  => "<p>你已经参与过投票。但是你还可以在下面修改你的投票。请勾选你所支持的候选人名字的选择框。</p>",
	'boardvote_entered'       => "谢谢您，您的投票已经被记录。

您可以记录下以下详情。您的投票记录是：

<pre>$1</pre>

已经用选举管理员的公钥加密。

<pre>$2</pre>

以下是加密后的版本。它将在[[Special:Boardvote/dump]]列表中公开展示。

<pre>$3</pre>

[[Special:Boardvote/entry|返回]]",
	'boardvote_nosession'     => "我不能确定您的维基媒体账户名称。请您登入到合乎资格的维基计划，然后转到 <nowiki>[[Special:Boardvote]]</nowiki>。您必须用一个账户，在 $2 以前有 $1 次编辑，而且其首次编辑必须在 $3 以前。",
	'boardvote_notloggedin'   => "您还没有登录。要参与投票，您必须在$2之前至少贡献了$1次以上，而且在$3前作出第一次编辑。",
	'boardvote_notqualified'  => "抱歉，您在$2之前只有$1次贡献。 您必须至少贡献了$3次以上才可以参与本次投票。而且，您的第一次编辑是在$4，这需要在$5之前。",
	'boardvote_novotes'       => "目前还没有人投票。",
	'boardvote_time'          => "时间",
	'boardvote_user'          => "用户",
	'boardvote_edits'         => "编辑次数",
	'boardvote_days'          => "日",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "用户代理",
	'boardvote_listintro'     => "<p>本列表列出了迄今为止所有被登记的选票。$1是加密信息。</p>",
	'boardvote_dumplink'      => "点击这里",
	'boardvote_submit'        => 'OK',
	'boardvote_strike'        => "删除线",
	'boardvote_unstrike'      => "取消删除线",
	'boardvote_needadmin'     => "只有选举管理员才能进行本项操作。",
	'boardvote_sitenotice'    => "<a href=\"/wiki/Special:Boardvote/vote\">维基媒体基金会理事会选举</a>: 投票截止到9月20日",
	'boardvote_notstarted'    => '投票尚未开始',
	'boardvote_closed'        => '投票已经结束，请在稍后时间参看[http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Zh 投票结果]。',
	'boardvote_edits_many'    => '很多',
	'group-boardvote'         => '理事会投票管理员',
	'group-boardvote-member'  => '理事会投票管理员',
	'grouppage-boardvote'     => '{{ns:project}}:理事会投票管理员',
	'boardvote_blocked'       => '很抱歉，您在已注册的维基计划里遭到封禁。被封禁的用户并不能在选举中投票。',
	'boardvote_welcome'       => "欢迎您， '''$1'''！",
	'go_to_board_vote'        => '维基媒体基金会理事会选举2008',
	'boardvote_redirecting'   => '为改善投票的保安和透明度，这次选举将会在一个站外独立的服务器上进行。

20秒后浏览器将会自动转到这个站外服务器。您也可以马上[$1 点击这里]直接到那里。

稍后，您的浏览器可能会弹出未验证安全凭证的警告。',
);

$messages['zh-hant'] = array(
	'boardvote'               => "維基媒體基金會理事會選舉",
	'boardvote-desc'          => '[[meta:Board elections|維基媒體基金會理事會選舉]]',
	'boardvote_entry'         => "* [[Special:Boardvote/vote|參與投票]]
* [[Special:Boardvote/list|至今已投票列表]]
* [[Special:Boardvote/dump|加密的選舉資料]]",
	'boardvote_intro'         => "
<p>歡迎參與維基媒體基金會理事會第三屆選舉。我們將選出一人，代表各維基計畫的用戶社群。他/她將獨力或與團隊一起，幫助決定維基媒體計畫的未來走向，同時在理事會中代表<b>你</b>的利益及考量。他/她會決定創造收入的方式，及募得款項的分配。</p>

<p>請在投票前，仔細閱讀參選人陳述及對質問的回應。每位參選人都是受尊重的用戶，貢獻了相當多的時間與精力來營造維基計畫的友善環境，使其為人類知識的追求及自由分散服務。</p>

<p>你可以投票給任意多個參選人。得票最多的參選人將會公布為勝選。若最高票數相同，他們將進入第二輪選舉。</p>

<p>請留意，你有且只有一票。即便你在多個計畫有超過400次編輯，你仍只可投一票。若你要改變投票選擇，請在原投票計畫處修改。</p>
<p>更多資訊，見：</p>
<ul><li><a href=\"http://meta.wikipedia.org/wiki/Election_FAQ_2008\" class=\"external\">選舉的常見問題解答</a></li>
<li><a href=\"http://meta.wikipedia.org/wiki/Election_Candidates_2008\" class=\"external\">參選人</a></li></ul>
",
	'boardvote_intro_change'  => "<p>你已經參與過投票。但是你還可以在下面修改你的投票。請勾選你所支持的候選人名字的選擇框。</p>",
	'boardvote_entered'       => "謝謝您，您的投票已經被記錄。

您可以記錄下以下詳情。您的投票記錄是：

<pre>$1</pre>

已經用選舉管理員的公眾鑰匙加密。

<pre>$2</pre>

以下是加密後的版本。它將在[[Special:Boardvote/dump]]列表中公開展示。

<pre>$3</pre>

[[Special:Boardvote/entry|返回]]",
	'boardvote_nosession'     => "我不能確定您的維基媒體帳號名稱。請您登入到合乎資格的維基計劃，然後轉到 <nowiki>[[Special:Boardvote]]</nowiki>。您必須用一個帳號，在 $2 以前有 $1 次編輯，而且其首次編輯必須在 $3 以前。",
	'boardvote_notloggedin'   => "您還沒有登錄。要參與投票，您必須在$2之前至少貢獻了$1次以上，而且在$3前作出第一次編輯。",
	'boardvote_notqualified'  => "對不起，您在$2之前只有$1次貢獻。 您必須至少貢獻了$3次以上才可以參與本次投票。而且，您的第一次編輯是在$4，這需要在$5之前。",
	'boardvote_novotes'       => "目前還沒有人投票。",
	'boardvote_time'          => "時間",
	'boardvote_user'          => "用戶",
	'boardvote_edits'         => "編輯次數",
	'boardvote_days'          => "日",
	'boardvote_ip'            => "IP",
	'boardvote_ua'            => "用戶代理",
	'boardvote_listintro'     => "<p>本列表列出了迄今為止所有被登記的選票。$1是加密信息。</p>",
	'boardvote_dumplink'      => "點擊這裏",
	'boardvote_submit'        => 'OK',
	'boardvote_strike'        => "刪除綫",
	'boardvote_unstrike'      => "取消刪除綫",
	'boardvote_needadmin'     => "只有選舉管理員才能進行本項操作。",
	'boardvote_sitenotice'    => "<a href=\"/wiki/Special:Boardvote/vote\">維基媒體基金會理事會選舉</a>: 投票截止到9月20日",
	'boardvote_notstarted'    => '投票尚未開始',
	'boardvote_closed'        => '投票已經結束，請在稍後時間參看[http://meta.wikimedia.org/wiki/Elections_for_the_Board_of_Trustees_of_the_Wikimedia_Foundation%2C_2008/Zh 投票結果]。',
	'boardvote_edits_many'    => '很多',
	'group-boardvote'         => '理事會投票管理員',
	'group-boardvote-member'  => '理事會投票管理員',
	'grouppage-boardvote'     => '{{ns:project}}:理事會投票管理員',
	'boardvote_blocked'       => '很抱歉，您在已註冊的維基計劃裡遭到封禁。被封禁的用戶並不能在選舉中投票。',
	'boardvote_welcome'       => "歡迎您， '''$1'''！",
	'go_to_board_vote'        => '維基媒體基金會理事會選舉2008',
	'boardvote_redirecting'   => '為改善投票的保安和透明度，這次選舉將會在一個站外獨立的伺服器上進行。

20秒後瀏覽器將會自動轉到這個站外伺服器。您也可以馬上[$1 點擊這裡]直接到那裡。

稍後，您的瀏覽器可能會彈出未驗證安全憑證的警告。',
);

/** Zulu (isiZulu)
 * @author SPQRobin
 */
$messages['zu'] = array(
	'boardvote_time' => 'Isikhathi',
);

