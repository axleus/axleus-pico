<?php

declare(strict_types=1);

namespace Axleus\Pico\View\Helper;

use Laminas\View\Helper\AbstractHelper;

final class CssBaselineHelper extends AbstractHelper
{
    private const STYLES = <<<'EOT'
/* Reset kindly provided by github user https://github.com/pietz */
:root {
    --pico-font-family-sans-serif: Inter, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, Helvetica, Arial, "Helvetica Neue", sans-serif, var(--pico-font-family-emoji);
    --pico-font-size: 87.5%;
    /* Original: 100% */
    --pico-line-height: 1.25;
    /* Original: 1.5 */
    --pico-form-element-spacing-vertical: 0.5rem;
    /* Original: 1rem */
    --pico-form-element-spacing-horizontal: 1.0rem;
    /* Original: 1.25rem */
    --pico-border-radius: 0.375rem;
    /* Original: 0.25rem */
}

@media (min-width: 576px) {
    :root {
        --pico-font-size: 87.5%;
        /* Original: 106.25% */
    }
}

@media (min-width: 768px) {
    :root {
        --pico-font-size: 87.5%;
        /* Original: 112.5% */
    }
}

@media (min-width: 1024px) {
    :root {
        --pico-font-size: 87.5%;
        /* Original: 118.75% */
    }
}

@media (min-width: 1280px) {
    :root {
        --pico-font-size: 87.5%;
        /* Original: 125% */
    }
}

@media (min-width: 1536px) {
    :root {
        --pico-font-size: 87.5%;
        /* Original: 131.25% */
    }
}

h1,
h2,
h3,
h4,
h5,
h6 {
    --pico-font-weight: 600;
    /* Original: 700 */
}

article {
    border: 1px solid var(--pico-muted-border-color);
    /* Original doesn't have a border */
    border-radius: calc(var(--pico-border-radius) * 2);
    /* Original: var(--pico-border-radius) */
}

article>footer {
    border-radius: calc(var(--pico-border-radius) * 2);
    /* Original: var(--pico-border-radius) */
}

body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
#app-main {
    flex: 1;
}
article {
    height: 95%;
}
dialog > article {
    height:auto;
}
a:link {
    text-decoration: none;
}
a:visted {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
EOT;

    public function __invoke(): string
    {
        return self::STYLES;
    }
}