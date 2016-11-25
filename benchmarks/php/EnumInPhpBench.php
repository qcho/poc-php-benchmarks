<?php

namespace php;

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
