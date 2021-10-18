<?php

use PHPUnit\Framework\TestCase;
use AJSDev\Something;

/**
 * @coversDefaultClass \AJSDev\Something
 */
class SomethingTest extends TestCase {
	/**
	 * @test
	 * @group weird
	 * @covers ::weird()
	 */
	public function should_equal_true() {
		$this->assertTrue(Something::weird());
	}

	/**
	 * @test
	 * @group weird
	 * @covers ::weird()
	 */
	public function should_equal_true_another() {
		$this->assertTrue(Something::weird());
	}

	/**
	 * @test
	 * @group weird
	 * @covers ::weird()
	 */
	public function should_equal_true_another_one() {
		$this->assertTrue(Something::weird());
	}

	/**
	 * @test
	 * @group weird
	 * @covers ::weird()
	 */
	public function should_equal_true_one_more() {
		$this->assertTrue(Something::weird());
	}
}
