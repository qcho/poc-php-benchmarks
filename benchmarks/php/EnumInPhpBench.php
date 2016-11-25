<?php

namespace php;

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
class Bench {
    public function benchPhpCodedEnum() {
        $this->example(Direction::EAST());
    }

    function example(Direction $d) {
        $v1 = $d == Direction::EAST();
        $v2 = $d == Direction::WEST();
        $v3 = $d === Direction::EAST();
        $v4 = $d === Direction::WEST();
    }
}
