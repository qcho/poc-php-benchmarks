<?php

namespace classes\v2;

class North extends Direction {
    function opposite(): Direction {
        return Direction::SOUTH();
    }
}