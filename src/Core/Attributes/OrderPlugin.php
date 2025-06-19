<?php

declare(strict_types=1);

namespace Kopling\Core\Attributes;

use Attribute;
use Kopling\Core\Plugins\AbstractPlugin;

#[Attribute(Attribute::TARGET_CLASS)]
class OrderPlugin
{
    /**
     * @param class-string<AbstractPlugin>|null $before
     * @param class-string<AbstractPlugin>|null $after
     */
    public function __construct(
        public readonly ?string $before = null,
        public readonly ?string $after = null,
    )
    {}
}
