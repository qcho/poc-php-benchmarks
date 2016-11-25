<?php

namespace classes\v1;

class West extends Direction {
    function opposite(): Direction {
        return Direction::EAST();
    }
}