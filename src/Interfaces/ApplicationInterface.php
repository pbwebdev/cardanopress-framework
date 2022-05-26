<?php

/**
 * @package ThemePlate
 * @since   0.1.0
 */

namespace CardanoPress\Interfaces;

use Monolog\Logger;

interface ApplicationInterface
{
    public function __construct(string $pluginFile);

    public function isReady(): bool;

    public function getData(string $key): string;

    public function getPluginFile(): string;

    public function logger(string $channel): Logger;
}
