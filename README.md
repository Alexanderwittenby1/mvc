
Badges
------------------------------

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/build-status/main)




### Blackjack projekt

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/build-status/main)

## Om projektet

Detta projekt är en implementation av ett Blackjack-spel med PHP, Symfony och Doctrine ORM. 
Syftet med projektet är att skapa en webbapplikation där användare kan spela Blackjack mot en datoriserad dealer. 
Applikationen erbjuder en komplett lösning för att spela spelet, inklusive hantering av spelhänder, kort och resultat.


### Funktioner

- **Responsiv design**: Webbplatsen är designad för att fungera på alla enheter, inklusive mobiler, surfplattor och stationära datorer.
- **Spelmekanik**: Applikationen implementerar Blackjack-spelmekaniken, inklusive korthantering, resultatberäkning och regler för att vinna eller förlora.



## Installation och Uppstart

Följ dessa steg för att klona och köra projektet på din lokala maskin:

### Förutsättningar
- PHP ^8.0
- Composer
- Node.js med npm/yarn
- MySQL eller annan databashanterare

### Klona projektet & installera

```bash
git clone https://github.com/Alexanderwittenby1/mvc
cd mvc

```

### Composer

```bash
composer install
```

### NPM/Yarn
```bash
npm install
```


### Konfigurera databasen

```bash	
Kör följande kommandon i konsolen för att skapa databasen och tabeller:
php bin/console doctrine:migrations:migrate

```

### Starta servern
```bash
php -S localhost:8000 -t public

eller 

symfony server:start
```

### Testning & dokumentation

För att köra testen samt generera dokumentationen, kör följande kommando i konsolen:

```bash
composer phpdoc
composer lint
composer phpunit
composer phpstan
composer phpmetrics
```


## Granska dokumentationen & tester.

För att komma åt dokumentationen och tester behöver vi starta servern

```bash
php -S localhost:8000 
```
Skillnaden här är -t public som vi inte har i vår server:start.

Dokumentationen och tester finns på följande endpoints:


 - **API Dokumentation**: http://localhost:8000/docs/api/index.html
 - **Kodtäckning**: http://localhost:8000/docs/coverage/index.html
 - **Metrics**: http://localhost:8888/docs/metrics/index.html




Denna README.md bör täcka allt som behövs för att få igång och förstå ditt projekt.





