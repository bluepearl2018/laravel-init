#Eutranet\'s Laravel Initialization
Ce package est conçu dans l'optique de contrôler 
et systématiser le contenu des packages installés 
et développés par Eutranet.

## Installation du package
L'installation du package a lieu via
la commande cli "php artisan eutranet:init".

### Le fournisseur InitServiceProvider
Cette classe de fourniture de service contient 
les informatiosn requises pour assurer 
la bonne installation du package (La base du 
package est celle de Freek @ spatie, mais 
des méthodes ont été rajoutées.)

### Fichier de configuration sous config
Le fichier de configuration "eutranet-init" indique 
les tables requises par défaut.

### Fichier de configuration
En effet, nous retrouvons la classe Package 
et PackageServiceProvider, qui sont appelées
par les packages installables d'Eutranet.

