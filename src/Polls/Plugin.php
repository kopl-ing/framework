<?php

declare(strict_types=1);

namespace Kopling\Polls;

use Kopling\Core\Plugins\AbstractPlugin;
use Kopling\Core\Plugins\Concerns\ProvidesSingleInteraction;

class Plugin extends AbstractPlugin
{
    use ProvidesSingleInteraction;

    protected string $interaction = Interaction::class;
}
