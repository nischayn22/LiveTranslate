<?php

/**
 * Internationalization file for the Live Translate extension.
 *
 * @file LiveTranslate.i18n.php
 * @ingroup LiveTranslate
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'livetranslate-desc' => 'Enables live translation of page content using the Google Translate service',

	// Translation interface
	'livetranslate-translate-to' => 'Translate this page to',
	'livetranslate-button-translate' => 'Translate',
	'livetranslate-button-translating' => 'Translating...',
	'livetranslate-button-revert' => 'Show original',
	'livetranslate-dictionary-error' => 'Could not obtain the live translate dictionary. No words will be treated as special during the translation process.',
	
	// Special words dictionary
	'livetranslate-dictionary-empty' => 'There are no words in the dictionary yet. Click the "edit" tab to add some.',
	'livetranslate-dictionary-count' => 'There {{PLURAL:$1|is $1 word|are $1 words}} in $2 {{PLURAL:$2|language|languages}}. Click the "edit" tab to add more.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|This language is|These languages are}} not currently set as allowed translation target: $1. Modify the allowed languages in your wikis configuration, or remove these from the dictionary.'
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'livetranslate-desc' => 'Дазваляе пераклады тэкстаў старонак на ляту ў Google Translate',
	'livetranslate-translate-to' => 'Перакласьці гэту старонку на',
	'livetranslate-button-translate' => 'Перакласьці',
	'livetranslate-button-translating' => 'Ідзе пераклад…',
	'livetranslate-button-revert' => 'Паказаць арыгінал',
	'livetranslate-dictionary-error' => 'Немагчыма атрымаць слоўнік перакладу на ляту. Няма словаў, якая будуць разглядацца як спэцыяльныя, падчас працэсу перакладу.',
	'livetranslate-dictionary-empty' => 'Пакуль што няма словаў у слоўніку. Націсьніце кнопку «рэдагаваць» каб дадаць.',
	'livetranslate-dictionary-count' => 'Ёсьць $1 {{PLURAL:$1|слова|словы|словаў}} у $2 {{PLURAL:$2|мове|мовах|мовах}}. Націсьніце кнопку «рэдагаваць» каб дадаць болей.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Гэтая мова не дазволеная|Гэтыя мовы не дазволеныя}} у цяперашні момант як мэтавыя для перакладу: $1. Зьмяніце дазволеныя мовы ў Вашых наладах {{GRAMMAR:родны|{{SITENAME}}}}, ці выдаліце са слоўніка.',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'livetranslate-button-translate' => 'Превеждане',
	'livetranslate-button-translating' => 'Превеждане...',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'livetranslate-desc' => 'Aotren a ra treiñ danvez ur bajenn war-eeun en ur ober gant servij treiñ Google',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'livetranslate-desc' => 'Omogućuje prevođenje uživo sadržaja stranice koristeći uslugu Google Translate',
	'livetranslate-translate-to' => 'Prevedi ovu stranicu na',
	'livetranslate-button-translate' => 'Prevedi',
	'livetranslate-button-translating' => 'Prevodim...',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'livetranslate-desc' => 'Ermöglicht die unmittelbare Übersetzung des Seiteninhalts mit „Google Übersetzer“',
	'livetranslate-translate-to' => 'Diese Seite in folgende Sprache übersetzen:',
	'livetranslate-button-translate' => 'Übersetze',
	'livetranslate-button-translating' => 'Übersetze …',
	'livetranslate-button-revert' => 'Originalinhalt anzeigen',
	'livetranslate-dictionary-error' => 'Das Wörterbuch konnte nicht geladen werden. Daher werden die in ihm enthaltenen Wörter nicht während des Übersetzungsvorgangs berücksichtigt.',
	'livetranslate-dictionary-empty' => 'Momentan befinden sich keine Vokabeln im Wörterbuch. Auf „Bearbeiten“ klicken, um welche hinzuzufügen.',
	'livetranslate-dictionary-count' => 'Momentan {{PLURAL:$1|befindet sich $1 Wort|befinden sich $1 Wörter}} in $2 {{PLURAL:$2|Sprache|Sprachen}} im Wörterbuch. Auf „Bearbeiten“ klicken, um weitere hinzuzufügen.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Diese Sprache ist|Diese Sprachen sind}} momentan nicht zum Übersetzen zugelassen: $1. Entweder nun die Einstellung der übersetzbaren Sprachen in der Wikikonfiguration anpassen oder diese aus dem Wörterbuch entfernen.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'livetranslate-desc' => 'Zmóžnja direktne pśełožowanje wopśimjeśa boka z pomocu słužby "Google Translate"',
	'livetranslate-translate-to' => 'Pśełož toś ten boko do',
	'livetranslate-button-translate' => 'Pśełožyś',
	'livetranslate-button-translating' => 'Pśełožujo se...',
	'livetranslate-button-revert' => 'Original pokazaś',
	'livetranslate-dictionary-error' => 'Słownik za Live Translate njedajo se zacytaś. Jogo słowa njezapśimuju se za pśełožowański proces.',
	'livetranslate-dictionary-empty' => 'Hyšći njejsu žedne słowa w słowniku. Klikni na rejtark "wobźěłaś", aby někotare dodał.',
	'livetranslate-dictionary-count' => '{{PLURAL:$1|Jo $1 słowo|Stej $1 słowje|Su $1 słowa|Jo $1 słowow}} w $2 {{PLURAL:$2|rěcy|rěcoma|rěcach|rěcach}}. Klikni na rejterk "wobźěłaś", aby dalšne dodał.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Toś ta rěc njejo|Toś tej rěcy njejstej|Toś te rěcy njejsu|Toś te rěcy njejsu}} tuchylu ako dowólony pśełožowański cel {{PLURAL:$2|nastajona|nastajonej|nastajone|nastajone}}: $1. Změń dowólone rěcy w konfiguraciji twójogo wikija abo wótpóraj te ze słownika.',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'livetranslate-button-translate' => 'Itzuli',
	'livetranslate-button-translating' => 'Itzultzen...',
	'livetranslate-button-revert' => 'Jatorrizkoa erakutsi',
);

/** French (Français)
 * @author Crochet.david
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'livetranslate-desc' => 'Permet la traduction immédiate du contenu de la page en utilisant le service de traduction de Google',
	'livetranslate-translate-to' => 'Traduire cette page en',
	'livetranslate-button-translate' => 'Traduire',
	'livetranslate-button-translating' => 'Traduction en cours...',
	'livetranslate-button-revert' => 'Afficher l’original',
	'livetranslate-dictionary-error' => "Impossible d'obtenir la traduction immédiate du dictionnaire. Aucun mot ne recevra de traitement spécial pendant le processus de traduction.",
	'livetranslate-dictionary-empty' => "Il n'y a aucun mot dans le dictionnaire encore. Cliquez sur l'onglet « Modifier » pour en ajouter.",
	'livetranslate-dictionary-count' => "Il y a $1 {{PLURAL:$1|mot|mots}} dans {{PLURAL:$2|une langue|$2 langues}}. Cliquez sur l'onglet « Modifier » pour en ajouter.",
	'livetranslate-dictionary-unallowed-langs' => "{{PLURAL:$2|Cette langue n'est|Ces langues ne sont}} pas sélectionnées comme {{PLURAL:$2|langue cible|langues cibles}} : $1. Modifiez les langues autorisées dans votre configuration de wiki ou supprimez-les du dictionnaire.",
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'livetranslate-desc' => 'Activa a tradución en vivo do contido dunha páxina mediante o servizo de tradución do Google',
	'livetranslate-translate-to' => 'Traducir esta páxina ao',
	'livetranslate-button-translate' => 'Traducir',
	'livetranslate-button-translating' => 'Traducindo...',
	'livetranslate-button-revert' => 'Mostrar o orixinal',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'livetranslate-desc' => 'Macht di diräkt Ibersetzig vum Syteninhalt megli mit „Google Ibersetzer“',
	'livetranslate-translate-to' => 'Die Syte ibersetze in',
	'livetranslate-button-translate' => 'Ibersetze',
	'livetranslate-button-translating' => 'Am Ibersetze …',
	'livetranslate-button-revert' => 'Originalinhalt aazeige',
	'livetranslate-dictionary-empty' => 'Zurzyt het s kei Vokable im Werterbuech. Uf „Bearbeite“ klicke go ne baar yyfiege.',
	'livetranslate-dictionary-count' => 'Zurzyt {{PLURAL:$1|git s $1 Wort|git s $1 Werter}} in $2 {{PLURAL:$2|Sproch|Sproche}} im Werterbuech. Uf „Bearbeite“ klicke go wyteri yyfiege.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Die Sproch isch|Die Sproche sin}} zurzyt nit zum Ibersetze zuegloo: $1. Entwäder jetz d Yystellig vu dr ibersetzbare Sproche in dr Wikikonfiguration aapasse oder die us em Werterbuech uuseneh.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'livetranslate-desc' => 'Zmóžnja hnydomne přełožowanje wobsaha strony z pomocu słužby "Google Translate"',
	'livetranslate-translate-to' => 'Přełož tutu stronu do',
	'livetranslate-button-translate' => 'Přełožić',
	'livetranslate-button-translating' => 'Přełožuje so...',
	'livetranslate-button-revert' => 'Original pokazać',
	'livetranslate-dictionary-error' => 'Słownik za Live Translate njeda so začitać. Jeho słowa so za přełožowanski proces njewobkedźbuja.',
	'livetranslate-dictionary-empty' => 'Hišće žane słowa w słowniku njejsu. Klikń na rajtark "wobdźěłać", zo by někotre přidał.',
	'livetranslate-dictionary-count' => '{{PLURAL:$1|Je $1 słowo|Stej $1 słowje|Su $1 słowa|Je $1 słowow}} w $2 {{PLURAL:$2|rěči|rěčomaj|rěčach|rěčach}}. Klikń na rajtark $wobdźěłać", zo by dalše přidał.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Tuta rěč njeje |Tutej rěči njejstej|Tute rěče njejsu|Tute rěče njejsu}} tuchwilu jako dowoleny přełožowanski cil {{PLURAL:$2|nastajena|nastajenej|nastajene|nastajene}}: $1. Změń dowolene rěče w konfiguraciji twojeho wikija abo wotstroń je ze słownika.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'livetranslate-desc' => 'Permitte le traduction in directo de contento de paginas usante le servicio Google Translate',
	'livetranslate-translate-to' => 'Traducer iste pagina in',
	'livetranslate-button-translate' => 'Traducer',
	'livetranslate-button-translating' => 'Traduction in curso...',
	'livetranslate-button-revert' => 'Monstrar original',
	'livetranslate-dictionary-error' => 'Non poteva obtener le dictionario de traduction in directo. Nulle parola essera tractate como special durante le processo de traduction.',
	'livetranslate-dictionary-empty' => 'Le dictionario non ha ancora parolas. Clicca sur le scheda "modificar" pro adder alcunes.',
	'livetranslate-dictionary-count' => 'Il ha {{PLURAL:$1|$1 parola|$1 parolas}} in $2 {{PLURAL:$2|linguas|linguas}}. Clicca sur le scheda "modificar" pro adder alteres.',
	'livetranslate-dictionary-unallowed-langs' => 'Iste {{PLURAL:$2|lingua|linguas}} non es actualmente definite como destinationes valide pro traduction: $1. Modifica le linguas permittite in le configuration de tu wiki, o remove istes del dictionario.',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'livetranslate-desc' => 'Memungkinkan penerjemahan langsung konten halaman dengan menggunakan layanan Google Terjemahan',
	'livetranslate-translate-to' => 'Terjemahkan halaman ini ke',
	'livetranslate-button-translate' => 'Terjemahkan',
	'livetranslate-button-translating' => 'Menerjemahkan ...',
	'livetranslate-button-revert' => 'Tampilkan yang asli',
	'livetranslate-dictionary-error' => 'Tidak dapat memperoleh kamus penerjemahan langsung. Tidak ada kata yang diperlakukan secara khusus selama proses penerjemahan.',
	'livetranslate-dictionary-empty' => 'Belum tersedia kata dalam kamus. Klik tab "sunting" untuk menambahkan.',
	'livetranslate-dictionary-count' => 'Ada {{PLURAL:$1|$1 kata|$1 kata}} dalam $2 {{PLURAL:$2|bahasa|bahasa}}. Klik tab "sunting" untuk menambakan.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Bahasa ini|Bahasa-bahasa ini}} disetel sebagai target terjemahan: $1. Ubah bahasa yang diizinkan dalam konfigurasi wiki, atau hapus dari kamus.',
);

/** Italian (Italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'livetranslate-button-translate' => 'Traduci',
	'livetranslate-button-translating' => 'Traduzione in corso...',
);

/** Japanese (日本語)
 * @author Ohgi
 */
