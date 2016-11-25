<?php

namespace constants;

/**
 * CONSTANTS
 *  PROS:
 *      + builtin to php.
 *      + easy to implement. just empty class with constants.
 *      + easy to use. we (and IDEs) know constants.
 *      + best performance.
 *      + no initialization needed.
 *  CONS:
 *      - can't TypeHint. Checks should be done manually.
 *      - only scalar values available.
 *      - can't iterate over possible values.
 *          - you can code it yourself repeating code.
 *          - Reflection + Memoization. could work but what about performance?
 *      - cannot add custom behaviour
 */
abstract class Direction {
    const NORTH = "NORTH";
    const EAST = "EAST";
    const SOUTH = "SOUTH";
    const WEST = "WEST";

    const DEFAULT = self::NORTH;
}
