<?php

declare(strict_types=1);

namespace Kopling\Discussions;

use Filament\Resources\Resource;

class DiscussionResource extends Resource
{
    protected static ?string $model = Discussion::class;
}
