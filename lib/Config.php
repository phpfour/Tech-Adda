<?php

/**
 * Config
 *
 * Loads the configuration from INI file.
 *
 */
class Config
{
    private $configuration;

    public function __construct($configFile)
    {
        if (file_exists($configFile)) {
            $this->load($configFile);
        }
    }

    public function load($configFile)
    {
        $this->configuration = parse_ini_file($configFile);
    }

    public function get($key)
    {
        if (isset($this->configuration[$key])) {
            return $this->configuration[$key];
        }

        throw new InvalidArgumentException("Configuration with $key does not exist.");
    }
}