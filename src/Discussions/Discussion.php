<?php

declare(strict_types=1);

namespace Kopling\Discussions;

use Kopling\Core\Interactions\AbstractInteraction;

class Discussion extends AbstractInteraction
{
    public function getIcon(): ?string
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): ?string
    {
        return 'Discussions';
    }
}
