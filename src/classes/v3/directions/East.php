<?php

namespace classes\v3\directions;

class East extends Direction {
    function opposite(): Direction {
        return Direction::WEST();
    }
}