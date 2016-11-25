<?php

namespace classes;

abstract class Direction2 {
    static $north = null;
    static $east = null;
    static $west = null;
    static $south = null;

    abstract function opposite(): Direction2;

    static function init() {
        static::$north = new Direction2__North();
        static::$east = new Direction2__East();
        static::$north = new Direction2__West();
        static::$south = new Direction2__South();
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
}

Direction2::init();

class Direction2__North extends Direction2 {
    function opposite(): Direction2 {
        return Direction::SOUTH();
    }
}

class Direction2__East extends Direction2 {
    function opposite(): Direction2 {
        return Direction::WEST();
    }
}

class Direction2__West extends Direction2 {
    function opposite(): Direction2 {
        return Direction::EAST();
    }
}

class Direction2__South extends Direction2 {
    function opposite(): Direction2 {
        return Direction::NORTH();
    }
}
