<?php

namespace classes;

abstract class Direction {
    static $north = null;
    static $east = null;
    static $west = null;
    static $south = null;

    abstract function opposite(): Direction;

    static function NORTH() {
        if (static::$north === null) {
            static::$north = new Direction__North();
        }
        return static::$north;
    }

    static function EAST() {
        if (static::$east === null) {
            static::$east = new Direction__East();
        }
        return static::$east;
    }

    static function WEST() {
        if (static::$west === null) {
            static::$north = new Direction__West();
        }
        return static::$west;
    }

    static function SOUTH() {
        if (static::$south === null) {
            static::$south = new Direction__South();
        }
        return static::$south;
    }
}

class Direction__North extends Direction {
    function opposite(): Direction {
        return Direction::SOUTH();
    }
}

class Direction__East extends Direction {
    function opposite(): Direction {
        return Direction::WEST();
    }
}

class Direction__West extends Direction {
    function opposite(): Direction {
        return Direction::EAST();
    }
}

class Direction__South extends Direction {
    function opposite(): Direction {
        return Direction::NORTH();
    }
}
