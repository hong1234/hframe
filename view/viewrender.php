<?php
$smt = new Smarty ();
$smt->template_dir = './view/templates';
$smt->compile_dir = './view/templates_c';

foreach ( $results as $action => $result ) {
    $smt->assign ( $action.'data', $result[0] );
	$smt->assign ( $action, $result[1].'.tpl');
}

$smt->display('layout.tpl');