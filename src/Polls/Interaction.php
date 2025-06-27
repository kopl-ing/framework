<?php

declare(strict_types=1);

namespace Kopling\Polls;

use Kopling\Core\Interactions\AbstractInteraction;

class Interaction extends AbstractInteraction
{
    public function getIcon(): ?string
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): ?string
    {
        return 'Polls';
    }
}
