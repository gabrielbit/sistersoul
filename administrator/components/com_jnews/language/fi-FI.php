<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Finnish language file</p>
* @author Tero Kankaanperä <tero@terokankaanpera.fi>
* @version $Id: finnish.php 491 2007-02-01 22:56:07Z chris $
* @link http://terokankaanpera.fi
*/

#######    NOTE TO TRANSLATORS  #######
# If you wish to translate the language file to your own language, please feel free to do so
# We would apprecaite if you could send you translation to the specified email
# so that other people could benefit from your contribution
# If you feel that the file is too long feel free to do as much as you want and probably
# someone else will be happy to pick up were you stopped.
#  We did our bestt to organize the subject by order of priority so start at the top
# If you update your translation please send you updates to translation@acajoom.com
# IMPORTANT: make sure respect as much as posible the punctionation and spacing because
# sometimes the word constant are conbined...
# Don't ever remove a define as it will create an error in the code.
# when using apostrophy  '   add a back-slash before like this:  \'  otherwise it will create an error.
# sometimes you will see html tag in the define, please leave it the way it is.

# DONT FORGET if you want to be credited fro your work, make sure to change the credit
# with your name and email if you want people to contact you otherwise leave the email as it is.
# We will use that information to also include you into the About section of the component
# Thank you very much for your contribution translating in your language

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews on sähköpostilista, uutiskirje, automaattivastaaja ja seurantatyökalu tehokkaaseen viestimiseen käyttäjiesi ja asiakkaidesi kanssa.  ' .
		'jNews, Your Communication Partner!');
define('_JNEWS_DESC_GPL', 'jNews on sähköpostilista, uutiskirje, automaattivastaaja ja seurantatyökalu tehokkaaseen viestimiseen käyttäjiesi ja asiakkaidesi kanssa.  ' .
		'jNews, Your Communication Partner!');
define('_JNEWS_FEATURES', 'jNews, your communication partner!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Uutiskirje');
define('_JNEWS_AUTORESP', 'Automaattivastaaja');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'eKortti');
define('_JNEWS_POSTCARD', 'Postikortti');
define('_JNEWS_PERF', 'Näytös');
define('_JNEWS_COUPON', 'Kuponki');
define('_JNEWS_CRON', 'Cron tehtävä');
define('_JNEWS_MAILING', 'Postitus');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Listat');
define('_JNEWS_MENU_SUBSCRIBERS', 'Tilaajat');
define('_JNEWS_MENU_NEWSLETTERS', 'Uutiskirjeet');
define('_JNEWS_MENU_AUTOS', 'Automaattivastaajat');
define('_JNEWS_MENU_COUPONS', 'Kupongit');
define('_JNEWS_MENU_CRONS', 'Cron tehtävät');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eKortit');
define('_JNEWS_MENU_POSTCARDS', 'Postikortit');
define('_JNEWS_MENU_PERFS', 'Näytökset');
define('_JNEWS_MENU_TAB_LIST', 'Listat');
define('_JNEWS_MENU_MAILING_TITLE', 'Postitukset');
define('_JNEWS_MENU_MAILING' , 'Postitukset ');
define('_JNEWS_MENU_STATS', 'Tilastot');
define('_JNEWS_MENU_STATS_FOR', 'Tilastot ');
define('_JNEWS_MENU_CONF', 'Asetukset');
define('_JNEWS_MENU_UPDATE', 'Tuonti');
define('_JNEWS_MENU_ABOUT', 'Tietoa');
define('_JNEWS_MENU_LEARN', 'Oppimiskeskus');
define('_JNEWS_MENU_MEDIA', 'Medianhallinta');
define('_JNEWS_MENU_HELP', 'Ohje');
define('_JNEWS_MENU_CPANEL', 'Ohjauspaneeli');
define('_JNEWS_MENU_IMPORT', 'Tuo');
define('_JNEWS_MENU_EXPORT', 'Vie');
define('_JNEWS_MENU_SUB_ALL', 'Tilaa kaikki');
define('_JNEWS_MENU_UNSUB_ALL', 'Peru kaikki');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arkisto');
define('_JNEWS_MENU_PREVIEW', 'Esikatselu');
define('_JNEWS_MENU_SEND', 'Lähetä');
define('_JNEWS_MENU_SEND_TEST', 'Tee koelähetys');
define('_JNEWS_MENU_SEND_QUEUE', 'Suorita jono');
define('_JNEWS_MENU_VIEW', 'Katso');
define('_JNEWS_MENU_COPY', 'Kopioi');
define('_JNEWS_MENU_VIEW_STATS' , 'Katso tilastot');
define('_JNEWS_MENU_CRTL_PANEL' , ' Ohjauspaneeli');
define('_JNEWS_MENU_LIST_NEW' , ' Luo lista');
define('_JNEWS_MENU_LIST_EDIT' , ' Muokkaa listaa');
define('_JNEWS_MENU_BACK', 'Takaisin');
define('_JNEWS_MENU_INSTALL', 'Asennus');
define('_JNEWS_MENU_TAB_SUM', 'Yhteenveto');
define('_JNEWS_STATUS' , 'Status');

// messages
define('_JNEWS_ERROR' , ' Tapahtui virhe! ');
define('_JNEWS_SUB_ACCESS' , 'Käyttöoikeudet');
define('_JNEWS_DESC_CREDITS', 'Credits');
define('_JNEWS_DESC_INFO', 'Tietoa');
define('_JNEWS_DESC_HOME', 'Kotisivu');
define('_JNEWS_DESC_MAILING', 'Postituslista');
define('_JNEWS_DESC_SUBSCRIBERS', 'Tilaajat');
define('_JNEWS_PUBLISHED','Julkaistu');
define('_JNEWS_UNPUBLISHED','Piilotettu');
define('_JNEWS_DELETE','Poista');
define('_JNEWS_FILTER','Suodata');
define('_JNEWS_UPDATE','Päivitä');
define('_JNEWS_SAVE','Tallena');
define('_JNEWS_CANCEL','Peru');
define('_JNEWS_NAME','Nimi');
define('_JNEWS_EMAIL','Sähköpostiosoite');
define('_JNEWS_SELECT','Valitse');
define('_JNEWS_ALL','Kaikki');
define('_JNEWS_SEND_A', 'Lähetä ');
define('_JNEWS_SUCCESS_DELETED', ' poistettiin onnistuneesti');
define('_JNEWS_LIST_ADDED', 'Lista luotiin onnistuneesti');
define('_JNEWS_LIST_COPY', 'Lista kopioitiin onnistuneesti');
define('_JNEWS_LIST_UPDATED', 'Lista päivitettiin onnistuneesti');
define('_JNEWS_MAILING_SAVED', 'Postitus tallennettiin onnistuneesti.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'päivitettiin onnistuneesti.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Tilaajan tiedot');
define('_JNEWS_VERIFY_INFO', 'Ole hyvä ja varmista linkki, tietoa puuttuu.');
define('_JNEWS_INPUT_NAME', 'Nimi');
define('_JNEWS_INPUT_EMAIL', 'Sähköpostiosoite');
define('_JNEWS_RECEIVE_HTML', 'HTML muotoilu?');
define('_JNEWS_TIME_ZONE', 'Aikavyöhyke');
define('_JNEWS_BLACK_LIST', 'Mustalista');
define('_JNEWS_REGISTRATION_DATE', 'Käyttäjäksi rekisteröitymispvm');
define('_JNEWS_USER_ID', 'Käyttäjän id');
define('_JNEWS_DESCRIPTION', 'Kuvaus');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Tilisi on aktivoitu.');
define('_JNEWS_SUB_SUBSCRIBER', 'Tilaaja');
define('_JNEWS_SUB_PUBLISHER', 'Julkaisija');
define('_JNEWS_SUB_ADMIN', 'Ylläpitäjä');
define('_JNEWS_REGISTERED', 'Rekisteröitynyt');
define('_JNEWS_SUBSCRIPTIONS', 'Tilauksesi');
define('_JNEWS_SEND_UNSUBCRIBE', 'Lähetä peruutusviesti');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Napsauta Kyllä lähettääksesi peruutusviestin vahvistusviesti.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Ole hyvä ja varmista tilauksesi');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Peruutusvahvistus');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Hei {tag:name},<br />' .
		'Vielä yksi askel ja olet tilannut uutiskirjeen.  Ole hyvä ja napsauta seuraavaa linkkiä vahvistaaksesi tilauksesi.' .
		'<br /><br />{tag:confirm}<br /><br />Jos sinulla on kysyttävää ota yhteyttä ylläpitäjään.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Tämä on varmistusviesti että olet peruuttanut uutiskirjeemme tilauksesi.  Olemme pahoillamme siitä, että päätit peruuttaa tilauksesi ja haluamme muistuttaa että voit uudistaa tilauksesi koska tahansa kotisivuillamme.  Jos sinulla on kysyttävää, ota yhteyttä ylläpitoomme.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Tilauspäivämäärä');
define('_JNEWS_CONFIRMED', 'Vahvistettu');
define('_JNEWS_SUBSCRIB', 'Tilaa');
define('_JNEWS_HTML', 'HTML muotoilu');
define('_JNEWS_RESULTS', 'Tulokset');
define('_JNEWS_SEL_LIST', 'Valitse lista');
define('_JNEWS_SEL_LIST_TYPE', '- Valitse listan tyyppi -');
define('_JNEWS_SUSCRIB_LIST', 'Listaa kaikki tilaajat');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Tilaajat listalle : ');
define('_JNEWS_NO_SUSCRIBERS', 'Listalle ei löydy tilaajia.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Vahvistus sähköposti on lähetetty sähköpostiosoitteeseesi.  Ole hyvä ja tarkista viestisi ja napsauta viestissä olevaa linkkiä.<br />' .
		'Sinun täytyy varmistaa sähköpostiosoitteesi tilauksesi voimaan saattamiseksi.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Sinut on onnistuneesti liitetty listalle.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Napsauta tästä vahvistaaksesi tilauksesi');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Napsauta tästä poistaaksesi itsesi listalta');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Sähköpostiosoitteesi on poistettu listalta');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Kaikki ajastetut postitukset on onnistuneesti lähetetty.');
define('_JNEWS_MALING_VIEW', 'Katso kaikki postitukset');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Oletko varma että haluat peruuttaa tämän listan tilauksesi?');
define('_JNEWS_MOD_SUBSCRIBE', 'Tilaa');
define('_JNEWS_SUBSCRIBE', 'Tilaa');
define('_JNEWS_UNSUBSCRIBE', 'Peru tilaus');
define('_JNEWS_VIEW_ARCHIVE', 'Katso arkisto');
define('_JNEWS_SUBSCRIPTION_OR', ' tai napsauta tästä päivittääksesi tietosi');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Tämä sähköpostiosoite on jo rekisteröity.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Tilaaja on poistettu onnistuneesti.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Käyttäjän ohjauspaneeli');
define('_JNEWS_UCP_USER_MENU', 'Käyttäjän valikko');
define('_JNEWS_UCP_USER_CONTACT', 'Tilaukseni');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Cron tehtävien hallinta');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Uusi ajastus');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Listaa Cron tehtävät');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Kuponkien hallinta');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Lista kupongit');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Lisää kuponki');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Kuvaus');
define('_JNEWS_LIST_T_LAYOUT', 'Ulkoasu');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Tilaukset');
define('_JNEWS_LIST_T_SENDER', 'Lähettäjätiedot');

define('_JNEWS_LIST_TYPE', 'Listan tyyppi');
define('_JNEWS_LIST_NAME', 'Listan nimi');
define('_JNEWS_LIST_ISSUE', 'Numero ');
define('_JNEWS_LIST_DATE', 'Lähetyspäivä');
define('_JNEWS_LIST_SUB', 'Postituksen otsikko');
define('_JNEWS_ATTACHED_FILES', 'Liitetiedostot');
define('_JNEWS_SELECT_LIST', 'Ole hyvä ja valitse lista muokattavaksi!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Listan tyyppi');
define('_JNEWS_AUTO_RESP_OPTION', 'Automaattivastaajan asetukset');
define('_JNEWS_AUTO_RESP_FREQ', 'Tilaajat voivat valita taajuuden');
define('_JNEWS_AUTO_DELAY', 'Viive (päivissä)');
define('_JNEWS_AUTO_DAY_MIN', 'Vähimmäistaajuus');
define('_JNEWS_AUTO_DAY_MAX', 'Enimmäistaajuus');
define('_JNEWS_FOLLOW_UP', 'Seuranta automaattivastaaja');
define('_JNEWS_AUTO_RESP_TIME', 'Tilaajat voivat valita ajan');
define('_JNEWS_LIST_SENDER', 'Listan lähettäjä');

define('_JNEWS_LIST_DESC', 'Listan kuvaus');
define('_JNEWS_LAYOUT', 'Ulkoasu');
define('_JNEWS_SENDER_NAME', 'Lähettäjän nimi');
define('_JNEWS_SENDER_EMAIL', 'Lähettäjän sähköpostiosoite');
define('_JNEWS_SENDER_BOUNCE', 'Lähettäjän reply-to osoite');
define('_JNEWS_LIST_DELAY', 'Viive');
define('_JNEWS_HTML_MAILING', 'HTML muotoilu?');
define('_JNEWS_HTML_MAILING_DESC', '(jos muutat tätä, sinun täytyy tallentaa ja palata tälle ruudulle nähdäksesi muutokset.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Piilota julkisesta liittymästä?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Valitse tuontitiedosto');;
define('_JNEWS_IMPORT_FINISHED', 'Tuonti suoritettu');
define('_JNEWS_DELETION_OFFILE', 'Tiedoston poistaminen');
define('_JNEWS_MANUALLY_DELETE', 'epäonnistui, sinun täytyy poistaa tiedosto manuaalisesti');
define('_JNEWS_CANNOT_WRITE_DIR', 'Hakemistoon ei voi kirjoittaa');
define('_JNEWS_NOT_PUBLISHED', 'Postitusta ei voitu lähettää, listaa ei ole julkaistu.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Napsauta Kyllä julkaistaksesi lista');
define('_JNEWS_INFO_LIST_NAME', 'Kirjoita listan nimi tähän. Voit tunnistaa listan tällä nimellä.');
define('_JNEWS_INFO_LIST_DESC', 'Kirjoita lyhyt kuvaus listasta tähän. Tämä kuvaus on sivustosi käyttäjien luettavissa.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Anna listan postitusten lähettäjän käytetty nimi. Nimi näkyy tilaajille heidän saamissaan viesteissä.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Anna sähköpostiosoite, josta listan viestit lähtevät. ');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Anna sähköpostiosoite, johon listan vastaanottajat voivat vastata. Tämän suositellaan vakavasti olevan sama kuin lähettäjän osoite, koska roskapostisuodattimet antavat viestillesi korkeammat pisteet jos ne ovat eri osoitteita.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Valitse postitusten tyyppi tälle listalle. <br />' .
		'Uutiskirje: tavallinen uutiskirje<br />' .
		'Automaattivastaaja: automaattivastaaja on lista, joka lähetetään sivuston kautta säännöllisin välein.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Anna käyttäjien valita miten usein he saavat viestin.  Tämä anta enemmän joustavuutta käyttäjille.');
