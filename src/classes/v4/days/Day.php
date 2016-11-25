<?php

namespace classes\v4\days;


use classes\v4\Enum;

abstract class Day extends Enum  {

    static function init() {
        static::add(new class('SUNDAY') extends Day {});
        static::add(new class('MONDAY') extends Day {});
        static::add(new class('TUESDAY') extends Day {});
        static::add(new class('WEDNESDAY') extends Day {});
        static::add(new class('THURSDAY') extends Day {});
        static::add(new class('FRIDAY') extends Day {});
        static::add(new class('SATURDAY') extends Day {});
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