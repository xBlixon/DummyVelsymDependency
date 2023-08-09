<?php

namespace Velsym\DummyDependency;

class Dummy implements DummyInterface
{
    private int $incrementer;
    private int $number = 0;

    private string $text;

    public function __construct(int $incrementer, string $text)
    {
        $this->text = $text;
        $this->incrementer = $incrementer;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function increment(): int
    {
        return $this->number += $this->incrementer;
    }

    public function getIncrementer(): int
    {
        return $this->incrementer;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }
}
