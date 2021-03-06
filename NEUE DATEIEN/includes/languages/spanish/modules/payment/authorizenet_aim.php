<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: authorizenet_aim.php 295 2019-05-09 10:10:40Z webchills $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.<br /><br />' : '') . '<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL functions not found - required for Authorize.net AIM payment module');

// Catalog Items
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Kreditkarte');  // Payment option title as displayed to the customer
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Kreditkarte:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Karteninhaber:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Kartennummer:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Karte g??ltig bis:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV Number:');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Was ist das?');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Der Name des Karteninhabers muss aus mindestens ' . CC_OWNER_MIN_LENGTH . ' Zeichen bestehen.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss aus mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen bestehen.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Den 3 bzw. 4-Stelligen Sicherheitscode finden Sie auf der R??ckseite Ihrer Kreditkarte.\n');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Diese Kreditkarte wurde abgelehnt. Bitte korrigieren Sie Ihre Eingaben und versuchen Sie es noch einmal oder kontaktieren Sie uns f??r weitere Instruktionen.');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Kreditkarten Fehler!');
define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR', 'Unable to process payment due to a communications error. You may try again or contact us for assistance.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'R??ckerstattung');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'FEHLER: Sie haben R??ckerstattung beantragt, aber die Best??tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'FEHLER: Sie haben R??ckerstattung beantragt, haben aber einen ung??ltigen Betrag eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'FEHLER: Sie haben R??ckerstattung beantragt, habe aber die letzten 4 Stellen der Kreditkartennummer nicht eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'R??ckerstattung initialisiert. Transaktion ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'FEHLER: Sie wollten die R??ckerstattung akzeptieren, haben aber nicht die Best??tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'R??ckerstatten');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'FEHLER: Sie haben eine R??ckerstattung angefordert, haben aber nicht den Betrag eingegeben.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'FEHLER: Bitte geben Sie die Transaktions ID ein.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'R??ckerstattung gestartet. Betrag: %s.  Transaktion ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Zahlung aufheben');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'FEHLER: Sie haben eine Aufhebung beantragt, aber die Best??tigungs-Box nicht aktiviert.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Aufhebung gestartet. Transaktion ID: %s - Auth Code: %s ');


  
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>R??ckerstattung Transaktionen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Sie k??nnen hier Geld an der Zahler (Kreditkarte) zur??ck ??berweisen:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Markieren Sie die Box bevor Sie Best??tigen: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Geben Sie den R??ckerstattungsbetrag ein');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Geben Sie die letzten 4 Ziffern der Konto Nummer ein.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Geben Sie optional die Transaktion ID ein:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestell-Historie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Ausgef??hrte R??ckerstattungen');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Sie k??nnen ein R??ckerstattung f??r einen Auftrag in der H??he des urspr??nglichen Betrags ausf??hren. Sie m??ssen die letzten 4 Stellen der Konto-Nr. angeben, unter der der Auftrag ausgef??hrt wurde.<br />R??ckerstattungen k??nnen innerhalb 120 Tagen ab dem orginal Transaktionsdatum durchgef??hrt werden.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Transaktionen r??ckg??ngig machen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Hier k??nnen Sie bereits authorisierte Zahlungen r??ckg??ngig machen:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Geben Sie den Betrag ein: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Aktivieren Sie die Box um zu best??tigen: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Geben sie hier die urspr??ngliche Transaktion ID ein: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestellhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'R??ckg??ngig gemachte Zahlungen.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Zahlungen k??nnen innerhalb von 30 Tagen ab der Transaktion get??tigt werden. R??ckf??hrung ist EINMALIG.<br />Stellen Sir sicher, da?? der Betrag korrekt ist.<br />Original betrag wird r??ckg??ngig gemacht, wenn Sie keinen Betrag eingeben.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Transaktionen l??schen</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Sie k??nnen Transaktionen l??schen, die bisher noch nicht beglichen wurden:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Aktivieren Sie die Box um zu best??tigen:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Bemerkung (Erscheint nur in der Bestellhistorie):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktion gel??scht');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'L??schungen k??nnen nur t??glich vorgenommen werden.');

