<?php

declare(strict_types=1);

namespace Kopling\Core\Plugins\Concerns;

use Kopling\Core\Interactions\AbstractInteraction;

trait ProvidesSingleInteraction
{
    protected string $interaction;

    public function interactions(): array
    {
        return [$this->interaction];
    }

    protected function class(): AbstractInteraction
    {
        $class = $this->interaction;

        return new $class();
    }

    public function getLabel(): ?string
    {
        return $this->class()->getLabel();
    }

    public function getIcon(): ?string
    {
        return $this->class()->getIcon();
    }
}