$messages['ja'] = array(
	'livetranslate-translate-to' => 'このページを翻訳',
	'livetranslate-button-translate' => '翻訳',
	'livetranslate-button-translating' => '翻訳中...',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'livetranslate-desc' => 'Erméiglecht d\'live Iwwersetzen vu Säiteninhalt mam Service "Google Translate"',
	'livetranslate-translate-to' => 'Iwwersetzt dës Säit op',
	'livetranslate-button-translate' => 'Iwwersetzen',
	'livetranslate-button-translating' => 'Iwwersetzen...',
	'livetranslate-button-revert' => "D'Original weisen",
	'livetranslate-dictionary-error' => 'De Live-Iwwersetzungs-Dictionnaire gouf net fonnt. Keng Wierder gi bei der Iwwersetzung als spezial ugekuckt.',
	'livetranslate-dictionary-empty' => 'Et gëtt nach keng Wierder am Dictionnaire. Klickt op den "Änneren"-Tab fir der derbäizesetzen.',
	'livetranslate-dictionary-count' => 'Et gëtt {{PLURAL:$1|ee Wuert|$1 Wierder}} a(n) {{PLURAL:$2|enger Sprooch|$2 Sproochen}}. Klickt den "Änneren"-Tab fir der derbäizesetzen.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'livetranslate-desc' => 'Овозможува преведување на содржината на една страница во живо, користејќи Google Translate',
	'livetranslate-translate-to' => 'Преведи ја страницава на',
	'livetranslate-button-translate' => 'Преведи',
	'livetranslate-button-translating' => 'Преведувам...',
	'livetranslate-button-revert' => 'Прикажи изворно',
	'livetranslate-dictionary-error' => 'Не можев да го добијам речникот за преведување во живо. Ниеден збор нема да се смета за посебен во текот на преводната постапка.',
	'livetranslate-dictionary-empty' => 'Сè уште нема зборови во речникот. Стиснете на јазичето „уреди“ и додајте некои.',
	'livetranslate-dictionary-count' => 'Има {{PLURAL:$1|$1 збор|$1 збора}} на $2 {{PLURAL:$2|јазик|јазици}}. Ситиснете на јазичето „уреди“ за да додадете уште.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Овој јазик моментално не е зададен|Овие јазици моментално не се зададени}} како допуштена преводна одредница: $1. Изменете ги допуштените јазици во вики-поставките, или пак отстранете ги постоечкиве од речникот.',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'livetranslate-desc' => 'Maakt het mogelijk paginainhoud live te vertalen met behulp van de dienst Google Translate',
	'livetranslate-translate-to' => 'Pagina vertalen in het',
	'livetranslate-button-translate' => 'Vertalen',
	'livetranslate-button-translating' => 'Bezig met vertalen...',
	'livetranslate-button-revert' => 'Origineel weergeven',
	'livetranslate-dictionary-error' => 'Het was niet mogelijk het woordenboek voor livevertaling op te halen. Er zijn geen woorden die een speciale behandeling krijgen tijdens het vertaalproces.',
	'livetranslate-dictionary-empty' => 'Er zijn nog geen woorden in het woordenboek. Klik op de tab "bewerken" om woorden toe te voegen.',
	'livetranslate-dictionary-count' => 'Er {{PLURAL:$1|is één woord|zijn $1 woorden}} in $2 {{PLURAL:$2|taal|talen}}. Klik op de tab "bewerken" om meer woorden toe te voegen.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Deze taal is|Deze taken zijn}} niet ingesteld als toegestane doeltaal: $1. Wijzig te toegestane talen in de instellingen van uw wiki of verwijder ze uit het woordenboek.',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'livetranslate-desc' => 'Aktiverer live-oversettelse av sideinnhold ved hjelp av tjenesten Google Translate',
	'livetranslate-translate-to' => 'Oversett denne siden til',
	'livetranslate-button-translate' => 'Oversett',
	'livetranslate-button-translating' => 'Oversetter...',
	'livetranslate-button-revert' => 'Vis opprinnelig',
	'livetranslate-dictionary-error' => 'Kunne ikke få tak i sanntidsoversettelsesordlisten. Ingen ord vil bli behandlet som spesielle under oversettelsesprosessen.',
	'livetranslate-dictionary-empty' => 'Det er ingen ord i ordlisten ennå. Klikk på «rediger»-fanen for å legge til noen.',
	'livetranslate-dictionary-count' => 'Det er {{PLURAL:$1|ett ord|$1 ord}} i $2 {{PLURAL:$2|språk|språk}}. Klikk på «rediger»-fanen for å legge til flere.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Dette språket|Disse språkene}} er for øyeblikket ikke satt som tillatte oversettelsesmål: $1. Endre tillatte språk i din wikis konfigurasjon eller fjern disse fra ordlisten.',
);