define('_JNEWS_INFO_LIST_TIME', 'Anna käyttäjien valita mihin aikaan he haluavat saada viestin listalta.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Määrittele mikä on vähimmäistaajuus, jolla käyttäjät voivat listan tilata.');
define('_JNEWS_INFO_LIST_DELAY', 'Määrittele viive tämän ja edellisen automaattivastaajan välille.');
define('_JNEWS_INFO_LIST_DATE', 'Määrittele päivämäärä, jolloin haluat julkaista uutislistan jos haluat viivyttää sen julkaisemista. <br /> MUOTO : VVVV-KK-PP TT:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Määrittele mikä on enimmäistaajuus, jolla käyttäjät voivat listan tilata.');
define('_JNEWS_INFO_LIST_LAYOUT', 'Syotä listan viestien ulkoasu tähän. Voit määritellä ulkoasun täysin vapaasti.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Tämä viesti lähetetään käyttäjälle kun hän ensimmäisen kerran rekisteröityy. Voit määritellä tekstin vapaasti.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Tämä viestin lähetetään tilaajalle kun hän peruuttaa tilauksensa. Mikä tahansa viesti voidaan asettaa tässä.');
define('_JNEWS_INFO_LIST_HTML', 'Valitse tämä ruutu jos haluat lähettää HTML-muotoiltuja viestejä. Käyttäjät voivat HTML-listaa tilatessaan määritellä haluavatko he vastaanottaa HTML-muotoiltuja vai pelkkänä tekstinä lähetettyjä viestejä.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Valitse Kyllä piilottaaksesi tämä lista julkisesta liittymästä, käyttäjät eivät voi tilata listaa, mutta sinä voit edelleen lähettää viestejä sille.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Haluatko automaattisesti liittää uudet käyttäjät tälle listalle?<br /><B>Uudet käyttäjät:</B> liittää kaikki uudet sivustolle rekisteröityvät.<br /><B>Kaikki käyttäjät:</B> liittää kaikki tietokannan rekisteröidyt käyttäjät.<br />(kaikki vaihtoehdot tukevat Community Builderia)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Valitse julkisen liittymän käyttöoikeustaso. Tämä näyttää tai piilottaa listan käyttäjäryhmiltä joilla ei ole riittäviä oikeusia siihen, jotta he eivät voi tilata sitä.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Valitse käyttöoikeusryhmä, jolle haluat antaa muokkausoikeuden. Tähän ja ylempiin ryhmiin kuuluvat voivat muokata postitusta ja lähettää sen, julkisesta tai ylläpitoliittymästä.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Jos haluat että automaattivastaaja siirtyy listasta toiseen kun viimeinen viesti on lähetetty voi määritellä tässä seuraavan listan.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Tämä on listan luoneen henkilön ID.');
define('_JNEWS_INFO_LIST_WARNING', '   Tämä viimeinen asetus on asetettavissa vain kerran listan luomisen yhteydessä.');
define('_JNEWS_INFO_LIST_SUBJET', ' Postituksen otsikko.  Tämä on tilaajien saaman sähköpostiviestin otsikko.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Tämä on lähettämäsi sähköpostiviestin runko (sisältö).');
define('_JNEWS_INFO_MAILING_NOHTML', 'Lisää tähän pelkkänä tekstinä lähetettävän viestin runko (sisältö) niille käyttäjille, jotka valitsivat pelkän tekstimuotoisen viestin <BR/> HUOMAA: jos jätät tämän tyhjäksi jNews konvertoi HTML-muotoisen viestin automaattisesti pelkäksi tekstiksi.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Valitse Kyllä näyttääksesi postitus julkisessa liittymässä.');
define('_JNEWS_INSERT_CONTENT', 'Lisää olemassa olevaa sisältöä.');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kuponki onnistuneesti lähetetty!');
define('_JNEWS_CHOOSE_COUPON', 'Valitse kuponki');
define('_JNEWS_TO_USER', ' tälle käyttäjälle');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Joka x. tunti');
define('_JNEWS_FREQ_CH2', 'Joka 6. tunti');
define('_JNEWS_FREQ_CH3', 'Joka 12. tunti');
define('_JNEWS_FREQ_CH4', 'Päivittäin');
define('_JNEWS_FREQ_CH5', 'Viikoittain');
define('_JNEWS_FREQ_CH6', 'kuukausittain');
define('_JNEWS_FREQ_NONE', 'Ei');
define('_JNEWS_FREQ_NEW', 'Uudet käyttäjät');
define('_JNEWS_FREQ_ALL', 'Kaikki käyttäjät');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Valitse Kyllä jos haluat käyttää tätä jNews Cron-ajatukseen, Ei mitä tahansa muuta Cron-ajastusta varten.<br />' .
		'Jos valitset Kyllä sinun ei tarvitse määritellä Cron osoitetta, se lisätään automaattisesti.');
define('_JNEWS_SITE_URL' , 'Sivustosi URL');
define('_JNEWS_CRON_FREQUENCY' , 'Cron taajuus');
define('_JNEWS_STARTDATE_FREQ' , 'Aloitus päivämäärä');
define('_JNEWS_LABELDATE_FREQ' , 'Määrittele päivä');
define('_JNEWS_LABELTIME_FREQ' , 'Määrittele aika');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Taajuus');
define('_JNEWS_TITLE_CRONLIST', 'Cron lista');
define('_JNEWS_NEW_LIST', 'Luo uusi lista');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Cron muokkaa');
define('_JNEWS_CRON_SITE_URL', 'Ole hyvä ja anna toimiva sivuston url, alkaen http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Kaikki postitukset');
define('_JNEWS_EDIT_A', 'Muokkaa ');
define('_JNEWS_SELCT_MAILING', 'Valitse lista alasvetovalikosta lisätäksesi uusi postitus.');
define('_JNEWS_VISIBLE_FRONT', 'Näkyy julkisessa liittymässä');

// mailer
define('_JNEWS_SUBJECT', 'Otsikko');
define('_JNEWS_CONTENT', 'Sisältö');
define('_JNEWS_NAMEREP', '{tag:name} = Tämä korvataan tilaajan antamalla nimellä, lähetät kohdistettua sähköpostia kun käytät tätä.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Tämä korvataan tilaajan antamalla etunimellä.<br />');
define('_JNEWS_NONHTML', 'HTML:tön versio');
define('_JNEWS_ATTACHMENTS', 'Liitteet');
define('_JNEWS_SELECT_MULTIPLE', 'Pidä CTRL (tai command) pohjassa valitaksesi useita liitteitä.<br />' .
		'Tässä listassa näytetyt liitteet ovat liitehakemistossa, voit muuttaa sijaintia ohjauspaneelista.');
define('_JNEWS_CONTENT_ITEM', 'Sisältönimike');
define('_JNEWS_SENDING_EMAIL', 'Lähetetään sähköpostia');
define('_JNEWS_MESSAGE_NOT', 'Viestiä ei voitu lähettää');
define('_JNEWS_MAILER_ERROR', 'Postitusohjelma virhe');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Viesti lähetetty onnistuneesti');
define('_JNEWS_SENDING_TOOK', 'Tämän postituksen lähettäminen kesti');
define('_JNEWS_SECONDS', 'sekuntia');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Ei sähköpostiosoitteita tai tilaajia käytettävissä');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Muuta');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Muuta tilaustasi');
define('_JNEWS_WHICH_EMAIL_TEST', 'Anna sähköpostiosoite johon koeviesti lähetetään tai valitse esikatselu');
define('_JNEWS_SEND_IN_HTML', 'Lähetä HTML-muotoiltuna (HTML-listoille)?');
define('_JNEWS_VISIBLE', 'Näkyvä');
define('_JNEWS_INTRO_ONLY', 'Vain ingressi');

// stats
define('_JNEWS_GLOBALSTATS', 'Kokonaistilastot');
define('_JNEWS_DETAILED_STATS', 'Yksityiskohtaiset tilastot');
define('_JNEWS_MAILING_LIST_DETAILS', 'Listan yksityiskohdat');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Lähetetty HTML muodossa');
define('_JNEWS_VIEWS_FROM_HTML', 'Lukukerrat (HTML-viesteistä)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Lähetetty tekstimuodossa');
define('_JNEWS_HTML_READ', 'HTML luettu');
define('_JNEWS_HTML_UNREAD', 'HTML lukematta');
define('_JNEWS_TEXT_ONLY_SENT', 'Vain teksti');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Sähköposti');
define('_JNEWS_LOGGING_CONFIG', 'Lokit ja tilastot');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Tilaajat');
define('_JNEWS_MISC_CONFIG', 'Sekalaista');
define('_JNEWS_MAIL_SETTINGS', 'Sähköpostiasetukset');
define('_JNEWS_MAILINGS_SETTINGS', 'Postitusasetukset');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Tilausasetukset');
define('_JNEWS_CRON_SETTINGS', 'Cron asetukset');
define('_JNEWS_SENDING_SETTINGS', 'Lähetysasetukset');
define('_JNEWS_STATS_SETTINGS', 'Tilastoasetukset');
define('_JNEWS_LOGS_SETTINGS', 'Lokiasetukset');
define('_JNEWS_MISC_SETTINGS', 'Sekalaiset asetukset');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Palautuvat viestit vastaanottava osoite<br/> (käytetään kaikille viesteillesi)');
define('_JNEWS_SEND_MAIL_NAME', 'Lähettäjän nimi');
define('_JNEWS_MAILSENDMETHOD', 'Postitusohjelma');
define('_JNEWS_SENDMAILPATH', 'Sendmail polku');
define('_JNEWS_SMTPHOST', 'SMTP palvelin');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP vaatii tunnistamisen');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Valitse Kyllä jos SMTP-palvelimesi vaatii tunnistamisen');
define('_JNEWS_SMTPUSERNAME', 'SMTP käyttäjätunnus');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Jos palvelimesi vaatii tunnistamisen anna SMTP-käyttäjätunnus');
define('_JNEWS_SMTPPASSWORD', 'SMTP salasana');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Jos palvelimesi vaatii tunnistamisen anna SMTP-salasana');
define('_JNEWS_USE_EMBEDDED', 'Käytä upotettuja kuvia');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Valitse Kyllä jos liitettyyn sisältöön kuuluvat kuvat pitäisi upottaa viestiin HTML muodossa, tai Ei käyttääksesi oletusmerkintää joka linkittää kuvat viestiin sivustolta.');
define('_JNEWS_UPLOAD_PATH', 'Lataus/Liitehakemisto');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Voit määritellä lataushankemiston.<br />' .
		'Varmista, että antamasi hakemisto on olemassa, muutoin luo se.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Salli rekisteröitymättömät');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Valitse Kyllä jos haluat sallia rekisteröitymättömien käyttäjien tilata listoja.');
define('_JNEWS_REQ_CONFIRM', 'Vaadi vahvistus');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Valitse Kyllä jos vaadit että rekisteröitymättömät käyttäjät varmistavat sähköpostiosoiteensa.');
define('_JNEWS_SUB_SETTINGS', 'Tilausasetukset');
define('_JNEWS_SUBMESSAGE', 'Tilausosoite');
define('_JNEWS_SUBSCRIBE_LIST', 'Tilaa lista');

define('_JNEWS_USABLE_TAGS', 'Käytettävissä olevat merkinnät');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Tämä luo napsautettavan linkin jolla tilaaja voi vahvistaa tilauksensa. Tämä on <strong>pakollinen</strong> jotta jNews toimii oikein.<br />'
.'<br />{tag:name} = Tämä korvataan käyttäjän antamalla nimellä, lähetät kohdistettua sähköpostia käyttäessäsi tätä.<br />'
.'<br />{tag:firstname} = Tämä korvataan tilaajan etunimellä, etunimellä tarkoitetaan käyttäjän ensin syöttämään nimä.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Vahvistusviestien lähettäjän nimi');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Anna lähettäjän nimi jota käytetään vahvistuksen vaativilla listoilla.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Vahvistusviestien lähettäjän sähköpostiosoite');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Anna lähettäjän sähköpostiosoite jota käytetään vahvistuksen vaativilla listoilla.');
define('_JNEWS_CONFIRMBOUNCE', 'Bounce osoite');
define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Anna bounce osoite näytettäväksi vahvistuksen vaativilla listoilla.');
define('_JNEWS_HTML_CONFIRM', 'HTML vahvistus');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Valitse Kyllä jos vahvistuksen vaativat listat ovat html-muotoisia käyttäjän sen salliessa.');
define('_JNEWS_TIME_ZONE_ASK', 'Kysy aikavyöhyke');
define('_JNEWS_TIME_ZONE_TIPS', 'Valitse Kyllä jos haluat kysyä käyttäjän aikavyöhykettä. Jonoon laitetut postituksen lähetetään aikavyöhykkeen perusteella milloin tarkoituksen mukaista');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'napsauta tästä asettaaksesi aikavyöhyke sivuston asetuksissa -> Paikallisasetukset');
define('_JNEWS_TIME_OFFSET_TIPS', 'Aseta palvelimesi aikavyöhyke niin että päiväys ja kellonaika ovat täsmällisesti oikein');
define('_JNEWS_TIME_OFFSET', 'Aikavyöhyke');
define('_JNEWS_CRON_DESC','<br />Käyttäen cron ajastusta voit asettaa automaattisia tehtäviä Joomla sivustollesi!<br />' .
		'Asettaaksesi sen käyttöön sinun täytyy lisätä seuraava komento ohjauspaneelisi crontabiin:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Jos tarvitset apua asetuksissa tai sinulla on ongelmia, ole hyvä ja tutustu foorumiimme <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pysähdy x sekunniksi aina asetetun määrän viestejä lähetettyäsi');
