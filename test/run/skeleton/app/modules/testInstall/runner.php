<?php

$tpl = \BFW\Application::getInstance()->getModule('bfw-savant3')->savant3;
$tpl->display('test.tpl');

//print_r($output = $tpl->fetch('test.tpl'));
//var_dump($tpl->isError($output));
