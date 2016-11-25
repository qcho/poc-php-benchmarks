<?php

namespace classes\v3\directions;
use classes\v3\Enum;

/**
 * Singletons & Interfaces
 *  PROS:
 *      + builtin to php. just classes and extensions.
 *      + straight forward to implement but somewhat tedious.
 *      + Singletons for only one subclass in memory.
 *      + Can TypeHint.
 *          + Even adding extra interface layering like x-axis: N & S, y-axis: W & E
 *      + easy to add custom behaviour like "oposite".
 *      + can iterate over values:
 *          + public array SplEnum::getConstList ([ bool $include_default = false ] )
 *      + Good performnace. === can be done.
 *      + default value simply other method DEFAULT();
 *      + can iterate easyly because implementation in static array.
 *  CONS:
 */
abstract class Direction extends Enum {

    abstract function opposite(): Direction;

    static function init() {
        static::$elements['NORTH'] = new North();
        static::$elements['EAST'] = new East();
        static::$elements['WEST'] = new West();
        static::$elements['SOUTH'] = new South();
    }

    static function NORTH() {
        return static::$elements['NORTH'];
    }

    static function EAST() {
        return static::$elements['EAST'];
    }

    static function WEST() {
        return static::$elements['WEST'];
    }

    static function SOUTH() {
        return static::$elements['SOUTH'];
    }

    static function DEFAULT() {
        return static::NORTH();
    }

    private static function exampleUsage() {
        Direction::EAST();
        Direction::NORTH();

        Direction::DEFAULT();
    }
}

Direction::init();