/** Polish (Polski)
 * @author Byulent
 */
$messages['pl'] = array(
	'livetranslate-translate-to' => 'Przetłumacz tę stronę na',
	'livetranslate-button-translate' => 'Tłumacz',
	'livetranslate-button-translating' => 'Tłumaczenie...',
	'livetranslate-button-revert' => 'Pokaż w oryginale',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'livetranslate-desc' => 'A abìlita viragi dal viv ëd contnù ëd pàgine an dovrand ël sërvissi Google Translate',
	'livetranslate-translate-to' => 'Vòlta sta pàgina an',
	'livetranslate-button-translate' => 'Traduv',
	'livetranslate-button-translating' => 'Volté...',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'livetranslate-desc' => 'Permite a tradução imediata do conteúdo das páginas usando o serviço Google Translate',
	'livetranslate-translate-to' => 'Traduzir esta página para',
	'livetranslate-button-translate' => 'Traduzir',
	'livetranslate-button-translating' => 'A traduzir...',
	'livetranslate-button-revert' => 'Mostrar original',
	'livetranslate-dictionary-error' => 'Não foi possível obter o dicionário de tradução imediata. Durante o processo de tradução, nenhuma palavra será considerada especial.',
	'livetranslate-dictionary-empty' => 'Ainda não existem palavras no dicionário. Clique o separador "editar" para adicionar algumas.',
	'livetranslate-dictionary-count' => '{{PLURAL:$1|Existe $1 palavra|Existem $1 palavras}} de $2 {{PLURAL:$2|língua|línguas}}. Clique o separador "editar" para acrescentar mais.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Esta língua não está definida como destino válido|Estas línguas não estão definidas como destinos válidos}} para tradução: $1. Altere na configuração da wiki as línguas permitidas, ou remova estas do dicionário.',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'livetranslate-desc' => 'Permite a tradução imediata do conteúdo das páginas usando o serviço Google Translate',
	'livetranslate-translate-to' => 'Traduzir esta página para',
	'livetranslate-button-translate' => 'Traduzir',
	'livetranslate-button-translating' => 'Traduzindo...',
);