define('_JNEWS_PAUSEX_TIPS', 'Anna sekuntimäätä, jonka jNews antaa postitusohjelmalle viestien lähettämiseen ennen kuin jatkaa seuraavalla asetetun suuruisella erällä.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Viestien määrä taukojen välillä');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Montako viestiä lähetetään taukojen välillä.');
define('_JNEWS_WAIT_USER_PAUSE', 'Odota käyttäjän toimia ennen jatkamista');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Asettaa pitäisikö skriptin odottaa käyttäjältä hyväksyntää ennen kuin se jatkaa tauon jälkeen lähetystä.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Skriptin timeout');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Montako minuuttia skriptin tulee antaa toimia (0 tarkoittaa rajoittamatonta).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Ota käyttöön lukutilastot');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Valitse Kyllä jos haluat tallentaa lokiin katselukertojen määrän. Tätä tekniikkaa voidaan käyttää vain html-muotoiltujen viestien kanssa');
define('_JNEWS_LOG_VIEWSPERSUB', 'Kirjaa katselut tilaajittain');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Valitse Kyllä jos haluat tallentaa katselukerrat tilaajaa kohti. Tätä tekniikkaa voidaan käyttää vain html-muotoiltujen viestien kanssa');
// Logs settings
define('_JNEWS_DETAILED', 'Yksityiskohtaiset lokit');
define('_JNEWS_SIMPLE', 'Yksinkertaistetut lokit');
define('_JNEWS_DIAPLAY_LOG', 'Näytä lokit');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Valitse Kyllä jos haluat näyttää lokin kun lähetys on käynnissä.');
define('_JNEWS_SEND_PERF_DATA', 'Lähetyksen suorituskyky');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Valitse Kyllä jos haluat jNewsin lähettävän anonyymejä raportteja asetuksistasi, tilaajien määrästä listoilla ja ajasta joka kului viestien lähettämiseen. Tämä antaa meille käsityksen jNewsin suorituskyvystä ja auttaa meitä parantamaan jNewsia tulevassa kehitystyössä.');
define('_JNEWS_SEND_AUTO_LOG', 'Lähetä loki automaattivastaajista');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Valitse Kyllä jos haluat lähettää sähköpostilokin joka kerta kun jono on käsitelty.  VAROITUS: tämä voi johtaa suureen viestimäärään.');
define('_JNEWS_SEND_LOG', 'Lähetysloki');
define('_JNEWS_SEND_LOG_TIPS', 'Pitäisikö lähetyksestä lähettää loki lähetyksen lähettäneen käyttäjän sähköpostiosoitteeseen.');
define('_JNEWS_SEND_LOGDETAIL', 'Yksityiskohtainen lähetysloki');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Yksityiskohtainen loki sisältää onnistumis-/epäonnistumistiedon jokaisesta tilaajasta ja katsauksen tietoon. Yksinkertainen lähettää vain katsauksen.');
define('_JNEWS_SEND_LOGCLOSED', 'Lähetä loki jos yhteys katkeaa');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Tällä asetuksella käyttäjä joka teki postituksen saa silti raportin sähköpostitse.');
define('_JNEWS_SAVE_LOG', 'Tallenna loki');
define('_JNEWS_SAVE_LOG_TIPS', 'Pitäisikö lähetysloki lisätä lokitiedoston loppuun.');
define('_JNEWS_SAVE_LOGDETAIL', 'Tallenna yksityiskohtainen loki');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Yksityiskohtainen loki sisältää onnistumis-/epäonnistumistiedon jokaisesta tilaajasta ja katsauksen tietoon. Yksinkertainen tallentaa vain katsauksen.');
define('_JNEWS_SAVE_LOGFILE', 'Tallenna lokitiedosto');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Tiedosto johon lokitieto liitetään. Tämä tiedosto voi kasvaa aika suureksi.');
define('_JNEWS_CLEAR_LOG', 'Tyhjennä loki');
define('_JNEWS_CLEAR_LOG_TIPS', 'Tyhjentää lokitiedoston.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Viimeinen käsitelty jono');
define('_JNEWS_CP_TOTAL', 'Kokonaissumma');
define('_JNEWS_MAILING_COPY', 'Postitus onnistuneesti kopioitu!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Näytä opas');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Näytä opas alussa jotta uusien käyttäjien on helppo luoda uutiskirje, automaattivastaaja ja tehdä jNews asetukset oikein.');
define('_JNEWS_AUTOS_ON', 'Käytä automaattivastaajia');
define('_JNEWS_AUTOS_ON_TIPS', 'Valitse Ei jos et halua käyttää automaattivastaajia, kaikki automaattivastaaja-asetukset deaktivoidaan.');
define('_JNEWS_NEWS_ON', 'Käytä uutiskirjeitä');
define('_JNEWS_NEWS_ON_TIPS', 'Valitse Ei jos et halua käyttää uutiskirjeitä, kaikki uutiskirjeasetukset deaktivoidaan.');
define('_JNEWS_SHOW_TIPS', 'Näytä vihjeet');
define('_JNEWS_SHOW_TIPS_TIPS', 'Näytä vihjeet, jotta käyttäjät osaisivat käyttää jNewsia tehokkaammin.');
define('_JNEWS_SHOW_FOOTER', 'Näytä alatunniste');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Pitäisikö tekijänoikeustiedotealatunniste näyttää.');
define('_JNEWS_SHOW_LISTS', 'Näytä listat julkisessa liittymässä');
define('_JNEWS_SHOW_LISTS_TIPS', 'Kun käyttäjä ei ole rekisteröitynyt näytä lista listoista jotka he voivat tilata ja nappi uutiskirjeen arkistoon vai pelkästään kirjautumislomake rekisteröitymistä varten.');
define('_JNEWS_CONFIG_UPDATED', 'Asetukset on päivitetty!');
define('_JNEWS_UPDATE_URL', 'Päivitys URL');
define('_JNEWS_UPDATE_URL_WARNING', 'VAROITUS! Älä muuta tätä URL-osoitetta ellei jNewsin tekninen tiimi ole sinun niin kehottanut tekemään.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Esim.: http://www.joobi.co/update/ (sisällytä lopun kauttaviiva)');

// module
define('_JNEWS_EMAIL_INVALID', 'Antamasi sähköpostiosoite ei ole toimiva.');
define('_JNEWS_REGISTER_REQUIRED', 'Sinun täytyy rekisteröityä sivustolle ennen kuin voit tilata listoja.');

// Access level box
define('_JNEWS_OWNER', 'Listan luoja:');
define('_JNEWS_ACCESS_LEVEL', 'Aseta listan käyttöoikeustaso');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Käyttöoikeusasetukset');
define('_JNEWS_USER_LEVEL_EDIT', 'Valitse mikä käyttäjäryhmä voi muokata postitusta (julkisesta tai ylläpitoliittymästä) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Päivittäin');
define('_JNEWS_AUTO_DAY_CH2', 'Päivittäin, ei viikonloppuisin');
define('_JNEWS_AUTO_DAY_CH3', 'Joka toinen päivä');
define('_JNEWS_AUTO_DAY_CH4', 'Joka toinen päivä, ei viikonloppuisin');
define('_JNEWS_AUTO_DAY_CH5', 'Viikoittain');
define('_JNEWS_AUTO_DAY_CH6', 'Joka toinen viikko');
define('_JNEWS_AUTO_DAY_CH7', 'Kuukausittain');
define('_JNEWS_AUTO_DAY_CH9', 'Vuosittain');
define('_JNEWS_AUTO_OPTION_NONE', 'Ei');
define('_JNEWS_AUTO_OPTION_NEW', 'Uudet käyttäjät');
define('_JNEWS_AUTO_OPTION_ALL', 'Kaikki käyttäjät');

//
define('_JNEWS_UNSUB_MESSAGE', 'Peruuta tilaus');
define('_JNEWS_UNSUB_SETTINGS', 'Peruutuksen asetukset');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Lisää käyttäjät automaattisesti?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Päivityksiä ei ole saatavilla.');
define('_JNEWS_VERSION', 'jNews versio');
define('_JNEWS_NEED_UPDATED', 'Tiedostot jotka tulee päivittää:');
define('_JNEWS_NEED_ADDED', 'Tiedostot jotka tulee lisätä:');
define('_JNEWS_NEED_REMOVED', 'Tiedostot jotka tulee poistaa:');
define('_JNEWS_FILENAME', 'Tiedostonimi:');
define('_JNEWS_CURRENT_VERSION', 'Nykyinen versio:');
define('_JNEWS_NEWEST_VERSION', 'Uusin versio:');
define('_JNEWS_UPDATING', 'Päivittää');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Tiedostot on päivitetty onnistuneesti.');
define('_JNEWS_UPDATE_FAILED', 'Päivitys epäonnistui!');
define('_JNEWS_ADDING', 'Lisää');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Lisätty onnistuneesti.');
define('_JNEWS_ADDING_FAILED', 'Lisäys epäonnistui!');
define('_JNEWS_REMOVING', 'Poistaa');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Poistettu onnistuneesti.');
define('_JNEWS_REMOVING_FAILED', 'Poistaminen epäonnistui!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Asenna toinen versio');
define('_JNEWS_CONTENT_ADD', 'Lisää sisältöä');
define('_JNEWS_UPGRADE_FROM', 'Tuo tietoja (uutiskirjeiden ja tilaajien tietoja) ');
define('_JNEWS_UPGRADE_MESS', 'Olemassa oleva datasi ei ole vaarassa. <br /> Tämä prosessi vain tuo uuden tiedon jNews tietokantaan.');
define('_JNEWS_CONTINUE_SENDING', 'Jatka lähetystä');

