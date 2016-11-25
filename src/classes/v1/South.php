<?php

namespace classes\v1;

class South extends Direction {
    function opposite(): Direction {
        return Direction::NORTH();
    }
}