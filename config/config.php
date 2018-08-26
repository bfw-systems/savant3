<?php
/**
 * Fichier de configuration du module bfw-savant3
 * 
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-savant3
 * @version 2.0
 */

return [
    /**
     * @var string[] templateDir : Directory where is template files from root
     *  project directory.
     * 
     * @suggest: ['/src/view/tpl']
     */
    'templateDir' => [''],
    
    /**
     * @var boolean initSavant3 : Declare if module create a instance
     *  of Savant3 or not.
     * If declared to true, you can find instance with
     * \BFW\Application::getInstance()
     *  ->getModuleList()
     *  ->getModuleByName('bfw-savant3')
     *  ->savant3
     */
    'initSavant3' => true
];
