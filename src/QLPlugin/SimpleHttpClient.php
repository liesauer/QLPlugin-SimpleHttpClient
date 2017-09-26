<?php

namespace liesauer\QLPlugin;

use liesauer\Gincs\SimpleHttpClient as SHC;
use QL\Contracts\PluginContract;
use QL\QueryList;

class SimpleHttpClient implements PluginContract
{
    public static function install(QueryList $querylist, ...$opts)
    {
        $querylist->bind('quickGet', function (...$args) {
            return SHC::quickGet(...$args);
        });
        $querylist->bind('quickPost', function (...$args) {
            return SHC::quickPost(...$args);
        });
    }
}
