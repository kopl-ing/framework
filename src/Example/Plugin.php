<?php

declare(strict_types=1);

namespace Kopling\Example;

use Kopling\Core\Attributes\OrderPlugin;
use Kopling\Core\Plugins\AbstractPlugin;
use Kopling\Polls\Plugin as Polls;

#[OrderPlugin(before: Polls::class)]
class Plugin extends AbstractPlugin
{
    public function getIcon(): ?string
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): ?string
    {
        // TODO: Implement getLabel() method.
    }

    public function interactions(): array
    {
        return [
//            MyInteraction::class, // this is identical to:
//            MyInteraction::class => Change::append,
            // Remove interactions
//            Interaction::class => Change::remove,
//            Interaction::class => fn () => Change::remove,
        ];
    }
}
