<?php

declare(strict_types = 1);

namespace ExampleAppTest;

use ExampleApp\ExampleGreeter;
use PHPUnit\Framework\TestCase;

final class ExampleGreeterTest extends TestCase
{
    /** @var ExampleGreeter */
    private $greeter;

    /** @var string */
    private $greeting;

    protected function tearDown()
    {
        parent::tearDown();

        $this->greeter = null;
        $this->greeting = null;
    }

    /** @test */
    public function testShouldSayHelloWhenGreeting()
    {
        $this->givenAGreeter();

        $this->whenItGreets();

        $this->thenItShouldSayCodelyTv();
    }

    private function givenAGreeter()
    {
        $this->greeter = new ExampleGreeter("Name");
    }

    private function whenItGreets()
    {
        $this->greeting = $this->greeter->greet();
    }

    private function thenItShouldSayCodelyTv()
    {
        $this->assertEquals("Hello world, Name!", $this->greeting);
    }
}
