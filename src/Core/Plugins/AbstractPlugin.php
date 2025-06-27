<?php

declare(strict_types=1);

namespace Kopling\Core\Plugins;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

abstract class AbstractPlugin implements HasLabel, HasIcon
{
    abstract public function getLabel(): ?string;
    abstract public function getIcon(): ?string;
    abstract public function interactions(): ?array;
}
