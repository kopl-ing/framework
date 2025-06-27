<?php

declare(strict_types=1);

namespace Kopling\Polls;

use Kopling\Core\Attributes\OrderPlugin;
use Kopling\Core\Plugins\SingleInteractionPlugin;
use Kopling\Discussions\Plugin as Discussions;

#[OrderPlugin(after: Discussions::class)]
class Plugin extends SingleInteractionPlugin
{
    protected string $interaction = Interaction::class;
}
