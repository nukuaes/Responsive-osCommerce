<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_TITLE', 'Pago directo Sage');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_PUBLIC_TITLE', 'Tarjeta de credito (Gestionado por Sage Pay)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&direct" target="_blank" style="text-decoration: underline; font-weight: bold;">Ver documentación on-line</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Using the above link to signup at Sage Pay grants osCommerce a small financial bonus for referring a customer.</i></span>');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CURL', 'Este módulo requiere que cURL esté habilitado en PHP y no funcionara hasta que se haya habilitado en este servidor.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CONFIGURATION', 'Este módulo no funcionara hasta que configure los parametros de Login del Vendedor. Por favor configure los ajustes del modulo');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NEW', 'Intruduzca nueva tarjeta');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_TYPE', 'Clase de tarjeta:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_OWNER', 'Nombre en la tarjeta:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NUMBER', 'Numero de tarjeta:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS', 'Valida desde:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS_INFO', '(unicamente para tarjetas Maestro y American Express)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_EXPIRES', 'Fecha caducidad:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER', 'Número de emisión:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER_INFO', '(unicamente para tarjetas Maestro)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_CVC', 'Codigo de seguridad:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_SAVE', '¿Guardar tarjeta para próximos usos?');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_TITLE', '3D Secure Verification');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_INFO', 'Por favor, haga click en el botón continuar para comprobar su tarjeta en la web de su entidad bancaria.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_BUTTON', 'CONTINUAR');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_TITLE', 'Se ha producido un error al procesar su tarjeta de crédito');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_GENERAL', 'Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDTYPE', 'No se admite el tipo de tarjeta. Por favor, inténtelo de nuevo con otra tarjeta y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDOWNER', 'El nombre del propietarios de la tarjeta se debe proporcionar para completar el pedido. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDNUMBER', 'El número de tarjeta no pudo de ser procesado. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDSTART', 'La fecha de inicio de validez de la tarjeta no pudo ser procesada. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDEXPIRES', 'La fecha de caducidad de la tarjeta no pudo ser procesada. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDISSUE', 'El número de emisión de la tarjeta no pudo ser procesado. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDCVC', 'El código de seguridad de la tarjeta no pudo ser procesado. Por favor, inténtelo de nuevo y si los problemas persisten, intente otra forma de pago.');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_LINK_TITLE', 'Probando Conexión servidor de API');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TITLE', 'Probando Conexión servidor de API');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_GENERAL_TEXT', 'Probando conexión con el servidor..');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_BUTTON_CLOSE', 'Cerrar');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TIME', 'Tiempo de conexión:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_SUCCESS', 'Hecho!');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_FAILED', 'Error! Por favor, revise la configuración de certificados SSL y vuelva a intentarlo.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_ERROR', 'Ha ocurrido un error. Por favor, actualice la página, revise la configuración y vuelva a intentarlo.');
?>
