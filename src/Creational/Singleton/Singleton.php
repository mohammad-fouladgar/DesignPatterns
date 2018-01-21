<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    private static $uniqueInstance = null;

    /**
     * Prevent any oustide instantiation of this class.
     */
    private function __construct()
    {
    }

    /**
     * Prevent any object or instance of that class to be cloned.
     * Prevent any copy of this object.
     */
    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new self();
        }

        return self::$uniqueInstance;
    }

    public function displayMessage()
    {
        return 'This is instance of singleton class';
    }
}
