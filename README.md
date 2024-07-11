## PHP Library for Checking a Game Nickname Based on an Account ID

[![CHECK IGN](https://img.shields.io/badge/CHECK%20IGN-September%2024%2C%202023-36ade1.svg)](https://github.com/aditamagf/check-ign)
[![Packagist](https://img.shields.io/packagist/v/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![Total Downloads](https://img.shields.io/packagist/dt/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![CodeFactor](https://www.codefactor.io/repository/github/aditamagf/check-ign/badge)](https://www.codefactor.io/repository/github/aditamagf/check-ign)
[![GitHub Issues](https://img.shields.io/github/issues/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/issues)
[![GitHub Forks](https://img.shields.io/github/forks/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/network)
[![GitHub Stars](https://img.shields.io/github/stars/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/stargazers)
[![License](https://img.shields.io/github/license/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/blob/main/LICENSE)
[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Faditamagf%2Fcheck-ign&count_bg=%232BCCE3&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=views&edge_flat=false)](https://github.com/aditamagf/check-ign)

## :coffee: Buy Me a Coffee

- [https://ko-fi.com/aditamagf](https://ko-fi.com/aditamagf)
- [https://trakteer.id/aditamagf/tip](https://trakteer.id/aditamagf/tip)

## Installation

```
composer require aditamagf/check-ign
```

## Usage

```php
require('src/Games.php');

use Aditdev\ApiGames;

$api = new ApiGames;

echo $api->MOBILE_LEGENDS('<userID>', '<zoneID>');
echo $api->FREEFIRE('<userID>');
```

## List of Games

| Game                                  | Code                  |
| ------------------------------------- | --------------------- |
| 8 Ball Pool                           | EIGHT_BALL_POOL       |
| Aether Gazer                          | AETHER_GAZER          |
| Arena of Valor                        | AOV                   |
| Asphalt 9: Legends                    | GAMELOFT_A9           |
| AU2 Mobile                            | AU_TWO_MOBILE         |
| Auto Chess                            | AUTO_CHESS            |
| Azur Lane                             | AZUR_LANE             |
| Badlanders                            | BAD_LANDERS           |
| BarbarQ                               | ELECSOUL              |
| Basketrio                             | BASKETRIO             |
| Call of Duty Mobile                   | CALL_OF_DUTY          |
| Captain Tsubasa: Dream Team           | CAPTAIN_TSUBASA       |
| Crisis Action                         | CA_HEROGAMES          |
| Dragon City                           | DRAGON_CITY           |
| Dragon Raja                           | ZULONG_DRAGON_RAJA    |
| EOS RED                               | EOS_RED               |
| Farlight 84                           | FARLIGHT84            |
| Football Master 2                     | FOOTBALL_MASTER       |
| Free Fire                             | FREEFIRE              |
| Genshin Impact                        | GENSHIN_IMPACT        |
| Hago                                  | HAGO                  |
| Identity V                            | IDENTITY_V            |
| Laplace M                             | ZLONGAME              |
| League of Legends: Wild Rift          | WILD_RIFT             |
| LifeAfter                             | NETEASE_LIFEAFTER     |
| MARVEL Duel                           | MARVEL_DUEL           |
| Mobile Legends: Bang Bang             | MOBILE_LEGENDS        |
| Mobile Legends: Adventure             | ADVENTURE             |
| MU Origin 2                           | OURPALM               |
| ONE PUNCH MAN: The Strongest          | ONE_PUNCH_MAN         |
| Onmyoji Arena                         | ONMYOJI_ARENA         |
| Point Blank                           | POINT_BLANK           |
| Ragnarok M: Eternal Love Big Cat Coin | GRAVITY_RAGNAROK_M    |
| Ragnarok X: Next Generation           | RAGNAROK_X            |
| Sausage Man                           | SAUSAGE_MAN           |
| Speed Drifters                        | SPEEDDRIFTERS         |
| Super Mecha Champions                 | SUPER_MECHA_CHAMPIONS |
| Super SUS                             | SUPER_SUS             |
| VALORANT                              | VALORANT              |
| ZEPETO                                | NAVER_Z_CORPORATION   |

## License

This open-source software is distributed under the MIT License. See LICENSE.md

## Contributing

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

- Send feedbacks.
- Submit bug reports.
- Write/Edit the documents.
- Fix bugs or add new features.
