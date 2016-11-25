<?php

namespace classes;

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
 *      - no easy default value.
 *      - no easy iteration over all possible extensions.
 *      - you need to call getInstance. abbreviated with `X::i();`
 */
class Bench {
    public function benchPhpClassesEnum() {
        $this->example(Direction::EAST());
    }

    public function benchPhpClassesEnumV2() {
        $this->example2(Direction2::EAST());
    }

    function example(Direction $d) {
        $v1 = $d == Direction::EAST();
        $v2 = $d == Direction::WEST();
        $v3 = $d === Direction::EAST();
        $v4 = $d === Direction::WEST();
    }

    function example2(Direction2 $d) {
        $v1 = $d == Direction2::EAST();
        $v2 = $d == Direction2::WEST();
        $v3 = $d === Direction2::EAST();
        $v4 = $d === Direction2::WEST();
    }
}
