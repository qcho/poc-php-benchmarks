<?php

namespace spl;

/**
 * SPLENUM
 *  PROS:
 *      + easy to implement. just empty class with constants.
 *      + Can TypeHint.
 *      + official php extension implemented in C (pecl extension)
 *      + no initialization needed.
 *      + can iterate over values:
 *          + public array SplEnum::getConstList ([ bool $include_default = false ] )
 *  CONS:
 *      - not builtin in php.
 *      - pain to use. You need to: `new MyEnum(MyEnum::SOME_CONST)` every time.
 *      - poor performance. Different instances laying around. Can't === them.
 *      - only scalar values available.
 *      - cannot add custom behaviour without switch-casing.
 *
 */
class Direction extends \SplEnum {
    const NORTH = "NORTH";
    const EAST = "EAST";
    const SOUTH = "SOUTH";
    const WEST = "WEST";

    const __default = self::NORTH;
}
