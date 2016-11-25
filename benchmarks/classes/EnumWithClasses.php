<?php

namespace classes;

class Bench {
    public function benchPhpClassesEnum() {
        $d = v1\Direction::EAST();
        $v1 = $d == v1\Direction::EAST();
        $v2 = $d == v1\Direction::WEST();
        $v3 = $d === v1\Direction::EAST();
        $v4 = $d === v1\Direction::WEST();
    }

    public function benchPhpClassesEnumV2() {
        $d = v2\Direction::DEFAULT();
        $v1 = $d == v2\Direction::EAST();
        $v2 = $d == v2\Direction::WEST();
        $v3 = $d === v2\Direction::EAST();
        $v4 = $d === v2\Direction::WEST();
    }

    public function benchPhpClassesEnumV3Directions() {
        $d = v3\directions\Direction::DEFAULT();
        $v1 = $d == v3\directions\Direction::NORTH();
        $v2 = $d == v3\directions\Direction::WEST();
        $v3 = $d === v3\directions\Direction::NORTH();
        $v4 = $d === v3\directions\Direction::WEST();
    }

    public function benchPhpClassesEnumV3Days() {
        $d = v3\days\Day::DEFAULT();
        $v1 = $d == v3\days\Day::SUNDAY();
        $v2 = $d == v3\days\Day::WEDNESDAY();
        $v3 = $d === v3\days\Day::SUNDAY();
        $v4 = $d === v3\days\Day::WEDNESDAY();
    }

    public function benchPhpClassesEnumV4Directions() {
        $d = v4\directions\Direction::DEFAULT();
        $v1 = $d == v4\directions\Direction::NORTH();
        $v2 = $d == v4\directions\Direction::WEST();
        $v3 = $d === v4\directions\Direction::NORTH();
        $v4 = $d === v4\directions\Direction::WEST();
    }

    public function benchPhpClassesEnumV4Days() {
        $d = v4\days\Day::DEFAULT();
        $v1 = $d == v4\days\Day::SUNDAY();
        $v2 = $d == v4\days\Day::WEDNESDAY();
        $v3 = $d === v4\days\Day::SUNDAY();
        $v4 = $d === v4\days\Day::WEDNESDAY();
    }
}
