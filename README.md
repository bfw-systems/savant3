bfw-savant3
===========

Module for use the Savant3 library with BFW framework

[![Dependency Status](https://www.versioneye.com/user/projects/54615af1a23e4120dd000053/badge.svg?style=flat)](https://www.versioneye.com/user/projects/54615af1a23e4120dd000053)
[![Latest Stable Version](https://poser.pugx.org/bulton-fr/bfw-savant3/v/stable.svg)](https://packagist.org/packages/bulton-fr/bfw-savant3) [![Latest Unstable Version](https://poser.pugx.org/bulton-fr/bfw-savant3/v/unstable.svg)](https://packagist.org/packages/bulton-fr/bfw-savant3) [![License](https://poser.pugx.org/bulton-fr/bfw-savant3/license.svg)](https://packagist.org/packages/bulton-fr/bfw-savant3)


---

__Installation :__

Il est recommandé d'utiliser composer pour installer le framework :

Pour récupérer composer:
```
curl -sS https://getcomposer.org/installer | php
```

Pour installer le framework, créez un fichier "composer.json" à la racine de votre projet, et ajoutez-y ceci:
```
{
    "require": {
        "bulton-fr/bfw-savant3": "@stable"
    }
}
```

Enfin, pour lancer l'installation, 2 étapes sont nécessaires :

Récupérer le module via composer :
```
php composer.phar install
```
Via un utilitaire du framework BFW, créer un lien vers le module dans le dossier module du projet :
```
./vendor/bin/bfw_loadModules
```
