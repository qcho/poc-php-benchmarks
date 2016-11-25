<?php

namespace classes\v2;

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
 */
abstract class Direction {
    static $north = null;
    static $east = null;
    static $west = null;
    static $south = null;

    protected function __construct() {}

    abstract function opposite(): Direction;

    static function init() {
        static::$north = new North();
        static::$east = new East();
        static::$north = new West();
        static::$south = new South();
    }

    static function NORTH() {
        return static::$north;
    }

    static function EAST() {
        return static::$east;
    }

    static function WEST() {
        return static::$west;
    }

    static function SOUTH() {
        return static::$south;
    }

    static function DEFAULT() {
        return static::NORTH();
    }

    static function exampleUsage() {
        Direction::EAST();
        Direction::NORTH();

        Direction::DEFAULT();
    }
}

Direction::init();

