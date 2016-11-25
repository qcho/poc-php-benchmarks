<?php

namespace spl;
use PhpBench\Benchmark\Metadata\Annotations\Skip;

/**
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
