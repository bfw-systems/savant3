bfw-savant3
===========

[![Build Status](https://travis-ci.org/bulton-fr/bfw-savant3.svg?branch=2.0)](https://travis-ci.org/bulton-fr/bfw-savant3) [![Coverage Status](https://coveralls.io/repos/github/bulton-fr/bfw-savant3/badge.svg?branch=2.0)](https://coveralls.io/github/bulton-fr/bfw-savant3?branch=2.0) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bulton-fr/bfw-savant3/badges/quality-score.png?b=2.0)](https://scrutinizer-ci.com/g/bulton-fr/bfw-savant3/?branch=2.0)
[![Latest Stable Version](https://poser.pugx.org/bulton-fr/bfw-savant3/v/stable)](https://packagist.org/packages/bulton-fr/bfw-savant3) [![License](https://poser.pugx.org/bulton-fr/bfw-savant3/license)](https://packagist.org/packages/bulton-fr/bfw-savant3)

Module to use [Savant3](https://github.com/saltybeagle/Savant3) library with BFW framework

---

__Install :__

You can use composer to get the module : `composer require bulton-fr/bfw-savant3 @stable`

And to install the module : `./vendor/bin/bfwInstallModules`

__Config :__

All config file for this module will be into `app/config/bfw-savant3/`. There is one files to configure (manifest.json is for the module update system).

The file config.php. You have a returned array with two keys :
* `templateDir` : It's the path to the template directory (you can use constant create by the framework)
* `initSavant3` : Define if savant3 will be instanciate by the module himself or not

__Use it :__

If the config allow the module to instantiate Savant3, the instance will be saved into the property `savant3` of the \BFW\Module instance for this module.

You can access to the property from anywhere with `\BFW\Application::getInstance()->getModuleList()->getModuleByName('bfw-savant3')->savant3;`
