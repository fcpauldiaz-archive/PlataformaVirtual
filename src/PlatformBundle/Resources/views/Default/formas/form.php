<?php

define('EMAIL_FOR_REPORTS', 'xavier_123321@hotmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', '');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-light-green" style="background-color:#aaaa7f;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Registro Usuario</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Nombre Completo"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Nombre Usuario"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Correo Electrónico "/><span class="icon-place"></span></div></div>
	<div class="element-password<?php frmd_add_class("password"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="password" value="" placeholder="Contraseña"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Tipo de Usuario</label>		<div class="column column1"><label><input type="radio" name="radio" value="Estudiante" /><span>Estudiante</span></label><label><input type="radio" name="radio" value="Catedrático" /><span>Catedrático</span></label></div><span class="clearfix"></span>
</div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>