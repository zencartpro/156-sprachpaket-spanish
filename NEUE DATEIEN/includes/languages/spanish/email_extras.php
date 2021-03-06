<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson Mon Apr 23 08:06:02 2018 -0400 Modified in v1.5.6 $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM','<strong>De:</strong>');
define('OFFICE_EMAIL','<strong>Email:</strong>');

define('OFFICE_SENT_TO','<strong>Enviado a:</strong>');
define('OFFICE_EMAIL_TO','<strong>Email a:</strong>');

define('OFFICE_USE','<strong>Sólo uso Admin:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Nombre Cliente:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>Email Cliente:</strong>');
define('OFFICE_LOGIN_PHONE','<strong>Teléfono:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>Dirección IP:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Host:</strong>');
define('OFFICE_DATE_TIME','<strong>Fecha y hora:</strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('EMAIL_TEXT_TELEPHONE', 'Teléfono: ');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Esta dirección de correo electrónico nos fue facilitada por usted o por alguno de nuestros clientes. Si piensa que ha recibido este mensaje por error, por favor, envíe un email a %s.<br /> ');
define('EMAIL_SPAM_DISCLAIMER', 'Este email ha sido enviado de acuerdo a la ley 34/2002 de 11 de Julio de servicios de la sociedad de la información y comercio electrónico. Las peticiones para darse de baja deberán ser enviadas a esta dirección, y serán cumplidas y respetadas.');
// Define a message you'd like to add to an order confirmation email
define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Basado en <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\nPara darse de baja de los boletines pulse aquí: \n");

// email advisory for all emails customer generate -  and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE:</strong> Para su protección y para prevenir usos maliciosos, todos los emails enviados a través de este sitio son registrados y sus contenidos son grabados y están disponibles para los administradores de la tienda. Si piensa que ha recibido este mensaje por error, por favor, envíe un email a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Este mensaje se incluye en todos los e-mails enviados desde esta página:</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[CREAR CUENTA]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[TARJETAS REGALO]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NUEVO PEDIDO]');
define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[INFO EXTRA DE PEDIDO CON TARJETA] #');

// Low Stock Emails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'Atención: stock bajo');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Aviso de stock bajo: ');
