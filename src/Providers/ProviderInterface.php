<?php

namespace Aditdev\Providers;

use Aditdev\Support\Result;

interface ProviderInterface
{
    /**
     * Look up a nickname for the given account.
     *
     * @param array<string,mixed> $game    Game configuration entry from games.php
     * @param string              $id      Primary account/user id
     * @param string              $otherId Secondary id (server/zone), optional
     */
    public function lookup(array $game, $id, $otherId = ''): Result;
}
