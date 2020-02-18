<?php

declare(strict_types = 1);

namespace ExampleApp;

final class ExampleGreeter
{
    /** string */
    private const GREETING = "Hello world, %s!";

    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function greet(): string
    {
        return sprintf(self::GREETING, $this->name());
    }
}
