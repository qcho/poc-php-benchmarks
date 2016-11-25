<?php

namespace classes\v4;


abstract class Enum {
    protected static $elements = [];
    protected $key;

    protected function __construct(string $key) {
        $this->key = $key;
    }

    function getKey() {
        return $this->key;
    }

    protected static function add(Enum $newElement) {
        static::$elements[$newElement->getKey()] = $newElement;
    }

    abstract protected static function init();
    abstract static function DEFAULT();

    static function getAll(bool $includeDefaultValue = false) {
        $iterator = static::$elements;
        if ($includeDefaultValue) {
            $iterator['__DEFAULT'] = static::DEFAULT();
        }
        return $iterator;
    }
}
