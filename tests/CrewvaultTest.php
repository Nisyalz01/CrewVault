<?php
/**
 * Tests for CrewVault
 */

use PHPUnit\Framework\TestCase;
use Crewvault\Crewvault;

class CrewvaultTest extends TestCase {
    private Crewvault $instance;

    protected function setUp(): void {
        $this->instance = new Crewvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
