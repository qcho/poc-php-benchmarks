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
class Bench {
    public function benchPhpConstants() {
        $this->example(Direction::EAST);
    }

    function example(string $d) {
        $v1 = $d == Direction::EAST;
        $v2 = $d == Direction::WEST;
        $v3 = $d === Direction::EAST;
        $v4 = $d === Direction::WEST;
    }
}