// jNews message
define('_JNEWS_UPGRADE1', 'Voit helposti tuoda käyttäjiä ja uutiskirjeitä ');
define('_JNEWS_UPGRADE2', ' jNewsiin päivityspaneelissa.');
define('_JNEWS_UPDATE_MESSAGE', 'Uusi versio saatavilla! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Napsauta tästä päivittääksesi!');
define('_JNEWS_THANKYOU', 'Kiitos kun valitsit jNewsin, Your communication partner!');
define('_JNEWS_NO_SERVER', 'Päivityspalvelin saavuttamattomissa, yritä myöhemmin uudelleen.');
define('_JNEWS_MOD_PUB', 'jNews modullia ei ole julkaistu.');
define('_JNEWS_MOD_PUB_LINK', 'Napsauta tästä julkaistaksesi sen!');
define('_JNEWS_IMPORT_SUCCESS', 'onnistuneesti tuotu');
define('_JNEWS_IMPORT_EXIST', 'tilaaja on jo tietokannassa');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews asetukset');
define('_JNEWS_INSTALL_SUCCESS', 'Asennus onnistui');
define('_JNEWS_INSTALL_ERROR', 'Asennuksessa tapahtui virhe');
define('_JNEWS_INSTALL_BOT', 'jNews liitännäinen (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews modulli');
//Others
define('_JNEWS_JAVASCRIPT','!Varoitus! Javascriptin täytyy olla käytettävissä jotta komponentti toimisi oikein.');
define('_JNEWS_EXPORT_TEXT','Tilaajien vienti perustuu valitsemaasi listaan. <br />Vie tilaajat listalta');
define('_JNEWS_IMPORT_TIPS','Tuo tilaajat. Tiedon tiedostossa pitää olla seuraavaa muotoa: <br />' .
		'Nimi,sähköpostiosoite,vastaanotaHTML(1/0),<span style="color: rgb(255, 0, 0);">vahvistettu(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'on jo tilaaja');
define('_JNEWS_GET_STARTED', 'Napsauta tästä päästäksesi alkuun!');

//News since 1.0.1
define('_JNEWS_WARNING_1011','Varoitus: 1011: Päivitys ei toimi palvelimesi rajoituksista johtuen.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Anna lähettäjän osoitteena näkyvä sähköpostiosoite.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Anna lähettäjä nimenä näkyvä nimi.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Valitse käytettävä postitusohjelma: PHP mail function, <span>Sendmail</span> or SMTP palvelin.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Tämä on postipalvelimen polku');
define('_JNEWS_LIST_T_TEMPLATE', 'Mallipohja');
define('_JNEWS_NO_MAILING_ENTERED', 'Ei postitusta valittuna');
define('_JNEWS_NO_LIST_ENTERED', 'Ei listaa valittuna');
define('_JNEWS_SENT_MAILING' , 'Lähetä postitus');
define('_JNEWS_SELECT_FILE', 'Valitse tiedosto ');
define('_JNEWS_LIST_IMPORT', 'Valitse lista(t) joihin haluat tilaajat liittää.');
define('_JNEWS_PB_QUEUE', 'Tilaaja lisätty, mutta ongelmia hänen liittämisessään listaan/listoihin. Ole hyvä ja tarkasta manuaalisesti.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Päivitystä suositellaan vakavasti!');
define('_JNEWS_UPDATE_MESS2' , 'Paikkaus ja pieniä korjauksia.');
define('_JNEWS_UPDATE_MESS3' , 'Uusi julkaisu.');
define('_JNEWS_UPDATE_MESS5' , 'Päivitys toimii vain Joomla 1.5\:ssä.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' on saatavilla!');
define('_JNEWS_NO_MAILING_SENT', 'Postitus ei lähetetty!');
define('_JNEWS_SHOW_LOGIN', 'Näytä kirjautumislomake');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Valitse Kyllä jos haluat näyttää kirjautumislomakkeen jNewsin julkisen liittymän ohjauspaneelissa jotta käyttäjät voivat rekisteröityä sivustolle.');
define('_JNEWS_LISTS_EDITOR', 'Listan kuvauksen muokkain');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Valitse Kyllä käyttääksesi HTML-muokkainta listan kuvaus kentän muokkaamiseen.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Katso tilaajia');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Julkisen liittymän asetukset' );
define('_JNEWS_SHOW_LOGOUT', 'Näytä kirjaudu ulos nappula');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Valitse kyllä näyttääksesi kirjaudu ulos nappula jNewsin julkisen liittymän ohjauspaneelissa.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integrointi');
define('_JNEWS_CB_INTEGRATION', 'Community Builder Integrointi');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder liitännäinen (jNews Integrointi) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews liitännäistä Community Builderille ei ole asennettu!');
define('_JNEWS_CB_PLUGIN', 'Listat rekisteröityessä');
define('_JNEWS_CB_PLUGIN_TIPS', 'Valitse Kyllä näyttääksesi listat Community Builderin rekisteröitymislomakkeella');
define('_JNEWS_CB_LISTS', 'Listojen ID\:t');
define('_JNEWS_CB_LISTS_TIPS', 'TÄMÄ ON PAKOLLINEN KENTTÄ. Anna niiden listojen ID-numerot pilkulla erotettuna, joiden haluat olevan käyttäjien tilattavissa ,  (0 tarkoittaa näytä kaikki)');
define('_JNEWS_CB_INTRO', 'Esittelyteksti');
define('_JNEWS_CB_INTRO_TIPS', 'Teksti joka näytetään ennen listausta. JÄTÄ TYHJÄKSI JÄTTÄÄKSESI NÄYTTÄMÄTTÄ.  Voit käyttää HTML-merkintää muokataksesi ulkonäköä.');
define('_JNEWS_CB_SHOW_NAME', 'Näytä listan nimi');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Valitse näytetäänkö listan nimi esittelytekstin jälkeen.');
define('_JNEWS_CB_LIST_DEFAULT', 'Lista oletusarvoisesti valittuna');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Valitse haluatko listojen ruutujen olevan oletusarvoisesti rastittuna.');
define('_JNEWS_CB_HTML_SHOW', 'Näytä tilaa HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Valitse Kyllä antaaksesi käyttäjien valita haluavatko he vastaanottaa HTML-muotoiltuja viestejä. Valitse Ei pakottaakseni vastaanottamaan HTML-viestejä.');
define('_JNEWS_CB_HTML_DEFAULT', 'Oletuksena HTML-muotoilu');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Valitse tämä vaihtoehto asettaaksesi HTML-muodon oletukseksi. Jos Näytä tilaa HTML on asetettu arvoon Ei, tämä vaihtoehto on oletusarvo.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Tiedostoa ei voitu varmistaa! Tiedostoa ei korvattu.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Tiedostojen vanhat versiot on varmistettu seuraavaan hakemistoon:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Palvelimen paikallinen aika');
define('_JNEWS_SHOW_ARCHIVE', 'Näytä Arkisto nappi');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Valitse Kyllä näyttääksesi Arkisto napin julkisen liittymän uutiskirje listauksessa');
define('_JNEWS_LIST_OPT_TAG', 'Merkinnät');
define('_JNEWS_LIST_OPT_IMG', 'Kuvat');
define('_JNEWS_LIST_OPT_CTT', 'Sisältö');
define('_JNEWS_INPUT_NAME_TIPS', 'Anna kokonimesi (etunimi ensin)');
define('_JNEWS_INPUT_EMAIL_TIPS', 'Anna sähköpostiosoitteesi (Varmista että osoite on toimiva vastaanottaaksesi viestimme.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Valitse kyllä vastaanottaaksesi HTML-muotoiltuja viestejä - Ei saadaksesi viestit vain tekstimuodossa');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Valitse aikavyöhykkeesi.');

// Since 1.0.5
define('_JNEWS_FILES' , 'Tiedostot');
define('_JNEWS_FILES_UPLOAD' , 'Lataa palvelimelle');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Lataa kuvat palvelimelle');
define('_JNEWS_TOO_LARGE' , 'Tiedosto on liian suuri. Suurin sallittu koko on');
define('_JNEWS_MISSING_DIR' , 'Kohdehakemistoa ei ole olemassa');
define('_JNEWS_IS_NOT_DIR' , 'Kohdehakemistoa ei ole olemassa tai se on tiedosto.');
define('_JNEWS_NO_WRITE_PERMS' , 'Kohdehakemistoon ei ole annettu kirjoitusoikeuksia.');
define('_JNEWS_NO_USER_FILE' , 'Et valinnut yhtään tiedostoa ladattavaksi.');
define('_JNEWS_E_FAIL_MOVE' , 'Tiedostoa on mahdoton siirtää.');
define('_JNEWS_FILE_EXISTS' , 'Kohdetiedosto on jo olemassa.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Kohdetiedosto on jo olemassa tai sitä ei voitu korvata.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Tiedostopääte ei ole sallittu.');
define('_JNEWS_PARTIAL' , 'Tiedosto ladattiin vain osittain.');
define('_JNEWS_UPLOAD_ERROR' , 'Latausvirhe:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Tiedosto ladattiin vain osittain.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Tämä korvataan tilauslinkeillä.' .
		' Tämä on <strong>pakollinen</strong> jotta jNews toimisi oikein.<br />' .
		'Jos sisällytät tähän kenttään mitään muuta sisältöä se näytetään kaikissa tämän listan postituksissa.' .
		' <br />Lisää tilausviestisi loppuun.  jNews lisää automaattisesti linkin tilaajalle tietojensa muuttamiseen ja tilauksen peruuttamiseen.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Huomautus');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Huomautukset');
define('_JNEWS_USE_SEF', 'SEF sähköpostiviesteissä');
define('_JNEWS_USE_SEF_TIPS', 'Asetusta Ei suositellaan.  Jos kuitenkin haluat että viesteihin sisällytetyt URL:t ovat SEF muotoiltuja valitse Kyllä.' .
		' <br /><b>Linkit toimivat samalla tavalla molemmissa tapauksissa.  Valinta Ei turvaa sen, että linkit toimivat aina vaikka muuttaisitkin SEFiä.</b> ');
define('_JNEWS_ERR_NB' , 'Virhe #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Virheiden käsittelyn asetukset');
define('_JNEWS_ERR_SEND' ,'Lähetä virheraportti');
define('_JNEWS_ERR_SEND_TIPS' ,'Jos haluat jNewsin parantuvan tuotteena valitse KYLLÄ.  Tämä lähettää meille virheraportin.  Joten sinun ei tarvitse erikseen raportoida bugejakaan ;-) <br /> <b>YKSITYISIÄ TIETOJA EI LÄHETETÄ</b>.  Emme edes tiedä miltä sivustolta virhe tulee. Lähetämme tiedot vain jNewsin, PHP:n ja SQL:n asetuksista. ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Valitse Kyllä näyttääkseni virhekoodin näytöllä.  Käytetään virheenkorjaamiseen. ');
define('_JNEWS_ERR_SHOW' ,'Näytä virheet');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Näytä peruuta tilaus linkit');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Valitse Kyllä jos haluat näyttää tilauksen peruuttamis linkit postitusten pohjalla jotta käyttäjät voivat helposti muuttaa tilaustaan. <br /> Ei poistaa linkit käytöstä.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">TÄRKEÄ HUOMAUTUS!</span> <br />Jos olet päivittämässä aiemmasta jNews versiosta sinun täytyy päivittää tietokantataulujesi rakenne napsauttamalal seuraavaa nappia (tietojesi eheyden säilyminen on turvattu)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Päivitä taulut ja asetukset');
define('_JNEWS_MAILING_MAX_TIME', 'Jonon enimmäisaika' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Määrittele enimmäisaika sähköpostitusjonon käsittelylle. Suositellaan pidettäväksi 30 sekunnin ja 2 minuutin välillä.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integraatio');
define('_JNEWS_VM_COUPON_NOTIF', 'Kuponki-ilmoituksen ID');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Määrittele sen postituksen ID numero, jonka mukana haluat lähettää kuponkeja asiakkaillesi.');
define('_JNEWS_VM_NEW_PRODUCT', 'Uutuustuoteilmoitusten ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Valitse sen postituksen ID numero, jonka mukana haluat ilmoittaa uutuustuotteista.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Luo lomake');
define('_JNEWS_FORM_COPY', 'HTML koodi');
define('_JNEWS_FORM_COPY_TIPS', 'Kopioi luotu HTML koodi HTML sivullesi.');
define('_JNEWS_FORM_LIST_TIPS', 'Valitse lista jonka haluat sisällyttää lomakkeeseen');
// update messages
define('_JNEWS_UPDATE_MESS4' , 'Ei voida päivittää automaattisesti.');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Ei keinoa hakea etätiedostoa.');
define('_JNEWS_ERROR_FETCH' , 'Virhe tiedostoa noudettaessa.');

define('_JNEWS_CHECK' , 'Tarkasta');
define('_JNEWS_MORE_INFO' , 'Lisätietoja');
define('_JNEWS_UPDATE_NEW' , 'Päivitä uudempaan versioon');
define('_JNEWS_UPGRADE' , 'Päivitä korkeampaan tuotteeseen');
define('_JNEWS_DOWNDATE' , 'Palaa aiempaan versioon');
define('_JNEWS_DOWNGRADE' , 'Palaa perustuotteeseen');
define('_JNEWS_REQUIRE_JOOM' , 'Edellytä Joomlaa');
define('_JNEWS_TRY_IT' , 'Kokeile!');
define('_JNEWS_NEWER', 'Uudempi');
define('_JNEWS_OLDER', 'Vanhempi');
define('_JNEWS_CURRENT', 'Nykyinen');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Kokeile yhtä muista komponenteista');
define('_JNEWS_MENU_VIDEO' , 'Video-oppaat');
define('_JNEWS_SCHEDULE_TITLE', 'Automaattinen aikatauludunktion asetus');
define('_JNEWS_ISSUE_NB_TIPS' , 'Numero luotu automaattisesti järjestelmässä' );
define('_JNEWS_SEL_ALL' , 'Kaikki postitukset');
define('_JNEWS_SEL_ALL_SUB' , 'Kaikki listat');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Jos valitset tämän kohdan vain artikkelin ingressi sisällytetään positukseen sivustollesi johtavan Lue lisää -linkin kera.' );
define('_JNEWS_TAGS_TITLE' , 'Sisällön paikan merkki');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Kopioi ja liitä tämä merkintä postitukseen siihen kohtaan johon haluat sisällön sijoitettavan.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Anna sähköpostiosoite johon koeviesti lähetetään');
define('_JNEWS_PREVIEW_TITLE' , 'Esikatselu');
define('_JNEWS_AUTO_UPDATE' , 'Päivitysten ilmoitin');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Valitse kyllä jos haluat ilmoituksen uusista päivityksistä komponenttiisi. <br />TÄRKEÄÄ!! Vihjeiden näyttämisen tulee olla päällä jotta tämä toimisi.');

// since 1.1.0
define('_JNEWS_LICENSE' , 'Lisenssin tiedot');

// since 1.1.1
define('_JNEWS_NEW' , 'Uusi');
define('_JNEWS_SCHEDULE_SETUP', 'Jotta automaattivastaajat lähetettäisiin sinun pitää luoda aikataulu asetuksissa.');
define('_JNEWS_SCHEDULER', 'Ajastin');
define('_JNEWS_jnews_CRON_DESC' , 'jos sinulla ei ole pääsyä cron tehtävien hallintaan palvelimellasi, voit rekisteröityä ilmaisen jNews cron tilin käyttäjäksi osoitteessa:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Löydät lisätietoja jNews Ajastimen käytöstä seuraavasta osoitteesta:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Jono käsitelty onnistuneesti...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Virhe tuodun tiedoston siirrossa' );

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Ajastimen taajuus' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Ajastimen enimmäistaajuus' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Aseta enimmäistaajuus jolla ajastin voi käydä ( minuuteissa ).  Tämä rajoittaa ajastimen toimintaa vaikka cron tehtävä olisikin ajastettu taajemmalle.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Tehtävän enimmäisviestimäärä' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Aseta enimmäismäärä yhden tehtävän sähköpostiviesteille. If this is set to O the maximim emails per task will be 1' );
define( '_JNEWS_CRON_MINUTES' , ' minuuttia' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Näytä viestin alatunniste' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Haluatko mainostaa jNewsia viestien alatunnisteessa.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Automaattivastaajat käsitelty onnistuneesti...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Ajastetut uutiskirjeet käsitelty onnistuneesti...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Synkronoi käyttäjät' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Käyttäjien synkronointi onnistui!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kirjaudu ulos' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Kyllä' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Ei' );
if (!defined('_HI')) define( '_HI', 'Hei' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Ylös' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Alas' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Jos valitset tämän kohdan vain artikkelin otsikko liitetään positukseen linkkinä artikkeliin sivustollasi.');
define('_JNEWS_TITLE_ONLY' , 'Vain otsikko');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Jos valitset tämän kohdan koko artikkeli sisällytetään postitukseen');
define('_JNEWS_FULL_ARTICLE' , 'Koko artikkeli');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Valitse nimike lisättäväksi viestiin. <br />Kopioi ja liitä <b>sisällön paikanmerkki</b> postitukseen.  Voit valita koko artikkelin, vain ingressin tai vain otsikon numerolla (0, 1, tai 2 järjestyksessä). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Postituslista(t)');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sort by: ');
define('_JNEWS_SORT_DATE' , 'Date');
define('_JNEWS_SORT_DATE_TIPS' , 'If you select this, the contents will be sorted according to date created');
define('_JNEWS_SORT_SECTION' , 'Section');
define('_JNEWS_SORT_SECTION_TIPS' , 'If you select this, the contents will be sorted according to its section');
define('_JNEWS_SORT_CATEGORY' , 'Category');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'If you select this, the contents will be sorted according to its category');
define('_JNEWS_SORT_BUTTON' , 'Sort');


// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Äly-uutiskirje');
define('_JNEWS_MENU_AUTONEWS', 'Äly-uutiskirjeet');
define('_JNEWS_AUTO_NEWS_OPTION', 'Äly-uutiskirjeiden asetukset');
define('_JNEWS_AUTONEWS_FREQ', 'Uutiskirjeen taajuus');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Aseta taajuus jolla haluat lähettää äly-uutiskirjeen.');
define('_JNEWS_AUTONEWS_SECTION', 'Artikkelien pääryhmä');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Aseta pääryhmä josta haluat artikkelit valita.');
define('_JNEWS_AUTONEWS_CAT', 'Artikkelien ryhmä');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Aseta ryhmä josta haluat artikkelit valita (Kaikki tarkoittaa kaikkia pääryhmän artikkeleita).');
define('_JNEWS_SELECT_SECTION', 'Valitse pääryhmä');
define('_JNEWS_SELECT_CAT', 'Kaikki ryhmät');
define('_JNEWS_AUTO_DAY_CH8', 'Neljännesvuosittain');
define('_JNEWS_AUTONEWS_STARTDATE', 'Aloituspäivämäärä');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Valitse päivämäärä jolloin haluat aloittaa äly-uutiskirjeen lähetykset.');
define('_JNEWS_AUTONEWS_TYPE', 'Sisällön käsittely');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Koko artikkeli: sisällyttää koko artikkelin uutiskirjeeseen.<br />' .
		'Vain ingressi: sisällyttää vain artikkelin ingressin uutiskirjeeseen.<br/>' .
		'Vain otsikko: sisällyttää vain artikkelin otsikon uutiskirjeeseen.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Tämä korvataan äly-uutiskirjeellä.' );

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Luo / Katso postituksia');
define('_JNEWS_LICENSE_CONFIG' , 'Lisenssi' );
define('_JNEWS_ENTER_LICENSE' , 'Anna lisenssinumero');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Anna lisenssinumerosi ja tallenna se.');
define('_JNEWS_LICENSE_SETTING' , 'Lisenssiasetukset' );
define('_JNEWS_GOOD_LIC' , 'Lisenssisi on voimassa.' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Lisenssisi ei ole voimassa: ' );
define('_JNEWS_PLEASE_LIC' , 'Ole hyvä ja ota yhteyttä jNews tukeen päivittääksesi lisenssisi ( license@joobi.co ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus on ensimmäinen jatkuva automaattivastaaja Joomla julkaisujärjestelmälle.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO on paras postitusjärjestelmä Joomla julkaisujärjestelmälle.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Anna poletti');

define('_JNEWS_ENTER_TOKEN_TIPS' , 'Anna polettinumerosi (token) jonka sait jNewsin hankkiessasi. ');

define('_JNEWS_jnews_SITE', 'jNews sivusto:');
define('_JNEWS_MY_SITE', 'Minun sivustoni:');

define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Napsauta tästä mennäksesi lisenssilomakkeelle.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Tyhjennä lisenssikenttä ja yritä uudelleen.<br />  Jos ongelma jatkuu, ' );

define( '_JNEWS_LICENSE_SUPPORT' , 'Jos sinulla on vielä kysyttävää, ' . _JNEWS_PLEASE_LIC );

define( '_JNEWS_LICENSE_TWO' , 'voit hankkia lisenssin manuaalisesti antamalla polettinumerosi ja sivuston URL-osoitteen (joka on merkitty vihreällä sivun ylälaidassa) lisenssilomakkeeseen. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Poletin tallentamisen jälkeen lisenssi luodaan automaattisesti. ' .
		' Tavallisesi poletti varmistetaan parissa minuutissa.  Joissain tapauksissa se voi kuitenkin kestää jopa 15 minuuttia.<br />' .
		'<br />Tarkasta tämä ohjauspaneeli uudelleen muutaman minuutin kuluttua.  <br /><br />' .
		'Jos et saa kelvollista lisenssiavainta 15 minuutissa, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET' , 'Polettiasi ei ole vielä varmistettu.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Ole hyvä ja käy <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> ladataksesi uusimman version.');
define( '_JNEWS_NOTIF_UPDATE' , 'Saadaksesi ilmoituksen uusista päivityksistä, anna sähköpostiosoitteesi ja napsauta tilaa ');

define('_JNEWS_THINK_PLUS', 'Jos haluat enemmän postitusjärjestelmältäsi ajattele Plus!');
define('_JNEWS_THINK_PLUS_1', 'Jatkuvat automaatilähetykset');
define('_JNEWS_THINK_PLUS_2', 'Ajasta uutiskirjeesi toimitus ennalta määrätylle päivälle');
define('_JNEWS_THINK_PLUS_3', 'Ei enää palvelin rajoituksia');
define('_JNEWS_THINK_PLUS_4', 'ja paljon muuta...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Listan käyttöoikeudet' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Aseta käyttäjäryhmä jolla on oikeus nähdä ja tilata lista' );
define( 'JNEWS_NO_LIST_PERM', 'Sinulla ei ole riittäviä oikeuksia tämän listan tilaamiseen' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arkisto');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Arkistoi kaikki');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Ei ollenkaan');
 define('_JNEWS_FREQ_OPT_1', 'Joka viikko');
 define('_JNEWS_FREQ_OPT_2', 'Joka toinen viikko');
 define('_JNEWS_FREQ_OPT_3', 'Joka kuukausi');
 define('_JNEWS_FREQ_OPT_4', 'Neljännesvuosittain');
 define('_JNEWS_FREQ_OPT_5', 'Vuosittain');
 define('_JNEWS_FREQ_OPT_6', 'Muu');

define('_JNEWS_DATE_OPT_1', 'Luontipäivä');
define('_JNEWS_DATE_OPT_2', 'Muokkauspäivä');

define('_JNEWS_ARCHIVE_TITLE', 'Automaattisen arkistoinnin taajuusasetukset');
define('_JNEWS_FREQ_TITLE', 'Arkistointitaajuus');
define('_JNEWS_FREQ_TOOL', 'Määrittele miten usein haluat Arkistoinnin hallinan arkistoivan sisältösi.');
define('_JNEWS_NB_DAYS', 'Päivien määrä');
define('_JNEWS_NB_DAYS_TOOL', 'Tämä on vain Muu vaihtoehtoa varten! Ole hyvä ja anna päivien määrä arkistointien välissä.');
define('_JNEWS_DATE_TITLE', 'Päiväyksen valinta');
define('_JNEWS_DATE_TOOL', 'Valitse arkistoidaanko luonti- vai muokkauspäivämäärän mukaan.');

define('_JNEWS_MAINTENANCE_TAB', 'Ylläpidon asetukset');
define('_JNEWS_MAINTENANCE_FREQ', 'Ylläpidon taajuus');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Määrittelen miten usein haluat ylläpitorutiinin tapahtuvan.' );
define( '_JNEWS_CRON_DAYS' , 'tunti(a)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'Ei listaa käytettävissä.');
define( '_JNEWS_LIST_ADD_TAB', 'Luo/Muokkaa' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Postituksen luonti/muokkausoikeudet' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Aseta käyttäjäryhmä jolla on oikeus luoda ja muokata postituksia' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Luo uusi postitus' );

define('_JNEWS_AUTO_ARCHIVE', 'Automaattinen arkistointi');
define('_JNEWS_MENU_ARCHIVE', 'Automaattinen arkistointi');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Tämä korvataan uutiskirjeen numerolla.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Tämä korvataan lähetyspäivällä.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Tämä korvataan arvolla joka otetaan Community Builderin kentästä esim. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Ylläpito' );

define('_JNEWS_THINK_PRO', 'Kun sinulla on ammattimaisia tarpeita, käytä ammattimaisia komponentteja!');
define('_JNEWS_THINK_PRO_1', 'Äly-uutiskirjeet');
define('_JNEWS_THINK_PRO_2', 'Aseta käyttöoikeustaso listallesi');
define('_JNEWS_THINK_PRO_3', 'Määrittele kuka voi luoda ja muokata postituksia');
define('_JNEWS_THINK_PRO_4', 'Lisää merkintöjä: lisää CB kenttiä');
define('_JNEWS_THINK_PRO_5', 'Joomla sisältöjen automaattinen arkistointi');
define('_JNEWS_THINK_PRO_6', 'Tietokannan optimointi');

define('_JNEWS_LIC_NOT_YET', 'Your license is not yet valid.  Please check the license Tab in the configuration panel.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Make sure to provide the green information at the top of the tab to our support team.' );

define('_JNEWS_FOLLOW_LINK' , 'Hanki lisenssi');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'Voit noutaa lisenssisi antamalla polettinumerosi ja sivustosi URL-osoitteen (joka on merkitty vihreällä sivun yläosassa) lisenssilomakkeeseen. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Napsauta sitten Käytä nappia sivun oikeassa yläkulmassa.' );
define( '_JNEWS_ENTER_LIC_NB', 'Anna lisenssinumero' );
define( '_JNEWS_UPGRADE_LICENSE', 'Päivitä lisenssisi');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'Jos sait poletin lisenssin päivittämistä varten täytä se tähän ja napsauta sitten Käytä ja siirry numeroon <b>2</b> saadaksesi uuden lisenssinumeron.' );

define( '_JNEWS_MAIL_FORMAT', 'Merkistökoodaus' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Mitä merkistökoodausta haluat käyttää postituksissasi, pelkkää tekstiä vai MIME:a' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Jos sinulla ei ole pääsyä cron tehtävien hallintaan palvelimellasi voit käyttää ilmaista jCron komponenttia luodaksesi cron tehtävän sivustollesi.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Näytä kirjoittajan nimi');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Valitse Kyllä jos haluat listä kirjoittajan nimen kun lisäät artikkelin postitukseesi');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Ole hyvä ja anna nimesi.');
define('_JNEWS_REGWARN_MAIL','Ole hyvä ja anna kelvollinen sähköpostiosoite.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','Jos valitset Kyllä, käyttäjän sähköpostisoite lisätään parametriksi uudelleenohjaus-URL:n (uudelleenohjaus linkki modulliisi tai ulkoiseen jNews lomakkeeseen) loppuun.<br/>Se voi olla hyödyllistä jos haluat suorittaa erityisen skriptin uudelleenohjaussivulla.');
define('_JNEWS_ADDEMAILREDLINK','Lisää sähköposti uudelleenohjaukseen');

//since 1.6.3
define('_JNEWS_ITEMID','ItemId');
define('_JNEWS_ITEMID_TIPS','Tämä ItemId lisätään jNews linkkeihisi.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Näytä integraatio välilehti jCalPRO:lle <br/>(vain jos jCalPRO asennettuna sivustollesi!)');
define('_JNEWS_JCALTAGS_TITLE','jCalPRO merkintä:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Kopioi ja liitä tämä merkintä postitukseesi siihen kohtaan johon haluat tapahtumen lisättävän.');
define('_JNEWS_JCALTAGS_DESC','Kuvaus:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Valitse Kyllä jos haluat lisätä tapahtuman kuvauksen');
define('_JNEWS_JCALTAGS_START','Alkupäivä:');
define('_JNEWS_JCALTAGS_START_TIPS','Valitse Kyllä jos haluat lisätä tapahtuman alkupäivämäärän');
define('_JNEWS_JCALTAGS_READMORE','Lue lisää:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Valitse Kyllä jos haluat lisätä <b>Lue lisää -linkin</b> tälle tapahtumalle');
define('_JNEWS_REDIRECTCONFIRMATION','Uudelleenohjaus URL');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','Jos vaadit vahvistuksen sähköpostiosoitteelle, sähköpostiosoite vahvistetaan ja käyttäjä ohjataan uudelleen tähän URL-osoitteeseen jos hän napsauttaa vahvistuslinkkiä.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Tallenna');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Ei vielä tunnusta?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Rekisteröidy');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Sinulla ei ole käyttöoikeutta tähän sivuun.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Poista vihjeet käytöstä');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Poista vihjeet käytöstä julkisessa liittymässä');
define('_JNEWS_MINISENDMAIL', 'Käytä Mini SendMailia');
define('_JNEWS_MINISENDMAIL_TIPS', 'Jos palvelimesi käyttää Mini SendMailia, valitse tämä vaihtoehto jotta käyttäjän nimeä ei lisätä sähköpostin otsikkotietoihin');

//Since 3.1.5
define('_JNEWS_READMORE','Lue lisää...');
define('_JNEWS_VIEWARCHIVE','Napsauta tätä');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Link Tracking');
define('_JNEWS_SHOW_JLINKS_TIPS','Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Mail encoding' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'What encoding format do you want to use UTF-8 (highly recommended) or ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Copy Subject' );

//since 5.0.0
//fieldset for column configuration
define('_JNEWS_COLUMN','User-defined Columns');
define('_JNEWS_COL1_NAME', 'Column 1 Name');
define('_JNEWS_COL2_NAME', 'Column 2 Name');
define('_JNEWS_COL3_NAME', 'Column 3 Name');
define('_JNEWS_COL4_NAME', 'Column 4 Name');
define('_JNEWS_COL5_NAME', 'Column 5 Name');
define('_JNEWS_COLUMN1_REP', '{tag:profile nb=1} = This will be replaced by your user defined column 1');
define('_JNEWS_COLUMN2_REP', '{tag:profile nb=2} = This will be replaced by your user defined column 2');
define('_JNEWS_COLUMN3_REP', '{tag:profile nb=3} = This will be replaced by your user defined column 3');
define('_JNEWS_COLUMN4_REP', '{tag:profile nb=4} = This will be replaced by your user defined column 4');
define('_JNEWS_COLUMN5_REP', '{tag:profile nb=5} = This will be replaced by your user defined column 5');
//end of columns
//url
define('_JNEWS_URL_PASS','Password');
define('_JNEWS_URL_PASS_TIPS','Enter the password to be able to add a subscriber by entering the url. Append the catcher variable password in the URL.<br>(For Plus and PRO this code will used for captcha.)');
define('_JNEWS_URL_MES','Please subscribe through the Subscriber Module or subscribe through the frontend.');
define('_JNEWS_URL_PASS_WARN','(In the PRO If you change this password, please update the hidden password in your external form as well.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Enable Captcha');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Enable captcha functionality in the subscriber module and in the subscription via external form in the PRO.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Send Subscription Notification');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Specify here if you want to send a subscription notification to the list owner or not.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','A subscription notification email has been sent to the administrator.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','No subscription notification email sent.');
define('_JNEWS_NEW_SUB','jNews Newsletter Subscription');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Unable in sending a subscription notification to the administrator.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','Code: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>CAPTCHA security code is incorrect or the information you provided are invalid.</b><br>(The security code is necessary to prevent automatic registrations by bots and to verify that registrations are made by a person.)<br><br><b><font color=#ff0000>Your subscription was not processed.</font></b><br><br>Please fill in your information and the security code more carefully and click the <b>Subscribe</b> button.<br><br>Thanks for your understanding.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Enter the captcha code.');
define('_JNEWS_SUB_ERR','<br>Error in subscribing.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Subscribe Here');
define('_JNEWS_QUEUE_SUBJECT','Subject');
define('_JNEWS_QUEUE_EMAIL','Email');
define('_JNEWS_QUEUE_PRIOR','Priority');
define('_JNEWS_QUEUE_ATT','Attempts');
define('_JNEWS_QUEUE_DEL', 'Delete');
define('_JNEWS_PROCESS_Q','Process Queue');
define('_JNEWS_CLEAN_Q','Clean Queue');
define('_JNEWS_SENDDATE','Send date');
define('_JNEWS_MAILING_Q','All Mailings in Queue');
define('_JNEWS_MENU_QUEUE', 'Queue');
define('_JNEWS_MENU_TEMPLATES','Templates');
define('_JNEWS_MENU_TAB_QUEUE' , 'Queue');
define('_JNEWS_Q_PROCESS' , 'Queue Configuration');
define('_JNEWS_MAX_Q','Maximum number of e-mails per batch');
define('_JNEWS_SUBS_LIST_LABEL' , 'This Newsletter will be sent to the subscribers of the following selected lists:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'This auto-responder will be sent to the subscribers of the following selected auto-responder:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Receive' );
define('_JNEWS_SUBS_LIST_TOALL', 'Select All' );
define('_JNEWS_SUBS_LIST_TONONE', 'None' );
define('_JNEWS_LIST_COLOR','Color');
define('_JNEWS_LIST_COLOR_TIP','Select the color for your list. It can be usefull for the statistics.');
define('_JNEWS_MENU_NEW', 'New');
define('_JNEWS_MENU_EDIT', 'Edit');
define('_JNEWS_MENU_APPLY', 'Apply');
define('_JNEWS_MENU_CANCEL', 'Cancel');
define('_JNEWS_MENU_TEMPLATE', 'Template');
define('_JNEWS_HTML_VERSION', 'HTML Version');
define('_JNEWS_NONHTML_VERSION', 'Non-HTML Version');
define('_JNEWS_TAG_NAME_DESC' , 'This will be replaced by the name the subscriber entered, you will be sending personalized email when using this.');
define('_JNEWS_TAG_FNAME_DESC' , 'This will be replaced by the FIRST name of the subscriber entered.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'This will be replaced by the issue number of the newsletter.');
define('_JNEWS_TAG_DATE_DESC' , 'This will be replaced by the sent date.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'This will be replaced by the Joomla module where id is equal to id of the joomla module. For example {module=1}.<br /> The modules can only be loaded through the cron task. <br /> ');
define('_JNEWS_DATETIME' , 'Date and Time');
define('_JNEWS_TEMPLATE_COPY' , '_copy');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'You cannot delete a default template!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Successfully set to default!');
define('_JNEWS_TEMPLATE' , 'Template');
define('_JNEWS_TEMPLATES' , 'Templates');
define('_JNEWS_AR' , 'Auto-responder');
define('_JNEWS_SELCT_MAILINGLIST', 'Please select a list in the List tab in order to add a mailing.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Please select a campaign in the List tab in order to add a mailing.');
define('_JNEWS_TEMPLATE_AVAIL', 'All Available Templates');
define('_JNEWS_TEMPLATE_NAME', 'Name');
define('_JNEWS_TEMPLATE_NAME_T', 'Enter the name of the template.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Namekey');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Enter the namekey of the template.');
define('_JNEWS_TEMPLATE_DESC', 'Description');
define('_JNEWS_TEMPLATE_DEFAULT', 'Default');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Select "Yes" to set as the default template.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Publish');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Select "Yes" to publish the template.');
define('_JNEWS_TEMPLATE_BG', 'Background Color');
define('_JNEWS_TEMPLATE_BG_T', 'Select the template background color.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Upload Thumbnail');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Upload an image thumbnail of the template.');
define('_JNEWS_TEMPLATE_DESC_T', 'Enter the description of the template.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Title h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Title h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Title h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Title h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Style for the Unsubscribe Link');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Style for the "Change Your Subscription" Link');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Style for the content area');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Style for the content title');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Style for the read more link');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Style for the "View it online" Link');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Add a New Style');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'Name of the CSS Class');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS styles that will be applied to the class.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Subscribers Reports');
define('_JNEWS_REPORTS_MAIL', 'Mailing Reports');
define('_JNEWS_REPORTS_LIST', 'List Reports');
define('_JNEWS_LIST_SUBCRIBERS', 'No. of Subscribers');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'No. of Unsubscribers');
define('_JNEWS_LIST_CONFIRMED', 'No. of Confirmed Emails');
define('_JNEWS_LIST_UNCONFIRMED', 'No. of Unconfirmed Emails');
define('_JNEWS_LIST_SUB_DATE', 'Subscribed Date');
define('_JNEWS_MAILING_SEND_DATE','Send Date');
define('_JNEWS_MAILING_SUBJECT', 'Subject');
define('_JNEWS_MAILING_SENT_HTML','Sent in HTML');
define('_JNEWS_MAILING_SENT_TEXT','Sent in Text');
define('_JNEWS_MAILING_FAILED', 'Send Fails');
define('_JNEWS_MAILING_PENDING', 'Mail Pending');
define('_JNEWS_MAILING_BOUNCES','Bounces');
define('_JNEWS_MAILING_SENT', 'Total Sent');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Graph');
define('_JNEWS_MAIL_DETAILS', 'Details');
define('_JNEWS_MAIL_DETAILS_READ', 'HTML Read');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'HTML Unread');
define('_JNEWS_MAIL_DETAILS_TEXT', 'TEXT Only');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Predefined Date');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Specified Date');
define('_JNEWS_LABEL_SET_INTERVAL', 'Set Interval');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Date Range');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Current Server Time');
define('_JNEWS_LABEL_REPORT_TYPE','Report Type');
define('_JNEWS_INTERVAL_DAILY','Daily');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Weekly');
define('_JNEWS_INTERVAL_MONTHLY', 'Monthly');
define('_JNEWS_INTERVAL_YEARLY','Yearly');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Yesterday');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Today');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','This Week');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Last Week');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Last 2 Weeks');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','This Month');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Last Month');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','This Year');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Last Year');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','2 Years Ago');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','3 Years Ago');
define('_JNEWS_BUTTON_REFRESH','Refresh');				//buttons
define('_JNEWS_BUTTON_GENERATE','Generate');
define('_JNEWS_BUTTON_RESET', 'Reset');
define('_JNEWS_SPECIFIED_DATE_START','Start');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','End');
define('_JNEWS_REPORT_LISTING','Listing');
define('_JNEWS_REPORT_GRAPH','Graph');
define('_JNEWS_REPORT_EXPORT','Export');
define('_JNEWS_SUBSCRIBERS_ALL_USERS', 'All Users');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Registered');
define('_JNEWS_SUBSCRIBERS_GUESTS','Guests');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Incomplete Date Selection in Specified Fieldset!');

