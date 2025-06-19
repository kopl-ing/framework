<?php

declare(strict_types=1);

namespace Kopling\Core\Interactions;

use Filament\Resources\Resource;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

abstract class AbstractInteraction implements HasLabel, HasIcon
{
    /**
     * @return null|class-string<Resource>
     */
    public function filamentResource(): ?string
    {
        return null;
    }
}
