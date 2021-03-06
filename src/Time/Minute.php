<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Time;

class Minute extends AbstractTime
{
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'm';
    }
}
