<?php

declare(strict_types=1);

namespace Axleus\Pico\View\Helper;

use Laminas\View\Helper\AbstractHelper;

final class CssBaselineHelper extends AbstractHelper
{
    private const STYLES = <<<'EOT'
body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
#app-main {
    flex: 1;
}
EOT;

    public function __invoke(): string
    {
        return self::STYLES;
    }
}
