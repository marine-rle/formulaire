# Formulaire Test

## Installation
Installer Laravel en Homestead. Créer un fichier code dans le dossier Homestead. Télécharger le code et le placer dans Homestead/code/

- Modifier le fichier C:\Windows\System32\drivers\etc\hosts

````
#
127.0.0.1 localhost
::1 localhost
# Added by Docker Desktop
# 10.111.16.211 host.docker.internal
# 10.111.16.211 gateway.docker.internal
# To allow the same kube context to work on the host and the container:
127.0.0.1 kubernetes.docker.internal
# End of section
192.168.56.56 formulaire.test

````
- Modifier le fichier Homestead.yaml  dans C:\Users\marin\Homestead\

````
---
ip: "192.168.56.56"
memory: 12288
cpus: 4
provider: virtualbox

authorize: .ssh/id_rsa.pub

keys:
    - .ssh/id_rsa

folders:
    - map: code
      to: /home/vagrant/code

sites:
    - map: formulaire.test
      to: /home/vagrant/code/formulaire/public

databases:
    - formulaire
    - formulaire_test


features:
    - mysql: true
    - mariadb: false
    - postgresql: false
    - ohmyzsh: false
    - webdriver: false

services:
    - enabled:
          - "mysql"
#    - disabled:
#        - "postgresql@11-main"

#ports:
#    - send: 33060 # MySQL/MariaDB
#      to: 3306
#    - send: 4040
#      to: 4040
#    - send: 54320 # PostgreSQL
#      to: 5432
#    - send: 8025 # Mailhog
#      to: 8025
#    - send: 9600
#      to: 9600
#    - send: 27017
#      to: 27017
````
- Modifier le fichier .env dans C:\Users\marin\Homestead\code\formulaire
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=formulaire
DB_USERNAME=homestead
DB_PASSWORD=secret
````

- Lier le code à la base de donnée sur workbench
- ouvrir le cmd :
 ``cd/Homestead`` ->
 ``vagrant reload --provision `` ->
  ``vagrant ssh`` ->
  ``cd code/formulaire`` ->
  ``artisan migrate``


