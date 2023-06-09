<?php

namespace Northwestern\SysDev\UI\Services\GlobalAlerts;

use Illuminate\Contracts\Foundation\Application;

/**
 * @package Northwestern\SysDev\UI\Services\GlobalAlerts
 *
 * Abstract class for implementing global alert handlers.
 * Provides a base structure for Global Alert handling with access to the application instance.
 */
abstract class GlobalAlert
{
     public function __construct(
        protected Application $app
    ){}

    /**
     * Determines whether the global alert associated with this handler is currently active.
     */
    abstract public function isActive(): bool;

    /**
     * Retrieves the details of the global alert associated with this handler.
     *
     * Implementing classes should return an instance of the {@see GlobalAlertDetails} class,
     * which encapsulates the message to be displayed for the alert and the style of the alert.
     */
    abstract public function getDetails(): GlobalAlertDetails;
}
