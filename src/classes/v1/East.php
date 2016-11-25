<?php

namespace classes\v1;

class East extends Direction {
    function opposite(): Direction {
        return Direction::WEST();
    }
}