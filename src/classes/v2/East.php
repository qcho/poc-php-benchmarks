<?php

namespace classes\v2;

class East extends Direction {
    function opposite(): Direction {
        return Direction::WEST();
    }
}