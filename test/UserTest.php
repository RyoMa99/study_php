<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    protected $user;
    protected function setUp(): void
    {
        $this->user = new User();
    }
    protected function tearDown(): void
    {
        unset($this->user);
    }
    public static function setUpBeforeClass(): void
    {
    }
    public static function tearDownAfterClass(): void
    {
    }
    /** testで始まるメソッドはテストケース */
    public function testReaturnsFullName()
    {
        $this->user->first_name = "Teresa";
        $this->user->last_name = "Green";
        $this->assertSame('Teresa Green', $this->user->getFullName());
    }
}
