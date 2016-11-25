<?php

namespace classes\v3;


abstract class Enum {
    protected static $elements = [];

    protected function __construct() {}

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
