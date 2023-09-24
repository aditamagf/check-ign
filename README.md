PHP Library for Checking a Game Nickname Based on an Account ID
------------
[![CHECK IGN](https://img.shields.io/badge/CHECK%20IGN-September%2024%2C%202023-36ade1.svg)](https://github.com/aditamagf/check-ign)
[![Packagist](https://img.shields.io/packagist/v/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![Total Downloads](https://img.shields.io/packagist/dt/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![CodeFactor](https://www.codefactor.io/repository/github/aditamagf/check-ign/badge)](https://www.codefactor.io/repository/github/aditamagf/check-ign)
[![GitHub Issues](https://img.shields.io/github/issues/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/issues)
[![GitHub Forks](https://img.shields.io/github/forks/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/network)
[![GitHub Stars](https://img.shields.io/github/stars/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/stargazers)
[![License](https://img.shields.io/github/license/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/blob/main/LICENSE)
[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Faditamagf%2Fcheck-ign&count_bg=%232BCCE3&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=views&edge_flat=false)](https://github.com/aditamagf/check-ign)

:coffee: Buy Me a Coffee
------------
[https://trakteer.id/aditamagf/tip](https://trakteer.id/aditamagf/tip)

Installation
------------
```
composer require aditamagf/check-ign
```

Usage
------------
```php
require('src/Games.php');

use Aditdev\ApiGames;

$api = new ApiGames;

echo $api->MOBILE_LEGENDS('<userID>', '<zoneID>');
echo $api->FREEFIRE('<userID>');
```

License
------------
This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------
All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

- Send feedbacks.
- Submit bug reports.
- Write/Edit the documents.
- Fix bugs or add new features.
