<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form.php';

$creneau = new Creneau(9,12);
$creneau2 = new Creneau(13,16);
echo $creneau->toHtml();
$form = new form;
echo form ::checkbox('demo','Demo',[]);
phpinfo();
?>