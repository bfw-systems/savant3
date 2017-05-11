<?php

$config = $this->getConfig();

if ($config->getValue('initSavant3') === true) {
    $this->savant3 = new \Savant3([
        'template_path' => $config->getValue('templateDir')
    ]);
}
