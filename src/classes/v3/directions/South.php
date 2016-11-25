<?php

namespace classes\v3\directions;

class South extends Direction {
    function opposite(): Direction {
        return Direction::NORTH();
    }
}