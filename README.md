
Badges
------------------------------

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/build-status/main)




# [Blacjack](https://github.com/Alexanderwittenby1/mvc)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Alexanderwittenby1/mvc/build-status/main)

## Om projektet

Detta projekt syftar till att Det är byggt med hjälp av [teknologier, ramverk etc.] och är designat för att vara [t.ex. användarvänligt, kraftfullt, etc.].

Projektet är uppdelat i olika moduler och innehåller följande komponenter:
- **Webbplatsen**: En dynamisk webbplats byggd med [verktyg] som hanterar [specifik funktionalitet].
- **API**: Ett API som tillhandahåller [beskriv kort vad API:t gör].


### Funktioner

- **Responsiv design**: Webbplatsen är designad för att fungera på alla enheter, inklusive mobiler, surfplattor och stationära datorer.


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





