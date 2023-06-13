<?php

namespace Northwestern\SysDev\UI\Services\GlobalAlerts;

/**
 * @package Northwestern\SysDev\UI\Services\GlobalAlerts
 *
 * DTO for global alert details.
 */
class GlobalAlertDetails
{
    /**
     * Bootstrap contextual styles
     *
     * @link https://getbootstrap.com/docs/5.0/components/alerts/#examples
     */
    private const VALID_STYLES = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    public function __construct(
        private string $message,
        private string $style
    ) {
        if (!in_array($style, self::VALID_STYLES)) {
            throw new \InvalidArgumentException("Invalid style: $style. Must be one of: " . implode(', ', self::VALID_STYLES));
        }
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function toArray(): array
    {
        return [
            'message' => $this->getMessage(),
            'style' => $this->getStyle(),
        ];
    }
}
