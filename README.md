# Bibliothèque de parsage de fichier de données

Le but de cette bibliothèque est de pouvoir parser des données d'un fichier modèle de Civiparoisse. Cette bibliothèque a peu de dépendance et n'est pas intégrée à l'extension Civiparoisse justement pour garder peu de dépendances, afin de pouvoir rapidement vérifier des fichiers de données sans avoir besoin d'une installation CiviCRM.
## Usage type
preview.php :

```php
<?php
require_once('vendor/autoload.php');
\Uepal\CiviImport\Extractor::preview();

```

preview.sh :

```bash
#!/bin/bash
export CIVIPAROISSE_IMPORT_SHEETNAME=Feuil1
export CIVIPAROISSE_IMPORT_FILEPATH=/IMPORT/test1.xlsx
php preview.php
```


