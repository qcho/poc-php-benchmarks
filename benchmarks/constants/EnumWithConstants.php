<?php

namespace constants;

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
