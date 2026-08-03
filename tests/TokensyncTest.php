<?php
/**
 * Tests for TokenSync
 */

use PHPUnit\Framework\TestCase;
use Tokensync\Tokensync;

class TokensyncTest extends TestCase {
    private Tokensync $instance;

    protected function setUp(): void {
        $this->instance = new Tokensync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokensync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
