<?php

namespace classes\v2;

class South extends Direction {
    function opposite(): Direction {
        return Direction::NORTH();
    }
}