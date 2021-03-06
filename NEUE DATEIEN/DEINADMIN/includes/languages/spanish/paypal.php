<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Mostrar Pedido: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Pedido PayPal Recibido (nuevo - antiguo)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal Pedido Recibido (nuevo - antiguo)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID Pedido (alto - bajo), PayPal Pedido Recibido');
  define('TEXT_SORT_ZEN_ORDER_ID', 'Pedido (bajo - alto), PayPal Pedido Recibido');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Valor del Pedido (alto - bajo)');
  define('TEXT_PAYMENT_AMOUNT', 'Valor del Pedido (bajo - alto)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'Notificaciones de pago instant??neo de PayPal');
  define('HEADING_PAYMENT_STATUS', 'Estado del pago');
  define('TEXT_ALL_IPNS', 'Todo');

  define('TABLE_HEADING_ORDER_NUMBER', 'Pedido N??');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Tipo de transacci??n');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Estado del pago');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Cantidad');
  define('TABLE_HEADING_ACTION', 'Acci??n');
  define('TABLE_HEADING_DATE_ADDED', 'A??adido el');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Cantidad entradas en el historial de estado');
  define('TABLE_HEADING_ENTRY_NUM', 'Entrada n??mero');
  define('TABLE_HEADING_TRANS_ID', 'ID de trans.');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Mostrando del <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> IPN\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Detalles de registro de cliente PayPal');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'Notificaci??n de pago instant??neo de PayPal');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Direcci??n');
  define('TEXT_INFO_ORDER_NUMBER', 'N??mero de pedido');
  define('TEXT_INFO_TXN_TYPE', 'Tipo de transacci??n');
  define('TEXT_INFO_PAYMENT_STATUS', 'Estado del pago');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Cantidad');
  //define('ENTRY_FIRST_NAME', 'Nombre');//steve duplicated, removed in ZC157
  define('ENTRY_LAST_NAME', 'Apellidos');
  define('ENTRY_BUSINESS_NAME', 'Nombre de la empresa');
  define('ENTRY_ADDRESS', 'Direcci??n');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID de pagador');
  define('ENTRY_PAYER_STATUS', 'Estado del pagador');
  define('ENTRY_ADDRESS_STATUS', 'Estado de la direcci??n');
  define('ENTRY_PAYMENT_TYPE', 'Tipo de pago');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Estado del pago');
  define('TABLE_HEADING_PENDING_REASON', 'Raz??n de pendiente');
  define('TABLE_HEADING_IPN_DATE', 'Fecha de IPN');
  define('ENTRY_INVOICE', 'Pedido');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID de transacci??n');
  define('ENTRY_PAYMENT_DATE', 'Fecha de pago');
  define('ENTRY_PAYMENT_LAST_MODIFIED', '??ltima modificaci??n');
  define('ENTRY_MC_CURRENCY', 'Divisa MC');
  define('ENTRY_MC_GROSS', 'MC Bruto');
  define('ENTRY_MC_FEE', 'MC Tarifa');
  define('ENTRY_PAYMENT_GROSS', 'Pago bruto');
  define('ENTRY_PAYMENT_FEE', 'Tarifa de pago');
  define('ENTRY_SETTLE_AMOUNT', 'Cantidad fija');
  define('ENTRY_SETTLE_CURRENCY', 'Divisa fija');
  define('ENTRY_EXCHANGE_RATE', 'Tasa de cambio');
  define('ENTRY_CART_ITEMS', 'N?? de elementos en el carro');
  define('ENTRY_CUSTOMER_COMMENTS', 'Comentarios del cliente');
  define('TEXT_NO_IPN_HISTORY', 'Historial de IPN no disponible');
  define('TEXT_TXN_SIGNATURE', 'Firma de la transacci??n');
  //end ADMIN text
?>
