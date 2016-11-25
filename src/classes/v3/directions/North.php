<?php

namespace classes\v3\directions;

class North extends Direction {
    function opposite(): Direction {
        return Direction::SOUTH();
    }
}