/** Russian (Русский)
 * @author Byulent
 * @author MaxSem
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'livetranslate-desc' => 'Включает перевод текста страницы на лету с помощью службы переводов Google',
	'livetranslate-translate-to' => 'Перевести эту страницу на',
	'livetranslate-button-translate' => 'Перевести',
	'livetranslate-button-translating' => 'Выполняется перевод...',
	'livetranslate-button-revert' => 'Показать оригинал',
	'livetranslate-dictionary-error' => 'Не удалось получить словарь живого перевода. Нет слов, которые будут рассматриваться как специальные во время процесса перевода.',
	'livetranslate-dictionary-empty' => 'В словаре ещё нет слов. Нажмите «править», чтобы добавить несколько.',
	'livetranslate-dictionary-count' => '$1 {{PLURAL:$1|слово|слова|слов}} на $2 {{PLURAL:$2|языке|языках|языках}}. Нажмите «править», чтобы добавить ещё.',
	'livetranslate-dictionary-unallowed-langs' => '{{PLURAL:$2|Этот язык|Эти языки}} не разрешено использовать в качестве цели перевода: $1. Измените разрешения в настройках вашей вики, или удалите их из словаря.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'livetranslate-translate-to' => 'ఈ పుటని అనువదించండి',
	'livetranslate-button-translate' => 'అనువదించు',
	'livetranslate-button-translating' => 'అనువదిస్తున్నాం...',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'livetranslate-desc' => 'Робить можливим безпосередній переклад вмісту сторінки за допомогою служби Google Translate',
	'livetranslate-translate-to' => 'Перекласти цю сторінку',
	'livetranslate-button-translate' => 'Перекласти',
	'livetranslate-button-translating' => 'Перекладаю...',
);

