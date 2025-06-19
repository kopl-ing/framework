<?php

declare(strict_types=1);

namespace Kopling\Core\Attributes;

use Attribute;
use Kopling\Core\Enums\Change;

#[Attribute(Attribute::TARGET_CLASS)]
class Interaction
{
    public function __construct(
        public readonly Change $change,
    )
    {}
}
