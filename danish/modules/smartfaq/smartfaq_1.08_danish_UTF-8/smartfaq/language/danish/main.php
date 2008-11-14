<?php

/**
* $Id: main.php,v 1.20 2005/08/15 16:52:05 fx2024 Exp $
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
 
define('_MD_SF_ACTION', 'Handling');
define('_MD_SF_ALL', 'Alle');
define('_MD_SF_ADMIN_PAGE', ':: Administrativ Sektion ::');
define('_MD_SF_ALLOWCOMMENTS', 'Tillad kommentarer?');
define('_MD_SF_ANSWERED', 'Besvaret');
define('_MD_SF_ANSWERQUESTION', '[Send et svar!]');
define('_MD_SF_ANSWER_FAQ', 'Svar');
define('_MD_SF_ANSWER_FAQ_DSC', 'Detaljeret svar på ovennævnte spørgsmål.');
define('_MD_SF_APPROVE', 'Godkend');
define('_MD_SF_ARTBODY', 'Detaljeret svar ');
define('_MD_SF_ARTICLES', ' FAQ.');
define('_MD_SF_BACK2CAT', 'Retur til kategori');
define('_MD_SF_CATEGORY_SUMMARY', 'Kategori resumé');
define('_MD_SF_CATEGORY_SUMMARY_INFO', 'Her er information relateret til denne kategori.');
define('_MD_SF_CATEGORY_EDIT', 'Rediger kategori');
define('_MD_SF_CANCEL', 'Annuller');
define('_MD_SF_CLEAR', 'Ryd');
define('_MD_SF_COMMENTS', 'Kommentar ');
define('_MD_SF_CONTEXTMODULELINK', 'Indholdsbestemte knyttet til dette modul');
define('_MD_SF_CONTEXTMODULELINK_FAQ', 'Indholdsbestemte knyttet til dette modul');
define('_MD_SF_CONTEXTMODULELINK_FAQ_DSC', 'Vælg det modul, som denne FAQ vil være knyttet til. Hvis Kontekstuel FAQ-blokken er synlig på det modul, \'Hvordan gør jeg \' vil denne FAQ blive vist.');
define('_MD_SF_CONTEXTPAGE', 'Indholdsbestemte knyttet til denne URL');
define('_MD_SF_CONTEXTPAGEDEF', 'Indholdsbestemt side');
define('_MD_SF_CONTEXTPAGEDEF_DSC', 'Side som denne FAQ giver forklaring på<b> Eksempel: </ b> modules/newbb');
define('_MD_SF_CREATE', 'Indsend FAQ');
define('_MD_SF_CATEGORY', 'Kategori');
define('_MD_SF_CATEGORY_FAQ', 'Kategori');
define('_MD_SF_CATEGORY_FAQ_DSC', 'Vælg en kategori for denne FAQ');
define('_MD_SF_CATEGORY_QUESTION', 'Kategori');
define('_MD_SF_CATEGORY_QUESTION_DSC', 'Vælg en kategori for dette spørgsmål');
define('_MD_SF_DATE', 'Dato');
define('_MD_SF_DATESUB', 'Udgivet den');
define('_MD_SF_DESCRIPTION', 'Beskrivelse ');
define('_MD_SF_DELETE', 'Slet FAQ');
define('_MD_SF_DIDUNO', 'Vidste du?');
define('_MD_SF_DIDUNO_FAQ', 'Vidste du?');
define('_MD_SF_DIDUNO_FAQ_DSC', 'Dette vil blive brugt i Vidste du blokken.');
define('_MD_SF_DOHTML', 'Aktiver HTML-tags');
define('_MD_SF_DOSMILEY', 'Aktiver smiley-ikoner');
define('_MD_SF_DOXCODE', 'Aktiver XOOPS koder');
define('_MD_SF_EDIT', 'Redigér FAQ');
define('_MD_SF_ERROR_ANSWER_NOT_SAVED', 'Der opstod en fejl. Svaret blev ikke gemt i databasen.');
define('_MD_SF_ERROR_FAQ_NOT_SAVED', 'Der opstod en fejl. FAQ blev ikke gemt i databasen.');
define('_MD_SF_ERRORSAVINGDB', 'FEJL: Databasen er ikke blevet ajourført på grund af en fejl!');
define('_MD_SF_EXACTURL', 'Præcis URL?');
define('_MD_SF_EXACTURL_DSC', 'Hvis sat til \'Ja\', FAQ vil kun vises i \'Særlige URL sæt ovenstående\'. Hvis sat til \'Nej\'Ingen FAQ vil blive vist på de sider, der matcher en del af roden af den særlige URL. F.eks. modules/newbb');
define('_MD_SF_FAQ_NEW_ANSWER_NEED_APPROBATION', 'Dit svar blev indsendt og vil blive behandlet af en moderator.');
define('_MD_SF_FAQ_NEW_ANSWER_PUBLISHED', 'Dit svar blev indsendt og vil automatisk blive offentliggjort i FAQ sektionen, som en erstatning for det oprindelige svar.');
define('_MD_SF_FAQCOMEFROM', 'Denne FAQ blev fundet på');
define('_MD_SF_FINDFAQHERE', 'Find denne FAQ her:');
define('_MD_SF_GOODDAY', 'Goddag,');
define('_MD_SF_HITS', 'Hits');
define('_MD_SF_HITSDETAIL', 'Denne FAQ er blevet læst');
define('_MD_SF_HOME', 'Hjem');
define('_MD_SF_HOWDOI', 'Hvordan gør jeg...');
define('_MD_SF_HOWDOI_FAQ', 'Hvordan gør jeg...');
define('_MD_SF_HOWDOI_FAQ_DSC', 'Dette vil blive brugt i Kontekstuel FAQ-blokken. Det bør være en kort version af spørgsmålet.');
define('_MD_SF_INDEX_CATEGORIES_SUMMARY', 'Kategori resumé');
define('_MD_SF_INDEX_CATEGORIES_SUMMARY_INFO', 'Her er en liste over de øverste kategorier og deres under-kategorier. Vælg en kategori for at se dens FAQ.');
define('_MD_SF_INDEX_CATEGORIES_QUESTIONS_SUMMARY_INFO', 'Her er en liste over de øverste kategorier og deres under-kategorier. Vælg en kategori for at se de åbne spørgsmål i kategorien.');
define('_MD_SF_INDEX_FAQS', 'Seneste offentliggjort FAQ');
define('_MD_SF_INDEX_FAQS_INFO', 'Her er en liste over de sidste FAQ, som er blevet offentliggjort.');
define('_MD_SF_INDEX_QUESTIONS', 'Seneste offentliggjorte spærgsmål');
define('_MD_SF_INDEX_QUESTIONS_INFO', 'Her er en liste over de sidste åbne spørgsmål, der er blevet offentliggjort.');
define('_MD_SF_INTARTFOUND', 'Her er et interessant spørgsmål og svar, jeg har fundet på %s');
define('_MD_SF_INTARTICLE', 'Har et kig på denne FAQ på %s');
define('_MD_SF_MAIL', 'Send FAQ');
define('_MD_SF_MAINHEAD', 'Velkommen til');
define('_MD_SF_MAININTRO', 'I denne del af hjemmesiden, vil du finde svar på de oftest stillede spørgsmål. Hver FAQ er placeret i en kategori for lettere at kunne finde den. Dette er afsnittet, hvor den tilfældige FAQ som i højre spalte af sitet kommer fra. Skulle du ikke finde svaret på et bestemt spørgsmål, er du velkommen til at <a href=\'".XOOPS_URL."/forms/askus/form.php\'> Stille os et spørgsmål!</a>');
define('_MD_SF_MAINNOSELECTCAT', 'Du har ikke valgt en gyldig kategori');
define('_MD_SF_MAINNOFAQS', 'Der er ingen FAQ i denne kategori');
define('_MD_SF_MODERATION_MAIN_HEAD', 'Moderator af');
define('_MD_SF_MODERATION_MAIN_INTRO', 'Som en moderator, du har lov til at godkende og afvise forespørgelser, spørgsmål og FAQ.');
define('_MD_SF_MODERATIONPAGE', 'Moderation');
define('_MD_SF_MODERATION_PUBLISHED_NEW_ANSWER', 'Offentliggjort FAQ med nyligt indsendte svar');
define('_MD_SF_NO', 'Nej');
define('_AM_SF_NO_CAT_PERMISSIONS', 'Beklager, du ikke har tilstrækkelige rettigheder til at få adgang til dette område.');
define('_AM_SF_NO_CAT_EXISTS', 'Beklager, men der er ingen kategori defineret endnu.<br /> Venligst kontakt administratoren og gør opmærksom på dette.');
define('_MD_SF_NO_OPEN_QUESTION', 'Der er i øjeblikket ingen spørgsmål i den åbne spørgsmål sektion.');
define('_AM_SF_NO_TOP_PERMISSIONS', 'Beklager, men der er ingen FAQ at vise');
define('_MD_SF_NONE', 'Ingen');
define('_MD_SF_NOQUESTIONSYET', 'Der er ingen spørgsmål at vise');
define('_MD_SF_NOTIFY', 'Advisér på offentliggørelse?');
define('_MD_SF_NOFAQS_INFO', 'Der er i øjeblikket ingen FAQ at vise.');
define('_MD_SF_NOCATEGORYSELECTED', 'Du har ikke vælge en gyldig kategori!');
define('_MD_SF_NOFAQSELECTED', 'Du har ikke valgt et gyldigt FAQ!');
define('_MD_SF_OF', 'Fra');
define('_MD_SF_ON', 'Til');
define('_MD_SF_OPEN_ANSWER_NEED_APPROBATION', 'Dit svar er blevet indsendt og vil blive offentliggjort i FAQ sektion efter godkendelse af en moderator.');
define('_MD_SF_OPEN_SECTION', 'Åbne spørgsmål');
define('_MD_SF_OPENED_INFO', 'Her er de åbne spørgsmål inden for denne kategori. Hvis du kender svaret på et af spørgsmålene, er du velkommen til at besvare det ved at klikke på spørgsmålets titel.');
define('_MD_SF_OPENED_QUESTIONS', 'Åbne spørgsmål');
define('_MD_SF_OPTIONS', 'Muligheder');
define('_MD_SF_ORIGINAL_ANSWER', 'Oprindelige svar');
define('_MD_SF_POSTED', 'Udgivet');
define('_MD_SF_POSTEDBY', 'Udgivet af');
define('_MD_SF_PREVIEW', 'Prøvevisning');
define('_MD_SF_PRINT', 'Udskriv FAQ');
define('_MD_SF_PRINTERFRIENDLY', 'Print denne FAQ i et printer venligt format');
define('_MD_SF_QNA_RECEIVED_NEED_APPROVAL', 'Din FAQ er blevet sendt og vil blive offentliggjort efter godkendelse af en moderator. <br />Tak for dit bidrag!');
define('_MD_SF_QNA_RECEIVED_AND_PUBLISHED', 'Din FAQ er blevet sendt og automatisk offentliggjort. Tak for dit bidrag!');
define('_MD_SF_QUESTION', 'Spørgsmål');
define('_MD_SF_QUESTIONCOMEFROM', 'Dette spørgsmål blev fundet på');
define('_MD_SF_QUESTIONS', 'Spørgsmål');
define('_MD_SF_READS', 'læst');
define('_MD_SF_REQUEST', 'Anmod om en ny FAQ');
define('_MD_SF_REQUEST_ERROR', 'Der opstod en fejl. Din anmodning blev ikke sendt.');
define('_MD_SF_REQUEST_INTRO', 'Fandt du ikke svaret på det spørgsmål, du ledte efter? Intet problem! Du skal blot udfylde nedenstående formular for at anmode om svaret på dit spørgsmål. Sidens administrator vil gennemgå din ansøgning og offentliggøre dette nye spørgsmål i den åbne spørgsmål sektion for nogen til at svare på det!');
define('_MD_SF_REQUEST_RECEIVED_NEED_APPROVAL', 'Din anmodning er blevet sendt og vil blive offentliggjort i de åbne spørgsmål afsnittet efter godkendelse af en moderator. <br /> Tak for dit bidrag!');
define('_MD_SF_REQUEST_RECEIVED_AND_PUBLISHED', 'Din anmodning er blevet sendt og automatisk offentliggjort i åbne spørgsmål sektion. Tak for dit bidrag!');
define('_MD_SF_REQUESTED', 'Anmodet');
define('_MD_SF_REQUESTEDBY', 'Anmodet af %s den %s');
define('_MD_SF_REQUESTEDANDANSWERED', 'Anmodet og besvaret af %s den %s');
define('_MD_SF_REQUESTEDBYANDANSWEREDBY', 'Anmodet  af %s og besvaret af %s den %s');
define('_MD_SF_RETURN', 'Retur');
define('_MD_SF_RETURN2INDEX', 'Retur til modul indeks');
define('_MD_SF_SMARTFAQS', 'FAQ');
define('_MD_SF_SPECIFIC_URL_SELECT', 'Særlig URL ...');
define('_MD_SF_SENDSTORY', 'Send denne FAQ til en ven');
define('_MD_SF_SPECIFIC_URL', 'Særlig URL');
define('_MD_SF_SPECIFIC_URL_DSC', 'Hvis du har indstillet \'Indholdsbestemte link til dette modul \' til <i>". _MD_SF_SPECIFIC_URL_SELECT."</i>, bedes du angive webadressen. <br /> n<b>Eksempel: </b> modules/newbb');
define('_MD_SF_SUB_INTRO', 'Du bedes udfylde denne formular til at sende din FAQ. Sidens administrator vil gennemgå det og derefter offentliggøre det så hurtigt som muligt. På forhånd tak for Deres bidrag.');
define('_MD_SF_SUB_SNEWNAME', 'Send en  FAQ');
define('_MD_SF_SUB_SMNAME', 'Send en  FAQ');
define('_MD_SF_SUBMIT_ERROR', 'Der opstod en fejl. Din FAQ blev ikke indsendt.');
define('_MD_SF_SUBMITANSWER', 'Send svar');
define('_MD_SF_SUBMITANSWERTO', 'Send et svar til %s');
define('_MD_SF_SUBMITANSWER_INTRO', 'du bedes udfylde denne formular til at indsende et svar til dette spørgsmål. Webstedeta adminisrator vil gennemgå det og derefter offentliggøre det så hurtigt som muligt. På forhånd tak for Deres bidrag.');
define('_MD_SF_SUBMITANSWERBUTTON', 'Send svaret');
define('_MD_SF_SUBMITAPPROVED', 'Svaret du har sendt er modtaget. Da auto-godkende mulighed sat, at svaret er blevet accepteret og FAQ er blevet udgivet.');
define('_MD_SF_SUBMIT_FROM_ADMIN', 'Da du er en af administratorne af modulet, vil FAQ automatisk blive offentliggjort med alle tilladelser.');
define('_MD_SF_LAST_QUESTION', 'Sidste spørgsmål offentliggjort');
define('_MD_SF_LAST_SMARTFAQ', 'Sidste FAQ offentliggjort');
define('_MD_SF_SUBMITRECEIVED', 'Svaret du har sendt er modtaget. Vi vil se på det hurtigst muligt.');
define('_MD_SF_SMARTFAQS_INFO', 'Her er de offentliggjorte FAQ i denne kategori.');
define('_MD_SF_SUBMITART', 'Send en FAQ');
define('_MD_SF_THE', 'den');
define('_MD_SF_TOTAL_SMARTFAQS', 'Total antal FAQ');
define('_MD_SF_TOTAL_QUESTIONS', 'Total antal spørgsmål');
define('_MD_SF_TIMES', 'gange');
define('_MD_SF_FAQ', 'FAQ');
define('_MD_SF_UNKNOWNERROR', 'FEJL. Sender dig tilbage hvor du kom fra!');
define('_MD_SF_WEIGHT', 'Vægt');
define('_MD_SF_OPEN_WELCOME', 'Velkommen til den åbne spørgsmål sektionen på %s');
define('_MD_SF_YES', 'Ja');
?>