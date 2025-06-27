<?php

declare(strict_types=1);

namespace Kopling\Discussions;

use Kopling\Core\Plugins\SingleInteractionPlugin;

class Plugin extends SingleInteractionPlugin
{
    protected string $interaction = Interaction::class;
}