//stats export
define('_JNEWS_STATS_EXPORT', 'Export');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'No Data to be Exported');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'No Data to be Displayed');
define('_JNEWS_REPORT_HEADER', 'Report');
define('_JNEWS_REPORT_HEADER_TO', 'to');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'No Data for Mailing Process');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'No Data for HTML/Text Format');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'TEXT');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/TEXT Format');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Mailing Process');
define('_JNEWS_PIE_SUBS', 'Subscribers');
define('_JNEWS_PIE_UNSUBS', 'Unsubscribers');
define('_JNEWS_PIE_UNCONFIRMED', 'Unconfirmed');
define('_JNEWS_PIE_CONFIRMED', 'Confirmed');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Subject');


//Wizards
define('_JNEWS_WIZARD', 'Wizard');
define('_JNEWS_CHECKLISTFOUND', 'Please create your list first and be sure that it is published.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Please create your campaign(list) first and be sure that it is published.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Template must have a namekey!');
define('_JNEWS_LIST_GUIDE', '<strong>List Management:</strong> <br/>'.
       '<ul><li>The first thing you have to do to start with jNews is to create your list.</li>'.
       '<li>You will be able to subscribe users to this list and send one or more Newsletters.</li>'.
       '<li>You can specify here the basic information of the list including your <i><u>Sender Information</u></i>.</li>'.
       '<li>And be able to specify users or group of users who can subscribe to that list.</li>'.
       '<li>For <i>Plus</i> and <i>Pro</i> version you can specify what group of user or user who can add or edit mailings for this list.</li>'.
       '<li>For <i>Pro</i> version you have the option to send <i><u>Unsubscription</u></i> and <i><u>Subscription Notification</u></i> to the owner of the list or the admin of the site.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Subscriber Management:</strong> </br>' .
	    '<ul><li><strong>During Creation: </strong></li><br>'.
        '<ul><li>You can proceed here adding your subscribers.</li>'.
        '<li>Specify your <i><u>Subscriber Information</i></u></li>'.
        '<li>And select which <i><u>List</u></i> you want your subscriber to subscribe to, provided that you have created list.</li>'.
        '<li>You can Confirm your added subscriber to receive your newsletters.</li>'.
        '<li>You can also allow your subscriber to recieve the HTML format of your newsletter.</li>'.
        '<li><i><u>IP</u></i> field is added to automatically detect the IP of your subscriber from the frontend of your site. </li></ul></ul>'.
        '<ul><li><strong>Export Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Export</u></i> your subscribers from all your lists or selected lists.</li></ul></ul>' .
        '<ul><li><strong>Import Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Import</u></i> your subscribers to all your lists or selected lists.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Newsletter Management:</strong> <br/>'.
        '<ul><li>Provided that you have created List(s) you can now proceed creating your <i><u>Newsletters</u></i>.</li>'.
        '<li>For the <i><u>Plus</u></i> version you can create <i><u>Scheduled Newsletter</u></i> and also <i><u>Autoresponder</u></i> or <i><u>Auto-responder</u></i> type of mailing.</li>'.
        '<li>For <i><u>PRO</u></i> you have the functionality with <i><u>Smart-Newsletter</u></i>, which takes your <i>latest created</i>, <i>modified</i> and <i>published articles</i> of your site.</li></ul>'.
        '<ul><li><strong>During Creation:</strong></li>'.
		'<ul><li><i><u>Newsletter Content Area</u></i> -> where you put all the contents of your Newsletter.</li>'.
		'<li><i><u>List Tab</u></i> -> the area where you can send the newsletter to one or more Lists.</li>'.
		'<li><i><u>Sender Tab</u></i> -> the area of the Sender Information Settings of your Newsletter.</li>'.
		'<li><i><u>Content Tab</u></i> -> the area where you can look for the contents of your site and specify which article to insert into your Newsletter.</li>'.
        '<li><i><u>Attachments</u></i> -> Newsletter Attachement Information area.</li></ul></ul>' .
        '<ul><li><strong>Unpublished Button</strong></li>' .
        '<ul><li>Enables you to unpublished your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Preview Button</strong></li>' .
        '<ul><li>Preview the content and format of your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Send Button</strong></li>' .
        '<ul><li>Enables you to manually send the newsletter to your list of subscribers.</li></ul></ul>' .
        '<ul><li><i>Note: You can only edit an unpublished newsletter.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Autoresponder Management:</strong><br/>'.
		  '<ul><li>Provided that you have created <i><u>Auto-responder</u></i> type of list you can proceed creating your <i><u>Autoresponder</u></i>.</li>'.
		  '<li>During the creation process you can specify the <i><u>Number of Delays</u></i> for your autoresponder, after the previous one has been processed.</li>' .
		  '<li> The process is more or less the same on how to create your newsletter.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Smart-Newsletter Management:</strong> <br/>' .
		 '<ul><li>Provided that you have created <i>list(s)</i> and <i>latest created</i>, <i>modified</i> and <i>published article</i> on your site you can proceed creating <i><u>SmartNewsletter</u></i>.</li>'.
         '<li>The creation process is more or less the same with Newsletter Creation.</li>' .
         '<li>From the <i><u>Smart-Newsletter Tab</u></i> during creation you can specify your settings for the processing of your Smart-Newsletters.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Template Management:</strong><br><ul><li>Templates can be very useful in creating newsletter.</li>' .
		'<li>This view will allow you to create Templates for your newsletters</li>' .
		'<li><i><u>Default Template</u></i> will be applied to the newly created newsletter.</li>' .
		'<li><i><u>Inline CSS</u></i> of the template will be applied/inherited to the created newsletter.</li>' .
		'<li>You can also choose a <i><u>Background Color</u></i> that will be a background of the newsletter.</li>' .
		'<li>Note: Only newly created newsletter will get the html of the default template</li></ul>' .
		'<ul><strong>Default Button</strong>'.
		'<ul><li>Inorder to make your Template as the default template to be used in your newsletter you just need to click on this button.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Queue Management:</strong><br/> ' .
		'<ul><li>This view enables you to see your <i><u>Queued Mailings</u></i>.' .
		'<li>These are your <i><u>Scheduled Newsletters</i></u>, <i><u>Autoresponders</i></u> and <i><u>Smart-Newsletters</i></u></li>'.
        '<li>The <i><u>Process Queue Button</i></u> will allow you to proces your queued mailings manually by just clicking the said button.</li>' .
        '<li>The <i><u>Reset S.N. Counter Button</i></u> will allow you to reset the <i>next send date</i> or <i>generated date</i> of your Smart-Newsletter.</li>' .
        '<li>The <i><u>Empty Queue Button</i></u> will allow you to clean the whole queue.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','jnews');
define('_JNEWS_IMPORT_GUIDE','<strong>Import Management:</strong><br/>'.
         '<ul><li>Here you can import your subscribers to all your lists or to select lists.</li>'.
         '<li>By following the link given below, you can proceed importing your subscribers.</li>'.
         '<li><i>Note: You need to create first your lists before importing your subscribers.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Configuration:</strong><br/>'.
        '<ul>All the jnews configuration settings can be done in this area.<br/><br/>'.
	    '<strong>Mail Tab:</strong>'.
	    '<ul><li>The area where you can define the Mail Settings and Sending Settings of jNews depending on your server requirements.</li></ul>'.
	    '<br/><strong>Subscribers Tab:</strong>'.
	    '<ul><li>The area where we can define the subscription settings both from the backend and frontend of your site.</li></ul>'.
	    '<br/><strong>Scheduler Tab:</strong>'.
	    '<ul><li>The area where we can specify the Scheduler Frequency so do with Maintenance Settings on the sending of your mailings.</li>
         <li>The Information entered on this area depends also on your server requirements or server limitation.</li></ul>'.
	    '<br/><strong>Logs & Stats Tab:</strong>'.
	    '<ul><li>The area to specify the Statistics Settings and Logs Settings.</li></ul>'.
	    '<br/><strong>Archive Tab:</strong>'.
	    '<ul><li>This is mainly used for the auto archive frequency.</li></ul>'.
	    '<br/><strong>Miscellaneous Tab:</strong>'.
	    '<ul><li>All the other settings and preferences can be found here.</li></ul>'.
	    '<br/><strong>Queue Tab:</strong>'.
	    '<ul><li>Mainly used for the Queue Management View (available for Plus and Pro Version).</li></ul>'.
	    '<br/><strong>License Tab:</strong>'.
	    '<ul><li>The area where we can validate the license by just following the steps presented.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Empty Queue');
define('_JNEWS_RESET_SN','Reset S.N. Counter');
define('_JNEWS_Q_M1','There are no emails in the queue.');
define('_JNEWS_INSTALL_CLICKSTART', 'Click here to get started!');
define('_JNEWS_INSTALL_DESC', 'Thank you for choosing jNews.<br><br>
jNews is a mailing lists, newsletters, auto-responders and follow up tool for communicating effectively with your users and customers.');
define('_JNEWS_INSTALL_ERRORN' , 'If you have error during the installation process, please refer to our');
define('_JNEWS_INSTALL_DOC' , 'documentation here.');
define('_JNEWS_INSTALL_SUCC' , 'Successfuly Installed.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews Configuration:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews Plugin(Bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews Module:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews Updates');
define('_JNEWS_STATS_GUIDE', '<strong>Mailing Reports: </strong><br/>'.
		'<ul> <li>It will generate a list of mailings sent based on the given date range. </li> ' .
		'<li>It will count the following: <ul><li> the no. of mails sent in HTML & Text Format,</li>' .
			'<li> no. of how many viewed the mails in HTML format, </li>' .
			'<li>how many mail sent that are failed, </li><li>still on-process (pending), ' .
			'</li><li>email bounced,</li> <li>and the total sent is the no. of emails sent on each mailing.</li> </ul></li></ul>'.
		'<strong>List Reports:</strong> <br/>'.
		'<ul> <li>It will generate a listing of List Names based on the date of subscriptions on a given date range. </li>' .
			'<li>It will list the following:  <ul><li>total no. of subscribers who made a subscription </li> ' .
			'<li>total no. of subscribers who unsubscribed, </li>' .
			'<li>total no. of confirmed and unconfirmed subscribers on each list type. </li>  </ul></li></ul>'.
		'<strong>Subscribers Report:</strong> <br/>'.
		'<ul> <li>It will generate a report on the total no. of subscribers on a given date range.</li> </ul>'.
		'<strong>How to Export the Report into CSV File:</strong>'.
		'<ul> <li>On each Reports (Mailing, List and Subscribers), an export icon is found at the upper right of each tab.</li>'.
		'<li>Click the export icon to export the file.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Search');
define('_JNEWS_SEARCH_GO' , 'Go');
define('_JNEWS_SEARCH_RESET' , 'Reset');
define('_JNEWS_SENDER_LIST_INFO', 'Click to select sender from list' );
define('_JNEWS_FILTER_MAILING' , 'Select a Mailing ');
define('_JNEWS_MESSAGE_QUEUE' , 'All Mailings in the Queue ');
define('_JNEWS_FILTER_LIST' , 'Select Type');
define('_JNEWS_MAILING_TAG' , 'Tag');
define('_JNEWS_MAILING_TAGINSERT' , 'Insert');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Select the desired tag to be added and click insert.<br> Note: <i>Make sure to place the cursor in the text editor where you want to insert.</i></p>');
define('_JNEWS_TAG_SUBSCRIPTION', '{tag:subscriptions}');
define('_JNEWS_TAG_UNSUBSCRIBE', '{tag:unsubscribe}');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'This will be replaced by the defined constant "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" in the translation.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'This will be replaced by the defined constant "_JNEWS_UNSUBSCRIBE" in the translation.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:text here}');
define('_JNEWS_TAG_VIEWONLINE', 'view it in your browser');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'This will be replaced by either the default text or what you put in the "text here" with a link.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Enable joobi cron');

