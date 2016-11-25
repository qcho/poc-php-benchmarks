<?php

namespace classes\v3\days;


use classes\v3\Enum;

abstract class Day extends Enum  {

    static function init() {
        static::$elements['SUNDAY'] = new Sunday();
        static::$elements['MONDAY'] = new Monday();
        static::$elements['TUESDAY'] = new Tuesday();
        static::$elements['WEDNESDAY'] = new Wednesday();
        static::$elements['THURSDAY'] = new Thursday();
        static::$elements['FRIDAY'] = new Friday();
        static::$elements['SATURDAY'] = new Saturday();
    }

    static function DEFAULT() {
        return static::SUNDAY();
    }

    static function SUNDAY() {
        return static::$elements['SUNDAY'];
    }
    static function MONDAY() {
        return static::$elements['MONDAY'];
    }
    static function TUESDAY() {
        return static::$elements['TUESDAY'];
    }
    static function WEDNESDAY() {
        return static::$elements['WEDNESDAY'];
    }
    static function THURSDAY() {
        return static::$elements['THURSDAY'];
    }
    static function FRIDAY() {
        return static::$elements['FRIDAY'];
    }
    static function SATURDAY() {
        return static::$elements['SATURDAY'];
    }
}

Day::init();