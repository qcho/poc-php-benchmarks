<?php

namespace php;

use MyCLabs\Enum\Enum;

/**
 * EnumInPHP
 *  PROS:
 *      + easy to implement. just empty class with constants.
 *      + Can TypeHint.
 *      + no initialization needed.
 *      + can't iterate over values:
 *      + Same instance always. === works.
 *  CONS:
 *      - not builtin in php.
 *      - not so great performance due to magic calls.
 *      - usage not so great. Magic ::OPTION() is not suggested.
 *      - only scalar values available.
 *      - cannot add custom behaviour without switch-casing.
 */
class Direction extends Enum {
    const NORTH = "NORTH";
    const EAST = "EAST";
    const SOUTH = "SOUTH";
    const WEST = "WEST";
}
