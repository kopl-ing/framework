<?php

declare(strict_types=1);

namespace Kopling\Core\Plugins;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

abstract class AbstractPlugin implements HasLabel, HasIcon
{

    public function interactions(): array
    {
        return [];
    }
}
