<?php
namespace Tests;

class BattleSimulatorTest extends \PHPUnit\Framework\TestCase
{
    public function test_simulate()
    {
        $sim = new \App\BattleSimulator();
        $result = $sim->simulate();
        $this->assertStringStartsWith("iain", $result->getWinner());
    }
}