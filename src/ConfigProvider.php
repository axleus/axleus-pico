<?php

declare(strict_types=1);

namespace Axleus\Pico;

use Laminas\Form\View\Helper\FormElementErrors;

/**
 * The configuration provider for the pico module
 *
 * @see https://docs.laminas.dev/laminas-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     */
    public function __invoke() : array
    {
        return [
            'dependencies'       => $this->getDependencies(),
            'templates'          => $this->getTemplates(),
            'view_helper_config' => $this->getViewHelperConfig(),
            'view_helpers'       => $this->getViewHelpers(),
            'view_manager'       => $this->getViewManagerConfig(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
            'invokables' => [
            ],
            'factories'  => [
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates() : array
    {
        return [
            'paths' => [
                'pico'    => [__DIR__ . '/../templates/'],
            ],
        ];
    }

    public function getViewHelperConfig(): array
    {
        return [
            'doctype' => 'HTML5',
            'form_element_errors' => [
                'message_open_format'      => '<small%s>',
                'message_separator_string' => '',
                'message_close_string'     => '</small>',
            ],
        ];
    }

    public function getViewHelpers(): array
    {
        return [
            'aliases'    => [
                'cssBaseline' => View\Helper\CssBaselineHelper::class,
            ],
            'delegators' => [
                FormElementErrors::class => [
                    Form\View\Helper\FormElementErrorsDelegatorFactory::class,
                ],
            ],
            'invokables' => [
                View\Helper\CssBaselineHelper::class => View\Helper\CssBaselineHelper::class,
            ],
        ];
    }

    public function getViewManagerConfig(): array
    {
        return [
            'base_path' => '/',
        ];
    }
}
