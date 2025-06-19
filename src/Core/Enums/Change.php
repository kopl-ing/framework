<?php

declare(strict_types=1);

namespace Kopling\Core\Enums;

enum Change
{
    case append;
    case prepend;
    case replace;
}
