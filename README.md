## PHP Library for Checking a Game Nickname Based on an Account ID

[![Packagist](https://img.shields.io/packagist/v/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![Total Downloads](https://img.shields.io/packagist/dt/aditamagf/check-ign)](https://packagist.org/packages/aditamagf/check-ign)
[![CodeFactor](https://www.codefactor.io/repository/github/aditamagf/check-ign/badge)](https://www.codefactor.io/repository/github/aditamagf/check-ign)
[![GitHub Issues](https://img.shields.io/github/issues/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/issues)
[![GitHub Forks](https://img.shields.io/github/forks/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/network)
[![GitHub Stars](https://img.shields.io/github/stars/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/stargazers)
[![License](https://img.shields.io/github/license/aditamagf/check-ign.svg)](https://github.com/aditamagf/check-ign/blob/main/LICENSE)

## :coffee: Buy Me a Coffee

- [https://ko-fi.com/aditamagf](https://ko-fi.com/aditamagf)
- [https://trakteer.id/aditamagf/tip](https://trakteer.id/aditamagf/tip)

## Installation

```
composer require aditamagf/check-ign
```

## Usage

```php
require 'src/ApiGames.php'; // or rely on Composer autoload

use Aditdev\ApiGames;

$api = new ApiGames();

// Modern API: returns an array
//   success -> ['status' => 200, 'nickname' => '...']
//   failure -> ['status' => 4xx|5xx, 'msg' => '...']
$result = $api->check('MOBILE_LEGENDS', '<userID>', '<zoneID>');
$result = $api->check('FREEFIRE', '<userID>');

// Helpers
$api->supports('MOBILE_LEGENDS'); // bool
$api->games();                    // array of supported game codes

// Legacy API (still supported): returns a JSON string
echo $api->MOBILE_LEGENDS('<userID>', '<zoneID>');
echo $api->FREEFIRE('<userID>');
```

### Adding or removing a game

Games are defined as plain data in [`src/games.php`](src/games.php). Add or
remove an entry there — no need to touch any class:

```php
'MOBILE_LEGENDS' => ['name' => 'Mobile Legends: Bang Bang', 'zone' => 'user'],
```

## List of Games

| Game                                  | Code                  |
| ------------------------------------- | --------------------- |
| 8 Ball Pool                           | EIGHT_BALL_POOL       |
| Arena of Valor                        | AOV                   |
| Asphalt 9: Legends                    | GAMELOFT_A9           |
| AU2 Mobile                            | AU_TWO_MOBILE         |
| Auto Chess                            | AUTO_CHESS            |
| Azur Lane                             | AZUR_LANE             |
| Badlanders                            | BAD_LANDERS           |
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
| GROWTOPIA                             | GROWTOPIA             |
| Hago                                  | HAGO                  |
| Laplace M                             | ZLONGAME              |
| League of Legends: Wild Rift          | WILD_RIFT             |
| LifeAfter                             | NETEASE_LIFEAFTER     |
| Love and Deepspace                    | LOVE_AND_DEEPSPACE    |
| MARVEL Duel                           | MARVEL_DUEL           |
| Mobile Legends: Bang Bang             | MOBILE_LEGENDS        |
| Mobile Legends: Adventure             | ADVENTURE             |
| MU Origin 2                           | OURPALM               |
| ONE PUNCH MAN: The Strongest          | ONE_PUNCH_MAN         |
| Onmyoji Arena                         | ONMYOJI_ARENA         |
| Pixel Gun 3D                          | PIXEL_GUN_3D          |
| Point Blank                           | POINT_BLANK           |
| Ragnarok M: Eternal Love Big Cat Coin | GRAVITY_RAGNAROK_M    |
| Ragnarok X: Next Generation           | RAGNAROK_X            |
| Sausage Man                           | SAUSAGE_MAN           |
| Speed Drifters                        | SPEEDDRIFTERS         |
| Super Mecha Champions                 | SUPER_MECHA_CHAMPIONS |
| Super SUS                             | SUPER_SUS             |
| VALORANT                              | VALORANT              |
| War Planet Online                     | WAR_PLANET_ONLINE     |
| Watcher of Realms                     | WATCHER_OF_REALMS     |
| ZEPETO                                | NAVER_Z_CORPORATION   |

## Star History

<a href="https://www.star-history.com/?repos=aditamagf%2Fcheck-ign&type=date&legend=top-left"><picture><source media="(prefers-color-scheme: dark)" srcset="https://api.star-history.com/chart?repos=aditamagf/check-ign&type=date&theme=dark&legend=top-left" /><source media="(prefers-color-scheme: light)" srcset="https://api.star-history.com/chart?repos=aditamagf/check-ign&type=date&legend=top-left" /><img alt="Star History Chart" src="https://api.star-history.com/chart?repos=aditamagf/check-ign&type=date&legend=top-left" /></picture></a>

## License

This open-source software is distributed under the MIT License. See LICENSE.md

## Contributing

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

- Send feedbacks.
- Submit bug reports.
- Write/Edit the documents.
- Fix bugs or add new features.
