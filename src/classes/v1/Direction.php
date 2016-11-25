<?php

namespace classes\v1;

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
 *  CONS:
 *      - no easy iteration over all possible extensions.
 *      - no easy default value.
 */
abstract class Direction {
    static $north = null;
    static $east = null;
    static $west = null;
    static $south = null;

    protected function __construct() {}

    abstract function opposite(): Direction;

    static function NORTH() {
        if (static::$north === null) {
            static::$north = new North();
        }
        return static::$north;
    }

    static function EAST() {
        if (static::$east === null) {
            static::$east = new East();
        }
        return static::$east;
    }

    static function WEST() {
        if (static::$west === null) {
            static::$north = new West();
        }
        return static::$west;
    }

    static function SOUTH() {
        if (static::$south === null) {
            static::$south = new South();
        }
        return static::$south;
    }

    static function exampleUsage() {
        Direction::EAST();
        Direction::NORTH();
    }
}

