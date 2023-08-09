<?php

namespace Velsym\DummyDependency;

interface DummyInterface
{
    public function __construct(int $incrementer, string $text);

    public function getText(): string;

    public function increment(): int;

    public function getIncrementer(): int;

    public function getNumber(): int;

    public function setNumber(int $number): void;
}