<?php

namespace Pabisch\Balls;
interface BallInterface
{
    public function getVolume() : float;

    public function __toString() : string;
}