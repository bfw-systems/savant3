<?php

$config = $module->getConfig();

if ($config->getConfig('initSavant3') === true) {
    $module->savant3 = new \Savant3([
        'template_path' => $config->getConfig('templateDir')
    ]);
}
