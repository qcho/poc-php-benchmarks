<?php

namespace classes\v1;

class North extends Direction {
    function opposite(): Direction {
        return Direction::SOUTH();
    }
}