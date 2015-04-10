<?php

/**
 *  HLGaming 2015 - Minden jog fenntartva! - HLGaming 2015 - All right reverested!
 *
 *	Translated by Czompi - Fordította: Czompi
 */
/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "A fiókod még nincs aktiválva!");
define("MESSAGE_CAPTCHA_WRONG", "Hibás Captcha!");
define("MESSAGE_COOKIE_INVALID", "Ismeretlen Süti!");
define("MESSAGE_DATABASE_ERROR", "Nem lehet csatlakozni az adatbázishoz.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Már regeltél ezzel az emaillel! Ha elfelejtetted a jelszavad katt az  \"Elfelejtett jelszó\" gombra!");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Ismeretlen karakterek az emailben!");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Sikeres emailcím váltás!");
define("MESSAGE_EMAIL_EMPTY", "Az email címed nem maradhat üres!");
define("MESSAGE_EMAIL_INVALID", "Hibás emailt adtál meg!");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Az új email címed megegyezik a jelenlegivel!");
define("MESSAGE_EMAIL_TOO_LONG", "Az email nem lehet 64 karakternél hosszabb");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Üres link a paraméternél."); //Talán "Üres paramétert találtam" ??
define("MESSAGE_LOGGED_OUT", "Sikeres kilépés");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Sikertelen belépés.");
define("MESSAGE_OLD_PASSWORD_WRONG", "A régi jelszavad hibás.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Nem egyezik meg a 2 jelszó!");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sikertelen jelszóváltás.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Jelszó megváltoztatva!");
define("MESSAGE_PASSWORD_EMPTY", "Nem maradhat üresen a jelszó!");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "A jelszó visszaállító levelet nem lehet kiküldeni! Hiba: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "A jelszó visszaállító email kiküldve!");
define("MESSAGE_PASSWORD_TOO_SHORT", "A jelszónak minimum 6 karakterből kell állnia!");
define("MESSAGE_PASSWORD_WRONG", "Hibás jelszó! Írd be újra!");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Sokszor hibás jelszót adtál meg, ezért 30 percig nem próbálkozhatsz!");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Sikertelen jelszó aktiválás...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Sikeres aktiválás! Beléphetsz!");
define("MESSAGE_REGISTRATION_FAILED", "Sikertelen regelés! Próblád meg újra!");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "A visszaállító linket 1 órával a regelés után aktiválni kell!");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Ismeretlen fiók.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Sikertelen emailküldés. Hiba: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Nem létezik ez a felhasználó");
define("MESSAGE_USERNAME_BAD_LENGTH", "A felasználónévnek 2 és 64 karakter között kell lennie!");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Felhasználónév váltás sikertelen");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Neved megváltoztatva! Neved: ");
define("MESSAGE_USERNAME_EMPTY", "Felhasználónév hiányzik");
define("MESSAGE_USERNAME_EXISTS", "Már van ilyen felasználónév! Lépj be!");
define("MESSAGE_USERNAME_INVALID", "Ezeket tartalmazhat a neved: a-Z +számok és 2 és 64 karakternek kell lennie");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Ugyan az a régi és az új felasználónév!");

// views
define("WORDING_BACK_TO_LOGIN", "Vissza a belépéshez!");
define("WORDING_CHANGE_EMAIL", "Email változtatás");
define("WORDING_CHANGE_PASSWORD", "Jelszó változtatás");
define("WORDING_CHANGE_USERNAME", "Felhasználónév változtatás");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Adataid szerkesztése");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Már be vagy lépve");
define("WORDING_FORGOT_MY_PASSWORD", "Elfelejtett jelszó");
define("WORDING_LOGIN", "Belépés");
define("WORDING_LOGOUT", "Kilépés");
define("WORDING_NEW_EMAIL", "Új email");
define("WORDING_NEW_PASSWORD", "Új jelszó");
define("WORDING_NEW_PASSWORD_REPEAT", "Új jelszó ismét");
define("WORDING_NEW_USERNAME", "Hibás az új neved!");
define("WORDING_OLD_PASSWORD", "RÉGI jelszavad");
define("WORDING_PASSWORD", "Jelszó");
define("WORDING_PROFILE_PICTURE", "Profilképed:");
define("WORDING_REGISTER", "Regelek");
define("WORDING_REGISTER_NEW_ACCOUNT", "Új fiók");
define("WORDING_REGISTRATION_CAPTCHA", "Írd be amit a Captcha-n látsz!");
define("WORDING_REGISTRATION_EMAIL", "Email címed(ide jön majd visszaigazoló levél)");
define("WORDING_REGISTRATION_PASSWORD", "Jelszó(min 6 karakter)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Jelszó újra");
define("WORDING_REGISTRATION_USERNAME", "Felhasználónév");
define("WORDING_REMEMBER_ME", "Bejelentkezve maradok!");
define("WORDING_REQUEST_PASSWORD_RESET", "Jelszó visszaállítás!");
define("WORDING_RESET_PASSWORD", "Elfelejtett jelszó");
define("WORDING_SUBMIT_NEW_PASSWORD", "Új jelszó küldése");
define("WORDING_USERNAME", "Felhasználónév");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Belépve, mint ");
