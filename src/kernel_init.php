<?php
/**
 * Actions à effectuer lors de l'initialisation du module par le framework.
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-sql
 * @version 1.0
 */
 
require_once($rootPath.'configs/bfw-savant3/config.php');

$tpl = new Savant3(array('template_path' => array($rootPath.$template_dir)));
?>