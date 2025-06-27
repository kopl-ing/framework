<?php

declare(strict_types=1);

namespace Kopling\Core\Interactions;

use Filament\Resources\Resource;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Tables\Columns\Column;

abstract class AbstractInteraction implements HasLabel, HasIcon
{
    /**
     * The Filament Resource class to allow managing interactions through the admin area.
     *
     * @return null|class-string<Resource>
     */
    public function filamentResource(): ?string
    {
        return null;
    }

    /**
     * Table column definition to render on the index.
     *
     * @return array<Column>|null
     */
    public function columns(): ?array
    {
        return null;
    }
}
