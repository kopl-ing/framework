<?php

declare(strict_types=1);

namespace Kopling\Polls;

use Kopling\Core\Attributes\OrderPlugin;
use Kopling\Core\Plugins\AbstractPlugin;

#[OrderPlugin(before: Plugin::class)]
class Plugin extends AbstractPlugin
{
    public function getIcon(): ?string
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): ?string
    {
        return 'Polls';
    }

    public function interactions(): array
    {
        return [
            Poll::class
        ];
    }
}
