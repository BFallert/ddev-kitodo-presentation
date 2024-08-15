# ddev-kitodo-presentation
Launch DDev development system with ready-to-use TYPO3 and Kitodo.Presentation


## Start the Project

Just execute the `./start-slubdigitalcollections.sh` script to

* create and start the DDEV project
* install all dependancies including TYPO3 and Kitodo.Presentation
* import the database

## Usage

### TYPO3 Login

Login to TYPO3-Backend is possible at https://ddev-kitodo-presentation.ddev.site/typo3/

* Login: `admin`
* Password: `adminslub`

### PHPMyAdmin

With `ddev launch -p` you launch the PHPMyAdmin to access the TYPO3 database.

## Solar installieren
ddev get ddev/ddev-typo3-solr

### Typo3 Konfiguration
#### Admin Tools / Settings / dlf / Solr
Solr Server Host: ddev-kitodo-presentation.ddev.site  (so auch der Projektordner)

Solr Server Port: 8983

Solr Server Path: /

Rest ist unverändert

### Solr Admin
http://ddev-kitodo-presentation.ddev.site:8983/solr/

http://ddev-kitodo-presentation.ddev.site:8983/solr/#/dlfCore0/core-overview