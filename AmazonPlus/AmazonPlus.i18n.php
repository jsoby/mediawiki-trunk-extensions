<?php
/**
 * Internationalisation file for extension AmazonPlus.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (English)
 * @author Skizzerz
 */
$messages['en'] = array(
	'amazonplus-desc' => 'A highly customizable extension to display Amazon information',
	'amazonplus-nores' => 'Error: No results found!',
	'amazonplus-noidres' => 'Error: Could not find a product ID!',
	'amazonplus-fgcerr' => 'Error: Could not retrieve data from Amazon!',
	'amazonplus-slserr' => 'Error: Could not parse data from Amazon!',
	'amazonplus-used' => 'used',
	'amazonplus-german' => 'German',
	'amazonplus-french' => 'French',
	'amazonplus-japanese' => 'Japanese',
	'amazonplus-english' => '',
	'amazonplus-amazon' => 'amazon price',
	'amazonplus-new' => 'new',
	'amazonplus-status' => '($1)',
	'amazonplus-none' => 'No copies of this item are up for sale.',
	'amazonplus-currency' => '$3$1 $2$4',
	'amazonplus-cp-none' => 'None',
	'amazonplus-cp-usd' => 'USD',
	'amazonplus-cp-cad' => 'CAD',
	'amazonplus-cp-gbp' => 'GBP',
	'amazonplus-cp-eur' => 'EUR',
	'amazonplus-cp-jpy' => 'JPY',
	'amazonplus-more' => 'more',
	'amazonplus-less' => 'less',
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author Meno25
 * @author Purodha
 * @author Skizzerz
 */
$messages['qqq'] = array(
	'amazonplus-desc' => 'Short description of this extension, shown on [[Special:Version]]. Do not translate or change links.',
	'amazonplus-nores' => 'Error message, automatically wrapped in a span tag with class="error."

{{Identical|Sorry, no results}}',
	'amazonplus-noidres' => 'Error message, automatically wrapped in a span tag with class="error."',
	'amazonplus-fgcerr' => 'Error message, automatically wrapped in a span tag with class="error."',
	'amazonplus-slserr' => 'Error message, automatically wrapped in a span tag with class="error."',
	'amazonplus-used' => 'Definition of "used" in this message is "not new."',
	'amazonplus-german' => 'Name of the German language, or an empty string if translating to German.',
	'amazonplus-french' => 'Name of the French language, or an empty string if translating to French.',
	'amazonplus-japanese' => 'Name of the Japanese language, or an empty string if translating to Japanese.',
	'amazonplus-status' => ';$1:A combination of status messages seperated with [[MediaWiki:Amazonplus-status-sep/en|amazonplus-status-sep]]',
	'amazonplus-currency' => ';$1:Formatted price without symbol (e.g. 16.41)
;$2:Currency code (e.g. USD)
;$3:Currency symbol (e.g. $)
;$4:Status message',
	'amazonplus-cp-usd' => '{{optional}}',
	'amazonplus-cp-cad' => '{{optional}}',
	'amazonplus-cp-gbp' => '{{optional}}',
	'amazonplus-cp-eur' => '{{optional}}',
	'amazonplus-cp-jpy' => '{{optional}}',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 * @author Ouda
 */
$messages['ar'] = array(
	'amazonplus-desc' => 'امتداد عالي القابلية للتخصيص لعرض معلومات أمازون',
	'amazonplus-nores' => '! خطأ: لم يتم العثور على نتائج',
	'amazonplus-noidres' => 'خطأ: تعذر إيجاد هوية منتج!',
	'amazonplus-fgcerr' => 'خطأ: تعذر جلب بيانات من أمازون!',
	'amazonplus-slserr' => 'خطأ: تعذر تحليل بيانات من أمازون!',
	'amazonplus-used' => 'مستعمل',
	'amazonplus-german' => 'ألمانية',
	'amazonplus-french' => 'فرنسية',
	'amazonplus-japanese' => 'يابانية',
	'amazonplus-amazon' => 'سعر أمازون',
	'amazonplus-new' => 'جديد',
	'amazonplus-none' => 'لا نُسخ من هذا العنصر معروضة للبيع.',
	'amazonplus-cp-none' => 'لا شيء',
	'amazonplus-cp-usd' => 'دولار أمريكي',
	'amazonplus-cp-gbp' => 'جنيه إسترليني',
	'amazonplus-cp-eur' => 'يورو',
	'amazonplus-cp-jpy' => 'ين ياباني',
	'amazonplus-more' => 'أكثر',
	'amazonplus-less' => 'أقل',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 * @author Ouda
 * @author Ramsis II
 */
$messages['arz'] = array(
	'amazonplus-desc' => 'امتداد عالى القابليه للتخصيص لعرض معلومات امازون',
	'amazonplus-nores' => '! خطأ: لم يتم العثور على نتائج',
	'amazonplus-noidres' => 'غلط:مالقيناش بطاقة تعريف المنتج!',
	'amazonplus-fgcerr' => 'غلط:مانفعش نرجع البيانات من امازون!',
	'amazonplus-slserr' => 'غلط:تحليل البيانات من امازون ما نفعش!',
	'amazonplus-used' => 'مستعمل',
	'amazonplus-german' => 'ألمانية',
	'amazonplus-french' => 'فرنسية',
	'amazonplus-japanese' => 'يابانية',
	'amazonplus-amazon' => 'سعر أمازون',
	'amazonplus-new' => 'جديد',
	'amazonplus-none' => 'مافيش نسخ من الصنف دا معروضه للبيع',
	'amazonplus-cp-none' => 'لا شيء',
	'amazonplus-more' => 'أكثر',
	'amazonplus-less' => 'أقل',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'amazonplus-nores' => 'Грешка: Не бяха открити резултати!',
	'amazonplus-noidres' => 'Грешка: Номера на продукта не можа да бъде открит!',
	'amazonplus-fgcerr' => 'Грешка: Не може да бъде извлечена информация от Amazon!',
	'amazonplus-german' => 'немски',
	'amazonplus-french' => 'френски',
	'amazonplus-japanese' => 'японски',
	'amazonplus-cp-none' => 'Няма',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'amazonplus-desc' => 'Un astenn aes da bersonelaat a-benn diskwel titouroù diwar Amazon',
	'amazonplus-nores' => "Fazi : N'eus bet kavet tamm disoc'h ebet !",
	'amazonplus-noidres' => "Fazi : N'eus ket bet kavet ID produ ebet !",
	'amazonplus-fgcerr' => "Fazi : N'eus ket bet gallet adtapout roadennoù Amazon",
	'amazonplus-slserr' => "Fazi : N'eus ket bet gallet dielfennañ roadennoù Amazon",
	'amazonplus-used' => 'implijet',
	'amazonplus-german' => 'Alamaneg',
	'amazonplus-french' => 'Galleg',
	'amazonplus-japanese' => 'Japaneg',
	'amazonplus-amazon' => 'Priz Amazon',
	'amazonplus-new' => 'nevez',
	'amazonplus-none' => "N'haller prenañ eilenn ebet eus an draezenn-mañ",
	'amazonplus-cp-none' => 'Hini ebet',
	'amazonplus-more' => "muioc'h",
	'amazonplus-less' => "nebeutoc'h",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'amazonplus-desc' => 'Dobro podešavajuća ekstenzija koja prikazuje informacije sa Amazona',
	'amazonplus-nores' => 'Greška: Nisu pronađeni rezultati!',
	'amazonplus-noidres' => 'Greška: Nije pronađen ID proizvoda!',
	'amazonplus-fgcerr' => 'Greška: Podaci sa Amazona nisu mogli biti dobavljeni!',
	'amazonplus-slserr' => 'Greška: Podaci sa Amazona nisu mogli biti obrađeni!',
	'amazonplus-used' => 'polovno',
	'amazonplus-german' => 'njemački',
	'amazonplus-french' => 'francuski',
	'amazonplus-japanese' => 'japanski',
	'amazonplus-amazon' => 'cijena na Amazonu',
	'amazonplus-new' => 'novo',
	'amazonplus-none' => 'Nijedna kopija ovog predmeta nije trenutno na prodaju.',
	'amazonplus-cp-none' => 'Ništa',
	'amazonplus-more' => 'više',
	'amazonplus-less' => 'manje',
);

/** Cebuano (Cebuano)
 * @author Wrightbus
 */
$messages['ceb'] = array(
	'amazonplus-german' => 'Inaleman',
	'amazonplus-french' => 'Prinanses',
	'amazonplus-japanese' => 'Hinapon',
);

/** Czech (Česky)
 * @author Wrightbus
 */
$messages['cs'] = array(
	'amazonplus-german' => 'Němčina',
	'amazonplus-french' => 'Francouzština',
	'amazonplus-japanese' => 'Japonština',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author MF-Warburg
 */
$messages['de'] = array(
	'amazonplus-desc' => 'Eine gut anpassbare Erweiterung, um Informationen von Amazon anzuzeigen',
	'amazonplus-nores' => 'Fehler: Keine Ergebnisse gefunden!',
	'amazonplus-noidres' => 'Fehler: Produkt-ID konnte nicht gefunden werden!',
	'amazonplus-fgcerr' => 'Fehler: Es konnten keine Daten von Amazon geholt werden.',
	'amazonplus-slserr' => 'Fehler: Von Amazon empfangene Daten konnten nicht verarbeitet werden!',
	'amazonplus-used' => 'gebraucht',
	'amazonplus-german' => 'Deutsch',
	'amazonplus-french' => 'Französisch',
	'amazonplus-japanese' => 'Japanisch',
	'amazonplus-amazon' => 'Preis bei Amazon',
	'amazonplus-new' => 'neu',
	'amazonplus-none' => 'Von dieser Publikation werden momentan keine Kopien verkauft.',
	'amazonplus-cp-none' => 'Keine',
	'amazonplus-more' => 'mehr',
	'amazonplus-less' => 'weniger',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'amazonplus-desc' => 'Derje pśiměrjujobne rozšyrjenje za zwobraznjenje informacijow wó Amazonje',
	'amazonplus-nores' => 'Zmólka: Žedne wuslědki namakane!',
	'amazonplus-noidres' => 'Zmólka: Produktowy ID njejo se namakaś dał!',
	'amazonplus-fgcerr' => 'Zmólka: Daty z Amazona njejsu se wótwołaś dali!',
	'amazonplus-slserr' => 'Zmólka: Daty z Amazona njejsu se analyzěrowaś dali!',
	'amazonplus-used' => 'wužywany',
	'amazonplus-german' => 'Nimčina',
	'amazonplus-french' => 'Francojšćina',
	'amazonplus-japanese' => 'Japanšćina',
	'amazonplus-amazon' => 'Płaśizna Amazona',
	'amazonplus-new' => 'nowy',
	'amazonplus-none' => 'Žedne kopije toś togo objekta njejsu za pśedank.',
	'amazonplus-cp-none' => 'Žeden',
	'amazonplus-more' => 'wěcej',
	'amazonplus-less' => 'mjenjej',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Konsnos
 */
$messages['el'] = array(
	'amazonplus-nores' => 'Σφάλμα: Δεν υπήρξαν αποτελέσματα!',
	'amazonplus-fgcerr' => 'Σφάλμα: Δεν έγινε ανάκτηση δεδομένων από το Amazon!',
	'amazonplus-used' => 'χρησιμοποιημένος',
	'amazonplus-german' => 'Γερμανικά',
	'amazonplus-french' => 'Γαλλικά',
	'amazonplus-japanese' => 'Ιαπωνικά',
	'amazonplus-none' => 'Δεν υπάρχουν αντίτυπα αυτού του προϊόντος προς πώληση.',
	'amazonplus-cp-none' => 'Κανένας',
);

/** Esperanto (Esperanto)
 * @author Melancholie
 * @author Yekrats
 */
$messages['eo'] = array(
	'amazonplus-desc' => 'Tre konfigurebla etendilo por montri informon de Amazon',
	'amazonplus-nores' => 'Eraro: Neniuj rezultoj trovita!',
	'amazonplus-noidres' => 'Eraro: Ne trovis produktan identigon!',
	'amazonplus-used' => 'uzita',
	'amazonplus-german' => 'Germana',
	'amazonplus-french' => 'Franca',
	'amazonplus-japanese' => 'Japana',
	'amazonplus-amazon' => 'prezo de amazon',
	'amazonplus-new' => 'nova',
	'amazonplus-cp-none' => 'Nenia',
	'amazonplus-more' => 'pli',
	'amazonplus-less' => 'malpli',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Drini
 */
$messages['es'] = array(
	'amazonplus-desc' => 'Una extensión altamente personalizable para desplegar informaciónde Amazon',
	'amazonplus-nores' => 'Error: Sin resultados encontrados!',
	'amazonplus-noidres' => 'Error: ¡No se pudo encontrar el ID del producto!',
	'amazonplus-fgcerr' => 'Error: ¡No se pudo obtener los datos desde Amazon!',
	'amazonplus-slserr' => 'Error: ¡no se pudo procesar los datos desde Amazon!',
	'amazonplus-used' => 'usado',
	'amazonplus-german' => 'Alemán',
	'amazonplus-french' => 'Francés',
	'amazonplus-japanese' => 'Japonés',
	'amazonplus-amazon' => 'precio amazon',
	'amazonplus-new' => 'nuevo',
	'amazonplus-none' => 'No hay copias de este item para venta.',
	'amazonplus-cp-none' => 'Ninguno',
	'amazonplus-more' => 'más',
	'amazonplus-less' => 'menos',
);

/** Estonian (Eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'amazonplus-nores' => 'Viga: tulemusi ei leitud!',
	'amazonplus-new' => 'uus',
);

/** Basque (Euskara)
 * @author Theklan
 */
$messages['eu'] = array(
	'amazonplus-desc' => 'Amazonen informazioa agertzeko oso aldagarria den estentsio bat',
	'amazonplus-nores' => 'Akatsa: Ez da emaitzarik aurkitu!',
	'amazonplus-noidres' => 'Akatsa: Ezin da produltuaren IDa aurkitu!',
	'amazonplus-fgcerr' => 'Akatsa: Ezin da daturik lortu Amazonetik!',
	'amazonplus-slserr' => 'Akatsa: Ezin da daturik parseatu Amazonetik!',
	'amazonplus-used' => 'erabilia',
	'amazonplus-german' => 'Alemaniera',
	'amazonplus-french' => 'Frantsesa',
	'amazonplus-japanese' => 'Japoniera',
	'amazonplus-amazon' => 'amazon prezioa',
	'amazonplus-new' => 'berria',
	'amazonplus-status' => '($1)',
	'amazonplus-none' => 'Ez dago artikulu honen kopiarik salgai.',
	'amazonplus-currency' => '$1$3 $4$2',
	'amazonplus-cp-none' => 'Bat ere ez',
	'amazonplus-cp-usd' => 'USD',
	'amazonplus-cp-cad' => 'CAD',
	'amazonplus-cp-gbp' => 'GBP',
	'amazonplus-cp-eur' => 'EUR',
	'amazonplus-cp-jpy' => 'JPY',
	'amazonplus-more' => 'gehiago',
	'amazonplus-less' => 'gutxiago',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Mobe
 * @author Nike
 * @author Vililikku
 */
$messages['fi'] = array(
	'amazonplus-desc' => 'Helposti mukautuva laajennos Amazon-tietojen näyttämiseen.',
	'amazonplus-nores' => 'Tuloksia ei löytynyt.',
	'amazonplus-noidres' => 'Virhe: Tuotteen tunnusta ei löydetty.',
	'amazonplus-fgcerr' => 'Virhe: Tietojen hakeminen Amazonista epäonnistui.',
	'amazonplus-slserr' => 'Virhe: Amazonista saadun vastauken jäsentäminen epäonnistui.',
	'amazonplus-used' => 'käytetty',
	'amazonplus-german' => 'Saksankielinen',
	'amazonplus-french' => 'Ranskankielinen',
	'amazonplus-japanese' => 'Japaninkielinen',
	'amazonplus-amazon' => 'amazonin hinta',
	'amazonplus-new' => 'uusi',
	'amazonplus-none' => 'Tätä tuotetta ei ole yhtään kappaletta myytävänä.',
	'amazonplus-cp-none' => 'Ei mitään',
);

/** French (Français)
 * @author IAlex
 */
$messages['fr'] = array(
	'amazonplus-desc' => 'Une extension très personnalisable pour afficher des informations de Amazon',
	'amazonplus-nores' => "Erreur : Aucun résultat n'a été trouvé !",
	'amazonplus-noidres' => "Erreur : un ID de produit n'a pas pu être trouvé !",
	'amazonplus-fgcerr' => "Erreur : les données de Amazon n'ont pas pu être récupérées",
	'amazonplus-slserr' => "Erreur : les données de Amazon n'ont pas pu être analysées",
	'amazonplus-used' => 'utilisé',
	'amazonplus-german' => 'Allemand',
	'amazonplus-french' => 'Français',
	'amazonplus-japanese' => 'Japonais',
	'amazonplus-amazon' => 'Prix de Amazon',
	'amazonplus-new' => 'nouveau',
	'amazonplus-none' => "Aucune copie de cet article n'est disponible à l'achat",
	'amazonplus-cp-none' => 'Aucun',
	'amazonplus-more' => 'plus',
	'amazonplus-less' => 'moins',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'amazonplus-desc' => 'Unha extensión altamente personalizable para amosar información do Amazon',
	'amazonplus-nores' => 'Erro: non se atopou ningún resultado!',
	'amazonplus-noidres' => 'Erro: non se puido atopar o ID dun produto!',
	'amazonplus-fgcerr' => 'Erro: non se puideron obter os datos do Amazon!',
	'amazonplus-slserr' => 'Erro: non se puideron analizar os datos do Amazon!',
	'amazonplus-used' => 'usado',
	'amazonplus-german' => 'Alemán',
	'amazonplus-french' => 'Francés',
	'amazonplus-japanese' => 'Xaponés',
	'amazonplus-amazon' => 'prezo do Amazon',
	'amazonplus-new' => 'novo',
	'amazonplus-none' => 'Non hai dispoñibles para a venda copias deste produto.',
	'amazonplus-cp-none' => 'Ningún',
	'amazonplus-more' => 'máis',
	'amazonplus-less' => 'menos',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'amazonplus-german' => 'Γερμανιστί',
	'amazonplus-french' => 'Φραγκογαλλιστί',
	'amazonplus-japanese' => 'Ἰαπωνιστί',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'amazonplus-desc' => 'E Erwyterig, wu gut aapassbar isch, go Informatione vu Amazon aazeige',
	'amazonplus-nores' => 'Fähler: Kei Ergebnis gfunde!',
	'amazonplus-noidres' => 'Fähler: Produkt-ID het nit chenne gfunde wäre!',
	'amazonplus-fgcerr' => 'Fähler: Date vu Amazon hän nit chenne gholt wäre!',
	'amazonplus-slserr' => 'Fähler: D Date, wu vu Amazon empfange wore sin, hän nit chenne verarbeitet wäre!',
	'amazonplus-used' => 'bruucht',
	'amazonplus-german' => 'Dytsch',
	'amazonplus-french' => 'Franzesisch',
	'amazonplus-japanese' => 'Japanisch',
	'amazonplus-amazon' => 'Pryys bi Amazon',
	'amazonplus-new' => 'nej',
	'amazonplus-none' => 'Vu däre Publikation wäre im Momänt kei Kopie verchauft.',
	'amazonplus-cp-none' => 'Keini',
	'amazonplus-more' => 'meh',
	'amazonplus-less' => 'weniger',
);

/** Manx (Gaelg)
 * @author Wrightbus
 */
$messages['gv'] = array(
	'amazonplus-german' => 'Germaanish',
	'amazonplus-french' => 'Frangish',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'amazonplus-desc' => 'הרחבה להצגת מידע מ־Amazon, הניתנת להתאמה אישית נרחבת',
	'amazonplus-nores' => 'שגיאה: לא נמצאו תוצאות!',
	'amazonplus-noidres' => 'שגיאה: לא ניתן למצוא את מספר הזיהוי של המוצר!',
	'amazonplus-fgcerr' => 'שגיאה: לא ניתן לאחזר את המידע מ־Amazon!',
	'amazonplus-slserr' => 'שגיאה: לא ניתן לנתח את המידע מ־Amazon!',
	'amazonplus-used' => 'משומש',
	'amazonplus-german' => 'גרמנית',
	'amazonplus-french' => 'צרפתית',
	'amazonplus-japanese' => 'יפנית',
	'amazonplus-amazon' => 'המחיר ב־Amazon',
	'amazonplus-new' => 'חדש',
	'amazonplus-none' => 'לא זמינים עותקים למכירה של פריט זה.',
	'amazonplus-currency' => '$3$1 $2$4',
	'amazonplus-cp-none' => 'אין',
	'amazonplus-cp-usd' => 'USD',
	'amazonplus-cp-cad' => 'CAD',
	'amazonplus-cp-gbp' => 'GBP',
	'amazonplus-cp-eur' => 'EUR',
	'amazonplus-cp-jpy' => 'JPY',
	'amazonplus-more' => 'עוד',
	'amazonplus-less' => 'פחות',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'amazonplus-desc' => 'Derje přiměrjujomne rozšěrjenje za zwobraznjenje informacijow Amazona',
	'amazonplus-nores' => 'Zmylk: Žane wuslědki namakane!',
	'amazonplus-noidres' => 'Zmylk: Produktowy ID njehodźeše so namakać!',
	'amazonplus-fgcerr' => 'Zmylk: Daty njehodźachu so z Amazana wotwołać!',
	'amazonplus-slserr' => 'Zmylk: Daty z Amazona njehodźachu so analyzować!',
	'amazonplus-used' => 'wužiwany',
	'amazonplus-german' => 'Němčina',
	'amazonplus-french' => 'Francošćina',
	'amazonplus-japanese' => 'Japanšćina',
	'amazonplus-amazon' => 'Płaćizna Amazona',
	'amazonplus-new' => 'nowy',
	'amazonplus-none' => 'Kopije tutoho objekta na předań njejsu.',
	'amazonplus-cp-none' => 'Žadyn',
	'amazonplus-more' => 'wjace',
	'amazonplus-less' => 'mjenje',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'amazonplus-desc' => 'Egy teljesen testreszabható kiterjesztés Amazon-információk megjeleneítésére',
	'amazonplus-nores' => 'Hiba: nincsenek találatok!',
	'amazonplus-noidres' => 'Hiba: a termékazonosító nem található!',
	'amazonplus-fgcerr' => 'Hiba: nem sikerült betölteni az adatokat az Amazonról!',
	'amazonplus-slserr' => 'Hiba: nem sikerült értelmezni az Amazonról származó adatokat!',
	'amazonplus-used' => 'használt',
	'amazonplus-german' => 'német',
	'amazonplus-french' => 'francia',
	'amazonplus-japanese' => 'japán',
	'amazonplus-amazon' => 'amazon ár',
	'amazonplus-new' => 'új',
	'amazonplus-none' => 'A termék egyetlen példánya sem eladó.',
	'amazonplus-cp-none' => 'Semmi',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'amazonplus-desc' => 'Un extension multo personalisabile pro presentar informationes de Amazon',
	'amazonplus-nores' => 'Error: Nulle resultato trovate!',
	'amazonplus-noidres' => 'Error: Non poteva trovar un ID de producto!',
	'amazonplus-fgcerr' => 'Error: Non poteva reciper datos de Amazon!',
	'amazonplus-slserr' => 'Error: Syntaxe incorrecte in le datos de Amazon!',
	'amazonplus-used' => 'usate',
	'amazonplus-german' => 'Germano',
	'amazonplus-french' => 'Francese',
	'amazonplus-japanese' => 'Japonese',
	'amazonplus-amazon' => 'precio de Amazon',
	'amazonplus-new' => 'nove',
	'amazonplus-none' => 'Nulle copia de iste articulo es in vendita.',
	'amazonplus-cp-none' => 'Necun',
	'amazonplus-more' => 'plus',
	'amazonplus-less' => 'minus',
);

/** Italian (Italiano)
 * @author Pietrodn
 */
$messages['it'] = array(
	'amazonplus-desc' => "Un'estensione altamente personalizzabile per visualizzare le informazioni Amazon",
	'amazonplus-nores' => 'Errore: Nessun risultato trovato!',
	'amazonplus-noidres' => 'Errore: Impossibile trovare un ID di prodotto!',
	'amazonplus-fgcerr' => 'Errore: Impossibile recuperare i dati da Amazon!',
	'amazonplus-slserr' => 'Errore: Impossibile analizzare i dati da Amazon!',
	'amazonplus-used' => 'usato',
	'amazonplus-german' => 'Tedesco',
	'amazonplus-french' => 'Francese',
	'amazonplus-japanese' => 'Giapponese',
	'amazonplus-amazon' => 'prezzo di amazon',
	'amazonplus-new' => 'nuovo',
	'amazonplus-none' => 'Nessun pezzo di questo articolo è in vendita.',
	'amazonplus-cp-none' => 'Nessuno',
	'amazonplus-more' => 'più',
	'amazonplus-less' => 'meno',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author Hosiryuhosi
 */
$messages['ja'] = array(
	'amazonplus-desc' => 'Amazon からの情報を表示する高度にカスタマイズ可能な拡張機能',
	'amazonplus-nores' => 'エラー: 結果は見つかりませんでした!',
	'amazonplus-noidres' => 'エラー: プロダクトIDが見つかりませんでした！',
	'amazonplus-fgcerr' => 'エラー: Amazon からデータを取得できませんでした！',
	'amazonplus-slserr' => 'エラー:アマゾンからのデータを解析することができませんでした!',
	'amazonplus-used' => '中古',
	'amazonplus-german' => 'ドイツ語',
	'amazonplus-french' => 'フランス語',
	'amazonplus-japanese' => '日本語',
	'amazonplus-amazon' => 'アマゾン価格',
	'amazonplus-new' => '新品',
	'amazonplus-none' => 'この商品は在庫・出品がありません。',
	'amazonplus-cp-none' => '無し',
	'amazonplus-more' => '続き',
	'amazonplus-less' => '省略',
);

/** Georgian (ქართული)
 * @author Temuri rajavi
 */
$messages['ka'] = array(
	'amazonplus-german' => 'გერმანული',
	'amazonplus-french' => 'ფრანგული',
	'amazonplus-japanese' => 'იაპონური',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Thearith
 */
$messages['km'] = array(
	'amazonplus-nores' => 'កំហុស​៖ គ្មាន​លទ្ធផល​!',
	'amazonplus-noidres' => 'កំហុស​៖ មិន​អាច​រកឃើញ​ផលិតផល​ដែល​មាន ID!',
	'amazonplus-fgcerr' => 'កំហុស​៖ មិន​អាច​ទាញយក​ទិន្នន័យ​ពី​អាម៉ាហ្សូន​ទេ​!',
	'amazonplus-slserr' => 'កំហុស​៖ មិន​អាច​ញែក​ទិន្នន័យ​ពី​អាម៉ាហ្សូន​ទេ​!',
	'amazonplus-used' => 'បាន​ប្រើ',
	'amazonplus-german' => 'ភាសាអាល្លឺម៉ង់',
	'amazonplus-french' => 'ភាសាបារាំង',
	'amazonplus-japanese' => 'ភាសាជប៉ុន',
	'amazonplus-amazon' => 'តម្លៃ​នៅលើ​អាម៉ាហ្សូន',
	'amazonplus-new' => 'ថ្មី',
	'amazonplus-none' => 'គ្មាន​ផលិតផល​ថតចម្លង​ណាមួយ​ត្រូវ​បាន​ដាក់​លក់​ឡើយ​។',
	'amazonplus-cp-none' => 'គ្មាន',
);

/** Korean (한국어)
 * @author Wrightbus
 * @author Yknok29
 */
$messages['ko'] = array(
	'amazonplus-desc' => '아마존 정보를 전시하기 위한 고도 주문 확장',
	'amazonplus-nores' => '오류: 아무런 결과를 찾을 수 없습니다!',
	'amazonplus-noidres' => '오류: 상품 ID를 찾을 수 없습니다!',
	'amazonplus-fgcerr' => '오류: 아마존으로부터 온 자료가 복구될 수 없습니다!',
	'amazonplus-slserr' => '오류: 아마존으로부터 온 자료를 인식할 수 없습니다!',
	'amazonplus-used' => '중고',
	'amazonplus-german' => '독일어',
	'amazonplus-french' => '프랑스어',
	'amazonplus-japanese' => '일본어',
	'amazonplus-amazon' => '아마존 가격',
	'amazonplus-new' => '신규',
	'amazonplus-none' => '이 책의 복사본은 팔지 않습니다.',
	'amazonplus-cp-none' => '없음',
	'amazonplus-more' => '좀 더 있음',
	'amazonplus-less' => '부족함',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'amazonplus-desc' => 'Dä Zosatz met ööhndlesch Müjjeleschkeite zom Enstelle zeijsch Date fun <i lang="en">Amazon</i> aan.',
	'amazonplus-nores' => 'Ene Fäähler es opjetrodde. Kei Äjeebnis jefonge!',
	'amazonplus-noidres' => 'Ene Fäähler es opjetrodde. De Produknommer vun <i lang="en">Amazon</i> wohr nit ze fenge!',
	'amazonplus-fgcerr' => 'Ene Fäähler es opjetrodde. Mer han kei Date vun <i lang="en">Amazon</i> kräje!',
	'amazonplus-slserr' => 'Ene Fäähler es opjetrodde. De Date vun <i lang="en">Amazon</i> wohre för nix joot!',
	'amazonplus-used' => 'jebruch',
	'amazonplus-german' => 'Dütsch',
	'amazonplus-french' => 'Franzüsesch',
	'amazonplus-japanese' => 'Japanesch',
	'amazonplus-amazon' => 'dä Priiß bei <i lang="en">Amazon</i>',
	'amazonplus-new' => 'neu',
	'amazonplus-status' => '($1)',
	'amazonplus-none' => 'Et es jraad kei Stöck dovun em Aanjebott.',
	'amazonplus-currency' => '$3$1 $2$4',
	'amazonplus-cp-none' => 'Nix',
	'amazonplus-cp-usd' => 'USD',
	'amazonplus-cp-cad' => 'CAD',
	'amazonplus-cp-gbp' => 'GBP',
	'amazonplus-cp-eur' => 'EUR',
	'amazonplus-cp-jpy' => 'JPY',
	'amazonplus-more' => 'mieh',
	'amazonplus-less' => 'winnijer',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'amazonplus-desc' => 'Eng Erweiderung déi individuell agestalt ka ginnfir Informatioune vun Amazon ze weisen',
	'amazonplus-nores' => 'Feeler: Keng Resultater fonnt!',
	'amazonplus-noidres' => 'Feeler: et gouf keng Prokukt ID fonnt!',
	'amazonplus-fgcerr' => 'Feeler: Et si keng Date vun Amazon ukomm!',
	'amazonplus-slserr' => 'Feeler: Dat vun Amazon konnte net verschafft ginn!',
	'amazonplus-used' => 'gebraucht',
	'amazonplus-german' => 'Däitsch',
	'amazonplus-french' => 'Franséisch',
	'amazonplus-japanese' => 'Japanesch',
	'amazonplus-amazon' => 'Präis vun Amazon',
	'amazonplus-new' => 'nei',
	'amazonplus-none' => 'Keng Kopie vun dësem Artikel ass ze verkafen',
	'amazonplus-cp-none' => 'Keng',
	'amazonplus-more' => 'méi',
	'amazonplus-less' => 'manner',
);

/** Limburgish (Limburgs)
 * @author Wrightbus
 */
$messages['li'] = array(
	'amazonplus-german' => 'Duits',
	'amazonplus-french' => 'Frans',
	'amazonplus-japanese' => 'Japans',
);

/** Mongolian (Монгол)
 * @author E.shijir
 */
$messages['mn'] = array(
	'amazonplus-nores' => 'Алдаа: Үр дүн олдсонгүй.',
);

/** Malay (Bahasa Melayu)
 * @author Diagramma Della Verita
 */
$messages['ms'] = array(
	'amazonplus-nores' => 'Ralat : Carian tidak menyamai mana-mana dokumen',
	'amazonplus-noidres' => 'Ralat : ID barang tidak terdapat dalam pangkalan data',
	'amazonplus-used' => 'terpakai',
	'amazonplus-german' => 'German',
	'amazonplus-french' => 'Perancis',
	'amazonplus-japanese' => 'Jepun',
	'amazonplus-amazon' => 'harga amazon',
	'amazonplus-new' => 'baru',
	'amazonplus-none' => 'Tiada salinan barang ini yang dipaparkan untuk dijual.',
	'amazonplus-cp-none' => 'Tiada',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'amazonplus-desc' => 'Een aan te passen uitbreiding voor het weergeven van informatie van Amazon',
	'amazonplus-nores' => 'Fout: geen resultaten gevonden!',
	'amazonplus-noidres' => 'Fout: er is geen productnummer gevonden!',
	'amazonplus-fgcerr' => 'Fout: er konden geen gegevens van Amazon opgehaald worden!',
	'amazonplus-slserr' => 'Fout: de gegevens van Amazon konden niet verwerkt worden!',
	'amazonplus-used' => 'gebruikt',
	'amazonplus-german' => 'Duits',
	'amazonplus-french' => 'Frans',
	'amazonplus-japanese' => 'Japans',
	'amazonplus-amazon' => 'Amazon-prijs',
	'amazonplus-new' => 'nieuw',
	'amazonplus-none' => 'Er zijn geen kopieën van dit object te koop.',
	'amazonplus-cp-none' => 'Geen',
	'amazonplus-more' => 'meer',
	'amazonplus-less' => 'minder',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Harald Khan
 */
$messages['nn'] = array(
	'amazonplus-desc' => 'Ei utviding med store tilpassingsmoglegheiter for å visa Amazon-informasjon',
	'amazonplus-nores' => 'Feil: fann ingen resultat!',
	'amazonplus-noidres' => 'Feil: kunne ikkje finna ein produkt-ID!',
	'amazonplus-fgcerr' => 'Feil: kunne ikkje henta data frå Amazon!',
	'amazonplus-slserr' => 'Feil: kunne ikkje parsa data frå Amazon!',
	'amazonplus-used' => 'brukt',
	'amazonplus-german' => 'Tysk',
	'amazonplus-french' => 'Fransk',
	'amazonplus-japanese' => 'Japansk',
	'amazonplus-amazon' => 'amazonpris',
	'amazonplus-new' => 'ny',
	'amazonplus-none' => 'Ingen kopiar av dette produktet er for sal.',
	'amazonplus-cp-none' => 'Ingen',
	'amazonplus-more' => 'meir',
	'amazonplus-less' => 'mindre',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'amazonplus-desc' => "Una extension fòrça personalizabla per afichar d'informacions d'Amazon",
	'amazonplus-nores' => 'Error : Cap de resultat es pas estat trobat !',
	'amazonplus-noidres' => 'Error : una ID de produch a pas pugut èsser trobada !',
	'amazonplus-fgcerr' => "Error : las donadas d'Amazon an pas pogut èsser recuperadas",
	'amazonplus-slserr' => "Error : las donadas d'Amazon an pas pogut èsser analisadas",
	'amazonplus-used' => 'utilizat',
	'amazonplus-german' => 'Alemand',
	'amazonplus-french' => 'Francés',
	'amazonplus-japanese' => 'Japonés',
	'amazonplus-amazon' => "Prètz d'Amazon",
	'amazonplus-new' => 'novèl',
	'amazonplus-none' => "Cap de còpia d'aqueste article es pas disponible per crompar",
	'amazonplus-cp-none' => 'Cap',
	'amazonplus-more' => 'mai',
	'amazonplus-less' => 'mens',
);

/** Polish (Polski)
 * @author Leinad
 */
$messages['pl'] = array(
	'amazonplus-desc' => 'Wysoce konfigurowalne rozszerzenie do wyświetlania informacji Amazon',
	'amazonplus-nores' => 'Błąd: Nie znaleziono żadnych wyników wyszukiwania!',
	'amazonplus-noidres' => 'Błąd: Nie można znaleźć identyfikator produktu!',
	'amazonplus-fgcerr' => 'Błąd: Nie można pobierać danych z Amazon!',
	'amazonplus-slserr' => 'Błąd: Nie można przeanalizować danych z Amazon!',
	'amazonplus-used' => 'używany',
	'amazonplus-german' => 'Niemiecki',
	'amazonplus-french' => 'Francuski',
	'amazonplus-japanese' => 'Japoński',
	'amazonplus-amazon' => 'cena na Amazon',
	'amazonplus-new' => 'nowy',
	'amazonplus-none' => 'Brak dodatkowych kopii tego przedmiotu na sprzedaż.',
	'amazonplus-cp-none' => 'Brak',
	'amazonplus-more' => 'więcej',
	'amazonplus-less' => 'mniej',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'amazonplus-used' => 'کارېدلی',
	'amazonplus-german' => 'آلماني',
	'amazonplus-french' => 'فرانسوي',
	'amazonplus-japanese' => 'جاپاني',
	'amazonplus-amazon' => 'د آمېزون بيه',
	'amazonplus-new' => 'نوی',
	'amazonplus-cp-none' => 'هېڅ',
);

/** Portuguese (Português)
 * @author Malafaya
 */
$messages['pt'] = array(
	'amazonplus-desc' => 'Uma extensão altamente personalizável para apresentar informação da Amazon',
	'amazonplus-nores' => 'Erro: Nenhum resultado encontrado!',
	'amazonplus-noidres' => 'Erro: Não foi encontrado um ID de produto!',
	'amazonplus-fgcerr' => 'Erro: Não foi possível retornar dados da Amazon!',
	'amazonplus-slserr' => 'Erro: Não foi possível interpretar dados da Amazon!',
	'amazonplus-used' => 'usado',
	'amazonplus-german' => 'Alemão',
	'amazonplus-french' => 'Francês',
	'amazonplus-japanese' => 'Japonês',
	'amazonplus-amazon' => 'preço Amazon',
	'amazonplus-new' => 'novo',
	'amazonplus-none' => 'Nenhuma cópia deste item está disponível para venda.',
	'amazonplus-cp-none' => 'Nenhum',
	'amazonplus-more' => 'mais',
	'amazonplus-less' => 'menos',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'amazonplus-desc' => 'Uma extensão altamente personalizável para apresentar informações da Amazon',
	'amazonplus-nores' => 'Erro: Nenhum resultado encontrado!',
	'amazonplus-noidres' => 'Erro: Não foi encontrado um ID de produto!',
	'amazonplus-fgcerr' => 'Erro: Não foi possível retornar dados da Amazon!',
	'amazonplus-slserr' => 'Erro: Não foi possível interpretar dados da Amazon!',
	'amazonplus-used' => 'usado',
	'amazonplus-german' => 'Alemão',
	'amazonplus-french' => 'Francês',
	'amazonplus-japanese' => 'Japonês',
	'amazonplus-amazon' => 'preço Amazon',
	'amazonplus-new' => 'novo',
	'amazonplus-none' => 'Nenhuma cópia deste item está disponível para venda.',
	'amazonplus-cp-none' => 'Nenhum',
	'amazonplus-more' => 'mais',
	'amazonplus-less' => 'menos',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 * @author Silviubogan
 */
$messages['ro'] = array(
	'amazonplus-nores' => 'Eroare: Nici un rezultat găsit!',
	'amazonplus-used' => 'folosit',
	'amazonplus-german' => 'germană',
	'amazonplus-french' => 'franceză',
	'amazonplus-japanese' => 'japoneză',
	'amazonplus-amazon' => 'preţul amazon',
	'amazonplus-new' => 'nou',
	'amazonplus-cp-none' => 'Nimic',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'amazonplus-desc' => "'N'estenziona assaije personalizzabbile de le 'mbormaziune de Amazon",
	'amazonplus-nores' => 'Errore:Nisciune resultete acchijete',
	'amazonplus-noidres' => "Errore: Non ge riesche ad acchià 'u codece d'u prodotte!",
	'amazonplus-fgcerr' => 'Errore: Non ge pozze pigghià le date da Amazon!',
	'amazonplus-slserr' => 'Errore: Non ge pozze verificà le date da Amazon!',
	'amazonplus-used' => 'ausete',
	'amazonplus-german' => 'Tedesche',
	'amazonplus-french' => 'Frangese',
	'amazonplus-japanese' => 'Giapponese',
	'amazonplus-amazon' => 'prizze de amazon',
	'amazonplus-new' => 'nuève',
	'amazonplus-none' => 'Nisciuna copie de ste artichele ha state mise in vendita.',
	'amazonplus-cp-none' => 'Ninde',
	'amazonplus-more' => 'de cchiù',
	'amazonplus-less' => 'de mene',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'amazonplus-desc' => 'Настраиваемое расширение для отображения информации с Amazon',
	'amazonplus-nores' => 'Ошибка. Ничего не найдено!',
	'amazonplus-noidres' => 'Ошибка. Невозможно найти ID продукции!',
	'amazonplus-fgcerr' => 'Ошибка. Невозможно получить данные с Amazon!',
	'amazonplus-slserr' => 'Ошибка. Невозможно разобрать данные с Amazon!',
	'amazonplus-used' => 'используется',
	'amazonplus-german' => 'немецкий',
	'amazonplus-french' => 'французский',
	'amazonplus-japanese' => 'японский',
	'amazonplus-amazon' => 'цена с Amazon',
	'amazonplus-new' => 'новая',
	'amazonplus-none' => 'Не осталось экземпляров этого товара для продажи.',
	'amazonplus-cp-none' => 'Нет',
	'amazonplus-more' => 'больше',
	'amazonplus-less' => 'меньше',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'amazonplus-desc' => 'Amazon саайтыттан ылыллар билиигэ туттуллар уларытыллар тупсарыы',
	'amazonplus-nores' => 'Алҕас: Туох да көстүбэтэ!',
	'amazonplus-noidres' => 'Алҕас: Табаар ID нүөмэрин булар табыллыбата!',
	'amazonplus-fgcerr' => 'Алҕас: Amazon саайтын кытта ситимнэһэр табыллыбата!',
	'amazonplus-slserr' => 'Error: Amazon саайтыттан ылыллыбыт информация кыайан ааҕыллыбата!',
	'amazonplus-used' => 'туттуллар',
	'amazonplus-german' => 'ниэмэс',
	'amazonplus-french' => 'француз',
	'amazonplus-japanese' => 'дьоппуон',
	'amazonplus-amazon' => 'Amazon сыаната',
	'amazonplus-new' => 'саҥа',
	'amazonplus-none' => 'Бу табаар атыыга тахсара бүппүт.',
	'amazonplus-cp-none' => 'Суох',
	'amazonplus-more' => 'өссө',
	'amazonplus-less' => 'аҕыйат',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'amazonplus-desc' => 'Podrobne konfigurovateľné rozšírenie na zobrazovanie informácií z Amazon',
	'amazonplus-nores' => 'Chyba: Neboli nájdené žiadne výsledky!',
	'amazonplus-noidres' => 'Chyba: Nebol nájdený ID produktu!',
	'amazonplus-fgcerr' => 'Chyba: Nepodarilo sa získať údaje z Amazonu!',
	'amazonplus-slserr' => 'Chyba: Nepodarilo sa analyzovať údaje z Amazon!',
	'amazonplus-used' => 'použité',
	'amazonplus-german' => 'nemčina',
	'amazonplus-french' => 'francúzština',
	'amazonplus-japanese' => 'japončina',
	'amazonplus-amazon' => 'cena na Amazon',
	'amazonplus-new' => 'nové',
	'amazonplus-status' => '($1)',
	'amazonplus-none' => 'Nepredávajú sa žiadne kópie tejto položky.',
	'amazonplus-currency' => '$3$1 $2$4',
	'amazonplus-cp-none' => 'Žiadne',
	'amazonplus-cp-usd' => 'USD',
	'amazonplus-cp-cad' => 'CAD',
	'amazonplus-cp-gbp' => 'GBP',
	'amazonplus-cp-eur' => 'EUR',
	'amazonplus-cp-jpy' => 'JPY',
	'amazonplus-more' => 'viac',
	'amazonplus-less' => 'menej',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'amazonplus-desc' => 'Широко подесива екстензија за приказ информација са Амазона',
	'amazonplus-nores' => 'Грешка: Нема нађених резултата!',
	'amazonplus-noidres' => 'Грешка: Није нађен ID производа!',
	'amazonplus-fgcerr' => 'Грешка: Подаци са Амазона су недоступни!',
	'amazonplus-slserr' => 'Грешка: Подаци са Амазона нису могли бити парсирани!',
	'amazonplus-used' => 'половно',
	'amazonplus-german' => 'Немачки језик',
	'amazonplus-french' => 'Француски језик',
	'amazonplus-japanese' => 'Јапански језик',
	'amazonplus-amazon' => 'цена на Амазону',
	'amazonplus-new' => 'ново',
	'amazonplus-none' => 'Нема више расположивих примерака овог поизвода',
	'amazonplus-more' => 'више',
	'amazonplus-less' => 'мање',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'amazonplus-desc' => 'Ne goud appaasboare Ärwiederenge, uum Informatione fon Amazon antouwiesen',
	'amazonplus-nores' => 'Failer: Neen Resultoate fuunen!',
	'amazonplus-noidres' => 'Failer: Produkt-ID kuud nit fuunen wäide!',
	'amazonplus-fgcerr' => 'Failer: Der kuuden neen Doaten fon Amazon hoald wäide.',
	'amazonplus-slserr' => 'Failer: Fon Amazon ämpfangene Doaten kuuden nit feroarbaided wäide!',
	'amazonplus-used' => 'bruukt',
	'amazonplus-german' => 'Düütsk',
	'amazonplus-french' => 'Frantsöösk',
	'amazonplus-japanese' => 'Japanisk',
	'amazonplus-amazon' => 'Pries bie Amazon',
	'amazonplus-new' => 'näi',
	'amazonplus-none' => 'Fon disse Publikation wäide apstuuns neen Kopien ferkooped.',
	'amazonplus-cp-none' => 'Neen',
	'amazonplus-more' => 'moor',
	'amazonplus-less' => 'minner',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'amazonplus-nores' => 'Salah: Nyamos, teu hasil!',
	'amazonplus-noidres' => 'Salah: ID produk teu kapanggih!',
	'amazonplus-fgcerr' => 'Salah: Teu bisa mulut data ti Amazon!',
	'amazonplus-used' => 'tilas',
	'amazonplus-german' => 'Basa Jérman',
	'amazonplus-french' => 'Basa Prancis',
	'amazonplus-japanese' => 'Basa Jepang',
	'amazonplus-amazon' => 'harga amazon',
	'amazonplus-new' => 'anyar',
);

/** Swedish (Svenska)
 * @author Gabbe.g
 */
$messages['sv'] = array(
	'amazonplus-desc' => 'En utvidgning men stora anpassningsmöjligheter för att visa Amazon-information',
	'amazonplus-nores' => 'Fel: Inga resultat hittades!',
	'amazonplus-noidres' => 'Fel: Kunde inte hitta ett produkt-ID!',
	'amazonplus-fgcerr' => 'Fel: Kunde inte hämta data från Amazon!',
	'amazonplus-slserr' => 'Fel: Kunde inte analysera data från Amazon!',
	'amazonplus-used' => 'använd',
	'amazonplus-german' => 'Tysk',
	'amazonplus-french' => 'Fransk',
	'amazonplus-japanese' => 'Japansk',
	'amazonplus-amazon' => 'amazonpris',
	'amazonplus-new' => 'ny',
	'amazonplus-none' => 'Inga kopior av denna produkt är till försäljning.',
	'amazonplus-cp-none' => 'Ingen',
	'amazonplus-more' => 'mer',
	'amazonplus-less' => 'mindre',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'amazonplus-nores' => 'పొరపాటు: ఫలితాలేమీ లేవు!',
	'amazonplus-noidres' => 'పొరపాటు: ఉత్పాదన ID కనబడలేదు!',
	'amazonplus-fgcerr' => 'పొరపాటు: అమెజాన్ నుండి భోగట్టాని తేలేకపోయాం!',
	'amazonplus-slserr' => 'పొరపాటు: అమెజాన్ నుండి వచ్చిన భోగట్టాని చదవలేకపోయాం!',
	'amazonplus-used' => 'వాడినది',
	'amazonplus-german' => 'జర్మను',
	'amazonplus-french' => 'ఫ్రెంచి',
	'amazonplus-japanese' => 'జపనీస్',
	'amazonplus-amazon' => 'అమెజాన్ ధర',
	'amazonplus-none' => 'దీని యొక్క కాపీలేమీ అమ్మకానికి లేవు.',
	'amazonplus-more' => 'మరిన్ని',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'amazonplus-more' => 'barak liu',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'amazonplus-desc' => 'Isang napaka maipapasadyang karugtong upang maipakita ang kabatirang nasa Amazon',
	'amazonplus-nores' => 'Kamalian: Walang natagpuang resulta!',
	'amazonplus-noidres' => 'Kamalian: Hindi matagpuan ang ID ng isang produkto!',
	'amazonplus-fgcerr' => 'Kamalian: Hindi makuha ang dato mula sa Amazon!',
	'amazonplus-slserr' => 'Kamalian: Hindi mabanghay ang dato mula sa Amazon!',
	'amazonplus-used' => 'nagamit na',
	'amazonplus-german' => 'Aleman',
	'amazonplus-french' => 'Pranses',
	'amazonplus-japanese' => 'Hapones',
	'amazonplus-amazon' => 'halaga sa amazon',
	'amazonplus-new' => 'bago',
	'amazonplus-none' => 'Walang ipinagbibiling mga sipi ng bagay na ito.',
	'amazonplus-cp-none' => 'Wala',
	'amazonplus-more' => 'mas marami',
	'amazonplus-less' => 'mas kaunti',
);

/** Turkish (Türkçe)
 * @author Joseph
 */
$messages['tr'] = array(
	'amazonplus-desc' => 'Amazon bilgisini göstermek için bir hayli özelleştirilebilir eklenti',
	'amazonplus-nores' => 'Hata: Hiçbir sonuç bulunamadı!',
	'amazonplus-noidres' => "Hata: Ürün ID'si bulunamadı!",
	'amazonplus-fgcerr' => 'Hata: Amazondan veri alınamadı!',
	'amazonplus-slserr' => 'Hata: Amazondan veri çözümlenemedi!',
	'amazonplus-used' => 'kullanılmış',
	'amazonplus-german' => 'Almanca',
	'amazonplus-french' => 'Fransızca',
	'amazonplus-japanese' => 'Japonca',
	'amazonplus-amazon' => 'amazon fiyatı',
	'amazonplus-new' => 'yeni',
	'amazonplus-status' => '($1)',
	'amazonplus-none' => 'Bu ürünün hiçbir kopyası satılık değil.',
	'amazonplus-currency' => '$1$3 $2$4',
	'amazonplus-cp-none' => 'Hiç',
	'amazonplus-cp-usd' => 'Amerikan Doları',
	'amazonplus-cp-cad' => 'Kanada Doları',
	'amazonplus-cp-gbp' => 'İngiliz Poundu',
	'amazonplus-cp-eur' => 'Euro',
	'amazonplus-cp-jpy' => 'Japon Yeni',
	'amazonplus-more' => 'daha fazla',
	'amazonplus-less' => 'daha az',
);

/** Vietnamese (Tiếng Việt)
 * @author Wrightbus
 */
$messages['vi'] = array(
	'amazonplus-german' => 'Tiếng Đức',
	'amazonplus-french' => 'Tiếng Pháp',
	'amazonplus-japanese' => 'Tiếng Nhật',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Wrightbus
 */
$messages['zh-hans'] = array(
	'amazonplus-german' => '德语',
	'amazonplus-french' => '法语',
	'amazonplus-japanese' => '日语',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'amazonplus-desc' => '輸出Amazon網站資訊的高自定性擴展',
	'amazonplus-nores' => '錯誤：找不到任何資料！',
	'amazonplus-noidres' => '錯誤：找不到產品代碼',
	'amazonplus-fgcerr' => '錯誤：無法從Amazon接收資料！',
	'amazonplus-slserr' => '錯誤：無法處理來自Amazon的資料！',
	'amazonplus-used' => '二手',
	'amazonplus-german' => '德語',
	'amazonplus-french' => '法語',
	'amazonplus-japanese' => '日語',
	'amazonplus-amazon' => 'Amazon價格',
	'amazonplus-new' => '全新',
	'amazonplus-none' => '本產品目前無貨可銷售',
	'amazonplus-cp-none' => '無',
	'amazonplus-more' => '更多',
	'amazonplus-less' => '最少',
);

/** Chinese (Hong Kong) (‪中文(香港)‬)
 * @author Wrightbus
 */
$messages['zh-hk'] = array(
	'amazonplus-german' => '德語',
	'amazonplus-french' => '法語',
	'amazonplus-japanese' => '日語',
);

/** Chinese (Taiwan) (‪中文(台灣)‬)
 * @author Wrightbus
 */
$messages['zh-tw'] = array(
	'amazonplus-german' => '德語',
	'amazonplus-french' => '法語',
	'amazonplus-japanese' => '日語',
);

