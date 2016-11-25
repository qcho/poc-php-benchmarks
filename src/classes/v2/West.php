<?php

namespace classes\v2;

class West extends Direction {
    function opposite(): Direction {
        return Direction::EAST();
    }
}