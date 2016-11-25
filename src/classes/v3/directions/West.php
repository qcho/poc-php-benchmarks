<?php

namespace classes\v3\directions;

class West extends Direction {
    function opposite(): Direction {
        return Direction::EAST();
    }
}