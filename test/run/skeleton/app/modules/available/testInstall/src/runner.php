<?php

$tpl = \BFW\Application::getInstance()
    ->getModuleList()
    ->getModuleByName('bfw-savant3')
    ->savant3
;
$tpl->display('test.tpl');

//print_r($output = $tpl->fetch('test.tpl'));
//var_dump($tpl->isError($output));
