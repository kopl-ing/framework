<?php

declare(strict_types=1);

namespace Kopling\Discussions;

use Kopling\Core\Interactions\AbstractInteraction;

class Interaction extends AbstractInteraction
{
    public function getIcon(): ?string
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): ?string
    {
        return 'Discussions';
    }

    public function filamentResource(): ?string
    {
        return DiscussionResource::class;
    }
}
