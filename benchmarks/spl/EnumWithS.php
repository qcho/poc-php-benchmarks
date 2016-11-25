<?php

namespace spl;
use PhpBench\Benchmark\Metadata\Annotations\Skip;

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
 * @Skip() because Spl doesn't work with php7
 */
class Bench {
    public function benchSplEnum() {
        $this->example(new Direction(Direction::EAST));
    }

    function example(Direction $d) {
        $v1 = $d == Direction::EAST;
        $v2 = $d == Direction::WEST;
        $v3 = $d === Direction::EAST;
        $v4 = $d === Direction::WEST;
    }
}