define('_JNEWS_SHOW_CRON_TIPS','Enables the cron set up upon the installation of jNews.<br>This cron was set up in http://www.joobi.co and will be triggered every 15 minutes');
define('_JNEWS_CRON_FSETTINGS' , 'Cron Settings');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Do you want to import your database from Acajoom to jNews?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Import Acajoom Data');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'NOTE : This will transfer data stored from Acajoom tables to jNews tables.');

define('_JNEWS_MAILING_UPDATED' , 'Mailings successfully imported.');
define('_JNEWS_DETAIL_UPDATED' , 'Stats Details successfully imported');
define('_JNEWS_GLOBAL_UPDATED' , 'Stats Globals successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED' , 'Queues successfully imported');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'List Subscribers successfully imported');

define('_JNEWS_LIST_UPDATED_FAILED' , 'No Lists successfully imported');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'No Mailings successfully imported');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'No Detailed Statistics successfully imported');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'No Global Statistics successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'No Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'No records successfully imported to Queue');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'No records successfully imported to List Subscribers');

define('_JNEWS_LEGEND' , 'Legend');
define('_JNEWS_NOTVISIBLE', 'Not Visible');
define('_JNEWS_SCHEDULED', 'Scheduled');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Unregistered');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Successfully uploaded template' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Fail to upload template. Kindly verify the zip file if it has the main index.html file.' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Can only upload templates in zip files' );
define('_JNEWS_CUSTOMCSS', 'Input your Custom CSS here');
define('_JNEWS_TEMPLATE_ALERT', 'Template name and alias are required!');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Send Unsubscribe Notification');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS','Specify here if you want to send an unsubscription notification to the list owner or not.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Unsubscribe Notification Message');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'This message will be send to List Owner or List creator when someone unsubscribes to the list. Any message can be entered here.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Toggle Styling');
define('_JNEWS_EXTERNALCSS_LINK','Add External CSS Link');
define('_JNEWS_EXTERNALCSS_PROCESS','Process');
define('_JNEWS_TEMP_COMBINECLASS','Combined class selector');
define('_JNEWS_COMBINECLASS_SUPPORT','is not supported');
define('_JNEWS_TEMP_COMBINECLASS_IN','in');
define('_JNEWS_TEMP_HTMLTAG','Found html tag ');
define('_JNEWS_TEMP_CONTDEV','You may contact developer for it to be added');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Combined pseudo-class selector');
define('_JNEWS_TEMP_COMBCLASSEID','or element id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Live Support');

//Tags
define ('_JNEWS_SMART_TAG', 'This will be replaced by the latest created, modified and published article when you create a Smart-Newsletter type of mailing.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Name and Email are required!');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Statistics');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Notification');
define('_JNEWS_MENU_REFRESH_STATS' , 'Refresh');
define('_JNEWS_MENU_GENERATE_STATS' , 'Generate');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'List');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', '<p>Dear [LISTOWNERNAME],<br /> <br /></p> <p style="padding-left: 30px;">This is an automated message from [SITE]. To inform you that a user unsubscribed to your newsletter list.</p> <p style="padding-left: 60px;"><strong>Details</strong></p> <p style="padding-left: 60px;">Date and Time of Unsubscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p> <p style="padding-left: 60px;">Unsubscribed List: <strong>[LISTID] - [LISTNAME]</strong></p> <p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p> <p> </p> <p>Thank You!</p>');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Module Name');
define('_JNEWS_TAG_MODTYPE' , 'Type');
define('_JNEWS_TAG_MODPOSITION' , 'Position');
define('_JNEWS_TAG_ACL' , 'Access Level');
define('_JNEWS_TAG_SPECIAL' , 'Special');
define('_JNEWS_TAG_PUBLIC' , 'Public');
define('_JNEWS_TAG_ARTICLESECTION' , 'Section');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Category');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla Module');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Auto Content');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Subscription');
define('_JNEWS_TAGMENU_USERS' , 'Users');
define('_JNEWS_TAGMENU_DATETIME' , 'Date/Time');
define('_JNEWS_TAGMENU_WEBSITE' , 'Site Links');
define('_JNEWS_TAGMENU_CONTENT' , 'Content');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Ordering');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Select the way you want your articles to be ordered.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Created Date (Newest First)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Title');
define('_JNEWS_TAGPICKLIST_Order' , 'Order');

define('_JNEWS_SELECT_MAILING', 'Please select a mail to edit!');
define('_JNEWS_DELETE_MAILING', 'Please select a mail to delete!');
define('_JNEWS_COPY_MAILING', 'Please select a mail to copy!');
define('_JNEWS_TAG_CONFIRM_DESC', 'This will be replaced by the defined constant "_JNEWS_CONFIRM_SUBSCRIPTION" in the translation with the confirmation link.');
define('_JNEWS_TEMPLATE_SAVED', 'Template successfully saved.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'You are trying to subscribe to a listid that does not exist.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Tags');
define('_JNEWS_TAG_EMAIL_DESC', 'This will be replaced by the email of the subscriber.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Forward to a friend.');
define('_JNEWS_TAGTITLE_SITE', 'Site Links');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla Contents');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automatic Joomla Contents');
define('_JNEWS_TAGTITLE_MOD', 'Joomla Modules');
define('_JNEWS_TAGCAPTION_ALL', 'ALL');
define('_JNEWS_SUCCESS_COPIED' , ' successfully copied.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'ALL SECTIONS AND CATEGORIES');
define('_JNEWS_FWD_MYDETAILS' , 'My Details');
define('_JNEWS_FWD_WANTTO' , 'I want to forward this email to');
define('_JNEWS_FWD_MESSAGE' , 'Enter a message');
define('_JNEWS_FWD_MESSAGEHID' , 'This email was forwarded to you by');
define('_JNEWS_FWD_SENDEMAIL' , 'Send Email');
define('_JNEWS_FWD_ADDFIELD' , 'Add another friend.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Newsletter Archive');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Please enter your name.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Please enter your valid e-mail address.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Please enter your friend\'s name.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Please enter a valid e-mail address of your friend.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Mailing successfully forwarded to ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Mailing not successfully forwarded to ');
define('_JNEWS_TAGSITE_TAGTIP', 'Click Insert to add the tag in the newsletter.');
define('_JNEWS_TAGSITE_CAPTION', 'Tag Caption');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Change the tag caption or text here.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Please select your Automatic Content to be added in your newsletter!');
define('_JNEWS_ARLIST', 'Auto-responders');
define('_JNEWS_NEW_SUBSCRIBER', 'Subscriber Succesfully Saved.');
define('_JNEWS_EDIT_AR', 'Edit an Auto-responder');
define('_JNEWS_ARINFO_LIST_DELAY', 'Specify the delay(in days) of this autoresponder from the date of subscription.');
define('_JNEWS_SUBS_LIST', 'This Auto-responder will be attached to the following selected lists:');
define('_JNEWS_SUBS_LIST2', 'Attach lists');
define('_JNEWS_SUBS_LIST_TIPS', 'Attach this auto-responder to the following lists . If a user subscribes to these lists they will also be subscribed to the autoresponder. ');
define('_JNEWS_PRIORD_LISTTYPE','Prioritized list type');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'Prioritize either the list type or auto-responder type in the subscription of the lists.');
define('_JNEWS_PRIORD_SUBS','Prioritized subscription');
define('_JNEWS_PRIORD_SUBS_TIPS', 'Prioritize either the subscription or unsubscription to a list or just do nothing to the existing subscriptions.<br/><b>Ignore Changes</b>: We do nothing to the change subscriptions of auto-responder irregardless being unsubscribed or subscribed when a change of subscription is also done to the list where the auto-responder is being attached.<br/><b>Subscription</b>: We force subscribe users to the auto-responders that is being attached to the subscribed list.<br/><b>Unsubscription</b>: We unsubscribe the user to the attached auto-responder even if the user subscribed to the list where the autoresponder is attached.');
define('_JNEWS_REMAIN_SUBS','Ignore Changes');
define('_JNEWS_UNSUBS','Unsubscription');
define('_JNEWS_SUBSCRIPTION_AR','Subscription to Auto-responder');
define('_JNEWS_SUBSCRIPTION_LIST','Subscription to List');
define('_JNEWS_YOUR_CRON', 'Your Cron url');
define('_JNEWS_LAUNCH_CRON', 'Launch Cron');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Safe Unsubscribe');
define('_JNEWS_INVIUNPUB', 'The lists you subscribed are either in invisible status or unpublished.<br> Only the admin of the site can unsubscribe you from those lists as of now.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Are you sure you want to unsubscribe from these lists?');
define('_JNEWS_SELECT_ALLLISTS','Click to select all List');
define('_JNEWS_SELECT_ALLLAUTOR','Click to select all Auto-responder');
define('_JNEWS_UNSUBSLINK_TIP','Select yes if you prefer to show unsubscribe link on mailings');
define('_JNEWS_CHANGESUBSLINK_TIP','Select yes if you prefer to show subscription link on mailings for subscriber to change his subscription');
define('JNEWS_AUTOMATIC_CRON', 'An automatic cron is created upon the installation of jNews.<br/>This cron was automatically set up in www.joobi.co. This cron has the frequency of 15 minutes.');
define('_JNEWS_IMPORTSUB_TIPS','Import subscribers. The information in the file need to be to the following format: <b>Name, email, receiveHTML(1/0), <span style="color: rgb(255, 0, 0);">confirmed(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'The smartnewsletter doesn\'t contain a [SMARTNEWSLETTER] tag yet. Please insert the tag in the content.');
define('_JNEWS_DELETEBTN','Delete Queue');
define('_JNEWS_MENU_STOPQ','Stop Queue');
define('_JNEWS_MENU_STARTQ','Start Queue');
define('_JNEWS_MAILING_QUEUE_DELETED', 'The queue entry have been successfully deleted for this mailing.');
define('_JNEWS_QUEUE_SETTING','Queue Setting');
define('_JNEWS_QUEUESTATS_ON','On');
define('_JNEWS_QUEUESTATS_OF','Off');
define('_JNEWS_QUEUESTATS_TIPS','Turn On if you want the Process Queue to start or Off if you want it to stop.');
define('_JNEWS_MENU_STARTQ_MSG','The processing of queue has been started.');
define('_JNEWS_MENU_STOPQ_MSG','The processing of queue has been stopped.');
define('_JNEWS_QUEUESTATS_NOTIFY','The queue has been stopped if you want to continue proccessing it, you need to ');

//since
define('_JNEWS_NEW_URL_PASS_TIPS','Enter the password to be able to add a subscriber via url. Append the catcher variable passwordA in the URL.');
define('_JNEWS_CRON_PASSWORD', 'Cron Password');
define('_JNEWS_USE_CRON_PASS', 'Use Password for Cron');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Queue Status');
define('_JNEWS_SMTPPORT','SMTP Port');
define('_JNEWS_SMARTQUEUE','Smart Queue');
define('_JNEWS_SMARTQ_ON','On');
define('_JNEWS_SMARTQ_OF','Off');
define('_JNEWS_SMARTQ_TIPS','Turn On if you want to enable the Smart processing of queue which will overcome your server limitation.');
define('_JNEWS_SUB_INFO_FIELDS', 'Show More Subscriber Info');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Show IP ,Register Date, User id and Black List fields in the subscriber form in the frontend');
define('_JNEWS_JSUB', 'Frontend Management');
define('_JNEWS_JSUB_TIPS', 'Choose if only the owner of the list or the super admin can only edit and create/view newsletters in the frontend. A user can own a list if he is subscribed via jSubscription');
define('_JNEWS_BYOWNER', 'By Owner');
define('_JNEWS_LIST_ACESS', 'By List Access');
define('_JNEWS_CAPTCHA_WARN',   'Cannot create Captcha Image either you do not have php GD Library installed or php GD Library has not been loaded with TFF support <br>Check your phpinfo() or you can turn off the Enable Captcha option from ');
define('_JNEWS_CAPTCHA_LINK','jNews Configuration under Subscriber Tab');
define('_JNEWS_MORE_TEMPLATES','More Templates');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2 Contents');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart Products');
define('_JNEWS_TEMPLATE_AVLB','Availability');
define('_JNEWS_TEMPLATE_INS','Installed');
define('_JNEWS_TEMPLATE_DWN','Download');
define('_JNEWS_TEMPLATE_FDWN','Free Download');
define('_JNEWS_TEMPLATE_IMG','Image');
define('_JNEWS_SUBS_INFO','You do not have subscription record to any mailing lists so it is not possible to unsubscribe here.');
define ('_JNEWS_UNSUBS_STATUS','You are already unsubscribe to the list.');
define('_JNEWS_CAPTCHAW', 'Captcha Width');
define('_JNEWS_CAPTCHAW_TIPS', 'Define the width of the captcha in the subscriber module');
define('_JNEWS_CAPTCHAH', 'Captcha Height');
define('_JNEWS_CAPTCHAH_TIPS', 'Define the height of the captcha in the subscriber module');
define('_JNEWS_CAPTCHA_MSG', 'Kindly enter the correct captcha code.');
define('_JNEWS_MCRYPT_MESSAGE', 'The captcha has been turned on without the mcrypt library enabled.<br>Kindly enable the mcrypt extension in your php.ini.<br>You may also want to disable captcha in ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Send HTML Mailing Only?');
define('_JNEWS_FORCED_HTML_TIP','Yes if you want to force only html mailing will be sent to your subscribers.');

//Since social edition
define('_JNEWS_LISTS_CONFIG','Lists');
define('_JNEWS_LISTS_SETTINGS','Lists Settings');
define('_JNEWS_USE_MASTERLISTS','Use Master Lists?');
define('_JNEWS_USE_MASTERLISTS_TIPS','Yes if you want to use master lists [All Potential Site Members, All Registered Subscribers, All Front-end Lists Subscribers] of your subscribers, No otherwise');
define('_JNEWS_LIST_CREATORFE','Front-end List Creator');
define('_JNEWS_LIST_CREATORFE_TIPS','Define the access level who you will allow to create lists on Front-end');
define('_JNEWS_LIST_CREATORFE_WARN','(You need to specify here the group level of user who can create list on the frontend.)');

define('_JNEWS_BLOG_RENDERING', 'Blog Rendering');
define('_JNEWS_BLOG_TIPS', 'Full Blog: this will load the full blog in the newsletter<br>Intro Only: this will load the x number of characters of the blog with a read more link to the complete blog in your site');
define('_JNEWS_TAGMENU_BLOGS', 'Lyften Bloggie');
define('_JNEWS_TAGMENU_DEALS', 'Deal');
define('_JNEWS_DEALS_INTRO', 'Intro Box');
define('_JNEWS_DEALS_FULL', 'Full Description');
define('_JNEWS_DEAL_NAME', 'Deal Name/<br> Short Description');
define('_JNEWS_DEAL_INDUSTRY', 'Industry/<br> Country');
define('_JNEWS_DEAL_TARGET', 'Target Amount/<br> Inv Range');
define('_JNEWS_DEAL_TYPE_TIPS', 'Full Description: will include the entire deal in the newsletter.<br />' .
		'Intro box: will include only the introduction of the deal in the newsletter.<br/>');
define('_JNEWS_CONTENT_TIP', 'ID of the content to be inserted in the newsletter');
define('_JNEWS_CONTENT_ID', 'Content ID');
define('_JNEWS_BLOG_TIP', 'ID of the blog to be inserted in the newsletter');
define('_JNEWS_BLOG_ID', 'Blog ID');
define('_JNEWS_TAGMENU_JOMSOCIAL','JomSocial');
define('_JNEWS_TAGCAPTION_ALLCAT','All Categories'); //_JNEWS_TAG_ARTICLECATEGORY
define('_JNEWS_PLUG_INSTALLED','Plugin %s installed successfully');
define('_JNEWS_MODULE_INSTALLED','Module %s installed successfully');
define('_JNEWS_EMAIL_LISTS', 'Lists');
define('_JNEWS_LEADS_REP', 'Leads Reports');
define('_JNEWS_SUBSCRIBERS', 'Subscribers');
define('_JNEWS_ALLOW_SN', 'Allow Smart-Newsletter');
define('_JNEWS_ALLOW_SN_TIP', 'Allow creation of smart-newsletter in the frontend.');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_NOT', 'Unsubscription Notification');
define('_JNEWS_RED_SUBSCRIPTION', 'Redirect After Subscription');
define('_JNEWS_RED_SUBS_TIP', 'Redirect page after subscription from the module.');
define('_JNEWS_PLEASE_WAIT', 'Please wait...');
define('_JNEWS_MOD_MESSAGE', 'Pop-up Subscription Message');
define('_JNEWS_MOD_MESSAGE_TIP', 'Select Yes to pop-up the subscription message. Select No to put the message in the module');

//since 6.1.0
define('_JNEWS_CREATE_NEWSUBS_TIPS', 'Specify here the default number of rows of subscribers information to be created or added in the front-end.');
define('_JNEWS_CREATE_NEWSUBS','Add New Subsbcribers in');
define('_JNEWS_ROWS', 'rows');
define('_JNEWS_USE_BACKENDVIEW', 'Add Subscribers Using Default View');
define('_JNEWS_USE_BACKENDVIEW_TIPS', 'Specify here if you want to add subscribers in front-end using the default view used in the back-end');

define('_JNEWS_TERMS_CONDITIONS', 'Terms and Condition');
define('_JNEWS_TERMS_WARN', 'Please check the terms and conditions option. To read the terms and conditions kindly click on the Terms and Conditions link');
define('_JNEWS_TERMS_LINK','Terms and Condtion Link');
define('_JNEWS_TERMS_LINK_TIPS','Enter the complete link for the terms and conditions here.<br><strong>(ex. http://www.yoursite.com/index.php?option=com_content&view=article&id=[article_id]&Itemid=[Item_id]</strong>');
define('_JNEWS_SHOW_TERMS','Show Terms and Condition');
define('_JNEWS_SHOW_TERMS_TIPS','Add the Terms and Condition in the subscriber module');
define('_JNEWS_CHECK_TERMS','Check Terms and Condition');
define('_JNEWS_CHECK_TERMS_TIPS','Check or uncheck the terms and condition by default.');

//since 7.0.0
define('_JNEWS_CRON_SYSTEM', 'Cron System');
define('_JNEWS_CRON_SYSTEM_TIPS', 'Defines the cron used to launched the automatic scheduling of jNews.<br><br> [0] <strong> No Cron </strong> - if you do not want to use the automatic sending of mailing.' .
		'<br><br>[1] <strong>jNews Cron System Plugin</strong> - if you want your jNews Cron will be triggered within your site itself.<br><br>[2] <strong>Joobi Cron</strong> - if you want to avail the free Cron Task provided by <a href="http://www.joobi.co">Joobi</a>. ' .
		'<br><br>[3] <strong>External Cron</strong> - if you prefer to have your own cron task on your server.');
define('_JNEWS_NO_CRON', 'No Cron');
define('_JNEWS_CRON_PLUGIN', 'jNews Cron System Plugin');
define('_JNEWS_CRON_JOOBI','Joobi Cron');
define('_JNEWS_CRON_EXTERNAL','External Cron');
define('JNEWS_CAPTCHA_FTWARN','Cannot view the captcha image because FreeType Support of your GD Library is disabled. ' .
		'<br/>You may go to the backend of your site -> Help -> System Info -> PHP Information Tab -> gd section and check if FreeType Support is enable or not. ' .
		'<br/> If disabled you can enable it in the php.ini file of your server.');

//since 7.1.0
define('_JNEWS_SUBSCRIPTION_SETTINGS', 'Subscription Settings');
define('_JNEWS_SUBNOTIFY_MSG', 'Subscribe Notify Message');
define('_JNEWS_SUBNOTIFY_MSG_TIPS','This message will be send to List Owner or List creator when a subscriber subscribes to the list. Any message can be entered here.');
define('_JNEWS_SUBSDEFAULT_NOTIFYMSG', '<p>Dear [LISTOWNERNAME],<br /> <br /></p>
<p style="padding-left: 30px;">This is an automated message from [SITE] to notify you that a user subscribed to your newsletter list.</p>
<p style="padding-left: 60px;"><strong>Details</strong></p>
<p style="padding-left: 60px;">Date and Time of Subscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p>
<p style="padding-left: 60px;">Subscribed List: <strong>[LISTID] - [LISTNAME]</strong></p>
<p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p>
<p> </p>
<p>Thank You!</p>');
define('_JNEWS_SUBS_NOTIFYSUBJECT','jNews Subscription Notification');
define('_JNEWS_UNSUBS_NOTIFYSUBJECT','jNews Unsubscription Notification');
define('_JNEWS_SENDTEST_CONFIGSUCC','If you receive this email, it means that you will be able to send any other e-email from the website.');
define('_JNEWS_SENDTEST_CONFIGERROR','Kindly review your mail configuration there might be some settings that were not set properly.');
define('_JNEWS_LIST_UNPUBMSG','Your list is unpublished, inorder to use the list you created you need to publish it first.');
define('_JNEWS_LIST_INVIMSG','Your list is invisible on frontend, for your subscriber to see it you need to make your list visible first.');
define('_JNEWS_TEMPLATE_STYLE_TH5','Title h5');
define('_JNEWS_TEMPLATE_STYLE_TH6','Title h6');
define('_JNEWS_SENDTEST_TEMP','Send Test Template');
define('_JNEWS_NOCRON_USED','No cron task created or used for jNews.');

//since 7.2.0
define('_JNEWS_LISTS_UNSUBMSG','You are already unsubscribe from the Mailing Lists.');
define('_JNEWS_SEND_NEWSLETTER','Send Newsletter');
define('_JNEWS_MSG_SENT_SUCCESS', 'sent successfully to');
define('_JNEWS_MSG_SENT_FAIL', 'not sent successfully to');
define('_JNEWS_QUEUE_STATUSSEND', 'Queue Status');
define('_JNEWS_MENU_CONTINUE','Continue');
define('_JNEWS_QUEUE_EMPTYINFO','The queue is empty and there are no scheduled mailings to be processed.');
define('_JNEWS_QUEUE_READYTOSEND','Mailings Ready to be Sent');
define('_JNEWS_QUEUE_SCHEDULED','Scheduled Mailings');
define('_JNEWS_QUEUE_STILLONQUEUE','Mailings still on Queue at');
define('_JNEWS_SENDBTN','Send');

//since 7.3.0
define('_JNEWS_SMTPSECURE', 'SMTP Secure');
define('_JNEWS_SMTPSECURE_TIPS', 'If you use a SMTP Server, you can add a secure process before connecting to the SMTP Server.');
//define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');

//since 7.4.0
define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');
define('_JNEWS__LIST_HTML_EDITOR', 'List HTML editor is turned off. <br /> If you wish to add a description for the list kindly turn on the List Description editor in the Configuration>>Miscellaneoous tab.');
define('_JNEWS_TAGMODULE_REPLACE_MESSAGE', 'If your module tag was not replaced or has been replaced with an empty string, please check if the allow_url_fopen is set to on in your php.ini or if not please check if your server supports cURL.<br />It is a requirement to turn on the allow_url_fopen or curl to be able to replace the module tag in the preview and in sending from the backend. If you don\'t have either of the two the module tag will only be replaced if it is sent via the cron');
define('_JNEWS_QUEUE_PROCESS_ERROR', 'An error occured while retrieving queue entries to be processed; there is too much entries to be retrieved from the queue.<br /> Please reduce the maximum emails per task in the Scheduler tab in the jNews Configuration.');
define('_JNEWS_TOO_MUCH_CRON_MAX_EMAILS', 'You have too much max cron emails to be processed per task.<br /> Please reduce the number of emails to be processed per task to avoid a problem when loading the entries in the queue for processing. <br />Kindly lessen the maximum emails per task but increase the max cron frequency(frequency approved by your provider) to still send newsletters fast.');
define('_JNEWS_VIEW_BROWSER', 'View on the Browser');
define('_JNEWS_THE_MAILING', 'The mailing ');
define('_JNEWS_SENT_ALL', ' successfully sent to the subscribers.');
define('_JNEWS_NO_MAILINGS_YET', 'There are no mailings to be sent on this time.');
define('_JNEWS_CRON_TRIGGERRED', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_TIPS', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_ADD_INFO', 'Note: Even though the cron is triggerred it still can be that the queue and scheduled newsletters are not being processed.');
define('_JNEWS_UNSUBSCRIBE_ALL', 'Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_OR', 'or click here to Unsubscribe from All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_MESS', 'You have been unsubscribed from all lists!');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION', 'Show Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS', 'Select Yes to show the Unsubscribe To All Lists button in the frontend.');
define('_JNEWS_ATTEMPTED', 'Attempted to send');
define('_JNEWS_RESCHEDULED', 'This newsletter has been rescheduled and will attempt to send again.');
define('_JNEWS_REACHED_MAX_ATTEMPT', 'Note: If the no. of attempts in trying to send the newsletter already exceeded the maximum no. of attempts, this entry will be deleted from the queue.');
define('_JNEWS_REGWARN_COLUMN','Please enter');
define('_JNEWS_COLUMN_SHOW','Show Column ');
define('_JNEWS_SHOW_COLUMN_TIPS','Show/hide this column in your subscribers list-BE');
define('_JNEWS_INPUT_COLUMN','Column ');
define('_JNEWS_INPUT_COLUMN_TIPS','Enter your column ');
define('_JNEWS_COLUMN_DESC', 'This will be replaced by your user defined column ');
define('_JNEWS_HELP', 'Help');
define('_JNEWS_SEND_LOG_TO_TIPS', 'Send mailing reports to this email. If none is specified the mailing report will be sent to the first admin of the site');
define('_JNEWS_SEND_LOG_TO', 'Send mailing reports to');
define('_JNEWS_ASSIGN_LIS_TEMPLATE', 'List Template');
define('_JNEWS_ASSIGN_LIS_TEMPLATE_TIPS', 'Select default template to be used for this list');
define('_JNEWS_AUTO_OPTION_NO_SYNC', 'Sync No Users');
define('_JNEWS_QUEUE_BLOCK', 'Block');
define('_JNEWS_QUEUE_UNBLOCK', 'Unblock');
define('_JNEWS_TAGMENU_MEDIA_SHARE', 'Social Share');
define('_JNEWS_JOOBI_CRON', 'Joobi Cron System');
define('_JNEWS_JOOBI_CRON_TIPS', 'Select Yes to publish Joobi Cron and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered every 15 minutes.');
define('_JNEWS_JNEWS_CRON', 'jNews Cron System Plugin');
define('_JNEWS_JNEWS_CRON_TIPS', 'Select Yes to publish jNews Cron System Plugin and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered ever 15 minutes.');
define('_JNEWS_JOOBICRON_YES', 'Yes');
define('_JNEWS_JOOBICRON_NO', 'No');
define('_JNEWS_TITLE', 'This will be replaced with the title of the newsletter.');

//since 7.5.x
define('_JNEWS_CREATE_DATE', 'Create Date');
define('_JNEWS_MENU_SEND_TEST_TEXT', 'Send Test Email(Text)');
define('_JNEWS_CRON_NEXTTRIGGER', 'Next Cron Task');
define('_JNEWS_CRON_NEXTTRIGGER_TIPS', 'This date indicate when the cron task will be able to be triggered. If the URL get triggered before that time it will NOT trigger the queue.');
define('_JNEWS_AUTONEWS_DATE', 'Start Date');
define('_JNEWS_AUTONEWS_DATE_TIPS', 'Created: will only include the article last created.<br />Modified: will include the article last created AND modifed.');
define('_JNEWS_AUTONEWS_DATE_CREATED', 'Created');
define('_JNEWS_AUTONEWS_DATE_MODIFIED', 'Modified');
define('_JNEWS_UNSUBCRIBERS_VIEW', 'Unsubscribed');
define('_JNEWS_UNSUBSCRIBER_CONFIG', 'Unsubscribers');
define('_JNEWS_SUB_LISTTYPE_ALL', 'All Subscribers');
define('_JNEWS_SUB_LISTTYPE_ONLY_SUBCRIBED', 'Subscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_UNSUBCRIBED', 'Unsubscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_WAITINGCONF', 'Waiting Confirmation' );
define('_JNEWS_SUB_LISTTYPE_ONLY_BLOCKED', 'Blocked Users');
define('_JNEWS_MENU_SEND_TESTSPAM', 'Test for Spam');
define('_JNEWS_SPAMTEXT_MESSAGE_SENT_SUCCESSFULLY', 'Spam Test Email successfully sent, please check your mail box!');
define('_JNEWS_AUTONEWS_NEXT_GEN', 'Next generated date' );
define('_JNEWS_AUTONEWS_NEXT_GEN_TIPS', 'The next time jNews will generate a Newsletter' );
define('_JNEWS_AUTONEWS_SMARTNEWS_PROCESS', 'The system processed the SmartNewsletter ( %s ) and found %s  new published articles between %s and %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_IDS', 'There is no SmartNewsletter to generate yet for the ID %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_DATE', 'A SmartNewsletter will be generated after this date: %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_TIME', 'The current time is: %s .' );
define('_JNEWS_NEWSLETTER_BE_SENT', ' will be sent to ' );
define('_JNEWS_NEWSLETTER_BE_SUBCRIBERS', 'subscribers.' );
define('_JNEWS_NEWSLETTER_BE_NEXT', 'The next mailing will be sent after %s .' );
define('_JNEWS_NEWSLETTER_BE_READY_SENT', ' ready to be sent to ' );
define('_JNEWS_DESC_SUPERPACK', 'jNews SuperPack the ultimate mailing system including lots of preloaded templates. jNews! Your Communication Partner!');
define('_JNEWS_DESC_SOCIAL', 'jNews Social the ultimate mailing system for your Social community. jNews! Your Communication Partner!');
